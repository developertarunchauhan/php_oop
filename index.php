<?php
require_once 'Database/Connection.php';
require_once 'Helper/Encrypt.php';
require_once 'Helper/EncryptPassword.php';
require_once 'Model/User.php';



use Helper\Hash as Hash;
use Model\User as User;
use Helper\Password\Hash as HashPassword;

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP OOP CONCEPTS</title>
</head>

<body>
    <!-- Main Navigation Begin -->
    <?php include_once 'partials/navbar.php'; ?>
    <!-- Main Navigation Ends -->
    <!-- Main Container Begin-->
    <div class="container-fluid">
        <div class="container border rounded p-3 my-3">
            <?php
            $db = new Connection();

            $db->create('users', [
                'name' => 'Vikas Kumar',
                'email' => 'vikas@gmail.com',
                'password' => 'vikas@123',
                'role' => 'admin'
            ]);
            print_r($db->getResult());
            ?>
        </div>
        <div class="container border rounded border my-5 p-3">
            <?php
            /**
             * 
             * PHP OOP : OBJECT ORIENTED PROGRAMMING : It is a pattren/method of programming in PHP.
             * 
             * Two type of programming methds : 
             * 1. Procedural / core PHP : Use for small & simple projects.
             * 2. Object Oriented Programming  : 
             * 
             * Advantages of OOP : 
             * 1. Modular & Reuseable
             * 2. Well Organised Code
             * 3. Easier to Debug
             * 4. Use for Medium & Large projects
             * 
             * How we work in OOP ?
             * 1. Class : blueprint
             *      Class has Properties & Methods.
             * 
             * 2. Object : drived from class
             *      We can only use Properties & Methods that are declared in its Class.
             * 
             *      
             * 
             * 
             * 
             */

            // declaring class

            class ClassCalc
            {
                // declaring properties

                public $a;
                public $b;
                public $c;

                /**
                 * Access modifier : controls how properties & methods can be accesed
                 * 
                 * public : can be accessess from anywhere
                 * 
                 * protected : can be accessed with in the class & other classes derived form this class.
                 * 
                 * private: can be accessed with in the class only.
                 */


                // declaring properties
                public function sum()
                {
                    $this->c = $this->a + $this->b;
                    // return data
                    return $this->c;
                }

                public function sub()
                {
                    $this->c = $this->a - $this->b;
                    return $this->c;
                }
            }


            // creating/driving object from a class
            $objCalc = new ClassCalc();

            $objCalc->a = 10;
            $objCalc->b = 20;

            echo $objCalc->sum();
            echo "<br>";
            echo $objCalc->sub();

            /**
             * Constructor : Initialize properties of object when object is created from the class 
             */

            // declaring class with constructor
            class ClassConstructor
            {
                // definig properties with default values

                public $name = "no name";
                public $age = 0;
                public $job = 'N/A';

                // declaring a constructor 
                public function __construct($name = "NONAME", $age = 0, $job = "N/A") // setting default values for variables
                {
                    $this->name = $name;
                    $this->age = $age;
                    $this->job = $job;
                }

                public function info()
                {
                    echo "<br>Hello , I am " . $this->name . " , age " . $this->age . " and I am a " . $this->job . "<br>";
                }
            }

            // creating object
            $objConstructor = new ClassConstructor("Tarun Chauhan", 30, "Software Developer");

            // calling property
            $objConstructor->info();

            /**
             * 
             * Inheritance  : Driving a class from another class with all of its public & protected propertes & methods.
             * 
             */

            // Basic inheritance
            // drived class form classConstructr

            class ClassDrivedOne extends ClassConstructor
            {
                public $salary = 50000;

                public function info()
                {
                    echo "<br>Hello , I am " . $this->name . " , age " . $this->age . " and I am a " . $this->job . "with a monthly salary of " . $this->salary . "<br>";
                }
            }
            // object derived from extended class

            $objDrivedOne = new classDrivedOne("Vikas Kumar", 34, "PHP Developer");

            $objDrivedOne->info();

            // inheritance with access modifier

            // Overridding

            class ClassOne
            {
                public $name = ''; // public property can be accessed outside of class
                protected $location = ''; // can't be override from outside
                private $state = ''; // can only be accessed inside this class

                public function __construct($msg = 'Hello')
                {
                    /**
                     * User may or may not send the msg
                     */
                    $this->name = $msg;
                    $this->location = "Shimla"; // value is assigned
                    $this->state = "Himachal Pradesh";
                }

                public function sayHello()
                {
                    echo $this->name . "<br>";
                    echo "Location :" . $this->location . "<br>";
                    echo "State : " . $this->state . "<br>";
                }
            }
            // passign the value
            $objClassOne = new ClassOne("Original Message Passed while creating Object");
            $objClassOne->sayHello();
            //$objClassOne->state; // cannot access private property

            $objClassOne->name = "Overriding the original message";

            //$objClassOne->location = "Chandigarh"; // showing error because the property is private ans can only be accessed inside a the class.

            echo $objClassOne->name . "<br>";

            class ClassTwo extends ClassOne
            {
                public function getLocation()
                {
                    $this->location = 'Chandigarh'; // accessing a proteted property from parent class
                    echo $this->location . "<br>";
                }
            }

            $objClassTwo = new ClassTwo();


            $objClassTwo->getLocation();

            /**
             * Overriding Methods & Properties
             */

            class ClassThree
            {
                public $msg = "Message from Base Class";
                public function showMsg()
                {
                    echo $this->msg . "<br>";
                }
            }
            class ClassFour extends ClassThree
            {
                public $msg = "Message from Derived Class"; // over ridding original messages from base class

                public function showMsg()
                {
                    echo "METHOD OVERRIDING";
                }
            }

            $objClassThree = new ClassThree();
            echo "Base Class :" . $objClassThree->msg . "<br>";

            $objClassFour = new ClassFour();
            //$objClassFour->showMsg();
            $objClassFour->showMsg();

            /**
             * ABSTRACT CLASS : A class whose object can't be created.
             * Properties & methods of a Abstract class can only be accessed inside a derived class.
             * 1. Atleast one abstract method is required.
             * 2. 
             */

            abstract class ClassFive
            {
                protected $name = '';

                public function __construct($n = 'Enter Name')
                {
                    $this->name = $n;
                }
                /**
                 * Abstract function is declared but not implemented/statement is not defined
                 * We need to create a derived class in order to add functionality to the function.
                 */
                abstract protected function show();
            }
            /**
             * Deriving class from parent class
             */

            class ClassSix extends ClassFive
            {
                /**
                 * Implementing abstract method from abstract parent class
                 */
                public function show()
                {
                    echo "<br>" . $this->name . "<br>";
                }
            }

            $objClassSix = new ClassSix();
            $objClassSix->show();

            /**
             * Interfaces : Driving child class from multiple parent class
             * Properties can't be created.
             * Methods can be declared but its statement will be declared in derived class
             * No object can be declared directly.
             */


            interface ClassSeven
            {
                function interSevenOne($msg);
            }

            interface ClassEight
            {
                function interEightOne($msg);
                function interEightTwo($msg);
            }

            class ClassNine implements ClassSeven, ClassEight
            {
                public function interSevenOne($msg)
                {
                    echo "Hello ," . $msg . "<br>";
                }
                public function interEightOne($msg)
                {
                    echo "Hello, " . $msg . "<br>";
                }
                public function interEightTwo($msg)
                {
                    echo "Hello," . $msg . "<br>";
                }
            }

            /**
             * Static Members : called directly without creating object of class
             * instead of '$this->' use 'self::' for calling static function or static property within same class
             * if all functions and property are static inside a class, the class automatically becomes statuc
             */

            class ClassTen
            {
                public static $success = "Data Saved Successfully<br>";

                public static function show()
                {
                    echo self::$success; // using a static property from same class
                }
            }

            class ClassEleven extends ClassTen // extending a static class or class with static members
            {
                public function success()
                {
                    echo parent::$success; // usong a static property from parent class
                }
            }

            echo ClassTen::$success; // calling a static property from a class
            ClassTen::show(); // calling a static function a class

            $objClassEleven = new ClassEleven();

            $objClassEleven->success();

            /**
             * Late Static Binding :  
             */

            class ClassTwelve
            {
                protected static $msg = "Data Stored <br>";
                public function show()
                {
                    echo self::$msg; // self -> displays $msg from the parent class from which it is called
                    echo static::$msg; // static -> disaplys $msg from the derived class from whose object this function is called
                }
            }
            class ClassThirteen extends ClassTwelve
            {
                protected static $msg = "New Message<br>"; // overridding the static property from base class 
            }

            $objClassThirteen = new ClassThirteen();
            $objClassThirteen->show();

            /**
             * Traits : traits are used to declare methods which can be used accross multiple classes. It solves the probelem of limitation of single class inheritance in php
             */

            trait TraitOne
            {
                public function uploadImage()
                {
                    echo "Image Upload<br>";
                }
                public function successMsg() // same function name in 1 and 2
                {
                    echo "File upload Success<br>";
                }
            }

            trait TraitTwo
            {
                public function uploadPdf()
                {
                    echo "PDF Upload<br>";
                }
                private function uploadXls() // private function
                {
                    echo "XLS Upload<br>";
                }
                public function successMsg() // same function name in 1 and 2 trait
                {
                    echo "UPLOAD SUCCESSFULL<br>";
                }
            }

            class ClassFourteen
            {
                use TraitOne;

                public function upload()
                {
                    $this->uploadImage();
                }
            }

            class ClassFifteen
            {
                use TraitOne, TraitTwo {
                    TraitOne::successMsg insteadof TraitTwo; // resolving same function name for the trait
                    TraitTwo::uploadXls as public newUploadXls; // using a private trait function as public and giving new name(Optional)
                }
                public function file()
                {
                    $this->uploadImage();
                }
            }

            $objClassFourteen = new ClassFourteen();
            $objClassFourteen->upload();

            $objClassFifteen = new ClassFifteen();
            $objClassFifteen->file();
            $objClassFifteen->uploadPdf();
            $objClassFifteen->newUploadXls();


            /**
             * Method Overriding in Traits : 
             */
            class ClassSixteen
            {
                public function uploadXls() // this will has heighest priority
                {
                    echo "File Upload from Sixteen<br>";
                }
            }
            $objClassSixteen = new ClassSixteen();
            $objClassSixteen->uploadXls();

            /**
             * Trait conflicts
             */

            class ClassSeventeen
            {
                use TraitOne, TraitTwo {
                    TraitTwo::successMsg insteadof TraitOne;
                    TraitOne::successMsg as success_msg;
                }
            }

            $objClassSeventeen = new ClassSeventeen();

            $objClassSeventeen->successMsg();
            $objClassSeventeen->success_msg();

            /**
             * Type Hinting : A concept the provides hints to function for the expected data type of argument
             */

            function increment($amount) // data input type will not be checked and function will start execting 
            {
                echo $amount + (10 / 100 * $amount) . "<br>";
            }
            function incrementOne(int $amount) // checks for input data type and doens't run function if data type is not matched
            {
                echo "New Salary :" . $amount + (10 / 100 * $amount) . "<br>";
            }


            increment(25000); // int value
            increment(25000.00); // float value
            //increment("ABC"); // string value

            incrementOne(25000); // int value
            incrementOne(25000.00); // float value
            //incrementOne("ABC"); // string value

            /**
             * Type Hinting example + passing an object to function / object data type
             */

            class ClassEighteen
            {
                public function hello()
                {
                    echo "Hello";
                }
            }

            class ClassNineteen
            {
                public function bye()
                {
                    echo "Bye";
                }
            }

            function callFunction(ClassEighteen $obj) // input type must be of class ClassEighteen or it will  throught an error
            {
                $obj->hello();
            }


            $objClassEighteen = new ClassEighteen();

            $objClassNineteen = new ClassNineteen();

            callFunction($objClassEighteen); // runs successfully
            //callFunction($objClassNineteen); // return error becuase data type is not ClassEighteen



            /**
             * Type Hinting example 
             */


            class School
            {
                public function getName(Student $names)
                {
                    foreach ($names->list() as $name) {
                        echo "Name : " . $name . "<br>";
                    }
                }
            }
            class Student
            {
                public function list()
                {
                    return ["Tarun", "Hope", "Yagya", "Priya", "Anirudh"];
                }
            }

            $objStudent = new Student();

            $objSchool = new School();

            $objSchool->getName($objStudent);


            /**
             * Namespace : Solves the problme to use same classes with same name
             * It also helps in organizing or grouping the classes togather which performs the similar type of tasks.
             * 
             */


            echo Hash::make("Tarun Chauhan");
            echo "<br>";
            echo HashPassword::make(Hash::make("Tarun Chauhan"));


            /**
             * Mehod Chaining : 
             */
            echo "<br>";
            echo User::all(); // select * from 'users'
            echo "<br>";
            echo User::where('location', 'shimla');; // Select * from 'users' where 'location' = 'Shimla';
            echo "<br>";
            echo User::findOrFail(23); // Select * from 'users' where 'id' = 23;
            echo "<br>";

            $objUser = new User();
            $objUser->one()->two()->three();

            /**
             * PHP Magic Methods : Magic methods in PHP are special methods that are aimed to perform certain tasks. These methods are named with double underscore (__) as prefix.
             * 
             * List of magic methods :  
             * 1. __construct() : called at the begining of the class
             * 2. __destruct() : called when entrie execution is end
             * 3. __call() : this method is called when we try to invoke private ,  protected or non-available method
             * 4. __callStatic() : (use with static keyword )this method is called when we try to invoke static private ,  protected or non-available method
             * 5. __get() : this method is called when we try to read data from protected or private properties
             * 6. __set() : this method is called when we try to write data to a protected or private property  
             * 7. __isset() : this method is used to check if value for a varibale is set or not.
             * 8. __unset()
             * 9. __sleep()
             * 10. __wakeup()
             * 11. __serialize()
             * 12. __unserialize()
             * 13. __toString()
             * 14. __invoke()
             * 15. __set_state()
             * 16. __clone()
             * 17. __debuginfo()
             * 
             * 
             * All magic functions except __construct(),__desruct() and __clone() must be declared as public.
             * 
             */



            /**
             * Conditional Functions : (true / false) ->
             * Types of : 
             * 1. class_exists()
             * 2. interface_exists()
             * 3. method_exists()
             * 4. trait_exists()
             * 5. property_exists()
             * 6. is_a()
             * 7. is_subclass_of()
             *  
             */


            /**
             * Get function :
             * 
             */
            /**
             * PHP & MySQL Programming Methods
             * 
             * 1. MySQLi Procedural : For simple websites
             * 2. MySQLi Object-oriented : for OOp websites
             * 3. PDO
             * 
             */
            ?>


        </div>


        <div class="row d-flex justify-content-center mt-4">
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-body">HELLO</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container Ends-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <!-- Custom Script -->
    <script>
        // Initializing jQuery
        // Function will start working before loading of page / use it in footer only
        $(function() {
            // 
        });


        // check if entire document is readythe start working / can be used in head because it will wait for page toload completly
        // (SELECTOR)  (METHOD)
        $(document).ready(function() {
            console.log("ITS WORKING");
            var a = $(".card-body").html();

            console.log(a);
        });
    </script>
</body>

</html>
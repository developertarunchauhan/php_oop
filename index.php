<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery -->
    <!--<script src="script/jQuery.js"></script>-->


    <title>PHP OOP CONCEPTS</title>
</head>

<body>
    <!-- Main Navigation Begin -->
    <?php include('partials/navbar.php'); ?>
    <!-- Main Navigation Ends -->
    <!-- Main Container Begin-->
    <div class="container-fluid">
        <div class="container border rounded shadow my-5 p-3">
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

            class classCalc
            {
                // declaring properties

                public $a, $b, $c;

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
            $objCalc = new classCalc();

            $objCalc->a = 10;
            $objCalc->b = 20;

            echo $objCalc->sum();
            echo "<br>";
            echo $objCalc->sub();

            /**
             * Constructor : Initialize propertis of object when object is created from the class 
             */

            // declaring class with constructor
            class classConstructor
            {
                // definig properties with default values

                public $name = "no name";
                public $age = 0;
                public $job = 'N/A';

                // declaring a constructor 
                function __construct($name = "NONAME", $age = 0, $job = "N/A") // setting default values for variables
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
            $objConstructor = new classConstructor("Tarun Chauhan", 30, "Software Developer");

            // calling property
            $objConstructor->info();

            /**
             * 
             * Inheritance  : Driving a class from another class with all of its public & protected propertes & methods.
             * 
             */

            // Basic inheritance
            // drived class form classConstructr

            class classDrivedOne extends classConstructor
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
        // it will start working before loading of page / use it in footer only
        $(function() {
            // 
        });


        // check if entire document is readythe start working / can be used in head because it will wait for page toload completly
        $(document).ready(function() {
            console.log("ITS WORKING");
            var a = $(".card-body").html();

            console.log(a);
        });
    </script>
</body>

</html>
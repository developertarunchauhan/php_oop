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
    <div class="container py-3">
        <div class="card shadow-sm mb-3">
            <div class="card-header">
                jQuery is Awesome
            </div>
            <div class="card-body">
                jQuery is Best thing every heppened to JavaScript.
            </div>
        </div>
        <div class="row d-flex justify-content-center border rounded mb-3">
            <div class="col-sm-10">
                <p id="some-text">
                    This is some data
                </p>
                <hr>
                <ol class="list">
                    <li>ipsum Lorem ipsum dolor ipsam?</li>
                    <li>Iusto fugiat itaque molestiae nam enim</li>
                    <li>adipisicing elit. dicta nesciunt autem</li>
                    <li>sed atque nemo, aspernatur repellat</li>
                    <li>sit amet consectetur rerum odit</li>
                    <li>ut omnis nobis maxime, eum</li>
                    <li>atque nemo, aspernatur</li>
                    <li>fugiat itaque molestiae nam</li>
                    <li>atque nemo, aspernatur </li>
                    <li>atque nemo, asperna</li>
                </ol>
            </div>
        </div>
        <div class="card mouse-events mb-3">
            <div class="card-header">
                jQuery Mouse Events
            </div>
            <div class="card-body">
                <ol>
                    <li>click()</li>
                    <li>dbclick()</li>
                    <li>contextmenu()</li>
                    <li>mouseenter()</li>
                    <li>mouseleave()</li>
                </ol>
            </div>
        </div>

        <div class="card keyboard-events mb-3">
            <div class="card-header">
                jQuery Keyboard Events
            </div>
            <div class="card-body">
                <ol>
                    <li>click()</li>
                    <li>dbclick()</li>
                    <li>contextmenu()</li>
                    <li>mouseenter()</li>
                    <li>mouseleave()</li>
                </ol>
            </div>
        </div>

        <div class="card form-box">
            <div class="card-header">
                jQuery Form Events
            </div>
            <div class="card-body">
                <form class="form-events" id="form-submit" action="#">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Color</label>
                        <select class="form-select" aria-label="color">
                            <option selected value="">Select Color</option>
                            <option value="red">Red</option>
                            <option value="blue">Blue</option>
                            <option value="green">Green</option>
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="is_active">
                        <label class="form-check-label" for="is_active">Is Active</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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
        /**
         * jQuery: A small JavaScript Library.
         * 
         * Benefits : 
         * 1. Short Selectors
         * 2. Variety of animations
         * 3. Easy DOM manipulation
         * 4. Easy CSS styling
         * 5. Easy DOM traversing
         * 6. Simple AJAX code
         * 
         * Why jQuery ?
         * 1. Browser independent
         * 2. Increased coding speed
         * 
         */

        // Initializing jQuery

        // Function will start working before loading entire page / use it in footer only
        $(function() {
            // 
        });


        // checks if entire document is ready then only start working / can be used in head because it will wait for page toload completly

        //SYNTEX :  $(SELECTOR).(METHOD)
        $(document).ready(function() {
            /**
             * Print to console
             */
            console.log("Hello jQuery!!!");

            /**
             * Getting data from a DOM element
             */

            var a = $('.card-body').html();
            let b = $('#some-text').html();


            console.log(a);
            console.log(b);

            /**
             * 
             * Advance selectors
             * 1. $('*') : Selecting everything for a page.
             * 2. $('ul li') : Selecting li(child) of ul(parent).
             * 3. $('.abc .xyz') : Selecting multiple classes.
             * 4. $('h1, div , p') : Selecting multiple type of elements.
             * 5. $('p:first') : Selecting the first P tag in the page.
             * 6. $('p:last') : Selecting the last P tag in the page.
             * 7. $('li:even') : Selecting the even postion 'li' in the page.
             * 8. $('li:odd') : Selecting the odd position 'li' in the page.
             * 
             * Many more...........
             * 
             */

            /**
             * Using CSS with jQuery
             * 
             * Syntex : 
             *   $('SELECTOR').css('PROPERTY NAME','VALUE');
             *   $('SELECTOR').css({'PROPERTY NAME':'VALUE','PROPERTY NAME' : 'VALUE',...});
             *      
             */
            // Changing text color
            $('.list').css('color', 'gray');
            $('.list').css('list-style', 'none');
            $('.list li').css('font-weight', 'bold').css('padding', '.5rem');
            $('.list li:even').css('background', 'gray').css('color', 'white');
            // Target a specific element [starts index from 0]
            $('.list li:eq(3)').css('color', 'red');
            $('.list li:gt(3)').css('text-transform', 'uppercase');
            $('.list li:lt(3)').css('font-size', '1.2rem');
            // Target all elements from a particular element
            $('.row *').css('border', '1px solid gray');



            /**
             * Mouse Events:
             * 1. click()
             * 2. dblclick()
             * 3. contextmenu()
             * 4. mouseenter()
             * 5. mouseleave()
             */

            $('.mouse-events div:first').click(function() {
                // Changing the background color & text-color on mouse click
                $('.mouse-events div:first').css('background', 'red').css('color', 'white').css('font-weight', 'bold');
            });
            $('.mouse-events div:last').dblclick(function() {
                // Changing the background color & text-color on mouse click
                $('.mouse-events div:last').css('background', 'green').css('color', 'white').css('font-weight', 'bold');
            });
            $('.mouse-events div:last').contextmenu(function() {
                // Changing the background color & text-color on mouse click
                $('.mouse-events div:last').css('background', 'blue').css('color', 'white').css('font-weight', 'bold');
            });
            $('.mouse-events div:first').mouseenter(function() {
                // Changing the background color & text-color on mouse click
                $('.mouse-events div:first').css('background', 'yellow').css('color', 'white').css('font-weight', 'bold');
            });
            $('.mouse-events div:first').mouseleave(function() {
                // Changing the background color & text-color on mouse click
                $('.mouse-events div:first').css('background', 'pink').css('color', 'white').css('font-weight', 'bold');
            });

            /**
             * 
             * Keyboard Events :
             * 1. keypress()
             * 2. keydown()
             * 3. keyup()
             *  
             * 
             * $(this) -> context
             */

            $('body').keydown(function() {
                $(this).css('background-color', 'orange');
            });
            $('body').keyup(function() {
                $(this).css('background-color', 'green');
            });
            /**
             * 
             * Form Events : 
             * 1. focus()
             * 2. blur()
             * 3. change() -> used with select element
             * 4. select()
             * 5. submit()
             * 
             * 
             */


            $('.form-events input').focus(function() {
                $(this).css('background-color', 'gray').css('color', 'white');
            });

            $('.form-events input').blur(function() {
                $(this).css('background-color', 'white').css('color', 'black');
            });

            // change() works only with 'select'
            $('.form-events select').change(function() {
                // Getting value of selected element
                let color = $('.form-events select').find(':selected').val();
                console.log(color ? color : 'white');
                // changing the box background-color to selected color
                $('.form-box').css('background-color', color ? color : 'white');
            });
            // select() works with input box : when we select the text inside the input box
            $('.form-events input').select(function() {
                $(this).css('background-color', 'pink').css('color', 'black');
            });
            // submit() -> when form is submitted
            $('#form-submit').submit(function() {
                alert("Button Submit");
            });

            /**
             * Windows Events : 
             * 
             * 1. resize()
             * 2. scroll()
             * 
             */

            /**
             * Get Methods : 
             * 1. text() : get all data excluding tags from given selector
             * 2. html() : get all data including tags from given selector
             * 3. attr() : get the attribute value if given selector
             * 4. val() : gets the value of given selector
             */

            /**
             * Set Methods : 
             * 1. text() : put text to a given selector
             * 2. html() : put html to a given selector
             * 3. attr() : set attribute to given selector $(SELECTOR).attr('class','btn, btn-primary');
             * 4. val() : set value to a given selector
             */

            /**
             * addClass() :  adding a new class to list of classes for a given selector
             * removeClass() : removing a existing class form a list fo classes for a given selector
             * toggleClass() : toggle classes for a given selector
             */

            /**
             * 
             * css() : Setting up inline style for a given selector
             * $('SELECTOR').css('PROPERTY NAME','VALUE');
             * $('SELECTOR').css({'PROPERTY NAME':'VALUE','PROPERTY NAME' : 'VALUE',...});
             *
             */

            /**
             * on() : Multiple events on same selector
             * off() : Removeing on events from a slector
             */


            $('.keyboard-events').on({
                click: function() {
                    console.log("CLICK");
                },
                mouseenter: function() {
                    console.log("MOUSEENTER");
                },
                mouseout: function() {
                    console.log("MOUSE OUT");
                }
            });
            $('.remove-on').click(function() {
                $('.keyboard-events').off('click mouseover mouseout');
            });

            /**
             * Append() :  adding a new html element to the ending of a given selector
             * Prepend() : adding a new html element to the top of a given selector
             */



        });
    </script>
</body>

</html>
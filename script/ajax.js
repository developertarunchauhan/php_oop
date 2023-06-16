// AJAX:
// A: Asynchronous
// J: JavaScript
// A: And
// X: XML

// Loads a particular section of a webpage without loading the entrire page.

// 1. Uses XMLHttpRequest object(xhr object).
// 2. Data can be traansfered in any format and protcol.


/**
 * Basic Syntex : 
 * 
 * $.ajax({
 *  url: "target_link.php",
 *  type: "POST",
 *  data: String/Array/Object(Form Data can be passed in these 3 forms)
 *  success: function(data){
 *          displaying success message
 * }
 * });
 */


/**
 * Getting data from database
 */

$(document).ready(function () {
    /**
     * Re-load data after button click
     */

    $('#load-data').click(function (e) {
        loadData();
    });

    /**
     * Load data after page is loaded
     */

    loadData();

    function loadData() {
        $.ajax({
            url: "load-data.php",
            type: "POST",
            success: function (data) {
                $('#data-table').html(data);
            }
        });
    }

    /**
    * Saving data to database
    */

    $('#save-data').click(function (e) {
        e.preventDefault();
        /**
         * Getting data from form
         */

        var first_name = $('first_name').val();
        var last_name = $('last_name').val();
        var email = $('email').val();
        var phone = $('phone').val();
        var company_name = $('company_name').val();
        var owner = $('owner').val();

        /**
         * Seeting up AJAX
         */

        $.ajax({
            url: "insert-data.php",
            type: "POST",
            // Sending data in the form of object
            data: {
                first_name: first_name,
                last_name: last_name,
                email: email,
                phone: phone,
                company_name: company_name,
                owner: owner
            },
            success: function (data) {
                // actions after data is saved
                loadData();
            }
        });
    });

});






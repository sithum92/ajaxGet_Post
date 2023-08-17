<?php
require '/xampp/htdocs/ajax/ajaxGet_Post/suggestions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            $("input").keyup(function() {
                //Key released on input element code execute
                var name = $("input").val();
                //get the value from input element and store
                $.post("suggestions.php", {
                    // send ajax post request
                    suggestion: name
                    //name value as parameter
                }, function(data, status) {
                    //responce received from "suggestion.php" execute the callback function
                    $("#test").html(data);
                    //set the received data to "test" element
                });
            });


            // //when document is fully loaded ,execute the following code
            // $("button").click(function() {
            //     //trigger on button click
            //     $.get("test.txt", function(data, status) {
            //         //Use jQuery's $.get() method to make an ajax GET request to "test.txt"
            //         $("#test").html(data);
            //         //set received data to ID "test" element
            //         alert(status);
            //         //Display an aleart
            //     })
            // });
        });
    </script>
    <title>Document</title>
</head>

<body>
    <input type="text" name="name">
    <!-- <button>Click me to get data!</button> -->
    <p id="test"></p>
</body>

</html>
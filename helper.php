<?php

class Helper {

    static public function header() {

        ?>

        <!doctype html>
            <html lang="en" class="h-100">
            <head>
                <!-- Required meta tags -->
                <link rel="stylesheet" href="style.css">
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="assets/css/bootstrap.min.css">
                <link rel="stylesheet" href="assets/css/style.css">
                <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

                <title>List of User</title>
            
            </head>

        <?php
    }

    
    static public function footer() {
        ?>

        <script src="assets/js/jquery-3.5.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.js"></script>

        </body>
        </html>

        <?php
    }
}


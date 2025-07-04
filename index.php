<?php


class Main {

    public function __construct() {
        $this->require_file();
        helper::header();
        $this->view();
        helper::footer();
    
    
        
    }

    public function view(){

        $this->table_header();
        $this->table_body();
    }


    public function table_body(){


        ?>
        <body>

            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Mimha Moni</td>
                    <td>Web Developer</td>
                    <td>017xxxxxxxx</td>
                    <td>Female</td>
                    <td><img src="https://via.placeholder.com/60" alt="Mimha's Photo"></td>
                    <td>
                        <a href="edit.php?id=1" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=1" class="btn btn-danger">Delete</a>
                        <a href="view.php?id=1" class="btn btn-info">View</a>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
                </tbody>
            </table>

        </body>
        <?php
            
    }



    public function table_header(){

        ?>
          <!DOCTYPE html>
          <html lang="en">
                <head>
                <meta charset="UTF-8">
                <h1 class="h1" style="text-align: center;">List of Users</h1>
                <div style="float: right;" class="actions-button">
                    <a href="create.php" class="primary">+ Add New User</a>
                </div>
            </div>>
                <title style="color: black;"></title>
                <style>
                    table {
                    width: 80%;
                    border-collapse: collapse;
                    margin: 50px auto;
                    }
                    th, td {
                    border: 1px solid #333;
                    padding: 20px;
                    text-align: center;
                    }
                    th {
                    background-color: #f2f2f2;
                    }
                    img {
                    width: 60px;
                    height: 60px;
                    object-fit: cover;
                    border-radius: 50%;
                    }

                    .primary {
                    background-color: #007bff;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 5px;
                    text-decoration: none;
                    }

                </style>
                </head>
       
        <?php
    }

    public function require_file(){

        require_once './helper.php';
        require_once './config.php';
    }


}

new Main();
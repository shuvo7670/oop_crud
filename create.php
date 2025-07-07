<?php

class Create{

    public function __construct() {
        $this->require_file();
        Helper::header();
        $this->view();
        Helper::footer();
    }

    public function require_file() {
        require_once './config.php';
        require_once './helper.php';
    }


    public function view() {

        ?>
        <body>
            <div class="container">
                <h1 class="h1" style="text-align: center;">Create New User</h1>
                <form action="store.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Create User</button>
                        <a href="index.php" class="button2">Back to List</a>

        <?php

    }


}

new Create();
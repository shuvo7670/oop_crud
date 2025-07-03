<?php

class Main {
    public function __construct() {
        $this->require_files();
        helper::header();
        $this->view();
        helper::footer();

    }

    public function view() {

        ?>

        <h3> List of User</h3>

        <?php
    }


    public function table_body() {

        ?>
        



        <?php
    }

    public function require_files(){
        require_once './helper.php';
    }

}

new Main();
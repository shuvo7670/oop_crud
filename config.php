<?php 

class Config {
    static public function connect()
    {
        // mysql connection
        $servername = 'localhost';
        $username   = "root";
        $password   = "";
        $dbname     = 'user_bd';
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        return $connection;
    }

    static function store_data($name, $designation, $phone_number, $gender, $image)
    {
        $connection = self::connect();
        $sql = "INSERT INTO `user_table`(`name`, `designation`, `phone_number`, `gender`, `image`) VALUES ('{$name}','{$designation}','{$phone_number}','{$gender}','{$image}')";
        if( $connection->query($sql) === true ) {
            header('Location: index.php');
        }else {
            print_r( $connection->error );
            die();
        }
    }

    static function update_data($id, $name, $designation, $phone_number, $gender, $image)
    {
        $connection = self::connect();
        $sql = "UPDATE `user_table` SET `name`='{$name}',`designation`='{$designation}',`phone_number`='{$phone_number}',`gender`='{$gender}',`image`='{$image}' WHERE id={$id}";
        if( $connection->query($sql) === true ) {
            header('Location: index.php');
        }else {
            print_r( $connection->error );
            die();
        }
    }

    static function delete_data($id)
    {
        $connection = self::connect();
        $sql = "DELETE FROM `user_table` WHERE id={$id}";
        if( $connection->query($sql) === true ) {
            header('Location: index.php');          
        }else {
            print_r( $connection->error );
            die();
        }

        

}
<?php
class Config {

    static public function connect() {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_bd";
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        return $connection;
    }

    static function store_user($name, $designation, $phone_number, $gender, $image) {
        // $connection = self::connect();
        require_once './vendor/autoload.php';
        $pdo = new \PDO('mysql:host=localhost;dbname=user_bd', 'root', '', [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ]);
        $pdo->exec("set names utf8");
        // Set as default for all query instances
        \HemiFrame\Lib\SQLBuilder\Query::$global['pdo'] = $pdo;
        $query = new \HemiFrame\Lib\SQLBuilder\Query();







        $query->insertInto("user_table")->set([
            "name"         => $name,
            "designation"  => $designation,
            "phone_number" => $phone_number,
            "gender_id"    => $gender,
            "image"        => $image,
        ]);
        $query->execute();


        
    }

    static public function add_user($gender_name) {

        $connection = self::connect();
        $sql = "INSERT INTO 'gender'('gender_name') VALUES ('{$gender_name}')";
        if( $connection->query($sql)=== TRUE) {
            header("Location: gender.php");
        } else {
            print_r( $connection->error);
            die();
        }

    }


    static public function get_all_users() {

        $connection = self::connect();
        $sql = "SELECT * FROM 'gender'";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }


    static public function get_user_by_id($id) {

        $connection = self::connect();
        $sql = "SELECT * FROM 'gender' WHERE 'id' = {$id}";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }


    static public function update_user($id, $gender_name)
    {

        $connection = self::connect();
        $sql = "UPDATE 'genders' SET 'genter_name' = '{$gender_name}' WHERE 'id' = '{$id}'";
        if ($connection->query($sql) === TRUE) {
            header('location: gender.php');
        } else {
            print_r($connection->error);
            die();
        }

    }


    static public function delete_user($id) {

            $connection = self::connect();
            $sql = "DELETE FROM 'genders' WHERE 'id' = '{$id}'";
            if ($connection->query($sql) === TRUE) {
                header('location: gender.php');
            } else {
                print_r($connection->error);
                die();
            }

    }

}

new Config();
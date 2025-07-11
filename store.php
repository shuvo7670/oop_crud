<?php 

class Store {
    public function __construct() {
        $this->require_file();
        $data = $this->data();
        Config::store_user($data['name'], $data['designation'], $data['phone_number'], $data['gender_id'], $data['image']);
    }

    public function data()
    {
        $name         = $_POST['name'];
        $designation  = $_POST['designation'];
        $phone_number = $_POST['phone_number'];
        $gender       = $_POST['gender'];
        $image        = $this->upload_image($_FILES['image']);

        return [
            'name'         => $name,
            'designation'  => $designation,
            'phone_number' => $phone_number,
            'gender_id'    => $gender,
            'image'        => $image,
        ];
    }


    public function upload_image($image_array) 
    {
        $cover_image_url = $image_array;
        if( !empty( $cover_image_url ) ) {
            // Target directory to save uploaded images
            $targetDir = "uploads/";
            // Get original file name and create full path
            $fileName = basename($cover_image_url["name"]);
            $targetFile = $targetDir . $fileName;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if file is an actual image
            $check = getimagesize($cover_image_url["tmp_name"]);
            if ($check === false) {
                die("File is not an image.");
            }

            // Check file size (e.g. 5MB max)
            if ($cover_image_url["size"] > 5 * 1024 * 1024) {
                die("File is too large.");
            }

            // Allow certain file formats
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($imageFileType, $allowedTypes)) {
                die("Only JPG, JPEG, PNG & GIF files are allowed.");
            }
            
            // Move file to target directory
            if (move_uploaded_file($cover_image_url["tmp_name"], $targetFile)) {
                return $targetFile;
            }
            return;
        }
    }


    public function require_file() {
        require_once './config.php';
        require_once './helper.php';
    }
    
}
new Store();
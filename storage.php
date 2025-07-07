<?php 

class Storage {
    public function __construct() {
        $this->require_file();
        $data = $this->data();
        config::user_bd($data['name'], $data['designation'], $data['phone_number'], $data['gender_id'])
        
    }

    
}
new Storage();
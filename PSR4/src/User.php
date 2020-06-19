<?php
    namespace Statics;

    // การทำ OOP Class User
    class User {

        // properties (variable) (คุณสมบัติ) = ตัวแปร ที่ทำงานได้มากกว่าตัวแปรปกติ 
        public $frist_name = '';
        public $last_name = '';
        public $email = '';

        // method (funtion)  = ส่วนของการกำหนดความสามารถของ class
        public function loginprocess(){
            echo $this->frist_name;
            echo $this->last_name;
            echo $this->email;
        }

    }
    
    
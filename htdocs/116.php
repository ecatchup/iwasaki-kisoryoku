<?php

    class status {
        public $name;
        public $gender;
        public $age;

        public function __construct()
        {
            $this->name = "yamada";
            $this->gender = "man";
            $this->age = 24;
        }

        function show() {
            echo $this->name;
        }
    }


    $user = new status();
    $user->show();
?>
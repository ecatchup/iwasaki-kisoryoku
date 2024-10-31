<?php
    class example {
        public $name;
        public $team ;
        public $position;

        public function __construct()
        {
            $this->name = "sakamoto";
            $this->team = "giants";
            $this->position = "short";
        }

        public function show(){
            echo "<h3>" . $this->name . "</h3>";
            echo "<p>" . $this->team . "</p>";
            echo "<p>" . $this->position . "</p>";
        }
        }
    

    $result = new example;
    $result->show();

?>
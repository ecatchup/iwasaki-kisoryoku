<?php
    class example{
        public $name;

        public function __construct($input)
        {
            $this->name = $input;
        }

        public function greet(){
            return "hello".$this->name;
        }
    }

    $example = new example("nakano");

    echo $example->greet();
?>
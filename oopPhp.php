<?php 

class Animal {
    protected $name;
    protected $fav_food;
    protected $sound;
    protected $id;

    public static $number_of_animal = 0;

    const PI = "3.14159";

    function getName() {
        return $this->name;
    }

    function __construct() {
        $this->id = rand(100, 10000);
        echo $this->id . " has been assigned<br>";
        Animal::$number_of_animal += 1;
    }

    public function __destruct() {
        echo $this->name . " is being destroyed<br>";
    }

    function __get($name) { 
        echo "Asked for " . $name . "<br>";
        return $this->name;
    }

    function __set($name, $val) {
        switch($name) {
            case "name":
                $this->name = $val;
                break;
            
            case "fav_food":
                $this->fav_food = $val;
                break;

            case "sound":
                $this->sound = $val;
                break;
            default:
                echo $name . " not found";
        }

        echo "Set " . $name . " to " . $val . "<br>";
    }

    function run() {
        echo $this->name . " runs<br>";
    }
}

$anim = new Animal();
$anim->__set("name", "tony");

?>
<?php
class RGB{
    //Properties Define
    private $color;
    private $red;
    private $green;
    private $blue;

    //Define Construct Function
    public function __construct($colorCode = ''){
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }
    
    //Define Getter function
    public function getColor(){
        return $this->color;
    }

    //Define Setter function
    public function setColor($colorCode){
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    //Define paerse color function
    private function parseColor(){
        if($this->color){
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
            echo "RGB({$this->red}, {$this->green}, {$this->blue})";
        }
    }
}

$color = new RGB("#b5a256");
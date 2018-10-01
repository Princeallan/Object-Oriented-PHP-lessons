
<?php
class Car
{    
    public function __construct($model_name)
    {

        $this->name =$model_name;

    }
}

$car = new Car("Chevy");

echo $car->name;


?>


<?php

class product
{
    public $name;
    protected $price;
    public $description;
    private $image;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function uploadImage(){
        return $this->image;
    }

    public function calcPrice(){
        return $this->price;
    }
}


class book extends product
{
    private $publisher = [];
    public $writer;
    public $color;
    public $supplier;

    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function setPublisher($publisherName)
    {
        $this->publisher[] = $publisherName;
    }
    public function choosePublisher($index) {
        return $this->publisher[$index] ?? "Publisher not found.";
    }
    public function showAllPublisher()
    {
        return implode(", ", $this->publisher);
    }

}  
class babyCar extends product
{
    public $age;
    public $weight;
    public $materials = [];
    public $specialTax;

    public function displayMaterials()
    {
        return "Materials: [" . implode(", ", $this->materials) . "]";
    }
    public function getFinalPrice(): int|float {
        return $this->price + $this->specialTax;
    }
}


$myBook = new Book("PHP");
$myBook->writer = "Ahmed";
$myBook->setPublisher("Islam");
$myBook->setPublisher("Ziad");
echo "Book: " . $myBook->name . "<br>";
echo "Publishers: " . $myBook->showAllPublisher() . "<br>";
echo "The Choosen publisher: " . $myBook->choosePublisher(1) . "<br>";

// var_dump($book1);

// ==============================================
echo  "========================================","<br>";
$baby_car1 = new BabyCar("Toy car");
$baby_car1->specialTax = 15;
$baby_car1->materials = ["Plastic", "Rubber", "Metal"];

echo "BabyCar Final Price: $" . $baby_car1->getFinalPrice() ."<br>";
echo  $baby_car1->displayMaterials() ;
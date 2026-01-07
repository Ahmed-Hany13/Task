<?php
class Product
{
    public $name;
    private $quantity;
    public $amount = 0;

    public function __construct($prod_name,$quantity) {
        $this->name = $prod_name;
        $this->quantity = $quantity;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function buyProduct($quantity){
        if($this->getQuantity() > 0  ){
            $this->quantity -= $quantity;
        }else{
            echo "Wrong Quantity";
        }
    }
    public function setQuantity($quantity){
        $this->amount += $quantity;
    }

}

$action = new Product("Laptop","20");

$action->getQuantity();
$action->buyProduct(3);
$action->setQuantity(3);
var_dump($action);


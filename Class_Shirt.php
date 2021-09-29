<?php
class Shirt
{
    public $color;
	public $price;
	public $material;

    public function __construct($color,$price,$material)
	{
		$this->color = $color;
		$this->price = $price;
		$this->material = $material;
	}


public function setColor (string $qan)
{$this->color = $qan;}

public function setPrice (int $qva)
{$this->price = $qva;}

public function setMaterial (string $qtut)
{$this->material  = $qtut;}


public function getColor()
{return $this->color;}

public function getPrice()
{return $this->price;}

public function getMaterial  ()
{return $this->material ;}
}

$bo= new Shirt('Белый',2000,'Хлопок');

$bo->setColor('Белый');
$bo->setPrice(2000);
$bo->setMaterial ('Хлопок');


echo 'цвет рубашки'.' '.$bo->getColor().' <br>';
echo 'Стоимость '.' '.$bo->getPrice().' '.'рублей <br>';
echo 'Материал'.' '.$bo->getMaterial().'<br>';
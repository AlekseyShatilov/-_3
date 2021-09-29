<?php
class Sneakers
{
    private $color;
	private $price;
	private $brand;
	private $size;

    public function __construct($color,$price,$brand,$size)
	{
		$this->color = $color;
		$this->price = $price;
		$this->brand = $brand;
        $this->ize = $size;
	}

public function setColor (string $qana)
{$this->color = $qana;}

public function setPrice (int $qvaa)
{$this->price = $qvaa;}

public function setBrand  (string $qtuta)
{$this->brand  = $qtuta;}

public function setSize (int $qvaat)
{$this->size = $qvaat;}


public function getColor()
{return $this->color;}

public function getPrice()
{return $this->price;}

public function getBrand()
{return $this->brand ;}

public function getSize ()
{return $this->size ;}

}

$jo= new Sneakers('Черные',40000,'NIKE',42);

$jo->setColor('Черные');
$jo->setPrice(40000);
$jo->setBrand('NIKE');
$jo->setSize(42);

echo 'кроссовки'.' '.$jo->getColor().' <br>';
echo 'Стоимость '.' '.$jo->getPrice().' '.'рублей <br>';
echo 'Бренд'.' '.$jo->getBrand ().'<br>';
echo 'Размер'.' '.$jo->getSize ().'<br>';




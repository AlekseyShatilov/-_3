<?php
class Juice
{
    public $taste;
	public $price;
	public $manufacturer;


    public function __construct($taste,$price,$manufacturer)
	{
		$this->taste = $taste;
		$this->price = $price;
		$this->manufacturer = $manufacturer;
	}



public function setTaste (string $an)
{$this->taste = $an;}

public function setPrice (int $va)
{$this->price = $va;}

public function setManufacturer (string $tut)
{$this->manufacturer = $tut;}


public function getTaste  ()
{return $this->taste;}

public function getPrice()
{return $this->price;}

public function getManufacturer ()
{return $this->manufacturer;}
}

$so= new Juice('Яблочный',120,'Фрутоняня');
$so->setTaste('Яблочный');
$so->setPrice(120);
$so->setManufacturer('Фрутоняня');


echo $so->getTaste().' '.'сок <br>';
echo 'Стоимость'.' '.$so->getPrice().' '.'рублей <br>';
echo 'Производитель'.' '.$so->getManufacturer().'<br>';

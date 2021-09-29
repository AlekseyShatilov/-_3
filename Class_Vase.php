<?php
class VASE
{
    public $materials;
	public $price;
	public $color;

	


public function setMaterials (string $yr)
{$this->materials = $yr;}

public function setPrice (int $s)
{$this->price = $s;}

public function setColor (string $r)
{$this->color = $r;}


public function getMaterials ()
{return $this->materials;}

public function getPrice()
{return $this->price;}

public function getColor ()
{return $this->color;}

	public function __construct($materials,$price,$color)
	{
		$this->materials = $materials;
		$this->price = $price;
		$this->color = $color;
	}

}

$do= new VASE('керамика',15000,'зеленая');

$do->setMaterials('керамика');
$do->setPrice(15000);
$do->setColor('зеленая');

echo 'Материал Вазы'.$do->getMaterials().'<br>';
echo ' Ваза'.$do->getColor().'<br>';
echo 'Стоимость'.$do->getPrice().'<br>';







// class Book
// {
//     private $volume;
// 	private $genre;
// 	private $author;

// public function bark() {echo '';}

// public function setVolume (int $ran)
// {$this->volume = $ran;}

// public function setGenre (string $sva)
// {$this->genre = $sva;}

// public function setAuthor (string $ut)
// {$this->author = $ut;}


// public function getVolume  ()
// {return $this->volume;}

// public function getGenre()
// {return $this->genre;}

// public function getAuthor ()
// {return $this->author;}
// }

// $no= new Book();
// $no->setVolume(366);
// $no->setGenre('Темное фэнтези');
// $no->setAuthor('Джо Аберкромби');


// echo 'Книга объёмом '.$no->setVolume().'страниц<br>';
// echo ' Жанр'.$no->setGenre().'<br>';
// echo ' Автор'.$no->setAuthor().'<br>';








// ------------------------------------------------
// class Juice
// {
//     private $taste;
// 	private $price;
// 	private $manufacturer;

// public function bark() {echo '';}

// public function setTaste (string $an)
// {$this->taste = $an;}

// public function setPrice (int $va)
// {$this->price = $va;}

// public function setManufacturer (string $tut)
// {$this->manufacturer = $tut;}


// public function getTaste  ()
// {return $this->taste;}

// public function getPrice()
// {return $this->price;}

// public function getManufacturer ()
// {return $this->manufacturer;}
// }

// $so= new Juice();
// $so->setTaste('Яблочный');
// $so->setPrice(120);
// $so->setManufacturer('Фрутоняня');


// echo $so->setTaste().'сок <br>';
// echo 'Стоимость '.$so->setPrice().'рублей <br>';
// echo 'Производитель'.$so->setManufacturer().'<br>';




// -------------------------------------------------------
// class Shirt
// {
//     private $color;
// 	private $price;
// 	private $material ;

// public function bark() {echo '';}

// public function setColor (string $qan)
// {$this->color = $qan;}

// public function setPrice (int $qva)
// {$this->price = $qva;}

// public function setMaterial (string $qtut)
// {$this->material  = $qtut;}


// public function getColor()
// {return $this->color;}

// public function getPrice()
// {return $this->price;}

// public function getMaterial  ()
// {return $this->material ;}
// }

// $bo= new Juice();
// $bo->setColor('Белый');
// $bo->setPrice(2000);
// $bo->setMaterial ('Хлопок');


// echo 'цвет рубашки'.$bo->setColor().' <br>';
// echo 'Стоимость '.$bo->setPrice().'рублей <br>';
// echo 'Материал'.$bo->setMaterial ().'<br>'








// ----------------------------------------
// class Sneakers
// {
//     private $color;
// 	private $price;
// 	private $brand;
// 	private $size;

// public function bark() {echo '';}

// public function setColor (string $qana)
// {$this->color = $qana;}

// public function setPrice (int $qvaa)
// {$this->price = $qvaa;}

// public function setBrand  (string $qtuta)
// {$this->brand  = $qtuta;}

// public function setSize (int $qvaat)
// {$this->size = $qvaat;}


// public function getColor()
// {return $this->color;}

// public function getPrice()
// {return $this->price;}

// public function getBrand()
// {return $this->brand ;}

// public function getSize ()
// {return $this->size ;}

// }

// $jo= new Sneakers();

// $jo->setColor('Черные');
// $jo->setPrice(40000);
// $jo->setBrand  ('NIKE');
// $jo->setSize(42);

// echo 'кроссовки'.$jo->setColor().' <br>';
// echo 'Стоимость '.$jo->setPrice().'рублей <br>';
// echo 'Бренд'.$jo->setBrand ().'<br>'
// echo 'Размер'.$jo->setSize ().'<br>'











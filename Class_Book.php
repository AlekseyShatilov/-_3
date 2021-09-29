<?php
class Book
{
    private $volume;
	private $genre;
	private $author;

	public function __construct($volume,$genre,$author)
	{
		$this->volume = $volume;
		$this->genre = $genre;
		$this->author = $author;
	}

public function setVolume (int $ran)
{$this->volume = $ran;}

public function setGenre (string $sva)
{$this->genre = $sva;}

public function setAuthor (string $ut)
{$this->author = $ut;}


public function getVolume  ()
{return $this->volume;}

public function getGenre()
{return $this->genre;}

public function getAuthor ()
{return $this->author;}
}

$no= new Book(366,'Темное фэнтези','Джо Аберкромби');
$no->setVolume(366);
$no->setGenre('Темное фэнтези');
$no->setAuthor('Джо Аберкромби');


echo 'Книга объёмом '.' '.$no->getVolume().' '.'страниц<br>';
echo ' Жанр'.' '.$no->getGenre().'<br>';
echo ' Автор'.' '.$no->getAuthor().'<br>';

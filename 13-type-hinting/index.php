<?php 

require './person.php';


class Book{
	public $price;
	public $authors;
	// int is a type which here hinting that this function will take only integer parameter
	public function price(int $price){
		$this->price = $price;
	}
	// type hinting using array
	public function authors(array $names){
		$this->authors = $names;
	}

	// type hinting using object
	public function authorNames(Person $person){
		$this->authors = $person->names();
	}
}


$book = new Book;

$book->price(20);

echo $book->price;

// $book->authors(['mahedi', 'hasan']);

// print_r($book->authors);

$authorNames = new Person();
$book->authorNames($authorNames);

print_r($book->authors);
 ?>
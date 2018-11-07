<?php 
	class book{
		public $bookId;
		public $bookTitle;
		public $bookPrice;

		public function book($id, $title, $cost){
			$this->bookId = $id;
			$this->bookTitle = $title;
			$this->bookPrice = $cost;
		}
	}//A Class called Book has been created..

	function saveToFile($data){
		$file = fopen('Books.csv', 'a+');
		fwrite($file, PHP_EOL);
		$line = sprintf('%s, %s, %s', $data->bookId, $data->bookTitle, $data->bookPrice);
		fwrite($file, $line);

		fclose($file);
	}

	function readFromFile(){
		$content = "";
		$file = fopen('Books.csv', 'r');//read...
		while(!feof($file)){
			$line = fgets($file);
			$words = explode(",", $line);
			$content .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td></tr>', $words[0], $words[1], $words[2]);	
		}
		return $content;
	}
	//readFromFile();
/*	$book1 = new book(111, 'Php Tutorial', 240);
	saveToFile($book1);
	$book2 = new book(112, 'C# Tutorial', 340);
	saveToFile($book2);
	$book3 = new book(113, 'Java Tutorial', 290);
	saveToFile($book3);
	$book4 = new book(114, 'HTML Tutorial', 210);
	saveToFile($book4);*/


	//If a text based file has to be created and represented as real time entity, then we use CSV files(Coma seperated value files). Each line represents one record. The line will contain data seperated by a ,. Each word in the line represents a property(attribute) of that object. 


 ?>
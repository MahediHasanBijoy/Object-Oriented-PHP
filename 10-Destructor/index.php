<?php 
/*
Like the constructor, PHP allows you to define a destructor for a class using a special method __destruct() like this:

class className {
	public function __destruct(){
		//...
	}
}

 */

// Unlike a constructor, a destructor doesn’t accept any argument. The destructor is automatically invoked before an object is deleted. It happens when the object has no reference or when the script ends.

// Example:

class File{
	private $handle;
	private $filename;

	public function __construct($filename, $mode = 'r'){
		$this->filename = $filename;
		$this->handle = fopen($filename, $mode);
	}

	public function __destruct(){
		// close the filehandle
		if($this->handle){
			fclose($this->handle);
		}
	}

	public function read(){
		// read the file contents
		return fread($this->handle, filesize($this->filename));
	}
}


$f = new File('./test.txt');

echo $f->read();

 ?>
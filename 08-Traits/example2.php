<?php 
/*
PHP allows you to compose multiple traits into a trait by using the use statement in the trait’s declaration. For example:
 */

trait Reader
{
	public function read($source)
	{
		echo sprintf('Read from %s <br>', $source);
	}
}

trait Writer
{
	public function write($destination)
	{
		echo sprintf('Write to %s <br>', $destination);
	}
}

trait Copier
{
	use Reader, Writer;

	public function copy($source, $destination)
	{
		$this->read($source);
		$this->write($destination);
	}
}

class FileUtil
{
	use Copier;

	public function copyFile($source, $destination)
	{
		$this->copy($source, $destination);
	}
}

$file1 = new FileUtil();

$file1->copyFile('home/drive/c', 'desktop/new');


 ?>
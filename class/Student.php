<?php
class Student extends User
{
	private $birhday;

	public function __construct($name,$age,$birhday)
	{
// Вызовем конструктор родителя, передав ему два параметра:
		parent::__construct($name, $age);
	
		$this->birhday = $birhday;
	}
	public function getCalc()
	{
		$this->birhday = explode('-',$this->birhday);
		return $this->birhday = date('Y') - date('Y',mktime(0,0,0,$this->birhday[1],$this->birhday[0],$this->birhday[2]));
	}

}

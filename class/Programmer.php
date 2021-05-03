<?php
class Programmer extends User
{

	private $langs = ['ru','us'];



	public function setLangs($langs){
		$this->langs = $langs;
	}

	public function getLangs()
	{
		return $this->langs;
	}
}

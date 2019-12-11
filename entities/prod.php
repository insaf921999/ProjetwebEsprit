<?php
class prod
{
	private $idP ;
	private $nomP ;
	private $imageP ;
	private $descriP ;

	public function getidP()
	{
		return $this->idP ;
	}
	public function getnomP()
	{
		return  $this->nomP ;
	}
	public function getimageP()
	{
		return  $this->imageP ;
	}
	public function getdescriP()
	{
		return $this->descriP ;
	}
	
	public function __construct($idP,$nomP,$imageP,$descriP)
	{
		$this->idP=$idP ;
		 $this->nomP=$nomP ;
		$this->imageP=$imageP ;
		$this->descriP=$descriP ;
	}
}
?>
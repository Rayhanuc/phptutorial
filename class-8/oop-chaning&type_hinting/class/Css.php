<?php


/**
* css class
*/
class Css
{

	public function display(array $jekono){
		foreach ($jekono as $key => $value) {
			echo $value[2]."</br>";
		}
		
		return $this;
	}
	public function display2(){
		echo "display2 css class";
		return $this;
	}
}


?>
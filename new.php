<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php tutorial</title>
</head>
<body>
	<h1><?php echo "kisu akta";?></h1>
	<?php

		$a=5;
		echo $a."<br/>"; 

		$name= "raihan islam";
		echo $name."<br/>";

		$num1 = 5;
		$num2 = 7;

		$total = $num1+$num2;
		echo "total number"." ". $total."<br/>";

		$b = "Rayhan Uddin Chowdhury";
		var_dump($b);
		echo "<br/>";

		$c = 5;
		var_dump($c);
		echo "<br/>";

		$c = 5.4;
		var_dump($c);
		echo "<br/>";

		$d = false;
		var_dump($d);
		echo "<br/>";

		$e = array("amar","tomar","num");
		var_dump($e);
		echo "<br/>";

		$f = NULL;
		var_dump($f);
		echo "<br/>";

		$g = 'raihan islam oronno';
		echo "letter"." ". strlen($g);
		echo "<br/>";

		$h = 'rayhan uddin chowdhury some another word';
		echo "word"." ". str_word_count($h);
		echo "<br/>";

		$i = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, quos.';
		echo "dorotto"." ". strpos($i, "adipisicing");
		echo "<br/>";

		$j = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, quos.';
		echo "Olta Laka"." ". strrev($j);
		echo "<br/>";

		$k = 'Lorem nothing ipsum nothing dolor sit nothing amet, nothing consectetur adipisicing nothing elit. Quae, quos.';
		echo "replace"." ". str_replace("nothing", "something", $k);
		echo "<br/>";

		$m = "amader nam";//This one is showing l in output.
		echo "define"." ". define("k", " amader nam");
		echo k;
		echo "<br/>";

		define("K", "Amader Nam");
		echo constant("K");
		echo "<br/>";

		$n = "<h1 style='color:red;'>raihan islam some oronno some</h1>";
		echo $n;
		echo "<br/>";

		$num3 = "raihan";
		$num4 = "islam";
		echo $num3." ".$num4;
		echo "<br/>";


		$o = "<h1>". 5.4 ."</h1>";
		echo $o;
		echo "<br/>";

		//condition

		$number = 5;
		if(5 == 4){
			echo "milse";
		}
		
		elseif ($number == 6) {
			echo "2nd condition milse";
		}

		elseif ($number == 51) {
			echo "3rd condition milse";
		}

		else{
			echo "mile nai";
		}
		echo "<br/>";

		//Arithmetic operators ( + - * / % )$p$q = operant


		$p = 6;
		$q = 4;

		$total = $p * $q;
		echo "total ". $total;
		echo "<br/>";


		//Assignment Operators

		$r = 8;
		$r %= 5;
		echo "total ".$r;
		echo "<br/>";

		//Comparison Operators (==)
		$s = 4;
		$t = 5;
		var_dump($s < $t);
		echo "<br/>";

		//Increment/Decrement Operators (++)

		$u = 7;
		$sub = ++$u;
		echo $sub;
		echo "<br/>";
		echo "post Increment". $u++;
		echo "<br/>";


		//Locical Operators 
		$v = 8;
		$w = 9;
		if($v == 8 || $w == 10){
			echo "milse";
		}else {
			echo "mile nai";
		}

		echo "<br/>";



		//String Operators
		$x = "Rayhan";
		$y = "Uddin";
		$z = "Chowdhury";

		$shobmila = $x." ".$y." ".$z;
		echo $shobmila;
		echo "<br/>";


		$aa = "Rayhan Uddin";
		$aa .= " Chowdhury";

		echo $aa;
		echo "<br/>";
		//Array Operators ( + == === != <> !== )


		echo "<br/>";



		echo "<h1>Raihan Islam</h1>";
		echo "<br/>";
		print "<h1>Raihan Islam</h1>";
		echo "<br/>";


		$ab = "raihan";
		$ac = "islam";

		echo $ab," ",$ac;
		echo "<br/>";
		print $ab." ".$ac;
		echo "<br/>";

	?>


</body>
</html>
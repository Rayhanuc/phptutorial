<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP tutorial</title>
</head>
<body style="background-color: #1e1616; color: #19e4fc;">
	<h1 style="color: red; text-transform: uppercase; text-align: center; font-size: 50px; background-color: #ddd; min-height: 100px;"><?php echo "kisu akta"; ?></h1>
	<?php
		echo "<p>something</p>";
	?>

	<?php
		$a = 5;
		echo $a;
		echo "</br>";

		$name = "Rayhan Uddin Chowdhury"." (Bishal)";
		echo $name;
		echo "</br>";

		$num1 = 5;
		$num2 = 7;

		$total = $num1+$num2;
		echo "total = ". $total;
		echo "</br>";



		$b = "Rayhan Uddin Chowdhury";
		var_dump($b);
		echo "</br>";

		$c = 854847;
		var_dump($c);
		echo "</br>";

		$d = 8.47;
		var_dump($d);
		echo "</br>";

		$e = false;
		var_dump($e);
		echo "</br>";

		$f = array("amar", "tomar","num");
		var_dump($f);
		echo "</br>";

		$g = NULL;
		var_dump($g);
		echo "</br>";

		// String example video-5
		echo "<h1 style ='color:#fff;'>strlen example</h1>";
		$h = "Rayhan Uddin Chowdhury";
		echo "lenth of this secentence is ". strlen($h);
		echo "</br>";

		// String example video-5
		echo "<h1 style ='color:#fff;'>str_word_count example</h1>";
		$i = "Rayhan Uddin Chowdhury";
		echo "words of this secentence are ". str_word_count($i);
		echo "</br>";

		// String example video-5
		echo "<h1 style ='color:#fff;'>strpos example</h1>";
		$j = "Rayhan Uddin Chowdhury";
		echo "words of this secentence are ". strpos($j, "Uddin");
		echo "</br>";

		// String example video-5
		echo "<h1 style ='color:#fff;'>strrev example</h1>";
		$k = "Rayhan Uddin Chowdhury";
		echo "words of this secentence are ". strrev($k);
		echo "</br>";

		// String example video-5
		echo "<h1 style ='color:#fff;'>strrev example</h1>";
		$l = "Lorem ipsum dolor nothing amet, consectetur nothing elit. Saepe, nothing? Ducimus doloribus, nothing inventore assumenda voluptates quaerat veniam, dicta non, minima vel ipsum! Explicabo vel est vero harum, nothing odio molestiae magni! Harum nothing ad nothing tempore nothing vitae fugiat nothing in dolor nothing, enim delectus, commodi. nothing beatae sed, nothing quae? nothing beatae, nothing quidem explicabo, mollitia natus nemo!";
		echo "words of this secentence are ". str_replace("nothing", "something", $l);
		echo "</br>";



		// Constant example video-6
		echo "<h1 style ='color:#fff;'>Constant example</h1>";
		// $n = "rayhan uddin";
		define("m", "rayhan uddin");
		echo m;
		echo "</br>";

		// html tag using in php
		echo "<h1 style ='color:#fff;'>html tag using in php example</h1>";
		$o = "<h2>raihan islam some oronno some</h2>";
		echo "</br>";

		echo "h2 tag".$o;

		// PHP concat
		echo "<h1 style ='color:#fff;'>PHP concat example</h1>";
		
		$p = "<h1 style ='font-size:80px;'>". 5.4 ."</h1>";
		$num3 = "raihan";
		$num4 = "islam";
		echo "</br>";

		echo "total = ".$num3." ".$num4;

		echo $p;


		// if else elseif statement
		echo "<h1 style ='color:#fff;'>if else elseif statement example</h1>";
		$number = 5;
		echo "</br>";

		if(5 == 9){
			echo "milse";
		}
		elseif ($number ==6) {
			echo "2nd condition milse";
		}

		elseif ($number ==51){
			echo "3nd condition milse";
		}

		else {
			echo "mile nai";
		}



		echo "<h1 style ='color:#fff;'>Operator example</h1>";

		/*
		1. Arithmetic Operators
		2. Assignment operators
		3. Comparison operators
		4. Increment/Decrement operators
		5. Logical operators
		6. String operators
		7. Array operators
		*/

		// 1. Arithmetic Operators ( + - * / % ) modulas = %
		echo "<h1 style ='color:#fff;'>Arithmetic operator example</h1>";
		echo "</br>";		
		$q = 6;
		$r = 4;

		$total = $q + $r;

		echo $total;

		// 2. Assignment Operators
		echo "<h1 style ='color:#fff;'>Assignment operator example</h1>";
		echo "</br>";		
		$s = 6;
		$s %= 4;

		echo $s;

		// 3. Comparison Operators
		echo "<h1 style ='color:#fff;'>Comparison operator example</h1>";
		echo "</br>";		
		$t = 7;
		$u = 54;

		var_dump($t < $u);


		// 4. Increment/Decrement operators
		echo "</br>";
		echo "<h1 style ='color:#fff;'>Increment/Decrement operator example</h1>";

		$v = 7;
		$sub = $v++;//pre-increment
		echo $sub;
		echo "</br>";
		echo "post increment = ".$v++;


		// 5. Logical operators
		echo "</br>";
		echo "<h1 style ='color:#fff;'>Logical operator example</h1>";
		$w = 7;
		$x = 8;

		if($w == 7 || $x == 9){
			echo "milse";
		}else {
			echo "mile nai";
		}




		// 5. String operators
		echo "</br>";
		echo "<h1 style ='color:#fff;'>String operators example</h1>";
		$y = "Rayhan ";
		$z = "Uddin";

		$aa = $y.$z;
		echo $aa;

		echo "</br>";
		$ab = "Rayhan ";
		$ab .= "Uddin";

		echo $ab;




	?>
	<!-- <h1>strpos example</h1> -->
	
</body>
</html>
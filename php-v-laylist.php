<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php tutorial</title>
</head>
<body>
	<h1><?php echo "Kisu akta";?></h1>
	<?php

	echo "<p>Something</p>";

		$a=5;
		echo $a;

		echo"<br/>";
		$name = "raihan islam";
		echo $name;

		$num1 = 5;
		$num2 = 7;

		echo"<br/>";
		$total = $num1+$num2;
		echo "Total =".$total;

		//data type

		echo"<br/>";
		$b = "raihan islam";
		var_dump($b);


		echo"<br/>";
		$c = 5;
		var_dump($c);

		echo"<br/>";
		$d = 5.4;
		var_dump($d);

		echo"<br/>";
		$e = true;
		var_dump($e);

		echo"<br/>";
		$f = array("amar", "tumar", "nam");
		var_dump($f);

		echo"<br/>";
		$g = NULL;
		var_dump($g);


		echo"<br/>";
		$h = "raihan islam dsfdsfgsd dfsdrewrew dfseq3eqwedr";
		echo strlen($h);


		echo"<br/>";
		$i = "raihan islam dsfds dklfjdskf dkfjkdlsjf ieyurie";
		echo str_word_count($i);

		echo"<br/>";
		$j = "raihan islam dsfds dklfjdskf dkfjkd ieyurie";
		echo strpos($j, "dkfjkd");


		echo"<br/>";
		$k = "raihan islam dsfds dklfjdskf dkfjkd ieyurie";
		echo strrev($k);

		echo"<br/>";
		$l= "raihan islam nothing dklfjdskf nothing dkfjkd nothing ieyurie nothing";
		echo str_replace("nothing", "something", $l);

		echo"<br/>";
		$m = "raihan islam";
		define("a", "raihan islam");
		echo a;

		echo"<br/>";
		$n = "<h1 style='color:#00edff'>raihan islam some oronno some</h1>";
		echo $n;

		$o = "<h3>". 5.9 ."</h3>";
		echo $o;

		echo"<br/>";
		$kdj  = "raihan";
		$part = "islam";
		echo $kdj." ".$part;



		echo"<br/>";
		$number = 5;
		if( 5 == 6 ){
			echo "milse";
		}elseif (5==6){
			echo "2nd condition milse";
		}elseif ($number == 57) {
			echo "3rd condition milse";
		}

		else{
			echo "mile nai";
		}

	//video from 11
	//Arithmetic Operators( + - * / %)

	$p = 6;
	$q = 4;

	$total = $p + $q;
	echo"<br/>";
	echo $total;

	$total = $p - $q;
	echo"<br/>";
	echo $total;

	$total = $p * $q;
	echo"<br/>";
	echo $total;

	$total = $p / $q;
	echo"<br/>";
	echo $total;

	$total = $p % $q;
	echo"<br/>";
	echo $total;

	//---------------------------//

	// Video -12 Assignment Operators (=, +=, -=, *=, /=, .=, %=)

	$r = 6;
	$r += 4;
	
	echo"<br/>";
	echo $r; 

	$s = 6;
	$s -= 4;

	echo"<br/>";
	echo $s; 

	$t = 6;
	$t *= 4;

	echo"<br/>";
	echo $t; 

	$u = 6;
	$u /= 4;

	echo"<br/>";
	echo $u; 

	$v = 6;
	$v .= 4;

	echo"<br/>";
	echo $v; 

	$w = 6;
	$w %= 4;

	echo"<br/>";
	echo $w; 

	// Video -13 Comparison Operators (==, !=, <>, >, <, >=, <=)
	$x = 5;
	$y = 6;
	
	echo"<br/>";
	var_dump($x==$y);
	echo"<br/>";
	var_dump($x!=$y);
	echo"<br/>";
	var_dump($x<>$y);
	echo"<br/>";
	var_dump($x>$y);
	echo"<br/>";
	var_dump($x<$y);
	echo"<br/>";
	var_dump($x>=$y);
	echo"<br/>";
	var_dump($x<=$y);

	// Video -14 Increment/Decrement Operators (==, !=, <>, >, <, >=, <=)

	$z = 7;
	$sub = $z++;

	echo"<br/>";
	echo $sub; 
	echo"<br/>";
	echo "post Increment". $z++;


	// Video -15 Logical Operators
	$aa = 7;
	$ab = 8;

	echo"<br/>";
	if ($aa == 7 && $ab == 9){
		echo "milse";
	}else {
		echo "mile nai";
	}

	// Video -16 String Operators

	$ac = "RAIHAN";
	$ad = " ISLAM";

	echo"<br/>";
	$total = $ac.$ad;
	echo $total;

	$ae = "raihan";
	$ae .= " islam";

	echo"<br/>";
	echo $ae;

	// Video -17 String Operators

	// Video -18 Difference between echo and print

	echo"<br/>";
	echo "<h1>raihan islam</h1>";
	echo"<br/>";
	print "<h1>raihan islam</h1>";

	$af = "raihan";
	$ag = " islam";

	echo $af,$ag;
	echo"<br/>";
	print $af.$ag;

	// Video -19 Switch statement
	
	echo"<br/>";
	$favcolor = "red";
	switch ($favcolor) {
		case 'green':
			echo "my favorite color green";
			break;
		case "red";
			echo "my favorite color red";
			break;
		
		default:
			echo "no match color";
			break;
	}

	// Video -20 loop

	// while loop/do while loop/for loop/foreach loop

	// while loop 21
	echo"<br/>";
	$xzc = 1;
	while ( $xzc <= 10) {
		echo "number ". $xzc. "<br/>";
		$xzc++;
	}

	// do while loop 22
	echo"<br/>";
	$vcv = 1;
	do {
		echo "number ".$vcv. "<br/>";
		$vcv++;
	}while ( $vcv <= 10);

	//for loop 23
	echo"<br/>";
	for ($i=0; $i < 10 ; $i++) { 
		echo "number".$i."<br/>";
	}

	//foreach loop 24
	echo"<br/>";
	$ah = array("ami","tumi","amra","tomra");

	foreach ($ah as $all ) {
		echo $all."<br/>";
	}

	//function 25

	function calculate ($x,$y,$z){
		$result = $x+$y+$z;
		$result2 = $x-$y-$z;
		echo $result;
		echo "<br/>";
		echo $result2;
	}
	calculate(5,5,10);

	?>

	<?php

	//post method 26
	echo"<br/>";
	if( isset($_POST['sub'])) {
		$new = $_POST['new'];

	echo ($new);
	}

	?>

	<form action="" method="post">
	(post)name:<input type="text" name="new">
	<input type="submit" name="sub">
	</form>

	<?php

	//post method 27
	echo"<br/>";
	if( isset($_GET['sub'])) {
		$new = $_GET['new'];

	echo ($new);
	}

	?>

	<form action="" method="get">
	(get)name:<input type="text" name="new">
	<input type="submit" name="sub">
	</form>

	<?php

	//request method 28
	echo"<br/>";
	if( isset($_REQUEST['sub'])) {
		$new = $_REQUEST['new'];

	echo ($new);	
	}


	?>

	<form action="" method="get">
	(request)name:<input type="text" name="new">
	<input type="submit" name="sub">
	</form>

	<?php 

	//Server 29

	echo $_SERVER['PHP_SELF'];
	echo"<br/>";
	echo $_SERVER['SERVER_NAME'];
	echo"<br/>";
	echo $_SERVER['HTTP_HOST'];
	echo"<br/>";
	echo $_SERVER['REMOTE_ADDR'];
	echo"<br/>";
	echo $_SERVER['SERVER_ADDR'];
	echo"<br/>";
	echo $_SERVER['REMOTE_PORT'];
	echo"<br/>";
	echo $_SERVER['SERVER_ADDR'];

	//Global 30
	$number = 5;
	function newfgh () {
		global $number;
		echo $number;
	}
	echo"<br/>";
	newfgh ();	

	?>

	<?php
	//Indexed arrays 31
	
	echo"<br/>";
	$ai = array("ami","tumi", "amra", "tumra", "amader", "tomader","apnara","new","add");

	$length = count($ai);

	echo $length;
	echo"<br/>";
	echo $ai[2];
	echo"<br/>";
	echo $ai[3];
	echo"<br/>";
	for($i=0;$i < $length; $i++){
		echo $ai[$i]."<br/>";;
	}

	echo"<br/>";
	$aj = array("ami","tumi", "amra", "tumra", "amader", "tomader","apnara","new","add","other");

	foreach ($aj as $ak) {
		echo $ak ."<br/>";
	}

	//Associative arrays 32
	echo"<br/>";
	$al = array("ami","tumi","just"=> "amra", "tumra", "amader","jekono"=>  "tomader","apnara","new","add","other");

	foreach ($al as $key=>$am) {
		echo $key." ".$am ."<br/>";
	}



	//Multidimensional arrays 33
	echo"<br/>";
	$am = array(
		array("dada", "dadi"),
		array("baba", "maa"),
		array("bai", "bon", "ami"),
	);

	echo $am[0][1];
	echo"<br/>";
	echo $am[2][2];
	echo"<br/>";

	// array sort 34
	$an = array("ami", "jekono","korim","rohim", "kamal", "jamal", "cat");
	sort($an);
	print_r($an);
	echo"<br/>";


	// array rsort 35
	$ao = array("ami", "jekono","korim","rohim", "kamal", "jamal", "cat");
	
	rsort($ao);
	print_r($ao);
	echo"<br/>";


	// array rsort 36
	$ap = array("one"=>"ami", "two"=> "jekono","three"=> "korim","four"=>"rohim","five" =>"kamal", "jamal", "cat");
	
	asort($ap);
	print_r($ap);
	echo"<br/>";

	// array arsort 37
	$aq = array("1"=>"ami", "2"=>"jekono","3"=>"korim","4"=>"rohim","5" =>"kamal", "6"=>"jamal","7"=>"cat");
	
	arsort($aq);
	print_r($aq);
	echo"<br/>";

	// array ksort 38
	$ar = array("1"=>"ami", "2"=>"jekono","3"=>"korim","4"=>"rohim","5" =>"kamal", "6"=>"jamal","7"=>"cat");
	
	ksort($ar);
	print_r($ar);
	echo"<br/>";

	// array krsort 39
	$as = array("1"=>"ami", "2"=>"jekono","3"=>"korim","4"=>"rohim","5" =>"kamal", "6"=>"jamal","7"=>"cat");
	
	krsort($as);
	print_r ($as);
	echo"<br/>";

	// trim function 40
	$something = "raihan";
	$result3 = trim($something, "han");
	var_dump($result3);

	// Explode function 41 (string to array)
	echo"<br/>";
	$dkfher = "Rai han is lam";
	$result4 = explode(' ', $dkfher);
	var_dump($result4);

	// Explode function 41 (array to string)
	echo"<br/>";
	$dkfher = "Rai han is lam";
	$result4 = explode(' ', $dkfher);
	var_dump($result4);





	// Explode function 41

	$namekdfj = array("ami","tomi","amra");
	echo"<br/>";
	$result5 = implode(" ", $namekdfj );
	var_dump($result5);


	?>


</body>
</html>

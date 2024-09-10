<?php
	$zmienna=6;
	if($zmienna>0){
		echo"zmienna dodatnia";
	}
	else{
		echo"zmienna ujemna";
	}
	echo"<br>";
	if($zmienna%2){
		echo "zmienna jest nieparzysta";
	}else{
		echo"zmienna jest parzysta";
	}
	echo"<br>";
	$zmienna2=2;
	if($zmienna>$zmienna2){
		echo"$zmienna jest wieksze od $zmienna2";
	}else{
		echo"$zmienna2 jest wieksze od $zmienna";
	}
	echo"<br>";
	$zmienna3=20;
	for ($i=$zmienna3;$i>=0;$i-=2){
		echo"$i <br>"; 
	}
	echo"<br>";
	$array=array();

	$suma=0;
	for ($i=0;$i<5;$i++){
		$losowa=rand(1,20);
		array_push($array,$losowa);
		$suma+=$losowa;
		// echo"$losowa <br>";
	}
	$podstawa=rand(1,20);
	$wykladnik=rand(1,5);
	$wynik=1;for ($i=0;$i<$wykladnik;$i++)
	{
		echo "$wynik, $podstawa<br>";
		$wynik*=$podstawa;
	}
	echo "$podstawa do $wykladnik to $wynik";
?>


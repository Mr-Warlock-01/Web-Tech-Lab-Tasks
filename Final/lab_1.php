<!DOCTYPE html>
<head>
	
</head>

<body>
	<!-- <?php 	
	$x=10;
	echo $x;
	?>

	<br>

	<?php
	$x="This is a string";
	echo $x;
	?>

	<?php
	for($x=0; $x<10; $x++){
		if($x%2==0){
			echo $x;
			echo "<br>";
		}
	}
	?>

		<br><br>
	<?php
	$x=0;
	while(++$x<10){
		if($x%2==1){
			echo $x;
			echo "<br>";
		}
	}
	?>
	<br><br><br><br> -->



	<!-- TASK2 -->
	<?php
	echo "TASK-2";
	echo "<br>";
	$prime_count=0;
	for($i=2; $i<=500; $i++){
		$f=1;
		for($j=2; $j<$i; $j++){
			if($i%$j==0){
				$f=0;
				break;
			}
		}
		if($f==1){
			$prime_count++;
		}
	}
	echo "Prime Number: ";
	echo $prime_count;


	$x=1;
	$prefect_sq=0;
	while(1){
		$z=$x*$x;
		if($z<=500){$prefect_sq++;}
		else{
			break;
		}
		$x++;
	}
	echo "<br>";
	echo "Prime Squre: ";
	echo $prefect_sq;


	while((($x+1)*8)<=500){$x++;}
	echo "<br>";
	echo "Even and divisible by 8: ";
	echo $x;
	?>
	<br><br>

	<!-- TASK-1 -->

	<?php
	echo "TASK-1";
	echo "<br>";
	$n=13;
	for($i=0; $i<$n; $i++){
		for($j=1; $j<=$n; $j++){
			if($j%3==0){	
				echo "* ";
			}
			else{
				echo $j;
				echo " ";
			}
		}
		echo "<br>";
	}
	?>
</body>
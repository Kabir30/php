1/ No problem

<?php
$year = 2021;
if($year%400==0){
	echo $year."is a Leap year";
}
else if($year%100==0){
	echo $year."is not a leap year";
}
elseif ($year%4==0) {
	echo $year."is a leap year";
}
else{
	echo $year."is not a leap year";
}

?>

2 No Problem
<?php

$char="$";

if ($char>=0 && $char<=9) {
	echo $char."is a number";
}
else if ($char>=a && $char<=z || $char>=A && $char<=Z) {
	echo $char."is a Alphabet";.
}
else{
	echo $char."is special Characterset";
}
?>

3 No Problem

<?php

$salary = 8000;

if ($salary<10000) {
	$gross_salary==$salary+($salary*(20/1000))+($salry*(80/100));
	echo $gross_salary;
	}

	else if ($salary>10000 && $salary<= 20000) {
		$gross_salary==$salary+($salary*(25/1000))+($salry*(90/100));
	 	echo $gross_salary;
	}

	else($salary>20000){
		$gross_salary==$salary+($salary*(30/1000))+($salry*(95/100));
	 	echo $gross_salary;
	}
?>
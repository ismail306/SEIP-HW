<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function sum($a, $b)
{
	return $a + $b;
}

echo sum(10, 20), '<br>';


// ! isset , empty , null , unset

$me = "Ismail Khan Emon";
if (isset($me) && !empty($me) && !is_null($me)) {
	echo "Hello " . $me.'<br>';
	unset($me);
	if(isset($me)){
		echo "Hello " . $me;
	}

	else{
		echo "after unsetting me is not found";

	}
	echo '<br>';
}

// ? ara define

$ara=[
	'name'=>'Ismail KHan Emon',
	'age'=>'23',
	'address'=>'Dhaka'
];
print_r($ara);

// ! array key exist function

if(array_key_exists('name', $ara)){
	echo '<br>';
	echo $ara['name'];
}
else{
	echo '<br>';
	echo 'name is not found';
}
echo '<br>';
// ! serialize funciton
var_dump(serialize($ara));

echo '<br>';
echo '<br>';

// ! unserialize function
var_dump(unserialize(serialize($ara)));
echo '<br>';
// ! unset again
unset($ara['age']);
print_r($ara);






// string Handeling Function

$name="Ismail khan emon";
echo strlen($name) . "<br>" ;


echo strtoupper($name) ."<br>" ;


echo strtolower($name)."<br>" ;
echo ucfirst($name)."<br>" ;
echo ucwords($name)."<br>" ;
echo str_repeat($name, 5)."<br>" ;

echo str_replace('Ismail','',$name)."<br>" ;
echo strpos($name,'emon')."<br>" ;
echo strpos($name,'l')."<br>" ;
$trimvalue = trim($name);
// not work
// echo $trimvalue;
// echo strlen($trimvalue)."<br>" ;

$arr=array('ismail','khan','emon','seip');
$data=implode(',',$arr);
echo implode(',',$arr)."<br>" ;
print_r(explode(',',$data));
echo nl2br("\nIsmail \n khan\n");
echo number_format(15000,3);
?>

</body>
</html>
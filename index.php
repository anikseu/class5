<?php
use BDLocation\BD;
use MoneyInWords\MoneyInWords;

require './vendor/autoload.php';

$converter = new MoneyInWords(); 

$divisions = BD::division()->all(); 


if(isset($_POST['division_name'])){
    $query = $_POST['division_name']; 
    
    $result = BD::district()->all();

    foreach($result as $district){

        $d_name = strtolower($district->name);
        //var_dump($d_name); 
        $query = strtolower($query);

        if(strpos($d_name, $query) !== FALSE){
            echo $d_name; 
            echo '<br/>'; 
        }
    }        
}

if(isset($_POST['number'])){
    $number = $_POST['number']; 
    $word = $converter->numberToWords($number);
    print_r($word[0]); 
}




?> 

Divison Search:
<form action = "" method = "POST"> 
<input name="division_name" type="text" value=""> 
<input type="submit">
</form> 

<br><br> <BR><BR>

Number to Words in Money: 
<form action = "" method = "POST"> 
<input name="number" type="text" value=""> 
<input type="submit">
</form> 

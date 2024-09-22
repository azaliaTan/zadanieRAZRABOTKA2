<?php 


try{
    $connect=new PDO("mysql:host=localhost;charset=utf8;dbname=demo",'root','root');
}catch(PDOException $e){
echo $e;
}



?>
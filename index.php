<?php 
include('assets/incl/connect.php');
include('assets/incl/session.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/post-no-bills-jaffna" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <title>2 практика</title>
</head>
<body>

<?php 

if(isset($_GET['page'])){
    $page=$_GET['page'];
    if($page=='profile'){
        include('assets/profile.php');
    }
} include('start.php');

?>
    
    



</body>
</html>
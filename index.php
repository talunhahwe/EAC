<html>
<head>
<title>MySQL ~ PHP</title>
</head>
<body>
<?php
$db_user='root';
$db_pass='dyddnjs159!';
$db_type='mysql';
$db_host='localhost';
$db_name='eac';
$dsn="$db_type:host=$db_host; dbname=$db_name; charset=utf8";

try{
    $pdo=new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print "You successfully accessed database named ".$db_name;
}
catch(PDOException $Exception){
    die('Error: '.$Exception->getMessage());
}
?>
</body>
</html>
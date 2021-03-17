<?php
mb_internal_encoding("utf8");

session_start();

try{
$pdo = new PDO("mysql:dbname=said;host=localhost;","root","");
}catch(PDOException $e){
    
}

$stmt = $pdo->prepare("update login_mypage set name = ?,mail = ?,password = ?,comments = ?  where id = ?");
$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['mail']);
$stmt->bindValue(3,$_POST['password']);
$stmt->bindValue(4,$_POST['comments']);
$stmt->bindValue(5,$_SESSION['id']);

$stmt->execute();

$stmt = $pdo->prepare("select * from login_mypage where mail = ? && password = ?");
$stmt->bindValue(1,$_POST["mail"]);
$stmt->bindValue(2,$_POST["password"]);

$stmt->execute();



while($row=$stmt->fetch()){
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['mail']=$row['mail'];
    $_SESSION['password']=$row['password'];
    $_SESSION['picture']=$row['picture'];
    $_SESSION['comments']=$row['comments'];
}


$stmt = NULL;
    header("Location:http://localhost/mypage/mypage.php");
?>
<?php
$lastname="Masoody";
$password="1234";
//$email="f2006o@gmail.com";
//$sql=$pdo->prepare("INSERT INTO user_tbl (name,lastname,password,email) values (:name,:lastname,:password,:email)");
//
//$sql->bindParam("name",$name);
//$sql->bindParam("lastname",$lastname);
//$sql->bindParam("password",$password);
//$sql->bindParam("email",$email);
//
//$sql->execute();
//
//$id=$_GET['id'];
//$sql=$pdo->prepare("SELECT * FROM user_tbl WHERE id=:id ");
//$sql->bindParam("id",$id,PDO::PARAM_INT);
//$sql->execute();
//$row=$sql->fetchAll(PDO::FETCH_OBJ);
//var_dump($row);


$pdo=new PDO("mysql:host=localhost;dbname=phonebook","root","");
$name="id";
$value="2";
$sql=$pdo->prepare("select * from user_tbl where :name=2");
$sql->bindParam(':name',$name);
//$sql->bindParam(':value',$value);
$sql->execute();
$rows=$sql->fetchAll(PDO::FETCH_OBJ);
var_dump($rows);
<?php
$errors=[];
$emails=['sao@gmail.com','rabo@gmail.com','mamane@gmail.com'];
$name=$_POST['name'];
$email=$_POST['email'];
$service=$_POST['service'];
$message=$_POST['message'];
$hid=$_POST['hid'];

if(!array_key_exists('name',$_POST) || $name==''){
    $errors['name']="Vous n'avez pas rempli votre nom";
}
if(!array_key_exists('email',$_POST) || $email=='' || !filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email']="Votre email est invalide";
}
if(!array_key_exists('message',$_POST) || $message==null){
    $errors['message']="Votre message est vide";
}
if(!array_key_exists('service',$_POST) || !isset($emails[$service])){
    $errors['service']="Le service que vous avez demander n'existe pas";
}
if(!array_key_exists('hid',$_POST) || $_POST['hid'] !=''){
    $errors['hid']="Vous n avez pas ecrit votre nom";
}
session_start();

if(!empty($errors)){
    $_SESSION['errors']=$errors;
  
    $_SESSION['inputs']=$_POST;

    header('location: index.php');
}else{
    $_SESSION['success']=1;
 /*
    $sendto=$emails[$_POST['email']];
    $getfrom=$_POST['name'].'à contacter le site';
    $msg='<html lang="en"><head><title>Document</title></head><body></body></html>'
    $msg='<p>Bonjour</p>';
    $msg.='<p><strong>Nom:'.$_POST['name'].'</strong></p>';
    $msg.='<p><strong>Email:'.$_POST['email'].'</strong></p>';
    $msg.='<p><strong>Message:'.$_POST['message'].'</strong></p>';
    $msg.='<p><strong>Message:'.$_POST['REMOTE_ADDR'].'</strong></p>';
    $msg.='<p><strong>Message:'.$_POST['HTTP_USER_AGENT'].'</strong></p>';
    $msg.='</body></html>';

    */

    mail($sendto,$getfrom,$msg);
    header('location: index.php');

}
var_dump($errors);
?>
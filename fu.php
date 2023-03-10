<?php 

include_once("./dbInput.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use function PHPSTORM_META\exitPoint;

function mailSender($mailTo, $mailBody){

require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
   //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ashraf.uzzaman04082004@gmail.com';
    $mail->Password   = 'zkumgoppveqwmcka';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->addCustomHeader('Content-Type', 'text/html;charset=utf-8');
    $mail->setFrom('ashraf.uzzaman04082004@gmail.com');
    $mail->addAddress($mailTo);
    $mail->Subject = 'Test Mail';
    $mail->Body    = $mailBody;
    $mail->send();
//  echo '1';
} catch (Exception $e) {
// echo '0'; 
}
};


if (isset($_POST['create'])) {
if (isset($_POST['first_name'],$_POST['last_name'],$_POST['month'],$_POST['day'],$_POST['year'],$_POST['gender'],$_POST['address'],$_POST['country'],$_POST['username'],$_POST['number'],$_POST['email'],$_POST['password'])) {

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$country = $_POST['country'];
$username = $_POST['username'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($first_name)) {
  exit('Please Enter First Name!');
}
else if (empty($last_name)) {
  exit('Please Enter Last Name!');
}
else if ($month ==0) {
  exit('Please Select Date of month!');
}
else if ($day ==0) {
  exit('Please Select Birth Date!');
}
else if ($year ==0) {
  exit('Please Select Birth Year!');
}
else if ($gender ==0) {
  exit('Please Select Gender!');
}
else if (empty($address)) {
  exit('Please Enter address!');
}
else if (empty($country)) {
  exit('Please Enter country!');
}
else if (empty($username)) {
  exit('Please Enter username!');
}
else if (empty($number)) {
  exit('Please Enter Mobile number!');
}
else if (empty($email)) {
  exit('Please Enter email!');
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  exit('Please Enter a valid email!');
}
else if (empty($password)) {
  exit('Please Enter password!');
}
else {

  $select_all_email = $connect->query("SELECT * FROM `user` WHERE `email` = '$email'");
  $select_all_username = $connect->query( "SELECT * FROM `user` WHERE `username` = '$username'");

  if($select_all_email->num_rows != null){
      exit('Email address already exist!');
  }elseif($select_all_username->num_rows != null){
    exit('Username already exist!');
  }else{

    $_SESSION['all_data'] = $_POST;

    $_SESSION['mailiOTP'] = rand(100000, 999999); 
    $mailBody = "Your varification Code is ". $_SESSION['mailiOTP'];

    mailSender($email, $mailBody);
    exit('ok');
  }

}
}else{
  exit('Something Wrong!');
}
}


// otp

if (isset($_POST['confirm'])){
  if (isset($_POST['OTP'])){

    $first_name = $_SESSION['all_data']['first_name'];
    $last_name = $_SESSION['all_data']['last_name'];
    $day = $_SESSION['all_data']['day'];
    $month = $_SESSION['all_data']['month'];
    $year = $_SESSION['all_data']['day'];
    $gender = $_SESSION['all_data']['gender'];
    $address = $_SESSION['all_data']['address'];
    $country = $_SESSION['all_data']['country'];
    $username = $_SESSION['all_data']['username'];
    $number = $_SESSION['all_data']['number'];
    $email = $_SESSION['all_data']['email'];
    $password = $_SESSION['all_data']['password'];
    $OTP = $_POST['OTP'];

    if(empty($OTP)){
      exit('Please Enter your confirmation code!');
    }elseif ($_SESSION['mailiOTP'] != $OTP){
      exit('Please enter a valid code!');
    }else{
        $insert_data_query = "INSERT INTO `user`( `name`, `username`, `email`, `mobile`, `password`,  `address`, `country`, `gender`, `dob`) VALUES ('$first_name  $last_name ','$username','$email','$number','$password','$address','$country ','$gender','$day-$month-$year')";
        $insert_data = $connect->query($insert_data_query);

        if(!$insert_data){
           exit('Something went wrong!');
        }else{
             exit('ok');       
        }
    }
  }

 }



// login 

if (isset($_POST['login'])){
if (isset($_POST['email'],$_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($email)){
    exit('Enter your existing email!');
  }
  elseif(empty($password)){
    exit('Enter your password');
  }
  else{
  $select_all_email = $connect->query("SELECT * FROM `user` WHERE `email` = '$email'");
  $select_all_password = $connect->query( "SELECT * FROM `user` WHERE `password` = '$password'");

    if($select_all_email->num_rows !== 1){
        exit("Your email can't exist!");
    }elseif($select_all_password->num_rows !== 1){
        exit("Your password can't exist!");
    }else{
      exit('ok');
    }
  }

}
}





?>
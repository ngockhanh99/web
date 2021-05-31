<?php
//tao moi Session
session_start();
// ->md5 tao ra moi chuoi 16 ky tu tu mot chuoi dua vao
// ->uniqid tao ra ma khong bi chung
// ->rand tao chuoi random
$ranStr =uniqid(md5(rand()));
// cat tu chuoi da tao ra va chi lay 6 ky tu
$ranStr = substr($ranStr, 4, 6);
// dan cho SESSION co ten "cap_code" = chua vua tao
$_SESSION['captcha'] = $ranStr;
//tao moi anh tu mot anh co ten la "cap_bg.jpg"
$newImage = imagecreatefromjpeg("cap_bg.jpg");
// tao moi bo pha mau
$txtColor = imagecolorallocate($newImage, 0, 0, 0);
// tao anh capcha dang ham imagesstring():
imagestring($newImage, 5, 5, 5, $ranStr, $txtColor);
// tra ve cho trinh duyet vao bao cho trinh duyet biet dinh dang anh
header("Content-type: image/jpeg");
//tra ve anh
imagejpeg($newImage);
// huy bien anh
imagedestroy($newImage);
?>



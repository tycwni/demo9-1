<?php
header('content-type:image/jpeg;charset=utf-8');
$width=120;
$height=40;
$red=rand(200, 255);
$green=rand(200, 255);
$blue=rand(200, 255);
$img=imagecreatetruecolor($width, $height);
$colorBg=imagecolorallocate($img, $red, $green, $blue);
$colorBgd=imagecolorallocate($img, rand(100,150), rand(88,150),rand(80, 120));
$colorBge=imagecolorallocate($img, rand(150,240), rand(10,80), rand(150,206));
$colorBgx=imagecolorallocate($img, rand(50,80),rand(10, 100),rand(30,170));
$colorBgz=imagecolorallocate($img, rand(0,100),rand(0, 100),rand(0,100));
imagefill($img,0, 0, $colorBg);
imagerectangle($img, 0, 0, $width-1, $height-1, $colorBge);//画矩形
for ($i=0;$i<100;$i++){
    imagesetpixel($img, rand(0,$width-1), rand(0,$height-1), $colorBgd);//随机画点
}
for ($i=0;$i<rand(2, 5);$i++){
    imageline($img, rand(0,$width/2), rand(0,$height), rand($width/2,$width), rand(0,$height), $colorBgx);//画线
}
$strr=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$string='';
for ($i=0;$i<5;$i++){
$string.=$strr[rand(0, count($strr)-1)];
}
//imagestring($img, 15, 0, 0, $string, $colorBgz);
imagettftext($img, rand(15,25), rand(-5,5), rand(2,15), rand(25,35), $colorBgz, dirname(__FILE__) .'/font1691/ManyGifts.ttf', $string);
imagejpeg($img);
imagedestroy($img);
?>

<?php
// Cria a imagem com o captha - Requer bilioteca GD instalada

session_start();
 
$codigoCaptcha = substr(md5(time()), 0, 6);
 
$_SESSION['captcha'] = $codigoCaptcha;
 
$imagemCaptcha = imagecreatefrompng("fundocaptch.png");
 
$fonteCaptcha = imageloadfont("anonymous.gdf");
 
$corCaptcha = imagecolorallocate($imagemCaptcha, 255, 0, 0);
 
imagestring($imagemCaptcha, $fonteCaptcha, 15, 5, $codigoCaptcha, $corCaptcha);
 
header("Content-type: image/png");
 
imagepng($imagemCaptcha);
 
imagedestroy($imagemCaptcha);


?>

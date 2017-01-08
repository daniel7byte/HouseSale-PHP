<?php

header('Content-type: image/jpg');

// Entre mas se aproximea cero, mayor será la compresion
$p = 50;

require_once('../datosiniciales.php');

function getImages($fullName, $w, $h, $p, $dire, $imgdefecto){
	
	if(!file_exists('../'.$dire.$fullName.'_0.jpg')){
        if(!file_exists('../'.$dire.$fullName.'_1.jpg')){
            $fullName = '../'.$dire.$fullName.'_1.jpg';
        }else{
            $fullName = '../'.$imgdefecto;
        }
	}else{
		$fullName = '../'.$dire.$fullName.'_0.jpg';
	}
	
	// OBTENER INFORMACION DE LA IMAGEN ORIGINAL.
	list($ow, $oh, $xmime) = getimagesize($fullName);
	$imageSize = filesize($fullName);
	$mime = '';
	if($xmime == 2) $mime .= 'image/jpg';
	if($xmime == 3) $mime .= 'image/png';

	// LEER LA IMAGEN ORIGINAL
	$f = fopen($fullName,"r");
	$imageData = fread($f, $imageSize);
	fclose($f);

	// HACER EL RESIZE A $w x $h px, con $p% de compresion JPEG

    require_once('ImageResizer.php');

	$r = new ImageResizer();
	$newImage = $r->resize($imageData, $w, $h, $p, 'jpg', $ow, $oh);

	// EMITIR LA IMAGEN
	//header('Content-type: '.$mime);
	echo $newImage;
}

if(isset($_GET['id']) && isset($_GET['w']) && isset($_GET['h'])){
	getImages($_GET['id'], $_GET['w'], $_GET['h'], $p, $dire, $imgdefecto);
}
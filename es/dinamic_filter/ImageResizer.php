<?php
/**
 * ImageResizer
 *      a helper class to handle image resize.
 *
 *      example usage:
 *
 *  $fullName = '/anypath/image.jpg';
 *      list($ow, $oh, $xmime) = getimagesize($fullName);
 *      $imageSize = filesize($fullName);
 *      $mime = '';
 *      if($xmime == 2) $mime = 'image/jpg';
 *  if($xmime == 3) $mime = 'image/png';
 *
 *      $f = fopen($fullName,"r");
 *      $imageData = fread($f, $imageSize);
 *      fclose($f);
 *
 *      $r = new ImageResizer();
 *      $newImage = $r->resize($imageData, 160, 120, 70, 'jpg', $ow, $oh);
 *      header('Content-type: '.$mime);
 *      echo $newImage;
 *
 *
 * @author Christian Salazar <christiansalazarh@gmail.com>
 * @license NEW BSD.
 */
class ImageResizer {
    /**
     * resize
     *      resizes an image making it to fit into a rectangle
     *
     * @param mixed $image  Binary raw image data.
     * @param mixed $dw     destination viewport width
     * @param mixed $dh     destination viewport height
     * @param mixed $q      quality for jpg or png: 1 to 100.
     * @param mixed $imgtype desired output image type 'jpg' or 'png'
     * @param mixed $ow     original image width
     * @param mixed $oh     original image height
     * @return new image. you can echo it or use GD functions to handle it.
     */
    public function resize($image, $dw, $dh, $q, $imgtype, $ow, $oh){
        $im = imagecreatetruecolor($dw, $dh);
        $im_src = imagecreatefromstring($image);
        $_w = 0;
        $_h = 0;
        $this->_scaleVector($dw, $dh, 0.95, $ow, $oh, $_w, $_h);
        // displacement vector, this vector center the image.
        $dx = ($dw - $_w)/2;
        $dy = ($dh - $_h)/2;
        $fillcolor = imagecolorallocate($im,255,255,255);
        //$xcolor = imagecolorallocate($im, 200,200,200);
        imagefilledrectangle($im, 0,0,$dw, $dh, $fillcolor);
        //imagefilledrectangle($im, $dx,$dy, $dx + $_w, $dy + $_h, $xcolor);
        imagecopyresampled(
            $im, $im_src,
            $dx, $dy, 0, 0,
            $_w, $_h,
            $ow, $oh
        );
        if($imgtype == 'png')
            return imagepng($im, null, $q);
        return imagejpeg($im, null, $q);
    }
    /**
     * _scaleVector
     *
     *
     * @param mixed $dw             |       destination viewport:
     * @param mixed $dh             |               d = {w, h}
     * @param mixed $delta          |       delta: is a fixture measurement. max 1.
     * @param mixed $ow             |       original viewport to be scaled into "d":
     * @param mixed $oh             |               o = {w, h}
     * @param mixed $out_w
     * @param mixed $out_h
     * @access private
     * @author Christian Salazar H. <christiansalazarh@gmail.com>
     * @return void
     */
    private function _scaleVector($dw, $dh, $delta, $ow, $oh, &$out_w, &$out_h){
        $dR = $dw / $dh;
        if($dR >= 1){
            $out_w = $delta * $dw;
            $out_h = ($out_w * $oh) / $ow;
        }else{
            $out_h = $delta * $dh;
            $out_w = ($out_h * $ow) / $oh;
        }
    }
}
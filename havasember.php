<?php
$image = imagecreatetruecolor(800, 500);
$bg = imagecolorallocate($image, 0, 0, 0);
//szín
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);
$pink = imagecolorallocate($image, 255, 192, 203);
//első
imagefilledellipse($image, 400, 180, 80, 80, $white);
imagefilledellipse($image, 380, 170, 10, 10, $black);
imagefilledellipse($image, 420, 170, 10, 10, $black);
//kalap
imagefilledrectangle($image, 350, 140, 450, 142, $red);
imagefilledrectangle($image, 365, 110, 435, 139, $red);
//orr
imagefilledpolygon($image, array(
        380, 185,
        400, 180,
        400, 190
    ),
    3,
    $pink);
//második
imagefilledellipse($image, 400, 250, 100, 100, $white);
imagefilledellipse($image, 400, 240, 10, 10, $black);
imagefilledellipse($image, 400, 270, 10, 10, $black);
//harmadik
imagefilledellipse($image, 400, 345, 130, 130, $white);
imagefilledellipse($image, 400, 330, 10, 10, $black);
imagefilledellipse($image, 400, 355, 10, 10, $black);
imagefilledellipse($image, 400, 380, 10, 10, $black);
header("Content-type: image/png");
imagepng($image);
?>
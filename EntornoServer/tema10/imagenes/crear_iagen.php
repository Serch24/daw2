<?php
$mio = imagecreatefrompng("./foto.png");
header("Content-type: image/png");
imagepng($mio);
imagedestroy($mio);
?>

<?php
ini_set('memory_limit', '256M');


$old_file = "SamplePNGImage_200kbmb.png";

if (file_exists($old_file)) {

	$filepath = '';
	$filename = 'SamplePNGImage_200kbmb__1';

	$path_parts = pathinfo($old_file);
    $extension = $path_parts['extension'];
    $filename_path = $filepath . $filename . ".".$extension;
    $destination_path = $filename_path;

    if (strtolower($extension) == "jpg" || strtolower($extension) == "jpeg") {
        $uploadedfile = $old_file;
        $src = imagecreatefromjpeg($uploadedfile);
    } else if (strtolower($extension) == "png") {
        $uploadedfile = $old_file;
        $src = imagecreatefrompng($uploadedfile);
    } else {
        $uploadedfile = $old_file;
        $src = imagecreatefromgif($uploadedfile);
    }

    list($width, $height) = getimagesize($uploadedfile);

    $newwidth = 960;
    $newheight = 720;

    if ($width <= $newwidth && $height <= $newheight) {
        $newwidth = $width;
        $newheight = $height;
        $tmp = imagecreatetruecolor($width, $height);
    } else {
        if ($width > $height) {
            $newheight = ($height / $width) * $newwidth;
            $tmp = imagecreatetruecolor($newwidth, $newheight);
        } else {
            $newwidth = ($width / $height) * $newheight;
            $tmp = imagecreatetruecolor($newwidth, $newheight);
        }
    }

    if ((strtolower($extension) == "png") OR (strtolower($extension) == "gif")) {
        imagealphablending($tmp, false);
        imagesavealpha($tmp, true);
        $transparent = imagecolorallocatealpha($tmp, 255, 255, 255, 127);
        imagefilledrectangle($tmp, 0, 0, $newwidth, $newheight, $transparent);
    }

    imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

     if (strtolower($extension) == "jpg" || strtolower($extension) == "jpeg") {
        imagejpeg($tmp, $destination_path, 100);
    } elseif (strtolower($extension) == "png") {
        imagepng($tmp, $destination_path, 6);
    } else {
        imagegif($tmp, $destination_path);
    }
    chmod($destination_path, 0777);
    imagedestroy($src);
    imagedestroy($tmp);
}

function image_resize_png($source)
{

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $source, 90);
                
}
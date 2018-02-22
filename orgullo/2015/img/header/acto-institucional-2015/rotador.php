<?php

/*

	AUTOMATIC IMAGE ROTATOR
	Version 2.2 - December 4, 2003
	Copyright (c) 2002-2003 Dan P. Benjamin, Automatic, Ltd.
	All Rights Reserved.

	http://www.hiveware.com/imagerotator.php
	
	http://www.automaticlabs.com/
	
*/

	$folder = '.';

/*	

	Most users can safely ignore this part.  If you're a programmer,
	keep reading, if not, you're done.  Go get some coffee.

    If you'd like to enable additional image types other than
	gif, jpg, and png, add a duplicate line to the section below
	for the new image type.
	
	Add the new file-type, single-quoted, inside brackets.
	
	Add the mime-type to be sent to the browser, also single-quoted,
	after the equal sign.
	
	For example:
	
	PDF Files:

		$extList['pdf'] = 'application/pdf';
	
    CSS Files:

        $extList['css'] = 'text/css';

    You can even serve up random HTML files:

	    $extList['html'] = 'text/html';
	    $extList['htm'] = 'text/html';

    Just be sure your mime-type definition is correct!

*/

    $extList = array();
//	$extList['gif'] = 'image/gif';
	$extList['jpg'] = 'image/jpeg';
	$extList['jpeg'] = 'image/jpeg';
	$extList['JPG'] = 'image/jpeg';
	$extList['png'] = 'image/png';
	

// You don't need to edit anything after this point.


// --------------------- END CONFIGURATION -----------------------

$img = null;

if (substr($folder,-1) != '/') {
	$folder = $folder.'/';
}

if (isset($_GET['img'])) {
	$imageInfo = pathinfo($_GET['img']);
	if (
	    isset( $extList[ strtolower( $imageInfo['extension'] ) ] ) &&
        file_exists( $folder.$imageInfo['basename'] )
    ) {
		$img = $folder.$imageInfo['basename'];
	}
} else {
	$fileList = array();
	$handle = opendir($folder);
	while ( false !== ( $file = readdir($handle) ) ) {
		$file_info = pathinfo($file);
		if (
		    isset( $extList[ strtolower( $file_info['extension'] ) ] )
		) {
			$fileList[] = $file;
		}
	}
	closedir($handle);

	if (count($fileList) > 0) {
		$imageNumber = time() % count($fileList);
		$img = $folder.$fileList[$imageNumber];
	}
}

if ($img!=null) {
	$imageInfo = pathinfo($img);
	$contentType = 'Content-type: '.$extList[ $imageInfo['extension'] ];
	header ($contentType);
	
 /* fixes cahce issue, thanks to dchapiesky */
        header( "Expires: Mon, 20 Dec 1998 01:00:00 GMT" );
        header( "Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
        header( "Cache-Control: no-cache, must-revalidate" );
        header( "Pragma: no-cache" );
	
	readfile($img);
} else {
	if ( function_exists('imagecreate') ) {
		header ("Content-type: image/png");
		$im = @imagecreate (100, 100)
		    or die ("Cannot initialize new GD image stream");
		$background_color = imagecolorallocate ($im, 255, 255, 255);
		$text_color = imagecolorallocate ($im, 0,0,0);
		imagestring ($im, 2, 5, 5,  "IMAGE ERROR", $text_color);
		imagepng ($im);
		imagedestroy($im);
	}
}

?>

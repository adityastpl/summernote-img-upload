<?php

$errorImgFile = "./img/img_upload_error.jpg";
if(!empty($_FILES['file'])) {
	$destinationFilePath = './img-uploads/'.$_FILES['file']['name'];
	if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)) {
		echo $errorImgFile;
	} else {
		echo $destinationFilePath;
	}
} else {
	echo $errorImgFile;
}

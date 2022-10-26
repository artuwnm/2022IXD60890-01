<?php


function print_p($v) {
	echo "<pre>", print_r($v), "</pre>";
}

function file_get_json($filename){
	$file = file_get_contents($filename);
	return json_decode($file);
}

function file_update_json($filename,$file_contents){
	$data = json_encode($file_contents);
	 file_put_contents($filename, $data);
}


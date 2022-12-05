<?php

function MYSQLIAuth(){
	return [
		"localhost", //mysql host
		"lchen_ixd608", //mysql user name
		"iBWgm2&oZ", //mysql user password
		"lchen_ixd608" //mysql database
	];
}


function PDOAuth(){
	return [
		"mysql:host=localhost;dbname=lchen_ixd608", //mysql host
		"lchen_ixd608", //mysql user name
		"iBWgm2&oZ", //mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}
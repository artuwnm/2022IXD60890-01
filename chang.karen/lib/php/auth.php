<?php

function MYSQLIAuth(){
	return [
		"localhost",  //mysql host
		"stephenking", //mysql username
		"stephenking", //mysql user password
		"karen_ixd608" //mysql database
	];
}

function PDOAuth(){
	return [
		"mysql:host=localhost;dbname=karen_ixd608",  // host and database name
		"stephenking", //mysql username
		"stephenking", //mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}
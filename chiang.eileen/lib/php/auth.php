<?php

function MYSQLIAuth() {
	return [
		"localhost", // mysql host
		"echiang_ixd608", // mysql username
		"echiang_ixd608", //mysql user password
		"echiang_ixd608" // mysql database name
	];
}

function PDOAuth() {
	return [
		"mysql:host=localhost;dbname=echiang_ixd608", // host and database name
		"echiang_ixd608", // mysql username
		"echiang_ixd608", //mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}
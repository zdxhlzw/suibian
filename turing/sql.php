<?php
	$url="localhost:3306";
	$user="lzw";
	$psw="123456";
	$conn=mysql_connect($url,$user,$psw);
	if(!$conn){
		echo '连接不成功';
	}else{
		echo $conn;
	}
	mysql_create_db('suibian');
	?>
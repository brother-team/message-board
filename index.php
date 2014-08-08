<?php 
$link=MySQL_connect("localhost","root","root")  
or die("connect to database failed");  
$result=MySQL_query("create database trampt")  
or die("query failed");  
MySQL_select_db("trampt");  
MySQL_query("set names UTF8");  
$result=MySQL_query("create table Users(userid int auto_increment primary key,username varchar(50),password varchar(50))")  
or die("query failed");  
MySQL_query("insert into users(username,password) values('博客园','123')")  
or die("insert record failed");  
MySQL_close($link);  
?>
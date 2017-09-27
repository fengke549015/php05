<?php 
// <!-- 	-- 创建数据库
// CREATE DATABASE IF NOT EXISTS ss19_shop;

// -- 选择数据库
// USE ss19_shop;

// -- 创建会员表

//  创建后台用户表
$arr=array(
	'DROP TABLE IF EXISTS user;',
	'CREATE TABLE IF NOT EXISTS user(
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(18) NOT NULL unique,
	password CHAR(32) NOT NULL,
	level  TINYINT NOT NULL DEFAULT 0, 
	addtime  INT UNSIGNED NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;',

//创建用户后台附属表
'DROP TABLE IF EXISTS user_u;',
'CREATE TABLE IF NOT EXISTS user_u(
	id INT AUTO_INCREMENT PRIMARY KEY,
	uid INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(18) NOT NULL ,
	age TINYINT UNSIGNED NOT NULL ,
	sex TINYINT UNSIGNED NOT NULL ,
	phone CHAR(11) ,
	email VARCHAR(60),
	pic   VARCHAR(255),
	hobby   VARCHAR(255),
	marry   TINYINT UNSIGNED,
	address   VARCHAR(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;',




//--超链接数据库
'DROP TABLE IF EXISTS hyperlink;',

'CREATE TABLE IF NOT EXISTS hyperlink(
	id INT  AUTO_INCREMENT PRIMARY KEY,
	linkname VARCHAR(18) NOT NULL  unique,
	linkadd	 VARCHAR(255) NOT NULL,
	display INT NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;',



//--修改表结构


//--创建商品的字段名
'DROP TABLE IF EXISTS goods;',
'CREATE TABLE IF NOT EXISTS goods(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	typeid INT NOT NULL,
	price DECIMAL(8,2) NOT NULL,
	store INT  NOT NULL,
	sales INT  NOT NULL DEFAULT 0 ,
	pic  VARCHAR(255) NOT NULL,
	`status` TINYINT NOT NULL DEFAULT 0,
	company VARCHAR(255) NOT NULL ,
	descr VARCHAR(255) 
)ENGINE =InnoDB	 DEFAULT CHARSET=utf8; ',

// --需要创建一个前台页面用户的数据库
'DROP TABLE IF EXISTS user_home;',
'CREATE TABLE IF NOT EXISTS user_home(
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(18) NOT NULL unique,
	phone CHAR(11) ,
	sex TINYINT UNSIGNED NOT NULL ,
	password CHAR(32) NOT NULL,
	email VARCHAR(60),
	pic   VARCHAR(255)
		
)ENGINE=InnoDB DEFAULT CHARSET=utf8;',

// --需要创建订单表
'DROP TABLE IF EXISTS orders;',
'CREATE TABLE IF NOT EXISTS orders(
	id INT AUTO_INCREMENT PRIMARY KEY,
	uid INT NOT NULL ,
	linkname VARCHAR(30) NOT NULL ,
	address VARCHAR(255) NOT NULL ,
	phone CHAR(11) NOT NULL ,
	code CHAR(6) NOT NULL ,
	total DECIMAL(8,2) NOT NULL ,
	status TINYINT	
)ENGINE=InnoDB DEFAULT CHARSET=utf8;',

// --需要创建订单详情表
'DROP TABLE IF EXISTS orders_u;',
'CREATE TABLE IF NOT EXISTS orders_u(
	id INT AUTO_INCREMENT PRIMARY KEY,
	oid INT NOT NULL ,
	gid INT NOT NULL,
	gname VARCHAR(255) NOT NULL,
	price DECIMAL(8,2) NOT NULL ,
	gnum INT NOT NULL,
	uid INT NOT NULL, 
	pic VARCHAR(255) NOT NULL 
	
)ENGINE=InnoDB DEFAULT CHARSET=utf8;',

// --创建一个储存用户收货联系人的表
'DROP TABLE IF EXISTS user_address;',
'CREATE TABLE IF NOT EXISTS user_address(
	id INT AUTO_INCREMENT PRIMARY KEY,
	uid INT NOT NULL,
	addname VARCHAR(18) NOT NULL ,
	phone CHAR(11) NOT NULL,
	address   VARCHAR(255) NOT NULL,
	code CHAR(6) NOT NULL 

	
)ENGINE=InnoDB DEFAULT CHARSET=utf8;',
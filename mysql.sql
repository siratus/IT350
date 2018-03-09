CREATE DATABASE QTEA;
USE QTEA;

CREATE TABLE persons (
	personID int NOT NULL,
	fName varchar (50) NOT NULL,
	lName varchar (50) NOT NULL,
	phonenumber varchar (11) NOT NULL,
	address varchar (100) NOT NULL,
	email varchar (50) NOT NULL,
	password varchar (50) NOT NULL,
	roleID int NOT NULL,
	PRIMARY KEY (personID)

);

CREATE TABLE roles (
	roleID int NOT NULL ,
	role_name varchar (50) NOT NULL,
	can_edit_self int NOT NULL,
	can_edit_cust int NOT NULL,
	can_edit_emp int NOT NULL,
	discount decimal NOT NULL,

	PRIMARY KEY (roleID)
);

CREATE TABLE payments (
	cardID int NOT NULL,
	cc_number varchar (25) NOT NULL,
	cvc varchar (3) NOT NULL,
	exp_date date NOT NULL,
	cc_type varchar (25) NOT NULL,
	PRIMARY KEY (cardID)
);

CREATE TABLE bobas (
	bobaID int NOT NULL,
	flavor varchar (30) NOT NULL,
	size varchar (25) NOT NULL,
	tapioca varchar (20) NOT NULL,
	price decimal (15,2) NOT NULL,
	PRIMARY KEY (bobaID)
);

CREATE TABLE chickens (
	chickenID int NOT NULL,
	sauce varchar (30) NOT NULL,
	size varchar (30) NOT NULL,
	price decimal (15,2) NOT NULL,
	PRIMARY KEY (chickenID)
);

CREATE TABLE orders(
	orderID int NOT NULL,
	quantity int NOT NULL,
	PRIMARY KEY (orderID)
);

CREATE TABLE cart (
	cartID int NOT NULL,
	total decimal (15,2) NOT NULL,
	PRIMARY KEY (cartID)
);




insert into role values (0, 'customer',1,0,0,0);
insert into role values (1, 'employee',1,1,0,0.2);
insert into role values (2, 'manager',1,1,1,0.5);

insert into boba values (0, 'mango', 's', 'black pearl', 2.50);
insert into boba values (1, 'mango', 'm', 'black pearl', 3.50);
insert into boba values (2, 'mango', 'l', 'black pearl', 4.50);
insert into boba values (3, 'taro', 's', 'black pearl', 2.50);
insert into boba values (4, 'taro', 'm', 'black pearl', 3.50);
insert into boba values (5, 'taro', 'l', 'black pearl', 4.50);
insert into boba values (6, 'honeydew', 's', 'black pearl', 2.50);
insert into boba values (7, 'honeydew', 'm', 'black pearl', 3.50);
insert into boba values (8, 'honeydew', 'l', 'black pearl', 4.50);

insert into chicken values (0, 'sesame garlic', '5pc', 4.72);
insert into chicken values (0, 'sesame garlic', '8pc', 6.12);
insert into chicken values (0, 'sesame garlic', '12pc', 8.42);
insert into chicken values (0, 'sesame garlic', '28pc', 18.22);
insert into chicken values (0, 'honey garlic', '5pc', 4.72);
insert into chicken values (0, 'honey garlic', '8pc', 6.12);
insert into chicken values (0, 'honey garlic', '12pc', 8.42);
insert into chicken values (0, 'honey garlic', '24pc', 18.22);
insert into chicken values (0, 'classic spicy', '5pc', 4.72);
insert into chicken values (0, 'classic spicy', '8pc', 6.12);
insert into chicken values (0, 'classic spicy', '12pc', 8.42);
insert into chicken values (0, 'classic spicy', '24pc', 18.22);


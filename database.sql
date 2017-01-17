/*
Created		17. 01. 2017
Modified		17. 01. 2017
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/


Create table customers (
	id Serial NOT NULL,
	name Varchar(10) NOT NULL,
	surname Varchar(20) NOT NULL,
	email Varchar(35) NOT NULL,
	username Varchar(20) NOT NULL,
	password Varchar(20) NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;

Create table plans (
	id Serial NOT NULL,
	name Varchar(25) NOT NULL,
	size Float(4,2) NOT NULL,
	order_date Timestamp NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;

Create table customer_plan (
	id Serial NOT NULL,
	id_customer Bigint UNSIGNED NOT NULL,
	id_plan Bigint UNSIGNED NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;


Alter table customer_plan add Foreign Key (id_customer) references customers (id) on delete  restrict on update  restrict;
Alter table customer_plan add Foreign Key (id_plan) references plans (id) on delete  restrict on update  restrict;



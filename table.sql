drop database tours_travels;

create database tours_travels;

use tours_travels;

create table if not EXISTS User(User_Id int primary key AUTO_INCREMENT, FullName varchar(20) NOT NULL, Email varchar(20) not null, Password varchar(20) not null, Role varchar(10));

desc User;

create table if not exists Hotel (Hotel_Id int primary key AUTO_INCREMENT, HotelName varchar(50), City VARCHAR(10), Description text, HotelType varchar(20), RoomNumber int, StaffNumber int, Image varchar(50));

desc Hotel;

create table if not EXISTS Custom_Trek(Trek_id int primary key AUTO_INCREMENT, FromLocation varchar(30), ToLocation varchar(30), NumberOfDays int, Difficulty varchar(20), Status varchar(20));

desc Custom_Trek;

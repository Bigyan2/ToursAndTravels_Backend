drop database tours_travels;

create database tours_travels;

use tours_travels;

create table if not EXISTS User(User_Id int primary key AUTO_INCREMENT, FullName varchar(20) NOT NULL, Email varchar(20) not null, Password varchar(20) not null, Role varchar(10));

desc User;

create table if not exists Hotel(Hotel_Id int primary key AUTO_INCREMENT, HotelName varchar(50), City VARCHAR(10), Description text, HotelType varchar(20), RoomNumber int, StaffNumber int, Image varchar(50));

desc Hotel;

create table if not EXISTS Custom_Package(Package_id int primary key AUTO_INCREMENT, FromLocation varchar(30), ToLocation varchar(30), NumberOfDays int, Contact varchar(10), Status varchar(20));

desc Custom_Trek;

create table if not exists Ratings(RateId int primary key AUTO_INCREMENT, Username varchar(50), Rating int);

desc Ratings;

create table if not exists Feedback(FeedbackId int primary key AUTO_INCREMENT, Username varchar(50), feedback text);

desc Feedback;

create table if not exists Packages(Package_id int primary key AUTO_INCREMENT, PackageName varchar(50), PackageTime int, PackageLocation varchar(50), PackageType varchar(50), PackageCost BIGINT, LocationPhoto varchar(100));

desc Packages;

create table if not exists 


Insert into Packages(PackageName, PackageTime, PackageLocation, PackageCost, LocationPhoto, Description) VALUES('',5,'Jhapa',6,'','"You will never be able to get enough of Pokhara.” “She told me Pokhara is so beautiful that you will experience a myriad of unforgettable moments. You will never be able to get enough of Pokhara.” “Pokhara has a magical serenity that is not found in any other place!”');
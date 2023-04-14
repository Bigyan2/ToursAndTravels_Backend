create table  User(User_Id int primary key AUTO_INCREMENT, FullName varchar(20) NOT NULL, Email varchar(20) not null, Password varchar(20) not null, Role varchar(10));

create table Package(Package_id int primary key AUTO_INCREMENT, PackageName varchar(100) NOT NULL, Days int, LocationName varchar(50), ImageLink varchar(100), Rating int, Price bigint, Difficulty varchar(50), About text, Itinerary text);

create table Custom_Package(CustomId int primary key AUTO_INCREMENT);

create table Bookings(BookingsId int primary key AUTO_INCREMENT, User_Id int, Package_id int, status varchar(100) DEFAULT "submitted" ,FOREIGN KEY (User_Id) REFERENCES User(User_Id),FOREIGN KEY (Package_id) REFERENCES Package(Package_id) ON DELETE CASCADE);

create table Feedback(FeedbackId int primary key AUTO_INCREMENT, User_Id int, Feedback text, status varchar(100) DEFAULT "submitted" ,FOREIGN KEY (User_Id) REFERENCES User(User_Id));

create table Rating(RatingId int primary key AUTO_INCREMENT, User_Id int, Ratings int, FOREIGN KEY (User_Id) REFERENCES User(User_Id));

create table Hotel(HotelId int primary key AUTO_INCREMENT, HotelName varchar(100), HotelLocation varchar(100), HotelImage varchar(255), HotelDescription text);

insert into Package(PackageName, Days, LocationName, ImageLink, Rating, Price, Difficulty) VALUES("Annapurna Trek",16,"Annapurna", "https://source.unsplash.com/1200x600/?annapurna", 5,60000,"Challenging");
insert into Package(PackageName, Days, LocationName, ImageLink, Rating, Price, Difficulty) VALUES("Pokhara Tour",7,"Pokhara", "https://source.unsplash.com/1200x600/?pokhara", 5,50000,"Moderate");
insert into Package(PackageName, Days, LocationName, ImageLink, Rating, Price, Difficulty) VALUES("Ruby Valley Trek",5,"Ganesh Himal", "https://source.unsplash.com/1200x600/?ganesh/himal", 5,40000,"Challenging");
insert into Package(PackageName, Days, LocationName, ImageLink, Rating, Price, Difficulty) VALUES("EBC Short Trek",10,"everest", "https://source.unsplash.com/1200x600/?everest", 5,100000,"Challenging");
insert into Package(PackageName, Days, LocationName, ImageLink, Rating, Price, Difficulty) VALUES("Ghorepani Poonhill Trek",5,"Myagdi", "https://source.unsplash.com/1200x600/?ghorepani", 5,45000,"Moderate");
insert into Package(PackageName, Days, LocationName, ImageLink, Rating, Price, Difficulty) VALUES("Lantang Trek",8,"Rasuwa", "https://source.unsplash.com/1200x600/?lantang", 5,55000,"Moderate");




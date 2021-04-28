CREATE DATABASE PhotoAlbum;

USE PhotoAlbum;

CREATE TABLE ALBUM(
  Album_Id int NOT NULL AUTO_INCREMENT,
  User_Id int NOT NULL,
  Album_Cover varchar(50) NOT NULL,
  Album_Title varchar(50) NOT NULL,
  Album_Notes varchar(50) NOT NULL,
  CONSTRAINT AlbumPK PRIMARY KEY (Album_Id)
);


CREATE TABLE PICTURES(
  Picture_Id int NOT NULL AUTO_INCREMENT,
  Album_Id int NOT NULL,
  Picture_Image varchar(50) NOT NULL,
  Picture_Title varchar(50) NOT NULL,
  Picture_Note varchar(50) NOT NULL,
  CONSTRAINT PicturePK PRIMARY KEY (Picture_Id)
);


CREATE TABLE USERS (
  User_Id int NOT NULL AUTO_INCREMENT,
  User_Name text NOT NULL,
  User_Email varchar(35) NOT NULL,
  User_Password varchar(35) NOT NULL,
  User_Dob text NOT NULL,
  User_Dom varchar(35) NOT NULL,
  User_Picture varchar(50) NOT NULL,
  CONSTRAINT UserPK PRIMARY KEY (User_Id)
);

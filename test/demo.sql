
CREATE DATABASE `ktra` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;


CREATE TABLE IF NOT EXISTS `account` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `email` VARCHAR(100),
  `password` VARCHAR(100),
  `phone` VARCHAR(10),
  `address` VARCHAR(100)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `course` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `price` FLOAT(10,3),
  `sale` FLOAT(10,3),
  `teacher` VARCHAR(100),
  `content` VARCHAR(100)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `courseRegister` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `email` VARCHAR(100),
  `password` VARCHAR(100),
  `phone` VARCHAR(10),
  `address` VARCHAR(100),
  `account` INT,
  `course` INT,
  FOREIGN KEY (account) REFERENCES account(id),
  FOREIGN KEY (course) REFERENCES course(id)
) ENGINE = InnoDB;

INSERT INTO `account` VALUES
(1,'Hoàng Văn Đức','hduc@gmail.com',12345678,'0988927605','Hà Nội'),
(2,'Nguyễn Anh Huy','ahuy@gmail.com',123456789,'0981925309','Nam Định'),
(3,'Hoàng Thanh Tú','tus@gmail.com',123456,'0982927636','Hải Phòng')
;

INSERT INTO `course` VALUES
(1,'PHP',1200000,15,'Mr Alex','Lorem ipsum dolor sit amet consectetur adipisicing elit'),
(2,'HTML',1500000,17,'Mr Michael','Lorem ipsum dolor sit amet consectetur adipisicing'),
(3,'MYSQL',1700000,19,'Mr David','Lorem ipsum dolor sit amet consectetur elit'),
(4,'JS',2000000,20,'Mr John','Lorem ipsum dolor sit amet adipisicing elit'),
(5,'JAVA',2400000,21,'Mr Paul','Lorem ipsum dolor sit consectetur adipisicing elit')
;




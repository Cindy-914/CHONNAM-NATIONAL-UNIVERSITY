create table members (
    num int not null auto_increment,
    id char(15) not null,
    pass char(15) not null,
    name char(10) not null,
    email char(80),
    regist_day char(20),
    level int,
    point int,
    primary key(num)
);


CREATE TABLE board (
  num int NOT NULL,
  id char(15) NOT NULL,
  name char(10) NOT NULL,
  subject char(200) NOT NULL,
  content text NOT NULL,
  regist_day char(20) NOT NULL,
  hit int NOT NULL,
  file_name char(40) DEFAULT NULL,
  file_type char(40) DEFAULT NULL,
  file_copied char(40) DEFAULT NULL
)
CREATE TABLE members (
    num INT NOT NULL AUTO_INCREMENT,
    id CHAR(15) NOT NULL,
    pass CHAR(15) NOT NULL,
    name CHAR(10) NOT NULL,
    email CHAR(80),
    postcode VARCHAR(20),           
    address VARCHAR(255),           
    detail_address VARCHAR(255),   
    phone VARCHAR(15),  
    regist_day CHAR(20),
    level INT,
    point INT,
    PRIMARY KEY(num)
);
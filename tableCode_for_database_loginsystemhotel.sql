
CREATE TABLE users (
    idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    uidUsers TINYTEXT NOT NULL,
    emailUsers TINYTEXT NOT NULL,
    pwdUsers LONGTEXT NOT NULL,
    firstName TINYTEXT NOT NULL,
    lastName TINYTEXT NOT NULL,
    phoneNumber TINYTEXT NOT NULL
);


CREATE TABLE booking (
    idUsers INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    uidUsers TINYTEXT NOT NULL,
    checkinDate DATE NOT NULL,
    checkoutDate DATE NOT NULL,
    roomType TINYTEXT NOT NULL,
    paymentType TINYTEXT NOT NULL,
    roomNumber INT NOT NULL
);

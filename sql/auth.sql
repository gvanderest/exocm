-- create an authentication user table
DROP TABLE IF EXISTS users;
CREATE TABLE users (
	id			INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	username	VARCHAR(255),
	email		VARCHAR(255),
	first_name	VARCHAR(255),
	last_name	VARCHAR(255),
	password	VARCHAR(255),
	photo		VARCHAR(255)
);

INSERT INTO users VALUES ('', 'admin', 'admin@domain.com', 'Admin', 'User', MD5('password'), '');

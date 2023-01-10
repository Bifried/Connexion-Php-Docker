CREATE TABLE IF NOT EXISTS User
(
    id        INT          NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username  VARCHAR(255) NOT NULL UNIQUE,
    password  VARCHAR(255) NOT NULL,
    email     VARCHAR(255) NOT NULL,
    firstName VARCHAR(255),
    lastName  VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS Post
(
    id      INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content TEXT,
    author  int NOT NULL
);

CREATE TABLE if not EXISTS `comments`(
    `comment_id` INT NOT NULL auto_increment,
    `username` VARCHAR(255),
    `id` INT,
    `created` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `content` TEXT,
    PRIMARY KEY (`comment_id`)
);


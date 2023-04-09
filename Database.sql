/*Adatbázis létrehozás*/
CREATE DATABASE IF NOT EXISTS hegedus_alex_koppany CHARACTER SET utf8 COLLATE utf8_hungarian_ci;

/*User adattábla létrehozás*/
CREATE TABLE IF NOT EXISTS hegedus_alex_koppany.users
(
    id INT 
    NOT NULL
    AUTO_INCREMENT, 
    
    user_name VARCHAR(1000) 
    CHARACTER SET utf8 
    COLLATE utf8_hungarian_ci,
    
    PRIMARY KEY (id)
);

/*Users tábla feltöltés*/
INSERT INTO hegedus_alex_koppany.users (user_name) VALUES ('Natalie Baker');
INSERT INTO hegedus_alex_koppany.users (user_name) VALUES ('Ethan Kim');
INSERT INTO hegedus_alex_koppany.users (user_name) VALUES ('Chloe Carter');
INSERT INTO hegedus_alex_koppany.users (user_name) VALUES ('Jackson Lee');
INSERT INTO hegedus_alex_koppany.users (user_name) VALUES ('Maya Patel');
INSERT INTO hegedus_alex_koppany.users (user_name) VALUES ('Levi Johnson');
INSERT INTO hegedus_alex_koppany.users (user_name) VALUES ('Ava Davis');
INSERT INTO hegedus_alex_koppany.users (user_name) VALUES ('Benjamin Wright');
INSERT INTO hegedus_alex_koppany.users (user_name) VALUES ('Scarlett Mitchell');
INSERT INTO hegedus_alex_koppany.users (user_name) VALUES ('Caleb Coope');



/*Advertisements tábla létrehozás*/
CREATE TABLE IF NOT EXISTS hegedus_alex_koppany.advertisements
(
    id INT 
    NOT NULL
    AUTO_INCREMENT, 
    
    user_id INT,

    title VARCHAR(1000) 
    CHARACTER SET utf8 
    COLLATE utf8_hungarian_ci,
    
    PRIMARY KEY (id),
    UNIQUE (id, user_id)
);

/*Advertisements tábla feltöltés*/
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('9','SwiftPromo');
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('7','BoostBlast');
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('5','SparkSphere');
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('10','FlashFrenzy');
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('7','SwiftPromo');
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('5','BoostBlast');
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('3','SparkSphere');
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('1','FlashFrenzy');
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('4','SwiftPromo');
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('3','BoostBlast');
INSERT INTO hegedus_alex_koppany.advertisements (user_id, title) VALUES ('8','SparkSphere');

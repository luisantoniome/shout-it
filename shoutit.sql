CREATE DATABASE shoutit;

USE shoutit;

CREATE TABLE shouts(
	id INT NOT NULL AUTO_INCREMENT,
	user VARCHAR(50) NOT NULL,
	message TEXT NOT NULL,
	time TIME NOT NULL,
	PRIMARY KEY(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO shouts(user, message, time) VALUES
	("John", "Using Modernizr with Flexbox", "10:10AM"),
	("Landon", "Learn the basics you need to get started with Swift.", "10:11AM"),
	("Sam", "Do you have International SEO potential?", "10:13AM"),
	("Alex", "Good morning and remember to check Twitter Highlights.", "10:15AM"),
	("Ryan", "If you do use an ad-blocker, please support your fav publishers by purchasing their products.", "10:15AM");
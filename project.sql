DROP TABLE Transaction;
DROP TABLE Restaurants;
DROP TABLE Customer;

CREATE TABLE Customer (
customerID INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(25) NOT NULL,
phoneNumber VARCHAR(25) NOT NULL,
loyaltyPoints INT,
pointsValue DECIMAL (9,2)
)ENGINE=INNODB;

CREATE TABLE Restaurants (
restaurantsName VARCHAR (25) PRIMARY KEY,
deliveryRate INT,
collectionRate INT
)ENGINE=INNODB;

CREATE TABLE Transaction (
transactionID INT PRIMARY KEY AUTO_INCREMENT,
clientID INT NOT NULL,
restaurant VARCHAR (25) NOT NULL,
deliveryType VARCHAR (25) NOT NULL,
FOREIGN KEY (restaurant) REFERENCES Restaurants(restaurantsName),
FOREIGN KEY (clientID) REFERENCES Customer(customerID)
)ENGINE=INNODB;

INSERT INTO Customer (name, phoneNumber, loyaltyPoints) VALUES ('Tim Johnstone', 037492493759, 245);
INSERT INTO Customer (name, phoneNumber, loyaltyPoints) VALUES ('John Smith', 084632826384, 100);
INSERT INTO Customer (name, phoneNumber, loyaltyPoints) VALUES ('George Telford', 012345678910, 1000);
INSERT INTO Customer (name, phoneNumber, loyaltyPoints) VALUES ('Mary Towers', 034952719645, 300);
INSERT INTO Customer (name, phoneNumber, loyaltyPoints) VALUES ('Jim Hollywood', 039825456182, 25);
INSERT INTO Customer (name, phoneNumber, loyaltyPoints) VALUES ('Rob Martin', 003482361287, 450);
INSERT INTO Customer (name, phoneNumber, loyaltyPoints) VALUES ('Amy Marshall', 067318246851, 95);
INSERT INTO Customer (name, phoneNumber, loyaltyPoints) VALUES ('Stephen Hamilton', 023491673520, 455);
INSERT INTO Customer (name, phoneNumber, loyaltyPoints) VALUES ('Lauren Fraser', 016720961743, 150);
UPDATE Customer SET pointsValue = loyaltyPoints * 0.05;

INSERT INTO Restaurants VALUES ('Pizza Tonight', 10, 0);
INSERT INTO Restaurants VALUES ('Himalaya', 7, 0);
INSERT INTO Restaurants VALUES ('Speedy Meal', 5, 7);
INSERT INTO Restaurants VALUES ('Burgerzilla', 0, 7);
INSERT INTO Restaurants VALUES ('Best Burritos', 0, 9);

INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES (2, 'Burgerzilla', 'Pick-Up');
INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES (1, 'Speedy Meal', 'Delivery');
INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES (6, 'Best Burritos', 'Pick-Up');
INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES (4, 'Pizza Tonight', 'Delivery');
INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES (5, 'Speedy Meal', 'Delivery');
INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES (8, 'Himalaya', 'Delivery');
INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES (3, 'Speedy Meal', 'Pick-Up');
INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES (7, 'Himalaya', 'Delivery');
INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES (1, 'Pizza Tonight', 'Delivery');
INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES (9, 'Himalaya', 'Delivery');

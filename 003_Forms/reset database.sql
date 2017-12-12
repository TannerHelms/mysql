drop table MyGuests;
CREATE TABLE `MyGuests` (
`id` int(11) NOT NULL auto_increment,
`firstname` varchar(32) NOT NULL,
`lastname` varchar(32) NOT NULL,
`email` varchar(32) NOT NULL,
PRIMARY KEY (`id`)
);

INSERT INTO `MyGuests` VALUES(1, 'Bob', 'Baker', 'example@gmail.com');
INSERT INTO `MyGuests` VALUES(2, 'Tim', 'Thomas', 'example@gmail.com');
INSERT INTO `MyGuests` VALUES(3, 'Rachel', 'Roberts', 'example@gmail.com');
INSERT INTO `MyGuests` VALUES(4, 'Sam', 'Smith', 'example@gmail.com');
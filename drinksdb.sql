

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `drink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `review` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


INSERT INTO `drink` (`id`, `name`, `type`, `price`, `origin`, `image`, `review`) VALUES
(1, 'Caffè Misto', 'Classic', 2.25, 'France', 'Images/Coffee/cafe-misto.jpg', 'A coffee beverage consisting strong or bold coffee (sometimes espresso) mixed with scalded milk in approximately a 1:1 ratio.'')'),
(2, 'Espresso American', 'Espresso', 3.25, 'Italy', 'Images/coffee/espresso.jpg', 'Similar in strength and taste to American-style brewed coffee, but packs a punch'),
(3, 'White Chocolate Mocha', 'Espresso', 3.25, 'Italy', 'Images/coffee/white-chocolate.jpg', 'Espresso with white chocolate perfect for any weather.'),
(4, 'Cinnamon Dolce Latte', 'Latte', 4.2, 'Portugal', 'Images/Coffee/Cinammon-dolce.jpg', 'We add freshly steamed milk and cinnamon dolce-flavored syrup to our classic espresso, topped with sweetened whipped cream and a cinnamon dolce topping to bring you specialness in a treat.');
-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2017 a las 16:57:25
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `joygle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banderas`
--

CREATE TABLE `banderas` (
  `id` bigint(20) NOT NULL,
  `casa_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `banderas`
--

INSERT INTO `banderas` (`id`, `casa_id`) VALUES
(1, '5729401'),
(2, '5728482'),
(3, '5720777'),
(4, '5732057'),
(5, '5733947'),
(6, '5737997');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscasas`
--

CREATE TABLE `datoscasas` (
  `id` int(10) UNSIGNED NOT NULL,
  `dato1` varchar(60) DEFAULT NULL,
  `dato2` int(10) UNSIGNED NOT NULL,
  `dato3` varchar(60) DEFAULT NULL,
  `dato4` varchar(60) DEFAULT NULL,
  `dato5` int(60) UNSIGNED DEFAULT NULL,
  `dato6` varchar(60) DEFAULT NULL,
  `dato7` varchar(60) DEFAULT NULL,
  `dato8` varchar(60) DEFAULT NULL,
  `dato9` varchar(60) DEFAULT NULL,
  `dato10` varchar(60) DEFAULT NULL,
  `dato11` varchar(60) DEFAULT NULL,
  `dato12` varchar(60) DEFAULT NULL,
  `dato13` varchar(60) DEFAULT NULL,
  `dato14` varchar(60) DEFAULT NULL,
  `dato15` varchar(60) DEFAULT NULL,
  `dato16` varchar(60) DEFAULT NULL,
  `dato17` varchar(60) DEFAULT NULL,
  `dato18` varchar(60) DEFAULT NULL,
  `dato19` varchar(60) DEFAULT NULL,
  `dato20` varchar(60) DEFAULT NULL,
  `dato21` text,
  `dato22` text,
  `dato23` varchar(60) DEFAULT NULL,
  `dato24` varchar(60) DEFAULT NULL,
  `dato25` varchar(60) DEFAULT NULL,
  `dato26` varchar(60) DEFAULT NULL,
  `dato27` varchar(60) DEFAULT NULL,
  `dato28` varchar(60) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datoscasas`
--

INSERT INTO `datoscasas` (`id`, `dato1`, `dato2`, `dato3`, `dato4`, `dato5`, `dato6`, `dato7`, `dato8`, `dato9`, `dato10`, `dato11`, `dato12`, `dato13`, `dato14`, `dato15`, `dato16`, `dato17`, `dato18`, `dato19`, `dato20`, `dato21`, `dato22`, `dato23`, `dato24`, `dato25`, `dato26`, `dato27`, `dato28`, `description`) VALUES
(1, '', 5771062, '', '', 150000, 'A', '2887 Royal Path Court', '', '52', 'Decatur', 'Dekalb', '3', '2', '1', '1983', '', '', '01/06/2017', '', '', '', '', '', '30030', '', 'Avondale', 'Druid Hills', 'Druid Hills', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lectus metus, auctor ut euismod ut, lacinia scelerisque libero. Ut id convallis turpis. Sed at imperdiet nibh. Duis lorem ante, mattis vel placerat a, mollis eget diam. Integer convallis molestie quam eu ultrices. In tortor quam, porta quis felis at, gravida scelerisque tortor. Suspendisse sed finibus erat. Duis nec facilisis lectus.  Nulla ac sapien commodo libero sagittis rhoncus sed id ipsum. Proin molestie tincidunt enim at viverra. Maecenas porttitor ante lacus, ut porttitor mauris dictum eget. Duis est erat, ullamcorper eu condimentum ut, tristique vel felis. Duis at bibendum nisl. Fusce vulputate dignissim cursus. Aenean et hendrerit leo. Suspendisse interdum vehicula mauris, nec ullamcorper risus dictum at. Curabitur mattis consectetur nibh vel elementum. Vivamus suscipit in augue sit amet ultricies. Nunc lacus magna, tincidunt vitae leo mattis, blandit ullamcorper ipsum. Phasellus at pellentesque lectus, sit amet volutpat purus. Quisque maximus blandit quam, pulvinar pulvinar massa volutpat vitae. Duis non nunc massa.  Pellentesque sodales egestas magna fringilla pharetra. Cras sit amet leo et est scelerisque ornare. Nulla facilisi. Ut vel blandit nisl. Pellentesque ut augue ut arcu porta elementum. Morbi euismod ipsum ac ipsum facilisis auctor. Proin ullamcorper mi vel leo fermentum interdum. Aliquam porttitor condimentum luctus.  Etiam varius nisi nec neque luctus, eu gravida urna tincidunt. Praesent et velit consectetur, euismod est vitae, hendrerit enim. Vivamus ullamcorper lectus porta posuere malesuada. Integer felis augue, pretium hendrerit purus quis, tristique facilisis leo. Sed viverra ornare felis, sed lobortis lacus. Curabitur ut pellentesque elit. Pellentesque suscipit augue quis metus molestie, eu efficitur ante cursus. Duis dui magna, fermentum eget aliquam quis, lobortis vel orci. Nulla nunc augue, fermentum vitae nibh eu, scelerisque imperdiet felis. Suspendisse sed cursus magna.  Sed tristique euismod sapien eget iaculis. Fusce vitae ante a metus facilisis accumsan. Nullam et lorem vitae massa pellentesque maximus. Ut est augue, ultrices quis nulla vitae, mattis cursus nisl. Quisque in pulvinar leo, eu facilisis est. Duis et nulla nisl. Vivamus libero enim, ultricies vel mauris eget, consequat congue diam. Sed non lectus quis arcu porttitor pellentesque id et lacus. Donec accumsan, erat nec lacinia blandit, nulla mi gravida enim, sit amet dictum ipsum elit vel augue.'),
(1, '', 5774699, '', '', 194900, 'A', '1821 Avon Avenue SW', '', '31', 'Atlanta', 'Fulton', '4', '2', '0', '1948', '', '', '01/06/2017', '', '', '', '', '', '30311', '', 'Tuskegee Airmen Global Academy', 'Brown', 'Booker T. Washington', ''),
(1, '', 5782038, '', '', 1100000, 'A', '137 Brighton Road NE', '', '21', 'Atlanta', 'Fulton', '3', '3', '1', '1925', '', '', '02/06/2017', '', '', '', '', '', '30309', '', 'Rivers', 'Sutton', 'North Atlanta', ''),
(1, '', 5787002, '', '', 134900, 'A', '2850 Mountain View Road', '', '261', 'Gainesville', 'Hall', '3', '1', '0', '1955', '', '', '01/06/2017', '', '', '', '', '', '30504', '', 'Chicopee', 'West Hall', 'West Hall', ''),
(1, '', 5787279, '', '', 269900, 'A', '708 Watch Harbor Lane', '', '112', 'Woodstock', 'Cherokee', '4', '2', '1', '1992', '', '', '01/06/2017', '', '', '', '', '', '30189', '', 'Bascomb', 'E.T. Booth', 'Etowah', ''),
(1, '', 5787375, '', '', 449900, 'A', '860 Peachtree Street NE Unit#2118', '', '23', 'Atlanta', 'Fulton', '2', '2', '0', '2005', '', '', '01/07/2017', '', '', '', '', '', '30308', '', 'Springdale Park', 'Inman', 'Grady', ''),
(1, '', 5787930, '', '', 425000, 'A', '2639 Ridgemore Road NW', '', '22', 'Atlanta', 'Fulton', '4', '2', '0', '1954', '', '', '01/06/2017', '', '', '', '', '', '30318', '', 'Brandon', 'Sutton', 'North Atlanta', ''),
(1, '', 5788904, '', '', 180000, 'A', '311 Mcgill Park Avenue NE Unit#311', '', '23', 'Atlanta', 'Fulton', '2', '1', '0', '1995', '', '', '01/06/2017', '', '', '', '', '', '30312', '', 'Hope-Hill', 'Inman', 'Grady', ''),
(1, '', 5788939, '', '', 310000, 'A', '4325 Nesbin Drive NE', '', '81', 'Kennesaw', 'Cobb', '5', '3', '1', '2001', '', '', '01/06/2017', '', '', '', '', '', '30144', '', 'Blackwell - Cobb', 'Daniell', 'Sprayberry', ''),
(1, '', 5788967, '', '', 475000, 'A', '6339 Farmview Drive NW', '', '74', 'Acworth', 'Cobb', '5', '4', '0', '2012', '', '', '01/06/2017', '', '', '', '', '', '30101', '', 'Ford', 'Durham', 'Harrison', ''),
(1, '', 5789229, '', '', 282500, 'A', '39 Denton Court', '', '191', 'Acworth', 'Paulding', '5', '3', '0', '2014', '', '', '01/06/2017', '', '', '', '', '', '30101', '', 'Floyd L. Shelton', 'Sammy McClure Sr.', 'North Paulding', ''),
(1, '', 5789352, '', '', 650000, 'A', '7945 Saddleridge Drive', '', '121', 'Sandy Springs', 'Fulton', '4', '3', '1', '1974', '', '', '01/07/2017', '', '', '', '', '', '30350', '', 'Dunwoody Springs', 'Sandy Springs', 'North Springs', ''),
(1, '', 5789390, '', '', 450000, 'A', '5015 Magnolia Bluff Drive', '', '121', 'Sandy Springs', 'Fulton', '4', '4', '1', '1984', '', '', '01/06/2017', '', '', '', '', '', '30350', '', 'Dunwoody Springs', 'Sandy Springs', 'North Springs', ''),
(1, '', 5789397, '', '', 649000, 'A', '915 Manchester Place', '', '131', 'Atlanta', 'Fulton', '4', '3', '1', '1985', '', '', '01/06/2017', '', '', '', '', '', '30328', '', 'Heards Ferry', 'Ridgeview Charter', 'Riverwood International Charter', ''),
(1, '', 5789421, '', '', 234900, 'A', '439 Walnut Street', '', '31', 'Hapeville', 'Fulton', '4', '2', '1', '2017', '', '', '01/06/2017', '', '', '', '', '', '30354', '', 'Hapeville', 'Paul D. West', 'Tri-Cities', ''),
(1, '', 5789434, '', '', 119900, 'A', '4333 Dunwoody Park Unit#2309', '', '121', 'Atlanta', 'Dekalb', '1', '1', '0', '2001', '', '', '01/06/2017', '', '', '', '', '', '30338', '', 'Dunwoody', 'Peachtree', 'Dunwoody', ''),
(1, '', 5789483, '', '', 565000, 'A', '4279 Sierra Creek Drive', '', '61', 'Hoschton', 'Gwinnett', '5', '5', '1', '2007', '', '', '01/06/2017', '', '', '', '', '', '30548', '', 'Mulberry', 'Dacula', 'Dacula', ''),
(1, '', 5789542, '', '', 599900, 'A', '255 Grandmar Chase', '', '113', 'Canton', 'Cherokee', '6', '5', '0', '2003', '', '', '01/06/2017', '', '', '', '', '', '30115', '', 'Macedonia', 'Creekland - Cherokee', 'Creekview', ''),
(1, '', 5789663, '', '', 599900, 'A', '630 Vinings Estates Drive SE', '', '72', 'Mableton', 'Cobb', '6', '5', '1', '2000', '', '', '01/07/2017', '', '', '', '', '', '30126', '', 'Nickajack', 'Griffin', 'Campbell', ''),
(1, '', 5789680, '', '', 284900, 'A', '1068 Faith Avenue SE', '', '32', 'Atlanta', 'Fulton', '3', '1', '0', '1945', '', '', '01/06/2017', '', '', '', '', '', '30316', '', 'Parkside', 'King', 'Maynard H. Jackson, Jr.', ''),
(1, '', 5789878, '', '', 164900, 'A', '1 Biscayne Drive NW Unit#706', '', '21', 'Atlanta', 'Fulton', '1', '1', '0', '1997', '', '', '01/06/2017', '', '', '', '', '', '30309', '', 'Rivers', 'Sutton', 'North Atlanta', ''),
(1, '', 5789915, '', '', 250000, 'A', '20 Huntington Place Drive Unit#20', '', '131', 'Sandy Springs', 'Fulton', '2', '2', '1', '1983', '', '', '01/06/2017', '', '', '', '', '', '30350', '', 'Spalding Drive', 'Sandy Springs', 'North Springs', ''),
(1, '', 5789918, '', '', 135000, 'A', '66 Trevor Way', '', '192', 'Temple', 'Paulding', '3', '2', '0', '2007', '', '', '01/06/2017', '', '', '', '', '', '30179', '', 'Union - Paulding', 'Carl Scoggins Sr.', 'South Paulding', ''),
(1, '', 5789933, '', '', 440015, 'A', '5946 Redwine Street Unit#Lot 88', '', '61', 'Norcross', 'Gwinnett', '3', '2', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30071', '', 'Susan Stripling', 'Summerour', 'Norcross', ''),
(1, '', 5789935, '', '', 439991, 'A', '5948 Redwine Street Unit#Lot 87', '', '61', 'Norcross', 'Gwinnett', '3', '2', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30071', '', 'Susan Stripling', 'Summerour', 'Norcross', ''),
(1, '', 5789936, '', '', 456650, 'A', '5950 Redwine Street Unit#Lot 86', '', '61', 'Norcross', 'Gwinnett', '3', '2', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30071', '', 'Susan Stripling', 'Summerour', 'Norcross', ''),
(1, '', 5789942, '', '', 289000, 'A', '911 Lake Court SE', '', '72', 'Smyrna', 'Cobb', '3', '2', '0', '1960', '', '', '01/06/2017', '', '', '', '', '', '30082', '', 'King Springs', 'Griffin', 'Campbell', ''),
(1, '', 5789944, '', '', 240000, 'A', '504 Gardenia Lane', '', '83', 'Marietta', 'Cobb', '5', '3', '1', '1982', '', '', '01/06/2017', '', '', '', '', '', '30068', '', 'Sope Creek', 'Dickerson', 'Walton', ''),
(1, '', 5789945, '', '', 192900, 'A', 'Lot 31 Knob Creek', '', '278', 'Dawsonville', 'Lumpkin', '3', '2', '0', '2017', '', '', '01/06/2017', '', '', '', '', '', '30534', '', 'Blackburn', 'Lumpkin County', 'Lumpkin County', ''),
(1, '', 5789946, '', '', 229900, 'A', 'Lot 55 Makers Way', '', '278', 'Dawsonville', 'Lumpkin', '3', '2', '0', '2017', '', '', '01/06/2017', '', '', '', '', '', '30534', '', 'Blackburn', 'Lumpkin County', 'Lumpkin County', ''),
(1, '', 5789947, '', '', 474900, 'A', '2930 Walker Drive', '', '82', 'Marietta', 'Cobb', '4', '3', '0', '1966', '', '', '01/06/2017', '', '', '', '', '', '30062', '', 'Mountain View - Cobb', 'Simpson', 'Sprayberry', ''),
(1, '', 5789953, '', '', 346953, 'A', '3357 Meadow Stone Lane', '', '62', 'Buford', 'Gwinnett', '4', '2', '1', '2017', '', '', '01/06/2017', '', '', '', '', '', '30519', '', 'Harmony - Gwinnett', 'Glenn C. Jones', 'Mill Creek', ''),
(1, '', 5789956, '', '', 192065, 'A', '3142 Rex Ridge Circle', '', '161', 'Rex', 'Clayton', '4', '2', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30273', '', 'East Clayton', 'Adamson', 'Morrow', ''),
(1, '', 5789958, '', '', 120000, 'A', '935 Little River Road', '', '151', 'Social Circle', 'Newton', '3', '2', '0', '1993', '', '', '01/06/2017', '', '', '', '', '', '30025', '', 'Flint Hill', 'Cousins', 'Eastside', ''),
(1, '', 5789964, '', '', 199065, 'A', '3110 Rex Ridge Lane', '', '161', 'Rex', 'Clayton', '5', '3', '0', '2017', '', '', '01/06/2017', '', '', '', '', '', '30273', '', 'East Clayton', 'Adamson', 'Morrow', ''),
(1, '', 5789965, '', '', 349900, 'A', '262 Thorncliff Landing', '', '191', 'Acworth', 'Paulding', '4', '3', '0', '2004', '', '', '01/06/2017', '', '', '', '', '', '30101', '', 'Floyd L. Shelton', 'Sammy McClure Sr.', 'North Paulding', ''),
(1, '', 5789966, '', '', 225000, 'A', '400 W Peachtree Street NW Unit#3609', '', '22', 'Atlanta', 'Fulton', '1', '1', '0', '2007', '', '', '01/06/2017', '', '', '', '', '', '30308', '', 'Centennial Place', 'Inman', 'Grady', ''),
(1, '', 5789967, '', '', 1050000, 'A', '1650 Lazy River Lane', '', '121', 'Sandy Springs', 'Fulton', '5', '5', '2', '1985', '', '', '01/06/2017', '', '', '', '', '', '30350', '', 'Dunwoody Springs', 'Sandy Springs', 'North Springs', ''),
(1, '', 5789968, '', '', 260000, 'A', '2579 Rosebud Road', '', '66', 'Grayson', 'Gwinnett', '3', '2', '0', '1965', '', '', '01/06/2017', '', '', '', '', '', '30017', '', 'Trip', 'Bay Creek', 'Grayson', ''),
(1, '', 5789969, '', '', 244900, 'A', '1585 Deer Cliff Court', '', '63', 'Lawrenceville', 'Gwinnett', '4', '3', '1', '1990', '', '', '01/06/2017', '', '', '', '', '', '30043', '', 'Taylor - Gwinnett', 'Creekland - Gwinnett', 'Collins Hill', ''),
(1, '', 5789970, '', '', 215000, 'A', '535 Brooksdale Drive', '', '112', 'Woodstock', 'Cherokee', '3', '3', '0', '1992', '', '', '01/06/2017', '', '', '', '', '', '30189', '', 'Carmel', 'Woodstock', 'Woodstock', ''),
(1, '', 5789971, '', '', 129900, 'A', '513 Cedar Lane', '', '141', 'Monroe', 'Walton', '3', '2', '1', '1971', '', '', '01/06/2017', '', '', '', '', '', '30655', '', 'Harmony - Walton', 'Carver', 'Monroe Area', ''),
(1, '', 5789972, '', '', 629000, 'A', '5280 COLE CREEK Lane', '', '222', 'Cumming', 'Forsyth', '7', '5', '0', '2016', '', '', '01/06/2017', '', '', '', '', '', '30040', '', 'Vickery Creek', 'Vickery Creek', 'West Forsyth', ''),
(1, '', 5789973, '', '', 619900, 'A', '3301 Perrington Pointe', '', '81', 'Marietta', 'Cobb', '5', '4', '1', '1999', '', '', '01/06/2017', '', '', '', '', '', '30066', '', 'Mountain View - Cobb', 'Simpson', 'Lassiter', ''),
(1, '', 5789976, '', '', 284000, 'A', '256 Double Gate Court', '', '62', 'Sugar Hill', 'Gwinnett', '4', '2', '1', '2001', '', '', '01/06/2017', '', '', '', '', '', '30518', '', 'Riverside - Gwinnett', 'North Gwinnett', 'North Gwinnett', ''),
(1, '', 5789977, '', '', 183840, 'A', '3092 Rex Ridge Lane', '', '161', 'Rex', 'Clayton', '4', '2', '1', '2017', '', '', '01/06/2017', '', '', '', '', '', '30273', '', 'East Clayton', 'Adamson', 'Morrow', ''),
(1, '', 5789979, '', '', 265000, 'A', '3036 Wendlock Drive', '', '82', 'Marietta', 'Cobb', '3', '2', '0', '1972', '', '', '01/06/2017', '', '', '', '', '', '30062', '', 'Mountain View - Cobb', 'Hightower Trail', 'Pope', ''),
(1, '', 5789980, '', '', 134900, 'A', '3224 Bright Star Road', '', '91', 'Douglasville', 'Douglas', '3', '2', '0', '1973', '', '', '01/06/2017', '', '', '', '', '', '30135', '', 'Bright Star', 'Mason Creek', 'Alexander', ''),
(1, '', 5789981, '', '', 424900, 'A', '251 Allendale Drive', '', '113', 'Canton', 'Cherokee', '4', '4', '1', '1999', '', '', '01/06/2017', '', '', '', '', '', '30115', '', 'Free Home', 'Creekland - Cherokee', 'Creekview', ''),
(1, '', 5789984, '', '', 334900, 'A', '6722 Birch Bark Way', '', '265', 'Flowery Branch', 'Hall', '4', '3', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30542', '', 'Spout Springs', 'C.W. Davis', 'Flowery Branch', ''),
(1, '', 5789985, '', '', 199000, 'A', '4430 Canterbury Way', '', '222', 'Cumming', 'Forsyth', '3', '2', '0', '1991', '', '', '01/06/2017', '', '', '', '', '', '30040', '', 'Kelly Mill', 'Vickery Creek', 'West Forsyth', ''),
(1, '', 5789987, '', '', 164900, 'A', '4761 Sullivan Road', '', '72', 'Powder Springs', 'Cobb', '4', '2', '0', '1969', '', '', '01/06/2017', '', '', '', '', '', '30127', '', 'Hendricks', 'Garrett', 'South Cobb', ''),
(1, '', 5789988, '', '', 300000, 'A', '1949 Bonner Street', '', '52', 'Decatur', 'Dekalb', '3', '3', '0', '2004', '', '', '01/06/2017', '', '', '', '', '', '30082', '', 'Toney', 'Columbia - Dekalb', 'Columbia', ''),
(1, '', 5789989, '', '', 329900, 'A', '5290 Leeward Run Drive', '', '14', 'Alpharetta', 'Fulton', '4', '2', '1', '1992', '', '', '01/06/2017', '', '', '', '', '', '30005', '', 'Lake Windward', 'Webb Bridge', 'Chattahoochee', ''),
(1, '', 5789991, '', '', 383758, 'A', '6714 Birch Bark Way', '', '265', 'Flowery Branch', 'Hall', '3', '3', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30542', '', 'Spout Springs', 'C.W. Davis', 'Flowery Branch', ''),
(1, '', 5789992, '', '', 335000, 'A', '380 Belmont Chase Court', '', '14', 'Alpharetta', 'Fulton', '4', '2', '1', '1992', '', '', '01/06/2017', '', '', '', '', '', '30005', '', 'Lake Windward', 'Taylor Road', 'Chattahoochee', ''),
(1, '', 5789994, '', '', 374900, 'A', '91 Hillcrest Drive', '', '13', 'Roswell', 'Fulton', '4', '3', '0', '1960', '', '', '01/06/2017', '', '', '', '', '', '30075', '', 'Roswell North', 'Crabapple', 'Roswell', ''),
(1, '', 5789995, '', '', 208410, 'A', '3116 Rex Ridge Lane', '', '161', 'Rex', 'Clayton', '5', '3', '0', '2017', '', '', '01/06/2017', '', '', '', '', '', '30273', '', 'East Clayton', 'Adamson', 'Morrow', ''),
(1, '', 5789997, '', '', 2695000, 'A', '4560 Peachtree Dunwoody Road NE', '', '21', 'Sandy Springs', 'Fulton', '6', '6', '2', '2017', '', '', '01/06/2017', '', '', '', '', '', '30342', '', 'High Point', 'Ridgeview Charter', 'Riverwood International Charter', ''),
(1, '', 5789998, '', '', 289900, 'A', '105 Towneship Court', '', '112', 'Woodstock', 'Cherokee', '4', '3', '1', '1994', '', '', '01/06/2017', '', '', '', '', '', '30189', '', 'Carmel', 'Woodstock', 'Woodstock', ''),
(1, '', 5790000, '', '', 253670, 'A', '2111 Ginger Estates Drive', '', '101', 'Conyers', 'Rockdale', '5', '3', '0', '2016', '', '', '01/06/2017', '', '', '', '', '', '30013', '', 'Flat Shoals - Rockdale', 'Memorial', 'Salem', ''),
(1, '', 5790004, '', '', 251010, 'A', '1102 Deadwood Trail', '', '66', 'Loganville', 'Gwinnett', '4', '2', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30052', '', 'W.J. Cooper', 'McConnell', 'Archer', ''),
(1, '', 5790006, '', '', 675000, 'A', '2588 Octavia Lane', '', '82', 'Marietta', 'Cobb', '5', '4', '0', '2016', '', '', '01/06/2017', '', '', '', '', '', '30062', '', 'East Side', 'Dodgen', 'Walton', ''),
(1, '', 5790007, '', '', 445000, 'A', '563 Owl Creek Drive', '', '74', 'Powder Springs', 'Cobb', '5', '4', '1', '1999', '', '', '01/06/2017', '', '', '', '', '', '30127', '', 'Vaughan', 'Lost Mountain', 'Harrison', ''),
(1, '', 5790009, '', '', 260000, 'A', '2996 Lone Star Trail', '', '41', 'Doraville', 'Dekalb', '3', '2', '0', '1964', '', '', '01/06/2017', '', '', '', '', '', '30340', '', 'Evansdale', 'Henderson - Dekalb', 'Lakeside - Dekalb', ''),
(1, '', 5790010, '', '', 1750000, 'A', '1047 Michael Road NW', '', '141', 'Monroe', 'Walton', '4', '3', '0', '1971', '', '', '01/06/2017', '', '', '', '', '', '30656', '', 'Walton - Other', 'Walton - Other', 'Walton - Other', ''),
(1, '', 5790012, '', '', 1350000, 'A', '1029 Drewry Street NE', '', '23', 'Atlanta', 'Fulton', '5', '4', '1', '2017', '', '', '01/06/2017', '', '', '', '', '', '30306', '', 'Springdale Park', 'Inman', 'Grady', ''),
(1, '', 5790014, '', '', 175000, 'A', '2102 Millgate Lane', '', '62', 'Buford', 'Gwinnett', '3', '3', '1', '2002', '', '', '01/06/2017', '', '', '', '', '', '30519', '', 'Patrick', 'Glenn C. Jones', 'Mill Creek', ''),
(1, '', 5790015, '', '', 575000, 'A', '5475 Shiver Summit', '', '132', 'Atlanta', 'Fulton', '5', '2', '1', '1978', '', '', '01/06/2017', '', '', '', '', '', '30342', '', 'High Point', 'Ridgeview Charter', 'Riverwood International Charter', ''),
(1, '', 5790016, '', '', 124900, 'A', '18 Amanda Drive', '', '191', 'Dallas', 'Paulding', '3', '2', '0', '1990', '', '', '01/06/2017', '', '', '', '', '', '30157', '', 'New Georgia', 'Carl Scoggins Sr.', 'Paulding County', ''),
(1, '', 5790018, '', '', 235000, 'A', '3959 Covey Flush Court Unit#3959', '', '72', 'Smyrna', 'Cobb', '4', '3', '1', '2007', '', '', '01/06/2017', '', '', '', '', '', '30082', '', 'Russell - Cobb', 'Floyd', 'South Cobb', ''),
(1, '', 5790022, '', '', 180000, 'A', '617 Wellford Avenue', '', '291', 'Jefferson', 'Jackson', '3', '2', '0', '2009', '', '', '01/06/2017', '', '', '', '', '', '30549', '', 'Gum Springs', 'West Jackson', 'Jackson County', ''),
(1, '', 5790023, '', '', 162900, 'A', '14 Lakes Edge Drive SE Unit#14', '', '72', 'Smyrna', 'Cobb', '2', '2', '0', '1984', '', '', '01/06/2017', '', '', '', '', '', '30080', '', 'Argyle', 'Campbell', 'Campbell', ''),
(1, '', 5790025, '', '', 318000, 'A', '601 Shenandoah Drive NE', '', '341', 'Calhoun', 'Gordon', '6', '4', '1', '1995', '', '', '01/06/2017', '', '', '', '', '', '30701', '', 'Calhoun', 'Calhoun', 'Calhoun', ''),
(1, '', 5790027, '', '', 85000, 'A', '14 Winter Wood Cove', '', '202', 'Taylorsville', 'Bartow', '3', '2', '0', '1990', '', '', '01/06/2017', '', '', '', '', '', '30178', '', 'Taylorsville', 'Woodland - Bartow', 'Woodland - Bartow', ''),
(1, '', 5790028, '', '', 329500, 'A', '6014 China Rose Lane', '', '14', 'Johns Creek', 'Fulton', '4', '3', '1', '2005', '', '', '01/06/2017', '', '', '', '', '', '30097', '', 'Wilson Creek', 'River Trail', 'Northview', ''),
(1, '', 5790029, '', '', 359000, 'A', '1310 North Point Way', '', '13', 'Roswell', 'Fulton', '4', '2', '1', '1972', '', '', '01/06/2017', '', '', '', '', '', '30075', '', 'Roswell North', 'Crabapple', 'Roswell', ''),
(1, '', 5790030, '', '', 124900, 'A', '3120 Seven Pines Court Unit#303', '', '71', 'Atlanta', 'Cobb', '2', '1', '0', '1975', '', '', '01/06/2017', '', '', '', '', '', '30339', '', 'Teasley', 'Campbell', 'Campbell', ''),
(1, '', 5790034, '', '', 425000, 'A', '402 Woodruff Crossing', '', '112', 'Woodstock', 'Cherokee', '5', '4', '1', '1989', '', '', '01/06/2017', '', '', '', '', '', '30189', '', 'Bascomb', 'E.T. Booth', 'Etowah', ''),
(1, '', 5790038, '', '', 305000, 'A', '4964 Waterport Way', '', '61', 'Peachtree Corners', 'Gwinnett', '4', '3', '0', '1984', '', '', '01/06/2017', '', '', '', '', '', '30096', '', 'Berkeley Lake', 'Duluth', 'Duluth', ''),
(1, '', 5790039, '', '', 156000, 'A', '8140 Brookbend Drive', '', '91', 'Douglasville', 'Douglas', '3', '2', '1', '2007', '', '', '01/06/2017', '', '', '', '', '', '30134', '', 'North Douglas', 'Stewart', 'Douglas County', ''),
(1, '', 5790042, '', '', 249900, 'A', '210 Brantley Road', '', '131', 'Atlanta', 'Fulton', '3', '3', '1', '1985', '', '', '01/06/2017', '', '', '', '', '', '30350', '', 'Woodland - Fulton', 'Sandy Springs', 'North Springs', ''),
(1, '', 5790043, '', '', 450000, 'A', '13494 Cumming Highway', '', '113', 'Cumming', 'Cherokee', '4', '3', '0', '1968', '', '', '01/06/2017', '', '', '', '', '', '30040', '', 'Free Home', 'Creekland - Cherokee', 'Creekview', ''),
(1, '', 5790044, '', '', 179900, 'A', '2326 Ceiba Court', '', '63', 'Lawrenceville', 'Gwinnett', '4', '2', '1', '1985', '', '', '01/06/2017', '', '', '', '', '', '30043', '', 'Woodward Mill', 'Twin Rivers', 'Mountain View', ''),
(1, '', 5790045, '', '', 260000, 'A', '170 Boulevard SE Unit#H316', '', '23', 'Atlanta', 'Fulton', '1', '1', '0', '2006', '', '', '01/06/2017', '', '', '', '', '', '30312', '', 'Parkside', 'King', 'Maynard H. Jackson, Jr.', ''),
(1, '', 5790046, '', '', 249115, 'A', '1153 Deadwood Trail', '', '66', 'Loganville', 'Gwinnett', '4', '2', '1', '2017', '', '', '01/06/2017', '', '', '', '', '', '30052', '', 'W.J. Cooper', 'McConnell', 'Archer', ''),
(1, '', 5790047, '', '', 240000, 'A', '8135 Castleberry Farms Drive', '', '224', 'Gainesville', 'Forsyth', '6', '3', '0', '1999', '', '', '01/06/2017', '', '', '', '', '', '30506', '', 'Chestatee', 'Little Mill', 'North Forsyth', ''),
(1, '', 5790048, '', '', 439900, 'A', '778 Grant Street SE', '', '32', 'Atlanta', 'Fulton', '4', '2', '1', '1920', '', '', '01/06/2017', '', '', '', '', '', '30315', '', 'Parkside', 'King', 'Maynard H. Jackson, Jr.', ''),
(1, '', 5790049, '', '', 164800, 'A', '2704 Mariner Way', '', '91', 'Villa Rica', 'Douglas', '3', '2', '0', '2002', '', '', '01/06/2017', '', '', '', '', '', '30180', '', 'Mirror Lake', 'Mason Creek', 'Douglas County', ''),
(1, '', 5790051, '', '', 799000, 'A', '1921 Walthall Drive NW', '', '21', 'Atlanta', 'Fulton', '4', '3', '0', '1959', '', '', '01/06/2017', '', '', '', '', '', '30318', '', 'River Eves', 'Sutton', 'North Atlanta', ''),
(1, '', 5790052, '', '', 345000, 'A', '5305 Brierstone Drive', '', '222', 'Alpharetta', 'Forsyth', '4', '3', '0', '2013', '', '', '01/06/2017', '', '', '', '', '', '', '', '', '', '', ''),
(1, '', 5790053, '', '', 1995000, 'A', '807 Courtenay Drive NE', '', '23', 'Atlanta', 'Fulton', '6', '6', '1', '2017', '', '', '01/06/2017', '', '', '', '', '', '30306', '', 'Morningside-', 'Inman', 'Grady', ''),
(1, '', 5790054, '', '', 224900, 'A', '1535 Adair Boulevard', '', '223', 'Cumming', 'Forsyth', '4', '2', '1', '1996', '', '', '01/07/2017', '', '', '', '', '', '30040', '', 'Cumming', 'Otwell', 'Forsyth Central', ''),
(1, '', 5790056, '', '', 175000, 'A', '413 Gladiola Drive', '', '301', 'Auburn', 'Barrow', '3', '3', '0', '2007', '', '', '01/06/2017', '', '', '', '', '', '30011', '', 'Kennedy', 'Westside - Barrow', 'Apalachee', ''),
(1, '', 5790058, '', '', 179900, 'A', '1957 Quail Run', '', '64', 'Lawrenceville', 'Gwinnett', '3', '2', '0', '1991', '', '', '01/06/2017', '', '', '', '', '', '30044', '', 'Benefield', 'J.E. Richards', 'Discovery', ''),
(1, '', 5790061, '', '', 299900, 'A', '24 Rocky Mountain Pass', '', '203', 'Adairsville', 'Bartow', '4', '3', '1', '2004', '', '', '01/06/2017', '', '', '', '', '', '30103', '', 'Clear Creek', 'Adairsville', 'Adairsville', ''),
(1, '', 5790065, '', '', 429000, 'A', '4470 Sloan Ridge', '', '223', 'Cumming', 'Forsyth', '5', '5', '0', '2008', '', '', '01/06/2017', '', '', '', '', '', '30028', '', 'Matt', 'Liberty - Forsyth', 'West Forsyth', ''),
(1, '', 5790067, '', '', 300000, 'A', '643 Gresham Avenue SE', '', '24', 'Atlanta', 'Dekalb', '5', '4', '1', '1947', '', '', '01/06/2017', '', '', '', '', '', '30316', '', 'Burgess-Peterson', 'Dekalb - Other', 'Maynard H. Jackson, Jr.', ''),
(1, '', 5790068, '', '', 157500, 'A', '100 Ridgeview Drive SE', '', '354', 'Silver Creek', 'Floyd', '4', '3', '0', '1976', '', '', '01/06/2017', '', '', '', '', '', '30173', '', 'Pepperell', 'Pepperell', 'Pepperell', ''),
(1, '', 5790069, '', '', 875000, 'A', '60 W Belle Isle Road NE', '', '132', 'Atlanta', 'Fulton', '4', '4', '1', '2007', '', '', '01/06/2017', '', '', '', '', '', '30342', '', 'High Point', 'Ridgeview Charter', 'Riverwood International Charter', ''),
(1, '', 5790073, '', '', 380000, 'A', '3512 Paces Place Unit#3512', '', '22', 'Atlanta', 'Fulton', '2', '2', '2', '1962', '', '', '01/06/2017', '', '', '', '', '', '30327', '', 'Jackson - Atlanta', 'Sutton', 'North Atlanta', ''),
(1, '', 5790074, '', '', 539000, 'A', '707 Saybeck Way', '', '13', 'Milton', 'Fulton', '4', '3', '1', '2013', '', '', '01/06/2017', '', '', '', '', '', '30004', '', 'Crabapple Crossing', 'Northwestern', 'Milton', ''),
(1, '', 5790079, '', '', 298135, 'A', '4210 Spring Ridge Drive', '', '223', 'Cumming', 'Forsyth', '4', '2', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30028', '', 'Matt', 'Liberty - Forsyth', 'West Forsyth', ''),
(1, '', 5790083, '', '', 141900, 'A', '1813 Calloway Path', '', '361', 'Rockmart', 'Polk', '4', '2', '0', '2003', '', '', '01/06/2017', '', '', '', '', '', '30153', '', 'Eastside - Polk', 'Rockmart', 'Rockmart', ''),
(1, '', 5790085, '', '', 149900, 'A', '2988 Fetlock Drive SW', '', '73', 'Marietta', 'Cobb', '3', '2', '0', '1984', '', '', '01/06/2017', '', '', '', '', '', '30064', '', 'Hollydale', 'Smitha', 'Osborne', ''),
(1, '', 5790090, '', '', 296500, 'A', '6213 Riverview Parkway', '', '264', 'Braselton', 'Hall', '5', '3', '0', '2008', '', '', '01/06/2017', '', '', '', '', '', '30517', '', 'Chestnut Mountain', 'C.W. Davis', 'Flowery Branch', ''),
(1, '', 5790091, '', '', 629000, 'A', '310 Chason Wood Way', '', '14', 'Roswell', 'Fulton', '6', '5', '1', '1994', '', '', '01/06/2017', '', '', '', '', '', '30076', '', 'River Eves', 'Holcomb Bridge', 'Centennial', ''),
(1, '', 5790092, '', '', 150000, 'A', '3060 Pharr Court N Unit#516', '', '21', 'Atlanta', 'Fulton', '2', '1', '0', '1970', '', '', '01/06/2017', '', '', '', '', '', '30305', '', 'Brandon', 'Sutton', 'North Atlanta', ''),
(1, '', 5790094, '', '', 284500, 'A', '400 Raven Mocker Lane', '', '112', 'Woodstock', 'Cherokee', '5', '3', '1', '1995', '', '', '01/06/2017', '', '', '', '', '', '30189', '', 'Carmel', 'Woodstock', 'Woodstock', ''),
(1, '', 5790097, '', '', 549900, 'A', '2609 Leslie Drive NE', '', '52', 'Atlanta', 'Dekalb', '4', '3', '1', '1969', '', '', '01/06/2017', '', '', '', '', '', '30345', '', 'Henderson Mill', 'Henderson - Dekalb', 'Lakeside - Dekalb', ''),
(1, '', 5790098, '', '', 129000, 'A', '4416 Huntshire Drive', '', '42', 'Stone Mountain', 'Dekalb', '4', '2', '1', '1971', '', '', '01/06/2017', '', '', '', '', '', '30083', '', 'Hambrick', 'Stone Mountain', 'Stone Mountain', ''),
(1, '', 5790099, '', '', 600000, 'A', '1836 Westminster Way NE', '', '52', 'Atlanta', 'Dekalb', '3', '3', '0', '1946', '', '', '01/06/2017', '', '', '', '', '', '30307', '', 'Fernbank', 'Druid Hills', 'Druid Hills', ''),
(1, '', 5790101, '', '', 311685, 'A', '4260 Spring Ridge Drive', '', '223', 'Cumming', 'Forsyth', '3', '2', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30028', '', 'Matt', 'Liberty - Forsyth', 'West Forsyth', ''),
(1, '', 5790102, '', '', 274900, 'A', '867 Tree Fern Way', '', '72', 'Mableton', 'Cobb', '4', '2', '1', '2002', '', '', '01/06/2017', '', '', '', '', '', '30126', '', 'Harmony-Leland', 'Lindley', 'Pebblebrook', ''),
(1, '', 5790107, '', '', 879000, 'A', '1130 Piedmont Avenue NE Unit#1606', '', '23', 'Atlanta', 'Fulton', '3', '3', '0', '1988', '', '', '01/06/2017', '', '', '', '', '', '30309', '', 'Springdale Park', 'Inman', 'Grady', ''),
(1, '', 5790110, '', '', 344000, 'A', '5082 Sunset Trail', '', '83', 'Marietta', 'Cobb', '3', '2', '0', '1972', '', '', '01/06/2017', '', '', '', '', '', '30068', '', 'Sope Creek', 'Dickerson', 'Walton', ''),
(1, '', 5790111, '', '', 699000, 'A', '5000 Alec Mountain B', '', '285', 'Clarkesville', 'Habersham', '3', '3', '1', '2004', '', '', '01/06/2017', '', '', '', '', '', '30523', '', 'Habersham - Other', 'Habersham - Other', 'Habersham Central', ''),
(1, '', 5790113, '', '', 135000, 'A', '839 Churchill Court', '', '42', 'Stone Mountain', 'Dekalb', '3', '3', '0', '1988', '', '', '01/06/2017', '', '', '', '', '', '30083', '', 'Stone Mill', 'Stone Mountain', 'Stone Mountain', ''),
(1, '', 5790117, '', '', 162000, 'A', '1422 COBB BRANCH Drive', '', '52', 'Decatur', 'Dekalb', '4', '3', '0', '1953', '', '', '01/06/2017', '', '', '', '', '', '30032', '', 'Dekalb - Other', 'Mary McLeod Bethune', 'Towers', ''),
(1, '', 5790118, '', '', 168000, 'A', '14 Liberty Crossing', '', '203', 'Cartersville', 'Bartow', '4', '3', '0', '2003', '', '', '01/06/2017', '', '', '', '', '', '30121', '', 'Cloverleaf', 'South Central', 'Cass', ''),
(1, '', 5790119, '', '', 199900, 'A', '1316 Key Manor Lane', '', '63', 'Lawrenceville', 'Gwinnett', '4', '3', '0', '2014', '', '', '01/06/2017', '', '', '', '', '', '30045', '', 'Alcova', 'Dacula', 'Dacula', ''),
(1, '', 5790122, '', '', 165000, 'A', '4568 Austell Powder Springs Road', '', '72', 'Austell', 'Cobb', '3', '2', '0', '1959', '', '', '01/06/2017', '', '', '', '', '', '30106', '', 'Clarkdale', 'Cooper', 'South Cobb', ''),
(1, '', 5790124, '', '', 127625, 'A', '123 Streamside Drive', '', '13', 'Roswell', 'Fulton', '2', '2', '0', '1996', '', '', '01/06/2017', '', '', '', '', '', '30076', '', 'Hembree Springs', 'Elkins Pointe', 'Milton', ''),
(1, '', 5790125, '', '', 175900, 'A', '8831 Grassy Knoll Lane', '', '262', 'Clermont', 'Hall', '4', '2', '1', '2017', '', '', '01/06/2017', '', '', '', '', '', '30527', '', 'Wauka Mountain', 'North Hall', 'North Hall', ''),
(1, '', 5790126, '', '', 189900, 'A', '450 Pine Drive', '', '42', 'Pine Lake', 'Dekalb', '2', '2', '0', '1948', '', '', '01/06/2017', '', '', '', '', '', '30072', '', 'Rockbridge - Dekalb', 'Stone Mountain', 'Stone Mountain', ''),
(1, '', 5790128, '', '', 165000, 'A', '165 Celestial Run', '', '302', 'Winder', 'Barrow', '3', '2', '0', '2004', '', '', '01/06/2017', '', '', '', '', '', '30680', '', 'Holsenbeck', 'Bear Creek - Barrow', 'Winder-Barrow', ''),
(1, '', 5790129, '', '', 169900, 'A', '8827 Grassy Knoll Lane', '', '262', 'Clermont', 'Hall', '3', '2', '0', '2017', '', '', '01/06/2017', '', '', '', '', '', '30527', '', 'Wauka Mountain', 'North Hall', 'North Hall', ''),
(1, '', 5790132, '', '', 368900, 'A', '118 Jaclaire Lane', '', '211', 'Mcdonough', 'Henry', '4', '3', '1', '2007', '', '', '01/06/2017', '', '', '', '', '', '30252', '', 'East Lake - Henry', 'Union Grove', 'Union Grove', ''),
(1, '', 5790135, '', '', 114900, 'A', '5885 S Gordon Road', '', '72', 'Austell', 'Cobb', '2', '2', '0', '1955', '', '', '01/06/2017', '', '', '', '', '', '30168', '', 'Mableton', 'Garrett', 'South Cobb', ''),
(1, '', 5790136, '', '', 625000, 'A', '5940 Boulder Bluff Drive', '', '223', 'Cumming', 'Forsyth', '6', '5', '0', '2006', '', '', '01/06/2017', '', '', '', '', '', '30040', '', 'Coal Mountain', 'North Forsyth', 'North Forsyth', ''),
(1, '', 5790137, '', '', 175000, 'A', '525 Bigelow Court', '', '33', 'Atlanta', 'Fulton', '3', '2', '1', '2006', '', '', '01/06/2017', '', '', '', '', '', '30349', '', 'Lee', 'Camp Creek', 'Westlake', ''),
(1, '', 5790140, '', '', 279000, 'A', '1790 Habersham Marina Road', '', '224', 'Cumming', 'Forsyth', '5', '3', '0', '1995', '', '', '01/06/2017', '', '', '', '', '', '30041', '', 'Mashburn', 'Lakeside - Forsyth', 'Forsyth Central', ''),
(1, '', 5790141, '', '', 422000, 'A', '204 River Laurel Way', '', '113', 'Woodstock', 'Cherokee', '5', '4', '1', '2004', '', '', '01/06/2017', '', '', '', '', '', '30188', '', 'Mountain Road', 'Rusk', 'Sequoyah', ''),
(1, '', 5790142, '', '', 290000, 'A', '81 Rebecca Street', '', '291', 'Hoschton', 'Jackson', '4', '2', '1', '2005', '', '', '01/06/2017', '', '', '', '', '', '30548', '', 'Gum Springs', 'West Jackson', 'Jackson County', ''),
(1, '', 5790143, '', '', 163500, 'A', '1850 Cotillion Drive Unit#3402', '', '121', 'Dunwoody', 'Dekalb', '1', '1', '0', '2004', '', '', '01/06/2017', '', '', '', '', '', '30338', '', 'Dunwoody', 'Peachtree', 'Dunwoody', ''),
(1, '', 5790144, '', '', 380910, 'A', '105 Carmichael Drive', '', '111', 'Canton', 'Cherokee', '5', '4', '0', '2017', '', '', '01/06/2017', '', '', '', '', '', '30115', '', 'Avery', 'Creekland - Cherokee', 'Creekview', ''),
(1, '', 5790148, '', '', 199000, 'A', '164 Kathryn Drive', '', '81', 'Marietta', 'Cobb', '4', '2', '1', '1982', '', '', '01/06/2017', '', '', '', '', '', '30066', '', 'Chalker', 'Daniell', 'Sprayberry', ''),
(1, '', 5790149, '', '', 346990, 'A', '1293 Skipping Stone Court', '', '66', 'Dacula', 'Gwinnett', '5', '4', '0', '2016', '', '', '01/06/2017', '', '', '', '', '', '30019', '', 'Harbins', 'McConnell', 'Archer', ''),
(1, '', 5790150, '', '', 225000, 'A', '5117 Wade Green Road', '', '112', 'Acworth', 'Cherokee', '3', '1', '0', '1967', '', '', '01/06/2017', '', '', '', '', '', '30102', '', 'Oak Grove - Cherokee', 'E.T. Booth', 'Etowah', ''),
(1, '', 5790151, '', '', 329900, 'A', '918 Champions Way', '', '211', 'Mcdonough', 'Henry', '5', '3', '1', '2002', '', '', '01/06/2017', '', '', '', '', '', '30252', '', 'Ola', 'Ola', 'Ola', ''),
(1, '', 5790154, '', '', 379000, 'A', '180A Honeysuckle Road', '', '484', 'Milledgeville', 'Baldwin', '3', '3', '0', '1997', '', '', '01/06/2017', '', '', '', '', '', '31061', '', 'Blandy Hills', 'Oak Hill', 'Baldwin', ''),
(1, '', 5790155, '', '', 379000, 'A', '1645 Skymist Way', '', '222', 'Cumming', 'Forsyth', '6', '5', '0', '2007', '', '', '01/06/2017', '', '', '', '', '', '30040', '', 'Kelly Mill', 'Otwell', 'Forsyth Central', ''),
(1, '', 5790158, '', '', 230000, 'A', '2479 Peachtree Road NE Unit#1804', '', '21', 'Atlanta', 'Fulton', '3', '2', '0', '1967', '', '', '01/06/2017', '', '', '', '', '', '30305', '', 'Rivers', 'Sutton', 'North Atlanta', ''),
(1, '', 5790159, '', '', 250000, 'A', '4504 Howell Farms Road NW', '', '75', 'Acworth', 'Cobb', '3', '2', '1', '1999', '', '', '01/06/2017', '', '', '', '', '', '30101', '', 'Baker', 'Barber', 'North Cobb', ''),
(1, '', 5790160, '', '', 174900, 'A', '7350 Thoreau Circle', '', '33', 'Atlanta', 'Fulton', '3', '2', '1', '2000', '', '', '01/06/2017', '', '', '', '', '', '30349', '', 'Cliftondale', 'Sandtown', 'Langston Hughes', ''),
(1, '', 5790162, '', '', 251338, 'A', '227 Scenic Hills Drive', '', '181', 'Newnan', 'Coweta', '4', '1', '0', '2016', '', '', '01/06/2017', '', '', '', '', '', '30265', '', 'Welch', 'Arnall', 'East Coweta', ''),
(1, '', 5790164, '', '', 259900, 'A', '19 Grove Park Circle', '', '202', 'Cartersville', 'Bartow', '5', '4', '0', '2005', '', '', '01/06/2017', '', '', '', '', '', '30120', '', 'Cartersville ', 'Cartersville', 'Cartersville', ''),
(1, '', 5790166, '', '', 310000, 'A', '3235 Roswell Road NE Unit#410', '', '21', 'Roswell', 'Fulton', '1', '1', '0', '1999', '', '', '01/06/2017', '', '', '', '', '', '30305', '', 'Smith', 'Sutton', 'North Atlanta', ''),
(1, '', 5790167, '', '', 799900, 'A', '4624 Meadow Valley Drive', '', '132', 'Sandy Springs', 'Fulton', '6', '5', '1', '1957', '', '', '01/06/2017', '', '', '', '', '', '30342', '', 'High Point', 'Ridgeview Charter', 'Riverwood International Charter', ''),
(1, '', 5790168, '', '', 269000, 'A', '3745 Ashford Creek Avenue Unit#1313', '', '51', 'Atlanta', 'Dekalb', '1', '1', '2', '2006', '', '', '01/06/2017', '', '', '', '', '', '30319', '', 'Montgomery', 'Chamblee', 'Chamblee Charter', ''),
(1, '', 5790169, '', '', 45720, 'A', '270 Woodridge Circle', '', '371', 'Athens', 'Clarke', '3', '2', '0', '1996', '', '', '01/06/2017', '', '', '', '', '', '30601', '', 'Gaines', 'Hilsman', 'Cedar Shoals', ''),
(1, '', 5790172, '', '', 145000, 'A', '4068 Brantley Drive', '', '72', 'Austell', 'Cobb', '3', '3', '0', '1991', '', '', '01/06/2017', '', '', '', '', '', '30106', '', 'Russell - Cobb', 'Floyd', 'South Cobb', ''),
(1, '', 5790173, '', '', 415000, 'A', '3360 Northumberland Place', '', '82', 'Roswell', 'Cobb', '4', '2', '1', '1981', '', '', '01/06/2017', '', '', '', '', '', '30075', '', 'Shallowford Falls', 'Simpson', 'Lassiter', ''),
(1, '', 5790174, '', '', 133000, 'A', '4004 OAKWOD Road', '', '265', 'Oakwood', 'Hall', '3', '1', '0', '1988', '', '', '01/06/2017', '', '', '', '', '', '30566', '', 'Oakwood', 'West Hall', 'West Hall', ''),
(1, '', 5790175, '', '', 151000, 'A', '657 Morningside Drive N', '', '211', 'Stockbridge', 'Henry', '3', '2', '1', '2001', '', '', '01/06/2017', '', '', '', '', '', '30281', '', 'Woodland - Henry', 'Woodland - Henry', 'Woodland - Henry', ''),
(1, '', 5790177, '', '', 49900, 'A', '1201 Siesta Lane', '', '112', 'Acworth', 'Cherokee', '3', '2', '0', '1971', '', '', '01/06/2017', '', '', '', '', '', '30102', '', 'Clark Creek', 'E.T. Booth', 'Etowah', ''),
(1, '', 5790178, '', '', 650000, 'A', '505 Riverhill Drive', '', '132', 'Sandy Springs', 'Fulton', '4', '3', '1', '1973', '', '', '01/06/2017', '', '', '', '', '', '30328', '', 'Heards Ferry', 'Ridgeview Charter', 'Riverwood International Charter', ''),
(1, '', 5790179, '', '', 215000, 'A', '2071 Terra Court NE', '', '63', 'Lawrenceville', 'Gwinnett', '3', '2', '0', '1986', '', '', '01/06/2017', '', '', '', '', '', '30043', '', 'Walnut Grove - Gwinnett', 'Creekland - Gwinnett', 'Collins Hill', ''),
(1, '', 5790180, '', '', 329900, 'A', '11410 Crossington Road', '', '14', 'Johns Creek', 'Fulton', '4', '2', '1', '1998', '', '', '01/06/2017', '', '', '', '', '', '30005', '', 'Findley Oaks', 'Taylor Road', 'Chattahoochee', ''),
(1, '', 5790182, '', '', 345000, 'A', '189 Colonial Drive', '', '112', 'Woodstock', 'Cherokee', '4', '2', '1', '1990', '', '', '01/06/2017', '', '', '', '', '', '30189', '', 'Bascomb', 'E.T. Booth', 'Etowah', ''),
(1, '', 5790183, '', '', 375000, 'A', '120 W Point Trail', '', '112', 'Woodstock', 'Cherokee', '4', '3', '1', '1994', '', '', '01/06/2017', '', '', '', '', '', '30189', '', 'Bascomb', 'E.T. Booth', 'Etowah', ''),
(1, '', 5790184, '', '', 925000, 'A', '165 Old Cedar Lane', '', '13', 'Milton', 'Fulton', '5', '4', '1', '2000', '', '', '01/06/2017', '', '', '', '', '', '30004', '', 'Crabapple Crossing', 'Northwestern', 'Milton', ''),
(1, '', 5790185, '', '', 159900, 'A', '1912 Glenmar Drive', '', '52', 'Decatur', 'Dekalb', '3', '2', '0', '1962', '', '', '01/06/2017', '', '', '', '', '', '30032', '', 'Snapfinger', 'Columbia - Dekalb', 'Columbia', ''),
(1, '', 5790186, '', '', 649900, 'A', '2001 Watauga Drive', '', '261', 'Gainesville', 'Hall', '3', '3', '1', '1987', '', '', '01/06/2017', '', '', '', '', '', '30501', '', 'Centennial Arts Academy', 'Gainesville', 'Gainesville', ''),
(1, '', 5790190, '', '', 169900, 'A', '181 Powell Street SE Unit#12', '', '23', 'Atlanta', 'Fulton', '2', '1', '0', '1924', '', '', '01/06/2017', '', '', '', '', '', '30316', '', 'Parkside', 'King', 'Maynard H. Jackson, Jr.', ''),
(1, '', 5790192, '', '', 229900, 'A', '363 Silver Oak Drive', '', '191', 'Dallas', 'Paulding', '4', '3', '0', '2015', '', '', '01/06/2017', '', '', '', '', '', '30132', '', 'WC Abney', 'Lena Mae Moses', 'East Paulding', ''),
(1, '', 5790193, '', '', 825000, 'A', '1174 Byrnwyck Court NE', '', '51', 'Brookhaven', 'Dekalb', '5', '4', '1', '1979', '', '', '01/06/2017', '', '', '', '', '', '30319', '', 'Montgomery', 'Chamblee', 'Chamblee Charter', ''),
(1, '', 5790195, '', '', 510000, 'A', '2830 Portabella Lane', '', '221', 'Cumming', 'Forsyth', '5', '4', '1', '1995', '', '', '01/06/2017', '', '', '', '', '', '30041', '', 'Big Creek', 'South Forsyth', 'Lambert', ''),
(1, '', 5790196, '', '', 550000, 'A', '560 Brayford Way', '', '221', 'Suwanee', 'Forsyth', '5', '4', '1', '1998', '', '', '01/06/2017', '', '', '', '', '', '30024', '', 'Sharon - Forsyth', 'South Forsyth', 'Lambert', ''),
(1, '', 5790197, '', '', 289000, 'A', '448 Glen Creek Way', '', '62', 'Sugar Hill', 'Gwinnett', '4', '2', '1', '2002', '', '', '01/06/2017', '', '', '', '', '', '30518', '', 'Roberts', 'North Gwinnett', 'North Gwinnett', ''),
(1, '', 5790198, '', '', 675000, 'A', '210 Cold Stream Trail', '', '273', 'Jasper', 'Dawson', '4', '4', '1', '2006', '', '', '01/06/2017', '', '', '', '', '', '30143', '', 'Robinson', 'New Dawson County', 'Dawson County', ''),
(1, '', 5790199, '', '', 195000, 'A', '2285 BRETDALE ROAD', '', '61', 'Duluth', 'Gwinnett', '3', '2', '0', '1992', '', '', '01/06/2017', '', '', '', '', '', '30096', '', 'Charles Brant Chesney', 'Duluth', 'Duluth', ''),
(1, '', 5790202, '', '', 215000, 'A', '3026 Alston Drive', '', '52', 'Decatur', 'Dekalb', '3', '2', '0', '1951', '', '', '01/06/2017', '', '', '', '', '', '30032', '', 'Peachcrest', 'Mary McLeod Bethune', 'Towers', ''),
(1, '', 5790206, '', '', 450000, 'A', '120 Ashland Drive NE', '', '23', 'Atlanta', 'Fulton', '2', '2', '0', '1935', '', '', '01/06/2017', '', '', '', '', '', '30307', '', 'Lin', 'Inman', 'Grady', ''),
(1, '', 5790208, '', '', 102900, 'A', '490 Barnett Shoals Unit#419', '', '371', 'Athens', 'Clarke', '2', '2', '1', '2004', '', '', '01/06/2017', '', '', '', '', '', '30605', '', 'Gaines', 'Hilsman', 'Cedar Shoals', ''),
(1, '', 5790209, '', '', 550000, 'A', '560 Brayford Way', '', '221', 'Suwanee', 'Forsyth', '5', '4', '1', '1998', '', '', '01/06/2017', '', '', '', '', '', '30024', '', 'Sharon - Forsyth', 'South Forsyth', 'Lambert', ''),
(1, '', 5790210, '', '', 300000, 'A', '5345 Concord Downs Drive', '', '222', 'Cumming', 'Forsyth', '4', '2', '1', '2010', '', '', '01/07/2017', '', '', '', '', '', '30040', '', 'Sawnee', 'Liberty - Forsyth', 'West Forsyth', ''),
(1, '', 5790211, '', '', 189900, 'A', '1160 Tributary Way', '', '63', 'Dacula', 'Gwinnett', '3', '2', '0', '1999', '', '', '01/06/2017', '', '', '', '', '', '30019', '', 'Dacula', 'Dacula', 'Dacula', ''),
(1, '', 5790218, '', '', 234900, 'A', '1342 Fountain Lakes Drive', '', '63', 'Lawrenceville', 'Gwinnett', '4', '3', '0', '2004', '', '', '01/06/2017', '', '', '', '', '', '30043', '', 'Dyer', 'Twin Rivers', 'Mountain View', ''),
(1, '', 5790219, '', '', 459900, 'A', '3561 Kilpatrick Lane', '', '65', 'Snellville', 'Gwinnett', '4', '4', '1', '1993', '', '', '01/06/2017', '', '', '', '', '', '30039', '', 'Norton', 'Snellville', 'South Gwinnett', ''),
(1, '', 5790220, '', '', 149900, 'A', '5056 Laurel Bridge Drive', '', '72', 'Smyrna', 'Cobb', '2', '2', '1', '1985', '', '', '01/06/2017', '', '', '', '', '', '30082', '', 'Nickajack', 'Cobb - Other', 'Campbell', ''),
(1, '', 5790221, '', '', 259900, 'A', '2292 Cotton Gin Row', '', '291', 'Jefferson', 'Jackson', '3', '2', '1', '2008', '', '', '01/06/2017', '', '', '', '', '', '30549', '', 'Gum Springs', 'West Jackson', 'Jackson County', ''),
(1, '', 5790222, '', '', 419000, 'A', '479 Wilfawn Way', '', '52', 'Avondale Estates', 'Dekalb', '4', '2', '1', '2002', '', '', '01/06/2017', '', '', '', '', '', '30002', '', 'Avondale', 'Druid Hills', 'Druid Hills', ''),
(1, '', 5790223, '', '', 104900, 'A', '626 Mincey Court', '', '42', 'Stone Mountain', 'Dekalb', '3', '2', '0', '1969', '', '', '01/06/2017', '', '', '', '', '', '30087', '', 'Pine Ridge - Dekalb', 'Stephenson', 'Stephenson', ''),
(1, '', 5790225, '', '', 160000, 'A', '35 Valley View Trail', '', '331', 'Jasper', 'Pickens', '2', '3', '0', '1973', '', '', '01/06/2017', '', '', '', '', '', '30143', '', 'Jasper', 'Jasper', 'Pickens', ''),
(1, '', 5790226, '', '', 415000, 'A', '12512 Waterside Drive', '', '13', 'Alpharetta', 'Fulton', '6', '5', '0', '2001', '', '', '01/06/2017', '', '', '', '', '', '30004', '', 'Crabapple Crossing', 'Northwestern', 'Milton', ''),
(1, '', 5790227, '', '', 165000, 'A', '8265 Ridge Road', '', '33', 'Fairburn', 'Fulton', '4', '3', '0', '1960', '', '', '01/06/2017', '', '', '', '', '', '30213', '', 'Cliftondale', 'Renaissance', 'Langston Hughes', ''),
(1, '', 5790229, '', '', 259900, 'A', '30 Carriage Lane', '', '191', 'Powder Springs', 'Paulding', '3', '2', '0', '1995', '', '', '01/06/2017', '', '', '', '', '', '30127', '', 'Bessie L. Baggett', 'J.A. Dobbins', 'Hiram', ''),
(1, '', 5790233, '', '', 50000, 'A', '15 Bobwhite Drive', '', '278', 'Dahlonega', 'Lumpkin', '2', '1', '0', '1992', '', '', '01/06/2017', '', '', '', '', '', '30533', '', 'Long Branch', 'Lumpkin County', 'Lumpkin County', ''),
(1, '', 5790235, '', '', 259900, 'A', '57 Rocky Mountain Pass', '', '203', 'Adairsville', 'Bartow', '3', '3', '0', '2004', '', '', '01/06/2017', '', '', '', '', '', '30103', '', 'Clear Creek', 'Adairsville', 'Adairsville', ''),
(1, '', 5790236, '', '', 420000, 'A', '2168 Melante Drive NE', '', '23', 'Atlanta', 'Fulton', '4', '2', '0', '1964', '', '', '01/06/2017', '', '', '', '', '', '30324', '', 'Garden Hills', 'Sutton', 'North Atlanta', ''),
(1, '', 5790237, '', '', 395000, 'A', '360 Chambers Street Unit#103', '', '113', 'Woodstock', 'Cherokee', '2', '2', '1', '2007', '', '', '01/06/2017', '', '', '', '', '', '30188', '', 'Woodstock', 'Woodstock', 'Woodstock', ''),
(1, '', 5790238, '', '', 319000, 'A', '2576 Arldowne Drive', '', '41', 'Tucker', 'Dekalb', '5', '3', '0', '1969', '', '', '01/06/2017', '', '', '', '', '', '30084', '', 'Livsey', 'Tucker', 'Tucker', ''),
(1, '', 5790241, '', '', 285000, 'A', '6771 Grand Magnolia Drive', '', '62', 'Sugar Hill', 'Gwinnett', '4', '2', '1', '2004', '', '', '01/06/2017', '', '', '', '', '', '30518', '', 'White Oak - Gwinnett', 'Lanier', 'Lanier', ''),
(1, '', 5790243, '', '', 449000, 'A', '201 Birkdale Boulevard', '', '231', 'Carrollton', 'Carroll', '5', '4', '1', '2002', '', '', '01/06/2017', '', '', '', '', '', '30116', '', 'Carrollton', 'Carrollton Jr.', 'Carrollton', ''),
(1, '', 5790245, '', '', 264500, 'A', '523 Richmond Place', '', '141', 'Loganville', 'Walton', '3', '2', '1', '2002', '', '', '01/06/2017', '', '', '', '', '', '30052', '', 'Loganville', 'Loganville', 'Loganville', ''),
(1, '', 5790246, '', '', 135000, 'A', '275 Radcliffe Trace', '', '151', 'Covington', 'Newton', '3', '2', '1', '1996', '', '', '01/06/2017', '', '', '', '', '', '30016', '', 'West Newton', 'Veterans Memorial - Newton', 'Newton', ''),
(1, '', 5790247, '', '', 1625000, 'A', '1240 Peachtree Battle Avenue NW', '', '22', 'Atlanta', 'Fulton', '5', '5', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30327', '', 'Brandon', 'Sutton', 'North Atlanta', ''),
(1, '', 5790248, '', '', 1625000, 'A', '1248 Peachtree Battle Avenue NW', '', '22', 'Atlanta', 'Fulton', '6', '6', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30327', '', 'Brandon', 'Sutton', 'North Atlanta', ''),
(1, '', 5790249, '', '', 214900, 'A', '94 Plantation Way', '', '191', 'Acworth', 'Paulding', '5', '3', '0', '1986', '', '', '01/06/2017', '', '', '', '', '', '30101', '', 'Roland W. Russom', 'East Paulding', 'North Paulding', ''),
(1, '', 5790252, '', '', 155000, 'A', '54 Brookvalley Commons', '', '191', 'Dallas', 'Paulding', '4', '2', '1', '2004', '', '', '01/06/2017', '', '', '', '', '', '30157', '', 'McGarity', 'P.B. Ritch', 'East Paulding', ''),
(1, '', 5790254, '', '', 165000, 'A', '823 Faye Drive', '', '75', 'Kennesaw', 'Cobb', '3', '2', '1', '1985', '', '', '01/06/2017', '', '', '', '', '', '30144', '', 'Chalker', 'Palmer', 'Kell', ''),
(1, '', 5790255, '', '', 124900, 'A', '1971 Winchester Court SW', '', '72', 'Marietta', 'Cobb', '3', '1', '2', '1970', '', '', '01/06/2017', '', '', '', '', '', '30008', '', 'Sanders', 'Garrett', 'South Cobb', ''),
(1, '', 5790256, '', '', 399900, 'A', '441 Hidden Branches Trail', '', '113', 'Canton', 'Cherokee', '3', '2', '1', '1989', '', '', '01/06/2017', '', '', '', '', '', '30115', '', 'Indian Knoll', 'Rusk', 'Sequoyah', ''),
(1, '', 5790258, '', '', 419000, 'A', '3251 CROSS Road', '', '62', 'Buford', 'Gwinnett', '3', '2', '0', '1982', '', '', '01/06/2017', '', '', '', '', '', '30519', '', 'Patrick', 'Twin Rivers', 'Mountain View', ''),
(1, '', 5790259, '', '', 130000, 'A', '22 pebble brook Court SW', '', '202', 'Euharlee', 'Bartow', '3', '2', '0', '1993', '', '', '01/06/2017', '', '', '', '', '', '30120', '', 'Taylorsville', 'Woodland - Bartow', 'Woodland - Bartow', ''),
(1, '', 5790261, '', '', 225000, 'A', '2527 Sky Valley Drive', '', '66', 'Dacula', 'Gwinnett', '3', '2', '1', '1999', '', '', '01/06/2017', '', '', '', '', '', '30019', '', 'Harbins', 'McConnell', 'Archer', ''),
(1, '', 5790263, '', '', 269500, 'A', '1766 Marietta Road NW', '', '22', 'Atlanta', 'Fulton', '3', '2', '0', '1940', '', '', '01/06/2017', '', '', '', '', '', '30318', '', 'Bolton Academy', 'Sutton', 'North Atlanta', ''),
(1, '', 5790265, '', '', 95203, 'A', '1269 Keys Lake Drive NE Unit#1269', '', '51', 'Brookhaven', 'Dekalb', '1', '1', '0', '1985', '', '', '01/06/2017', '', '', '', '', '', '30319', '', 'Woodward', 'Sequoyah - DeKalb', 'Cross Keys', ''),
(1, '', 5790267, '', '', 321274, 'A', '70 Dupont Court', '', '191', 'Dallas', 'Paulding', '5', '4', '0', '2017', '', '', '01/06/2017', '', '', '', '', '', '30132', '', 'Burnt Hickory', 'Sammy McClure Sr.', 'North Paulding', ''),
(1, '', 5790268, '', '', 174500, 'A', '4125 Berkeley Creek Drive', '', '62', 'Duluth', 'Gwinnett', '3', '2', '0', '1991', '', '', '01/06/2017', '', '', '', '', '', '30096', '', 'Charles Brant Chesney', 'Duluth', 'Duluth', ''),
(1, '', 5790269, '', '', 345000, 'A', '168 Cornerstone Circle', '', '113', 'Woodstock', 'Cherokee', '4', '4', '0', '2013', '', '', '01/06/2017', '', '', '', '', '', '30188', '', 'Little River', 'Mill Creek', 'River Ridge', '');
INSERT INTO `datoscasas` (`id`, `dato1`, `dato2`, `dato3`, `dato4`, `dato5`, `dato6`, `dato7`, `dato8`, `dato9`, `dato10`, `dato11`, `dato12`, `dato13`, `dato14`, `dato15`, `dato16`, `dato17`, `dato18`, `dato19`, `dato20`, `dato21`, `dato22`, `dato23`, `dato24`, `dato25`, `dato26`, `dato27`, `dato28`, `description`) VALUES
(1, '', 5790270, '', '', 264900, 'A', '2544 Brockton Road', '', '293', 'Jefferson', 'Jackson', '3', '2', '0', '1978', '', '', '01/06/2017', '', '', '', '', '', '30549', '', 'Benton', 'East Jackson', 'Jackson County', ''),
(1, '', 5790272, '', '', 315000, 'A', '5219 Glenridge Drive', '', '132', 'Atlanta', 'Fulton', '3', '2', '1', '1972', '', '', '01/06/2017', '', '', '', '', '', '30342', '', 'High Point', 'Ridgeview Charter', 'Riverwood International Charter', ''),
(1, '', 5790274, '', '', 669000, 'A', '2055 Cooper Lake Drive Lot 1', '', '72', 'Smyrna', 'Cobb', '3', '3', '1', '2017', '', '', '01/06/2017', '', '', '', '', '', '30080', '', 'Nickajack', 'Campbell', 'Campbell', ''),
(1, '', 5790275, '', '', 669000, 'A', '2055 Cooper Lake Drive Lot 2', '', '72', 'Smyrna', 'Cobb', '3', '3', '1', '2017', '', '', '01/06/2017', '', '', '', '', '', '30080', '', 'Nickajack', 'Campbell', 'Campbell', ''),
(1, '', 5790276, '', '', 664900, 'A', '2055 Cooper Lake Drive Lot 3', '', '72', 'Smyrna', 'Cobb', '3', '3', '1', '2017', '', '', '01/06/2017', '', '', '', '', '', '30080', '', 'Nickajack', 'Campbell', 'Campbell', ''),
(1, '', 5790279, '', '', 420000, 'A', '1753 Dyson Drive Drive NE', '', '52', 'Atlanta', 'Dekalb', '3', '2', '0', '1957', '', '', '01/06/2017', '', '', '', '', '', '30307', '', 'Fernbank', 'Druid Hills', 'Druid Hills', ''),
(1, '', 5790280, '', '', 289900, 'A', '711 Cosmopolitan Drive NE Unit#326', '', '21', 'Atlanta', 'Fulton', '2', '2', '0', '2009', '', '', '01/06/2017', '', '', '', '', '', '30324', '', 'Garden Hills', 'Sutton', 'North Atlanta', ''),
(1, '', 5790281, '', '', 250000, 'A', '4855 Meadow Ovlk', '', '222', 'Cumming', 'Forsyth', '4', '2', '1', '2001', '', '', '01/06/2017', '', '', '', '', '', '30040', '', 'George W. Whitlow', 'Otwell', 'Forsyth Central', ''),
(1, '', 5790282, '', '', 154900, 'A', '4006 Golfview Drive', '', '231', 'Villa Rica', 'Carroll', '3', '2', '1', '1986', '', '', '01/06/2017', '', '', '', '', '', '30180', '', 'Sand Hill - Carroll', 'Bay Springs', 'Villa Rica', ''),
(1, '', 5790283, '', '', 249900, 'A', '145 Cedar Mill Drive', '', '191', 'Dallas', 'Paulding', '4', '3', '1', '2005', '', '', '01/06/2017', '', '', '', '', '', '30132', '', 'Floyd L. Shelton', 'Sammy McClure Sr.', 'North Paulding', ''),
(1, '', 5790287, '', '', 159000, 'A', '2400 Cumberland Parkway SE Unit#511', '', '71', 'Atlanta', 'Cobb', '2', '1', '0', '1999', '', '', '01/06/2017', '', '', '', '', '', '30339', '', 'Teasley', 'Campbell', 'Campbell', ''),
(1, '', 5790289, '', '', 240000, 'A', '22 Ryans Run', '', '291', 'Jefferson', 'Jackson', '4', '2', '2', '2004', '', '', '01/06/2017', '', '', '', '', '', '30549', '', 'East Jackson', 'Kings Bridge', 'East Jackson', ''),
(1, '', 5790294, '', '', 155000, 'A', '260 Magnolia Walk Lane', '', '33', 'College Park', 'Fulton', '5', '2', '1', '1999', '', '', '01/06/2017', '', '', '', '', '', '30349', '', 'Bethune - College Park', 'McNair - Fulton', 'Banneker', ''),
(1, '', 5790297, '', '', 289000, 'A', '5690 Southcrest Lane', '', '43', 'Lithonia', 'Dekalb', '5', '4', '1', '2006', '', '', '01/06/2017', '', '', '', '', '', '30038', '', 'Murphy Candler', 'Salem', 'Martin Luther King Jr', ''),
(1, '', 5790298, '', '', 150000, 'A', '285 Foster Trace Drive', '', '63', 'Lawrenceville', 'Gwinnett', '4', '2', '1', '1997', '', '', '01/06/2017', '', '', '', '', '', '30043', '', 'Taylor - Gwinnett', 'Creekland - Gwinnett', 'Collins Hill', ''),
(1, '', 5790299, '', '', 190000, 'A', '115 Creekwood Trail', '', '112', 'Acworth', 'Cherokee', '3', '2', '1', '2008', '', '', '01/06/2017', '', '', '', '', '', '30102', '', 'Oak Grove - Cherokee', 'E.T. Booth', 'Etowah', ''),
(1, '', 5790300, '', '', 186599, 'A', '311 South Woods Court', '', '332', 'Jasper', 'Pickens', '4', '3', '0', '2007', '', '', '01/06/2017', '', '', '', '', '', '30143', '', 'Harmony - Pickens', 'Pickens County', 'Pickens - Other', ''),
(1, '', 5790302, '', '', 229000, 'A', '20 Stream Glen Court', '', '151', 'Covington', 'Newton', '4', '3', '1', '2013', '', '', '01/06/2017', '', '', '', '', '', '30016', '', 'Fairview - Newton', 'Clements', 'Newton', ''),
(1, '', 5790303, '', '', 500000, 'A', '3324 Stillbrook Pass', '', '82', 'Marietta', 'Cobb', '5', '3', '1', '1997', '', '', '01/06/2017', '', '', '', '', '', '30062', '', 'Mountain View - Cobb', 'Hightower Trail', 'Pope', ''),
(1, '', 5790304, '', '', 324900, 'A', '440 Hope Hollow Rd', '', '65', 'Loganville', 'Gwinnett', '5', '2', '1', '2001', '', '', '01/06/2017', '', '', '', '', '', '30052', '', 'Grayson', 'McConnell', 'Grayson', ''),
(1, '', 5790307, '', '', 299900, 'A', '460 Hope Hollow Rd', '', '65', 'Loganville', 'Gwinnett', '4', '2', '1', '1991', '', '', '01/06/2017', '', '', '', '', '', '30052', '', 'Grayson', 'McConnell', 'Grayson', ''),
(1, '', 5790308, '', '', 364900, 'A', '6770 Birch Bark Way', '', '265', 'Flowery Branch', 'Hall', '4', '3', '0', '2016', '', '', '01/06/2017', '', '', '', '', '', '30542', '', 'Spout Springs', 'C.W. Davis', 'Flowery Branch', ''),
(1, '', 5790310, '', '', 94000, 'A', '5941 Pattillo Lane', '', '42', 'Lithonia', 'Dekalb', '3', '2', '1', '1987', '', '', '01/06/2017', '', '', '', '', '', '30058', '', 'Shadow Rock', 'Redan', 'Redan', ''),
(1, '', 5790311, '', '', 364900, 'A', '6762 Birch Bark Way Way', '', '265', 'Flowery Branch', 'Hall', '4', '3', '1', '2016', '', '', '01/06/2017', '', '', '', '', '', '30542', '', 'Spout Springs', 'C.W. Davis', 'Flowery Branch', ''),
(1, '', 5790312, '', '', 259900, 'A', '1861 Shoreline Trace', '', '65', 'Grayson', 'Gwinnett', '3', '2', '1', '1987', '', '', '01/06/2017', '', '', '', '', '', '30017', '', 'Grayson', 'Bay Creek', 'Grayson', ''),
(1, '', 5790315, '', '', 129900, 'A', '6245 Kimberly Mill Road', '', '32', 'College Park', 'Fulton', '3', '2', '0', '1982', '', '', '01/06/2017', '', '', '', '', '', '30349', '', 'M.R. Hollis Innovation Academy', 'McNair - Fulton', 'Banneker', ''),
(1, '', 5790317, '', '', 96000, 'A', '211 Robin Hood Road NE', '', '353', 'Rome', 'Floyd', '3', '2', '0', '1996', '', '', '01/06/2017', '', '', '', '', '', '30161', '', 'Model', 'Model', 'Model', ''),
(1, '', 5790318, '', '', 159500, 'A', '11081 Sedalia Way', '', '161', 'Hampton', 'Clayton', '4', '2', '1', '2001', '', '', '01/06/2017', '', '', '', '', '', '30228', '', 'Kemp - Clayton', 'Lovejoy', 'Lovejoy', ''),
(1, '', 5790320, '', '', 259900, 'A', '2179 Deep Woods Way', '', '82', 'Marietta', 'Cobb', '4', '3', '0', '1985', '', '', '01/06/2017', '', '', '', '', '', '30062', '', 'Kincaid', 'Simpson', 'Sprayberry', ''),
(1, '', 5790322, '', '', 364900, 'A', '6718 Birch Bark Way', '', '265', 'Flowery Branch', 'Hall', '4', '3', '0', '2016', '', '', '01/06/2017', '', '', '', '', '', '30542', '', 'Spout Springs', 'C.W. Davis', 'Flowery Branch', ''),
(1, '', 5790324, '', '', 180000, 'A', '6520 Deerings Lane', '', '61', 'Norcross', 'Gwinnett', '3', '2', '0', '1984', '', '', '01/06/2017', '', '', '', '', '', '30092', '', 'Peachtree', 'Pinckneyville', 'Norcross', ''),
(1, '', 5790325, '', '', 559900, 'A', '5665 Commons Lane', '', '14', 'Johns Creek', 'Fulton', '6', '4', '1', '1990', '', '', '01/06/2017', '', '', '', '', '', '30005', '', 'Findley Oaks', 'River Trail', 'Northview', ''),
(1, '', 5790329, '', '', 269945, 'A', '107 Hickory Village Circle', '', '113', 'Canton', 'Cherokee', '4', '3', '1', '2017', '', '', '01/07/2017', '', '', '', '', '', '30115', '', 'Hickory Flat - Cherokee', 'Rusk', 'Sequoyah', ''),
(1, '', 5790330, '', '', 639900, 'A', '5740 Jockey Walk', '', '221', 'Suwanee', 'Forsyth', '5', '4', '0', '2015', '', '', '01/06/2017', '', '', '', '', '', '30024', '', 'Johns Creek', 'Riverwatch', 'Lambert', ''),
(1, '', 5790331, '', '', 100000, 'A', '2437 Felker Ward St NW', '', '22', 'Atlanta', 'Fulton', '4', '2', '0', '1980', '', '', '01/07/2017', '', '', '', '', '', '30318', '', 'Bolton Academy', 'Sutton', 'North Atlanta', ''),
(1, '', 5790332, '', '', 150000, 'A', '2430 Clock Face Court', '', '63', 'Lawrenceville', 'Gwinnett', '2', '2', '1', '2005', '', '', '01/06/2017', '', '', '', '', '', '30043', '', 'Rock Springs', 'Creekland - Gwinnett', 'Collins Hill', ''),
(1, '', 5790335, '', '', 779000, 'A', '6704 Winding Canyon', '', '265', 'Flowery Branch', 'Hall', '5', '4', '1', '2016', '', '', '01/07/2017', '', '', '', '', '', '30542', '', 'Spout Springs', 'C.W. Davis', 'Flowery Branch', ''),
(1, '', 5790336, '', '', 114000, 'A', '680 Stoneside Drive', '', '42', 'Stone Mountain', 'Dekalb', '4', '2', '1', '1982', '', '', '01/07/2017', '', '', '', '', '', '30083', '', 'Stone Mill', 'Stone Mountain', 'Stone Mountain', ''),
(1, '', 5790337, '', '', 444900, 'A', '2171 Elmont Way', '', '72', 'Smyrna', 'Cobb', '3', '2', '1', '2017', '', '', '01/07/2017', '', '', '', '', '', '30080', '', 'Teasley', 'Campbell', 'Campbell', ''),
(1, '', 5790342, '', '', 599900, 'A', '6806 Cherokee Rose Way', '', '265', 'Flowery Branch', 'Hall', '5', '4', '1', '2016', '', '', '01/07/2017', '', '', '', '', '', '30542', '', 'Spout Springs', 'C.W. Davis', 'Flowery Branch', ''),
(1, '', 5790344, '', '', 190000, 'A', '1423 Melrose Woods Lane', '', '66', 'Lawrenceville', 'Gwinnett', '4', '2', '1', '2005', '', '', '01/07/2017', '', '', '', '', '', '30045', '', 'Lovin', 'McConnell', 'Archer', ''),
(1, '', 5790347, '', '', 195900, 'A', '4295 Celebration Drive SW', '', '33', 'Atlanta', 'Fulton', '4', '2', '1', '1999', '', '', '01/07/2017', '', '', '', '', '', '30331', '', 'Fickett', 'Bunche', 'Therrell', ''),
(1, '', 5790348, '', '', 154900, 'A', '5444 Oliver Court NW', '', '64', 'Lilburn', 'Gwinnett', '3', '2', '1', '1979', '', '', '01/06/2017', '', '', '', '', '', '30047', '', 'Lilburn', 'Lilburn', 'Meadowcreek', ''),
(1, '', 5790349, '', '', 275000, 'A', '4284 Cabretta Drive SE', '', '72', 'Smyrna', 'Cobb', '3', '2', '1', '1995', '', '', '01/07/2017', '', '', '', '', '', '30080', '', 'Nickajack', 'Campbell', 'Campbell', ''),
(1, '', 5790352, '', '', 669900, 'A', '2090 Lake Windward Drive', '', '14', 'Alpharetta', 'Fulton', '5', '4', '1', '2001', '', '', '01/07/2017', '', '', '', '', '', '30005', '', 'Creek View', 'Webb Bridge', 'Alpharetta', ''),
(1, '', 5790353, '', '', 200000, 'A', '4108 Shady Drive NW', '', '61', 'Lilburn', 'Gwinnett', '4', '2', '1', '1972', '', '', '01/07/2017', '', '', '', '', '', '30047', '', 'J. A. Alford', 'Berkmar', 'Berkmar', ''),
(1, '', 5790354, '', '', 549000, 'A', '94 Cox Point', '', '331', 'Jasper', 'Pickens', '5', '4', '1', '2013', '', '', '01/06/2017', '', '', '', '', '', '30143', '', 'Tate', 'Pickens - Other', 'Pickens', ''),
(1, '', 5790355, '', '', 270000, 'A', '2932 Thornbriar Road', '', '41', 'Atlanta', 'Dekalb', '4', '3', '0', '1969', '', '', '01/07/2017', '', '', '', '', '', '30340', '', 'Evansdale', 'Henderson - Dekalb', 'Lakeside - Dekalb', ''),
(1, '', 5790356, '', '', 267070, 'A', '109 Hickory Village Circle', '', '113', 'Canton', 'Cherokee', '3', '2', '1', '2017', '', '', '01/07/2017', '', '', '', '', '', '30115', '', 'Hickory Flat - Cherokee', 'Rusk', 'Sequoyah', ''),
(1, '', 5790357, '', '', 165000, 'A', '3082 Hanover Court', '', '41', 'Atlanta', 'Dekalb', '3', '2', '1', '1986', '', '', '01/06/2017', '', '', '', '', '', '30340', '', 'Oakcliff', 'Sequoyah - DeKalb', 'Cross Keys', ''),
(1, '', 5790358, '', '', 219000, 'A', '17 Balsam Drive NW', '', '203', 'Cartersville', 'Bartow', '4', '2', '1', '2014', '', '', '01/07/2017', '', '', '', '', '', '30121', '', 'White - Bartow', 'Cass', 'Cass', ''),
(1, '', 5790360, '', '', 335000, 'A', '3594 White Sands Way', '', '62', 'Suwanee', 'Gwinnett', '6', '3', '1', '1999', '', '', '01/07/2017', '', '', '', '', '', '30024', '', 'Suwanee', 'North Gwinnett', 'North Gwinnett', ''),
(1, '', 5790362, '', '', 239900, 'A', '2109 Shin Court', '', '63', 'Buford', 'Gwinnett', '4', '2', '1', '2002', '', '', '01/07/2017', '', '', '', '', '', '30519', '', 'Freeman\'s Mill', 'Twin Rivers', 'Mountain View', ''),
(1, '', 5790363, '', '', 219990, 'A', '2876 Carousel Court', '', '65', 'Stone Mountain', 'Gwinnett', '4', '3', '1', '1982', '', '', '01/07/2017', '', '', '', '', '', '30087', '', 'Annistown', 'Shiloh', 'Shiloh', ''),
(1, '', 5790366, '', '', 169900, 'A', '4862 Woodhurst Way', '', '42', 'Stone Mountain', 'Dekalb', '3', '2', '1', '1972', '', '', '01/07/2017', '', '', '', '', '', '30088', '', 'Woodridge', 'Miller Grove', 'Redan', ''),
(1, '', 5790367, '', '', 210000, 'A', '1359 Great Oaks Court', '', '66', 'Lawrenceville', 'Gwinnett', '4', '2', '1', '1996', '', '', '01/07/2017', '', '', '', '', '', '30045', '', 'Starling', 'Couch', 'Grayson', ''),
(1, '', 5790369, '', '', 560000, 'A', '705 Pershing Avenue SE', '', '23', 'Atlanta', 'Fulton', '4', '3', '1', '2007', '', '', '01/07/2017', '', '', '', '', '', '30312', '', 'Parkside', 'King', 'Maynard H. Jackson, Jr.', ''),
(1, '', 5790373, '', '', 258500, 'A', '3621 Vinings Slope SE Unit#2222', '', '71', 'Atlanta', 'Cobb', '2', '2', '0', '2008', '', '', '01/07/2017', '', '', '', '', '', '30339', '', 'Teasley', 'Campbell', 'Campbell', ''),
(1, '', 5790375, '', '', 185000, 'A', '3319 Regent Place SW', '', '33', 'Atlanta', 'Fulton', '3', '2', '1', '2005', '', '', '01/07/2017', '', '', '', '', '', '30311', '', 'Fickett', 'Bunche', 'Therrell', ''),
(1, '', 5790376, '', '', 2475000, 'A', '1753 Pine Ridge Drive NE', '', '23', 'Atlanta', 'Fulton', '5', '5', '1', '2012', '', '', '01/07/2017', '', '', '', '', '', '30324', '', 'Morningside-', 'Inman', 'Grady', ''),
(1, '', 5790378, '', '', 595000, 'A', '700 Park Regency Place NE Unit#1901', '', '21', 'Atlanta', 'Fulton', '3', '2', '1', '2001', '', '', '01/07/2017', '', '', '', '', '', '30326', '', 'Smith', 'Sutton', 'North Atlanta', ''),
(1, '', 5790380, '', '', 595000, 'A', '920 Cold Harbor Drive', '', '13', 'Roswell', 'Fulton', '5', '4', '1', '1985', '', '', '01/07/2017', '', '', '', '', '', '30075', '', 'Sweet Apple', 'Elkins Pointe', 'Roswell', ''),
(1, '', 5790382, '', '', 240244, 'A', '345695 Spring Azalea Court', '', '73', 'Powder Springs', 'Cobb', '3', '2', '0', '2017', '', '', '01/07/2017', '', '', '', '', '', '30127', '', 'Powder Springs', 'Cooper', 'McEachern', ''),
(1, '', 5790383, '', '', 150000, 'A', '1906 Twin Falls Road', '', '41', 'Decatur', 'Dekalb', '3', '2', '1', '1967', '', '', '01/07/2017', '', '', '', '', '', '30032', '', 'Snapfinger', 'Columbia - Dekalb', 'Columbia', ''),
(1, '', 5790384, '', '', 665000, 'A', '130 Stoney Ridge Drive', '', '14', 'Johns Creek', 'Fulton', '5', '4', '1', '1993', '', '', '01/07/2017', '', '', '', '', '', '30022', '', 'Barnwell', 'Haynes Bridge', 'Centennial', ''),
(1, '', 5790385, '', '', 274900, 'A', '605 Grove Manor Court', '', '62', 'Suwanee', 'Gwinnett', '3', '2', '1', '2006', '', '', '01/07/2017', '', '', '', '', '', '30024', '', 'Level Creek', 'North Gwinnett', 'North Gwinnett', ''),
(1, '', 5790386, '', '', 1749500, 'A', '1117 Mclynn Avenue NE', '', '23', 'Atlanta', 'Fulton', '6', '6', '0', '2017', '', '', '01/07/2017', '', '', '', '', '', '30306', '', 'Morningside-', 'Inman', 'Grady', ''),
(1, '', 5790387, '', '', 200000, 'A', '4159 Palm Drive', '', '65', 'Snellville', 'Gwinnett', '4', '3', '0', '2005', '', '', '01/07/2017', '', '', '', '', '', '30039', '', 'Rosebud', 'Snellville', 'South Gwinnett', ''),
(1, '', 5790389, '', '', 180000, 'A', '4502 Parmalee Path', '', '42', 'Conley', 'Dekalb', '5', '5', '0', '2005', '', '', '01/06/2017', '', '', '', '', '', '30288', '', 'Cedar Grove', 'Cedar Grove', 'Cedar Grove', ''),
(1, '', 5790390, '', '', 375000, 'A', '4900 Chimney Oaks Dr Drive SE', '', '72', 'Mableton', 'Cobb', '5', '3', '1', '2002', '', '', '01/07/2017', '', '', '', '', '', '30126', '', 'Nickajack', 'Griffin', 'Campbell', ''),
(1, '', 5790396, '', '', 50000, 'A', '279 Hummingbird Way', '', '161', 'Riverdale', 'Clayton', '3', '2', '0', '1962', '', '', '01/07/2017', '', '', '', '', '', '30274', '', 'Kilpatrick', 'Sequoyah - Clayton', 'Jonesboro', ''),
(1, '', 5790397, '', '', 127500, 'A', '14 Laurel Cove SW', '', '202', 'Euharlee', 'Bartow', '3', '2', '0', '1998', '', '', '01/07/2017', '', '', '', '', '', '30120', '', 'Bartow - Other', 'Bartow - Other', 'Bartow - Other', ''),
(1, '', 5790400, '', '', 115000, 'A', '32 Peachtree Street NW Unit#601', '', '22', 'Atlanta', 'Fulton', '1', '1', '0', '1930', '', '', '01/07/2017', '', '', '', '', '', '30303', '', 'Centennial Place', 'Inman', 'Grady', ''),
(1, '', 5790402, '', '', 188900, 'A', '1397 Foxhall Lane SE', '', '53', 'Atlanta', 'Dekalb', '3', '2', '0', '1989', '', '', '01/07/2017', '', '', '', '', '', '30316', '', 'Meadowview', 'McNair - Dekalb', 'McNair', ''),
(1, '', 5790403, '', '', 34900, 'A', '849 Norwood Road SE', '', '32', 'Atlanta', 'Fulton', '3', '1', '0', '1955', '', '', '01/07/2017', '', '', '', '', '', '30315', '', 'Dobbs', 'Price', 'South Atlanta', ''),
(1, '', 5790405, '', '', 300000, 'A', '377 Sweet Haven Lane', '', '341', 'Ranger', 'Gordon', '4', '2', '1', '2003', '', '', '01/07/2017', '', '', '', '', '', '30734', '', 'Fairmount', 'Red Bud', 'Sonoraville', ''),
(1, '', 5790410, '', '', 365000, 'A', '1555 Chattahoochee Run Drive', '', '62', 'Suwanee', 'Gwinnett', '4', '2', '1', '1999', '', '', '01/07/2017', '', '', '', '', '', '30024', '', 'Burnette', 'Hull', 'Peachtree Ridge', ''),
(1, '', 5790412, '', '', 544900, 'A', '2065 Walker Avenue', '', '31', 'College Park', 'Fulton', '5', '4', '1', '1941', '', '', '01/07/2017', '', '', '', '', '', '30337', '', 'College Park', 'Woodland - Fulton', 'Banneker', ''),
(1, '', 5790413, '', '', 109900, 'A', '4843 Martins Crossing Road', '', '42', 'Stone Mountain', 'Dekalb', '3', '2', '0', '1978', '', '', '01/07/2017', '', '', '', '', '', '30088', '', 'Dekalb - Other', 'Miller Grove', 'Redan', ''),
(1, '', 5790414, '', '', 93000, 'A', '2345 Leith Avenue', '', '31', 'East Point', 'Fulton', '3', '2', '1', '1956', '', '', '01/07/2017', '', '', '', '', '', '30344', '', 'Conley Hills', 'Paul D. West', 'Tri-Cities', ''),
(1, '', 5790416, '', '', 425000, 'A', '3075 Sandy Plains Road', '', '82', 'Marietta', 'Cobb', '4', '4', '1', '2006', '', '', '01/07/2017', '', '', '', '', '', '30066', '', 'Mountain View - Cobb', 'Simpson', 'Sprayberry', ''),
(1, '', 5790417, '', '', 140000, 'A', '2841 Laguna Drive', '', '52', 'Decatur', 'Dekalb', '3', '1', '1', '1955', '', '', '01/07/2017', '', '', '', '', '', '30032', '', 'Dekalb - Other', 'Mary McLeod Bethune', 'Towers', ''),
(1, '', 5790422, '', '', 80000, 'A', '1166 Booth Road SW Unit#207', '', '73', 'Marietta', 'Cobb', '2', '2', '0', '1994', '', '', '01/07/2017', '', '', '', '', '', '30080', '', 'Dunleith', 'Marietta', 'Marietta', ''),
(1, '', 5790424, '', '', 257940, 'A', '5570 Rialto Way', '', '223', 'Cumming', 'Forsyth', '4', '3', '1', '2017', '', '', '01/07/2017', '', '', '', '', '', '30040', '', 'Coal Mountain', 'North Forsyth', 'North Forsyth', ''),
(1, '', 5790427, '', '', 2190000, 'A', '2838 Grey Moss Pass', '', '62', 'Duluth', 'Gwinnett', '8', '8', '1', '2001', '', '', '01/07/2017', '', '', '', '', '', '30097', '', 'M.H. Mason', 'Hull', 'Peachtree Ridge', ''),
(1, '', 5790431, '', '', 290435, 'A', '10 Stately Oaks Drive SE', '', '202', 'Cartersville', 'Bartow', '4', '4', '0', '2016', '', '', '01/07/2017', '', '', '', '', '', '30120', '', 'Cartersville ', 'Cartersville', 'Cartersville', ''),
(1, '', 5790433, '', '', 168300, 'A', '1004 Hodges Way', '', '61', 'Stone Mountain', 'Gwinnett', '4', '2', '1', '1980', '', '', '01/07/2017', '', '', '', '', '', '30087', '', 'Arcado', 'Trickum', 'Parkview', ''),
(1, '', 5790436, '', '', 220000, 'A', '3020 Templeton Lane', '', '66', 'Loganville', 'Gwinnett', '4', '2', '1', '2001', '', '', '01/07/2017', '', '', '', '', '', '30052', '', 'W.J. Cooper', 'McConnell', 'Archer', ''),
(1, '', 5790438, '', '', 109900, 'A', '2323 Wilkins Cove', '', '42', 'Decatur', 'Dekalb', '3', '2', '1', '1988', '', '', '01/07/2017', '', '', '', '', '', '30035', '', 'Flat Rock', 'Miller Grove', 'Miller Grove', ''),
(1, '', 5790439, '', '', 305125, 'A', '109 Twelve Oaks Drive SE', '', '202', 'Cartersville', 'Bartow', '5', '4', '0', '2017', '', '', '01/07/2017', '', '', '', '', '', '30120', '', 'Cartersville ', 'Cartersville', 'Cartersville', ''),
(1, '', 5790440, '', '', 249000, 'A', '1509 Woodfern Drive', '', '53', 'Decatur', 'Dekalb', '4', '2', '0', '1953', '', '', '01/07/2017', '', '', '', '', '', '30030', '', 'Avondale', 'Druid Hills', 'Druid Hills', ''),
(1, '', 5790443, '', '', 425000, 'A', '10905 Shallowford Road', '', '13', 'Roswell', 'Fulton', '5', '3', '1', '1981', '', '', '01/07/2017', '', '', '', '', '', '30075', '', 'Mountain Park - Fulton', 'Crabapple', 'Roswell', ''),
(1, '', 5790445, '', '', 299900, 'A', '2422 Easy Living Way SW', '', '74', 'Marietta', 'Cobb', '4', '2', '1', '2017', '', '', '01/07/2017', '', '', '', '', '', '30064', '', 'Cheatham Hill', 'Pine Mountain', 'Kennesaw Mountain', ''),
(0, '', 7582384, 'Kike', '', 0, 'A', '35 Burnett Cir', '', '13', 'Alpharetta', 'Fulton', '1', '1', '0', '1960', '', '', '', '', '', '', '', '', '30009', '', 'Maning Oks', 'Northwstrn', 'Milton', ''),
(0, '', 8000989, 'Kike', '', 0, 'A', '3620 Knollwood Dr', '', '21', 'Atlanta', 'Fulton', '1', '1', '0', '2016', '', '', '', '', '', '', '', '', '30305', '', 'Jackson', 'Sutton', 'N Atl', ''),
(0, '', 8036919, 'Kike', '', 0, 'A', '4530 Peachtree Dunwoody Rd', '', '132', 'Sandy Springs', 'Fulton', '1', '1', '1', '1955', '', '', '', '', '', '', '', '', '30342-2843', '', 'High Point', 'Ridgeview', 'Riverwood', ''),
(0, '', 8053344, 'Kike', '', 0, 'A', '66 SE Ormond St', '', '32', 'Atlanta', 'Fulton', '1', '1', '0', '1980', '', '', '', '', '', '', '', '', '30315-1531', '', 'Parkside', 'King', 'MH Jksn Jr', ''),
(0, '', 8054559, '', '', 14900, 'Otros', '785 Coleman St', '', '31', 'Atlanta', 'Fulton', '1', '1', '0', '1920', '', '', '', '', '', '', '', '', '30310', '', 'Gideons', 'Sylvan Hil', 'Carver', ''),
(0, '', 8069473, 'Kike', '', 0, 'A', '16070 Freemanville Rd', '', '13', 'Milton', 'Fulton', '1', '1', '0', '1949', '', '', '', '', '', '', '', '', '30004', '', 'Birm Falls', 'Northwstrn', 'Cambridge', ''),
(0, '', 8114462, '', '', 16900, 'N', '374 Roy St', '', '31', 'Atlanta', 'Fulton', '1', '1', '0', '1945', '', '', '', '', '', '', '', '', '30310', '', 'Gideons', 'Parks', 'Carver', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banderas`
--
ALTER TABLE `banderas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datoscasas`
--
ALTER TABLE `datoscasas`
  ADD PRIMARY KEY (`dato2`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banderas`
--
ALTER TABLE `banderas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

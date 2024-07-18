-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 12:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emerald`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(555) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `hname` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `district` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `pin` int(11) NOT NULL,
  `password` varchar(55) NOT NULL,
  `image` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `fname`, `lname`, `email`, `phone`, `hname`, `city`, `district`, `state`, `pin`, `password`, `image`) VALUES
(1, 'qqq', 'qqq', 'qqq@gmail.com', 759, 'qqq', 'qqq', 'qqq', 'qqq', 777, 'qqq@123', 'qqq.jfif'),
(3, 'Admin', 'P', 'admin@gmail.com', 7536985214, 'ewf', 'ewf', 'rgwd', 'ew4f', 552236, 'Admin@123', 'a.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `crid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cid` int(11) NOT NULL,
  `pname` varchar(111) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(555) NOT NULL,
  `email` varchar(111) NOT NULL,
  `odates` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catogary`
--

CREATE TABLE `catogary` (
  `cid` int(11) NOT NULL,
  `cname` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catogary`
--

INSERT INTO `catogary` (`cid`, `cname`) VALUES
(1, 'Starters'),
(2, 'Soups'),
(3, 'Deserts'),
(4, 'Salad'),
(5, 'Rice_&_Biriyani'),
(6, 'Bread'),
(7, 'Non-veg'),
(8, 'Veg'),
(9, 'Tantoori_&_Tawan'),
(10, 'Pizza'),
(11, 'Burger'),
(12, 'Sandwich'),
(13, 'Icecreams'),
(14, 'Shake'),
(15, 'Cool_Drinks'),
(16, 'Hot_Drinks'),
(17, 'Dessert'),
(18, 'Fruit_Salad');

-- --------------------------------------------------------

--
-- Table structure for table `delivary`
--

CREATE TABLE `delivary` (
  `did` int(11) NOT NULL,
  `email` varchar(555) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `o_date` date NOT NULL DEFAULT current_timestamp(),
  `d_date` date NOT NULL,
  `d_time` time NOT NULL,
  `hname` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(33) NOT NULL,
  `pincode` bigint(20) NOT NULL,
  `phone1` bigint(20) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivary`
--

INSERT INTO `delivary` (`did`, `email`, `fname`, `lname`, `o_date`, `d_date`, `d_time`, `hname`, `city`, `district`, `pincode`, `phone1`, `action`) VALUES
(7, 'qqq@gmail.com', 'qqq', 'eee', '2023-03-07', '2023-03-30', '02:30:00', 'ddd', 'Pala', 'Kottayam', 686635, 75321598456, 'Ordered'),
(8, 'eee@gmail.com', 'eee', 'www', '2023-03-07', '2023-03-28', '16:33:02', 'ddd', 'Vallichira', 'Kottayam', 686639, 7532698541, 'Ordered'),
(9, 'qqrrrq@gmail.com', 'www', 'rrr', '2023-03-07', '2023-03-09', '09:58:00', 'eee', 'Pala', 'Kottayam', 686635, 7539512236, 'Ordered'),
(10, 'yyy@gmail.com', 'www', 'ttt', '2023-03-07', '2023-03-18', '01:20:00', 'dd', 'Pala', 'Kottayam', 686635, 7532159852, 'Ordered'),
(11, 'ttt@gmail.com', 'rrr', 'www', '2023-03-08', '2023-03-19', '15:47:00', 'fff', 'Kuravilangadu', 'Kottayam', 686639, 951268452, 'Ordered');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `hname` varchar(33) NOT NULL,
  `city` varchar(33) NOT NULL,
  `district` varchar(33) NOT NULL,
  `state` varchar(33) NOT NULL,
  `pin` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `job` varchar(33) NOT NULL,
  `doj` date NOT NULL,
  `password` varchar(33) NOT NULL,
  `image` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `fname`, `lname`, `phone`, `email`, `hname`, `city`, `district`, `state`, `pin`, `salary`, `job`, `doj`, `password`, `image`) VALUES
(3, 'Augusine', 'Patrick', 8111876333, 'augustine@gmail.com', 'Puthenpurayil', 'Pala', 'Kottayam', 'Kerala', 686635, 25000, 'Manager', '2022-07-08', 'Aug@123', '63d55b3148578.jpg'),
(5, 'Arun', 'Joseph', 7536985214, 'arun@gmail.com', 'Puthenpurayil', 'Pala', 'Kozhikod', 'Kerala', 686635, 15000, 'Supplier', '2022-12-07', 'A@123', 'staff-2.jpg'),
(6, 'Kevin', 'Joseph', 9512365478, 'kevin@gmail.com', 'Valiyil', 'Pala', 'Kozhikod', 'Kerala', 686635, 20000, 'Cheff', '2022-09-07', '1qaz@', 'staff-4.jpg'),
(7, 'Benny', 'Baby', 7539512369, 'benny@gmail.com', 'qwsdfgh', 'rghd', 'Wayanad', 'Kerala', 686644, 12000, 'Delevary', '2023-01-12', '1qwer6789ikm', '63d55f0d6ee1c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `cid` int(11) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `types` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`pid`, `pname`, `image`, `price`, `cid`, `discription`, `types`) VALUES
(2, 'Veg Finger Sticks ', 'images.jpeg', '80', 1, 'Vegetable fingers coated in crispy breadcrumbs, lightly fried. Powered by plants. Rich in vitamin A. Suitable for Vegans.', 'veg'),
(3, 'Chicken Nuggets ', 'download (1).jpeg', '100', 1, 'A chicken nugget is a food product consisting of a small piece of deboned chicken meat that is breaded or battered, then deep-fried or baked. Invented in the 1950s, chicken nuggets have become a very popular fast food restaurant item, as well as widely sold frozen for home use.', 'non-veg'),
(4, 'Fish Fingers ', 'download (2).jpeg', '20', 1, 'Fish fingers are small long pieces of fish covered in breadcrumbs. They are usually sold in frozen form.', 'non-veg'),
(5, 'Grilled Veg', 'download (3).jpeg', '100', 4, 'Grilling is a form of cooking that involves dry heat applied to the surface of food, commonly from above, below or from the side. Grilling usually involves a significant amount of direct, radiant heat, and tends to be used for cooking meat and vegetables quickly.', 'veg'),
(6, 'Caesar salad', 'download (4).jpeg', '100', 4, 'Caesar salad, invented in Tijuana, Mexico, in the 1920s, is a green salad of romaine with a highly seasoned dressing of pounded anchovies, olive oil, lemon juice, egg, and Parmesan cheese, garnished with croutons. Vegetable salads may be marinated or sauced mixtures of raw or cooked vegetables.', 'veg'),
(8, 'ldskool Notorious Chicken Burger', 'download (7).jpeg', '150', 11, ' Served with French fries. Grilled double chicken patty with double salami, double cheese, fried egg and all add on in a fresh toasted bun.less food type icon', 'non-veg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `rid` int(11) NOT NULL,
  `email` varchar(110) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `no_chair` int(11) NOT NULL,
  `phone1` bigint(20) NOT NULL,
  `rdate` date NOT NULL DEFAULT current_timestamp(),
  `btime` time NOT NULL,
  `bdate` date NOT NULL,
  `r_action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`rid`, `email`, `fname`, `lname`, `no_chair`, `phone1`, `rdate`, `btime`, `bdate`, `r_action`) VALUES
(1, 'zzz@gmail.com', 'Augusine', 'Patrick', 5, 7536984123, '0000-00-00', '00:00:00', '2023-03-24', 'Reserved'),
(2, 'xxx@gmail.com', 'qqq', 'eee', 5, 75321598412, '0000-00-00', '09:46:00', '2023-03-20', 'Reserved'),
(3, 'ccc@gmail.com', 'www', 'vvv', 7, 75319652, '2023-03-07', '03:52:00', '2023-03-17', 'Reserved'),
(4, 'agnes@gmail.com', 'Agnes', 'Joseph', 6, 7532159845, '2023-03-08', '18:39:00', '2023-03-23', 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `tid` int(11) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`tid`, `tname`, `price`, `description`, `image`) VALUES
(1, 'Basic Table ', '20.00', '•	Start with a simple, woven placemat in front of each seat.\n•	Place your everyday ware (or melamine plates) in the middle of each placemat.\n•	Set a folded napkin on the left side of the plate.\n•	Top the napkin with a dinner fork and place a dinner knife to the ride of the plate.\n•	Finish with a water glass above the knife\n', 'Table_Setting_1.jpg'),
(2, 'Informal Table ', '30.00', 'If you’re sitting down for a family dinner or a casual dinner date, add a few extra touches to celebrate the gathering. Start with the basic table setting then you add the extras: •	Use a decorative napkin or a cloth napkin (instead of a paper napkin), and place it under the fork. •	Add a soup spoon to the right of the knife. A salad fork is optional, but if you choose to use it, it should go on the left of the plate (outside the dinner fork). •	Place the wine glass to the right of the water gla', 'TableSetting_2a.jpg'),
(3, 'Formal Table ', '50.00', 'For fancy dinner parties or holiday meals, it’s time to step up the table setting a notch! Impress your guests with a tablespace that shows as much thought and care as you put into the food. Start with the informal table setting and then:\n•	Spread your best tablecloth or table runner across the table. The drop should be about a foot from the table, at lap level.\n•	Place candles and flowers in the centre of the table. Unscented are highly recommended to avoid any interference with the aroma of the food. Use low arrangements of flowers to prevent distractions.\n•	Replace everyday linens with lovely placemats and your best cloth napkins, which are folded and put across the centre of the dinner plate.\n•	Use heirloom dishes (or china) and high-quality silver flatware.\n•	Add a bread plate and small butter knife above the forks and a salad plate to the direct left of the forks.\n•	Place a dessert fork and spoon above the plate. (This is optional since these utensils can also be brought out with the dessert course.)\n•	If necessary, add a steak knife to the right of the plate.\n•	Use stemmed wine glasses: The white wine glass is placed to the lower right of the water glass, and the red wine glass is placed above them so the three glasses form a triangle.\n•	To channel a fine-dining vibe, place a charger (a large decorative plate) under the dinner plate.\n \n', 'Table_Setting_3.jpg'),
(4, 'Five-Course Table ', '60.00', ' Pull out all the stops for a formal, five-course feast, which typically consists of soup, salad, fish course, main course, and dessert. Start with the formal place setting steps outlined above, then: •	Add a Champagne flute further back behind the white wine glass. •	Place a sherry glass closer to the front, ahead of the red wine glass. •	If you’re serving a fish course, add a fish fork between the salad and dinner forks and a fish knife between the dinner knife and soup spoon. •	To top it off, include a name card on each place setting.', 'Table_Setting_4.jpg'),
(5, 'Buffet Table ', '60.00', 'Whether you are serving your guests or it is a buffet dinner, buffet table set up is perfect for customers who like to get the food on their own. The customer’s table includes just the essential utensils as spoons, forks, plates, etc. are stacked at the end of the buffet table line. As the guests pick up the plates and food from the buffet table, there is no charger or service plate on their table. In the center of the table, place the folded napkin and menu or name card on the plate. Alternatively, you can stack the napkins on the buffet table as well. Starting from the outer edge, place the salad fork first, and then the dinner fork on the left of the plate. Similarly, keep the dinner knife on the immediate right of the plate, followed by the soup spoon. Water and wine glasses go at the top of the plate.', 'Table_Setting_5.jpg'),
(6, 'Pizzeria Table', '40.00', 'One of the favorites for many people across the globe, a pizzeria table consists of the most basic restaurant table setting serving the guests. The most popular set up consists of one piece each of plate, knife, fork, spoon, glass, and napkin. Put the fork on the left of the diner’s plate with a napkin underneath it. Place the knife and spoon on the right side of the plate. Glass goes on the upper right corner of the plate above the knife.', 'Pizzeria-table-setting-1.jpg'),
(7, 'Casual Table ', '50.00', 'An informal or casual table set up fits perfectly for dinner parties, casual weddings, and family occasions. These types of table setting requires fewer utensils and gives you more flexibility in arranging them on the table. Although the charger is optional, you provide the service plate for serving the salad course, soup course, etc. Just like the formal setting, a napkin goes on the top of the service plate along with the menu card. On the left side of the service plate, keep the salad fork at the outer edge and dinner fork on the immediate left of the service plate. Put the soup spoon, salad knife, and dinner knife starting from the outer edge of the table on the right side of the service plate. Dessert teaspoon, water, and wine glasses go at the top of the service plate.', 'Casual-table-setting-1.jpg'),
(12, 'Formal Table 2', '50.00', 'Restaurant Tables and Chairs | Missouri Table and Chair NEED HELP? 1-800-225-4935  HOME TABLES BASES CHAIRS BAR STOOLS OUTDOOR BOOTHS QUICK SHIP MISCELLANEOUS CONTACT  Search wood tables 5 Types of Restaurant Table Setting Every Restaurant Owner MUST Know Whether you are hosting a formal wedding reception or an informal birthday party for kids, the table setting is as crucial as the décor of your restaurant. As a responsible manager or restaurant owner, you must know the proper types of table se', 'Formal-table-setting-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `phone`, `password`) VALUES
(1, 'www', 'eee', 'aaa@gmail.com', 4423414543, 'sad@123'),
(2, 'Augusine', 'Patrick', 'augustine patrick@gmail.com', 9512635741, 'Augustine@123'),
(5, 'Agnes', 'Joseph', 'agnes@gmail.com', 7584123698, 'asd@123'),
(6, 'Joshan', 'John', 'joshan@gmail.com', 9512365478, 'Joshan@123'),
(7, 'Kathi', 'Josmon', 'kathi@gmail.com', 9512365852, 'Kathi@123'),
(8, 'dsfav', 'asfvafd', 'afdsv@gmail.com', 8543543251, '2edfv'),
(9, 'Sony', 'Kuriyan', 'sony@gmail.com', 7536984126, 'qsdcv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `email` (`email`,`phone`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`crid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `catogary`
--
ALTER TABLE `catogary`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `delivary`
--
ALTER TABLE `delivary`
  ADD PRIMARY KEY (`did`),
  ADD KEY `delivary_ibfk_1` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `phone` (`phone`,`email`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `catogary`
--
ALTER TABLE `catogary`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `delivary`
--
ALTER TABLE `delivary`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Constraints for table `delivary`
--
ALTER TABLE `delivary`
  ADD CONSTRAINT `delivary_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

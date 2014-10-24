
--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` text collate utf8_bin NOT NULL,
  `category_order` text collate utf8_bin NOT NULL,
  `category_description` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_order`, `category_description`) VALUES
(5, 0x4170706574697a657273, 0x31, ''),
(6, 0x536f757020616e642053616c6164, 0x32, ''),
(7, 0x566567657461626c65, 0x33, ''),
(8, 0x4e6f6f646c652f446f6e62757269, 0x34, ''),
(9, 0x53616e6477696368, 0x35, '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL auto_increment,
  `item_name` text collate utf8_bin NOT NULL,
  `item_category` text collate utf8_bin NOT NULL,
  `item_order` text collate utf8_bin NOT NULL,
  `item_description` text collate utf8_bin NOT NULL,
  `item_price` text collate utf8_bin NOT NULL,
  `item_image` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_category`, `item_order`, `item_description`, `item_price`, `item_image`) VALUES
(1, 0x42656566204e6567696d616b69, 0x35, 0x31, 0x50616e2d667269656420626565662077697468207363616c6c696f6e7320616e64207465726979616b692073617563652e, 0x372e3938, ''),
(2, 0x436869636b656e205461747375746120416765, 0x35, 0x32, 0x467269656420616e64206d6172696e6174656420636869636b656e, 0x362e3935, ''),
(3, 0x44756b20426f6b204b69, 0x35, 0x33, 0x526963652063616b652c20666973682063616b652c20737469722d6672696564206f6e696f6e73616e64207363616c6c696f6e73, 0x372e3935, ''),
(4, 0x4c6f6273746572204d69736f20536f7570, 0x36, 0x31, 0x4d69736f20736f75702077697468206c6f62737465722c206f6e696f6e732c207363616c6c696f6e7320616e6420746f6675, 0x31322e3935, ''),
(5, 0x537069637920536561666f6f6420616e6420566567657461626c6520536f7570, 0x36, 0x32, 0x5370696379206d69736f20736f7570207769746820736561666f6f6420616e6420766567657461626c6573, 0x382e3939, ''),
(6, 0x4173736f72746564204a6170616e657365207069636b6c6573, 0x37, 0x31, 0x4173736f72746564204a6170616e657365207069636b6c6573, 0x362e3935, ''),
(7, 0x4e61626579616b692055646f6e, 0x38, 0x31, 0x566567657461626c652075646f6e206e6f6f646c6520736f7570207769746820736872696d702074656d7075726120616e6420656767, 0x31342e3935, ''),
(8, 0x4368617063686165, 0x38, 0x32, 0x547261646974696f6e616c204b6f7265616e20737469722d667269656420636c656172206e6f6f646c657320616e6420766567657461626c6573207365727665642077697468206569746865722062656566206f7220636869636b656e20616e64206d69736f20736f7570, 0x31332e3639, ''),
(9, 0x5a6172752055646f6e, 0x38, 0x33, 0x436f6c642075646f6e206e6f6f646c6573207365727665642077697468207370656369616c20636f6c6420736f757020666f722064697070696e67, 0x31312e3535, ''),
(10, 0x436c6173736963205461636f, 0x39, 0x31, 0x506f7461746f2c20204c65747475636520616e642043686565736520, 0x332e3530, '');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_info`
--

CREATE TABLE IF NOT EXISTS `restaurant_info` (
  `id` int(11) NOT NULL auto_increment,
  `r_name` text collate utf8_bin NOT NULL,
  `r_address` text collate utf8_bin NOT NULL,
  `r_city` text collate utf8_bin NOT NULL,
  `r_state` text collate utf8_bin NOT NULL,
  `r_zipcode` text collate utf8_bin NOT NULL,
  `r_phone` text collate utf8_bin NOT NULL,
  `r_email` text collate utf8_bin NOT NULL,
  `r_website` text collate utf8_bin NOT NULL,
  `r_hours` text collate utf8_bin NOT NULL,
  `r_logo` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `restaurant_info`
--

INSERT INTO `restaurant_info` (`id`, `r_name`, `r_address`, `r_city`, `r_state`, `r_zipcode`, `r_phone`, `r_email`, `r_website`, `r_hours`, `r_logo`) VALUES
(1, 0x5a6970706178, 0x3137332053616c74736275726720417665, 0x496e6469616e61, 0x5041, 0x3135373031, 0x28373234293534312d33393034, 0x73616c6573407a69707061782e636f6d, 0x687474703a2f2f7777772e7a69707061782e636f6d, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE IF NOT EXISTS `times` (
  `id` int(11) NOT NULL auto_increment,
  `time_name` text collate utf8_bin NOT NULL,
  `time_order` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `time_name`, `time_order`) VALUES
(1, 0x427265616b66617374, 0x31),
(2, 0x4c756e6368, 0x32),
(3, 0x44696e6e6572, 0x33);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` text collate utf8_bin NOT NULL,
  `password` text collate utf8_bin NOT NULL,
  `email` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 0x7a6970706178, 0x7a6970706178, 0x73616c6573407a69707061782e636f6d);

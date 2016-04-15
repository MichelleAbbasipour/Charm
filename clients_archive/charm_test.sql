-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2016 at 08:12 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `charm_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appts_id` int(11) NOT NULL,
  `clients_id` int(11) DEFAULT NULL,
  `businesses_id` int(11) DEFAULT NULL,
  `employees_id` int(11) DEFAULT NULL,
  `treatments_id` int(10) NOT NULL,
  `appts_time` varchar(45) DEFAULT NULL,
  `appts_date` date DEFAULT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `booked_date` date NOT NULL,
  `appt_confirm` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appts_id`, `clients_id`, `businesses_id`, `employees_id`, `treatments_id`, `appts_time`, `appts_date`, `first_name`, `last_name`, `phone`, `email`, `booked_date`, `appt_confirm`) VALUES
(75, 0, 97, 0, 380, NULL, '0000-00-00', 'Michelle', 'Abbasipour', '123457686876', 'michelleabbasipour@email.com', '2016-02-14', ''),
(76, 0, 19, 0, 346, NULL, '0000-00-00', 'Bob', 'Jones', '132465465421', 'bjones@email.com', '2016-02-14', ''),
(77, 0, 11, 0, 331, NULL, '2016-02-01', 'Frank', 'Smith', '123457576757', 'franksmith@email.com', '2016-02-14', ''),
(78, 0, 11, 0, 331, NULL, '0000-00-00', 'John', 'Knight', '121177235754', 'jk@email.com', '2016-02-14', ''),
(79, 0, 11, 0, 331, NULL, '2016-02-09', 'Derek', 'Brown', '123312441534', 'kh@khhkj.com', '2016-02-14', ''),
(80, 0, 11, 0, 331, NULL, '0000-00-00', 'Derek', 'Brown', '435345345432', 'kh@khhkj.com', '2016-02-14', ''),
(81, 0, 11, 0, 331, NULL, '0000-00-00', 'Derek', 'Brown', '564564562454', 'kh@khhkj.com', '2016-02-14', ''),
(82, 0, 11, 0, 331, NULL, '0000-00-00', 'Jenna', 'Jackson', '677376523767', 'khkjdhksf@hgkhdjs.com', '2016-02-14', ''),
(83, 0, 11, 0, 331, NULL, '0000-00-00', 'Alex', 'Brown', '635436523153', 'ab@email.com', '2016-02-14', ''),
(84, 0, 13, 0, 398, NULL, '0000-00-00', 'Kelly', 'Gokjhkg', '386482368346', 'gjkg@jkgjhg.com', '2016-02-14', ''),
(85, 0, 13, 0, 398, NULL, '2016-02-12', 'Dreugjh', 'jhgjhghg', '345434563485', 'jhgjhg@khkj.com', '2016-02-14', ''),
(86, 0, 6, 0, 317, NULL, '0000-00-00', 'hgjgh', 'jhghg', '873687423486', 'jhgj@hkhds.com', '2016-02-14', ''),
(87, 0, 6, 0, 317, NULL, '0000-00-00', 'hgjgh', 'jhghg', '564576457657', 'jhgj@hkhds.com', '2016-02-14', ''),
(88, 0, 6, 0, 317, NULL, '0000-00-00', 'hfgh', 'gfhfgthsfh', '943837593498', 'gfhsg@khkj.cp', '2016-02-14', ''),
(89, 0, 6, 0, 317, NULL, '0000-00-00', 'happy', 'party', '783475843665', 'hp@email.com', '2016-02-14', ''),
(90, 0, 6, 0, 317, NULL, '0000-00-00', 'testing', 'testing1', '836874632768', 'testing@gmail.com', '2016-02-14', ''),
(91, 0, 6, 0, 317, NULL, '2016-02-02', 'testing', 'testing1', '575673676575', 'testing@gmail.com', '2016-02-14', ''),
(92, 0, 6, 0, 317, NULL, '0000-00-00', 'marcus', 'smith', '873426863458', 'khfdk@klljk', '2016-02-14', ''),
(93, 0, 6, 0, 317, NULL, '0000-00-00', 'marcus', 'smith', '566457356765', 'khfdk@klljk', '2016-02-14', ''),
(94, 0, 6, 0, 317, NULL, '0000-00-00', 'marcus', 'smith', '657567657674', 'khfdk@klljk', '2016-02-14', ''),
(95, 0, 6, 0, 317, NULL, '2016-02-15', 'marcus', 'smith', '564564564545', 'khfdk@klljk', '2016-02-14', ''),
(96, 0, 6, 0, 317, NULL, '0000-00-00', 'brodie', 'smith', '534767365375', 'khfdk@klljk', '2016-02-14', ''),
(97, 0, 6, 0, 317, NULL, '2016-02-23', 'frankie', 'jake', '876876346634', 'jgjh@khk.om', '2016-02-14', ''),
(98, 0, 6, 0, 317, NULL, '0000-00-00', 'frankie', 'jake', '675756767556', 'jgjh@khk.om', '2016-02-14', ''),
(99, 0, 6, 0, 317, NULL, '0000-00-00', 'frankie', 'jake', '676575675488', 'jgjh@khk.om', '2016-02-14', ''),
(100, 0, 6, 0, 317, NULL, '2016-02-12', 'frankie', 'jake', '867867867847', 'jgjh@khk.om', '2016-02-14', ''),
(101, 0, 6, 0, 317, NULL, '0000-00-00', 'frankie', 'jake', '768676987987', 'jgjh@khk.om', '2016-02-14', ''),
(102, 0, 10, 0, 319, NULL, '2016-02-16', 'Michelle', 'Abbasipour', '899643856834', 'michelleabbasipour@outlook.com', '2016-02-15', ''),
(103, 0, 99, 0, 411, NULL, '2016-02-19', 'Kiki', 'Koo', '546456356436', 'kiki@email.com', '2016-02-18', ''),
(104, 0, 99, 0, 411, NULL, '2016-02-17', 'Kiki', 'Koo', '645634563543', 'kiki@email.com', '2016-02-18', ''),
(105, 0, 99, 0, 411, NULL, '0000-00-00', 'Kiki', 'Koo', '536456546364', 'kiki@email.com', '2016-02-18', ''),
(106, 0, 99, 0, 411, NULL, '0000-00-00', 'Bob', 'Jones', '996793457935', 'bobjones@email.com', '2016-02-18', ''),
(107, 0, 998, 0, 439, NULL, '0000-00-00', 'TestingName', 'LastName', '757665757577', 'michelleabbasipour@outlook.com', '2016-02-23', ''),
(110, 0, 998, 0, 439, NULL, '0000-00-00', 'TestingName', 'LastName', '345435245334', 'michelleabbasipour@outlook.com', '2016-02-23', ''),
(111, 0, 998, 0, 439, NULL, '0000-00-00', 'TestingName', 'LastName', '977979798798', 'michelleabbasipour@outlook.com', '2016-02-23', ''),
(112, 0, 361, 0, 431, NULL, '0000-00-00', 'FirstName', 'LastName', '435234452345', 'michelleabbasipour@outlook.co', '2016-02-23', ''),
(114, 0, 361, 0, 431, NULL, '0000-00-00', 'Firstname', 'lastname', '535434325345', 'michelleabbasipour@outlook.c.uk', '2016-02-23', ''),
(115, 0, 366, 0, 430, NULL, '0000-00-00', 'firstname', 'lastname', '435345345234', 'michelleabbasipour@outlook.c', '2016-02-23', ''),
(116, 0, 347, 0, 430, NULL, '0000-00-00', 'nameone', 'nametwo', '797989797987', 'michelleabbasipour@outlook.com', '2016-02-23', ''),
(117, 0, 346, 0, 430, NULL, '0000-00-00', 'first', 'last', '453453523455', 'michelleabbasipour@outlook.com', '2016-02-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `apps_available`
--

CREATE TABLE `apps_available` (
  `available_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `available_date` date NOT NULL,
  `available_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `businesses_id` mediumint(8) unsigned NOT NULL,
  `businesses_name` varchar(255) DEFAULT NULL,
  `businesses_address` varchar(255) DEFAULT NULL,
  `businesses_postcode` varchar(10) DEFAULT NULL,
  `businesses_email` varchar(255) DEFAULT NULL,
  `businesses_mobile` text NOT NULL,
  `businesses_phone` text NOT NULL,
  `businesses_bio` text,
  `businesses_url` text,
  `pro_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=999 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`businesses_id`, `businesses_name`, `businesses_address`, `businesses_postcode`, `businesses_email`, `businesses_mobile`, `businesses_phone`, `businesses_bio`, `businesses_url`, `pro_id`) VALUES
(147, 'testing', 'khkhkhkh', 'khkhkhkh', 'michelleabbasipour@outlook.com', '564536456456', 'no phone number', 'no business bio', 'no business website', 994),
(345, 'testing', 'this is the address', 'bs34 5bh', 'glimmer@email.com', '864856834658', 'no phone number', 'no business bio', 'no business website', 1005),
(346, 'testing', 'hkhkjjhjkhkjhkj', 'hkjhhk', 'glimmer@email.com', '899687687676', '564456463454', 'this will be the bio of the business', 'www.glimmer.co.uk', 1004),
(347, 'testing', 'khkkkjkh', 'kjhkhjkjhk', 'sparklyhairandnails@email.com', '563464535653', 'no phone number', 'no business bio', 'no business website', 996),
(348, 'testing', 'dsfsdfsadfs', 'gfgfdggsdf', 'diamond@beauty.com', '686878878886', 'no phone number', 'no business bio', 'no business website', 997),
(350, 'testing', 'khkhkjh', 'kjhkhkh', 'teardrops@email.com', '657456567464', 'no phone number', 'no business bio', 'no business website', 993),
(361, 'testing', 'dsfgdfgdfgsdf', 'dfsgdfggfd', 'michelleabbasipour@outlook.com', '563456434543', 'no phone number', 'no business bio', 'no business website', 999),
(365, 'Name Two', '48 Chessel Drive', 'BS34 5BH', 'business@email.com', '07568530324', '01179698880', 'this is a bio', 'jgjgjgjh.css', 1000),
(366, 'Cuts n stuff', 'this is the address', 'B67 2GH', 'cutsnstuff@gmail.com', '987974979873', '979879879788', 'no business bio', 'no business website', 1003),
(367, 'Nelly Nails', 'The Street, Town', 'LP89 5HB', 'nellynails@email.com', '977927979787', 'no phone number', 'no business bio', 'nellynails.com', 1001),
(368, 'kjhgkkjh', 'kjhkhkjhjk', 'kjkhkhkjh', 'kjh@kjhkjhkjh.com', '987984579897', 'no phone number', 'no business bio', 'not set', 1002),
(369, 'fdsdfgdfsg', 'gsdfgdsfgdfg', 'dfgdsgf', 'michelleabbasipour@outlook.com', '453452345343', 'not set', 'not set', 'not set', 1006),
(996, 'testing', 'khkhkkh', 'khkhkhjk', 'michelleabbasipour@outlook.com', '645645634564', 'no phone number', 'no business bio', 'no business website', 998),
(998, 'testing', 'kkhkhkhkj', 'khkhkh', 'michelleabbasipour@outlook.uk', '977897979797', 'no phone number', 'no business bio', 'no business website', 995);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clients_id` int(8) unsigned NOT NULL,
  `clients_type` varchar(10) NOT NULL,
  `clients_first_name` varchar(255) DEFAULT NULL,
  `clients_last_name` varchar(255) DEFAULT NULL,
  `clients_username` varchar(10) DEFAULT NULL,
  `clients_email` varchar(255) DEFAULT NULL,
  `clients_address` varchar(255) DEFAULT NULL,
  `clients_mobile` varchar(100) DEFAULT NULL,
  `clients_cur_med_1` text,
  `clients_cur_med_2` text,
  `clients_med_history_1` text,
  `clients_med_history_2` text,
  `clients_notes` text,
  `clients_password` varchar(10) NOT NULL,
  `clients_confirm_password` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=440 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clients_id`, `clients_type`, `clients_first_name`, `clients_last_name`, `clients_username`, `clients_email`, `clients_address`, `clients_mobile`, `clients_cur_med_1`, `clients_cur_med_2`, `clients_med_history_1`, `clients_med_history_2`, `clients_notes`, `clients_password`, `clients_confirm_password`) VALUES
(351, 'client', 'Maria', 'Gordon', 'mgordon0', 'mgordon0@ca.gov', '086 Eggendart Terrace', '07365454726', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(352, 'client', 'Melissa', 'Davis', 'mdavis1', 'mdavis1@t-online.de', '16258 Talisman Way', '07677883587', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(353, 'client', 'Carolyn', 'Gonzales', 'cgonzales2', 'cgonzales2@unc.edu', '0707 Delaware Hill', '07356507546', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(354, 'client', 'Karen', 'Carter', 'kcarter3', 'kcarter3@ustream.tv', '0 Schlimgen Terrace', '07710395952', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(355, 'client', 'Ruby', 'Gomez', 'rgomez4', 'rgomez4@webnode.com', '4 Fallview Hill', '07227365518', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(356, 'client', 'Susan', 'Ferguson', 'sferguson5', 'sferguson5@bravesites.com', '16836 Briar Crest Circle', '07470636735', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(357, 'client', 'Marie', 'Collins', 'mcollins6', 'mcollins6@dailymotion.com', '792 4th Trail', '07071764312', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(358, 'client', 'Carolyn', 'Lopez', 'clopez7', 'clopez7@berkeley.edu', '97282 Manitowish Terrace', '07464838324', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(359, 'client', 'Anne', 'Holmes', 'aholmes8', 'aholmes8@imgur.com', '7 Erie Crossing', '07311393749', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(360, 'client', 'Sarah', 'Grant', 'sgrant9', 'sgrant9@1688.com', '32 Hudson Pass', '07835702200', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(361, 'client', 'Melissa', 'Griffin', 'mgriffina', 'mgriffina@gravatar.com', '640 Doe Crossing Hill', '07745496669', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(362, 'client', 'Mildred', 'Meyer', 'mmeyerb', 'mmeyerb@rediff.com', '47815 Manufacturers Avenue', '07215569668', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(363, 'client', 'Virginia', 'Bowman', 'vbowmanc', 'vbowmanc@devhub.com', '78852 Mayer Center', '07590820890', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(364, 'client', 'Irene', 'Hunt', 'ihuntd', 'ihuntd@upenn.edu', '6 Corben Way', '07642541698', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(365, 'client', 'Tammy', 'Fox', 'tfoxe', 'tfoxe@pcworld.com', '53242 Glacier Hill Terrace', '07104941738', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(366, 'client', 'Ruth', 'Greene', 'rgreenef', 'rgreenef@nytimes.com', '3193 Pawling Point', '07286996287', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(367, 'client', 'Amanda', 'Ramirez', 'aramirezg', 'aramirezg@nydailynews.com', '18 Sycamore Terrace', '07321132982', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(368, 'client', 'Marie', 'Reynolds', 'mreynoldsh', 'mreynoldsh@i2i.jp', '8 Bunker Hill Drive', '07697989157', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(369, 'client', 'Susan', 'Knight', 'sknighti', 'sknighti@virginia.edu', '06669 Muir Pass', '07989374358', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(370, 'client', 'Diana', 'Lawrence', 'dlawrencej', 'dlawrencej@nytimes.com', '46539 Moland Way', '07586961592', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(371, 'client', 'Teresa', 'Marshall', 'tmarshallk', 'tmarshallk@constantcontact.com', '71373 Carey Alley', '07816747690', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(372, 'client', 'Paula', 'Evans', 'pevansl', 'pevansl@alexa.com', '2 Fallview Center', '07282188008', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(373, 'client', 'Patricia', 'Knight', 'pknightm', 'pknightm@amazon.com', '7 Village Place', '07818655720', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(374, 'client', 'Katherine', 'Harris', 'kharrisn', 'kharrisn@spiegel.de', '16 Northport Way', '07894249064', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(375, 'client', 'Elizabeth', 'Jordan', 'ejordano', 'ejordano@4shared.com', '853 Columbus Hill', '07358711099', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(376, 'client', 'Cynthia', 'Warren', 'cwarrenp', 'cwarrenp@desdev.cn', '1682 Bluestem Avenue', '07563880995', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(377, 'client', 'Mildred', 'Little', 'mlittleq', 'mlittleq@bizjournals.com', '706 Northport Drive', '07680954428', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(378, 'client', 'Judith', 'Taylor', 'jtaylorr', 'jtaylorr@chicagotribune.com', '46 Pankratz Plaza', '07105034532', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(379, 'client', 'Angela', 'Sullivan', 'asullivans', 'asullivans@youtube.com', '68 Ridgeway Center', '07770871005', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(380, 'client', 'Carol', 'Butler', 'cbutlert', 'cbutlert@123-reg.co.uk', '6401 Carpenter Place', '07654026210', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(381, 'client', 'Sarah', 'Wheeler', 'swheeleru', 'swheeleru@bandcamp.com', '11 Tennyson Avenue', '07567401297', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(382, 'client', 'Theresa', 'Cox', 'tcoxv', 'tcoxv@msn.com', '5937 Bluestem Place', '07300240914', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(383, 'client', 'Nicole', 'Jordan', 'njordanw', 'njordanw@facebook.com', '3505 Monterey Lane', '07949709129', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(384, 'client', 'Teresa', 'Nelson', 'tnelsonx', 'tnelsonx@hao123.com', '25 Killdeer Street', '07156790439', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(385, 'client', 'Louise', 'Smith', 'lsmithy', 'lsmithy@hubpages.com', '5 Sommers Park', '07813276930', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(386, 'client', 'Phyllis', 'Hudson', 'phudsonz', 'phudsonz@deliciousdays.com', '7 Village Green Trail', '07296718280', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(387, 'client', 'Ashley', 'Marshall', 'amarshall1', 'amarshall10@ucoz.com', '11889 Loomis Place', '07296080776', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(388, 'client', 'Rose', 'Harris', 'rharris11', 'rharris11@ucsd.edu', '73 Lawn Plaza', '07209491176', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(389, 'client', 'Jennifer', 'Richardson', 'jrichardso', 'jrichardson12@usatoday.com', '90276 Crowley Center', '07867276324', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(390, 'client', 'Tammy', 'Walker', 'twalker13', 'twalker13@jalbum.net', '76 Anhalt Circle', '07944991164', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(391, 'client', 'Carolyn', 'Palmer', 'cpalmer14', 'cpalmer14@blogs.com', '058 Trailsway Parkway', '07874767243', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(392, 'client', 'Wanda', 'Flores', 'wflores15', 'wflores15@imgur.com', '64238 La Follette Center', '07562434887', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(393, 'client', 'Kathleen', 'Palmer', 'kpalmer16', 'kpalmer16@t.co', '734 Truax Center', '07368147528', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(394, 'client', 'Donna', 'Pierce', 'dpierce17', 'dpierce17@biblegateway.com', '49388 Dixon Way', '07806250201', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(395, 'client', 'Catherine', 'Stephens', 'cstephens1', 'cstephens18@photobucket.com', '09241 Anderson Trail', '07294495860', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(396, 'client', 'Teresa', 'Reyes', 'treyes19', 'treyes19@eepurl.com', '79 Gale Center', '07362332240', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(397, 'client', 'Donna', 'Willis', 'dwillis1a', 'dwillis1a@slate.com', '3506 5th Way', '07306253342', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(398, 'client', 'Diana', 'Montgomery', 'dmontgomer', 'dmontgomery1b@abc.net.au', '3756 Grasskamp Center', '07061580465', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(399, 'client', 'Ruby', 'Jenkins', 'rjenkins1c', 'rjenkins1c@jigsy.com', '47634 Ridgeway Terrace', '07520912975', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(400, 'client', 'Angela', 'Henry', 'ahenry1d', 'ahenry1d@vkontakte.ru', '34543 Morningstar Park', '07667135773', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(431, 'client', 'khh', 'khkjh', 'ahenry1d', 'khaki@kkj.com', NULL, '956887868768', NULL, NULL, NULL, NULL, NULL, 'testing', 'testing'),
(432, 'client', 'khh', 'khkjh', 'ahenry1d', 'khaki@kkj.com', NULL, '956887868768', NULL, NULL, NULL, NULL, NULL, 'testing', 'testing'),
(433, 'client', 'kkhkhkh', 'khkhkh', 'bassibabes', 'michelleabbasipour@outlook.com', NULL, '876863846543', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(434, 'client', 'Frankie', 'okhhk', 'frankie123', 'michelleabbasipour@outlook.com', NULL, '967975345793', NULL, NULL, NULL, NULL, NULL, 'testing', 'testing'),
(435, 'client', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, '', ''),
(436, 'client', 'hgf', 'gfhfdg', 'cbutlert', 'michelleabbasipour@outlook.com-', NULL, '565764567656', NULL, NULL, NULL, NULL, NULL, 'testing', 'testing'),
(437, 'client', 'hgf', 'gfhfdg', 'cbutlert', 'michelleabbasipour@outlook.com', NULL, '436554656675', NULL, NULL, NULL, NULL, NULL, 'password', 'password'),
(438, 'client', 'hgf', 'gfhfdg', 'cbutlert', 'michelleabbasipour@outlook.com', NULL, '546547356735', NULL, NULL, NULL, NULL, NULL, 'testing', 'testing'),
(439, 'client', 'Barbars', 'kjhkjhk', 'kkgjhjgjhj', 'michelleabbasipour@outlook.co', NULL, '687886667876', NULL, NULL, NULL, NULL, NULL, 'truman1', 'truman1');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employees_id` int(11) NOT NULL,
  `employees_name` varchar(45) DEFAULT NULL,
  `employees_address` varchar(45) DEFAULT NULL,
  `employees_days` varchar(45) DEFAULT NULL,
  `employees_hours` varchar(45) DEFAULT NULL,
  `business_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
  `pro_id` int(11) NOT NULL,
  `pro_type` text NOT NULL,
  `pro_first_name` varchar(255) NOT NULL,
  `pro_last_name` varchar(255) NOT NULL,
  `pro_username` varchar(255) NOT NULL,
  `pro_email` varchar(255) NOT NULL,
  `pro_address` varchar(200) NOT NULL,
  `pro_mobile` varchar(20) NOT NULL,
  `pro_notes` text NOT NULL,
  `pro_password` varchar(255) NOT NULL,
  `pro_confirm_password` varchar(255) NOT NULL,
  `b_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`pro_id`, `pro_type`, `pro_first_name`, `pro_last_name`, `pro_username`, `pro_email`, `pro_address`, `pro_mobile`, `pro_notes`, `pro_password`, `pro_confirm_password`, `b_id`) VALUES
(991, 'professional', 'Victor', 'Myers', 'vmyersrd', 'vmyersrd@tinyurl.com', '', '', '', 'password', 'password', 994),
(992, 'professional', 'Maria', 'Torres', 'mtorresre', 'mtorresre@ft.com', '', '', '', 'password', 'password', 1004),
(993, 'professional', 'Jose', 'Cooper', 'jcooperrf', 'jcooperrf@wordpress.org', '', '', '', 'password', 'password', 350),
(994, 'professional', 'Kathy', 'Ross', 'krossrg', 'krossrg@cnbc.com', '', '', '', 'password', 'password', 997),
(995, 'professional', 'David', 'Williams', 'dwilliamsrh', 'dwilliamsrh@51.la', '', '', '', 'password', 'password', 998),
(996, 'professional', 'Earl', 'Mills', 'emillsri', 'emillsri@shop-pro.jp', '', '', '', 'password', 'password', 347),
(997, 'professional', 'Rebecca', 'Vasquez', 'rvasquezrj', 'rvasquezrj@timesonline.co.uk', '', '', '', 'password', 'password', 348),
(998, 'professional', 'Virginia', 'Cunningham', 'vcunninghamrk', 'vcunninghamrk@samsung.com', '', '', '', 'password', 'password', 996),
(999, 'professional', 'Carol', 'Bailey', 'cbaileyrl', 'cbaileyrl@pagesperso-orange.fr', '', '', '', 'password', 'password', 361),
(1000, 'professional', 'Ralph', 'Hawkins', 'rhawkinsrm', 'rhawkinsrm@gmpg.org', '', '', '', 'password', 'password', 365),
(1001, 'professional', 'Carol', 'Fuller', 'cfullerrn', 'cfullerrn@bing.com', '', '', '', 'password', 'password', 367),
(1002, 'professional', 'Johnny', 'Garcia', 'jgarciaro', 'jgarciaro@google.it', '', '', '', 'password', 'password', 368),
(1003, 'professional', 'Pamela', 'Rice', 'pricerp', 'pricerp@hubpages.com', '', '', '', 'password', 'password', 366),
(1004, 'professional', 'Jeremy', 'Jacobs', 'jjacobsrq', 'jjacobsrq@examiner.com', '', '', '', 'password', 'password', 1005),
(1005, 'professional', 'Linda', 'Lynch', 'llynchrr', 'llynchrr@omniture.com', '', '', '', 'password', 'password', 995),
(1006, 'professional', 'gjhjhg', 'jgjjh', 'michelle', 'michelleabbasipour@outlook.com', '', '873274523547', '', 'testing', 'testing', 369),
(1007, 'professional', 'ghjhghjg', 'jhghjggjhghj', 'testUser', 'michelleabbasipour@outlook.co.uk', '', '876877687678', '', 'george67', 'george67', 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `treatments_id` int(11) NOT NULL,
  `treatments_name` varchar(45) DEFAULT NULL,
  `treatments_desc` varchar(45) DEFAULT NULL,
  `treatments_duration` varchar(45) DEFAULT NULL,
  `treatments_price` varchar(45) DEFAULT NULL,
  `businesses_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=443 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`treatments_id`, `treatments_name`, `treatments_desc`, `treatments_duration`, `treatments_price`, `businesses_id`) VALUES
(413, 'treatment 13', 'testing', 'fdgsdfg', 'fdgsdf', 994),
(414, 'treatment 12', 'oihikhkjhkhkh', '2hours', '79797', 369),
(415, 'treatment 11', 'oihikhkjhkhkh', 'fads', '79797', 350),
(416, 'treatment 10', 'dfghdfz', 'gfdhdf', 'fgdhfh', 350),
(417, 'treatment 9', 'dfghdf', 'gfdhdf', 'fgdhfh', 998),
(418, 'treatment 14', 'fghdfgfg', 'fghfd', 'fghdf', 996),
(419, 'treatment 1', 'fghdfgfg', 'fghfd', 'fghdf', 996),
(420, 'treatment 2', 'fghdfgfg', 'fghfd', 'fghdf', 996),
(421, 'treatment 3', 'fghdfgfg', 'fghfd', 'fghdf', 994),
(422, 'treatment 4', 'fghdfgfg', 'fghfd', 'fghdf', 369),
(423, 'treatment 5', 'fghdfgfg', 'fghfd', 'fghdf', 369),
(424, 'treatment 6z', 'fghdfgfg', 'fghfd', 'fghdf', 350),
(425, 'treatment 7', 'This is a gel nails overlay treatment', '2 hours', '15', 998),
(426, 'treatment 8', 'fdgdfgdfgsdgfdsdfgdfgs', '334', '3452345', 994),
(427, 'fdsgfg', 'dfgdfgdf', '', '8989', 998),
(428, 'fdsgfg', 'dfgdfgdf', '', '8989', 998),
(429, 'Treatment 50', 'Treatment 50 description', 'minutes 20', '', 998),
(430, 'Treatment 50', 'Treatment 50 description', 'minutes 20', '40.00', 998),
(431, 'Treatment 51', 'description for treatment 51', '1 hours', '32.50', 350),
(439, 'treatment 30', 'this is the treatment 30 description', '3.5 hours', '9.50', 998),
(440, 'Gel Nails Overla', 'this is the description', '1 hour', '15.00', 998),
(441, 'Gel Nails Overla', 'this is the description', '1 hour', '15.00', 998),
(442, 'treatment 14', 'jllkljlk', '3 hours', '34.56', 998);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appts_id`),
  ADD KEY `CLIENTS_id_idx` (`clients_id`),
  ADD KEY `BUSINESSES_id_idx` (`businesses_id`),
  ADD KEY `EMPLOYEES_id_idx` (`employees_id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`businesses_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clients_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employees_id`),
  ADD KEY `BUSINESSES_id_idx` (`business_id`);

--
-- Indexes for table `professionals`
--
ALTER TABLE `professionals`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`treatments_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appts_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `businesses_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=999;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clients_id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=440;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employees_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professionals`
--
ALTER TABLE `professionals`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1008;
--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `treatments_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=443;
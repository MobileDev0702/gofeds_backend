-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 15, 2020 at 12:15 AM
-- Server version: 10.3.22-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `experts3_gofeeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `gf_forum_answers`
--

CREATE TABLE `gf_forum_answers` (
  `gf_id` int(11) NOT NULL,
  `gf_question_id` int(11) NOT NULL,
  `gf_answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gf_forum_answers`
--

INSERT INTO `gf_forum_answers` (`gf_id`, `gf_question_id`, `gf_answer`, `gf_user_id`) VALUES
(5, 2, 'am fine', 34),
(6, 3, 'working in school', 4),
(7, 3, 'goes to college', 34),
(8, 6, 'Yes it is most probably because we are very near to develop the vaccine ', 4),
(9, 9, 'I am from Germany', 34),
(10, 8, 'Cantinflas', 4),
(11, 3, 'Writing answer to your question', 4),
(12, 3, 'Writing answer to your question', 4),
(13, 11, 'I live in India, ', 4),
(14, 4, 'My ans js', 34),
(15, 6, 'Canâ€™t say anything,', 34),
(16, 7, 'India has reported the highest single-day spike of 9,987 new COVID-19 cases and 331 deaths in the last 24 hours. The total number of coronavirus cases in the country now stands at 2,66,598. There are 1,29,917 active cases and 1,29,215 people have been cured/discharged/migrated, the Ministry of Health and Family Welfare latest data released on Tuesday said. The death toll has reached 7,466.', 34),
(17, 13, 'The most scary person I have encounter in my life was my grandpa. He was the biggest most tallest person in history. He was so tall he couldnâ€™t fit in the door. He was so fat he couldnâ€™t enter his own truck, which was a Dodge 3500 ProMaster hight roof. I never met the man, but my family told me his hands looked like shrekâ€™s. They also said his voice was like Shawn Coneryâ€™s and the way he stared at people resembled Tom Cruise in Vanilla Sky.', 4),
(18, 14, 'The scariest person I encountered was chupacabras. Iâ€™m serious, when I was 12 I went to a ranch with my family in Sonora, Mexico. It was around 10pm and I went to the bathroom that was located on the outside of the house. As I was walking over I saw a figure run to the side of the house where the animal corrals were located. I was going to go tell my parents, but I didnâ€™t want to lose the figure, so my instinct was to follow the figure carefully and with a good amount of distance. When I reached the side of the house I could see the chicken coups and there was the figure.. eating a chicken. I ran to tell my parents there was something eating the chickens, and when they went to check the coup only found a couple droplets of blood and some plucked feathers lying around. There was no sign of the figure around the ranch during the rest of my trip there. Some relatives that own the ranch reached out and told us from time to time they have chickens missing, but donâ€™t want to know why. ', 4),
(19, 9, 'Hellos', 4),
(20, 18, 'Answer Testing', 14),
(21, 18, 'Answer Testing 2', 13),
(22, 18, 'Answer Testing 3', 12),
(23, 18, 'Answer Testing 4', 11),
(24, 18, 'Answer Testing 5', 10),
(25, 18, 'Answer Testing 6', 9),
(26, 18, 'Answer Testing 7', 8),
(27, 18, 'Answer Testing 8', 7),
(28, 18, 'Answer Testing 9', 6),
(29, 18, 'Answer Testing 10', 5),
(30, 10, 'This is the answer for this question. ', 14),
(31, 19, 'Well, this is the answer to the really long question. It seeems as it doesnâ€™t show the whole question but it does when you scroll down. Itâ€™s cool to see friends you havenâ€™t seen in a long time. Hopefully i get to see my friends this year as they live far away from here. I havenâ€™t seen some friends in like a whole decade. Actually more than a decade, almost a century. Wait, did I say century? It cannot be a century because that itâ€™s too long. No one now days can for such a long time. Hopefully i can live for that long. Never mind i donâ€™t think i want to love for such a long time. I donâ€™t think i would be able to do simple things if i were that old. If i was 100 years old and be able to play basketball and soccer and football then i would like to be 100 years old but id i canâ€™t do anything then whatâ€™s the point?', 4),
(32, 17, 'Yes yes', 14),
(33, 20, 'Testing', 4),
(34, 21, 'Test loader', 4),
(35, 22, 'Donâ€™t know Just checking ', 4),
(36, 2, 'Hello', 34),
(37, 2, 'this is new and to test the loader', 34),
(38, 2, 'This is loader ', 34),
(39, 2, 'Final', 34),
(40, 5, 'Hello', 34),
(41, 19, 'Hi this is ..', 4),
(42, 4, 'Vgvb', 34),
(43, 2, 'Wefwefdfdfsdfsd', 34),
(44, 2, 'Iâ€™m okay thank you', 34),
(45, 13, 'Another answer', 4),
(46, 13, 'This is the third answer and hope it can show all the way so we can finish once and for all with the app so we can go live &:!:&/ sjnsnssnjssnsnnanananabsks ssn sks wkd wndjs djs dns dks bjs wkd AF wkd djs sndnw djs dj ss ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gf_forum_questions`
--

CREATE TABLE `gf_forum_questions` (
  `gf_id` int(11) NOT NULL,
  `gf_question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gf_forum_questions`
--

INSERT INTO `gf_forum_questions` (`gf_id`, `gf_question`, `gf_user_id`) VALUES
(2, 'how are you?', 34),
(3, 'what do you do?', 34),
(4, 'Hello ', 34),
(5, 'My question ', 34),
(6, 'My question is that is the virus will be gone this year or not ?', 34),
(7, 'My question ', 34),
(8, 'Whatâ€™s my name?', 4),
(9, 'Where are you from?', 4),
(10, 'Testing Question', 14),
(11, 'Where do you live?', 4),
(12, 'my name is Inder ?', 4),
(13, 'What is the most scary person you have ever encounter in your life?', 4),
(14, 'Tell me a story.. ', 4),
(15, 'cfhb', 4),
(16, 'Testing Question', 14),
(17, 'Question', 14),
(18, 'Question 2', 14),
(19, 'How long can a question in the forum be? Last time i went to the beaxh was about a year ago. I want to go to the beach, i miss it. I miss it because i this covid-19 stuff is making everyone suffer and it is for a really long time. I hope i can go to the beach soon, if not, i will have to look for a pool. Pools are very small around where i live. I like swimming in olympic pools because you can dive. I like diving because itâ€™s very cool and interesting. I when i was it high school i used to go swmming with my friends about one time per month. But now that i am no where near my friends, i miss going to the pool too. We used to have so much fun. It was very fun. Anyway, i have typed a lot and hope the application shows the whole answer. Lets test if it does. I hope it does. ', 4),
(20, 'Hello', 4),
(21, 'This is for testing purpose', 4),
(22, 'Is loader working fine?', 4),
(23, 'Hgfujhbjhnbvh job ', 4),
(24, 'Hiiiiiii', 4),
(25, 'This is a questionâ€¦!!:&!:$:&;!/&:!$/!&:!/&!:!/$66?(57:&:!:8:!28&.?-9!:):8):?:7:$/!:!/!/$/$/$/&/&/!-?1&91jdjebdjkdbsjdjdjs jdnejdd djjd d didned jdjejdjejejebshdjd jdjdjdjejeje. Djdjsjds. Sjdjsjdjdjejejebje shejsjdjdjebdksmhdjdjd djdjsjdjdjdjdkwnwoduebwodbshsjsjshsbsvsjdjdbs jdsnbdjdjsjs \nI dint know how long the questions is allowed to be but this question will be very very very very long and it will take a lont time too answer toomdkdne kekejene kenskwnwksns dknsekd dkkdjdoenskmsifiemfiabfifbwlduxnwfbxonadidjwks\nFast lane', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gf_users`
--

CREATE TABLE `gf_users` (
  `gf_id` int(11) NOT NULL,
  `gf_fname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_lname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_username` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_rank` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_agency` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_office` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_current_port` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_desire_port` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_token` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_ftoken` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gf_device_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gf_users`
--

INSERT INTO `gf_users` (`gf_id`, `gf_fname`, `gf_lname`, `gf_username`, `gf_email`, `gf_password`, `gf_image`, `gf_rank`, `gf_agency`, `gf_office`, `gf_current_port`, `gf_desire_port`, `gf_token`, `gf_ftoken`, `gf_device_id`) VALUES
(4, 'Munish Munish', 'Rount', '', 'munishrounta122@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'bacteria.png', 'testing testing', 'keys\n', 'office2', 'port1 port1', 'port1, port2,port3 port1, port2,port3', '144477444099269', '', ''),
(7, 'kanika', 'aggarwal', '', 'kanika123@novos.in', 'e10adc3949ba59abbe56e057f20f883e', '', 'hello', 'hello', '', 'port1', 'port 4', '188513018300270', '', ''),
(8, 'tarun', 'sach', '', 'tarun@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Rank', 'Agency', '', 'MyOne', 'MyTwo', '473368716858202', '', ''),
(9, 'Varun', 'Chugh', '', 'varun@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Rank', 'Agency', '', 'sash', 'Haryana', '238582733110062', '', ''),
(10, 'Kamal', 'Rana', '', 'kamal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Rank', 'Agency', '', 'MyOne', 'Haryana', '859402548589289', '', ''),
(12, 'Leodan', 'Manosalvas', '', 'manosalvas@gmail.com', '29ea26b3eeba5b1603a39f9ad2c3c32a', '', 'Rank', 'Agency', '', 'Miami', 'Tampa', '392765179593946', '', ''),
(13, 'geovanny', 'c', '', 'geovanny@gmail.com', 'f2d0e92e6968e94672ae2ae6ea2d486b', '', 'Rank', 'Agency', '', 'Tampa', 'Miami', '958144373438721', '', ''),
(14, 'Loveleen', 'Kaur', 'loveleen', 'loveleen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Test', 'Testing', 'BP', 'Port 1', 'Port 2', '646276086011427', '', ''),
(15, 'Loveleen', 'Kaur', '', 'loveleen2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '563376816240347', 'test', ''),
(16, 'Testing', 'Testing', '', 'testing@gmail.com', 'fa6a5a3224d7da66d9e0bdec25f62cf0', '', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', '457189276316739', '', ''),
(17, 'Loveleen', 'Kaur', '', 'loveleen3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '686993222129589', 'test', ''),
(18, 'virat', 'kohli', '', 'virat@gofeds.com', 'f853edc0e36aa893d8c9c7b7137dd5eb', '', 'GS-7', 'CBP', 'BP', 'AZ San Ysidrdo', 'CA Port Huron', '602448485063216', '', ''),
(19, 'virat', 'kohali', '', 'virat@gofeds2.com', 'f853edc0e36aa893d8c9c7b7137dd5eb', '', 'GS-7', 'CBP', 'BP', 'AZ San Ysidrdo', 'FLPort Everglades', '987671374129017', '', ''),
(20, 'harry', 'gill', '', 'harry@gofeds.com', '468d2c098d57cba2e09d88ce37a80533', '', 'GS-7', 'CBP', 'BP', 'AZ San Ysidrdo', 'FL Port Huename,TXPort Ca', '226485741600272', '', ''),
(24, 'preet', 'batth', '', 'preet@gofeds.com', 'f06dd3804a77eda1c77ce71eca903938', '', 'GS-7', 'CBP', 'BP', 'CA Sandford', 'FLPort Everglades,TXPort Canaveral', '894317844414488', '', ''),
(25, 'Tetsing', 'Testing', '', 'gsgs@hsjs.com', 'b2e1befecd61f3df1ae67437ccbc321a', '', 'GS-5', 'CBP', 'OFO', 'Andrade,CA', 'Antler,ND', '845583386490850', '', ''),
(26, 'Tetsing', 'Testing', '', 'cexrrx@ybyg.con', 'b2e1befecd61f3df1ae67437ccbc321a', '', 'GS-5', 'CBP', 'OFO', 'Andrade,CA', 'Antler,ND', '112933404998652', '', ''),
(27, 'Loveleen', 'Kaur', '', 'loveleen4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'AZ San Ysidrdo', '457980770267245', '', ''),
(33, 'test', 'user', '', 'test10@gofeds.com', '433a30f517faebf10ce520fc498f6696', '', 'GS-7', 'CBP', 'BP', 'AZ San Ysidrdo', 'AZ San Ysidrdo', '165981134653723', 'XCMHgMclsbb09wSI1XzNW6r4Ktl1', ''),
(34, 'test', 'user', '', 'test11@gofeds.com', '433a30f517faebf10ce520fc498f6696', '', 'GS-7', 'CBP', 'BP', 'AZ San Ysidrdo', 'CA Port Huron,AZ San Ysidrdo', '590508219178122', 'SDn1UwDcCNbO0axZAhnnNKXLiXC2', ''),
(35, 'test', 'user12', '', 'test12@gofeds.com', '433a30f517faebf10ce520fc498f6696', '', 'GS-7', 'CBP', 'BP', 'AZ San Ysidrdo', 'AZ San Ysidrdo', '161536785090958', 'zNA9SzarFoRCtoOYcJ1i0V9HqRY2', ''),
(36, 'test', 'user13', '', 'test13@gofeds.com', '433a30f517faebf10ce520fc498f6696', '', 'GS-7', 'CBP', 'BP', 'AZ San Ysidrdo', 'WA Portal,AZ San Ysidrdo', '726953371429754', '37teSZSf5Aggy0kzFKVbw1L8LiX2', ''),
(37, 'test', 'user14', '', 'test14@gofeds.com', '433a30f517faebf10ce520fc498f6696', '', 'GS-7', 'CBP', 'BP', 'AZ San Ysidrdo', 'WA Portal', '273130626179001', 'S9fFmp5X6DhjFFgBt6xcwpiwOGk2', ''),
(38, 'Steve', 'Gill', '', 'Steve@gofeds.com', '433a30f517faebf10ce520fc498f6696', '', 'GS-7', 'CBP', 'BP', 'AZ San Ysidrdo', 'WA Portal', '632875120822150', 'xIoj3zBfvSV5IdE7nIN2zxwbiVK2', ''),
(39, 'Loveleen', 'Kaur', '', 'loveleen7@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '677780066250942', '12', ''),
(40, 'david', 'gill', '', 'david@gofeds.com', '8939872d87025e4888c83d844fa57ee1', '', 'GS-9', 'CBP', 'Office', 'WA Portal', 'TXPort Canaveral', '754185759868839', 'cPVgzoulAONjoPJWb4GBNwbkN9x2', ''),
(41, 'testerFN', 'testerLN', '', 'tester1@gmail.com', '72a3dcef165d9122a45decf13ae20631', '', 'Rank', 'Agency', 'Office', 'TXPort Canaveral', 'ME Portland', '137997561412865', 'CP1BYLaF9UMlAZMWN4LYUDiTSxC3', ''),
(42, 'test2', 'test2', '', 'tester2@gmail.com', '2e9fcf8e3df4d415c96bcf288d5ca4ba', '', 'GS-12', 'CBP', 'OFO', 'ID Portland', 'TXPort Canaveral', '593534377255831', 'CJCxvAUCsaTybpfxKUgoPtL0U4x2', ''),
(43, 'tester3', 'tester3', '', 'tester3@gmail.com', '7effbf343c0f8ee164da2fe3ae01e8cb', '', 'GS-12', 'Agency', 'Office', 'AZ San Ysidrdo', 'Port Arthur/ Beaumont,FLPort Everglades', '790596280167492', 'hqLkQ4X4M8Tuy1rMAqGgfEEXiJi2', ''),
(44, 'tester4', 'tester4', '', 'tester4@gmail.com', 'd1af5dfeec69e0133969744c2cb8deac', '', 'GS-12', 'CBP', 'OFO', 'FLPort Everglades', 'AZ San Ysidrdo', '253803209377451', '9nFOxJRYj8fQA7Wad8HCv6QFuBj2', ''),
(45, 'tester5', 'tester5', '', 'tester5@gmail.com', '72d4a5a5b605c53ae1ac478d9a4977d7', '', 'GS-12', 'CBP', 'OFO', 'FL Port Huename', 'TXPort Canaveral', '888782078495105', 'xYrZKiUdEGXu3heV82FQdjDjR3i2', ''),
(46, 'tester6', 'tester6', '', 'tester6@gmail.com', '79053bc1647369450dbe6787bd74afa7', '', 'GS-12', 'CBP', 'OFO', 'TXPort Canaveral', 'FL Port Huename', '610470631413233', '6R6hCZQyJLP9mDfvkL0hb0w278l1', ''),
(47, 'tester7', 'tester7', '', 'tester7@gmail.com', '6c4953443d87636051e73394ee9b85c5', '', 'Rank', 'Agency', 'Office', 'TXPort Canaveral', 'FL Port Huename', '347712972170666', 'YoLv89QTgnWZSCUVDngnsbjS02i1', ''),
(48, 'tester7', 'tester7', '', 'tester8@gmail.com', '6c4953443d87636051e73394ee9b85c5', '', 'GS-12', 'CBP', 'OFO', 'TXPort Canaveral', 'FL Port Huename', '890371719513833', 'KmTSWhzqD2g6RQcxnDoaKMfdpvV2', ''),
(49, 'testing1', 'testing1', '', 'testing1@gmail.com', '6b7330782b2feb4924020cc4a57782a9', '', 'GS-12', 'CBP', 'OFO', 'Port Arthur/ Beaumont', 'MN West Palm Beach', '966477413008411', 'KDmcCqYVp2Tu81bvhw8ZL7SeIpl2', ''),
(50, 'testing2', 'testing2', '', 'testing2@gmail.com', 'a119e534072584a0ea88cdea4664aecd', '', 'GS-12', 'CBP', 'OFO', 'Port Arthur/ Beaumont', 'MN West Palm Beach', '252235871453145', 'NGeAHPsmyGODF9K0VSDMerpPw632', ''),
(51, 'testing3', 'testing3', '', 'testing3@gmail.com', '5fe43373c2db4deb851f3290080621f5', '', 'GS-12', 'CBP', 'OFO', 'Port Arthur/ Beaumont', 'MN West Palm Beach', '387334305565467', 'hLm55OFO6AOtSUfvKnbKAoni1bH3', ''),
(52, 'testing6', 'testing6', '', 'testing6@gmail.com', 'fd3922914dc2777bb67913efa313ed17', '', 'GS-12', 'CBP', 'OFO', 'MN West Palm Beach', 'Port Arthur/ Beaumont', '761537599026697', 'zE1OT4JYpgWAZenQvrKxTRvbLGk2', ''),
(53, 'testing4', 'testing4', '', 'testing4@gmail.com', 'a5bd8e2b7e55c23e6bff78fc18e00778', '', 'GS-12', 'CBP', 'OFO', 'Port Arthur/ Beaumont', 'MN West Palm Beach', '485584698703283', 'uqERd8J4O7UjD8WtWtZQlqXWvHC3', ''),
(54, 'testing5', 'testing5', '', 'testing5@gmail.com', '84273c002a8901bc770518d7c98c1d5b', '', 'GS-12', 'CBP', 'OFO', 'Port Arthur/ Beaumont', 'MN West Palm Beach', '415481151513757', 'c8aYiNEOwyMUAfiJf3RzDQRMWSB2', ''),
(55, 'testing7', 'testing7', '', 'testing7@gmail.com', '14e4cbe7065919d903246d007b8360ec', '', 'GS-12', 'CBP', 'BP', 'Port Arthur/ Beaumont', 'MN West Palm Beach', '669579165366545', 'burcJ69NASNtnKgJmDtJWf8VyVs2', ''),
(56, 'testing8', 'testing8', '', 'testing8@gmail.com', '5ddadf914707c31330fa85b78ac3e9e4', '', 'GS-12', 'CBP', 'OFO', 'Port Arthur/ Beaumont', 'MN West Palm Beach', '990404071752940', 'cYBjFI56DFeoppjSFHAY0rcWbLs2', ''),
(57, 'testing9', 'testing9', '', 'testing9@gmail.com', '1dd0161cfe25acd1a75963d6551a8698', '', 'GS-12', 'CBP', 'OFO', 'Port Arthur/ Beaumont', 'MN West Palm Beach', '665725956691662', 'roQ3XiZxJlNCMcToFgXUC7DNVWG3', ''),
(58, 'testing10', 'testing10', '', 'testing10@gmail.com', '1e4a9f033eb851841efde9169e0ac517', '', 'GS-12', 'CBP', 'OFO', 'MN West Palm Beach', 'Port Arthur/ Beaumont', '191154584454307', 'cQvGnyJ75tT1TXcIREDrCTMARa93', ''),
(59, 'Donald', 'Grewal', '', 'donald@gofeds.com', 'ebbd9a5813e2469148da44a115f8c74d', '', 'GS-5', 'CBP', 'OFO', 'WA Portal', 'Port Arthur/ Beaumont WA Portal', '717759376274376', 'e6XihTq7MMhsVVBQeSia6QwXry63', ''),
(60, 'Charle', 'Bhangu', '', 'donald@gofeds.comu', '98eadbfe86fb1c5edf752ca12d11c23d', '', 'GS-5', 'CBP', 'OFO', 'WA Portal', 'Port Arthur/ Beaumont WA Portal', '735901227546195', 'X5D5AHf2mNRgYHqjJCeTsZnpNMA3', ''),
(61, 'shaun', 'benipal', '', 'shaun@gofeds.com', '91a797124d83b068603f1aff1e42e587', '', 'GS-5', 'CBP', 'OFO', 'WA Portal', 'Port Arthur/ Beaumont WA Portal', '867991495062325', 'ogoMV7sY39TiJuJpQY6HMgGbbge2', ''),
(62, 'ttt', 'uuu', 'munish', 'aaa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 'testing', 'test', 'test', 'port1', 'port1, port2,port3', '917436598578620', 'gehshegshrbhxvwvsbjsvdvevruxdyshhebeue', '34d34r34r3dfv55fgy7hgh'),
(63, 'ttt', 'uuu', 'munishk', 'aaha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 'testing', 'test', 'test', 'port1', 'port1, port2,port3', '724765696634225', 'gehshegshrbhxvwvsbjsvdvevruxdyshhebeue', ''),
(64, 'hello', 'hello', 'kanika1397', 'vishugoyal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'GS-11', 'CBP', 'BP', ' Alexandria Bay, NY', 'Andrade, CA,Anacortes, WA,Ambrose, ND', '285755170931733', 'dweyULKdEIRfaGHDTVuWEDt0vbD2', ''),
(65, 'hello', 'hello', 'micheleGupta', 'michele@gofeds.com', '4a40e8746329eb8c992d4bcbeb1d2253', '', 'GS-5', 'CBP', 'OFO', 'Albany, NY', 'Albuquerque, NM, Albany, NY', '829082836470181', '5pTxcYEjHlgsQFtFqeMTbHPgjKN2', ''),
(66, 'hello', 'hello', 'jhonSharma', 'jhon@gofeds.com', 'eb407a7690580ffbd8cce05213fd8b90', '', 'GS-5', 'CBP', 'OFO', 'Albany, NY', 'Albuquerque, NM, Albany, NY', '363139450760883', '9VgacJFXrDUX3NIpXQpCCeVpVgz1', ''),
(67, 'Loveleen', 'Kaur', 'loveleen5', 'loveleen5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '205650685395536', '', ''),
(68, 'Loveleen', 'Kaur', 'loveleen', 'loveleen5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '759344000873967', '', ''),
(69, 'Loveleen', 'Kaur', 'loveleen', 'loveleen5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '441179444947134', '', ''),
(70, 'Loveleen', 'Kaur', 'loveleen', 'loveleen5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '919069909103930', '', ''),
(71, 'Loveleen', 'Kaur', 'loveleen', 'loveleen5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '226539795807343', '', ''),
(72, 'Loveleen', 'Kaur', 'loveleen', 'loveleen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '126618937282629', '', ''),
(73, 'Loveleen', 'Kaur', 'loveleen', 'loveleen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '956346726433467', '', ''),
(74, 'Loveleen', 'Kaur', 'loveleen', 'loveleen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '474513806817707', '', ''),
(75, 'Loveleen', 'Kaur', 'loveleen', 'loveleen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '585599195384603', '', ''),
(76, '', '', 'loveleen', 'vjavai@ufagua.con', 'cadf8d5b10cb50bb190862222f47b759', '', 'GS-5', 'CBP', 'OFO', 'Ashtabula/Conneaut, OH', 'Anacortes,WA', '168100920416902', '', ''),
(77, '', '', 'loveleeen', 'loveleen@gmail.com', '2a5451606b8f26743f79ed525089fbc4', '', 'GS-5', 'CBP', 'OFO', 'Andrade,CA', 'Antler,ND', '156774526800995', '', ''),
(78, 'Loveleen', 'Kaur', 'loveleen', 'loveleen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'aa', 'port1', 'port1', '869484547676480', '', ''),
(79, '', '', 'nancy', 'nancy@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 'GS-5', 'CBP', 'OFO', 'Andrade,CA', 'Astoria,OR', '610515886447257', '', ''),
(80, 'hello', 'hello', 'Addanki', 'testios@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 'GS-7', 'Agency', 'Office', 'Port Arthur/ Beaumont', 'TXPort Canaveral', '379934545404798', 'ekfdipImPpaaA995a0KTNDvAsRo2', ''),
(81, 'hello', 'hello', 'testr', 'testios1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '', 'GS-5', 'CBP', 'BP', 'CA Port Huron', 'CA Port Huron', '525221876672261', 'OCKF8VKuc3cdGMYmtvkhiqsXRKA3', ''),
(82, 'hello', 'hello', 'test', 'test1@yopmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'GS-7', 'Agency', 'BP', 'AZ San Ysidrdo', 'WA Portal', '895636314413474', 'd9wOjNQXgGNyiEozhEm0EdPvLRp1', 'dRti8khfQr-YFDCt2Pqn6G:APA91bHwu6gjDgXFy9rm99ztZDOjLSpowhKPUPFJ1bLE9nLJroypdYP82Fh142aKfdjokLVRPj80leOFHk-BAhfHh81ppiza28VVtw7pMbq61dtmfEvOjJm5Wmiaa3O9NVHtToHuOJEi'),
(83, 'hello', 'hello', 'test6', 'test6@yopmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'GS-7', 'CBP', 'BP', 'Port Arthur/ Beaumont', 'MN West Palm Beach', '300401839611206', 'obS6k9iuUIO8ShTfV8vgpae1Mit2', ''),
(84, 'Munish Munish', 'Rount', 'test7', 'test7@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing testing', 'test test', 'Bp', 'port1 port1', 'port1, port2,port3 port1, port2,port3', '270065257039954', 'jrB1r5ZPqQYtR0g7AQRXA74LhdN2', 'e1YvyE_1bUMfqmt9IpRyvT:APA91bGuvoxu9RnofSFSMpGW5WV_UNKNMVg6x6-749GCQ9W_UPUnZbRuwckSCSRuxcOlGsFK_ehz4TbCRc3eAKvGYSrr9QH6QvvaI6Fuz2D82O-r1SId7U-lRV4W5POdWVAqtI19CgBY'),
(85, 'hello', 'hello', 'test8', 'test8@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'GS-7', 'CBP', 'BP', ' Antler, ND', 'Andrade, CA, Antler, ND', '250913380721670', 'haRJR4khdPR4NNfkRfyAwZMXyRn1', ''),
(86, 'hello', 'hello', 'test9', 'test9@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'GS-7', 'CBP', 'BP', 'Andrade, CA', 'WA Portal', '387434486259495', 'UXBHxAdK4wThS7dcVie6p2ukfbl1', ''),
(87, 'abhi', 'thakur', 'abhi123', 'abhi123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '123', 'test', 'test', 'test', 'test, test2, test3, test4', '360618522800113', '2142365344523', '12'),
(93, 'pk', 'Singh', 'pk', 'pk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'testing', 'test', 'Office', 'port1', 'port1', '502569800454300', '123', ''),
(94, '', '', 'mani', 'mani@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 'GS-9', 'CBP', 'OFO', 'Antler,ND', 'Ashtabula/Conneaut, OH, Atlanta,GA', '595056054966342', 'BViUuqibd3MbOmtJCAIgbE2mKB43', 'cE7kBvNbQeWYw6AEuf_bV7:APA91bGBG1BSvvxA4sRnpx-7etKkb70U8aOqLW42W4zeW5mXnd0Mg7J1Q3jDvcg-gic2QclJex1IyKI1piLm3VFMSlLFeX-dwPXws77Tsqtgsf98CMGNU0ERCh6sSP_t8aT2ORvOL6US'),
(95, '', '', 'android1', 'android1@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 'GS-5', 'CBP', 'OFO', 'Albany,NY', 'Albany,NY', '766307613660992', 'K0aonozn0jWzAmrdY9kt57306rO2', 'd8n97ayuQvmGv5aWH3A9nz:APA91bEaEuAic7z3aAmA7VQ_E4PfR9hso1gvQAcP3iq_uMGCCV1cpwMzylajgClSzE083WmeOzgQ6NJ5KR8gZBWzwx4_lZND0CTfRq14y-64kWDX6Zk5mZgtkkGWBPSdVaNM7CL8K8BR'),
(96, '', '', 'android2', 'android2@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', 'GS-5', 'CBP', 'OFO', 'Albany,NY', 'Albany,NY', '753681659750016', 'S0DMpHX9B2NPe03H1L62qemXRix1', 'elcikv0nRI6Sd96P8a6ki3:APA91bF0xVWl2TtXYdmBs-KdK05KncP3G209uwVU8ORaCghrh9v22lZ1TX_Hzs0UHBqIcPXj-SQ-UmePkarrvorFpEfp1BvolC3gM5-9-tuL3fqdb61x5ExGjj_-MzRoix9oM6nE4Gwp'),
(97, 'hello', 'hello', 'test11', 'test11@yopmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'GS-5', 'CBP', 'OFO', 'AZ San Ysidrdo', 'Port Arthur/ Beaumont', '189442311361966', '2MwbOuVmuONcXxNGC2NsJJCk0EU2', 'ciA6Dm21rk7FofBAnSrMOn:APA91bHIIGRNCIAv_KjbDN-tAj4PqyOD7b9aPlnoChHF7je33_WX8ZkSl3-MHnRrwfw_U7vI_5iC3LMIOXb05D15DRFc9iY2kTkwowlIFppzCQXFZXohnZfBeSkleLSEE5cmdbGAyv8d'),
(98, 'hello', 'hello', 'tes2', 'tes2@outlook.com', '3e706f4a68d0ce75db5026e0c642900d', '', 'GS-12', 'Agency', 'OFO', 'Albany, NY', 'OR Portsmouth,Port Arthur/ Beaumont', '329957284386015', 'XNn2OuGMv7dno8llatQfrDTrCYF2', 'e2aKSy6px0wWrpZ5YV-En7:APA91bErY4DdTfJMHALv7hkhiyPDQCMeenCupZ51mkog8rlaKEB8-BE8sDXWOK2qHEKlQaArMU51TCncpEFrYukKT1pw1AzGOavZzzx5-UKi2BsaI5PrDx5Zm1m2ZzCS9HNhf7i_9iTS'),
(99, 'hello', 'hello', 'jfierro05', 'jfierro05@gmail.com', '6b7330782b2feb4924020cc4a57782a9', '', 'GS-11', 'CBP', 'OFO', 'Calexico, CA', 'PA', '117400847777410', 'BuV8uZ1JlngSYJCFrE8eNDKcoPA3', 'f3bOoQOzjUZDrxUmXW-oe2:APA91bHm_Jn1tFzxtVdchojw4av3VjBSHpwL6qkFFP_WHB-ItJ7ayQqH6NqvZVbbRvcu5kgZRaTp0tgO32EArqVcuB8o8bSZY91zeFScw5DxwCb5ggITDPinmx4I4n_p_nsy0qd2QA-A'),
(100, 'hello', 'hello', 'apptester1', 'apptester1@gmail.com', '5128f028efe741d8157567774b9aa565', '', 'GS-12', 'CBP', 'OFO', 'Ambrose, ND', 'OR Portsmouth', '967182984685188', 'YpZwvIQRo1g9W5rf5e3KrS5lrNE3', 'e2aKSy6px0wWrpZ5YV-En7:APA91bErY4DdTfJMHALv7hkhiyPDQCMeenCupZ51mkog8rlaKEB8-BE8sDXWOK2qHEKlQaArMU51TCncpEFrYukKT1pw1AzGOavZzzx5-UKi2BsaI5PrDx5Zm1m2ZzCS9HNhf7i_9iTS'),
(101, 'hello', 'hello', 'jeyef', 'jeyef@gmail.com', '6b7330782b2feb4924020cc4a57782a9', '', 'GS-9', 'CBP', 'OFO', 'Albany, NY', 'OR Portsmouth', '583018835251642', '6fMqstF7sbct1VtLuZEPncL7Ff22', 'f3bOoQOzjUZDrxUmXW-oe2:APA91bHm_Jn1tFzxtVdchojw4av3VjBSHpwL6qkFFP_WHB-ItJ7ayQqH6NqvZVbbRvcu5kgZRaTp0tgO32EArqVcuB8o8bSZY91zeFScw5DxwCb5ggITDPinmx4I4n_p_nsy0qd2QA-A'),
(102, 'hello', 'hello', 'star1', 'star1@gmail.com', 'dbfa7c74011634a58e2db7a002bb5af6', '', 'GS-12', 'CBP', 'OFO', 'Atlanta, GA', 'Port Arthur/ Beaumont', '355360021400972', '0ZaBIDUjFzg4alFnVeQhQfxcC3t1', 'e2aKSy6px0wWrpZ5YV-En7:APA91bErY4DdTfJMHALv7hkhiyPDQCMeenCupZ51mkog8rlaKEB8-BE8sDXWOK2qHEKlQaArMU51TCncpEFrYukKT1pw1AzGOavZzzx5-UKi2BsaI5PrDx5Zm1m2ZzCS9HNhf7i_9iTS'),
(103, 'hello', 'hello', 'testing10', 'testing10@me.com', '1e4a9f033eb851841efde9169e0ac517', '', 'GS-12', 'CBP', 'OFO', 'Port Arthur/Beaumont, TX', 'FL Port Huename', '453463570897059', 'Ocdi1jHqiQbyB2Z7NfFSUIhdOir1', 'e2aKSy6px0wWrpZ5YV-En7:APA91bErY4DdTfJMHALv7hkhiyPDQCMeenCupZ51mkog8rlaKEB8-BE8sDXWOK2qHEKlQaArMU51TCncpEFrYukKT1pw1AzGOavZzzx5-UKi2BsaI5PrDx5Zm1m2ZzCS9HNhf7i_9iTS'),
(104, 'hello', 'hello', 'jeyef11', 'jeyef11@gmail.com', '6b7330782b2feb4924020cc4a57782a9', '', 'GS-11', 'CBP', 'OFO', 'Port Hueneme, CA', 'Port Arthur/ Beaumont', '707388308034583', 'Locj7bxKgWXlD49QctOMJcJMKaJ3', 'f3bOoQOzjUZDrxUmXW-oe2:APA91bHm_Jn1tFzxtVdchojw4av3VjBSHpwL6qkFFP_WHB-ItJ7ayQqH6NqvZVbbRvcu5kgZRaTp0tgO32EArqVcuB8o8bSZY91zeFScw5DxwCb5ggITDPinmx4I4n_p_nsy0qd2QA-A'),
(105, 'hello', 'hello', 'testing12', 'testing12@me.com', 'd66d0c18d08103b4012243e2f3780338', '', 'GS-12', 'CBP', 'OFO', 'Albany, NY', 'FL Port Huename', '587850942486266', 'JCjMelFuq5hUcXfZSyh0fG7sfKz1', 'e2aKSy6px0wWrpZ5YV-En7:APA91bErY4DdTfJMHALv7hkhiyPDQCMeenCupZ51mkog8rlaKEB8-BE8sDXWOK2qHEKlQaArMU51TCncpEFrYukKT1pw1AzGOavZzzx5-UKi2BsaI5PrDx5Zm1m2ZzCS9HNhf7i_9iTS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gf_forum_answers`
--
ALTER TABLE `gf_forum_answers`
  ADD PRIMARY KEY (`gf_id`);

--
-- Indexes for table `gf_forum_questions`
--
ALTER TABLE `gf_forum_questions`
  ADD PRIMARY KEY (`gf_id`);

--
-- Indexes for table `gf_users`
--
ALTER TABLE `gf_users`
  ADD PRIMARY KEY (`gf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gf_forum_answers`
--
ALTER TABLE `gf_forum_answers`
  MODIFY `gf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `gf_forum_questions`
--
ALTER TABLE `gf_forum_questions`
  MODIFY `gf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `gf_users`
--
ALTER TABLE `gf_users`
  MODIFY `gf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

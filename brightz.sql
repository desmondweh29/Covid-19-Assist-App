-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 06:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brightz`
--
CREATE DATABASE IF NOT EXISTS `brightz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `brightz`;
-- --------------------------------------------------------

--
-- Table structure for table `hotlines`
--

CREATE TABLE `hotlines` (
  `state` varchar(30) NOT NULL,
  `telno` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time1_start` time NOT NULL,
  `time1_end` time NOT NULL,
  `time2_start` time NOT NULL,
  `time2_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotlines`
--

INSERT INTO `hotlines` (`state`, `telno`, `email`, `time1_start`, `time1_end`, `time2_start`, `time2_end`) VALUES
('Johor', '07-2382217', 'cprcjknj@moh.gov.my', '08:00:00', '17:00:00', '08:00:00', '17:00:00'),
('Kedah', '04-7741174', 'cprc_jknkedah@moh.gov.my', '08:00:00', '17:00:00', '08:00:00', '13:00:00'),
('Kelantan', '09-7472089', 'cprc_kel@moh.gov.my', '08:00:00', '17:00:00', '09:00:00', '12:00:00'),
('Kuala Lumpur', '03-26983757 ', 'cprckl@moh.gov.my', '08:00:00', '17:00:00', '09:00:00', '15:00:00'),
('Labuan', '087-596160', 'cprclabuan@moh.gov.my', '08:00:00', '17:00:00', '08:00:00', '13:00:00'),
('Malacca', '06-2345999', 'cprcmelaka@moh.gov.my', '08:00:00', '17:00:00', '08:00:00', '17:00:00'),
('Negeri Sembilan', '06-7664940', 'cprcjknns@moh.gov.my', '08:00:00', '17:00:00', '09:00:00', '13:00:00'),
('Pahang', '09-5707910', 'cprc_pahang@moh.gov.my', '08:00:00', '17:00:00', '09:00:00', '12:00:00'),
('Penang', '04-2629902', 'epid_penang@moh.gov.my', '08:00:00', '17:00:00', '10:00:00', '14:00:00'),
('Perak', '05-2433962', 'cprcprk@moh.gov.my', '08:00:00', '17:00:00', '09:00:00', '12:00:00'),
('Perlis', '04-9760712', 'cprcjkn.pls@moh.gov.my', '08:00:00', '17:00:00', '08:00:00', '17:00:00'),
('Putrajaya', '03-26983757', 'cprckl@moh.gov.my', '08:00:00', '17:00:00', '09:00:00', '15:00:00'),
('Sabah', '088-219455', 'sbhcprc@moh.gov.my', '08:00:00', '17:00:00', '08:00:00', '17:00:00'),
('Sarawak', '082-443248', 'cprc_sarawak@moh.gov.my', '08:00:00', '17:00:00', '08:00:00', '17:00:00'),
('Selangor', '03-51237366', 'cprc_sel@moh.gov.my', '08:00:00', '17:00:00', '09:00:00', '13:00:00'),
('Terengganu', '09-6229775 ', 'bgerakan.trg@moh.gov.my', '08:00:00', '17:00:00', '09:00:00', '15:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `supportmessage`
--

CREATE TABLE `supportmessage` (
  `Day` int(11) NOT NULL,
  `AuthorName` varchar(255) NOT NULL,
  `AuthorQuote` varchar(500) NOT NULL,
  `AuthorPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supportmessage`
--

INSERT INTO `supportmessage` (`Day`, `AuthorName`, `AuthorQuote`, `AuthorPic`) VALUES
(1, 'A.A. Milne', 'You are braver than you believe, stronger than you seem, smarter than you think, and loved more than you\'ll ever know.', 'A.A. Milne.jpg'),
(2, 'Annicken R. Day', 'When we let fear be our master, we cannot be happy and free as a butterfly. But when we choose to trust the journey and embrace love and joy, we are free to fly.', 'Annicken R. Day.jpg'),
(3, 'Aristotle', 'It is during our darkest moments that we must focus to see the light.', 'Aristotle.jpg'),
(4, 'Bob Riley', 'Hard times don’t create heroes. It is during the hard times when the ‘hero’ within us is revealed.', 'Bob Riley.jpg'),
(5, 'Carlos Castaneda', 'We either make ourselves miserable or we make ourselves stronger. The amount of work is the same.', 'Carlos Castaneda.jpg'),
(6, 'Christopher Reeve', 'When the unthinkable happens, the lighthouse is hope. Once we choose hope, everything is possible.', 'Christopher Reeve.jpg'),
(7, 'Corrie Ten Boom', 'Worrying doesn’t empty tomorrow of its sorrows; it empties today of its strengths', 'Corrie Ten Boom.jpg'),
(8, 'Doe Zantamata', 'Some days are better, some days are worse. Look for the blessing instead of the curse. Be positive, stay strong, and get enough rest. You can’t do it all, but you can do your best.', 'Doe Zantamata.jpg'),
(9, 'Eckhart Tolle', 'Life will give you whatever experience is most helpful for the evolution of your consciousness.', 'Eckhart Tolle.jpg'),
(10, 'Epictetus', 'The greater the difficulty, the more glory in surmounting it. Skilful pilots gain their reputation from storms and tempests.', 'Epictetus.jpg'),
(11, 'Franklin D. Roosevelt', 'When you come to the end of your rope, tie a knot and hang on.', 'Franklin D. Roosevelt.jpg'),
(12, 'Glenn Schweitzer', 'Behind every chronic illness is just a person trying to find their way in the world. We want to find love and be loved and be happy just like you. We want to be successful and do something that matters. We’re just dealing with unwanted limitations in our hero’s journey.', 'Glenn Schweitzer.jpg'),
(13, 'Hannah Brencher', 'Maybe life isn’t about avoiding the bruises. Maybe it’s about collecting the scars to prove that we showed up for it.', 'Hannah Brencher.jpg'),
(14, 'Henry Ford', 'When everything seems to be against you, remember that the airplane takes off against the wind, not with it.', 'Henry Ford.jpg'),
(15, 'Janice Dean', 'The moral of my story is the sun always comes out after the storm. Being optimistic and surrounding yourself with positive loving people is for me, living life on the sunny side of the street.', 'Janice Dean.jpg'),
(16, 'Jeanette Coron', 'Everybody goes through difficult times, but it is those who push through those difficult times who will eventually become successful in life. Don\'t give up, because this too shall pass.', 'Jeanette Coron.jpg'),
(17, 'Josep Borrell', 'COVID-19 will reshape our world. We don’t yet know when the crisis will end. But we can be sure that by the time it does, our world will look very different.', 'Josep Borrell.jpg'),
(18, 'Josh Shipp', 'You either get bitter or you get better. It’s that simple. You either take what has been dealt to you and allow it to make you a better person, or you allow it to tear you down. The choice does not belong to fate, it belongs to you.', 'Josh Shipp.jpg'),
(19, 'Lisa Olivera', 'Just because no one else can heal or do your inner work for you, doesn’t mean you can, should, or need to do it alone.', 'Lisa Olivera.jpg'),
(20, 'Marie Curie', 'Nothing in life is to be feared. It is only to be understood. Now is the time to understand more, so that we may fear less.', 'Marie Curie.jpg'),
(21, 'Martin Luther King Jr.', 'Out of the mountain of despair, a stone of hope.', 'Martin Luther King Jr..jpg'),
(22, 'Michelle Obama', 'You may not always have a comfortable life. And you will not always be able to solve all the word’s problems all at once. But don’t’ ever underestimate the impact you can have, because history has shown us that courage can be contagious, and hope can take on a life of its own.', 'Michelle Obama.png'),
(23, 'Oscar Wilde', 'What seems to us as bitter trials are often blessings in disguise.', 'Oscar Wilde.jpg'),
(24, 'Rabindranath Tagore', 'Clouds come floating into my life, no longer to carry rain or usher storm, but to add color to my sunset sky.', 'Rabindranath Tagore.jpg'),
(25, 'Rebecca Wells', 'Life is short, but it is wide. This too shall pass.', 'Rebecca Wells.jpg'),
(26, 'Robert Frost', 'In three words I can sum up everything I’ve learned about life. It goes on.', 'Robert Frost.jpg'),
(27, 'Robert Schuller', 'Tough times never last, but tough people do.', 'Robert Schuller.jpg'),
(28, ' Roy T. Bennett', 'Challenge and adversity are meant to help you know who you are. Storms hit your weakness, but unlock your true strength.', ' Roy T. Bennett.jpg'),
(29, 'Thomas Edison', 'When you have exhausted all possibilities, remember this: you haven’t.', 'Thomas Edison.jpg'),
(30, 'Victor Hugo', 'Even the darkest nights will end and the sun will rise.', 'Victor Hugo.jpg'),
(31, 'Willie Nelson', 'Once you replace negative thoughts with positive ones, you’ll start having positive results.', 'Willie Nelson.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `symptomsreport`
--

CREATE TABLE `symptomsreport` (
  `ReportID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Ic` varchar(14) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Postcode` varchar(5) NOT NULL,
  `Telno` varchar(12) NOT NULL,
  `Loc_test` varchar(50) NOT NULL,
  `Date_test` date NOT NULL,
  `Outcome_test` varchar(10) NOT NULL,
  `Datetime_report` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supportmessage`
--
ALTER TABLE `supportmessage`
  ADD PRIMARY KEY (`Day`);

--
-- Indexes for table `symptomsreport`
--
ALTER TABLE `symptomsreport`
  ADD PRIMARY KEY (`ReportID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supportmessage`
--
ALTER TABLE `supportmessage`
  MODIFY `Day` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `symptomsreport`
--
ALTER TABLE `symptomsreport`
  MODIFY `ReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

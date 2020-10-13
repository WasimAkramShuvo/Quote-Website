-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 09:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_quote`
--

CREATE TABLE `add_quote` (
  `a_id` varchar(40) NOT NULL,
  `a_name` varchar(40) NOT NULL,
  `t_quote` varchar(40) NOT NULL,
  `quote` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_quote`
--

INSERT INTO `add_quote` (`a_id`, `a_name`, `t_quote`, `quote`) VALUES
('1', 'Lisa See', 'Motivational Quote', 'Read a thousand books, and your words will flow like a river.'),
('2', 'Terry Pratchett', 'Motivational Quote', 'The first draft is just you telling yourself the story.'),
('3', 'Dr. Suess', 'Love Quote', 'You know you’re in love when you can’t fall asleep because reality is finally better than your dreams.'),
('4', 'Jodi Picoult', 'Motivational Quote', 'You can always edit a bad page. You can’t edit a blank page.'),
('5', 'Mother Theresa', 'Love Quote', 'Let us always meet each other with smile, for the smile is the beginning of love.'),
('6', 'Joshua J. Marine', 'Life Quote', 'Challenges are what make life interesting and overcoming them is what makes life meaningful.'),
('7', 'Plato', 'Love Quote', 'Love is a serious mental disease.'),
('8.', 'Virginia Woolf', 'Motivational Quote', 'Every secret of a writer’s soul, every experience of his life, every quality of his mind, is written large in his works.'),
('9', 'Thomas A. Edison', 'Life Quote', 'Many of life’s failures are people who did not realize how close they were to success when they gave up.'),
('10', 'Elbert Hubbard', 'Friendship Quote', 'A friend is someone who knows all about you and still loves you.'),
('11', 'Alfred Tennyson', 'Friendship Quote', 'If I had a flower for every time I thought of you...I could walk through my garden forever.'),
('12', 'Janet Morris, Chris Morris', 'Nature Quote', 'Something is going on everywhere, most of which no one understands.'),
('13', 'Henry David Thoreau', 'Friendship Quote', 'The language of friendship is not words but meanings.'),
('14', 'Juvenal', 'Nature Quote', 'Nature never says one thing and wisdom another.'),
('15', 'Elie Wiesel', 'Love Quote', 'The opposite of love is not hate; it’s indifference.'),
('16', 'Janet Morris', 'Nature Quote', 'If it was true today, it might be untrue tomorrow.'),
('17', 'Henry Wadsworth Longfellow', 'Depression Quote', 'Every man has his secret sorrows which the world knows not; and often times we call a man cold when he is only sad.'),
('18', 'Laurell K. Hamilton, Mistral’s Kiss', 'Depression Quote', 'There are wounds that never show on the body that are deeper and more hurtful than anything that bleeds. '),
('19', 'Ned Vizzini, It is Kind of a Funny Story', 'Depression Quote', 'I cannot eat and I cannot sleep. I am not doing well in terms of being a functional human, you know? '),
('20', 'Anton Chekhov', 'Motivational Quote', 'Don’t tell me the moon is shining; show me the glint of light on broken glass.'),
('21', 'Ashita', 'Depression Quote', 'Crying is how your heart speaks when your lips cannot explain the pain you feel.');

-- --------------------------------------------------------

--
-- Table structure for table `a_login`
--

CREATE TABLE `a_login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_login`
--

INSERT INTO `a_login` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `u_reg`
--

CREATE TABLE `u_reg` (
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_reg`
--

INSERT INTO `u_reg` (`username`, `email`, `password`) VALUES
('Shuvo', 'shuvo091@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

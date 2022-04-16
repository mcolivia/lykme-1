-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2022 at 11:14 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lykme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(4) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `location` text,
  `photo` text NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `article_image` varchar(255) NOT NULL,
  `article_created_time` datetime NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_content`, `article_image`, `article_created_time`, `id_categorie`, `id_author`) VALUES
(41, 'Lorem ipsum dolor sit amet', '                            <p>Lorem ipsum dolor sit amet. Et quia autem ab recusandae accusamus et nesciunt nihil qui voluptas ratione est dolorem earum! Est quae quibusdam qui facere optio aut praesentium omnis. Est nemo reprehenderit est quia voluptatem cum doloremque aperiam qui fugiat necessitatibus qui adipisci quia.</p>\r\n\r\n<p>Quo quisquam rerum aut aliquid maxime ab iure vitae et placeat tenetur! Et aliquid explicabo quo nesciunt corporis ea mollitia dolore non rerum doloribus. Rem suscipit eveniet sit ipsum officiis id ipsa cumque aut velit nostrum et consequatur explicabo 33 exercitationem dolores. Non rerum autem et quas accusantium sit reprehenderit possimus rem quibusdam odit.</p>\r\n\r\n<p>Ex atque consequuntur ut inventore voluptatum qui tempora internos 33 eveniet omnis. Ea omnis voluptas ea voluptatum voluptates At voluptatibus rerum hic tempore modi et fugit voluptatem a voluptas quasi.</p>\r\n                        ', '10104101674_21ca5aefe6_b.jpg', '2020-02-18 13:01:47', 1, 1),
(43, 'Lorem Ipsum', '                            <h3>Lorem Ipsum:</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet. Nam perferendis recusandae aut soluta illum sed fuga velit ut vero magnam et rerum voluptas sit ducimus accusamus qui placeat voluptatem. Vel repellendus ratione ad suscipit possimus animi repudiandae in excepturi quis in officiis Quis! Et necessitatibus tempora dolores ullam ut minima recusandae nam eveniet velit!</p>\r\n\r\n<p>Cum aperiam molestias vel minima recusandae non autem quas quo rerum maxime qui similique maxime. Et velit sapiente qui similique commodi et aperiam impedit sed culpa dolorum vel voluptatem unde qui iste Quis. 33 provident maiores ut debitis et voluptatum officia qui perspiciatis consequatur.</p>\r\n\r\n<p>In harum iusto est veritatis commodi et neque praesentium animi suscipit id magni temporibus. 33 quia voluptatem ut soluta rerum vel dolor dolorem non eligendi necessitatibus a esse laudantium rem aliquid doloremque.</p>\r\n                        ', '16603286361_d688c96f44_b.jpg', '2020-08-05 16:11:14', 1, 1),
(44, 'Lorem dolor', '                            <h1>Lorem ipsum dolor</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet. 33 sint galisum et eaque animi ut fugit consequatur id internos. Aut consectetur recusandae sed impedit dolorem eum porro harum.</p>\r\n\r\n<p>Ab odit sint qui quas laboriosam vel delectus velit cum nihil ratione eum corrupti possimus. Eum quia explicabo sit cumque cumque ut laborum sequi et fugiat dicta non quidem dolores. Ea quam consequuntur non quia delectus id eaque quidem!</p>\r\n\r\n<p>Quam ipsum eos beatae totam eum dolorem omnis non perferendis facilis rem iure laborum non quia provident. Est doloribus rerum vel repudiandae dolores nam harum facere. Qui iure accusamus sit sapiente eaque sit dolores molestiae id aspernatur distinctio est laborum fugiat. Sed inventore facilis non perspiciatis maiores 33 nihil nostrum qui ratione galisum non quaerat vero.</p>\r\n\r\n<p>Â </p>\r\n                        ', 'WhatsApp Image 2022-04-16 at 9.12.04 AM (1).jpeg', '2020-08-06 14:58:20', 1, 1),
(45, 'Lorem ipsum dolor', '                            <p>Lorem ipsum dolor sit amet. Qui quod corrupti sit cupiditate tempora sit quae possimus. Ut repellendus magnam vel dolor quod quo veniam necessitatibus rem doloremque magnam qui nesciunt quia et aliquam quia non nesciunt quas.</p>\r\n\r\n<p>Est perferendis dolores cum provident error aut voluptatem quod cum dolor dolorem ut velit quod et reiciendis esse. Id aliquid excepturi ut enim quia qui libero odio. Et eius dolore ut voluptates reiciendis non enim facere ad omnis deleniti aut debitis molestias ut doloribus sapiente. Ex eaque enim est voluptate totam est quod voluptatum ut quae aliquid ut cumque magni est ratione quibusdam?</p>\r\n\r\n<p>Qui maxime dolor ex adipisci sint est officia earum a fugit sequi sed eligendi animi. Est consequatur quae et reprehenderit magnam ut Quis fugiat et similique saepe est mollitia reprehenderit.</p>\r\n                        ', 'WhatsApp Image 2022-04-16 at 9.12.04 AM.jpeg', '2020-08-06 16:45:08', 1, 1),
(46, 'Just some Text', '<p>Lorem ipsum dolor sit amet. Non modi tempora aut architecto reprehenderit ad obcaecati perferendis qui voluptas commodi. Quo quidem quaerat 33 quis quisquam non voluptatum esse. Nam ipsam assumenda id impedit voluptate eos fugit debitis cum facilis voluptates. Ad esse nostrum quo magni omnis aut nulla asperiores qui explicabo eveniet qui corrupti doloremque a necessitatibus illo aut possimus explicabo. </p><p>Qui doloremque accusamus id possimus galisum aut maxime explicabo qui recusandae repellendus est fugiat quaerat. Id soluta iure aut libero dicta nam adipisci enim est beatae sunt sed nobis atque ea amet  et deserunt maxime. Nam porro tempora est sunt saepe eos error minus ut ipsa ratione est deleniti necessitatibus quo nulla maiores. </p><p>Non nobis corporis non debitis quam qui autem reiciendis sed quia assumenda in sint rerum. Sed quas unde At culpa laboriosam aut obcaecati accusamus. Sed tenetur maiores ea earum minima quo excepturi impedit non temporibus necessitatibus aut eligendi galisum. Vel beatae galisum ut fugiat quasi qui doloribus quia in obcaecati nesciunt id consequatur provident. </p>', 'WhatsApp Image 2022-04-16 at 9.25.17 AM.jpeg', '2020-08-07 19:10:22', 1, 2),
(50, 'Ipsum', '                            <p>Lorem ipsum dolor sit amet. Ut aliquid ipsa id itaque dicta et aspernatur eveniet aut ipsam perferendis sit molestias aspernatur et voluptatem magnam ut inventore cumque. Non aspernatur sint id error quaerat et quisquam eveniet sit accusantium quia ad quis quibusdam. Et praesentium animi et nemo illum et nostrum cumque.</p>\r\n\r\n<p>Ea blanditiis consequuntur in praesentium autem et quod autem. Sit repudiandae sit illum fuga aut similique nihil et nostrum voluptate ad enim doloremque aut autem et facere enim. In omnis pariatur et ipsum ipsa hic voluptas dolorem sed totam natus. 33 obcaecati tempore aut alias necessitatibus eos atque reprehenderit ut fugiat enim est dolores saepe et suscipit labore id internos laborum.</p>\r\n\r\n<p>Non autem nobis est similique recusandae est beatae dicta ab aliquid incidunt ex quaerat beatae sit repellendus dolores. Vel explicabo nihil aut odio omnis ut omnis iste eum voluptates veritatis.</p>\r\n                        ', 'WhatsApp Image 2022-04-16 at 9.11.52 AM.jpeg', '2022-04-14 14:06:42', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_fullname` varchar(100) NOT NULL,
  `author_desc` varchar(255) NOT NULL DEFAULT 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.',
  `author_email` varchar(100) NOT NULL,
  `author_twitter` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_github` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_link` varchar(100) NOT NULL DEFAULT 'loujaybee',
  `author_avatar` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_fullname`, `author_desc`, `author_email`, `author_twitter`, `author_github`, `author_link`, `author_avatar`, `user_id`) VALUES
(1, 'Quincy Larsonsme', 'Georgi is a computer science student who loves web development, writing code and crafting interfaces.', 'ahmadume@gmail.com', 'loujaybee', 'loujaybee', 'loujaybee', 'avatar-2.png', 1),
(2, 'Samantha Ming', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus in ullam eum corrupti reiciendis.', 'ahmadume3@gmail.com', 'loujaybee', 'loujaybee', 'loujaybee', 'avatar-1.png', 2),
(8, ' Bartosz Pietrucha ', 'Fullstack engineer, https://angular-academy.com founder, speaker, trainer, software consultant. I can help you with Angular and reactive architecture. ', 'ahmadum@gmail.com', 'pietrucha', '', '', 'cc5d5f49-30e6-41be-9cc4-82f44c2cf1d9.webp', NULL),
(9, 'Suleiman Ahmed', 'me xjzv   ahcjshdjh', 'ahmad@gmail.com', '', '', '', 'my_passport.jpeg', 3),
(14, 'Suleiman Lawal', 'this is a brief', 'zumi@gmail.com', '', '', '', 'WhatsApp Image 2022-04-14 at 2.02.09 PM.jpeg', 6),
(15, 'Babajide sofesomi', 'this is a brief', 'sofeso@gmail.com', '', '', '', 'ky.jpeg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_color` varchar(10) NOT NULL DEFAULT '333333'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`, `category_color`) VALUES
(1, 'POST', '1 9npNPVH7iNJ64Koq7EcW5A.jpeg', '#4BB92F');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `choice` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(1, 1, 0, 'The id'),
(2, 1, 1, 'The Superego'),
(3, 1, 0, 'The Pleasure Principle'),
(4, 1, 0, 'The reality principle '),
(5, 2, 1, 'Carl Rogers'),
(6, 2, 0, 'Alfred Adler'),
(7, 2, 0, 'Walter Mischel'),
(8, 3, 0, 'They do not provide insight into the evil side of human nature'),
(9, 3, 0, 'They are biased because they are based on individualistic values'),
(10, 3, 1, 'They are based on studies of people with psychological disorders'),
(11, 3, 0, 'They are difficult to test empirically');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_username` varchar(100) NOT NULL,
  `comment_avatar` varchar(255) NOT NULL DEFAULT 'def_face.jpg',
  `comment_content` text NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT '2020-02-14 10:28:00',
  `comment_likes` int(11) NOT NULL DEFAULT '0',
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_username`, `comment_avatar`, `comment_content`, `comment_date`, `comment_likes`, `id_article`) VALUES
(1, '250871902', 'def_face.jpg', 'This is a comment test 1', '2019-07-07 09:28:00', 0, 40),
(2, '989786379', 'def_face.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic', '2019-03-15 10:28:00', 0, 27),
(3, '378052515', 'def_face.jpg', 'This is an advanceed test', '2020-02-14 10:28:00', 0, 26),
(4, '378052515', 'def_face.jpg', 'This is an advanced test 2', '2020-01-05 11:28:00', 0, 26),
(5, '784031346', 'def_face.jpg', 'this is a comment 2', '2019-05-21 11:28:00', 0, 40),
(6, '2076925118', 'def_face.jpg', 'This is a comment test 5\r\nThis is a comment test 4\r\nThis is a comment test 3', '2020-02-18 17:16:12', 0, 40),
(7, '1249945059', 'def_face.jpg', 'Thank you for taking the time to write such an elaborate advice!🙌', '2020-02-18 17:16:50', 0, 6),
(8, '1884119267', 'def_face.jpg', 'this is s comment 1', '2020-02-18 17:21:43', 0, 17),
(9, '418132487', 'def_face.jpg', 'sasajsasas', '2020-02-18 17:46:10', 0, 41),
(10, '577317656', 'def_face.jpg', 'kdjkzhdzdjizjdz', '2020-02-19 11:34:23', 0, 27),
(11, '468461801', 'def_face.jpg', 'sasasasasasasasa', '2020-08-05 14:48:37', 0, 26),
(12, '1931903981', 'def_face.jpg', 'Test Comment', '2020-08-07 15:00:04', 0, 40),
(13, '1918947887', 'def_face.jpg', 'sasasasajsasa', '2020-08-07 19:37:34', 0, 40),
(14, '202906189', 'def_face.jpg', 'test comment', '2020-08-07 19:38:22', 0, 40),
(15, '1835186045', 'def_face.jpg', 'sajshasasa', '2020-08-07 19:38:44', 0, 40),
(16, '910296642', 'def_face.jpg', 'sasasas', '2020-08-07 19:38:56', 0, 40),
(17, '564956375', 'def_face.jpg', 'hhhhhhhhhhhhhhhh', '2020-08-07 19:39:13', 0, 40),
(18, '697303869', 'def_face.jpg', 'Test comment', '2021-10-07 17:53:32', 0, 40),
(19, '500715459', 'def_face.jpg', 'Test comment', '2020-08-07 19:56:21', 0, 44),
(20, '1893422093', 'def_face.jpg', 'yyyyyyyyyyyyyyyyyyyy', '2020-08-07 20:00:02', 0, 44),
(21, '1397021679', 'def_face.jpg', 'hcuzifzefd', '2020-08-07 20:32:34', 0, 47),
(22, '1613781666', 'def_face.jpg', 'salam', '2020-08-07 20:43:06', 0, 47),
(23, '81386753', 'def_face.jpg', 'oh thats lovely', '2022-04-15 15:15:09', 0, 51);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question`) VALUES
(1, 'What is the part of the personality that compels people to act in perfect accordance with moral ideals?'),
(2, 'Which theorist focused on the importance of the self-concept in personality?'),
(3, 'Which one of the following statements about humanistic theories is false?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `location` text,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT 'enabled',
  `role` varchar(20) DEFAULT 'user',
  `code` varchar(10) DEFAULT NULL,
  `profile_newsfeed` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `email`, `location`, `created_time`, `status`, `role`, `code`, `profile_newsfeed`) VALUES
(1, 'root', '$2y$10$LQEQ.QEtlPUuY5PRRldTweDpUAls6FTNqKYlhlID9YrY6jM2Vdnly', 'ahmadume@gmail.com', NULL, '2022-04-15 16:58:48', 'enabled', 'admin', '0', NULL),
(2, 'root3', '$2y$10$e4Gdt7Au9oCqEeiPt65qC.yzvLbUKc.7m22XlvNbz/UaJUxYd8sji', 'ahmadume3@gmail.com', NULL, '2022-04-16 09:20:00', 'enabled', 'user', NULL, NULL),
(3, 'root2', '$2y$10$e4Gdt7Au9oCqEeiPt65qC.yzvLbUKc.7m22XlvNbz/UaJUxYd8sji', 'ahmadum@gmail.com', NULL, '2022-04-15 14:06:14', 'enabled', 'user', NULL, NULL),
(7, 'sofeso', '$2y$10$wfZYkxhQCTy2B0bZESzhPOMM/MztZ36uFpgBZNlA0LkHLbrjoTZhi', 'sofeso@gmail.com', NULL, '2022-04-15 22:41:13', 'disabled', 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_article` (`id_article`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

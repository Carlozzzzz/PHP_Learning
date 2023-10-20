-- Adminer 4.8.1 MySQL 10.4.27-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(9,	'carlos',	'$2y$10$YDcn1fOpE0mEN.SjCEYVo.nFfiQO.UV3tmzP2E8Jf/4rIyQNHR6PO',	'123@123.com'),
(10,	'user2',	'$2y$10$Iet3wvID8CD/Xh1/hWUlB.ogYSkrLYUcgLBob/K.XoPU2OK4ph1Tq',	'user2@gmail.com'),
(12,	'carlos22',	'$2y$10$fwFdHEQ3NldI1hI7Vi.YT.xms0C0MSKAhnmf1jiMWCM6xo9FBIjeq',	'carlos22@test.com'),
(13,	'qwe',	'$2y$10$LvVW0IyXlziev0GJylRAYO2p9F7PZ.m8NPI13ZEUcrqaEKSJHGcbu',	'qwe@qwe.com'),
(14,	'carlos321',	'$2y$10$nQGI2zjBBjYYWYUlNvAymeyFk7dVKi8ic3RXkormyWSmtMaWPPRQC',	'carlos123123@123.com'),
(15,	'carlos221',	'$2y$10$BjbLQfzgKRConYJDBikHu.PDanVggOPjiHOIvyPNbPB0xeAKANU8i',	'123@123.com1123'),
(17,	'carlos123444',	'$2y$10$afuoNLCKyWErjCPukTnhROTeuLSyhQXz3ha2TyLiXPRR0U37.QIz.',	'123@12322123.awd'),
(18,	'carlos22123',	'$2y$10$rEkcD9cAFz57DtHkcooXJ.mNhZXo1JDmcITtcAj.YhLOLYd8pZ10S',	'123@123.comasf'),
(19,	'carlos1231231',	'$2y$10$cmpDhAwbDlcd45DFr5Ne/uK8iKWSdxUhchzKA8.nayFdoPhjCIqvu',	'123@123.asf'),
(20,	'carlos12',	'$2y$10$doBucyHHD4l785I0f1/1Z...F/OVMBxqg1F7EDN/c0Z..JE6B2bou',	'123@123.com22'),
(21,	'juryvem',	'$2y$10$Inq72Ah96d7RC54.Yz/ZSeA94rdd6sNoOUSZlenys1kxR0.2VWyLa',	'mohujoryge@mailinator.com'),
(22,	'bybufajibo',	'$2y$10$b6jMkVCkX6luu7X2wkP7JOUwOcm4Ij8aQ41Af8Y1J/JCwJJkt0QIi',	'mulid@mailinator.com'),
(23,	'lyleva',	'$2y$10$5uyx6qSLuhR9v9o0Tw0JM.Ro/Ek7HdnDO5/oLP7Of6jLwTQ5mTTvq',	'gapefuc@mailinator.com');


DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `profiles_id` int(11) NOT NULL AUTO_INCREMENT,
  `profiles_about` text NOT NULL,
  `profiles_introtitle` text NOT NULL,
  `profiles_introtext` text NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`profiles_id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `profiles` (`profiles_id`, `profiles_about`, `profiles_introtitle`, `profiles_introtext`, `users_id`) VALUES
(1,	'Hello There, I don\'t want to waste you time so let\'s gets to business. I can create simple website for you, looking forward to work with you guys.',	'Hi, I am Chenner',	'I am a freelancer at Upwork as Codeigniter Developer. I enjoy Coding that eating.',	9),
(2,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am user2',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	10),
(9,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am carlos22',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	12),
(10,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am qwe',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	13),
(11,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am carlos321',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	14),
(12,	'I am your fantacy',	'Hi! I am fantacy',	'You everyday fantacy',	15),
(13,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am carlos123444',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	17),
(14,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am carlos22123',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	18),
(15,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am carlos1231231',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	19),
(16,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am carlos12',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	20),
(17,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am juryvem',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	21),
(18,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am bybufajibo',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	22),
(19,	'Tell me about your daily life! Your fantacies and hobbies.',	'Hi! I am lyleva',	'Welcome to potato profile, Soon I will be sa developer that can earn more money.',	23);

-- 2023-06-23 03:09:30

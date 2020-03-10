-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 02:20 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rps`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `idAssessment` int(5) NOT NULL,
  `idThemes` int(5) NOT NULL,
  `idSubject` int(5) NOT NULL,
  `idTypeAssessment` int(5) NOT NULL,
  `Hind` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `DescriptionAssessment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `idGroup` int(5) NOT NULL,
  `idPupil` int(5) NOT NULL,
  `idSubject` int(5) NOT NULL,
  `NameGroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pupil`
--

CREATE TABLE `pupil` (
  `idPupil` int(5) NOT NULL,
  `idStatus` int(5) NOT NULL,
  `NameP` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `idStatus` int(5) NOT NULL,
  `NameStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idStatus`, `NameStatus`) VALUES
(1, 'Admin'),
(2, 'Teather'),
(3, 'Pupil');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `idSubject` int(5) NOT NULL,
  `idTeather` int(5) NOT NULL,
  `NameSubject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DescriptionSubject` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teather`
--

CREATE TABLE `teather` (
  `idTeather` int(5) NOT NULL,
  `NameTeather` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SurnameTeather` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `idthemes` int(5) NOT NULL,
  `idSubject` int(5) NOT NULL,
  `DateThemes` datetime NOT NULL,
  `HeadingThemes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Material` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_assessment`
--

CREATE TABLE `type_assessment` (
  `idtypeassessment` int(5) NOT NULL,
  `NameTypeAssessment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(5) NOT NULL,
  `Photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NameU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SurnameU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GenderU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TelephoneU` int(5) NOT NULL,
  `E-psotU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `RPG_experience` int(5) NOT NULL,
  `idStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `Photo`, `NameU`, `SurnameU`, `GenderU`, `TelephoneU`, `E-psotU`, `Login`, `Pass`, `RPG_experience`, `idStatus`) VALUES
(54, '', 'Admin', '', '', 0, 'maljushitskivlad@gmail.com', 'Admin', 'YWRtaW4=', 0, 1),
(66, '', 'Vlad', '', '', 0, 'maljushitskivlad@gmail.com', 'Vlad', 'MTIzNA==', 0, 3),
(67, '', 'Vlad', '', '', 0, 'maljushitskivlad@gmail.com', 'Vlad', 'MTExMQ==', 0, 3),
(68, '', 'Lol', 'Ytr', '', 2147483647, 'maljushitskivlad@gmail.com', 'MTExMQ==', '2', 0, 3),
(69, '', 'Lol', 'Ytr', '', 2147483647, 'maljushitskivlad@gmail.com', 'MTExMQ==', '2', 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`idAssessment`),
  ADD KEY `idThemes` (`idThemes`),
  ADD KEY `idSubject` (`idSubject`),
  ADD KEY `idTypeAssessment` (`idTypeAssessment`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`idGroup`),
  ADD KEY `idPupil` (`idPupil`),
  ADD KEY `idSubject` (`idSubject`);

--
-- Indexes for table `pupil`
--
ALTER TABLE `pupil`
  ADD PRIMARY KEY (`idPupil`),
  ADD KEY `idStatus` (`idStatus`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`idSubject`),
  ADD KEY `idTeather` (`idTeather`);

--
-- Indexes for table `teather`
--
ALTER TABLE `teather`
  ADD PRIMARY KEY (`idTeather`),
  ADD KEY `idStatus` (`idStatus`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`idthemes`),
  ADD KEY `idSubject` (`idSubject`);

--
-- Indexes for table `type_assessment`
--
ALTER TABLE `type_assessment`
  ADD PRIMARY KEY (`idtypeassessment`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idStatus` (`idStatus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `idAssessment` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `idGroup` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pupil`
--
ALTER TABLE `pupil`
  MODIFY `idPupil` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `idSubject` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teather`
--
ALTER TABLE `teather`
  MODIFY `idTeather` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `idthemes` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_assessment`
--
ALTER TABLE `type_assessment`
  MODIFY `idtypeassessment` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessment`
--
ALTER TABLE `assessment`
  ADD CONSTRAINT `assessment_ibfk_1` FOREIGN KEY (`idSubject`) REFERENCES `subjects` (`idSubject`),
  ADD CONSTRAINT `assessment_ibfk_2` FOREIGN KEY (`idThemes`) REFERENCES `themes` (`idthemes`),
  ADD CONSTRAINT `assessment_ibfk_3` FOREIGN KEY (`idTypeAssessment`) REFERENCES `type_assessment` (`idtypeassessment`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`idPupil`) REFERENCES `pupil` (`idPupil`);

--
-- Constraints for table `pupil`
--
ALTER TABLE `pupil`
  ADD CONSTRAINT `pupil_ibfk_1` FOREIGN KEY (`idStatus`) REFERENCES `status` (`idStatus`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`idSubject`) REFERENCES `groups` (`idSubject`),
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`idTeather`) REFERENCES `teather` (`idTeather`);

--
-- Constraints for table `teather`
--
ALTER TABLE `teather`
  ADD CONSTRAINT `teather_ibfk_1` FOREIGN KEY (`idStatus`) REFERENCES `status` (`idStatus`);

--
-- Constraints for table `themes`
--
ALTER TABLE `themes`
  ADD CONSTRAINT `themes_ibfk_1` FOREIGN KEY (`idSubject`) REFERENCES `subjects` (`idSubject`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idStatus`) REFERENCES `status` (`idStatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

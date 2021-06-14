-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Cze 2021, 22:09
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `www`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `exercise`
--

CREATE TABLE `exercise` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `deadline` date NOT NULL,
  `difficulty` int(5) NOT NULL,
  `requirements` varchar(1000) NOT NULL,
  `hints` varchar(1000) DEFAULT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `exercise`
--

INSERT INTO `exercise` (`id`, `name`, `teacher_id`, `description`, `deadline`, `difficulty`, `requirements`, `hints`, `group_id`) VALUES
(1, 'ZADANIE 1', 3, 'qwe', '0000-00-00', 3, 'ewe', 'sdsc', 0),
(2, 'qwe', 3, 'rewr', '0000-00-00', 3, 'qwrty', 'q\r\nq', 0),
(3, 'ZADANIE 1', 3, 'qwe', '2322-11-11', 3, 'ewe', 'sdsc', 0),
(4, 'ZADANIE 1', 3, 'qwe', '2322-11-11', 3, 'ewe', 'sdsc', 0),
(5, 'ZADANIE 1', 3, 'qwe', '2322-11-11', 3, 'ewe', 'sdsc', 0),
(6, 'ZADANIE 1', 3, 'qwe', '2322-11-11', 3, 'ewe', 'sdsc', 0),
(7, 'ZADANIE 1', 3, 'qwe', '2322-11-11', 3, 'ewe', 'sdsc', 0),
(8, 'ZADANIE 1', 3, 'qwe', '2322-11-11', 3, 'ewe', 'sdsc', 0),
(9, 'ZADANIE 2', 3, 'Napisz program który wyświetli napis \"Hello World!\".', '2021-06-15', 5, 'Program musi się kompilować.', '', 0),
(10, 'ZADANIE 3', 3, 'asdtyuiop', '1235-11-11', 3, 'cvnm,.', 'fghjk', 0),
(11, 'ZADANIE 5', 3, 'adfy', '5642-11-11', 1, 'tyul;', 'hj;', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `exercise`
--
ALTER TABLE `exercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Cze 2021, 22:09
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `www`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isteacher` tinyint(1) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`name`, `surname`, `email`, `password`, `isteacher`, `id`, `group_id`) VALUES
('root', 'root', 'root', 'root', 1, 3, 0),
('r', 'r', 'r', 'r', 1, 4, 0),
('student', 'student', 'student', 'student', 0, 5, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Cze 2021, 22:09
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `www`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `groups`
--

CREATE TABLE `groups` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL,
  `tutor` varchar(20) NOT NULL,
  `token` int(11) NOT NULL,
  `java` tinyint(4) NOT NULL,
  `cpp` tinyint(4) NOT NULL,
  `python` tinyint(4) NOT NULL,
  `javascript` tinyint(4) NOT NULL,
  `csharp` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



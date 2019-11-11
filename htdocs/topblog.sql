-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 19-11-10 14:45
-- 서버 버전: 10.3.16-MariaDB
-- PHP 버전: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `topblog`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `tb_boards`
--

CREATE TABLE `tb_boards` (
  `idx` int(11) NOT NULL,
  `uidx` int(11) NOT NULL,
  `writer` text NOT NULL,
  `content` text NOT NULL,
  `bookmark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 테이블 구조 `tb_users`
--

CREATE TABLE `tb_users` (
  `idx` int(11) NOT NULL,
  `name` text NOT NULL,
  `id` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `tb_users`
--

INSERT INTO `tb_users` (`idx`, `name`, `id`, `pw`) VALUES
(2, 'test', 'test', 'test');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `tb_boards`
--
ALTER TABLE `tb_boards`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `tb_boards`
--
ALTER TABLE `tb_boards`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

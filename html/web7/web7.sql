-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 16-11-09 20:50 
-- 서버 버전: 5.1.41
-- PHP 버전: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `web7`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `multiboard`
--

CREATE TABLE IF NOT EXISTS `multiboard` (
  `bno` int(11) NOT NULL AUTO_INCREMENT,
  `btitle` varchar(100) NOT NULL,
  `bcontent` text NOT NULL,
  `bname` varchar(50) NOT NULL,
  `bpass` varchar(50) NOT NULL,
  `bemail` varchar(100) NOT NULL,
  `bdate` datetime NOT NULL,
  `bview` int(11) NOT NULL,
  `bfilename` varchar(100) NOT NULL,
  `bip` varchar(20) NOT NULL,
  PRIMARY KEY (`bno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 테이블의 덤프 데이터 `multiboard`
--

INSERT INTO `multiboard` (`bno`, `btitle`, `bcontent`, `bname`, `bpass`, `bemail`, `bdate`, `bview`, `bfilename`, `bip`) VALUES
(1, '첫번째 글쓰기 입니다.', '첫번째 글쓰기 입니다.\r\n첫번째 글쓰기 입니다.\r\n첫번째 글쓰기 입니다.\r\n첫번째 글쓰기 입니다.\r\n첫번째 글쓰기 입니다.', 'first', '1111', 'first@email.com', '2016-11-07 17:13:45', 5, '', '127.0.0.1'),
(8, '파일올리기', '파일올리기\r\n파일올리기\r\n파일올리기', 'file_upload', '1111', 'file_upload@email.com', '2016-11-09 15:25:32', 1, '', '127.0.0.1'),
(9, '파일업로드', '파일업로드\r\n파일업로드\r\n파일업로드\r\n파일업로드', 'file', '1111', 'file_upload@email.com', '2016-11-09 15:26:47', 8, 'bang-jeong-hwans-117th-birthday-5090850246754304-hp.jpg', '127.0.0.1'),
(3, '세번째 글쓰기 입니다.', '세번째 글쓰기 입니다.\r\n세번째 글쓰기 입니다.\r\n세번째 글쓰기 입니다.\r\n세번째 글쓰기 입니다.', 'third', '3333', 'third@email.com', '2016-11-07 17:16:46', 6, '', '127.0.0.1'),
(4, '플라워장', 'flowerJang\r\n\r\n화려해요!!\r\n꽃처럼....', 'flowerJang', '1111', 'flower@email.com', '2016-11-07 20:23:22', 9, '', '127.0.0.1'),
(7, '수정 및 삭제', '수정 및 삭제\r\n수정 및 삭제\r\n수정 및 삭제\r\n', 'edit_delete', '1111', 'edit@email.com', '2016-11-08 17:51:43', 3, '', '127.0.0.1'),
(10, '세션을 이용해서 로그인유지하기', '세션을 이용해서 로그인유지하기\r\n세션을 이용해서 로그인유지하기\r\n세션을 이용해서 로그인유지하기\r\n', 'session', '1111', 'session@email.com', '2016-11-09 16:59:54', 3, '1478678480_8da67f2e641e976580d6245c73181d94', '127.0.0.1');

-- --------------------------------------------------------

--
-- 테이블 구조 `webinfo`
--

CREATE TABLE IF NOT EXISTS `webinfo` (
  `wno` int(11) NOT NULL AUTO_INCREMENT,
  `wname` varchar(100) NOT NULL,
  `wid` varchar(50) NOT NULL,
  `wpwd` varchar(50) NOT NULL,
  `wemail` varchar(50) NOT NULL,
  `wphone` varchar(50) NOT NULL,
  `waddress` varchar(50) NOT NULL,
  PRIMARY KEY (`wno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 테이블의 덤프 데이터 `webinfo`
--

INSERT INTO `webinfo` (`wno`, `wname`, `wid`, `wpwd`, `wemail`, `wphone`, `waddress`) VALUES
(3, '강주연', 'webfirst', '1111', 'webfirst1111@email.com', '0101111111', '151-848_서울 관악구 관악로12길 58-51234'),
(2, '홍길동', 'first', '1111', 'first@email.com', '01011111111', '135-860_서울 강남구 강남대로 2381234'),
(4, '이순신', 'second', '2222', 'second@email.com', '0102222222', '463-410_경기 성남시 분당구 대왕판교로 4771234'),
(5, '삼식이', 'third', '3333', 'third@email.com', '0103333333', '135-860_서울 강남구 강남대로 2381234'),
(6, '사오정', 'fourth', '4444', 'fourth@email.com', '0104444444', '369-863_충북 음성군 원남면 사오랑길 141234'),
(7, '오식이', 'fifth', '5555', 'fifth@email.com', '0105555555', '142-804_서울 강북구 오패산로 110-111234');

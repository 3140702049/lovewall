-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2019-07-05 19:18:16
-- 服务器版本： 5.5.62-log
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idc_521wall_cn`
--

-- --------------------------------------------------------

--
-- 表的结构 `love_barrager`
--

CREATE TABLE IF NOT EXISTS `love_barrager` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `info` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `love_comment`
--

CREATE TABLE IF NOT EXISTS `love_comment` (
  `id` int(11) NOT NULL COMMENT '主键id',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级评论id,若是一级评论则为0',
  `nickname` varchar(100) DEFAULT NULL COMMENT '评论人昵称',
  `head_pic` varchar(400) DEFAULT NULL COMMENT '评论人头像',
  `content` text COMMENT '评论内容',
  `create_time` datetime DEFAULT NULL COMMENT '评论或回复发表时间',
  `post_id` int(11) DEFAULT NULL,
  `like` int(255) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=257 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `love_contents`
--

CREATE TABLE IF NOT EXISTS `love_contents` (
  `id` int(255) NOT NULL,
  `zid` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `sex` varchar(1) NOT NULL,
  `qq` text NOT NULL,
  `ip` text NOT NULL,
  `mous` varchar(2) NOT NULL DEFAULT '0',
  `name` varchar(11) NOT NULL,
  `date` int(255) NOT NULL,
  `like` int(255) DEFAULT '0',
  `comm` int(255) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=259 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `love_notice`
--

CREATE TABLE IF NOT EXISTS `love_notice` (
  `id` int(11) NOT NULL,
  `tid` varchar(255) DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `love_notice`
--

INSERT INTO `love_notice` (`id`, `tid`, `content`, `time`) VALUES
(16, '0.86586100 15622094685d1d6cbcd3647', '<p style="text-align: center;"><b><i>欢迎使用LoveWall程序，看到本公告说明又一个新站产生了<img src="http://idc.521wall.cn/static/layui/images/face/30.gif" alt="[思考]"></i></b></p>', 1562209468);

-- --------------------------------------------------------

--
-- 表的结构 `love_open_school`
--

CREATE TABLE IF NOT EXISTS `love_open_school` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `web_name` varchar(20) DEFAULT NULL,
  `email` varchar(29) DEFAULT NULL,
  `reason` text,
  `logo_img` text,
  `addtime` datetime DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `love_options`
--

CREATE TABLE IF NOT EXISTS `love_options` (
  `id` int(255) NOT NULL,
  `name` text,
  `value` text
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `love_options`
--

INSERT INTO `love_options` (`id`, `name`, `value`) VALUES
(1, 'title', 'LoveWall表白墙V2.0'),
(2, 'keywords', 'LoveWall,表白墙V2.0'),
(3, 'description', '我说的话，不知远方的人听见了吗？'),
(4, 'icp', '海外服务器要个屁备案'),
(6, 'limit_time', '3'),
(7, 'limit_mous', '0'),
(8, 'qq', '1275654934'),
(10, 'name', 'LoveWall表白墙V2.0'),
(11, 'page_about', '官方Demo <br>站点:521wall.cn<br>\n官方Wiki <br>wiki.521wall.cn'),
(12, 'limit_ip', '2'),
(13, 'admin_account', '1'),
(14, 'cnzz', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `love_user`
--

CREATE TABLE IF NOT EXISTS `love_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `openid` text,
  `qq` int(10) NOT NULL,
  `isadmin` int(11) DEFAULT '0',
  `login_time` datetime DEFAULT NULL,
  `login_ip` text,
  `pass_err` int(255) unsigned zerofill DEFAULT '000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000',
  `email` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `love_user`
--

INSERT INTO `love_user` (`id`, `username`, `password`, `openid`, `qq`, `isadmin`, `login_time`, `login_ip`, `pass_err`, `email`) VALUES
(1, 'admin', '68abea707651fbea1148f8675505fc7b', '', 1275654934, 1, '2019-02-03 22:34:51', '127.0.0.1', 000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'admin@mail.catni.cn');

-- --------------------------------------------------------

--
-- 表的结构 `love_user_log`
--

CREATE TABLE IF NOT EXISTS `love_user_log` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `client_ip` varchar(255) NOT NULL,
  `exec_time` datetime NOT NULL,
  `exec_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `love_website`
--

CREATE TABLE IF NOT EXISTS `love_website` (
  `id` int(11) unsigned NOT NULL,
  `zid` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '冻结=0，正常=1；',
  `count` int(11) NOT NULL DEFAULT '0',
  `web_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `web_qq` varchar(255) DEFAULT NULL,
  `web_description` text CHARACTER SET utf8,
  `web_logo` text,
  `hot` int(11) unsigned zerofill DEFAULT '00000000000'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `love_website`
--

INSERT INTO `love_website` (`id`, `zid`, `status`, `count`, `web_name`, `web_qq`, `web_description`, `web_logo`, `hot`) VALUES
(2, '46f312f8-599f-11e9-90ff-1a23648d9544', 1, 0, '南宁职业技术学院', 'lovewall', '当我无计可施，驻足不前时；当我被黑暗覆盖，被绝望淹没时 谁是我的照明灯？', 'https://i.loli.net/2019/05/25/5ce8908de1f9d47116.jpg', 00000000036);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `love_barrager`
--
ALTER TABLE `love_barrager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love_comment`
--
ALTER TABLE `love_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love_contents`
--
ALTER TABLE `love_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love_notice`
--
ALTER TABLE `love_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love_open_school`
--
ALTER TABLE `love_open_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love_options`
--
ALTER TABLE `love_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love_user`
--
ALTER TABLE `love_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love_user_log`
--
ALTER TABLE `love_user_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love_website`
--
ALTER TABLE `love_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `love_barrager`
--
ALTER TABLE `love_barrager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `love_comment`
--
ALTER TABLE `love_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',AUTO_INCREMENT=257;
--
-- AUTO_INCREMENT for table `love_contents`
--
ALTER TABLE `love_contents`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=259;
--
-- AUTO_INCREMENT for table `love_notice`
--
ALTER TABLE `love_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `love_open_school`
--
ALTER TABLE `love_open_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `love_options`
--
ALTER TABLE `love_options`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `love_user`
--
ALTER TABLE `love_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `love_user_log`
--
ALTER TABLE `love_user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `love_website`
--
ALTER TABLE `love_website`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

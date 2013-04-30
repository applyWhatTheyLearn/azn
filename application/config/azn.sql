-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 04 月 30 日 22:02
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `azn`
--

-- --------------------------------------------------------

--
-- 表的结构 `accredit`
--

CREATE TABLE IF NOT EXISTS `accredit` (
  `AccID` int(11) NOT NULL AUTO_INCREMENT,
  `AdminID` int(11) DEFAULT NULL,
  `AccID_t` int(11) DEFAULT NULL,
  `TitleName` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `LinkName` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `FotherID` int(11) DEFAULT NULL,
  `compositor` int(11) DEFAULT NULL,
  PRIMARY KEY (`AccID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=437 ;

--
-- 转存表中的数据 `accredit`
--

INSERT INTO `accredit` (`AccID`, `AdminID`, `AccID_t`, `TitleName`, `LinkName`, `FotherID`, `compositor`) VALUES
(50, 1, 1, '权限管理            ', 'managedetail.html                                 ', 0, 200),
(69, 1, 8, '登陆用户管理        ', 'User_List.asp                                     ', 50, 100),
(181, 1, 77, '后台栏目管理        ', 'QxLm_List.asp                                     ', 50, 200),
(300, 1, 155, '用户管理            ', 'managedetail.html                                 ', 0, 100),
(301, 1, 156, '用户信息修改        ', 'Login_User.asp                                    ', 300, 100),
(359, 1, 218, '会员管理            ', 'members/Member_List.asp                           ', 0, 1100),
(360, 1, 219, '有情连接            ', 'link/Link_list.asp                                ', 0, 1600),
(362, 1, 221, '联系我们            ', 'contact/contact_list.asp                          ', 0, 1500),
(399, 1, 257, '公司新闻            ', 'dynamic/dynamic_index.html                        ', 0, 600),
(401, 1, 259, '关于我们            ', 'aboutus/au_door.asp                               ', 0, 500),
(414, 1, 277, '备案信息管理        ', 'copyright/copyright_modi.asp                      ', 0, 2500),
(415, 1, 278, '站内宣传图片替换    ', 'picmanage/pic_list.asp                            ', 0, 2600),
(416, 1, 279, '公告通知            ', 'managedetail.html                                 ', 0, 400),
(418, 1, 281, '用户登录管理        ', 'managedetail.html                                 ', 0, 1300),
(419, 1, 282, '信息发布管理        ', 'loginfo/coreclass_index.html                      ', 418, 100),
(420, 1, 284, '文件下载            ', 'address/exponnet_list.asp                         ', 418, 200),
(421, 1, 285, '意见反馈            ', 'feedback/feedback_list.asp                        ', 0, 1400),
(422, 1, 286, '法律声明            ', '1111                                              ', 0, 1700),
(423, 1, 287, '111-1               ', '111-1                                             ', 422, 100),
(424, 1, 288, '111-2               ', '111-2                                             ', 422, 200),
(426, 1, 290, '媒体链接            ', '1                                                 ', 0, 700),
(427, 1, 291, '视频连接            ', '1                                                 ', 0, 800),
(428, 1, 292, '加盟信息            ', '1                                                 ', 0, 900),
(429, 1, 293, '产品管理            ', '1                                                 ', 0, 1000),
(430, 1, 294, '帮助中心管理        ', '2                                                 ', 0, 1200),
(431, 1, 295, '商品分类管理        ', 'ProductClass/ProBigClass_index.html               ', 429, 100),
(432, 1, 296, '商品内容管理        ', 'ProductDetail/Pro_door.asp                        ', 429, 200),
(433, 1, 297, '新品推荐管理        ', 'ProductDetail/Pro_TjList.asp                      ', 429, 300),
(434, 1, 298, '总公司信息          ', 'gonggao/GongGao_list.asp                          ', 416, 100),
(435, 1, 299, '区域信息            ', '222                                               ', 416, 200),
(436, 1, 300, '区域管理            ', 'area/area_list.asp                                ', 0, 300);

-- --------------------------------------------------------

--
-- 表的结构 `accredit_t`
--

CREATE TABLE IF NOT EXISTS `accredit_t` (
  `AccID_t` int(11) NOT NULL AUTO_INCREMENT,
  `TitleName_t` varchar(20) CHARACTER SET utf8 NOT NULL,
  `LinkName_t` varchar(50) CHARACTER SET utf8 NOT NULL,
  `FotherID_t` int(11) NOT NULL,
  `compositor_t` int(11) DEFAULT NULL,
  PRIMARY KEY (`AccID_t`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=301 ;

--
-- 转存表中的数据 `accredit_t`
--

INSERT INTO `accredit_t` (`AccID_t`, `TitleName_t`, `LinkName_t`, `FotherID_t`, `compositor_t`) VALUES
(1, '权限管理            ', 'managedetail.html                                 ', 0, 200),
(8, '登陆用户管理        ', 'User_List.asp                                     ', 1, 100),
(77, '后台栏目管理        ', 'QxLm_List.asp                                     ', 1, 200),
(155, '用户管理            ', 'managedetail.html                                 ', 0, 100),
(156, '用户信息修改        ', 'Login_User.asp                                    ', 155, 100),
(218, '会员管理            ', 'members/Member_List.asp                           ', 0, 1100),
(219, '有情连接            ', 'link/Link_list.asp                                ', 0, 1600),
(221, '联系我们            ', 'contact/contact_list.asp                          ', 0, 1500),
(257, '公司新闻            ', 'dynamic/dynamic_index.html                        ', 0, 600),
(259, '关于我们            ', 'aboutus/au_door.asp                               ', 0, 500),
(277, '备案信息管理        ', 'copyright/copyright_modi.asp                      ', 0, 2500),
(278, '站内宣传图片替换    ', 'picmanage/pic_list.asp                            ', 0, 2600),
(279, '公告通知            ', 'managedetail.html                                 ', 0, 400),
(281, '用户登录管理        ', 'managedetail.html                                 ', 0, 1300),
(282, '信息发布管理        ', 'loginfo/coreclass_index.html                      ', 281, 100),
(284, '文件下载            ', 'address/exponnet_list.asp                         ', 281, 200),
(285, '意见反馈            ', 'feedback/feedback_list.asp                        ', 0, 1400),
(286, '法律声明            ', '1111                                              ', 0, 1700),
(287, '111-1               ', '111-1                                             ', 286, 100),
(288, '111-2               ', '111-2                                             ', 286, 200),
(290, '媒体链接            ', '1                                                 ', 0, 700),
(291, '视频连接            ', '1                                                 ', 0, 800),
(292, '加盟信息            ', '1                                                 ', 0, 900),
(293, '产品管理            ', '1                                                 ', 0, 1000),
(294, '帮助中心管理        ', '2                                                 ', 0, 1200),
(295, '商品分类管理        ', 'ProductClass/ProBigClass_index.html               ', 293, 100),
(296, '商品内容管理        ', 'ProductDetail/Pro_door.asp                        ', 293, 200),
(297, '新品推荐管理        ', 'ProductDetail/Pro_TjList.asp                      ', 293, 300),
(298, '总公司信息          ', 'gonggao/GongGao_list.asp                          ', 279, 100),
(299, '区域信息            ', '222                                               ', 279, 200),
(300, '区域管理            ', 'area/area_list.asp                                ', 0, 300);

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `opens` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `InpuTime` datetime DEFAULT NULL,
  `LoginTimes` int(11) DEFAULT NULL,
  `LastLoginTime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `password`, `opens`, `InpuTime`, `LoginTimes`, `LastLoginTime`) VALUES
(1, 'admin          ', '$2a$08$Tw8GKAfTQo/Dq0hWrB/nMeEASmYdRtuxKwtXWcqOm6QQaCSb8FZYS', 'Open ', '2009-07-11 15:19:08', NULL, '2013-04-04 19:57:29'),
(2, 'user           ', '49ba59abbe56e057                                  ', 'Open ', '2009-04-13 14:02:40', NULL, NULL),
(3, '111            ', '9d8a121ce581499d                                  ', 'Open ', '2009-04-13 14:06:54', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `w_aboutus`
--

CREATE TABLE IF NOT EXISTS `w_aboutus` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_classname` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(10) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `w_aboutus`
--

INSERT INTO `w_aboutus` (`w_id`, `w_classname`, `w_sort`, `w_views`) VALUES
(5, 'hhh', 0, '显示'),
(6, '11                                                                                                  ', 0, '显示      '),
(7, '44', 2, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `w_aboutus_detail`
--

CREATE TABLE IF NOT EXISTS `w_aboutus_detail` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_classid` int(11) DEFAULT NULL,
  `w_title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `w_detail` longtext CHARACTER SET utf8,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `w_aboutus_detail`
--

INSERT INTO `w_aboutus_detail` (`w_id`, `w_classid`, `w_title`, `w_detail`, `w_sort`, `w_views`) VALUES
(4, 4, '2222                                                                                                ', '', 0, '显示      '),
(7, 6, '111                                                                                                 ', '1111', 0, '显示      ');

-- --------------------------------------------------------

--
-- 表的结构 `w_aboutus_pic`
--

CREATE TABLE IF NOT EXISTS `w_aboutus_pic` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_detailid` int(11) DEFAULT NULL,
  `w_pic` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `w_ext` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(10) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `w_ad_pic`
--

CREATE TABLE IF NOT EXISTS `w_ad_pic` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_pic` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `w_ext` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `w_title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `w_url` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `w_ad_pic`
--

INSERT INTO `w_ad_pic` (`w_id`, `w_pic`, `w_ext`, `w_title`, `w_url`) VALUES
(3, 'f_pic_1                       ', 'jpg   ', '首页顶部图片                                                                                        ', '                                                                                                    '),
(7, 'pic_1_1                       ', 'jpg   ', '首页广告图片(960px*229px)                                                                           ', '                                                                                                    '),
(8, 'logo                          ', 'gif   ', '顶部logo图片                                                                                        ', NULL),
(9, 'logo_bottom3                  ', 'gif   ', '底部logo图片                                                                                        ', NULL),
(10, 'pic_2_1                       ', 'gif   ', '用户中心图片                                                                                        ', NULL),
(11, 'pic_7_1                       ', 'jpg   ', '新闻页下方图片1                                                                                     ', NULL),
(12, 'pic_7_2                       ', 'jpg   ', '新闻页下方图片2                                                                                     ', NULL),
(13, 'pic_7_3                       ', 'jpg   ', '新闻页下方图片3                                                                                     ', NULL),
(14, 'f_pic_13                      ', 'gif   ', '首页联系电话图片                                                                                    ', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `w_area`
--

CREATE TABLE IF NOT EXISTS `w_area` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `w_area`
--

INSERT INTO `w_area` (`w_id`, `w_name`, `w_sort`, `w_views`) VALUES
(1, '北京', 0, '显示'),
(2, '上海', 0, '显示'),
(3, '广州', 0, '显示'),
(4, '深圳', 0, '显示'),
(5, '福建', 2, '显示'),
(7, '厦门', 0, '显示'),
(8, '济南', 0, '显示'),
(9, '郑州', 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `w_contact`
--

CREATE TABLE IF NOT EXISTS `w_contact` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_areaid` int(11) DEFAULT NULL,
  `w_areaname` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `w_address` varchar(150) CHARACTER SET utf8 NOT NULL,
  `w_postcode` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `w_name` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `w_phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_tel` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_fax` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_msn` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `w_qq` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_weixin` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_detail` longtext CHARACTER SET utf8,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `w_contact`
--

INSERT INTO `w_contact` (`w_id`, `w_areaid`, `w_areaname`, `w_address`, `w_postcode`, `w_name`, `w_phone`, `w_tel`, `w_fax`, `w_email`, `w_msn`, `w_qq`, `w_weixin`, `w_detail`, `w_sort`, `w_views`) VALUES
(2, NULL, '上海', 'sfds ', '', '', '', NULL, '', '', '', '', '', '', 0, '显示'),
(4, NULL, '0', 'sfsf', '11212', '1313', '1212', NULL, '131313', '313113', '4222', '1313', '321', '', 0, '显示'),
(5, NULL, '0', 'sfsf', '11212', '1313', '1212', NULL, '131313', '313113', '4222', '1313', '321', '<p>12313</p>', 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `w_dynamic_detail`
--

CREATE TABLE IF NOT EXISTS `w_dynamic_detail` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_areaid` int(11) DEFAULT NULL,
  `w_areaname` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `w_type` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `w_title` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `w_detail` longtext CHARACTER SET utf8,
  `w_inputime` date DEFAULT NULL,
  `w_clicknum` int(11) DEFAULT '0',
  `w_tuijian` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `w_dynamic_detail`
--

INSERT INTO `w_dynamic_detail` (`w_id`, `w_areaid`, `w_areaname`, `w_type`, `w_title`, `w_detail`, `w_inputime`, `w_clicknum`, `w_tuijian`, `w_sort`, `w_views`) VALUES
(14, 11, '为啥德国为啥德国为啥                    ', NULL, '为啥德国大部分景点免门票                                                                                                                              ', '有不少人经常来信质疑，说你去了德国及欧洲这么多的地方，钱哪来的？很多人因此确定，我肯定是个富二代或二奶。有些留言让人哭笑不得也就懒得解释。当然，我自有一套穷游的省钱秘笈。我在这里要告诉大家的是，我博客里介绍的大部分德国景点，其实是免费参观的。我在德国没见到过超10欧的景点，也许某些博物馆有，但我没见到过。&nbsp;&nbsp; <BR>小镇koenigstein附近的山上有座德国数一数二大城堡废墟，此城堡塔楼是可以上去的，城堡内有干净卫生间。参观此处景点同样是免费的.&nbsp;&nbsp;&nbsp; <BR>十月份邀请我的德国邻居去中国玩，德国人很直率，问我应该带多少钱去，按他们的想法，中国应该是个便宜的国度，因为中国的产品在德国是相当便宜的。我连忙告诉他们，您们可千万别这么想，中国是个像样点的景点可就是要收费的，进山进湖可都是要票的。而且门票比欧洲贵多了。欧洲人对进山进湖要门票是最不能理解的，你何曾见过欧洲的山和湖要门票的？我在易北河流域参观过异常俊美的山涧石桥，那里是德国顶级的山中景色，也是免费，不知换到中国要花多少钱。关于这座桥大家可以看我之前的博客。&nbsp;&nbsp;&nbsp; <BR>欧洲最值得观赏的人文景观无外乎教堂和城堡，此两样中，教堂具是免费，科隆大教堂世界上够出名的了吧，也是免费的（当然上教堂塔楼要收费），我过两天准备去罗马，一查罗马的景点，一堆免费的，尤其是梵蒂冈教皇所在的教堂，也是免费参观。这主要是欧洲人本身有宗教信仰，教堂不能仅作为旅游景点更是教徒聚集的场所，这种场合收钱简直就是暴殄天物了。这就不像中国，寺庙道观基本成了敛财的工具了。&nbsp;&nbsp;&nbsp; <BR>德国的山水就算是城堡相当多都是免费参观，即便有收费的价钱也没高的那么离谱。山山水水等自然景观本就属于全体老百姓，你定这么高价格干吗？如果是高收费但百姓尤其是当地百姓却没有得到收益，他们有权利质问这些钱去哪里了。&nbsp;&nbsp;&nbsp;&nbsp; <BR>中国还有一个相当奇怪的现象，而且似乎我们中国人都习以为常见怪不怪了，就是景点周边，车站等公共场所等地的物价奇高无比。北京几年前新建了一座北京南站，我进站吃饭，简单一份饭菜将近一百块人民币，这比法兰克福火车站都要贵，而且其实德国车站，飞机场，旅游景点周围的物价并没有高出多少。麦当劳肯德基该多少钱还是多少钱。这是为什么呢？难道北京南站不是拿百姓的税收建起来的吗？为什么建起后就要征收高额税收再让百姓买单呢？为啥中国著名景点周围的物价高的这么离谱呢？是因为政府的高额税收涵盖其中还是政府的不作为任由那里的物价高涨的呢？', '2010-11-18', 6, '已推荐', 1000, '显示  '),
(15, 11, NULL, NULL, '11111                                                                                                                                                 ', '111', NULL, 1, '已推荐', 0, '显示  '),
(16, 11, NULL, NULL, '22                                                                                                                                                    ', '222', NULL, 0, '已推荐', 0, '显示  '),
(17, 11, NULL, NULL, '333                                                                                                                                                   ', '333', NULL, 0, '未推荐', 0, '显示  '),
(18, 11, NULL, NULL, '444                                                                                                                                                   ', '444', NULL, 0, '未推荐', 0, '显示  '),
(19, 11, NULL, NULL, '555                                                                                                                                                   ', '5555', NULL, 0, '未推荐', 0, '显示  '),
(20, 11, NULL, NULL, '666                                                                                                                                                   ', '6666', NULL, 0, '未推荐', 0, '显示  '),
(21, 11, NULL, NULL, '777                                                                                                                                                   ', '777', NULL, 0, '未推荐', 0, '显示  '),
(22, 11, NULL, NULL, '888                                                                                                                                                   ', '8888', NULL, 0, '未推荐', 0, '显示  ');

-- --------------------------------------------------------

--
-- 表的结构 `w_dynamic_pic`
--

CREATE TABLE IF NOT EXISTS `w_dynamic_pic` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_detailid` int(11) DEFAULT NULL,
  `w_pic` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `w_ext` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `w_size` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `w_tuijian` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `w_sort` int(11) DEFAULT NULL,
  `w_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `w_dynamic_pic`
--

INSERT INTO `w_dynamic_pic` (`w_id`, `w_detailid`, `w_pic`, `w_ext`, `w_size`, `w_tuijian`, `w_sort`, `w_views`) VALUES
(13, 14, '2012061214551411457           ', 'jpg       ', NULL, NULL, 0, '显示  '),
(14, 14, '2012061416595735248           ', 'jpg       ', NULL, NULL, 0, '显示  '),
(15, 14, '2012061417000896368           ', 'jpg       ', NULL, NULL, 0, '显示  ');

-- --------------------------------------------------------

--
-- 表的结构 `w_feedback`
--

CREATE TABLE IF NOT EXISTS `w_feedback` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_areaid` int(11) DEFAULT NULL,
  `w_areaname` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `w_detail` longtext CHARACTER SET utf8,
  `w_inputime` datetime DEFAULT NULL,
  `w_return` longtext CHARACTER SET utf8,
  `w_return_time` datetime DEFAULT NULL,
  `w_return_c` longtext CHARACTER SET utf8,
  `w_return_c_time` longtext CHARACTER SET utf8,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(5) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `w_feedback`
--

INSERT INTO `w_feedback` (`w_id`, `w_areaid`, `w_areaname`, `w_detail`, `w_inputime`, `w_return`, `w_return_time`, `w_return_c`, `w_return_c_time`, `w_sort`, `w_views`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, '666', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, '111', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, '2222', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, '3333', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, '1111', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, 'jghjg', '2012-09-22 11:38:00', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `w_feedback_ip`
--

CREATE TABLE IF NOT EXISTS `w_feedback_ip` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_ip` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `w_time` datetime DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `w_help`
--

CREATE TABLE IF NOT EXISTS `w_help` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_classname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(10) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `w_help`
--

INSERT INTO `w_help` (`w_id`, `w_classname`, `w_sort`, `w_views`) VALUES
(1, '付款方式                                          ', 0, '显示      '),
(2, '购物流程                                          ', 0, '显示      '),
(3, '购物方式                                          ', 0, '显示      '),
(4, '送货方式                                          ', 0, '显示      '),
(5, '客户须知                                          ', 0, '显示      '),
(6, '联系方式                                          ', 0, '显示      ');

-- --------------------------------------------------------

--
-- 表的结构 `w_help_detail`
--

CREATE TABLE IF NOT EXISTS `w_help_detail` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_classid` int(11) DEFAULT NULL,
  `w_title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `w_detail` longtext CHARACTER SET utf8,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `w_help_detail`
--

INSERT INTO `w_help_detail` (`w_id`, `w_classid`, `w_title`, `w_detail`, `w_sort`, `w_views`) VALUES
(2, 3, '11                                                                                                  ', '11', 0, '显示      '),
(4, 6, 'jjjjsfal', '<p>kkksfdfa</p>', 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `w_help_pic`
--

CREATE TABLE IF NOT EXISTS `w_help_pic` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_helpid` int(11) DEFAULT NULL,
  `w_pic` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `w_ext` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(10) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `w_join`
--

CREATE TABLE IF NOT EXISTS `w_join` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_title` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_detail` longtext CHARACTER SET utf8,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `w_join`
--

INSERT INTO `w_join` (`w_id`, `w_title`, `w_detail`, `w_sort`, `w_views`) VALUES
(2, '', '<p><img src="/azn/public/ueditor/php/upload//71381364827867.jpg" /></p>', 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `w_law`
--

CREATE TABLE IF NOT EXISTS `w_law` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_title` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_detail` longtext CHARACTER SET utf8,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `w_law`
--

INSERT INTO `w_law` (`w_id`, `w_title`, `w_detail`, `w_sort`, `w_views`) VALUES
(3, '', '<p>hhhhhhhhhhhhh</p>', 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `w_legal_notices`
--

CREATE TABLE IF NOT EXISTS `w_legal_notices` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_detail` longtext CHARACTER SET utf8,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `w_link`
--

CREATE TABLE IF NOT EXISTS `w_link` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_url` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `w_link`
--

INSERT INTO `w_link` (`w_id`, `w_name`, `w_url`, `w_sort`, `w_views`) VALUES
(11, 'ooi', '11                                                                                                                                                    ', 0, '显示'),
(12, '222                                               ', '2222                                                                                                                                                  ', 0, '显示  '),
(13, '333                                               ', '333                                                                                                                                                   ', 0, '显示  '),
(14, '444                                               ', '444                                                                                                                                                   ', 0, '显示  '),
(21, 'af', 'www.sina.com', 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `w_medialink`
--

CREATE TABLE IF NOT EXISTS `w_medialink` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_url` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `w_medialink`
--

INSERT INTO `w_medialink` (`w_id`, `w_name`, `w_url`, `w_sort`, `w_views`) VALUES
(3, 'sina.com', 'www.sina.com', 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `w_member`
--

CREATE TABLE IF NOT EXISTS `w_member` (
  `Meid` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) DEFAULT NULL,
  `areaid` int(11) DEFAULT NULL,
  `areaname` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `usrid` int(11) DEFAULT NULL,
  `Cnum` int(11) DEFAULT NULL,
  `recommender_id` int(11) DEFAULT NULL,
  `userlevel` varchar(16) CHARACTER SET utf8 DEFAULT NULL,
  `sales` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `nickname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `userpass` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `sex` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `birth` datetime DEFAULT NULL,
  `idcard1` varchar(18) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `educational` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `profession1` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `company_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `work_address` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `postcode1` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `mobile` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `commonly_address` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `provinces` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `postcode2` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `immediate_family_name` varchar(16) CHARACTER SET utf8 DEFAULT NULL,
  `profession2` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `idcard2` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `clearing_bank` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `branch` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `account_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `account_number` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `RegTime` datetime DEFAULT NULL,
  `LastLoginTime` datetime DEFAULT NULL,
  `LoginNum` int(11) DEFAULT NULL,
  `Photo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Detail` longtext CHARACTER SET utf8,
  `Msn` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `QQ` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `weixin` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `age` varchar(3) CHARACTER SET utf8 NOT NULL,
  `statu` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `Views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`Meid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `w_notice`
--

CREATE TABLE IF NOT EXISTS `w_notice` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_areaid` int(11) DEFAULT NULL,
  `w_areaname` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `w_type` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `w_title` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `w_detail` longtext CHARACTER SET utf8,
  `w_clicknum` int(11) DEFAULT NULL,
  `w_inputime` datetime DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `w_notice`
--

INSERT INTO `w_notice` (`w_id`, `w_areaid`, `w_areaname`, `w_type`, `w_title`, `w_detail`, `w_clicknum`, `w_inputime`, `w_sort`, `w_views`) VALUES
(2, NULL, NULL, 'company', 'gongaobiaoti', '<p>gonggaoneirong</p>', NULL, '2013-04-12 15:02:08', 0, '显示'),
(3, NULL, NULL, 'company', 'xiaomai', '', NULL, '2013-04-13 15:40:32', 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `w_videolink`
--

CREATE TABLE IF NOT EXISTS `w_videolink` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `w_url` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `w_videolink`
--

INSERT INTO `w_videolink` (`w_id`, `w_name`, `w_url`, `w_sort`, `w_views`) VALUES
(1, 'shipf', 'www.sohu.com ', 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `z_car`
--

CREATE TABLE IF NOT EXISTS `z_car` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_areaid` int(11) DEFAULT NULL,
  `l_areaname` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `l_userid` int(11) DEFAULT NULL,
  `l_productid` int(11) DEFAULT NULL,
  `l_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `l_num` int(11) DEFAULT '0',
  `l_price` double DEFAULT '0',
  `l_datetime` datetime DEFAULT NULL,
  `l_tempnum` varchar(20) CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `z_class`
--

CREATE TABLE IF NOT EXISTS `z_class` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_fid` int(11) DEFAULT NULL,
  `l_classpath` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `l_areaid` int(11) DEFAULT NULL,
  `l_areaname` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_detail` longtext CHARACTER SET utf8,
  `l_type` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `l_tuijian` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `l_sort` int(11) DEFAULT '0',
  `l_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- 转存表中的数据 `z_class`
--

INSERT INTO `z_class` (`l_id`, `l_fid`, `l_classpath`, `l_areaid`, `l_areaname`, `l_name`, `l_detail`, `l_type`, `l_tuijian`, `l_sort`, `l_views`) VALUES
(47, 0, '0', 4, '深圳', '1', NULL, NULL, NULL, 0, '显示'),
(48, 0, '0', 4, '深圳', '11', NULL, NULL, NULL, 0, '显示'),
(49, 47, '0-47', 4, '深圳', '1-1', NULL, NULL, NULL, 0, '显示'),
(50, 49, '0-47-49', 4, '深圳', '1-1-1', NULL, NULL, NULL, 0, '显示'),
(51, 50, '0-47-49-50', 4, '深圳', 'fz1', NULL, NULL, NULL, 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `z_class_additional`
--

CREATE TABLE IF NOT EXISTS `z_class_additional` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_fid` int(11) DEFAULT NULL,
  `classid` int(11) NOT NULL,
  `l_classpath` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_sort` int(11) DEFAULT '0',
  `l_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `z_class_additional`
--

INSERT INTO `z_class_additional` (`l_id`, `l_fid`, `classid`, `l_classpath`, `l_name`, `l_sort`, `l_views`) VALUES
(7, 6, 50, '0-6', '912', 0, '显示'),
(6, 0, 50, '0', '型号', 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `z_order`
--

CREATE TABLE IF NOT EXISTS `z_order` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_areaid` int(11) DEFAULT NULL,
  `l_areaname` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `l_classpath` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `l_memberinfo` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `l_orderform` int(11) DEFAULT NULL,
  `l_userid` int(11) DEFAULT NULL,
  `l_detail` longtext CHARACTER SET utf8,
  `l_price` double DEFAULT '0',
  `l_consignee` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `l_sex` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `l_address` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_phone` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `l_mobile` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `l_postcode` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `l_email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_deliver` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `l_payment` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `l_invoice` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_place` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `l_ordertime` datetime DEFAULT NULL,
  `l_takeffectime` datetime DEFAULT NULL,
  `l_orderstatu` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `l_statuinfo` longtext CHARACTER SET utf8,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `z_order`
--

INSERT INTO `z_order` (`l_id`, `l_areaid`, `l_areaname`, `l_classpath`, `l_memberinfo`, `l_orderform`, `l_userid`, `l_detail`, `l_price`, `l_consignee`, `l_sex`, `l_address`, `l_phone`, `l_mobile`, `l_postcode`, `l_email`, `l_deliver`, `l_payment`, `l_invoice`, `l_place`, `l_ordertime`, `l_takeffectime`, `l_orderstatu`, `l_statuinfo`) VALUES
(2, NULL, NULL, NULL, NULL, 1234567890, 7, '777', 77, '77             ', '77', '7                                                 ', '7              ', '7              ', '7     ', '77                                                ', '7              ', '7              ', '7                                                 ', '77                                                                                                  ', '2009-03-10 09:59:38', NULL, '新订单              ', NULL),
(3, NULL, NULL, NULL, NULL, 234, 7, '777', 77, '77             ', '77', '7                                                 ', '7              ', '7              ', '7     ', '77                                                ', '7              ', '7              ', '7                                                 ', '77                                                                                                  ', '2009-03-10 09:59:38', '2009-04-08 12:34:08', '完成                ', '<br><br><font color=#993300>xzscxzc</font><br>2009-4-8 21:59:28<br><br><font color=#993300>fdadsfs</font><br>2009-4-8 22:00:42<br><br><font color=#993300>asddaq</font><br>2009-4-8 22:00:50'),
(4, NULL, NULL, NULL, NULL, 234, 7, '777', 77, '77             ', '77', '7                                                 ', '7              ', '7              ', '7     ', '77                                                ', '7              ', '7              ', '7                                                 ', '77                                                                                                  ', '2009-03-10 09:59:38', NULL, '进行中              ', '<br><br>dsad<br>2009-4-8 21:40:30<br><br>dklsakl<br>2009-4-8 21:41:14'),
(6, NULL, NULL, NULL, NULL, 234, 27, '777', 77, '77             ', '77', '7                                                 ', '7              ', '7              ', '7     ', '77                                                ', '7              ', '7              ', '7                                                 ', '77                                                                                                  ', '2009-03-10 09:59:38', NULL, '完成                ', '<br><br><font color=#993300>zxczc</font><br>2009-4-8 22:02:57<br><br><font color=#993300>zxcszc</font><br>2009-4-8 22:03:00<br><br><font color=#993300>zxx</font><br>2009-4-8 22:03:09'),
(9, NULL, NULL, NULL, NULL, 526456792, 7, '1、> 1:单价:122.17元 1 件 共: <font color=#ff0000>122.17</font>元<br>2、> 222:单价:180元 1 件 共: <font color=#ff0000>180</font>元<br>&nbsp;&nbsp;&nbsp;&nbsp;<font color=#666666>2.1、> 222:单价:20元 1 件 共: <font color=#ff0000>20</font>元</font><br>&nbsp;&nbsp;&nbsp;&nbsp;<font color=#666666>2.2、> 222:单价:10元 1 件 共: <font color=#ff0000>10</font>元</font><br><br><hr align=left width=200 size=1 ><br>总价格:<strong><font color=#ff0000>332.17</font></strong>', 332.17, 'aa             ', '男', 'aa                                                ', 'aa             ', '111            ', 'aa    ', 'aa@aa                                             ', '送货上门       ', '货到付款       ', '1111                                              ', 'aa                                                                                                  ', '2009-04-08 20:03:21', '2009-04-08 20:15:19', '完成                ', '<br><br><font color=#993300>aaaa</font><br>2009-4-8 21:56:24<br><br><font color=#993300>sxklnc</font><br>2009-4-8 21:56:55<br><br><font color=#993300>dsfae</font><br>2009-4-8 21:56:59<br><br><font color=#993300>dsfdfs</font><br>2009-4-8 21:57:06<br><br><font color=#993300>sdfdfsdf</font><br>2009-4-8 21:57:10<br><br><font color=#993300>dsfsdfsdf</font><br>2009-4-8 21:57:14<br><br><font color=#993300>sdfsdff</font><br>2009-4-8 21:57:22<br><br><font color=#993300>assssssssssa</font><br>2009-4-8 21:57:37'),
(10, NULL, NULL, NULL, NULL, 1234567890, 7, '777', 77, '77             ', '77', '7                                                 ', '7              ', '7              ', '7     ', '77                                                ', '7              ', '7              ', '7                                                 ', '77                                                                                                  ', '2009-03-10 09:59:38', NULL, '新订单              ', NULL),
(11, NULL, NULL, NULL, NULL, 1234567890, 7, '777', 77, '77             ', '77', '7                                                 ', '7              ', '7              ', '7     ', '77                                                ', '7              ', '7              ', '7                                                 ', '77                                                                                                  ', '2009-03-10 09:59:38', NULL, '新订单              ', NULL),
(12, NULL, NULL, NULL, NULL, 1234567890, 7, '777', 77, '77             ', '77', '7                                                 ', '7              ', '7              ', '7     ', '77                                                ', '7              ', '7              ', '7                                                 ', '77                                                                                                  ', '2009-03-10 09:59:38', NULL, '新订单              ', NULL),
(13, NULL, NULL, NULL, NULL, 1234567890, 7, '777', 77, '77             ', '77', '7                                                 ', '7              ', '7              ', '7     ', '77                                                ', '7              ', '7              ', '7                                                 ', '77                                                                                                  ', '2009-03-10 09:59:38', NULL, '新订单              ', NULL),
(14, NULL, NULL, NULL, NULL, 211634865, 29, '1、> 10、BXH-14/450:单价:122.17元 1 件 共: <font color=#ff0000>122.17</font>元<br><br><hr align=left width=200 size=1 ><br>总价格:<strong><font color=#ff0000>122.17</font></strong>', 122.17, 'tempuser       ', '男', '                                                  ', '               ', '               ', '      ', ',                                                 ', '送货上门       ', '货到付款       ', '                                                  ', '                                                                                                    ', '2009-05-03 22:29:05', NULL, '新订单              ', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `z_package`
--

CREATE TABLE IF NOT EXISTS `z_package` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_productid` int(11) DEFAULT NULL,
  `l_title` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_sort` int(11) DEFAULT '0',
  `l_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `z_package_detail`
--

CREATE TABLE IF NOT EXISTS `z_package_detail` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_packageid` int(11) DEFAULT NULL,
  `l_productid` int(11) DEFAULT NULL,
  `l_price` double DEFAULT NULL,
  `l_sort` int(11) DEFAULT '0',
  `l_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `z_product`
--

CREATE TABLE IF NOT EXISTS `z_product` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_areaid` int(11) DEFAULT NULL,
  `l_areaname` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `l_number` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `l_c_path` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `l_a_path` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `l_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `l_basic` longtext CHARACTER SET utf8,
  `l_extend` longtext CHARACTER SET utf8,
  `l_specifications` longtext CHARACTER SET utf8,
  `l_price1` double DEFAULT '0',
  `l_price2` double DEFAULT '0',
  `l_units` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `l_num` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `l_shuliang` int(11) DEFAULT NULL,
  `l_clicknum` int(11) DEFAULT '0',
  `l_score` int(11) DEFAULT NULL,
  `l_tuijian` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `l_class1` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_class2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_class3` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_class4` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_class5` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_class6` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_class7` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_class8` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_class9` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_class10` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `l_sort` int(11) DEFAULT '0',
  `l_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `z_product`
--

INSERT INTO `z_product` (`l_id`, `l_areaid`, `l_areaname`, `l_number`, `l_c_path`, `l_a_path`, `l_name`, `l_basic`, `l_extend`, `l_specifications`, `l_price1`, `l_price2`, `l_units`, `l_num`, `l_shuliang`, `l_clicknum`, `l_score`, `l_tuijian`, `l_class1`, `l_class2`, `l_class3`, `l_class4`, `l_class5`, `l_class6`, `l_class7`, `l_class8`, `l_class9`, `l_class10`, `l_sort`, `l_views`) VALUES
(1, 14, '15                                      ', NULL, NULL, NULL, '10、BXH-14/450                                                                                      ', '采用超级防腐性能的不锈钢材料制作，拥有高防腐性能和散热量高等优良性能。产品厚度小，节省安装空间，外表采用了严格的抛光工艺，外观时尚，线条流畅。（环保无污染产品', '<P>eeeee</P>', NULL, 147.96, 122.17, '0         ', '0         ', 10, 275, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(2, 14, '15                                      ', NULL, NULL, NULL, '222-22                                                                                              ', '22', '22', NULL, 200, 180, '0         ', '0         ', 2, 55, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(3, 14, '18                                      ', NULL, NULL, NULL, '333                                                                                                 ', '33', '33', NULL, 0, 0, '0         ', '0         ', 3, 22, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(6, 19, '24                                      ', NULL, NULL, NULL, '22-1-1                                                                                              ', '<FONT face=Verdana>22-1-1</FONT>', '<FONT face=Verdana>22-1-1</FONT>', NULL, 0, 0, '0         ', '0         ', 5, 5, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(7, 19, '25                                      ', NULL, NULL, NULL, '22-2-1                                                                                              ', '<FONT face=Verdana>22-2-1</FONT>', '<FONT face=Verdana>22-2-1</FONT>', NULL, 0, 0, '0         ', '0         ', 7, 0, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(8, 19, '25                                      ', NULL, NULL, NULL, '22-2-2                                                                                              ', '<FONT face=Verdana><FONT face=Verdana>22-2-2</FONT></FONT>', '<FONT face=Verdana><FONT face=Verdana>22-2-2</FONT></FONT>', NULL, 0, 0, '0         ', '0         ', 7, 3, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(9, 19, '25                                      ', NULL, NULL, NULL, '22-2-3                                                                                              ', '<FONT face=Verdana>22-2-3</FONT>', '<FONT face=Verdana>22-2-3</FONT>', NULL, 0, 0, '0         ', '0         ', 7, 0, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(10, 19, '25                                      ', NULL, NULL, NULL, '22-2-4                                                                                              ', '<FONT face=Verdana>22-2-4</FONT>', '<FONT face=Verdana>22-2-4</FONT>', NULL, 0, 0, '0         ', '0         ', 7, 6, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(11, 19, '25                                      ', NULL, NULL, NULL, '22-2-5                                                                                              ', '<FONT face=Verdana>22-2-5</FONT>', '<FONT face=Verdana>22-2-5</FONT>', NULL, 0, 0, '0         ', '0         ', 7, 4, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(12, 14, '18                                      ', NULL, NULL, NULL, '33                                                                                                  ', '33', '333', NULL, 0, 0, '0         ', '0         ', 0, 1, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(13, 14, '18                                      ', NULL, NULL, NULL, '444                                                                                                 ', '444', '44', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '不推荐', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(14, 20, '26                                      ', NULL, NULL, NULL, '3-1-1                                                                                               ', '<FONT face=Verdana>3-1-1</FONT>', '<FONT face=Verdana>3-1-1</FONT>', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(15, 20, '26                                      ', NULL, NULL, NULL, '3-1-2                                                                                               ', '<FONT face=Verdana>3-1-2</FONT>', '<FONT face=Verdana>3-1-2</FONT>', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '不推荐', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(16, 20, '26                                      ', NULL, NULL, NULL, '3-1-3                                                                                               ', '<FONT face=Verdana>3-1-3</FONT>', '<FONT face=Verdana>3-1-3</FONT>', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(17, 20, '27                                      ', NULL, NULL, NULL, '3-2-1                                                                                               ', '<FONT face=Verdana>3-2-1</FONT>', '<FONT face=Verdana>3-2-1</FONT>', NULL, 0, 0, '0         ', '0         ', 0, 9, NULL, '不推荐', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(18, 20, '27                                      ', NULL, NULL, NULL, '3-2-2                                                                                               ', '<FONT face=Verdana>3-2-2</FONT>', '<FONT face=Verdana>3-2-2</FONT>', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '不推荐', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(19, 20, '27                                      ', NULL, NULL, NULL, '3-2-3                                                                                               ', '<FONT face=Verdana>3-2-3</FONT>', '<FONT face=Verdana>3-2-3</FONT>', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '不推荐', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(20, 19, '24                                      ', NULL, NULL, NULL, '22-1-2                                                                                              ', '<FONT face=Verdana>22-1-2</FONT>', '<FONT face=Verdana>22-1-2</FONT>', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '推荐  ', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(21, 19, '24                                      ', NULL, NULL, NULL, '22-1-3                                                                                              ', '<FONT face=Verdana>22-1-3</FONT>', '<FONT face=Verdana>22-1-3</FONT>', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '不推荐', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(22, 14, '15                                      ', NULL, NULL, NULL, '333                                                                                                 ', '3333', '33', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '不推荐', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(23, 14, '15                                      ', NULL, NULL, NULL, '4444                                                                                                ', '444', '4444', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '不推荐', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(24, 14, '15                                      ', NULL, NULL, NULL, '111                                                                                                 ', '<P>111</P>', '1111', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '不推荐', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(28, 14, '15                                      ', NULL, NULL, NULL, '55555                                                                                               ', '<FONT face=Verdana>55555</FONT>', '<FONT face=Verdana>55555</FONT>', NULL, 0, 0, '0         ', '0         ', 0, 0, NULL, '不推荐', '', '', '', '', '', '', '', '', '', '', 0, '显示  '),
(29, 4, '深圳', '0-47-49-50', '0-47-49-50', NULL, 'name', '', '', '', 0, 0, NULL, '0', NULL, NULL, NULL, '不推荐', '912', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '显示'),
(30, 4, '深圳', '0-47-49-50', '0-47-49-50', NULL, 'name2', '', '', '', 0, 0, NULL, '0', NULL, NULL, NULL, '不推荐', '912', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `z_productpic`
--

CREATE TABLE IF NOT EXISTS `z_productpic` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_productid` int(11) DEFAULT NULL,
  `l_pic` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `l_ext` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `l_title` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `l_sort` int(11) DEFAULT '0',
  `l_views` varchar(6) CHARACTER SET utf8 DEFAULT '显示',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `z_productpic`
--

INSERT INTO `z_productpic` (`l_id`, `l_productid`, `l_pic`, `l_ext`, `l_title`, `l_sort`, `l_views`) VALUES
(11, 1, '2009033115430021135           ', 'jpg   ', '1111                ', 0, '显示  '),
(14, 1, '2009041013423946488           ', 'jpg   ', '222                 ', 0, '显示  '),
(15, 2, '2009041013445222453           ', 'jpg   ', '                    ', 0, '显示  '),
(16, 1, '2009041109421494986           ', 'jpg   ', '333                 ', 0, '显示  '),
(17, 1, '2009041109422199434           ', 'jpg   ', '444                 ', 0, '显示  '),
(18, 1, '2009041109423624413           ', 'jpg   ', '5555                ', 0, '显示  '),
(19, 1, '2009041109424838483           ', 'jpg   ', NULL, 0, '显示  '),
(20, 1, '2009041109425409859           ', 'jpg   ', NULL, 0, '显示  '),
(21, 1, '2009041109430170671           ', 'jpg   ', NULL, 0, '显示  '),
(22, 1, '2009041109565180110           ', 'jpg   ', NULL, 0, '显示  '),
(23, 1, '2009041109570232254           ', 'jpg   ', NULL, 0, '显示  '),
(24, 1, '2009041721354527025           ', 'jpg   ', '999                 ', 0, '显示  '),
(25, 3, '2009070311400524125           ', 'jpg   ', '                    ', 0, '显示  '),
(26, 3, '2009070311411157251           ', 'jpg   ', '                    ', 0, '显示  '),
(27, 3, '2009070311412051575           ', 'jpg   ', '                    ', 0, '显示  '),
(28, 3, '2009070311412958431           ', 'jpg   ', '                    ', 0, '显示  ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

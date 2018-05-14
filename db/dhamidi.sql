-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 07:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhamidi`
--

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `main_name` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `main_name`, `sort`, `icon`, `url`, `user_id`) VALUES
(2, 'Dashboard', 'dashboard', 1, 'home', 'home', 4),
(3, 'Modules', 'modules', 4, 'home', 'modules', 4),
(5, 'Role/Permission', 'role', 2, 'home', 'role', 4),
(7, 'Users', 'user', 3, 'home', 'users', 2),
(19, 'Portfolio Category', 'portfolio_category', 5, 'home', 'portfolio_category', 2),
(20, 'Portfolio', 'portfolio', 6, 'home', 'portfolio', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules_fileds`
--

CREATE TABLE `modules_fileds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `filed_type` varchar(100) NOT NULL,
  `options` varchar(255) NOT NULL,
  `length` int(11) NOT NULL,
  `required` int(11) NOT NULL DEFAULT '0',
  `module_id` int(11) NOT NULL,
  `is_relation` int(11) NOT NULL,
  `relation_column` varchar(100) DEFAULT NULL,
  `relation_table` varchar(100) DEFAULT NULL,
  `value_column` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules_fileds`
--

INSERT INTO `modules_fileds` (`id`, `name`, `type`, `filed_type`, `options`, `length`, `required`, `module_id`, `is_relation`, `relation_column`, `relation_table`, `value_column`) VALUES
(1, 'name', 'VARCHAR', 'input', '', 100, 1, 15, 0, NULL, NULL, NULL),
(2, 'gender', 'VARCHAR', 'radio', 'male,female', 100, 1, 15, 0, NULL, NULL, NULL),
(3, 'relationship_status', 'VARCHAR', 'select', 'single,married,divorced,widowed', 100, 1, 15, 0, NULL, NULL, NULL),
(4, 'image', 'VARCHAR', 'file', 'jpg,png,jpeg,gif', 100, 1, 15, 0, NULL, NULL, NULL),
(5, 'education', 'VARCHAR', 'checkbox', 'matric,inter,bachlor', 255, 1, 15, 0, NULL, NULL, NULL),
(6, 'message', 'TEXT', 'textarea', '', 255, 1, 15, 0, NULL, NULL, NULL),
(7, 'Name', 'VARCHAR', 'input', '', 100, 1, 16, 0, NULL, NULL, NULL),
(8, 'Icon', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 255, 1, 16, 0, NULL, NULL, NULL),
(9, 'Name', 'VARCHAR', 'input', '', 100, 1, 17, 0, NULL, NULL, NULL),
(10, 'Icon', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 255, 1, 17, 0, NULL, NULL, NULL),
(11, 'Title', 'VARCHAR', 'input', '', 255, 1, 18, 0, NULL, NULL, NULL),
(12, 'Description', 'TEXT', 'textarea', '', 500, 1, 18, 0, NULL, NULL, NULL),
(13, 'category', 'INT', 'input', '', 11, 1, 18, 1, 'id', 'blog_category', 'Name'),
(14, 'image', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 255, 1, 18, 0, NULL, NULL, NULL),
(15, 'Name', 'VARCHAR', 'input', '', 255, 1, 19, 0, NULL, NULL, NULL),
(16, 'Image', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 255, 1, 19, 0, NULL, NULL, NULL),
(17, 'Name', 'VARCHAR', 'input', '', 255, 1, 20, 0, NULL, NULL, NULL),
(18, 'Image', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 255, 1, 20, 0, NULL, NULL, NULL),
(19, 'Category', 'INT', 'input', '', 11, 1, 20, 1, 'id', 'portfolio_category', 'Name');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `view_all` int(11) NOT NULL DEFAULT '0',
  `created` int(11) DEFAULT '0',
  `edit` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `disable` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `module_id`, `user_id`, `user_type_id`, `view`, `view_all`, `created`, `edit`, `deleted`, `disable`) VALUES
(199, 2, 2, 1, 1, 1, 1, 1, 1, 1),
(200, 3, 2, 1, 1, 1, 1, 1, 1, 1),
(201, 5, 2, 1, 1, 1, 1, 1, 1, 1),
(202, 7, 2, 1, 1, 1, 1, 1, 1, 1),
(203, 19, 2, 1, 1, 1, 1, 1, 1, 1),
(204, 20, 2, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Category` int(11) NOT NULL,
  `template` int(11) NOT NULL DEFAULT '1',
  `html` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `Name`, `Image`, `Category`, `template`, `html`, `user_id`, `created_at`) VALUES
(5, 'test21', '/uploads/mobilink2.jpg', 0, 2, '', 2, '2018-05-04 11:21:43'),
(6, 'test21', '/uploads/mobilink3.jpg', 0, 1, '', 2, '2018-05-04 11:27:48'),
(18, 'aas', '', 0, 1, '<div class="container-fluid">\r\n	<section class="wow fadeIn no-padding-top">\r\n		<div class="row vertical-align-middle">\r\n			<div style=" " class=" col-md-6 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle">\r\n				<img class="pull-right" src="http://localhost/dhamidi/front_assets/images/Capture.png" alt='''' />\r\n			</div>\r\n			<div class="col-md-6 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle ">\r\n				<div class="row vertical-align-middle">\r\n					<div class="col-md-12 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle">\r\n						<img src="http://localhost/dhamidi/front_assets/images/Capture2.png" alt='''' />\r\n					</div>\r\n				</div>\r\n				<div style="padding-top: 10px;" class="row vertical-align-middle">\r\n					<div style=" " class="col-md-12 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle">\r\n						<img src="http://localhost/dhamidi/front_assets/images/Capture2.png" alt='''' />\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="wow fadeIn no-padding-bottom fadeInUp" style="padding-top: 0px !important;">\r\n		<div class="container">\r\n			<div class="row">\r\n				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 center-col text-center last-paragraph-no-margin">\r\n					<h5 class="alt-font text-extra-dark-gray font-weight-600">\r\n						Experience Our Work\r\n					</h5>\r\n					<p class="width-80 center-col display-inline-block xs-width-100">\r\n						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n					</p><br />\r\n					\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-08 08:11:22'),
(43, 'Mobilink', '/uploads/1.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn">\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100">\r\n			<div class="swiper-wrapper">\r\n				<div class="swiper-slide cover-background full-screen">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img1.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:01:32'),
(44, 'ENGRO 50 YEARS', '/uploads/23.jpg', 1, 2, '<div class="container-fluid">\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:04:59'),
(45, 'MOBILINK 3G', '/uploads/35.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:05:44'),
(46, 'MOBILINK JAZBA', '/uploads/45.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:06:05'),
(47, 'MASHREQ BANK', '/uploads/56.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:06:25'),
(48, 'MASHREQ BANK', '/uploads/56.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:06:25'),
(49, 'MOBILINK JAZBA', '/uploads/45.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:06:05'),
(50, 'MOBILINK JAZBA', '/uploads/45.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:06:05'),
(51, 'MOBILINK 3G', '/uploads/35.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:05:44'),
(52, 'MOBILINK 3G', '/uploads/35.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 10:23:26'),
(53, 'Mobilink', '/uploads/1.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn">\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100">\r\n			<div class="swiper-wrapper">\r\n				<div class="swiper-slide cover-background full-screen">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img1.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:01:32'),
(54, 'ENGRO 50 YEARS', '/uploads/23.jpg', 1, 2, '<div class="container-fluid">\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:04:59'),
(55, 'MASHREQ BANK', '/uploads/56.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="opacity-medium z-index-0">\r\n		</div>\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">\r\n			<div class="swiper-wrapper" style="transition-duration: 0ms;">\r\n				<div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;">\r\n					<img src="http://localhost/dhamidi/front_assets/images/single-project-07-img3.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 07:06:25'),
(58, 'MOBILINK 3G', '/uploads/36.jpg', 1, 1, '<div>\r\n	<section class="no-padding full-screen position-relative wow fadeIn">\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100">\r\n			<div class="swiper-wrapper">\r\n				<div class="swiper-slide cover-background full-screen">\r\n					<img src="http://localhost/dhamidi//uploads/1image.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="top-space wow fadeIn no-padding-bottom fadeInUp" style="padding-top: 0px !important; visibility: visible; animation-name: fadeInUp;">\r\n		<div class="container">\r\n			<div class="row">\r\n				<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 center-col text-center last-paragraph-no-margin">\r\n					<h5 class="alt-font text-extra-dark-gray font-weight-600">\r\n						Experience Our Work\r\n					</h5>\r\n					<p class="width-80 center-col display-inline-block xs-width-100">\r\n						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n					</p><br />\r\n					\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="top-space wow fadeIn no-padding-top" style="margin-top: 60px; visibility: visible; animation-name: fadeIn;">\r\n		<div class="container-fluid">\r\n			<div class="row vertical-align-middle">\r\n				<div style=" " class=" col-md-6 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle">\r\n					<img style="height: 541px;width: 403px;" class="pull-right" src="http://localhost/dhamidi//uploads/2image.jpg" alt='''' />\r\n				</div>\r\n				<div class="col-md-6 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle ">\r\n					<div class="row vertical-align-middle">\r\n						<div class="col-md-12 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle">\r\n							<img style="height: 265px; width: 399px;" src="http://localhost/dhamidi//uploads/3image.jpg" alt='''' />\r\n						</div>\r\n					</div>\r\n					<div style="padding-top: 10px;" class="row vertical-align-middle">\r\n						<div style=" " class="col-md-12 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle">\r\n							<img style="height: 265px; width: 399px;" src="http://localhost/dhamidi//uploads/4image.jpg" alt='''' />\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="wow fadeIn no-padding-top top-space" style="visibility: visible;animation-name: fadeIn;margin-top: -65px;">\r\n		<div class="container-fluid">\r\n			<div class="row">\r\n				<div class="col-lg-8 col-md-12 center-col text-center margin-35px-bottom xs-margin-15px-bottom wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">\r\n					<img src="http://localhost/dhamidi//uploads/5image.jpg" class="width-100" alt="" />\r\n				</div>\r\n				\r\n				\r\n				<div class="col-lg-8 col-md-12 center-col text-center margin-35px-bottom xs-margin-15px-bottom wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">\r\n					<img src="http://localhost/dhamidi//uploads/6image.jpg" class="width-100" alt="" />\r\n				</div>\r\n				\r\n				\r\n				<div class="col-lg-8 col-md-12 center-col text-center margin-35px-bottom xs-margin-15px-bottom wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">\r\n					<img src="http://localhost/dhamidi//uploads/7image.jpg" class="width-100" alt="" />\r\n				</div>\r\n				\r\n				\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 08:17:25'),
(66, 'BURGUNDY	', '/uploads/67.jpg', 1, 2, '<div class="container-fluid">\r\n	<section class="no-padding full-screen position-relative wow fadeIn">\r\n		<div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100">\r\n			<div class="swiper-wrapper">\r\n				<div class="swiper-slide cover-background full-screen">\r\n					<img src="http://localhost/dhamidi//uploads/2image8.jpg" style="height: 100vh;" alt='''' />\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="wow fadeIn no-padding parallax one-fifth-screen sm-height-500px xs-height-350px background-position-x-50" data-stellar-background-ratio="0.4" style="background-image: url(http://localhost/dhamidi/front_assets/images/bgdy/22.jpg); background-position: 20px -41.6px; visibility: visible; animation-name: fadeIn; height: 900px;">\r\n		<div class="container">\r\n			<div class="row">\r\n				<div class="col-md-12">\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="wow fadeIn   animated animated" style="visibility: visible; animation-name: fadeIn;">\r\n		<div class="container">\r\n			<div class="row">\r\n				<div class="col-md-4 col-sm-4 col-xs-12 xs-margin-30px-bottom xs-text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">\r\n					<div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-lr pull-left xs-margin-15px-bottom">\r\n						<em class="icon-desktop text-medium-gray icon-extra-medium top-6"></em>\r\n					</div>\r\n					<div class="col-md-9 col-sm-8 col-xs-12 no-padding">\r\n						 <span class="margin-5px-bottom text-extra-dark-gray alt-font display-block font-weight-600">Digital Solutions</span>\r\n						<p class="width-75 md-width-100 no-margin-bottom">\r\n							Lorem Ipsum is simply text the printing and typesetting standard industry.\r\n						</p>\r\n					</div>\r\n				</div>\r\n				\r\n				\r\n				<div class="col-md-4 col-sm-4 col-xs-12 xs-margin-15px-bottom xs-text-center wow fadeInUp" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">\r\n					<div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-lr pull-left xs-margin-15px-bottom">\r\n						<em class="icon-book-open text-medium-gray icon-extra-medium top-6"></em>\r\n					</div>\r\n					<div class="col-md-9 col-sm-8 col-xs-12 no-padding">\r\n						 <span class="margin-5px-bottom text-extra-dark-gray alt-font display-block font-weight-600">Brand Communications</span>\r\n						<p class="width-75 md-width-100 no-margin-bottom">\r\n							Lorem Ipsum is simply text the printing and typesetting standard industry.\r\n						</p>\r\n					</div>\r\n				</div>\r\n				\r\n				\r\n				<div class="col-md-4 col-sm-4 col-xs-12 xs-text-center wow fadeInUp" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">\r\n					<div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-lr pull-left xs-margin-15px-bottom">\r\n						<em class="icon-gift text-medium-gray icon-extra-medium top-6"></em>\r\n					</div>\r\n					<div class="col-md-9 col-sm-8 col-xs-12 no-padding">\r\n						 <span class="margin-5px-bottom text-extra-dark-gray alt-font display-block font-weight-600">Creative Strategy</span>\r\n						<p class="width-75 md-width-100 no-margin-bottom">\r\n							Lorem Ipsum is simply text the printing and typesetting standard industry.\r\n						</p>\r\n					</div>\r\n				</div>\r\n				\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="wow fadeIn no-padding parallax one-fifth-screen sm-height-500px xs-height-350px background-position-x-50" data-stellar-background-ratio="0.4" style="background-image: url(http://localhost/dhamidi/front_assets/images/bgdy/1.jpg); background-position: 20px -41.6px; visibility: visible; animation-name: fadeIn; height: 900px;">\r\n		<div class="container">\r\n			<div class="row">\r\n				<div class="col-md-12">\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="wow fadeIn big-section" style="visibility: visible; animation-name: fadeIn;">\r\n		<div class="container">\r\n			<div class="row">\r\n				<div class="col-lg-12 center-col text-center">\r\n					<em class="fa fa-quote-left icon-small text-deep-pink display-block margin-25px-bottom"></em>\r\n					<h4 class="alt-font text-extra-dark-gray font-weight-600">\r\n						This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.\r\n					</h4> <span class="text-uppercase text-extra-small alt-font letter-spacing-3 text-medium-gray">Mattie Stepanek</span>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="wow fadeIn no-padding parallax one-fifth-screen sm-height-500px xs-height-350px background-position-x-50" data-stellar-background-ratio="0.4" style="background-image: url(http://localhost/dhamidi/front_assets/images/bgdy/33.jpg); background-position: 20px -41.6px; visibility: visible; animation-name: fadeIn; height: 900px;">\r\n		<div class="container">\r\n			<div class="row">\r\n				<div class="col-md-12">\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="wow fadeIn no-padding" style="visibility: visible; animation-name: fadeIn;">\r\n		<div class="container-fluid no-padding">\r\n			<div class="row">\r\n				<div class="col-md-12 no-padding">\r\n					<img src="http://localhost/dhamidi/front_assets/images/bgdy/5.jpg" alt="" class="width-100" style="height: 550px;" />\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n	<section class="wow fadeIn bg-light-gray" style="visibility: visible; animation-name: fadeIn;">\r\n		<div class="container">\r\n			<div class="row">\r\n				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-col margin-eight-bottom text-center">\r\n					<div class="alt-font text-medium-gray margin-10px-bottom text-uppercase text-small">\r\n						Our recent works\r\n					</div>\r\n					<h5 class="alt-font text-extra-dark-gray font-weight-600">\r\n						New stunning projects for our amazing clients\r\n					</h5>\r\n				</div>\r\n			</div>\r\n		</div>\r\n		<div class="container-fluid padding-five-lr">\r\n			<div class="row no-margin">\r\n				<div class="filter-content overflow-hidden">\r\n					<ul class="portfolio-grid work-4col gutter-large hover-option7" style="position: relative; height: 330.25px;">\r\n						<li class="grid-sizer">\r\n						</li>\r\n						\r\n						<li class="grid-item web branding design fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 0px;">\r\n							<a href="single-project-page-01.html"></a>\r\n							<figure>\r\n								<div class="portfolio-img">\r\n									<img src="http://localhost/dhamidi/front_assets/images/bgdy/9.jpg" alt="" />\r\n								</div>\r\n								<figcaption>\r\n									<div class="portfolio-hover-main text-center last-paragraph-no-margin">\r\n										<div class="portfolio-hover-box vertical-align-middle">\r\n											<div class="portfolio-hover-content position-relative">\r\n												 <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Naked Soap</span>\r\n												<p class="text-medium-gray text-uppercase text-extra-small">\r\n													Web and Photography\r\n												</p>\r\n											</div>\r\n										</div>\r\n									</div>\r\n								</figcaption>\r\n							</figure>\r\n						</li>\r\n						\r\n						\r\n						<li class="grid-item design photography fadeInUp" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 24.9822%; top: 0px;">\r\n							<a href="single-project-page-02.html"></a>\r\n							<figure>\r\n								<div class="portfolio-img">\r\n									<img src="http://localhost/dhamidi/front_assets/images/bgdy/8.jpg" alt="" />\r\n								</div>\r\n								<figcaption>\r\n									<div class="portfolio-hover-main text-center last-paragraph-no-margin">\r\n										<div class="portfolio-hover-box vertical-align-middle">\r\n											<div class="portfolio-hover-content position-relative">\r\n												 <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Berlin Design</span>\r\n												<p class="text-medium-gray text-uppercase text-extra-small">\r\n													Branding and Brochure\r\n												</p>\r\n											</div>\r\n										</div>\r\n									</div>\r\n								</figcaption>\r\n							</figure>\r\n						</li>\r\n						\r\n						\r\n						<li class="grid-item web branding design photography fadeInUp" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 49.9643%; top: 0px;">\r\n							<a href="single-project-page-03.html"></a>\r\n							<figure>\r\n								<div class="portfolio-img">\r\n									<img src="http://localhost/dhamidi/front_assets/images/bgdy/10.jpg" alt="" />\r\n								</div>\r\n								<figcaption>\r\n									<div class="portfolio-hover-main text-center last-paragraph-no-margin">\r\n										<div class="portfolio-hover-box vertical-align-middle">\r\n											<div class="portfolio-hover-content position-relative">\r\n												 <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Abstract Comics</span>\r\n												<p class="text-medium-gray text-uppercase text-extra-small">\r\n													Branding and Identity\r\n												</p>\r\n											</div>\r\n										</div>\r\n									</div>\r\n								</figcaption>\r\n							</figure>\r\n						</li>\r\n						\r\n						\r\n						<li class="grid-item advertising branding design photography fadeInUp" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 74.9465%; top: 0px;">\r\n							<a href="single-project-page-04.html"></a>\r\n							<figure>\r\n								<div class="portfolio-img">\r\n									<img src="http://localhost/dhamidi/front_assets/images/bgdy/9.jpg" alt="" />\r\n								</div>\r\n								<figcaption>\r\n									<div class="portfolio-hover-main text-center last-paragraph-no-margin">\r\n										<div class="portfolio-hover-box vertical-align-middle">\r\n											<div class="portfolio-hover-content position-relative">\r\n												 <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Teabag Collection</span>\r\n												<p class="text-medium-gray text-uppercase text-extra-small">\r\n													Web and Photography\r\n												</p>\r\n											</div>\r\n										</div>\r\n									</div>\r\n								</figcaption>\r\n							</figure>\r\n						</li>\r\n						\r\n					</ul>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</section>\r\n</div>', 2, '2018-05-09 10:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_category`
--

CREATE TABLE `portfolio_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_category`
--

INSERT INTO `portfolio_category` (`id`, `Name`, `Image`, `user_id`, `created_at`) VALUES
(1, 'Web and Photography', '/uploads/9.jpg', 2, '2018-05-03 10:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(2, 'admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 1),
(4, 'admin1', 'admin1@gmail.com', 'e6e061838856bf47e1de730719fb2609', 1),
(5, 'Udata', 'Udata@gmail.com', '5327b0d1bfa868acb9baac5a9d901815', 14),
(6, 'mob', 'admindd@gmail.com', '6cf0a3d27fdc438e4ee601448e452e48', 14),
(9, 'rtrt', 'adminsdee@milya.com', '532b7cbe070a3579f424988a040752f2', 14),
(10, 'musa', 'musa@gmail.com', 'c45d99e5638d1f9f801b545096003a8d', 14),
(12, 'rtrteree', 'adminsdeee11@milya.com', '0acf3d81f151df5994a88f039e636228', 14),
(13, 'musaeeee', 'mus22a@gmail.com', 'dbc4d84bfcfe2284ba11beffb853a8c4', 14),
(14, 'hero11', 'hero11@milya.com', '0acf3d81f151df5994a88f039e636228', 14),
(15, 'hero22', 'hero22@gmail.com', 'dbc4d84bfcfe2284ba11beffb853a8c4', 14),
(16, 'rest11', 'rest11@milya.com', '0acf3d81f151df5994a88f039e636228', 14),
(17, 'west22', 'hwest22@gmail.com', 'dbc4d84bfcfe2284ba11beffb853a8c4', 14),
(18, 'opp', 'opp@milya.com', 'e201220da86c13f4d9badaab658fa973', 14),
(19, 'urrr', 'urrr@gmail.com', '549ce24fb62238d013a6e222cb4d41d8', 14),
(20, 'DADU', 'DADU@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 14),
(21, 'AHSAN', 'AHSAN@gmail.com', 'd6a9a933c8aafc51e55ac0662b6e4d4a', 14),
(22, '21321', 'dasdas', 'd41d8cd98f00b204e9800998ecf8427e', 14),
(26, 'xyzmg', 'xyzmg@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 14),
(27, 'mojjojo1', 'mojjojo1@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `user_id`) VALUES
(1, 'Admin', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules_fileds`
--
ALTER TABLE `modules_fileds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `modules_fileds`
--
ALTER TABLE `modules_fileds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

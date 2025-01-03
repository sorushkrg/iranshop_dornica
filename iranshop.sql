-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2025 at 08:23 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iranshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL,
  `lastName` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL,
  `userName` varchar(64) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstName`, `lastName`, `userName`, `password`, `created_at`, `status`) VALUES
(1, 'سروش', 'کارگشا', 'sorushkg', '123456789', '2024-12-28 08:29:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `authors_blog`
--

DROP TABLE IF EXISTS `authors_blog`;
CREATE TABLE IF NOT EXISTS `authors_blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL,
  `lastName` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL,
  `rules` tinyint(1) NOT NULL COMMENT 'قوانین',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `authors_blog`
--

INSERT INTO `authors_blog` (`id`, `firstName`, `lastName`, `rules`, `status`) VALUES
(1, 'سروش', 'کارگشا', 1, 1),
(2, 'سامان ', 'کارگشا', 1, 1),
(3, 'علی', 'احمدی', 1, 1),
(4, 'حسین', 'نوریان', 1, 1),
(5, 'سامان', ' رضایی', 1, 1),
(6, 'علی ', 'حاتمی', 1, 1),
(7, 'نیکان', 'سالیانه', 1, 1),
(10, 'علی', 'رضویان', 1, 1),
(11, 'مسعود', 'کارگشا', 1, 1),
(12, 'ایلیا', 'افرین', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `best_suggest`
--

DROP TABLE IF EXISTS `best_suggest`;
CREATE TABLE IF NOT EXISTS `best_suggest` (
  `id` int NOT NULL AUTO_INCREMENT,
  `model_name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL,
  `real_price` varchar(355) COLLATE utf8mb4_persian_ci NOT NULL,
  `discount_price` varchar(355) COLLATE utf8mb4_persian_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `best_suggest`
--

INSERT INTO `best_suggest` (`id`, `model_name`, `real_price`, `discount_price`, `image`, `status`) VALUES
(1, 'هنذفری بلوتوثی شیائومی', '1.100.000', '1.050.000', '6.jpg', 1),
(2, 'ساعت هوشمند شیائومی', '1.300.000', '1.150.000', '2.jpg', 1),
(3, 'گوشی HONOR m3', '1.500.000', '1.300.000', '1.jpg', 1),
(4, 'کاپشن زمستانه', '100.000', '90.000', '5.jpg', 1),
(5, 'لپ تاپ ایسوس', '30.000.000', '25.000.000', '7.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

DROP TABLE IF EXISTS `blog_details`;
CREATE TABLE IF NOT EXISTS `blog_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `blog_id` int NOT NULL,
  `category_id` int NOT NULL,
  `author_id` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `rate` varchar(16) COLLATE utf8mb4_persian_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  KEY `category_id` (`category_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`id`, `blog_id`, `category_id`, `author_id`, `description`, `rate`, `status`) VALUES
(15, 1, 1, 1, 'ساعت هوشمند اپل را می‌توان به عنوان یکی از محبوب‌ترین اسمارت واچ‌های موجود در بازار معرفی کرد که توانسته همانند گوشی‌های آیفون، نظر کاربران زیادی را به خود جلب کند، اما آیا اطلاعات کامل و جامعی پیرامون اپل واچ در اختیار دارید؟ در این مقاله قصد داریم هر آن چه لازم است پیرامون اپل واچ بدانید را مورد بررسی و ارزیابی قرار دهیم. در صورتی که قصد دارید یک راهنمای خرید اپل واچ که نکات گوناگون پیرامون این محصول را پوشش داده باشد مطالعه کنید، با ما در تکنولایف همراه باشید.', '5.0', 1),
(16, 2, 2, 2, 'مجموعه تلویزیونی Friends که بین سال‌های 1994 تا 2004 پخش شد، پر از لحظات خنده‌دار، احساسی و به‌یادماندنی است که همچنان در دل طرفداران جای دارد. این سیتکام با شخصیت‌های جذاب و شوخی‌های ماندگارش، سکانس‌هایی را به وجود آورد که نه‌تنها بخشی از فرهنگ پاپ شدند', '5.0', 1),
(17, 3, 3, 3, 'ایرپادها از جمله محبوب‌ترین گجت‌های صوتی در بازار هستند که توسط برندهای مختلف تولید می‌شوند. این محصولات به دلیل راحتی در استفاده، کیفیت صدا، و طراحی بی‌سیم خود محبوبیت زیادی پیدا کرده‌اند. در ادامه به معرفی محبوب‌ترین و بهترین ایرپادها در بازار می‌پردازیم:', '4.3', 1),
(18, 4, 4, 4, 'شیاومی (Xiaomi) همواره به عنوان یکی از برندهای پیشرو در زمینه تولید گوشی‌های هوشمند و فناوری‌های نوین شناخته می‌شود. این برند چینی که در سال‌های اخیر رشد چشمگیری داشته است، به طور مداوم مدل‌های جدیدی از گوشی‌های هوشمند، تبلت‌ها، گجت‌ها و دستگاه‌های هوشمند را معرفی می‌کند.\r\n\r\nاگر منظورتان از \"نسخه جدید شیاومی\"، جدیدترین مدل‌های گوشی یا محصولات دیگر این برند باشد، در اینجا برخی از جدیدترین نسخه‌ها و محصولات شیاومی که در بازارهای جهانی معرفی شده‌اند، آورده شده است. توجه داشته باشید که برخی از این مدل‌ها ممکن است بسته به منطقه و تاریخ عرضه، متفاوت باشند', '4.0', 1),
(19, 5, 5, 5, 'کتاب‌های رمانتیک همواره جایگاه ویژه‌ای در دل خوانندگان دارند، چرا که دنیای پر از احساسات و روابط عاشقانه‌ای را به تصویر می‌کشند که هم در دنیای واقعی و هم در دنیای داستانی قابل لمس است. این کتاب‌ها نه تنها به زندگی عاطفی شخصیت‌ها می‌پردازند، بلکه می‌توانند آموزه‌هایی درباره عشق، انتخاب‌های زندگی و پیچیدگی‌های روابط انسانی به خواننده ارائه دهند. در اینجا چند کتاب رمانتیک معروف و محبوب را معرفی می‌کنم که می‌توانند برای علاقه‌مندان به این ژانر جذاب باشند:', '4.6', 1),
(20, 6, 6, 6, 'تمیزکننده‌های مدرن به محصولات و دستگاه‌هایی اطلاق می‌شود که با استفاده از تکنولوژی‌های پیشرفته برای تمیز کردن و نظافت محیط‌ها و سطوح مختلف طراحی شده‌اند. این تمیزکننده‌ها علاوه بر بهره‌مندی از مواد شوینده جدید و مؤثر، معمولاً از فناوری‌های نوین مانند هوش مصنوعی، رباتیک، و دستگاه‌های خودکار بهره می‌برند. در زیر به برخی از انواع تمیزکننده‌های مدرن اشاره می‌کنیم:', '3.0', 1),
(21, 9, 11, 6, 'بازی‌های Resident Evil (رزیدنت اویل) به عنوان یکی از محبوب‌ترین فرنچایزهای ترس و بقا، برای پلتفرم‌های متعددی از جمله کنسول‌ها و رایانه‌های شخصی عرضه شده‌اند. با گسترش بازی‌های موبایلی، تعدادی از نسخه‌های این مجموعه یا بازی‌های مرتبط با آن نیز برای آیفون (iOS) منتشر شده‌اند. در ادامه به بررسی بازی‌های مرتبط با Resident Evil برای آیفون می‌پردازیم:', '5.0', 1),
(22, 10, 12, 1, 'ریش تراش های المانی تیز', '5.0', 1),
(23, 11, 7, 11, 'دیزاین های بی نظیر و عالی ', '3.0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_index`
--

DROP TABLE IF EXISTS `blog_index`;
CREATE TABLE IF NOT EXISTS `blog_index` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'ادرس عکس',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `blog_index`
--

INSERT INTO `blog_index` (`id`, `name`, `image`, `status`) VALUES
(1, 'لوازم آشپزی مورد نیاز من', 'lavazem.jpg', 1),
(2, 'لوازم آشپزی مورد نیاز من.', 'bag.jpg', 1),
(3, 'چرا نباید در هوای بارانی در فصل ', 'car.jpg', 1),
(4, 'چادر ضد آب یا پارچه ای؟', 'chador.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_page`
--

DROP TABLE IF EXISTS `blog_page`;
CREATE TABLE IF NOT EXISTS `blog_page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `category_id` int NOT NULL,
  `content` text COLLATE utf8mb4_persian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'عکس',
  `sort` int NOT NULL COMMENT 'دسته بندی ',
  `rules` tinyint(1) NOT NULL COMMENT 'قوانین',
  `published_date` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `blog_page`
--

INSERT INTO `blog_page` (`id`, `author_id`, `category_id`, `content`, `image`, `sort`, `rules`, `published_date`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 1, 'ساعت های مچی هوشمند اپل در رنگ های سفید و مشکی', '1.jpg', 1, 1, '2024-12-13 16:57:05', '2024-12-12 20:30:00', '2024-12-13 16:57:05', 1),
(2, 2, 2, 'یکی از به‌یادماندنی‌ترین دیالوگ‌ها و لحظات سریال، بحث معروف «ما توی استراحت بودیم» بین راس و ریچل است. این موضوع نه تنها بارها در سریال تکرار می‌شود، بلکه به یکی از نمادهای فرندز تبدیل شد', '2.jpg', 2, 1, '2024-12-13 16:58:19', '2024-12-12 20:30:00', '2024-12-13 16:58:19', 1),
(3, 3, 3, 'کیفیت صدا: خوب با بیس مناسب، مخصوصاً نسبت به قیمت\r\nعمر باتری: 4-6 ساعت (با کیس تا 20 ساعت).', '3.jpg', 3, 1, '2024-12-13 17:00:48', '2024-12-12 20:30:00', '2024-12-13 17:00:48', 1),
(4, 4, 4, 'شیائومی 14 اولترا: این پرچمدار با تمرکز بر عکاسی، از حسگر 1 اینچی Sony LYT-900 و لنز لایکا با دیافراگم متغیر بهره می‌برد. همچنین پردازنده Snapdragon 8 Gen 3 و گزینه‌های حافظه تا 1 ترابایت، عملکردی بی‌نظیر ارائه می‌دهند. این مدل دارای پک جانبی مخصوص عکاسی نیز است که گوشی را شبیه یک دوربین حرفه‌ای می‌کند', '4.jpg', 4, 1, '2024-12-13 17:02:06', '2024-12-12 20:30:00', '2024-12-13 17:02:06', 1),
(5, 5, 5, 'کتاب های رمانتیک و زیبا', '5.jpg', 5, 1, '2024-12-14 18:33:32', '2024-12-14 18:33:32', '2024-12-14 18:33:32', 1),
(6, 6, 6, 'تمیز کننده های مدرن نانو که هیچوقت کثیف نمی شود', '6.jpg', 6, 1, '2024-12-14 18:42:21', '2024-12-14 18:42:21', '2024-12-14 18:42:21', 1),
(9, 6, 11, 'رزیدنت اویل', '11.jpg', 7, 1, '2024-12-14 18:42:21', '2024-12-14 18:42:21', '2024-12-14 18:42:21', 1),
(10, 1, 12, 'ریش تراش های عالی', '12_1.jpg', 8, 1, '2024-12-31 20:30:00', '2025-01-01 14:47:14', '2025-01-01 15:40:53', 1),
(11, 11, 7, 'خانه زیبا', '7.jpg', 9, 1, '2024-12-31 20:30:00', '2025-01-01 15:39:41', '2025-01-01 15:39:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_blog`
--

DROP TABLE IF EXISTS `category_blog`;
CREATE TABLE IF NOT EXISTS `category_blog` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `category_title` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام دسته بندی ',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'عکس دسته بندی ',
  `sort` int NOT NULL COMMENT 'دسته بندی',
  `rules` tinyint(1) NOT NULL COMMENT 'قوانین',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='دسته بندی بلاگ';

--
-- Dumping data for table `category_blog`
--

INSERT INTO `category_blog` (`id`, `category_title`, `image`, `sort`, `rules`, `status`) VALUES
(1, 'ساعت مچی هوشمند اپل', '1.jpg', 1, 1, 1),
(2, 'سکانس های بیادماندنی فرندز', '2.jpg', 2, 1, 1),
(3, 'محبوب ترین ایرپادها', '3.jpg', 3, 1, 1),
(4, 'نسخه جدید شائومی', '4.jpg', 4, 1, 1),
(5, 'تاب های رمانتیک', '5.jpg', 5, 1, 1),
(6, 'تمیز کننده های مدرن', '6.jpg', 6, 1, 1),
(7, 'قدم هایی برای خانه ای زیبا تر', '7.jpg', 7, 1, 1),
(8, ' استایل پاییزی', '8.jpg', 8, 1, 1),
(9, 'پرچمدارهای جدید سامسونگ', '9.jpg', 9, 1, 1),
(10, 'ایستراگ های بازی دوم', '10.jpg', 10, 1, 1),
(11, 'معرفی رزیدنت اویل برای آیفون', '11.jpg', 11, 1, 1),
(12, 'بهترین ریش تراش بازار', '12.jpg', 12, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_index`
--

DROP TABLE IF EXISTS `category_index`;
CREATE TABLE IF NOT EXISTS `category_index` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `category_index`
--

INSERT INTO `category_index` (`id`, `name`, `image`, `status`) VALUES
(1, 'موبایل', 'mobile.webp', 1),
(2, 'زیبایی', 'biutiful.webp', 1),
(3, 'کتاب و دفتر', 'book.webp', 1),
(4, 'کالای دیجیتال', 'digital.webp', 1),
(5, 'سوپر مارکت', 'market.webp', 1),
(6, 'مد و پوشاک', 'mode.webp', 1),
(7, 'ابزارآلات', 'tools.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment_blog`
--

DROP TABLE IF EXISTS `comment_blog`;
CREATE TABLE IF NOT EXISTS `comment_blog` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `blog_id` int NOT NULL COMMENT 'ردیف بلاگ',
  `parent_id` int NOT NULL DEFAULT '0' COMMENT 'ردیف والد',
  `user_id` int DEFAULT NULL COMMENT 'ردیف کاربر ثبت نام شده',
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام',
  `subject` varchar(32) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'موضوع',
  `content` varchar(128) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'کامنت',
  `email` varchar(64) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'ایمیل',
  `ip` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'ای پی',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'زمان ساخت',
  `Approveed_by` int DEFAULT NULL COMMENT 'کسی که تایید کرده',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'وضعیت',
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='کامنت های بلاگ';

--
-- Dumping data for table `comment_blog`
--

INSERT INTO `comment_blog` (`id`, `blog_id`, `parent_id`, `user_id`, `name`, `subject`, `content`, `email`, `ip`, `created_at`, `Approveed_by`, `status`) VALUES
(12, 1, 0, NULL, 'علی احمدی', NULL, 'شیک و بادوام', NULL, '::1', '2024-12-23 20:44:17', NULL, 1),
(13, 1, 12, NULL, 'سامان کارگشا', NULL, 'موافقم', NULL, '::1', '2024-12-23 20:46:11', NULL, 1),
(14, 1, 0, 1, 'سروش کارگشا', NULL, 'عالی و شیک', NULL, '::1', '2024-12-23 21:29:47', NULL, 1),
(15, 1, 14, 2, 'سامان کارگشا', NULL, 'موافق نیستم', NULL, '::1', '2024-12-23 21:31:33', NULL, 1),
(16, 1, 0, NULL, 'طاها قادری', NULL, 'قیمت منااسب', NULL, '::1', '2024-12-24 09:16:23', NULL, 1),
(17, 1, 0, NULL, 'امیر فلاحتی', NULL, 'موافقم', NULL, '::1', '2024-12-24 09:20:24', NULL, 1),
(18, 1, 17, NULL, 'علی سالاری', NULL, 'موافق نیستم', NULL, '::1', '2024-12-24 09:24:10', NULL, 1),
(19, 1, 18, 1, 'سروش کارگشا', NULL, 'اشتباه می کنید', NULL, '::1', '2024-12-25 14:38:50', NULL, 1),
(20, 11, 0, NULL, 'بارمان خورشیدی', NULL, 'دیزاینی عالی و خوب', NULL, '::1', '2025-01-01 15:45:18', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `digital_product`
--

DROP TABLE IF EXISTS `digital_product`;
CREATE TABLE IF NOT EXISTS `digital_product` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'ادرس عکس',
  `discount_price` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'قیمت با تخفیف',
  `real_price` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'قیمت بدون تخفیف',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `digital_product`
--

INSERT INTO `digital_product` (`id`, `name`, `image`, `discount_price`, `real_price`, `status`) VALUES
(1, 'لپ تاپ مدل ایسوس', '7.jpg', '25.000.000', '30.000.000', 1),
(2, 'گوشی وگارد', '8.jpg', '10.000.000', '15.000.000', 1),
(3, 'کش مخصوص تقویت مچ دست', '9.jpg', '20.000', '30.000', 1),
(4, 'پاک کننده لوازم دیجیتال', '10.jpg', '100.000', '150.000', 1),
(5, 'پاک کننده لوازم دیجیتال', '11.jpg', '300.000', '350.000', 1),
(6, 'بسته 3 عددی روان نویس', '12.jpg', '500.000', '600.000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discounts_index`
--

DROP TABLE IF EXISTS `discounts_index`;
CREATE TABLE IF NOT EXISTS `discounts_index` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `model_name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام کالا',
  `real_price` varchar(355) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'قیمت اصلی',
  `discount_price` varchar(355) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'قیمت با تخفیف',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'ادرس عکس',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `discounts_index`
--

INSERT INTO `discounts_index` (`id`, `model_name`, `real_price`, `discount_price`, `image`, `status`) VALUES
(1, 'گوشی شیائومی m11', '1.350.000', '1.100.000', '1.jpg', 1),
(2, 'apple watch model m32', '1.550.000', '1.300.000', '2.jpg', 1),
(3, ' ریش تراش دایاک', '1.250.000', '1.000.000', '3.jpg', 1),
(4, 'تلویزیون 40 اینچ', '1.950.000', '1.250.000', '4.jpg', 1),
(5, ' کاپشن زمستانه', '150.000', '100.000', '5.jpg', 1),
(6, 'هنذفری بلوتوثی شیائومی', '700.000', '600.000', '6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `footer_warranty`
--

DROP TABLE IF EXISTS `footer_warranty`;
CREATE TABLE IF NOT EXISTS `footer_warranty` (
  `id` tinyint NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام',
  `logo` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'لوگو',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `footer_warranty`
--

INSERT INTO `footer_warranty` (`id`, `name`, `logo`, `status`) VALUES
(1, 'پرداخت درب منزل', 'cash-on-delivery.svg', 1),
(2, 'ضمانت بازگشت کالا', 'days-return.svg', 1),
(3, 'تحویل سریع', 'express-delivery.svg', 1),
(4, 'ضمانت اصل بودن', 'original-products.svg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `image_single`
--

DROP TABLE IF EXISTS `image_single`;
CREATE TABLE IF NOT EXISTS `image_single` (
  `id` tinyint NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'ادرس عکس',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `image_single`
--

INSERT INTO `image_single` (`id`, `name`, `image`, `status`) VALUES
(1, 'sectionImage', '1.jpg', 1),
(2, 'sectionMobile', '1-mobile.jpg', 1),
(3, 'single_img1', '9.webp', 1),
(4, 'single_img2', '10.webp', 1),
(5, 'AirPod', '1.jpg', 1),
(6, 'cocomi', '2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `index_adds`
--

DROP TABLE IF EXISTS `index_adds`;
CREATE TABLE IF NOT EXISTS `index_adds` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `index_adds`
--

INSERT INTO `index_adds` (`id`, `name`, `image`, `status`) VALUES
(1, 'fourImage1', '1.jpg', 1),
(2, 'fourImage2', '2.jpg', 1),
(3, 'fourImage3', '3.jpg', 1),
(4, 'fourImage4', '4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `last_offers`
--

DROP TABLE IF EXISTS `last_offers`;
CREATE TABLE IF NOT EXISTS `last_offers` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `product_name_english` varchar(64) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام محصول انگلیسی',
  `product_name_farsi` varchar(64) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام محصول فارسی',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'لینک عکس',
  `discount_price` varchar(555) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'قیمت با تخفیف',
  `real_price` varchar(555) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'قیمت بدون تخفیف',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `last_offers`
--

INSERT INTO `last_offers` (`id`, `product_name_english`, `product_name_farsi`, `image`, `discount_price`, `real_price`, `status`) VALUES
(1, 'Lenovo Le740 s plus gaming', 'لپ تاپ لنوو مدل Le740 s plus مخصوص گیم', '1.webp', '24,400,000', '27,600,000', 1),
(2, 'asus tuf 5', 'لپ تاپ ایسوس مدل Le740 s plus مخصوص گیم', '7.jpg', '29,400,000', '37,600,000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `latest_articles`
--

DROP TABLE IF EXISTS `latest_articles`;
CREATE TABLE IF NOT EXISTS `latest_articles` (
  `id` tinyint NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام عکس',
  `created_at` timestamp NOT NULL COMMENT 'زمان ساخت',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='جدیدترین  مقالات';

--
-- Dumping data for table `latest_articles`
--

INSERT INTO `latest_articles` (`id`, `name`, `image`, `created_at`, `status`) VALUES
(1, 'بهترین گوشی های مناسب عکاسی در بازار ایران [آبان ۱۴۰۳]', 'best-phones.webp\r\n', '2024-12-14 20:45:40', 1),
(2, 'هوش مصنوعی چیست؟', 'filoger.png\r\n', '2024-12-14 20:59:11', 1),
(3, 'انواع لپ تاپ', 'type of laptop.jpg', '2024-12-14 21:07:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام',
  `image` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'عکس',
  `price` int NOT NULL COMMENT 'قیمت ',
  `sort` int NOT NULL COMMENT 'مرتب سازی',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `sort`, `status`) VALUES
(1, 'لپ تاپ لنوو مدل Le740 s plus مخص', '7.jpg', 27600000, 1, 1),
(2, 'ایسوس تاف 5', '1.webp', 37600000, 2, 1),
(3, 'گوشی شیائومی m11', '1.jpg', 1350000, 3, 1),
(4, 'apple watch model m32', '2.jpg', 1550000, 4, 1),
(5, 'ریش تراش دایاک', '3.jpg', 1250000, 5, 1),
(6, 'تلویزیون 40 اینچ', '4.jpg', 23000000, 6, 1),
(7, 'کاپشن زمستانه', '5.jpg', 250000, 7, 1),
(8, 'هنذفری بلوتوثی شیائومی', '6.jpg', 700000, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `id` tinyint NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `site_name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام سایت ',
  `site_descripton` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'توضیحات سایت ',
  `site_logo` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'لوگو سایت',
  `address` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'ادرس',
  `tell` varchar(14) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'تلفن',
  `Response_time` varchar(32) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'ساعت پاسخگویی',
  `email` varchar(64) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'ایمیل',
  `copyright_text` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'متن کپی رایت',
  `app_link` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'لینک اپلیکیشن',
  `useful_links_name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'بخش لینک های مفید',
  `contact_us_name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` timestamp NOT NULL COMMENT 'زمان ساخت',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='تنظیمات';

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `site_name`, `site_descripton`, `site_logo`, `address`, `tell`, `Response_time`, `email`, `copyright_text`, `app_link`, `useful_links_name`, `contact_us_name`, `created_at`, `status`) VALUES
(1, ' ایران مارک', '            ایران مارکت به عنوان یکی از بروزترین فروشگاه های اینترنتی با بیش از هفت سال تجربه، با پایبندی به اعتماد مشتری، موفق شده تا با فروشگاه‌های معتبر ایران به یکی از بزرگ‌ترین فروشگاه اینترنتی کشور تبدیل شود. هر آنچه که فکرش را بکنید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد. ', 'logo.png', 'آدرس: ساری. خیابان معلم', '09117438357', 'ساعت پاسخگویی:8 الی 18', NULL, '© 2024 سروش کارگشا. تمامی حقوق محفوظ است.', NULL, 'لینک های مفید', 'ارتباط با ما', '2024-12-16 18:31:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider_index`
--

DROP TABLE IF EXISTS `slider_index`;
CREATE TABLE IF NOT EXISTS `slider_index` (
  `id` tinyint NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'لینک عکس',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='اسلایدر صفحه اصلی';

--
-- Dumping data for table `slider_index`
--

INSERT INTO `slider_index` (`id`, `name`, `image`, `status`) VALUES
(1, 'heroSlider1', '1.jpg', 1),
(2, 'heroSlider2', '2.jpg', 1),
(3, 'heroSlider3', '3.gif', 1),
(4, 'heroSlider4', '4.jpg', 1),
(5, 'heroMobile1', '1-mobile.jpg', 1),
(6, 'heroMobile2', '2-mobile.jpg', 1),
(7, 'heroMobile3', '3-mobile.gif', 1),
(8, 'heroMobile4', '4-mobile.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

DROP TABLE IF EXISTS `social_media`;
CREATE TABLE IF NOT EXISTS `social_media` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `social_media_type_id` int NOT NULL COMMENT 'ردیف نوع شبکه ای مجازی',
  `value` varchar(128) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'مقدار',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`),
  KEY `social_media_type_id` (`social_media_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT=' شبکه های مجازی';

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `social_media_type_id`, `value`, `status`) VALUES
(1, 1, 'sorushkrg', 1),
(2, 2, 'sorushkg', 1),
(3, 3, 'sorushkg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_media_type`
--

DROP TABLE IF EXISTS `social_media_type`;
CREATE TABLE IF NOT EXISTS `social_media_type` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام',
  `url` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'لینک',
  `icon` varchar(356) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'ایکون',
  `target` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL DEFAULT '_blank',
  `created_at` timestamp NOT NULL COMMENT 'زمان ساخت',
  `sort` tinyint NOT NULL COMMENT 'دسته بندی ',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='جدول نوع شبکه های مجازی';

--
-- Dumping data for table `social_media_type`
--

INSERT INTO `social_media_type` (`id`, `name`, `url`, `icon`, `target`, `created_at`, `sort`, `status`) VALUES
(1, 'instagram', 'https://www.instagram.com/', 'instagram.svg', '_blank', '2024-12-16 18:37:48', 1, 1),
(2, 'telegram', 'https://telegram.org/', 'telegram.svg', '_blank', '2024-12-16 18:37:48', 2, 1),
(3, 'whatsapp', 'https://web.whatsapp.com/', 'whatsApp.svg', '_blank', '2024-12-16 18:37:48', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `useful_links`
--

DROP TABLE IF EXISTS `useful_links`;
CREATE TABLE IF NOT EXISTS `useful_links` (
  `id` tinyint NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `name` varchar(32) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام ',
  `link` varchar(256) COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'لینک',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='لینک های مفید';

--
-- Dumping data for table `useful_links`
--

INSERT INTO `useful_links` (`id`, `name`, `link`, `status`) VALUES
(1, 'خانه', '../../../iranshop_dornica/index .php', 1),
(2, 'درباره ما', '../../../iranshop_dornica/aboute-me.php', 1),
(3, 'پیگیری سفارش', '../../../iranshop_dornica/index .php', 1),
(4, 'سوالات متداول', '../../../iranshop_dornica/faq.php', 1),
(5, 'بلاگ', '../../../iranshop_dornica/blog.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'ردیف',
  `firstName` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام',
  `lastName` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام خانوادگی',
  `userName` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام کاربری',
  `password` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'رمز عبور',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'زمان ساخت کاربر',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'وضعیت',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `userName`, `password`, `created_at`, `status`) VALUES
(1, 'سروش', 'کارگشا', 'sorushkg', '$2y$10$KM5Wymk4byGgmPSFb/gr/ehPPZFIhnQn9vHyPTrShvOalQeD76U2u', '2024-12-23 21:26:58', 1),
(2, 'سامان', 'کارگشا', 'samankg', '$2y$10$R4RSZEUmEyn4XMW0Xz6fQ.SZzM5OLFSZT06SKH3r5Dcut1J.oxryG', '2024-12-23 21:27:30', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD CONSTRAINT `blog_details_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_page` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `blog_details_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category_blog` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `blog_details_ibfk_3` FOREIGN KEY (`author_id`) REFERENCES `authors_blog` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `blog_page`
--
ALTER TABLE `blog_page`
  ADD CONSTRAINT `blog_page_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors_blog` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `blog_page_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category_blog` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD CONSTRAINT `comment_blog_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_page` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `comment_blog_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `social_media`
--
ALTER TABLE `social_media`
  ADD CONSTRAINT `social_media_ibfk_1` FOREIGN KEY (`social_media_type_id`) REFERENCES `social_media_type` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

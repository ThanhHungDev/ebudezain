-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 03, 2020 lúc 03:22 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ebudezain`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `excerpt`, `thumbnail`, `background`, `description`, `site_name`, `image_seo`, `keyword_seo`, `description_seo`, `created_at`, `updated_at`) VALUES
(1, '店舗テンプレート', 'store-template-店舗テンプレート', '1000を超える非常に美しく、常に更新されるWebインターフェイス', '/upload/images/thiet-ke-web-chuan-seo.jpg', '/upload/images/seo.jpeg', '自分のスタイルに合わせて簡単に変更', 'プロのSEOウェブデザイン、モバイル互換性', '/upload/images/slim-r.jpg', '美しいウェブサイトインターフェース、プロフェッショナルなウェ', '美しいウェブサイトインターフェース、プロフェッショナルなウェブサイトデザイン、評判のSEO基準、高速なウェブデザイン時間、最も安い価格を保管してください。', '2020-03-22 12:37:21', '2020-03-26 20:48:22'),
(2, '店舗テンプレート category', '店舗テンプレート category', '1000を超える非常に美しく、常に更新されるWebインターフェイス', '/upload/images/avatar.jpg', '/upload/images/slim-r.jpg', '自分のスタイルに合わせて簡単に変更', 'プロのSEOウェブデザイン、モバイル互換性', '/upload/images/php.png', '美しいウェブサイトインターフェース、プロフェッショナルなウェ', '美しいウェブサイトインターフェース、プロフェッショナルなウェブサイトデザイン、評判のSEO基準、高速なウェブデザイン時間、最も安い価格を保管してください。', '2020-03-22 12:37:21', '2020-03-26 20:47:40'),
(3, 'âm nhạc', 'am-nhac', 'âm nhạc nè', '/upload/images/graduation.jpg', '/upload/images/graduation-mobile.jpg', 'âm nhạc ahy', 'site', '/upload/images/bg_title.png', 'key META DESCRIPTION \r\nMETA KEYWORD\r\nMETA KEYWORD\r\nMETA KEYWORD\r\nMETA KEYWORD\r\nMETA KEYWORD', 'á META DESCRIPTION', '2020-03-26 20:00:31', '2020-03-26 20:47:10'),
(5, 'dịch vụ', 'dich-vu', 'dịch vụ lậpt rình', '/upload/images/php.png', '/upload/images/graduation-mobile.jpg', 'mô tả là dịch vụ lập trình', 'dịch vụ lạpa trình ưeb', '/upload/images/graduation.jpg', 'key lập trình dịch vụ', 'ahihi', '2020-03-28 12:14:18', '2020-03-28 12:14:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_style`
--

CREATE TABLE `category_style` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_style`
--

INSERT INTO `category_style` (`id`, `name`, `slug`, `excerpt`, `thumbnail`, `background`, `description`, `site_name`, `image_seo`, `description_seo`, `keyword_seo`, `category_type_id`, `created_at`, `updated_at`) VALUES
(1, 'giao diện thương mại điện tử ahihi đồ ngốc', 'thuong-mai-dien-tu-ahihi-do-ngoc', 'thương mại điển tử rất có lợi nhuận', NULL, NULL, 'áo thun nam, áo thun nam xuất khẩu, áo thun nam ngoại, áo thun nam chất lượng, áo thun nam giá rẻ, đồng hồ xách tay', 'kho giao diện đẹp thương mại điện tử', NULL, '', '', 1, '2020-03-22 12:37:21', '2020-03-22 12:37:21'),
(2, 'giới nthieeuj công ty ahihi đồ ngu', 'gioi-thieu-cong-ty-ahihi-do-ngu', 'giới thiệu công ty', NULL, NULL, 'fgjdgnfdj', 'kho giao diện đẹp thương mại điện tử', NULL, 'giới thiệu công ty', 'giới thiệu công ty', 1, '2020-03-22 12:37:21', '2020-03-22 12:37:21'),
(3, 'category style 2 không liên quan 1', 'category-style-2-khong-lien-quan-1', 'giới thiệu công ty', NULL, NULL, 'fgjdgnfdj', 'kho giao diện đẹp thương mại điện tử', NULL, 'giới thiệu công ty', 'giới thiệu công ty', 2, '2020-03-22 12:37:21', '2020-03-22 12:37:21'),
(4, 'category style 3 có liên quan 1', 'category-style-3-co-lien-quan-1', 'giới thiệu công ty', NULL, NULL, 'fgjdgnfdj', 'kho giao diện đẹp thương mại điện tử', NULL, 'giới thiệu công ty', 'giới thiệu công ty', 1, '2020-03-22 12:37:21', '2020-03-22 12:37:21'),
(5, 'giới thiệu ahihi hùng đẹp trai', 'gioi-thieu-ahihi-hung-dep-trai', 'giới thiệu công ty', NULL, NULL, 'fgjdgnfdj', 'kho giao diện đẹp thương mại điện tử', NULL, 'giới thiệu công ty', 'giới thiệu công ty', 3, '2020-03-22 12:37:21', '2020-03-22 12:37:21'),
(6, 'thêm mới kiểu dáng', 'them-moi-kieu-dang', 'thêm mới kiểu dáng', '/upload/images/seo.jpeg', '/upload/images/graduation-mobile.jpg', 'thêm mới kiểu dángthêm mới kiểu dángthêm mới kiểu dángthêm mới kiểu dáng', 'thêm mới kiểu dáng', '/upload/images/graduation.jpg', 'thêm mới kiểu dáng des', 'thêm mới kiểu dáng key', 6, '2020-03-28 21:09:54', '2020-03-28 21:09:54'),
(7, 'âm nhạc kiểu dáng 1', 'am-nhac-kieu-dang-1', 'âm nhạc kiểu dáng 1 ưe ahihi', '/upload/images/graduation.jpg', '/upload/images/php.png', 'âm nhạc kiểu dáng 1 m', 'âm nhạc kiểu dáng 1 s', '/upload/images/avatar.jpg', 'âm nhạc kiểu dáng 1 d', 'âm nhạc kiểu dáng 1 m', 6, '2020-03-28 21:15:43', '2020-03-28 21:28:48'),
(8, 'âm nhạc hùng đẹp trai style', 'am-nhac-hung-dep-trai-style', 'âm nhạc hùng đẹp trai style edit', '/upload/images/slim-r.jpg', '/upload/images/avatar.jpg', 'âm nhạc hùng đẹp trai style m', 'sdf âm nhạc hùng đẹp trai style', '/upload/images/php.png', 'âm nhạc hùng đẹp trai style f', 'âm nhạc hùng đẹp trai style k', 6, '2020-03-28 21:25:29', '2020-03-28 21:28:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_type`
--

CREATE TABLE `category_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_type`
--

INSERT INTO `category_type` (`id`, `name`, `slug`, `excerpt`, `thumbnail`, `background`, `description`, `category_id`, `site_name`, `image_seo`, `keyword_seo`, `description_seo`, `created_at`, `updated_at`) VALUES
(1, 'giao diện thương mại điện tử', 'thuong-mai-dien-tu', 'thương mại điển tử rất có lợi nhuận', NULL, NULL, 'áo thun nam, áo thun nam xuất khẩu, áo thun nam ngoại, áo thun nam chất lượng, áo thun nam giá rẻ, đồng hồ xách tay', 1, 'kho giao diện đẹp thương mại điện tử', NULL, '', '', '2020-03-22 12:37:21', '2020-03-22 12:37:21'),
(2, 'giới nthieeuj công ty', 'gioi-thieu-cong-ty', 'giới thiệu công ty', NULL, NULL, 'fgjdgnfdj', 1, 'kho giao diện đẹp thương mại điện tử', NULL, 'giới thiệu công ty', 'giới thiệu công ty', '2020-03-22 12:37:21', '2020-03-22 12:37:21'),
(3, 'giới nthieeuj công ty 3', 'gioi-thieu-cong-ty', 'giới thiệu công ty', NULL, NULL, 'fgjdgnfdj', 2, 'kho giao diện đẹp thương mại điện tử', NULL, 'giới thiệu công ty', 'giới thiệu công ty', '2020-03-22 12:37:21', '2020-03-22 12:37:21'),
(4, 'dịch vụ phân loại edit', 'dich-vu-phan-loai-edit', 'dịch vụ phân loại edit', '/upload/images/graduation-mobile.jpg', '/upload/images/php.png', 'dịch vụ phân loại 1', 5, 'dịch vụ phân loại', '/upload/images/php.png', 'key', 'des', '2020-03-28 13:18:08', '2020-03-28 13:43:06'),
(5, 'ahihii  dfsfs phân loại', 'ahihiidfsfs-phan-loai', 'fgdfg', '/upload/images/graduation-mobile.jpg', '/upload/images/graduation-mobile.jpg', 'fghfh', 3, 'sdf', '/upload/images/graduation.jpg', 'sdf', 'sdfds', '2020-03-28 17:37:04', '2020-03-28 17:37:04'),
(6, 'phân loại mới', 'phan-loai-moi', 'dfsdf', '/upload/images/php.png', '/upload/images/graduation-mobile.jpg', 'ádsad', 3, 'ád', '/upload/images/graduation.jpg', 'ád', 'ádsa', '2020-03-28 19:22:47', '2020-03-28 19:22:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_09_043355_create-table-service', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `picture`
--

CREATE TABLE `picture` (
  `id` int(10) UNSIGNED NOT NULL,
  `src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galery` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foreign_id` bigint(20) NOT NULL,
  `table` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_type_id` int(10) UNSIGNED NOT NULL,
  `like` int(11) NOT NULL DEFAULT 1,
  `view` int(11) NOT NULL DEFAULT 1,
  `publish` int(11) NOT NULL DEFAULT 1,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_seo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_seo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `slug`, `excerpt`, `content`, `thumbnail`, `category_type_id`, `like`, `view`, `publish`, `site_name`, `image_seo`, `keyword_seo`, `description_seo`, `created_at`, `updated_at`) VALUES
(1, 'mẫu ưeb thương mại diẹn tử chuyên nghiệp', 'mau-web-thuong-mai-dien-tu', 'mẫu ưeb site bán hàng', 'Mẫu website thương mại điện tử đẹp chuyên nghiệp Website thương mại điện tử là trang thông tin điện tử được thiết lập nhằm phục vụ một phần hoặc toàn bộ quá trình hoạt động mua bán hàng hóa cũng như cung ứng dịch vụ. Từ việc trưng bày, giới thiệu hàng hóa, dịch vụ, bán hàng hóa dịch vụ, thanh toán và dịch vụ sau bán hàng. Hay có thể nói một cách đơn giản hơn, Website thương mại điện tử là một loại của website bán hàng.Khi lên kế hoạch thiết kế web thương mại điện tử, bạn cần phải xem xét nhiều yếu tố như thông tin chi tiết sản phẩm, hình ảnh sản phẩm, quá trình thanh toán đơn giản và minh bạch, các bộ lọc sản thích hợp cũng như các tùy chọn tìm kiếm, dịch vụ khách hàng lựa chọn có đáng tin cậy hay không, các phương thức thanh toán, giao diện website được thiết kế có hấp dẫn, thu hút người dùng, thân thiện với người sử dụng. Để làm được điều này quả là điều không hề đơn giản.Đây cũng chính là lý do mà trước khi thiết kế website thương mại điện tử mới hoặc nâng cấp gian hàng trực tuyến hiện tại của mình. Hãy tìm hiểu, tham khảo một số mẫu website thương mại điện tử hấp dẫn để lên những ý tưởng hấp dẫn cho dự án của mình tại Expro Việt Nam.', NULL, 1, 1, 1, 1, 'Mẫu website thương mại điện tử đẹp chuyên nghiệp', NULL, 'mẫu web', 'mẫu hậu', '2020-03-22 12:37:21', '2020-03-22 12:37:21'),
(3, 'bài viết số edit thử', 'bai-viet-so-edit-thu', 'ahihi', '<p>content&nbsp;</p>', '/upload/images/php.png', 2, 1, 1, 1, 'site', '/upload/images/seo.jpeg', 'meta key', 'meta des', '2020-03-24 20:45:32', '2020-03-28 12:06:01'),
(4, 'hùng đẹp trai', 'hung-dep-trai', 'ahihi', '<p>conetnt ahihi</p>', '/upload/images/graduation-mobile.jpg', 1, 1, 1, 1, 'sdfds', '/upload/images/bg_title.png', 'ád', 'fds', '2020-03-24 21:14:30', '2020-03-24 21:14:30'),
(5, 'mẫu ưeb thương mại diẹn tử chuyên nghiệp edit', 'mau-ueb-thuong-mai-dien-tu-chuyen-nghiep-edit', 'mẫu ưeb site bán hàng edit', '<p>Mẫu website thương mại điện tử đẹp chuy&ecirc;n nghiệp Website thương mại điện tử l&agrave; trang th&ocirc;ng tin điện tử được thiết lập nhằm phục vụ một phần hoặc to&agrave;n bộ qu&aacute; tr&igrave;nh hoạt động mua b&aacute;n h&agrave;ng h&oacute;a cũng như cung ứng dịch vụ. Từ việc trưng b&agrave;y, giới thiệu h&agrave;ng h&oacute;a, dịch vụ, b&aacute;n h&agrave;ng h&oacute;a dịch vụ, thanh to&aacute;n v&agrave; dịch vụ sau b&aacute;n h&agrave;ng. Hay c&oacute; thể n&oacute;i một c&aacute;ch đơn giản hơn, Website thương mại điện tử l&agrave; một loại của website b&aacute;n h&agrave;ng.Khi l&ecirc;n kế hoạch thiết kế web thương mại điện tử, bạn cần phải xem x&eacute;t nhiều yếu tố như th&ocirc;ng tin chi tiết sản phẩm, h&igrave;nh ảnh sản phẩm, qu&aacute; tr&igrave;nh thanh to&aacute;n đơn giản v&agrave; minh bạch, c&aacute;c bộ lọc sản th&iacute;ch hợp cũng như c&aacute;c t&ugrave;y chọn t&igrave;m kiếm, dịch vụ kh&aacute;ch h&agrave;ng lựa chọn c&oacute; đ&aacute;ng tin cậy hay kh&ocirc;ng, c&aacute;c phương thức thanh to&aacute;n, giao diện website được thiết kế c&oacute; hấp dẫn, thu h&uacute;t người d&ugrave;ng, th&acirc;n thiện với người sử dụng. Để l&agrave;m được điều n&agrave;y quả l&agrave; điều kh&ocirc;ng hề đơn giản.Đ&acirc;y cũng ch&iacute;nh l&agrave; l&yacute; do m&agrave; trước khi thiết kế website thương mại điện tử mới hoặc n&acirc;ng cấp gian h&agrave;ng trực tuyến hiện tại của m&igrave;nh. H&atilde;y t&igrave;m hiểu, tham khảo một số mẫu website thương mại điện tử hấp dẫn để l&ecirc;n những &yacute; tưởng hấp dẫn cho dự &aacute;n của m&igrave;nh tại Expro Việt Nam.</p>', '/upload/images/slim-r.jpg', 3, 1, 1, 1, 'Mẫu website thương mại điện tử đẹp chuyên nghiệp', '/upload/images/slim-r.jpg', 'mẫu web edit', 'mẫu hậu', '2020-03-25 20:13:51', '2020-03-25 20:13:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_active_style`
--

CREATE TABLE `post_active_style` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` bigint(20) DEFAULT NULL,
  `style_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_active_style`
--

INSERT INTO `post_active_style` (`id`, `post_id`, `style_id`, `created_at`, `updated_at`) VALUES
(2, 4, 2, '2020-03-24 21:14:30', '2020-03-24 21:14:30'),
(3, 4, 4, '2020-03-24 21:14:30', '2020-03-24 21:14:30'),
(4, 5, 5, '2020-03-25 20:13:51', '2020-03-25 20:13:51'),
(5, 6, 1, '2020-03-25 20:18:08', '2020-03-25 20:18:08'),
(6, 6, 2, '2020-03-25 20:18:08', '2020-03-25 20:18:08'),
(7, 6, 4, '2020-03-25 20:18:08', '2020-03-25 20:18:08'),
(8, 3, 3, '2020-03-28 12:06:01', '2020-03-28 12:06:01');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `post_new`
-- (See below for the actual view)
--
CREATE TABLE `post_new` (
`id` int(10) unsigned
,`title` varchar(191)
,`slug` varchar(191)
,`excerpt` varchar(191)
,`content` longtext
,`thumbnail` varchar(191)
,`category_type_id` int(10) unsigned
,`like` int(11)
,`VIEW` int(11)
,`site_name` varchar(191)
,`image_seo` text
,`keyword_seo` text
,`description_seo` text
,`updated_at` timestamp
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating_active`
--

CREATE TABLE `rating_active` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `rating_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Trương Thanh Hùng', 'upload/images/avatar.jpg', 'thanhhung.code@gmail.com', '$2y$10$seBv.MOIW5gjn0vf5ucpkuJIMik7qxz5bb5OJ3CyXHGzOmFCfijqO', 'gBnxJCPCaV2N27EYPlriqVtltE18rsh95vPY7OmGLmdvJ0iFOJSEWeI7u143', '2020-03-22 12:37:21', '2020-03-22 12:37:21');

-- --------------------------------------------------------

--
-- Cấu trúc cho view `post_new`
--
DROP TABLE IF EXISTS `post_new`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_new`  AS  select `post`.`id` AS `id`,`post`.`title` AS `title`,`post`.`slug` AS `slug`,`post`.`excerpt` AS `excerpt`,regexp_replace(`post`.`content`,'(<[^>]+>)|([\\t\\n\\r])','') AS `content`,`post`.`thumbnail` AS `thumbnail`,`post`.`category_type_id` AS `category_type_id`,`post`.`like` AS `like`,`post`.`view` AS `VIEW`,`post`.`site_name` AS `site_name`,`post`.`image_seo` AS `image_seo`,`post`.`keyword_seo` AS `keyword_seo`,`post`.`description_seo` AS `description_seo`,`post`.`updated_at` AS `updated_at`,`post`.`created_at` AS `created_at` from `post` where `post`.`publish` = 1 order by `post`.`created_at` desc limit 10 ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_style`
--
ALTER TABLE `category_style`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_type`
--
ALTER TABLE `category_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_type_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_active_style`
--
ALTER TABLE `post_active_style`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rating_active`
--
ALTER TABLE `rating_active`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_active_post_id_foreign` (`post_id`),
  ADD KEY `rating_active_rating_id_foreign` (`rating_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category_style`
--
ALTER TABLE `category_style`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `category_type`
--
ALTER TABLE `category_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `post_active_style`
--
ALTER TABLE `post_active_style`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `rating_active`
--
ALTER TABLE `rating_active`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_type`
--
ALTER TABLE `category_type`
  ADD CONSTRAINT `category_type_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `rating_active`
--
ALTER TABLE `rating_active`
  ADD CONSTRAINT `rating_active_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rating_active_rating_id_foreign` FOREIGN KEY (`rating_id`) REFERENCES `rating` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

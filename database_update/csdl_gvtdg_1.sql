-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2020 lúc 11:31 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `csdl_gvtdg_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_evaluation`
--

CREATE TABLE `category_evaluation` (
  `id` int(11) NOT NULL,
  `ca_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ca_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_evaluation`
--

INSERT INTO `category_evaluation` (`id`, `ca_title`, `ca_desc`, `create_at`, `updated_at`) VALUES
(6, 'Các nhiệm vụ', 'Các nhiệm vụ', '2020-11-10 07:05:51', '2020-11-10 07:05:51'),
(7, 'Thông tin về học phần và chương trình đào tạo', 'Thông tin về học phần và chương trình đào tạo', '2020-11-10 07:05:51', '2020-11-10 07:05:51'),
(8, 'Kiểm tra, đánh giá', 'Kiểm tra, đánh giá', '2020-11-10 07:05:51', '2020-11-10 07:05:51'),
(9, 'Một số hoạt động quản trị', 'Một số hoạt động quản trị', '2020-11-10 07:05:51', '2020-11-10 07:05:51'),
(10, 'Công tác hỗ trợ và cơ sở vật chất phục vụ giảng dạy học phần', 'Công tác hỗ trợ và cơ sở vật chất phục vụ giảng dạy học phần', '2020-11-10 07:05:51', '2020-11-10 07:05:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evaluation`
--

CREATE TABLE `evaluation` (
  `eva_id` int(11) NOT NULL,
  `eva_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eva_ad_create_point` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ca_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `evaluation`
--

INSERT INTO `evaluation` (`eva_id`, `eva_name`, `eva_ad_create_point`, `created_at`, `updated_at`, `ca_id`) VALUES
(32, 'Thiết kế các hoạt động giảng dạy và học tập phù hợp để đạt được chuẩn đầu ra tương ứng của học phần', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(33, 'Tạo cơ hội cho sinh viên tích cực tham gia vào các hoạt động học tập\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(34, 'Đổi mới phương pháp giảng dạy trong học phần được phân công\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(35, 'Hướng dẫn sinh viên phương pháp học tập trong quá trình dạy học nhằm thúc đẩy khả năng học tập suốt đời', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(36, 'Thực hiện đủ thời lượng, nội dung của học phần theo kế hoạch, đề cương học phần đã công bố', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(37, 'Phản hồi kết quả kiểm tra đánh giá giúp sinh viên cải thiện kết quả học tập', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(38, 'Hỗ trợ sinh viên trong học tập và nghiên cứu', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(39, 'Ứng dụng công nghệ trong dạy học', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(40, 'Thực hiện chuẩn mực của nhà giáo (lên lớp đúng giờ, giao tiếp và ứng xử đúng mực với sinh viên…)', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(41, 'Chất lượng thực hiện công tác cố vấn học tập (nếu có tham gia)', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(42, 'Chất lượng thực hiện công tác quản lý từ cấp bộ môn trở lên (nếu có tham gia)', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(43, 'Hoàn thành định mức nghiên cứu khoa học trong năm', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(44, 'Tự bồi dưỡng và nâng cao trình độ', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(45, 'Cung cấp đầy đủ thông tin về học phần cho sinh viên theo quy định', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 6),
(46, 'Giảng viên chủ động cập nhật kiến thức mới phục vụ nội dung học phần được phân công giảng dạy', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 7),
(47, 'Giảng viên được tham gia xây dựng và đóng góp ý kiến điều chỉnh học phần', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 7),
(48, 'Giảng viên được tham gia xây dựng và đóng góp ý kiến điều chỉnh chương trình đào tạo', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 7),
(49, 'Phương pháp kiểm tra đánh giá sử dụng trong học phần phù hợp với chuẩn đầu ra tương ứng của học phần', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 8),
(50, 'Việc kiểm tra, đánh giá kết quả học tập của sinh viên được rà soát và đánh giá thường xuyên để đảm bảo sự tương thích và phù hợp với chuẩn đầu ra.\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 8),
(51, 'Việc tổ chức ra đề thi, chấm thi được thực hiện theo đúng quy định', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 8),
(52, 'Văn bản về triết lý giáo dục của Nhà trường được phổ biến tới giảng viên\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 9),
(53, 'Nhu cầu được đào tạo và tham gia các khóa học bồi dưỡng nâng cao trình độ và kỹ năng của giảng viên được Nhà trường đáp ứng\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 9),
(54, 'Kết quả làm việc của giảng viên được đánh giá công bằng\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 9),
(55, 'Giảng viên hài lòng đối với các chính sách đãi ngộ chung của Nhà trường\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 9),
(56, 'Có đủ phòng học với trang thiết bị phù hợp để hỗ trợ hoạt động đào tạo và nghiên cứu trong phạm vi học phần\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 10),
(57, 'Có đủ phòng làm việc với trang thiết bị phù hợp để hỗ trợ hoạt động đào tạo và nghiên cứu trong phạm vi học phần\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 10),
(58, 'Có đủ phòng thí nghiệm hoặc phòng thực hành và trang thiết bị phù hợp để hỗ trợ các hoạt động đào tạo và nghiên cứu trong phạm vi học phần\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 10),
(59, 'Các yêu cầu sửa chữa cơ sở vật chất hoặc trang thiết bị phục vụ học tập, nghiên cứu được đáp ứng\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 10),
(60, 'Thư viện và các nguồn học liệu phù hợp và được cập nhật để hỗ trợ các hoạt động đào tạo và nghiên cứu trong phạm vi học phần\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 10),
(61, 'Cơ sở hạ tầng công nghệ hỗ trợ việc ứng dụng công nghệ thông tin vào dạy và học đáp ứng được yêu cầu\r\n', 5, '2020-11-10 07:12:34', '2020-11-10 07:12:34', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(20) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(5, 'dangvantu1999@gmail.com', '$2y$10$iW94V2Z7Xb8RrgPTHKQuTO6XfwIhoxfPhq6lbNxO8K4hHeWC9N0za', '2020-11-06 20:46:25', '2020-11-07 03:46:25'),
(12, 'dangvantuadv@gmail.com', '$2y$10$KlSqddNOsGYMhhFsCklhLuB1cAJZLMw5yPMSvPUNhO8QJlBokugRW', '2020-11-07 00:16:02', '2020-11-07 07:16:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `school`
--

CREATE TABLE `school` (
  `sch_id` int(11) NOT NULL,
  `sch_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sch_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `school`
--

INSERT INTO `school` (`sch_id`, `sch_name`, `sch_address`, `created_at`, `updated_at`) VALUES
(1, 'Đại học khoa học tự nhiên', 'Nguyễn Trãi - Thanh Xuân - Hà Nội', '2020-10-28 07:50:03', '2020-10-28 07:50:03'),
(2, 'Đại học Khoa học Xã hội & Nhân văn', 'Số 336 đường Nguyễn Trãi, quận Thanh Xuân, Hà Nội', '2020-10-29 11:48:34', '2020-10-29 11:48:34'),
(3, 'Đại học Giáo dục', 'Nhà G7, số 144 đường Xuân Thuỷ, quận Cầu Giấy, Hà Nội', '2020-10-29 11:48:34', '2020-10-29 11:48:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `science`
--

CREATE TABLE `science` (
  `sci_id` int(11) NOT NULL,
  `sci_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sci_id_school` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `science`
--

INSERT INTO `science` (`sci_id`, `sci_name`, `sci_id_school`, `created_at`, `updated_at`) VALUES
(1, 'Toán-Cơ-Tin học', 1, '2020-10-28 07:50:27', '2020-10-28 07:50:27'),
(2, 'Sinh học', 1, '2020-10-29 11:46:55', '2020-10-29 11:46:55'),
(3, 'Ngôn ngữ học', 2, '2020-10-29 11:50:54', '2020-10-29 11:50:54'),
(4, 'Quốc tế học', 2, '2020-10-29 11:50:54', '2020-10-29 11:50:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `semester`
--

CREATE TABLE `semester` (
  `se_id` int(11) NOT NULL,
  `se_year` int(11) NOT NULL,
  `se_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `semester`
--

INSERT INTO `semester` (`se_id`, `se_year`, `se_name`, `created_at`, `updated_at`) VALUES
(1, 2019, 'Học kì 1', '2020-10-29 11:52:46', '2020-10-29 11:52:46'),
(2, 2019, 'Học kì 2', '2020-10-29 11:52:46', '2020-10-29 11:52:46'),
(3, 2019, 'Học kì hè', '2020-10-29 11:52:46', '2020-10-29 11:52:46'),
(4, 2020, 'Học kì 1', '2020-10-29 11:52:46', '2020-10-29 11:52:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statistic`
--

CREATE TABLE `statistic` (
  `st_id` int(11) NOT NULL,
  `st_us_id` int(11) NOT NULL,
  `st_sum_point` int(11) NOT NULL,
  `st_standard_deviation` double NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `se_id` int(11) NOT NULL,
  `average_score` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `statistic`
--

INSERT INTO `statistic` (`st_id`, `st_us_id`, `st_sum_point`, `st_standard_deviation`, `updated_at`, `created_at`, `se_id`, `average_score`) VALUES
(2, 2, 140, 0, '2020-10-29 12:07:24', '2020-10-29 12:07:24', 4, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `us_id` int(11) NOT NULL,
  `us_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_is_admin` int(1) DEFAULT NULL,
  `us_is_active` int(1) DEFAULT NULL,
  `us_sci_id` int(11) NOT NULL,
  `us_id_school` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `us_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`us_id`, `us_name`, `us_is_admin`, `us_is_active`, `us_sci_id`, `us_id_school`, `password`, `created_at`, `updated_at`, `email`, `email_verified_at`, `remember_token`, `us_avatar`, `status`) VALUES
(2, 'Đặng Văn Tú', 1, NULL, 1, 1, '$2y$10$3szJbPrk2z/hO5FsU239me8jQUdN4QmCEhyWFezCPpiYzySAQmsWa', '2020-10-28 00:51:12', '2020-11-10 03:01:15', 'dangvantu1999@gmail.com', '2020-10-28 07:51:12', 'qia7splINzqVDIKNRs4nmfzu4cqdrTzM33MPi6oScOiyYliMDFfjiqR4wdSY', '/uploads/profile/20201106145613.jpg', 0),
(6, 'add1', 1, NULL, 1, 1, '$2y$10$KHXWiOBhUeYYpra2ATvMiur1jbiwpxexIZgzaN6ULEMqTT5APhT06', '2020-10-31 01:55:30', '2020-10-31 01:55:30', 'add1@gmail.com', '2020-10-31 08:55:30', NULL, '/uploads/profile/default.png', 0),
(7, 'test', 1, NULL, 2, 1, '$2y$10$qMdXygEwlJm5hhAoNW527OTJupz5Ikibd.mmJOyrOI0bDj5bm1e4a', '2020-11-05 20:55:11', '2020-11-05 20:55:27', 'test@gmail.com', '2020-11-06 03:55:11', NULL, '/uploads/profile/default.png', 0),
(8, 'dangvantu', 2, NULL, 1, 1, '$2y$10$flukID6HyGxGJa7P9cdCNOPZg0Mwv9WbKPEseqihQ6RDyBy1V422S', '2020-11-06 02:09:52', '2020-11-06 03:04:09', 'vantund2017@gmail.com', '2020-11-06 09:09:52', NULL, '/uploads/profile/default.png', 0),
(9, 'dangvantu', 1, NULL, 1, 1, '$2y$10$2Xks8GqnhI2JkPJXMt620O7iJaiAlkNNJM2TEMiPxlQZORTg3Zg0u', '2020-11-06 18:18:04', '2020-11-06 18:18:04', 'adv@gmail.com', '2020-11-07 01:18:04', NULL, '/uploads/profile/default.png', 0),
(11, 'gv1', 2, NULL, 1, 1, '$2y$10$56IsSpEo7380huPX/15kY.Hj.D9.pwwx3Ueo/deyLjCPVemeU1RdW', '2020-11-10 03:13:53', '2020-11-10 03:30:09', 'gv@gmail.com', '2020-11-10 10:13:53', 'ATuVTHs74uzlqJrABAS6bKtFIDmI4HJIO6Jl54oZw8v6lzlcpY3j9K1IHEvx', '/uploads/profile/default.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_eval_sem`
--

CREATE TABLE `user_eval_sem` (
  `id` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `se_id` int(11) NOT NULL,
  `eval_id` int(11) NOT NULL,
  `user_rate_point` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_eval_sem`
--

INSERT INTO `user_eval_sem` (`id`, `us_id`, `se_id`, `eval_id`, `user_rate_point`, `updated_at`, `created_at`) VALUES
(3, 2, 4, 32, 1, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(4, 2, 4, 33, 2, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(5, 2, 4, 34, 3, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(6, 2, 4, 35, 4, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(7, 2, 4, 36, 5, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(8, 2, 4, 37, 3, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(9, 2, 4, 38, 2, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(10, 2, 4, 39, 3, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(11, 2, 4, 40, 2, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(12, 2, 4, 41, 5, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(13, 2, 4, 42, 5, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(14, 2, 4, 43, 4, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(15, 2, 4, 44, 3, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(16, 2, 4, 45, 4, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(17, 2, 4, 46, 5, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(18, 2, 4, 47, 5, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(19, 2, 4, 48, 5, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(20, 2, 4, 49, 1, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(21, 2, 4, 50, 2, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(22, 2, 4, 51, 3, '2020-11-10 02:10:10', '2020-11-10 02:10:10'),
(23, 2, 4, 52, 3, '2020-11-10 02:10:11', '2020-11-10 02:10:11'),
(24, 2, 4, 53, 1, '2020-11-10 02:10:11', '2020-11-10 02:10:11'),
(25, 2, 4, 54, 2, '2020-11-10 02:10:11', '2020-11-10 02:10:11'),
(26, 2, 4, 55, 5, '2020-11-10 02:10:11', '2020-11-10 02:10:11'),
(27, 2, 4, 56, 1, '2020-11-10 02:10:11', '2020-11-10 02:10:11'),
(28, 2, 4, 57, 3, '2020-11-10 02:10:11', '2020-11-10 02:10:11'),
(29, 2, 4, 58, 2, '2020-11-10 02:10:11', '2020-11-10 02:10:11'),
(30, 2, 4, 60, 1, '2020-11-10 02:10:11', '2020-11-10 02:10:11'),
(31, 2, 4, 32, 1, '2020-11-10 02:11:52', '2020-11-10 02:11:52'),
(32, 2, 4, 33, 2, '2020-11-10 02:11:52', '2020-11-10 02:11:52'),
(33, 2, 4, 32, 1, '2020-11-10 02:58:54', '2020-11-10 02:58:54'),
(34, 2, 4, 33, 4, '2020-11-10 02:58:54', '2020-11-10 02:58:54'),
(35, 2, 4, 34, 2, '2020-11-10 02:58:54', '2020-11-10 02:58:54'),
(36, 2, 4, 35, 5, '2020-11-10 02:58:54', '2020-11-10 02:58:54'),
(37, 11, 4, 32, 1, '2020-11-10 03:23:13', '2020-11-10 03:23:13'),
(38, 11, 4, 33, 2, '2020-11-10 03:23:13', '2020-11-10 03:23:13'),
(39, 11, 4, 34, 3, '2020-11-10 03:23:13', '2020-11-10 03:23:13'),
(40, 11, 4, 35, 5, '2020-11-10 03:23:13', '2020-11-10 03:23:13'),
(41, 11, 4, 36, 2, '2020-11-10 03:23:13', '2020-11-10 03:23:13'),
(42, 11, 4, 37, 3, '2020-11-10 03:23:13', '2020-11-10 03:23:13'),
(43, 11, 4, 38, 4, '2020-11-10 03:23:13', '2020-11-10 03:23:13'),
(44, 11, 4, 39, 2, '2020-11-10 03:23:13', '2020-11-10 03:23:13'),
(45, 11, 4, 40, 5, '2020-11-10 03:23:13', '2020-11-10 03:23:13'),
(46, 11, 4, 41, 2, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(47, 11, 4, 42, 3, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(48, 11, 4, 43, 3, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(49, 11, 4, 44, 2, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(50, 11, 4, 45, 5, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(51, 11, 4, 46, 5, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(52, 11, 4, 47, 5, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(53, 11, 4, 48, 5, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(54, 11, 4, 49, 5, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(55, 11, 4, 50, 5, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(56, 11, 4, 51, 5, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(57, 11, 4, 52, 5, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(58, 11, 4, 53, 3, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(59, 11, 4, 54, 2, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(60, 11, 4, 55, 3, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(61, 11, 4, 56, 5, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(62, 11, 4, 57, 3, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(63, 11, 4, 58, 2, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(64, 11, 4, 59, 5, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(65, 11, 4, 60, 2, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(66, 11, 4, 61, 3, '2020-11-10 03:23:14', '2020-11-10 03:23:14'),
(67, 11, 4, 32, 1, '2020-11-10 03:28:33', '2020-11-10 03:28:33'),
(68, 11, 4, 33, 2, '2020-11-10 03:28:33', '2020-11-10 03:28:33'),
(69, 11, 4, 34, 3, '2020-11-10 03:28:33', '2020-11-10 03:28:33'),
(70, 11, 4, 35, 2, '2020-11-10 03:28:33', '2020-11-10 03:28:33'),
(71, 11, 4, 36, 5, '2020-11-10 03:28:33', '2020-11-10 03:28:33'),
(72, 11, 4, 37, 3, '2020-11-10 03:28:33', '2020-11-10 03:28:33'),
(73, 11, 4, 32, 1, '2020-11-10 03:30:08', '2020-11-10 03:30:08'),
(74, 11, 4, 33, 2, '2020-11-10 03:30:08', '2020-11-10 03:30:08'),
(75, 11, 4, 34, 1, '2020-11-10 03:30:08', '2020-11-10 03:30:08'),
(76, 11, 4, 35, 3, '2020-11-10 03:30:09', '2020-11-10 03:30:09'),
(77, 11, 4, 49, 1, '2020-11-10 03:30:09', '2020-11-10 03:30:09'),
(78, 11, 4, 50, 2, '2020-11-10 03:30:09', '2020-11-10 03:30:09'),
(79, 11, 4, 51, 2, '2020-11-10 03:30:09', '2020-11-10 03:30:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_self_think`
--

CREATE TABLE `user_self_think` (
  `id` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `se_id` int(11) NOT NULL,
  `us_self_think` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_self_think`
--

INSERT INTO `user_self_think` (`id`, `us_id`, `se_id`, `us_self_think`, `created_at`, `updated_at`) VALUES
(1, 11, 4, 'sssssssssssssssssssssssssssssss', '2020-11-10 03:23:12', '2020-11-10 03:23:12'),
(2, 11, 4, '3333333333333333333333333', '2020-11-10 03:28:33', '2020-11-10 03:28:33'),
(3, 11, 4, '3333333333333333333333333', '2020-11-10 03:30:08', '2020-11-10 03:30:08');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category_evaluation`
--
ALTER TABLE `category_evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`eva_id`),
  ADD KEY `eva_id` (`eva_id`,`eva_name`,`eva_ad_create_point`,`created_at`,`updated_at`),
  ADD KEY `ca_id` (`ca_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`sch_id`),
  ADD KEY `sch_id` (`sch_id`,`sch_name`,`sch_address`,`created_at`,`updated_at`);

--
-- Chỉ mục cho bảng `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`sci_id`),
  ADD KEY `sci_id` (`sci_id`,`sci_name`,`sci_id_school`,`created_at`,`updated_at`),
  ADD KEY `sci_id_school` (`sci_id_school`);

--
-- Chỉ mục cho bảng `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`se_id`),
  ADD KEY `se_id` (`se_id`,`se_year`,`se_name`,`created_at`,`updated_at`);

--
-- Chỉ mục cho bảng `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `st_id` (`st_id`,`st_us_id`,`st_sum_point`,`st_standard_deviation`,`updated_at`,`created_at`),
  ADD KEY `st_us_id` (`st_us_id`),
  ADD KEY `st_id_2` (`st_id`,`st_us_id`,`st_sum_point`,`st_standard_deviation`,`updated_at`,`created_at`,`se_id`),
  ADD KEY `se_id` (`se_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`us_id`),
  ADD KEY `us_id` (`us_id`,`us_name`,`us_is_admin`,`us_is_active`,`us_sci_id`,`us_id_school`,`password`,`created_at`,`updated_at`),
  ADD KEY `us_id_school` (`us_id_school`),
  ADD KEY `us_sci_id` (`us_sci_id`);

--
-- Chỉ mục cho bảng `user_eval_sem`
--
ALTER TABLE `user_eval_sem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`us_id`,`se_id`,`eval_id`),
  ADD KEY `se_id` (`se_id`),
  ADD KEY `eval_id` (`eval_id`),
  ADD KEY `us_id` (`us_id`);

--
-- Chỉ mục cho bảng `user_self_think`
--
ALTER TABLE `user_self_think`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`us_id`,`se_id`,`us_self_think`),
  ADD KEY `us_id` (`us_id`),
  ADD KEY `se_id` (`se_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category_evaluation`
--
ALTER TABLE `category_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `eva_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `school`
--
ALTER TABLE `school`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `science`
--
ALTER TABLE `science`
  MODIFY `sci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `semester`
--
ALTER TABLE `semester`
  MODIFY `se_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `statistic`
--
ALTER TABLE `statistic`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `user_eval_sem`
--
ALTER TABLE `user_eval_sem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `user_self_think`
--
ALTER TABLE `user_self_think`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`ca_id`) REFERENCES `category_evaluation` (`id`);

--
-- Các ràng buộc cho bảng `science`
--
ALTER TABLE `science`
  ADD CONSTRAINT `science_ibfk_1` FOREIGN KEY (`sci_id_school`) REFERENCES `school` (`sch_id`);

--
-- Các ràng buộc cho bảng `statistic`
--
ALTER TABLE `statistic`
  ADD CONSTRAINT `statistic_ibfk_1` FOREIGN KEY (`st_us_id`) REFERENCES `users` (`us_id`),
  ADD CONSTRAINT `statistic_ibfk_2` FOREIGN KEY (`se_id`) REFERENCES `semester` (`se_id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`us_id_school`) REFERENCES `school` (`sch_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`us_sci_id`) REFERENCES `science` (`sci_id`);

--
-- Các ràng buộc cho bảng `user_eval_sem`
--
ALTER TABLE `user_eval_sem`
  ADD CONSTRAINT `user_eval_sem_ibfk_1` FOREIGN KEY (`se_id`) REFERENCES `semester` (`se_id`),
  ADD CONSTRAINT `user_eval_sem_ibfk_2` FOREIGN KEY (`eval_id`) REFERENCES `evaluation` (`eva_id`),
  ADD CONSTRAINT `user_eval_sem_ibfk_3` FOREIGN KEY (`us_id`) REFERENCES `users` (`us_id`);

--
-- Các ràng buộc cho bảng `user_self_think`
--
ALTER TABLE `user_self_think`
  ADD CONSTRAINT `user_self_think_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `users` (`us_id`),
  ADD CONSTRAINT `user_self_think_ibfk_2` FOREIGN KEY (`se_id`) REFERENCES `semester` (`se_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2020 lúc 04:20 PM
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
-- Cấu trúc bảng cho bảng `evaluation`
--

CREATE TABLE `evaluation` (
  `eva_id` int(11) NOT NULL,
  `eva_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eva_ad_create_point` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `evaluation`
--

INSERT INTO `evaluation` (`eva_id`, `eva_name`, `eva_ad_create_point`, `created_at`, `updated_at`) VALUES
(1, 'Thiết kế các hoạt động giảng dạy và học tập được dựa trên triết lý giáo dục của Nhà trường', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(2, 'Thiết kế các hoạt động giảng dạy và học tập phù hợp để đạt được chuẩn đầu ra tương ứng của học phần ', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(3, 'Tạo cơ hội cho sinh viên tích cực tham gia vào các hoạt động học tập', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(4, 'Đổi mới phương pháp giảng dạy trong học phần được phân công', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(5, 'Hướng dẫn sinh viên phương pháp học tập trong quá trình dạy học nhằm thúc đẩy khả năng học tập suốt đời', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(6, 'Thực hiện đủ thời lượng, nội dung của học phần theo kế hoạch, đề cương học phần đã công bố', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(7, 'Phản hồi kết quả kiểm tra đánh giá giúp sinh viên cải thiện kết quả học tập', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(8, 'Hỗ trợ sinh viên trong học tập và nghiên cứu', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(9, 'Ứng dụng công nghệ trong dạy học', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(10, 'Thực hiện chuẩn mực của nhà giáo (lên lớp đúng giờ, giao tiếp và ứng xử đúng mực với sinh viên…)', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(11, 'Chất lượng thực hiện công tác cố vấn học tập (nếu có tham gia)', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(12, 'Chất lượng thực hiện công tác quản lý từ cấp bộ môn trở lên (nếu có tham gia)', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(13, 'Hoàn thành định mức nghiên cứu khoa học trong năm', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(14, 'Tự bồi dưỡng và nâng cao trình độ', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(15, 'Cung cấp đầy đủ thông tin về học phần cho sinh viên theo quy định', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(16, 'Giảng viên chủ động cập nhật kiến thức mới phục vụ nội dung học phần được phân công giảng dạy', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(17, 'Giảng viên được tham gia xây dựng và đóng góp ý kiến điều chỉnh học phần', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(18, 'Giảng viên được tham gia xây dựng và đóng góp ý kiến điều chỉnh chương trình đào tạo', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(19, 'Phương pháp kiểm tra đánh giá sử dụng trong học phần phù hợp với chuẩn đầu ra tương ứng của học phần', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(20, 'Việc kiểm tra, đánh giá kết quả học tập của sinh viên được rà soát và đánh giá thường xuyên để đảm bảo sự tương thích và phù hợp với chuẩn đầu ra.', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(21, 'Việc tổ chức ra đề thi, chấm thi được thực hiện theo đúng quy định', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(22, 'Văn bản về triết lý giáo dục của Nhà trường được phổ biến tới giảng viên', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(23, 'Nhu cầu được đào tạo và tham gia các khóa học bồi dưỡng nâng cao trình độ và kỹ năng của giảng viên được Nhà trường đáp ứng', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(24, 'Kết quả làm việc của giảng viên được đánh giá công bằng', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(25, 'Giảng viên hài lòng đối với các chính sách đãi ngộ chung của Nhà trường', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(26, 'Có đủ phòng học với trang thiết bị phù hợp để hỗ trợ hoạt động đào tạo và nghiên cứu trong phạm vi học phần', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(27, 'Có đủ phòng làm việc với trang thiết bị phù hợp để hỗ trợ hoạt động đào tạo và nghiên cứu trong phạm vi học phần', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(28, 'Có đủ phòng thí nghiệm hoặc phòng thực hành và trang thiết bị phù hợp để hỗ trợ các hoạt động đào tạo và nghiên cứu trong phạm vi học phần', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(29, 'Các yêu cầu sửa chữa cơ sở vật chất hoặc trang thiết bị phục vụ học tập, nghiên cứu được đáp ứng', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(30, 'Thư viện và các nguồn học liệu phù hợp và được cập nhật để hỗ trợ các hoạt động đào tạo và nghiên cứu trong phạm vi học phần', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25'),
(31, 'Cơ sở hạ tầng công nghệ hỗ trợ việc ứng dụng công nghệ thông tin vào dạy và học đáp ứng được yêu cầu', 0, '2020-10-29 12:02:25', '2020-10-29 12:02:25');

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
  `se_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `statistic`
--

INSERT INTO `statistic` (`st_id`, `st_us_id`, `st_sum_point`, `st_standard_deviation`, `updated_at`, `created_at`, `se_id`) VALUES
(2, 2, 140, 0, '2020-10-29 12:07:24', '2020-10-29 12:07:24', 4);

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
  `us_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`us_id`, `us_name`, `us_is_admin`, `us_is_active`, `us_sci_id`, `us_id_school`, `password`, `created_at`, `updated_at`, `email`, `email_verified_at`, `remember_token`, `us_avatar`) VALUES
(2, 'Đặng Văn Tú', 1, NULL, 4, 2, '$2y$10$rVxOA6wCU2O6VnwdGu2gTuV/1iL1gbECtoW8N2CxFJrgZcfeaqNSm', '2020-10-28 00:51:12', '2020-11-06 08:00:06', 'dangvantu1999@gmail.com', '2020-10-28 07:51:12', NULL, '/uploads/profile/20201106145613.jpg'),
(6, 'add1', 1, NULL, 1, 1, '$2y$10$KHXWiOBhUeYYpra2ATvMiur1jbiwpxexIZgzaN6ULEMqTT5APhT06', '2020-10-31 01:55:30', '2020-10-31 01:55:30', 'add1@gmail.com', '2020-10-31 08:55:30', NULL, '/uploads/profile/default.png'),
(7, 'test', 1, NULL, 2, 1, '$2y$10$qMdXygEwlJm5hhAoNW527OTJupz5Ikibd.mmJOyrOI0bDj5bm1e4a', '2020-11-05 20:55:11', '2020-11-05 20:55:27', 'test@gmail.com', '2020-11-06 03:55:11', NULL, '/uploads/profile/default.png'),
(8, 'dangvantu', 2, NULL, 1, 1, '$2y$10$flukID6HyGxGJa7P9cdCNOPZg0Mwv9WbKPEseqihQ6RDyBy1V422S', '2020-11-06 02:09:52', '2020-11-06 03:04:09', 'vantund2017@gmail.com', '2020-11-06 09:09:52', NULL, '/uploads/profile/default.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_eval_sem`
--

CREATE TABLE `user_eval_sem` (
  `id` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `se_id` int(11) NOT NULL,
  `eval_id` int(11) NOT NULL,
  `user_rate_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_eval_sem`
--

INSERT INTO `user_eval_sem` (`id`, `us_id`, `se_id`, `eval_id`, `user_rate_point`) VALUES
(1, 2, 4, 11, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`eva_id`),
  ADD KEY `eva_id` (`eva_id`,`eva_name`,`eva_ad_create_point`,`created_at`,`updated_at`);

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `eva_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user_eval_sem`
--
ALTER TABLE `user_eval_sem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

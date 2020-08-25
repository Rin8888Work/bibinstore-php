-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 22, 2020 lúc 11:07 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dukka_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_quantity` int(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_cate` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name_cate`) VALUES
(1, 'Áo'),
(2, 'Quần'),
(3, 'Đồ Lót'),
(4, 'Phụ Kiện'),
(5, 'Giày');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collection`
--

CREATE TABLE `collection` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `tieu_de` varchar(255) COLLATE utf8_bin NOT NULL,
  `tac_gia` varchar(255) COLLATE utf8_bin NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content` text COLLATE utf8_bin NOT NULL,
  `thumbnail` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `collection`
--

INSERT INTO `collection` (`id`, `name`, `tieu_de`, `tac_gia`, `create_date`, `content`, `thumbnail`) VALUES
(1, 'Xuân', 'Bộ Sưu Tập Mùa Xuân', 'Nguyễn Văn Phước', '2020-02-22 07:08:47', 'Dukka thể hiện phong cách riêng bằng bộ sưu tập đa dạng màu sắc rực rỡ. Không giống với nhiều thương hiệu khác, nhà thiết kế của thương hiệu lại cho ra mắt bộ sưu tập khá kín đáo. Những bộ váy dài được cắt theo lối cổ điển cùng nhiều tông màu hòa lẫn vào nhau, tạo sự cuốn hút từ khán giả.', 'spring-0.jpg'),
(2, 'Hạ', 'Bộ Sưu Tập Mùa Hạ', 'Nguyễn Văn Phước', '2020-02-22 07:09:10', 'Dukka thể hiện phong cách riêng bằng bộ sưu tập đa dạng màu sắc rực rỡ. Không giống với nhiều thương hiệu khác, nhà thiết kế của thương hiệu lại cho ra mắt bộ sưu tập khá kín đáo. Những bộ váy dài được cắt theo lối cổ điển cùng nhiều tông màu hòa lẫn vào nhau, tạo sự cuốn hút từ khán giả.', 'summer-0.jpg'),
(3, 'Thu', 'Bộ Sưu Tập Mùa Thu', 'Hoàng Huỳnh Đăng Phụng', '2020-02-22 07:07:44', 'Dukka thể hiện phong cách riêng bằng bộ sưu tập đa dạng màu sắc rực rỡ. Không giống với nhiều thương hiệu khác, nhà thiết kế của thương hiệu lại cho ra mắt bộ sưu tập khá kín đáo. Những bộ váy dài được cắt theo lối cổ điển cùng nhiều tông màu hòa lẫn vào nhau, tạo sự cuốn hút từ khán giả.', 'autumn-0.jpg'),
(4, 'Đông', 'Bộ Sưu Tập Mùa Đông', 'Hoàng Huỳnh Đăng Phụng', '2020-02-22 07:09:16', 'Dukka thể hiện phong cách riêng bằng bộ sưu tập đa dạng màu sắc rực rỡ. Không giống với nhiều thương hiệu khác, nhà thiết kế của thương hiệu lại cho ra mắt bộ sưu tập khá kín đáo. Những bộ váy dài được cắt theo lối cổ điển cùng nhiều tông màu hòa lẫn vào nhau, tạo sự cuốn hút từ khán giả.', 'winter-0.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text COLLATE utf8_vietnamese_ci NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_pro` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `love`
--

CREATE TABLE `love` (
  `id` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_new` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `content` text COLLATE utf8_vietnamese_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `img` text COLLATE utf8_vietnamese_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nhan_xet` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `view` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_new`, `title`, `content`, `id_user`, `img`, `create_date`, `nhan_xet`, `view`) VALUES
(1, 'THE BEST STREET STYLE FROM LONDON FASHION WEEK', 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaeratS.ed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat', 1, 'latest-1.jpg', '2020-02-22 08:40:50', '“ Technology is nothing. What\'s important is that you have a faith in people, that                                 they\'re basically good and smart, and if you give them tools, they\'ll do wonderful                                 things with them.”', '12'),
(3, 'phạm đức bình \"ít me\"', 'Ông Phạm Phương Bình, Hiệu phó Trường THPT Nguyễn Hữu Huân (Q.Thủ Đức, TP.HCM), nói rằng việc cho học sinh nghỉ trong thời gian vừa qua đều là giải pháp mang tính tình thế, cho dù các trường, giáo viên, học sinh luôn sẵn sàng trở lại trường nhưng vẫn luôn bị động. Vì vậy, với đề xuất của UBND TP.HCM, các trường đều mong Chính phủ, các bộ, ban ngành có quyết định sớm để cơ sở giáo dục chủ động xây dựng kế hoạch thực hiện nhiệm vụ năm học trong thời gian tới.', 1, 'latest-2.jpg', '2020-02-22 08:40:54', '“ Technology is nothing. What\'s important is that you have a faith in people, that                                 they\'re basically good and smart, and if you give them tools, they\'ll do wonderful                                 things with them.”', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_pro` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `detail` text COLLATE utf8_vietnamese_ci NOT NULL,
  `id_cate` int(11) NOT NULL,
  `promotion` int(11) NOT NULL,
  `id_sex` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `view` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_pro`, `name`, `price`, `detail`, `id_cate`, `promotion`, `id_sex`, `img`, `view`, `color`) VALUES
(4, 'Nữ 2', 200, 'Đẹp', 2, 50, 2, 'women-2.jpg', 10, ''),
(5, 'Nữ 3', 200, 'Đẹp', 3, 50, 2, 'women-3.jpg', 0, ''),
(6, 'Nữ 4', 200, 'Đẹp', 4, 0, 2, 'women-4.jpg', 0, ''),
(8, 'Nam 2', 200, 'Đẹp', 1, 50, 1, 'man-2.jpg', 20, ''),
(9, 'Nam 3', 200, 'Đẹp', 1, 50, 1, 'man-3.jpg', 20, ''),
(10, 'Nam 4', 200, 'Đẹp', 1, 0, 1, 'man-4.jpg', 20, ''),
(11, 'Nam ', 200, 'đẹp lắm', 1, 50, 1, 'man-5.jpg', 120, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pro_images`
--

CREATE TABLE `pro_images` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `image` text COLLATE utf8_vietnamese_ci NOT NULL,
  `id_collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `pro_images`
--

INSERT INTO `pro_images` (`id`, `id_prod`, `color`, `image`, `id_collection`) VALUES
(3, 11, 'Trắng', 'man-5.jpg', 1),
(4, 11, 'Đen', 'man-6.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sex`
--

CREATE TABLE `sex` (
  `id_sex` int(11) NOT NULL,
  `name_sex` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `sex`
--

INSERT INTO `sex` (`id_sex`, `name_sex`, `image`) VALUES
(1, 'Nam', 'banner-1.jpg'),
(2, 'Nữ', 'banner-2.jpg'),
(3, 'Trẻ Em', 'banner-3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_vietnamese_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `event` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `sale` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `img`, `type`, `event`, `content`, `sale`) VALUES
(1, 'hero-1.jpg', 0, 'BLACK FRIDAY', 'Giảm giá các mặt hàng nữ nhân dịp cuối năm.', 50),
(2, 'hero-2.jpg', 0, 'WEEKEND', 'Giảm giá các mặt hàng nữ nhân dịp cuối năm.', 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` int(255) NOT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `address`, `email`, `phone`, `password`, `permission`) VALUES
(1, 'Nguyễn Văn Phước', 'Phan Văn Hớn', 'phuocnv106@gmail.com', 365610561, '6f92cf36d7eb4bd0cff63b30fe22c5b3', 0),
(2, 'Hồ Thị vân anh', 'phan văn trị', 'vta@gmail.com', 867856579, '6f92cf36d7eb4bd0cff63b30fe22c5b3', 0),
(4, 'Nguyễn Văn Phước', 'ádasdasdasd', 'phuoc', 414521632, 'c4ca4238a0b923820dcc509a6f75849b', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_news` (`id_news`),
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `id_cart` (`id_cart`);

--
-- Chỉ mục cho bảng `love`
--
ALTER TABLE `love`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_cate` (`id_cate`),
  ADD KEY `id_sex` (`id_sex`);

--
-- Chỉ mục cho bảng `pro_images`
--
ALTER TABLE `pro_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_collection` (`id_collection`);

--
-- Chỉ mục cho bảng `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`id_sex`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `love`
--
ALTER TABLE `love`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `pro_images`
--
ALTER TABLE `pro_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sex`
--
ALTER TABLE `sex`
  MODIFY `id_sex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_new`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `products` (`id_pro`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id_cart`);

--
-- Các ràng buộc cho bảng `love`
--
ALTER TABLE `love`
  ADD CONSTRAINT `love_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id_pro`),
  ADD CONSTRAINT `love_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_sex`) REFERENCES `sex` (`id_sex`);

--
-- Các ràng buộc cho bảng `pro_images`
--
ALTER TABLE `pro_images`
  ADD CONSTRAINT `pro_images_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `products` (`id_pro`),
  ADD CONSTRAINT `pro_images_ibfk_2` FOREIGN KEY (`id_collection`) REFERENCES `collection` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

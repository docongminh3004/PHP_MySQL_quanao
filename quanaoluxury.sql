-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 05:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanaoluxury`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_desc` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_image_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `blog_desc`, `blog_content`, `blog_image`, `blog_image_list`, `blog_status`, `created_at`, `updated_at`) VALUES
(1, 'GUCCI', NULL, 'Gucci là hãng thời trang và đồ da nổi tiếng của Ý. Theo tạp chí BusinessWeek, hãng thời trang này thu được khoảng 4,2 tỷ euro trên toàn cầu vào năm 2008. Hãng xếp thứ 41 trong danh sách 100 thương hiệu hàng đầu thế giới do tạp chí bình chọn năm 2009. Tính đến năm 2009, Gucci có khoảng 278 cửa hàng trên toàn cầu. Tập đoàn Gucci hiện do Công ty Kering của Pháp sở hữu. Hãy cùng nhìn lại lịch sử Gucci suốt gần một thế kỷ qua.', 'm51.jpg', '', NULL, NULL, NULL),
(2, 'DOLCE', NULL, 'Con đường phát triển của thương hiệu Dolce & Gabbana chưa từng trải đầy hoa hồng và lãng mạn như những thiết kế của họ mà ngược lại vô cùng chông gai và đầy thử thách. Ngay từ bộ sưu tập đầu tiên, thương hiệu thời trang Dolce & Gabbana đã phải rất chật vật khi phải nhờ đến những người mẫu nghiệp dư là bạn của hai nhà sáng lập để đi catwalk cho show thời trang đầu tiên tại Milan. \r\n \r\nNăm 1986, Dolce & Gabbana ra mắt bộ sưu tập thứ hai. Cũng trong năm đó, thương hiệu mở cửa hàng đầu tiên tại thành phố Legnano, Milan.\r\n\r\nCuối thập niên 1980, với mẫu váy Sicilian, bộ sưu tập thứ tư của nhà mốt này mới thật sự gây tiếng vang trong làng mốt. Trải qua nhiều áp lực kinh tế và sự khắc khe từ giới phê bình, mãi đến bộ sưu tập thứ tư này, giá trị và phong cách của Dolce & Gabbana mới được làng mốt nhìn nhận một cách đúng đắn. Cũng bắt đầu từ đây, tiếng tăm của nhà mốt này bắt đầu vươn xa ra khỏi biên giới nước Ý để đến thị trường quốc tế. ', 'm52.jpg', NULL, NULL, NULL, NULL),
(3, 'Louis Vuitton', NULL, 'Vài năm trở lại đây, khi nền công nghiệp thời trang chứng kiến sự trỗi dậy mạnh mẽ của phong cách đường phố tại các sàn runway danh tiếng, NTK Virgil Abloh – Giám đốc nghệ thuật mảng thời trang nam của Louis Vuitton – đã thành công trong việc mang sự phóng khoáng, bụi bặm từ các món đồ streetwear vào các BST thời trang của mình. Phong cách này dần tái định nghĩa chuẩn mực ăn mặc ở nam giới đương đại và thậm chí còn ảnh hưởng đến cách phối trang phục may đo cao cấp vốn đã thống lĩnh ở các BST thời trang xa xỉ từ trước đến nay. Trong BST Louis Vuitton Men Thu-Đông 2020/21, NTK Virgil Abloh đã nghiên cứu chuyên sâu quá trình “tiến hóa” của suit và sự kiến tạo dresscode truyền thống nhằm mở ra một kỷ nguyên mới trong nền công nghiệp thời trang nam hiện đại. Trong màn ra mắt BST lần này, Virgil chuyển tải thông điệp về nét đẹp truyền thống, thương mại và thành công vào các thiết kế trang phục may đo tinh tế cùng những món đồ bằng da cao cấp.', 'm53.jpg', NULL, NULL, NULL, NULL),
(4, 'HERMES', NULL, 'Hermès Paris hay đơn giản là Hermes, là một trong những nhãn hiệu thời trang cao cấp được thành lập cách đây gần 200 năm. Cụ thể vào năm 1837, một người đàn ông Pháp có tên là Thierry Hermes – một thợ đóng yên ngựa và làm những chiếc dây cương bằng da. Kể từ đó, xưởng da của ông dần phát triển và trở thành một thương hiệu chuyên sản xuất đồ da xa xỉ nhất thế giới, được các ngôi sao giàu có và nổi tiếng biết đến và ưa thích những món đồ phụ trang của thương hiệu Hermes với logo hình chữ H và hình ảnh một người Đức đang điều khiển cỗ xe ngựa.', 'm54.jpg', NULL, NULL, NULL, NULL),
(5, 'Chanel', NULL, 'Lại là một thương hiệu thời trang đến từ nước Pháp. Chanel SA hay Chanel là tên một thương hiệu thời trang chuyên về các dòng thời trang, trang sức, nước hoa…Được thành lập năm 1910 bởi Coco Chanel, một người phụ nữ tài năng và là biểu tượng thời trang lúc bấy giờ. Sự đơn giản nhưng phóng khoáng, sắc sảo được thể hiện đậm nét trên các sản phẩm thời trang mà bà mong muốn mang đến cho phái đẹp.', 'm55.png', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(5) NOT NULL,
  `brand_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'GUCCI'),
(2, 'DOLCE'),
(3, 'VALENTINO'),
(4, 'ADIDAS'),
(5, 'BBR'),
(6, 'HQ'),
(7, 'BOBUI'),
(8, 'KENZO'),
(9, 'DSQ'),
(10, 'LEVIS'),
(11, 'LOUIS VUITTON'),
(12, 'DIOR');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'quan bo', 'ko', 1, '2021-04-22 02:14:27', '2021-04-16 02:14:27'),
(2, 'bo the thao', 'ko', 1, '2021-04-22 02:14:27', '2021-05-10 10:53:03'),
(3, 'ao somi', 'ko', 1, '2021-04-22 02:14:27', '2021-04-15 02:15:12'),
(4, 'quan vai', 'ko', 1, '2021-04-22 02:14:27', '2021-04-24 02:14:27'),
(16, 'áo cộc', 'khong', 1, '2021-04-28 22:06:21', '2021-04-28 22:06:21'),
(28, 'áo hàn quốc', 'khong', 1, '2021-05-03 01:45:25', '2021-05-03 01:48:45'),
(35, 'áo dài tay', 'khong', 1, '2021-05-03 08:24:04', '2021-05-03 08:24:04'),
(36, 'Hot trell', 'khong', 0, '2021-05-03 08:24:55', '2021-05-03 08:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_07_155914_sanpham', 2),
(5, '2021_04_23_012608_update', 3),
(6, '2021_04_23_014136_category', 4),
(7, '2021_05_20_075110_tbl_customer', 5),
(8, '2021_05_20_154902_tbl_shipping', 6),
(12, '2021_05_24_023514_tbl_payment', 7),
(13, '2021_05_24_023827_tbl_order', 7),
(14, '2021_05_24_024132_tbl_order_details', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `prd_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `quantily` int(10) DEFAULT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prd_name`, `category_id`, `image`, `price`, `quantily`, `description`, `brand_id`) VALUES
(1, 'Quần bò nam', 2, 'm01.jpg', 300000, 1, 'màu xám', 2),
(2, 'Áo cộc nam ', 6, 'm02.jpg', 300, 1, 'màu trắng', 6),
(3, 'Áo cộc ', 6, 'm03.jpg', 300, 1, 'màu xám', 6),
(4, 'Quần soc bò ', 2, 'm04.jpg', 500, 1, 'màu trắng', 2),
(5, 'Bộ thể thao', 4, 'm05.jpg', 700, 1, 'màu đen', 4),
(6, 'Áo cộc', 6, 'm06.jpg', 300, 1, 'màu đen', 6),
(7, 'Áo somi', 5, 'm07.jpg', 900, 1, 'màu xanh dương', 5),
(8, 'Áo somi', 5, 'm08.jpg', 900, 1, 'màu vàng ', 5),
(9, 'Áo khoác bò', 2, 'm09.jpg', 1000, 1, 'màu xanh', 2),
(10, 'Áo cộc có cổ', 1, 'm10.jpg', 400, 1, 'màu trắng', 1),
(11, 'Áo nỉ dài tay', 4, 'm11.jpg', 300, 1, 'màu trắng', 4),
(12, 'Áo cộc bobui', 7, 'm12.jpg', 500, 1, 'màu đen', 7),
(13, 'Áo nỉ ', 9, 'm13.jpg', 300, 1, 'màu đen', 9),
(14, 'Áo nỉ', 9, 'm14.jpg', 300, 1, 'màu hồng', 9),
(15, 'Áo somi', 5, 'm15.jpg', 900, 1, 'màu đen kẻ caro', 5),
(16, 'Áo cộc có cổ', 8, 'm16.jpg', 500, 1, 'màu đen', 8),
(17, '', 8, 'm17.jpg', 500, 1, 'màu hồng', 8),
(18, 'Áo cộc lv', 10, 'm18.jpg', 800, 1, 'màu đen', 10),
(19, 'Áo cộc lv', 10, 'm19.jpg', 800, 1, 'màu trắng', 10),
(20, 'Áo cộc lv', 10, 'm20.jpg', 800, 1, 'màu nâu', 10),
(21, 'Áo cộc gucci', 1, 'm21.jpg', 500, 1, 'màu cam', 1),
(22, 'Áo cộc gucci', 1, 'm22.jpg', 500, 1, 'màu đen', 1),
(23, 'Áo cộc gucci', 1, 'm23.jpg', 500, 1, 'màu trắng', 1),
(24, 'Áo cộc louis vuitton', 11, 'm24.jpg', 900, 1, 'màu đen bạc', 11),
(25, 'Áo cộc kenzo', 8, 'm25.jpg', 300, 1, 'màu trắng', 8),
(26, 'Áo cộc kenzo', 0, 'm26.jpg', 300, 1, 'màu xám', 8),
(27, 'Áo cộc kenzo', 0, 'm27.jpg', 300, 1, 'màu đen', 8),
(28, 'Áo cộc kenzo', 0, 'm28.jpg', 300, 1, 'màu hồng', 8),
(29, 'Quần bò DSQ', 0, 'm29.jpg', 500, 1, 'màu đen', 9),
(30, 'Quần bò DSQ', 0, 'm30.jpg', 500, 1, 'màu xanh ', 9),
(31, 'Quần bò Dior', 0, 'm31.jpg', 800, 1, 'màu xám bạc', 12),
(32, 'Bộ thể thao', 0, 'm32.jpg', 700, 1, 'màu xanh dương', 4),
(33, 'Bộ thể thao', 0, 'm33.jpg', 700, 1, 'màu xanh', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giaban` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensanpham`, `hinhanh`, `giaban`, `created_at`, `updated_at`, `brand_id`) VALUES
(2, 'Quần bò', 'm01.jpg', NULL, NULL, NULL, NULL),
(3, 'Áo cộc ', 'm02.jpg', 300, NULL, NULL, NULL),
(4, 'âdv', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(7, 'long', 'long@gmail.com', '0f5264038205edfb1ac05fbb0e8c5e94', '12345678', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 7, 15, 5, '3,388.00', 'Đang chờ xử lý', NULL, NULL),
(2, 7, 16, 6, '3,388.00', 'Đang chờ xử lý', NULL, NULL),
(3, 7, 16, 7, '0.00', 'Đang chờ xử lý', NULL, NULL),
(4, 7, 16, 8, '0.00', 'Đang chờ xử lý', NULL, NULL),
(5, 7, 16, 9, '0.00', 'Đang chờ xử lý', NULL, NULL),
(6, 7, 17, 10, '363.00', 'Đang chờ xử lý', NULL, NULL),
(7, 7, 19, 11, '1,089.00', 'Đang chờ xử lý', NULL, NULL),
(8, 7, 20, 12, '847.00', 'Đang chờ xử lý', NULL, NULL),
(9, 7, 20, 13, '0.00', 'Đang chờ xử lý', NULL, NULL),
(10, 7, 21, 14, '968.00', 'Đang chờ xử lý', NULL, NULL),
(11, 7, 21, 15, '0.00', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 33, 'Bộ thể thao', '700', 4, NULL, NULL),
(2, 2, 33, 'Bộ thể thao', '700', 4, NULL, NULL),
(3, 6, 27, 'Áo cộc kenzo', '300', 1, NULL, NULL),
(4, 7, 24, 'Áo cộc louis vuitton', '900', 1, NULL, NULL),
(5, 8, 33, 'Bộ thể thao', '700', 1, NULL, NULL),
(6, 10, 20, 'Áo cộc lv', '800', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Đang chờ xử lý', NULL, NULL),
(2, '1', 'Đang chờ xử lý', NULL, NULL),
(3, '1', 'Đang chờ xử lý', NULL, NULL),
(4, '1', 'Đang chờ xử lý', NULL, NULL),
(5, '1', 'Đang chờ xử lý', NULL, NULL),
(6, '2', 'Đang chờ xử lý', NULL, NULL),
(7, '1', 'Đang chờ xử lý', NULL, NULL),
(8, '2', 'Đang chờ xử lý', NULL, NULL),
(9, '2', 'Đang chờ xử lý', NULL, NULL),
(10, '2', 'Đang chờ xử lý', NULL, NULL),
(11, '2', 'Đang chờ xử lý', NULL, NULL),
(12, '2', 'Đang chờ xử lý', NULL, NULL),
(13, '2', 'Đang chờ xử lý', NULL, NULL),
(14, '2', 'Đang chờ xử lý', NULL, NULL),
(15, '2', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(1, '0', 'ha noi', '03918173', 'long@gmail.com', 'khongg', NULL, NULL),
(2, 'long', 'ha noi', '02928342', 'long@gmail.com', 'ko', NULL, NULL),
(3, 'do van long', 'tpHCM', '12345678', 'long@gmail.com', 'khong', NULL, NULL),
(4, 'do van long', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(5, 'do van long', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(6, 'lethanhngoc', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(7, 'do van long', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(8, 'l thanh ngo', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(9, 'do van long', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(10, 'le thanhngo', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(11, 'le', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(12, 'do van long', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'ko', NULL, NULL),
(13, 'do van long', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(14, 'minh', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(15, 'thao', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'ko', NULL, NULL),
(16, 'nghia', 'hungyen', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(17, 'nhat', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL),
(18, 'tuan anh', '123/hung yen', '0292837', 'docongminh3004@gmail.com', 'nhan hang thanh toan', NULL, NULL),
(19, 'tuan anh', '123/hung yen', '0292837', 'docongminh3004@gmail.com', 'nhan hang thanh toan', NULL, NULL),
(20, 'tuan', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'ko', NULL, NULL),
(21, 'long', 'tpHCM', '0292837', 'docongminh3004@gmail.com', 'giao hang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `update`
--

CREATE TABLE `update` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `update`
--
ALTER TABLE `update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `update`
--
ALTER TABLE `update`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

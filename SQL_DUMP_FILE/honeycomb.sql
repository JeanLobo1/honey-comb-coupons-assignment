/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `cart_item` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT '0',
  `coupon_code` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_price` int DEFAULT NULL,
  `discount_percent` int DEFAULT NULL,
  `total_price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `cart_item` (`id`, `user_id`, `coupon_code`, `product_name`, `product_price`, `discount_percent`, `total_price`, `created_at`, `updated_at`) VALUES
	(1, 2, 'ABC123', 'Car1', 100, 20, 80, '2024-05-21 16:49:23', '2024-05-21 16:49:25'),
	(2, 2, 'A1B2C', 'car1', 120, 10, 108, '2024-05-21 17:52:08', '2024-05-21 17:52:08'),
	(6, 2, 'A1B2C', 'car1', 120, 10, 108, '2024-05-21 18:01:00', '2024-05-21 18:01:00'),
	(7, 2, 'XYZ11', 'car6', 120, 11, 107, '2024-05-21 18:44:51', '2024-05-21 18:44:51'),
	(8, 2, 'A1B2C', 'car4', 120, 10, 108, '2024-05-21 18:45:01', '2024-05-21 18:45:01'),
	(9, 2, 'ABC123', 'car3', 120, 20, 96, '2024-05-21 18:45:21', '2024-05-21 18:45:21'),
	(10, 2, NULL, 'car2', 120, NULL, 120, '2024-05-21 18:46:31', '2024-05-21 18:46:31');

CREATE TABLE IF NOT EXISTS `coupons` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `coupon_name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `coupon_code` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `percentage` int DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_code`, `percentage`, `from`, `to`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'ABC123', 'ABC123', 20, '2024-05-21', '2024-05-26', '1', '2024-05-21 10:19:01', '2024-05-21 10:19:02'),
	(2, 'A1B2C', 'A1B2C', 10, '2024-05-19', '2024-05-30', '1', '2024-05-21 10:19:03', '2024-05-21 10:19:05'),
	(4, 'XYZ11', 'XYZ11', 11, '2024-05-14', '2024-05-29', '1', '2024-05-21 20:23:56', '2024-05-21 20:23:57');

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_no` bigint DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `name`, `email`, `contact_no`, `role`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'Jean Lobo', 'lobojeanz@gmail.com', 7090960721, 'admin', '1234', '2024-05-21 04:02:20', '2024-05-21 04:02:20'),
	(2, 'latha', 'latha@gmail.com', 8888888888, 'user', '123456', '2024-05-21 04:04:12', '2024-05-21 04:04:12'),
	(3, 'shanthi', 'shanthi@gmail.com', 9999999999, 'user', 'password', '2024-05-21 09:35:06', '2024-05-21 09:35:07'),
	(4, 'vikram', 'vikram@gmail.com', 7777777777, 'admin', '123456', '2024-05-21 09:35:54', '2024-05-21 09:35:55');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

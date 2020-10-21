-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 03:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `photo_path`, `created_at`, `updated_at`) VALUES
(2, 'asuz', 'ایسوس نام خود را از پگاسوس گرفته است, اسب بالداری در اساطیر یونان که نماد اندیشه و خرد است. ایسوس تجسم قدرت, پاکی و روح ماجراجوی این موجود فوق العاده است و پرواز در اوج را با هر محصول خود ایجاد می کند.\r\n\r\nصنعت فناوری اطلاعات تایوان طی چند دهه اخیر رشد خارق العاده ای داشته و اکنون این کشور نیروی محرک بازارهای جهانی است. ایسوس مدت ها است که در خط مقدم این شکوفایی قرار دارد و حیات خود را در یک شرکت کوچک با تعداد اندکی کارمند برای تولید مادربورد آغاز کرد اما اکنون یک کمپانی پیشرو در تایوان با 12.500 کارمند در سراسر جهان است. ایسوس در اغلب حوزه های فناوری مانند اجزای رایانه, لوازم جانبی, نوت بوک, تبلت, سرور و گوشی های هوشمند کالا تولید می کند.\r\n\r\nخلاقیت کلید موفقیت ایسوس است. در سال 2011 برای مخاطبان پرشور خود در نمایشگاه کامپیوتکس از PadFone رونمایی کرد و امسال مدیر ایسوس, Jonney Shih, یکبار دیگر این پرچم را با معرفی اولترابوک های با کاربرد دوگانه TAICHI و Transformer Book به احتزاز درآورد.\r\n\r\nASUS TAICHI یک اولترابوک با نمایشگر منحصر به فرد لمسی در دو طرف است که به کاربران امکان می دهد تنها با بازکردن آن به سرعت بین نوت بوک و تبلت جابجا شوند. Transformer Book یک اولترابوک قابل تبدیل است که غیر از پایه کیبورد با نور زمینه کلیدها, یک نوت بوک با هارد دیسک و فضای ذخیره سازی و همچنین یک تبلت با تشخیص چندین لمس همزمان و درایو SSD است.\r\n\r\nهمراه با سری جدید تبلت های هیجان انگیز ویندوز RT و ویندوز 8, ایسوس دارای رده وسیعی از محصولات خلاقانه است که تصور کاربران برای ورود به عصر جدید رایانش ابری را آماده خواهد کرد.\r\n\r\nاین نگاه راهبردی دلیلی است که ایسوس می تواند طراحی و نوآوری با کیفیت بالا را برای همگان فراهم کند و مورد تحسین گسترده قرار گیرد. محصولات ایسوس در سال 2013 موفق بع دریافت 4256 جایزه و تقدیر بین المللی شده اند یعنی 11 جایزه در هر روز و برای تمام روزهای سال. حجم سالانه تولیدات ایسوس در بخش نوت بوک بطور پیوسته با رشد همراه بوده و درآمد در سال 2011 درآمد آن به 11.9 میلیارد دلار رسید.', '1603227809Captur2e.PNG', '2020-10-17 05:17:45', '2020-10-20 17:34:41'),
(11, 'lenevo', 'لنوو بزرگترین تولید کننده لپ تاپ در سطح جهان است', '1603012799lenevo.png', '2020-10-18 05:49:59', '2020-10-20 17:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `cat_property`
--

CREATE TABLE `cat_property` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cat_property`
--

INSERT INTO `cat_property` (`id`, `category_id`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 1, 17, '2020-10-14 08:50:55', '2020-10-22 08:50:55'),
(2, 4, 15, NULL, NULL);

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2020_10_02_194235_create_product_properties_table', 2),
(21, '2020_09_20_161408_create_pro_cats_table', 3),
(22, '2020_10_04_140509_create_property_values_table', 3),
(24, '2020_10_05_173419_create_brands_table', 4),
(25, '2020_10_20_210838_create_products_table', 5),
(26, '2020_10_21_084729_inductor_table_between_procat_tbl_and_prop_tbl', 6);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount_price` double(8,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `sku`, `slug`, `status`, `price`, `discount_price`, `description`, `brand_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'sdc', 'sdcsdc', 'sdcsdc', '0', 0.00, 0.00, 'sdcsdc', 11, 5, '2020-10-14 21:20:27', '2020-10-13 21:20:27'),
(2, 'ال تاب فلان', '123143', 'ال تاب فلان', '0', 999999.99, 100.00, 'یزسیزسیزیسزیسزسیزسیزس', 11, 2, '2020-10-21 08:26:24', '2020-10-27 08:26:24'),
(3, 'لب تاب لنوو', '123edas21', 'L-laptop', '0', 22000.00, 200.00, 'استوک دو سال کارکرده سالم', 11, 9, '2020-10-21 10:08:33', '2020-10-21 10:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_properties`
--

CREATE TABLE `product_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_properties`
--

INSERT INTO `product_properties` (`id`, `title`, `type`, `created_at`, `updated_at`) VALUES
(15, 'جنس', 'تنها', '2020-10-03 09:29:49', '2020-10-03 09:29:49'),
(16, 'رنگ', 'تنها', '2020-10-03 09:29:53', '2020-10-03 09:29:53'),
(17, 'کشور سازنده', 'چندتایی', '2020-10-05 05:22:07', '2020-10-05 05:22:07'),
(18, 'جنس بدنه', 'چندتایی', '2020-10-05 06:40:48', '2020-10-05 06:40:48'),
(19, 'اندازه', 'تنها', '2020-10-05 09:31:27', '2020-10-05 09:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `property_values`
--

CREATE TABLE `property_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_values`
--

INSERT INTO `property_values` (`id`, `name`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 'نخ', 15, '2020-08-26 09:06:26', '2020-08-25 09:06:26'),
(2, 'پلاستیک', 15, '2020-10-06 14:20:01', '2020-08-25 09:06:26'),
(3, 'قرمز', 16, '2020-10-21 14:20:39', '2020-08-25 09:06:26'),
(4, 'پلاستیک سخت', 15, '2020-10-05 05:19:36', '2020-10-05 05:19:36'),
(5, 'ایران-آمریکا', 17, '2020-10-05 05:23:56', '2020-10-05 06:40:13'),
(6, 'نخ', 15, '2020-10-05 05:41:34', '2020-10-05 05:41:34'),
(7, 'آلومینیوم', 18, '2020-10-05 06:41:04', '2020-10-05 06:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `pro_cats`
--

CREATE TABLE `pro_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pro_cats`
--

INSERT INTO `pro_cats` (`id`, `name`, `meta_description`, `meta_title`, `meta_keywords`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'لباس مردانه', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-10-04 10:43:00', '2020-10-04 10:43:00'),
(2, 'لباس زنانه', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-10-04 10:43:04', '2020-10-04 10:43:04'),
(3, 'لباس بچگانه', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-10-04 10:43:08', '2020-10-04 10:43:08'),
(4, 'لباس زمستانی', '$request->meta_description', '$request->meta_description', '$request->meta_description', 1, '2020-10-04 10:43:20', '2020-10-04 10:43:20'),
(5, 'دستکش', '$request->meta_description', '$request->meta_description', '$request->meta_description', 4, '2020-10-04 10:43:36', '2020-10-04 10:43:36'),
(6, 'دستکش نخی', '$request->meta_description', '$request->meta_description', '$request->meta_description', 5, '2020-10-04 10:43:52', '2020-10-04 10:43:52'),
(7, 'کاپشن', '$request->meta_description', '$request->meta_description', '$request->meta_description', 4, '2020-10-04 10:44:10', '2020-10-04 10:44:10'),
(8, 'الکترونیکی', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-10-21 09:20:18', '2020-10-21 09:20:18'),
(9, 'لب تاپ', '$request->meta_description', '$request->meta_description', '$request->meta_description', 8, '2020-10-21 09:20:48', '2020-10-21 09:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_number` bigint(20) DEFAULT NULL,
  `province_id` bigint(20) DEFAULT NULL,
  `gender` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `national_code`, `phone`, `birthday`, `bank_number`, `province_id`, `gender`, `nation`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mahan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mahan@m.com', NULL, '$2y$10$MO1dUvucJrf5ZW6Mz8fwzOfLbe4nC3gvbdXNkujsZ6AbDj4j2xSWW', NULL, NULL, 'a3x5GDMTuwOP4W3MOeO80uurMdNPADX8iRgWSNv8kcLhr2XnCt7Gjr7OVxxY', '2020-09-21 05:33:27', '2020-09-21 05:33:27'),
(2, 'tina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 't@t.com', NULL, '$2y$10$AXqmavvol/htFTmTXgzhcOZxq3aB2ZbBrTXS68nLThbGCHboXGGVS', NULL, NULL, NULL, '2020-09-23 08:24:31', '2020-09-23 08:24:31'),
(3, 'ali', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ali@a.com', NULL, '$2y$10$SfwkdgmxTelgYqIp.woDvuOoqk6UIhai2yYIfV/n81lRNuMZlZwMa', NULL, NULL, NULL, '2020-10-18 12:52:11', '2020-10-18 12:52:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `cat_property`
--
ALTER TABLE `cat_property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_property_category_id_foreign` (`category_id`),
  ADD KEY `cat_property_property_id_foreign` (`property_id`);

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
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `product_properties`
--
ALTER TABLE `product_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_values`
--
ALTER TABLE `property_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_values_property_id_foreign` (`property_id`);

--
-- Indexes for table `pro_cats`
--
ALTER TABLE `pro_cats`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cat_property`
--
ALTER TABLE `cat_property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_properties`
--
ALTER TABLE `product_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `property_values`
--
ALTER TABLE `property_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pro_cats`
--
ALTER TABLE `pro_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cat_property`
--
ALTER TABLE `cat_property`
  ADD CONSTRAINT `cat_property_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `pro_cats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cat_property_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `product_properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `pro_cats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_values`
--
ALTER TABLE `property_values`
  ADD CONSTRAINT `property_values_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `product_properties` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Database: `shopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_24_060208_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `category`, `image`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'pizza', '1-600x600_1532977430.png', 'CARBONARA', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '3.50', '2018-07-30 17:03:50', '2018-07-30 17:03:50'),
(2, 1, 'pizza', '2-600x600_1532977458.png', 'VEGETARIAN', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '5.50', '2018-07-30 17:04:18', '2018-07-30 17:04:18'),
(3, 1, 'pizza', '3-600x600_1532977481.png', 'DIABLO', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '6.00', '2018-07-30 17:04:41', '2018-07-30 17:04:41'),
(4, 1, 'pizza', '4-600x600_1532977503.png', 'SAPORITA', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '7.30', '2018-07-30 17:05:03', '2018-07-30 17:05:03'),
(5, 1, 'pizza', '5-600x600_1532977548.png', 'CAPRICIOSSA', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '8.99', '2018-07-30 17:05:48', '2018-07-30 17:05:48'),
(6, 1, 'pizza', '6-600x600_1532977575.png', 'PEPPERONI', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '9.99', '2018-07-30 17:06:15', '2018-07-30 17:06:15'),
(7, 1, 'pizza', '7-600x600_1532977595.png', 'PROSCIUTTO', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '10.00', '2018-07-30 17:06:35', '2018-07-30 17:06:35'),
(8, 1, 'pizza', '10-600x600_1532977617.png', 'NEAPOLITANO', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '10.00', '2018-07-30 17:06:57', '2018-07-30 17:06:57'),
(9, 1, 'pizza', '11-600x600_1532977646.png', 'TARANTELLA', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '7.50', '2018-07-30 17:07:26', '2018-07-30 17:07:26'),
(10, 1, 'pizza', '12-600x600_1532977667.png', 'TRADITIONAL', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '4.99', '2018-07-30 17:07:47', '2018-07-30 17:07:47'),
(11, 1, 'pizza', 'pizza_3_1532977694.png', 'FORTEZZA', '10" whole grain, thin crust with grilled chicken, roasted garlic, bruschetta, Italian homestyle tomato sauce, Italiano blend seasoning, parmesan cheese and mozzarella cheese.', '5.50', '2018-07-30 17:08:14', '2018-07-30 17:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'admin', 'owner@business.com', '$2y$10$iKcA38pWX15xlbdDRO9sJOW75dFA7ZBtXqZ/44ZDJf1h5yhTpP.iK', NULL, '2018-07-30 16:59:16', '2018-07-30 16:59:16');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

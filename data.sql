--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `pic`, `created_at`, `updated_at`) VALUES
(1, '/img/brands/brand1.png', '2020-08-28 14:23:54', '2020-08-28 14:23:54'),
(2, '/img/brands/brand2.png', '2020-08-28 14:24:06', '2020-08-28 14:24:06'),
(3, '/img/brands/brand3.png', '2020-08-28 14:24:13', '2020-08-28 14:24:13'),
(4, '/img/brands/brand4.png', '2020-08-28 14:24:20', '2020-08-28 14:24:20'),
(5, '/img/brands/brand5.png', '2020-08-28 14:24:32', '2020-08-28 14:24:32');

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `pic`, `created_at`, `updated_at`,`status`) VALUES
(1, 'Manufacturing & Processing Machanery', '/img/categories/cat2.png', NULL, NULL,1),
(2, 'Industerial Equipment & Energy', '/img/categories/cat1.png', NULL, NULL,1),
(3, 'construction & decoration', '/img/categories/cat3.png', NULL, NULL,1),
(4, 'Electronics & security', '/img/categories/cat9.png', NULL, NULL,1),
(5, 'Health & Medicine', '/img/categories/cat7.png', NULL, NULL,1),
(6, 'Customer Electronics & Entertainment', '/img/categories/cat4.png', NULL, NULL,1),
(7, 'Consumer Good & Daily Use', '/img/categories/cat8.png', NULL, NULL,1),
(8, 'Fasion & Popular Items', '/img/categories/cat6.png', NULL, NULL,1),
(9, 'Transportation & Vehicle Accessories', '/img/categories/cat5.png', NULL, '2020-09-03 09:10:16',1);

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `pic`, `name`, `title`, `quote`, `created_at`, `updated_at`) VALUES
(1, '/img/comments/profile-1t.jpg', 'Ali Hamedani', 'CEO of Apple', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. ', '2020-08-28 14:29:26', '2020-08-28 14:29:26'),
(2, '/img/comments/profile-2t.jpg', 'Saeed Mahdavi', 'Google Manager', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. ', '2020-08-28 14:30:17', '2020-08-28 14:30:17'),
(3, '/img/comments/profile-3t.jpg', 'Zahra Alavi', 'Content Manager', 'Some quick example text to build on the card title and make up the bulk of the card\'s content. ', '2020-08-28 14:31:05', '2020-08-28 14:31:05');


--
-- Dumping data for table `expos`
--

INSERT INTO `expos` (`id`, `title`, `pic`, `start`, `end`, `type`, `type_desc`, `theme`, `description`, `status`, `created_at`, `updated_at`, `category_id`, `user_id`) VALUES
(1, 'Job Expo', '/img/expos/expo-1.jpg', NULL, NULL, 1, '', '', 'Job Expo Description', 1, NULL, NULL, 1, NULL),
(2, 'Gaming Expo', '/img/expos/expo-2.jpg', NULL, NULL, 1, '', '', 'Gaming Expo Description', 1, NULL, NULL, 6, NULL),
(3, 'Chicago Expo', '/img/expos/expo-3.jpg', NULL, NULL, 1, '', '', 'Chicago Expo Description', 1, NULL, NULL, 8, NULL),
(4, 'Swiss Expo', '/img/expos/expo-4.jpg', NULL, NULL, 1, '', '', 'Swiss Expo Description', 1, NULL, NULL, 3, NULL),
(5, 'Tech Expo', '/img/expos/expo-5.jpg', '2020-09-09 22:16:30', '2020-10-16 22:16:30', 0, '', '', 'Tech Expo Description', 1, NULL, NULL, 7, NULL),
(6, 'Gaming Expo', '/img/expos/expo-6.jpg', '2020-08-02 22:16:57', '2020-08-20 22:16:57', 0, '', '', 'Gaming Expo Description', 1, NULL, NULL, 7, NULL),
(7, 'Future Energy Expo', '/img/expos/expo-7.jpg', NULL, NULL, 1, '', '', 'Future Energy Expo Description', 1, NULL, NULL, 9, NULL),
(8, 'World fair Expo', '/img/expos/expo-8.jpg', '2020-09-01 22:17:49', '2020-09-10 22:17:49', 0, '', '', 'World fair Expo Description', 1, NULL, NULL, 3, NULL);


--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `pic`, `title`, `description`, `video_time`, `photo_count`, `catalog_page`, `color`, `type`, `status`, `duration`, `price`, `created_at`, `updated_at`) VALUES
(1, '/img/packages/send.png', 'Basic', '<ul class=\"benefit-list\">\r\n<li>Video 1min</li>\r\n<li>Photo 5</li>\r\n<li>Catalog 5page</li>\r\n<li>About us</li>\r\n<li>Contact us</li>\r\n<li>Our Costomer</li>\r\n<li>Booth</li>\r\n</ul>', 1, 5, 5, '#ec3725', 1, 1, 0, '50.00', '2020-08-22 09:18:14', '2020-08-31 06:55:07'),
(2, '/img/packages/crown.png', 'Premium', '<ul class=\"benefit-list\">\r\n<li>Video 3min</li>\r\n<li>Photo +10</li>\r\n<li>Catalog +10page</li>\r\n<li>About us</li>\r\n<li>Contact us</li>\r\n<li>Our Costomer</li>\r\n<li>Booth</li>\r\n</ul>', 3, NULL, NULL, '#f39c12', 1, 1, 0, '200.00', '2020-08-22 09:19:19', '2020-08-22 09:19:19'),
(3, '/img/packages/shuttle.png', 'Standard', '<ul class=\"benefit-list\">\r\n<li>Video 2min</li>\r\n<li>Photo 10</li>\r\n<li>Catalog 10page</li>\r\n<li>About us</li>\r\n<li>Contact us</li>\r\n<li>Our Costomer</li>\r\n<li>Booth</li>\r\n</ul>', 2, 10, 10, '#06a9f6', 1, 1, 0, '100.00', '2020-08-22 09:18:14', '2020-08-31 06:54:51');

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '    <div class=\"page-content\">\r\n      <div class=\"container info\">\r\n        <h3>About Us</h3>\r\n        <p>The first and the best location for launch your Online Booth.</p>\r\n        <p>\r\n          for mor information contact to\r\n          <a href=\"mailto:info@expo.com\">Info@Expo.com</a>\r\n        </p>\r\n      </div>\r\n\r\n      <div id=\"peoples\">\r\n        <div class=\"container\">\r\n          <div class=\"row\">\r\n            <div class=\"col center-text\">\r\n              <h3 class=\"container-title\">Our Team</h3>\r\n            </div>\r\n          </div>\r\n          <div class=\"row\">\r\n            <div class=\"col-sm-4 col-xs-12\">\r\n              <div class=\"card\">\r\n                <img\r\n                  class=\"card-img-top\"\r\n                  src=\"/img/profile/profile-4t.jpg\"\r\n                  alt=\"Card image cap\"\r\n                />\r\n                <div class=\"card-body\">\r\n                  <h5 class=\"card-title\">Mohsen Shabanian</h5>\r\n                  <p class=\"card-text\">Creator and designer</p>\r\n                </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"col-sm-4 col-xs-12\">\r\n              <div class=\"card\">\r\n                <img\r\n                  class=\"card-img-top\"\r\n                  src=\"/img/profile/profile-5t.jpg\"\r\n                  alt=\"Card image cap\"\r\n                />\r\n                <div class=\"card-body\">\r\n                  <h5 class=\"card-title\">Saeed Rostami</h5>\r\n                  <p class=\"card-text\">Chief executive officer</p>\r\n                </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"col-sm-4 col-xs-12\">\r\n              <div class=\"card\">\r\n                <img\r\n                  class=\"card-img-top\"\r\n                  src=\"/img/profile/profile-6t.jpg\"\r\n                  alt=\"Card image cap\"\r\n                />\r\n                <div class=\"card-body\">\r\n                  <h5 class=\"card-title\">Siamak hadadi</h5>\r\n                  <p class=\"card-text\">Producer and Mentor</p>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>', 1, '2020-08-30 17:15:20', '2020-08-31 19:33:52'),
(2, 'Contact Us', '    <div class=\"page-content\">\r\n      <div class=\"container\">\r\n        <div class=\"row contact-title\">\r\n          <div class=\"col text-center\">\r\n            <h3>Contact us</h3>\r\n            <p>\r\n              You can contact us via\r\n              <a href=\"mailto:Info@Expo.com\">Info@Expo.com</a>\r\n            </p>\r\n          </div>\r\n        </div>\r\n        <div class=\"row\">\r\n          <div class=\"col-sm-4 col-xs-12\">\r\n            <div class=\"card address\">\r\n              <div class=\"card-body\">\r\n                <h5 class=\"card-title\">Contact info</h5>\r\n                <address><b>Address:</b> Ramsar, Narenj Bon</address>\r\n                <p><b>Tel:</b> +98 11 5525 9606</p>\r\n                <p>\r\n                  <b>Email:</b> <a href=\"mailto:Info@Expo.com\">Info@Expo.com</a>\r\n                </p>\r\n                <p>\r\n                  <b>Instagram:</b>\r\n                  <a href=\"http://instagram.com/Expo\">Info@Expo.com</a>\r\n                </p>\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div class=\"col-sm-6 col-xs-12\">\r\n            <iframe\r\n              src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1965.7933387003045!2d50.642676929075584!3d36.91991441018561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8b098380f9422f%3A0x24a853b767ff9961!2z2YXZiNiz2LPZhyDYjCDYotmF2YjYsti02q_Yp9mHINmIINmB2LHZiNi02q_Yp9mHINmG2LPZitmFINix2KfZhdiz2LE!5e1!3m2!1sen!2s!4v1598806786666!5m2!1sen!2s\"\r\n              width=\"800\"\r\n              height=\"450\"\r\n              frameborder=\"0\"\r\n              style=\"border: 0\"\r\n              allowfullscreen=\"\"\r\n              aria-hidden=\"false\"\r\n              tabindex=\"0\"\r\n            ></iframe>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>', 1, '2020-08-30 17:15:20', '2020-08-30 17:15:20');

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `pic`, `title`, `abstract`, `description`, `status`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, '/img/posts/pic.jpg', 'Start our website', 'you can register and make user.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 0, '2020-08-31 17:49:27', '2020-08-31 17:49:27');

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `title`, `description`, `other`, `url`, `info`, `created_at`, `updated_at`) VALUES
(1, 'tel', NULL, '+98 545453321', NULL, NULL, NULL, '2020-08-28 10:05:32', '2020-09-03 05:20:54'),
(2, 'address', NULL, 'Ramsar, Narenjbon, Number 1456 ', NULL, NULL, NULL, '2020-08-28 10:05:32', '2020-08-28 10:05:32'),
(3, 'logo', NULL, '/img/Logo.png', NULL, NULL, NULL, '2020-08-28 10:05:32', '2020-08-28 10:05:32'),
(4, 'footer', NULL, NULL, NULL, NULL, '<section id=\"footer\" class=\"text-center\">  <div class=\"container\"> <a class=\"navbar-brand\" href=\"#\"><img  src=\"/img/Logo.png\"  height=\"50\"  class=\"d-inline-block align-top\"  alt=\"\"  loading=\"lazy\"/> </a> <p>Enjoy a full day with Gravitas Beauty Expo designed for beauty brandfounders to connect, vend and be supported by beauty lovers, buyers,influencers and press. </p> <p><i class=\"fas fa-phone-alt\"></i> +98 11 5522 9606</p> <p><i class=\"fas fa-at\"></i> info@Expo.com</p> <div class=\"social-network\"><a href=\"#\">  <i class=\"fab fa-facebook-f\"></i></a><a href=\"#\">  <i class=\"fab fa-twitter\"></i></a><a href=\"#\">  <i class=\"fab fa-instagram\"></i></a><a href=\"#\">  <i class=\"fab fa-google-plus-g\"></i></a><a href=\"#\">  <i class=\"fab fa-telegram-plane\"></i></a> </div>  </div></section><section id=\"copyright\" class=\"text-center\">  <p>©Copyright | Expo 2020. All Right Reserved. v0.1</p></section>', '2020-08-28 10:07:29', '2020-08-28 10:07:29'),
(5, 'exhibitor_benefit', 'Our Benefit for Exhibitors', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras. Dictumst quisque sagittis purus sit', 'Register', '/register', NULL, '2020-08-30 14:01:21', '2020-08-30 14:01:21'),
(6, 'visitor_benefit', 'Our Benefit for Visitors', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras. Dictumst quisque sagittis purus sit', 'See Expos', '/expos', NULL, '2020-08-30 14:01:21', '2020-08-30 14:01:21'),
(7, 'facebook', NULL, 'https://facebook.com', NULL, NULL, NULL, '2020-09-03 13:53:33', '2020-09-03 13:55:18'),
(8, 'twitter', NULL, 'https://twitter.com', NULL, NULL, NULL, '2020-09-03 13:53:33', '2020-09-03 13:55:18'),
(9, 'instagram', NULL, 'https://instagram.com', NULL, NULL, NULL, '2020-09-03 13:53:33', '2020-09-03 13:55:18'),
(10, 'telegram', NULL, 'https://telegram.me', NULL, NULL, NULL, '2020-09-03 13:53:33', '2020-09-03 13:55:18');

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `pic`, `title`, `description`, `btn_title`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, '/img/slider/Landing.png', 'Build<br/>Something', 'Register to access to all the utilities.', 'Become An Exhibitors', '/register', '2020-08-29 06:30:18', '2020-08-29 06:30:18'),
(2, '/img/slider/Landing2.png', NULL, NULL, NULL, NULL, '2020-08-29 06:30:18', '2020-08-29 06:30:18');

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `title`, `pic`, `theme_url`, `theme`,`theme_id`, `created_at`, `updated_at`) VALUES
(1, 'Theme 1', '/img/theme/1.org.jpg', 'home.themes.theme1', 'theme1', 'theme1', '2020-08-22 08:55:14', '2020-08-22 08:55:14'),
(2, 'Theme 2', '/img/theme/2.org.jpg', 'home.themes.theme2', 'theme2', 'theme2', '2020-08-22 08:55:38', '2020-08-22 08:55:38'),
(3, 'Theme 3', '/img/theme/3.org.jpg', 'home.themes.theme3', 'theme3', 'theme3', '2020-08-22 08:55:53', '2020-08-22 08:55:53'),
(4, 'Theme 4', '/img/theme/4.org.jpg', 'home.themes.theme4', 'theme4', 'theme4', '2020-08-22 08:56:08', '2020-08-22 08:56:08'),
(5, 'Theme 5', '/img/theme/5.org.jpg', 'home.themes.theme5', 'theme5', 'theme5', '2020-08-22 08:56:22', '2020-08-22 08:56:22'),
(6, 'Theme 6', '/img/theme/6.org.jpg', 'home.themes.theme6', 'theme6', 'theme6', '2020-08-22 08:56:36', '2020-08-22 08:56:36');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `color`, `theme`, `address`, `mobile`, `tel`, `role_id`) VALUES
(1, 'admin', 'admin@namayeshagh.ir', NULL, '$2y$10$BIY7vkwbbCUhaf6Bj1fgmeYoGHcnCG7hm1l3boydkuR00ggxrMjc6', NULL, '2020-08-17 20:04:30', '2020-09-03 05:24:03', '', '#000000', '', '', '', '', 1),
(2, 'user', 'user@namayeshagh.ir', NULL, '$2y$10$i/17B1abjIHA4W99BlDQBOfKtooxSjzDWoMK95S33GdYk7rWidJQu', NULL, '2020-08-17 20:04:58', '2020-08-17 20:04:58', '', '', '', '', '', '', 0);

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `title`, `url_link`, `launch_day`, `status`, `expo_id`, `created_at`, `updated_at`) VALUES
(1, 'Chicago Expo Launch Day', NULL, '2020-10-14 08:31:04', 1, 3, '2020-08-28 14:24:32', '2020-08-28 14:24:32');

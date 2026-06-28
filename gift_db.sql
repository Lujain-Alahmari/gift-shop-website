-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 09:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gift_db`
--
CREATE DATABASE IF NOT EXISTS gift_db;
-- --------------------------------------------------------

--
-- Table structure for table `products`
--

use gift_db;

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(79, 'هدايا التخرج', 'هدايا التخرج.  يقدم متجرنا مجموعة متنوعة من هدايا التخرج وهي عبارة عن صندوق به أزهار بألوان وأشكال مختلفة بالإضافة إلى هدية تخرج  \"نشارككم حصاد عملكم وفرحة تخرجكم\".', 100, '1666897269WhatsApp Image 2022-10-25 at 16.23.39.jpg'),
(80, 'بوكس الهدايا المميز', 'ما أجمل ان يكون هناك اشخاص بوجودهم نشعر بحلو الحياة .. لأجلهم صممنا هدية تضيف للحظاتهم لمسة مميزة \r\n تحتوي العلبة على شموع وعطور برائحة اللافندر وشوكولاتة الحليب وبعض المفاجآت الصغيرة وهناك بعض الأشياء للعناية بالبشرة\r\nوالشيء المميز في متجرنا هو تصميمنا وتنوع بألوان وأحجام العلب', 130, '1666894976WhatsApp Image 2022-10-25 at 17.10.02.jpg'),
(78, 'بوكيه ورد', 'شارك مشاعرك مع أحبائك بهذه اللفتة المبهرة من الزهور الجميلة ،\r\nيقدم متجرنا مجموعة متنوعة ومبتكرة من باقات الورد بأنواع مختلفة من الورود والألوان الزاهية ، وتتوفر مع الباقه بطاقة بها رسالة او مبلغ مالي .', 80, '1666896864WhatsApp Image 2022-10-25 at 17.02.00.jpg'),
(77, 'مجموعة الهدايا المغلفة للاطفال', 'لمناسبات السعيدة وحفلات النجاح هي أشياء تظل ثابتة في ذاكرة الطفل على مر السنين.  ولكي نجعلها ذكرى سعيدة ، نقدم لك مجموعة جديدة من الهدايا بتصميم وتغليف دقيق  ابدعناه خصيصًا لطفلك.  يمكنك اختيار تصميم الهدايا والتغليف والكرت المناسب لك ولطفلك', 150, '1666894864WhatsApp Image 2022-10-25 at 16.52.18.jpg'),
(76, 'صندوق البيبي 4 قطع', 'يعد الطقم المكون من 4 قطع إضافة مثالية إلى خزانة ملابس طفلك الأساسية، فهو يشمل طقمين الكل في واحد بأزرار كبس في الأمام وبين الساقين، ولباسين قطعة واحدة بفتحة رقبة بتصميم متداخل لسهولة الارتداء والتغيير. صنعت اللعبة اللينة من فرو صناعي ناعم لتمنح صغيرك شعورًا لطيفًا عند احتضان تصميمها الرقيق والمثالي للاستخدام منذ الولادة. تعد هذه البطانية خيارًا مثاليًا للحفاظ على شعور صغيرك بالدفء والراحة أثناء النوم بفضل تصميمها المصنوع من قطن مسنوج ناعم مزين بنقشة جمل بلون مغاير. صنعت مربعات موسلين من قطن ناعم اوتتميز بثلاث نقشات مختلفة مما يجعلها مثالية للاستخدام أثناء الرضاعة أو للف الطفل فيها. كما تأتي بطقم من 3 صدريات مصنوعة من القطن ومشط للرضع  مصمم خصيصًا ليناسب شعر وبشرة الطفل الرقيقة.', 150, '1666894585WhatsApp Image 2022-10-25 at 16.45.18.jpg'),
(75, 'مجموعة البيبي', 'ابتكرنا لأجلك مجموعة جديدة تمامًا من الهدايا ذات التصميم الرقيق الذي أبدعناه خصيصًا للآباء والأمهات ولطفلهم الذي على وشك الوصول. ستجدين دائمًا هدية ملائمة لكل مناسبة ولكل أسرة بدءًا من الملابس ومرورًا بالبطانيات والدمى اللينة ووصولاً إلى علب البصمات. تأتي قطع هذه المجموعة بألوان فاتحة وهادئة وتزدان بالعديد من التفاصيل والرسمات الدقيقة المتقنة ما يجعلها مجموعة هدايا وجدت كي لا تنسى أبدًا.', 200, '1666894439WhatsApp Image 2022-10-25 at 16.45.18.jpg'),
(74, 'الصندوق السحري', 'تصميم الصندوق السحري، الذي يحتوي على 5 نكهات من الشاي المفضل لديك بالإضافة إلى مصفاة الأكواب الزجاجية ويوجد بعناية في وسط الصندوق.\r\n\r\nالنكهات:\r\n1. مينتي ريفريش: أوراق الزعتر والنعناع (منتج أرمينيا)\r\n2. جبل غائم: شاي أسود (منتج صيني)\r\n3. صباح الخير: الشاي الأسود، النعناع (منتج ألماني).\r\n4. الفانيليا السوداء: شاي أسود، فانيليا (منتج هندي)\r\n5. حلوى القصب', 150, '1666894350WhatsApp Image 2022-10-25 at 16.43.15.jpg'),
(73, 'صندوق شاي نجوى', 'جعلهم متحمسين لجلسة القادمة عندما تحصل عليهم صندوق شاي نجوى. يأتي هذا مع بيكان مكرمل مملح، والشاي مغربي بالنعناع ، وشاي بالزعفران ، وفوق كل ذلك ، تمت إضافة باقة استوما الوردي لضمان سعادة أحبائك.\r\n\r\n \r\n\r\n تفاصيل الهدية:\r\n\r\n٣ استوما الوردي\r\n١ بيكان مكرمل مملح\r\n١ شاي مغربي بالنعناع\r\n١ شاي بالزعفران', 120, '1666894111WhatsApp Image 2022-10-25 at 16.43.06.jpg'),
(81, 'المصحف الكريم بغلاف جلد', 'تم تنسيق هذه الهدية الفاخرة بكل عناية واهتمام لتكون الهدية المميزة لجميع احبابكم. تفاصيل الهدية: صندوق مصنوع من الجلد باللون البيج يحتوي على القرآن الكريم مع سبحة أنيقة. باقة أزهار ناعمة تحتوي على 5 من أزهار التوليب البنفسجية مع 3 من أزهار الكالا البيضاء', 90, '1666895060WhatsApp Image 2022-10-25 at 17.28.00.jpg'),
(82, 'صندوق العطر والشموع', 'أطلق العنان لنفسك وابدأ فى اختيار شموعك المفضلة المتميزة برائحة عطرية غير مسبوقة ، نحن نوفر لك أجود أنواع الزيوت العطرية والشموع  الطبيعية والنقية التي تمنحك رائحة عطرة ذات ثبات وتركيز عالى ، سوف تتميز برائحة شموعك المثالية،عند اختيار شموعك المفضلة احرص على تزوديها بأجمل الروائح المنعشة التي يفضلها الجميع و تبعث في النفس السرور . نحن نحرص على تقديم لك شموع و زيوت عطرية بأعلى مستوى من الجودة لتمنحك استخدام مميز  تحتوى المجموعة على : صندوق شموع يتكون من ٦ شموع بروائح مختلفة(اللافندر- التوت- الفانيليا - الشاي الاخضر- الياسمين )تساعد على الاسترخاء وتعطير المكان برائحتك المفضلة بمجرد اشعال الشمعة', 350, '1666895108WhatsApp Image 2022-10-25 at 17.44.13.jpg'),
(83, 'خدمة الطباعة', 'يقدم متجرنا خدمة الطباعة بأشكال والوان مختلفة تناسب جميع المناسبات بالعبارات المطلوبة', 50, '1666895517WhatsApp Image 2022-10-25 at 18.55.20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `phone` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `phone`, `password`) VALUES
(14, 'Admin', 'admin@giftshop.com', 1, '', '123456789'),
(18, 'mohamed', 'mohamed@yahoo.com', 0, '0512345678', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `total` float NOT NULL,
  `user_id` int(11) NOT NULL,
  `confirmed` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`id`, `product_id`, `amount`, `total`, `user_id`, `confirmed`) VALUES
(101, 79, 1, 100, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`id`, `user_id`, `customer_name`, `total`) VALUES
(20, 18, 'mohamed', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

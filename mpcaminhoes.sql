-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 10-Jun-2018 às 22:31
-- Versão do servidor: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.0.30-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpcaminhoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `title`, `created`, `modified`) VALUES
(3, 'galeria03', '2018-05-22 20:28:47', '2018-05-22 20:28:47'),
(4, 'galeria04', '2018-05-22 20:28:57', '2018-05-22 20:28:57'),
(5, 'categoria 2', '2018-06-07 23:24:08', '2018-06-07 23:24:08'),
(6, 'categoria 3', '2018-06-07 23:24:15', '2018-06-07 23:24:15'),
(7, 'Ferrari', '2018-06-08 13:00:33', '2018-06-08 13:00:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `images_vehicle`
--

CREATE TABLE `images_vehicle` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `images_vehicle`
--

INSERT INTO `images_vehicle` (`id`, `image`, `vehicle_id`, `created`, `modified`) VALUES
(1, '74db892b1de738c14b7a50880f848b13.jpg', 1, '2018-06-07 16:09:36', '2018-06-08 13:14:07'),
(2, '3f915e671a70f7598108e40b0fa1ba4b.png', 1, '2018-06-07 16:09:46', '2018-06-07 16:09:46'),
(3, 'db631f3f009e32b144327d63a75194bb.png', 1, '2018-06-07 16:10:15', '2018-06-07 16:10:15'),
(4, '2ab1fc0ef2db7113225ddf29db72c393.jpg', 1, '2018-06-07 23:42:10', '2018-06-07 23:42:10'),
(12, '4e0ad1326c5d0f3680ba5c3d1b2759be.png', 103, '2018-06-08 13:02:13', '2018-06-08 21:19:10'),
(13, '2604df32b2f92c8566fb3dc652800168.jpg', 104, '2018-06-08 13:16:39', '2018-06-08 21:10:23'),
(14, '522a347dd0199b02156e1720e51de753.jpg', 104, '2018-06-08 13:47:44', '2018-06-08 21:10:08'),
(15, '399dbc3ab93f41b38cb78fd195e6f42f.jpg', 106, '2018-06-08 21:15:54', '2018-06-08 21:15:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(180) NOT NULL,
  `description` tinytext NOT NULL,
  `text` text,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `text`, `image`, `created`, `modified`) VALUES
(1, 'Terça-feira', 'TESTEEEEEEEEEEEEEEEEEEEEEEEEE EEEEEEEEEEEEEEEE alalalslalskdlçajs djalks jdalkhfkjdshfk ldabfkjsd jhfgsdkjfh jdsgfjfdsfhsdkjfhsdkjfhskjd', '<div class=\"application-main \" style=\"box-sizing: border-box; color: rgb(36, 41, 46); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 14px;\">\r\n<div style=\"box-sizing: border-box;\">\r\n<div id=\"js-repo-pjax-container\" style=\"box-sizing: border-box;\">\r\n<div class=\"container new-discussion-timeline experiment-repo-nav  \" style=\"box-sizing: border-box; width: 980px; margin-right: auto; margin-left: auto;\">\r\n<div class=\"repository-content \" style=\"box-sizing: border-box;\">\r\n<div class=\"readme boxed-group clearfix announce instapaper_body md\" id=\"readme\" style=\"box-sizing: border-box; position: relative; margin-bottom: 30px; border-radius: 3px;\">\r\n<p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the &quot;Software&quot;), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>\r\n\r\n<p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>\r\n\r\n<p>THE SOFTWARE IS PROVIDED &quot;AS IS&quot;, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"footer container-lg px-3\" style=\"box-sizing: border-box; max-width: 1012px; margin-right: auto; margin-left: auto; color: rgb(36, 41, 46); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 14px; padding-right: 16px !important; padding-left: 16px !important;\">\r\n<div class=\"position-relative d-flex flex-justify-between pt-6 pb-2 mt-6 f6 text-gray border-top border-gray-light \" style=\"box-sizing: border-box; border-top: 1px solid rgb(234, 236, 239) !important; border-right-color: rgb(234, 236, 239) !important; border-bottom-color: rgb(234, 236, 239) !important; border-left-color: rgb(234, 236, 239) !important; color: rgb(88, 96, 105) !important; justify-content: space-between !important; position: relative !important; margin-top: 40px !important; padding-bottom: 8px !important; padding-top: 40px !important; font-size: 12px !important; display: flex !important;\">\r\n<ul>\r\n</ul>\r\n</div>\r\n</div>\r\n', 'f8b2cde6f63bf6cdff48f2d349ecf980.png', '2018-06-07 16:00:18', '2018-06-07 20:33:24'),
(2, 'teste mp', 'testando testando', '<p>testando noticia</p>\r\n', '85b5ac00aed855de233c0c1fd708aa36.jpg', '2018-06-07 19:40:42', '2018-06-07 19:40:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `created`, `modified`) VALUES
(2, 'Felipe Rodrigues', 'felipe', 'felipe2rod@gmail.com', '$2y$10$67bUavkTYwtcUy2o.x2h7eDej4KNFBJ.GwNUv9y3JB4w0JEtK4R2e', '2018-06-07 15:41:31', '2018-06-07 15:41:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `brand` varchar(90) NOT NULL,
  `model` varchar(90) NOT NULL,
  `year` int(4) NOT NULL,
  `image` varchar(255) NOT NULL,
  `promotion` tinyint(1) NOT NULL DEFAULT '0',
  `details` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `value`, `brand`, `model`, `year`, `image`, `promotion`, `details`, `category_id`, `created`, `modified`) VALUES
(1, 'Felipe Rodrigues', '58.50', 'TESTE', 'TESTE', 2030, 'f2802419496463bd5fdd8b7d3d7ad9fd.jpg', 0, 'TESTEEEEEEE', 3, '2018-06-07 16:04:59', '2018-06-10 15:46:20'),
(103, 'Ferrari teste andre', '120000.00', 'ferrari', 'f220', 2018, '1bba6ecacc0a5f2928397abbf5bacd44.png', 1, 'ferrari lalal', 7, '2018-06-08 13:01:36', '2018-06-10 15:46:30'),
(104, 'teste ferrari8', '255000.00', 'ferrari', 'f350', 2017, '7ca4dddb60a80c3d557277bacb31176a.jpg', 1, 'ferrari lalala', 7, '2018-06-08 13:15:38', '2018-06-10 15:46:39'),
(105, 'ferrari teste 3', '300000.00', 'ferrari', 'f400', 2018, 'd0d9e595ea7c001170e47494eb2f73c2.jpg', 0, 'ferari lalala', 7, '2018-06-08 21:12:25', '2018-06-10 15:46:52'),
(106, 'ferrari teste 3 lala', '255000.00', 'testeferrari', 'ferrariii', 2018, 'c7692876bb3bf96121139e4701a5ed4f.jpg', 1, 'teste', 7, '2018-06-08 21:15:24', '2018-06-10 15:47:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_vehicle`
--
ALTER TABLE `images_vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_vehicle` (`vehicle_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_category` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `images_vehicle`
--
ALTER TABLE `images_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `images_vehicle`
--
ALTER TABLE `images_vehicle`
  ADD CONSTRAINT `image_vehicle` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicle_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

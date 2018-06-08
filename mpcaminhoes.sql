-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 08-Jun-2018 às 00:21
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
(6, 'categoria 3', '2018-06-07 23:24:15', '2018-06-07 23:24:15');

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
(1, '2dc7b742865cadf65dee653cf67af0b7.png', 1, '2018-06-07 16:09:36', '2018-06-07 16:09:36'),
(2, '3f915e671a70f7598108e40b0fa1ba4b.png', 1, '2018-06-07 16:09:46', '2018-06-07 16:09:46'),
(3, 'db631f3f009e32b144327d63a75194bb.png', 1, '2018-06-07 16:10:15', '2018-06-07 16:10:15'),
(4, '2ab1fc0ef2db7113225ddf29db72c393.jpg', 1, '2018-06-07 23:42:10', '2018-06-07 23:42:10'),
(5, '74d73b29714e8ae948f97ce32c2cc7e6.jpg', 9, '2018-06-07 23:42:53', '2018-06-07 23:42:53'),
(6, 'f090f5d233f2e292236149cddcccf67f.png', 3, '2018-06-07 23:43:06', '2018-06-07 23:43:06'),
(7, 'f69ca6acb290d820cea919dca2bb5fbd.jpg', 102, '2018-06-08 02:25:17', '2018-06-08 02:25:17'),
(8, '3ce9fe389fc11ce670d5739324d1761d.jpg', 102, '2018-06-08 02:25:46', '2018-06-08 02:25:46'),
(9, '9916e388eb96e8b7bfc37d4d0fdf9c09.jpg', 90, '2018-06-08 02:44:33', '2018-06-08 02:44:33'),
(10, '1e0d6eb256d6f5f39d639eed5d91a745.jpg', 90, '2018-06-08 02:50:16', '2018-06-08 02:50:16'),
(11, '5c18f7d4be25320e9ac54b8ed5ebcfe1.jpg', 83, '2018-06-08 03:20:24', '2018-06-08 03:20:24');

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
  `promotion` tinyint(1) NOT NULL DEFAULT '0',
  `details` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `value`, `brand`, `model`, `year`, `promotion`, `details`, `category_id`, `created`, `modified`) VALUES
(1, 'Felipe Rodrigues', '58.50', 'TESTE', 'TESTE', 2030, 0, 'TESTEEEEEEE', 3, '2018-06-07 16:04:59', '2018-06-07 16:04:59'),
(2, 'Veiculo 1', '20000.40', 'Model 1', 'Modelo 1', 2024, 0, 'detalhes', 3, '2018-06-07 23:10:58', '2018-06-07 23:10:58'),
(3, 'in quis justo', '1908.23', 'Chevrolet', 'Silverado 3500', 2009, 0, 'varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget', 6, '2018-02-24 14:55:08', '2017-10-15 08:38:22'),
(4, 'mauris vulputate elementum', '7660.80', 'Chevrolet', 'Silverado 2500', 2006, 0, 'ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis', 3, '2018-02-14 16:36:08', '2018-04-25 18:53:09'),
(5, 'sagittis dui vel', '1029.74', 'Ford', 'Windstar', 2002, 0, 'massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh in', 3, '2018-05-16 19:34:26', '2017-07-29 13:10:48'),
(6, 'consequat in', '1673.36', 'Lincoln', 'Navigator', 2004, 0, 'proin at turpis a pede posuere nonummy integer non velit donec', 3, '2018-05-01 04:49:24', '2017-11-12 11:22:47'),
(7, 'nec condimentum neque', '5541.93', 'Ford', 'E-Series', 1996, 1, 'ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus', 6, '2018-04-21 20:00:22', '2018-01-03 01:21:17'),
(8, 'venenatis tristique fusce', '3018.25', 'Chevrolet', 'Avalanche 2500', 2003, 0, 'id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus', 5, '2017-07-09 20:02:56', '2018-03-06 17:06:11'),
(9, 'orci luctus', '5132.18', 'Audi', 'A6', 1997, 0, 'elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in', 5, '2017-08-16 02:02:45', '2017-06-26 05:14:29'),
(10, 'felis eu sapien', '1203.14', 'Ford', 'GT500', 2008, 0, 'et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus', 3, '2018-03-03 05:50:57', '2017-11-23 04:18:59'),
(11, 'enim blandit', '8960.85', 'Lamborghini', 'Gallardo', 2005, 0, 'tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis', 5, '2018-05-30 15:16:27', '2018-02-03 22:08:09'),
(12, 'metus arcu', '3875.65', 'Mercury', 'Tracer', 1996, 1, 'ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat', 5, '2017-10-12 15:45:24', '2018-01-08 21:29:58'),
(13, 'integer pede', '7890.40', 'Chrysler', '300', 2012, 0, 'suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla', 3, '2017-07-02 19:50:33', '2018-02-23 08:19:11'),
(14, 'tristique in', '5947.40', 'GMC', 'Jimmy', 1994, 0, 'pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est risus', 4, '2017-11-13 18:46:09', '2017-07-26 05:12:21'),
(15, 'erat vestibulum sed', '3506.54', 'Pontiac', 'Aztek', 2005, 1, 'vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat ante nulla', 6, '2017-10-18 02:17:52', '2018-05-31 16:17:49'),
(16, 'mauris sit', '7387.37', 'Jaguar', 'S-Type', 2003, 0, 'curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla', 3, '2017-10-08 02:30:07', '2017-10-15 02:34:32'),
(17, 'parturient montes', '6989.44', 'Lexus', 'HS', 2010, 0, 'sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum', 5, '2018-02-07 05:43:01', '2018-01-06 03:29:42'),
(18, 'ac est lacinia', '5833.61', 'Pontiac', 'Aztek', 2004, 1, 'sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus', 5, '2018-05-16 03:39:37', '2017-11-29 23:03:11'),
(19, 'in blandit', '6501.28', 'BMW', 'M Roadster', 2007, 1, 'quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut', 5, '2017-11-21 14:55:19', '2017-10-20 03:23:29'),
(20, 'eget eleifend luctus', '4607.30', 'Pontiac', 'Montana SV6', 2006, 0, 'luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis', 5, '2017-08-23 01:59:22', '2017-07-15 05:12:16'),
(21, 'nulla ac', '5573.21', 'Audi', 'Q7', 2011, 0, 'arcu libero rutrum ac lobortis vel dapibus at diam nam tristique tortor', 5, '2018-05-06 05:45:27', '2017-10-25 09:35:56'),
(22, 'in libero', '2031.59', 'Ford', 'Econoline E150', 1992, 0, 'ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis vel', 4, '2018-02-21 06:11:01', '2018-03-04 03:30:07'),
(23, 'habitasse platea dictumst', '9448.81', 'Oldsmobile', 'Cutlass Cruiser', 1993, 0, 'cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus', 3, '2017-08-14 14:39:36', '2017-07-23 21:02:19'),
(24, 'pede ullamcorper augue', '9340.80', 'Mitsubishi', 'Truck', 1987, 0, 'curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum', 4, '2017-12-16 20:54:42', '2018-05-05 03:22:11'),
(25, 'arcu adipiscing molestie', '2850.49', 'Land Rover', 'Range Rover', 2009, 0, 'posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros', 3, '2017-11-26 16:20:45', '2018-05-11 08:34:07'),
(26, 'nec nisi volutpat', '4336.92', 'Nissan', 'Quest', 2006, 1, 'metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean', 6, '2018-03-02 14:58:53', '2017-07-11 22:17:22'),
(27, 'vehicula consequat', '3461.93', 'Pontiac', 'Grand Am', 2003, 1, 'ut odio cras mi pede malesuada in imperdiet et commodo vulputate', 5, '2017-12-17 13:03:12', '2017-10-29 14:30:09'),
(28, 'pretium quis', '1785.93', 'Toyota', 'Supra', 1997, 0, 'lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et', 5, '2018-06-03 07:49:17', '2017-11-06 03:23:10'),
(29, 'sit amet nulla', '1656.56', 'Infiniti', 'Q', 1993, 0, 'blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt', 3, '2017-06-18 12:32:03', '2018-04-08 14:38:14'),
(30, 'sit amet diam', '7748.53', 'Jeep', 'Wrangler', 1999, 1, 'phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor', 6, '2018-04-26 12:51:18', '2017-07-25 20:41:18'),
(31, 'viverra dapibus nulla', '3975.76', 'Mazda', 'Millenia', 1999, 1, 'lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla', 4, '2018-05-22 10:22:56', '2018-01-05 00:54:15'),
(32, 'eget orci vehicula', '3791.22', 'Audi', '80', 1992, 0, 'massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero', 5, '2017-11-01 02:35:58', '2018-02-08 00:42:07'),
(33, 'proin at', '6450.26', 'Chevrolet', 'Express', 2011, 1, 'vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit', 6, '2017-08-06 07:18:43', '2017-07-27 08:14:24'),
(34, 'sollicitudin mi', '9063.75', 'Bentley', 'Continental GTC', 2012, 0, 'a libero nam dui proin leo odio porttitor id consequat', 5, '2018-01-11 12:51:39', '2017-06-21 22:37:15'),
(35, 'curabitur gravida nisi', '7719.32', 'Dodge', 'Ram 1500', 1995, 1, 'primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel', 3, '2017-06-13 01:10:01', '2017-10-31 20:11:33'),
(36, 'eget congue eget', '4286.19', 'Buick', 'Regal', 1995, 0, 'dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed', 5, '2018-02-11 21:45:14', '2017-06-23 06:59:22'),
(37, 'dui maecenas tristique', '2145.34', 'Subaru', 'Alcyone SVX', 1993, 1, 'primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices', 5, '2017-07-24 05:20:02', '2018-03-16 15:18:28'),
(38, 'semper porta', '3597.07', 'Eagle', 'Vision', 1994, 0, 'vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id', 4, '2018-04-11 11:09:13', '2018-04-07 13:10:59'),
(39, 'sit amet eros', '6005.05', 'Toyota', 'Land Cruiser', 2006, 0, 'lectus in est risus auctor sed tristique in tempus sit amet sem fusce', 3, '2018-02-10 19:06:16', '2017-07-14 03:31:32'),
(40, 'eu magna', '7163.81', 'Mercedes-Benz', 'SL-Class', 1985, 1, 'quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at', 4, '2017-10-03 05:08:44', '2018-04-16 14:14:34'),
(41, 'interdum venenatis turpis', '7210.63', 'Hyundai', 'Elantra', 1995, 1, 'nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula', 3, '2018-01-07 10:31:49', '2017-07-20 04:04:31'),
(42, 'tortor risus', '2683.46', 'Saab', '9-3', 2004, 0, 'aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam', 4, '2017-12-17 09:47:24', '2017-07-19 13:58:55'),
(43, 'vel nulla eget', '3815.37', 'Mazda', 'RX-7', 1994, 1, 'nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi', 3, '2018-03-01 13:58:07', '2017-09-29 03:29:20'),
(44, 'praesent blandit', '9036.19', 'Bentley', 'Brooklands', 2009, 1, 'ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio', 5, '2017-10-04 02:56:57', '2018-03-24 00:42:32'),
(45, 'augue a suscipit', '4508.90', 'Lexus', 'ES', 1998, 1, 'urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non', 6, '2017-06-20 08:11:42', '2017-07-09 10:45:43'),
(46, 'malesuada in imperdiet', '3371.65', 'Isuzu', 'Hombre Space', 1999, 1, 'in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis', 4, '2017-07-22 05:20:05', '2017-08-26 09:22:53'),
(47, 'nulla ac enim', '3434.50', 'Pontiac', 'Parisienne', 1984, 1, 'elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla', 5, '2017-12-18 16:46:01', '2018-04-11 01:28:08'),
(48, 'vestibulum sed magna', '1284.99', 'Lexus', 'IS-F', 2009, 1, 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis', 4, '2018-03-21 13:43:13', '2017-10-22 15:50:10'),
(49, 'vulputate ut', '7957.58', 'Oldsmobile', 'Ciera', 1994, 1, 'pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus', 3, '2017-07-10 19:55:13', '2018-03-06 23:51:03'),
(50, 'suspendisse ornare consequat', '7729.91', 'Dodge', 'Avenger', 1999, 1, 'curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien', 3, '2018-02-02 11:42:57', '2017-07-16 15:17:35'),
(51, 'nulla pede ullamcorper', '6751.52', 'Pontiac', 'Grand Prix', 1986, 0, 'congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam', 5, '2017-10-19 05:32:34', '2017-09-14 22:39:51'),
(52, 'enim sit amet', '6667.54', 'MINI', 'Clubman', 2012, 0, 'congue eget semper rutrum nulla nunc purus phasellus in felis donec semper', 3, '2018-03-14 23:59:27', '2018-03-06 10:29:25'),
(53, 'mattis nibh', '9960.00', 'Mercedes-Benz', 'CLK-Class', 2004, 0, 'rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis', 5, '2018-01-23 10:51:30', '2018-04-09 15:26:23'),
(54, 'at nulla suspendisse', '7178.96', 'Chevrolet', 'Corvette', 1954, 0, 'adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien', 4, '2017-09-14 11:32:30', '2018-05-16 09:34:33'),
(55, 'nec condimentum', '2323.11', 'Mazda', '626', 1990, 0, 'lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent', 3, '2018-03-07 10:09:59', '2017-09-26 00:51:08'),
(56, 'a libero nam', '8256.43', 'Hyundai', 'Santa Fe', 2001, 1, 'ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices', 6, '2018-05-24 17:35:27', '2018-02-07 01:50:40'),
(57, 'odio cras', '9146.78', 'Audi', 'Q5', 2010, 0, 'faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut', 6, '2017-10-30 17:37:07', '2018-03-26 15:17:25'),
(58, 'ante nulla', '8236.78', 'Buick', 'Hearse', 1996, 1, 'rutrum neque aenean auctor gravida sem praesent id massa id', 3, '2017-10-31 22:45:47', '2017-09-02 01:59:20'),
(59, 'hac habitasse platea', '3989.45', 'Dodge', 'Ram 2500', 2009, 1, 'proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis', 5, '2017-10-30 12:16:12', '2018-01-09 08:44:39'),
(60, 'magnis dis parturient', '7360.84', 'Tesla', 'Roadster', 2011, 1, 'tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh in hac', 4, '2018-04-14 01:35:36', '2017-09-16 03:35:58'),
(61, 'lectus vestibulum quam', '2523.17', 'Ford', 'F-Series', 1996, 1, 'potenti nullam porttitor lacus at turpis donec posuere metus vitae', 6, '2017-12-12 14:42:18', '2017-12-29 02:41:16'),
(62, 'volutpat in', '5915.99', 'Jaguar', 'XJ', 2007, 0, 'elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing', 4, '2017-10-06 02:04:29', '2018-03-10 13:55:03'),
(63, 'montes nascetur ridiculus', '1390.99', 'Aston Martin', 'DB9', 2005, 0, 'amet nulla quisque arcu libero rutrum ac lobortis vel dapibus', 6, '2018-04-06 14:03:44', '2018-05-07 15:50:15'),
(64, 'urna pretium', '8086.36', 'Kia', 'Optima', 2003, 0, 'convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in', 6, '2017-08-03 17:35:49', '2017-06-12 15:10:55'),
(65, 'leo pellentesque ultrices', '8815.43', 'Kia', 'Amanti', 2008, 1, 'orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit', 3, '2017-08-25 02:45:35', '2018-06-05 03:45:25'),
(66, 'dolor sit amet', '4976.74', 'Acura', 'CL', 1998, 0, 'nibh in lectus pellentesque at nulla suspendisse potenti cras in purus', 4, '2017-08-26 04:49:52', '2017-07-13 09:06:02'),
(67, 'donec ut', '3885.90', 'Chevrolet', 'Express 2500', 2010, 0, 'nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros', 5, '2018-01-13 05:30:22', '2017-07-11 13:18:35'),
(68, 'enim blandit mi', '3642.31', 'Dodge', 'Ram Van 1500', 2000, 0, 'eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum', 6, '2017-07-13 23:21:25', '2018-04-26 11:48:08'),
(69, 'vehicula consequat morbi', '3970.70', 'Suzuki', 'Aerio', 2006, 0, 'blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id', 4, '2017-09-22 22:34:37', '2017-07-02 07:24:59'),
(70, 'est quam pharetra', '7945.57', 'Ford', 'Freestar', 2007, 0, 'accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque', 6, '2017-10-13 22:09:25', '2017-06-09 22:02:59'),
(71, 'iaculis diam', '8857.13', 'Lexus', 'LS', 1994, 1, 'ac lobortis vel dapibus at diam nam tristique tortor eu pede', 3, '2018-02-08 12:27:01', '2017-12-07 17:52:34'),
(72, 'nulla sed', '2841.36', 'Honda', 'Prelude', 1999, 0, 'in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat', 3, '2017-10-23 03:38:25', '2017-11-19 08:40:19'),
(73, 'viverra pede ac', '2340.02', 'Lexus', 'ES', 2011, 1, 'lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed', 4, '2018-06-02 07:48:28', '2017-10-14 00:54:55'),
(74, 'mus etiam', '9580.44', 'Chrysler', 'Imperial', 1992, 1, 'non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus', 4, '2018-05-12 10:36:17', '2017-12-31 09:15:13'),
(75, 'eros vestibulum ac', '9271.53', 'Volkswagen', 'Cabriolet', 1995, 0, 'nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec', 6, '2018-04-29 18:02:36', '2018-05-10 10:13:52'),
(76, 'sed accumsan', '1427.62', 'Mazda', 'Navajo', 1993, 1, 'donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim', 6, '2017-07-29 23:48:58', '2017-06-22 20:50:54'),
(77, 'morbi vel', '2697.53', 'Cadillac', 'XLR-V', 2007, 0, 'maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi', 3, '2018-01-19 14:24:09', '2017-08-01 14:28:22'),
(78, 'vel lectus in', '4109.04', 'Honda', 'del Sol', 1994, 0, 'nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis', 4, '2017-10-15 00:00:37', '2017-07-16 16:56:46'),
(79, 'curae donec pharetra', '5807.54', 'GMC', 'Yukon Denali', 2000, 1, 'at turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in', 5, '2018-03-18 16:40:57', '2018-03-09 23:52:41'),
(80, 'in lectus pellentesque', '2150.82', 'Nissan', 'Frontier', 2007, 0, 'feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna', 6, '2017-07-17 12:04:13', '2017-09-10 23:28:19'),
(81, 'volutpat quam pede', '1765.75', 'Mercedes-Benz', 'S-Class', 1996, 1, 'eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc', 6, '2018-04-28 07:34:46', '2018-01-24 05:17:12'),
(82, 'habitasse platea', '2947.32', 'Chevrolet', 'Express 1500', 1997, 0, 'libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt', 6, '2018-05-10 23:24:37', '2017-10-25 16:46:33'),
(83, 'orci vehicula', '9287.05', 'Lexus', 'LS', 2004, 1, 'eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut', 6, '2017-10-01 14:13:40', '2018-03-18 09:22:03'),
(84, 'ipsum aliquam non', '7916.25', 'Suzuki', 'Sidekick', 1997, 0, 'ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem', 6, '2018-04-28 08:34:04', '2018-03-18 17:20:33'),
(85, 'diam id', '9493.85', 'Lincoln', 'MKX', 2013, 1, 'integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula', 3, '2017-10-21 05:44:27', '2018-05-20 16:44:57'),
(86, 'morbi non lectus', '3101.91', 'Chevrolet', 'HHR', 2008, 0, 'morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl', 4, '2018-03-02 02:31:30', '2017-09-20 22:16:40'),
(87, 'dui nec', '4347.37', 'Pontiac', 'Gemini', 1987, 1, 'dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula', 5, '2018-05-04 03:18:49', '2017-07-19 18:52:32'),
(88, 'id pretium iaculis', '6309.68', 'Jeep', 'Wrangler', 2012, 0, 'vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget', 3, '2017-08-28 23:41:52', '2017-10-02 15:25:59'),
(89, 'vehicula consequat morbi', '6375.90', 'Suzuki', 'Grand Vitara', 2002, 1, 'tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec', 4, '2018-04-08 04:42:17', '2017-11-27 16:04:56'),
(90, 'at diam', '2631.04', 'Mercury', 'Lynx', 1985, 1, 'ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis', 6, '2017-06-19 16:44:55', '2017-07-06 23:27:48'),
(91, 'risus semper porta', '7454.08', 'Volkswagen', 'Golf', 1986, 0, 'sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum', 3, '2018-01-15 20:24:44', '2017-12-15 15:13:59'),
(92, 'amet diam in', '1208.84', 'Mercedes-Benz', 'C-Class', 1999, 1, 'sed interdum venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at', 4, '2017-11-27 12:49:18', '2018-03-19 02:01:59'),
(93, 'eu sapien cursus', '5577.17', 'Mazda', 'Miata MX-5', 1997, 0, 'vitae nisi nam ultrices libero non mattis pulvinar nulla pede', 3, '2017-06-17 10:51:45', '2018-02-22 02:17:38'),
(94, 'ultrices erat tortor', '2356.87', 'Pontiac', 'G6', 2008, 1, 'mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper', 4, '2017-10-30 10:09:35', '2017-10-18 13:17:48'),
(95, 'justo pellentesque viverra', '6038.55', 'Toyota', 'Land Cruiser', 2001, 1, 'ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris', 3, '2018-01-08 16:03:25', '2018-02-01 05:38:36'),
(96, 'enim lorem', '5720.50', 'Audi', 'R8', 2010, 0, 'elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis', 6, '2018-01-04 09:23:51', '2018-02-19 16:44:21'),
(97, 'aliquam non', '8548.01', 'Ford', 'F-Series', 1988, 0, 'posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam', 4, '2017-11-05 12:53:59', '2018-05-25 14:54:13'),
(98, 'in congue etiam', '6693.10', 'Nissan', 'Maxima', 2009, 0, 'interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices', 4, '2017-12-01 05:12:19', '2017-12-30 06:31:56'),
(99, 'pulvinar sed nisl', '9581.07', 'Toyota', 'Corolla', 2012, 1, 'non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt', 3, '2017-10-06 23:18:41', '2017-06-17 17:40:46'),
(100, 'fusce congue diam', '3321.48', 'Toyota', 'Tacoma Xtra', 1998, 1, 'hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci', 4, '2017-07-21 19:29:02', '2018-04-01 05:51:47'),
(101, 'in tempor turpis', '5388.40', 'Chevrolet', 'Express 3500', 1999, 0, 'dolor vel est donec odio justo sollicitudin ut suscipit a feugiat', 6, '2018-05-17 05:06:56', '2017-08-14 00:04:39'),
(102, 'lacinia sapien quis', '7553.99', 'Hyundai', 'XG300', 2001, 0, 'morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien', 4, '2018-02-26 09:05:33', '2017-11-19 21:05:31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `images_vehicle`
--
ALTER TABLE `images_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
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

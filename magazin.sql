-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 24 2019 г., 13:16
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `magazin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_products` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `id_user`, `id_products`) VALUES
(1, 2, 3),
(3, 2, 4),
(91, 2, 1),
(97, 2, 2),
(98, 2, 4),
(99, 2, 2),
(100, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `baskets`
--

CREATE TABLE `baskets` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_products` int(11) DEFAULT NULL,
  `UnitPrice` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT '0',
  `final_price` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `baskets`
--

INSERT INTO `baskets` (`id`, `id_user`, `id_products`, `UnitPrice`, `quantity`, `discount`, `final_price`, `created_at`) VALUES
(11, 2, 2, 10000, 1, 0, 10000, '2019-02-23 17:10:52');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(2, NULL, 1, 'Category 2', 'category-2', '2019-01-03 14:19:11', '2019-01-03 14:19:11');

-- --------------------------------------------------------

--
-- Структура таблицы `Categorii_products`
--

CREATE TABLE `Categorii_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Categorii_products`
--

INSERT INTO `Categorii_products` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Категория 1', '2019-01-04 15:18:03', '2019-01-04 15:18:03'),
(2, 'Категория 2', '2019-01-04 15:18:33', '2019-01-04 15:18:33'),
(3, 'Категория 3', '2019-01-04 15:18:45', '2019-01-04 15:18:45');

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'locale', 'text', 'Locale', 0, 1, 1, 1, 1, 0, NULL, 12),
(12, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(22, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(23, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(24, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(25, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(26, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(27, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(28, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(29, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(30, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(31, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(32, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(33, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(34, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(35, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(36, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(37, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(38, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(39, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(40, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(41, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(42, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(43, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(44, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(45, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(46, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(47, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(48, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(49, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(50, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(51, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(52, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(53, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(54, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(55, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(56, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(57, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(58, 8, 'id_suppliers', 'text', 'Id Suppliers', 1, 1, 1, 1, 1, 1, '{}', 3),
(59, 8, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 6),
(60, 8, 'unit_cost', 'text', 'Unit Cost', 1, 1, 1, 1, 1, 1, '{}', 7),
(61, 8, 'meta_description', 'text', 'Meta Description', 1, 1, 1, 1, 1, 1, '{}', 8),
(62, 8, 'meta_keywords', 'text', 'Meta Keywords', 1, 1, 1, 1, 1, 1, '{}', 9),
(63, 8, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"height\":\"1486\",\"width\":\"1200\"}}', 10),
(64, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 12),
(65, 8, 'updated_at', 'timestamp', 'Updated At', 0, 1, 1, 1, 0, 1, '{}', 13),
(66, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(67, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(68, 9, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(69, 9, 'address', 'text', 'Address', 1, 1, 1, 1, 1, 1, '{}', 4),
(70, 9, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 5),
(71, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(72, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(73, 8, 'product_belongsto_product_relationship', 'relationship', 'products', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Supplier\",\"table\":\"suppliers\",\"type\":\"belongsTo\",\"column\":\"id_suppliers\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(74, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(75, 10, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(76, 8, 'id_category', 'text', 'Id Category', 0, 1, 1, 1, 1, 1, '{}', 5),
(77, 8, 'product_belongsto_categorii_product_relationship', 'relationship', 'Categorii_products', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\CategoriiProduct\",\"table\":\"Categorii_products\",\"type\":\"belongsTo\",\"column\":\"id_category\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"Categorii_products\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(78, 8, 'imd_dop', 'multiple_images', 'Imd Dop', 0, 1, 1, 1, 1, 1, '{}', 11),
(79, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(80, 11, 'id_user', 'text', 'Id User', 0, 1, 1, 1, 1, 1, '{}', 3),
(81, 11, 'id_products', 'text', 'Id Products', 0, 1, 1, 1, 1, 1, '{}', 4),
(82, 11, 'basket_hasone_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"hasOne\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"Categorii_products\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(83, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(84, 12, 'id_user', 'text', 'Id User', 0, 1, 1, 1, 1, 1, '{}', 3),
(85, 12, 'id_products', 'text', 'Id Products', 0, 1, 1, 1, 1, 1, '{}', 6),
(86, 12, 'basket_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"id_user\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"Categorii_products\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(87, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 1, 1, '{}', 10),
(88, 12, 'basket_belongsto_product_relationship', 'relationship', 'products', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Product\",\"table\":\"products\",\"type\":\"belongsTo\",\"column\":\"id_products\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"Categorii_products\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(89, 12, 'UnitPrice', 'text', 'UnitPrice', 0, 1, 1, 1, 1, 1, '{}', 9),
(90, 12, 'quantity', 'text', 'Quantity', 0, 1, 1, 1, 1, 1, '{}', 5),
(91, 12, 'discount', 'text', 'Discount', 0, 1, 1, 1, 1, 1, '{}', 7),
(92, 12, 'final_price', 'text', 'Final Price', 0, 1, 1, 1, 1, 1, '{}', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, NULL, '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(8, 'products', 'products', 'Product', 'Products', 'voyager-basket', 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-01-04 06:46:22', '2019-02-23 12:06:13'),
(9, 'suppliers', 'suppliers', 'Supplier', 'Suppliers', 'voyager-truck', 'App\\Supplier', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-01-04 06:52:02', '2019-01-04 06:52:02'),
(10, 'Categorii_products', 'categorii-products', 'Categorii Product', 'Categorii Products', 'voyager-plus', 'App\\CategoriiProduct', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-01-04 10:11:51', '2019-01-04 10:11:51'),
(11, 'basket', 'basket', 'Basket', 'Baskets', 'voyager-credit-cards', 'App\\Basket', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-02-22 07:03:02', '2019-02-23 09:54:10'),
(12, 'baskets', 'baskets', 'Basket', 'Baskets', 'voyager-wallet', 'App\\Basket', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-02-23 10:03:51', '2019-02-23 12:08:14');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(2, 'main1', '2019-01-04 02:07:21', '2019-01-04 02:07:21');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-01-03 14:19:10', '2019-01-03 14:19:10', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2019-01-03 14:19:10', '2019-01-04 06:53:37', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2019-01-03 14:19:10', '2019-01-03 14:19:10', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2019-01-03 14:19:10', '2019-01-03 14:19:10', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 10, '2019-01-03 14:19:10', '2019-01-04 10:14:49', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-01-03 14:19:10', '2019-01-04 06:53:37', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-01-03 14:19:10', '2019-01-04 06:53:37', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-01-03 14:19:10', '2019-01-04 06:53:37', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-01-03 14:19:10', '2019-01-04 06:53:37', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 11, '2019-01-03 14:19:10', '2019-01-04 10:14:49', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 9, '2019-01-03 14:19:11', '2019-01-04 10:14:49', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 5, '2019-01-03 14:19:11', '2019-01-04 06:53:37', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 8, '2019-01-03 14:19:11', '2019-01-04 10:14:49', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2019-01-03 14:19:11', '2019-01-04 06:53:37', 'voyager.hooks', NULL),
(15, 2, 'home', '/', '_self', NULL, '#000000', NULL, 1, '2019-01-04 02:07:38', '2019-01-04 02:10:53', NULL, ''),
(16, 2, 'Schop', '/product', '_self', NULL, '#000000', NULL, 2, '2019-01-04 02:07:57', '2019-01-04 02:11:56', NULL, ''),
(17, 2, 'Features', '/shopping', '_self', NULL, '#000000', NULL, 3, '2019-01-04 02:09:34', '2019-01-04 02:12:08', NULL, ''),
(18, 2, 'Blog', '/blog', '_self', NULL, '#000000', NULL, 4, '2019-01-04 02:09:53', '2019-02-22 06:54:31', NULL, ''),
(19, 2, 'About', '/about', '_self', NULL, '#000000', NULL, 5, '2019-01-04 02:10:06', '2019-02-22 06:54:31', NULL, ''),
(20, 2, 'Contact', '/contact', '_self', NULL, '#000000', NULL, 6, '2019-01-04 02:10:23', '2019-02-22 06:54:44', NULL, ''),
(21, 2, 'prob', '', '_self', NULL, '#000000', NULL, 7, '2019-01-04 02:10:40', '2019-02-22 06:54:44', NULL, ''),
(22, 2, 'fgdgf', '', '_self', NULL, '#000000', 21, 1, '2019-01-04 02:10:48', '2019-01-04 02:10:54', NULL, ''),
(23, 1, 'Products', '', '_self', 'voyager-basket', NULL, NULL, 6, '2019-01-04 06:46:22', '2019-01-04 06:53:37', 'voyager.products.index', NULL),
(24, 1, 'Suppliers', '', '_self', 'voyager-truck', NULL, 25, 1, '2019-01-04 06:52:02', '2019-01-04 06:54:11', 'voyager.suppliers.index', NULL),
(25, 1, 'Дополнительно', '', '_self', 'voyager-cursor', '#000000', NULL, 7, '2019-01-04 06:53:29', '2019-01-04 10:14:49', NULL, ''),
(26, 1, 'Categorii Products', '', '_self', 'voyager-plus', NULL, 25, 2, '2019-01-04 10:11:52', '2019-01-04 10:13:39', 'voyager.categorii-products.index', NULL),
(28, 1, 'Baskets', '', '_self', 'voyager-wallet', NULL, NULL, 13, '2019-02-23 10:03:51', '2019-02-23 10:03:51', 'voyager.baskets.index', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2018_12_30_115808_create_suppliers_table', 1),
(28, '2018_12_30_123430_create_products_table', 1),
(29, '2018_12_30_134029_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `id_products` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `amount` int(11) NOT NULL,
  `price_piece` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2019-01-03 14:19:11', '2019-01-03 14:19:11');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(2, 'browse_bread', NULL, '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(3, 'browse_database', NULL, '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(4, 'browse_media', NULL, '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(5, 'browse_compass', NULL, '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(6, 'browse_menus', 'menus', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(7, 'read_menus', 'menus', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(8, 'edit_menus', 'menus', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(9, 'add_menus', 'menus', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(10, 'delete_menus', 'menus', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(11, 'browse_roles', 'roles', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(12, 'read_roles', 'roles', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(13, 'edit_roles', 'roles', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(14, 'add_roles', 'roles', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(15, 'delete_roles', 'roles', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(16, 'browse_users', 'users', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(17, 'read_users', 'users', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(18, 'edit_users', 'users', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(19, 'add_users', 'users', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(20, 'delete_users', 'users', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(21, 'browse_settings', 'settings', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(22, 'read_settings', 'settings', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(23, 'edit_settings', 'settings', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(24, 'add_settings', 'settings', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(25, 'delete_settings', 'settings', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(26, 'browse_categories', 'categories', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(27, 'read_categories', 'categories', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(28, 'edit_categories', 'categories', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(29, 'add_categories', 'categories', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(30, 'delete_categories', 'categories', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(31, 'browse_posts', 'posts', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(32, 'read_posts', 'posts', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(33, 'edit_posts', 'posts', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(34, 'add_posts', 'posts', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(35, 'delete_posts', 'posts', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(36, 'browse_pages', 'pages', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(37, 'read_pages', 'pages', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(38, 'edit_pages', 'pages', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(39, 'add_pages', 'pages', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(40, 'delete_pages', 'pages', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(41, 'browse_hooks', NULL, '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(42, 'browse_products', 'products', '2019-01-04 06:46:22', '2019-01-04 06:46:22'),
(43, 'read_products', 'products', '2019-01-04 06:46:22', '2019-01-04 06:46:22'),
(44, 'edit_products', 'products', '2019-01-04 06:46:22', '2019-01-04 06:46:22'),
(45, 'add_products', 'products', '2019-01-04 06:46:22', '2019-01-04 06:46:22'),
(46, 'delete_products', 'products', '2019-01-04 06:46:22', '2019-01-04 06:46:22'),
(47, 'browse_suppliers', 'suppliers', '2019-01-04 06:52:02', '2019-01-04 06:52:02'),
(48, 'read_suppliers', 'suppliers', '2019-01-04 06:52:02', '2019-01-04 06:52:02'),
(49, 'edit_suppliers', 'suppliers', '2019-01-04 06:52:02', '2019-01-04 06:52:02'),
(50, 'add_suppliers', 'suppliers', '2019-01-04 06:52:02', '2019-01-04 06:52:02'),
(51, 'delete_suppliers', 'suppliers', '2019-01-04 06:52:02', '2019-01-04 06:52:02'),
(52, 'browse_Categorii_products', 'Categorii_products', '2019-01-04 10:11:52', '2019-01-04 10:11:52'),
(53, 'read_Categorii_products', 'Categorii_products', '2019-01-04 10:11:52', '2019-01-04 10:11:52'),
(54, 'edit_Categorii_products', 'Categorii_products', '2019-01-04 10:11:52', '2019-01-04 10:11:52'),
(55, 'add_Categorii_products', 'Categorii_products', '2019-01-04 10:11:52', '2019-01-04 10:11:52'),
(56, 'delete_Categorii_products', 'Categorii_products', '2019-01-04 10:11:52', '2019-01-04 10:11:52'),
(57, 'browse_basket', 'basket', '2019-02-22 07:03:02', '2019-02-22 07:03:02'),
(58, 'read_basket', 'basket', '2019-02-22 07:03:02', '2019-02-22 07:03:02'),
(59, 'edit_basket', 'basket', '2019-02-22 07:03:02', '2019-02-22 07:03:02'),
(60, 'add_basket', 'basket', '2019-02-22 07:03:02', '2019-02-22 07:03:02'),
(61, 'delete_basket', 'basket', '2019-02-22 07:03:02', '2019-02-22 07:03:02'),
(62, 'browse_baskets', 'baskets', '2019-02-23 10:03:51', '2019-02-23 10:03:51'),
(63, 'read_baskets', 'baskets', '2019-02-23 10:03:51', '2019-02-23 10:03:51'),
(64, 'edit_baskets', 'baskets', '2019-02-23 10:03:51', '2019-02-23 10:03:51'),
(65, 'add_baskets', 'baskets', '2019-02-23 10:03:51', '2019-02-23 10:03:51'),
(66, 'delete_baskets', 'baskets', '2019-02-23 10:03:51', '2019-02-23 10:03:51');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'DRAFT', 0, '2019-01-03 14:19:11', '2019-01-04 10:01:23'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-01-03 14:19:11', '2019-01-03 14:19:11');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_suppliers` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imd_dop` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `id_suppliers`, `id_category`, `name`, `unit_cost`, `meta_description`, `meta_keywords`, `image`, `imd_dop`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'GSM сигнализация с функцией «умный дом»', 100, 'лучший товар недели', '100', 'products\\January2019\\1Lh1aFusOEcV4VsqNObG.jpg', '[\"products\\\\January2019\\\\4kqR8UR5VIvITfe70T2k.jpg\"]', '2019-01-04 07:08:00', '2019-01-06 11:59:40'),
(2, 2, 3, 'Комплект умный дом Rubetek RK-3512, видеоконтроль и безопасность', 10000, 'лучший товар недели', '100', 'products\\January2019\\mJQUnqkiNcg226kRnVr4.jpg', '[\"products\\\\January2019\\\\xLAR2SKD45LeXuRxA25Z.jpg\",\"products\\\\January2019\\\\MGiV8eNPqp0pTwQDGAqa.jpg\",\"products\\\\January2019\\\\tGIMhAN6cscfBl7LzbML.jpg\",\"products\\\\January2019\\\\8RP6ZZPswbe06sNudk8z.jpg\",\"products\\\\January2019\\\\9MyFdQwPXotJomdjof1k.jpg\",\"products\\\\January2019\\\\P9GLpEtBSlk6FWQ14ECP.jpg\",\"products\\\\January2019\\\\2FBkXruGo55fTrYAm2ry.jpg\",\"products\\\\January2019\\\\PnF9pmSaehWVs7AM8Kz8.jpg\",\"products\\\\January2019\\\\qC9eWhZgnYaCbbmUHvzl.jpg\"]', '2019-01-04 10:30:00', '2019-01-05 06:36:28'),
(3, 1, 2, 'Блок управления системой «Умный дом» Xiaomi Smart Home Gateway 2', 200, 'лучший товар недели', '100', 'products\\January2019\\IiExG5xhHqCAPt2UAkOn.jpg', '[\"products\\\\January2019\\\\sSYUFs3IJtcZQCt9WwGC.jpg\",\"products\\\\January2019\\\\QFqpxyn7afH6LAR4s6eh.jpg\",\"products\\\\January2019\\\\S4ZprTipZIHANWBvGhfZ.jpg\"]', '2019-01-04 10:31:00', '2019-01-05 06:19:39'),
(4, 1, 2, 'Система Ростелеком \"Умный дом\" расширенный комплект \"Безопасность\"', 1000, 'лала', '100', 'products\\January2019\\ZO00q0PE2ClKVOar5ufs.jpg', '[\"products\\\\January2019\\\\QYWMWDghh1gvJKzi8GVp.jpg\",\"products\\\\January2019\\\\z0AUWq7mbsDnSRqKnhgM.jpg\",\"products\\\\January2019\\\\ZKfOfrouLAQZODYHtTfm.jpg\",\"products\\\\January2019\\\\2vlkL6WPnHNfEEs9ZbKf.jpg\",\"products\\\\January2019\\\\F3So83vWyBTXs6hT3sTj.jpg\",\"products\\\\January2019\\\\VXwlis8yXp5lm0EPhX30.jpg\"]', '2019-01-04 10:32:00', '2019-01-05 06:17:34'),
(5, 1, 2, 'Центр умного дома Life Control MCLH-01', 200, 'лала', '100', 'products\\January2019\\QeNMdOYYFAmxHaoa3OXQ.jpg', '[\"products\\\\January2019\\\\M5KYxVFiTMZmxLCo5cel.jpg\",\"products\\\\January2019\\\\41U8BQ95jLQtusJTaS8Z.jpg\"]', '2019-01-04 10:33:00', '2019-01-05 06:11:25');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-01-03 14:19:10', '2019-01-03 14:19:10'),
(2, 'user', 'Normal User', '2019-01-03 14:19:10', '2019-01-03 14:19:10');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(15, 'site.slider', 'Выберете тему слайдера', '1', '{\r\n    \"default\" : \"1\",\r\n    \"options\" : {\r\n        \"1\": \"Светлая тема\",\r\n        \"2\": \"Темная Тема\"\r\n    }\r\n}', 'radio_btn', 7, 'Site'),
(16, 'dark-slider.text_big1', 'logo1 text big', 'New arrivals', NULL, 'text', 8, 'dark slider'),
(17, 'light-slider.text_big1', 'logo1 text big', 'NEW SEASON', NULL, 'text', 9, 'light slider'),
(18, 'dark-slider.text1', 'text1', 'Women Collection 2018', NULL, 'text', 10, 'dark slider'),
(19, 'light-slider.text1', 'text1', 'Women Collection 2018', NULL, 'text', 11, 'light slider'),
(22, 'light-slider.logo', 'logo1 img', 'settings\\January2019\\URW9pFnOzRMBXcjUZwrO.jpg', '{\r\n    \"resize\": {\r\n        \"width\": \"1920\",\r\n        \"height\": \"930\"\r\n    }\r\n}', 'image', 12, 'light slider'),
(23, 'dark-slider.logo', 'logo1 img', 'settings\\January2019\\HaevUTshdsIdFNUPwehD.jpg', NULL, 'image', 13, 'dark slider'),
(25, 'dark-slider.text_big2', 'logo2 text big', 'Jackets & Coats', NULL, 'text', 14, 'dark slider'),
(26, 'light-slider.text_big2', 'logo2 text big', 'Jackets & Coats', NULL, 'text', 15, 'light slider'),
(27, 'dark-slider.text2', 'text2', 'Men New-Season', NULL, 'text', 16, 'dark slider'),
(28, 'light-slider.text2', 'text2', 'Shop Now', NULL, 'text', 17, 'light slider'),
(29, 'dark-slider.logo2', 'logo2 img', 'settings\\January2019\\HTDgjMRUSqvYcOVB199o.jpg', NULL, 'image', 18, 'dark slider'),
(30, 'light-slider.logo2', 'logo2 img', 'settings\\January2019\\Yk6bMTvctEMHMsrSDhhJ.jpg', NULL, 'image', 19, 'light slider'),
(31, 'dark-slider.text_big3', 'logo3 text big', 'NEW SEASON', NULL, 'text', 20, 'dark slider'),
(32, 'light-slider.text_big3', 'logo3 text big', 'Shop Now', NULL, 'text', 21, 'light slider'),
(33, 'dark-slider.text3', 'text3', 'Men Collection 2018', NULL, 'text', 22, 'dark slider'),
(34, 'light-slider.text3', 'text3', 'New arrivals', NULL, 'text', 23, 'light slider'),
(35, 'dark-slider.logo3', 'logo3 img', 'settings\\January2019\\3ilc5G6ZFpit9XBE6DMX.jpg', NULL, 'image', 24, 'dark slider'),
(36, 'light-slider.logo3', 'logo3 img', 'settings\\January2019\\ZYt6Qw5HNo9PlP0BBklp.jpg', NULL, 'image', 25, 'light slider');

-- --------------------------------------------------------

--
-- Структура таблицы `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Компания 1', 'sdfgbn@mail.ru', 'dfdhgghjg', '458565', '2019-01-04 06:57:14', '2019-01-04 06:57:14'),
(2, 'Компания 2', 'fghjm@ggh.com', 'ул. правды 45', '452586', '2019-01-04 06:57:48', '2019-01-04 06:57:48');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2019-01-03 14:19:11', '2019-01-03 14:19:11');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$E8FWNwokDjod/hLoO4BYeu3l9n0oImNXNBOktDrBNOBGQJKe.NfOm', '1BzIdEAzINtjCPZGIRNaTU7zr2vY13wk2uHwUAAQKHQyBVde28YvpO4nYf5N', NULL, '2019-01-03 14:19:11', '2019-01-03 14:19:11'),
(2, 1, 'марга', 'mur@mur.ru', 'users/default.png', NULL, '$2y$10$F0Rp6dKr8qPGhbN5ANJUHeg/H9qvxGso0erlNCpPYLKMQRozzWn8e', 'VExWFOzNCMs6F9SZoOBxedZ44OJGVFetBBCb3nIGNJ8ZC6jKfXsB2k11doMS', NULL, '2019-01-04 01:51:32', '2019-01-04 01:51:32');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `Categorii_products`
--
ALTER TABLE `Categorii_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id_user_foreign` (`id_user`),
  ADD KEY `orders_id_products_foreign` (`id_products`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_name_unique` (`name`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT для таблицы `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Categorii_products`
--
ALTER TABLE `Categorii_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_id_products_foreign` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

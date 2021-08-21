/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `es_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_commentmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `es_commentmeta` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT 0,
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT 0,
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT 0,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_comments` DISABLE KEYS */;
INSERT INTO `es_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
	(1, 1, 'Um comentarista do WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2021-05-23 18:13:34', '2021-05-23 21:13:34', 'Olá, isso é um comentário.\nPara começar a moderar, editar e excluir comentários, visite a tela de Comentários no painel.\nAvatares de comentaristas vêm a partir do <a href="https://gravatar.com">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);
/*!40000 ALTER TABLE `es_comments` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT 1,
  `link_rating` int(11) NOT NULL DEFAULT 0,
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `es_links` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`),
  KEY `autoload` (`autoload`)
) ENGINE=MyISAM AUTO_INCREMENT=371 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_options` DISABLE KEYS */;
INSERT INTO `es_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
	(1, 'siteurl', 'http://localhost/Felipe/site', 'yes'),
	(2, 'home', 'http://localhost/Felipe/site', 'yes'),
	(3, 'blogname', 'Entrada Segura', 'yes'),
	(4, 'blogdescription', 'Inovação e segurança no sistema de entregas em condomínios.', 'yes'),
	(5, 'users_can_register', '0', 'yes'),
	(6, 'admin_email', 'rodrigo@rodrigotrindade.com.br', 'yes'),
	(7, 'start_of_week', '0', 'yes'),
	(8, 'use_balanceTags', '0', 'yes'),
	(9, 'use_smilies', '1', 'yes'),
	(10, 'require_name_email', '1', 'yes'),
	(11, 'comments_notify', '1', 'yes'),
	(12, 'posts_per_rss', '10', 'yes'),
	(13, 'rss_use_excerpt', '0', 'yes'),
	(14, 'mailserver_url', 'mail.example.com', 'yes'),
	(15, 'mailserver_login', 'login@example.com', 'yes'),
	(16, 'mailserver_pass', 'password', 'yes'),
	(17, 'mailserver_port', '110', 'yes'),
	(18, 'default_category', '1', 'yes'),
	(19, 'default_comment_status', 'open', 'yes'),
	(20, 'default_ping_status', 'open', 'yes'),
	(21, 'default_pingback_flag', '1', 'yes'),
	(22, 'posts_per_page', '10', 'yes'),
	(23, 'date_format', 'j \\d\\e F \\d\\e Y', 'yes'),
	(24, 'time_format', 'H:i', 'yes'),
	(25, 'links_updated_date_format', 'j \\d\\e F \\d\\e Y, H:i', 'yes'),
	(26, 'comment_moderation', '0', 'yes'),
	(27, 'moderation_notify', '1', 'yes'),
	(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
	(29, 'rewrite_rules', 'a:111:{s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:21:"^index.php/wp-json/?$";s:22:"index.php?rest_route=/";s:24:"^index.php/wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:17:"^wp-sitemap\\.xml$";s:23:"index.php?sitemap=index";s:17:"^wp-sitemap\\.xsl$";s:36:"index.php?sitemap-stylesheet=sitemap";s:23:"^wp-sitemap-index\\.xsl$";s:34:"index.php?sitemap-stylesheet=index";s:48:"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$";s:75:"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]";s:34:"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$";s:47:"index.php?sitemap=$matches[1]&paged=$matches[2]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:34:"slider/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:44:"slider/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:64:"slider/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:59:"slider/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:59:"slider/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:40:"slider/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:23:"slider/([^/]+)/embed/?$";s:39:"index.php?slider=$matches[1]&embed=true";s:27:"slider/([^/]+)/trackback/?$";s:33:"index.php?slider=$matches[1]&tb=1";s:35:"slider/([^/]+)/page/?([0-9]{1,})/?$";s:46:"index.php?slider=$matches[1]&paged=$matches[2]";s:42:"slider/([^/]+)/comment-page-([0-9]{1,})/?$";s:46:"index.php?slider=$matches[1]&cpage=$matches[2]";s:31:"slider/([^/]+)(?:/([0-9]+))?/?$";s:45:"index.php?slider=$matches[1]&page=$matches[2]";s:23:"slider/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:33:"slider/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:53:"slider/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:48:"slider/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:48:"slider/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:29:"slider/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:58:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:68:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:88:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:64:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:53:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$";s:91:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$";s:85:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1";s:77:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:65:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]";s:61:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]";s:47:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:57:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:77:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:53:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]";s:51:"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]";s:38:"([0-9]{4})/comment-page-([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&cpage=$matches[2]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";}', 'yes'),
	(30, 'hack_file', '0', 'yes'),
	(31, 'blog_charset', 'UTF-8', 'yes'),
	(32, 'moderation_keys', '', 'no'),
	(33, 'active_plugins', 'a:1:{i:0;s:33:"classic-editor/classic-editor.php";}', 'yes'),
	(34, 'category_base', '', 'yes'),
	(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
	(36, 'comment_max_links', '2', 'yes'),
	(37, 'gmt_offset', '', 'yes'),
	(38, 'default_email_category', '1', 'yes'),
	(39, 'recently_edited', '', 'no'),
	(40, 'template', 'entradasegurav2', 'yes'),
	(41, 'stylesheet', 'entradasegurav2', 'yes'),
	(42, 'comment_registration', '0', 'yes'),
	(43, 'html_type', 'text/html', 'yes'),
	(44, 'use_trackback', '0', 'yes'),
	(45, 'default_role', 'subscriber', 'yes'),
	(46, 'db_version', '49752', 'yes'),
	(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
	(48, 'upload_path', '', 'yes'),
	(49, 'blog_public', '1', 'yes'),
	(50, 'default_link_category', '2', 'yes'),
	(51, 'show_on_front', 'posts', 'yes'),
	(52, 'tag_base', '', 'yes'),
	(53, 'show_avatars', '1', 'yes'),
	(54, 'avatar_rating', 'G', 'yes'),
	(55, 'upload_url_path', '', 'yes'),
	(56, 'thumbnail_size_w', '150', 'yes'),
	(57, 'thumbnail_size_h', '150', 'yes'),
	(58, 'thumbnail_crop', '1', 'yes'),
	(59, 'medium_size_w', '300', 'yes'),
	(60, 'medium_size_h', '300', 'yes'),
	(61, 'avatar_default', 'mystery', 'yes'),
	(62, 'large_size_w', '1024', 'yes'),
	(63, 'large_size_h', '1024', 'yes'),
	(64, 'image_default_link_type', 'none', 'yes'),
	(65, 'image_default_size', '', 'yes'),
	(66, 'image_default_align', '', 'yes'),
	(67, 'close_comments_for_old_posts', '0', 'yes'),
	(68, 'close_comments_days_old', '14', 'yes'),
	(69, 'thread_comments', '1', 'yes'),
	(70, 'thread_comments_depth', '5', 'yes'),
	(71, 'page_comments', '0', 'yes'),
	(72, 'comments_per_page', '50', 'yes'),
	(73, 'default_comments_page', 'newest', 'yes'),
	(74, 'comment_order', 'asc', 'yes'),
	(75, 'sticky_posts', 'a:0:{}', 'yes'),
	(76, 'widget_categories', 'a:2:{i:2;a:4:{s:5:"title";s:0:"";s:5:"count";i:0;s:12:"hierarchical";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
	(77, 'widget_text', 'a:7:{i:2;a:4:{s:5:"title";s:0:"";s:4:"text";s:720:"<h3 class="sub-title font-28 text-gray-darkgray m-0 mt-0 mt-md-0">Overview</h3>\r\n<h2 class="title font-48 text-gray mt-0 mb-20">About the Conference</h2>\r\n<p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus quasi.</p>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus.";s:6:"filter";b:1;s:6:"visual";b:1;}i:4;a:4:{s:5:"title";s:0:"";s:4:"text";s:699:"<h4 class="m-0 text-gray-darkgray"></h4>\r\n<h2 class="title text-gray mt-0">Estabelecimento</h2>\r\n<h6 class="text-gray mb-20">Qualidade e Agilidade</h6>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus quasi.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus.";s:6:"filter";b:1;s:6:"visual";b:1;}i:5;a:4:{s:5:"title";s:0:"";s:4:"text";s:703:"<h4 class="m-0 text-gray-darkgray"></h4>\r\n<h2 class="title text-gray mt-0">Portaria</h2>\r\n<h6 class="text-gray text-gray mb-20">Segurança e Agilidade</h6>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus quasi.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus.";s:6:"filter";b:1;s:6:"visual";b:1;}i:6;a:4:{s:5:"title";s:0:"";s:4:"text";s:763:"<h3 class="sub-title font-28 text-gray-darkgray m-0 mt-0 mt-md-0">Overview</h3>\r\n            <h2 class="title font-48 text-gray mt-0 mb-20">About the Conference</h2>\r\n            <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus quasi.</p>\r\n            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus.</p>";s:6:"filter";b:1;s:6:"visual";b:1;}i:7;a:4:{s:5:"title";s:0:"";s:4:"text";s:682:"<h4 class="m-0 text-gray-darkgray"></h4>\r\n<h2 class="title text-gray mt-0">Entregador</h2>\r\n<h6 class="text-gray mb-20">Agilidade</h6>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus quasi.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus.";s:6:"filter";b:1;s:6:"visual";b:1;}i:8;a:4:{s:5:"title";s:0:"";s:4:"text";s:692:"<h4 class="m-0 text-gray-darkgray"></h4>\r\n<h2 class="title text-gray mt-0">Morador</h2>\r\n<h6 class="text-gray mb-20">Qualidade e Segurança</h6>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus quasi.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus.";s:6:"filter";b:1;s:6:"visual";b:1;}s:12:"_multiwidget";i:1;}', 'yes'),
	(78, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
	(79, 'uninstall_plugins', 'a:0:{}', 'no'),
	(80, 'timezone_string', 'America/Sao_Paulo', 'yes'),
	(81, 'page_for_posts', '0', 'yes'),
	(82, 'page_on_front', '0', 'yes'),
	(83, 'default_post_format', '0', 'yes'),
	(84, 'link_manager_enabled', '0', 'yes'),
	(85, 'finished_splitting_shared_terms', '1', 'yes'),
	(86, 'site_icon', '0', 'yes'),
	(87, 'medium_large_size_w', '768', 'yes'),
	(88, 'medium_large_size_h', '0', 'yes'),
	(89, 'wp_page_for_privacy_policy', '3', 'yes'),
	(90, 'show_comments_cookies_opt_in', '1', 'yes'),
	(91, 'admin_email_lifespan', '1637356414', 'yes'),
	(92, 'disallowed_keys', '', 'no'),
	(93, 'comment_previously_approved', '1', 'yes'),
	(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
	(95, 'auto_update_core_dev', 'enabled', 'yes'),
	(96, 'auto_update_core_minor', 'enabled', 'yes'),
	(97, 'auto_update_core_major', 'enabled', 'yes'),
	(98, 'initial_db_version', '49752', 'yes'),
	(99, 'es_user_roles', 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:61:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}', 'yes'),
	(100, 'fresh_site', '0', 'yes'),
	(101, 'WPLANG', 'pt_BR', 'yes'),
	(102, 'widget_search', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
	(103, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
	(104, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
	(105, 'widget_archives', 'a:2:{i:2;a:3:{s:5:"title";s:0:"";s:5:"count";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
	(106, 'widget_meta', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
	(107, 'sidebars_widgets', 'a:13:{s:5:"sobre";a:1:{i:0;s:6:"text-2";}s:19:"wp_inactive_widgets";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:14:"logo-cabecalho";a:1:{i:0;s:13:"media_image-2";}s:5:"about";a:1:{i:0;s:6:"text-6";}s:6:"caixa1";a:1:{i:0;s:6:"text-5";}s:6:"caixa2";a:1:{i:0;s:6:"text-4";}s:6:"caixa3";a:1:{i:0;s:6:"text-7";}s:6:"caixa4";a:1:{i:0;s:6:"text-8";}s:5:"foto1";a:1:{i:0;s:19:"fotoquadrolateral-2";}s:5:"foto2";a:1:{i:0;s:19:"fotoquadrolateral-3";}s:5:"foto3";a:1:{i:0;s:19:"fotoquadrolateral-4";}s:5:"foto4";a:1:{i:0;s:19:"fotoquadrolateral-5";}s:13:"array_version";i:3;}', 'yes'),
	(108, 'cron', 'a:7:{i:1627085614;a:1:{s:34:"wp_privacy_delete_old_export_files";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:6:"hourly";s:4:"args";a:0:{}s:8:"interval";i:3600;}}}i:1627118014;a:4:{s:18:"wp_https_detection";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1627161214;a:1:{s:32:"recovery_mode_clean_expired_keys";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1627161230;a:2:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}s:25:"delete_expired_transients";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1627161231;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1627334014;a:1:{s:30:"wp_site_health_scheduled_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:6:"weekly";s:4:"args";a:0:{}s:8:"interval";i:604800;}}}s:7:"version";i:2;}', 'yes'),
	(109, 'widget_pages', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
	(110, 'widget_calendar', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
	(111, 'widget_media_audio', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
	(112, 'widget_media_image', 'a:2:{i:2;a:15:{s:4:"size";s:4:"full";s:5:"width";i:150;s:6:"height";i:33;s:7:"caption";s:0:"";s:3:"alt";s:0:"";s:9:"link_type";s:6:"custom";s:8:"link_url";s:0:"";s:13:"image_classes";s:0:"";s:12:"link_classes";s:0:"";s:8:"link_rel";s:0:"";s:17:"link_target_blank";b:0;s:11:"image_title";s:0:"";s:13:"attachment_id";i:7;s:3:"url";s:69:"http://localhost/Felipe/site/wp-content/uploads/2021/05/logo-wide.png";s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
	(113, 'widget_media_gallery', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
	(114, 'widget_media_video', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
	(115, 'widget_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
	(116, 'widget_nav_menu', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
	(117, 'widget_custom_html', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
	(119, 'recovery_keys', 'a:1:{s:22:"nxwn5uUkfolnKaTTtMll4Z";a:2:{s:10:"hashed_key";s:34:"$P$B7ZyfugNTrBLFzFJzgvoeT.QUZt/Lw.";s:10:"created_at";i:1627080306;}}', 'yes'),
	(121, 'https_detection_errors', 'a:1:{s:20:"https_request_failed";a:1:{i:0;s:26:"Requisição HTTPS falhou.";}}', 'yes'),
	(120, 'theme_mods_twentytwentyone', 'a:2:{s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1621806238;s:4:"data";a:3:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:3:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";}s:9:"sidebar-2";a:3:{i:0;s:10:"archives-2";i:1;s:12:"categories-2";i:2;s:6:"meta-2";}}}}', 'yes'),
	(318, '_site_transient_timeout_php_check_7772753a7ea0fe5c6dd1e8406c9ba6ba', '1627426210', 'no'),
	(319, '_site_transient_php_check_7772753a7ea0fe5c6dd1e8406c9ba6ba', 'a:5:{s:19:"recommended_version";s:3:"7.4";s:15:"minimum_version";s:6:"5.6.20";s:12:"is_supported";b:0;s:9:"is_secure";b:1;s:13:"is_acceptable";b:1;}', 'no'),
	(151, 'finished_updating_comment_type', '1', 'yes'),
	(136, 'can_compress_scripts', '1', 'no'),
	(360, '_site_transient_timeout_theme_roots', '1627075612', 'no'),
	(361, '_site_transient_theme_roots', 'a:2:{s:15:"entradasegurav1";s:7:"/themes";s:15:"entradasegurav2";s:7:"/themes";}', 'no'),
	(176, '_transient_health-check-site-status-result', '{"good":"12","recommended":"8","critical":"0"}', 'yes'),
	(217, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:"auto_add";a:0:{}}', 'yes'),
	(227, 'recently_activated', 'a:0:{}', 'yes'),
	(221, 'new_admin_email', 'rodrigo@rodrigotrindade.com.br', 'yes'),
	(323, 'theme_mods_entradasegurav2', 'a:4:{i:0;b:0;s:18:"nav_menu_locations";a:1:{s:13:"menu-superior";i:2;}s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1626906054;s:4:"data";a:3:{s:19:"wp_inactive_widgets";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:14:"logo-cabecalho";a:1:{i:0;s:13:"media_image-2";}s:5:"sobre";a:1:{i:0;s:6:"text-2";}}}}', 'yes'),
	(351, 'theme_mods_entradasegurav1', 'a:4:{i:0;b:0;s:18:"nav_menu_locations";a:1:{s:13:"menu-superior";i:2;}s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1626906069;s:4:"data";a:3:{s:19:"wp_inactive_widgets";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:14:"logo-cabecalho";a:1:{i:0;s:13:"media_image-2";}s:5:"sobre";a:1:{i:0;s:6:"text-2";}}}}', 'yes'),
	(366, '_site_transient_timeout_browser_d4f10de547cb9cf96c32dc2e2c1a7bd2', '1627680253', 'no'),
	(367, '_site_transient_browser_d4f10de547cb9cf96c32dc2e2c1a7bd2', 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:13:"92.0.4515.107";s:8:"platform";s:7:"Windows";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}', 'no'),
	(369, 'widget_fotoquadrolateral', 'a:5:{i:2;a:1:{s:11:"fotolateral";s:27:"http://placehold.it/790x625";}i:3;a:1:{s:11:"fotolateral";s:27:"http://placehold.it/790x625";}i:4;a:1:{s:11:"fotolateral";s:27:"http://placehold.it/790x625";}i:5;a:1:{s:11:"fotolateral";s:27:"http://placehold.it/790x625";}s:12:"_multiwidget";i:1;}', 'yes'),
	(320, '_site_transient_timeout_browser_7f65ff317c237641f7aace3b7dac03d6', '1627426374', 'no'),
	(308, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:3:{i:0;O:8:"stdClass":10:{s:8:"response";s:7:"upgrade";s:8:"download";s:63:"https://downloads.wordpress.org/release/pt_BR/wordpress-5.8.zip";s:6:"locale";s:5:"pt_BR";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:63:"https://downloads.wordpress.org/release/pt_BR/wordpress-5.8.zip";s:10:"no_content";s:0:"";s:11:"new_bundled";s:0:"";s:7:"partial";s:0:"";s:8:"rollback";s:0:"";}s:7:"current";s:3:"5.8";s:7:"version";s:3:"5.8";s:11:"php_version";s:6:"5.6.20";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"5.6";s:15:"partial_version";s:0:"";}i:1;O:8:"stdClass":10:{s:8:"response";s:7:"upgrade";s:8:"download";s:57:"https://downloads.wordpress.org/release/wordpress-5.8.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:57:"https://downloads.wordpress.org/release/wordpress-5.8.zip";s:10:"no_content";s:68:"https://downloads.wordpress.org/release/wordpress-5.8-no-content.zip";s:11:"new_bundled";s:69:"https://downloads.wordpress.org/release/wordpress-5.8-new-bundled.zip";s:7:"partial";s:0:"";s:8:"rollback";s:0:"";}s:7:"current";s:3:"5.8";s:7:"version";s:3:"5.8";s:11:"php_version";s:6:"5.6.20";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"5.6";s:15:"partial_version";s:0:"";}i:2;O:8:"stdClass":11:{s:8:"response";s:10:"autoupdate";s:8:"download";s:63:"https://downloads.wordpress.org/release/pt_BR/wordpress-5.8.zip";s:6:"locale";s:5:"pt_BR";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:63:"https://downloads.wordpress.org/release/pt_BR/wordpress-5.8.zip";s:10:"no_content";s:0:"";s:11:"new_bundled";s:0:"";s:7:"partial";s:0:"";s:8:"rollback";s:0:"";}s:7:"current";s:3:"5.8";s:7:"version";s:3:"5.8";s:11:"php_version";s:6:"5.6.20";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"5.6";s:15:"partial_version";s:0:"";s:9:"new_files";s:1:"1";}}s:12:"last_checked";i:1627075373;s:15:"version_checked";s:5:"5.7.2";s:12:"translations";a:0:{}}', 'no'),
	(309, '_site_transient_update_themes', 'O:8:"stdClass":5:{s:12:"last_checked";i:1627073812;s:7:"checked";a:2:{s:15:"entradasegurav1";s:3:"1.0";s:15:"entradasegurav2";s:3:"2.0";}s:8:"response";a:0:{}s:9:"no_update";a:0:{}s:12:"translations";a:0:{}}', 'no'),
	(321, '_site_transient_browser_7f65ff317c237641f7aace3b7dac03d6', 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:13:"91.0.4472.124";s:8:"platform";s:7:"Windows";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}', 'no'),
	(365, '_site_transient_update_plugins', 'O:8:"stdClass":5:{s:12:"last_checked";i:1627075374;s:7:"checked";a:3:{s:19:"akismet/akismet.php";s:5:"4.1.9";s:33:"classic-editor/classic-editor.php";s:3:"1.6";s:9:"hello.php";s:5:"1.7.2";}s:8:"response";a:2:{s:19:"akismet/akismet.php";O:8:"stdClass":13:{s:2:"id";s:21:"w.org/plugins/akismet";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:6:"4.1.10";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:57:"https://downloads.wordpress.org/plugin/akismet.4.1.10.zip";s:5:"icons";a:2:{s:2:"2x";s:59:"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272";s:2:"1x";s:59:"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272";}s:7:"banners";a:1:{s:2:"1x";s:61:"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904";}s:11:"banners_rtl";a:0:{}s:8:"requires";s:3:"4.6";s:6:"tested";s:3:"5.8";s:12:"requires_php";b:0;s:13:"compatibility";O:8:"stdClass":0:{}}s:33:"classic-editor/classic-editor.php";O:8:"stdClass":13:{s:2:"id";s:28:"w.org/plugins/classic-editor";s:4:"slug";s:14:"classic-editor";s:6:"plugin";s:33:"classic-editor/classic-editor.php";s:11:"new_version";s:5:"1.6.2";s:3:"url";s:45:"https://wordpress.org/plugins/classic-editor/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/classic-editor.1.6.2.zip";s:5:"icons";a:2:{s:2:"2x";s:67:"https://ps.w.org/classic-editor/assets/icon-256x256.png?rev=1998671";s:2:"1x";s:67:"https://ps.w.org/classic-editor/assets/icon-128x128.png?rev=1998671";}s:7:"banners";a:2:{s:2:"2x";s:70:"https://ps.w.org/classic-editor/assets/banner-1544x500.png?rev=1998671";s:2:"1x";s:69:"https://ps.w.org/classic-editor/assets/banner-772x250.png?rev=1998676";}s:11:"banners_rtl";a:0:{}s:8:"requires";s:3:"4.9";s:6:"tested";s:3:"5.8";s:12:"requires_php";s:5:"5.2.4";s:13:"compatibility";O:8:"stdClass":0:{}}}s:12:"translations";a:0:{}s:9:"no_update";a:1:{s:9:"hello.php";O:8:"stdClass":10:{s:2:"id";s:25:"w.org/plugins/hello-dolly";s:4:"slug";s:11:"hello-dolly";s:6:"plugin";s:9:"hello.php";s:11:"new_version";s:5:"1.7.2";s:3:"url";s:42:"https://wordpress.org/plugins/hello-dolly/";s:7:"package";s:60:"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip";s:5:"icons";a:2:{s:2:"2x";s:64:"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855";s:2:"1x";s:64:"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855";}s:7:"banners";a:1:{s:2:"1x";s:66:"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855";}s:11:"banners_rtl";a:0:{}s:8:"requires";s:3:"4.6";}}}', 'no'),
	(152, 'current_theme', 'Entrada Segura 2.0', 'yes'),
	(153, 'theme_mods_entradasegura', 'a:4:{i:0;b:0;s:18:"nav_menu_locations";a:2:{s:14:"menu-principal";i:2;s:13:"menu-superior";i:2;}s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1626821834;s:4:"data";a:3:{s:19:"wp_inactive_widgets";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:14:"logo-cabecalho";a:1:{i:0;s:13:"media_image-2";}s:5:"sobre";a:1:{i:0;s:6:"text-2";}}}}', 'yes'),
	(154, 'theme_switched', '', 'yes'),
	(155, 'recovery_mode_email_last_sent', '1627080306', 'yes');
/*!40000 ALTER TABLE `es_options` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_postmeta` DISABLE KEYS */;
INSERT INTO `es_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
	(1, 2, '_wp_page_template', 'default'),
	(2, 3, '_wp_page_template', 'default'),
	(12, 6, '_menu_item_type', 'custom'),
	(13, 6, '_menu_item_menu_item_parent', '0'),
	(14, 6, '_menu_item_object_id', '6'),
	(15, 6, '_menu_item_object', 'custom'),
	(16, 6, '_menu_item_target', ''),
	(17, 6, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
	(18, 6, '_menu_item_xfn', ''),
	(19, 6, '_menu_item_url', 'http://localhost/Felipe/site/'),
	(21, 7, '_wp_attached_file', '2021/05/logo-wide.png'),
	(22, 7, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:150;s:6:"height";i:33;s:4:"file";s:21:"2021/05/logo-wide.png";s:5:"sizes";a:1:{s:14:"post-thumbnail";a:4:{s:4:"file";s:20:"logo-wide-100x33.png";s:5:"width";i:100;s:6:"height";i:33;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
	(33, 12, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1920;s:6:"height";i:1281;s:4:"file";s:15:"2021/05/bg7.jpg";s:5:"sizes";a:6:{s:6:"medium";a:4:{s:4:"file";s:15:"bg7-300x200.jpg";s:5:"width";i:300;s:6:"height";i:200;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:16:"bg7-1024x683.jpg";s:5:"width";i:1024;s:6:"height";i:683;s:9:"mime-type";s:10:"image/jpeg";}s:9:"thumbnail";a:4:{s:4:"file";s:15:"bg7-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:15:"bg7-768x512.jpg";s:5:"width";i:768;s:6:"height";i:512;s:9:"mime-type";s:10:"image/jpeg";}s:9:"1536x1536";a:4:{s:4:"file";s:17:"bg7-1536x1025.jpg";s:5:"width";i:1536;s:6:"height";i:1025;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:14:"bg7-100x75.jpg";s:5:"width";i:100;s:6:"height";i:75;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
	(32, 12, '_wp_attached_file', '2021/05/bg7.jpg'),
	(34, 13, '_wp_attached_file', '2021/05/bg17.jpg'),
	(35, 13, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1920;s:6:"height";i:1281;s:4:"file";s:16:"2021/05/bg17.jpg";s:5:"sizes";a:6:{s:6:"medium";a:4:{s:4:"file";s:16:"bg17-300x200.jpg";s:5:"width";i:300;s:6:"height";i:200;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:17:"bg17-1024x683.jpg";s:5:"width";i:1024;s:6:"height";i:683;s:9:"mime-type";s:10:"image/jpeg";}s:9:"thumbnail";a:4:{s:4:"file";s:16:"bg17-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:16:"bg17-768x512.jpg";s:5:"width";i:768;s:6:"height";i:512;s:9:"mime-type";s:10:"image/jpeg";}s:9:"1536x1536";a:4:{s:4:"file";s:18:"bg17-1536x1025.jpg";s:5:"width";i:1536;s:6:"height";i:1025;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:15:"bg17-100x75.jpg";s:5:"width";i:100;s:6:"height";i:75;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
	(36, 11, '_edit_last', '1'),
	(37, 11, '_thumbnail_id', '13'),
	(38, 11, '_Z_slider_ordem', '1'),
	(39, 11, '_Z_slider_link', ''),
	(40, 11, '_Z_slider_frase1', 'Texto 1'),
	(41, 11, '_Z_slider_frase2', 'Texto 2'),
	(42, 11, '_Z_slider_frase3', 'Texto 3'),
	(43, 11, '_edit_lock', '1622121352:1'),
	(44, 2, '_edit_lock', '1622132392:1'),
	(45, 1, '_Z_slider_ordem', ''),
	(46, 1, '_Z_slider_link', ''),
	(47, 1, '_Z_slider_frase1', ''),
	(48, 1, '_Z_slider_frase2', ''),
	(49, 1, '_Z_slider_frase3', ''),
	(50, 15, '_menu_item_type', 'custom'),
	(51, 15, '_menu_item_menu_item_parent', '0'),
	(52, 15, '_menu_item_object_id', '15'),
	(53, 15, '_menu_item_object', 'custom'),
	(54, 15, '_menu_item_target', ''),
	(55, 15, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
	(56, 15, '_menu_item_xfn', ''),
	(57, 15, '_menu_item_url', '#sobre'),
	(59, 6, '_wp_old_date', '2021-05-27');
/*!40000 ALTER TABLE `es_postmeta` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT 0,
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_posts` DISABLE KEYS */;
INSERT INTO `es_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
	(1, 1, '2021-05-23 18:13:34', '2021-05-23 21:13:34', '<!-- wp:paragraph -->\n<p>Boas-vindas ao WordPress. Esse é o seu primeiro post. Edite-o ou exclua-o, e então comece a escrever!</p>\n<!-- /wp:paragraph -->', 'Olá, mundo!', '', 'publish', 'open', 'open', '', 'ola-mundo', '', '', '2021-05-23 18:13:34', '2021-05-23 21:13:34', '', 0, 'http://localhost/Felipe/site/?p=1', 0, 'post', '', 1),
	(2, 1, '2021-05-23 18:13:34', '2021-05-23 21:13:34', '<!-- wp:paragraph -->\n<p>Esta é uma página de exemplo. É diferente de um post no blog porque ela permanecerá em um lugar e aparecerá na navegação do seu site na maioria dos temas. Muitas pessoas começam com uma página que as apresenta a possíveis visitantes do site. Ela pode dizer algo assim:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class="wp-block-quote"><p>Olá! Eu sou um mensageiro de bicicleta durante o dia, ator aspirante à noite, e este é o meu site. Eu moro em São Paulo, tenho um grande cachorro chamado Rex e gosto de tomar caipirinha (e banhos de chuva).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...ou alguma coisa assim:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class="wp-block-quote"><p>A Companhia de Miniaturas XYZ foi fundada em 1971, e desde então tem fornecido miniaturas de qualidade ao público. Localizada na cidade de Itu, a XYZ emprega mais de 2.000 pessoas e faz coisas grandiosas para a comunidade da cidade.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>Como um novo usuário do WordPress, você deveria ir ao <a href="http://localhost/Felipe/site/wp-admin/">painel</a> para excluir essa página e criar novas páginas para o seu conteúdo. Divirta-se!</p>\n<!-- /wp:paragraph -->', 'Página de exemplo', '', 'publish', 'closed', 'open', '', 'pagina-exemplo', '', '', '2021-05-23 18:13:34', '2021-05-23 21:13:34', '', 0, 'http://localhost/Felipe/site/?page_id=2', 0, 'page', '', 0),
	(3, 1, '2021-05-23 18:13:34', '2021-05-23 21:13:34', '<!-- wp:heading --><h2>Quem somos</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texto sugerido: </strong>O endereço do nosso site é: http://localhost/Felipe/site.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Comentários</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texto sugerido: </strong>Quando os visitantes deixam comentários no site, coletamos os dados mostrados no formulário de comentários, além do endereço de IP e de dados do navegador do visitante, para auxiliar na detecção de spam.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Uma sequência anonimizada de caracteres criada a partir do seu e-mail (também chamada de hash) poderá ser enviada para o Gravatar para verificar se você usa o serviço. A política de privacidade do Gravatar está disponível aqui: https://automattic.com/privacy/. Depois da aprovação do seu comentário, a foto do seu perfil fica visível publicamente junto de seu comentário.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Mídia</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texto sugerido: </strong>Se você envia imagens para o site, evite enviar as que contenham dados de localização incorporados (EXIF GPS). Visitantes podem baixar estas imagens do site e extrair delas seus dados de localização.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texto sugerido: </strong>Ao deixar um comentário no site, você poderá optar por salvar seu nome, e-mail e site nos cookies. Isso visa seu conforto, assim você não precisará preencher seus  dados novamente quando fizer outro comentário. Estes cookies duram um ano.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Se você tem uma conta e acessa este site, um cookie temporário será criado para determinar se seu navegador aceita cookies. Ele não contém nenhum dado pessoal e será descartado quando você fechar seu navegador.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Quando você acessa sua conta no site, também criamos vários cookies para salvar os dados da sua conta e suas escolhas de exibição de tela. Cookies de login são mantidos por dois dias e cookies de opções de tela por um ano. Se você selecionar &quot;Lembrar-me&quot;, seu acesso será mantido por duas semanas. Se você se desconectar da sua conta, os cookies de login serão removidos.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Se você editar ou publicar um artigo, um cookie adicional será salvo no seu navegador. Este cookie não inclui nenhum dado pessoal e simplesmente indica o ID do post referente ao artigo que você acabou de editar. Ele expira depois de 1 dia.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Mídia incorporada de outros sites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texto sugerido: </strong>Artigos neste site podem incluir conteúdo incorporado como, por exemplo, vídeos, imagens, artigos, etc. Conteúdos incorporados de outros sites se comportam exatamente da mesma forma como se o visitante estivesse visitando o outro site.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Estes sites podem coletar dados sobre você, usar cookies, incorporar rastreamento adicional de terceiros e monitorar sua interação com este conteúdo incorporado, incluindo sua interação com o conteúdo incorporado se você tem uma conta e está conectado com o site.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Com quem partilhamos seus dados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texto sugerido: </strong>Se você solicitar uma redefinição de senha, seu endereço de IP será incluído no e-mail de redefinição de senha.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Por quanto tempo mantemos os seus dados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texto sugerido: </strong>Se você deixar um comentário, o comentário e os seus metadados são conservados indefinidamente. Fazemos isso para que seja possível reconhecer e aprovar automaticamente qualquer comentário posterior ao invés de retê-lo para moderação.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Para usuários que se registram no nosso site (se houver), também guardamos as informações pessoais que fornecem no seu perfil de usuário. Todos os usuários podem ver, editar ou excluir suas informações pessoais a qualquer momento (só não é possível alterar o seu username). Os administradores de sites também podem ver e editar estas informações.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Quais os seus direitos sobre seus dados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texto sugerido: </strong>Se você tiver uma conta neste site ou se tiver deixado comentários, pode solicitar um arquivo exportado dos dados pessoais que mantemos sobre você, inclusive quaisquer dados que nos tenha fornecido. Também pode solicitar que removamos qualquer dado pessoal que mantemos sobre você. Isto não inclui nenhuns dados que somos obrigados a manter para propósitos administrativos, legais ou de segurança.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Para onde enviamos seus dados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Texto sugerido: </strong>Comentários de visitantes podem ser marcados por um serviço automático de detecção de spam.</p><!-- /wp:paragraph -->', 'Política de privacidade', '', 'draft', 'closed', 'open', '', 'politica-de-privacidade', '', '', '2021-05-23 18:13:34', '2021-05-23 21:13:34', '', 0, 'http://localhost/Felipe/site/?page_id=3', 0, 'page', '', 0),
	(17, 1, '2021-07-23 19:28:29', '2021-07-23 22:28:29', '{{unknown}}', '', '', 'publish', 'closed', 'closed', '', '77e3926d80f2fa58787682d754dad8ef', '', '', '2021-07-23 19:28:29', '2021-07-23 22:28:29', '', 0, 'http://localhost/Felipe/site/2021/07/23/77e3926d80f2fa58787682d754dad8ef/', 0, 'oembed_cache', '', 0),
	(6, 1, '2021-06-02 09:36:58', '2021-05-27 12:29:20', '', 'Início', '', 'publish', 'closed', 'closed', '', 'inicio', '', '', '2021-06-02 09:36:58', '2021-06-02 12:36:58', '', 0, 'http://localhost/Felipe/site/?p=6', 1, 'nav_menu_item', '', 0),
	(7, 1, '2021-05-27 09:41:39', '2021-05-27 12:41:39', '', 'logo-wide', '', 'inherit', 'open', 'closed', '', 'logo-wide', '', '', '2021-05-27 09:41:39', '2021-05-27 12:41:39', '', 0, 'http://localhost/Felipe/site/wp-content/uploads/2021/05/logo-wide.png', 0, 'attachment', 'image/png', 0),
	(18, 1, '2021-07-23 19:29:06', '2021-07-23 22:29:06', '{{unknown}}', '', '', 'publish', 'closed', 'closed', '', 'defba4be4cd82215a2e99616764a980a', '', '', '2021-07-23 19:29:06', '2021-07-23 22:29:06', '', 0, 'http://localhost/Felipe/site/2021/07/23/defba4be4cd82215a2e99616764a980a/', 0, 'oembed_cache', '', 0),
	(16, 1, '2021-07-20 19:52:54', '0000-00-00 00:00:00', '', 'Rascunho automático', '', 'auto-draft', 'open', 'open', '', '', '', '', '2021-07-20 19:52:54', '0000-00-00 00:00:00', '', 0, 'http://localhost/Felipe/site/?p=16', 0, 'post', '', 0),
	(11, 1, '2021-05-27 10:17:04', '2021-05-27 13:17:04', '', 'Slide 1', '', 'publish', 'closed', 'closed', '', 'slide-1', '', '', '2021-05-27 10:17:55', '2021-05-27 13:17:55', '', 0, 'http://localhost/Felipe/site/?post_type=slider&#038;p=11', 0, 'slider', '', 0),
	(12, 1, '2021-05-27 10:16:57', '2021-05-27 13:16:57', '', 'bg7', '', 'inherit', 'open', 'closed', '', 'bg7', '', '', '2021-05-27 10:16:57', '2021-05-27 13:16:57', '', 11, 'http://localhost/Felipe/site/wp-content/uploads/2021/05/bg7.jpg', 0, 'attachment', 'image/jpeg', 0),
	(13, 1, '2021-05-27 10:16:58', '2021-05-27 13:16:58', '', 'bg17', '', 'inherit', 'open', 'closed', '', 'bg17', '', '', '2021-05-27 10:16:58', '2021-05-27 13:16:58', '', 11, 'http://localhost/Felipe/site/wp-content/uploads/2021/05/bg17.jpg', 0, 'attachment', 'image/jpeg', 0),
	(15, 1, '2021-06-02 09:36:58', '2021-06-02 12:36:58', '', 'Sobre', '', 'publish', 'closed', 'closed', '', 'sobre', '', '', '2021-06-02 09:36:58', '2021-06-02 12:36:58', '', 0, 'http://localhost/Felipe/site/?p=15', 2, 'nav_menu_item', '', 0),
	(19, 1, '2021-07-23 19:29:11', '2021-07-23 22:29:11', '{{unknown}}', '', '', 'publish', 'closed', 'closed', '', '8db8a0151c283217741310d8f9a039fa', '', '', '2021-07-23 19:29:11', '2021-07-23 22:29:11', '', 0, 'http://localhost/Felipe/site/2021/07/23/8db8a0151c283217741310d8f9a039fa/', 0, 'oembed_cache', '', 0);
/*!40000 ALTER TABLE `es_posts` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_termmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_termmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `es_termmeta` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT 0,
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_terms` DISABLE KEYS */;
INSERT INTO `es_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
	(1, 'Sem categoria', 'sem-categoria', 0),
	(2, 'Menu Superior', 'menu-superior', 0);
/*!40000 ALTER TABLE `es_terms` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_term_relationships` DISABLE KEYS */;
INSERT INTO `es_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
	(1, 1, 0),
	(6, 2, 0),
	(15, 2, 0);
/*!40000 ALTER TABLE `es_term_relationships` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_term_taxonomy` DISABLE KEYS */;
INSERT INTO `es_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
	(1, 1, 'category', '', 0, 1),
	(2, 2, 'nav_menu', '', 0, 2);
/*!40000 ALTER TABLE `es_term_taxonomy` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_usermeta` DISABLE KEYS */;
INSERT INTO `es_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
	(1, 1, 'nickname', 'rodrigo'),
	(2, 1, 'first_name', ''),
	(3, 1, 'last_name', ''),
	(4, 1, 'description', ''),
	(5, 1, 'rich_editing', 'true'),
	(6, 1, 'syntax_highlighting', 'true'),
	(7, 1, 'comment_shortcuts', 'false'),
	(8, 1, 'admin_color', 'fresh'),
	(9, 1, 'use_ssl', '0'),
	(10, 1, 'show_admin_bar_front', 'true'),
	(11, 1, 'locale', ''),
	(12, 1, 'es_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
	(13, 1, 'es_user_level', '10'),
	(14, 1, 'dismissed_wp_pointers', 'text_widget_custom_html'),
	(15, 1, 'show_welcome_panel', '0'),
	(25, 1, 'session_tokens', 'a:1:{s:64:"e4d36c4bed76df91529e816f3c24b8997e1eeaa6ba201dd301b9636f45b5fcbf";a:4:{s:10:"expiration";i:1627248252;s:2:"ip";s:3:"::1";s:2:"ua";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36";s:5:"login";i:1627075452;}}'),
	(17, 1, 'es_dashboard_quick_press_last_post_id', '16'),
	(18, 1, 'closedpostboxes_dashboard', 'a:1:{i:0;s:21:"dashboard_site_health";}'),
	(19, 1, 'metaboxhidden_dashboard', 'a:5:{i:0;s:21:"dashboard_site_health";i:1;s:19:"dashboard_right_now";i:2;s:18:"dashboard_activity";i:3;s:21:"dashboard_quick_press";i:4;s:17:"dashboard_primary";}'),
	(20, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";i:4;s:15:"title-attribute";}'),
	(21, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:"add-post_tag";}'),
	(22, 1, 'nav_menu_recently_edited', '2'),
	(23, 1, 'es_user-settings', 'libraryContent=browse&editor=html'),
	(24, 1, 'es_user-settings-time', '1627080328');
/*!40000 ALTER TABLE `es_usermeta` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `es_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `es_users` DISABLE KEYS */;
INSERT INTO `es_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
	(1, 'rodrigo', '$P$BHRAzENtAVFcvwBSCu0Hn0shIQ/wVE.', 'rodrigo', 'rodrigo@rodrigotrindade.com.br', 'http://localhost/Felipe/site', '2021-05-23 21:13:34', '', 0, 'rodrigo');
/*!40000 ALTER TABLE `es_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

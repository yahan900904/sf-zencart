<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: meta_tags.php 18697 2011-05-04 14:35:20Z wilt $
 * Simplified Chinese version   http://www.zen-cart.cn
 */

// page title
define('TITLE', '爱表网');

// Site Tagline
define('SITE_TAGLINE', '中国最大的网上手表商城');

// Custom Keywords
define('CUSTOM_KEYWORDS', '');

// Home Page Only:
  define('HOME_PAGE_META_DESCRIPTION', '【爱表网官网】：买原装正品世界名表：浪琴、天梭、欧米茄、劳力士等瑞士手表品牌，信用卡分期付款，正品保证，全国联保，终身售后保障！');
  define('HOME_PAGE_META_KEYWORDS', '手表,买手表,爱表网,爱表网官网,名表商城,正品手表，瑞士手表');

  // NOTE: If HOME_PAGE_TITLE is left blank (default) then TITLE and SITE_TAGLINE will be used instead.
  define('HOME_PAGE_TITLE', '爱表网【官网】：中国最大的正品名表商城！买手表，上爱表！'); // usually best left blank

// 简易页面关键字。在下面可以设置简易页面的关键字，用简易页面的ID替换下面的 #
// 如果想用缺省的，就不用设置 
// (例如: 最好不要设置标题标签，就会使用全站的缺省值)
// 可以按同样的模式重复
  define('META_TAG_DESCRIPTION_EZPAGE_#','');
  define('META_TAG_KEYWORDS_EZPAGE_#','');
  define('META_TAG_TITLE_EZPAGE_#', '');

// 基于页面的关键字。按照下面的格式设置独立页面的关键字，主要是针对附加页面。
// 用需要定义页面中 main_page= 后面的大小字母替换 "page_name"，例如 ABOUT_US 或 SHIPPINGINFO 等。
// 可以按同样的模式重复
  define('META_TAG_DESCRIPTION_page_name','');
  define('META_TAG_KEYWORDS_page_name','');
  define('META_TAG_TITLE_page_name', '');

// Review Page can have a lead in:
  define('META_TAGS_REVIEW', '评论: ');

// separators for meta tag definitions
// Define Primary Section Output
  define('PRIMARY_SECTION', ' : ');

// Define Secondary Section Output
  define('SECONDARY_SECTION', ' - ');

// Define Tertiary Section Output
  define('TERTIARY_SECTION', ', ');

// Define divider ... usually just a space or a comma plus a space
  define('METATAGS_DIVIDER', ' ');

// Define which pages to tell robots/spiders not to index
// This is generally used for account-management pages or typical SSL pages, and usually doesn't need to be touched.
define('ROBOTS_PAGES_TO_SKIP','login,logoff,create_account,account,account_edit,account_history,account_history_info,account_newsletters,account_notifications,account_password,address_book,advanced_search,advanced_search_result,checkout_success,checkout_process,checkout_shipping,checkout_payment,checkout_confirmation,cookie_usage,create_account_success,contact_us,download,download_timeout,customers_authorization,down_for_maintenance,password_forgotten,time_out,unsubscribe,info_shopping_cart,popup_image,popup_image_additional,product_reviews_write,ssl_check,shopping_cart');


// favicon setting
// There is usually NO need to enable this unless you need to specify a path and/or a different filename
//  define('FAVICON','favicon.ico');
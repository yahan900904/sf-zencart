<?php
/**
 *功能：91Hpay公共常量函数库
 *详细：用于订单日志的打印
 *版本：1.0.0
 *修改日期：2012.12.20
 '说明：
 '以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 '该代码仅供学习和研究91Hpay接口使用，只是提供一个参考。
 */

define('MODULE_PAYMENT_HPAY_TEXT_ADMIN_TITLE', '91hpay Online Payment');
define('MODULE_PAYMENT_HPAY_TEXT_CATALOG_TITLE', '91hpay Online Payment');
define('MODULE_PAYMENT_HPAY_TEXT_DESCRIPTION', '91hpay Online Payment');
define('MODULE_PAYMENT_HPAY_MARK_BUTTON_IMG',DIR_WS_MODULES . 'payment/91hpay/payment_91Hpay.jpg');
define('MODULE_PAYMENT_HPAY_MARK_BUTTON_ALT', '91hpay Online Payment');
define('MODULE_PAYMENT_HPAY_ACCEPTANCE_MARK_TEXT', '91hpay Online Payment');
define('MODULE_PAYMENT_HPAY_TEXT_CATALOG_LOGO', '<img src="' . MODULE_PAYMENT_HPAY_MARK_BUTTON_IMG . '" height="42" width ="132" alt="' . MODULE_PAYMENT_HPAY_MARK_BUTTON_ALT . '" title="' . MODULE_PAYMENT_HPAY_MARK_BUTTON_ALT . '" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save time. Check out securely.<br> 
Pay without sharing your financial information');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_1_1', 'Enable HPAY MODULE');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_1_2', 'Do you want to accept 91hpay payments?');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_2_1', '91hpay MerchantID');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_2_2', '91hpay MerchantID');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_3_1', '91hpay Md5 Key');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_3_2', '91hpay Md5 Key');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_4_1', 'Payment Zone');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_4_2', 'If a zone is selected, only enable this payment method for that zone.');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_5_1', 'Set Order Status');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_5_2', 'Set the status of orders made with this payment module that have completed payment<br />(Processing recommended)<br />');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_6_1', 'Set New Order Status');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_6_2', 'Set the init status of orders made with this payment module<br /> (Pending recommended)<br />');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_7_1', 'Sort order of display');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_7_2', 'Sort order of display. Lowest is displayed first.');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_8_1', '91hpay Transaction System');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_8_2', 'Live or Test');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_9_1', 'Start Debugging');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_9_2', 'Whether or not to write debug info.disabled by default.This is only for debug purpose. <br />');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_10_1', 'Order id prefix/Site identifier');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_10_2', 'if not set, your STORE_NAME will be used as order prefix.only numbers/letters are allowed.Can not be longer than 10 characters <br />');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_11_1', 'Backend return url');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_11_2', 'if not set,default will be used');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_12_1', 'Payment Gateway');
define('MODULE_PAYMENT_HPAY_TEXT_CONFIG_12_2', 'The 91hpay gateway url');
?>

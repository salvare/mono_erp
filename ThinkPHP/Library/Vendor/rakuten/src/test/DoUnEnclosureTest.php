<?php
// Copyright (c) Rakuten, Inc. All Rights Reserved.


define("SRC_PATH","/php_work/xampp/htdocs/order-api_sample/src");

require_once(SRC_PATH. "/test/TestDefine.php");
require_once(SRC_PATH. "/api/OrderApiPractice.php");
require_once(SRC_PATH. "/api/impl/OrderApiPracticeBase.php");
require_once(SRC_PATH. "/api/impl/DoUnEnclosurePractice.php");

print ("テストSTART\n");

//同梱解除リクエスト情報の作成
$serReq = array();

$serReq[] = array(
	'orderNumber' => array('XXXXXXXXXXXXXXXX',
						   'XXXXXXXXXXXXXXXX'));

$api = new DoUnEnclosurePractice();

//認証情報の設定
$api->setAuthRequest(
	array(
      	// 認証キー
       'authKey'  => AUTH_KEY,
       // 店舗URL
	   'shopUrl'   => SHOP_URL,
	   // ユーザ名
	   'userName' => USER_NAME));

//同梱解除リクエスト情報の設定
$api->setServiceRequest($serReq);

//API実行
$res = $api->callOrderApi();

?>
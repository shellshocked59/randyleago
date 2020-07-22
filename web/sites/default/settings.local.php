<?php

$databases['default']['default'] = array(
	'database' => 'drupal_randy_cms',
	'username' => 'admin',
	'password' => 'Ezmb8E8kHPy6bp7b',
	'prefix' => '',
	'host' => 'tca-db.cb7hm0kzulws.us-east-2.rds.amazonaws.com',
	'port' => '3306',
	'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
	'driver' => 'mysql'
);


#mysqldump -u eric -p -h ericcms.c1zgb7czvxiq.us-east-2.rds.amazonaws.com ericcms
#find and replace CHARSET=utf8 COLLATE=utf8_unicode_ci
/*$databases['default']['default'] = array (
  'database' => 'ericcms',
  'username' => 'eric',
  'password' => 'jdfs809j3kasdf34345',
  'prefix' => '',
  'host' => 'ericcms.c1zgb7czvxiq.us-east-2.rds.amazonaws.com',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);*/


//limit kint depth
//https://www.drupaleasy.com/quicktips/drupal-8-debugging-kareful-klicking-kint
#if (file_exists("$app_root/modules/contrib/devel/kint/kint/Kint.class.php")) {
#require_once "$app_root/modules/contrib/devel/kint/kint/Kint.class.php";
#Kint::$maxLevels = 4;
#}


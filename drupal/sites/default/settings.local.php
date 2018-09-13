<?php

$config['system.file']['path']['temporary'] = 'C:\wamp64\tmp';

$settings['trusted_host_patterns'] = array(
'^www2.unccd.int$',
'^www.unccd.int$',
'^localhost$',
);

$config['search_api.server.solr_server']['backend_config']['connector_config']['host'] = 'knowledge.unccd.int';
$config['search_api.server.solr_server']['backend_config']['connector_config']['core'] = 'unccd';

$databases['default']['default'] = array (
  'database' => 'drupaltest',
  'username' => 'root',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['file_private_path'] = "C:\wamp64\www\unccd-website\private-files";

$settings['unccd_search_url'] = 'https://knowledge.unccd.int/search';

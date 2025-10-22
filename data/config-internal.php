<?php
return [
  'database' => [
    'host' => '127.0.0.1',
    'port' => '3306',
    'charset' => NULL,
    'dbname' => 'espo',
    'user' => 'root',
    'password' => '',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => NULL,
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false,
    'sql' => false,
    'sqlFailed' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1761138000.947683,
  'cryptKey' => '876c942306f4459ed018f638ce776d5a',
  'hashSecretKey' => '1e7b2a82175edd5267b968ec803d7dfc',
  'defaultPermissions' => [
    'user' => 501,
    'group' => 20
  ],
  'actualDatabaseType' => 'mysql',
  'actualDatabaseVersion' => '9.4.0',
  'instanceId' => 'ceb35665-f5ed-4da4-93e0-389f78998911'
];

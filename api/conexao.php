<?php
  $dsn = "mysql:host={$_ENV["PLANETSCALE_DB_HOST"]};dbname={$_ENV["PLANETSCALE_DB"]}";
  $options = array(
    PDO::MYSQL_ATTR_SSL_CA => $_ENV["PLANETSCALE_SSL_CERT_PATH"],
  );

  $pdo = new PDO($dsn, $_ENV["PLANETSCALE_DB_USERNAME"], $_ENV["PLANETSCALE_DB_PASSWORD"], $options);
?>
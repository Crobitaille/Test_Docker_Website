<?php

function db_connect() {

  static $connection;

  if (!isset($connection)) {

      $config = parse_ini_file('./config/config.ini');
      try {
          $connection = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['database'], $config['username'], $config['password']);
      } catch (PDOException $e) {
          return $e;
      }
  }
  return $connection;
}

function db_query() {
  $connection = db_connect();
  $sql = 'SELECT * FROM employee_table';
  $result = $connection->prepare($sql);
  $result->execute();

  return $result->fetchAll();
}

$value = db_query();


exit(json_encode($value));

<?php
namespace PHPGrammers;
/**
 *
 */
class DBConfig
{
  private $conn;

  private $dbms = 'mysql'; //'sqlsrv'; //'pgsql'; //DBMS eg. 'mysql' for MySQL/ MariaDB, 'pgsql' for PostgreSQL, 'sqlsrv' for MSSQL
  private $host = 'localhost'; //'192.168.147.1'; //database host
  private $port = ''; // '5432'; // database port
  private $user = 'root'; //'root_sql'; //'postgres'; // database user
  private $pass = ''; //'12345678'; //password of database user
  private $dbname ='staff_bank'; // database name
public function databaseConnection()
{
  define("HOST", $this->host);
  define("PORT",  $this->port);
  define("USER",  $this->user);
  define("PASS",  $this->pass);
  define("DATABASE_NAME",  $this->dbname);
  define("DBMS",  $this->dbms);
  $this->conn = new \PDO(DBMS.':host='.HOST.';port='.PORT.';dbname='.DATABASE_NAME, USER, PASS);
  $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
  return $this->conn;
}
}

<?php
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "mysql1");

/**
 *
 */
class Database{
  public $host = SERVERNAME;
  public $user = USERNAME;
  public $pass = PASSWORD;
  public $db = DBNAME;

  public $link;
  public $error;

// Connect Database;
  public function __construct()
  {
    $this->conn();
  }

  private function conn(){
    $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db);
    if (!$this->link) {
      $this->error = "connection failed".$this->link->connect_error;
      return false;
    }
  }
  // Select or read Database;
  public function select($query){
    $result = $this->link->query($query) or die($this->link->error.__LINE__);
    if ($result->num_rows>0) {
      return $result;
    }else {
      return false;
    }
  }
}

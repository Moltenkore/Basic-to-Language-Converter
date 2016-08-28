<?php

namespace Database;

use PDO as PDO;

class handle {
  public $db;

  function __construct() {
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    try {
      $db = new PDO(
        "mysql:host=<your host>;" .
        "dbname=<your database name>;" .
        "charset=utf8",
        "<your username>",
        "<your password>",
        $options
      );
    } catch (PDOException $ex) {
      die("Failed to connect to the database: " . $ex->getMessage());
    }
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $this->db = $db;
  }

  /**
   * @param $query string SQL query
   * @param $query_params array query parameters
   * @return array row
   */
  public function query($query, $query_params) {
    try {
      $stmt = $this->db->prepare($query);
      $result = $stmt->execute($query_params);
      return $stmt->fetch();
    } catch (PDOException $ex) {
      die("Failed to run query: " . $ex->getMessage());
    }
  }

  /**
   * @param $query string SQL insert query
   * @param $query_params array insert query parameters
   * @return bool if the query worked
   */
  public function insertQuery($query, $query_params) {
    try {
      $stmt = $this->db->prepare($query);
      $result = $stmt->execute($query_params);
      return $result;
    } catch (PDOException $ex) {
      die("Failed to run query: " . $ex->getMessage());
    }
  }

  public function updateQuery($query, $query_params) {
    return $this->insertQuery($query, $query_params);
  }

  /**
   * @return PDO database pdo interface.
   */
  public function getDatabaseHandle() {
    return $this->db;
  }

  public function insertScramble($langkey, $input, $output) {
    $this->insertQuery("
    INSERT INTO lang (
      lkey,
      input,
      output
    ) VALUES (
      :lkey,
      :input,
      :output
    )
    ",
      array(
        ":lkey" => $langkey,
        ":input" => $input,
        ":output" => $output
      )
    );
  }

  public function findTranslation($langkey, $input) {
    $row = $this->query("
      SELECT *, LCASE(input)
      FROM lang
      WHERE
        input = :input
      AND
        lkey = :lkey
      LIMIT 1
      ",
      array(
        ":input" => strtolower($input),
        ":lkey" => $langkey
      )
    );

    if ($row) {
      return $row;
    } else {
      return false;
    }
  }

  public function findTranslationByText($output) {
    $row = $this->query("
      SELECT *, LCASE(output)
      FROM lang
      WHERE
        output = :output
      LIMIT 1
      ",
      array(
        ":output" => strtolower($output)
      )
    );

    if ($row) {
      return $row;
    } else {
      return false;
    }
  }
}

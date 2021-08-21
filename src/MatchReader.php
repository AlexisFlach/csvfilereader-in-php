<?php

declare(strict_types=1);

// namespace Readers;

// use Readers\CsvFileReader;

require_once('./CsvFileReader.php');
require_once('./utils.php');

class MatchReader extends CsvFileReader {
  
  public function mapRow(array $row):array {
    return array(
      dateToInt($row[0]),
      $row[1],
      $row[2],
      (int) $row[3],
      (int) $row[4],
      $row[5],
      $row[6]
    );
  }
}
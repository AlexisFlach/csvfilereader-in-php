<?php

declare(strict_types=1);

// namespace Readers;

abstract class CsvFileReader
{
  public array $data = [];

  public function __construct(private string $filename)
  {
    $this->filename  = $filename;
  }

  abstract protected function mapRow(array $row);

  public function read(): void
  {
    if (($open = fopen($this->filename, "r")) !== false) {
      while (($data = fgetcsv($open, 1000, ",")) !== false) {
        $array[] = $data;
      }
      fclose($open);
      $this->data = array_map(array($this, 'mapRow'), $array);
    };
  }
}

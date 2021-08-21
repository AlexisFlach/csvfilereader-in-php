<?php

declare (strict_types=1);

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

require_once('./MatchResult.php');

$reader = new MatchReader('football.csv');
$reader->read();

$manUtdWins = 0;

foreach ($reader->data as $match) {
    if ($match[1] === "Man United" && $match[5] === MatchResult["HomeWin"] || $match[2] === "Man United" && $match[5] === MatchResult["AwayWin"]) {
        $manUtdWins += 1;
    }
}

echo 'Man united won ' . $manUtdWins . ' games';
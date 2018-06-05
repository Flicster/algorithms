<?php
$array = [];
for ($i = 0; $i < 1000; $i++) {
    $array[] = $i;
}

function recursiveBinarySearch (array $array, int $p, int $r, int $x): ?int
{
    if ($p > $r) {
        return null;
    }

    $q = (int) round(($p + $r)/2);

    if ($array[$q] === $x) {
        return $q;
    } elseif ($array[$q] > $x) {
        $r = $q - 1;
        return recursiveBinarySearch($array, $p, $r, $x);
    } elseif ($array[$q] < $x) {
        $p = $q + 1;
        return recursiveBinarySearch($array, $p, $r, $x);
    }
}
$p = 0;
$r = count($array) - 1;

$index = recursiveBinarySearch($array, $p, $r, (int) $argv[1]);

echo $index ?? 'integer not found';
echo PHP_EOL;
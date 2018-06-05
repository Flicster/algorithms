<?php
$array = [];
for ($i = 0; $i < 1000; $i++) {
    $array[] = $i;
}

function binarySearch (array $array, int $x): ?int
{
    $p = 0;
    $r = count($array) - 1;

    while ($p <= $r) {
        $q = (int) round(($p + $r)/2);

        if ($array[$q] === $x) {
            return $q;
        } elseif ($array[$q] > $x) {
            $r = $q - 1;
        } elseif ($array[$q] < $x) {
            $p = $q + 1;
        }
    }

    return null;
}

$index = binarySearch($array, (int) $argv[1]);

echo $index ?? 'integer not found';
echo PHP_EOL;
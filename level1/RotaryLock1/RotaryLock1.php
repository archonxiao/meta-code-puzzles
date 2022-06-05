<?php
function getMinCodeEntryTime(int $N, int $M, array $C): int {
    // Write your code here
    $result = 0;
    for ($i = 0; $i < $M; $i++) {
        $prev = $C[$i - 1] ?? 1;
        $d1 = abs($C[$i] - $prev);
        $d2 = $N - max($C[$i], $prev) + min($C[$i], $prev);
        $result += min($d1, $d2);
    }
    return $result;
}

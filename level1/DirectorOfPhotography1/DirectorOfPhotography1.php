<?php
function getArtisticPhotographCount(int $N, string $C, int $X, int $Y): int {
    // Write your code here
    $j = 0;
    $subStrLen = $Y - $X + 1;
    $result = 0;
    // Check all the occurrences of A
    while ($j < $N) {
        $i = strpos($C, 'A', $j);
        if ($i === false) {
            break;
        }
        $j = ($i > $j) ? $i : $j;
        $j++;
        // Get the sub string within the range of [$X, $Y] from $i (before the current 'A')
        if ($i >= $X) {
            if ($i <= $Y) {
                $subStr1 = substr($C, 0, $i - $X + 1);
            } else {
                $subStr1 = substr($C, $i - $Y, $subStrLen);
            }
        } else {
            continue;
        }
        $totalP1 = substr_count($subStr1, 'P');
        $totalB1 = substr_count($subStr1, 'B');
        if ($totalP1 === 0 && $totalB1 === 0) {
            continue;
        }
        // Get the sub string within the range of [$X, $Y] from $i (after the current 'A')
        if (($N - $i - 1) >= $X) {
            if (($N - $i - 1) <= $Y) {
                $subStr2 = substr($C, $i + $X);
            } else {
                $subStr2 = substr($C, $i + $X, $subStrLen);
            }
        } else {
            continue;
        }
        $totalP2 = substr_count($subStr2, 'P');
        $totalB2 = substr_count($subStr2, 'B');
        if ($totalP2 === 0 && $totalB2 === 0) {
            continue;
        }
        // Sum up the result
        $result += $totalP1 * $totalB2 + $totalB1 * $totalP2;
    }
    return $result;
}
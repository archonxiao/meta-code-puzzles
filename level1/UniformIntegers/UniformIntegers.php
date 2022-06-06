<?php
function getUniformIntegerCountInInterval(int $A, int $B): int {
    // Write your code here
    $logA = floor(log10($A));
    $logB = floor(log10($B));
    $floorA = $logA == 0 ? $A : floor($A / pow(10, $logA));
    $floorB = $logB == 0 ? $B : floor($B / pow(10, $logB));
    $uniformA = 0;
    for ($i = 0; $i <= $logA; $i++) {
        $uniformA += $floorA * pow(10, $i);
    }
    $uniformB = 0;
    for ($j = 0; $j <= $logB; $j++) {
        $uniformB += $floorB * pow(10, $j);
    }
    $result = 0;
    if ($logA == $logB) {
        $result += $floorB - $floorA - 1;
    } else {
        $result += (9 - $floorA) + ($floorB - 1);
        $result += 9 * ($logB - $logA - 1);
    }
    if ($uniformA >= $A) {
        $result ++;
    }
    if ($uniformB <= $B) {
        $result ++;
    }
    return $result;
}

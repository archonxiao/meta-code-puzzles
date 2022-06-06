<?php
function getMinimumDeflatedDiscCount(int $N, array $R): int {
    // Write your code here
    $result = 0;
    $prev = $R[$N - 1];
    if ($prev < $N) {
        return -1;
    }
    for ($i = $N - 2; $i >= 0; $i--) {
        if ($R[$i] < ($i + 1)) {
            return -1;
        } elseif ($R[$i] >= $prev) {
            $prev--;
            $result++;
        } else {
            $prev = $R[$i];
        }
    }
    return $result;
}

<?php
function getMinProblemCount(int $N, array $S): int {
    // Write your code here
    $extraValues = 0;
    foreach ($S as $score) {
        if ($score % 2) {
            $extraValues++;
            break;
        }
    }
    return $extraValues + max($S)/2;
}

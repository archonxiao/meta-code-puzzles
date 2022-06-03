<?php
function getMaxAdditionalDinersCount(int $N, int $K, int $M, array $S): int {
    // Write your code here
    $total = 0;
    sort($S);
    for ($i = 0; $i < $M; $i++) {
        if ($i === 0) {
            $total += floor(($S[$i] - 1) / ($K + 1));
        } else {
            $total += floor(($S[$i] - $S[$i - 1]) / ($K + 1)) - 1;
        }
        if ($i === ($M - 1)) {
            $total += floor(($N - $S[$i]) / ($K + 1));
        }
    }
    return $total;
}

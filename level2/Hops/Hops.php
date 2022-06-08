<?php
function getSecondsRequired(int $N, int $F, array $P): int {
    // Write your code here
    return $N - min($P);
}

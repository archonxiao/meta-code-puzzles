<?php
function getArtisticPhotographCount(int $N, string $C, int $X, int $Y): int {
    // Write your code here
    $result = 0;
    $beforeP = 0;
    $beforeB = 0;
    $arr = [];
    for ($i = 0; $i < $N; $i++) {
        if ($C[$i] === 'P') {
            $beforeP++;
        } elseif ($C[$i] === 'B') {
            $beforeB++;
        }
        $arr[$i + 1]['P'] = $beforeP;
        $arr[$i + 1]['B'] = $beforeB;
    }
    for ($i = $X; $i < $N - $X; $i++) {
        if ($C[$i] === 'A') {
            if ($i >= $Y) {
                $beforeP = $arr[$i - $X + 1]['P'] - $arr[$i - $Y]['P'];
                $beforeB = $arr[$i - $X + 1]['B'] - $arr[$i - $Y]['B'];
            } else {
                $beforeP = $arr[$i - $X + 1]['P'];
                $beforeB = $arr[$i - $X + 1]['B'];
            }
            if ($i <= $N - $Y - 1) {
                $afterP = $arr[$i + $Y + 1]['P'] - $arr[$i + $X]['P'];
                $afterB = $arr[$i + $Y + 1]['B'] - $arr[$i + $X]['B'];
            } else {
                $afterP = $arr[$N]['P'] - $arr[$i + $X]['P'];
                $afterB = $arr[$N]['B'] - $arr[$i + $X]['B'];
            }
            $result += $beforeP * $afterB + $beforeB * $afterP;
        }
    }
    return $result;
}

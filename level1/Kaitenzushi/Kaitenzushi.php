<?php

function getMaximumEatenDishCount(int $N, array $D, int $K): int {
    // Write your code here
    $numDishes = 0;
    $lastAteDishAt = [];
    foreach ($D as $dish) {
        if (isset($lastAteDishAt[$dish]) && $K >= $numDishes - $lastAteDishAt[$dish]) {
            continue;
        }

        $lastAteDishAt[$dish] = $numDishes;
        $numDishes++;
    }
    return $numDishes;
}

//function getMaximumEatenDishCount(int $N, array $D, int $K): int {
//    // Write your code here
//    $prevDishes = array_fill(0, $K, 0);
//    $result = 0;
//    foreach ($D as $d) {
//        if (!in_array($d, $prevDishes)) {
//            $result++;
//        }
//        array_shift($prevDishes);
//        array_push($prevDishes, $d);
//    }
//    return $result;
//}

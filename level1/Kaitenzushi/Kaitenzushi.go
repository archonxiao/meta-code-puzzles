package main
import "bufio"
import "fmt"
import "os"
import "strconv"
import "strings"
// Write any import statements here

func contains(elems []int32, v int32) bool {
    for _, s := range elems {
        if v == s {
            return true
        }
    }
    return false
}

func getMaximumEatenDishCount(N int32, D []int32, K int32) int32 {
  // Write your code here
	var result int32 = 0
	var i int32 = 0
	prev := make([]int32, K)
	for ; i < N; i++ {
		if contains(prev, D[i]) == false {
			prev = prev[1:]
			prev = append(prev, D[i])
			result++
		}
	}
	return result
}

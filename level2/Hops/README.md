A family of frogs in a pond are traveling towards dry land to hibernate. They hope to do so by hopping across a trail of $N$ lily pads, numbered from $1$ to $N$ in order.

There are $F$ frogs, numbered from $1$ to $F$. Frog $i$ is currently perched atop lily pad $P_i$. No two frogs are currently on the same lily pad. Lily pad $N$ is right next to the shore, and none of the frogs are initially on lily pad $N$.

Each second, one frog may hop along the trail towards lily pad $N$. When a frog hops, it moves to the nearest lily pad after its current lily pad which is not currently occupied by another frog (hopping over any other frogs on intermediate lily pads along the way). If this causes it to reach lily pad $N$, it will immediately exit onto the shore. Multiple frogs may not simultaneously hop during the same second.

Assuming the frogs work together optimally when deciding which frog should hop during each second, determine the minimum number of seconds required for all $F$ of them to reach the shore.

#### Constraints
$2 \le N \le 10^{12}$<br>
$1 \le F \le 500,000$<br>
$1 \le P_i \le N-1$

#### Sample test case #1
```
N = 3
F = 1
P = [1]
```
```
Expected Return Value = 2
```
#### Sample test case #2
```
N = 6
F = 3
P = [5, 2, 4]
```
```
Expected Return Value = 4
```

#### Sample Explanation
In the first case, there are $3$ lily pads and $1$ frog. The frog is initially atop lily pad $1$ and will take $2$ hops to reach lily pad $3$.

In the second case, there are $6$ lily pads, with frogs on lily pads $5$, $2$, and $4$. Initially the lily pads and frog numbers can be represented as $.2.31$.

One optimal sequence of hops is:
1. Frog 22 hops forward to lily pad 33:<br>..231.
2. Frog 22 hops over frogs 11 and 33, onto lily pad 66 and exiting onto the shore:<br>...31.
3. Frog 33 hops over frog 11, onto lily pad 66 and exiting onto the shore:<br>....1.
4. Frog 11 hops onto lily pad 66, exiting onto the shore.
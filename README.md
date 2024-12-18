# PHP Type Juggling Bug

This repository demonstrates a common error in PHP related to type juggling and loose comparison operators. The `bug.php` file contains code that exhibits the unexpected behavior due to loose comparison of strings and numbers. The solution, provided in `bugSolution.php`, shows how to use strict comparison (`===`) to prevent this type of error.

## Description
PHP's loose comparison operator (`==`) performs type coercion before comparing values, potentially leading to unexpected results when comparing strings and numbers.  This example shows how a string representation of a number can be considered 'equal' to its numeric equivalent using the loose comparison operator, even though they are of different data types.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output, which will demonstrate the unexpected behavior of the loose comparison.
4. Run `bugSolution.php` and compare the output with `bug.php` to see the solution using strict comparison.

## Solution
Always use strict comparison (`===`) when the data type and the value need to match exactly to avoid unexpected behavior resulting from PHP's type juggling.
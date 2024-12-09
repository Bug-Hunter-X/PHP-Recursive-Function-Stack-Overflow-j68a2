# PHP Recursive Function Stack Overflow Bug

This repository demonstrates a potential stack overflow error in a PHP recursive function that processes nested array data.  The function `processData` recursively iterates through an array.  If the array is excessively large or deeply nested, it can exceed the PHP recursion limit, resulting in a fatal error.

## Bug Description
The `processData` function recursively calls itself.  While generally effective for processing nested structures, this approach lacks a mechanism to handle excessively deep recursion.

## Reproduction Steps
1. Clone the repository.
2. Run the `bug.php` file. With large enough nested array, it will likely cause a fatal error.

## Solution
The solution involves adding a depth check to the recursive function. This prevents the function from exceeding a predefined recursion depth, thus mitigating the risk of a stack overflow error.

## References
* PHP Manual on recursion: [https://www.php.net/manual/en/language.functions.recursion.php](https://www.php.net/manual/en/language.functions.recursion.php)
* PHP `ini_set()` function for modifying recursion limit: [https://www.php.net/manual/en/function.ini-set.php](https://www.php.net/manual/en/function.ini-set.php)
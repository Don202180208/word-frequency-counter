<?php
/*Submmitted by:
DON ANGEL LOU M. SALVATIERRA
JOHN CARL REYES
*/

/**
 * Calculates the total price of items in a shopping cart.
 *
 * @param array $items An array containing items with 'name' and 'price' keys.
 * @return float The total price of all items in the shopping cart.
 */
function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

/**
 * Modifies a string by removing spaces and converting it to lowercase.
 *
 * @param string $string The input string.
 * @return string The modified string.
 */
function modifyString(string $string): string {
    return strtolower(str_replace(' ', '', $string));
}

/**
 * Checks if a number is even or odd.
 *
 * @param int $number The number to check.
 * @return string A message indicating if the number is even or odd.
 */
function checkEvenOrOdd(int $number): string {
    return ($number % 2 == 0) ? "even" : "odd";
}

// Define shopping cart items
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

// Calculate total price
$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice . "\n";

// Perform string manipulation
$inputString = "This is a poorly written program with little structure and readability.";
$modifiedString = modifyString($inputString);
echo "Modified string: " . $modifiedString . "\n";

// Check if a number is even or odd
$numberToCheck = 42;
$result = checkEvenOrOdd($numberToCheck);
echo "The number " . $numberToCheck . " is " . $result . ".";
?>

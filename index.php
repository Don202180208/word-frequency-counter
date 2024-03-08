<?php

// Retrieve input text
$text = $_POST['text'];

// Tokenization
$words = str_word_count($text, 1);

// Word Frequency Calculation
$wordFrequencies = array_count_values($words);

// Filter Stop Words
// Implement a function to filter out common stop words

// Sorting Options
$sortOrder = $_POST['sort'];
if ($sortOrder == 'asc') {
    asort($wordFrequencies);
} else {
    arsort($wordFrequencies);
}

// Display Limit
$limit = $_POST['limit'];
$wordFrequencies = array_slice($wordFrequencies, 0, $limit);

// Output
echo "<h2>Word Frequency Results:</h2>";
echo "<table>";
echo "<tr><th>Word</th><th>Frequency</th></tr>";
foreach ($wordFrequencies as $word => $frequency) {
    echo "<tr><td>$word</td><td>$frequency</td></tr>";
}
echo "</table>";

?>

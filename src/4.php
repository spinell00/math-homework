<?php

// Get a random number between 1 and 10
$randomNumber = rand(1, 10);

// Ask the user to guess the number
echo "Guess the number! (between 1 and 10)";
$userInput = readline();

// Check if the user's input is correct
if ($userInput == $randomNumber) {
    echo "You got it right! The number was $randomNumber.";
} else {
    echo "Sorry, that's not the correct answer. The number was $randomNumber.";
}

?>
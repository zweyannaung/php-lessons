<?php

/*
$x = 5;
function myfun() : int {
    global $x;
    $x = 10; // This will change the global variable $x
    return $x * 2; // Returns 20
    
}
echo myfun(); // Outputs: 20
echo $x; // Outputs: 10, because $x was changed in the function

**/
/*
function myfun() {
    static $x = 5; // This is a local variable, not the global one
    return $x *= 2; // Increment $x by 1 each time the function is called
    // return $x; // Returns the current value of $x
    // return $x * 2; // Returns 10
}
echo myfun();
echo myfun();
echo myfun(); // Outputs: 10
**/
/*
echo strlen("Hello, World!"); // Outputs: 13
echo str_word_count("Hello, World!"); // Outputs: 2
echo strrev("Hello, World!"); // Outputs: !dlroW ,olleH
echo strpos("Hello, World!", "World"); // Outputs: 7
echo str_replace("World", "PHP", "Hello, World!"); // Outputs: Hello, PHP!
echo strtoupper("Hello, World!"); // Outputs: HELLO, WORLD!
echo strtolower("Hello, World!"); // Outputs: hello, world!
echo ucfirst("hello, world!"); // Outputs: Hello, world!
echo ucwords("hello, world!"); // Outputs: Hello, World!
echo trim("   Hello, World!   "); // Outputs: Hello, World!
echo str_repeat("Hello! ", 3); // Outputs: Hello! Hello! Hello!
echo str_pad("Hello", 10, "!"); // Outputs: Hello!!!!!
echo str_pad("Hello", 10, "!", STR_PAD_BOTH); // Outputs: !!Hello!!!
echo str_pad("Hello", 10, " ", STR_PAD_LEFT); // Outputs:      Hello
echo str_pad("Hello", 10, " ", STR_PAD_RIGHT); // Outputs: Hello
echo str_split("Hello, World!", 5); // Outputs: Array ( [0] => Hello [1] => , Wor [2] => ld! )
echo implode(", ", str_split("Hello, World!", 5)); // Outputs: Hello, , Wor, ld!
echo substr("Hello, World!", 7, 5); // Outputs: World
echo substr_replace("Hello, World!", "PHP", 7, 5); // Outputs: Hello, PHP!
echo str_shuffle("Hello, World!"); // Outputs: Randomly shuffled string
echo str_rot13("Hello, World!"); // Outputs: Uryyb, Jbeyq!
echo str_repeat("Hello, World!\n", 3); // Outputs: Hello, World! (repeated 3 times)
echo str_pad("Hello, World!", 20, "*", STR_PAD_BOTH); // Outputs: *****Hello, World!*****
**/
/*
$myArrOne = array("apple", "banana", "cherry");
// print_r($myArrOne); // Outputs: Array ( [0] => apple [1] => banana [2] => cherry )
// echo $myArrOne[0]; // Outputs: apple

$myArrTwo = array(["fruit" => "apple", "price" => 1.2, "rating" => 4],
                  ["fruit" => "banana", "price" => 0.8, "rating" => 5],
                  ["fruit" => "cherry", "price" => 2.5, "rating" => 3]);
// print_r($myArrTwo); // Outputs: Array ( [0] => Array ( [fruit] => apple [price] => 1.2 [rating] => 4 ) [1] => Array ( [fruit] => banana [price] => 0.8 [rating] => 5 ) [2] => Array ( [fruit] => cherry [price] => 2.5 [rating] => 3 ) )
// echo $myArrTwo[0]["fruit"]; // Outputs: apple

// array_push($myArrOne, "date"); // Adds "date" to the end of $myArrOne
// print_r($myArrOne); // Outputs: Array ( [0] => apple [1] => banana [2] => cherry [3] => date )
// array_unshift($myArrOne, "Happy"); // Adds "date" to the beginning of $myArrOne
// print_r($myArrOne); // Outputs: Array ( [0] => Happy [1] => apple [2] => banana [3] => cherry )
list($a, $b, $c) = $myArrOne; // Assigns the first three elements of $myArrOne to $a, $b, and $c
// echo "First element: $a\n"; // Outputs: First element: apple
// echo "Second element: $b\n"; // Outputs: Second element: banana
echo array_search("cherry", $myArrOne); // Searches for "banana" in $myArrOne and returns its index
**/


echo "\n";
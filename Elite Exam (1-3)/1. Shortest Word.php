<?php
    // $Input = readline("enter a sentence: ");
    $Input = "the quick brown fox jumps over the lazy dog";
    
    // splitting the sentence with an empty space
    $words = explode(" ", $Input);

    // using an array in case there are multiple words with the shortest length
    $shortestWords = [];

    // PHP_INT_MAX is used for the first comparison
    $lengthChecker = PHP_INT_MAX;

    echo "you sentence is \"" . $Input . "\"\n";
    foreach ($words as $word) {
        $currentWordLen = strlen($word);
        if ($currentWordLen < $lengthChecker) {
            /*
             * storing the word and its length as associative 
             * where the word is the key and the length is the value
             */ 
            $shortestWords = [$word => strlen($word)];
            $lengthChecker = $currentWordLen;
        } else if ($currentWordLen == $lengthChecker) {
            $shortestWords[$word] = strlen($word);
        }
    }
    echo "the shortest word/s and its length in your sentence: ";
    $i = 0;
    foreach ($shortestWords as $shortestWord => $length) {
        if ($i != count($shortestWords) - 1) {
            echo $shortestWord . " = " . $length . ", ";
            $i++;
        } else {
            echo $shortestWord . " = " . $length . ".";
        }
    }
?>

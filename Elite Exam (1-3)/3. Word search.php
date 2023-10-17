<?php
    // using usort and a custom function to avoid complex loops
    function customSort($a, $b) {
        /*
        * using a/A, b/B for indicating the strings that are being
        * compared.
        *
        * we will sort the strings by the following: length,
        * number of uppercase letters, and natural order.
        */
        
        // sort by length
        $lengthComparison = strlen($a) - strlen($b);
        if ($lengthComparison !== 0) {
            return $lengthComparison;
        }
        // sort by number of uppercase letters using preg_match_all function
        $uppercaseA = preg_match_all('/[A-Z]/', $a, $matchesA);
        $uppercaseB = preg_match_all('/[A-Z]/', $b, $matchesB);

        $uppercaseComparison = $uppercaseB - $uppercaseA;
        if ($uppercaseComparison !== 0) {
            return $uppercaseComparison;
        }
        
        // sort by natural order using strnatcmp
        $result = strnatcmp($a, $b);
        
        return $result;
    }

    // unarranged list
    $words = array("apple",
        "Banana",
        "cherry",
        "Dog",
        "elephant",
        "AntTT",
        "baNAna",
        "CAt",
        "dOg",
        "ElEPHAnt",
        "anT",
        "baNAna",
        "baNAna",
    );

    // usort will call the customSort function multiple times until the list is sorted.
    usort($words, 'customSort');

    // echo implode(", ", $words);
    $searchTerm = "baNAna";
    // Search for the term in the list
    $foundIndexes = array_keys($words, $searchTerm);

    // Display the result
    if (count($foundIndexes) > 0) {
        echo "your list of words are " . implode(", " ,$words) . "\n";
        echo "Indexes where '$searchTerm' is found: " . implode(", ", $foundIndexes) . "\n";
    } else {
        echo "'$searchTerm' not found in the list.\n";
    }

?>
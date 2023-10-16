<?php
    $matrix = array(
        array(1, 1, 1, 1),
        array(0, 1, 1, 0),
        array(0, 1, 0, 1),
        array(1, 1, 0, 0)
    );

    // getting number of rows
    $rows = count($matrix);

    // declaring number of columns for simplicity
    $maxCols = 0;

    /**
    * looping to count the number of columns in case
    * of an irregular matrix
    */ 
    foreach ($matrix as $row) {
        $currentRowColCount = count($row);
        $maxCols = max($maxCols, $currentRowColCount);
    }

    // loop to print output
    for($i=0; $i < $rows; $i++){
        for($j=0; $j < $maxCols; $j++){
            // Check if the current cell contains a value
            if (isset($matrix[$i][$j])) {
                if($matrix[$i][$j] == 1){
                    echo "X ";
                } else {
                    echo "~ ";
                }
            } else {
                // If the cell doesn't have a value, print an empty space.
                echo "  ";
            }
        }
        echo "\n";
    }
?>
<?php
function divideNumbers($a, $b) {
    if ($b == 0) {
        throw new InvalidArgumentException("Division by zero is not allowed");
    }
    return $a / $b;
}

try {
    $result = divideNumbers(10, 0);
    echo "Result: $result";
} catch (InvalidArgumentException $e) {
    echo "Caught exception: " . $e->getMessage();
}
?>

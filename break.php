<?php

foreach (range(1, 10) as $k) {
  for ($i = 0; $i < 8; $i++) {
    echo $k . ': ' . $i . "\n";
    if ($i == 3) {
      //break; // or break(1) - break this for loop
      break(2); // breaks foreach
      //continue; // or continue(1) - stops loop and goes to another iteration
      //continue(2); // goes to the next foreach iteration
      // continue(3); - Fatal error: Cannot break/continue 3 levels
      //break(3); // - Fatal error: Cannot break/continue 3
    }
    echo 'After if'."\n";
  }
  echo 'After for' . "\n";
}

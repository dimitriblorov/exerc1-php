<?php

$line = 0;
while($line <= 15) {
    for($row=1;$row<=$line;$row++) {
        echo '-';
    }
    echo '<br/>';
    $line++;
}
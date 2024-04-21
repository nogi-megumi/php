<?php
$count = 0;
while ($count <= 100) {
    if ($count % 3 == 0) {
        ++$count;
        continue;
    }
    if ($count == 20) {
        break;
    }
    echo $count . "<br/>";
    ++$count;
}
//3の倍数をスキップcontinueして、19まで出力break
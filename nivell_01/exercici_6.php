<?php
function mossega() {
    return (bool) mt_rand(0, 1);
}

function mossega2() {
    return (bool) rand(0, 1);
}



if (mossega()) {
    echo "Mossega";
} else {
    echo "No mossega";
}

if (mossega2()) {
    echo "Mossega amb rand";
} else {
    echo "No mossega amb rand";
}



?>
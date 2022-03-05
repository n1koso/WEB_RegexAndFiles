<?php

echo preg_replace_callback('#(\d+)#', 'cube', 'a1b2c3');
function cube($matches) {
    $NewCube = pow($matches[0], 3);
    return $NewCube;
}
<?php

//SHADOW ENV FUNCTION
function shadowENVO($IS_IT) {
    if ($IS_IT == true) { return '_____/'; }
}

$sha_env = shadowENVO(true);
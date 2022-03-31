<?php

function redirect($url, $permanent = false) {
    if(headers_sent()=== false) {
        header("location: $url", true, ($permanent === true ? 301 : 302));
    }
    exit();
}
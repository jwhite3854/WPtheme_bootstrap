<?php

function jwhite_before_header() {
    $before_header = '';
    $before_header = apply_filters( 'jwhite_before_header', $before_header );
    echo $before_header;
}


function jwhite_after_header() {
    $after_header = '';
    $after_header = apply_filters( 'jwhite_after_header', $after_header );
    echo $after_header;
}

function jwhite_before_footer() {
    $before_footer = '';
    $before_footer = apply_filters( 'jwhite_before_footer', $before_footer );
    echo $before_footer;
}

function jwhite_after_footer() {
    $after_footer = '';
    $after_footer = apply_filters( 'jwhite_after_footer', $after_footer );
    echo $after_footer;
}

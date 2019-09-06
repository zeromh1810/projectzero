<?php

function trabajos_array_generator() {
    global $post;
    $images = [];

    for($i = 1; $i < 5; $i++) {

        $image = get_field("imagen0{$i}");
        if ($image) {
            array_push($images, $image);
        }
    }

    return $images;
}
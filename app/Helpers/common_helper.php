<?php

function assets($asset_path = null) {
    echo base_url('assets/' . $asset_path);
}

if(!function_exists('dd')) {
    function dd($variable){
        echo "<pre>";
        print_r($variable);
        echo "</pre>";
        die();
    }
}

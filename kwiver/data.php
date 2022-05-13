<?php
    $products = array();
    $ref_link = (!$internas) ? "products/" : "../products/";
    $product = array(
        "title" => "Kw Leash",
        "link" => $ref_link."leash.php",
        "image" => "images/kwiver/leash/leash1-vm.png",
        "ratting" => 5
    );
    array_push($products,$product);
    $product = array(
        "title" => "Kw Gear",
        "link" => $ref_link."gear.php",
        "image" => "images/kwiver/gear_p.png",
        "ratting" => 4
    );
    // array_push($products,$product);
    $product = array(
        "title" => "Kw Downwind Bag",
        "link" => $ref_link."downwind.php",
        "image" => "images/kwiver/downwind_p.png",
        "ratting" => 3
    );
    // array_push($products,$product);
?>
<?php
    $buildings = array();

    for($i=0;$i<50;$i++):
        $spots = array();
        for($j=0;$j<100;$j++):
            $spot = array(
                "spotId" => $j,
                "spotName" => "Spot ".$j,
                "spotUsers" => array(
                    "Fulano do Spot ".$j,
                    "Beltrano do Spot ".$j,
                    "Ciclano do Spot ".$j,
                )
            );
            array_push($spots,$spot);
        endfor;
        $building = array(
            "buildingId" => $i,
            "buildingName" => "Building ".$i,
            "buildingSpots" => $spots
        );
        array_push($buildings,$building);
    endfor;

    echo json_encode($buildings);
?>
<?php

class Calc {

   
    function distance($lat1, $lon1, $lat2, $lon2) {
        if ($lat1 == $lat2 && $lon1 == $lon2) return 0;
        $theta = $lon1 - $lon2;
        $r_l1 = deg2rad($lat1);
        $r_l2 = deg2rad($lat2);
        $dist = sin($r_l1) * sin($r_l2) +  cos($r_l1) * cos($r_l2) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 69.09;
        return $miles;
    }
}
    ?>
<!-- @Jufento Semri Lake -->
     <?php
     function rad($x)
     {
          return $x * M_PI / 180;
     }
     function getDistancePoint($coord_a, $coord_b)
     {

          $R = 6371;
          $coord_a = explode(",", $coord_a);
          $coord_b = explode(",", $coord_b);
          $dLat = rad(($coord_b[0]) - ($coord_a[0]));
          $dLong = rad($coord_b[1] - $coord_a[1]);
          $a = sin($dLat / 2) * sin($dLat / 2) + cos(rad($coord_a[0])) * cos(rad($coord_b[0])) * sin($dLong / 2) * sin($dLong / 2);
          $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
          $d = $R * $c;
          # hasil akhir dalam satuan kilometer
          return $d;
          //return number_format($d, 0, '.', ',');
     }
     $a = "-6.9953521,110.4514378";
     $b = "-6.9952105,110.4542764";
     print getDistancePoint($a, $b) . " Kilometers";

     ?>
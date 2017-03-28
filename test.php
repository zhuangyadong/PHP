<?php
header("content-type:text/html;charset=utf-8");

  $categories = array(array(
                          array('CAR_TIR','TIRES',100),
                          array('car_oil','oil',10),
                          array('car_apk','spark plugs',4)
                            ),
                      array(
                          array('van_tir','tires',120),
                          array('van_oil','oil',12),
                          array('van_spk','spark plugs',5)
                      ),
                      array(
                          array('trk_tir','tires',150),
                          array('trk_oll','oil',15),
                          array('trk_apk','spark plugs',6)
                      )
                  );
//  echo "<pre>";
//  print_r($categories);
//  echo "<pre>";

for ($layer = 0;$layer < 3;$layer++){
    echo "Layer $layer<br>";
    for ($row = 0;$row < 3;$row++){
        for ($column = 0;$column < 3;$column++){
            echo '|'.$categories[$layer][$row][$column];
        }
        echo '\<br/>';
    }
}
?>
<?php
  $mymarks["CO566"] = 56;
  $mymarks["CO567"] = 44;
  $mymarks["CO568"] = 93;
  $mymarks["CO569"] = 63;
  $mymarks["CO570"] = 71;
  $mymarks["CO571"] = 58;
  
  foreach($mymarks as $index => $value)
  {
    echo "for  $index  my grade was  $value <br/>";
  }
  
  $total = array_sum($mymarks);
  $average = $total / count($mymarks);
  echo "For these modules my average was $average";
?>
<?php
 $namesal=array(1,2,3,4,5,6,7,10,9,8,12,11);
 $total=count($namesal);
 sort($namesal);
 for($i=0;$i<$total;$i++)
 echo "$namesal[$i] ";
 rsort($namesal);
 for($i=0;$i<$total;$i++)
 echo "$namesal[$i] ";
?>
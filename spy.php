





<?php if(!$fp = fopen("http://www.zappos.com/nike-free-run-black-victory-green-anthracite-white?zlfid=111" ,"r" )) { return false; }  $content = ""; while(!feof($fp)) {  $content .= fgets($fp, 1024); } fclose($fp); //we are done here, don't need the main source anymore 

preg_match_all("/([$][0-9]*[,]*[.][0-9]{2})/", $content, $prices, PREG_SET_ORDER);
    echo $prices[0][0]."";
?>
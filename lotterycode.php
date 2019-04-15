<?php
  public function lottery (){
    $orjinalhash = file_get_contents("https://blockchain.info/q/latesthash");
    $hash  = substr(trim($orjinalhash),16,48);
    $split = str_split( $hash,4 );
    $uniq = array();
      for($i=0;$i<count( $split ); $i++){
          array_push($uniq,hexdec ( $split[$i]) % 50 );
      }
  }
?>

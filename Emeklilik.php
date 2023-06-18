<?php 

function yasHesapla($dogumYili)
{
    return date('Y')-$dogumYili;
}


function EmeklilgeKacYılKaldi($dogumYili,$isim)
{
      $yas=yasHesapla($dogumYili);
      $kalanSure=65-$yas;
          if($kalanSure>0)
          {
               return "$isim, Emekliğe Kalan Sure $kalanSure yıl kaldı";
          }
          else{
              return "$isim,zaten".($kalanSure*-1)." yıl once emekli oldunuz";
          }
}


echo EmeklilgeKacYılKaldi(1950,"Emre")."<br>";
echo EmeklilgeKacYılKaldi(2001,"Emre");






?>
<?php


function yazdir($kelime,$Adet)
{
       for($i=0;$i<=$Adet;$i++)
       {
            echo $kelime."<br>";
       }
     
}
/*
yazdir("Hello Word",5);
*/


function hesapla($kisa,$uzun)
{
        $alan=$kisa*$uzun;
        $cevre=($kisa*$uzun)*2;
        return "Alan : ".$alan ." Cevre : " . $cevre;
}
/*
$sonuc= hesapla(10,20);
echo $sonuc;
*/

function yaziTuraAt()
{
     $sayi=rand(1,100);
     if($sayi<50)
     {
         echo "Turu";
     }
     else{
         echo"Yazi";
     }
}
//yaziTuraAt();


function tamBolenleriBul($sayi)
{
       $Bolenler=array();
         for($i=2;$i<$sayi;$i++)
            {
                if($sayi%$i==0){
                array_push($Bolenler,$i);
                  }
            }
           


       return $Bolenler;
}

$BolenSayilar=tamBolenleriBul(50);

echo "<pre>";
print_r($BolenSayilar);
echo "</pre>";











?>
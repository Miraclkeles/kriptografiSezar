<?php


function Sezar()
{
    $textTemizle = "";
    if (isset($_POST['sifrelemeYapButonu'])) {
        //butona tıklandığında olacak işlemleri yazıyoruz.
        $asilMetin = $_REQUEST['orijinalMetin'];
        //request fonksiyonu ile forma giren metni çekiyorum.
        $asilMetin = strtolower($asilMetin);
        //metin harflerini küçültüyorum.
        $anahtar = $_REQUEST['anahtar'];
        //request fonksiyonu ile forma giren metni çekiyorum.
        for ($i = 0; $i < strlen($asilMetin); $i++) {
            if (preg_match('/[^A-Z]/i', $asilMetin[$i])) {
                $textTemizle = $textTemizle;
            } else {
                $asciiKarakteri = ord($asilMetin[$i]);
                $asciiKarakteri = $asciiKarakteri - 97;
                //97 olmasının sebebi ascii 97'nin a dan başlamasıdır.
                $asciiKarakteri += $anahtar;
                if ($asciiKarakteri > 25) {
                    $asciiKarakteri = $asciiKarakteri - 26;
                } else if ($anahtar < 0) {
                    $anahtar += 26;
                } else if ($anahtar > 26) {
                    $anahtar % 26 == $anahtar;
                    //eğer 26 dan büyük bir sayı girildiğinde modunu alıp devam etmeliyiz aksi halde taşar.
                }

                $textTemizle = $textTemizle . chr($asciiKarakteri + 97);
            }
        }
        echo $textTemizle;
    }
}
function SezarCoz()
{
    if (isset($_POST['sifrelemeyiCozButonu'])) {
        $metniSifrele = $_REQUEST['sifreCoz'];
        $metniSifrele = strtolower($metniSifrele);
        $anahtar = $_REQUEST['anahtar'];
        $duzMetin = "";
        for ($i = 0; $i < strlen($metniSifrele); $i++) {
            $asciiKarakteri = ord($metniSifrele[$i]);
            $asciiKarakteri = $asciiKarakteri - 97;
            $asciiKarakteri -= $anahtar;
            if ($asciiKarakteri < 0) {
                $asciiKarakteri = $asciiKarakteri + 26;
            }

            $duzMetin = $duzMetin . chr($asciiKarakteri + 97);
        }
        echo $duzMetin;
    }
}

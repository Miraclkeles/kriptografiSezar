    <?php
    $enCokKullanilanDortYuzKelime = "bir,ve,olmak,bu,için,o,ben,demek,çok,yapmak,ne,gibi,daha,almak,var,kendi,gelmek,ile,vermek,ama,sonra,kadar,yer,en,insan,değil,her,istemek,yıl,çıkmak,görmek,gün,biz,gitmek,iş,şey,ara,ki,bilmek,el,zaman,ya,çocuk,iki,bakmak,çalışmak,içinde,büyük,yok,başlamak,yol,kalmak,neden,siz,konu,yapılmak,iyi,kadın,ev,ise,diye,bulunmak,söylemek,göz,gerekmek,dünya,baş,durum,yan,geçmek,sen,onlar,yeni,önce,başka,hâl,orta,su,girmek,ülke,yemek,hiç,bile,nasıl,bütün,karşı,bulmak,böyle,yaşamak,düşünmek,aynı,iç,ancak,kişi,bunlar,veya,ilk,göre,ön,son,biri,şekil,önemli,yüz,hem,göstermek,etmek,alt,getirmek,kullanmak,çünkü,taraf,şimdi,adam,onun,diğer,artık,üzerinde,ses,hep,doğru,durmak,kız,tüm,çekmek,konuşmak,para,anlamak,anne,az,bazı,baba,hayat,sadece,küçük,fazla,bilgi,an,sormak,bunun,öyle,yine,sağlamak,sonuç,kullanılmak,dış,ad,yani,süre,dönmek,açmak,oturmak,anlatmak,bırakmak,hemen,saat,yaş,sorun,devlet,sahip,sıra,yazmak,yüzde,ay,atmak,tutmak,bunu,olay,düşmek,duymak,söz,güzel,sevmek,biraz,zor,çıkarmak,şu,koymak,tek,sistem,birlikte,verilmek,kim,alınmak,genç,kapı,kitap,üzerine,burada,gece,alan,birbiri,işte,beklemek,uzun,hiçbir,bugün,dönem,arkadaş,ürün,aile,üç,okumak,erkek,herkes,güç,belki,gerçek,tam,ilgili,ilişki,çevre,eski,aramak,yaşam,halk,yakın,sokak,bey,tarih,özellik,bölüm,özel,akıl,kimse,pek,eğer,gerek,özellikle,anlam,yüksek,banka,kez,ayak,taşımak,geri,toplum,araç,madde,tür,karar,görülmek,hava,sayı,farklı,grup,oda,biçim,oluşmak,haber,Allah,ayrıca,gelen,birkaç,soru,arka,kazanmak,yazı,okul,açık,öğrenmek,sürmek,dil,şirket,kaynak,bitmek,program,devam etmek,hareket,renk,açılmak,hak,inanmak,çalışma,açı,parça,gazete,oluşturmak,tabi,değer,tanımak,yapı,doktor,gelir,görev,amaç,bölge,film,üzere,müşteri,zaten,telefon,eğitim,deniz,ikinci,kalkmak,hatta,etki,gelişmek,geçen,vücut,düşünce,milyon,oynamak,değişmek,temel,yaratmak,ulaşmak,sanmak,geçirmek,kültür,kurmak,fakat,buna,resim,ışık,içmek,hanım,hizmet,ihtiyaç,nokta,yön,evet,oyun,artmak,yeniden,işlem,kısa,kolay,hangi,oran,aslında,kabul etmek,orada,dikkat,uzak,bilgisayar,gelecek,görünmek,örneğin,oğul,dinlemek,uygun,lira,üretim,dakika,unutmak,yürümek,böylece,kötü,araba,ağız,duygu,uygulamak,hâlâ,örnek,birçok,izlemek,derece,mümkün,şöyle,duvar,on,sanat,ana,hastalık,öğrenci,televizyon,yöntem,masa,ölmek,takım,üst,kafa,müzik,ayrılmak,enerji,üniversite,spor,türlü,can,rağmen,kısım,ölüm,sürekli,sağlık,çeşitli,bundan,hissetmek,oysa,sabah,internet,teknik,dışarı,merkez,ortam,yerine,düzey,köy,yönetim";
    $tdk = explode(",", $enCokKullanilanDortYuzKelime);
    $alfabe = ['a', 'b', 'c', 'ç', 'd', 'e', 'f', 'g', 'ğ', 'h', 'ı', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'ö', 'p', 'r', 's', 'ş', 't', 'u', 'ü', 'v', 'y', 'z'];
    $text = 'bu bir deneme metnidir';
    strtolower($text);
    //Girilen texti küçük harflere çeviriyoruz.
    $metin = explode(" ", $text);
    //girilen metnin her virgülden sonraki kısmı bir dizi içerisine atıyoruz.
    $benzer = array_intersect($metin, $tdk);
    // array koutu ile benzerlikleri görmekteyiz.
    $puan  = count($benzer);
    // uzunluğu alıp puan veriyoruz.
    $key = 0;
    if ($puan > 0) {
        echo "<b>Eşleşen Kelime Sayısı: </b>" . $puan  . "<br>";
    } else if ($puan <= 0) {
        //burada hiç bir benzerlik olmadığı vakit str_split ile kelimeleri parçalayacaktır.
        $parcala = str_split($text);
    } else {
        echo "Hatalı Giriş";
    }

        // *************************************************************************************************
        // turkceKelimeler.php sayfasında görüldüğü üzere her tabdan(4 boşluktan) sonrasını 
        //bir dizi içerisine attım
        // ama bunu dizide aratmak sorun çıkardı veri tipinde hiç bir sorun yoktu ama eşitlikte 
        //sorun çıktı
        // 10-15 gün sadece bu sorunu halletmeye ve görsel olarak iyileştirmeye çalıştım.
        // olmayınca en çok kullanılan 400 kelimeyi veri olarak çektim.


        //***************************************************************************************************/*/
        // Yaptığım denemeler //
        //*******************************************************************************************************/
        /*print_r($turkceKelimeler);
    $benzerler = array_intersect($alfabe, $turkceKelimeler);
    print_r($benzerler);*/
        /*for ($i = 0; $i < count($asilMetin); $i++) {
        for ($j = 0; $j < count($turkceKelimeler); $j++) {
            if ($asilMetin[$i] ===   $turkceKelimeler[$j]) {
                echo "Benzer Kelime sayısı";
            } else {
                echo "Benzer Kelime yok";
            }
        }
    }*/

        //$kelimeleriGetir = file_get_contents ("turkceKelimeler.txt");
        /*$file = @file("turkceKelimeler.txt");
    $alfabeFile = @file("alfabe.txt");
    $metin = @file("metin.txt");
    for ($i = 0; $i < count($file); $i++) {
        //metni küçük harflere çevirdik.

    //echo "<pre/>";
    //print_r($tdk);
    $diziUzunluk =  count($tdk);
    $metinUzunluk =  count($metin);
    $benzer = array_intersect($tdk, $metin);
    //array_intersect kavramı ile her iki dizideki benzerlikleri görebiliyoruz.
    $puan = count($benzer);
    echo "Girdiğiniz her iki metindeki eşleşen kelime sayısı: " . $puan . "<br>"; //indisler 0'dan başladığı için 1 ekledik
    //eşleşen kelime yoksa

    //metni kelimelere böl 

    //print_r($metin);
    //harflere böl
    if ($puan < 1) {
    }
    $ilk = str_split(strval($metin[0]));
    $ikinciKelime = str_split(strval($metin[1]));
    print_r($ilk);
    print_r($ikinciKelime);*/;

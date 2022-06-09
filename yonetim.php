<?php
ob_start(); session_start();
include("ayarlar.php");
$admingirdi=$_SESSION['admin'];

if(empty($admingirdi)){
header("Location:login.php");
die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title;?></title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css"> 
    <link rel="stylesheet" href="css/templatemo-ocean-vibes.css"> 
<!--
    
TemplateMo 554 Ocean Vibes

https://templatemo.com/tm-554-ocean-vibes

-->
</head>
<body>
    <header class="tm-site-header">
        <h1 class="tm-mt-0 tm-mb-15"><span class="tm-color-primary"><?php echo $site_logo;?></span> <span class="tm-color-gray-2"><?php echo $site_slogan;?></span></h1>
        <em class="tm-tagline tm-color-light-gray">simple and effective design</em>
    </header>

    <!-- Video banner 400 px height -->
    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <source src="video/ocean-sea-wave-video.mp4" type="video/mp4">
        </video>  
        <i id="tm-video-control-button" class="fas fa-pause"></i>
    </div>


    <!--GÜNCEL KONULAR-->
    <h1 class="clear">Güncel Konular</h1>
    <ul class="sidemenu">
    <?php
    $sql="SELECT * FROM articles ORDER BY id desc LIMIT 0,5";
    $query=mysqli_query($connection, $sql);
    while($read=mysqli_fetch_assoc($query)){
    $id  = $read['id'];
    $title  = $read['title'];
    echo "<li><a href='index.php?id=$id'>$title</a></li>";
    }
    ?>
    </ul>


    <!--POPÜLER KONULAR-->
    <h1 class="clear">Popüler Konular</h1>
    <ul class="sidemenu">
    <?php
    $sql="SELECT * FROM articles ORDER BY hit desc LIMIT 0,5";
    $query=mysqli_query($connection, $sql);
    while($read=mysqli_fetch_assoc($query)){
    $id  = $read['id'];
    $title  = $read['title'];
    echo "<li><a href='index.php?id=$id'>$title</a></li>";
    }
    ?>
    </ul>


    <div class="tm-container">
        <nav class="tm-main-nav">
            <ul id="inline-popups">
                <li class="tm-nav-item">
                    <a href="#intro" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Introduction
                        <i class="fas fa-3x fa-water"></i>
                    </a>                
                </li>
                <li class="tm-nav-item">
                    <a href="#gallery" data-effect="mfp-move-from-top" class="tm-nav-link" id="tm-gallery-link">
                        Gallery
                        <i class="far fa-3x fa-images"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#testimonials" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Testimonials
                        <i class="far fa-3x fa-smile"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#about" data-effect="mfp-move-from-top" class="tm-nav-link">
                        About
                        <i class="fas fa-3x fa-tint"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#contact" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Contact
                        <i class="far fa-3x fa-comments"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Popup itself -->
        <div id="intro" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                return home
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-row tm-intro-row">
                <img src="img/intro.jpg" alt="Image" class="tm-intro-img">
                <div class="tm-col tm-bg-white tm-intro-pad">
                    <h2 class="tm-color-primary tm-page-title">Günün Sözü</h2>
                    <div class="tm-row tm-content-row">
                        <div class="tm-col-6 tm-intro-col-l">
                            <p>
                            <script language="JavaScript1.1" type="text/javascript">
<!--
quotes = new Array(11);
quotes[0] = "Eline, diline, beline sahip ol ki, kötülükler senden uzak dursun.";
quotes[1] = "Musibet zekayı eğitir.";
quotes[2] = "Kişinin sözü, amelinden çok olursa aklı noksandır.";
quotes[3] = "Ne kadar okursan oku, bilgine yakışır şekilde davranmazsan cahilsin demektir.(Sadi)";
quotes[4] = "Tek dostum kitaplarım, tek düşmanım cahil dostlarım. (Diderot)";
quotes[5] = "Felaketler, ayak seslerini duymayanlara geliyorum demez.";
quotes[6] = "Harekette birlik olmazsa, fikirde bilgi faydasızdır. (Muhammed ikbal)";
quotes[7] = "Zalime, ancak, onu zulümden alıkoymak için yardım et.";
quotes[8] = "Yarın, yorgun kimselerin değil, rahatlarına kıyabilenlerindir. (N. Atac)";
quotes[9] = "Kuvvetine güvenenler, korkutma küçüklüğünde bulunmazlar. (Abdulhamid Han)";
quotes[10] = "Tarihte her hareket hep bir kişinin ayağa kalkmasıyla başlar.";
quotes[11] = "Kesilmis koyuna, derisini yüzülmesi elem vermez."; 
quotes[12] = "Kendini hak ile meşgul etmezsen, batıl seni işgal eder. (İmam Şafi)";
quotes[13] = "Herşeyi bilmek çok kötüdür.";
quotes[14] = "Allah'a itaat etmekle, O'na şükretmiş olursunuz.";
quotes[15] = "Akıllı olan Allah'tan korkar.";
quotes[16] = "İlimsiz ibadette, tefekkürsüz Kur'an tilavetinde hayır yoktur. (Hz. Ali r.a.)";
quotes[17] = "Allah'tan korkmayandan korkulur.";
quotes[18] = "El ağazına bakan karısını tez boşar.";
quotes[19] = "Gercek dost, arkadaşının kusurunu görünce onu uyarır. Fakat bu kusurları başkalarına açıklamaz. (İmam Şafi)";
quotes[20] = "Şahsi gayret yuvayi, toplu gayret vatani ayakta tutar. (A. Aslan)";
quotes[21] = "Küçük insanların gururu büyük olur.";
quotes[22] = "Kitap aklın ilacıdır.";
quotes[23] = "Dost acı söyler.";
quotes[24] = "Kardeş kardeşi atmış, yar başında tutmuş.";
quotes[25] = "Islanmışın yağmurdan korkusu olmaz.";
quotes[26] = "Dost ağlatır, düşman güldürür.";
quotes[27] = "Ecel geldi cıhane, başağrısı bahane.";
quotes[28] = "İslamiyeti yaşayan kimse, hem şahsi, hem ailevi ve hem de sosyal hayatında ibadet ediyor demektir. (Hekimoğlu İsmail)";
quotes[29] = "Gençliğine güvenme, ölen hep ihtiyarmı ?";
quotes[30] = "İnsan ne kadar yükselirse, gönlü o kadar alçalmalıdır.";
quotes[31] = "Tecrübe bilgiyi artırır. Her şeye inanmak ise insanı yanıltır.";
quotes[32] = "Küçük taş, baş yarar.";
quotes[33] = "Haramdan uzak dur, ama mahremini gözet.";
quotes[34] = "Nimetlerin en iyisi çalışarak kazanılan, arkadaşları en iyisi de Allah'ı hatırlatandır.";
quotes[35] = "Bir kimseyi tanımak istiyorsan, arkadaşına bak. (Mevlana)";
quotes[36] = "El öpmekle dudak aşınmaz.";
quotes[37] = "Ahmaklık, hatada israr etmektedir. (Abdulhakim Arvası)";
quotes[38] = "Nasihat tutmayanı musibet tutar.";
quotes[39] = "Herkesi kendi gibi sanan aldanır.";
quotes[40] = "Yerinde söz söylemesini bilen, özür dilemek zorunda kalmaz. (Fatih Sultan Mehmed)";
quotes[41] = "Özü doğru olanın sözü de doğru olur. (Hz. Ali (r.a.))";
quotes[42] = "Küçük bir delik, büyük bir gemiyi batırır.";
quotes[43] = "(Siz'de güzel bir söz biliyorsanız bana yazın)";
quotes[44] = "Doğru sarsılır, ama yıkılmaz.";
quotes[45] = "Adaletin bulunmadığı bir ülkede herkez suçludur.";
quotes[46] = "Zeka, kafanın içindeki altın madenidir.";
quotes[47] = "İteatsizlik şerlerin en kötüsüdür.";
quotes[48] = "İnsan idare etme sanatına siyaset denir.";
quotes[49] = "Kimsenin zenginliği seni değerlendirmez.";
quotes[50] = "Fakir kişi, cimrilik yapan kişidir.";
quotes[51] = "Zengin kişi iktisadı bilen kişidir.";
quotes[52] = "Zengin, kalbi zengin olan kişidir.";
quotes[53] = "Çok dinlememiz ve az konuşmamız için, iki kulağımız ve bir dilimiz vardır.";
quotes[54] = "Mümin, sonu cennet oluncaya kadar, hiçbir hayırdan doymaz, geri kalmaz.";
quotes[55] = "Dağa çıkan düz aramaz.";
quotes[56] = "Adamın aynası arkadaşıdır.";
quotes[57] = "Zihin arı, kitap çiçektir.";
quotes[58] = "Danışan dağı aşmış, danışmayan düz yolda şaşmış.";
quotes[59] = "Korkak dostun olacağına, cesur dostun olsun.";
quotes[60] = "Dostlarını terkeden terkedilir.";
quotes[61] = "Özlü konuşmanın yolu, yersiz sözleri bırakmaktır.";
quotes[62] = "Destursuz bağa giren, hesapsız dayak yer.";
quotes[63] = "İnsan, düşeceği yere çıkmamalıdır.";
quotes[64] = "Kitap, donuk hayata renk katar.";
quotes[65] = "İyiliğe iyilik her kişinin karı, kötülüğe iyilik ER kişinin karı.";
quotes[66] = "Gözü haramdan korumak ne güzel şehvet perdesidir. (Hz. Osman)";
quotes[67] = "Dilencinin keyfi işlek caddede gelir.";
quotes[68] = "Yanliş, iktidarı artmakla hiçbir zaman doğru hale gelmez.";
quotes[69] = "İnsanlara ateşe dost olduğun gibi dost ol. Ondan faydalan. Fakat seni yakmasından sakın.";
quotes[70] = "Kovandan çikmayan arı bal yapmaz.";
quotes[71] = "Dünyada zulme uğrayanlar, kiyamette mutlaka kurtuluşa ulaşacaklardır. (Hz.Muhammed sav.)";
quotes[72] = "Ancak içinden aydınlanan, dışına ışık verir. (İsmet Özel)";
quotes[73] = "Adam adama yük değil, can gövdeye mülk değil.";
quotes[74] = "Bize değer kazandıran şeyler, yaptığımız işlerdir.";
quotes[75] = "Bir münafık, bir orduyu bozar.";
quotes[76] = "Acıyan çok ama ekmek veren az.";
quotes[77] = "İnsanların şahsiyetlerini, iktidarlı zamanlarında ölçmelidir.";
quotes[78] = "İnsanın sözü hikmet, bakışı ibret ve susması ders olmalıdır.";
quotes[79] = "Alimler İslamın bayraktarı, cennetin sakinleridir.";
quotes[80] = "Her deliğe elini sokma, ya yılan çıkar ya ciyan.";
quotes[81] = "Tarih tekerrürden ibarettir.";
quotes[82] = "Sözlerin en güzeli vahiydir.";
quotes[83] = "Birlik olmayan yerde, dirlik olmaz.";
quotes[84] = "Sükut kavgayı keser, fitneyi önler.";
quotes[85] = "İffet, güzelliğin zekatıdır.";
quotes[86] = "Hiç bir zafere çiçekli yollardan gidilmez.";
quotes[87] = "Fitne aslında uykudadır, Allah (cc) onu uyandıranlara lanet eder. (Hz.Muhammed sav.)";
quotes[88] = "Bedava sirke, baldan tatlıdır.";
quotes[89] = "Kalbin gıdası iman, aklın gıdası faydalı ilimdir.";
quotes[90] = "Gözyaşı, kalp te olan ateşe delildir.";
quotes[91] = "Merhamet etmeyene merhamet edilmez.";
quotes[92] = "Alışmış, kudurmuştan beterdir.";
quotes[93] = "Akıllı insan tüm yumurtalarını aynı sepete koymaz.";
quotes[94] = "Buldum bilemedim, bildim bulamadım.";
quotes[95] = "Ölümü hatırlamak, hırs ateşini söndürür.";
quotes[96] = "Ne mutlu! Aklı işine bekci, kendi sözünü kendi tenkitci olana.";
quotes[97] = "Cahil, yaşlı dahi olsa küçüktür, Alim, küçük de olsa büyüktür.";
quotes[98] = "Gençlikte vaktini geçiren sefa ile, ihtiyarlikta ömrünü geçirir cefa ile.";
quotes[99] = "Hicretin en faziletlisi, Allah'ın sevmediği şeyleri terk etmektir. (Hz.Muhammed sav)";
 
//calculate a random index
index = Math.floor(Math.random() * quotes.length);
 
//display the quotation
document.write("<hr><H3>Günün Sözü: <br> " + "\"" + quotes[index] + "\"\n <\/H3>")
document.write("Daha fazlasini okumak istiyorsaniz, asagida (Güzel Sözler)'e tiklayin. <hr>");
 
// -->
</script>
                            </p>
                        </div>
                        <div class="tm-col-6">
                            <p>
                                You are not allowed to re-distribute this
                                template as a downloadable ZIP file on
                                any template collection website.
                            </p>
                            <p>
                                Top right corner is a return home with an
                                icon that will close this pop-up page.
                            </p>
                            <p class="tm-mb-80">
                                Next Page will bring you to the gallery
                                page directly without going back to main
                                menu.
                            </p>
                            <div class="tm-text-center">
                                <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-next">
                                    Next Page
                                </a>
                            </div>                            
                        </div>
                    </div>
                </div>                
            </div> 
        </div>

        <div id="gallery" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                return home
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-row tm-gallery-row">
                <div class="tm-gallery">
                    <div class="tm-gallery-container">                        
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-01.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-01.jpg" alt="Image"/>
                            <figcaption>
                                <p>TemplateMo is the best website for free css templates.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-01.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-01.jpg" alt="Image"/>
                            <figcaption>
                                <p>TemplateMo is the best free css website templates.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-02.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-02.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-02.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-02.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-03.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-03.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-03.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-04.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-04.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-04.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-05.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-05.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-05.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-06.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-06.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-06.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-07.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-07.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-07.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-08.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>                                                
                        
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-03.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-04.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-05.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-06.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-07.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-08.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>                                                
                        
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-08.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/gallery/building-08.jpg" alt="Image"/>
                            <figcaption>
                                <p>TemplateMo is the best free website for html css templates.</p>							
                            </figcaption>			
                        </figure>                
                    </div>
                </div>
                <!-- Gallery navigation and description -->
                <div class="tm-col tm-gallery-right">
                    <h2 class="tm-color-primary tm-mt-35 tm-page-title">Gallery</h2>
                    <div class="tm-gallery-right-inner">
                        <ul class="tm-gallery-links">
                            <li>
                                <a href="#" class="active tm-gallery-link" data-filter="*">
                                    <i class="fas fa-layer-group tm-gallery-link-icon"></i>
                                    All
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="portrait">
                                    <i class="fas fa-portrait tm-gallery-link-icon"></i>
                                    Portraits
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="nature">
                                    <i class="fas fa-leaf tm-gallery-link-icon"></i>
                                    Nature
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="animal">
                                    <i class="fas fa-paw tm-gallery-link-icon"></i>
                                    Animals
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="building">
                                    <i class="far fa-building tm-gallery-link-icon"></i>
                                    Buildings
                                </a>
                            </li>
                        </ul>
                        <p>
                            Different icons are used for
                            different categories. There are 4 or more
                            pages of photos in this gallery. Each
                            thumbnail has a nice hover effect.
                        </p>
                        <p>
                            Proin lacus enim, finibus sed magna a,
                            molestie lacinia est. Maecenas id dolor
                            lorem. Donec sodales ex velit.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonials" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                return home
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-testimonials-inner">
                <h2 class="tm-color-gray tm-testimonial-col tm-page-title">Testimonials</h2>
                <div class="tm-row tm-testimonial-row">                
                    <div class="tm-col tm-testimonial-col">
                        <p>
                            OCEAN vibes is free website template from 
                            <a rel="nofollow" href="https://templatemo.com" class="tm-color-primary">TemplateMo</a>
                            website. You are allowed to use
                            it for commercial purpose. You can convert this template as a CMS theme or a custom
                            website builder template.
                        </p>
                        <em class="tm-mb-30 tm-color-light-gray">
                            You may support us by telling your friends
                            about our TemplateMo site. Feel free to 
                            contact us if you have anything to ask.
                        </em>
                        <p>
                            You can make a little contribution via
                            <a rel="nofollow" href="http://paypal.me/templatemo" target="_parent"><strong>PayPal</strong></a>
                                or saying about TemplateMo to your friends. Duis egestas lorem eu nisi
                            finibus, sit amet elementum lacus pretium.
                        </p>
                        <p>
                            In tempor felis vitae nulla feugiat aliquam.
                            Vivamus vitae congue mi. Sed maximus velit
                            vestibulum nisl condimentum hendrerit.
                        </p>
                    </div>
                    <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                        <img src="img/testimonial-01.jpg" alt="Image" class="tm-mb-30">
                        <blockquote>
                            <p>
                                "Suspendisse eu mollis diam, at ullamcorper
                                diam. Ut sit amet arcu metus. Nullam mattis
                                eros eget." by <span class="tm-color-primary">George, Chief Editor</span>
                            </p>
                        </blockquote>
                        <blockquote class="tm-mb-50">
                            <p>
                                "Quisque et lorem accumsan, sollicitudin
                                dolor vel, facilisis eros. Donec aliquet felis in
                                mollis egestas." by <span class="tm-color-primary">Mary, CEO of Web</span>
                            </p>
                        </blockquote>  
                        <div class="tm-text-center">
                            <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-contact">
                                Contact Us
                            </a>
                        </div>                 
                    </div>
                    <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                        <p>
                            Duis sapien diam, eleifend eget vehicula sed,
                            convallis sit amet elit. Aenean condimentum
                            vulputate porta.
                        </p>
                        <p>
                            Mauris accumsan erat ante, id sagittis felis
                            gravida vitae. Sed iaculis tincidunt neque, a
                            molestie magna vehicula at.
                        </p>
                        <p>
                            Phasellus ornare magna nec nulla pharetra,
                            nec tristique elit lobortis.
                        </p>
                        <img src="img/testimonial-02.jpg" alt="Image" class="tm-mt-35">
                    </div>
                </div>
            </div>            
        </div>

        <div id="about" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                return home
                <i class="fas fa-times"></i>
            </a>
            <h2 class="tm-color-primary tm-about-col tm-mb-40 tm-page-title">About Ocean Vibes</h2>
            <div class="tm-row tm-about-row">
                <div class="tm-col tm-about-col tm-about-left">                    
                    <img src="img/about.jpg" alt="Image" class="tm-mb-30">
                    <p class="tm-mb-40">
                        <?php echo $hakkimizda;?>
                    </p>
                    <p class="tm-mb-40">
                        Pellentesque vitae ipsum vel risus molestie cursus nec quis
                        lectus. Duis egestas lorem eu nisi finibus, sit amet
                        elementum lacus pretium. In tempor felis vitae nulla feugiat aliquam.
                    </p>
                    <p class="tm-mb-40">
                If you need a working HTML contact form, 
                please visit our <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact page</a>. </p>
                    <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-contact tm-mb-40">
                        Contact Us
                    </a>
                </div>               
            </div>
        </div>

        <div id="contact" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                return home
                <i class="fas fa-times"></i>
            </a>
            <h2 class="tm-contact-col tm-color-primary tm-page-title tm-mb-40">Contact Us</h2>
            <div class="tm-row tm-contact-row">
                <div class="tm-col tm-contact-col">
                
                <!-- Do you need a working HTML contact form?
                	Please visit https://templatemo.com/contact page -->
                    
                    <form id="contact-form" action="" method="POST" class="tm-contact-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control rounded-0" placeholder="Full Name" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="contact-select" name="inquiry">
                                <option value="-">Subject</option>
                                <option value="sales">Sales &amp; Marketing</option>
                                <option value="creative">Creative Design</option>
                                <option value="uiux">UI / UX</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                        </div>

                        <div class="form-group tm-text-right">
                            <button type="submit" class="tm-btn tm-btn-primary">Send it now</button>
                        </div>
                    </form>
                </div>
                <div class="tm-col tm-contact-col tm-contact-col-r">
                    <!-- Map -->
                    <div class="mapouter tm-mb-40">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="520" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>

                    <!-- Address -->
                    <address class="tm-mb-40">
                        110-220 Nam vel ultricies mauris,<br>
                        Et gravida eros 10220
                    </address>

                    <!-- Links -->
                    <ul class="tm-contact-links">
                        <li>
                            <a href="tel:0100200340">
                                <i class="fas fa-phone tm-contact-link-icon"></i>
                                Tel: 010-020-0340
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@company.com">
                                <i class="fas fa-at tm-contact-link-icon"></i>
                                Email: info@company.com
                            </a>
                        </li>
                        <li>
                            <a href="https://www.company.com">
                                <i class="fas fa-link tm-contact-link-icon"></i>
                                URL: www.company.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div id="main">

    <?php
    function index(){
    ?>

        <div class="post">
        <h1>Yönetim Paneli</h1>
        <ul>
            <li><a href="?Act=Ekle">İçerik Ekle</a><br /></li>
            <li><a href="#">Kayıtlı İçerikler</a><br /></li>
        </ul>
        </div>
            <br/>
        
    <?php
    }
    function Ekle(){
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];
    $date = date("d.m.Y");

    
    if(isset($_POST['eklebuton'])) {
        if(empty($baslik) or empty($icerik)) {
        echo "Boş Alan Bırakmayın";
        } else{
    $eklesql=mysqli_query($connection, "INSERT INTO articles (title, articles) VALUES ('$baslik','$icerik','$date')");

    if ($eklesql) {
        echo "İçerik Eklendi.";
    } else{
    echo "Hata İçerik Eklenemedi.";
        }
    }

    }

    ?>

            <h3>İçerik Ekle</h3>
                <form action="?Act=Ekle" method="post">
                    <p>
                    <label>Başlık</label>
                    <input name="baslik" value="Your Name" type="text" size="30" />
                    
                    <label>İçerik</label>
                    <textarea cols="5" rows="5" name="icerik"></textarea>
                    <br />
                    <input type="submit" class="button" name="eklebuton" />
                    </p>
                </form>

    <?php

    }
    function Sil(){
    $get_id=$_GET['id'];
    $silsql=mysqli_query("DELETE FROM articles WHERE id='$get_id'");
    if ($silsql) {
    echo "İçerik Silindi.";
    } else{
    echo "İçerik Silinemedi.";
    }

    }
    ?>


    <?php
    $Act=$_GET['Act'];
    switch ($Act) {
    default:
    index();
    break;
    case "Ekle":
    Ekle();
    break;
    case "Sil":
    Sil();
    break;

    }


    ?>

    </div> 
    <!--MAİN BİTİŞ-->

    <footer class="tm-footer">
        <span><a href="logout.php">Çıkış</a></span>
        <span><?php echo $site_logo;?></span>
</footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/templatemo-script.js"></script>
</body>

</html>


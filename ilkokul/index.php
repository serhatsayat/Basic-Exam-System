<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Satisfaction Survey form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Basic Exam System</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script>
    function SubForm() {
        $.ajax({
            url: "https://api.apispreadsheets.com/data/9EI7C8bJSPa1NIMF/",
            type: "post",
            data: $("#wrapped").serializeArray(),
            success: function() {
                alert("Form Data Submitted :)")
            },
            error: function() {
                alert("There was an error :(")
            }
        });
    }
    </script>
</head>
<script>
window.addEventListener('contextmenu', function(e) {
    e.preventDefault();
}, false);
</script>

<body class="style_3">

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Preload -->

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">

                </div>
                <div class="col-7">
                    <div id="social">
                        <ul>
                            <li><a href="mailto:example@example.com"><i class="icon_mail"></i></a></li>
                            <li><a href="https://instagram.com/"><i class="social_instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </header>
    <!-- /header -->

    <div class="wrapper_centering">
        <div class="container_centering">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                        <div class="main_title_1">
                            <h3 style="color:#FFD700;"> İlkokul</h3>
                            <p style="color:#FFD700;">An mei sadipscing dissentiet, eos ea partem viderer facilisi.
                                Brute nostrud democritum in vis, nam ei erat zril mediocrem. No postea diceret vix.</p>
                            <p style="color:#FFD700;">- Basic Exam System</p>
                        </div>
                    </div>

                    <!-- /col -->
                    <div class="col-xl-5 col-lg-5">
                        <div id="wizard_container">
                            <div id="top-wizard">
                                <div id="progressbar"></div>
                            </div>
                            <!-- /top-wizard -->
                            <form id="wrapped" method="POST" autocomplete="off">
                                <input id="website" name="website" type="text" value="">
                                <!-- Leave for security protection, read docs for details -->
                                <div id="middle-wizard">
                                    <?php

$SoruCevap = file_get_contents("sorular.json");
$array = json_decode($SoruCevap, true);
?>
                                    <p>Kalan Süre: <a id="displayCounter"></a></p>
                                    <?php foreach ($array as $k => $v) { ?>
                                    <div class="step">
                                        <?php
if ($k == 7) {
    echo '<img src="7.jpg"  width="90" height="80"><br><br>';
} elseif ($k == 8) {
    echo '<img src="8.jpg"  width="90" height="80"><br><br>';
} elseif ($k == 9) {
    echo '<img src="9.jpg"  width="90" height="80"><br><br>';
}else {
    
}
?>

                                        <h3 class="main_question mb-4"><strong><?= $k+1;?> of
                                                16</strong><?php  echo $v['soru'];?></h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="<?= $k+1;?>a" name="soru<?= $k+1;?>"
                                                            class="required" value="a">
                                                        <label class="radio" for="<?= $k+1;?>a"></label>
                                                        <label for="<?= $k+1;?>a"
                                                            class="wrapper"><?php  echo $v['a'];?></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="<?= $k+1;?>b" name="soru<?= $k+1;?>"
                                                            class="required" value="b">
                                                        <label class="radio" for="<?= $k+1;?>b"></label>
                                                        <label for="<?= $k+1;?>b"
                                                            class="wrapper"><?php  echo $v['b'];?></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="<?= $k+1;?>c" name="soru<?= $k+1;?>"
                                                            class="required" value="c">
                                                        <label class="radio" for="<?= $k+1;?>c"></label>
                                                        <label for="<?= $k+1;?>c"
                                                            class="wrapper"><?php  echo $v['c'];?></label>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                    </div>
                                    <?php } ?>
                                    <!-- /step 2-->




                                    <div class="submit step">
                                        <h3 class="main_question"><strong><?= $k+1;?> of 16</strong>Lütfen bilgilerinizi
                                            doldurun</h3>
                                        <div class="form-group">
                                            <label for="isim">Ad Soyad</label>
                                            <input type="text" name="isim" id="isim" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Okulunuz</label>
                                            <input type="text" name="okul" id="lastname" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label placeholder="05412345678" pattern="[0-9]{11}" for="telephone">Telefon
                                                Numaranız</label>
                                            <input type="text" name="telefon" id="telephone" placeholder="05412345678"
                                                pattern="[0-9]{11}" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label for="veli">Velinin Adı Soyadı</label>
                                            <input type="text" name="veli" id="veli" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label placeholder="05412345678" pattern="[0-9]{11}" for="veli-tel">Velinin
                                                Telefon Numarası</label>
                                            <input type="text" name="velitel" id="veli-tel" placeholder="05412345678"
                                                pattern="[0-9]{11}" class="form-control required">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-3">
                                                <div class="form-group">
                                                    <label for="yas">Yaş</label>
                                                    <input type="text" name="yas" id="yas" class="required"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="form-group radio_input">
                                                    <label class="container_radio">Erkek
                                                        <input type="radio" name="cinsiyet" value="Erkek"
                                                            class="required">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container_radio">Kız
                                                        <input type="radio" name="cinsiyet" value="Kız"
                                                            class="required">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Iller">Lütfen Bir İl Seçiniz</label>
                                                <select id="Iller">
                                                    <option class="required" value="0">Lütfen Bir İl Seçiniz</option>
                                                </select>


                                                <label for="Ilceler">Şehir Seç</label>
                                                <select id="Ilceler" disabled="disabled">
                                                    <option class="required" value="0">Lütfen Önce bir İl seçiniz
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                        <div class="form-group terms">
                                            <label class="container_check">Lütfen kabul edin. <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#terms-txt"
                                                    style="color:#fff; text-decoration: underline;">KVKK METNİ</a>
                                                <input type="checkbox" name="kvkk" value="evet" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /step 5-->

                                </div>
                                <!-- /middle-wizard -->

                                <div id="bottom-wizard">

                                    <button type="button" name="backward" class="backward">Geri</button>
                                    <button type="button" name="forward" class="forward">İleri</button>
                                    <button type="submit" name="process" class="submit"
                                        onclick='SubForm()'>Gönder</button>
                                </div>
                                <!-- /bottom-wizard -->

                            </form>

                        </div>
                        <!-- /Wizard container -->
                    </div>
                    <!-- /col -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container_centering -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div style="color:#FFD700;" class="col-md-3">
                        ©2022 Basic Exam System
                    </div>

                </div>
                <!-- /row -->
            </div>
            <!-- /container-fluid -->
        </footer>
        <!-- /footer -->
    </div>
    <!-- /wrapper_centering -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">KVKK</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Kişisel Verilerin Korunması Hakkında Bilgilendirme Metni
                    Değerli Ziyaretçimiz,

                    1-6698 sayılı Kişisel Verilerin Korunması Kanunu (“KVK Kanunu”) uyarınca, kimliğinizi belirli veya
                    belirlenebilir kılan her türlü bilginiz ve özel nitelikli kişisel verileriniz dâhil kişisel
                    verileriniz, veri sorumlusu olarak AMERİKAN KÜLTÜR YABANCI DİL KURSLARI (“VERİ SORUMLUSU”)
                    tarafından işlenebilecektir.


                    Kişisel verilerin işlenmesi ise kişisel verilerin elde edilmesi, kaydedilmesi, depolanması, muhafaza
                    edilmesi, değiştirilmesi, yeniden düzenlenmesi, açıklanması, aktarılması, sınıflandırılması, ya da
                    kullanılmasının engellenmesi gibi verileri üzerinden gerçekleştirilen her türlü işlemi ifade
                    etmektedir.


                    Kişisel verilerinizin korunması bizim için hayati öneme sahiptir. Bu konuda gereken tüm önlemleri
                    alacağımızı ve son derece şeffaf olmaya devam edeceğimizi bildirmek istiyoruz.


                    2-Kişisel Verilerin İşlenme Amacı ve Kişisel Verilerin Aktarımı Elde edilen kişisel verileriniz
                    aşağıda sayılan amaçlar doğrultusunda 6698 Sayılı Kişisel Verilerin Korunması Kanunu’na ve ilgili
                    mevzuata uygun olarak ilgili birimlerimiz tarafından franchise görüşmelerinin, bölge çalışmalarının
                    yapılması, sözleşmelerin imzalanması, kimlik fotokopisi, ticaret sicil gazetesi, vergi levhası, imza
                    sirküleri, kıymetli evrak gibi evrakların toplanması, raporlama ve istatistik çıkarılması, iş
                    sürecinin yürütülmesi, iş ilişkisi içerisinde olduğumuz kişilerin hukuki ve ticari güvenliğinin
                    temini, öğrenci şikayetlerinde efektif ve hızlı sonuca ulaşılması için gereken çalışmaların
                    yapılması, finans ve muhasebe işlemlerinin gerçekleştirilmesi, ilgili/yetkili kamu kuruluşlarına
                    bildirim yükümlülüklerinin yerine getirilmesi (Mahkemeler, Milli Eğitim Bakanlığı v.b.) İnsan
                    Kaynakları politikalarının yürütülmesinin temini, bilgi iletişim ve fiziksel güvenlik süreçlerinin
                    yürütülmesi amaçları ile Avukatlarımıza, Danışmanlarımıza yasal mevzuattan kaynaklı yükümlülükler
                    gereği yetkili kamu kurum/kuruluşlarına, finansal riskleri değerlendirmek amacıyla aracı finans
                    kuruluşlarına, denetim süreçlerinin yürütülmesi amacıyla bağımsız denetim firmalarına, iş
                    süreçlerimizde destek aldığımız yerel/uluslararası kuruluşlara, hukuki dayanaklar, yasal mevzuat ve
                    rızanız çerçevesinde aktarılabilecektir.


                    3- Kişisel verileriniz VERİ SORUMLUSU tarafından farklı kanallarla ve farklı hukuki sebeplere ve iç
                    işleyişe dayanarak toplanmaktadır.


                    4- 6698 Sayılı Kişisel Verileri Koruma Kanun’un 12. maddesine uygun olarak, Genel Merkezimiz
                    tarafından veri güvenliğinin sağlanması için, -Kişisel verilerin hukuka aykırı olarak işlenmesini
                    önlemek, -Kişisel verilere hukuka aykırı olarak erişilmesini önlemek, -Kişisel verilerin
                    muhafazasını sağlamak, amacıyla lüzumlu olan güvenlik düzeyini temin etmeye yönelik gerekli her
                    türlü teknik ve idari tedbirler alınmaktadır.


                    5- Veri Sorumlusuna başvurarak,

                    a) Kişisel verilerinizin işlenip işlenmediğini öğrenme,

                    b) Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme,

                    c) Kişisel verilerinizin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını
                    öğrenme,

                    ç) Yurt içinde veya yurt dışında kişisel verilerinizin aktarıldığı üçüncü kişileri bilme,

                    d) Kişisel verilerinizin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme,

                    e) Kişisel Verilerin Korunması Kanunu’nun 7. maddesinde öngörülen şartlar çerçevesinde kişisel
                    verilerinizin silinmesini veya yok edilmesini isteme,

                    f) (d) ve (e) bentleri uyarınca yapılan işlemlerin, kişisel verilerinizin aktarıldığı üçüncü
                    kişilere bildirilmesini isteme,

                    g) İşlenen kişisel verilerinizin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle
                    kendiniz aleyhine bir sonucun ortaya çıkmasına itiraz etme,

                    ğ) Kişisel verilerinizin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde zararın
                    giderilmesini talep etme haklarına sahipsiniz.


                    İlgili kişi olarak hak taleplerinizi, yazılı olarak kimliğinizi tespit edici gerekli belgeleri de
                    sağlayarak VERİ SORUMLUSU’ na iletmeniz gerekmektedir. Bu çerçevede, KVK Kanunu’nun 11. maddesi
                    kapsamında yapacağınız başvuruların sağlıklı ve hızlı şekilde yönetilmesi için,
                    info@markalarbirligi.com.tr adresinden bize ulaşabilirsiniz.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- COMMON SCRIPTS -->
    <script>
    const padLeft = (toLength, padding) =>
        toPad => `${padding.repeat(toLength).substring(0, toLength - toPad.length)}${toPad}`
    const twoDigitZeroLeft = padLeft(2, '0')

    const secondsToDisplay = secondsFromNow => {
        const end = (new Date()).valueOf() + (secondsFromNow * 1000)

        return () => {
            const now = (new Date()).valueOf()
            const rawRemaining = Math.ceil((end - now) / 1000)
            if (rawRemaining <= 0) {
                return ''
            }

            const remainingMinutes = Math.floor(rawRemaining / 60)
            const remainingSeconds = rawRemaining % 60

            const displayMinutes = `${remainingMinutes}`
            const displaySeconds = `${remainingSeconds}`

            return `${twoDigitZeroLeft(displayMinutes)}:${twoDigitZeroLeft(displaySeconds)}`
        }
    }

    const countDownFor = (function() {
        let timeoutHandler = 0
        return (secondsToCountDown, refreshRate, innerTextElement) => {
            const countDowner = secondsToDisplay(secondsToCountDown)
            const countAgain = () => {
                if (timeoutHandler !== 0) {
                    clearTimeout(timeoutHandler)
                }
                const remainingText = countDowner()
                if (remainingText.length > 0) {
                    innerTextElement.innerText = remainingText
                    timeoutHandler = setTimeout(countAgain, refreshRate)
                } else {
                    innerTextElement.innerText = 'El fin'
                }
            }
            countAgain()
        }
    }())
    displayCounter.innerText = ''
    countDownFor(1800, 200, document.getElementById('displayCounter'))
    </script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/il.js"></script>
    <!-- Wizard script -->
    <script src="js/survey_func.js"></script>
    <script type="text/javascript">
    var title = document.title;
    var alttitle = "Farklı Sekmeye Geçmek Yasak!";
    window.onblur = function() {
        document.title = alttitle;
    };
    window.onfocus = function() {
        document.title = title;
    };
    </script>
</body>

</html>
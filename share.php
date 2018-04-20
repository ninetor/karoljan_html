<?php

require __DIR__ . '/_final.php';

$route = $_SERVER['REQUEST_URI'];
if (in_array($route, array('/share', '/share/'))) {
  $key = 0;
} else {
  $key = ltrim($route, '/share/');
  $key = (int) $key;
  $key = in_array($key, range(0, 100, 10)) ? $key : 0;
}

$results = require('_results.php');

$finalArray = $results[$key];

$active      = 'active';
$quizResults = $finalArray['value'];
$heroSlogan  =  $finalArray['slogan'];
$text        = $finalArray['text'];

$title ='Я адметны на '.$quizResults.'%!';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>ПIВА З АДМЕТНЫМ ХАРАКТАРАМ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" type="image/png" href="/favicon.png" />
    <meta property="og:title" content="Адметны на <?=$quizResults?>%. Вызначце ўзровень сваёй адметнасці на karoljan.by"/>
    <meta property="og:description" content="<?=$finalArray['text']?>"/>
    <meta property="og:url" content="http://karoljan.by/share/<?=$finalArray['value']?>"/>
    <meta property="og:image" content="http://karoljan.by/<?=$finalArray['img']?>"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="/admietnasc/static/css/style-popup.css">
    <script src="/admietnasc/static/js/vendor/jquery.arctext.js"></script>
    <script src="/admietnasc/static/js/interface-popup.js"></script>
    <script src="/admietnasc/js/_share.js"></script>
  </head>
  <body>
    <div class="page">
      <div class="socials"><a href="https://twitter.com/alivaria"><i class="icon-twitter"></i></a><a href="https://facebook.com/Alivaria"><i class="icon-facebook"></i></a><a href="https://vk.com/club_alivaria"><i class="icon-vkontakte"></i></a></div>
      <div class="logotype"></div>
      <div class="page--title">ПIВА З АДМЕТНЫМ<br>ХАРАКТАРАМ</div>
      <div class="page--text">Karol Jan&nbsp;&mdash; новая прэміяльная лінейка піва, зваранага па&nbsp;традыцыйных еўрапейскіх рэцэптах з&nbsp;выкарыстаннем асаблівых гатункаў хмелю. Натхненне гісторыяй жыцця і дзейнасці Ка&#769;раля Яна Чапскага дапамагло нам стварыць асаблівае піва з&nbsp;адметным характарам.</div>
      <div class="page--btns hidden-xs hidden-sm"><a href="#" class="js-toright">Blonde</a><a href="#" class="js-toleft">Dunkel</a></div>
      <div class="page--btns visible-xs visible-sm"><a href="#BlondeBox" class="js-slide">Blonde</a><a href="#DunkelBox" class="js-slide">Dunkel</a></div>
      <div class="left-side hidden-xs hidden-sm">
        <div class="left-side--shadow"></div>
        <div class="left-side--photo"></div>
        <div class="left-side--gradient"></div>
        <div class="left-side--glass"><img src="/img/left-side--glass.png" alt="">
          <div class="info is-l1">
            <div class="info--circle"></div>
            <div class="info--box is-fw">
              <div class="info--text">
                <p>Падавайце Karol Jan Blondе пры тэмпературы 6&deg;&nbsp;&mdash; 8&deg;C&nbsp;у&nbsp;куфлі тыпу &laquo;цюльпан&raquo;. Гэты гатунак ідэальна спалучаецца з&nbsp;лёгкімі закускамі: куранём, смажанымі каўбаскамі, лістамі салаты, ласосем, паўцвёрдым сырам. Да&nbsp;Karol Jan Blondе будуць таксама пасаваць дэсерты: лёгкі абрыкосавы альбо мандарынавы пірог, лімонны тарт з&nbsp;заварным крэмам.</p>
                <img src="/img/popup_blonde.jpg">
              </div>
            </div>
          </div>
        </div>
        <div class="left-side--beer js-toright"><img src="/img/left-side--beer.png" alt="">
          <div class="info is-l2">
            <div class="info--circle"></div>
            <div class="info--box">
              <div class="info--photo is-men"><img src="/img/men.svg" alt=""></div>
              <div class="info--text">
                <p><span style="font-family: Arial; font-weight: bold;">Ка&#769;раль Ян&nbsp;Чапскі</span> быў не&nbsp;проста мэрам горада Мінску, які пабудаваў першую гідраэлектрастанцыю ды&nbsp;адчыніў публічную бібліятэку. Ён быў сапраўды адментым чалавекам, які напоўніў горад духам наватраства і паспрыяў таму, што ён стаў такім, якім мы&nbsp;яго ведаем цяпер,&nbsp;&mdash; сапраўднай еўрапейскай сталіцай з&nbsp;вялікай душой.</p>
                <p>Такія адметныя людзі, як&nbsp;Чапскі, ніколі не&nbsp;спыняюцца і заўсёды прагнуць усяго новага і лепшага. Таму, мы, паслядоўнікі Чапскага, зварылі асаблівае еўрапейскае піва з&nbsp;адметным духам. І калі прыйшоў час адбіраць яму імя, у&nbsp;нас не&nbsp;было ніякіх сумненняў.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="left-side--content hidden-xs hidden-sm">
        <div class="content">
          <div class="content--title">Karol Jan Blonde</div>
          <div class="content--text">Karol Jan Blonde&nbsp;&mdash; гэта светлае піва ў бельгійскім стылі, мяккае ды&nbsp;шчыльнае. Валодае прыгожым <nobr>ясна-залацістым</nobr> колерам. Цела высокашчыльнае ды&nbsp;акруглае.</div>
          <div class="content--counters">
            <div class="content--counter">Шчыльнасць<span>14,0%</span></div>
            <div class="content--counter">Алк. не менш за<span>5,9%</span></div>
          </div>
          <div class="content--desc">
            <p>Смак піва сухі і насычаны, з&nbsp;ноткамі вострых прыпраў. У&nbsp;смаку прысутнічае мяккая прыемная хмелевая горыч і інтэнсіўны саладкаваты посмак. Пераважаюць тонкі соладавы і <nobr>кветкава-фруктовы</nobr> водары.</p>
            <p>Гатунак валодае павышанай пенастойкасцю: пена дробназярністая, шапка белага колеру, высокая ды&nbsp;шчыльная. Вырабляецца са&nbsp;светлага соладу і некалькіх гатункаў нямецкага хмелю.</p>
          </div>
        </div>
      </div>
      <div class="right-side hidden-xs hidden-sm">
        <div class="right-side--shadow"></div>
        <div class="right-side--photo"></div>
        <div class="right-side--gradient"></div>
        <div class="right-side--glass"><img src="/img/right-side--glass.png" alt="">
          <div class="info is-r1">
            <div class="info--circle"></div>
            <div class="info--box is-fw">
              <div class="info--text">
                <p>Karol Jan Dunkel трэба падаваць у&nbsp;куфлі формы &laquo;рупар&raquo; пры тэмпературы 8&deg;&nbsp;&mdash; 10&deg;C. Да&nbsp;гэтага гатунку будзе пасаваць сытная ежа з&nbsp;вострым смакам: барбекю, закускі са&nbsp;спецыямі, сасіскі, смажанае мяса, мяккія сыры з&nbsp;інтэнсіўным смакам ды&nbsp;водарам. На&nbsp;дэсерт прапануецца гранатавы тарт з&nbsp;грэцкімі арэхамі, грушавы пірог з&nbsp;цукатамі.</p>
                <img src="/img/popup_dunkel.jpg">
              </div>
            </div>
          </div>
        </div>
        <div class="right-side--beer js-toleft"><img src="/img/right-side--beer.png" alt="">
          <div class="info is-r2">
            <div class="info--circle"></div>
            <div class="info--box">
              <div class="info--photo is-men"><img src="/img/men.svg" alt=""></div>
              <div class="info--text">
                <p><span style="font-family: Arial; font-weight: bold;">Ка&#769;раль Ян&nbsp;Чапскі</span> быў не&nbsp;проста мэрам горада Мінску, які пабудаваў першую гідраэлектрастанцыю ды&nbsp;адчыніў публічную бібліятэку. Ён быў сапраўды адментым чалавекам, які напоўніў горад духам наватраства і паспрыяў таму, што ён стаў такім, якім мы&nbsp;яго ведаем цяпер,&nbsp;&mdash; сапраўднай еўрапейскай сталіцай з&nbsp;вялікай душой.</p>
                <p>Такія адметныя людзі, як&nbsp;Чапскі, ніколі не&nbsp;спыняюцца і заўсёды прагнуць усяго новага і лепшага. Таму, мы, паслядоўнікі Чапскага, зварылі асаблівае еўрапейскае піва з&nbsp;адметным духам. І калі прыйшоў час адбіраць яму імя, у&nbsp;нас не&nbsp;было ніякіх сумненняў.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="right-side--content hidden-xs hidden-sm">
        <div class="content">
          <div class="content--title">Karol Jan Dunkel</div>
          <div class="content--text">Karol Jan Dunkel&nbsp;&mdash; цёмнае традыцыйнае нямецкае піва з&nbsp;насычаным соладавым смакам, ледзь прыкметнай горыччу, сухім акруглым заканчэннем.</div>
          <div class="content--counters">
            <div class="content--counter">Шчыльнасць<span>12,0%</span></div>
            <div class="content--counter">Алк. не менш за<span>4,5%</span></div>
          </div>
          <div class="content--desc">
                <p>Валодае глыбокім <nobr>ясна-каштанавым</nobr> колерам з&nbsp;адлівам медзі. У&nbsp;поўным смаку гэтага піва прысутнічаюць водары падсмажанага хлеба з&nbsp;маслам, якія плаўна пераходзяць у&nbsp;ноткі карамелі ды&nbsp;завяршаюцца тонкім водарам інжыру. Цела піва лёгкае, пена прыемнага крэмавага адцення.</p>
                <p>Вырабляецца з&nbsp;дадаваннем карамельнага соладу Ebenholz з&nbsp;самага сэрца Баварыі, які надае піву шыкоўны насычаны колер.</p>
          </div>
        </div>
      </div>
      <div class="visible-xs visible-sm">
        <div class="xs-box">
          <div id="BlondeBox" class="xs-box--in">
            <div class="content">
              <div class="content--title">Karol Jan Blonde</div>
              <div class="content--text">Karol Jan Blonde&nbsp;&mdash; гэта светлае піва ў бельгійскім стылі, мяккае ды&nbsp;шчыльнае. Валодае прыгожым <nobr>ясна-залацістым</nobr> колерам. Цела высакашчыльнае ды&nbsp;круглявае.</div>
              <div class="content--counters">
                <div class="content--counter">Шчыльнасць<span>14,0%</span></div>
                <div class="content--counter">Алк. не менш за<span>5,9%</span></div>
              </div>
              <div class="content--desc">
                <p>Смак піва сухі і насычаны, з&nbsp;ноткамі вострых прыправаў. У&nbsp;смаку прысутнічае мяккая прыемная хмелевая горыч і інтэнсіўнае саладкаватае паслягусце. Пераважаюць пяшчотны соладавы і <nobr>кветкава-фруктовы</nobr> водары. Гатунак валодае павышанай пенастойкасцю: пена дробназярністая, шапка белага колеру, высокая ды&nbsp;шчыльная.</p>
                <p>Вырабляецца з&nbsp;яснага соладу і некалькіх гатункаў нямецкага хмелю: горкага гатунку Magnum і араматнага Hallertau.</p>
              </div>
            </div>
          </div>
          <div class="xs-box--beer is-blonde"><img src="/img/blonde--xs.png" alt=""></div>
        </div>
        <div class="xs-box is-dunkel">
          <div id="DunkelBox"  class="xs-box--in">
            <div class="content">
              <div class="content--title">Karol Jan Dunkel</div>
              <div class="content--text">Karol Jan Dunkel&nbsp;&mdash; цёмнае традыцыйнае нямецкае піва з&nbsp;насычаным соладавым смакам, ледзь прыкметнай горыччу, сухім акруглым заканчэннем.</div>
              <div class="content--counters">
                <div class="content--counter">Шчыльнасць<span>12,0%</span></div>
                <div class="content--counter">Алк. не менш за<span>4,5%</span></div>
              </div>
              <div class="content--desc">
                <p>Валодае глыбокім <nobr>ясна-каштанавым</nobr> колерам з&nbsp;адлівам медзі. У&nbsp;поўным смаку гэтага піва прысутнічаюць водары падсмажанага хлеба з&nbsp;маслам, якія плаўна пераходзяць у&nbsp;ноткі карамелі ды&nbsp;завяршаюцца тонкім водарам інжыру. Цела піва лёгкае, пена прыемнага крэмавага адцення.</p>
                <p>Вырабляецца з&nbsp;дадаваннем карамельнага соладу Ebenholz з&nbsp;самага сэрца Баварыі, які надае піву шыкоўны насычаны колер.</p>
              </div>
            </div>
          </div>
          <div class="xs-box--beer is-dunkel">
            <div class="xs-box--beer-in"><img src="/img/dunkel--xs.png" alt=""></div>
          </div>
        </div>
      </div>
      <div class="warning">
        <div class="warning--in"></div>
      </div>
      <div class="unp">УНП 100128525, ООО "Пивзавод Оливария</div>
    </div>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-97815410-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- Mastermind counter -->
    <script type="text/javascript">
        (function (d, w) {
            w.anonimusId = "$2y$13$5sqcyyigHKf1RAo2mBr0/.64Gz5QBC3lUjHICvPbNWYBgjNU5lZEK";
            w.anonimusApi = "http://mastermindapp.by/api";
            w.anonimusHomeUrl = "http://mastermindapp.by";
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "http://mastermindapp.by/cdn.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window);
    </script>
    <!-- /Mastermind counter -->
    <!-- total-popup -->
    <div class="total-popup <?=$active?>">
        <a href="#" class="total-popup__close">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                    <g>
                        <path d="M505.943,6.058c-8.077-8.077-21.172-8.077-29.249,0L6.058,476.693c-8.077,8.077-8.077,21.172,0,29.249    C10.096,509.982,15.39,512,20.683,512c5.293,0,10.586-2.019,14.625-6.059L505.943,35.306    C514.019,27.23,514.019,14.135,505.943,6.058z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M505.942,476.694L35.306,6.059c-8.076-8.077-21.172-8.077-29.248,0c-8.077,8.076-8.077,21.171,0,29.248l470.636,470.636    c4.038,4.039,9.332,6.058,14.625,6.058c5.293,0,10.587-2.019,14.624-6.057C514.018,497.866,514.018,484.771,505.942,476.694z" />
                    </g>
                </g>
            </svg>
        </a>
        <div class="total-popup__content">
            <div class="total-popup__col">
                <div class="total-popup__score">
                    <p class="total-popup__score-text">Адметны на</p>
                    <span><?=$quizResults?>%</span>
                    <?if($text){?>
                    <div class="total-popup__detailtext">
                        <p><?=$text?></p>
                    </div>
                    <?}?>
                </div>
            </div>
            <div class="total-popup__col">
                <div class="total-popup__logo">
                    <img src="/admietnasc/static/assets/img/svg/KJlogo.svg" alt="">
                </div>
            </div>
            <div class="total-popup__socials">
                <p class="total-popup__socials-text">Раскажы сябрам</p>
                <div class="total-popup__socials-wrap">
                    <a href="#" class="total-popup__socials-item" id="tw-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45.563" height="37.312" viewBox="0 0 45.563 37.312">
                            <path id="Forma_1" data-name="Forma 1" class="icon-s-fill" d="M602.1,704.109a18.587,18.587,0,0,1-5.37,1.483,9.438,9.438,0,0,0,4.112-5.21,18.618,18.618,0,0,1-5.938,2.285,9.341,9.341,0,0,0-16.174,6.442,9.481,9.481,0,0,0,.242,2.146,26.48,26.48,0,0,1-19.271-9.838,9.47,9.47,0,0,0,2.893,12.571,9.255,9.255,0,0,1-4.235-1.178c0,0.04,0,.079,0,0.119a9.406,9.406,0,0,0,7.5,9.233,9.307,9.307,0,0,1-4.222.161,9.369,9.369,0,0,0,8.734,6.539,18.764,18.764,0,0,1-13.842,3.9,26.331,26.331,0,0,0,14.332,4.23c17.2,0,26.6-14.347,26.6-26.79q0-.612-0.027-1.218A19.055,19.055,0,0,0,602.1,704.109Z" transform="translate(-556.531 -699.688)" />
                        </svg>
                    </a>
                    <a href="#" class="total-popup__socials-item" id="fb-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="41" viewBox="0 0 23 41">
                            <path id="Forma_1" data-name="Forma 1" class="icon-s-fill" d="M679.134,698.008L673.616,698c-6.2,0-10.2,3.962-10.2,10.093v4.654h-5.547a0.853,0.853,0,0,0-.868.837v6.742a0.853,0.853,0,0,0,.868.836h5.547v17.014a0.852,0.852,0,0,0,.867.836h7.237a0.853,0.853,0,0,0,.868-0.836V721.161h6.486a0.852,0.852,0,0,0,.867-0.836l0-6.742a0.825,0.825,0,0,0-.254-0.592,0.886,0.886,0,0,0-.614-0.245h-6.488V708.8c0-1.9.469-2.859,3.031-2.859h3.717a0.852,0.852,0,0,0,.867-0.836v-6.261A0.853,0.853,0,0,0,679.134,698.008Z" transform="translate(-657 -698)" />
                        </svg>
                    </a>
                    <a href="#" class="total-popup__socials-item" id="vk-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="54.875" height="31.375" viewBox="0 0 54.875 31.375">
                            <path class="icon-s-fill" d="M778.207,723.081a75.225,75.225,0,0,1,5.374,5.46,15.855,15.855,0,0,1,1.926,2.8c0.74,1.448.07,3.042-1.216,3.129l-8,0a6.14,6.14,0,0,1-5.089-2.089c-1.107-1.139-2.132-2.351-3.2-3.528a7.611,7.611,0,0,0-1.439-1.291,1.662,1.662,0,0,0-2.662.653,8.564,8.564,0,0,0-.842,3.767c-0.085,1.9-.654,2.4-2.546,2.488a20.279,20.279,0,0,1-11.439-2.484,25.373,25.373,0,0,1-7.7-7.278,98.285,98.285,0,0,1-10.13-18.236c-0.639-1.438-.172-2.209,1.4-2.237,2.608-.051,5.216-0.047,7.827,0a2.3,2.3,0,0,1,2.17,1.641,49.166,49.166,0,0,0,5.3,9.928,8.43,8.43,0,0,0,2,2.224,1.214,1.214,0,0,0,2.069-.614,6.927,6.927,0,0,0,.46-2.082,31.315,31.315,0,0,0-.128-7.3,3.031,3.031,0,0,0-2.565-2.783c-0.765-.146-0.651-0.434-0.281-0.874a2.866,2.866,0,0,1,2.452-1.233H761c1.422,0.284,1.738.929,1.933,2.375l0.007,10.135c-0.015.56,0.277,2.22,1.275,2.591,0.8,0.263,1.325-.382,1.8-0.894a31.429,31.429,0,0,0,5.087-7.9c0.612-1.248,1.138-2.543,1.648-3.838A1.935,1.935,0,0,1,774.8,704.2l8.7,0.007a4.566,4.566,0,0,1,.769.047c1.465,0.253,1.866.889,1.414,2.334a22,22,0,0,1-3.457,6.055c-1.45,2.026-3,3.983-4.439,6.022-1.322,1.861-1.217,2.8.425,4.416h0Z" transform="translate(-730.969 -703.125)" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end of total-popup -->
    <!-- Overlay -->
    <div class="new-overlay <?=$active?>"></div>
    <!-- end of Overlay -->
    <script>
        var SHARE_TITLE = $('[property="og:title"]').attr('content')
          , SHARE_TEXT  = "Вызначце ўзровень сваёй адметнасці на karoljan.by"
          , SHARE_URL   = $('[property="og:url"]').attr('content')
          , SHARE_IMAGE = $('[property="og:image"]').attr('content')
        ;
        console.log(SHARE_TEXT);
        $(document).on('click', '#tw-link', function (e) {
            e.preventDefault();
            Share.twitter(SHARE_URL, SHARE_TITLE);
        });
        $(document).on('click', '#fb-link', function (e) {
            e.preventDefault();
            Share.facebook(SHARE_URL, SHARE_TITLE, SHARE_IMAGE, SHARE_TEXT);
        });
        $(document).on('click', '#vk-link', function (e) {
            e.preventDefault();
            Share.vkontakte(SHARE_URL, SHARE_TITLE, SHARE_IMAGE.replace('_fb', ''), SHARE_TEXT);
        });

        setTimeout(function () {
            window.location.href = 'http://karoljan.by/admietnasc';
        }, 2000);
    </script>
  </body>
</html>

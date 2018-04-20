<?php
require('engine.php');
$quest = new NSEngineTesting;
$numbQ = $quest->questNumb;
$textQ = $quest->getCurQuestion($numbQ);
$arrAns = $quest->getCurAnswers($numbQ);
shuffle($arrAns);
$qNumber = $quest->questNumbInSess();
?>
<!DOCTYPE html>
<html class="no-js" lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Аливария</title>
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta property="og:title" content="Главная" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="ru_RU">
        <meta property="og:image" content="static/assets/img/og/og.png" />
        <link rel="icon" type="image/png" href="static/assets/img/favicon/favicon.png" sizes="16x16">
        <link rel="stylesheet" href="static/css/style.css">
        <script src="static/js/vendor/svg4everybody.min.js"></script>
        <script>
            svg4everybody();
        </script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="layout layout--index">
        <div class="page-wrapper">
            <div class="page-header">
                <div class="page-container">
                    <a href="#" class="logo">
                        <img src="static/assets/img/logo/alivaria.svg" alt="Лого 'Аливария'">
                    </a>
                    <div class="intro">
                        <p class="intro__text">
                            <strong>
                                Калі б <a href="#" onclick="ga('send', 'event', 'click', 'chapski-info');">Караль Ян Чапскі</a> жыў сёння, ён напэўна працягваў бы прывозіць з Еўропы добрыя традыцыі.
                            </strong>
                        </p>
                        <p class="intro__text">
                            Дапамажыце яму разабрацца з сучаснымі норавамі ды заадно вызначце ўзровень сваёй адметнасці!
                        </p>
                    </div>
                </div>
            </div>
            <main class="page-content">
                <div class="page-content__wrapper">
                    <div class="page-container">
                        <section class="test" data-quest="<?=$numbQ?>">
                            <div class="test__quantity">
                                <?=$qNumber?>-е пытанне з <?=$quest->questCount?>
                            </div>
                            <div class="test__wrapper">
                                <div class="test__left">
									<div class="question-image" style="background: url(static/assets/img/content/<?=$quest->getCurImage($numbQ);?>); background-size: cover;"></div>
									<div class="question-text">
                                    <p class="test__question"><?=$textQ?></p>
                                    <ul class="test__options">
                                        <?php foreach($arrAns as $ans): ?>
                                        <li class="test__options-item" data-answer="<?=$ans[2]?>">
                                            <span><?=$ans[0]?></span>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
									</div>
                                </div>
                               <? /* <div class="test__right">
                                    <div class="about">
                                        <div class="about__logo">
                                            <img src="static/assets/img/svg/kj.svg" alt="">
                                        </div>
                                        <p class="about__text">
                                            Karol Jan (KJ) – адзінка вымярэння адметнасці, названая ў гонар легендарнага мэра горада Мінска і ўладальніка завода Багемія (цяпер Аліварыя) Караля Яна Чапскага.
                                        </p>
                                    </div>
                                </div> */?>
                            </div>
                        </section>
                    </div>
                </div>
            </main>
            <?php foreach($arrAns as $ans): ?>
            <div class="answers" data-answer="<?=$ans[2]?>">
                <div class="answers__wrapper">
                    <p class="answers__text"><?=$ans[1]?></p>
                    <div class="answers__pic" style="background: url('static/assets/img/content/pic.png')"></div>
                </div>
                <a href="<?=$quest->curPage?>" class="btn answers__btn" onclick="ga('send', 'event', 'click', 'next-question');">Наступнае пытанне</a>
            </div>
            <?php endforeach; ?>
            <div class="overlay"></div>
            <div class="age-gate">
                <div class="age-gate__title">
                    Вам больш за 18&nbsp;год?
                </div>
                <div class="age-gate__options">
                    <span class="age-gate__options-item age-gate__options-item--yes" onclick="ga('send', 'event', 'click', 'Yes');">Так</span>
                    <span class="age-gate__options-item age-gate__options-item--no" onclick="ga('send', 'event', 'click', 'No');">Не</span>
                    <div class="age-gate__answer-no">
                        У вас усё яшчэ наперадзе!
                    </div>
                </div>
            </div>
            <div class="about-chapski">
                <div class="about-chapski__close">
                    <span></span>
                    <span></span>
                </div>
                <div class="about-chapski__avatar">
                    <img src="assets/img/svg/chapski.svg" alt="">
                </div>
                <div class="about-chapski__wrapper">
                     <p class="about-chapski__text">
                    <strong>Ка́раль Ян Чапскі</strong> быў не проста мэрам горада Мінску, які пабудаваў першую гідраэлектрастанцыю ды адчыніў публічную бібліятэку. Ён быў сапраўды адментым чалавекам, які напоўніў горад духам наватраства і паспрыяў таму, што ён стаў такім, якім мы яго ведаем цяпер, — сапраўднай еўрапейскай сталіцай з вялікай душой.
                </p>
                 <p class="about-chapski__text">
                    Такія адметныя людзі, як Чапскі, ніколі не спыняюцца і заўсёды прагнуць усяго новага і лепшага. Таму, мы, паслядоўнікі Чапскага, зварылі асаблівае еўрапейскае піва з адметным духам. І калі прыйшоў час адбіраць яму імя, у нас не было ніякіх сумненняў.
                </p>
                </div>
               
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="static/js/interface.js"></script>
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
        w.anonimusId = "$2y$13$n7zqmoVeoN7mElZ7sc4hMuafYhpFX3xes7bSP78XmsVswpvKaKify";
        w.anonimusApi = "https://mastermindapp.by/api";
        w.anonimusHomeUrl = "https://mastermindapp.by";
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mastermindapp.by/cdn.js?nnn=" + (new Date()).getTime();
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window);
</script>
<!-- /Mastermind counter -->	
    </body>
</html>

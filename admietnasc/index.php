<?php
require('engine.php');
//_pr($_SESSION);
//$quest = new NSEngineTesting;
?>
<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8">
    <title>Летний драйв-тест от «Балтика 0»</title>
	<meta name="description" content="Пройди экспресс-тест от «Балтика 0» – и узнай, каким словом тебя «проводят» другие водители!"/>
    <meta property="og:title" content="Летний драйв-тест от «Балтика 0»"/>
    <meta property="og:description" content="Пройди экспресс-тест от «Балтика 0» – и узнай, каким словом тебя «проводят» другие водители!"/>
    <meta property="og:url" content="http://baltika0.by"/>
    <meta property="og:image" content="/bottles.png"/>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/vendor/svg4everybody.legacy.min.js"></script>
    <script src="js/vendor/svg4everybody.min.js"></script>
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
    <div class="page-wrapper workarea">
        <div class="chisel">
            <div class="logo logo--desktop">
                <img src="assets/img/logo/baltica.svg" alt="лого">
          </div>
        </div>
        <header class="page-header">
            <div class="page-container">
                <div class="logo logo--mobile">
                   <a href="index.php"><img src="assets/img/logo/baltica.svg" alt="лого"></a>
                </div>
                <h1>Балтика 0 Рулит</h1>
            </div>
        </header>
        <main class="page-content">
            <div class="page-container">
                <section class="greeting">
                    <h2 class="greeting__title">
                    	Летний драйв-тест от «Балтика 0»
					</h2>
					<div class="start_visual"></div>
                    <p class="greeting__text">				
                        <span class="greeting__text-top">
                        Лето – лучшая пора для путешествий. Везде нужно успеть: на дачу, в лес, на озеро. Без авто здесь точно не обойтись, как и без правил дорожного движения.
                        </span>
						<p>Пройди экспресс-тест от «Балтика 0» – и узнай, каким словом тебя «проводят» другие водители!</p>
                    </p>
                    <a href="testing.php" class="btn greeting__btn">Начать тест</a>
					<div class="tag"><small>* «Настоящий тест не является средством информационного обеспечения в сфере безопасности дорожного движения и не затрагивает её.» ОАО&nbsp;«Пивзавод Оливария» УНП 100128525</small></div>
                </section>
                <?/*?> <div class="dangerous-mobile">
                Чрезмерное употребление пива вредит здоровью
            </div><?*/?>
            </div>

        </main>

         <div class="bottle"></div>
        <div class="dangerous"></div>
    </div>
    <div class="overlay"></div>
    <div class="age-gate">
       
        <h2 class="age-gate__title">Вам уже исполнилось 18 лет?</h2>
        <form action="#" class="age-gate__wrapper" method="post">
            <div class="age-gate__item">
                 <label class="age-gate__yes" for="yes">Да</label>
                 <input type="radio" name="age" value="yes" id="yes">
            </div>
            <div class="age-gate__item">
                  <label class="age-gate__no" for="no">Нет</label>
                  <input type="radio" name="age" value="no" id="no">
            </div>
        </form>
        <div class="age-gate__answer-no">У тебя всё ещё впереди!</div>
    </div>
    <div class="alert">
        <span class="alert__text">Для просмотра переверните устройство</span>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/1.5.3/loadingoverlay.min.js"></script>
    <script src="js/main.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97815410-5', 'auto');
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

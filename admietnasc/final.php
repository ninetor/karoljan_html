<?php
$params = require('params.php');
require('engine.php');
$resultsTextArray=require('results.php');
$results = isset($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['RESULTS'])
    ? $_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['RESULTS']
    : 0;
$results = round(($results / 6) * 100);

$finalArray=array();

foreach($resultsTextArray as $key=> $res){
   if($results >= $res['percent_min'] AND $results <= $res['percent_max']){
       $finalArray=$res;

   }
}

$finalArray['slogan']=str_replace("[[##percent##]]", $results, $finalArray['slogan']);
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
        <script>window.results = <?=$results?>;</script>
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
    <body class="layout layout--soc">
        <div class="page-wrapper">
            <div class="page-header page-header--padding">
                <div class="page-container">
                    <div class="intro">
                        <p class="intro__text">
                            <strong>
                                Дзякуй за адказы!
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <main class="page-content">
                <div class="page-content__wrapper">
                    <div class="page-container">
                        <section class="socials-block">
                            <p class="socials-block__text">
                                Цяпер выбераце вашу сац.сетку, каб даведацца пра вынікі
                            </p>
                            <div class="socials-block__wrapper">
                                <a href="#" class="socials-block__icon fb-login" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="70" viewBox="0 0 28.031 61.969">
                                        <path class="icon-bg" d="M587.888,318.955h-8.313v31.052H566.981V318.955h-5.99V308.038h5.99v-7.061c0-5.049,2.351-12.959,12.708-12.959l9.327,0.041v10.593h-6.768c-1.112,0-2.673.567-2.673,2.974v6.425h9.417Zm0,0" transform="translate(-561 -288.031)" />
                                    </svg>
                                </a>
                                <a href="#" class="socials-block__icon vk-login" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="40" viewBox="0 0 68.375 38.938">
                                        <path class="icon-bg" d="M745.08,340.16h4.088a3.44,3.44,0,0,0,1.863-.814,2.994,2.994,0,0,0,.563-1.793s-0.082-5.476,2.466-6.281c2.511-.8,5.729,5.29,9.148,7.63a6.472,6.472,0,0,0,4.547,1.384l9.13-.126s4.777-.294,2.511-4.045c-0.186-.308-1.319-2.775-6.791-7.843-5.725-5.3-4.959-4.449,1.94-13.626,4.2-5.589,5.88-9,5.358-10.462-0.5-1.394-3.589-1.023-3.589-1.023l-10.287.063a2.35,2.35,0,0,0-1.328.231,2.841,2.841,0,0,0-.906,1.1,59.2,59.2,0,0,1-3.8,8c-4.578,7.767-6.409,8.173-7.158,7.694-1.74-1.127-1.305-4.516-1.305-6.923,0-7.522,1.143-10.658-2.226-11.468a17.461,17.461,0,0,0-4.8-.475c-3.671-.04-6.776.009-8.535,0.869-1.17.57-2.072,1.847-1.524,1.918a4.628,4.628,0,0,1,3.038,1.526c1.052,1.43,1.016,4.642,1.016,4.642s0.607,8.857-1.415,9.956c-1.387.757-3.287-.788-7.371-7.829a65.569,65.569,0,0,1-3.668-7.593,3.051,3.051,0,0,0-.847-1.141,4.276,4.276,0,0,0-1.583-.637l-9.769.063a3.334,3.334,0,0,0-2.008.679,2.132,2.132,0,0,0-.036,1.737s7.648,17.866,16.31,26.868c7.943,8.257,16.965,7.715,16.965,7.715h0Zm0,0" transform="translate(-711.625 -301.375)" />
                                    </svg>
                                </a>
                            </div>
                        </section>
                        <!-- <a href="#" class="btn">Даведацца вынікі тэсту</a> -->
                    </div>
                </div>
            </main>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="static/js/interface.js"></script>
        <script src="https://vk.com/js/api/openapi.js?146" type="text/javascript"></script>
        <script type="text/javascript">
            window.vk = {
                clientId    : '<?=$params['vk']['clientId']?>',
            };
            VK.init({
                apiId: window.vk.clientId
            });
            window.fb = {
                clientId    : '<?=$params['fb']['clientId']?>',
            };
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : window.fb.clientId,
                    cookie     : true,  // enable cookies to allow the server to access the session
                    xfbml      : true,  // parse social plugins on this page
                    version    : 'v2.9' // use graph api version 2.8
                });
            };
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/ru_RU/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script src="static/js/auth.js"></script>
		<?$useragent=$_SERVER['HTTP_USER_AGENT'];
		if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
		?>
        <form id="submit-form" action="../in.html" method="POST">
		<?}else{?>
		<form id="submit-form" action="../mobile.html" method="POST">	
		<?}?>
            <input id="results-input" type="hidden" name="results" value="<?=$results?>">
            <input id="avatar-input" type="hidden" name="avatar">
            <input id="slogan-input" type="hidden" name="slogan" value="<?=$finalArray['slogan']?>">
            <input id="text-input" type="hidden" name="text" value="<?=$finalArray['text']?>">
        </form>
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

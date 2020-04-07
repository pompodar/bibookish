<?php
   include("php/config.php");
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select name from users where name = '$user_check' and active = 1");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: php/login.php");
      die();
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156548239-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156548239-1');
</script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Wilde The Devoted Friend - книжка-білінгва: англійською з паралельним українським перекладом (читати онлайн)</title>
        <meta name="keywords" content="Wilde The Devoted Friend, книжка-білінгва, англійською, українською, з паралельним перекладом, читати онлайн, безкоштовно" />
        	  <meta name="description" content="Wilde The Devoted Friend, Уайльд Відданий товариш - книжка-білінгва: англійською з паралельним українським перекладом (читати онлайн)" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
                integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
                crossorigin="anonymous">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link
		href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Bad+Script|Caveat:700|EB+Garamond:500i|Gabriela|Kurale|Marck+Script|Neucha|Pattaya|Ruslan+Display&amp;subset=cyrillic"
		rel="stylesheet">
</head>

<body>

        <a href="index.html">
                <p id="logo"><i id="logo1" class="fas fa-language"></i></p></a>
                <p id="name"></p>

                <main id="container" tabindex="1">
                        <div id="loader"></div>

                        <section>



                                <p class="english"><span class="engl">One</span> <span class="engl">morning</span> <span
                                                class="engl">the</span> <span class="engl">old</span> <span
                                                class="engl">Water-rat</span> <span class="engl">put</span> <span
                                                class="engl">his</span> <span class="engl">head</span> <span
                                                class="engl">out</span> <span class="engl">of</span> <span
                                                class="engl">his</span> <span class="engl">hole.</span> <span
                                                class="engl">He</span> <span class="engl">had</span> <span
                                                class="engl">bright</span> <span class="engl">beady</span> <span
                                                class="engl">eyes</span> <span class="engl">and</span> <span
                                                class="engl">stiff</span> <span class="engl">grey</span> <span
                                                class="engl">whiskers,</span> <span class="engl">and</span> <span
                                                class="engl">his</span> <span class="engl">tail</span> <span
                                                class="engl">was</span> <span class="engl">like</span> <span
                                                class="engl">a</span> <span class="engl">long</span> <span
                                                class="engl">bit</span> <span class="engl">of</span> <span
                                                class="engl">black</span> <span class="engl">india-rubber.</span></p> 
                                                
                                                <p class="english"><span
                                                class="engl">The</span> <span class="engl">little</span> <span
                                                class="engl">ducks</span> <span class="engl">were</span> <span
                                                class="engl">swimming</span> <span class="engl">about</span> <span
                                                class="engl">in</span> <span class="engl">the</span> <span
                                                class="engl">pond,</span> <span class="engl">looking</span> <span
                                                class="engl">just</span> <span class="engl">like</span> <span
                                                class="engl">a</span> <span class="engl">lot</span> <span
                                                class="engl">of</span>
                                        <span class="engl">yellow</span> <span class="engl">canaries,</span> <span
                                                class="engl">and</span> <span class="engl">their</span> <span
                                                class="engl">mother,</span> <span class="engl">who</span> <span
                                                class="engl">was</span> <span class="engl">pure</span> <span
                                                class="engl">white</span> <span class="engl">with</span> <span
                                                class="engl">real</span> <span class="engl">red</span> <span
                                                class="engl">legs,</span> <span class="engl">was</span> <span
                                                class="engl">trying</span> <span class="engl">to</span> <span
                                                class="engl">teach</span> <span class="engl">them</span> <span
                                                class="engl">how</span> <span class="engl">to</span> <span
                                                class="engl">stand</span> <span class="engl">on</span> <span
                                                class="engl">their</span> <span class="engl">heads</span> <span
                                                class="engl">in</span> <span class="engl">the</span> <span
                                                class="engl">water.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'You</span> <span
                                                class="engl">will</span> <span class="engl">never</span> <span
                                                class="engl">be</span> <span class="engl">in</span> <span
                                                class="engl">the</span> <span class="engl">best</span> <span
                                                class="engl">society</span> <span class="engl">unless</span> <span
                                                class="engl">you</span> <span class="engl">can</span> <span
                                                class="engl">stand</span> <span class="engl">on</span> <span
                                                class="engl">your</span> <span class="engl">heads,'</span> <span
                                                class="engl">she</span> <span class="engl">kept</span> <span
                                                class="engl">saying</span> <span class="engl">to</span> <span
                                                class="engl">them;</span> <span class="engl">and</span> <span
                                                class="engl">every</span> <span class="engl">now</span> <span
                                                class="engl">and</span> <span class="engl">then</span> <span
                                                class="engl">she</span> <span class="engl">showed</span> <span
                                                class="engl">them</span> <span class="engl">how</span> <span
                                                class="engl">it</span> <span class="engl">was</span> <span
                                                class="engl">done.</span> <span class="engl">But</span> <span
                                                class="engl">the</span> <span class="engl">little</span> <span
                                                class="engl">ducks</span> <span class="engl">paid</span> <span
                                                class="engl">no</span> <span class="engl">attention</span> <span
                                                class="engl">to</span> <span class="engl">her.</span> <span
                                                class="engl">They</span> <span class="engl">were</span> <span
                                                class="engl">so</span> <span class="engl">young</span> <span
                                                class="engl">that</span> <span class="engl">they</span> <span
                                                class="engl">did</span> <span class="engl">not</span> <span
                                                class="engl">know</span> <span class="engl">what</span> <span
                                                class="engl">an</span> <span class="engl">advantage</span> <span
                                                class="engl">it</span> <span class="engl">is</span> <span
                                                class="engl">to</span> <span class="engl">be</span>
                                        <span class="engl">in</span> <span class="engl">society</span> <span
                                                class="engl">at</span> <span class="engl">all.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'What</span> <span
                                                class="engl">disobedient</span> <span class="engl">children!'</span>
                                        <span class="engl">cried</span>
                                        <span class="engl">the</span> <span class="engl">old</span> <span
                                                class="engl">Water-rat;</span> <span class="engl">'they</span> <span
                                                class="engl">really</span> <span class="engl">deserve</span> <span
                                                class="engl">to</span> <span class="engl">be</span> <span
                                                class="engl">drowned.'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Nothing</span> <span
                                                class="engl">of</span> <span class="engl">the</span> <span
                                                class="engl">kind,'</span> <span class="engl">answered</span> <span
                                                class="engl">the</span> <span class="engl">Duck,</span> <span
                                                class="engl">'every</span> <span class="engl">one</span> <span
                                                class="engl">must</span> <span class="engl">make</span> <span
                                                class="engl">a</span> <span class="engl">beginning,</span> <span
                                                class="engl">and</span> <span class="engl">parents</span> <span
                                                class="engl">cannot</span> <span class="engl">be</span> <span
                                                class="engl">too</span> <span class="engl">patient.'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Ah!</span> <span
                                                class="engl">I</span> <span class="engl">know</span> <span
                                                class="engl">nothing</span> <span class="engl">about</span> <span
                                                class="engl">the</span> <span class="engl">feelings</span> <span
                                                class="engl">of</span> <span class="engl">parents,'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Water-rat;</span> <span class="engl">'I</span> <span
                                                class="engl">am</span> <span class="engl">not</span> <span
                                                class="engl">a</span> <span class="engl">family</span> <span
                                                class="engl">man.</span> <span class="engl">In</span> <span
                                                class="engl">fact,</span> <span class="engl">I</span> <span
                                                class="engl">have</span> <span class="engl">never</span> <span
                                                class="engl">been</span> <span class="engl">married,</span> <span
                                                class="engl">and</span> <span class="engl">I</span> <span
                                                class="engl">never</span> <span class="engl">intend</span> <span
                                                class="engl">to</span> <span class="engl">be.</span> <span
                                                class="engl">Love</span> <span class="engl">is</span> <span
                                                class="engl">all</span> <span class="engl">very</span> <span
                                                class="engl">well</span> <span class="engl">in</span> <span
                                                class="engl">its</span> <span class="engl">way,</span> <span
                                                class="engl">but</span> <span class="engl">friendship</span> <span
                                                class="engl">is</span> <span class="engl">much</span> <span
                                                class="engl">higher.</span> <span class="engl">Indeed,</span> <span
                                                class="engl">I</span> <span class="engl">know</span> <span
                                                class="engl">of</span> <span class="engl">nothing</span> <span
                                                class="engl">in</span> <span class="engl">the</span> <span
                                                class="engl">world</span> <span class="engl">that</span> <span
                                                class="engl">is</span> <span class="engl">either</span> <span
                                                class="engl">nobler</span> <span class="engl">or</span> <span
                                                class="engl">rarer</span> <span class="engl">than</span> <span
                                                class="engl">a</span> <span class="engl">devoted</span> <span
                                                class="engl">friendship.'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'And</span> <span
                                                class="engl">what,</span> <span class="engl">pray,</span> <span
                                                class="engl">is</span> <span class="engl">your</span> <span
                                                class="engl">idea</span> <span class="engl">of</span> <span
                                                class="engl">the</span> <span class="engl">duties</span> <span
                                                class="engl">of</span> <span class="engl">a</span> <span
                                                class="engl">devoted</span> <span class="engl">friend?'</span> <span
                                                class="engl">asked</span> <span class="engl">a</span> <span
                                                class="engl">Green</span> <span class="engl">Linnet,</span> <span
                                                class="engl">who</span> <span class="engl">was</span> <span
                                                class="engl">sitting</span> <span class="engl">in</span> <span
                                                class="engl">a</span> <span class="engl">willow-tree</span> <span
                                                class="engl">hard</span> <span class="engl">by,</span> <span
                                                class="engl">and</span> <span class="engl">had</span> <span
                                                class="engl">overheard</span> <span class="engl">the</span> <span
                                                class="engl">conversation.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Yes,</span> <span
                                                class="engl">that</span> <span class="engl">is</span> <span
                                                class="engl">just</span> <span class="engl">what</span> <span
                                                class="engl">I</span> <span class="engl">want</span> <span
                                                class="engl">to</span> <span class="engl">know,'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Duck,</span> <span class="engl">and</span> <span
                                                class="engl">she</span> <span class="engl">swam</span> <span
                                                class="engl">away</span> <span class="engl">to</span> <span
                                                class="engl">the</span> <span class="engl">end</span> <span
                                                class="engl">of</span> <span class="engl">the</span> <span
                                                class="engl">pond,</span> <span class="engl">and</span> <span
                                                class="engl">stood</span> <span class="engl">upon</span> <span
                                                class="engl">her</span> <span class="engl">head,</span> <span
                                                class="engl">in</span> <span class="engl">order</span> <span
                                                class="engl">to</span> <span class="engl">give</span> <span
                                                class="engl">her</span> <span class="engl">children</span> <span
                                                class="engl">a</span> <span class="engl">good</span> <span
                                                class="engl">example.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'What</span> <span
                                                class="engl">a</span> <span class="engl">silly</span> <span
                                                class="engl">question!'</span> <span class="engl">cried</span> <span
                                                class="engl">the</span> <span class="engl">Water-rat.</span> <span
                                                class="engl">'I</span> <span class="engl">should</span> <span
                                                class="engl">expect</span> <span class="engl">my</span> <span
                                                class="engl">devoted</span> <span class="engl">friend</span> <span
                                                class="engl">to</span> <span class="engl">be</span> <span
                                                class="engl">devoted</span> <span class="engl">to</span> <span
                                                class="engl">me,</span> <span class="engl">of</span> <span
                                                class="engl">course.'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'And</span> <span
                                                class="engl">what</span> <span class="engl">would</span> <span
                                                class="engl">you</span> <span class="engl">do</span> <span
                                                class="engl">in</span> <span class="engl">return?'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">little</span> <span class="engl">bird,</span> <span
                                                class="engl">swinging</span> <span class="engl">upon</span> <span
                                                class="engl">a</span> <span class="engl">silver</span> <span
                                                class="engl">spray,</span> <span class="engl">and</span> <span
                                                class="engl">flapping</span> <span class="engl">his</span> <span
                                                class="engl">tiny</span> <span class="engl">wings.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'I</span> <span
                                                class="engl">don't</span> <span class="engl">understand</span> <span
                                                class="engl">you,'</span> <span class="engl">answered</span> <span
                                                class="engl">the</span> <span class="engl">Water-rat.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Let</span> <span
                                                class="engl">me</span> <span class="engl">tell</span> <span
                                                class="engl">you</span> <span class="engl">a</span> <span
                                                class="engl">story</span> <span class="engl">on</span> <span
                                                class="engl">the</span> <span class="engl">subject,'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Linnet.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Is</span> <span
                                                class="engl">the</span> <span class="engl">story</span> <span
                                                class="engl">about</span> <span class="engl">me?'</span> <span
                                                class="engl">asked</span> <span class="engl">the</span> <span
                                                class="engl">Water-rat.</span> <span class="engl">If</span> <span
                                                class="engl">so,</span> <span class="engl">I</span>
                                        <span class="engl">will</span> <span class="engl">listen</span> <span
                                                class="engl">to</span> <span class="engl">it,</span> <span
                                                class="engl">for</span> <span class="engl">I</span> <span
                                                class="engl">am</span>
                                        <span class="engl">extremely</span> <span class="engl">fond</span> <span
                                                class="engl">of</span> <span class="engl">fiction.'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'It</span> <span
                                                class="engl">is</span> <span class="engl">applicable</span> <span
                                                class="engl">to</span> <span class="engl">you,'</span> <span
                                                class="engl">answered</span> <span class="engl">the</span> <span
                                                class="engl">Linnet;</span> <span class="engl">and</span> <span
                                                class="engl">he</span> <span class="engl">flew</span> <span
                                                class="engl">down,</span> <span class="engl">and</span> <span
                                                class="engl">alighting</span> <span class="engl">upon</span> <span
                                                class="engl">the</span> <span class="engl">bank,</span> <span
                                                class="engl">he</span> <span class="engl">told</span> <span
                                                class="engl">the</span> <span class="engl">story</span> <span
                                                class="engl">of</span> <span class="engl">The</span> <span
                                                class="engl">Devoted</span> <span class="engl">Friend.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Once</span> <span
                                                class="engl">upon</span> <span class="engl">a</span> <span
                                                class="engl">time,'</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Linnet,</span> <span
                                                class="engl">'there</span> <span class="engl">was</span> <span
                                                class="engl">an</span> <span class="engl">honest</span> <span
                                                class="engl">little</span> <span class="engl">fellow</span> <span
                                                class="engl">named</span> <span class="engl">Hans.'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Was</span> <span
                                                class="engl">he</span> <span class="engl">very</span> <span
                                                class="engl">distinguished?'</span> <span class="engl">asked</span>
                                        <span class="engl">the</span> <span class="engl">Water-rat.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'No,'</span> <span
                                                class="engl">answered</span> <span class="engl">the</span> <span
                                                class="engl">Linnet,</span> <span class="engl">'I</span> <span
                                                class="engl">don't</span> <span class="engl">think</span> <span
                                                class="engl">he</span> <span class="engl">was</span> <span
                                                class="engl">distinguished</span> <span class="engl">at</span> <span
                                                class="engl">all,</span> <span class="engl">except</span> <span
                                                class="engl">for</span> <span class="engl">his</span> <span
                                                class="engl">kind</span> <span class="engl">heart,</span> <span
                                                class="engl">and</span> <span class="engl">his</span> <span
                                                class="engl">funny</span> <span class="engl">round</span> <span
                                                class="engl">good-humoured</span> <span class="engl">face.</span> <span
                                                class="engl">He</span> <span class="engl">lived</span> <span
                                                class="engl">in</span> <span class="engl">a</span> <span
                                                class="engl">tiny</span> <span class="engl">cottage</span> <span
                                                class="engl">all</span> <span class="engl">by</span> <span
                                                class="engl">himself,</span> <span class="engl">and</span> <span
                                                class="engl">every</span> <span class="engl">day</span> <span
                                                class="engl">he</span> <span class="engl">worked</span> <span
                                                class="engl">in</span> <span class="engl">his</span> <span
                                                class="engl">garden.</span> <span class="engl">In</span> <span
                                                class="engl">all</span> <span class="engl">the</span> <span
                                                class="engl">country-side</span> <span class="engl">there</span> <span
                                                class="engl">was</span> <span class="engl">no</span> <span
                                                class="engl">garden</span> <span class="engl">so</span> <span
                                                class="engl">lovely</span> <span class="engl">as</span> <span
                                                class="engl">his.</span> <span class="engl">Sweet-william</span> <span
                                                class="engl">grew</span> <span class="engl">there,</span> <span
                                                class="engl">and</span> <span class="engl">Gilly-flowers,</span> <span
                                                class="engl">and</span> <span class="engl">Shepherds'-purses,</span>
                                        <span class="engl">and</span> <span class="engl">Fair-maids</span> <span
                                                class="engl">of</span> <span class="engl">France.</span> <span
                                                class="engl">There</span> <span class="engl">were</span> <span
                                                class="engl">damask</span> <span class="engl">Roses,</span> <span
                                                class="engl">and</span> <span class="engl">yellow</span> <span
                                                class="engl">Roses,</span> <span class="engl">lilac</span> <span
                                                class="engl">Crocuses,</span> <span class="engl">and</span> <span
                                                class="engl">gold,</span> <span class="engl">purple</span> <span
                                                class="engl">Violets</span> <span class="engl">and</span> <span
                                                class="engl">white.</span> <span class="engl">Columbine</span> <span
                                                class="engl">and</span> <span class="engl">Ladysmock,</span> <span
                                                class="engl">Marjoram</span> <span class="engl">and</span> <span
                                                class="engl">Wild</span> <span class="engl">Basil,</span> <span
                                                class="engl">the</span> <span class="engl">Cowslip</span> <span
                                                class="engl">and</span> <span class="engl">the</span> <span
                                                class="engl">Flower-de-luce,</span> <span class="engl">the</span> <span
                                                class="engl">Daffodil</span> <span class="engl">and</span> <span
                                                class="engl">the</span> <span class="engl">Clove-Pink</span> <span
                                                class="engl">bloomed</span> <span class="engl">or</span> <span
                                                class="engl">blossomed</span> <span class="engl">in</span> <span
                                                class="engl">their</span> <span class="engl">proper</span> <span
                                                class="engl">order</span> <span class="engl">as</span> <span
                                                class="engl">the</span> <span class="engl">months</span> <span
                                                class="engl">went</span> <span class="engl">by,</span> <span
                                                class="engl">one</span> <span class="engl">flower</span> <span
                                                class="engl">taking</span> <span class="engl">another</span> <span
                                                class="engl">flower's</span> <span class="engl">place,</span> <span
                                                class="engl">so</span> <span class="engl">that</span> <span
                                                class="engl">there</span> <span class="engl">were</span> <span
                                                class="engl">always</span> <span class="engl">beautiful</span> <span
                                                class="engl">things</span> <span class="engl">to</span> <span
                                                class="engl">look</span> <span class="engl">at,</span> <span
                                                class="engl">and</span> <span class="engl">pleasant</span> <span
                                                class="engl">odours</span> <span class="engl">to</span> <span
                                                class="engl">smell.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Little</span> <span
                                                class="engl">Hans</span> <span class="engl">had</span> <span
                                                class="engl">a</span> <span class="engl">great</span> <span
                                                class="engl">many</span> <span class="engl">friends,</span> <span
                                                class="engl">but</span> <span class="engl">the</span> <span
                                                class="engl">most</span> <span class="engl">devoted</span> <span
                                                class="engl">friend</span> <span class="engl">of</span> <span
                                                class="engl">all</span> <span class="engl">was</span> <span
                                                class="engl">big</span> <span class="engl">Hugh</span> <span
                                                class="engl">the</span> <span class="engl">Miller.</span> <span
                                                class="engl">Indeed,</span> <span class="engl">so</span> <span
                                                class="engl">devoted</span> <span class="engl">was</span> <span
                                                class="engl">the</span> <span class="engl">rich</span> <span
                                                class="engl">Miller</span> <span class="engl">to</span> <span
                                                class="engl">little</span> <span class="engl">Hans,</span> <span
                                                class="engl">that</span> <span class="engl">he</span> <span
                                                class="engl">[Hans]</span> <span class="engl">would</span> <span
                                                class="engl">never</span> <span class="engl">go</span> <span
                                                class="engl">by</span> <span class="engl">his</span> <span
                                                class="engl">garden</span> <span class="engl">without</span> <span
                                                class="engl">leaning</span> <span class="engl">over</span> <span
                                                class="engl">the</span> <span class="engl">wall</span> <span
                                                class="engl">and</span> <span class="engl">plucking</span> <span
                                                class="engl">a</span> <span class="engl">large</span> <span
                                                class="engl">nosegay,</span> <span class="engl">or</span> <span
                                                class="engl">a</span> <span class="engl">handful</span> <span
                                                class="engl">of</span> <span class="engl">sweet</span> <span
                                                class="engl">herbs,</span> <span class="engl">or</span> <span
                                                class="engl">filling</span> <span class="engl">his</span> <span
                                                class="engl">pockets</span> <span class="engl">with</span> <span
                                                class="engl">plums</span> <span class="engl">and</span> <span
                                                class="engl">cherries</span> <span class="engl">if</span> <span
                                                class="engl">it</span> <span class="engl">was</span> <span
                                                class="engl">the</span> <span class="engl">fruit</span> <span
                                                class="engl">season.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Real</span> <span
                                                class="engl">friends</span> <span class="engl">should</span> <span
                                                class="engl">have</span> <span class="engl">everything</span> <span
                                                class="engl">in</span> <span class="engl">common,"</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">used</span> <span class="engl">to</span> <span
                                                class="engl">say,</span> <span class="engl">and</span> <span
                                                class="engl">little</span> <span class="engl">Hans</span> <span
                                                class="engl">nodded</span> <span class="engl">and</span> <span
                                                class="engl">smiled,</span> <span class="engl">and</span> <span
                                                class="engl">felt</span> <span class="engl">very</span> <span
                                                class="engl">proud</span> <span class="engl">of</span> <span
                                                class="engl">having</span> <span class="engl">a</span> <span
                                                class="engl">friend</span> <span class="engl">with</span> <span
                                                class="engl">such</span> <span class="engl">noble</span> <span
                                                class="engl">ideas.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Sometimes,</span> <span
                                                class="engl">indeed,</span> <span class="engl">the</span> <span
                                                class="engl">neighbours</span> <span class="engl">thought</span> <span
                                                class="engl">it</span> <span class="engl">strange</span> <span
                                                class="engl">that</span> <span class="engl">the</span> <span
                                                class="engl">rich</span> <span class="engl">Miller</span> <span
                                                class="engl">never</span> <span class="engl">gave</span> <span
                                                class="engl">little</span> <span class="engl">Hans</span> <span
                                                class="engl">anything</span> <span class="engl">in</span> <span
                                                class="engl">return,</span> <span class="engl">though</span> <span
                                                class="engl">he</span> <span class="engl">had</span> <span
                                                class="engl">a</span> <span class="engl">hundred</span> <span
                                                class="engl">sacks</span> <span class="engl">of</span> <span
                                                class="engl">flour</span> <span class="engl">stored</span> <span
                                                class="engl">away</span> <span class="engl">in</span> <span
                                                class="engl">his</span> <span class="engl">mill,</span> <span
                                                class="engl">and</span> <span class="engl">six</span> <span
                                                class="engl">milk</span> <span class="engl">cows,</span> <span
                                                class="engl">and</span> <span class="engl">a</span> <span
                                                class="engl">large</span> <span class="engl">stock</span> <span
                                                class="engl">of</span> <span class="engl">woolly</span> <span
                                                class="engl">sheep;</span> <span class="engl">but</span> <span
                                                class="engl">Hans</span> <span class="engl">never</span> <span
                                                class="engl">troubled</span> <span class="engl">his</span> <span
                                                class="engl">head</span> <span class="engl">about</span> <span
                                                class="engl">these</span> <span class="engl">things,</span> <span
                                                class="engl">and</span> <span class="engl">nothing</span> <span
                                                class="engl">gave</span> <span class="engl">him</span> <span
                                                class="engl">greater</span> <span class="engl">pleasure</span> <span
                                                class="engl">than</span> <span class="engl">to</span> <span
                                                class="engl">listen</span> <span class="engl">to</span> <span
                                                class="engl">all</span> <span class="engl">the</span> <span
                                                class="engl">wonderful</span> <span class="engl">things</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">used</span> <span class="engl">to</span> <span
                                                class="engl">say</span> <span class="engl">about</span> <span
                                                class="engl">the</span> <span class="engl">unselfishness</span> <span
                                                class="engl">of</span> <span class="engl">true</span> <span
                                                class="engl">friendship.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'So</span> <span
                                                class="engl">little</span> <span class="engl">Hans</span> <span
                                                class="engl">worked</span> <span class="engl">away</span> <span
                                                class="engl">in</span> <span class="engl">his</span> <span
                                                class="engl">garden.</span> <span class="engl">During</span> <span
                                                class="engl">the</span> <span class="engl">spring,</span> <span
                                                class="engl">the</span> <span class="engl">summer,</span> <span
                                                class="engl">and</span> <span class="engl">the</span> <span
                                                class="engl">autumn</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">very</span> <span
                                                class="engl">happy,</span> <span class="engl">but</span> <span
                                                class="engl">when</span> <span class="engl">the</span> <span
                                                class="engl">winter</span> <span class="engl">came,</span> <span
                                                class="engl">and</span> <span class="engl">he</span> <span
                                                class="engl">had</span> <span class="engl">no</span> <span
                                                class="engl">fruit</span> <span class="engl">or</span> <span
                                                class="engl">flowers</span> <span class="engl">to</span> <span
                                                class="engl">bring</span> <span class="engl">to</span> <span
                                                class="engl">the</span> <span class="engl">market,</span> <span
                                                class="engl">he</span> <span class="engl">suffered</span> <span
                                                class="engl">a</span> <span class="engl">good</span> <span
                                                class="engl">deal</span> <span class="engl">from</span> <span
                                                class="engl">cold</span> <span class="engl">and</span> <span
                                                class="engl">hunger,</span> <span class="engl">and</span> <span
                                                class="engl">often</span> <span class="engl">had</span> <span
                                                class="engl">to</span> <span class="engl">go</span> <span
                                                class="engl">to</span> <span class="engl">bed</span> <span
                                                class="engl">without</span> <span class="engl">any</span> <span
                                                class="engl">supper</span> <span class="engl">but</span> <span
                                                class="engl">a</span> <span class="engl">few</span> <span
                                                class="engl">dried</span> <span class="engl">pears</span> <span
                                                class="engl">or</span> <span class="engl">some</span> <span
                                                class="engl">hard</span> <span class="engl">nuts.</span> <span
                                                class="engl">Jn</span> <span class="engl">the</span> <span
                                                class="engl">winter,</span> <span class="engl">also,</span> <span
                                                class="engl">he</span> <span class="engl">was</span> <span
                                                class="engl">extremely</span> <span class="engl">lonely,</span> <span
                                                class="engl">as</span> <span class="engl">the</span> <span
                                                class="engl">Miller</span> <span class="engl">never</span> <span
                                                class="engl">came</span> <span class="engl">to</span> <span
                                                class="engl">see</span> <span class="engl">him</span> <span
                                                class="engl">then.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"There</span> <span
                                                class="engl">is</span> <span class="engl">no</span> <span
                                                class="engl">good</span> <span class="engl">in</span> <span
                                                class="engl">my</span> <span class="engl">going</span> <span
                                                class="engl">to</span> <span class="engl">see</span> <span
                                                class="engl">little</span> <span class="engl">Hans</span> <span
                                                class="engl">as</span> <span class="engl">long</span> <span
                                                class="engl">as</span> <span class="engl">the</span> <span
                                                class="engl">snow</span> <span class="engl">lasts,"</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">used</span> <span class="engl">to</span> <span
                                                class="engl">say</span> <span class="engl">to</span> <span
                                                class="engl">his</span> <span class="engl">wife,</span> <span
                                                class="engl">"for</span> <span class="engl">when</span> <span
                                                class="engl">people</span> <span class="engl">are</span> <span
                                                class="engl">in</span> <span class="engl">trouble</span> <span
                                                class="engl">they</span> <span class="engl">should</span> <span
                                                class="engl">be</span> <span class="engl">left</span> <span
                                                class="engl">alone,</span> <span class="engl">and</span> <span
                                                class="engl">not</span> <span class="engl">be</span> <span
                                                class="engl">bothered</span> <span class="engl">by</span> <span
                                                class="engl">visitors.</span> <span class="engl">That</span> <span
                                                class="engl">at</span> <span class="engl">least</span> <span
                                                class="engl">is</span> <span class="engl">my</span> <span
                                                class="engl">idea</span> <span class="engl">about</span> <span
                                                class="engl">friendship,</span> <span class="engl">and</span> <span
                                                class="engl">I</span> <span class="engl">am</span>
                                        <span class="engl">sure</span> <span class="engl">I</span> <span
                                                class="engl">am</span>
                                        <span class="engl">right.</span> <span class="engl">So</span> <span
                                                class="engl">I</span> <span class="engl">shall</span> <span
                                                class="engl">wait</span> <span class="engl">till</span> <span
                                                class="engl">the</span> <span class="engl">spring</span> <span
                                                class="engl">comes,</span> <span class="engl">and</span> <span
                                                class="engl">then</span> <span class="engl">I</span> <span
                                                class="engl">shall</span> <span class="engl">pay</span> <span
                                                class="engl">him</span> <span class="engl">a</span> <span
                                                class="engl">visit,</span> <span class="engl">and</span> <span
                                                class="engl">he</span> <span class="engl">will</span> <span
                                                class="engl">be</span> <span class="engl">able</span> <span
                                                class="engl">to</span> <span class="engl">give</span> <span
                                                class="engl">me</span> <span class="engl">a</span> <span
                                                class="engl">large</span> <span class="engl">basket</span> <span
                                                class="engl">of</span> <span class="engl">primroses,</span> <span
                                                class="engl">and</span> <span class="engl">that</span> <span
                                                class="engl">will</span> <span class="engl">make</span> <span
                                                class="engl">him</span> <span class="engl">so</span> <span
                                                class="engl">happy."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">"You</span> <span
                                                class="engl">are</span> <span class="engl">certainly</span> <span
                                                class="engl">very</span> <span class="engl">thoughtful</span> <span
                                                class="engl">about</span> <span class="engl">others,"</span> <span
                                                class="engl">answered</span> <span class="engl">the</span> <span
                                                class="engl">Wife,</span> <span class="engl">as</span> <span
                                                class="engl">she</span> <span class="engl">sat</span> <span
                                                class="engl">in</span> <span class="engl">her</span> <span
                                                class="engl">comfortable</span> <span class="engl">armchair</span> <span
                                                class="engl">by</span> <span class="engl">the</span> <span
                                                class="engl">big</span> <span class="engl">pinewood</span> <span
                                                class="engl">fire;</span> <span class="engl">"very</span> <span
                                                class="engl">thoughtful</span> <span class="engl">indeed.</span> <span
                                                class="engl">It</span> <span class="engl">is</span> <span
                                                class="engl">quite</span> <span class="engl">a</span> <span
                                                class="engl">treat</span> <span class="engl">to</span> <span
                                                class="engl">hear</span> <span class="engl">you</span> <span
                                                class="engl">talk</span> <span class="engl">about</span> <span
                                                class="engl">friendship.</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">sure</span> <span
                                                class="engl">the</span> <span class="engl">clergyman</span> <span
                                                class="engl">himself</span> <span class="engl">could</span> <span
                                                class="engl">not</span> <span class="engl">say</span> <span
                                                class="engl">such</span> <span class="engl">beautiful</span> <span
                                                class="engl">things</span> <span class="engl">as</span> <span
                                                class="engl">you</span> <span class="engl">do,</span> <span
                                                class="engl">though</span> <span class="engl">he</span> <span
                                                class="engl">does</span> <span class="engl">live</span> <span
                                                class="engl">in</span> <span class="engl">a</span> <span
                                                class="engl">three-storied</span> <span class="engl">house,</span> <span
                                                class="engl">and</span> <span class="engl">wears</span> <span
                                                class="engl">a</span> <span class="engl">gold</span> <span
                                                class="engl">ring</span> <span class="engl">on</span> <span
                                                class="engl">his</span> <span class="engl">little</span> <span
                                                class="engl">finger."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"But</span> <span
                                                class="engl">could</span> <span class="engl">We</span> <span
                                                class="engl">not</span> <span class="engl">ask</span> <span
                                                class="engl">little</span> <span class="engl">Hans</span> <span
                                                class="engl">up</span> <span class="engl">here?"</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Miller's</span> <span class="engl">youngest</span> <span
                                                class="engl">son.</span> <span class="engl">"If</span> <span
                                                class="engl">poor</span> <span class="engl">Hans</span> <span
                                                class="engl">is</span> <span class="engl">in</span> <span
                                                class="engl">trouble</span> <span class="engl">I</span> <span
                                                class="engl">will</span> <span class="engl">give</span> <span
                                                class="engl">him</span> <span class="engl">half</span> <span
                                                class="engl">my</span> <span class="engl">porridge,</span> <span
                                                class="engl">and</span> <span class="engl">show</span> <span
                                                class="engl">him</span> <span class="engl">my</span> <span
                                                class="engl">white</span> <span class="engl">rabbits."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">"What</span> <span
                                                class="engl">a</span> <span class="engl">silly</span> <span
                                                class="engl">boy</span> <span class="engl">you</span> <span
                                                class="engl">are!"</span> <span class="engl">cried</span> <span
                                                class="engl">the</span> <span class="engl">Miller;</span> <span
                                                class="engl">"I</span> <span class="engl">really</span> <span
                                                class="engl">don't</span> <span class="engl">know</span> <span
                                                class="engl">what</span> <span class="engl">is</span> <span
                                                class="engl">the</span> <span class="engl">use</span> <span
                                                class="engl">of</span> <span class="engl">sending</span> <span
                                                class="engl">you</span> <span class="engl">to</span> <span
                                                class="engl">school.</span> <span class="engl">You</span> <span
                                                class="engl">seem</span> <span class="engl">not</span> <span
                                                class="engl">to</span> <span class="engl">learn</span> <span
                                                class="engl">anything.</span> <span class="engl">Why,</span> <span
                                                class="engl">if</span> <span class="engl">little</span> <span
                                                class="engl">Hans</span> <span class="engl">came</span> <span
                                                class="engl">up</span> <span class="engl">here,</span> <span
                                                class="engl">and</span> <span class="engl">saw</span> <span
                                                class="engl">our</span> <span class="engl">warm</span> <span
                                                class="engl">fire,</span> <span class="engl">and</span> <span
                                                class="engl">our</span> <span class="engl">good</span> <span
                                                class="engl">supper,</span> <span class="engl">and</span> <span
                                                class="engl">our</span> <span class="engl">great</span> <span
                                                class="engl">cask</span> <span class="engl">of</span> <span
                                                class="engl">red</span> <span class="engl">wine,</span> <span
                                                class="engl">he</span> <span class="engl">might</span> <span
                                                class="engl">get</span> <span class="engl">envious,</span> <span
                                                class="engl">and</span> <span class="engl">envy</span> <span
                                                class="engl">is</span> <span class="engl">a</span> <span
                                                class="engl">most</span> <span class="engl">terrible</span> <span
                                                class="engl">thing,</span> <span class="engl">and</span> <span
                                                class="engl">would</span> <span class="engl">spoil</span> <span
                                                class="engl">anybody's</span> <span class="engl">nature.</span> <span
                                                class="engl">I</span> <span class="engl">certainly</span> <span
                                                class="engl">will</span> <span class="engl">not</span> <span
                                                class="engl">allow</span> <span class="engl">Hans's</span> <span
                                                class="engl">nature</span> <span class="engl">to</span> <span
                                                class="engl">be</span> <span class="engl">spoiled.</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">his</span> <span class="engl">best</span> <span
                                                class="engl">friend,</span> <span class="engl">and</span> <span
                                                class="engl">I</span> <span class="engl">will</span> <span
                                                class="engl">always</span> <span class="engl">watch</span> <span
                                                class="engl">over</span> <span class="engl">him,</span> <span
                                                class="engl">and</span> <span class="engl">see</span> <span
                                                class="engl">that</span> <span class="engl">he</span> <span
                                                class="engl">is</span> <span class="engl">not</span> <span
                                                class="engl">led</span> <span class="engl">into</span> <span
                                                class="engl">any</span> <span class="engl">temptations.</span> <span
                                                class="engl">Besides,</span> <span class="engl">if</span> <span
                                                class="engl">Hans</span> <span class="engl">came</span> <span
                                                class="engl">here,</span> <span class="engl">he</span> <span
                                                class="engl">might</span> <span class="engl">ask</span> <span
                                                class="engl">me</span> <span class="engl">to</span> <span
                                                class="engl">let</span> <span class="engl">him</span> <span
                                                class="engl">have</span> <span class="engl">some</span> <span
                                                class="engl">flour</span> <span class="engl">on</span> <span
                                                class="engl">credit,</span> <span class="engl">and</span> <span
                                                class="engl">that</span> <span class="engl">I</span> <span
                                                class="engl">could</span> <span class="engl">not</span> <span
                                                class="engl">do.</span> <span class="engl">Flour</span> <span
                                                class="engl">is</span> <span class="engl">one</span> <span
                                                class="engl">thing,</span> <span class="engl">and</span> <span
                                                class="engl">friendship</span> <span class="engl">is</span> <span
                                                class="engl">another,</span> <span class="engl">and</span> <span
                                                class="engl">they</span> <span class="engl">should</span> <span
                                                class="engl">not</span> <span class="engl">be</span> <span
                                                class="engl">confused.</span> <span class="engl">Why,</span> <span
                                                class="engl">the</span> <span class="engl">words</span> <span
                                                class="engl">are</span> <span class="engl">spelt</span> <span
                                                class="engl">differently,</span> <span class="engl">and</span> <span
                                                class="engl">mean</span> <span class="engl">quite</span> <span
                                                class="engl">different</span> <span class="engl">things.</span> <span
                                                class="engl">Everybody</span>
                                        <span class="engl">can</span> <span class="engl">see</span> <span
                                                class="engl">that."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"How</span> <span
                                                class="engl">well</span> <span class="engl">you</span> <span
                                                class="engl">talk!"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Miller's</span> <span
                                                class="engl">Wife,</span> <span class="engl">pouring</span> <span
                                                class="engl">herself</span> <span class="engl">out</span> <span
                                                class="engl">a</span> <span class="engl">large</span> <span
                                                class="engl">glass</span> <span class="engl">of</span> <span
                                                class="engl">warm</span> <span class="engl">ale;</span> <span
                                                class="engl">"really</span> <span class="engl">I</span> <span
                                                class="engl">feel</span> <span class="engl">quite</span> <span
                                                class="engl">drowsy.</span> <span class="engl">It</span> <span
                                                class="engl">is</span> <span class="engl">just</span> <span
                                                class="engl">like</span> <span class="engl">being</span> <span
                                                class="engl">in</span> <span class="engl">church."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">"Lots</span> <span
                                                class="engl">of</span> <span class="engl">people</span> <span
                                                class="engl">act</span> <span class="engl">well,"</span> <span
                                                class="engl">answered</span> <span class="engl">the</span> <span
                                                class="engl">Miller;</span> <span class="engl">"but</span> <span
                                                class="engl">very</span> <span class="engl">few</span> <span
                                                class="engl">people</span> <span class="engl">talk</span> <span
                                                class="engl">well,</span> <span class="engl">which</span> <span
                                                class="engl">shows</span> <span class="engl">that</span> <span
                                                class="engl">talking</span> <span class="engl">is</span> <span
                                                class="engl">much</span> <span class="engl">the</span> <span
                                                class="engl">more</span> <span class="engl">difficult</span> <span
                                                class="engl">thing</span> <span class="engl">of</span> <span
                                                class="engl">the</span> <span class="engl">two,</span> <span
                                                class="engl">and</span> <span class="engl">much</span> <span
                                                class="engl">the</span> <span class="engl">finer</span> <span
                                                class="engl">thing</span> <span class="engl">also;"</span> <span
                                                class="engl">and</span> <span class="engl">he</span> <span
                                                class="engl">looked</span> <span class="engl">sternly</span> <span
                                                class="engl">across</span> <span class="engl">the</span> <span
                                                class="engl">table</span> <span class="engl">at</span> <span
                                                class="engl">his</span> <span class="engl">little</span> <span
                                                class="engl">son,</span> <span class="engl">who</span> <span
                                                class="engl">felt</span> <span class="engl">so</span> <span
                                                class="engl">ashamed</span> <span class="engl">of</span> <span
                                                class="engl">himself</span> <span class="engl">that</span> <span
                                                class="engl">he</span> <span class="engl">hung</span> <span
                                                class="engl">his</span> <span class="engl">head</span> <span
                                                class="engl">down,</span> <span class="engl">and</span> <span
                                                class="engl">grew</span> <span class="engl">quite</span> <span
                                                class="engl">scarlet,</span> <span class="engl">and</span> <span
                                                class="engl">began</span> <span class="engl">to</span> <span
                                                class="engl">cry</span> <span class="engl">into</span> <span
                                                class="engl">his</span> <span class="engl">tea.</span> <span
                                                class="engl">However,</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">so</span> <span
                                                class="engl">young</span> <span class="engl">that</span> <span
                                                class="engl">you</span> <span class="engl">must</span> <span
                                                class="engl">excuse</span> <span class="engl">him.'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Is</span> <span
                                                class="engl">that</span> <span class="engl">the</span> <span
                                                class="engl">end</span> <span class="engl">of</span> <span
                                                class="engl">the</span> <span class="engl">story?'</span> <span
                                                class="engl">asked</span> <span class="engl">the</span> <span
                                                class="engl">Water-rat.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Certainly</span> <span
                                                class="engl">not,'</span> <span class="engl">answered</span> <span
                                                class="engl">the</span> <span class="engl">Linnet,</span> <span
                                                class="engl">that</span> <span class="engl">is</span> <span
                                                class="engl">the</span> <span class="engl">beginning.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Then</span> <span
                                                class="engl">you</span> <span class="engl">are</span> <span
                                                class="engl">quite</span> <span class="engl">behind</span> <span
                                                class="engl">the</span> <span class="engl">age,'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Water-rat.</span> <span class="engl">'Every</span> <span
                                                class="engl">good</span> <span class="engl">story-teller</span> <span
                                                class="engl">nowadays</span> <span class="engl">starts</span> <span
                                                class="engl">with</span> <span class="engl">the</span> <span
                                                class="engl">end,</span> <span class="engl">and</span> <span
                                                class="engl">then</span> <span class="engl">goes</span> <span
                                                class="engl">on</span> <span class="engl">to</span> <span
                                                class="engl">the</span> <span class="engl">beginning,</span> <span
                                                class="engl">and</span> <span class="engl">concludes</span> <span
                                                class="engl">with</span> <span class="engl">the</span> <span
                                                class="engl">middle.</span> <span class="engl">That</span> <span
                                                class="engl">is</span> <span class="engl">the</span> <span
                                                class="engl">new</span> <span class="engl">method.</span> <span
                                                class="engl">I</span> <span class="engl">heard</span> <span
                                                class="engl">all</span> <span class="engl">about</span> <span
                                                class="engl">it</span> <span class="engl">the</span> <span
                                                class="engl">other</span> <span class="engl">day</span> <span
                                                class="engl">from</span> <span class="engl">a</span> <span
                                                class="engl">critic</span> <span class="engl">who</span> <span
                                                class="engl">was</span> <span class="engl">walking</span> <span
                                                class="engl">round</span> <span class="engl">the</span> <span
                                                class="engl">pond</span> <span class="engl">with</span> <span
                                                class="engl">a</span> <span class="engl">young</span> <span
                                                class="engl">man.</span> <span class="engl">He</span> <span
                                                class="engl">spoke</span> <span class="engl">of</span> <span
                                                class="engl">the</span> <span class="engl">matter</span> <span
                                                class="engl">at</span> <span class="engl">great</span> <span
                                                class="engl">length,</span> <span class="engl">and</span> <span
                                                class="engl">I</span> <span class="engl">am</span>
                                        <span class="engl">sure</span> <span class="engl">he</span> <span
                                                class="engl">must</span> <span class="engl">have</span> <span
                                                class="engl">been</span> <span class="engl">right,</span> <span
                                                class="engl">for</span> <span class="engl">he</span> <span
                                                class="engl">had</span> <span class="engl">blue</span> <span
                                                class="engl">spectacles</span> <span class="engl">and</span> <span
                                                class="engl">a</span> <span class="engl">bald</span> <span
                                                class="engl">head,</span> <span class="engl">and</span> <span
                                                class="engl">whenever</span> <span class="engl">the</span> <span
                                                class="engl">young</span> <span class="engl">man</span> <span
                                                class="engl">made</span> <span class="engl">any</span> <span
                                                class="engl">remark,</span> <span class="engl">he</span> <span
                                                class="engl">always</span> <span class="engl">answered</span> <span
                                                class="engl">"Pooh!"</span> <span class="engl">But</span> <span
                                                class="engl">pray</span> <span class="engl">go</span> <span
                                                class="engl">on</span> <span class="engl">with</span> <span
                                                class="engl">your</span> <span class="engl">story.</span> <span
                                                class="engl">I</span> <span class="engl">like</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">immensely.</span> <span class="engl">I</span> <span
                                                class="engl">have</span> <span class="engl">all</span> <span
                                                class="engl">kinds</span> <span class="engl">of</span> <span
                                                class="engl">beautiful</span> <span class="engl">sentiments</span> <span
                                                class="engl">myself,</span> <span class="engl">so</span> <span
                                                class="engl">there</span> <span class="engl">is</span> <span
                                                class="engl">a</span> <span class="engl">great</span> <span
                                                class="engl">sympathy</span> <span class="engl">between</span> <span
                                                class="engl">us.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Well,'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Linnet,</span> <span class="engl">hopping</span> <span
                                                class="engl">now</span> <span class="engl">on</span> <span
                                                class="engl">one</span> <span class="engl">leg</span> <span
                                                class="engl">and</span> <span class="engl">now</span> <span
                                                class="engl">on</span> <span class="engl">the</span> <span
                                                class="engl">other,</span> <span class="engl">'as</span> <span
                                                class="engl">soon</span> <span class="engl">as</span> <span
                                                class="engl">the</span> <span class="engl">winter</span> <span
                                                class="engl">was</span> <span class="engl">over,</span> <span
                                                class="engl">and</span> <span class="engl">the</span> <span
                                                class="engl">primroses</span> <span class="engl">began</span> <span
                                                class="engl">to</span> <span class="engl">open</span> <span
                                                class="engl">their</span> <span class="engl">pale</span> <span
                                                class="engl">yellow</span> <span class="engl">stars,</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">said</span> <span class="engl">to</span> <span
                                                class="engl">his</span> <span class="engl">wife</span> <span
                                                class="engl">that</span> <span class="engl">he</span> <span
                                                class="engl">would</span> <span class="engl">go</span> <span
                                                class="engl">down</span> <span class="engl">and</span> <span
                                                class="engl">see</span> <span class="engl">little</span> <span
                                                class="engl">Hans.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Why,</span> <span
                                                class="engl">what</span> <span class="engl">a</span> <span
                                                class="engl">good</span> <span class="engl">heart</span> <span
                                                class="engl">you</span> <span class="engl">have!"</span> <span
                                                class="engl">cried</span> <span class="engl">his</span> <span
                                                class="engl">wife;</span> <span class="engl">"you</span> <span
                                                class="engl">are</span> <span class="engl">always</span> <span
                                                class="engl">thinking</span> <span class="engl">of</span> <span
                                                class="engl">others.</span> <span class="engl">And</span> <span
                                                class="engl">mind</span> <span class="engl">you</span> <span
                                                class="engl">take</span> <span class="engl">the</span> <span
                                                class="engl">big</span> <span class="engl">basket</span> <span
                                                class="engl">with</span> <span class="engl">you</span> <span
                                                class="engl">for</span> <span class="engl">the</span> <span
                                                class="engl">flowers."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'So</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">tied</span> <span class="engl">the</span> <span
                                                class="engl">sails</span> <span class="engl">of</span> <span
                                                class="engl">the</span> <span class="engl">windmill</span> <span
                                                class="engl">together</span> <span class="engl">with</span> <span
                                                class="engl">a</span> <span class="engl">strong</span> <span
                                                class="engl">iron</span> <span class="engl">chain,</span> <span
                                                class="engl">and</span> <span class="engl">went</span> <span
                                                class="engl">down</span> <span class="engl">the</span> <span
                                                class="engl">hill</span> <span class="engl">with</span> <span
                                                class="engl">the</span> <span class="engl">basket</span> <span
                                                class="engl">on</span> <span class="engl">his</span> <span
                                                class="engl">arm.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Good</span> <span
                                                class="engl">morning,</span> <span class="engl">little</span> <span
                                                class="engl">Hans,"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Miller.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Good</span> <span
                                                class="engl">morning,"</span> <span class="engl">said</span> <span
                                                class="engl">Hans,</span> <span class="engl">leaning</span> <span
                                                class="engl">on</span> <span class="engl">his</span> <span
                                                class="engl">spade,</span> <span class="engl">and</span> <span
                                                class="engl">smiling</span> <span class="engl">from</span> <span
                                                class="engl">ear</span> <span class="engl">to</span> <span
                                                class="engl">ear.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"And</span> <span
                                                class="engl">how</span> <span class="engl">have</span> <span
                                                class="engl">you</span> <span class="engl">been</span> <span
                                                class="engl">all</span> <span class="engl">the</span> <span
                                                class="engl">winter?"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Miller.</span> <span
                                                class="engl">"Well,</span> <span class="engl">really,"</span> <span
                                                class="engl">cried</span> <span class="engl">Hans,</span> <span
                                                class="engl">"it</span> <span class="engl">is</span> <span
                                                class="engl">very</span> <span class="engl">good</span> <span
                                                class="engl">of</span> <span class="engl">you</span> <span
                                                class="engl">to</span> <span class="engl">ask,</span> <span
                                                class="engl">very</span> <span class="engl">good</span> <span
                                                class="engl">indeed.</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">afraid</span> <span
                                                class="engl">I</span> <span class="engl">had</span> <span
                                                class="engl">rather</span> <span class="engl">a</span> <span
                                                class="engl">hard</span> <span class="engl">time</span> <span
                                                class="engl">of</span> <span class="engl">it,</span> <span
                                                class="engl">but</span> <span class="engl">now</span> <span
                                                class="engl">the</span> <span class="engl">spring</span> <span
                                                class="engl">has</span> <span class="engl">come,</span> <span
                                                class="engl">and</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">quite</span> <span
                                                class="engl">happy,</span> <span class="engl">and</span> <span
                                                class="engl">all</span> <span class="engl">my</span> <span
                                                class="engl">flowers</span> <span class="engl">are</span> <span
                                                class="engl">doing</span> <span class="engl">well."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"We</span> <span
                                                class="engl">often</span> <span class="engl">talked</span> <span
                                                class="engl">of</span> <span class="engl">you</span> <span
                                                class="engl">during</span> <span class="engl">the</span> <span
                                                class="engl">winter,</span> <span class="engl">Hans,"</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">"and</span> <span
                                                class="engl">wondered</span> <span class="engl">how</span> <span
                                                class="engl">you</span> <span class="engl">were</span> <span
                                                class="engl">getting</span> <span class="engl">on."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"That</span> <span
                                                class="engl">was</span> <span class="engl">kind</span> <span
                                                class="engl">of</span> <span class="engl">you,"</span> <span
                                                class="engl">said</span> <span class="engl">Hans;</span> <span
                                                class="engl">"I</span> <span class="engl">was</span> <span
                                                class="engl">half</span> <span class="engl">afraid</span> <span
                                                class="engl">you</span> <span class="engl">had</span> <span
                                                class="engl">forgotten</span> <span class="engl">me."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Hans,</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">surprised</span> <span class="engl">at</span> <span
                                                class="engl">you,"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Miller;</span> <span
                                                class="engl">"friendship</span> <span class="engl">never</span> <span
                                                class="engl">forgets.</span> <span class="engl">That</span> <span
                                                class="engl">is</span> <span class="engl">the</span> <span
                                                class="engl">wonderful</span> <span class="engl">thing</span> <span
                                                class="engl">about</span> <span class="engl">it,</span> <span
                                                class="engl">but</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">afraid</span> <span
                                                class="engl">you</span> <span class="engl">don't</span> <span
                                                class="engl">understand</span> <span class="engl">the</span> <span
                                                class="engl">poetry</span> <span class="engl">of</span> <span
                                                class="engl">life.</span> <span class="engl">How</span> <span
                                                class="engl">lovely</span> <span class="engl">your</span> <span
                                                class="engl">primroses</span> <span class="engl">are</span> <span
                                                class="engl">looking,</span> <span class="engl">by-the-by!"</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"They</span> <span
                                                class="engl">are</span> <span class="engl">certainly</span> <span
                                                class="engl">very</span> <span class="engl">lovely,"</span> <span
                                                class="engl">said</span> <span class="engl">Hans,</span> <span
                                                class="engl">"and</span> <span class="engl">it</span> <span
                                                class="engl">is</span> <span class="engl">a</span>
                                        <span class="engl">most</span> <span class="engl">lucky</span> <span
                                                class="engl">thing</span> <span class="engl">for</span> <span
                                                class="engl">me</span> <span class="engl">that</span> <span
                                                class="engl">I</span> <span class="engl">have</span> <span
                                                class="engl">so</span> <span class="engl">many.</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">going</span> <span class="engl">to</span> <span
                                                class="engl">bring</span> <span class="engl">them</span> <span
                                                class="engl">into</span> <span class="engl">the</span> <span
                                                class="engl">market</span> <span class="engl">and</span> <span
                                                class="engl">sell</span> <span class="engl">them</span> <span
                                                class="engl">to</span> <span class="engl">the</span> <span
                                                class="engl">Burgomaster's</span> <span class="engl">daughter,</span>
                                        <span class="engl">and</span> <span class="engl">buy</span> <span
                                                class="engl">back</span> <span class="engl">my</span> <span
                                                class="engl">wheelbarrow</span> <span class="engl">with</span> <span
                                                class="engl">the</span> <span class="engl">money."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Buy</span> <span
                                                class="engl">back</span> <span class="engl">your</span> <span
                                                class="engl">wheelbarrow?</span> <span class="engl">You</span> <span
                                                class="engl">don't</span> <span class="engl">mean</span> <span
                                                class="engl">to</span> <span class="engl">say</span> <span
                                                class="engl">you</span> <span class="engl">have</span> <span
                                                class="engl">sold</span> <span class="engl">it?</span> <span
                                                class="engl">What</span> <span class="engl">a</span> <span
                                                class="engl">very</span> <span class="engl">stupid</span> <span
                                                class="engl">thing</span> <span class="engl">to</span> <span
                                                class="engl">do!"</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Well,</span> <span
                                                class="engl">the</span> <span class="engl">fact</span> <span
                                                class="engl">is,"</span> <span class="engl">said</span> <span
                                                class="engl">Hans,</span> <span class="engl">"that</span> <span
                                                class="engl">I</span> <span class="engl">was</span> <span
                                                class="engl">obliged</span> <span class="engl">to.</span> <span
                                                class="engl">You</span> <span class="engl">see</span> <span
                                                class="engl">the</span> <span class="engl">winter</span> <span
                                                class="engl">was</span> <span class="engl">a</span> <span
                                                class="engl">very</span> <span class="engl">bad</span> <span
                                                class="engl">time</span> <span class="engl">for</span> <span
                                                class="engl">me,</span> <span class="engl">and</span> <span
                                                class="engl">I</span> <span class="engl">really</span> <span
                                                class="engl">had</span> <span class="engl">no</span> <span
                                                class="engl">money</span> <span class="engl">at</span> <span
                                                class="engl">all</span> <span class="engl">to</span> <span
                                                class="engl">buy</span> <span class="engl">bread</span> <span
                                                class="engl">with.</span> <span class="engl">So</span> <span
                                                class="engl">I</span> <span class="engl">first</span> <span
                                                class="engl">sold</span> <span class="engl">the</span> <span
                                                class="engl">silver</span> <span class="engl">buttons</span> <span
                                                class="engl">off</span> <span class="engl">my</span> <span
                                                class="engl">Sunday</span> <span class="engl">coat,</span> <span
                                                class="engl">and</span> <span class="engl">then</span> <span
                                                class="engl">I</span> <span class="engl">sold</span> <span
                                                class="engl">my</span> <span class="engl">silver</span> <span
                                                class="engl">chain,</span> <span class="engl">and</span> <span
                                                class="engl">then</span> <span class="engl">I</span> <span
                                                class="engl">sold</span> <span class="engl">my</span> <span
                                                class="engl">big</span> <span class="engl">pipe,</span> <span
                                                class="engl">and</span> <span class="engl">at</span> <span
                                                class="engl">last</span> <span class="engl">I</span> <span
                                                class="engl">sold</span> <span class="engl">my</span> <span
                                                class="engl">wheelbarrow.</span> <span class="engl">But</span> <span
                                                class="engl">I</span> <span class="engl">am</span>
                                        <span class="engl">going</span> <span class="engl">to</span> <span
                                                class="engl">buy</span> <span class="engl">them</span> <span
                                                class="engl">all</span> <span class="engl">back</span> <span
                                                class="engl">again</span> <span class="engl">now."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Hans,"</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">"I</span> <span
                                                class="engl">will</span> <span class="engl">give</span> <span
                                                class="engl">you</span> <span class="engl">my</span> <span
                                                class="engl">wheelbarrow.</span> <span class="engl">It</span> <span
                                                class="engl">is</span> <span class="engl">not</span> <span
                                                class="engl">in</span> <span class="engl">very</span> <span
                                                class="engl">good</span> <span class="engl">repair;</span> <span
                                                class="engl">indeed,</span> <span class="engl">one</span> <span
                                                class="engl">side</span> <span class="engl">is</span> <span
                                                class="engl">gone,</span> <span class="engl">and</span> <span
                                                class="engl">there</span> <span class="engl">is</span> <span
                                                class="engl">something</span> <span class="engl">wrong</span> <span
                                                class="engl">with</span> <span class="engl">the</span> <span
                                                class="engl">wheel-spokes;</span> <span class="engl">but</span> <span
                                                class="engl">in</span> <span class="engl">spite</span> <span
                                                class="engl">of</span> <span class="engl">that</span> <span
                                                class="engl">I</span> <span class="engl">will</span> <span
                                                class="engl">give</span> <span class="engl">it</span> <span
                                                class="engl">to</span> <span class="engl">you.</span> <span
                                                class="engl">I</span> <span class="engl">know</span> <span
                                                class="engl">it</span> <span class="engl">is</span> <span
                                                class="engl">very</span> <span class="engl">generous</span> <span
                                                class="engl">of</span> <span class="engl">me,</span> <span
                                                class="engl">and</span> <span class="engl">a</span> <span
                                                class="engl">great</span> <span class="engl">many</span> <span
                                                class="engl">people</span> <span class="engl">would</span> <span
                                                class="engl">think</span> <span class="engl">me</span> <span
                                                class="engl">extremely</span> <span class="engl">foolish</span> <span
                                                class="engl">for</span> <span class="engl">parting</span> <span
                                                class="engl">with</span> <span class="engl">it,</span> <span
                                                class="engl">but</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">not</span>
                                        <span class="engl">like</span> <span class="engl">the</span> <span
                                                class="engl">rest</span> <span class="engl">of</span> <span
                                                class="engl">the</span> <span class="engl">world.</span> <span
                                                class="engl">I</span> <span class="engl">think</span> <span
                                                class="engl">that</span> <span class="engl">generosity</span> <span
                                                class="engl">is</span> <span class="engl">the</span> <span
                                                class="engl">essence</span> <span class="engl">of</span> <span
                                                class="engl">friendship,</span> <span class="engl">and,</span> <span
                                                class="engl">besides,</span> <span class="engl">I</span> <span
                                                class="engl">have</span> <span class="engl">got</span> <span
                                                class="engl">a</span> <span class="engl">new</span> <span
                                                class="engl">wheelbarrow</span> <span class="engl">for</span> <span
                                                class="engl">myself.</span> <span class="engl">Yes,</span> <span
                                                class="engl">you</span> <span class="engl">may</span> <span
                                                class="engl">set</span> <span class="engl">your</span> <span
                                                class="engl">mind</span> <span class="engl">at</span> <span
                                                class="engl">ease,</span> <span class="engl">I</span> <span
                                                class="engl">will</span> <span class="engl">give</span> <span
                                                class="engl">you</span> <span class="engl">my</span> <span
                                                class="engl">wheelbarrow."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Well,</span> <span
                                                class="engl">really,</span> <span class="engl">that</span> <span
                                                class="engl">is</span> <span class="engl">generous</span> <span
                                                class="engl">of</span> <span class="engl">you,"</span> <span
                                                class="engl">said</span> <span class="engl">little</span> <span
                                                class="engl">Hans,</span> <span class="engl">and</span> <span
                                                class="engl">his</span> <span class="engl">funny</span> <span
                                                class="engl">round</span> <span class="engl">face</span> <span
                                                class="engl">glowed</span> <span class="engl">all</span> <span
                                                class="engl">over</span> <span class="engl">with</span> <span
                                                class="engl">pleasure.</span> <span class="engl">"I</span> <span
                                                class="engl">can</span> <span class="engl">easily</span> <span
                                                class="engl">put</span> <span class="engl">it</span> <span
                                                class="engl">in</span> <span class="engl">repair,</span> <span
                                                class="engl">as</span> <span class="engl">I</span> <span
                                                class="engl">have</span> <span class="engl">a</span>
                                        <span class="engl">plank</span> <span class="engl">of</span> <span
                                                class="engl">wood</span> <span class="engl">in</span> <span
                                                class="engl">the</span> <span class="engl">house."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"A</span> <span
                                                class="engl">plank</span> <span class="engl">of</span> <span
                                                class="engl">wood"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Miller;</span> <span
                                                class="engl">"why,</span> <span class="engl">that</span> <span
                                                class="engl">is</span> <span class="engl">just</span> <span
                                                class="engl">what</span> <span class="engl">I</span> <span
                                                class="engl">want</span> <span class="engl">for</span> <span
                                                class="engl">the</span> <span class="engl">roof</span> <span
                                                class="engl">of</span> <span class="engl">my</span> <span
                                                class="engl">barn.</span> <span class="engl">There</span> <span
                                                class="engl">is</span> <span class="engl">a</span> <span
                                                class="engl">very</span> <span class="engl">large</span> <span
                                                class="engl">hole</span> <span class="engl">in</span> <span
                                                class="engl">it,</span> <span class="engl">and</span> <span
                                                class="engl">the</span> <span class="engl">corn</span> <span
                                                class="engl">will</span> <span class="engl">all</span> <span
                                                class="engl">get</span> <span class="engl">damp</span> <span
                                                class="engl">if</span> <span class="engl">I</span> <span
                                                class="engl">don't</span> <span class="engl">stop</span> <span
                                                class="engl">it</span> <span class="engl">up.</span> <span
                                                class="engl">How</span> <span class="engl">lucky</span> <span
                                                class="engl">you</span> <span class="engl">mentioned</span> <span
                                                class="engl">it!</span> <span class="engl">It</span> <span
                                                class="engl">is</span> <span class="engl">quite</span> <span
                                                class="engl">remarkable</span> <span class="engl">how</span> <span
                                                class="engl">one</span> <span class="engl">good</span> <span
                                                class="engl">action</span> <span class="engl">always</span> <span
                                                class="engl">breeds</span> <span class="engl">another.</span> <span
                                                class="engl">I</span> <span class="engl">have</span> <span
                                                class="engl">given</span> <span class="engl">you</span> <span
                                                class="engl">my</span> <span class="engl">wheelbarrow,</span> <span
                                                class="engl">and</span> <span class="engl">now</span> <span
                                                class="engl">you</span> <span class="engl">are</span> <span
                                                class="engl">going</span> <span class="engl">to</span> <span
                                                class="engl">give</span> <span class="engl">me</span> <span
                                                class="engl">your</span> <span class="engl">plank.</span> <span
                                                class="engl">Of</span> <span class="engl">course,</span> <span
                                                class="engl">the</span> <span class="engl">wheelbarrow</span> <span
                                                class="engl">is</span> <span class="engl">worth</span> <span
                                                class="engl">far</span> <span class="engl">more</span> <span
                                                class="engl">than</span> <span class="engl">the</span> <span
                                                class="engl">plank,</span> <span class="engl">but</span> <span
                                                class="engl">true</span> <span class="engl">friendship</span> <span
                                                class="engl">never</span> <span class="engl">notices</span> <span
                                                class="engl">things</span> <span class="engl">like</span> <span
                                                class="engl">that.</span> <span class="engl">Pray</span> <span
                                                class="engl">get</span> <span class="engl">it</span> <span
                                                class="engl">at</span> <span class="engl">once,</span> <span
                                                class="engl">and</span> <span class="engl">I</span> <span
                                                class="engl">will</span> <span class="engl">set</span> <span
                                                class="engl">to</span> <span class="engl">work</span> <span
                                                class="engl">at</span> <span class="engl">my</span> <span
                                                class="engl">barn</span> <span class="engl">this</span> <span
                                                class="engl">very</span> <span class="engl">day."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Certainly,"</span> <span
                                                class="engl">cried</span> <span class="engl">little</span> <span
                                                class="engl">Hans,</span> <span class="engl">and</span> <span
                                                class="engl">he</span> <span class="engl">ran</span> <span
                                                class="engl">into</span> <span class="engl">the</span> <span
                                                class="engl">shed</span> <span class="engl">and</span> <span
                                                class="engl">dragged</span> <span class="engl">the</span> <span
                                                class="engl">plank</span> <span class="engl">out.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"It</span> <span
                                                class="engl">is</span> <span class="engl">not</span> <span
                                                class="engl">a</span> <span class="engl">very</span> <span
                                                class="engl">big</span> <span class="engl">plank,"</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">looking</span> <span
                                                class="engl">at</span> <span class="engl">it,</span> <span
                                                class="engl">"and</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">afraid</span> <span
                                                class="engl">that</span> <span class="engl">after</span> <span
                                                class="engl">I</span> <span class="engl">have</span> <span
                                                class="engl">mended</span> <span class="engl">my</span> <span
                                                class="engl">barn-roof</span> <span class="engl">there</span> <span
                                                class="engl">won't</span> <span class="engl">be</span> <span
                                                class="engl">any</span> <span class="engl">left</span> <span
                                                class="engl">for</span> <span class="engl">you</span> <span
                                                class="engl">to</span> <span class="engl">mend</span> <span
                                                class="engl">the</span> <span class="engl">wheelbarrow</span> <span
                                                class="engl">with;</span> <span class="engl">but,</span> <span
                                                class="engl">of</span> <span class="engl">course,</span> <span
                                                class="engl">that</span> <span class="engl">is</span> <span
                                                class="engl">not</span> <span class="engl">my</span> <span
                                                class="engl">fault.</span> <span class="engl">And</span> <span
                                                class="engl">now,</span> <span class="engl">as</span> <span
                                                class="engl">I</span> <span class="engl">have</span> <span
                                                class="engl">given</span> <span class="engl">you</span> <span
                                                class="engl">my</span> <span class="engl">wheelbarrow,</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">sure</span> <span class="engl">you</span> <span
                                                class="engl">would</span> <span class="engl">like</span> <span
                                                class="engl">to</span> <span class="engl">give</span> <span
                                                class="engl">me</span> <span class="engl">some</span> <span
                                                class="engl">flowers</span> <span class="engl">in</span> <span
                                                class="engl">return.</span> <span class="engl">Here</span> <span
                                                class="engl">is</span> <span class="engl">the</span> <span
                                                class="engl">basket,</span> <span class="engl">and</span> <span
                                                class="engl">mind</span> <span class="engl">you</span> <span
                                                class="engl">fill</span> <span class="engl">it</span> <span
                                                class="engl">quite</span> <span class="engl">full."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Quite</span> <span
                                                class="engl">full?"</span> <span class="engl">said</span> <span
                                                class="engl">little</span> <span class="engl">Hans,</span> <span
                                                class="engl">rather</span> <span class="engl">sorrowfully,</span> <span
                                                class="engl">for</span> <span class="engl">it</span> <span
                                                class="engl">was</span> <span class="engl">really</span> <span
                                                class="engl">a</span> <span class="engl">very</span> <span
                                                class="engl">big</span> <span class="engl">basket,</span> <span
                                                class="engl">and</span> <span class="engl">he</span> <span
                                                class="engl">knew</span> <span class="engl">that</span> <span
                                                class="engl">if</span> <span class="engl">he</span> <span
                                                class="engl">filled</span> <span class="engl">it</span> <span
                                                class="engl">he</span> <span class="engl">would</span> <span
                                                class="engl">have</span> <span class="engl">no</span> <span
                                                class="engl">flowers</span> <span class="engl">left</span> <span
                                                class="engl">for</span> <span class="engl">the</span> <span
                                                class="engl">market,</span> <span class="engl">and</span> <span
                                                class="engl">he</span> <span class="engl">was</span> <span
                                                class="engl">very</span> <span class="engl">anxious</span> <span
                                                class="engl">to</span> <span class="engl">get</span> <span
                                                class="engl">his</span> <span class="engl">silver</span> <span
                                                class="engl">buttons</span> <span class="engl">back.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Well,</span> <span
                                                class="engl">really,"</span> <span class="engl">answered</span> <span
                                                class="engl">the</span> <span class="engl">Miller,</span> <span
                                                class="engl">"as</span> <span class="engl">I</span> <span
                                                class="engl">have</span> <span class="engl">given</span> <span
                                                class="engl">you</span> <span class="engl">my</span> <span
                                                class="engl">wheelbarrow,</span> <span class="engl">I</span> <span
                                                class="engl">don't</span> <span class="engl">think</span> <span
                                                class="engl">that</span> <span class="engl">it</span> <span
                                                class="engl">is</span> <span class="engl">much</span> <span
                                                class="engl">to</span> <span class="engl">ask</span> <span
                                                class="engl">you</span> <span class="engl">for</span> <span
                                                class="engl">a</span> <span class="engl">few</span> <span
                                                class="engl">flowers.</span> <span class="engl">I</span> <span
                                                class="engl">may</span> <span class="engl">be</span>
                                        <span class="engl">wrong,</span> <span class="engl">but</span> <span
                                                class="engl">I</span> <span class="engl">should</span> <span
                                                class="engl">have</span> <span class="engl">thought</span> <span
                                                class="engl">that</span> <span class="engl">friendship,</span> <span
                                                class="engl">true</span> <span class="engl">friendship,</span> <span
                                                class="engl">was</span> <span class="engl">quite</span> <span
                                                class="engl">free</span> <span class="engl">from</span> <span
                                                class="engl">selfishness</span> <span class="engl">of</span> <span
                                                class="engl">any</span> <span class="engl">kind."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"My</span> <span
                                                class="engl">dear</span> <span class="engl">friend,</span> <span
                                                class="engl">my</span> <span class="engl">best</span> <span
                                                class="engl">friend,"</span> <span class="engl">cried</span> <span
                                                class="engl">little</span> <span class="engl">Hans,</span> <span
                                                class="engl">"you</span> <span class="engl">are</span> <span
                                                class="engl">welcome</span> <span class="engl">to</span> <span
                                                class="engl">all</span> <span class="engl">the</span> <span
                                                class="engl">flowers</span> <span class="engl">in</span> <span
                                                class="engl">my</span> <span class="engl">garden.</span> <span
                                                class="engl">I</span> <span class="engl">would</span> <span
                                                class="engl">much</span> <span class="engl">sooner</span> <span
                                                class="engl">have</span> <span class="engl">your</span> <span
                                                class="engl">good</span> <span class="engl">opinion</span> <span
                                                class="engl">than</span> <span class="engl">my</span> <span
                                                class="engl">silver</span> <span class="engl">buttons,</span> <span
                                                class="engl">any</span> <span class="engl">day;"</span> <span
                                                class="engl">and</span> <span class="engl">he</span> <span
                                                class="engl">ran</span> <span class="engl">and</span> <span
                                                class="engl">plucked</span> <span class="engl">all</span> <span
                                                class="engl">his</span> <span class="engl">pretty</span> <span
                                                class="engl">primroses,</span> <span class="engl">and</span> <span
                                                class="engl">filled</span> <span class="engl">the</span> <span
                                                class="engl">Miller's</span> <span class="engl">basket.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Good-bye,</span> <span
                                                class="engl">little</span> <span class="engl">Hans,"</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">as</span> <span
                                                class="engl">he</span> <span class="engl">went</span> <span
                                                class="engl">up</span> <span class="engl">the</span> <span
                                                class="engl">hill</span> <span class="engl">with</span> <span
                                                class="engl">the</span> <span class="engl">plank</span> <span
                                                class="engl">on</span> <span class="engl">his</span> <span
                                                class="engl">shoulder,</span> <span class="engl">and</span> <span
                                                class="engl">the</span> <span class="engl">big</span> <span
                                                class="engl">basket</span> <span class="engl">in</span> <span
                                                class="engl">his</span> <span class="engl">hand.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Good-bye,"</span> <span
                                                class="engl">said</span> <span class="engl">little</span> <span
                                                class="engl">Hans,</span> <span class="engl">and</span> <span
                                                class="engl">he</span> <span class="engl">began</span> <span
                                                class="engl">to</span> <span class="engl">dig</span> <span
                                                class="engl">away</span> <span class="engl">quite</span> <span
                                                class="engl">merrily,</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">so</span> <span
                                                class="engl">pleased</span> <span class="engl">about</span> <span
                                                class="engl">the</span> <span class="engl">wheelbarrow.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'The</span> <span
                                                class="engl">next</span> <span class="engl">day</span> <span
                                                class="engl">he</span> <span class="engl">was</span> <span
                                                class="engl">nailing</span> <span class="engl">up</span> <span
                                                class="engl">some</span> <span class="engl">honeysuckle</span> <span
                                                class="engl">against</span> <span class="engl">the</span> <span
                                                class="engl">porch,</span> <span class="engl">when</span> <span
                                                class="engl">he</span> <span class="engl">heard</span> <span
                                                class="engl">the</span> <span class="engl">Miller's</span> <span
                                                class="engl">voice</span> <span class="engl">calling</span> <span
                                                class="engl">to</span> <span class="engl">him</span> <span
                                                class="engl">from</span> <span class="engl">the</span> <span
                                                class="engl">road.</span> <span class="engl">So</span> <span
                                                class="engl">he</span> <span class="engl">jumped</span> <span
                                                class="engl">off</span> <span class="engl">the</span> <span
                                                class="engl">ladder,</span> <span class="engl">and</span> <span
                                                class="engl">ran</span> <span class="engl">down</span> <span
                                                class="engl">the</span> <span class="engl">garden,</span> <span
                                                class="engl">and</span> <span class="engl">looked</span> <span
                                                class="engl">over</span> <span class="engl">the</span> <span
                                                class="engl">wall.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'There</span> <span
                                                class="engl">was</span> <span class="engl">the</span> <span
                                                class="engl">Miller</span> <span class="engl">with</span> <span
                                                class="engl">a</span> <span class="engl">large</span> <span
                                                class="engl">sack</span> <span class="engl">of</span> <span
                                                class="engl">flour</span> <span class="engl">on</span> <span
                                                class="engl">his</span> <span class="engl">back.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Dear</span> <span
                                                class="engl">little</span> <span class="engl">Hans,"</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">"would</span> <span
                                                class="engl">you</span> <span class="engl">mind</span> <span
                                                class="engl">carrying</span> <span class="engl">this</span> <span
                                                class="engl">sack</span> <span class="engl">of</span> <span
                                                class="engl">flour</span> <span class="engl">for</span> <span
                                                class="engl">me</span> <span class="engl">to</span> <span
                                                class="engl">market?"</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Oh,</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">so</span> <span class="engl">sorry,"</span> <span
                                                class="engl">said</span> <span class="engl">Hans,"but</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">really</span> <span class="engl">very</span> <span
                                                class="engl">busy</span> <span class="engl">to-day.</span> <span
                                                class="engl">I</span> <span class="engl">have</span> <span
                                                class="engl">got</span> <span class="engl">all</span> <span
                                                class="engl">my</span> <span class="engl">creepers</span> <span
                                                class="engl">to</span> <span class="engl">nail</span> <span
                                                class="engl">up,</span> <span class="engl">and</span> <span
                                                class="engl">all</span> <span class="engl">my</span> <span
                                                class="engl">flowers</span> <span class="engl">to</span> <span
                                                class="engl">water,</span> <span class="engl">and</span> <span
                                                class="engl">all</span> <span class="engl">my</span> <span
                                                class="engl">grass</span> <span class="engl">to</span> <span
                                                class="engl">roll."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Well,</span> <span
                                                class="engl">really,"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Miller,</span> <span
                                                class="engl">"I</span> <span class="engl">think</span> <span
                                                class="engl">that,</span> <span class="engl">considering</span> <span
                                                class="engl">that</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">going</span> <span
                                                class="engl">to</span> <span class="engl">give</span> <span
                                                class="engl">you</span> <span class="engl">my</span> <span
                                                class="engl">wheelbarrow,</span> <span class="engl">it</span> <span
                                                class="engl">is</span> <span class="engl">rather</span> <span
                                                class="engl">unfriendly</span> <span class="engl">of</span> <span
                                                class="engl">you</span> <span class="engl">to</span> <span
                                                class="engl">refuse."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Oh,</span> <span
                                                class="engl">don't</span> <span class="engl">say</span> <span
                                                class="engl">that,"</span> <span class="engl">cried</span> <span
                                                class="engl">little</span> <span class="engl">Hans,</span> <span
                                                class="engl">"I</span> <span class="engl">wouldn't</span> <span
                                                class="engl">be</span> <span class="engl">unfriendly</span> <span
                                                class="engl">for</span> <span class="engl">the</span> <span
                                                class="engl">whole</span> <span class="engl">world;"</span> <span
                                                class="engl">and</span> <span class="engl">he</span> <span
                                                class="engl">ran</span> <span class="engl">in</span> <span
                                                class="engl">for</span> <span class="engl">his</span> <span
                                                class="engl">cap,</span> <span class="engl">and</span> <span
                                                class="engl">trudged</span> <span class="engl">off</span> <span
                                                class="engl">with</span> <span class="engl">the</span> <span
                                                class="engl">big</span> <span class="engl">sack</span> <span
                                                class="engl">on</span> <span class="engl">his</span> <span
                                                class="engl">shoulders.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'It</span> <span
                                                class="engl">was</span> <span class="engl">a</span> <span
                                                class="engl">very</span> <span class="engl">hot</span> <span
                                                class="engl">day,</span> <span class="engl">and</span> <span
                                                class="engl">the</span> <span class="engl">road</span> <span
                                                class="engl">was</span> <span class="engl">terribly</span> <span
                                                class="engl">dusty,</span> <span class="engl">and</span> <span
                                                class="engl">before</span> <span class="engl">Hans</span> <span
                                                class="engl">had</span> <span class="engl">reached</span> <span
                                                class="engl">the</span> <span class="engl">sixth</span> <span
                                                class="engl">milestone</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">so</span> <span
                                                class="engl">tired</span> <span class="engl">that</span> <span
                                                class="engl">he</span> <span class="engl">had</span> <span
                                                class="engl">to</span> <span class="engl">sit</span> <span
                                                class="engl">down</span> <span class="engl">and</span> <span
                                                class="engl">rest.</span> <span class="engl">However,</span> <span
                                                class="engl">he</span> <span class="engl">went</span> <span
                                                class="engl">on</span> <span class="engl">bravely,</span> <span
                                                class="engl">and</span> <span class="engl">at</span> <span
                                                class="engl">last</span> <span class="engl">he</span> <span
                                                class="engl">reached</span> <span class="engl">the</span> <span
                                                class="engl">market.</span> <span class="engl">After</span> <span
                                                class="engl">he</span> <span class="engl">had</span> <span
                                                class="engl">waited</span> <span class="engl">there</span> <span
                                                class="engl">some</span> <span class="engl">time,</span> <span
                                                class="engl">he</span> <span class="engl">sold</span> <span
                                                class="engl">the</span> <span class="engl">sack</span> <span
                                                class="engl">of</span> <span class="engl">flour</span> <span
                                                class="engl">for</span> <span class="engl">a</span> <span
                                                class="engl">very</span> <span class="engl">good</span> <span
                                                class="engl">price,</span> <span class="engl">and</span> <span
                                                class="engl">then</span> <span class="engl">he</span> <span
                                                class="engl">returned</span> <span class="engl">home</span> <span
                                                class="engl">at</span> <span class="engl">once,</span> <span
                                                class="engl">for</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">afraid</span> <span
                                                class="engl">that</span> <span class="engl">if</span> <span
                                                class="engl">he</span> <span class="engl">stopped</span> <span
                                                class="engl">too</span> <span class="engl">late</span> <span
                                                class="engl">he</span> <span class="engl">might</span> <span
                                                class="engl">meet</span> <span class="engl">some</span> <span
                                                class="engl">robbers</span> <span class="engl">on</span> <span
                                                class="engl">the</span> <span class="engl">way.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">"It</span> <span
                                                class="engl">has</span> <span class="engl">certainly</span> <span
                                                class="engl">been</span> <span class="engl">a</span> <span
                                                class="engl">hard</span> <span class="engl">day,"</span> <span
                                                class="engl">said</span> <span class="engl">little</span> <span
                                                class="engl">Hans</span> <span class="engl">to</span> <span
                                                class="engl">himself</span> <span class="engl">as</span> <span
                                                class="engl">he</span> <span class="engl">was</span> <span
                                                class="engl">going</span> <span class="engl">to</span> <span
                                                class="engl">bed,</span> <span class="engl">"but</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">glad</span> <span class="engl">I</span> <span
                                                class="engl">did</span> <span class="engl">not</span> <span
                                                class="engl">refuse</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">for</span> <span
                                                class="engl">he</span> <span class="engl">is</span> <span
                                                class="engl">my</span> <span class="engl">best</span> <span
                                                class="engl">friend,</span> <span class="engl">and,</span> <span
                                                class="engl">besides,</span> <span class="engl">he</span> <span
                                                class="engl">is</span> <span class="engl">going</span> <span
                                                class="engl">to</span> <span class="engl">give</span> <span
                                                class="engl">me</span> <span class="engl">his</span> <span
                                                class="engl">wheelbarrow."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Early</span> <span
                                                class="engl">the</span> <span class="engl">next</span> <span
                                                class="engl">morning</span> <span class="engl">the</span> <span
                                                class="engl">Miller</span> <span class="engl">came</span> <span
                                                class="engl">down</span> <span class="engl">to</span> <span
                                                class="engl">get</span> <span class="engl">the</span> <span
                                                class="engl">money</span> <span class="engl">for</span> <span
                                                class="engl">his</span> <span class="engl">sack</span> <span
                                                class="engl">of</span> <span class="engl">flour,</span> <span
                                                class="engl">but</span> <span class="engl">little</span> <span
                                                class="engl">Hans</span> <span class="engl">was</span> <span
                                                class="engl">so</span> <span class="engl">tired</span> <span
                                                class="engl">that</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">still</span> <span
                                                class="engl">in</span> <span class="engl">bed.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Upon</span> <span
                                                class="engl">my</span> <span class="engl">word,"</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">"you</span> <span
                                                class="engl">are</span> <span class="engl">very</span> <span
                                                class="engl">lazy.</span> <span class="engl">Really,</span> <span
                                                class="engl">considering</span> <span class="engl">that</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">going</span> <span class="engl">to</span> <span
                                                class="engl">give</span> <span class="engl">you</span> <span
                                                class="engl">my</span> <span class="engl">wheelbarrow,</span> <span
                                                class="engl">I</span> <span class="engl">think</span> <span
                                                class="engl">you</span> <span class="engl">might</span> <span
                                                class="engl">work</span> <span class="engl">harder.</span> <span
                                                class="engl">Idleness</span> <span class="engl">is</span> <span
                                                class="engl">a</span> <span class="engl">great</span> <span
                                                class="engl">sin,</span> <span class="engl">and</span> <span
                                                class="engl">I</span> <span class="engl">certainly</span> <span
                                                class="engl">don't</span> <span class="engl">like</span> <span
                                                class="engl">any</span> <span class="engl">of</span> <span
                                                class="engl">my</span> <span class="engl">friends</span> <span
                                                class="engl">to</span> <span class="engl">be</span> <span
                                                class="engl">idle</span> <span class="engl">or</span> <span
                                                class="engl">sluggish.</span> <span class="engl">You</span> <span
                                                class="engl">must</span> <span class="engl">not</span> <span
                                                class="engl">mind</span> <span class="engl">my</span> <span
                                                class="engl">speaking</span> <span class="engl">quite</span> <span
                                                class="engl">plainly</span> <span class="engl">to</span> <span
                                                class="engl">you.</span> <span class="engl">Of</span> <span
                                                class="engl">course</span> <span class="engl">I</span> <span
                                                class="engl">should</span> <span class="engl">not</span> <span
                                                class="engl">dream</span> <span class="engl">of</span> <span
                                                class="engl">doing</span> <span class="engl">so</span> <span
                                                class="engl">if</span> <span class="engl">I</span>
                                        <span class="engl">were</span> <span class="engl">not</span> <span
                                                class="engl">your</span> <span class="engl">friend.</span> <span
                                                class="engl">But</span> <span class="engl">what</span> <span
                                                class="engl">is</span> <span class="engl">the</span> <span
                                                class="engl">good</span> <span class="engl">of</span> <span
                                                class="engl">friendship</span> <span class="engl">if</span> <span
                                                class="engl">one</span> <span class="engl">cannot</span> <span
                                                class="engl">say</span> <span class="engl">exactly</span> <span
                                                class="engl">what</span> <span class="engl">one</span> <span
                                                class="engl">means?</span> <span class="engl">Anybody</span> <span
                                                class="engl">can</span> <span class="engl">say</span> <span
                                                class="engl">charming</span> <span class="engl">things</span> <span
                                                class="engl">and</span> <span class="engl">try</span> <span
                                                class="engl">to</span> <span class="engl">please</span> <span
                                                class="engl">and</span> <span class="engl">to</span> <span
                                                class="engl">flatter,</span> <span class="engl">but</span> <span
                                                class="engl">a</span> <span class="engl">true</span> <span
                                                class="engl">friend</span> <span class="engl">always</span> <span
                                                class="engl">says</span> <span class="engl">unpleasant</span> <span
                                                class="engl">things,</span> <span class="engl">and</span> <span
                                                class="engl">does</span> <span class="engl">not</span> <span
                                                class="engl">mind</span> <span class="engl">giving</span> <span
                                                class="engl">pain.</span> <span class="engl">Indeed,</span> <span
                                                class="engl">if</span> <span class="engl">he</span> <span
                                                class="engl">is</span>
                                        <span class="engl">a</span> <span class="engl">really</span> <span
                                                class="engl">true</span> <span class="engl">friend</span> <span
                                                class="engl">he</span> <span class="engl">prefers</span> <span
                                                class="engl">it,</span> <span class="engl">for</span> <span
                                                class="engl">he</span> <span class="engl">knows</span> <span
                                                class="engl">that</span> <span class="engl">then</span> <span
                                                class="engl">he</span> <span class="engl">is</span> <span
                                                class="engl">doing</span> <span class="engl">good."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"I</span> <span
                                                class="engl">am</span> <span class="engl">very</span> <span
                                                class="engl">sorry,"</span> <span class="engl">said</span> <span
                                                class="engl">little</span> <span class="engl">Hans,</span> <span
                                                class="engl">rubbing</span> <span class="engl">his</span> <span
                                                class="engl">eyes</span> <span class="engl">and</span> <span
                                                class="engl">pulling</span> <span class="engl">off</span> <span
                                                class="engl">his</span> <span class="engl">night-cap,</span> <span
                                                class="engl">"but</span> <span class="engl">I</span> <span
                                                class="engl">was</span> <span class="engl">so</span>
                                        <span class="engl">tired</span> <span class="engl">that</span> <span
                                                class="engl">I</span> <span class="engl">thought</span> <span
                                                class="engl">I</span> <span class="engl">would</span> <span
                                                class="engl">lie</span> <span class="engl">in</span> <span
                                                class="engl">bed</span> <span class="engl">for</span> <span
                                                class="engl">a</span> <span class="engl">little</span> <span
                                                class="engl">time,</span> <span class="engl">and</span> <span
                                                class="engl">listen</span> <span class="engl">to</span> <span
                                                class="engl">the</span> <span class="engl">birds</span> <span
                                                class="engl">singing.</span> <span class="engl">Do</span> <span
                                                class="engl">you</span> <span class="engl">know</span> <span
                                                class="engl">that</span> <span class="engl">I</span> <span
                                                class="engl">always</span> <span class="engl">work</span> <span
                                                class="engl">better</span> <span class="engl">after</span> <span
                                                class="engl">hearing</span> <span class="engl">the</span> <span
                                                class="engl">birds</span> <span class="engl">sing?"</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Well,</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">glad</span> <span class="engl">of</span> <span
                                                class="engl">that,"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Miller,</span> <span
                                                class="engl">clapping</span> <span class="engl">little</span> <span
                                                class="engl">Hans</span> <span class="engl">on</span> <span
                                                class="engl">the</span> <span class="engl">back,</span> <span
                                                class="engl">"for</span> <span class="engl">I</span> <span
                                                class="engl">want</span> <span class="engl">you</span> <span
                                                class="engl">to</span> <span class="engl">come</span> <span
                                                class="engl">up</span> <span class="engl">to</span> <span
                                                class="engl">the</span> <span class="engl">mill</span> <span
                                                class="engl">as</span> <span class="engl">soon</span> <span
                                                class="engl">as</span> <span class="engl">you</span> <span
                                                class="engl">are</span> <span class="engl">dressed,</span> <span
                                                class="engl">and</span> <span class="engl">mend</span> <span
                                                class="engl">my</span> <span class="engl">barn-roof</span> <span
                                                class="engl">for</span> <span class="engl">me."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Poor</span> <span
                                                class="engl">little</span> <span class="engl">Hans</span> <span
                                                class="engl">was</span> <span class="engl">very</span> <span
                                                class="engl">anxious</span> <span class="engl">to</span> <span
                                                class="engl">go</span> <span class="engl">and</span> <span
                                                class="engl">work</span> <span class="engl">in</span> <span
                                                class="engl">his</span> <span class="engl">garden,</span> <span
                                                class="engl">for</span> <span class="engl">his</span> <span
                                                class="engl">flowers</span> <span class="engl">had</span> <span
                                                class="engl">not</span> <span class="engl">been</span> <span
                                                class="engl">watered</span> <span class="engl">for</span> <span
                                                class="engl">two</span> <span class="engl">days,</span> <span
                                                class="engl">but</span> <span class="engl">he</span> <span
                                                class="engl">did</span> <span class="engl">not</span> <span
                                                class="engl">like</span> <span class="engl">to</span> <span
                                                class="engl">refuse</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">as</span> <span
                                                class="engl">he</span> <span class="engl">was</span> <span
                                                class="engl">such</span> <span class="engl">a</span> <span
                                                class="engl">good</span> <span class="engl">friend</span> <span
                                                class="engl">to</span> <span class="engl">him.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Do</span> <span
                                                class="engl">you</span> <span class="engl">think</span> <span
                                                class="engl">it</span> <span class="engl">would</span> <span
                                                class="engl">be</span> <span class="engl">unfriendly</span> <span
                                                class="engl">of</span> <span class="engl">me</span> <span
                                                class="engl">if</span> <span class="engl">I</span>
                                        <span class="engl">said</span> <span class="engl">I</span> <span
                                                class="engl">was</span>
                                        <span class="engl">busy?"</span> <span class="engl">he</span> <span
                                                class="engl">inquired</span> <span class="engl">in</span> <span
                                                class="engl">a</span> <span class="engl">shy</span> <span
                                                class="engl">and</span> <span class="engl">timid</span> <span
                                                class="engl">voice.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Well,</span> <span
                                                class="engl">really,"</span> <span class="engl">answered</span> <span
                                                class="engl">the</span> <span class="engl">Miller,</span> <span
                                                class="engl">"I</span> <span class="engl">do</span> <span
                                                class="engl">not</span> <span class="engl">think</span> <span
                                                class="engl">it</span> <span class="engl">is</span> <span
                                                class="engl">much</span> <span class="engl">to</span> <span
                                                class="engl">ask</span> <span class="engl">of</span> <span
                                                class="engl">you,</span> <span class="engl">considering</span> <span
                                                class="engl">that</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">going</span> <span
                                                class="engl">to</span> <span class="engl">give</span> <span
                                                class="engl">you</span> <span class="engl">my</span> <span
                                                class="engl">wheelbarrow;</span> <span class="engl">but</span> <span
                                                class="engl">of</span> <span class="engl">course</span> <span
                                                class="engl">if</span> <span class="engl">you</span> <span
                                                class="engl">refuse</span> <span class="engl">I</span> <span
                                                class="engl">will</span> <span class="engl">go</span> <span
                                                class="engl">and</span> <span class="engl">do</span> <span
                                                class="engl">it</span> <span class="engl">myself."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Oh!</span> <span
                                                class="engl">on</span> <span class="engl">no</span> <span
                                                class="engl">account,"</span> <span class="engl">cried</span> <span
                                                class="engl">little</span> <span class="engl">Hans;</span> <span
                                                class="engl">and</span> <span class="engl">he</span> <span
                                                class="engl">jumped</span> <span class="engl">out</span> <span
                                                class="engl">of</span> <span class="engl">bed,</span> <span
                                                class="engl">and</span> <span class="engl">dressed</span> <span
                                                class="engl">himself,</span> <span class="engl">and</span> <span
                                                class="engl">went</span> <span class="engl">up</span> <span
                                                class="engl">to</span> <span class="engl">the</span> <span
                                                class="engl">barn.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'He</span> <span
                                                class="engl">worked</span> <span class="engl">there</span> <span
                                                class="engl">all</span> <span class="engl">day</span> <span
                                                class="engl">long,</span> <span class="engl">till</span> <span
                                                class="engl">sunset,</span> <span class="engl">and</span> <span
                                                class="engl">at</span> <span class="engl">sunset</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">came</span> <span class="engl">to</span> <span
                                                class="engl">see</span> <span class="engl">how</span> <span
                                                class="engl">he</span> <span class="engl">was</span> <span
                                                class="engl">getting</span> <span class="engl">on.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Have</span> <span
                                                class="engl">you</span> <span class="engl">mended</span> <span
                                                class="engl">the</span> <span class="engl">hole</span> <span
                                                class="engl">in</span> <span class="engl">the</span> <span
                                                class="engl">roof</span> <span class="engl">yet,</span> <span
                                                class="engl">little</span> <span class="engl">Hans?"</span> <span
                                                class="engl">cried</span> <span class="engl">the</span> <span
                                                class="engl">Miller</span> <span class="engl">in</span> <span
                                                class="engl">a</span> <span class="engl">cheery</span> <span
                                                class="engl">voice.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"It</span> <span
                                                class="engl">is</span> <span class="engl">quite</span> <span
                                                class="engl">mended,"</span> <span class="engl">answered</span> <span
                                                class="engl">little</span> <span class="engl">Hans,</span> <span
                                                class="engl">coming</span> <span class="engl">down</span> <span
                                                class="engl">the</span> <span class="engl">ladder.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Ah!"</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">"there</span> <span
                                                class="engl">is</span> <span class="engl">no</span> <span
                                                class="engl">work</span> <span class="engl">so</span> <span
                                                class="engl">delightful</span> <span class="engl">as</span> <span
                                                class="engl">the</span> <span class="engl">work</span> <span
                                                class="engl">one</span> <span class="engl">does</span> <span
                                                class="engl">for</span> <span class="engl">others."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"It</span> <span
                                                class="engl">is</span> <span class="engl">certainly</span> <span
                                                class="engl">a</span> <span class="engl">great</span> <span
                                                class="engl">privilege</span> <span class="engl">to</span> <span
                                                class="engl">hear</span> <span class="engl">you</span> <span
                                                class="engl">talk,"</span> <span class="engl">answered</span> <span
                                                class="engl">little</span> <span class="engl">Hans,</span> <span
                                                class="engl">sitting</span> <span class="engl">down</span> <span
                                                class="engl">and</span> <span class="engl">wiping</span> <span
                                                class="engl">his</span> <span class="engl">forehead,</span> <span
                                                class="engl">"a</span> <span class="engl">very</span> <span
                                                class="engl">great</span> <span class="engl">privilege.</span> <span
                                                class="engl">But</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">afraid</span> <span
                                                class="engl">I</span> <span class="engl">shall</span> <span
                                                class="engl">never</span> <span class="engl">have</span> <span
                                                class="engl">such</span> <span class="engl">beautiful</span> <span
                                                class="engl">ideas</span> <span class="engl">as</span> <span
                                                class="engl">you</span> <span class="engl">have."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Oh!</span> <span
                                                class="engl">they</span> <span class="engl">will</span> <span
                                                class="engl">come</span> <span class="engl">to</span> <span
                                                class="engl">you,"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Miller,</span> <span
                                                class="engl">"but</span> <span class="engl">you</span> <span
                                                class="engl">must</span> <span class="engl">take</span> <span
                                                class="engl">more</span> <span class="engl">pains.</span> <span
                                                class="engl">At</span> <span class="engl">present</span> <span
                                                class="engl">you</span> <span class="engl">have</span> <span
                                                class="engl">only</span> <span class="engl">the</span> <span
                                                class="engl">practice</span> <span class="engl">of</span> <span
                                                class="engl">friendship;</span> <span class="engl">some</span> <span
                                                class="engl">day</span> <span class="engl">you</span> <span
                                                class="engl">will</span> <span class="engl">have</span> <span
                                                class="engl">the</span> <span class="engl">theory</span> <span
                                                class="engl">also."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Do</span> <span
                                                class="engl">you</span> <span class="engl">really</span> <span
                                                class="engl">think</span> <span class="engl">I</span> <span
                                                class="engl">shall?"</span> <span class="engl">asked</span> <span
                                                class="engl">little</span> <span class="engl">Hans.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"I</span> <span
                                                class="engl">have</span> <span class="engl">no</span> <span
                                                class="engl">doubt</span> <span class="engl">of</span> <span
                                                class="engl">it,"</span> <span class="engl">answered</span> <span
                                                class="engl">the</span> <span class="engl">Miller;</span> <span
                                                class="engl">"but</span> <span class="engl">now</span> <span
                                                class="engl">that</span> <span class="engl">you</span> <span
                                                class="engl">have</span> <span class="engl">mended</span> <span
                                                class="engl">the</span> <span class="engl">roof,</span> <span
                                                class="engl">you</span> <span class="engl">had</span> <span
                                                class="engl">better</span> <span class="engl">go</span> <span
                                                class="engl">home</span> <span class="engl">and</span> <span
                                                class="engl">rest,</span> <span class="engl">for</span> <span
                                                class="engl">I</span> <span class="engl">want</span> <span
                                                class="engl">you</span> <span class="engl">to</span> <span
                                                class="engl">drive</span> <span class="engl">my</span> <span
                                                class="engl">sheep</span> <span class="engl">to</span> <span
                                                class="engl">the</span> <span class="engl">mountain</span> <span
                                                class="engl">to-morrow."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Poor</span> <span
                                                class="engl">little</span> <span class="engl">Hans</span> <span
                                                class="engl">was</span> <span class="engl">afraid</span> <span
                                                class="engl">to</span> <span class="engl">say</span> <span
                                                class="engl">anything</span> <span class="engl">to</span> <span
                                                class="engl">this,</span> <span class="engl">and</span> <span
                                                class="engl">early</span> <span class="engl">the</span> <span
                                                class="engl">next</span> <span class="engl">morning</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">brought</span> <span class="engl">his</span> <span
                                                class="engl">sheep</span> <span class="engl">round</span> <span
                                                class="engl">to</span> <span class="engl">the</span> <span
                                                class="engl">cottage,</span> <span class="engl">and</span> <span
                                                class="engl">Hans</span> <span class="engl">started</span> <span
                                                class="engl">off</span> <span class="engl">with</span> <span
                                                class="engl">them</span> <span class="engl">to</span> <span
                                                class="engl">the</span> <span class="engl">mountain.</span> <span
                                                class="engl">It</span> <span class="engl">took</span> <span
                                                class="engl">him</span> <span class="engl">the</span> <span
                                                class="engl">whole</span> <span class="engl">day</span> <span
                                                class="engl">to</span> <span class="engl">get</span> <span
                                                class="engl">there</span> <span class="engl">and</span> <span
                                                class="engl">back;</span> <span class="engl">and</span> <span
                                                class="engl">when</span> <span class="engl">he</span> <span
                                                class="engl">returned</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">so</span> <span
                                                class="engl">tired</span> <span class="engl">that</span> <span
                                                class="engl">he</span> <span class="engl">went</span> <span
                                                class="engl">off</span> <span class="engl">to</span> <span
                                                class="engl">sleep</span> <span class="engl">in</span> <span
                                                class="engl">his</span> <span class="engl">chair,</span> <span
                                                class="engl">and</span> <span class="engl">did</span> <span
                                                class="engl">not</span> <span class="engl">wake</span> <span
                                                class="engl">up</span> <span class="engl">till</span> <span
                                                class="engl">it</span> <span class="engl">was</span> <span
                                                class="engl">broad</span> <span class="engl">daylight.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"What</span> <span
                                                class="engl">a</span> <span class="engl">delightful</span> <span
                                                class="engl">time</span> <span class="engl">I</span> <span
                                                class="engl">shall</span> <span class="engl">have</span> <span
                                                class="engl">in</span> <span class="engl">my</span> <span
                                                class="engl">garden,"</span> <span class="engl">he</span> <span
                                                class="engl">said,</span> <span class="engl">and</span> <span
                                                class="engl">he</span> <span class="engl">went</span> <span
                                                class="engl">to</span> <span class="engl">work</span> <span
                                                class="engl">at</span> <span class="engl">once.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'But</span> <span
                                                class="engl">somehow</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">never</span> <span
                                                class="engl">able</span> <span class="engl">to</span> <span
                                                class="engl">look</span> <span class="engl">after</span> <span
                                                class="engl">his</span> <span class="engl">flowers</span> <span
                                                class="engl">at</span> <span class="engl">all,</span> <span
                                                class="engl">for</span> <span class="engl">his</span> <span
                                                class="engl">friend</span> <span class="engl">the</span> <span
                                                class="engl">Miller</span> <span class="engl">was</span> <span
                                                class="engl">always</span> <span class="engl">coming</span> <span
                                                class="engl">round</span> <span class="engl">and</span> <span
                                                class="engl">sending</span> <span class="engl">him</span> <span
                                                class="engl">off</span> <span class="engl">on</span> <span
                                                class="engl">long</span> <span class="engl">errands,</span> <span
                                                class="engl">or</span> <span class="engl">getting</span> <span
                                                class="engl">him</span> <span class="engl">to</span> <span
                                                class="engl">help</span> <span class="engl">at</span> <span
                                                class="engl">the</span> <span class="engl">mill.</span> <span
                                                class="engl">Little</span> <span class="engl">Hans</span> <span
                                                class="engl">was</span> <span class="engl">very</span> <span
                                                class="engl">much</span> <span class="engl">distressed</span> <span
                                                class="engl">at</span> <span class="engl">times,</span> <span
                                                class="engl">as</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">afraid</span> <span
                                                class="engl">his</span> <span class="engl">flowers</span> <span
                                                class="engl">would</span> <span class="engl">think</span> <span
                                                class="engl">he</span> <span class="engl">had</span> <span
                                                class="engl">forgotten</span> <span class="engl">them,</span> <span
                                                class="engl">but</span> <span class="engl">he</span> <span
                                                class="engl">consoled</span> <span class="engl">himself</span> <span
                                                class="engl">by</span> <span class="engl">the</span> <span
                                                class="engl">reflection</span> <span class="engl">that</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">was</span> <span class="engl">his</span> <span
                                                class="engl">best</span> <span class="engl">friend.</span> <span
                                                class="engl">"Besides,"</span> <span class="engl">he</span> <span
                                                class="engl">used</span> <span class="engl">to</span> <span
                                                class="engl">say,</span> <span class="engl">"he</span> <span
                                                class="engl">is</span> <span class="engl">going</span> <span
                                                class="engl">to</span> <span class="engl">give</span> <span
                                                class="engl">me</span> <span class="engl">his</span> <span
                                                class="engl">wheelbarrow,</span> <span class="engl">and</span> <span
                                                class="engl">that</span> <span class="engl">is</span> <span
                                                class="engl">an</span> <span class="engl">act</span> <span
                                                class="engl">of</span> <span class="engl">pure</span> <span
                                                class="engl">generosity."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'So</span> <span
                                                class="engl">little</span> <span class="engl">Hans</span> <span
                                                class="engl">worked</span> <span class="engl">away</span> <span
                                                class="engl">for</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">and</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">said</span> <span class="engl">all</span> <span
                                                class="engl">kinds</span> <span class="engl">of</span> <span
                                                class="engl">beautiful</span> <span class="engl">things</span> <span
                                                class="engl">about</span> <span class="engl">friendship,</span> <span
                                                class="engl">which</span> <span class="engl">Hans</span> <span
                                                class="engl">took</span> <span class="engl">down</span> <span
                                                class="engl">in</span> <span class="engl">a</span> <span
                                                class="engl">note-book,</span> <span class="engl">and</span> <span
                                                class="engl">used</span> <span class="engl">to</span> <span
                                                class="engl">read</span> <span class="engl">over</span> <span
                                                class="engl">at</span> <span class="engl">night,</span> <span
                                                class="engl">for</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">a</span>
                                        <span class="engl">very</span> <span class="engl">good</span> <span
                                                class="engl">scholar.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Now</span> <span
                                                class="engl">it</span> <span class="engl">happened</span> <span
                                                class="engl">that</span> <span class="engl">one</span> <span
                                                class="engl">evening</span> <span class="engl">little</span> <span
                                                class="engl">Hans</span> <span class="engl">was</span> <span
                                                class="engl">sitting</span> <span class="engl">by</span> <span
                                                class="engl">his</span> <span class="engl">fireside</span> <span
                                                class="engl">when</span> <span class="engl">a</span> <span
                                                class="engl">loud</span> <span class="engl">rap</span> <span
                                                class="engl">came</span> <span class="engl">at</span> <span
                                                class="engl">the</span> <span class="engl">door.</span> <span
                                                class="engl">It</span> <span class="engl">was</span> <span
                                                class="engl">a</span> <span class="engl">very</span> <span
                                                class="engl">wild</span> <span class="engl">night,</span> <span
                                                class="engl">and</span> <span class="engl">the</span> <span
                                                class="engl">wind</span> <span class="engl">was</span> <span
                                                class="engl">blowing</span> <span class="engl">and</span> <span
                                                class="engl">roaring</span> <span class="engl">round</span> <span
                                                class="engl">the</span> <span class="engl">house</span> <span
                                                class="engl">so</span> <span class="engl">terribly</span> <span
                                                class="engl">that</span> <span class="engl">at</span> <span
                                                class="engl">first</span> <span class="engl">he</span> <span
                                                class="engl">thought</span> <span class="engl">it</span> <span
                                                class="engl">was</span> <span class="engl">merely</span> <span
                                                class="engl">the</span> <span class="engl">storm.</span> <span
                                                class="engl">But</span> <span class="engl">a</span> <span
                                                class="engl">second</span> <span class="engl">rap</span> <span
                                                class="engl">came,</span> <span class="engl">and</span> <span
                                                class="engl">then</span> <span class="engl">a</span> <span
                                                class="engl">third,</span> <span class="engl">louder</span> <span
                                                class="engl">than</span> <span class="engl">either</span> <span
                                                class="engl">of</span> <span class="engl">the</span> <span
                                                class="engl">others.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"It</span> <span
                                                class="engl">is</span> <span class="engl">some</span> <span
                                                class="engl">poor</span> <span class="engl">traveller,"</span> <span
                                                class="engl">said</span> <span class="engl">little</span> <span
                                                class="engl">Hans</span> <span class="engl">to</span> <span
                                                class="engl">himself,</span> <span class="engl">and</span> <span
                                                class="engl">he</span> <span class="engl">ran</span> <span
                                                class="engl">to</span> <span class="engl">the</span> <span
                                                class="engl">door.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'There</span> <span
                                                class="engl">stood</span> <span class="engl">the</span> <span
                                                class="engl">Miller</span> <span class="engl">with</span> <span
                                                class="engl">a</span> <span class="engl">lantern</span> <span
                                                class="engl">in</span> <span class="engl">one</span> <span
                                                class="engl">hand</span> <span class="engl">and</span> <span
                                                class="engl">a</span> <span class="engl">big</span> <span
                                                class="engl">stick</span> <span class="engl">in</span> <span
                                                class="engl">the</span> <span class="engl">other.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Dear</span> <span
                                                class="engl">little</span> <span class="engl">Hans,"</span> <span
                                                class="engl">cried</span> <span class="engl">the</span> <span
                                                class="engl">Miller,</span> <span class="engl">"I</span> <span
                                                class="engl">am</span> <span class="engl">in</span>
                                        <span class="engl">great</span> <span class="engl">trouble.</span> <span
                                                class="engl">My</span> <span class="engl">little</span> <span
                                                class="engl">boy</span> <span class="engl">has</span> <span
                                                class="engl">fallen</span> <span class="engl">off</span> <span
                                                class="engl">a</span> <span class="engl">ladder</span> <span
                                                class="engl">and</span> <span class="engl">hurt</span> <span
                                                class="engl">himself,</span> <span class="engl">and</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">going</span> <span class="engl">for</span> <span
                                                class="engl">the</span> <span class="engl">Doctor.</span> <span
                                                class="engl">But</span> <span class="engl">he</span> <span
                                                class="engl">lives</span> <span class="engl">so</span> <span
                                                class="engl">far</span> <span class="engl">away,</span> <span
                                                class="engl">and</span> <span class="engl">it</span> <span
                                                class="engl">is</span> <span class="engl">such</span> <span
                                                class="engl">a</span> <span class="engl">bad</span> <span
                                                class="engl">night,</span> <span class="engl">that</span> <span
                                                class="engl">it</span> <span class="engl">has</span> <span
                                                class="engl">just</span> <span class="engl">occurred</span> <span
                                                class="engl">to</span> <span class="engl">me</span> <span
                                                class="engl">that</span> <span class="engl">it</span> <span
                                                class="engl">would</span> <span class="engl">be</span> <span
                                                class="engl">much</span> <span class="engl">better</span> <span
                                                class="engl">if</span> <span class="engl">you</span> <span
                                                class="engl">went</span> <span class="engl">instead</span> <span
                                                class="engl">of</span> <span class="engl">me.</span> <span
                                                class="engl">You</span> <span class="engl">know</span> <span
                                                class="engl">I</span> <span class="engl">am</span> <span
                                                class="engl">going</span> <span class="engl">to</span> <span
                                                class="engl">give</span> <span class="engl">you</span> <span
                                                class="engl">my</span> <span class="engl">wheelbarrow,</span> <span
                                                class="engl">and</span> <span class="engl">so</span> <span
                                                class="engl">it</span> <span class="engl">is</span> <span
                                                class="engl">only</span> <span class="engl">fair</span> <span
                                                class="engl">that</span> <span class="engl">you</span> <span
                                                class="engl">should</span> <span class="engl">do</span> <span
                                                class="engl">something</span> <span class="engl">for</span> <span
                                                class="engl">me</span> <span class="engl">in</span> <span
                                                class="engl">return."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Certainly,"</span> <span
                                                class="engl">cried</span> <span class="engl">little</span> <span
                                                class="engl">Hans,</span> <span class="engl">"I</span> <span
                                                class="engl">take</span> <span class="engl">it</span> <span
                                                class="engl">quite</span> <span class="engl">as</span> <span
                                                class="engl">a</span> <span class="engl">compliment</span> <span
                                                class="engl">your</span> <span class="engl">coming</span> <span
                                                class="engl">to</span> <span class="engl">me,</span> <span
                                                class="engl">and</span> <span class="engl">I</span> <span
                                                class="engl">will</span> <span class="engl">start</span> <span
                                                class="engl">off</span> <span class="engl">at</span> <span
                                                class="engl">once.</span> <span class="engl">But</span> <span
                                                class="engl">you</span> <span class="engl">must</span> <span
                                                class="engl">lend</span> <span class="engl">me</span> <span
                                                class="engl">your</span> <span class="engl">lantern,</span> <span
                                                class="engl">as</span> <span class="engl">the</span> <span
                                                class="engl">night</span> <span class="engl">is</span> <span
                                                class="engl">so</span> <span class="engl">dark</span> <span
                                                class="engl">that</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">afraid</span> <span
                                                class="engl">I</span> <span class="engl">might</span> <span
                                                class="engl">fall</span> <span class="engl">into</span> <span
                                                class="engl">the</span> <span class="engl">ditch."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"I</span> <span
                                                class="engl">am</span> <span class="engl">very</span> <span
                                                class="engl">sorry,"</span> <span class="engl">answered</span> <span
                                                class="engl">the</span> <span class="engl">Miller,</span> <span
                                                class="engl">"but</span> <span class="engl">it</span> <span
                                                class="engl">is</span> <span class="engl">my</span>
                                        <span class="engl">new</span> <span class="engl">lantern,</span> <span
                                                class="engl">and</span> <span class="engl">it</span> <span
                                                class="engl">would</span> <span class="engl">be</span> <span
                                                class="engl">a</span> <span class="engl">great</span> <span
                                                class="engl">loss</span> <span class="engl">to</span> <span
                                                class="engl">me</span> <span class="engl">if</span> <span
                                                class="engl">anything</span> <span class="engl">happened</span> <span
                                                class="engl">to</span> <span class="engl">it."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Well,</span> <span
                                                class="engl">never</span> <span class="engl">mind,</span> <span
                                                class="engl">I</span> <span class="engl">will</span> <span
                                                class="engl">do</span> <span class="engl">without</span> <span
                                                class="engl">it,"</span> <span class="engl">cried</span> <span
                                                class="engl">little</span> <span class="engl">Hans,</span> <span
                                                class="engl">and</span> <span class="engl">he</span> <span
                                                class="engl">took</span> <span class="engl">down</span> <span
                                                class="engl">his</span> <span class="engl">great</span> <span
                                                class="engl">fur</span> <span class="engl">coat,</span> <span
                                                class="engl">and</span> <span class="engl">his</span> <span
                                                class="engl">warm</span> <span class="engl">scarlet</span> <span
                                                class="engl">cap,</span> <span class="engl">and</span> <span
                                                class="engl">tied</span> <span class="engl">a</span> <span
                                                class="engl">muffler</span> <span class="engl">round</span> <span
                                                class="engl">his</span> <span class="engl">throat,</span> <span
                                                class="engl">and</span> <span class="engl">started</span> <span
                                                class="engl">off.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'What</span> <span
                                                class="engl">a</span> <span class="engl">dreadful</span> <span
                                                class="engl">storm</span> <span class="engl">it</span> <span
                                                class="engl">was!</span> <span class="engl">The</span> <span
                                                class="engl">night</span> <span class="engl">was</span> <span
                                                class="engl">so</span> <span class="engl">black</span> <span
                                                class="engl">that</span> <span class="engl">little</span> <span
                                                class="engl">Hans</span> <span class="engl">could</span> <span
                                                class="engl">hardly</span> <span class="engl">see,</span> <span
                                                class="engl">and</span> <span class="engl">the</span> <span
                                                class="engl">wind</span> <span class="engl">was</span> <span
                                                class="engl">so</span> <span class="engl">strong</span> <span
                                                class="engl">that</span> <span class="engl">he</span> <span
                                                class="engl">could</span> <span class="engl">scarcely</span> <span
                                                class="engl">stand.</span> <span class="engl">However,</span> <span
                                                class="engl">he</span> <span class="engl">was</span> <span
                                                class="engl">very</span> <span class="engl">courageous,</span> <span
                                                class="engl">and</span> <span class="engl">after</span> <span
                                                class="engl">he</span> <span class="engl">had</span> <span
                                                class="engl">been</span> <span class="engl">walking</span> <span
                                                class="engl">about</span> <span class="engl">three</span> <span
                                                class="engl">hours,</span> <span class="engl">he</span> <span
                                                class="engl">arrived</span> <span class="engl">at</span> <span
                                                class="engl">the</span> <span class="engl">Doctor's</span> <span
                                                class="engl">house,</span> <span class="engl">and</span> <span
                                                class="engl">knocked</span> <span class="engl">at</span> <span
                                                class="engl">the</span> <span class="engl">door.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Who</span> <span
                                                class="engl">is</span> <span class="engl">there?"'</span> <span
                                                class="engl">cried</span> <span class="engl">the</span> <span
                                                class="engl">Doctor,</span> <span class="engl">putting</span> <span
                                                class="engl">his</span> <span class="engl">head</span> <span
                                                class="engl">out</span> <span class="engl">of</span> <span
                                                class="engl">his</span> <span class="engl">bedroom</span> <span
                                                class="engl">window.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Little</span> <span
                                                class="engl">Hans,</span> <span class="engl">Doctor."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"What</span> <span
                                                class="engl">do</span> <span class="engl">you</span> <span
                                                class="engl">want,</span> <span class="engl">little</span> <span
                                                class="engl">Hans?"</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"The</span> <span
                                                class="engl">Miller's</span> <span class="engl">son</span> <span
                                                class="engl">has</span> <span class="engl">fallen</span> <span
                                                class="engl">from</span> <span class="engl">a</span> <span
                                                class="engl">ladder,</span> <span class="engl">and</span> <span
                                                class="engl">has</span> <span class="engl">hurt</span> <span
                                                class="engl">himself,</span> <span class="engl">and</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">wants</span> <span class="engl">you</span> <span
                                                class="engl">to</span> <span class="engl">come</span> <span
                                                class="engl">at</span> <span class="engl">once."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"All</span> <span
                                                class="engl">right!"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Doctor;</span> <span
                                                class="engl">and</span> <span class="engl">he</span> <span
                                                class="engl">ordered</span> <span class="engl">his</span> <span
                                                class="engl">horse,</span> <span class="engl">and</span> <span
                                                class="engl">his</span> <span class="engl">big</span> <span
                                                class="engl">boots,</span> <span class="engl">and</span> <span
                                                class="engl">his</span> <span class="engl">lantern,</span> <span
                                                class="engl">and</span> <span class="engl">came</span> <span
                                                class="engl">downstairs,</span> <span class="engl">and</span> <span
                                                class="engl">rode</span> <span class="engl">off</span> <span
                                                class="engl">in</span> <span class="engl">the</span> <span
                                                class="engl">direction</span> <span class="engl">of</span> <span
                                                class="engl">the</span> <span class="engl">Miller's</span> <span
                                                class="engl">house,</span> <span class="engl">little</span> <span
                                                class="engl">Hans</span> <span class="engl">trudging</span> <span
                                                class="engl">behind</span> <span class="engl">him.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'But</span> <span
                                                class="engl">the</span> <span class="engl">storm</span> <span
                                                class="engl">grew</span> <span class="engl">worse</span> <span
                                                class="engl">and</span> <span class="engl">worse,</span> <span
                                                class="engl">and</span> <span class="engl">the</span> <span
                                                class="engl">rain</span> <span class="engl">fell</span> <span
                                                class="engl">in</span> <span class="engl">torrents,</span> <span
                                                class="engl">and</span> <span class="engl">little</span> <span
                                                class="engl">Hans</span> <span class="engl">could</span> <span
                                                class="engl">not</span> <span class="engl">see</span> <span
                                                class="engl">where</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">going,</span> <span
                                                class="engl">or</span> <span class="engl">keep</span> <span
                                                class="engl">up</span> <span class="engl">with</span> <span
                                                class="engl">the</span> <span class="engl">horse.</span> <span
                                                class="engl">At</span> <span class="engl">last</span> <span
                                                class="engl">he</span> <span class="engl">lost</span> <span
                                                class="engl">his</span> <span class="engl">way,</span> <span
                                                class="engl">and</span> <span class="engl">wandered</span> <span
                                                class="engl">off</span> <span class="engl">on</span> <span
                                                class="engl">the</span> <span class="engl">moor,</span> <span
                                                class="engl">which</span> <span class="engl">was</span> <span
                                                class="engl">a</span> <span class="engl">very</span> <span
                                                class="engl">dangerous</span> <span class="engl">place,</span> <span
                                                class="engl">as</span> <span class="engl">it</span> <span
                                                class="engl">was</span> <span class="engl">full</span> <span
                                                class="engl">of</span> <span class="engl">deep</span> <span
                                                class="engl">holes,</span> <span class="engl">and</span> <span
                                                class="engl">there</span> <span class="engl">poor</span> <span
                                                class="engl">little</span> <span class="engl">Hans</span> <span
                                                class="engl">was</span> <span class="engl">drowned.</span> <span
                                                class="engl">His</span> <span class="engl">body</span> <span
                                                class="engl">was</span> <span class="engl">found</span> <span
                                                class="engl">the</span> <span class="engl">next</span> <span
                                                class="engl">day</span> <span class="engl">by</span> <span
                                                class="engl">some</span> <span class="engl">goatherds,</span> <span
                                                class="engl">floating</span> <span class="engl">in</span> <span
                                                class="engl">a</span> <span class="engl">great</span> <span
                                                class="engl">pool</span> <span class="engl">of</span> <span
                                                class="engl">water,</span> <span class="engl">and</span> <span
                                                class="engl">was</span> <span class="engl">brought</span> <span
                                                class="engl">back</span> <span class="engl">by</span> <span
                                                class="engl">them</span> <span class="engl">to</span> <span
                                                class="engl">the</span> <span class="engl">cottage.</span> <span
                                                class="engl">'Everybody</span> <span class="engl">went</span> <span
                                                class="engl">to</span> <span class="engl">little</span> <span
                                                class="engl">Hans's</span> <span class="engl">funeral,</span> <span
                                                class="engl">as</span> <span class="engl">he</span> <span
                                                class="engl">was</span> <span class="engl">so</span> <span
                                                class="engl">popular,</span> <span class="engl">and</span> <span
                                                class="engl">the</span> <span class="engl">Miller</span> <span
                                                class="engl">was</span> <span class="engl">the</span> <span
                                                class="engl">chief</span> <span class="engl">mourner.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"As</span> <span
                                                class="engl">I</span> <span class="engl">was</span> <span
                                                class="engl">his</span> <span class="engl">best</span> <span
                                                class="engl">friend,"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Miller,</span> <span
                                                class="engl">"it</span> <span class="engl">is</span> <span
                                                class="engl">only</span> <span class="engl">fair</span> <span
                                                class="engl">that</span> <span class="engl">I</span> <span
                                                class="engl">should</span> <span class="engl">have</span> <span
                                                class="engl">the</span> <span class="engl">best</span> <span
                                                class="engl">place;"</span> <span class="engl">so</span> <span
                                                class="engl">he</span> <span class="engl">walked</span> <span
                                                class="engl">at</span> <span class="engl">the</span> <span
                                                class="engl">head</span> <span class="engl">of</span> <span
                                                class="engl">the</span> <span class="engl">procession</span> <span
                                                class="engl">in</span> <span class="engl">a</span> <span
                                                class="engl">long</span> <span class="engl">black</span> <span
                                                class="engl">cloak,</span> <span class="engl">and</span> <span
                                                class="engl">every</span> <span class="engl">now</span> <span
                                                class="engl">and</span> <span class="engl">then</span> <span
                                                class="engl">he</span> <span class="engl">wiped</span> <span
                                                class="engl">his</span> <span class="engl">eyes</span> <span
                                                class="engl">with</span> <span class="engl">a</span> <span
                                                class="engl">big</span> <span class="engl">pocket-handkerchief.</span>
                                </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"Little</span> <span
                                                class="engl">Hans</span> <span class="engl">is</span> <span
                                                class="engl">certainly</span> <span class="engl">a</span> <span
                                                class="engl">great</span> <span class="engl">loss</span> <span
                                                class="engl">to</span> <span class="engl">every</span> <span
                                                class="engl">one,"</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Blacksmith,</span> <span
                                                class="engl">when</span> <span class="engl">the</span> <span
                                                class="engl">funeral</span> <span class="engl">was</span> <span
                                                class="engl">over,</span> <span class="engl">and</span> <span
                                                class="engl">they</span> <span class="engl">were</span> <span
                                                class="engl">all</span> <span class="engl">seated</span> <span
                                                class="engl">comfortably</span> <span class="engl">in</span> <span
                                                class="engl">the</span> <span class="engl">inn,</span> <span
                                                class="engl">drinking</span> <span class="engl">spiced</span> <span
                                                class="engl">wine</span> <span class="engl">and</span> <span
                                                class="engl">eating</span> <span class="engl">sweet</span> <span
                                                class="engl">cakes.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'"A</span> <span
                                                class="engl">great</span> <span class="engl">loss</span> <span
                                                class="engl">to</span> <span class="engl">me</span> <span
                                                class="engl">at</span> <span class="engl">any</span> <span
                                                class="engl">rate,"</span> <span class="engl">answered</span> <span
                                                class="engl">the</span> <span class="engl">Miller;</span> <span
                                                class="engl">"why,</span> <span class="engl">I</span> <span
                                                class="engl">had</span> <span class="engl">as</span>
                                        <span class="engl">good</span> <span class="engl">as</span> <span
                                                class="engl">given</span> <span class="engl">him</span> <span
                                                class="engl">my</span> <span class="engl">wheelbarrow,</span> <span
                                                class="engl">and</span> <span class="engl">now</span> <span
                                                class="engl">I</span> <span class="engl">really</span> <span
                                                class="engl">don't</span> <span class="engl">know</span> <span
                                                class="engl">what</span> <span class="engl">to</span> <span
                                                class="engl">do</span> <span class="engl">with</span> <span
                                                class="engl">it.</span> <span class="engl">It</span> <span
                                                class="engl">is</span> <span class="engl">very</span> <span
                                                class="engl">much</span> <span class="engl">in</span> <span
                                                class="engl">my</span> <span class="engl">way</span> <span
                                                class="engl">at</span> <span class="engl">home,</span> <span
                                                class="engl">and</span> <span class="engl">it</span> <span
                                                class="engl">is</span> <span class="engl">in</span> <span
                                                class="engl">such</span> <span class="engl">bad</span> <span
                                                class="engl">repair</span> <span class="engl">that</span> <span
                                                class="engl">I</span> <span class="engl">could</span> <span
                                                class="engl">not</span> <span class="engl">get</span> <span
                                                class="engl">anything</span> <span class="engl">for</span> <span
                                                class="engl">it</span> <span class="engl">if</span> <span
                                                class="engl">I</span>
                                        <span class="engl">sold</span> <span class="engl">it.</span> <span
                                                class="engl">I</span>
                                        <span class="engl">will</span> <span class="engl">certainly</span> <span
                                                class="engl">take</span> <span class="engl">care</span> <span
                                                class="engl">not</span> <span class="engl">to</span> <span
                                                class="engl">give</span> <span class="engl">away</span> <span
                                                class="engl">anything</span> <span class="engl">again.</span> <span
                                                class="engl">One</span> <span class="engl">always</span> <span
                                                class="engl">suffers</span> <span class="engl">for</span> <span
                                                class="engl">being</span> <span class="engl">generous."</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Well?'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Water-rat,</span> <span class="engl">after</span> <span
                                                class="engl">a</span> <span class="engl">long</span> <span
                                                class="engl">pause.</span> <span class="engl">'Well,</span> <span
                                                class="engl">that</span> <span class="engl">is</span> <span
                                                class="engl">the</span> <span class="engl">end,'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Linnet.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'But</span> <span
                                                class="engl">what</span> <span class="engl">became</span> <span
                                                class="engl">of</span> <span class="engl">the</span> <span
                                                class="engl">Miller?'</span> <span class="engl">asked</span> <span
                                                class="engl">the</span> <span class="engl">Water-rat.</span> <span
                                                class="engl">'Oh!</span> <span class="engl">I</span> <span
                                                class="engl">really</span> <span class="engl">don't</span> <span
                                                class="engl">know,'</span> <span class="engl">replied</span> <span
                                                class="engl">the</span> <span class="engl">Linnet,</span> <span
                                                class="engl">'and</span> <span class="engl">I</span> <span
                                                class="engl">am</span> <span class="engl">sure</span> <span
                                                class="engl">that</span> <span class="engl">I</span> <span
                                                class="engl">don't</span> <span class="engl">care.'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'It</span> <span
                                                class="engl">is</span> <span class="engl">quite</span> <span
                                                class="engl">evident</span> <span class="engl">then</span> <span
                                                class="engl">that</span> <span class="engl">you</span> <span
                                                class="engl">have</span> <span class="engl">no</span> <span
                                                class="engl">sympathy</span> <span class="engl">in</span> <span
                                                class="engl">your</span> <span class="engl">nature,'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Water-rat.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'I</span> <span
                                                class="engl">am</span> <span class="engl">afraid</span> <span
                                                class="engl">you</span> <span class="engl">don't</span> <span
                                                class="engl">quite</span> <span class="engl">see</span> <span
                                                class="engl">the</span> <span class="engl">moral</span> <span
                                                class="engl">of</span> <span class="engl">the</span> <span
                                                class="engl">story,'</span> <span class="engl">remarked</span> <span
                                                class="engl">the</span> <span class="engl">Linnet.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'The</span> <span
                                                class="engl">what?'</span> <span class="engl">screamed</span> <span
                                                class="engl">the</span> <span class="engl">Water-rat.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'The</span> <span
                                                class="engl">moral.'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Do</span> <span
                                                class="engl">you</span> <span class="engl">mean</span> <span
                                                class="engl">to</span> <span class="engl">say</span> <span
                                                class="engl">that</span> <span class="engl">the</span> <span
                                                class="engl">story</span> <span class="engl">has</span> <span
                                                class="engl">a</span> <span class="engl">moral?'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Certainly,'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Linnet.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Well,</span> <span
                                                class="engl">really,'</span> <span class="engl">said</span> <span
                                                class="engl">the</span> <span class="engl">Water-rat,</span> <span
                                                class="engl">in</span> <span class="engl">a</span> <span
                                                class="engl">very</span> <span class="engl">angry</span> <span
                                                class="engl">manner,</span> <span class="engl">'I</span> <span
                                                class="engl">think</span> <span class="engl">you</span> <span
                                                class="engl">should</span> <span class="engl">have</span> <span
                                                class="engl">told</span> <span class="engl">me</span> <span
                                                class="engl">that</span> <span class="engl">before</span> <span
                                                class="engl">you</span> <span class="engl">began.</span> <span
                                                class="engl">If</span> <span class="engl">you</span> <span
                                                class="engl">had</span> <span class="engl">done</span> <span
                                                class="engl">so,</span> <span class="engl">I</span> <span
                                                class="engl">certainly</span> <span class="engl">would</span> <span
                                                class="engl">not</span> <span class="engl">have</span> <span
                                                class="engl">listened</span> <span class="engl">to</span> <span
                                                class="engl">you;</span> <span class="engl">in</span> <span
                                                class="engl">fact,</span> <span class="engl">I</span> <span
                                                class="engl">should</span> <span class="engl">have</span> <span
                                                class="engl">said</span> <span class="engl">"Pooh,"</span> <span
                                                class="engl">like</span> <span class="engl">the</span> <span
                                                class="engl">critic.</span> <span class="engl">However,</span> <span
                                                class="engl">I</span> <span class="engl">can</span> <span
                                                class="engl">say</span> <span class="engl">it</span> <span
                                                class="engl">now;'</span> <span class="engl">so</span> <span
                                                class="engl">he</span> <span class="engl">shouted</span> <span
                                                class="engl">out</span> <span class="engl">'Pooh'</span> <span
                                                class="engl">at</span> <span class="engl">the</span> <span
                                                class="engl">top</span> <span class="engl">of</span> <span
                                                class="engl">his</span> <span class="engl">voice,</span> <span
                                                class="engl">gave</span> <span class="engl">a</span> <span
                                                class="engl">whisk</span> <span class="engl">with</span> <span
                                                class="engl">his</span> <span class="engl">tail,</span> <span
                                                class="engl">and</span> <span class="engl">went</span> <span
                                                class="engl">back</span> <span class="engl">into</span> <span
                                                class="engl">his</span> <span class="engl">hole.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'And</span> <span
                                                class="engl">how</span> <span class="engl">do</span> <span
                                                class="engl">you</span> <span class="engl">like</span> <span
                                                class="engl">the</span> <span class="engl">Water-rat?'</span> <span
                                                class="engl">asked</span> <span class="engl">the</span> <span
                                                class="engl">Duck,</span> <span class="engl">who</span> <span
                                                class="engl">came</span> <span class="engl">paddling</span> <span
                                                class="engl">up</span> <span class="engl">some</span> <span
                                                class="engl">minutes</span> <span class="engl">afterwards.</span> <span
                                                class="engl">'He</span> <span class="engl">has</span> <span
                                                class="engl">a</span> <span class="engl">great</span> <span
                                                class="engl">many</span> <span class="engl">good</span> <span
                                                class="engl">points,</span> <span class="engl">but</span> <span
                                                class="engl">for</span> <span class="engl">my</span> <span
                                                class="engl">own</span> <span class="engl">part</span> <span
                                                class="engl">I</span> <span class="engl">have</span> <span
                                                class="engl">a</span> <span class="engl">mother's</span> <span
                                                class="engl">feelings,</span> <span class="engl">and</span> <span
                                                class="engl">I</span> <span class="engl">can</span> <span
                                                class="engl">never</span> <span class="engl">look</span> <span
                                                class="engl">at</span> <span class="engl">a</span> <span
                                                class="engl">confirmed</span> <span class="engl">bachelor</span> <span
                                                class="engl">without</span> <span class="engl">the</span> <span
                                                class="engl">tears</span> <span class="engl">coming</span> <span
                                                class="engl">into</span> <span class="engl">my</span> <span
                                                class="engl">eyes.'</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'I</span> <span
                                                class="engl">am</span> <span class="engl">rather</span> <span
                                                class="engl">afraid</span> <span class="engl">that</span> <span
                                                class="engl">I</span> <span class="engl">have</span> <span
                                                class="engl">annoyed</span> <span class="engl">him,'</span> <span
                                                class="engl">answered</span> <span class="engl">the</span> <span
                                                class="engl">Linnet.</span> <span class="engl">'The</span> <span
                                                class="engl">fact</span> <span class="engl">is,</span> <span
                                                class="engl">that</span> <span class="engl">I</span> <span
                                                class="engl">told</span> <span class="engl">him</span> <span
                                                class="engl">a</span> <span class="engl">story</span> <span
                                                class="engl">with</span> <span class="engl">a</span> <span
                                                class="engl">moral.</span> </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">'Ah!</span> <span
                                                class="engl">that</span>
                                        <span class="engl">is</span> <span class="engl">always</span> <span
                                                class="engl">a</span> <span class="engl">very</span> <span
                                                class="engl">dangerous</span> <span class="engl">thing</span> <span
                                                class="engl">to</span> <span class="engl">do,'</span> <span
                                                class="engl">said</span> <span class="engl">the</span> <span
                                                class="engl">Duck.</span>
                                </p>
                                <p class="english"> <span class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl"></span> <span
                                                class="engl"></span> <span class="engl">And</span> <span
                                                class="engl">I</span> <span class="engl">quite</span> <span
                                                class="engl">agree</span> <span class="engl">with</span> <span
                                                class="engl">her.</span> </p>



                                <p class="ukrainian"><span class="ukr">Одного</span> <span class="ukr">ранку</span>
                                        <span class="ukr">старий</span> <span class="ukr">Водяний</span> <span
                                                class="ukr">Щур</span> <span class="ukr">виткнув</span> <span
                                                class="ukr">голову</span>
                                        <span class="ukr">із</span> <span class="ukr">своєї</span>
                                        <span class="ukr">нори.</span> <span class="ukr">Очі</span>
                                        <span class="ukr">в</span> <span class="ukr">нього</span> <span
                                                class="ukr">були</span>
                                        <span class="ukr">як</span> <span class="ukr">блискучі</span> <span
                                                class="ukr">намистинки,</span> <span class="ukr">вуса</span>
                                        <span class="ukr">сірі</span> <span class="ukr">й</span> <span
                                                class="ukr">шорсткі,</span> <span class="ukr">а</span> <span
                                                class="ukr">довгий</span> <span class="ukr">чорний</span> <span
                                                class="ukr">хвіст</span> <span class="ukr">був</span> <span
                                                class="ukr">ніби</span> <span class="ukr">скачаний</span> <span
                                                class="ukr">з</span> <span class="ukr">гуми.</span></p> 
                                                
                                                <p class="ukrainian"><span
                                                class="ukr">Маленькі</span> <span class="ukr">каченята,</span>
                                        <span class="ukr">жовті,</span> <span class="ukr">наче</span>
                                        <span class="ukr">канарки,</span> <span class="ukr">плавали</span> <span
                                                class="ukr">в</span> <span class="ukr">ставку,</span> <span
                                                class="ukr">а</span>
                                        <span class="ukr">їхня</span> <span class="ukr">мати</span> <span
                                                class="ukr">Качка,</span> <span class="ukr">геть</span> <span
                                                class="ukr">уся</span> <span class="ukr">біла,</span> <span
                                                class="ukr">з</span>
                                        <span class="ukr">яскраво-червоними</span>
                                        <span class="ukr">лапками,</span> <span class="ukr">намагалася</span> <span
                                                class="ukr">навчити</span>
                                        <span class="ukr">їх</span> <span class="ukr">стояти</span>
                                        <span class="ukr">у</span> <span class="ukr">воді</span> <span
                                                class="ukr">вниз</span>
                                        <span class="ukr">головою.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Якщо</span> <span
                                                class="ukr">ви</span> <span class="ukr">не</span> <span
                                                class="ukr">навчитеся</span> <span class="ukr">стояти</span> <span
                                                class="ukr">на</span> <span class="ukr">голові,</span> <span
                                                class="ukr">вас</span> <span class="ukr">ніколи</span> <span
                                                class="ukr">не</span> <span class="ukr">приймуть</span> <span
                                                class="ukr">у</span> <span class="ukr">добре</span> <span
                                                class="ukr">товариство,—</span>
                                        <span class="ukr">промовляла</span> <span class="ukr">вона,</span> <span
                                                class="ukr">раз</span> <span class="ukr">по</span> <span
                                                class="ukr">раз</span>
                                        <span class="ukr">показуючи</span> <span class="ukr">їм,</span> <span
                                                class="ukr">як</span> <span class="ukr">це</span> <span
                                                class="ukr">робиться.</span> <span class="ukr">Проте</span>
                                        <span class="ukr">каченята</span> <span class="ukr">зовсім</span> <span
                                                class="ukr">не</span> <span class="ukr">слухали</span> <span
                                                class="ukr">її.</span> <span class="ukr">Вони</span> <span
                                                class="ukr">були</span> <span class="ukr">ще</span> <span
                                                class="ukr">надто</span> <span class="ukr">малі</span> <span
                                                class="ukr">й</span> <span class="ukr">не</span> <span
                                                class="ukr">розуміли,</span> <span class="ukr">як-то</span> <span
                                                class="ukr">важливо</span> <span class="ukr">бути</span> <span
                                                class="ukr">прийнятим</span>
                                        <span class="ukr">у</span> <span class="ukr">доброму</span>
                                        <span class="ukr">товаристві.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Які</span> <span
                                                class="ukr">неслухняні</span> <span class="ukr">діти!</span>
                                        <span class="ukr">—</span> <span class="ukr">вигукнув</span>
                                        <span class="ukr">Водяний</span> <span class="ukr">Щур.—</span>
                                        <span class="ukr">Та</span> <span class="ukr">за</span> <span
                                                class="ukr">це</span>
                                        <span class="ukr">їх</span> <span class="ukr">варто</span> <span
                                                class="ukr">потопити.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Зовсім</span> <span
                                                class="ukr">ні,—</span> <span class="ukr">заперечила</span> <span
                                                class="ukr">Качка.—</span>
                                        <span class="ukr">Всякий</span> <span class="ukr">початок</span> <span
                                                class="ukr">нелегкий,</span>
                                        <span class="ukr">і</span> <span class="ukr">батьки</span>
                                        <span class="ukr">повинні</span> <span class="ukr">бути</span>
                                        <span class="ukr">терплячими.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Ет,</span> <span
                                                class="ukr">мені</span>
                                        <span class="ukr">батьківські</span>
                                        <span class="ukr">почуття</span> <span class="ukr">не</span>
                                        <span class="ukr">відомі,—</span> <span class="ukr">сказав</span> <span
                                                class="ukr">Водяний</span>
                                        <span class="ukr">Щур,—</span> <span class="ukr">у</span> <span
                                                class="ukr">мене</span>
                                        <span class="ukr">нема</span> <span class="ukr">сім'ї.</span> <span
                                                class="ukr">Я</span>
                                        <span class="ukr">ніколи</span> <span class="ukr">не</span> <span
                                                class="ukr">був</span>
                                        <span class="ukr">одружений</span> <span class="ukr">і</span> <span
                                                class="ukr">взагалі</span> <span class="ukr">не</span> <span
                                                class="ukr">маю</span> <span class="ukr">наміру</span> <span
                                                class="ukr">будь-коли</span>
                                        <span class="ukr">одружуватися.</span> <span class="ukr">Кохання,</span> <span
                                                class="ukr">звісно,</span>
                                        <span class="ukr">річ</span> <span class="ukr">по-своєму</span>
                                        <span class="ukr">непогана,</span> <span class="ukr">проте</span> <span
                                                class="ukr">дружба</span> <span class="ukr">набагато</span> <span
                                                class="ukr">величніша.</span>
                                        <span class="ukr">А</span> <span class="ukr">й</span> <span
                                                class="ukr">справді,</span>
                                        <span class="ukr">я</span> <span class="ukr">не</span> <span
                                                class="ukr">знаю</span>
                                        <span class="ukr">нічого</span> <span class="ukr">величнішого</span>
                                        <span class="ukr">чи</span> <span class="ukr">рідкіснішого</span> <span
                                                class="ukr">на</span>
                                        <span class="ukr">світі,</span> <span class="ukr">ніж</span>
                                        <span class="ukr">вірна</span> <span class="ukr">дружба.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Скажіть,</span> <span
                                                class="ukr">а</span> <span class="ukr">що,</span> <span
                                                class="ukr">на</span>
                                        <span class="ukr">вашу</span> <span class="ukr">думку,</span> <span
                                                class="ukr">вимагається</span> <span class="ukr">від</span>
                                        <span class="ukr">вірного</span> <span class="ukr">друга?</span> <span
                                                class="ukr">—</span> <span class="ukr">втрутилась</span> <span
                                                class="ukr">зелененька</span> <span class="ukr">Коноплянка,</span> <span
                                                class="ukr">що</span>
                                        <span class="ukr">сиділа</span> <span class="ukr">неподалік</span> <span
                                                class="ukr">на</span> <span class="ukr">вербі</span> <span
                                                class="ukr">й</span>
                                        <span class="ukr">чула</span> <span class="ukr">всю</span> <span
                                                class="ukr">цю</span>
                                        <span class="ukr">розмову.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Так,</span> <span
                                                class="ukr">так,</span> <span class="ukr">саме</span> <span
                                                class="ukr">це</span> <span class="ukr">і</span> <span
                                                class="ukr">я</span>
                                        <span class="ukr">хочу</span> <span class="ukr">знати,—</span> <span
                                                class="ukr">сказала</span> <span class="ukr">Качка,</span>
                                        <span class="ukr">а</span> <span class="ukr">сама</span> <span
                                                class="ukr">відпливла</span> <span class="ukr">в</span> <span
                                                class="ukr">інший</span> <span class="ukr">куток</span> <span
                                                class="ukr">ставка</span> <span class="ukr">і</span> <span
                                                class="ukr">знову</span> <span class="ukr">стала</span> <span
                                                class="ukr">вниз</span> <span class="ukr">головою,</span> <span
                                                class="ukr">щоб</span> <span class="ukr">показати</span> <span
                                                class="ukr">гарний</span> <span class="ukr">приклад</span>
                                        <span class="ukr">своїм</span> <span class="ukr">діткам.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Що</span> <span
                                                class="ukr">за</span> <span class="ukr">дурне</span> <span
                                                class="ukr">запитання!</span>
                                        <span class="ukr">—</span> <span class="ukr">вигукнув</span>
                                        <span class="ukr">Водяний</span> <span class="ukr">Щур.—</span>
                                        <span class="ukr">Ну,</span> <span class="ukr">звичайно</span>
                                        <span class="ukr">ж,</span> <span class="ukr">вірний</span>
                                        <span class="ukr">друг</span> <span class="ukr">має</span>
                                        <span class="ukr">бути</span> <span class="ukr">вірний</span>
                                        <span class="ukr">мені.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">А</span> <span
                                                class="ukr">чим</span> <span class="ukr">би</span> <span
                                                class="ukr">ви</span>
                                        <span class="ukr">йому</span> <span class="ukr">віддячили?</span> <span
                                                class="ukr">—</span> <span class="ukr">запитала</span> <span
                                                class="ukr">пташка,</span>
                                        <span class="ukr">погойдуючись</span> <span class="ukr">на</span> <span
                                                class="ukr">сріблястій</span> <span class="ukr">гілочці</span> <span
                                                class="ukr">й</span> <span class="ukr">помахуючи</span> <span
                                                class="ukr">маленькими</span> <span class="ukr">крильцями.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Я</span> <span
                                                class="ukr">вас</span> <span class="ukr">не</span> <span
                                                class="ukr">розумію,—</span> <span class="ukr">відповів</span>
                                        <span class="ukr">Водяний</span> <span class="ukr">Щур.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Дозвольте,</span>
                                        <span class="ukr">я</span> <span class="ukr">вам</span> <span
                                                class="ukr">розповім</span> <span class="ukr">з</span> <span
                                                class="ukr">цього</span> <span class="ukr">приводу</span> <span
                                                class="ukr">одну</span> <span class="ukr">історію,—</span> <span
                                                class="ukr">сказала</span>
                                        <span class="ukr">Коноплянка.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Про</span> <span
                                                class="ukr">мене?</span>
                                        <span class="ukr">—</span> <span class="ukr">запитав</span> <span
                                                class="ukr">Водяний</span>
                                        <span class="ukr">Щур.—</span> <span class="ukr">Тоді</span>
                                        <span class="ukr">я</span> <span class="ukr">охоче</span> <span
                                                class="ukr">послухаю.</span> <span class="ukr">Я</span> <span
                                                class="ukr">страх</span> <span class="ukr">як</span> <span
                                                class="ukr">люблю</span> <span class="ukr">художню</span> <span
                                                class="ukr">літературу.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Її</span> <span
                                                class="ukr">можна</span> <span class="ukr">прикласти</span>
                                        <span class="ukr">і</span> <span class="ukr">до</span> <span
                                                class="ukr">вас,—</span>
                                        <span class="ukr">відповіла</span>
                                        <span class="ukr">Коноплянка;</span> <span class="ukr">вона</span> <span
                                                class="ukr">спурхнула</span>
                                        <span class="ukr">з</span> <span class="ukr">гілочки</span>
                                        <span class="ukr">і,</span> <span class="ukr">сівши</span>
                                        <span class="ukr">на</span> <span class="ukr">берег,</span>
                                        <span class="ukr">почала</span> <span class="ukr">розповідати</span> <span
                                                class="ukr">історію</span>
                                        <span class="ukr">про</span> <span class="ukr">Вірного</span>
                                        <span class="ukr">Друга.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Жив</span> <span
                                                class="ukr">собі</span>
                                        <span class="ukr">колись,—</span> <span class="ukr">повела</span> <span
                                                class="ukr">Коноплянка,—</span>
                                        <span class="ukr">славний</span> <span class="ukr">хлопчина,</span> <span
                                                class="ukr">і</span> <span class="ukr">звали</span> <span
                                                class="ukr">його</span> <span class="ukr">Малий</span> <span
                                                class="ukr">Ганс.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Він</span> <span
                                                class="ukr">був</span> <span class="ukr">видатна</span> <span
                                                class="ukr">людина?</span>
                                        <span class="ukr">—</span> <span class="ukr">запитав</span>
                                        <span class="ukr">Водяний</span> <span class="ukr">Щур.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ні,—</span> <span
                                                class="ukr">відповіла</span>
                                        <span class="ukr">Коноплянка,—</span> <span class="ukr">як</span> <span
                                                class="ukr">на</span> <span class="ukr">мене,</span> <span
                                                class="ukr">він</span> <span class="ukr">нічим</span> <span
                                                class="ukr">особливим</span>
                                        <span class="ukr">не</span> <span class="ukr">вирізнявся,</span> <span
                                                class="ukr">хіба</span>
                                        <span class="ukr">що</span> <span class="ukr">своїм</span>
                                        <span class="ukr">добрим</span> <span class="ukr">серцем</span>
                                        <span class="ukr">та</span> <span class="ukr">потішним</span>
                                        <span class="ukr">круглим,</span> <span class="ukr">веселим</span> <span
                                                class="ukr">обличчям.</span>
                                        <span class="ukr">Він</span> <span class="ukr">жив</span> <span
                                                class="ukr">самотньо</span> <span class="ukr">в</span> <span
                                                class="ukr">маленькій</span> <span class="ukr">хатині</span>
                                        <span class="ukr">і</span> <span class="ukr">з</span> <span
                                                class="ukr">рання</span>
                                        <span class="ukr">до</span> <span class="ukr">смеркання</span> <span
                                                class="ukr">працював</span>
                                        <span class="ukr">у</span> <span class="ukr">своєму</span>
                                        <span class="ukr">садку.</span> <span class="ukr">В</span>
                                        <span class="ukr">усій</span> <span class="ukr">околиці</span>
                                        <span class="ukr">не</span> <span class="ukr">було</span> <span
                                                class="ukr">іншого</span> <span class="ukr">такого</span> <span
                                                class="ukr">чудового</span> <span class="ukr">садочка.</span>
                                        <span class="ukr">Там</span> <span class="ukr">росли</span>
                                        <span class="ukr">і</span> <span class="ukr">турецькі</span>
                                        <span class="ukr">гвоздики,</span> <span class="ukr">і</span>
                                        <span class="ukr">левкої,</span> <span class="ukr">і</span>
                                        <span class="ukr">грицики,</span> <span class="ukr">і</span>
                                        <span class="ukr">жовтець.</span> <span class="ukr">Були</span>
                                        <span class="ukr">там</span> <span class="ukr">червоні</span>
                                        <span class="ukr">та</span> <span class="ukr">жовті</span>
                                        <span class="ukr">троянди,</span> <span class="ukr">шафран</span> <span
                                                class="ukr">бузкового</span>
                                        <span class="ukr">й</span> <span class="ukr">золотавого</span>
                                        <span class="ukr">кольору,</span> <span class="ukr">пурпурові</span> <span
                                                class="ukr">та</span> <span class="ukr">білі</span> <span
                                                class="ukr">фіалки.</span> <span class="ukr">Орлики</span> <span
                                                class="ukr">й</span> <span class="ukr">жеруха,</span> <span
                                                class="ukr">майоран</span>
                                        <span class="ukr">і</span> <span class="ukr">васильки,</span>
                                        <span class="ukr">первоцвіт</span> <span class="ukr">і</span>
                                        <span class="ukr">півники,</span> <span class="ukr">блідо-жовті</span> <span
                                                class="ukr">нарциси</span>
                                        <span class="ukr">й</span> <span class="ukr">червоні</span>
                                        <span class="ukr">гвоздики</span> <span class="ukr">розпукувалися</span> <span
                                                class="ukr">й</span>
                                        <span class="ukr">цвіли</span> <span class="ukr">кожне</span>
                                        <span class="ukr">у</span> <span class="ukr">свій</span> <span
                                                class="ukr">час.</span>
                                        <span class="ukr">Місяці</span> <span class="ukr">йшли</span> <span
                                                class="ukr">за</span> <span class="ukr">місяцями,</span> <span
                                                class="ukr">квіти</span>
                                        <span class="ukr">цвіли</span> <span class="ukr">за</span>
                                        <span class="ukr">квітами,</span> <span class="ukr">і</span>
                                        <span class="ukr">його</span> <span class="ukr">садок</span>
                                        <span class="ukr">завжди</span> <span class="ukr">тішив</span>
                                        <span class="ukr">око</span> <span class="ukr">і</span> <span
                                                class="ukr">був</span>
                                        <span class="ukr">напоєний</span> <span class="ukr">солодкими</span> <span
                                                class="ukr">пахощами.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">Малий</span> <span class="ukr">Ганс</span> <span
                                                class="ukr">мав</span> <span class="ukr">безліч</span> <span
                                                class="ukr">друзів,</span>
                                        <span class="ukr">та</span> <span class="ukr">найвірнішим</span> <span
                                                class="ukr">з</span> <span class="ukr">усіх</span> <span
                                                class="ukr">був</span>
                                        <span class="ukr">Великий</span> <span class="ukr">Г'ю</span> <span
                                                class="ukr">—</span>
                                        <span class="ukr">Мірошник.</span> <span class="ukr">Так,</span> <span
                                                class="ukr">багатий</span> <span class="ukr">Мірошник</span> <span
                                                class="ukr">був</span> <span class="ukr">настільки</span> <span
                                                class="ukr">вірний</span>
                                        <span class="ukr">Малому</span> <span class="ukr">Гансові,</span> <span
                                                class="ukr">що,</span> <span class="ukr">було,</span> <span
                                                class="ukr">не</span> <span class="ukr">мине</span> <span
                                                class="ukr">його</span> <span class="ukr">садка,</span> <span
                                                class="ukr">аби</span> <span class="ukr">не</span> <span
                                                class="ukr">перехилитися</span>
                                        <span class="ukr">через</span> <span class="ukr">тин</span>
                                        <span class="ukr">і</span> <span class="ukr">нарвати</span>
                                        <span class="ukr">букет</span> <span class="ukr">квітів,</span>
                                        <span class="ukr">чи</span> <span class="ukr">оберемок</span>
                                        <span class="ukr">духмяних</span> <span class="ukr">трав,</span> <span
                                                class="ukr">чи,</span> <span class="ukr">коли</span> <span
                                                class="ukr">достигали</span>
                                        <span class="ukr">плоди,</span> <span class="ukr">напхати</span> <span
                                                class="ukr">повні</span> <span class="ukr">кишені</span> <span
                                                class="ukr">слив</span> <span class="ukr">і</span> <span
                                                class="ukr">вишень.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">У</span> <span
                                                class="ukr">справжніх</span> <span class="ukr">друзів</span> <span
                                                class="ukr">усе</span> <span class="ukr">має</span> <span
                                                class="ukr">бути</span> <span class="ukr">спільне,—</span> <span
                                                class="ukr">казав</span>
                                        <span class="ukr">Мірошник,</span> <span class="ukr">а</span>
                                        <span class="ukr">Малий</span> <span class="ukr">Ганс</span>
                                        <span class="ukr">кивав</span> <span class="ukr">головою</span>
                                        <span class="ukr">та</span> <span class="ukr">усміхався:</span>
                                        <span class="ukr">він</span> <span class="ukr">дуже</span>
                                        <span class="ukr">пишався,</span> <span class="ukr">що</span>
                                        <span class="ukr">має</span> <span class="ukr">друга</span>
                                        <span class="ukr">з</span> <span class="ukr">такими</span>
                                        <span class="ukr">шляхетними</span> <span class="ukr">думками.</span> </p>
                                <p class="ukrainian"> <span class="ukr">Щоправда,</span> <span class="ukr">сусіди</span>
                                        <span class="ukr">часом</span> <span class="ukr">дивувалися,</span> <span
                                                class="ukr">чому</span>
                                        <span class="ukr">багатий</span> <span class="ukr">Мірошник</span> <span
                                                class="ukr">ніколи</span>
                                        <span class="ukr">нічим</span> <span class="ukr">не</span>
                                        <span class="ukr">віддячить</span> <span class="ukr">Малому</span> <span
                                                class="ukr">Гансові,</span>
                                        <span class="ukr">хоч</span> <span class="ukr">у</span> <span
                                                class="ukr">млині</span>
                                        <span class="ukr">в</span> <span class="ukr">нього</span> <span
                                                class="ukr">сто</span>
                                        <span class="ukr">мішків</span> <span class="ukr">борошна,</span>
                                        <span class="ukr">а</span> <span class="ukr">вдома</span> <span
                                                class="ukr">шість</span>
                                        <span class="ukr">дійних</span> <span class="ukr">корів</span> <span
                                                class="ukr">та</span> <span class="ukr">велика</span> <span
                                                class="ukr">отара</span> <span class="ukr">тонкорунних</span> <span
                                                class="ukr">овець.</span>
                                        <span class="ukr">Але</span> <span class="ukr">Малий</span>
                                        <span class="ukr">Ганс</span> <span class="ukr">ніколи</span>
                                        <span class="ukr">над</span> <span class="ukr">цим</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">задумувався,</span>
                                        <span class="ukr">і</span> <span class="ukr">не</span> <span
                                                class="ukr">було</span>
                                        <span class="ukr">йому</span> <span class="ukr">більшої</span> <span
                                                class="ukr">втіхи,</span>
                                        <span class="ukr">ніж</span> <span class="ukr">слухати</span>
                                        <span class="ukr">солодкі</span> <span class="ukr">Мірошникові</span> <span
                                                class="ukr">слова</span>
                                        <span class="ukr">про</span> <span class="ukr">безкорисливість</span> <span
                                                class="ukr">вірної</span> <span class="ukr">дружби.</span> </p>
                                <p class="ukrainian"> <span class="ukr">Отож</span> <span class="ukr">Малий</span> <span
                                                class="ukr">Ганс</span> <span class="ukr">працював</span> <span
                                                class="ukr">собі</span> <span class="ukr">в</span> <span
                                                class="ukr">своєму</span> <span class="ukr">садку.</span> <span
                                                class="ukr">Навесні,</span>
                                        <span class="ukr">влітку</span> <span class="ukr">й</span>
                                        <span class="ukr">восени</span> <span class="ukr">йому</span>
                                        <span class="ukr">велося</span> <span class="ukr">добре.</span>
                                        <span class="ukr">Але</span> <span class="ukr">взимку,</span>
                                        <span class="ukr">коли</span> <span class="ukr">в</span> <span
                                                class="ukr">нього</span>
                                        <span class="ukr">не</span> <span class="ukr">було</span> <span
                                                class="ukr">більше</span> <span class="ukr">ні</span> <span
                                                class="ukr">квітів,</span> <span class="ukr">ні</span> <span
                                                class="ukr">плодів,</span> <span class="ukr">які</span> <span
                                                class="ukr">можна</span> <span class="ukr">було</span> <span
                                                class="ukr">б</span> <span class="ukr">понести</span> <span
                                                class="ukr">на</span> <span class="ukr">базар,</span> <span
                                                class="ukr">він</span> <span class="ukr">сидів</span> <span
                                                class="ukr">холодний</span>
                                        <span class="ukr">і</span> <span class="ukr">голодний</span>
                                        <span class="ukr">і</span> <span class="ukr">часто</span> <span
                                                class="ukr">лягав</span>
                                        <span class="ukr">спати,</span> <span class="ukr">повечерявши</span> <span
                                                class="ukr">кількома</span> <span class="ukr">сухими</span>
                                        <span class="ukr">грушками</span> <span class="ukr">чи</span>
                                        <span class="ukr">твердими</span> <span class="ukr">горіхами.</span> <span
                                                class="ukr">До</span> <span class="ukr">того</span> <span
                                                class="ukr">ж</span>
                                        <span class="ukr">узимку</span> <span class="ukr">він</span> <span
                                                class="ukr">був</span> <span class="ukr">дуже</span> <span
                                                class="ukr">самотній,</span> <span class="ukr">бо</span> <span
                                                class="ukr">в</span> <span class="ukr">ту</span> <span
                                                class="ukr">пору</span>
                                        <span class="ukr">Мірошник</span> <span class="ukr">ніколи</span> <span
                                                class="ukr">не</span> <span class="ukr">навідувався</span> <span
                                                class="ukr">до</span>
                                        <span class="ukr">нього.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Нічого</span>
                                        <span class="ukr">мені</span> <span class="ukr">ходити</span>
                                        <span class="ukr">до</span> <span class="ukr">Малого</span>
                                        <span class="ukr">Ганса,</span> <span class="ukr">доки</span>
                                        <span class="ukr">ще</span> <span class="ukr">лежить</span>
                                        <span class="ukr">сніг,—</span> <span class="ukr">казав</span>
                                        <span class="ukr">був</span> <span class="ukr">Мірошник</span>
                                        <span class="ukr">своїй</span> <span class="ukr">дружині.—</span> <span
                                                class="ukr">Адже</span>
                                        <span class="ukr">коли</span> <span class="ukr">в</span> <span
                                                class="ukr">людини</span>
                                        <span class="ukr">скрута,</span>
                                        <span class="ukr">їй</span> <span class="ukr">краще</span>
                                        <span class="ukr">не</span> <span class="ukr">надокучати</span>
                                        <span class="ukr">відвідинами.</span> <span class="ukr">Принаймні</span> <span
                                                class="ukr">я</span> <span class="ukr">так</span> <span
                                                class="ukr">розумію</span> <span class="ukr">дружбу,</span> <span
                                                class="ukr">і</span> <span class="ukr">я</span> <span
                                                class="ukr">переконаний,</span>
                                        <span class="ukr">що</span> <span class="ukr">чиню</span> <span
                                                class="ukr">слушно.</span> <span class="ukr">От</span> <span
                                                class="ukr">почекаю</span> <span class="ukr">до</span> <span
                                                class="ukr">весни,</span> <span class="ukr">а</span> <span
                                                class="ukr">тоді</span> <span class="ukr">навідаюсь,</span>
                                        <span class="ukr">і</span> <span class="ukr">він</span> <span
                                                class="ukr">наповнить</span> <span class="ukr">мій</span> <span
                                                class="ukr">великий</span> <span class="ukr">кошик</span> <span
                                                class="ukr">первоцвітом.</span> <span class="ukr">Це</span>
                                        <span class="ukr">для</span> <span class="ukr">нього</span>
                                        <span class="ukr">буде</span> <span class="ukr">така</span>
                                        <span class="ukr">радість!</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Ти</span> <span
                                                class="ukr">справді</span>
                                        <span class="ukr">тільки</span>
                                        <span class="ukr">й</span> <span class="ukr">думаєш</span>
                                        <span class="ukr">про</span> <span class="ukr">інших,—</span>
                                        <span class="ukr">зауважила</span> <span class="ukr">дружина,</span> <span
                                                class="ukr">що</span> <span class="ukr">сиділа</span> <span
                                                class="ukr">у</span>
                                        <span class="ukr">зручному</span> <span class="ukr">кріслі</span>
                                        <span class="ukr">перед</span> <span class="ukr">каміном,</span> <span
                                                class="ukr">де</span> <span class="ukr">палахкотіли</span> <span
                                                class="ukr">соснові</span>
                                        <span class="ukr">дрова,-весь</span> <span class="ukr">час</span> <span
                                                class="ukr">думаєш</span> <span class="ukr">про</span> <span
                                                class="ukr">інших.</span> <span class="ukr">Аж</span> <span
                                                class="ukr">душа</span> <span class="ukr">радіє,</span> <span
                                                class="ukr">коли</span> <span class="ukr">слухаєш,</span> <span
                                                class="ukr">як</span> <span class="ukr">ти</span> <span
                                                class="ukr">мовиш</span>
                                        <span class="ukr">про</span> <span class="ukr">дружбу.</span> <span
                                                class="ukr">Наш</span> <span class="ukr">священик</span> <span
                                                class="ukr">і</span> <span class="ukr">той,</span> <span
                                                class="ukr">мабуть,</span> <span class="ukr">не</span> <span
                                                class="ukr">вміє</span> <span class="ukr">так</span> <span
                                                class="ukr">гарно</span> <span class="ukr">говорити,</span>
                                        <span class="ukr">як</span> <span class="ukr">ти,</span> <span
                                                class="ukr">хоч</span>
                                        <span class="ukr">він</span> <span class="ukr">і</span> <span
                                                class="ukr">живе</span>
                                        <span class="ukr">в</span> <span class="ukr">триповерховому</span>
                                        <span class="ukr">будинку</span> <span class="ukr">і</span>
                                        <span class="ukr">носить</span> <span class="ukr">золотого</span> <span
                                                class="ukr">персня</span>
                                        <span class="ukr">на</span> <span class="ukr">мізинці.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">А</span> <span
                                                class="ukr">чи</span> <span class="ukr">не</span> <span
                                                class="ukr">можна</span>
                                        <span class="ukr">запросити</span> <span class="ukr">Малого</span>
                                        <span class="ukr">Ганса</span> <span class="ukr">до</span>
                                        <span class="ukr">нас</span> <span class="ukr">додому?</span>
                                        <span class="ukr">—</span> <span class="ukr">запитав</span>
                                        <span class="ukr">Мірошника</span> <span class="ukr">найменший</span> <span
                                                class="ukr">синок.—</span>
                                        <span class="ukr">Якщо</span> <span class="ukr">в</span> <span
                                                class="ukr">бідного</span> <span class="ukr">Ганса</span> <span
                                                class="ukr">скрута,</span> <span class="ukr">я</span> <span
                                                class="ukr">поділюся</span> <span class="ukr">з</span> <span
                                                class="ukr">ним</span> <span class="ukr">своєю</span> <span
                                                class="ukr">кашею</span> <span class="ukr">і</span> <span
                                                class="ukr">покажу</span> <span class="ukr">йому</span> <span
                                                class="ukr">моїх</span> <span class="ukr">білих</span> <span
                                                class="ukr">кролів.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Яке</span> <span
                                                class="ukr">ж</span> <span class="ukr">ти</span> <span
                                                class="ukr">дурне!</span>
                                        <span class="ukr">—</span> <span class="ukr">крикнув</span> <span
                                                class="ukr">на</span>
                                        <span class="ukr">нього</span> <span class="ukr">Мірошник.—</span>
                                        <span class="ukr">I</span> <span class="ukr">навіщо</span>
                                        <span class="ukr">тільки</span> <span class="ukr">посилаю</span> <span
                                                class="ukr">тебе</span> <span class="ukr">до</span> <span
                                                class="ukr">школи?</span> <span class="ukr">Ніяка</span> <span
                                                class="ukr">наука</span> <span class="ukr">не</span> <span
                                                class="ukr">йде</span> <span class="ukr">тобі</span> <span
                                                class="ukr">до</span>
                                        <span class="ukr">голови!</span> <span class="ukr">Адже</span> <span
                                                class="ukr">якби</span> <span class="ukr">Малий</span> <span
                                                class="ukr">Ганс</span> <span class="ukr">прийшов</span> <span
                                                class="ukr">сюди</span> <span class="ukr">та</span> <span
                                                class="ukr">побачив</span> <span class="ukr">нашу</span> <span
                                                class="ukr">теплу</span> <span class="ukr">хату,</span> <span
                                                class="ukr">й</span> <span class="ukr">нашу</span> <span
                                                class="ukr">добру</span> <span class="ukr">вечерю,</span> <span
                                                class="ukr">і</span> <span class="ukr">велике</span> <span
                                                class="ukr">барило</span> <span class="ukr">червоного</span>
                                        <span class="ukr">вина,</span> <span class="ukr">він</span>
                                        <span class="ukr">би</span> <span class="ukr">ще,</span> <span
                                                class="ukr">чого</span>
                                        <span class="ukr">доброго,</span> <span class="ukr">позаздрив</span> <span
                                                class="ukr">нам,</span>
                                        <span class="ukr">а</span> <span class="ukr">на</span> <span
                                                class="ukr">світі</span>
                                        <span class="ukr">нема</span> <span class="ukr">нічого</span> <span
                                                class="ukr">страшнішого</span>
                                        <span class="ukr">від</span> <span class="ukr">заздрощів,</span> <span
                                                class="ukr">вони</span>
                                        <span class="ukr">будь-кого</span> <span class="ukr">можуть</span> <span
                                                class="ukr">зіпсувати.</span>
                                        <span class="ukr">I</span> <span class="ukr">я,</span> <span
                                                class="ukr">звісно,</span>
                                        <span class="ukr">нізащо</span>
                                        <span class="ukr">не</span> <span class="ukr">дозволю,</span>
                                        <span class="ukr">щоб</span> <span class="ukr">Ганс</span>
                                        <span class="ukr">дійшов</span> <span class="ukr">до</span>
                                        <span class="ukr">такого.</span> <span class="ukr">Я</span>
                                        <span class="ukr">його</span> <span class="ukr">найкращий</span> <span
                                                class="ukr">друг,</span>
                                        <span class="ukr">і</span> <span class="ukr">я</span> <span
                                                class="ukr">завжди</span>
                                        <span class="ukr">дбатиму,</span>
                                        <span class="ukr">аби</span> <span class="ukr">в</span> <span
                                                class="ukr">його</span>
                                        <span class="ukr">душу</span> <span class="ukr">не</span> <span
                                                class="ukr">закралася</span> <span class="ukr">спокуса.</span> <span
                                                class="ukr">До</span> <span class="ukr">того</span> <span
                                                class="ukr">ж,</span>
                                        <span class="ukr">якби</span> <span class="ukr">Ганс</span> <span
                                                class="ukr">прийшов</span> <span class="ukr">сюди,</span> <span
                                                class="ukr">він,</span> <span class="ukr">чого</span> <span
                                                class="ukr">доброго,</span> <span class="ukr">попросив</span>
                                        <span class="ukr">би</span> <span class="ukr">позичити</span>
                                        <span class="ukr">борошна,</span> <span class="ukr">а</span>
                                        <span class="ukr">цього</span> <span class="ukr">я</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">можу</span> <span class="ukr">зробити.</span> <span
                                                class="ukr">Борошно</span>
                                        <span class="ukr">—</span> <span class="ukr">то</span> <span
                                                class="ukr">одна</span>
                                        <span class="ukr">річ,</span> <span class="ukr">а</span> <span
                                                class="ukr">дружба</span>
                                        <span class="ukr">—</span> <span class="ukr">зовсім</span> <span
                                                class="ukr">інша,</span> <span class="ukr">і</span> <span
                                                class="ukr">їх</span>
                                        <span class="ukr">не</span> <span class="ukr">слід</span> <span
                                                class="ukr">змішувати.</span>
                                        <span class="ukr">Ці</span> <span class="ukr">слова,</span>
                                        <span class="ukr">до</span> <span class="ukr">речі,</span>
                                        <span class="ukr">пишуться</span> <span class="ukr">теж</span>
                                        <span class="ukr">по-різному</span> <span class="ukr">й</span>
                                        <span class="ukr">означають</span> <span class="ukr">різні</span> <span
                                                class="ukr">речі.</span> <span class="ukr">Це</span> <span
                                                class="ukr">кожному</span> <span class="ukr">зрозуміло.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Як</span> <span
                                                class="ukr">ти</span> <span class="ukr">тільки</span> <span
                                                class="ukr">гарно</span> <span class="ukr">говориш!</span>
                                        <span class="ukr">—</span> <span class="ukr">промовила</span>
                                        <span class="ukr">Мірошникова</span> <span class="ukr">дружина,</span> <span
                                                class="ukr">наливаючи</span>
                                        <span class="ukr">собі</span> <span class="ukr">великий</span>
                                        <span class="ukr">кухоль</span> <span class="ukr">підігрітого</span> <span
                                                class="ukr">елю.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Багато</span> <span
                                                class="ukr">хто</span> <span class="ukr">робить</span> <span
                                                class="ukr">добрі</span> <span class="ukr">діла,—</span> <span
                                                class="ukr">відповів</span>
                                        <span class="ukr">Мірошник,—</span> <span class="ukr">але</span> <span
                                                class="ukr">мало</span> <span class="ukr">хто</span> <span
                                                class="ukr">вміє</span> <span class="ukr">добре</span> <span
                                                class="ukr">говорити.</span>
                                        <span class="ukr">Отже,</span> <span class="ukr">говорити</span> <span
                                                class="ukr">добре</span>
                                        <span class="ukr">—</span> <span class="ukr">набагато</span>
                                        <span class="ukr">важче,</span> <span class="ukr">а</span>
                                        <span class="ukr">тому</span> <span class="ukr">й</span> <span
                                                class="ukr">достойніше.</span> <span class="ukr">I</span> <span
                                                class="ukr">Мірошник</span> <span class="ukr">суворо</span>
                                        <span class="ukr">зиркнув</span> <span class="ukr">через</span>
                                        <span class="ukr">стіл</span> <span class="ukr">на</span> <span
                                                class="ukr">свого</span>
                                        <span class="ukr">синка,</span> <span class="ukr">який</span> <span
                                                class="ukr">так</span> <span class="ukr">засоромився,</span> <span
                                                class="ukr">що</span>
                                        <span class="ukr">похнюпив</span> <span class="ukr">голову,</span> <span
                                                class="ukr">весь</span> <span class="ukr">спаленів,</span> <span
                                                class="ukr">і</span> <span class="ukr">сльози</span> <span
                                                class="ukr">його</span> <span class="ukr">закрапотіли</span> <span
                                                class="ukr">просто</span>
                                        <span class="ukr">в</span> <span class="ukr">чай.</span> <span
                                                class="ukr">Але</span>
                                        <span class="ukr">він</span> <span class="ukr">був</span> <span
                                                class="ukr">ще</span>
                                        <span class="ukr">дитина,</span> <span class="ukr">отже</span> <span
                                                class="ukr">ви</span> <span class="ukr">повинні</span> <span
                                                class="ukr">пробачити</span> <span class="ukr">йому</span>
                                        <span class="ukr">це.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Оце</span> <span
                                                class="ukr">й</span> <span class="ukr">кінець</span> <span
                                                class="ukr">історії?</span> <span class="ukr">—</span> <span
                                                class="ukr">поцікавився</span> <span class="ukr">Водяний</span>
                                        <span class="ukr">Щур.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Та</span> <span
                                                class="ukr">ні!</span> <span class="ukr">—</span> <span
                                                class="ukr">відповіла</span> <span class="ukr">Коноплянка.—</span> <span
                                                class="ukr">Це</span>
                                        <span class="ukr">тільки</span> <span class="ukr">початок.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Тоді</span> <span
                                                class="ukr">ви</span> <span class="ukr">відстали</span> <span
                                                class="ukr">від</span> <span class="ukr">епохи,—</span> <span
                                                class="ukr">сказав</span> <span class="ukr">Водяний</span>
                                        <span class="ukr">Щур.—</span> <span class="ukr">Сьогодні</span> <span
                                                class="ukr">кожний</span>
                                        <span class="ukr">порядний</span> <span class="ukr">оповідач</span> <span
                                                class="ukr">починає</span>
                                        <span class="ukr">від</span> <span class="ukr">кінця,</span>
                                        <span class="ukr">потім</span> <span class="ukr">переходить</span> <span
                                                class="ukr">до</span> <span class="ukr">початку</span> <span
                                                class="ukr">і</span> <span class="ukr">закінчує</span> <span
                                                class="ukr">серединою.</span>
                                        <span class="ukr">Це</span> <span class="ukr">найновіша</span>
                                        <span class="ukr">манера.</span> <span class="ukr">Я</span>
                                        <span class="ukr">чув</span> <span class="ukr">про</span> <span
                                                class="ukr">неї</span>
                                        <span class="ukr">цими</span> <span class="ukr">днями</span> <span
                                                class="ukr">від</span> <span class="ukr">одного</span> <span
                                                class="ukr">критика,</span>
                                        <span class="ukr">який</span> <span class="ukr">прогулювався</span> <span
                                                class="ukr">навколо</span> <span class="ukr">ставка</span>
                                        <span class="ukr">з</span> <span class="ukr">якимсь</span>
                                        <span class="ukr">молодиком.</span> <span class="ukr">Він</span> <span
                                                class="ukr">довго</span> <span class="ukr">розводився</span> <span
                                                class="ukr">на</span> <span class="ukr">цю</span> <span
                                                class="ukr">тему</span>
                                        <span class="ukr">і,</span> <span class="ukr">безперечно,</span>
                                        <span class="ukr">казав</span> <span class="ukr">правду,</span>
                                        <span class="ukr">бо</span> <span class="ukr">ж</span> <span
                                                class="ukr">був</span>
                                        <span class="ukr">зовсім</span> <span class="ukr">лисий</span> <span
                                                class="ukr">і</span> <span class="ukr">мав</span> <span
                                                class="ukr">сині</span>
                                        <span class="ukr">окуляри</span> <span class="ukr">на</span> <span
                                                class="ukr">носі,</span> <span class="ukr">і</span> <span
                                                class="ukr">тільки</span> <span class="ukr">той</span> <span
                                                class="ukr">молодик</span> <span class="ukr">хотів</span> <span
                                                class="ukr">що-небудь</span> <span class="ukr">заперечити,</span> <span
                                                class="ukr">як</span>
                                        <span class="ukr">критик</span> <span class="ukr">відразу</span> <span
                                                class="ukr">на</span> <span class="ukr">це:</span> <span
                                                class="ukr">"Тьху!"</span> <span class="ukr">Але,</span> <span
                                                class="ukr">будь</span> <span class="ukr">ласка,</span> <span
                                                class="ukr">розповідайте</span>
                                        <span class="ukr">далі.</span> <span class="ukr">Мені</span>
                                        <span class="ukr">страшенно</span> <span class="ukr">подобається</span> <span
                                                class="ukr">Мірошник.</span> <span class="ukr">Я</span> <span
                                                class="ukr">сам</span> <span class="ukr">маю</span> <span
                                                class="ukr">багато</span> <span class="ukr">різних</span> <span
                                                class="ukr">прекрасних</span> <span class="ukr">почуттів,</span> <span
                                                class="ukr">і</span> <span class="ukr">я</span> <span
                                                class="ukr">його</span>
                                        <span class="ukr">чудово</span> <span class="ukr">розумію,</span>
                                        <span class="ukr">цього</span> <span class="ukr">Мірошника.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">I</span> <span
                                                class="ukr">от,—</span> <span class="ukr">вела</span> <span
                                                class="ukr">далі</span> <span class="ukr">Коноплянка,</span>
                                        <span class="ukr">стрибаючи</span> <span class="ukr">з</span>
                                        <span class="ukr">ноги</span> <span class="ukr">на</span> <span
                                                class="ukr">ногу,—</span> <span class="ukr">тільки-но</span>
                                        <span class="ukr">минула</span> <span class="ukr">зима</span>
                                        <span class="ukr">і</span> <span class="ukr">первоцвіт</span>
                                        <span class="ukr">розкрив</span> <span class="ukr">свої</span>
                                        <span class="ukr">блідо-жовті</span> <span class="ukr">зірочки,</span> <span
                                                class="ukr">Мірошник</span>
                                        <span class="ukr">сказав</span> <span class="ukr">дружині,</span> <span
                                                class="ukr">що</span> <span class="ukr">піде</span> <span
                                                class="ukr">провідати</span>
                                        <span class="ukr">Малого</span> <span class="ukr">Ганса.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ну,</span> <span
                                                class="ukr">що</span> <span class="ukr">за</span> <span
                                                class="ukr">золоте</span> <span class="ukr">в</span> <span
                                                class="ukr">тебе</span> <span class="ukr">серце!</span> <span
                                                class="ukr">—</span> <span class="ukr">вигукнула</span> <span
                                                class="ukr">дружина.—</span>
                                        <span class="ukr">Ти</span> <span class="ukr">завжди</span>
                                        <span class="ukr">думаєш</span> <span class="ukr">про</span>
                                        <span class="ukr">інших.</span> <span class="ukr">Не</span>
                                        <span class="ukr">забудь</span> <span class="ukr">тільки</span>
                                        <span class="ukr">взяти</span> <span class="ukr">кошика</span>
                                        <span class="ukr">на</span> <span class="ukr">квіти.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">Мірошник</span>
                                        <span class="ukr">прив'язав</span> <span class="ukr">крила</span> <span
                                                class="ukr">вітряка</span> <span class="ukr">важким</span> <span
                                                class="ukr">залізним</span>
                                        <span class="ukr">ланцюгом</span> <span class="ukr">і</span>
                                        <span class="ukr">попрямував</span> <span class="ukr">з</span>
                                        <span class="ukr">горба</span> <span class="ukr">вниз</span>
                                        <span class="ukr">з</span> <span class="ukr">порожнім</span>
                                        <span class="ukr">кошиком</span> <span class="ukr">в</span>
                                        <span class="ukr">руці.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Доброго</span> <span
                                                class="ukr">ранку,</span> <span class="ukr">Малий</span> <span
                                                class="ukr">Гансе!</span> <span class="ukr">—</span> <span
                                                class="ukr">привітався</span> <span class="ukr">Мірошник.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">О,</span> <span
                                                class="ukr">доброго</span> <span class="ukr">вам</span> <span
                                                class="ukr">ранку!</span> <span class="ukr">—</span> <span
                                                class="ukr">відповів</span> <span class="ukr">Ганс,</span>
                                        <span class="ukr">спираючись</span> <span class="ukr">на</span>
                                        <span class="ukr">заступ</span> <span class="ukr">та</span>
                                        <span class="ukr">радісно</span> <span class="ukr">усміхаючись.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">I</span> <span
                                                class="ukr">як</span> <span class="ukr">ти</span> <span
                                                class="ukr">перебув</span> <span class="ukr">зиму?</span> <span
                                                class="ukr">—</span> <span class="ukr">запитав</span> <span
                                                class="ukr">Мірошник.</span> <span class="ukr">—</span> <span
                                                class="ukr">Ах,</span> <span class="ukr">які</span>
                                        <span class="ukr">ви</span> <span class="ukr">люб'язні!</span> <span
                                                class="ukr">—</span> <span class="ukr">вигукнув</span> <span
                                                class="ukr">Ганс.—</span> <span class="ukr">Які</span> <span
                                                class="ukr">ви</span> <span class="ukr">люб'язні,</span> <span
                                                class="ukr">що</span> <span class="ukr">питаєте</span> <span
                                                class="ukr">мене</span> <span class="ukr">про</span> <span
                                                class="ukr">це.</span> <span class="ukr">Сказати</span> <span
                                                class="ukr">правду,</span> <span class="ukr">мені</span> <span
                                                class="ukr">було</span> <span class="ukr">дуже</span> <span
                                                class="ukr">скрутно.</span> <span class="ukr">Та</span> <span
                                                class="ukr">от</span> <span class="ukr">знову</span> <span
                                                class="ukr">прийшла</span> <span class="ukr">весна</span> <span
                                                class="ukr">і</span> <span class="ukr">я</span> <span
                                                class="ukr">почуваю</span>
                                        <span class="ukr">себе</span> <span class="ukr">чудово,</span> <span
                                                class="ukr">та</span> <span class="ukr">й</span> <span
                                                class="ukr">квіти</span>
                                        <span class="ukr">гарно</span> <span class="ukr">розвиваються.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">А</span> <span
                                                class="ukr">ми</span> <span class="ukr">часто</span> <span
                                                class="ukr">згадували</span>
                                        <span class="ukr">про</span> <span class="ukr">тебе,</span>
                                        <span class="ukr">Гансе,—</span> <span class="ukr">сказав</span> <span
                                                class="ukr">Мірошник,—</span>
                                        <span class="ukr">все</span> <span class="ukr">думали,</span>
                                        <span class="ukr">як</span> <span class="ukr">ти</span> <span
                                                class="ukr">там.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ви</span> <span
                                                class="ukr">такі</span> <span class="ukr">добрі,—</span> <span
                                                class="ukr">зрадів</span> <span class="ukr">Ганс.—</span> <span
                                                class="ukr">А</span> <span class="ukr">я</span> <span
                                                class="ukr">вже</span>
                                        <span class="ukr">почав</span> <span class="ukr">був</span> <span
                                                class="ukr">потерпати,</span>
                                        <span class="ukr">чи</span> <span class="ukr">не</span> <span
                                                class="ukr">забули</span>
                                        <span class="ukr">ви</span> <span class="ukr">мене.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Гансе,</span> <span
                                                class="ukr">ти</span> <span class="ukr">мене</span> <span
                                                class="ukr">дивуєш,—</span> <span class="ukr">відповів</span>
                                        <span class="ukr">Мірошник,—</span> <span class="ukr">друзів</span> <span
                                                class="ukr">не</span> <span class="ukr">забувають.</span> <span
                                                class="ukr">Тим-то</span>
                                        <span class="ukr">й</span> <span class="ukr">гарна</span> <span
                                                class="ukr">дружба.</span> <span class="ukr">От</span> <span
                                                class="ukr">тільки</span> <span class="ukr">навряд</span> <span
                                                class="ukr">чи</span> <span class="ukr">ти</span> <span
                                                class="ukr">розумієш</span> <span class="ukr">усю</span> <span
                                                class="ukr">поезію</span> <span class="ukr">життя.</span> <span
                                                class="ukr">До</span> <span class="ukr">речі,</span> <span
                                                class="ukr">який</span> <span class="ukr">чудовйй</span> <span
                                                class="ukr">у</span> <span class="ukr">тебе</span> <span
                                                class="ukr">первоцвіт!</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Він</span> <span
                                                class="ukr">і</span> <span class="ukr">справді</span> <span
                                                class="ukr">чудовий,—</span> <span class="ukr">погодився</span>
                                        <span class="ukr">Ганс.—</span> <span class="ukr">Мені</span>
                                        <span class="ukr">пощастило,</span> <span class="ukr">що</span>
                                        <span class="ukr">розцвіло</span> <span class="ukr">так</span>
                                        <span class="ukr">багато</span> <span class="ukr">первоцвіту.</span> <span
                                                class="ukr">Я</span> <span class="ukr">віднесу</span> <span
                                                class="ukr">його</span> <span class="ukr">на</span> <span
                                                class="ukr">базар,</span> <span class="ukr">продам</span> <span
                                                class="ukr">бургомістровій</span> <span class="ukr">дочці</span> <span
                                                class="ukr">й</span> <span class="ukr">викуплю</span> <span
                                                class="ukr">за</span> <span class="ukr">ті</span> <span
                                                class="ukr">гроші</span>
                                        <span class="ukr">свою</span> <span class="ukr">тачку.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Викупиш</span> <span
                                                class="ukr">тачку?</span>
                                        <span class="ukr">Ти</span> <span class="ukr">що,</span> <span
                                                class="ukr">може,</span>
                                        <span class="ukr">заставив</span>
                                        <span class="ukr">її?</span> <span class="ukr">Як</span> <span
                                                class="ukr">тільки</span>
                                        <span class="ukr">можна</span> <span class="ukr">було</span> <span
                                                class="ukr">зробити</span> <span class="ukr">таку</span> <span
                                                class="ukr">дурість!</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ну,</span> <span
                                                class="ukr">довелося,</span> <span class="ukr">то</span> <span
                                                class="ukr">й</span> <span class="ukr">заставив,—</span> <span
                                                class="ukr">пояснив</span>
                                        <span class="ukr">Ганс.—</span> <span class="ukr">Бачите,</span> <span
                                                class="ukr">взимку</span>
                                        <span class="ukr">мені</span> <span class="ukr">було</span>
                                        <span class="ukr">так</span> <span class="ukr">скрутно,</span>
                                        <span class="ukr">не</span> <span class="ukr">було</span> <span
                                                class="ukr">за</span>
                                        <span class="ukr">що</span> <span class="ukr">навіть</span> <span
                                                class="ukr">хліба</span> <span class="ukr">купити.</span> <span
                                                class="ukr">Тож</span> <span class="ukr">спочатку</span> <span
                                                class="ukr">я</span> <span class="ukr">заставив</span> <span
                                                class="ukr">срібні</span>
                                        <span class="ukr">ґудзики</span> <span class="ukr">від</span>
                                        <span class="ukr">своєї</span> <span class="ukr">недільної</span> <span
                                                class="ukr">куртки,</span>
                                        <span class="ukr">потім</span> <span class="ukr">срібний</span>
                                        <span class="ukr">ланцюжок,</span> <span class="ukr">потім</span> <span
                                                class="ukr">свою</span> <span class="ukr">велику</span> <span
                                                class="ukr">люльку</span> <span class="ukr">і,</span> <span
                                                class="ukr">нарешті,</span> <span class="ukr">тачку.</span> <span
                                                class="ukr">Але</span> <span class="ukr">тепер</span> <span
                                                class="ukr">я</span>
                                        <span class="ukr">все</span> <span class="ukr">це</span> <span
                                                class="ukr">викуплю</span> <span class="ukr">назад.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Гансе,—</span> <span
                                                class="ukr">сказав</span>
                                        <span class="ukr">Мірошник,—</span> <span class="ukr">я</span>
                                        <span class="ukr">тобі</span> <span class="ukr">дам</span>
                                        <span class="ukr">свою</span> <span class="ukr">тачку.</span>
                                        <span class="ukr">Вона,</span> <span class="ukr">правда,</span>
                                        <span class="ukr">не</span> <span class="ukr">зовсім</span>
                                        <span class="ukr">нова,</span> <span class="ukr">в</span> <span
                                                class="ukr">ній</span>
                                        <span class="ukr">немає</span> <span class="ukr">одного</span> <span
                                                class="ukr">борта,</span> <span class="ukr">і</span> <span
                                                class="ukr">зі</span>
                                        <span class="ukr">спицями</span> <span class="ukr">щось</span> <span
                                                class="ukr">негаразд,</span> <span class="ukr">але</span> <span
                                                class="ukr">все-таки</span> <span class="ukr">я</span> <span
                                                class="ukr">дам</span> <span class="ukr">її</span> <span
                                                class="ukr">тобі.</span> <span class="ukr">Я</span> <span
                                                class="ukr">розумію,</span> <span class="ukr">який</span> <span
                                                class="ukr">я</span> <span class="ukr">щедрий,</span> <span
                                                class="ukr">і</span>
                                        <span class="ukr">знаю,</span> <span class="ukr">багато</span> <span
                                                class="ukr">хто</span> <span class="ukr">скаже,</span> <span
                                                class="ukr">що</span> <span class="ukr">я</span> <span
                                                class="ukr">роблю</span>
                                        <span class="ukr">дурницю,</span> <span class="ukr">даруючи</span>
                                        <span class="ukr">тачку,</span> <span class="ukr">проте</span>
                                        <span class="ukr">я</span> <span class="ukr">не</span> <span
                                                class="ukr">такий,</span>
                                        <span class="ukr">як</span> <span class="ukr">усі.</span> <span
                                                class="ukr">Я</span>
                                        <span class="ukr">вважаю,</span> <span class="ukr">що</span> <span
                                                class="ukr">дружби</span> <span class="ukr">нема</span> <span
                                                class="ukr">без</span> <span class="ukr">щедрості,</span> <span
                                                class="ukr">та</span> <span class="ukr">й</span> <span
                                                class="ukr">як</span>
                                        <span class="ukr">на</span> <span class="ukr">те,</span> <span
                                                class="ukr">я</span>
                                        <span class="ukr">купив</span> <span class="ukr">собі</span> <span
                                                class="ukr">нову</span> <span class="ukr">тачку.</span> <span
                                                class="ukr">Отже,</span> <span class="ukr">тепер</span> <span
                                                class="ukr">ти</span> <span class="ukr">можеш</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">турбуватися</span>
                                        <span class="ukr">про</span> <span class="ukr">тачку.</span>
                                        <span class="ukr">Я</span> <span class="ukr">подарую</span>
                                        <span class="ukr">тобі</span> <span class="ukr">свою.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">I</span> <span
                                                class="ukr">справді,</span> <span class="ukr">ви</span> <span
                                                class="ukr">такі</span> <span class="ukr">щедрі,—</span> <span
                                                class="ukr">сказав</span>
                                        <span class="ukr">Малий</span> <span class="ukr">Ганс,</span>
                                        <span class="ukr">і</span> <span class="ukr">його</span> <span
                                                class="ukr">потішне</span> <span class="ukr">кругле</span>
                                        <span class="ukr">обличчя</span> <span class="ukr">аж</span>
                                        <span class="ukr">засяяло</span> <span class="ukr">радістю.—</span> <span
                                                class="ukr">У</span> <span class="ukr">мене</span> <span
                                                class="ukr">якраз</span> <span class="ukr">є</span> <span
                                                class="ukr">дошка,</span> <span class="ukr">і</span> <span
                                                class="ukr">я</span>
                                        <span class="ukr">легко</span> <span class="ukr">полагоджу</span>
                                        <span class="ukr">тачку.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">У</span> <span
                                                class="ukr">тебе</span>
                                        <span class="ukr">є</span> <span class="ukr">дошка!</span> <span
                                                class="ukr">—</span>
                                        <span class="ukr">вигукнув</span> <span class="ukr">Мірошник.—</span>
                                        <span class="ukr">А</span> <span class="ukr">мені</span> <span
                                                class="ukr">ж</span>
                                        <span class="ukr">саме</span> <span class="ukr">треба</span> <span
                                                class="ukr">залатати</span>
                                        <span class="ukr">дах</span> <span class="ukr">на</span> <span
                                                class="ukr">коморі.</span> <span class="ukr">Там</span> <span
                                                class="ukr">така</span> <span class="ukr">дірка,</span> <span
                                                class="ukr">що,</span> <span class="ukr">чого</span> <span
                                                class="ukr">доброго,</span> <span class="ukr">ще</span> <span
                                                class="ukr">замокне</span> <span class="ukr">й</span> <span
                                                class="ukr">зерно,</span> <span class="ukr">коли</span> <span
                                                class="ukr">я</span> <span class="ukr">не</span> <span
                                                class="ukr">залатаю</span> <span class="ukr">дах.</span> <span
                                                class="ukr">Як</span> <span class="ukr">добре,</span> <span
                                                class="ukr">що</span> <span class="ukr">ти</span> <span
                                                class="ukr">згадав</span> <span class="ukr">про</span> <span
                                                class="ukr">цю</span> <span class="ukr">дошку!</span> <span
                                                class="ukr">Просто</span> <span class="ukr">дивно,</span> <span
                                                class="ukr">як</span> <span class="ukr">це</span> <span
                                                class="ukr">один</span>
                                        <span class="ukr">добрий</span> <span class="ukr">вчинок</span> <span
                                                class="ukr">тягне</span> <span class="ukr">за</span> <span
                                                class="ukr">собою</span> <span class="ukr">другий:</span> <span
                                                class="ukr">щойно</span> <span class="ukr">я</span> <span
                                                class="ukr">тобі</span> <span class="ukr">подарував</span> <span
                                                class="ukr">свою</span>
                                        <span class="ukr">тачку,</span> <span class="ukr">а</span>
                                        <span class="ukr">вже</span> <span class="ukr">ти</span> <span
                                                class="ukr">даєш</span>
                                        <span class="ukr">мені</span> <span class="ukr">дошку.</span> <span
                                                class="ukr">Звичайно,</span>
                                        <span class="ukr">тачка</span> <span class="ukr">коштує</span>
                                        <span class="ukr">набагато</span> <span class="ukr">більше,</span> <span
                                                class="ukr">ніж</span> <span class="ukr">дошка,</span> <span
                                                class="ukr">та</span> <span class="ukr">справжні</span> <span
                                                class="ukr">друзі</span>
                                        <span class="ukr">на</span> <span class="ukr">це</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">зважають.</span> <span class="ukr">Швидше</span> <span
                                                class="ukr">неси</span> <span class="ukr">її,</span> <span
                                                class="ukr">і</span>
                                        <span class="ukr">я</span> <span class="ukr">сьогодні</span> <span
                                                class="ukr">ж</span>
                                        <span class="ukr">залатаю</span> <span class="ukr">дах</span> <span
                                                class="ukr">на</span> <span class="ukr">коморі.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Біжу!</span> <span
                                                class="ukr">—</span> <span class="ukr">вигукнув</span> <span
                                                class="ukr">Малий</span> <span class="ukr">Ганс,</span> <span
                                                class="ukr">метнувся</span> <span class="ukr">до</span> <span
                                                class="ukr">повітки</span> <span class="ukr">й</span> <span
                                                class="ukr">притяг</span> <span class="ukr">дошку.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Гм,</span> <span
                                                class="ukr">не</span> <span class="ukr">дуже-то</span> <span
                                                class="ukr">й</span> <span class="ukr">довга,—</span> <span
                                                class="ukr">зауважив</span>
                                        <span class="ukr">Мірошник,</span> <span class="ukr">оглядаючи</span> <span
                                                class="ukr">дошку.—</span>
                                        <span class="ukr">Боюсь,</span> <span class="ukr">що,</span>
                                        <span class="ukr">коли</span> <span class="ukr">я</span> <span
                                                class="ukr">залатаю</span> <span class="ukr">дірку</span> <span
                                                class="ukr">на</span> <span class="ukr">коморі,</span> <span
                                                class="ukr">на</span> <span class="ukr">тачку</span> <span
                                                class="ukr">нічого</span> <span class="ukr">не</span> <span
                                                class="ukr">залишиться.</span> <span class="ukr">Але</span>
                                        <span class="ukr">то</span> <span class="ukr">вже</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">моя</span> <span class="ukr">вина.</span> <span
                                                class="ukr">Ну</span>
                                        <span class="ukr">а</span> <span class="ukr">зараз,</span> <span
                                                class="ukr">коли</span>
                                        <span class="ukr">я</span> <span class="ukr">віддав</span> <span
                                                class="ukr">тобі</span>
                                        <span class="ukr">свою</span> <span class="ukr">тачку,</span> <span
                                                class="ukr">ти,</span> <span class="ukr">мабуть,</span> <span
                                                class="ukr">захочеш</span> <span class="ukr">дати</span> <span
                                                class="ukr">мені</span> <span class="ukr">за</span> <span
                                                class="ukr">це</span>
                                        <span class="ukr">квітів.</span> <span class="ukr">Ось</span> <span
                                                class="ukr">кошик,</span> <span class="ukr">наклади</span> <span
                                                class="ukr">гарно</span> <span class="ukr">з</span> <span
                                                class="ukr">верхом.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">З</span> <span
                                                class="ukr">верхом?</span> <span class="ukr">—</span> <span
                                                class="ukr">сумно</span> <span class="ukr">перепитав</span> <span
                                                class="ukr">Ганс.</span>
                                        <span class="ukr">Кошик</span> <span class="ukr">і</span> <span
                                                class="ukr">справді</span> <span class="ukr">був</span> <span
                                                class="ukr">надто</span> <span class="ukr">великий,</span>
                                        <span class="ukr">і</span> <span class="ukr">Ганс</span> <span
                                                class="ukr">побоювався,</span> <span class="ukr">що</span>
                                        <span class="ukr">як</span> <span class="ukr">набере</span>
                                        <span class="ukr">його</span> <span class="ukr">повний,</span>
                                        <span class="ukr">то</span> <span class="ukr">не</span> <span
                                                class="ukr">буде</span>
                                        <span class="ukr">чого</span> <span class="ukr">продавати.</span> <span
                                                class="ukr">А</span> <span class="ukr">він</span> <span
                                                class="ukr">же</span>
                                        <span class="ukr">так</span> <span class="ukr">хотів</span> <span
                                                class="ukr">викупити</span> <span class="ukr">свої</span> <span
                                                class="ukr">срібні</span> <span class="ukr">ґудзики!</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">А</span> <span
                                                class="ukr">чого</span> <span class="ukr">б</span> <span
                                                class="ukr">і</span>
                                        <span class="ukr">ні!</span> <span class="ukr">—</span> <span
                                                class="ukr">сказав</span>
                                        <span class="ukr">Мірошник.—</span>
                                        <span class="ukr">Я</span> <span class="ukr">віддав</span>
                                        <span class="ukr">тобі</span> <span class="ukr">свою</span>
                                        <span class="ukr">тачку</span> <span class="ukr">і</span> <span
                                                class="ukr">думав,</span> <span class="ukr">що</span> <span
                                                class="ukr">можу</span> <span class="ukr">попросити</span>
                                        <span class="ukr">в</span> <span class="ukr">тебе</span> <span
                                                class="ukr">трохи</span>
                                        <span class="ukr">квіточок.</span>
                                        <span class="ukr">Може,</span> <span class="ukr">я</span> <span
                                                class="ukr">помиляюся,</span> <span class="ukr">але</span>
                                        <span class="ukr">я</span> <span class="ukr">завжди</span>
                                        <span class="ukr">вважав,</span> <span class="ukr">що</span>
                                        <span class="ukr">дружба,</span> <span class="ukr">вірна</span>
                                        <span class="ukr">дружба,</span> <span class="ukr">вільна</span> <span
                                                class="ukr">від</span> <span class="ukr">усякого</span> <span
                                                class="ukr">себелюбства.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Мій</span> <span
                                                class="ukr">дорогий,</span> <span class="ukr">мій</span> <span
                                                class="ukr">найкращий</span> <span class="ukr">друже!</span>
                                        <span class="ukr">—</span> <span class="ukr">вигукнув</span>
                                        <span class="ukr">Малий</span> <span class="ukr">Ганс.—</span>
                                        <span class="ukr">Та</span> <span class="ukr">заберіть</span>
                                        <span class="ukr">хоч</span> <span class="ukr">і</span> <span
                                                class="ukr">всі</span>
                                        <span class="ukr">квіти</span> <span class="ukr">з</span> <span
                                                class="ukr">мого</span>
                                        <span class="ukr">садка!</span> <span class="ukr">Для</span> <span
                                                class="ukr">мене</span> <span class="ukr">ваша</span> <span
                                                class="ukr">добра</span> <span class="ukr">думка</span> <span
                                                class="ukr">була</span> <span class="ukr">й</span> <span
                                                class="ukr">є</span>
                                        <span class="ukr">дорожча</span> <span class="ukr">за</span> <span
                                                class="ukr">мої</span> <span class="ukr">срібні</span> <span
                                                class="ukr">ґудзики.</span>
                                        <span class="ukr">I</span> <span class="ukr">він</span> <span
                                                class="ukr">побіг</span>
                                        <span class="ukr">і</span> <span class="ukr">позривав</span> <span
                                                class="ukr">увесь</span>
                                        <span class="ukr">свій</span> <span class="ukr">чудовий</span>
                                        <span class="ukr">первоцвіт</span> <span class="ukr">і.приніс</span> <span
                                                class="ukr">Мірошникові</span> <span class="ukr">повнісінький</span>
                                        <span class="ukr">кошик.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Бувай</span> <span
                                                class="ukr">здоровий,</span>
                                        <span class="ukr">Малий</span> <span class="ukr">Гансе!</span>
                                        <span class="ukr">—</span> <span class="ukr">сказав</span>
                                        <span class="ukr">Мірошник</span> <span class="ukr">і</span>
                                        <span class="ukr">потяг</span> <span class="ukr">на</span>
                                        <span class="ukr">свій</span> <span class="ukr">горб</span>
                                        <span class="ukr">із</span> <span class="ukr">дошкою</span>
                                        <span class="ukr">на</span> <span class="ukr">плечі</span>
                                        <span class="ukr">та</span> <span class="ukr">великим</span>
                                        <span class="ukr">кошиком</span> <span class="ukr">у</span>
                                        <span class="ukr">руці.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">До</span> <span
                                                class="ukr">побачення!</span> <span class="ukr">—</span> <span
                                                class="ukr">відповів</span> <span class="ukr">Малий</span>
                                        <span class="ukr">Ганс</span> <span class="ukr">і</span> <span
                                                class="ukr">вдоволено</span> <span class="ukr">заходився</span>
                                        <span class="ukr">копати</span> <span class="ukr">заступом,</span> <span
                                                class="ukr">щиро</span>
                                        <span class="ukr">радіючи</span> <span class="ukr">подарованій</span> <span
                                                class="ukr">тачці.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">Наступного</span>
                                        <span class="ukr">дня</span> <span class="ukr">Ганс</span>
                                        <span class="ukr">прибивав</span> <span class="ukr">довгі</span> <span
                                                class="ukr">батоги</span> <span class="ukr">жимолості</span> <span
                                                class="ukr">над</span> <span class="ukr">ґанком,</span> <span
                                                class="ukr">коли</span> <span class="ukr">це</span> <span
                                                class="ukr">чує:</span> <span class="ukr">Мірошник</span> <span
                                                class="ukr">гукає</span>
                                        <span class="ukr">зі</span> <span class="ukr">шляху.</span>
                                        <span class="ukr">Він</span> <span class="ukr">зіскочив</span>
                                        <span class="ukr">з</span> <span class="ukr">драбини,</span>
                                        <span class="ukr">перебіг</span> <span class="ukr">садком</span> <span
                                                class="ukr">і</span> <span class="ukr">виглянув</span> <span
                                                class="ukr">через</span>
                                        <span class="ukr">тин.</span> </p>
                                <p class="ukrainian"> <span class="ukr">Там</span> <span class="ukr">стояв</span> <span
                                                class="ukr">Мірошник,</span> <span class="ukr">тримаючи</span>
                                        <span class="ukr">великий</span> <span class="ukr">мішок</span>
                                        <span class="ukr">борошна</span> <span class="ukr">на</span>
                                        <span class="ukr">плечах.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Любий</span> <span
                                                class="ukr">Гансе,—</span> <span class="ukr">сказав</span>
                                        <span class="ukr">Мірошник,—</span> <span class="ukr">чи</span>
                                        <span class="ukr">не</span> <span class="ukr">заніс</span>
                                        <span class="ukr">би</span> <span class="ukr">ти</span> <span
                                                class="ukr">цей</span>
                                        <span class="ukr">мішок</span> <span class="ukr">борощна</span> <span
                                                class="ukr">на</span> <span class="ukr">базар?</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ой,</span> <span
                                                class="ukr">мені</span> <span class="ukr">так</span> <span
                                                class="ukr">шкода,—</span> <span class="ukr">забідкався</span>
                                        <span class="ukr">Ганс,—</span> <span class="ukr">але</span>
                                        <span class="ukr">в</span> <span class="ukr">мене</span> <span
                                                class="ukr">багато</span>
                                        <span class="ukr">роботи</span> <span class="ukr">сьогодні.</span> <span
                                                class="ukr">Треба</span>
                                        <span class="ukr">поприбивати</span> <span class="ukr">всі</span> <span
                                                class="ukr">батоги</span> <span class="ukr">жимолості,</span> <span
                                                class="ukr">полити</span>
                                        <span class="ukr">квіти,</span> <span class="ukr">а</span>
                                        <span class="ukr">потім</span> <span class="ukr">скосити</span>
                                        <span class="ukr">траву.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Ну,</span> <span
                                                class="ukr">це</span>
                                        <span class="ukr">не</span> <span class="ukr">по-дружньому,—</span> <span
                                                class="ukr">відказав</span> <span class="ukr">Мірошник.—</span>
                                        <span class="ukr">Я</span> <span class="ukr">дарую</span> <span
                                                class="ukr">тобі</span>
                                        <span class="ukr">тачку,</span> <span class="ukr">а</span> <span
                                                class="ukr">ти</span>
                                        <span class="ukr">не</span> <span class="ukr">хочеш</span> <span
                                                class="ukr">допомогти</span> <span class="ukr">мені.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">О,</span> <span
                                                class="ukr">не</span> <span class="ukr">кажіть</span> <span
                                                class="ukr">так!</span> <span class="ukr">—</span> <span
                                                class="ukr">вигукнув</span> <span class="ukr">Малий</span> <span
                                                class="ukr">Ганс.—</span> <span class="ukr">Я</span> <span
                                                class="ukr">нізащо</span> <span class="ukr">в</span> <span
                                                class="ukr">світі</span> <span class="ukr">не</span> <span
                                                class="ukr">хотів</span> <span class="ukr">би</span> <span
                                                class="ukr">вчинити</span> <span class="ukr">не</span> <span
                                                class="ukr">по-дружньому.</span>
                                        <span class="ukr">I</span> <span class="ukr">він</span> <span
                                                class="ukr">збігав</span>
                                        <span class="ukr">до</span> <span class="ukr">хати</span> <span
                                                class="ukr">по</span>
                                        <span class="ukr">кашкет</span> <span class="ukr">і</span> <span
                                                class="ukr">поплентався</span> <span class="ukr">на</span>
                                        <span class="ukr">базар</span> <span class="ukr">із</span>
                                        <span class="ukr">великим</span> <span class="ukr">мішком</span> <span
                                                class="ukr">на</span> <span class="ukr">плечах.</span> </p>
                                <p class="ukrainian"> <span class="ukr">Була</span> <span class="ukr">велика</span>
                                        <span class="ukr">спека,</span> <span class="ukr">на</span> <span
                                                class="ukr">шляху</span> <span class="ukr">стояла</span> <span
                                                class="ukr">страшенна</span> <span class="ukr">курява,</span>
                                        <span class="ukr">і</span> <span class="ukr">Ганс,</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">пройшовши</span> <span class="ukr">й</span> <span
                                                class="ukr">шести</span> <span class="ukr">миль,</span> <span
                                                class="ukr">так</span> <span class="ukr">стомився,</span> <span
                                                class="ukr">що</span> <span class="ukr">мусив</span> <span
                                                class="ukr">сісти</span> <span class="ukr">перепочити.</span> <span
                                                class="ukr">Та</span>
                                        <span class="ukr">якось</span> <span class="ukr">він</span>
                                        <span class="ukr">усе-таки</span> <span class="ukr">доплентав</span> <span
                                                class="ukr">до</span> <span class="ukr">базару.</span> <span
                                                class="ukr">Постоявши</span>
                                        <span class="ukr">,там</span> <span class="ukr">трохи,</span>
                                        <span class="ukr">він</span> <span class="ukr">продав</span>
                                        <span class="ukr">борошно</span> <span class="ukr">за</span>
                                        <span class="ukr">добру</span> <span class="ukr">ціну</span>
                                        <span class="ukr">і</span> <span class="ukr">негайно</span>
                                        <span class="ukr">вирушив</span> <span class="ukr">додому,</span> <span
                                                class="ukr">бо</span> <span class="ukr">дуже</span> <span
                                                class="ukr">боявся,</span> <span class="ukr">щоб</span> <span
                                                class="ukr">його</span> <span class="ukr">не</span> <span
                                                class="ukr">перестріли</span> <span class="ukr">на</span> <span
                                                class="ukr">дорозі</span> <span class="ukr">грабіжники.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Це</span> <span
                                                class="ukr">був</span> <span class="ukr">і</span> <span
                                                class="ukr">справді</span> <span class="ukr">дуже</span> <span
                                                class="ukr">важкий</span> <span class="ukr">день,—</span> <span
                                                class="ukr">казав</span> <span class="ukr">сам</span> <span
                                                class="ukr">до</span> <span class="ukr">себе</span> <span
                                                class="ukr">Малий</span> <span class="ukr">Ганс,</span> <span
                                                class="ukr">лягаючи</span> <span class="ukr">спати.—</span>
                                        <span class="ukr">Проте</span> <span class="ukr">я</span> <span
                                                class="ukr">радий,</span> <span class="ukr">що</span> <span
                                                class="ukr">не</span> <span class="ukr">відмовив</span> <span
                                                class="ukr">Мірошникові.</span> <span class="ukr">Адже</span>
                                        <span class="ukr">він</span> <span class="ukr">мій</span> <span
                                                class="ukr">найкращий</span> <span class="ukr">друг,</span>
                                        <span class="ukr">і</span> <span class="ukr">до</span> <span
                                                class="ukr">того,</span>
                                        <span class="ukr">ще</span> <span class="ukr">й</span> <span
                                                class="ukr">віддає</span>
                                        <span class="ukr">мені</span> <span class="ukr">свою</span> <span
                                                class="ukr">тачку.</span> </p>
                                <p class="ukrainian"> <span class="ukr">Рано-вранці</span> <span
                                                class="ukr">наступного</span>
                                        <span class="ukr">дня</span>
                                        <span class="ukr">Мірошник</span> <span class="ukr">прибіг</span> <span
                                                class="ukr">по</span> <span class="ukr">гроші,</span> <span
                                                class="ukr">але</span> <span class="ukr">Ганс,</span> <span
                                                class="ukr">дуже</span> <span class="ukr">натомившись</span> <span
                                                class="ukr">напередодні,</span> <span class="ukr">ще</span>
                                        <span class="ukr">лежав</span> <span class="ukr">у</span> <span
                                                class="ukr">ліжку.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ну</span> <span
                                                class="ukr">й</span> <span class="ukr">ледацюга</span> <span
                                                class="ukr">ти,—</span> <span class="ukr">мовив</span> <span
                                                class="ukr">Мірошник.—</span> <span class="ukr">Я</span> <span
                                                class="ukr">от</span> <span class="ukr">збираюсь</span> <span
                                                class="ukr">віддати</span> <span class="ukr">тобі</span> <span
                                                class="ukr">свою</span> <span class="ukr">тачку,</span> <span
                                                class="ukr">і</span> <span class="ukr">ти</span> <span
                                                class="ukr">міг</span>
                                        <span class="ukr">би</span> <span class="ukr">працювати</span> <span
                                                class="ukr">краще.</span>
                                        <span class="ukr">Лінощі</span> <span class="ukr">—</span>
                                        <span class="ukr">то</span> <span class="ukr">великий</span>
                                        <span class="ukr">гріх,</span> <span class="ukr">і</span> <span
                                                class="ukr">мені</span>
                                        <span class="ukr">аж</span> <span class="ukr">ніяк</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">хотілося</span> <span class="ukr">б,</span> <span
                                                class="ukr">щоб</span> <span class="ukr">хтось</span> <span
                                                class="ukr">із</span> <span class="ukr">моїх</span> <span
                                                class="ukr">друзів</span> <span class="ukr">був</span> <span
                                                class="ukr">вайлом</span> <span class="ukr">і</span> <span
                                                class="ukr">ледарем.</span> <span class="ukr">Ти</span> <span
                                                class="ukr">не</span> <span class="ukr">ображайся,</span> <span
                                                class="ukr">що</span> <span class="ukr">я</span> <span
                                                class="ukr">балакаю</span> <span class="ukr">з</span> <span
                                                class="ukr">тобою</span> <span class="ukr">так</span> <span
                                                class="ukr">відверто.</span> <span class="ukr">Звичайно,</span>
                                        <span class="ukr">я</span> <span class="ukr">б</span> <span
                                                class="ukr">ніколи</span>
                                        <span class="ukr">й</span> <span class="ukr">не</span> <span
                                                class="ukr">подумав</span>
                                        <span class="ukr">так</span> <span class="ukr">розмовляти</span>
                                        <span class="ukr">з</span> <span class="ukr">тобою,</span>
                                        <span class="ukr">коли</span> <span class="ukr">б</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">був</span> <span class="ukr">твоїм</span> <span
                                                class="ukr">другом.</span> <span class="ukr">Але</span> <span
                                                class="ukr">яка</span> <span class="ukr">користь</span> <span
                                                class="ukr">від</span> <span class="ukr">такої</span> <span
                                                class="ukr">дружби,</span> <span class="ukr">коли</span> <span
                                                class="ukr">не</span> <span class="ukr">можна</span> <span
                                                class="ukr">відверто</span>
                                        <span class="ukr">сказати</span> <span class="ukr">все,</span>
                                        <span class="ukr">що</span> <span class="ukr">думаєш?</span>
                                        <span class="ukr">Кожен</span> <span class="ukr">може</span>
                                        <span class="ukr">лестити</span> <span class="ukr">й</span>
                                        <span class="ukr">піддобрятися,</span> <span class="ukr">а</span> <span
                                                class="ukr">от</span> <span class="ukr">справжній</span> <span
                                                class="ukr">друг</span>
                                        <span class="ukr">завжди</span> <span class="ukr">у</span>
                                        <span class="ukr">вічі</span> <span class="ukr">каже</span>
                                        <span class="ukr">все</span> <span class="ukr">найприкріше,</span> <span
                                                class="ukr">і</span>
                                        <span class="ukr">чим</span> <span class="ukr">прикріше,</span>
                                        <span class="ukr">тим</span> <span class="ukr">краще.</span>
                                        <span class="ukr">Справжній</span> <span class="ukr">друг</span> <span
                                                class="ukr">завжди</span> <span class="ukr">радий</span> <span
                                                class="ukr">дозолити</span>
                                        <span class="ukr">тобі,</span> <span class="ukr">адже</span>
                                        <span class="ukr">він</span> <span class="ukr">знає,</span>
                                        <span class="ukr">що</span> <span class="ukr">тільки</span>
                                        <span class="ukr">так</span> <span class="ukr">робиться</span>
                                        <span class="ukr">добро.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Дуже</span> <span
                                                class="ukr">прошу,</span>
                                        <span class="ukr">вибачте</span>
                                        <span class="ukr">мені,—</span> <span class="ukr">сказав</span>
                                        <span class="ukr">Малий</span> <span class="ukr">Ганс,</span>
                                        <span class="ukr">продираючи</span> <span class="ukr">очі</span> <span
                                                class="ukr">й</span> <span class="ukr">стягуючи</span> <span
                                                class="ukr">з</span> <span class="ukr">голови</span> <span
                                                class="ukr">нічний</span> <span class="ukr">чепчик,—</span> <span
                                                class="ukr">але</span> <span class="ukr">я</span> <span
                                                class="ukr">так</span>
                                        <span class="ukr">натомився</span> <span class="ukr">вчора,</span>
                                        <span class="ukr">що</span> <span class="ukr">мені</span> <span
                                                class="ukr">захотілося</span> <span class="ukr">трошки</span>
                                        <span class="ukr">поніжитися</span> <span class="ukr">в</span>
                                        <span class="ukr">ліжку</span> <span class="ukr">й</span> <span
                                                class="ukr">послухати</span> <span class="ukr">пташині</span>
                                        <span class="ukr">співи.</span> <span class="ukr">Мені,</span>
                                        <span class="ukr">знаєте,</span> <span class="ukr">завжди</span> <span
                                                class="ukr">краще</span> <span class="ukr">працюється,</span> <span
                                                class="ukr">коли</span>
                                        <span class="ukr">я</span> <span class="ukr">наслухаюсь</span>
                                        <span class="ukr">щебетання</span> <span class="ukr">пташок.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ну,</span> <span
                                                class="ukr">коли</span> <span class="ukr">так,</span> <span
                                                class="ukr">то</span> <span class="ukr">я</span> <span
                                                class="ukr">радий,—</span> <span class="ukr">відповів</span>
                                        <span class="ukr">Мірошник,</span> <span class="ukr">поплескуючи</span> <span
                                                class="ukr">Малого</span>
                                        <span class="ukr">Ганса</span> <span class="ukr">по</span>
                                        <span class="ukr">спині,—</span> <span class="ukr">бо</span>
                                        <span class="ukr">я</span> <span class="ukr">хочу,</span> <span
                                                class="ukr">щоб</span>
                                        <span class="ukr">ти</span> <span class="ukr">негайно,</span> <span
                                                class="ukr">як</span> <span class="ukr">тільки</span> <span
                                                class="ukr">одягнешся,</span>
                                        <span class="ukr">ішов</span> <span class="ukr">до</span> <span
                                                class="ukr">вітряка</span> <span class="ukr">лагодити</span>
                                        <span class="ukr">дах</span> <span class="ukr">на</span> <span
                                                class="ukr">моїй</span>
                                        <span class="ukr">коморі.</span> </p>
                                <p class="ukrainian"> <span class="ukr">Бідному</span> <span class="ukr">Гансові</span>
                                        <span class="ukr">так</span> <span class="ukr">треба</span> <span
                                                class="ukr">було</span> <span class="ukr">попрацювати</span> <span
                                                class="ukr">в</span> <span class="ukr">садку,</span> <span
                                                class="ukr">бо</span>
                                        <span class="ukr">вже</span> <span class="ukr">два</span> <span
                                                class="ukr">дні</span>
                                        <span class="ukr">не</span> <span class="ukr">поливалися</span> <span
                                                class="ukr">квіти,</span>
                                        <span class="ukr">проте</span> <span class="ukr">й</span> <span
                                                class="ukr">Мірошникові</span> <span class="ukr">не</span>
                                        <span class="ukr">хотів</span> <span class="ukr">відмовляти:</span> <span
                                                class="ukr">адже</span>
                                        <span class="ukr">той</span> <span class="ukr">був</span> <span
                                                class="ukr">йому</span>
                                        <span class="ukr">таким</span> <span class="ukr">добрим</span> <span
                                                class="ukr">другом.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">А</span> <span
                                                class="ukr">це</span> <span class="ukr">буде</span> <span
                                                class="ukr">дуже</span> <span class="ukr">не</span> <span
                                                class="ukr">по-дружньому,</span>
                                        <span class="ukr">якщо</span> <span class="ukr">я</span> <span
                                                class="ukr">скажу,</span>
                                        <span class="ukr">що</span> <span class="ukr">мені</span> <span
                                                class="ukr">нема</span>
                                        <span class="ukr">коли?</span> <span class="ukr">—</span> <span
                                                class="ukr">боязко</span> <span class="ukr">запитав</span>
                                        <span class="ukr">Ганс.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Авжеж,—</span> <span
                                                class="ukr">відповів</span> <span class="ukr">Мірошник.—</span>
                                        <span class="ukr">Здається,</span> <span class="ukr">я</span>
                                        <span class="ukr">не</span> <span class="ukr">так</span> <span
                                                class="ukr">багато</span>
                                        <span class="ukr">прошу,</span> <span class="ukr">коли</span> <span
                                                class="ukr">врахувати,</span>
                                        <span class="ukr">що</span> <span class="ukr">я</span> <span
                                                class="ukr">вирішив</span>
                                        <span class="ukr">віддати</span>
                                        <span class="ukr">тобі</span> <span class="ukr">свою</span>
                                        <span class="ukr">тачку.</span> <span class="ukr">Але</span>
                                        <span class="ukr">якщо</span> <span class="ukr">ти</span> <span
                                                class="ukr">відмовляєшся,</span> <span class="ukr">то</span>
                                        <span class="ukr">я</span> <span class="ukr">піду</span> <span
                                                class="ukr">залатаю</span> <span class="ukr">дірку</span> <span
                                                class="ukr">сам.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">О</span> <span
                                                class="ukr">ні,</span> <span class="ukr">ні</span> <span
                                                class="ukr">в</span>
                                        <span class="ukr">якому</span> <span class="ukr">разі!</span> <span
                                                class="ukr">—</span>
                                        <span class="ukr">вигукнув</span> <span class="ukr">Малий</span>
                                        <span class="ukr">Ганс</span> <span class="ukr">і,</span> <span
                                                class="ukr">вискочивши</span> <span class="ukr">з</span> <span
                                                class="ukr">ліжка,</span> <span class="ukr">миттю</span> <span
                                                class="ukr">одягся</span> <span class="ukr">і</span> <span
                                                class="ukr">пішов</span> <span class="ukr">лагодити</span>
                                        <span class="ukr">комору.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">Ганс</span> <span class="ukr">працював</span>
                                        <span class="ukr">до</span> <span class="ukr">самого</span>
                                        <span class="ukr">вечора,</span> <span class="ukr">а</span>
                                        <span class="ukr">ввечері</span> <span class="ukr">прийшов</span> <span
                                                class="ukr">Мірошник</span>
                                        <span class="ukr">подивитися,</span> <span class="ukr">як</span> <span
                                                class="ukr">іде</span> <span class="ukr">робота.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ну</span> <span
                                                class="ukr">що,</span> <span class="ukr">Гансе,</span> <span
                                                class="ukr">вже</span> <span class="ukr">залатав</span> <span
                                                class="ukr">дірку?</span> <span class="ukr">—</span> <span
                                                class="ukr">гукнув</span> <span class="ukr">він</span> <span
                                                class="ukr">весело.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Залатав!</span> <span
                                                class="ukr">—</span> <span class="ukr">відповів</span> <span
                                                class="ukr">Малий</span> <span class="ukr">Ганс,</span> <span
                                                class="ukr">злазячи</span> <span class="ukr">драбиною.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ах,</span> <span
                                                class="ukr">нема</span> <span class="ukr">приємнішої</span> <span
                                                class="ukr">роботи,</span>
                                        <span class="ukr">ніж</span> <span class="ukr">та,</span> <span
                                                class="ukr">яку</span>
                                        <span class="ukr">ти</span> <span class="ukr">робиш</span> <span
                                                class="ukr">для</span>
                                        <span class="ukr">інших,—</span> <span class="ukr">мовив</span> <span
                                                class="ukr">Мірошник.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Я</span> <span
                                                class="ukr">так</span> <span class="ukr">люблю</span> <span
                                                class="ukr">слухати</span> <span class="ukr">вас,—</span> <span
                                                class="ukr">відповів</span> <span class="ukr">Малий</span>
                                        <span class="ukr">Ганс,</span> <span class="ukr">сідаючи</span>
                                        <span class="ukr">та</span> <span class="ukr">витираючи</span>
                                        <span class="ukr">спітніле</span> <span class="ukr">чоло.—</span> <span
                                                class="ukr">Дуже</span> <span class="ukr">люблю!</span> <span
                                                class="ukr">От</span> <span class="ukr">тільки</span> <span
                                                class="ukr">боюсь,</span> <span class="ukr">ніколи</span> <span
                                                class="ukr">не</span> <span class="ukr">буде</span> <span
                                                class="ukr">в</span>
                                        <span class="ukr">мене</span> <span class="ukr">таких</span> <span
                                                class="ukr">високих</span> <span class="ukr">думок,</span>
                                        <span class="ukr">як</span> <span class="ukr">у</span> <span
                                                class="ukr">вас.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">О,</span> <span
                                                class="ukr">вони</span> <span class="ukr">будуть</span> <span
                                                class="ukr">і</span> <span class="ukr">в</span> <span
                                                class="ukr">тебе!</span>
                                        <span class="ukr">—</span> <span class="ukr">сказав</span> <span
                                                class="ukr">Мірошник.—</span>
                                        <span class="ukr">Тільки</span> <span class="ukr">старайся</span> <span
                                                class="ukr">краще.</span>
                                        <span class="ukr">Зараз</span> <span class="ukr">ти</span>
                                        <span class="ukr">знайомишся</span> <span class="ukr">тільки</span> <span
                                                class="ukr">з</span> <span class="ukr">практикою</span> <span
                                                class="ukr">дружби,</span>
                                        <span class="ukr">але</span> <span class="ukr">колись</span>
                                        <span class="ukr">опануєш</span> <span class="ukr">і</span>
                                        <span class="ukr">її</span> <span class="ukr">теорію.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ви</span> <span
                                                class="ukr">й</span> <span class="ukr">справді</span> <span
                                                class="ukr">так</span> <span class="ukr">гадаєте?</span> <span
                                                class="ukr">—</span> <span class="ukr">запитав</span> <span
                                                class="ukr">Ганс.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Навіть</span> <span
                                                class="ukr">не</span> <span class="ukr">сумніваюся,—</span> <span
                                                class="ukr">відповів</span> <span class="ukr">Мірошник.—</span>
                                        <span class="ukr">Але</span> <span class="ukr">дах</span> <span
                                                class="ukr">полагоджений,</span> <span class="ukr">і</span>
                                        <span class="ukr">тобі</span> <span class="ukr">пора</span>
                                        <span class="ukr">додому.</span> <span class="ukr">Відпочинь,</span> <span
                                                class="ukr">бо</span> <span class="ukr">завтра</span> <span
                                                class="ukr">поженеш</span>
                                        <span class="ukr">мої</span> <span class="ukr">вівці</span>
                                        <span class="ukr">в</span> <span class="ukr">гори.</span> </p>
                                <p class="ukrainian"> <span class="ukr">Бідний</span> <span class="ukr">Малий</span>
                                        <span class="ukr">Ганс</span> <span class="ukr">боявся</span> <span
                                                class="ukr">вже</span> <span class="ukr">слово</span> <span
                                                class="ukr">сказати</span> <span class="ukr">навпроти</span> <span
                                                class="ukr">і</span> <span class="ukr">рано-вранці,</span> <span
                                                class="ukr">коли</span>
                                        <span class="ukr">Мірошник</span> <span class="ukr">пригнав</span> <span
                                                class="ukr">до</span> <span class="ukr">його</span> <span
                                                class="ukr">хатини</span> <span class="ukr">свої</span> <span
                                                class="ukr">вівці,</span> <span class="ukr">подався</span> <span
                                                class="ukr">з</span> <span class="ukr">ними</span> <span
                                                class="ukr">в</span>
                                        <span class="ukr">гори.</span> <span class="ukr">Доки</span> <span
                                                class="ukr">туди</span> <span class="ukr">та</span> <span
                                                class="ukr">назад,</span> <span class="ukr">так</span> <span
                                                class="ukr">і</span> <span class="ukr">день</span> <span
                                                class="ukr">минув,</span> <span class="ukr">і</span> <span
                                                class="ukr">Малий</span> <span class="ukr">Ганс</span> <span
                                                class="ukr">так</span> <span class="ukr">зморився,</span> <span
                                                class="ukr">що</span> <span class="ukr">не</span> <span
                                                class="ukr">дійшов</span> <span class="ukr">навіть</span> <span
                                                class="ukr">до</span> <span class="ukr">ліжка,</span> <span
                                                class="ukr">а</span>
                                        <span class="ukr">заснув</span> <span class="ukr">на</span> <span
                                                class="ukr">стільці</span> <span class="ukr">і</span> <span
                                                class="ukr">прокинувся,</span> <span class="ukr">коли</span> <span
                                                class="ukr">вже</span> <span class="ukr">був</span> <span
                                                class="ukr">день.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">З</span> <span
                                                class="ukr">якою</span> <span class="ukr">радістю</span> <span
                                                class="ukr">я</span> <span class="ukr">попрацюю,</span> <span
                                                class="ukr">нарешті,</span>
                                        <span class="ukr">в</span> <span class="ukr">своєму</span>
                                        <span class="ukr">садку</span> <span class="ukr">сьогодні,—</span> <span
                                                class="ukr">промовив</span>
                                        <span class="ukr">він</span> <span class="ukr">і</span> <span
                                                class="ukr">негайно</span>
                                        <span class="ukr">взявся</span>
                                        <span class="ukr">до</span> <span class="ukr">роботи.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">Але</span> <span class="ukr">весь</span> <span
                                                class="ukr">час</span> <span class="ukr">якось</span> <span
                                                class="ukr">так</span> <span class="ukr">випадало,</span> <span
                                                class="ukr">що</span> <span class="ukr">руки</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">доходили</span> <span class="ukr">до</span> <span
                                                class="ukr">квіток,</span> <span class="ukr">бо</span> <span
                                                class="ukr">його</span> <span class="ukr">друг</span> <span
                                                class="ukr">Мірошник</span> <span class="ukr">раз</span> <span
                                                class="ukr">по</span> <span class="ukr">раз</span> <span
                                                class="ukr">прибігав</span> <span class="ukr">і</span> <span
                                                class="ukr">посилав</span> <span class="ukr">його</span> <span
                                                class="ukr">кудись</span> <span class="ukr">то</span> <span
                                                class="ukr">в</span>
                                        <span class="ukr">одній,</span> <span class="ukr">то</span> <span
                                                class="ukr">в</span>
                                        <span class="ukr">іншій</span> <span class="ukr">справі</span> <span
                                                class="ukr">або</span> <span class="ukr">ж</span> <span
                                                class="ukr">загадував</span> <span class="ukr">допомагати</span> <span
                                                class="ukr">у</span> <span class="ukr">вітряці.</span> <span
                                                class="ukr">Часом</span>
                                        <span class="ukr">Малий</span> <span class="ukr">Ганс</span>
                                        <span class="ukr">впадав</span> <span class="ukr">у</span>
                                        <span class="ukr">розпач</span> <span class="ukr">і</span>
                                        <span class="ukr">починав</span> <span class="ukr">побоюватися,</span> <span
                                                class="ukr">чи</span>
                                        <span class="ukr">не</span> <span class="ukr">подумали</span>
                                        <span class="ukr">його</span> <span class="ukr">квітки,</span>
                                        <span class="ukr">ніби</span> <span class="ukr">він</span>
                                        <span class="ukr">зовсім</span> <span class="ukr">забув</span>
                                        <span class="ukr">про</span> <span class="ukr">них,</span>
                                        <span class="ukr">але</span> <span class="ukr">він</span> <span
                                                class="ukr">тішив</span>
                                        <span class="ukr">себе</span> <span class="ukr">думкою,</span> <span
                                                class="ukr">що</span> <span class="ukr">Мірошник</span> <span
                                                class="ukr">—</span> <span class="ukr">його</span> <span
                                                class="ukr">найкращий</span>
                                        <span class="ukr">друг.</span> <span class="ukr">"До</span>
                                        <span class="ukr">того</span> <span class="ukr">ж,—</span>
                                        <span class="ukr">не</span> <span class="ukr">раз</span> <span
                                                class="ukr">заспокоював</span> <span class="ukr">він</span>
                                        <span class="ukr">себе,—</span> <span class="ukr">Мірошник</span> <span
                                                class="ukr">вирішив</span>
                                        <span class="ukr">подарувати</span> <span class="ukr">мені</span> <span
                                                class="ukr">свою</span> <span class="ukr">тачку,</span> <span
                                                class="ukr">а</span> <span class="ukr">це</span> <span
                                                class="ukr">—</span>
                                        <span class="ukr">вияв</span> <span class="ukr">його</span> <span
                                                class="ukr">безкорисливої</span> <span class="ukr">щедрості".</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">Так</span> <span class="ukr">Малий</span> <span
                                                class="ukr">Ганс</span> <span class="ukr">і</span> <span
                                                class="ukr">далі</span>
                                        <span class="ukr">працював</span> <span class="ukr">на</span> <span
                                                class="ukr">Мірошника,</span> <span class="ukr">а</span> <span
                                                class="ukr">Мірошник</span> <span class="ukr">тішив</span> <span
                                                class="ukr">його</span> <span class="ukr">гарними</span> <span
                                                class="ukr">словами</span>
                                        <span class="ukr">про</span> <span class="ukr">дружбу,</span>
                                        <span class="ukr">які</span> <span class="ukr">Ганс</span>
                                        <span class="ukr">записував</span> <span class="ukr">у</span>
                                        <span class="ukr">зошит</span> <span class="ukr">і</span> <span
                                                class="ukr">перечитував</span> <span class="ukr">ночами,</span>
                                        <span class="ukr">тому</span> <span class="ukr">що</span> <span
                                                class="ukr">був</span>
                                        <span class="ukr">дуже</span> <span class="ukr">старанним</span> <span
                                                class="ukr">учнем.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">Та</span> <span class="ukr">якось</span> <span
                                                class="ukr">пізно</span> <span class="ukr">ввечері,</span> <span
                                                class="ukr">коли</span> <span class="ukr">Малий</span> <span
                                                class="ukr">Ганс</span> <span class="ukr">сидів</span> <span
                                                class="ukr">у</span> <span class="ukr">хаті</span> <span
                                                class="ukr">й</span>
                                        <span class="ukr">грівся</span> <span class="ukr">біля</span> <span
                                                class="ukr">каміна,</span> <span class="ukr">раптом</span>
                                        <span class="ukr">щось</span> <span class="ukr">постукало</span> <span
                                                class="ukr">в</span> <span class="ukr">сінешні</span> <span
                                                class="ukr">двері.</span>
                                        <span class="ukr">Надворі</span> <span class="ukr">лютувала</span> <span
                                                class="ukr">буря,</span>
                                        <span class="ukr">і</span> <span class="ukr">вітер</span> <span
                                                class="ukr">ревів</span>
                                        <span class="ukr">і</span> <span class="ukr">завивав</span> <span
                                                class="ukr">так</span>
                                        <span class="ukr">страшно,</span> <span class="ukr">що</span> <span
                                                class="ukr">Ганс</span> <span class="ukr">спочатку</span> <span
                                                class="ukr">не</span> <span class="ukr">звернув</span> <span
                                                class="ukr">на</span> <span class="ukr">той</span> <span
                                                class="ukr">стукіт</span> <span class="ukr">уваги,</span> <span
                                                class="ukr">подумав,</span> <span class="ukr">що</span> <span
                                                class="ukr">то</span> <span class="ukr">буря.</span> <span
                                                class="ukr">Але</span> <span class="ukr">за</span> <span
                                                class="ukr">якусь</span> <span class="ukr">мить</span> <span
                                                class="ukr">постукало</span> <span class="ukr">вдруге,</span>
                                        <span class="ukr">а</span> <span class="ukr">потім</span> <span
                                                class="ukr">і</span>
                                        <span class="ukr">втретє,</span> <span class="ukr">вже</span> <span
                                                class="ukr">гучніше.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Це,</span> <span
                                                class="ukr">мабуть,</span> <span class="ukr">якийсь</span> <span
                                                class="ukr">бідний</span> <span class="ukr">подорожній,—</span> <span
                                                class="ukr">сказав</span>
                                        <span class="ukr">сам</span> <span class="ukr">собі</span>
                                        <span class="ukr">Малий</span> <span class="ukr">Ганс</span>
                                        <span class="ukr">і</span> <span class="ukr">кинувся</span>
                                        <span class="ukr">до</span> <span class="ukr">дверей.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">Перед</span> <span class="ukr">ним</span> <span
                                                class="ukr">стояв</span> <span class="ukr">Мірошник</span> <span
                                                class="ukr">з</span> <span class="ukr">ліхтарем</span> <span
                                                class="ukr">в</span> <span class="ukr">одній</span> <span
                                                class="ukr">руці</span> <span class="ukr">і</span> <span
                                                class="ukr">товстим</span> <span class="ukr">ціпком</span> <span
                                                class="ukr">у</span> <span class="ukr">другій.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Дорогий</span> <span
                                                class="ukr">Гансе!</span> <span class="ukr">—</span> <span
                                                class="ukr">вигукнув</span> <span class="ukr">він.—</span>
                                        <span class="ukr">У</span> <span class="ukr">мене</span> <span
                                                class="ukr">велике</span>
                                        <span class="ukr">лихо:</span> <span class="ukr">мій</span> <span
                                                class="ukr">найменший</span> <span class="ukr">син</span> <span
                                                class="ukr">упав</span> <span class="ukr">з</span> <span
                                                class="ukr">драбини</span> <span class="ukr">й</span> <span
                                                class="ukr">побився,</span> <span class="ukr">і</span> <span
                                                class="ukr">я</span> <span class="ukr">оце</span> <span
                                                class="ukr">йду</span>
                                        <span class="ukr">по</span> <span class="ukr">лікаря.</span> <span
                                                class="ukr">Але</span> <span class="ukr">лікар</span> <span
                                                class="ukr">так</span> <span class="ukr">далеко</span> <span
                                                class="ukr">живе,</span> <span class="ukr">а</span> <span
                                                class="ukr">ніч</span>
                                        <span class="ukr">така</span> <span class="ukr">страшна,</span> <span
                                                class="ukr">тож</span> <span class="ukr">мені</span> <span
                                                class="ukr">спало</span> <span class="ukr">на</span> <span
                                                class="ukr">думку,</span> <span class="ukr">що</span> <span
                                                class="ukr">було</span> <span class="ukr">б</span> <span
                                                class="ukr">краще,</span> <span class="ukr">якби</span> <span
                                                class="ukr">ти</span> <span class="ukr">пішов</span> <span
                                                class="ukr">по</span>
                                        <span class="ukr">нього</span> <span class="ukr">замість</span> <span
                                                class="ukr">мене.</span> <span class="ukr">Адже</span> <span
                                                class="ukr">я</span> <span class="ukr">дарую</span> <span
                                                class="ukr">тобі</span> <span class="ukr">тачку,</span> <span
                                                class="ukr">справедливо</span> <span class="ukr">було</span>
                                        <span class="ukr">б,</span> <span class="ukr">щоб</span> <span
                                                class="ukr">і</span>
                                        <span class="ukr">ти</span> <span class="ukr">якось</span> <span
                                                class="ukr">віддячив</span>
                                        <span class="ukr">мені.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Авжеж,</span> <span
                                                class="ukr">авжеж!</span> <span class="ukr">—</span> <span
                                                class="ukr">вигукнув</span> <span class="ukr">Малий</span>
                                        <span class="ukr">Ганс.—</span> <span class="ukr">Це</span>
                                        <span class="ukr">така</span> <span class="ukr">честь,</span>
                                        <span class="ukr">що</span> <span class="ukr">ви</span> <span
                                                class="ukr">прийшли</span>
                                        <span class="ukr">просто</span>
                                        <span class="ukr">до</span> <span class="ukr">мене.</span>
                                        <span class="ukr">Негайно</span> <span class="ukr">біжу</span>
                                        <span class="ukr">по</span> <span class="ukr">лікаря.</span>
                                        <span class="ukr">Тільки</span> <span class="ukr">дайте</span>
                                        <span class="ukr">мені</span> <span class="ukr">ваш</span>
                                        <span class="ukr">ліхтар,</span> <span class="ukr">бо</span>
                                        <span class="ukr">ніч</span> <span class="ukr">така</span>
                                        <span class="ukr">темна,</span> <span class="ukr">ще,</span>
                                        <span class="ukr">чого</span> <span class="ukr">доброго,</span>
                                        <span class="ukr">де-небудь</span> <span class="ukr">упаду</span> <span
                                                class="ukr">в</span> <span class="ukr">яму.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Я</span> <span
                                                class="ukr">б</span> <span class="ukr">і</span> <span
                                                class="ukr">дав,—</span>
                                        <span class="ukr">сказав</span> <span class="ukr">Мірошник,—</span> <span
                                                class="ukr">але</span>
                                        <span class="ukr">ліхтар</span> <span class="ukr">у</span>
                                        <span class="ukr">мене</span> <span class="ukr">зовсім</span>
                                        <span class="ukr">новенький,</span> <span class="ukr">ще</span>
                                        <span class="ukr">що-небудь</span> <span class="ukr">станеться</span> <span
                                                class="ukr">з</span> <span class="ukr">ним.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ну,</span> <span
                                                class="ukr">гаразд,</span> <span class="ukr">якось</span> <span
                                                class="ukr">обійдуся</span> <span class="ukr">і</span> <span
                                                class="ukr">без</span> <span class="ukr">ліхтаря!</span> <span
                                                class="ukr">—</span> <span class="ukr">вигукнув</span> <span
                                                class="ukr">Малий</span> <span class="ukr">Ганс.</span> <span
                                                class="ukr">Він</span> <span class="ukr">оглянув</span> <span
                                                class="ukr">свого</span> <span class="ukr">кожуха,</span> <span
                                                class="ukr">натяг</span> <span class="ukr">на</span> <span
                                                class="ukr">голову</span> <span class="ukr">теплу</span> <span
                                                class="ukr">червону</span> <span class="ukr">шапку,</span>
                                        <span class="ukr">закутав</span> <span class="ukr">шию</span>
                                        <span class="ukr">хусткою</span> <span class="ukr">і</span>
                                        <span class="ukr">вирушив</span> <span class="ukr">у</span>
                                        <span class="ukr">дорогу.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">Як</span> <span class="ukr">же</span> <span
                                                class="ukr">лютувала</span> <span class="ukr">буря!</span>
                                        <span class="ukr">Було</span> <span class="ukr">так</span>
                                        <span class="ukr">темно,</span> <span class="ukr">що</span>
                                        <span class="ukr">Малий</span> <span class="ukr">Ганс</span>
                                        <span class="ukr">майже</span> <span class="ukr">не</span>
                                        <span class="ukr">бачив</span> <span class="ukr">дороги,</span>
                                        <span class="ukr">а</span> <span class="ukr">вітер</span> <span
                                                class="ukr">налітав</span> <span class="ukr">з</span> <span
                                                class="ukr">такою</span> <span class="ukr">силою,</span> <span
                                                class="ukr">що</span> <span class="ukr">він</span> <span
                                                class="ukr">ледве</span> <span class="ukr">тримався</span>
                                        <span class="ukr">на</span> <span class="ukr">ногах.</span>
                                        <span class="ukr">Проте</span> <span class="ukr">він</span>
                                        <span class="ukr">сміло</span> <span class="ukr">йшов</span>
                                        <span class="ukr">уперед</span> <span class="ukr">і</span>
                                        <span class="ukr">десь</span> <span class="ukr">за</span> <span
                                                class="ukr">три</span>
                                        <span class="ukr">години</span> <span class="ukr">дістався</span> <span
                                                class="ukr">до</span> <span class="ukr">лікаревого</span> <span
                                                class="ukr">будинку</span>
                                        <span class="ukr">й</span> <span class="ukr">постукав</span>
                                        <span class="ukr">у</span> <span class="ukr">двері.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Хто</span> <span
                                                class="ukr">там?</span> <span class="ukr">—</span> <span
                                                class="ukr">запитав</span> <span class="ukr">лікар,</span> <span
                                                class="ukr">виглянувши</span>
                                        <span class="ukr">з</span> <span class="ukr">вікна</span> <span
                                                class="ukr">своєї</span>
                                        <span class="ukr">спальні.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Це</span> <span
                                                class="ukr">я,</span> <span class="ukr">Малий</span> <span
                                                class="ukr">Ганс,</span> <span class="ukr">лікарю.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">А</span> <span
                                                class="ukr">що</span> <span class="ukr">там</span> <span
                                                class="ukr">у</span>
                                        <span class="ukr">тебе</span> <span class="ukr">скоїлося,</span> <span
                                                class="ukr">Малий</span>
                                        <span class="ukr">Гансе?</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Та</span> <span
                                                class="ukr">це</span> <span class="ukr">в</span> <span
                                                class="ukr">Мірошника,</span> <span class="ukr">його</span>
                                        <span class="ukr">найменший</span> <span class="ukr">хлопець</span> <span
                                                class="ukr">упав</span> <span class="ukr">з</span> <span
                                                class="ukr">драбини</span> <span class="ukr">і</span> <span
                                                class="ukr">побився,</span> <span class="ukr">і</span> <span
                                                class="ukr">Мірошник</span> <span class="ukr">просить,</span> <span
                                                class="ukr">щоб</span> <span class="ukr">ви</span> <span
                                                class="ukr">швидше</span> <span class="ukr">приїхали.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Гаразд!</span> <span
                                                class="ukr">—</span> <span class="ukr">відповів</span> <span
                                                class="ukr">лікар</span> <span class="ukr">і</span> <span
                                                class="ukr">звелів,</span> <span class="ukr">щоб</span> <span
                                                class="ukr">йому</span> <span class="ukr">засідлали</span>
                                        <span class="ukr">коня</span> <span class="ukr">й</span> <span
                                                class="ukr">приготували</span> <span class="ukr">чоботи</span>
                                        <span class="ukr">та</span> <span class="ukr">ліхтар;</span>
                                        <span class="ukr">потім</span> <span class="ukr">сам</span>
                                        <span class="ukr">зійшов</span> <span class="ukr">униз,</span>
                                        <span class="ukr">сів</span> <span class="ukr">на</span> <span
                                                class="ukr">коня</span>
                                        <span class="ukr">і</span> <span class="ukr">рушив</span> <span
                                                class="ukr">до</span>
                                        <span class="ukr">Мірошника,</span> <span class="ukr">а</span> <span
                                                class="ukr">Малий</span> <span class="ukr">Ганс</span> <span
                                                class="ukr">підтюпцем</span> <span class="ukr">побіг</span>
                                        <span class="ukr">за</span> <span class="ukr">ним.</span> </p>
                                <p class="ukrainian"> <span class="ukr">А</span> <span class="ukr">вітер</span> <span
                                                class="ukr">усе</span> <span class="ukr">дужчав,</span> <span
                                                class="ukr">і</span> <span class="ukr">дощ</span> <span
                                                class="ukr">полив,</span> <span class="ukr">як</span> <span
                                                class="ukr">з</span>
                                        <span class="ukr">відра.</span> <span class="ukr">Малий</span> <span
                                                class="ukr">Ганс</span> <span class="ukr">не</span> <span
                                                class="ukr">встигав</span> <span class="ukr">за</span> <span
                                                class="ukr">конем</span> <span class="ukr">і</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">бачив,</span> <span class="ukr">куди</span> <span
                                                class="ukr">йти.</span> <span class="ukr">Зрештою</span> <span
                                                class="ukr">він</span> <span class="ukr">збився</span> <span
                                                class="ukr">з</span> <span class="ukr">дороги</span> <span
                                                class="ukr">й</span>
                                        <span class="ukr">забрів</span> <span class="ukr">на</span> <span
                                                class="ukr">дуже</span> <span class="ukr">небезпечне</span>
                                        <span class="ukr">болото.</span> <span class="ukr">Там</span>
                                        <span class="ukr">бідолашний</span> <span class="ukr">Ганс</span> <span
                                                class="ukr">і</span> <span class="ukr">втопився</span> <span
                                                class="ukr">в</span> <span class="ukr">глибокій</span> <span
                                                class="ukr">ямі.</span> <span class="ukr">Наступного</span> <span
                                                class="ukr">дня</span>
                                        <span class="ukr">його</span> <span class="ukr">знайшли</span>
                                        <span class="ukr">вівчарі</span> <span class="ukr">й</span>
                                        <span class="ukr">принесли</span> <span class="ukr">до</span>
                                        <span class="ukr">його</span> <span class="ukr">хатини.</span>
                                        <span class="ukr">Всі</span> <span class="ukr">прийшли</span>
                                        <span class="ukr">на</span> <span class="ukr">похорон</span>
                                        <span class="ukr">Малого</span> <span class="ukr">Ганса,</span>
                                        <span class="ukr">бо</span> <span class="ukr">всі</span> <span
                                                class="ukr">його</span>
                                        <span class="ukr">любили,</span> <span class="ukr">але</span> <span
                                                class="ukr">найбільше</span> <span class="ukr">побивався</span> <span
                                                class="ukr">Мірошник.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Я</span> <span
                                                class="ukr">був</span> <span class="ukr">його</span> <span
                                                class="ukr">найкращим</span>
                                        <span class="ukr">другом,—</span> <span class="ukr">заявив</span> <span
                                                class="ukr">він,—</span> <span class="ukr">і</span> <span
                                                class="ukr">по</span>
                                        <span class="ukr">справедливості</span> <span class="ukr">я</span>
                                        <span class="ukr">повинен</span> <span class="ukr">іти</span>
                                        <span class="ukr">спереду.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">I</span> <span class="ukr">він</span> <span
                                                class="ukr">ішов</span>
                                        <span class="ukr">на</span> <span class="ukr">чолі</span> <span
                                                class="ukr">похоронної</span>
                                        <span class="ukr">процесії</span> <span class="ukr">в</span>
                                        <span class="ukr">довгому</span> <span class="ukr">чорному</span> <span
                                                class="ukr">плащі</span> <span class="ukr">й</span> <span
                                                class="ukr">час</span>
                                        <span class="ukr">від</span> <span class="ukr">часу</span> <span
                                                class="ukr">витирав</span> <span class="ukr">очі</span> <span
                                                class="ukr">великою</span> <span class="ukr">носовою</span>
                                        <span class="ukr">хустинкою.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Смерть</span>
                                        <span class="ukr">Малого</span> <span class="ukr">Ганса</span>
                                        <span class="ukr">—</span> <span class="ukr">велика</span>
                                        <span class="ukr">втрата</span> <span class="ukr">для</span>
                                        <span class="ukr">всіх</span> <span class="ukr">нас,—</span>
                                        <span class="ukr">сказав</span> <span class="ukr">Коваль,</span> <span
                                                class="ukr">коли</span> <span class="ukr">після</span> <span
                                                class="ukr">похорону</span>
                                        <span class="ukr">всі</span> <span class="ukr">сиділи</span>
                                        <span class="ukr">в</span> <span class="ukr">затишній</span>
                                        <span class="ukr">корчмі,</span> <span class="ukr">п'ючи</span>
                                        <span class="ukr">настояне</span> <span class="ukr">на</span>
                                        <span class="ukr">духмяних</span> <span class="ukr">травах</span> <span
                                                class="ukr">вино</span> <span class="ukr">й</span> <span
                                                class="ukr">заїдаючи</span> <span class="ukr">солодкими</span> <span
                                                class="ukr">тістечками.</span> <span class="ukr">—</span> <span
                                                class="ukr">А</span> <span class="ukr">надто</span> <span
                                                class="ukr">для</span>
                                        <span class="ukr">мене,—</span> <span class="ukr">відгукнувся</span> <span
                                                class="ukr">Мірошник.—</span> <span class="ukr">Адже</span>
                                        <span class="ukr">я,</span> <span class="ukr">можна</span>
                                        <span class="ukr">сказати,</span> <span class="ukr">подарував</span> <span
                                                class="ukr">був</span> <span class="ukr">йому</span> <span
                                                class="ukr">свою</span> <span class="ukr">тачку,</span> <span
                                                class="ukr">а</span> <span class="ukr">зараз</span> <span
                                                class="ukr">і</span>
                                        <span class="ukr">придумати</span> <span class="ukr">не</span> <span
                                                class="ukr">можу,</span> <span class="ukr">де</span> <span
                                                class="ukr">її</span>
                                        <span class="ukr">подіти:</span> <span class="ukr">дома</span> <span
                                                class="ukr">вона</span> <span class="ukr">мені</span> <span
                                                class="ukr">тільки</span> <span class="ukr">місце</span> <span
                                                class="ukr">займає,</span> <span class="ukr">а</span> <span
                                                class="ukr">продати,</span> <span class="ukr">так</span> <span
                                                class="ukr">за</span> <span class="ukr">неї</span> <span
                                                class="ukr">ж</span>
                                        <span class="ukr">нічого</span> <span class="ukr">не</span> <span
                                                class="ukr">дадуть,</span> <span class="ukr">бо</span> <span
                                                class="ukr">вона</span> <span class="ukr">геть</span> <span
                                                class="ukr">поламана.</span> <span class="ukr">Надалі</span>
                                        <span class="ukr">я</span> <span class="ukr">буду</span> <span
                                                class="ukr">обачніший.</span> <span class="ukr">Нікому</span>
                                        <span class="ukr">нічого</span> <span class="ukr">не</span>
                                        <span class="ukr">дам.</span> <span class="ukr">За</span> <span
                                                class="ukr">щедрість</span> <span class="ukr">завжди</span>
                                        <span class="ukr">доводиться</span> <span class="ukr">розплачуватись...</span>
                                </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Ну,</span> <span
                                                class="ukr">а</span> <span class="ukr">далі</span> <span
                                                class="ukr">що?</span> <span class="ukr">—</span>
                                        <span class="ukr">озвався</span> <span class="ukr">Водяний</span>
                                        <span class="ukr">Щур,</span> <span class="ukr">який</span>
                                        <span class="ukr">і</span> <span class="ukr">так</span> <span
                                                class="ukr">довго</span>
                                        <span class="ukr">мовчав.</span> <span class="ukr">—</span> <span
                                                class="ukr">Це</span>
                                        <span class="ukr">все,—</span> <span class="ukr">відповіла</span>
                                        <span class="ukr">Коноплянка.</span> </p>
                                <p class="ukrainian">
                                        <span class="ukr">—</span> <span class="ukr">Що</span> <span
                                                class="ukr">ж</span> <span class="ukr">сталося</span> <span
                                                class="ukr">з</span> <span class="ukr">Мірошником?</span> <span
                                                class="ukr">—</span> <span class="ukr">не</span> <span
                                                class="ukr">вгамовувався</span> <span class="ukr">Водяний</span> <span
                                                class="ukr">Щур.</span> <span class="ukr">—</span> <span
                                                class="ukr">Не</span> <span class="ukr">знаю,—</span>
                                        <span class="ukr">відповіла</span>
                                        <span class="ukr">Коноплянка.—</span> <span class="ukr">Та,</span> <span
                                                class="ukr">щиро</span> <span class="ukr">кажучи,</span> <span
                                                class="ukr">мене</span> <span class="ukr">це</span> <span
                                                class="ukr">й</span>
                                        <span class="ukr">не</span> <span class="ukr">цікавить.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Воно</span> <span
                                                class="ukr">й</span> <span class="ukr">видно,</span> <span
                                                class="ukr">що</span>
                                        <span class="ukr">ви</span> <span class="ukr">не</span> <span
                                                class="ukr">маєте</span>
                                        <span class="ukr">співчуття,—</span>
                                        <span class="ukr">дорікнув</span> <span class="ukr">їй</span>
                                        <span class="ukr">Водяний</span> <span class="ukr">Щур.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Мабуть,</span> <span
                                                class="ukr">ви</span> <span class="ukr">так</span> <span
                                                class="ukr">і</span>
                                        <span class="ukr">не</span> <span class="ukr">зрозуміли</span> <span
                                                class="ukr">моралі</span> <span class="ukr">цієї</span> <span
                                                class="ukr">історії,—</span> <span class="ukr">сказала</span>
                                        <span class="ukr">йому</span> <span class="ukr">Коноплянка.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Чого,</span> <span
                                                class="ukr">чого</span> <span class="ukr">не</span> <span
                                                class="ukr">зрозумів?</span> <span class="ukr">—</span> <span
                                                class="ukr">перепитав</span> <span class="ukr">Водяний</span>
                                        <span class="ukr">Щур.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Моралі.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">То</span> <span
                                                class="ukr">ця</span> <span class="ukr">оповідь</span> <span
                                                class="ukr">має</span> <span class="ukr">ще</span> <span
                                                class="ukr">й</span>
                                        <span class="ukr">мораль?</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Авжеж,—</span> <span
                                                class="ukr">відповіла</span> <span class="ukr">Коноплянка.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ну,</span> <span
                                                class="ukr">знаєте,—</span> <span class="ukr">розгнівався</span> <span
                                                class="ukr">Водяний</span>
                                        <span class="ukr">Щур,—</span> <span class="ukr">вам</span>
                                        <span class="ukr">треба</span> <span class="ukr">було</span>
                                        <span class="ukr">попередити</span> <span class="ukr">про</span> <span
                                                class="ukr">це.</span> <span class="ukr">Тоді</span> <span
                                                class="ukr">я</span>
                                        <span class="ukr">взагалі</span> <span class="ukr">не</span> <span
                                                class="ukr">слухав</span> <span class="ukr">би</span> <span
                                                class="ukr">всієї</span> <span class="ukr">цієї</span> <span
                                                class="ukr">оповіді,</span> <span class="ukr">а</span> <span
                                                class="ukr">крикнув</span> <span class="ukr">би</span> <span
                                                class="ukr">"Тьху!",</span> <span class="ukr">як</span> <span
                                                class="ukr">той</span> <span class="ukr">критик.</span> <span
                                                class="ukr">А</span> <span class="ukr">втім,</span> <span
                                                class="ukr">і</span>
                                        <span class="ukr">зараз</span> <span class="ukr">ще</span> <span
                                                class="ukr">не</span>
                                        <span class="ukr">пізно.</span> <span class="ukr">I</span> <span
                                                class="ukr">він</span>
                                        <span class="ukr">на</span> <span class="ukr">все</span> <span
                                                class="ukr">горло</span>
                                        <span class="ukr">гукнув</span> <span class="ukr">"Тьху!",</span>
                                        <span class="ukr">махнув</span> <span class="ukr">хвостом</span> <span
                                                class="ukr">і</span> <span class="ukr">щез</span> <span
                                                class="ukr">у</span>
                                        <span class="ukr">своїй</span> <span class="ukr">норі.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">I</span> <span
                                                class="ukr">як</span> <span class="ukr">вам</span> <span
                                                class="ukr">подобається</span>
                                        <span class="ukr">цей</span> <span class="ukr">Водяний</span>
                                        <span class="ukr">Щур?</span> <span class="ukr">—</span> <span
                                                class="ukr">поцікавилася</span> <span class="ukr">Качка,</span>
                                        <span class="ukr">підпливаючи</span> <span class="ukr">знову.—</span> <span
                                                class="ukr">У</span> <span class="ukr">нього,</span> <span
                                                class="ukr">звісно,</span>
                                        <span class="ukr">чимало</span> <span class="ukr">гарних</span>
                                        <span class="ukr">рис,</span> <span class="ukr">але</span>
                                        <span class="ukr">в</span> <span class="ukr">мені</span> <span
                                                class="ukr">таке</span>
                                        <span class="ukr">сильне</span> <span class="ukr">почуття</span> <span
                                                class="ukr">материнства,</span> <span class="ukr">що</span>
                                        <span class="ukr">я</span> <span class="ukr">не</span> <span
                                                class="ukr">можу</span>
                                        <span class="ukr">без</span> <span class="ukr">сліз</span> <span
                                                class="ukr">дивитися</span> <span class="ukr">на</span> <span
                                                class="ukr">старих</span> <span class="ukr">парубків.</span> </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Мабуть,</span> <span
                                                class="ukr">він</span> <span class="ukr">образився,—</span>
                                        <span class="ukr">сказала</span> <span class="ukr">Коноплянка.—</span> <span
                                                class="ukr">Адже</span>
                                        <span class="ukr">я</span> <span class="ukr">розповіла</span>
                                        <span class="ukr">йому</span> <span class="ukr">історію</span>
                                        <span class="ukr">з</span> <span class="ukr">мораллю.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">О,</span> <span
                                                class="ukr">цього</span> <span class="ukr">ніколи</span> <span
                                                class="ukr">не</span> <span class="ukr">слід</span> <span
                                                class="ukr">робити,—</span> <span class="ukr">зауважила</span> <span
                                                class="ukr">Качка.</span>
                                </p>
                                <p class="ukrainian"> <span class="ukr">I</span> <span class="ukr">я</span> <span
                                                class="ukr">з</span> <span class="ukr">нею</span> <span
                                                class="ukr">цілком</span> <span class="ukr">згоден.
                                        </span> </p>









                        </section>


                </main>
                <article>
                        <p id="word"></p>
                        <p id="transl"></p>
                </article>

                <article>

                        <p id="pageNumber"></p>

                </article>


</body>
<script>
 
var user = "<?php echo ($user_check); ?>";
 </script>
         <script src="js/script.js"></script>
     

</html>
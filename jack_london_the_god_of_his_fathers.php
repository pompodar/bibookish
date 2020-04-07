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
    <title>London The God of His Fathers - книжка-білінгва: англійською з паралельним українським перекладом (читати онлайн)</title>
    <meta name="keywords" content="London The God of His Fathers, книжка-білінгва, англійською, українською, з паралельним перекладом, читати онлайн, безкоштовно" />
    	  <meta name="description" content="London The God of His Fathers, Лондон Бог його батьків - книжка-білінгва: англійською з паралельним українським перекладом (читати онлайн)" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>

    <a href="index.html">
        <p id="logo"><i id="logo1"class="fas fa-language"></i></p></a>
        <p id="name"></p>

        <main id="container" tabindex="1">
            <div id="loader"></div>



            <section>

                <p class="english"> <span class="engl">On</span> <span class="engl">every</span> <span
                        class="engl">hand</span> <span class="engl">stretched</span> <span class="engl">the</span>
                    <span class="engl">forest</span> <span class="engl">primeval,</span> <span class="engl">-</span> <span class="engl">the</span> <span
                        class="engl">home</span> <span class="engl">of</span> <span class="engl">noisy</span> <span
                        class="engl">comedy</span>
                    <span class="engl">and</span> <span class="engl">silent</span>
                    <span class="engl">tragedy.</span> <span class="engl">Here</span> <span class="engl">the</span>
                    <span class="engl">struggle</span> <span class="engl">for</span>
                    <span class="engl">survival</span> <span class="engl">continued</span> <span class="engl">to</span>
                    <span class="engl">wage</span> <span class="engl">with</span>
                    <span class="engl">all</span> <span class="engl">its</span>
                    <span class="engl">ancient</span> <span class="engl">brutality.</span> <span
                        class="engl">Briton</span>
                    <span class="engl">and</span> <span class="engl">Russian</span>
                    <span class="engl">were</span> <span class="engl">still</span>
                    <span class="engl">to</span> <span class="engl">overlap</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">Land</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">Rainbow's</span> <span class="engl">End</span><span class="engl">-</span>  <span class="engl">and</span>
                    <span class="engl">this</span>
                    <span class="engl">was</span> <span class="engl">the</span>
                    <span class="engl">very</span> <span class="engl">heart</span>
                    <span class="engl">of</span> <span class="engl">it</span><span class="engl">-</span>  <span class="engl">nor</span>
                    <span class="engl">had</span> <span class="engl">Yankee</span>
                    <span class="engl">gold</span> <span class="engl">yet</span>
                    <span class="engl">purchased</span> <span class="engl">its</span> <span class="engl">vast</span>
                    <span class="engl">domain.</span> <span class="engl">The</span> <span class="engl">wolf-pack</span>
                    <span class="engl">still</span>
                    <span class="engl">clung</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">flank</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">cariboo-herd,</span> <span class="engl">singling</span> <span
                        class="engl">out</span>
                    <span class="engl">the</span> <span class="engl">weak</span>
                    <span class="engl">and</span> <span class="engl">the</span>
                    <span class="engl">big</span> <span class="engl">with</span>
                    <span class="engl">calf,</span> <span class="engl">and</span>
                    <span class="engl">pulling</span> <span class="engl">them</span> <span class="engl">down</span>
                    <span class="engl">as</span> <span class="engl">remorselessly</span>
                    <span class="engl">as</span> <span class="engl">were</span>
                    <span class="engl">it</span> <span class="engl">a</span> <span class="engl">thousand,</span> <span
                        class="engl">thousand</span> <span class="engl">generations</span> <span
                        class="engl">into</span>
                    <span class="engl">the</span> <span class="engl">past.</span>
                    <span class="engl">The</span> <span class="engl">sparse</span>
                    <span class="engl">aborigines</span> <span class="engl">still</span> <span
                        class="engl">acknowledged</span> <span class="engl">the</span>
                    <span class="engl">rule</span> <span class="engl">of</span>
                    <span class="engl">their</span> <span class="engl">chiefs</span> <span class="engl">and</span> <span
                        class="engl">medicine</span> <span class="engl">men,</span>
                    <span class="engl">drove</span> <span class="engl">out</span>
                    <span class="engl">bad</span> <span class="engl">spirits,</span> <span class="engl">burned</span>
                    <span class="engl">their</span> <span class="engl">witches,</span> <span class="engl">fought</span>
                    <span class="engl">their</span> <span class="engl">neighbors,</span> <span class="engl">and</span>
                    <span class="engl">ate</span> <span class="engl">their</span>
                    <span class="engl">enemies</span> <span class="engl">with</span> <span class="engl">a</span> <span
                        class="engl">relish</span> <span class="engl">which</span>
                    <span class="engl">spoke</span> <span class="engl">well</span>
                    <span class="engl">of</span> <span class="engl">their</span>
                    <span class="engl">bellies.</span> <span class="engl"></span>
                </p>
                <p class="english"> <span class="engl">But</span> <span class="engl">it</span> <span
                        class="engl">was</span> <span class="engl">at</span> <span class="engl">the</span> <span
                        class="engl">moment</span> <span class="engl">when</span> <span class="engl">the</span> <span
                        class="engl">stone</span> <span class="engl">age</span> <span class="engl">was</span> <span
                        class="engl">drawing</span> <span class="engl">to</span> <span class="engl">a</span> <span
                        class="engl">close.</span> <span class="engl">Already,</span> <span class="engl">over</span>
                    <span class="engl">unknown</span> <span class="engl">trails</span> <span class="engl">and</span>
                    <span class="engl">chartless</span> <span class="engl">wildernesses,</span> <span
                        class="engl">were</span> <span class="engl">the</span> <span class="engl">harbingers</span>
                    <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">steel</span>
                    <span class="engl">arriving,</span><span class="engl">-</span>  <span class="engl">fair-faced,</span> <span class="engl">blue-eyed,</span> <span
                        class="engl">indomitable</span> <span class="engl">men,</span>
                    <span class="engl">incarnations</span> <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">unrest</span> <span class="engl">of</span> <span class="engl">their</span> <span
                        class="engl">race.</span> <span class="engl">By</span> <span class="engl">accident</span> <span
                        class="engl">or</span> <span class="engl">design,</span> <span class="engl">single-handed</span>
                    <span class="engl">and</span>
                    <span class="engl">in</span> <span class="engl">twos</span>
                    <span class="engl">and</span> <span class="engl">threes,</span>
                    <span class="engl">they</span> <span class="engl">came</span>
                    <span class="engl">from</span> <span class="engl">no</span>
                    <span class="engl">one</span> <span class="engl">knew</span>
                    <span class="engl">whither,</span> <span class="engl">and</span> <span class="engl">fought,</span>
                    <span class="engl">or</span> <span class="engl">died,</span> <span class="engl">or</span> <span
                        class="engl">passed</span> <span class="engl">on,</span> <span class="engl">no</span> <span
                        class="engl">one</span> <span class="engl">knew</span> <span class="engl">whence.</span> <span
                        class="engl">The</span> <span class="engl">priests</span> <span class="engl">raged</span>
                    <span class="engl">against</span> <span class="engl">them,</span> <span class="engl">the</span>
                    <span class="engl">chiefs</span> <span class="engl">called</span>
                    <span class="engl">forth</span> <span class="engl">their</span>
                    <span class="engl">fighting</span> <span class="engl">men,</span> <span class="engl">and</span>
                    <span class="engl">stone</span> <span class="engl">clashed</span>
                    <span class="engl">with</span> <span class="engl">steel;</span>
                    <span class="engl">but</span> <span class="engl">to</span>
                    <span class="engl">little</span> <span class="engl">purpose.</span> <span class="engl">Like</span>
                    <span class="engl">water</span> <span class="engl">seeping</span> <span class="engl">from</span>
                    <span class="engl">some</span> <span class="engl">mighty</span>
                    <span class="engl">reservoir,</span> <span class="engl">they</span> <span
                        class="engl">trickled</span>
                    <span class="engl">through</span> <span class="engl">the</span>
                    <span class="engl">dark</span> <span class="engl">forests</span> <span class="engl">and</span> <span
                        class="engl">mountain</span> <span class="engl">passes,</span>
                    <span class="engl">threading</span> <span class="engl">the</span> <span class="engl">highways</span>
                    <span class="engl">in</span> <span class="engl">bark</span>
                    <span class="engl">canoes,</span> <span class="engl">or</span>
                    <span class="engl">with</span> <span class="engl">their</span>
                    <span class="engl">moccasined</span> <span class="engl">feet</span> <span
                        class="engl">breaking</span>
                    <span class="engl">trail</span> <span class="engl">for</span>
                    <span class="engl">the</span> <span class="engl">wolf-dogs.</span> <span class="engl">They</span>
                    <span class="engl">came</span> <span class="engl">of</span>
                    <span class="engl">a</span> <span class="engl">great</span>
                    <span class="engl">breed,</span> <span class="engl">and</span>
                    <span class="engl">their</span> <span class="engl">mothers</span> <span class="engl">were</span>
                    <span class="engl">many;</span> <span class="engl">but</span>
                    <span class="engl">the</span> <span class="engl">fur-clad</span> <span class="engl">denizens</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">Northland</span> <span class="engl">had</span> <span class="engl">this</span>
                    <span class="engl">yet</span> <span class="engl">to</span> <span class="engl">learn.</span> <span
                        class="engl"></span>
                </p>
                <p class="english"> <span class="engl">So</span> <span class="engl">many</span> <span
                        class="engl">an</span> <span class="engl">unsung</span> <span class="engl">wanderer</span>
                    <span class="engl">fought</span> <span class="engl">his</span>
                    <span class="engl">last</span> <span class="engl">and</span>
                    <span class="engl">died</span> <span class="engl">under</span>
                    <span class="engl">the</span> <span class="engl">cold</span>
                    <span class="engl">fire</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">aurora,</span>
                    <span class="engl">as</span> <span class="engl">did</span>
                    <span class="engl">his</span> <span class="engl">brothers</span> <span class="engl">in</span> <span
                        class="engl">burning</span> <span class="engl">sands</span>
                    <span class="engl">and</span> <span class="engl">reeking</span>
                    <span class="engl">jungles,</span> <span class="engl">and</span> <span class="engl">as</span> <span
                        class="engl">they</span> <span class="engl">shall</span> <span class="engl">continue</span>
                    <span class="engl">to</span> <span class="engl">do</span> <span class="engl">till</span> <span
                        class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">fulness</span> <span class="engl">of</span> <span
                        class="engl">time</span> <span class="engl">the</span> <span class="engl">destiny</span> <span
                        class="engl">of</span> <span class="engl">their</span> <span class="engl">race</span> <span
                        class="engl">be</span> <span class="engl">achieved.</span> </p>
                <p class="english"> <span class="engl">It</span> <span class="engl">was</span> <span
                        class="engl">near</span> <span class="engl">twelve.</span> <span class="engl">Along</span>
                    <span class="engl">the</span> <span class="engl">northern</span> <span class="engl">horizon</span>
                    <span class="engl">a</span> <span class="engl">rosy</span>
                    <span class="engl">glow,</span> <span class="engl">fading</span> <span class="engl">to</span> <span
                        class="engl">the</span> <span class="engl">west</span> <span class="engl">and</span> <span
                        class="engl">deepening</span>
                    <span class="engl">to</span> <span class="engl">the</span>
                    <span class="engl">east,</span> <span class="engl">marked</span> <span class="engl">the</span> <span
                        class="engl">unseen</span> <span class="engl">dip</span> <span class="engl">of</span> <span
                        class="engl">the</span> <span class="engl">midnight</span> <span class="engl">sun.</span>
                    <span class="engl">The</span> <span class="engl">gloaming</span> <span class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">dawn</span>
                    <span class="engl">were</span> <span class="engl">so</span>
                    <span class="engl">commingled</span> <span class="engl">that</span> <span class="engl">there</span>
                    <span class="engl">was</span> <span class="engl">no</span> <span class="engl">night,</span><span class="engl">-</span>  <span class="engl">simply</span>
                    <span class="engl">a</span>
                    <span class="engl">wedding</span> <span class="engl">of</span>
                    <span class="engl">day</span> <span class="engl">with</span>
                    <span class="engl">day,</span> <span class="engl">a</span>
                    <span class="engl">scarcely</span> <span class="engl">perceptible</span> <span
                        class="engl">blending</span> <span class="engl">of</span> <span class="engl">two</span> <span
                        class="engl">circles</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">sun.</span> <span class="engl">A</span>
                    <span class="engl">kildee</span> <span class="engl">timidly</span>
                    <span class="engl">chirped</span> <span class="engl">good-night;</span> <span
                        class="engl">the</span>
                    <span class="engl">full,</span> <span class="engl">rich</span>
                    <span class="engl">throat</span> <span class="engl">of</span>
                    <span class="engl">a</span> <span class="engl">robin</span>
                    <span class="engl">proclaimed</span> <span class="engl">good-morrow.</span> <span
                        class="engl">From</span>
                    <span class="engl">an</span> <span class="engl">island</span>
                    <span class="engl">on</span> <span class="engl">the</span>
                    <span class="engl">breast</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">Yukon</span>
                    <span class="engl">a</span> <span class="engl">colony</span>
                    <span class="engl">of</span> <span class="engl">wild</span>
                    <span class="engl">fowl</span> <span class="engl">voiced</span>
                    <span class="engl">its</span> <span class="engl">interminable</span> <span
                        class="engl">wrongs,</span> <span class="engl">while</span>
                    <span class="engl">a</span> <span class="engl">loon</span>
                    <span class="engl">laughed</span> <span class="engl">mockingly</span> <span class="engl">back</span>
                    <span class="engl">across</span> <span class="engl">a</span>
                    <span class="engl">still</span> <span class="engl">stretch</span> <span class="engl">of</span> <span
                        class="engl">river.</span> </p>
                <p class="english"> <span class="engl">In</span> <span class="engl">the</span> <span
                        class="engl">foreground,</span>
                    <span class="engl">against</span> <span class="engl">the</span> <span class="engl">bank</span> <span
                        class="engl">of</span> <span class="engl">a</span> <span class="engl">lazy</span> <span
                        class="engl">eddy,</span> <span class="engl">birch-bark</span>
                    <span class="engl">canoes</span> <span class="engl">were</span>
                    <span class="engl">lined</span> <span class="engl">two</span>
                    <span class="engl">and</span> <span class="engl">three</span>
                    <span class="engl">deep.</span> <span class="engl">Ivory-bladed</span> <span
                        class="engl">spears,</span> <span class="engl">bone-barbed</span> <span
                        class="engl">arrows,</span> <span class="engl">buckskin-thonged</span>
                    <span class="engl">bows,</span> <span class="engl">and</span> <span class="engl">simple</span> <span
                        class="engl">basket-woven</span> <span class="engl">traps</span> <span
                        class="engl">bespoke</span>
                    <span class="engl">the</span> <span class="engl">fact</span>
                    <span class="engl">that</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">muddy</span>
                    <span class="engl">current</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">river</span>
                    <span class="engl">the</span> <span class="engl">salmon-run</span> <span class="engl">was</span>
                    <span class="engl">on.</span> <span class="engl">In</span>
                    <span class="engl">the</span> <span class="engl">background,</span> <span class="engl">from</span>
                    <span class="engl">the</span> <span class="engl">tangle</span>
                    <span class="engl">of</span> <span class="engl">skin</span>
                    <span class="engl">tents</span> <span class="engl">and</span>
                    <span class="engl">drying</span> <span class="engl">frames,</span> <span class="engl">rose</span>
                    <span class="engl">the</span> <span class="engl">voices</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">fisher</span> <span class="engl">folk.</span> <span class="engl">Bucks</span>
                    <span class="engl">skylarked</span> <span class="engl">with</span>
                    <span class="engl">bucks</span> <span class="engl">or</span>
                    <span class="engl">flirted</span> <span class="engl">with</span> <span class="engl">the</span> <span
                        class="engl">maidens,</span> <span class="engl">while</span>
                    <span class="engl">the</span> <span class="engl">older</span>
                    <span class="engl">squaws,</span> <span class="engl">shut</span> <span class="engl">out</span> <span
                        class="engl">from</span> <span class="engl">this</span> <span class="engl">by</span> <span
                        class="engl">virtue</span> <span class="engl">of</span> <span class="engl">having</span> <span
                        class="engl">fulfilled</span> <span class="engl">the</span>
                    <span class="engl">end</span> <span class="engl">of</span>
                    <span class="engl">their</span> <span class="engl">existence</span> <span class="engl">in</span>
                    <span class="engl">reproduction,</span> <span class="engl">gossiped</span> <span
                        class="engl">as</span> <span class="engl">they</span> <span class="engl">braided</span>
                    <span class="engl">rope</span> <span class="engl">from</span>
                    <span class="engl">the</span> <span class="engl">green</span>
                    <span class="engl">roots</span> <span class="engl">of</span>
                    <span class="engl">trailing</span> <span class="engl">vines.</span> <span class="engl">At</span>
                    <span class="engl">their</span> <span class="engl">feet</span> <span class="engl">their</span> <span
                        class="engl">naked</span> <span class="engl">progeny</span> <span class="engl">played</span>
                    <span class="engl">and</span> <span class="engl">squabbled,</span> <span class="engl">or</span>
                    <span class="engl">rolled</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">muck</span>
                    <span class="engl">with</span> <span class="engl">the</span>
                    <span class="engl">tawny</span> <span class="engl">wolf-dogs.</span> </p>
                <p class="english"> <span class="engl">To</span> <span class="engl">one</span> <span
                        class="engl">side</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">encampment,</span>
                    <span class="engl">and</span> <span class="engl">conspicuously</span> <span
                        class="engl">apart</span> <span class="engl">from</span> <span class="engl">it,</span> <span
                        class="engl">stood</span> <span class="engl">a</span> <span class="engl">second</span> <span
                        class="engl">camp</span> <span class="engl">of</span> <span class="engl">two</span> <span
                        class="engl">tents.</span> <span class="engl">But</span> <span class="engl">it</span> <span
                        class="engl">was</span> <span class="engl">a</span>
                    <span class="engl">white</span> <span class="engl">man's</span> <span class="engl">camp.</span>
                    <span class="engl">If</span> <span class="engl">nothing</span> <span class="engl">else,</span>
                    <span class="engl">the</span> <span class="engl">choice</span>
                    <span class="engl">of</span> <span class="engl">position</span>
                    <span class="engl">at</span> <span class="engl">least</span>
                    <span class="engl">bore</span> <span class="engl">convincing</span> <span
                        class="engl">evidence</span> <span class="engl">of</span> <span class="engl">this.</span> <span
                        class="engl">In</span> <span class="engl">case</span> <span class="engl">of</span> <span
                        class="engl">offence,</span> <span class="engl">it</span> <span class="engl">commanded</span>
                    <span class="engl">the</span>
                    <span class="engl">Indian</span> <span class="engl">quarters</span> <span class="engl">a</span>
                    <span class="engl">hundred</span> <span class="engl">yards</span>
                    <span class="engl">away;</span> <span class="engl">of</span>
                    <span class="engl">defence,</span> <span class="engl">a</span>
                    <span class="engl">rise</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">ground</span>
                    <span class="engl">and</span> <span class="engl">the</span>
                    <span class="engl">cleared</span> <span class="engl">intervening</span> <span
                        class="engl">space;</span> <span class="engl">and</span> <span class="engl">last,</span> <span
                        class="engl">of</span> <span class="engl">defeat,</span> <span class="engl">the</span> <span
                        class="engl">swift</span> <span class="engl">slope</span> <span class="engl">of</span> <span
                        class="engl">a</span> <span class="engl">score</span> <span class="engl">of</span> <span
                        class="engl">yards</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">canoes</span> <span class="engl">below.</span> <span class="engl">From</span> <span
                        class="engl">one</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">tents</span> <span class="engl">came</span> <span class="engl">the</span> <span
                        class="engl">petulant</span> <span class="engl">cry</span>
                    <span class="engl">of</span> <span class="engl">a</span> <span class="engl">sick</span> <span
                        class="engl">child</span> <span class="engl">and</span> <span class="engl">the</span> <span
                        class="engl">crooning</span> <span class="engl">song</span>
                    <span class="engl">of</span> <span class="engl">a</span> <span class="engl">mother.</span> <span
                        class="engl">In</span> <span class="engl">the</span> <span class="engl">open,</span> <span
                        class="engl">over</span> <span class="engl">the</span> <span class="engl">smouldering</span>
                    <span class="engl">embers</span> <span class="engl">of</span> <span class="engl">a</span> <span
                        class="engl">fire,</span> <span class="engl">two</span> <span class="engl">men</span> <span
                        class="engl">held</span> <span class="engl">talk.</span> </p>
                <p class="english"> <span class="engl">"Eh?</span> <span class="engl">I</span> <span
                        class="engl">love</span> <span class="engl">the</span> <span class="engl">church</span> <span
                        class="engl">like</span> <span class="engl">a</span> <span class="engl">good</span> <span
                        class="engl">son.</span> <span class="engl">Bien!</span> <span class="engl">So</span> <span
                        class="engl">great</span> <span class="engl">a</span> <span class="engl">love</span> <span
                        class="engl">that</span> <span class="engl">my</span>
                    <span class="engl">days</span> <span class="engl">have</span> <span class="engl">been</span> <span
                        class="engl">spent</span> <span class="engl">in</span> <span class="engl">fleeing</span> <span
                        class="engl">away</span>
                    <span class="engl">from</span> <span class="engl">her,</span>
                    <span class="engl">and</span> <span class="engl">my</span>
                    <span class="engl">nights</span> <span class="engl">in</span>
                    <span class="engl">dreaming</span> <span class="engl">dreams</span> <span class="engl">of</span>
                    <span class="engl">reckoning.</span> <span class="engl">Look</span>
                    <span class="engl">you!"</span> <span class="engl">The</span>
                    <span class="engl">half-breed's</span> <span class="engl">voice</span> <span
                        class="engl">rose</span> <span class="engl">to</span> <span class="engl">an</span> <span
                        class="engl">angry</span> <span class="engl">snarl.</span>
                    <span class="engl"></span> </p>
                <p class="english"> <span class="engl">"I</span> <span class="engl">am</span> <span
                        class="engl">Red</span> <span class="engl">River</span> <span class="engl">born.</span> <span
                        class="engl">My</span> <span class="engl">father</span> <span class="engl">was</span> <span
                        class="engl">white</span><span class="engl">-</span>  <span class="engl">as</span> <span class="engl">white</span>
                    <span class="engl">as</span> <span class="engl">you.</span>
                    <span class="engl">But</span> <span class="engl">you</span>
                    <span class="engl">are</span> <span class="engl">Yankee,</span>
                    <span class="engl">and</span> <span class="engl">he</span>
                    <span class="engl">was</span> <span class="engl">British</span>
                    <span class="engl">bred,</span> <span class="engl">and</span>
                    <span class="engl">a</span> <span class="engl">gentleman's</span> <span class="engl">son.</span>
                    <span class="engl">And</span> <span class="engl">my</span>
                    <span class="engl">mother</span> <span class="engl">was</span>
                    <span class="engl">the</span> <span class="engl">daughter</span> <span class="engl">of</span> <span
                        class="engl">a</span> <span class="engl">chief,</span> <span class="engl">and</span> <span
                        class="engl">I</span>
                    <span class="engl">was</span> <span class="engl">a</span> <span class="engl">man.</span> <span
                        class="engl">Ay,</span> <span class="engl">and</span> <span class="engl">one</span> <span
                        class="engl">had</span> <span class="engl">to</span> <span class="engl">look</span> <span
                        class="engl">the</span> <span class="engl">second</span> <span class="engl">time</span> <span
                        class="engl">to</span> <span class="engl">see</span> <span class="engl">what</span> <span
                        class="engl">manner</span> <span class="engl">of</span> <span class="engl">blood</span> <span
                        class="engl">ran</span> <span class="engl">in</span> <span class="engl">my</span> <span
                        class="engl">veins;</span> <span class="engl">for</span> <span class="engl">I</span> <span
                        class="engl">lived</span> <span class="engl">with</span> <span class="engl">the</span> <span
                        class="engl">whites,</span> <span class="engl">and</span> <span class="engl">was</span> <span
                        class="engl">one</span> <span class="engl">of</span> <span class="engl">them,</span> <span
                        class="engl">and</span> <span class="engl">my</span> <span class="engl">father's</span> <span
                        class="engl">heart</span> <span class="engl">beat</span> <span class="engl">in</span> <span
                        class="engl">me.</span> <span class="engl">It</span> <span class="engl">happened</span> <span
                        class="engl">there</span> <span class="engl">was</span> <span class="engl">a</span> <span
                        class="engl">maiden</span><span class="engl">-</span>  <span class="engl">white</span><span class="engl">-</span>  <span class="engl">who</span> <span class="engl">looked</span> <span
                        class="engl">on</span> <span class="engl">me</span> <span class="engl">with</span> <span
                        class="engl">kind</span> <span class="engl">eyes.</span> <span class="engl">Her</span> <span
                        class="engl">father</span> <span class="engl">had</span> <span class="engl">much</span> <span
                        class="engl">land</span> <span class="engl">and</span> <span class="engl">many</span> <span
                        class="engl">horses;</span>
                    <span class="engl">also</span> <span class="engl">he</span>
                    <span class="engl">was</span> <span class="engl">a</span> <span class="engl">big</span> <span
                        class="engl">man</span> <span class="engl">among</span> <span class="engl">his</span> <span
                        class="engl">people,</span> <span class="engl">and</span> <span class="engl">his</span> <span
                        class="engl">blood</span> <span class="engl">was</span> <span class="engl">the</span> <span
                        class="engl">blood</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">French.</span> <span class="engl">He</span> <span class="engl">said</span> <span
                        class="engl">the</span> <span class="engl">girl</span> <span class="engl">knew</span> <span
                        class="engl">not</span> <span class="engl">her</span> <span class="engl">own</span> <span
                        class="engl">mind,</span> <span class="engl">and</span> <span class="engl">talked</span> <span
                        class="engl">overmuch</span>
                    <span class="engl">with</span> <span class="engl">her,</span>
                    <span class="engl">and</span> <span class="engl">became</span>
                    <span class="engl">wroth</span> <span class="engl">that</span>
                    <span class="engl">such</span> <span class="engl">things</span>
                    <span class="engl">should</span> <span class="engl">be.</span>
                </p>
                <p class="english"> <span class="engl">"But</span> <span class="engl">she</span> <span
                        class="engl">knew</span> <span class="engl">her</span> <span class="engl">mind,</span> <span
                        class="engl">for</span> <span class="engl">we</span> <span class="engl">came</span> <span
                        class="engl">quick</span> <span class="engl">before</span> <span class="engl">the</span> <span
                        class="engl">priest.</span> <span class="engl">And</span> <span class="engl">quicker</span>
                    <span class="engl">had</span> <span class="engl">come</span> <span class="engl">her</span> <span
                        class="engl">father,</span> <span class="engl">with</span>
                    <span class="engl">lying</span> <span class="engl">words,</span> <span class="engl">false</span>
                    <span class="engl">promises,</span> <span class="engl">I</span>
                    <span class="engl">know</span> <span class="engl">not</span>
                    <span class="engl">what;</span> <span class="engl">so</span>
                    <span class="engl">that</span> <span class="engl">the</span>
                    <span class="engl">priest</span> <span class="engl">stiffened</span> <span class="engl">his</span>
                    <span class="engl">neck</span> <span class="engl">and</span>
                    <span class="engl">would</span> <span class="engl">not</span>
                    <span class="engl">make</span> <span class="engl">us</span>
                    <span class="engl">that</span> <span class="engl">we</span>
                    <span class="engl">might</span> <span class="engl">live</span>
                    <span class="engl">one</span> <span class="engl">with</span>
                    <span class="engl">the</span> <span class="engl">other.</span>
                    <span class="engl">As</span> <span class="engl">at</span> <span class="engl">the</span> <span
                        class="engl">beginning</span>
                    <span class="engl">it</span> <span class="engl">was</span>
                    <span class="engl">the</span> <span class="engl">church</span>
                    <span class="engl">which</span> <span class="engl">would</span>
                    <span class="engl">not</span> <span class="engl">bless</span>
                    <span class="engl">my</span> <span class="engl">birth,</span>
                    <span class="engl">so</span> <span class="engl">now</span>
                    <span class="engl">it</span> <span class="engl">was</span>
                    <span class="engl">the</span> <span class="engl">church</span>
                    <span class="engl">which</span> <span class="engl">refused</span> <span class="engl">me</span> <span
                        class="engl">marriage</span> <span class="engl">and</span>
                    <span class="engl">put</span> <span class="engl">the</span>
                    <span class="engl">blood</span> <span class="engl">of</span>
                    <span class="engl">men</span> <span class="engl">upon</span>
                    <span class="engl">my</span> <span class="engl">hands.</span>
                    <span class="engl">Bien!</span> <span class="engl">Thus</span>
                    <span class="engl">have</span> <span class="engl">I</span>
                    <span class="engl">cause</span> <span class="engl">to</span>
                    <span class="engl">love</span> <span class="engl">the</span>
                    <span class="engl">church.</span> <span class="engl">So</span>
                    <span class="engl">I</span> <span class="engl">struck</span>
                    <span class="engl">the</span> <span class="engl">priest</span>
                    <span class="engl">on</span> <span class="engl">his</span>
                    <span class="engl">woman's</span> <span class="engl">mouth,</span> <span class="engl">and</span>
                    <span class="engl">we</span> <span class="engl">took</span> <span class="engl">swift</span> <span
                        class="engl">horses,</span>
                    <span class="engl">the</span> <span class="engl">girl</span>
                    <span class="engl">and</span> <span class="engl">I,</span>
                    <span class="engl">to</span> <span class="engl">Fort</span>
                    <span class="engl">Pierre,</span> <span class="engl">where</span> <span class="engl">was</span>
                    <span class="engl">a</span> <span class="engl">minister</span> <span class="engl">of</span> <span
                        class="engl">good</span> <span class="engl">heart.</span> <span class="engl">But</span> <span
                        class="engl">hot</span> <span class="engl">on</span> <span class="engl">our</span> <span
                        class="engl">trail</span> <span class="engl">was</span> <span class="engl">her</span> <span
                        class="engl">father,</span> <span class="engl">and</span> <span class="engl">brothers,</span>
                    <span class="engl">and</span>
                    <span class="engl">other</span> <span class="engl">men</span>
                    <span class="engl">he</span> <span class="engl">had</span>
                    <span class="engl">gathered</span> <span class="engl">to</span>
                    <span class="engl">him.</span> <span class="engl">And</span>
                    <span class="engl">we</span> <span class="engl">fought,</span>
                    <span class="engl">our</span> <span class="engl">horses</span>
                    <span class="engl">on</span> <span class="engl">the</span>
                    <span class="engl">run,</span> <span class="engl">till</span>
                    <span class="engl">I</span> <span class="engl">emptied</span>
                    <span class="engl">three</span> <span class="engl">saddles</span> <span class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">rest</span> <span class="engl">drew</span> <span
                        class="engl">off</span> <span class="engl">and</span> <span class="engl">went</span> <span
                        class="engl">on</span> <span class="engl">to</span> <span class="engl">Fort</span> <span
                        class="engl">Pierre.</span>
                    <span class="engl">Then</span> <span class="engl">we</span>
                    <span class="engl">took</span> <span class="engl">east,</span>
                    <span class="engl">the</span> <span class="engl">girl</span>
                    <span class="engl">and</span> <span class="engl">I,</span>
                    <span class="engl">to</span> <span class="engl">the</span>
                    <span class="engl">hills</span> <span class="engl">and</span>
                    <span class="engl">forests,</span> <span class="engl">and</span> <span class="engl">we</span> <span
                        class="engl">lived</span> <span class="engl">one</span> <span class="engl">with</span> <span
                        class="engl">the</span> <span class="engl">other,</span> <span class="engl">and</span> <span
                        class="engl">we</span> <span class="engl">were</span> <span class="engl">not</span> <span
                        class="engl">married,</span><span class="engl">-</span>  <span class="engl">the</span>
                    <span class="engl">work</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">good</span>
                    <span class="engl">church</span> <span class="engl">which</span> <span class="engl">I</span> <span
                        class="engl">love</span> <span class="engl">like</span> <span class="engl">a</span> <span
                        class="engl">son.</span> </p>
                <p class="english"> <span class="engl">"But</span> <span class="engl">mark</span> <span
                        class="engl">you,</span> <span class="engl">for</span> <span class="engl">this</span> <span
                        class="engl">is</span> <span class="engl">the</span> <span class="engl">strangeness</span> <span
                        class="engl">of</span>
                    <span class="engl">woman,</span> <span class="engl">the</span>
                    <span class="engl">way</span> <span class="engl">of</span>
                    <span class="engl">which</span> <span class="engl">no</span>
                    <span class="engl">man</span> <span class="engl">may</span>
                    <span class="engl">understand.</span> <span class="engl">One</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">saddles</span> <span class="engl">I</span> <span
                        class="engl">emptied</span> <span class="engl">was</span> <span class="engl">that</span> <span
                        class="engl">of</span> <span class="engl">her</span> <span class="engl">father's,</span> <span
                        class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">hoofs</span>
                    <span class="engl">of</span> <span class="engl">those</span>
                    <span class="engl">who</span> <span class="engl">came</span>
                    <span class="engl">behind</span> <span class="engl">had</span>
                    <span class="engl">pounded</span> <span class="engl">him</span>
                    <span class="engl">into</span> <span class="engl">the</span>
                    <span class="engl">earth.</span> <span class="engl">This</span>
                    <span class="engl">we</span> <span class="engl">saw,</span>
                    <span class="engl">the</span> <span class="engl">girl</span>
                    <span class="engl">and</span> <span class="engl">I,</span>
                    <span class="engl">and</span> <span class="engl">this</span>
                    <span class="engl">I</span> <span class="engl">had</span> <span class="engl">forgot</span> <span
                        class="engl">had</span> <span class="engl">she</span> <span class="engl">not</span> <span
                        class="engl">remembered.</span> <span class="engl">And</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">quiet</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">evening,</span> <span class="engl">after</span>
                    <span class="engl">the</span> <span class="engl">day's</span>
                    <span class="engl">hunt</span> <span class="engl">were</span>
                    <span class="engl">done,</span> <span class="engl">it</span>
                    <span class="engl">came</span> <span class="engl">between</span> <span class="engl">us,</span> <span
                        class="engl">and</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">silence</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">night</span> <span class="engl">when</span> <span class="engl">we</span> <span
                        class="engl">lay</span> <span class="engl">beneath</span> <span class="engl">the</span> <span
                        class="engl">stars</span> <span class="engl">and</span> <span class="engl">should</span> <span
                        class="engl">have</span> <span class="engl">been</span> <span class="engl">one.</span> <span
                        class="engl">It</span> <span class="engl">was</span> <span class="engl">there</span> <span
                        class="engl">always.</span>
                    <span class="engl">She</span> <span class="engl">never</span>
                    <span class="engl">spoke,</span> <span class="engl">but</span>
                    <span class="engl">it</span> <span class="engl">sat</span>
                    <span class="engl">by</span> <span class="engl">our</span>
                    <span class="engl">fire</span> <span class="engl">and</span>
                    <span class="engl">held</span> <span class="engl">us</span>
                    <span class="engl">ever</span> <span class="engl">apart.</span>
                    <span class="engl">She</span> <span class="engl">tried</span>
                    <span class="engl">to</span> <span class="engl">put</span>
                    <span class="engl">it</span> <span class="engl">aside,</span>
                    <span class="engl">but</span> <span class="engl">at</span>
                    <span class="engl">such</span> <span class="engl">times</span>
                    <span class="engl">it</span> <span class="engl">would</span>
                    <span class="engl">rise</span> <span class="engl">up</span>
                    <span class="engl">till</span> <span class="engl">I</span>
                    <span class="engl">could</span> <span class="engl">read</span>
                    <span class="engl">it</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">look</span> <span class="engl">of</span> <span class="engl">her</span> <span
                        class="engl">eyes,</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">very</span> <span class="engl">intake</span> <span class="engl">of</span> <span
                        class="engl">her</span> <span class="engl">breath.</span> </p>
                <p class="english"> <span class="engl">"So</span> <span class="engl">in</span> <span
                        class="engl">the</span> <span class="engl">end</span> <span class="engl">she</span> <span
                        class="engl">bore</span> <span class="engl">me</span> <span class="engl">a</span> <span
                        class="engl">child,</span> <span class="engl">a</span>
                    <span class="engl">woman-child,</span>
                    <span class="engl">and</span> <span class="engl">died.</span>
                    <span class="engl">Then</span> <span class="engl">I</span>
                    <span class="engl">went</span> <span class="engl">among</span>
                    <span class="engl">my</span> <span class="engl">mother's</span>
                    <span class="engl">people,</span> <span class="engl">that</span> <span class="engl">it</span> <span
                        class="engl">might</span> <span class="engl">nurse</span> <span class="engl">at</span> <span
                        class="engl">a</span> <span class="engl">warm</span> <span class="engl">breast</span> <span
                        class="engl">and</span> <span class="engl">live.</span> <span class="engl">But</span> <span
                        class="engl">my</span> <span class="engl">hands</span> <span class="engl">were</span> <span
                        class="engl">wet</span> <span class="engl">with</span> <span class="engl">the</span> <span
                        class="engl">blood</span> <span class="engl">of</span> <span class="engl">men,</span> <span
                        class="engl">look</span> <span class="engl">you,</span> <span class="engl">because</span> <span
                        class="engl">of</span> <span class="engl">the</span> <span class="engl">church,</span> <span
                        class="engl">wet</span> <span class="engl">with</span> <span class="engl">the</span> <span
                        class="engl">blood</span> <span class="engl">of</span> <span class="engl">men.</span> <span
                        class="engl">And</span> <span class="engl">the</span> <span class="engl">Riders</span> <span
                        class="engl">of</span> <span class="engl">the</span> <span class="engl">North</span> <span
                        class="engl">came</span> <span class="engl">for</span> <span class="engl">me,</span> <span
                        class="engl">but</span> <span class="engl">my</span> <span class="engl">mother's</span> <span
                        class="engl">brother,</span> <span class="engl">who</span>
                    <span class="engl">was</span> <span class="engl">then</span>
                    <span class="engl">chief</span> <span class="engl">in</span>
                    <span class="engl">his</span> <span class="engl">own</span>
                    <span class="engl">right,</span> <span class="engl">hid</span>
                    <span class="engl">me</span> <span class="engl">and</span>
                    <span class="engl">gave</span> <span class="engl">me</span>
                    <span class="engl">horses</span> <span class="engl">and</span>
                    <span class="engl">food.</span> <span class="engl">And</span>
                    <span class="engl">we</span> <span class="engl">went</span>
                    <span class="engl">away,</span> <span class="engl">my</span>
                    <span class="engl">woman-child</span> <span class="engl">and</span> <span class="engl">I,</span>
                    <span class="engl">even</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">Hudson</span> <span class="engl">Bay</span> <span class="engl">Country,</span>
                    <span class="engl">where</span> <span class="engl">white</span>
                    <span class="engl">men</span> <span class="engl">were</span>
                    <span class="engl">few</span> <span class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">questions</span> <span class="engl">they</span>
                    <span class="engl">asked</span> <span class="engl">not</span>
                    <span class="engl">many.</span> <span class="engl">And</span>
                    <span class="engl">I</span> <span class="engl">worked</span>
                    <span class="engl">for</span> <span class="engl">the</span>
                    <span class="engl">company</span> <span class="engl">a</span>
                    <span class="engl">hunter,</span> <span class="engl">as</span>
                    <span class="engl">a</span> <span class="engl">guide,</span>
                    <span class="engl">as</span> <span class="engl">a</span> <span class="engl">driver</span> <span
                        class="engl">of</span> <span class="engl">dogs,</span> <span class="engl">till</span> <span
                        class="engl">my</span> <span class="engl">woman-child</span>
                    <span class="engl">was</span> <span class="engl">become</span>
                    <span class="engl">a</span> <span class="engl">woman,</span>
                    <span class="engl">tall,</span> <span class="engl">and</span>
                    <span class="engl">slender,</span> <span class="engl">and</span> <span class="engl">fair</span>
                    <span class="engl">to</span> <span class="engl">the</span> <span class="engl">eye.</span> </p>
                <p class="english"> <span class="engl">"You</span> <span class="engl">know</span> <span
                        class="engl">the</span> <span class="engl">winter,</span> <span class="engl">long</span> <span
                        class="engl">and</span> <span class="engl">lonely,</span> <span class="engl">breeding</span>
                    <span class="engl">evil</span> <span class="engl">thoughts</span> <span class="engl">and</span>
                    <span class="engl">bad</span> <span class="engl">deeds.</span>
                    <span class="engl">The</span> <span class="engl">Chief</span>
                    <span class="engl">Factor</span> <span class="engl">was</span>
                    <span class="engl">a</span> <span class="engl">hard</span>
                    <span class="engl">man,</span> <span class="engl">and</span>
                    <span class="engl">bold.</span> <span class="engl">And</span>
                    <span class="engl">he</span> <span class="engl">was</span>
                    <span class="engl">not</span> <span class="engl">such</span>
                    <span class="engl">that</span> <span class="engl">a</span>
                    <span class="engl">woman</span> <span class="engl">would</span>
                    <span class="engl">delight</span> <span class="engl">in</span>
                    <span class="engl">looking</span> <span class="engl">upon.</span> <span class="engl">But</span>
                    <span class="engl">he</span> <span class="engl">cast</span> <span class="engl">eyes</span> <span
                        class="engl">upon</span> <span class="engl">my</span> <span class="engl">woman-child</span>
                    <span class="engl">who</span> <span class="engl">was</span>
                    <span class="engl">become</span> <span class="engl">a</span>
                    <span class="engl">woman.</span> <span class="engl">Mother</span> <span class="engl">of</span> <span
                        class="engl">God!</span> <span class="engl">he</span> <span class="engl">sent</span> <span
                        class="engl">me</span> <span class="engl">away</span> <span class="engl">on</span> <span
                        class="engl">a</span>
                    <span class="engl">long</span> <span class="engl">trip</span> <span class="engl">with</span> <span
                        class="engl">the</span> <span class="engl">dogs,</span> <span class="engl">that</span> <span
                        class="engl">he</span> <span class="engl">might</span><span class="engl">-</span>  <span class="engl">you</span> <span
                        class="engl">understand,</span> <span class="engl">he</span>
                    <span class="engl">was</span> <span class="engl">a</span> <span class="engl">hard</span> <span
                        class="engl">man</span> <span class="engl">and</span> <span class="engl">without</span> <span
                        class="engl">heart.</span> <span class="engl">She</span> <span class="engl">was</span> <span
                        class="engl">most</span> <span class="engl">white,</span> <span class="engl">and</span> <span
                        class="engl">her</span> <span class="engl">soul</span> <span class="engl">was</span> <span
                        class="engl">white,</span> <span class="engl">and</span> <span class="engl">a</span> <span
                        class="engl">good</span> <span class="engl">woman,</span> <span class="engl">and</span><span class="engl">-</span>  <span class="engl">well,</span>
                    <span class="engl">she</span>
                    <span class="engl">died.</span> </p>
                <p class="english"> <span class="engl">"It</span> <span class="engl">was</span> <span
                        class="engl">bitter</span> <span class="engl">cold</span> <span class="engl">the</span> <span
                        class="engl">night</span> <span class="engl">of</span> <span class="engl">my</span> <span
                        class="engl">return,</span> <span class="engl">and</span> <span class="engl">I</span> <span
                        class="engl">had</span> <span class="engl">been</span>
                    <span class="engl">away</span> <span class="engl">months,</span> <span class="engl">and</span> <span
                        class="engl">the</span> <span class="engl">dogs</span> <span class="engl">were</span> <span
                        class="engl">limping</span>
                    <span class="engl">sore</span> <span class="engl">when</span>
                    <span class="engl">I</span> <span class="engl">came</span>
                    <span class="engl">to</span> <span class="engl">the</span>
                    <span class="engl">fort.</span> <span class="engl">The</span>
                    <span class="engl">Indians</span> <span class="engl">and</span>
                    <span class="engl">breeds</span> <span class="engl">looked</span> <span class="engl">on</span> <span
                        class="engl">me</span> <span class="engl">in</span> <span class="engl">silence,</span> <span
                        class="engl">and</span>
                    <span class="engl">I</span> <span class="engl">felt</span>
                    <span class="engl">the</span> <span class="engl">fear</span>
                    <span class="engl">of</span> <span class="engl">I</span> <span class="engl">knew</span> <span
                        class="engl">not</span> <span class="engl">what,</span> <span class="engl">but</span> <span
                        class="engl">I</span> <span class="engl">said</span> <span class="engl">nothing</span> <span
                        class="engl">till</span>
                    <span class="engl">the</span> <span class="engl">dogs</span>
                    <span class="engl">were</span> <span class="engl">fed</span>
                    <span class="engl">and</span> <span class="engl">I</span> <span class="engl">had</span> <span
                        class="engl">eaten</span> <span class="engl">as</span> <span class="engl">a</span> <span
                        class="engl">man</span>
                    <span class="engl">with</span> <span class="engl">work</span> <span class="engl">before</span> <span
                        class="engl">him</span> <span class="engl">should.</span> <span class="engl">Then</span> <span
                        class="engl">I</span> <span class="engl">spoke</span> <span class="engl">up,</span> <span
                        class="engl">demanding</span> <span class="engl">the</span>
                    <span class="engl">word,</span> <span class="engl">and</span>
                    <span class="engl">they</span> <span class="engl">shrank</span>
                    <span class="engl">from</span> <span class="engl">me,</span>
                    <span class="engl">afraid</span> <span class="engl">of</span>
                    <span class="engl">my</span> <span class="engl">anger</span>
                    <span class="engl">and</span> <span class="engl">what</span>
                    <span class="engl">I</span> <span class="engl">should</span>
                    <span class="engl">do;</span> <span class="engl">but</span>
                    <span class="engl">the</span> <span class="engl">story</span>
                    <span class="engl">came</span> <span class="engl">out,</span>
                    <span class="engl">the</span> <span class="engl">pitiful</span>
                    <span class="engl">story,</span> <span class="engl">word</span>
                    <span class="engl">for</span> <span class="engl">word</span>
                    <span class="engl">and</span> <span class="engl">act</span>
                    <span class="engl">for</span> <span class="engl">act,</span>
                    <span class="engl">and</span> <span class="engl">they</span>
                    <span class="engl">marvelled</span> <span class="engl">that</span> <span class="engl">I</span> <span
                        class="engl">should</span> <span class="engl">be</span> <span class="engl">so</span> <span
                        class="engl">quiet.</span> </p>
                <p class="english"> <span class="engl">"When</span> <span class="engl">they</span> <span
                        class="engl">had</span> <span class="engl">done</span> <span class="engl">I</span> <span
                        class="engl">went</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">Factor's</span>
                    <span class="engl">house,</span> <span class="engl">calmer</span> <span class="engl">than</span>
                    <span class="engl">now</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">telling</span> <span class="engl">of</span> <span class="engl">it.</span> <span
                        class="engl">He</span> <span class="engl">had</span> <span class="engl">been</span> <span
                        class="engl">afraid</span> <span class="engl">and</span> <span class="engl">called</span> <span
                        class="engl">upon</span> <span class="engl">the</span> <span class="engl">breeds</span> <span
                        class="engl">to</span> <span class="engl">help</span> <span class="engl">him;</span> <span
                        class="engl">but</span> <span class="engl">they</span> <span class="engl">were</span> <span
                        class="engl">not</span> <span class="engl">pleased</span> <span class="engl">with</span>
                    <span class="engl">the</span> <span class="engl">deed,</span>
                    <span class="engl">and</span> <span class="engl">had</span>
                    <span class="engl">left</span> <span class="engl">him</span>
                    <span class="engl">to</span> <span class="engl">lie</span>
                    <span class="engl">on</span> <span class="engl">the</span>
                    <span class="engl">bed</span> <span class="engl">he</span>
                    <span class="engl">had</span> <span class="engl">made.</span>
                    <span class="engl">So</span> <span class="engl">he</span> <span class="engl">had</span> <span
                        class="engl">fled</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">house</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">priest.</span> <span class="engl">Thither</span> <span class="engl">I</span> <span
                        class="engl">followed.</span> <span class="engl">But</span>
                    <span class="engl">when</span> <span class="engl">I</span>
                    <span class="engl">was</span> <span class="engl">come</span>
                    <span class="engl">to</span> <span class="engl">that</span>
                    <span class="engl">place,</span> <span class="engl">the</span>
                    <span class="engl">priest</span> <span class="engl">stood</span> <span class="engl">in</span> <span
                        class="engl">my</span> <span class="engl">way,</span> <span class="engl">and</span> <span
                        class="engl">spoke</span> <span class="engl">soft</span> <span class="engl">words,</span> <span
                        class="engl">and</span> <span class="engl">said</span> <span class="engl">a</span> <span
                        class="engl">man</span>
                    <span class="engl">in</span> <span class="engl">anger</span> <span class="engl">should</span> <span
                        class="engl">go</span> <span class="engl">neither</span> <span class="engl">to</span> <span
                        class="engl">the</span> <span class="engl">right</span> <span class="engl">nor</span> <span
                        class="engl">left,</span> <span class="engl">but</span> <span class="engl">straight</span>
                    <span class="engl">to</span> <span class="engl">God.</span>
                    <span class="engl"></span> </p>
                <p class="english"> <span class="engl">I</span> <span class="engl">asked</span> <span
                        class="engl">by</span> <span class="engl">the</span> <span class="engl">right</span> <span
                        class="engl">of</span> <span class="engl">a</span>
                    <span class="engl">father's</span> <span class="engl">wrath</span> <span class="engl">that</span>
                    <span class="engl">he</span> <span class="engl">give</span> <span class="engl">me</span> <span
                        class="engl">past,</span> <span class="engl">but</span> <span class="engl">he</span> <span
                        class="engl">said</span> <span class="engl">only</span> <span class="engl">over</span> <span
                        class="engl">his</span> <span class="engl">body,</span> <span class="engl">and</span> <span
                        class="engl">besought</span> <span class="engl">with</span>
                    <span class="engl">me</span> <span class="engl">to</span> <span class="engl">pray.</span> <span
                        class="engl">Look</span> <span class="engl">you,</span> <span class="engl">it</span> <span
                        class="engl">was</span> <span class="engl">the</span> <span class="engl">church,</span> <span
                        class="engl">always</span>
                    <span class="engl">the</span> <span class="engl">church;</span>
                    <span class="engl">for</span> <span class="engl">I</span> <span class="engl">passed</span> <span
                        class="engl">over</span> <span class="engl">his</span> <span class="engl">body</span> <span
                        class="engl">and</span> <span class="engl">sent</span> <span class="engl">the</span> <span
                        class="engl">Factor</span> <span class="engl">to</span> <span class="engl">meet</span> <span
                        class="engl">my</span> <span class="engl">woman-</span> <span class="engl">child</span> <span
                        class="engl">before</span>
                    <span class="engl">his</span> <span class="engl">god,</span>
                    <span class="engl">which</span> <span class="engl">is</span>
                    <span class="engl">a</span> <span class="engl">bad</span> <span class="engl">god,</span> <span
                        class="engl">and</span> <span class="engl">the</span> <span class="engl">god</span> <span
                        class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">white</span> <span class="engl">men.</span> </p>
                <p class="english"> <span class="engl">"Then</span> <span class="engl">was</span> <span
                        class="engl">there</span> <span class="engl">hue</span> <span class="engl">and</span> <span
                        class="engl">cry,</span> <span class="engl">for</span> <span class="engl">word</span> <span
                        class="engl">was</span> <span class="engl">sent</span> <span class="engl">to</span> <span
                        class="engl">the</span> <span class="engl">station</span> <span class="engl">below,</span> <span
                        class="engl">and</span> <span class="engl">I</span> <span class="engl">came</span> <span
                        class="engl">away.</span> <span class="engl">Through</span>
                    <span class="engl">the</span> <span class="engl">Land</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">Great</span> <span class="engl">Slave,</span> <span class="engl">down</span>
                    <span class="engl">the</span> <span class="engl">Valley</span> <span class="engl">of</span> <span
                        class="engl">the</span> <span class="engl">Mackenzie</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">never-opening</span> <span class="engl">ice,</span>
                    <span class="engl">over</span> <span class="engl">the</span> <span class="engl">White</span> <span
                        class="engl">Rockies,</span> <span class="engl">past</span>
                    <span class="engl">the</span> <span class="engl">Great</span>
                    <span class="engl">Curve</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">Yukon,</span>
                    <span class="engl">even</span> <span class="engl">to</span>
                    <span class="engl">this</span> <span class="engl">place</span>
                    <span class="engl">did</span> <span class="engl">I</span> <span class="engl">come.</span> <span
                        class="engl">And</span> <span class="engl">from</span> <span class="engl">that</span> <span
                        class="engl">day</span> <span class="engl">to</span> <span class="engl">this,</span> <span
                        class="engl">yours</span> <span class="engl">is</span> <span class="engl">the</span> <span
                        class="engl">first</span> <span class="engl">face</span> <span class="engl">of</span> <span
                        class="engl">my</span> <span class="engl">father's</span> <span class="engl">people</span>
                    <span class="engl">I</span> <span class="engl">have</span>
                    <span class="engl">looked</span> <span class="engl">upon.</span> <span class="engl">May</span> <span
                        class="engl">it</span> <span class="engl">be</span> <span class="engl">the</span> <span
                        class="engl">last!</span> <span class="engl">These</span> <span class="engl">people,</span>
                    <span class="engl">which</span> <span class="engl">are</span>
                    <span class="engl">my</span> <span class="engl">people,</span>
                    <span class="engl">are</span> <span class="engl">a</span> <span class="engl">simple</span> <span
                        class="engl">folk,</span>
                    <span class="engl">and</span> <span class="engl">I</span> <span class="engl">have</span> <span
                        class="engl">been</span> <span class="engl">raised</span> <span class="engl">to</span> <span
                        class="engl">honor</span> <span class="engl">among</span> <span class="engl">them.</span> <span
                        class="engl">My</span> <span class="engl">word</span> <span class="engl">is</span> <span
                        class="engl">their</span> <span class="engl">law,</span> <span class="engl">and</span> <span
                        class="engl">their</span> <span class="engl">priests</span> <span class="engl">but</span> <span
                        class="engl">do</span> <span class="engl">my</span> <span class="engl">bidding,</span> <span
                        class="engl">else</span>
                    <span class="engl">would</span> <span class="engl">I</span>
                    <span class="engl">not</span> <span class="engl">suffer</span>
                    <span class="engl">them.</span> <span class="engl">When</span>
                    <span class="engl">I</span> <span class="engl">speak</span>
                    <span class="engl">for</span> <span class="engl">them</span>
                    <span class="engl">I</span> <span class="engl">speak</span>
                    <span class="engl">for</span> <span class="engl">myself.</span>
                    <span class="engl">We</span> <span class="engl">ask</span>
                    <span class="engl">to</span> <span class="engl">be</span> <span class="engl">let</span> <span
                        class="engl">alone.</span> <span class="engl">We</span> <span class="engl">do</span> <span
                        class="engl">not</span> <span class="engl">want</span> <span class="engl">your</span> <span
                        class="engl">kind.</span> <span class="engl">If</span> <span class="engl">we</span> <span
                        class="engl">permit</span> <span class="engl">you</span> <span class="engl">to</span> <span
                        class="engl">sit</span> <span class="engl">by</span> <span class="engl">our</span> <span
                        class="engl">fires,</span> <span class="engl">after</span>
                    <span class="engl">you</span> <span class="engl">will</span>
                    <span class="engl">come</span> <span class="engl">your</span>
                    <span class="engl">church,</span> <span class="engl">your</span> <span class="engl">priests,</span>
                    <span class="engl">and</span> <span class="engl">your</span>
                    <span class="engl">gods.</span> <span class="engl">And</span>
                    <span class="engl">know</span> <span class="engl">this,</span>
                    <span class="engl">for</span> <span class="engl">each</span>
                    <span class="engl">white</span> <span class="engl">man</span>
                    <span class="engl">who</span> <span class="engl">comes</span>
                    <span class="engl">to</span> <span class="engl">my</span> <span class="engl">village,</span> <span
                        class="engl">him</span>
                    <span class="engl">will</span> <span class="engl">I</span>
                    <span class="engl">make</span> <span class="engl">deny</span>
                    <span class="engl">his</span> <span class="engl">god.</span>
                    <span class="engl">You</span> <span class="engl">are</span>
                    <span class="engl">the</span> <span class="engl">first,</span>
                    <span class="engl">and</span> <span class="engl">I</span> <span class="engl">give</span> <span
                        class="engl">you</span> <span class="engl">grace.</span> <span class="engl">So</span> <span
                        class="engl">it</span> <span class="engl">were</span> <span class="engl">well</span> <span
                        class="engl">you</span> <span class="engl">go,</span> <span class="engl">and</span> <span
                        class="engl">go</span>
                    <span class="engl">quickly."</span> </p>
                <p class="english"> <span class="engl">"I</span> <span class="engl">am</span> <span
                        class="engl">not</span> <span class="engl">responsible</span> <span class="engl">for</span>
                    <span class="engl">my</span> <span class="engl">brothers,"</span> <span class="engl">the</span>
                    <span class="engl">second</span> <span class="engl">man</span>
                    <span class="engl">spoke</span> <span class="engl">up,</span>
                    <span class="engl">filling</span> <span class="engl">his</span>
                    <span class="engl">pipe</span> <span class="engl">in</span>
                    <span class="engl">a</span> <span class="engl">meditative</span> <span class="engl">manner.</span>
                    <span class="engl">Hay</span> <span class="engl">Stockard</span> <span class="engl">was</span>
                    <span class="engl">at</span> <span class="engl">times</span>
                    <span class="engl">as</span> <span class="engl">thoughtful</span> <span class="engl">of</span>
                    <span class="engl">speech</span> <span class="engl">as</span>
                    <span class="engl">he</span> <span class="engl">was</span>
                    <span class="engl">wanton</span> <span class="engl">of</span>
                    <span class="engl">action;</span> <span class="engl">but</span>
                    <span class="engl">only</span> <span class="engl">at</span>
                    <span class="engl">times.</span> </p>
                <p class="english"> <span class="engl">"But</span> <span class="engl">I</span> <span
                        class="engl">know</span> <span class="engl">your</span> <span class="engl">breed,"</span> <span
                        class="engl">responded</span>
                    <span class="engl">the</span> <span class="engl">other.</span>
                    <span class="engl">"Your</span> <span class="engl">brothers</span> <span class="engl">are</span>
                    <span class="engl">many,</span> <span class="engl">and</span>
                    <span class="engl">it</span> <span class="engl">is</span> <span class="engl">you</span> <span
                        class="engl">and</span> <span class="engl">yours</span> <span class="engl">who</span> <span
                        class="engl">break</span> <span class="engl">the</span> <span class="engl">trail</span> <span
                        class="engl">for</span> <span class="engl">them</span> <span class="engl">to</span> <span
                        class="engl">follow.</span> <span class="engl">In</span> <span class="engl">time</span> <span
                        class="engl">they</span> <span class="engl">shall</span> <span class="engl">come</span> <span
                        class="engl">to</span> <span class="engl">possess</span> <span class="engl">the</span> <span
                        class="engl">land,</span> <span class="engl">but</span> <span class="engl">not</span> <span
                        class="engl">in</span> <span class="engl">my</span> <span class="engl">time.</span> <span
                        class="engl">Already,</span>
                    <span class="engl">have</span> <span class="engl">I</span>
                    <span class="engl">heard,</span> <span class="engl">are</span>
                    <span class="engl">they</span> <span class="engl">on</span>
                    <span class="engl">the</span> <span class="engl">head-reaches</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">Great</span>
                    <span class="engl">River,</span> <span class="engl">and</span>
                    <span class="engl">far</span> <span class="engl">away</span>
                    <span class="engl">below</span> <span class="engl">are</span>
                    <span class="engl">the</span> <span class="engl">Russians."</span> </p>
                <p class="english"> <span class="engl">Hay</span> <span class="engl">Stockard</span>
                    <span class="engl">lifted</span> <span class="engl">his</span>
                    <span class="engl">head</span> <span class="engl">with</span>
                    <span class="engl">a</span> <span class="engl">quick</span>
                    <span class="engl">start.</span> <span class="engl">This</span>
                    <span class="engl">was</span> <span class="engl">startling</span> <span
                        class="engl">geographical</span> <span class="engl">information.</span> <span
                        class="engl">The</span>
                    <span class="engl">Hudson</span> <span class="engl">Bay</span>
                    <span class="engl">post</span> <span class="engl">at</span>
                    <span class="engl">Fort</span> <span class="engl">Yukon</span>
                    <span class="engl">had</span> <span class="engl">other</span>
                    <span class="engl">notions</span> <span class="engl">concerning</span> <span class="engl">the</span>
                    <span class="engl">course</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">river,</span>
                    <span class="engl">believing</span> <span class="engl">it</span> <span class="engl">to</span> <span
                        class="engl">flow</span> <span class="engl">into</span> <span class="engl">the</span> <span
                        class="engl">Arctic.</span> </p>
                <p class="english"> <span class="engl">"Then</span> <span class="engl">the</span> <span
                        class="engl">Yukon</span> <span class="engl">empties</span> <span class="engl">into</span>
                    <span class="engl">Bering</span> <span class="engl">Sea?"</span> <span class="engl">he</span> <span
                        class="engl">asked.</span> </p>
                <p class="english"> <span class="engl">"I</span> <span class="engl">do</span> <span
                        class="engl">not</span> <span class="engl">know,</span> <span class="engl">but</span> <span
                        class="engl">below</span> <span class="engl">there</span> <span class="engl">are</span> <span
                        class="engl">Russians,</span> <span class="engl">many</span>
                    <span class="engl">Russians.</span> <span class="engl">Which</span> <span class="engl">is</span>
                    <span class="engl">neither</span> <span class="engl">here</span>
                    <span class="engl">nor</span> <span class="engl">there.</span>
                    <span class="engl">You</span> <span class="engl">may</span>
                    <span class="engl">go</span> <span class="engl">on</span> <span class="engl">and</span> <span
                        class="engl">see</span> <span class="engl">for</span> <span class="engl">yourself;</span>
                    <span class="engl">you</span> <span class="engl">may</span>
                    <span class="engl">go</span> <span class="engl">back</span>
                    <span class="engl">to</span> <span class="engl">your</span>
                    <span class="engl">brothers;</span> <span class="engl">but</span> <span class="engl">up</span> <span
                        class="engl">the</span> <span class="engl">Koyukuk</span> <span class="engl">you</span> <span
                        class="engl">shall</span> <span class="engl">not</span> <span class="engl">go</span> <span
                        class="engl">while</span> <span class="engl">the</span> <span class="engl">priests</span> <span
                        class="engl">and</span> <span class="engl">fighting</span> <span class="engl">men</span>
                    <span class="engl">do</span> <span class="engl">my</span> <span class="engl">bidding.</span> <span
                        class="engl">Thus</span>
                    <span class="engl">do</span> <span class="engl">I</span> <span class="engl">command,</span> <span
                        class="engl">I,</span> <span class="engl">Baptiste</span> <span class="engl">the</span>
                    <span class="engl">Red,</span> <span class="engl">whose</span>
                    <span class="engl">word</span> <span class="engl">is</span>
                    <span class="engl">law</span> <span class="engl">and</span>
                    <span class="engl">who</span> <span class="engl">am</span>
                    <span class="engl">head</span> <span class="engl">man</span>
                    <span class="engl">over</span> <span class="engl">this</span>
                    <span class="engl">people."</span> </p>
                <p class="english">
                    <span class="engl">"And</span> <span class="engl">should</span>
                    <span class="engl">I</span> <span class="engl">not</span> <span class="engl">go</span> <span
                        class="engl">down</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">Russians,</span> <span class="engl">or</span>
                    <span class="engl">back</span> <span class="engl">to</span>
                    <span class="engl">my</span> <span class="engl">brothers?"</span> </p>
                <p class="english"> <span class="engl">"Then</span> <span class="engl">shall</span> <span
                        class="engl">you</span> <span class="engl">go</span> <span class="engl">swift-footed</span>
                    <span class="engl">before</span> <span class="engl">your</span> <span class="engl">god,</span> <span
                        class="engl">which</span> <span class="engl">is</span> <span class="engl">a</span> <span
                        class="engl">bad</span> <span class="engl">god,</span>
                    <span class="engl">and</span> <span class="engl">the</span> <span class="engl">god</span> <span
                        class="engl">of</span> <span class="engl">the</span> <span class="engl">white</span> <span
                        class="engl">men."</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">red</span> <span
                        class="engl">sun</span> <span class="engl">shot</span> <span class="engl">up</span> <span
                        class="engl">above</span> <span class="engl">the</span> <span class="engl">northern</span>
                    <span class="engl">sky-line,</span> <span class="engl">dripping</span> <span class="engl">and</span>
                    <span class="engl">bloody.</span> <span class="engl">Baptiste</span> <span class="engl">the</span>
                    <span class="engl">Red</span> <span class="engl">came</span>
                    <span class="engl">to</span> <span class="engl">his</span>
                    <span class="engl">feet,</span> <span class="engl">nodded</span> <span class="engl">curtly,</span>
                    <span class="engl">and</span> <span class="engl">went</span>
                    <span class="engl">back</span> <span class="engl">to</span>
                    <span class="engl">his</span> <span class="engl">camp</span>
                    <span class="engl">amid</span> <span class="engl">the</span>
                    <span class="engl">crimson</span> <span class="engl">shadows</span> <span class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">singing</span> <span class="engl">of</span> <span
                        class="engl">the</span> <span class="engl">robins.</span> </p>
                <p class="english"> <span class="engl">Hay</span> <span class="engl">Stockard</span>
                    <span class="engl">finished</span> <span class="engl">his</span> <span class="engl">pipe</span>
                    <span class="engl">by</span> <span class="engl">the</span> <span class="engl">fire,</span> <span
                        class="engl">picturing</span>
                    <span class="engl">in</span> <span class="engl">smoke</span>
                    <span class="engl">and</span> <span class="engl">coal</span>
                    <span class="engl">the</span> <span class="engl">unknown</span>
                    <span class="engl">upper</span> <span class="engl">reaches</span> <span class="engl">of</span> <span
                        class="engl">the</span> <span class="engl">Koyukuk,</span>
                    <span class="engl">the</span> <span class="engl">strange</span>
                    <span class="engl">stream</span> <span class="engl">which</span> <span class="engl">ended</span>
                    <span class="engl">here</span> <span class="engl">its</span> <span class="engl">arctic</span> <span
                        class="engl">travels</span>
                    <span class="engl">and</span> <span class="engl">merged</span>
                    <span class="engl">its</span> <span class="engl">waters</span>
                    <span class="engl">with</span> <span class="engl">the</span>
                    <span class="engl">muddy</span> <span class="engl">Yukon</span>
                    <span class="engl">flood.</span> <span class="engl">Somewhere</span> <span class="engl">up</span>
                    <span class="engl">there,</span> <span class="engl">if</span>
                    <span class="engl">the</span> <span class="engl">dying</span>
                    <span class="engl">words</span> <span class="engl">of</span>
                    <span class="engl">a</span> <span class="engl">ship-wrecked</span> <span
                        class="engl">sailorman</span> <span class="engl">who</span>
                    <span class="engl">had</span> <span class="engl">made</span>
                    <span class="engl">the</span> <span class="engl">fearful</span>
                    <span class="engl">overland</span> <span class="engl">journey</span> <span class="engl">were</span>
                    <span class="engl">to</span> <span class="engl">be</span> <span class="engl">believed,</span> <span
                        class="engl">and</span>
                    <span class="engl">if</span> <span class="engl">the</span>
                    <span class="engl">vial</span> <span class="engl">of</span>
                    <span class="engl">golden</span> <span class="engl">grains</span> <span class="engl">in</span> <span
                        class="engl">his</span> <span class="engl">pouch</span> <span class="engl">attested</span> <span
                        class="engl">anything,</span><span class="engl">-</span>  <span class="engl">somewhere</span> <span class="engl">up</span> <span
                        class="engl">there,</span> <span class="engl">in</span> <span class="engl">that</span> <span
                        class="engl">home</span> <span class="engl">of</span> <span class="engl">winter,</span> <span
                        class="engl">stood</span>
                    <span class="engl">the</span> <span class="engl">Treasure</span> <span class="engl">House</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">North.</span> <span class="engl">And</span>
                    <span class="engl">as</span> <span class="engl">keeper</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">gate,</span> <span class="engl">Baptiste</span> <span class="engl">the</span>
                    <span class="engl">Red,</span> <span class="engl">English</span> <span
                        class="engl">half-breed</span> <span class="engl">and</span>
                    <span class="engl">renegade,</span> <span class="engl">barred</span> <span class="engl">the</span>
                    <span class="engl">way.</span> </p>
                <p class="english"> <span class="engl">"Bah!"</span> <span class="engl">He</span> <span
                        class="engl">kicked</span> <span class="engl">the</span> <span class="engl">embers</span> <span
                        class="engl">apart</span>
                    <span class="engl">and</span> <span class="engl">rose</span>
                    <span class="engl">to</span> <span class="engl">his</span>
                    <span class="engl">full</span> <span class="engl">height,</span> <span class="engl">arms</span>
                    <span class="engl">lazily</span> <span class="engl">outstretched,</span> <span
                        class="engl">facing</span> <span class="engl">the</span> <span class="engl">flushing</span>
                    <span class="engl">north</span>
                    <span class="engl">with</span> <span class="engl">careless</span> <span class="engl">soul.</span>
                </p>
                <p class="english"> <span class="engl">
                        Hay</span> <span class="engl">Stockard</span> <span class="engl">swore,</span> <span
                        class="engl">harshly,</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">rugged</span> <span class="engl">monosyllables</span> <span
                        class="engl">of</span>
                    <span class="engl">his</span> <span class="engl">mother</span>
                    <span class="engl">tongue.</span> <span class="engl">His</span>
                    <span class="engl">wife</span> <span class="engl">lifted</span>
                    <span class="engl">her</span> <span class="engl">gaze</span>
                    <span class="engl">from</span> <span class="engl">the</span>
                    <span class="engl">pots</span> <span class="engl">and</span>
                    <span class="engl">pans,</span> <span class="engl">and</span>
                    <span class="engl">followed</span> <span class="engl">his</span> <span class="engl">in</span> <span
                        class="engl">a</span> <span class="engl">keen</span> <span class="engl">scrutiny</span> <span
                        class="engl">of</span> <span class="engl">the</span> <span class="engl">river.</span> <span
                        class="engl">She</span> <span class="engl">was</span> <span class="engl">a</span> <span
                        class="engl">woman</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">Teslin</span> <span class="engl">Country,</span>
                    <span class="engl">wise</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">ways</span>
                    <span class="engl">of</span> <span class="engl">her</span>
                    <span class="engl">husband's</span> <span class="engl">vernacular</span> <span
                        class="engl">when</span>
                    <span class="engl">it</span> <span class="engl">grew</span>
                    <span class="engl">intensive.</span> <span class="engl">From</span> <span class="engl">the</span>
                    <span class="engl">slipping</span> <span class="engl">of</span> <span class="engl">a</span> <span
                        class="engl">snow-shoe</span> <span class="engl">thong</span> <span class="engl">to</span> <span
                        class="engl">the</span> <span class="engl">forefront</span>
                    <span class="engl">of</span> <span class="engl">sudden</span>
                    <span class="engl">death,</span> <span class="engl">she</span>
                    <span class="engl">could</span> <span class="engl">gauge</span>
                    <span class="engl">occasion</span> <span class="engl">by</span>
                    <span class="engl">the</span> <span class="engl">pitch</span>
                    <span class="engl">and</span> <span class="engl">volume</span>
                    <span class="engl">of</span> <span class="engl">his</span>
                    <span class="engl">blasphemy.</span> <span class="engl">So</span> <span class="engl">she</span>
                    <span class="engl">knew</span> <span class="engl">the</span> <span class="engl">present</span> <span
                        class="engl">occasion</span>
                    <span class="engl">merited</span> <span class="engl">attention.</span> <span class="engl"></span>
                </p>
                <p class="english"> <span class="engl">A</span> <span class="engl">long</span> <span
                        class="engl">canoe,</span> <span class="engl">with</span> <span class="engl">paddles</span>
                    <span class="engl">flashing</span> <span class="engl">back</span> <span class="engl">the</span>
                    <span class="engl">rays</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">westering</span>
                    <span class="engl">sun,</span> <span class="engl">was</span>
                    <span class="engl">crossing</span> <span class="engl">the</span> <span class="engl">current</span>
                    <span class="engl">from</span> <span class="engl">above</span> <span class="engl">and</span> <span
                        class="engl">urging</span> <span class="engl">in</span> <span class="engl">for</span> <span
                        class="engl">the</span> <span class="engl">eddy.</span> <span class="engl">Hay</span> <span
                        class="engl">Stockard</span>
                    <span class="engl">watched</span> <span class="engl">it</span>
                    <span class="engl">intently.</span> <span class="engl">Three</span> <span class="engl">men</span>
                    <span class="engl">rose</span> <span class="engl">and</span> <span class="engl">dipped,</span> <span
                        class="engl">rose</span>
                    <span class="engl">and</span> <span class="engl">dipped,</span>
                    <span class="engl">in</span> <span class="engl">rhythmical</span> <span
                        class="engl">precision;</span> <span class="engl">but</span>
                    <span class="engl">a</span> <span class="engl">red</span> <span class="engl">bandanna,</span> <span
                        class="engl">wrapped</span>
                    <span class="engl">about</span> <span class="engl">the</span>
                    <span class="engl">head</span> <span class="engl">of</span>
                    <span class="engl">one,</span> <span class="engl">caught</span>
                    <span class="engl">and</span> <span class="engl">held</span>
                    <span class="engl">his</span> <span class="engl">eye.</span>
                </p>
                <p class="english"> <span class="engl">"Bill!"</span>
                    <span class="engl">he</span> <span class="engl">called.</span>
                    <span class="engl">"Oh,</span> <span class="engl">Bill!"</span>
                </p>
                <p class="english"> <span class="engl">A</span> <span class="engl">shambling,</span> <span
                        class="engl">loose-jointed</span> <span class="engl">giant</span> <span
                        class="engl">rolled</span>
                    <span class="engl">out</span> <span class="engl">of</span>
                    <span class="engl">one</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">tents,</span>
                    <span class="engl">yawning</span> <span class="engl">and</span>
                    <span class="engl">rubbing</span> <span class="engl">the</span>
                    <span class="engl">sleep</span> <span class="engl">from</span>
                    <span class="engl">his</span> <span class="engl">eyes.</span>
                    <span class="engl">Then</span> <span class="engl">he</span>
                    <span class="engl">sighted</span> <span class="engl">the</span>
                    <span class="engl">strange</span> <span class="engl">canoe</span> <span class="engl">and</span>
                    <span class="engl">was</span> <span class="engl">wide</span> <span class="engl">awake</span> <span
                        class="engl">on</span> <span class="engl">the</span> <span class="engl">instant.</span> </p>
                <p class="english"> <span class="engl">"By</span> <span class="engl">the</span> <span
                        class="engl">jumping</span> <span class="engl">Methuselah!</span> <span class="engl">That</span>
                    <span class="engl">damned</span> <span class="engl">sky-pilot!"</span> </p>
                <p class="english"> <span class="engl">Hay</span> <span class="engl">Stockard</span>
                    <span class="engl">nodded</span> <span class="engl">his</span>
                    <span class="engl">head</span> <span class="engl">bitterly,</span> <span
                        class="engl">half-reached</span> <span class="engl">for</span>
                    <span class="engl">his</span> <span class="engl">rifle,</span>
                    <span class="engl">then</span> <span class="engl">shrugged</span> <span class="engl">his</span>
                    <span class="engl">shoulders.</span> </p>
                <p class="english">
                    <span class="engl">"Pot-shot</span> <span class="engl">him,"</span> <span class="engl">Bill</span>
                    <span class="engl">suggested,</span> <span class="engl">"and</span>
                    <span class="engl">settle</span> <span class="engl">the</span>
                    <span class="engl">thing</span> <span class="engl">out</span>
                    <span class="engl">of</span> <span class="engl">hand.</span>
                    <span class="engl">He'll</span> <span class="engl">spoil</span>
                    <span class="engl">us</span> <span class="engl">sure</span>
                    <span class="engl">if</span> <span class="engl">we</span> <span class="engl">don't."</span> <span
                        class="engl"></span> </p>
                <p class="english"> <span class="engl">But</span> <span class="engl">the</span> <span
                        class="engl">other</span> <span class="engl">declined</span> <span class="engl">this</span>
                    <span class="engl">drastic</span> <span class="engl">measure</span> <span class="engl">and</span>
                    <span class="engl">turned</span> <span class="engl">away,</span>
                    <span class="engl">at</span> <span class="engl">the</span>
                    <span class="engl">same</span> <span class="engl">time</span>
                    <span class="engl">bidding</span> <span class="engl">the</span>
                    <span class="engl">woman</span> <span class="engl">return</span> <span class="engl">to</span> <span
                        class="engl">her</span> <span class="engl">work,</span> <span class="engl">and</span> <span
                        class="engl">calling</span> <span class="engl">Bill</span> <span class="engl">back</span> <span
                        class="engl">from</span> <span class="engl">the</span> <span class="engl">bank.</span> <span
                        class="engl">The</span> <span class="engl">two</span> <span class="engl">Indians</span> <span
                        class="engl">in</span> <span class="engl">the</span> <span class="engl">canoe</span> <span
                        class="engl">moored</span>
                    <span class="engl">it</span> <span class="engl">on</span> <span class="engl">the</span> <span
                        class="engl">edge</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">eddy,</span> <span class="engl">while</span> <span class="engl">its</span> <span
                        class="engl">white</span> <span class="engl">occupant,</span> <span
                        class="engl">conspicuous</span> <span class="engl">by</span>
                    <span class="engl">his</span> <span class="engl">gorgeous</span> <span
                        class="engl">head-gear,</span> <span class="engl">came</span>
                    <span class="engl">up</span> <span class="engl">the</span>
                    <span class="engl">bank.</span> </p>
                <p class="english"> <span class="engl">"Like</span> <span class="engl">Paul</span> <span
                        class="engl">of</span> <span class="engl">Tarsus,</span> <span class="engl">I</span> <span
                        class="engl">give</span> <span class="engl">you</span> <span class="engl">greeting.</span>
                    <span class="engl">Peace</span> <span class="engl">be</span>
                    <span class="engl">unto</span> <span class="engl">you</span>
                    <span class="engl">and</span> <span class="engl">grace</span>
                    <span class="engl">before</span> <span class="engl">the</span>
                    <span class="engl">Lord."</span> </p>
                <p class="english"> <span class="engl">His</span> <span class="engl">advances</span>
                    <span class="engl">were</span> <span class="engl">met</span>
                    <span class="engl">sullenly,</span> <span class="engl">and</span> <span class="engl">without</span>
                    <span class="engl">speech.</span> </p>
                <p class="english"> <span class="engl">"To</span> <span class="engl">you,</span> <span
                        class="engl">Hay</span> <span class="engl">Stockard,</span>
                    <span class="engl">blasphemer</span> <span class="engl">and</span> <span
                        class="engl">Philistine,</span>
                    <span class="engl">greeting.</span> <span class="engl">In</span> <span class="engl">your</span>
                    <span class="engl">heart</span> <span class="engl">is</span> <span class="engl">the</span> <span
                        class="engl">lust</span> <span class="engl">of</span> <span class="engl">Mammon,</span> <span
                        class="engl">in</span> <span class="engl">your</span> <span class="engl">mind</span> <span
                        class="engl">cunning</span>
                    <span class="engl">devils,</span> <span class="engl">in</span>
                    <span class="engl">your</span> <span class="engl">tent</span>
                    <span class="engl">this</span> <span class="engl">woman</span>
                    <span class="engl">whom</span> <span class="engl">you</span>
                    <span class="engl">live</span> <span class="engl">with</span>
                    <span class="engl">in</span> <span class="engl">adultery;</span> <span class="engl">yet</span>
                    <span class="engl">of</span> <span class="engl">these</span>
                    <span class="engl">divers</span> <span class="engl">sins,</span> <span class="engl">even</span>
                    <span class="engl">here</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">wilderness,</span>
                    <span class="engl">I,</span> <span class="engl">Sturges</span>
                    <span class="engl">Owen,</span> <span class="engl">apostle</span> <span class="engl">to</span> <span
                        class="engl">the</span> <span class="engl">Lord,</span> <span class="engl">bid</span> <span
                        class="engl">you</span> <span class="engl">to</span> <span class="engl">repent</span> <span
                        class="engl">and</span> <span class="engl">cast</span> <span class="engl">from</span> <span
                        class="engl">you</span> <span class="engl">your</span> <span class="engl">iniquities."</span>
                </p>
                <p class="english"> <span class="engl">"Save</span> <span class="engl">your</span> <span
                        class="engl">cant!</span> <span class="engl">Save</span> <span class="engl">your</span> <span
                        class="engl">cant!"</span> <span class="engl">Hay</span> <span class="engl">Stockard</span>
                    <span class="engl">broke</span>
                    <span class="engl">in</span> <span class="engl">testily.</span>
                    <span class="engl">"You'll</span> <span class="engl">need</span> <span class="engl">all</span> <span
                        class="engl">you've</span> <span class="engl">got,</span> <span class="engl">and</span> <span
                        class="engl">more,</span> <span class="engl">for</span> <span class="engl">Red</span> <span
                        class="engl">Baptiste</span> <span class="engl">over</span>
                    <span class="engl">yonder."</span> </p>
                <p class="english">
                    <span class="engl">He</span> <span class="engl">waved</span>
                    <span class="engl">his</span> <span class="engl">hand</span>
                    <span class="engl">toward</span> <span class="engl">the</span>
                    <span class="engl">Indian</span> <span class="engl">camp,</span> <span class="engl">where</span>
                    <span class="engl">the</span> <span class="engl">half-breed</span>
                    <span class="engl">was</span> <span class="engl">looking</span>
                    <span class="engl">steadily</span> <span class="engl">across,</span> <span
                        class="engl">striving</span>
                    <span class="engl">to</span> <span class="engl">make</span>
                    <span class="engl">out</span> <span class="engl">the</span>
                    <span class="engl">newcomers.</span> <span class="engl"></span>
                </p>
                <p class="english"> <span class="engl">Sturges</span>
                    <span class="engl">Owen,</span> <span class="engl">disseminator</span> <span class="engl">of</span>
                    <span class="engl">light</span> <span class="engl">and</span>
                    <span class="engl">apostle</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">Lord,</span>
                    <span class="engl">stepped</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">edge</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">steep</span> <span class="engl">and</span>
                    <span class="engl">commanded</span> <span class="engl">his</span> <span class="engl">men</span>
                    <span class="engl">to</span> <span class="engl">bring</span> <span class="engl">up</span> <span
                        class="engl">the</span> <span class="engl">camp</span> <span class="engl">outfit.</span>
                    <span class="engl">Stockard</span> <span class="engl">followed</span> <span class="engl">him.</span>
                </p>
                <p class="english"> <span class="engl">"Look</span> <span class="engl">here,"</span> <span
                        class="engl">he</span> <span class="engl">demanded,</span> <span class="engl">plucking</span>
                    <span class="engl">the</span>
                    <span class="engl">missionary</span> <span class="engl">by</span> <span class="engl">the</span>
                    <span class="engl">shoulder</span> <span class="engl">and</span>
                    <span class="engl">twirling</span> <span class="engl">him</span> <span class="engl">about.</span>
                    <span class="engl">"Do</span> <span class="engl">you</span> <span class="engl">value</span> <span
                        class="engl">your</span> <span class="engl">hide?"</span> </p>
                <p class="english"> <span class="engl">"My</span> <span class="engl">life</span> <span
                        class="engl">is</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">Lord's</span> <span class="engl">keeping,</span> <span class="engl">and</span>
                    <span class="engl">I</span> <span class="engl">do</span> <span class="engl">but</span> <span
                        class="engl">work</span> <span class="engl">in</span> <span class="engl">His</span> <span
                        class="engl">vineyard,"</span> <span class="engl">he</span>
                    <span class="engl">replied</span> <span class="engl">solemnly.</span> </p>
                <p class="english"> <span class="engl">"Oh,</span> <span class="engl">stow</span> <span
                        class="engl">that!</span> <span class="engl">Are</span> <span class="engl">you</span> <span
                        class="engl">looking</span> <span class="engl">for</span> <span class="engl">a</span> <span
                        class="engl">job</span> <span class="engl">of</span>
                    <span class="engl">martyrship?"</span> </p>
                <p class="english"> <span class="engl">"If</span> <span class="engl">He</span> <span
                        class="engl">so</span> <span class="engl">wills."</span> </p>
                <p class="english"> <span class="engl">"Well,</span> <span class="engl">you'll</span> <span
                        class="engl">find</span>
                    <span class="engl">it</span> <span class="engl">right</span> <span class="engl">here,</span> <span
                        class="engl">but</span> <span class="engl">I'm</span> <span class="engl">going</span> <span
                        class="engl">to</span> <span class="engl">give</span> <span class="engl">you</span> <span
                        class="engl">some</span> <span class="engl">advice</span> <span class="engl">first.</span>
                    <span class="engl">Take</span> <span class="engl">it</span>
                    <span class="engl">or</span> <span class="engl">leave</span>
                    <span class="engl">it.</span> <span class="engl">If</span>
                    <span class="engl">you</span> <span class="engl">stop</span>
                    <span class="engl">here,</span> <span class="engl">you'll</span> <span class="engl">be</span> <span
                        class="engl">cut</span> <span class="engl">off</span> <span class="engl">in</span> <span
                        class="engl">the</span>
                    <span class="engl">midst</span> <span class="engl">of</span> <span class="engl">your</span> <span
                        class="engl">labors.</span>
                    <span class="engl">And</span> <span class="engl">not</span>
                    <span class="engl">you</span> <span class="engl">alone,</span>
                    <span class="engl">but</span> <span class="engl">your</span>
                    <span class="engl">men,</span> <span class="engl">Bill,</span>
                    <span class="engl">my</span> <span class="engl">wife</span><span class="engl">-</span>  <span class="engl">"</span>
                </p>
                <p class="english"> <span class="engl">"Who</span> <span class="engl">is</span> <span
                        class="engl">a</span> <span class="engl">daughter</span> <span class="engl">of</span> <span
                        class="engl">Belial</span> <span class="engl">and</span> <span class="engl">hearkeneth</span>
                    <span class="engl">not</span>
                    <span class="engl">to</span> <span class="engl">the</span>
                    <span class="engl">true</span> <span class="engl">Gospel."</span> </p>
                <p class="english"> <span class="engl">"And</span> <span class="engl">myself.</span>
                    <span class="engl">Not</span> <span class="engl">only</span>
                    <span class="engl">do</span> <span class="engl">you</span>
                    <span class="engl">bring</span> <span class="engl">trouble</span> <span class="engl">upon</span>
                    <span class="engl">yourself,</span> <span class="engl">but</span> <span class="engl">upon</span>
                    <span class="engl">us.</span> <span class="engl">I</span> <span class="engl">was</span> <span
                        class="engl">frozen</span> <span class="engl">in</span> <span class="engl">with</span> <span
                        class="engl">you</span> <span class="engl">last</span> <span class="engl">winter,</span> <span
                        class="engl">as</span> <span class="engl">you</span> <span class="engl">will</span> <span
                        class="engl">well</span> <span class="engl">recollect,</span>
                    <span class="engl">and</span> <span class="engl">I</span> <span class="engl">know</span> <span
                        class="engl">you</span> <span class="engl">for</span> <span class="engl">a</span> <span
                        class="engl">good</span>
                    <span class="engl">man</span> <span class="engl">and</span> <span class="engl">a</span> <span
                        class="engl">fool.</span> <span class="engl">If</span> <span class="engl">you</span> <span
                        class="engl">think</span> <span class="engl">it</span> <span class="engl">your</span> <span
                        class="engl">duty</span> <span class="engl">to</span> <span class="engl">strive</span> <span
                        class="engl">with</span> <span class="engl">the</span> <span class="engl">heathen,</span>
                    <span class="engl">well</span> <span class="engl">and</span>
                    <span class="engl">good;</span> <span class="engl">but,</span>
                    <span class="engl">do</span> <span class="engl">exercise</span>
                    <span class="engl">some</span> <span class="engl">wit</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">way</span> <span class="engl">you</span>
                    <span class="engl">go</span> <span class="engl">about</span>
                    <span class="engl">it.</span> <span class="engl">This</span>
                    <span class="engl">man,</span> <span class="engl">Red</span>
                    <span class="engl">Baptiste,</span> <span class="engl">is</span> <span class="engl">no</span> <span
                        class="engl">Indian.</span> <span class="engl">He</span> <span class="engl">comes</span> <span
                        class="engl">of</span> <span class="engl">our</span> <span class="engl">common</span> <span
                        class="engl">stock,</span> <span class="engl">is</span> <span class="engl">as</span> <span
                        class="engl">bull-necked</span>
                    <span class="engl">as</span> <span class="engl">I</span> <span class="engl">ever</span> <span
                        class="engl">dared</span> <span class="engl">be,</span> <span class="engl">and</span> <span
                        class="engl">as</span> <span class="engl">wild</span> <span class="engl">a</span> <span
                        class="engl">fanatic</span> <span class="engl">the</span> <span class="engl">one</span> <span
                        class="engl">way</span> <span class="engl">as</span> <span class="engl">you</span> <span
                        class="engl">are</span>
                    <span class="engl">the</span> <span class="engl">other.</span> <span class="engl">When</span> <span
                        class="engl">you</span> <span class="engl">two</span> <span class="engl">come</span> <span
                        class="engl">together,</span> <span class="engl">hell'll</span>
                    <span class="engl">be</span> <span class="engl">to</span> <span class="engl">pay,</span> <span
                        class="engl">and</span> <span class="engl">I</span> <span class="engl">don't</span> <span
                        class="engl">care</span> <span class="engl">to</span> <span class="engl">be</span> <span
                        class="engl">mixed</span> <span class="engl">up</span> <span class="engl">in</span> <span
                        class="engl">it.</span> <span class="engl">Understand?</span>
                    <span class="engl">So</span> <span class="engl">take</span>
                    <span class="engl">my</span> <span class="engl">advice</span>
                    <span class="engl">and</span> <span class="engl">go</span>
                    <span class="engl">away.</span> <span class="engl">If</span>
                    <span class="engl">you</span> <span class="engl">go</span>
                    <span class="engl">down-stream,</span> <span class="engl">you'll</span> <span
                        class="engl">fall</span> <span class="engl">in</span> <span class="engl">with</span> <span
                        class="engl">the</span> <span class="engl">Russians.</span>
                    <span class="engl">There's</span> <span class="engl">bound</span> <span class="engl">to</span> <span
                        class="engl">be</span> <span class="engl">Greek</span> <span class="engl">priests</span> <span
                        class="engl">among</span>
                    <span class="engl">them,</span> <span class="engl">and</span>
                    <span class="engl">they'll</span> <span class="engl">see</span>
                    <span class="engl">you</span> <span class="engl">safe</span>
                    <span class="engl">through</span> <span class="engl">to</span>
                    <span class="engl">Bering</span> <span class="engl">Sea,</span><span class="engl">-</span>  <span class="engl">that's</span> <span
                        class="engl">where</span> <span class="engl">the</span> <span class="engl">Yukon</span> <span
                        class="engl">empties,</span><span class="engl">-</span>  <span class="engl">and</span> <span class="engl">from</span> <span class="engl">there</span>
                    <span class="engl">it</span> <span class="engl">won't</span> <span class="engl">be</span> <span
                        class="engl">hard</span> <span class="engl">to</span> <span class="engl">get</span> <span
                        class="engl">back</span> <span class="engl">to</span>
                    <span class="engl">civilization.</span> <span class="engl">Take</span> <span class="engl">my</span>
                    <span class="engl">word</span> <span class="engl">for</span> <span class="engl">it</span> <span
                        class="engl">and</span> <span class="engl">get</span> <span class="engl">out</span> <span
                        class="engl">of</span>
                    <span class="engl">here</span> <span class="engl">as</span> <span class="engl">fast</span> <span
                        class="engl">as</span> <span class="engl">God'll</span> <span class="engl">let</span> <span
                        class="engl">you."</span> </p>
                <p class="english"> <span class="engl">"He</span> <span class="engl">who</span> <span
                        class="engl">carries</span> <span class="engl">the</span> <span class="engl">Lord</span> <span
                        class="engl">in</span> <span class="engl">his</span> <span class="engl">heart</span> <span
                        class="engl">and</span> <span class="engl">the</span> <span class="engl">Gospel</span> <span
                        class="engl">in</span> <span class="engl">his</span> <span class="engl">hand</span> <span
                        class="engl">hath</span> <span class="engl">no</span> <span class="engl">fear</span> <span
                        class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">machinations</span> <span class="engl">of</span>
                    <span class="engl">man</span> <span class="engl">or</span>
                    <span class="engl">devil,"</span> <span class="engl">the</span>
                    <span class="engl">missionary</span> <span class="engl">answered</span> <span
                        class="engl">stoutly.</span>
                    <span class="engl">"I</span> <span class="engl">will</span>
                    <span class="engl">see</span> <span class="engl">this</span>
                    <span class="engl">man</span> <span class="engl">and</span>
                    <span class="engl">wrestle</span> <span class="engl">with</span> <span class="engl">him.</span>
                    <span class="engl">One</span> <span class="engl">backslider</span>
                    <span class="engl">returned</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">fold</span>
                    <span class="engl">is</span> <span class="engl">a</span> <span class="engl">greater</span> <span
                        class="engl">victory</span>
                    <span class="engl">than</span> <span class="engl">a</span>
                    <span class="engl">thousand</span> <span class="engl">heathen.</span> <span class="engl">He</span>
                    <span class="engl">who</span> <span class="engl">is</span> <span class="engl">strong</span> <span
                        class="engl">for</span> <span class="engl">evil</span> <span class="engl">can</span> <span
                        class="engl">be</span> <span class="engl">as</span> <span class="engl">mighty</span> <span
                        class="engl">for</span> <span class="engl">good,</span> <span class="engl">witness</span>
                    <span class="engl">Saul</span> <span class="engl">when</span>
                    <span class="engl">he</span> <span class="engl">journeyed</span> <span class="engl">up</span>
                    <span class="engl">to</span> <span class="engl">Damascus</span>
                    <span class="engl">to</span> <span class="engl">bring</span>
                    <span class="engl">Christian</span> <span class="engl">captives</span> <span class="engl">to</span>
                    <span class="engl">Jerusalem.</span> <span class="engl">And</span>
                    <span class="engl">the</span> <span class="engl">voice</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">Saviour</span> <span class="engl">came</span> <span class="engl">to</span> <span
                        class="engl">him,</span> <span class="engl">crying,</span>
                    <span class="engl">'Saul,</span> <span class="engl">Saul,</span> <span class="engl">why</span> <span
                        class="engl">persecutest</span> <span class="engl">thou</span>
                    <span class="engl">me?'</span> <span class="engl">And</span>
                    <span class="engl">therewith</span> <span class="engl">Paul</span> <span class="engl">arrayed</span>
                    <span class="engl">himself</span> <span class="engl">on</span>
                    <span class="engl">the</span> <span class="engl">side</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">Lord,</span> <span class="engl">and</span>
                    <span class="engl">thereafter</span> <span class="engl">was</span> <span class="engl">most</span>
                    <span class="engl">mighty</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">saving</span> <span class="engl">of</span> <span class="engl">souls.</span> <span
                        class="engl">And</span> <span class="engl">even</span> <span class="engl">as</span> <span
                        class="engl">thou,</span> <span class="engl">Paul</span> <span class="engl">of</span> <span
                        class="engl">Tarsus,</span> <span class="engl">even</span>
                    <span class="engl">so</span> <span class="engl">do</span> <span class="engl">I</span> <span
                        class="engl">work</span>
                    <span class="engl">in</span> <span class="engl">the</span> <span class="engl">vineyard</span> <span
                        class="engl">of</span> <span class="engl">the</span> <span class="engl">Lord,</span> <span
                        class="engl">bearing</span> <span class="engl">trials</span>
                    <span class="engl">and</span> <span class="engl">tribulations,</span> <span
                        class="engl">scoffs</span> <span class="engl">and</span> <span class="engl">sneers,</span> <span
                        class="engl">stripes</span>
                    <span class="engl">and</span> <span class="engl">punishments,</span> <span class="engl">for</span>
                    <span class="engl">His</span> <span class="engl">dear</span>
                    <span class="engl">sake."</span> </p>
                <p class="english"> <span class="engl">"Bring</span> <span class="engl">up</span> <span
                        class="engl">the</span> <span class="engl">little</span> <span class="engl">bag</span> <span
                        class="engl">with</span> <span class="engl">the</span> <span class="engl">tea</span> <span
                        class="engl">and</span> <span class="engl">a</span>
                    <span class="engl">kettle</span> <span class="engl">of</span> <span class="engl">water,"</span>
                    <span class="engl">he</span> <span class="engl">called</span> <span class="engl">the</span> <span
                        class="engl">next</span> <span class="engl">instant</span>
                    <span class="engl">to</span> <span class="engl">his</span>
                    <span class="engl">boatmen;</span> <span class="engl">"not</span> <span
                        class="engl">forgetting</span>
                    <span class="engl">the</span> <span class="engl">haunch</span>
                    <span class="engl">of</span> <span class="engl">cariboo</span>
                    <span class="engl">and</span> <span class="engl">the</span>
                    <span class="engl">mixing-pan."</span> </p>
                <p class="english">
                    <span class="engl">When</span> <span class="engl">his</span>
                    <span class="engl">men,</span> <span class="engl">converts</span> <span class="engl">by</span> <span
                        class="engl">his</span> <span class="engl">own</span> <span class="engl">hand,</span> <span
                        class="engl">had</span> <span class="engl">gained</span> <span class="engl">the</span> <span
                        class="engl">bank,</span> <span class="engl">the</span> <span class="engl">trio</span> <span
                        class="engl">fell</span> <span class="engl">to</span> <span class="engl">their</span> <span
                        class="engl">knees,</span> <span class="engl">hands</span>
                    <span class="engl">and</span> <span class="engl">backs</span>
                    <span class="engl">burdened</span> <span class="engl">with</span> <span class="engl">camp</span>
                    <span class="engl">equipage,</span> <span class="engl">and</span>
                    <span class="engl">offered</span> <span class="engl">up</span>
                    <span class="engl">thanks</span> <span class="engl">for</span>
                    <span class="engl">their</span> <span class="engl">passage</span> <span class="engl">through</span>
                    <span class="engl">the</span> <span class="engl">wilderness</span> <span class="engl">and</span>
                    <span class="engl">their</span> <span class="engl">safe</span>
                    <span class="engl">arrival.</span> <span class="engl"></span>
                </p>
                <p class="english"> <span class="engl">Hay</span> <span class="engl">Stockard</span> <span
                        class="engl">looked</span>
                    <span class="engl">upon</span> <span class="engl">the</span>
                    <span class="engl">function</span> <span class="engl">with</span> <span class="engl">sneering</span>
                    <span class="engl">disapproval,</span> <span class="engl">the</span> <span
                        class="engl">romance</span> <span class="engl">and</span> <span class="engl">solemnity</span>
                    <span class="engl">of</span> <span class="engl">it</span> <span class="engl">lost</span> <span
                        class="engl">to</span> <span class="engl">his</span> <span class="engl">matter-of-fact</span>
                    <span class="engl">soul.</span> <span class="engl">Baptiste</span>
                    <span class="engl">the</span> <span class="engl">Red,</span>
                    <span class="engl">still</span> <span class="engl">gazing</span> <span class="engl">across,</span>
                    <span class="engl">recognized</span> <span class="engl">the</span> <span
                        class="engl">familiar</span>
                    <span class="engl">postures,</span> <span class="engl">and</span> <span
                        class="engl">remembered</span>
                    <span class="engl">the</span> <span class="engl">girl</span>
                    <span class="engl">who</span> <span class="engl">had</span>
                    <span class="engl">shared</span> <span class="engl">his</span>
                    <span class="engl">star-roofed</span> <span class="engl">couch</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">hills</span> <span class="engl">and</span> <span
                        class="engl">forests,</span>
                    <span class="engl">and</span> <span class="engl">the</span>
                    <span class="engl">woman-child</span> <span class="engl">who</span> <span class="engl">lay</span>
                    <span class="engl">somewhere</span> <span class="engl">by</span>
                    <span class="engl">bleak</span> <span class="engl">Hudson's</span> <span class="engl">Bay.</span>
                </p>
                <p class="english"> <span class="engl">"Confound</span>
                    <span class="engl">it,</span> <span class="engl">Baptiste,</span> <span class="engl">couldn't</span>
                    <span class="engl">think</span>
                    <span class="engl">of</span> <span class="engl">it.</span>
                    <span class="engl">Not</span> <span class="engl">for</span>
                    <span class="engl">a</span> <span class="engl">moment.</span>
                    <span class="engl">Grant</span> <span class="engl">that</span>
                    <span class="engl">this</span> <span class="engl">man</span>
                    <span class="engl">is</span> <span class="engl">a</span> <span class="engl">fool</span> <span
                        class="engl">and</span> <span class="engl">of</span> <span class="engl">small</span> <span
                        class="engl">use</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">nature</span> <span class="engl">of</span> <span class="engl">things,</span> <span
                        class="engl">but</span> <span class="engl">still,</span> <span class="engl">you</span> <span
                        class="engl">know,</span> <span class="engl">I</span> <span class="engl">can't</span> <span
                        class="engl">give</span> <span class="engl">him</span> <span class="engl">up."</span> </p>
                <p class="english"> <span class="engl">Hay</span> <span class="engl">Stockard</span>
                    <span class="engl">paused,</span> <span class="engl">striving</span> <span class="engl">to</span>
                    <span class="engl">put</span> <span class="engl">into</span> <span class="engl">speech</span> <span
                        class="engl">the</span> <span class="engl">rude</span> <span class="engl">ethics</span> <span
                        class="engl">of</span> <span class="engl">his</span> <span class="engl">heart.</span> </p>
                <p class="english"> <span class="engl">"He's</span> <span class="engl">worried</span>
                    <span class="engl">me,</span> <span class="engl">Baptiste,</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">past</span>
                    <span class="engl">and</span> <span class="engl">now,</span>
                    <span class="engl">and</span> <span class="engl">caused</span>
                    <span class="engl">me</span> <span class="engl">all</span>
                    <span class="engl">manner</span> <span class="engl">of</span>
                    <span class="engl">troubles;</span> <span class="engl">but</span> <span class="engl">can't</span>
                    <span class="engl">you</span> <span class="engl">see,</span> <span class="engl">he's</span> <span
                        class="engl">my</span> <span class="engl">own</span> <span
                        class="engl">breed</span><span class="engl">-</span>  <span class="engl">white</span><span class="engl">-</span>  <span class="engl">and</span><span class="engl">-</span>  <span class="engl">and</span><span class="engl">-</span>  <span class="engl">why,</span>
                    <span class="engl">I</span> <span class="engl">couldn't</span> <span class="engl">buy</span> <span
                        class="engl">my</span> <span class="engl">life</span> <span class="engl">with</span> <span
                        class="engl">his,</span> <span class="engl">not</span> <span class="engl">if</span> <span
                        class="engl">he</span>
                    <span class="engl">was</span> <span class="engl">a</span> <span class="engl">nigger."</span> </p>
                <p class="english"> <span class="engl">"So</span> <span class="engl">be</span> <span
                        class="engl">it,"</span> <span class="engl">Baptiste</span>
                    <span class="engl">the</span> <span class="engl">Red</span>
                    <span class="engl">made</span> <span class="engl">answer.</span> <span class="engl">"I</span> <span
                        class="engl">have</span> <span class="engl">given</span> <span class="engl">you</span> <span
                        class="engl">grace</span> <span class="engl">and</span> <span class="engl">choice.</span> <span
                        class="engl">I</span> <span class="engl">shall</span> <span class="engl">come</span> <span
                        class="engl">presently,</span>
                    <span class="engl">with</span> <span class="engl">my</span>
                    <span class="engl">priests</span> <span class="engl">and</span>
                    <span class="engl">fighting</span> <span class="engl">men,</span> <span class="engl">and</span>
                    <span class="engl">either</span> <span class="engl">shall</span>
                    <span class="engl">I</span> <span class="engl">kill</span>
                    <span class="engl">you,</span> <span class="engl">or</span>
                    <span class="engl">you</span> <span class="engl">deny</span>
                    <span class="engl">your</span> <span class="engl">god.</span>
                    <span class="engl">Give</span> <span class="engl">up</span>
                    <span class="engl">the</span> <span class="engl">priest</span>
                    <span class="engl">to</span> <span class="engl">my</span> <span class="engl">pleasure,</span> <span
                        class="engl">and</span>
                    <span class="engl">you</span> <span class="engl">shall</span>
                    <span class="engl">depart</span> <span class="engl">in</span>
                    <span class="engl">peace.</span> <span class="engl">Otherwise</span> <span class="engl">your</span>
                    <span class="engl">trail</span> <span class="engl">ends</span>
                    <span class="engl">here.</span> <span class="engl">My</span>
                    <span class="engl">people</span> <span class="engl">are</span>
                    <span class="engl">against</span> <span class="engl">you</span>
                    <span class="engl">to</span> <span class="engl">the</span>
                    <span class="engl">babies.</span> <span class="engl">Even</span> <span class="engl">now</span> <span
                        class="engl">have</span> <span class="engl">the</span> <span class="engl">children</span> <span
                        class="engl">stolen</span>
                    <span class="engl">away</span> <span class="engl">your</span>
                    <span class="engl">canoes."</span> <span class="engl">He</span>
                    <span class="engl">pointed</span> <span class="engl">down</span> <span class="engl">to</span> <span
                        class="engl">the</span> <span class="engl">river.</span> <span class="engl">Naked</span> <span
                        class="engl">boys</span> <span class="engl">had</span> <span class="engl">slipped</span> <span
                        class="engl">down</span> <span class="engl">the</span> <span class="engl">water</span> <span
                        class="engl">from</span> <span class="engl">the</span> <span class="engl">point</span> <span
                        class="engl">above,</span> <span class="engl">cast</span> <span class="engl">loose</span> <span
                        class="engl">the</span> <span class="engl">canoes,</span> <span class="engl">and</span> <span
                        class="engl">by</span> <span class="engl">then</span> <span class="engl">had</span> <span
                        class="engl">worked</span> <span class="engl">them</span> <span class="engl">into</span> <span
                        class="engl">the</span> <span class="engl">current.</span>
                    <span class="engl">When</span> <span class="engl">they</span>
                    <span class="engl">had</span> <span class="engl">drifted</span>
                    <span class="engl">out</span> <span class="engl">of</span>
                    <span class="engl">rifle-shot</span> <span class="engl">they</span> <span
                        class="engl">clambered</span>
                    <span class="engl">over</span> <span class="engl">the</span>
                    <span class="engl">sides</span> <span class="engl">and</span>
                    <span class="engl">paddled</span> <span class="engl">ashore.</span> </p>
                <p class="english"> <span class="engl">"Give</span> <span class="engl">me</span> <span
                        class="engl">the</span> <span class="engl">priest,</span> <span class="engl">and</span> <span
                        class="engl">you</span> <span class="engl">may</span> <span class="engl">have</span> <span
                        class="engl">them</span> <span class="engl">back</span> <span class="engl">again.</span> <span
                        class="engl">Come!</span>
                    <span class="engl">Speak</span> <span class="engl">your</span>
                    <span class="engl">mind,</span> <span class="engl">but</span>
                    <span class="engl">without</span> <span class="engl">haste."</span> </p>
                <p class="english"> <span class="engl">Stockard</span> <span class="engl">shook</span>
                    <span class="engl">his</span> <span class="engl">head.</span>
                    <span class="engl">His</span> <span class="engl">glance</span>
                    <span class="engl">dropped</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">woman</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">Teslin</span> <span class="engl">Country</span> <span class="engl">with</span>
                    <span class="engl">his</span> <span class="engl">boy</span>
                    <span class="engl">at</span> <span class="engl">her</span>
                    <span class="engl">breast,</span> <span class="engl">and</span>
                    <span class="engl">he</span> <span class="engl">would</span>
                    <span class="engl">have</span> <span class="engl">wavered</span> <span class="engl">had</span> <span
                        class="engl">he</span> <span class="engl">not</span> <span class="engl">lifted</span> <span
                        class="engl">his</span> <span class="engl">eyes</span> <span class="engl">to</span> <span
                        class="engl">the</span> <span class="engl">men</span> <span class="engl">before</span> <span
                        class="engl">him.</span> </p>
                <p class="english"> <span class="engl">"I</span> <span class="engl">am</span> <span
                        class="engl">not</span> <span class="engl">afraid,"</span> <span class="engl">Sturges</span>
                    <span class="engl">Owen</span> <span class="engl">spoke</span>
                    <span class="engl">up.</span> <span class="engl">"The</span>
                    <span class="engl">Lord</span> <span class="engl">bears</span>
                    <span class="engl">me</span> <span class="engl">in</span> <span class="engl">his</span> <span
                        class="engl">right</span> <span class="engl">hand,</span> <span class="engl">and</span> <span
                        class="engl">alone</span> <span class="engl">am</span> <span class="engl">I</span> <span
                        class="engl">ready</span> <span class="engl">to</span> <span class="engl">go</span> <span
                        class="engl">into</span> <span class="engl">the</span> <span class="engl">camp</span> <span
                        class="engl">of</span> <span class="engl">the</span> <span class="engl">unbeliever.</span>
                    <span class="engl">It</span> <span class="engl">is</span> <span class="engl">not</span> <span
                        class="engl">too</span> <span class="engl">late.</span> <span class="engl">Faith</span> <span
                        class="engl">may</span> <span class="engl">move</span> <span class="engl">mountains.</span>
                    <span class="engl">Even</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">eleventh</span> <span class="engl">hour</span> <span class="engl">may</span>
                    <span class="engl">I</span> <span class="engl">win</span> <span class="engl">his</span> <span
                        class="engl">soul</span>
                    <span class="engl">to</span> <span class="engl">the</span> <span class="engl">true</span> <span
                        class="engl">righteousness."</span> </p>
                <p class="english">
                    <span class="engl">"Trip</span> <span class="engl">the</span>
                    <span class="engl">beggar</span> <span class="engl">up</span>
                    <span class="engl">and</span> <span class="engl">make</span>
                    <span class="engl">him</span> <span class="engl">fast,"</span>
                    <span class="engl">Bill</span> <span class="engl">whispered</span> <span
                        class="engl">hoarsely</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">ear</span> <span class="engl">of</span>
                    <span class="engl">his</span> <span class="engl">leader,</span> <span class="engl">while</span>
                    <span class="engl">the</span> <span class="engl">missionary</span> <span class="engl">kept</span>
                    <span class="engl">the</span> <span class="engl">floor</span>
                    <span class="engl">and</span> <span class="engl">wrestled</span> <span class="engl">with</span>
                    <span class="engl">the</span> <span class="engl">heathen.</span> <span class="engl">"Make</span>
                    <span class="engl">him</span> <span class="engl">hostage,</span> <span class="engl">and</span>
                    <span class="engl">bore</span> <span class="engl">him</span>
                    <span class="engl">if</span> <span class="engl">they</span>
                    <span class="engl">get</span> <span class="engl">ugly."</span>
                </p>
                <p class="english"> <span class="engl">"No,"</span> <span class="engl">Stockard</span> <span
                        class="engl">answered.</span> <span class="engl">"I</span>
                    <span class="engl">gave</span> <span class="engl">him</span>
                    <span class="engl">my</span> <span class="engl">word</span>
                    <span class="engl">that</span> <span class="engl">he</span>
                    <span class="engl">could</span> <span class="engl">speak</span>
                    <span class="engl">with</span> <span class="engl">us</span>
                    <span class="engl">unmolested.</span> <span class="engl">Rules</span> <span class="engl">of</span>
                    <span class="engl">warfare,</span> <span class="engl">Bill;</span>
                    <span class="engl">rules</span> <span class="engl">of</span>
                    <span class="engl">warfare.</span> <span class="engl">He's</span> <span class="engl">been</span>
                    <span class="engl">on</span> <span class="engl">the</span> <span class="engl">square,</span> <span
                        class="engl">given</span>
                    <span class="engl">us</span> <span class="engl">warning,</span>
                    <span class="engl">and</span> <span class="engl">all</span>
                    <span class="engl">that,</span> <span class="engl">and</span><span class="engl">-</span>  <span class="engl">why,</span> <span class="engl">damn</span>
                    <span class="engl">it,</span> <span class="engl">man,</span>
                    <span class="engl">I</span> <span class="engl">can't</span>
                    <span class="engl">break</span> <span class="engl">my</span>
                    <span class="engl">word!"</span> </p>
                <p class="english"> <span class="engl">"He'll</span> <span class="engl">keep</span> <span
                        class="engl">his,</span> <span class="engl">never</span> <span class="engl">fear."</span> </p>
                <p class="english"> <span class="engl">"Don't</span> <span class="engl">doubt</span>
                    <span class="engl">it,</span> <span class="engl">but</span>
                    <span class="engl">I</span> <span class="engl">won't</span>
                    <span class="engl">let</span> <span class="engl">a</span> <span class="engl">half-breed</span> <span
                        class="engl">outdo</span>
                    <span class="engl">me</span> <span class="engl">in</span> <span class="engl">fair</span> <span
                        class="engl">dealing.</span>
                    <span class="engl">Why</span> <span class="engl">not</span>
                    <span class="engl">do</span> <span class="engl">what</span>
                    <span class="engl">he</span> <span class="engl">wants,</span><span class="engl">-</span>  <span class="engl">give</span> <span class="engl">him</span>
                    <span class="engl">the</span> <span class="engl">missionary</span> <span class="engl">and</span>
                    <span class="engl">be</span> <span class="engl">done</span>
                    <span class="engl">with</span> <span class="engl">it?"</span>
                </p>
                <p class="english"> <span class="engl">"N-no,"</span>
                    <span class="engl">Bill</span> <span class="engl">hesitated</span> <span
                        class="engl">doubtfully.</span> </p>
                <p class="english"> <span class="engl">"Shoe</span> <span class="engl">pinches,</span>
                    <span class="engl">eh?"</span> </p>
                <p class="english"> <span class="engl">Bill</span> <span class="engl">flushed</span>
                    <span class="engl">a</span> <span class="engl">little</span>
                    <span class="engl">and</span> <span class="engl">dropped</span>
                    <span class="engl">the</span> <span class="engl">discussion.</span> <span
                        class="engl">Baptiste</span> <span class="engl">the</span>
                    <span class="engl">Red</span> <span class="engl">was</span>
                    <span class="engl">still</span> <span class="engl">waiting</span> <span class="engl">the</span>
                    <span class="engl">final</span> <span class="engl">decision.</span>
                    <span class="engl">Stockard</span> <span class="engl">went</span> <span class="engl">up</span> <span
                        class="engl">to</span> <span class="engl">him.</span> </p>
                <p class="english"> <span class="engl">"It's</span> <span class="engl">this</span> <span
                        class="engl">way,</span> <span class="engl">Baptiste.</span> <span class="engl">I</span> <span
                        class="engl">came</span> <span class="engl">to</span> <span class="engl">your</span> <span
                        class="engl">village</span>
                    <span class="engl">minded</span> <span class="engl">to</span>
                    <span class="engl">go</span> <span class="engl">up</span> <span class="engl">the</span> <span
                        class="engl">Koyukuk.</span>
                    <span class="engl">I</span> <span class="engl">intended</span>
                    <span class="engl">no</span> <span class="engl">wrong.</span>
                    <span class="engl">My</span> <span class="engl">heart</span>
                    <span class="engl">was</span> <span class="engl">clean</span>
                    <span class="engl">of</span> <span class="engl">evil.</span>
                    <span class="engl">It</span> <span class="engl">is</span> <span class="engl">still</span> <span
                        class="engl">clean.</span>
                    <span class="engl">Along</span> <span class="engl">comes</span>
                    <span class="engl">this</span> <span class="engl">priest,</span> <span class="engl">as</span> <span
                        class="engl">you</span> <span class="engl">call</span> <span class="engl">him.</span> <span
                        class="engl">I</span> <span class="engl">didn't</span> <span class="engl">bring</span>
                    <span class="engl">him</span> <span class="engl">here.</span>
                    <span class="engl">He'd</span> <span class="engl">have</span>
                    <span class="engl">come</span> <span class="engl">whether</span> <span class="engl">I</span> <span
                        class="engl">was</span> <span class="engl">here</span> <span class="engl">or</span> <span
                        class="engl">not.</span> <span class="engl">But</span> <span class="engl">now</span> <span
                        class="engl">that</span> <span class="engl">he</span> <span class="engl">is</span> <span
                        class="engl">here,</span> <span class="engl">being</span> <span class="engl">of</span> <span
                        class="engl">my</span> <span class="engl">people,</span> <span class="engl">I've</span> <span
                        class="engl">got</span> <span class="engl">to</span> <span class="engl">stand</span> <span
                        class="engl">by</span> <span class="engl">him.</span> <span class="engl">And</span> <span
                        class="engl">I'm</span> <span class="engl">going</span> <span class="engl">to.</span> <span
                        class="engl">Further,</span> <span class="engl">it</span> <span class="engl">will</span> <span
                        class="engl">be</span> <span class="engl">no</span> <span class="engl">child's</span> <span
                        class="engl">play.</span> <span class="engl">When</span> <span class="engl">you</span> <span
                        class="engl">have</span> <span class="engl">done,</span> <span class="engl">your</span> <span
                        class="engl">village</span> <span class="engl">will</span>
                    <span class="engl">be</span> <span class="engl">silent</span>
                    <span class="engl">and</span> <span class="engl">empty,</span>
                    <span class="engl">your</span> <span class="engl">people</span>
                    <span class="engl">wasted</span> <span class="engl">as</span>
                    <span class="engl">after</span> <span class="engl">a</span>
                    <span class="engl">famine.</span> <span class="engl">True,</span> <span class="engl">we</span> <span
                        class="engl">will</span> <span class="engl">he</span> <span class="engl">gone;</span> <span
                        class="engl">likewise</span>
                    <span class="engl">the</span> <span class="engl">pick</span>
                    <span class="engl">of</span> <span class="engl">your</span>
                    <span class="engl">fighting</span> <span class="engl">men</span><span class="engl">-</span>  <span class="engl">"</span> </p>
                <p class="english"> <span class="engl">"But</span> <span class="engl">those</span> <span
                        class="engl">who</span> <span class="engl">remain</span> <span class="engl">shall</span> <span
                        class="engl">be</span> <span class="engl">in</span> <span class="engl">peace,</span> <span
                        class="engl">nor</span> <span class="engl">shall</span> <span class="engl">the</span> <span
                        class="engl">word</span> <span class="engl">of</span> <span class="engl">strange</span> <span
                        class="engl">gods</span> <span class="engl">and</span> <span class="engl">the</span> <span
                        class="engl">tongues</span> <span class="engl">of</span> <span class="engl">strange</span> <span
                        class="engl">priests</span> <span class="engl">be</span> <span class="engl">buzzing</span> <span
                        class="engl">in</span> <span class="engl">their</span> <span class="engl">ears."</span> </p>
                <p class="english"> <span class="engl">Both</span> <span class="engl">men</span> <span
                        class="engl">shrugged</span>
                    <span class="engl">their</span> <span class="engl">shoulder</span> <span class="engl">and</span>
                    <span class="engl">turned</span> <span class="engl">away,</span> <span class="engl">the</span> <span
                        class="engl">half-breed</span> <span class="engl">going</span>
                    <span class="engl">back</span> <span class="engl">to</span>
                    <span class="engl">his</span> <span class="engl">own</span>
                    <span class="engl">camp.</span> <span class="engl">The</span>
                    <span class="engl">missionary</span> <span class="engl">called</span> <span class="engl">his</span>
                    <span class="engl">two</span> <span class="engl">men</span> <span class="engl">to</span> <span
                        class="engl">him,</span> <span class="engl">and</span> <span class="engl">they</span> <span
                        class="engl">fell</span> <span class="engl">into</span> <span class="engl">prayer.</span> <span
                        class="engl">Stockard</span>
                    <span class="engl">and</span> <span class="engl">Bill</span>
                    <span class="engl">attacked</span> <span class="engl">the</span> <span class="engl">few</span> <span
                        class="engl">standing</span> <span class="engl">pines</span>
                    <span class="engl">with</span> <span class="engl">their</span>
                    <span class="engl">axes,</span> <span class="engl">felling</span> <span class="engl">them</span>
                    <span class="engl">into</span> <span class="engl">convenient</span> <span
                        class="engl">breastworks.</span> <span class="engl">The</span>
                    <span class="engl">child</span> <span class="engl">had</span>
                    <span class="engl">fallen</span> <span class="engl">asleep,</span> <span class="engl">so</span>
                    <span class="engl">the</span> <span class="engl">woman</span> <span class="engl">placed</span> <span
                        class="engl">it</span> <span class="engl">on</span> <span class="engl">a</span> <span
                        class="engl">heap</span>
                    <span class="engl">of</span> <span class="engl">furs</span> <span class="engl">and</span> <span
                        class="engl">lent</span> <span class="engl">a</span> <span class="engl">hand</span> <span
                        class="engl">in</span>
                    <span class="engl">fortifying</span> <span class="engl">the</span>
                    <span class="engl">camp.</span> <span class="engl">Three</span>
                    <span class="engl">sides</span> <span class="engl">were</span>
                    <span class="engl">thus</span> <span class="engl">defended,</span> <span class="engl">the</span>
                    <span class="engl">steep</span> <span class="engl">declivity</span> <span class="engl">at</span>
                    <span class="engl">the</span> <span class="engl">rear</span>
                    <span class="engl">precluding</span> <span class="engl">attack</span> <span class="engl">from</span>
                    <span class="engl">that</span> <span class="engl">direction.</span>
                    <span class="engl">When</span> <span class="engl">these</span>
                    <span class="engl">arrangements</span> <span class="engl">had</span> <span class="engl">been</span>
                    <span class="engl">completed,</span> <span class="engl">the</span>
                    <span class="engl">two</span> <span class="engl">men</span>
                    <span class="engl">stalked</span> <span class="engl">into</span> <span class="engl">the</span> <span
                        class="engl">open,</span> <span class="engl">clearing</span>
                    <span class="engl">away,</span> <span class="engl">here</span>
                    <span class="engl">and</span> <span class="engl">there,</span>
                    <span class="engl">the</span> <span class="engl">scattered</span> <span
                        class="engl">underbrush.</span> <span class="engl">From</span>
                    <span class="engl">the</span> <span class="engl">opposing</span> <span class="engl">camp</span>
                    <span class="engl">came</span> <span class="engl">the</span>
                    <span class="engl">booming</span> <span class="engl">of</span>
                    <span class="engl">war-drums</span> <span class="engl">and</span> <span class="engl">the</span>
                    <span class="engl">voices</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">priests</span> <span class="engl">stirring</span> <span class="engl">the</span>
                    <span class="engl">people</span> <span class="engl">to</span>
                    <span class="engl">anger.</span> </p>
                <p class="english"> <span class="engl">"Worst</span> <span class="engl">of</span> <span
                        class="engl">it</span> <span class="engl">is</span> <span class="engl">they'll</span> <span
                        class="engl">come</span>
                    <span class="engl">in</span> <span class="engl">rushes,"</span>
                    <span class="engl">Bill</span> <span class="engl">complained</span> <span class="engl">as</span>
                    <span class="engl">they</span> <span class="engl">walked</span>
                    <span class="engl">back</span> <span class="engl">with</span>
                    <span class="engl">shouldered</span> <span class="engl">axes.</span> </p>
                <p class="english"> <span class="engl">"And</span> <span class="engl">wait</span> <span
                        class="engl">till</span> <span class="engl">midnight,</span>
                    <span class="engl">when</span> <span class="engl">the</span>
                    <span class="engl">light</span> <span class="engl">gets</span>
                    <span class="engl">dim</span> <span class="engl">for</span>
                    <span class="engl">shooting."</span> </p>
                <p class="english">
                    <span class="engl">"Can't</span> <span class="engl">start</span> <span class="engl">the</span> <span
                        class="engl">ball</span> <span class="engl">a-rolling</span>
                    <span class="engl">too</span> <span class="engl">early,</span>
                    <span class="engl">then."</span> <span class="engl">Bill</span>
                    <span class="engl">exchanged</span> <span class="engl">the</span> <span class="engl">axe</span>
                    <span class="engl">for</span> <span class="engl">a</span> <span class="engl">rifle,</span> <span
                        class="engl">and</span> <span class="engl">took</span> <span class="engl">a</span> <span
                        class="engl">careful</span> <span class="engl">rest.</span>
                    <span class="engl">One</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">medicine-men,</span> <span
                        class="engl">towering</span> <span class="engl">above</span>
                    <span class="engl">his</span> <span class="engl">tribesmen,</span> <span class="engl">stood</span>
                    <span class="engl">out</span> <span class="engl">distinctly.</span> <span class="engl">Bill</span>
                    <span class="engl">drew</span> <span class="engl">a</span>
                    <span class="engl">bead</span> <span class="engl">on</span>
                    <span class="engl">him.</span> </p>
                <p class="english"> <span class="engl">"All</span> <span class="engl">ready?"</span>
                    <span class="engl">he</span> <span class="engl">asked.</span>
                </p>
                <p class="english"> <span class="engl">Stockard</span>
                    <span class="engl">opened</span> <span class="engl">the</span>
                    <span class="engl">ammunition</span> <span class="engl">box,</span> <span class="engl">placed</span>
                    <span class="engl">the</span> <span class="engl">woman</span> <span class="engl">where</span> <span
                        class="engl">she</span> <span class="engl">could</span> <span class="engl">reload</span>
                    <span class="engl">in</span> <span class="engl">safety,</span>
                    <span class="engl">and</span> <span class="engl">gave</span>
                    <span class="engl">the</span> <span class="engl">word.</span>
                    <span class="engl">The</span> <span class="engl">medicine-man</span> <span
                        class="engl">dropped.</span> <span class="engl">For</span>
                    <span class="engl">a</span> <span class="engl">moment</span>
                    <span class="engl">there</span> <span class="engl">was</span>
                    <span class="engl">silence,</span> <span class="engl">then</span> <span class="engl">a</span> <span
                        class="engl">wild</span> <span class="engl">howl</span> <span class="engl">went</span> <span
                        class="engl">up</span> <span class="engl">and</span> <span class="engl">a</span> <span
                        class="engl">flight</span> <span class="engl">of</span> <span class="engl">bone</span> <span
                        class="engl">arrows</span> <span class="engl">fell</span> <span class="engl">short.</span> </p>
                <p class="english"> <span class="engl">"I'd</span> <span class="engl">like</span> <span
                        class="engl">to</span> <span class="engl">take</span> <span class="engl">a</span> <span
                        class="engl">look</span> <span class="engl">at</span>
                    <span class="engl">the</span> <span class="engl">beggar,"</span>
                    <span class="engl">Bill</span> <span class="engl">remarked,</span> <span
                        class="engl">throwing</span> <span class="engl">a</span> <span class="engl">fresh</span> <span
                        class="engl">shell</span> <span class="engl">into</span> <span class="engl">place.</span> <span
                        class="engl">"I'll</span> <span class="engl">swear</span> <span class="engl">I</span> <span
                        class="engl">drilled</span> <span class="engl">him</span> <span class="engl">clean</span> <span
                        class="engl">between</span> <span class="engl">the</span> <span class="engl">eyes."</span> </p>
                <p class="english"> <span class="engl">"Didn't</span> <span class="engl">work."</span>
                    <span class="engl">Stockard</span> <span class="engl">shook</span> <span class="engl">his</span>
                    <span class="engl">head</span> <span class="engl">gloomily.</span>
                    <span class="engl">Baptiste</span> <span class="engl">had</span> <span class="engl">evidently</span>
                    <span class="engl">quelled</span> <span class="engl">the</span>
                    <span class="engl">more</span> <span class="engl">warlike</span> <span class="engl">of</span> <span
                        class="engl">his</span> <span class="engl">followers,</span>
                    <span class="engl">and</span> <span class="engl">instead</span>
                    <span class="engl">of</span> <span class="engl">precipitating</span> <span class="engl">an</span>
                    <span class="engl">attack</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">bright</span>
                    <span class="engl">light</span> <span class="engl">of</span>
                    <span class="engl">day,</span> <span class="engl">the</span>
                    <span class="engl">shot</span> <span class="engl">had</span>
                    <span class="engl">caused</span> <span class="engl">a</span>
                    <span class="engl">hasty</span> <span class="engl">exodus,</span> <span class="engl">the</span>
                    <span class="engl">Indians</span> <span class="engl">drawing</span>
                    <span class="engl">out</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">village</span>
                    <span class="engl">beyond</span> <span class="engl">the</span>
                    <span class="engl">zone</span> <span class="engl">of</span>
                    <span class="engl">fire.</span> </p>
                <p class="english"> <span class="engl">In</span> <span class="engl">the</span> <span
                        class="engl">full</span> <span class="engl">tide</span> <span class="engl">of</span> <span
                        class="engl">his</span> <span class="engl">proselyting</span> <span class="engl">fervor,</span>
                    <span class="engl">borne</span>
                    <span class="engl">along</span> <span class="engl">by</span>
                    <span class="engl">the</span> <span class="engl">hand</span>
                    <span class="engl">of</span> <span class="engl">God,</span>
                    <span class="engl">Sturges</span> <span class="engl">Owen</span> <span class="engl">would</span>
                    <span class="engl">have</span> <span class="engl">ventured</span>
                    <span class="engl">alone</span> <span class="engl">into</span>
                    <span class="engl">the</span> <span class="engl">camp</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">unbeliever,</span> <span class="engl">equally</span> <span
                        class="engl">prepared</span>
                    <span class="engl">for</span> <span class="engl">miracle</span>
                    <span class="engl">or</span> <span class="engl">martyrdom;</span> <span class="engl">but</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">waiting</span> <span class="engl">which</span> <span class="engl">ensued,</span>
                    <span class="engl">the</span> <span class="engl">fever</span>
                    <span class="engl">of</span> <span class="engl">conviction</span> <span class="engl">died</span>
                    <span class="engl">away</span> <span class="engl">gradually,</span> <span class="engl">as</span>
                    <span class="engl">the</span> <span class="engl">natural</span>
                    <span class="engl">man</span> <span class="engl">asserted</span> <span class="engl">itself.</span>
                    <span class="engl">Physical</span> <span class="engl">fear</span> <span class="engl">replaced</span>
                    <span class="engl">spiritual</span> <span class="engl">hope;</span> <span class="engl">the</span>
                    <span class="engl">love</span> <span class="engl">of</span> <span class="engl">life,</span> <span
                        class="engl">the</span> <span class="engl">love</span> <span class="engl">of</span> <span
                        class="engl">God.</span> <span class="engl">It</span> <span class="engl">was</span> <span
                        class="engl">no</span>
                    <span class="engl">new</span> <span class="engl">experience.</span>
                    <span class="engl">He</span> <span class="engl">could</span>
                    <span class="engl">feel</span> <span class="engl">his</span>
                    <span class="engl">weakness</span> <span class="engl">coming</span> <span class="engl">on,</span>
                    <span class="engl">and</span> <span class="engl">knew</span> <span class="engl">it</span> <span
                        class="engl">of</span>
                    <span class="engl">old</span> <span class="engl">time.</span> <span class="engl">He</span> <span
                        class="engl">had</span> <span class="engl">struggled</span> <span class="engl">against</span>
                    <span class="engl">it</span> <span class="engl">and</span>
                    <span class="engl">been</span> <span class="engl">overcome</span> <span class="engl">by</span> <span
                        class="engl">it</span> <span class="engl">before.</span> <span class="engl">He</span> <span
                        class="engl">remembered</span>
                    <span class="engl">when</span> <span class="engl">the</span>
                    <span class="engl">other</span> <span class="engl">men</span>
                    <span class="engl">had</span> <span class="engl">driven</span>
                    <span class="engl">their</span> <span class="engl">paddles</span> <span class="engl">like</span>
                    <span class="engl">mad</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">van</span>
                    <span class="engl">of</span> <span class="engl">a</span> <span class="engl">roaring</span> <span
                        class="engl">ice-flood,</span> <span class="engl">how,</span>
                    <span class="engl">at</span> <span class="engl">the</span>
                    <span class="engl">critical</span> <span class="engl">moment,</span> <span class="engl">in</span>
                    <span class="engl">a</span> <span class="engl">panic</span> <span class="engl">of</span> <span
                        class="engl">worldly</span> <span class="engl">terror,</span> <span class="engl">he</span> <span
                        class="engl">had</span> <span class="engl">dropped</span> <span class="engl">his</span> <span
                        class="engl">paddle</span> <span class="engl">and</span> <span class="engl">besought</span>
                    <span class="engl">wildly</span> <span class="engl">with</span>
                    <span class="engl">his</span> <span class="engl">God</span>
                    <span class="engl">for</span> <span class="engl">pity.</span>
                    <span class="engl"></span> </p>
                <p class="english"> <span class="engl">And</span> <span class="engl">there</span> <span
                        class="engl">were</span> <span class="engl">other</span> <span class="engl">times.</span> <span
                        class="engl">The</span> <span class="engl">recollection</span> <span class="engl">was</span>
                    <span class="engl">not</span> <span class="engl">pleasant.</span> <span class="engl">It</span>
                    <span class="engl">brought</span> <span class="engl">shame</span> <span class="engl">to</span> <span
                        class="engl">him</span> <span class="engl">that</span> <span class="engl">his</span> <span
                        class="engl">spirit</span> <span class="engl">should</span> <span class="engl">be</span> <span
                        class="engl">so</span> <span class="engl">weak</span> <span class="engl">and</span> <span
                        class="engl">his</span> <span class="engl">flesh</span> <span class="engl">so</span> <span
                        class="engl">strong.</span> <span class="engl">But</span> <span class="engl">the</span> <span
                        class="engl">love</span> <span class="engl">of</span> <span class="engl">life!</span> <span
                        class="engl">the</span> <span class="engl">love</span> <span class="engl">of</span> <span
                        class="engl">life!</span> <span class="engl">He</span> <span class="engl">could</span> <span
                        class="engl">not</span> <span class="engl">strip</span> <span class="engl">it</span> <span
                        class="engl">from</span> <span class="engl">him.</span> <span class="engl">Because</span>
                    <span class="engl">of</span> <span class="engl">it</span> <span class="engl">had</span> <span
                        class="engl">his</span> <span class="engl">dim</span> <span class="engl">ancestors</span>
                    <span class="engl">perpetuated</span> <span class="engl">their</span> <span
                        class="engl">line;</span> <span class="engl">because</span> <span class="engl">of</span> <span
                        class="engl">it</span> <span class="engl">was</span> <span class="engl">he</span> <span
                        class="engl">destined</span> <span class="engl">to</span> <span class="engl">perpetuate</span>
                    <span class="engl">his.</span> <span class="engl">His</span>
                    <span class="engl">courage,</span> <span class="engl">if</span>
                    <span class="engl">courage</span> <span class="engl">it</span>
                    <span class="engl">might</span> <span class="engl">be</span>
                    <span class="engl">called,</span> <span class="engl">was</span>
                    <span class="engl">bred</span> <span class="engl">of</span>
                    <span class="engl">fanaticism.</span> <span class="engl">The</span> <span
                        class="engl">courage</span> <span class="engl">of</span> <span class="engl">Stockard</span>
                    <span class="engl">and</span> <span class="engl">Bill</span> <span class="engl">was</span> <span
                        class="engl">the</span> <span class="engl">adherence</span> <span class="engl">to</span>
                    <span class="engl">deep-rooted</span> <span class="engl">ideals.</span> <span
                        class="engl">Not</span> <span class="engl">that</span> <span class="engl">the</span> <span
                        class="engl">love</span> <span class="engl">of</span> <span class="engl">life</span> <span
                        class="engl">was</span> <span class="engl">less,</span> <span class="engl">but</span> <span
                        class="engl">the</span> <span class="engl">love</span> <span class="engl">of</span> <span
                        class="engl">race</span> <span class="engl">tradition</span> <span class="engl">more;</span>
                    <span class="engl">not</span> <span class="engl">that</span>
                    <span class="engl">they</span> <span class="engl">were</span>
                    <span class="engl">unafraid</span> <span class="engl">to</span>
                    <span class="engl">die,</span> <span class="engl">but</span>
                    <span class="engl">that</span> <span class="engl">they</span>
                    <span class="engl">were</span> <span class="engl">brave</span>
                    <span class="engl">enough</span> <span class="engl">not</span>
                    <span class="engl">to</span> <span class="engl">live</span>
                    <span class="engl">at</span> <span class="engl">the</span>
                    <span class="engl">price</span> <span class="engl">of</span>
                    <span class="engl">shame.</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">missionary</span>
                    <span class="engl">rose,</span> <span class="engl">for</span>
                    <span class="engl">the</span> <span class="engl">moment</span>
                    <span class="engl">swayed</span> <span class="engl">by</span>
                    <span class="engl">the</span> <span class="engl">mood</span>
                    <span class="engl">of</span> <span class="engl">sacrifice.</span> <span class="engl">He</span>
                    <span class="engl">half</span> <span class="engl">crawled</span> <span class="engl">over</span>
                    <span class="engl">the</span> <span class="engl">barricade</span> <span class="engl">to</span>
                    <span class="engl">proceed</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">other</span>
                    <span class="engl">camp,</span> <span class="engl">but</span>
                    <span class="engl">sank</span> <span class="engl">back,</span>
                    <span class="engl">a</span> <span class="engl">trembling</span>
                    <span class="engl">mass,</span> <span class="engl">wailing:</span> <span class="engl"></span> </p>
                <p class="english"> <span class="engl">"As</span> <span class="engl">the</span> <span
                        class="engl">spirit</span> <span class="engl">moves!</span> <span class="engl">As</span> <span
                        class="engl">the</span> <span class="engl">spirit</span> <span class="engl">moves!</span> <span
                        class="engl">Who</span> <span class="engl">am</span> <span class="engl">I</span> <span
                        class="engl">that</span> <span class="engl">I</span>
                    <span class="engl">should</span> <span class="engl">set</span> <span class="engl">aside</span> <span
                        class="engl">the</span> <span class="engl">judgments</span> <span class="engl">of</span>
                    <span class="engl">God?</span> <span class="engl">Before</span>
                    <span class="engl">the</span> <span class="engl">foundations</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">world</span>
                    <span class="engl">were</span> <span class="engl">all</span>
                    <span class="engl">things</span> <span class="engl">written</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">book</span> <span class="engl">of</span> <span
                        class="engl">life.</span> <span class="engl">Worm</span> <span class="engl">that</span> <span
                        class="engl">I</span> <span class="engl">am,</span> <span class="engl">shall</span> <span
                        class="engl">I</span>
                    <span class="engl">erase</span> <span class="engl">the</span> <span class="engl">page</span> <span
                        class="engl">or</span> <span class="engl">any</span> <span class="engl">portion</span> <span
                        class="engl">thereof?</span> <span class="engl">As</span> <span class="engl">God</span> <span
                        class="engl">wills,</span> <span class="engl">so</span> <span class="engl">shall</span> <span
                        class="engl">the</span> <span class="engl">spirit</span> <span class="engl">move!"</span> </p>
                <p class="english"> <span class="engl">Bill</span> <span class="engl">reached</span>
                    <span class="engl">over,</span> <span class="engl">plucked</span> <span class="engl">him</span>
                    <span class="engl">to</span> <span class="engl">his</span> <span class="engl">feet,</span> <span
                        class="engl">and</span> <span class="engl">shook</span> <span class="engl">him,</span> <span
                        class="engl">fiercely,</span> <span class="engl">silently.</span> <span class="engl">Then</span>
                    <span class="engl">he</span> <span class="engl">dropped</span>
                    <span class="engl">the</span> <span class="engl">bundle</span>
                    <span class="engl">of</span> <span class="engl">quivering</span> <span class="engl">nerves</span>
                    <span class="engl">and</span> <span class="engl">turned</span>
                    <span class="engl">his</span> <span class="engl">attention</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">two</span>
                    <span class="engl">converts.</span> <span class="engl">But</span> <span class="engl">they</span>
                    <span class="engl">showed</span> <span class="engl">little</span>
                    <span class="engl">fright</span> <span class="engl">and</span>
                    <span class="engl">a</span> <span class="engl">cheerful</span>
                    <span class="engl">alacrity</span> <span class="engl">in</span>
                    <span class="engl">preparing</span> <span class="engl">for</span> <span class="engl">the</span>
                    <span class="engl">coming</span> <span class="engl">passage</span>
                    <span class="engl">at</span> <span class="engl">arms.</span>
                </p>
                <p class="english"> <span class="engl">Stockard,</span>
                    <span class="engl">who</span> <span class="engl">had</span>
                    <span class="engl">been</span> <span class="engl">talking</span> <span class="engl">in</span> <span
                        class="engl">undertones</span> <span class="engl">with</span>
                    <span class="engl">the</span> <span class="engl">Teslin</span>
                    <span class="engl">woman,</span> <span class="engl">now</span>
                    <span class="engl">turned</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">missionary.</span> </p>
                <p class="english"> <span class="engl">"Fetch</span> <span class="engl">him</span> <span
                        class="engl">over</span> <span class="engl">here,"</span> <span class="engl">he</span> <span
                        class="engl">commanded</span>
                    <span class="engl">of</span> <span class="engl">Bill.</span>
                </p>
                <p class="english"> <span class="engl">"Now,"</span> <span class="engl">he</span> <span
                        class="engl">ordered,</span>
                    <span class="engl">when</span> <span class="engl">Sturges</span>
                    <span class="engl">Owen</span> <span class="engl">had</span>
                    <span class="engl">been</span> <span class="engl">duly</span>
                    <span class="engl">deposited</span> <span class="engl">before</span> <span class="engl">him,</span>
                    <span class="engl">"make</span> <span class="engl">us</span> <span class="engl">man</span> <span
                        class="engl">and</span> <span class="engl">wife,</span> <span class="engl">and</span> <span
                        class="engl">be</span> <span class="engl">lively</span> <span class="engl">about</span> <span
                        class="engl">it."</span> <span class="engl">Then</span> <span class="engl">he</span> <span
                        class="engl">added</span> <span class="engl">apologetically</span> <span class="engl">to</span>
                    <span class="engl">Bill:</span> <span class="engl">"No</span>
                    <span class="engl">telling</span> <span class="engl">how</span>
                    <span class="engl">it's</span> <span class="engl">to</span>
                    <span class="engl">end,</span> <span class="engl">so</span>
                    <span class="engl">I</span> <span class="engl">just</span>
                    <span class="engl">thought</span> <span class="engl">I'd</span>
                    <span class="engl">get</span> <span class="engl">my</span>
                    <span class="engl">affairs</span> <span class="engl">straightened</span> <span
                        class="engl">up."</span>
                </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">woman</span> <span
                        class="engl">obeyed</span>
                    <span class="engl">the</span> <span class="engl">behest</span>
                    <span class="engl">of</span> <span class="engl">her</span>
                    <span class="engl">white</span> <span class="engl">lord.</span>
                    <span class="engl">To</span> <span class="engl">her</span>
                    <span class="engl">the</span> <span class="engl">ceremony</span> <span class="engl">was</span>
                    <span class="engl">meaningless.</span> <span class="engl">By</span> <span class="engl">her</span>
                    <span class="engl">lights</span> <span class="engl">she</span> <span class="engl">was</span> <span
                        class="engl">his</span> <span class="engl">wife,</span> <span class="engl">and</span> <span
                        class="engl">had</span> <span class="engl">been</span> <span class="engl">from</span> <span
                        class="engl">the</span> <span class="engl">day</span> <span class="engl">they</span> <span
                        class="engl">first</span> <span class="engl">foregathered.</span> <span class="engl"></span>
                </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">converts</span> <span
                        class="engl">served</span>
                    <span class="engl">as</span> <span class="engl">witnesses.</span> <span class="engl">Bill</span>
                    <span class="engl">stood</span> <span class="engl">over</span>
                    <span class="engl">the</span> <span class="engl">missionary,</span> <span
                        class="engl">prompting</span> <span class="engl">him</span>
                    <span class="engl">when</span> <span class="engl">he</span>
                    <span class="engl">stumbled.</span> <span class="engl">Stockard</span> <span class="engl">put</span>
                    <span class="engl">the</span> <span class="engl">responses</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">woman's</span>
                    <span class="engl">mouth,</span> <span class="engl">and</span>
                    <span class="engl">when</span> <span class="engl">the</span>
                    <span class="engl">time</span> <span class="engl">came,</span>
                    <span class="engl">for</span> <span class="engl">want</span>
                    <span class="engl">of</span> <span class="engl">better,</span>
                    <span class="engl">ringed</span> <span class="engl">her</span>
                    <span class="engl">finger</span> <span class="engl">with</span>
                    <span class="engl">thumb</span> <span class="engl">and</span>
                    <span class="engl">forefinger</span> <span class="engl">of</span> <span class="engl">his</span>
                    <span class="engl">own.</span> </p>
                <p class="english"> <span class="engl">"Kiss</span> <span class="engl">the</span> <span
                        class="engl">bride!"</span>
                    <span class="engl">Bill</span>
                    <span class="engl">thundered,</span> <span class="engl">and</span> <span class="engl">Sturges</span>
                    <span class="engl">Owen</span> <span class="engl">was</span> <span class="engl">too</span> <span
                        class="engl">weak</span> <span class="engl">to</span> <span class="engl">disobey.</span> </p>
                <p class="english"> <span class="engl">"Now</span> <span class="engl">baptize</span> <span
                        class="engl">the</span> <span class="engl">child!"</span> </p>
                <p class="english"> <span class="engl">"Neat</span> <span class="engl">and</span> <span
                        class="engl">tidy,"</span> <span class="engl">Bill</span> <span class="engl">commented.</span>
                </p>
                <p class="english"> <span class="engl">"Gathering</span> <span class="engl">the</span>
                    <span class="engl">proper</span> <span class="engl">outfit</span> <span class="engl">for</span>
                    <span class="engl">a</span> <span class="engl">new</span> <span class="engl">trail,"</span> <span
                        class="engl">the</span> <span class="engl">father</span> <span class="engl">explained,</span>
                    <span class="engl">taking</span> <span class="engl">the</span>
                    <span class="engl">boy</span> <span class="engl">from</span>
                    <span class="engl">the</span> <span class="engl">mother's</span> <span class="engl">arms.</span>
                    <span class="engl">"I</span> <span class="engl">was</span>
                    <span class="engl">grub-staked,</span> <span class="engl">once,</span> <span
                        class="engl">into</span> <span class="engl">the</span> <span class="engl">Cascades,</span>
                    <span class="engl">and</span> <span class="engl">had</span>
                    <span class="engl">everything</span> <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">kit</span> <span class="engl">except</span> <span class="engl">salt.</span> <span
                        class="engl">Never</span> <span class="engl">shall</span> <span class="engl">forget</span>
                    <span class="engl">it.</span> <span class="engl">And</span>
                    <span class="engl">if</span> <span class="engl">the</span>
                    <span class="engl">woman</span> <span class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">kid</span>
                    <span class="engl">cross</span> <span class="engl">the</span>
                    <span class="engl">divide</span> <span class="engl">to-night</span> <span class="engl">they</span>
                    <span class="engl">might</span> <span class="engl">as</span>
                    <span class="engl">well</span> <span class="engl">be</span>
                    <span class="engl">prepared</span> <span class="engl">for</span> <span class="engl">pot-luck.</span>
                    <span class="engl">A</span> <span class="engl">long</span>
                    <span class="engl">shot,</span> <span class="engl">Bill,</span>
                    <span class="engl">between</span> <span class="engl">ourselves,</span> <span class="engl">but</span>
                    <span class="engl">nothing</span> <span class="engl">lost</span> <span class="engl">if</span> <span
                        class="engl">it</span> <span class="engl">misses."</span> </p>
                <p class="english"> <span class="engl">A</span> <span class="engl">cup</span> <span
                        class="engl">of</span> <span class="engl">water</span> <span class="engl">served</span>
                    <span class="engl">the</span> <span class="engl">purpose,</span> <span class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">child</span>
                    <span class="engl">was</span> <span class="engl">laid</span>
                    <span class="engl">away</span> <span class="engl">in</span>
                    <span class="engl">a</span> <span class="engl">secure</span>
                    <span class="engl">corner</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">barricade.</span> <span class="engl">The</span>
                    <span class="engl">men</span> <span class="engl">built</span>
                    <span class="engl">the</span> <span class="engl">fire,</span>
                    <span class="engl">and</span> <span class="engl">the</span>
                    <span class="engl">evening</span> <span class="engl">meal</span> <span class="engl">was</span> <span
                        class="engl">cooked.</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">sun</span> <span
                        class="engl">hurried</span> <span class="engl">round</span>
                    <span class="engl">to</span> <span class="engl">the</span>
                    <span class="engl">north,</span> <span class="engl">sinking</span> <span class="engl">closer</span>
                    <span class="engl">to</span> <span class="engl">the</span>
                    <span class="engl">horizon.</span> <span class="engl">The</span> <span class="engl">heavens</span>
                    <span class="engl">in</span> <span class="engl">that</span> <span class="engl">quarter</span> <span
                        class="engl">grew</span>
                    <span class="engl">red</span> <span class="engl">and</span>
                    <span class="engl">bloody.</span> <span class="engl">The</span>
                    <span class="engl">shadows</span> <span class="engl">lengthened,</span> <span
                        class="engl">the</span>
                    <span class="engl">light</span> <span class="engl">dimmed,</span> <span class="engl">and</span>
                    <span class="engl">in</span> <span class="engl">the</span> <span class="engl">sombre</span> <span
                        class="engl">recesses</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">forest</span> <span class="engl">life</span>
                    <span class="engl">slowly</span> <span class="engl">died</span>
                    <span class="engl">away.</span> <span class="engl">Even</span>
                    <span class="engl">the</span> <span class="engl">wild</span>
                    <span class="engl">fowl</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">river</span>
                    <span class="engl">softened</span> <span class="engl">their</span> <span class="engl">raucous</span>
                    <span class="engl">chatter</span> <span class="engl">and</span>
                    <span class="engl">feigned</span> <span class="engl">the</span>
                    <span class="engl">nightly</span> <span class="engl">farce</span> <span class="engl">of</span> <span
                        class="engl">going</span> <span class="engl">to</span> <span class="engl">bed.</span> <span
                        class="engl">Only</span> <span class="engl">the</span> <span class="engl">tribesmen</span>
                    <span class="engl">increased</span> <span class="engl">their</span> <span
                        class="engl">clamor,</span>
                    <span class="engl">war-drums</span> <span class="engl">booming</span> <span class="engl">and</span>
                    <span class="engl">voices</span> <span class="engl">raised</span>
                    <span class="engl">in</span> <span class="engl">savage</span>
                    <span class="engl">folk</span> <span class="engl">songs.</span>
                    <span class="engl">But</span> <span class="engl">as</span>
                    <span class="engl">the</span> <span class="engl">sun</span>
                    <span class="engl">dipped</span> <span class="engl">they</span>
                    <span class="engl">ceased</span> <span class="engl">their</span> <span class="engl">tumult.</span>
                    <span class="engl">The</span> <span class="engl">rounded</span>
                    <span class="engl">hush</span> <span class="engl">of</span>
                    <span class="engl">midnight</span> <span class="engl">was</span> <span class="engl">complete.</span>
                    <span class="engl">Stockard</span> <span class="engl">rose</span> <span class="engl">to</span> <span
                        class="engl">his</span> <span class="engl">knees</span> <span class="engl">and</span> <span
                        class="engl">peered</span> <span class="engl">over</span> <span class="engl">the</span> <span
                        class="engl">logs.</span> <span class="engl">Once</span> <span class="engl">the</span> <span
                        class="engl">child</span> <span class="engl">wailed</span> <span class="engl">in</span> <span
                        class="engl">pain</span> <span class="engl">and</span> <span class="engl">disconcerted</span>
                    <span class="engl">him.</span>
                    <span class="engl">The</span> <span class="engl">mother</span>
                    <span class="engl">bent</span> <span class="engl">over</span>
                    <span class="engl">it,</span> <span class="engl">but</span>
                    <span class="engl">it</span> <span class="engl">slept</span>
                    <span class="engl">again.</span> <span class="engl">The</span>
                    <span class="engl">silence</span> <span class="engl">was</span>
                    <span class="engl">interminable,</span> <span class="engl">profound.</span> <span
                        class="engl">Then,</span>
                    <span class="engl">of</span> <span class="engl">a</span> <span class="engl">sudden,</span> <span
                        class="engl">the</span> <span class="engl">robins</span> <span class="engl">burst</span>
                    <span class="engl">into</span> <span class="engl">full-throated</span> <span
                        class="engl">song.</span> <span class="engl">The</span> <span class="engl">night</span> <span
                        class="engl">had</span> <span class="engl">passed.</span> </p>
                <p class="english"> <span class="engl">A</span> <span class="engl">flood</span> <span
                        class="engl">of</span> <span class="engl">dark</span> <span class="engl">figures</span> <span
                        class="engl">boiled</span>
                    <span class="engl">across</span> <span class="engl">the</span>
                    <span class="engl">open.</span> <span class="engl">Arrows</span> <span class="engl">whistled</span>
                    <span class="engl">and</span> <span class="engl">bow-</span>
                    <span class="engl">thongs</span> <span class="engl">sang.</span> <span class="engl">The</span> <span
                        class="engl">shrill-tongued</span> <span class="engl">rifles</span> <span
                        class="engl">answered</span>
                    <span class="engl">back.</span> <span class="engl">A</span>
                    <span class="engl">spear,</span> <span class="engl">and</span>
                    <span class="engl">a</span> <span class="engl">mighty</span>
                    <span class="engl">cast,</span> <span class="engl">transfixed</span> <span class="engl">the</span>
                    <span class="engl">Teslin</span> <span class="engl">woman</span> <span class="engl">as</span> <span
                        class="engl">she</span> <span class="engl">hovered</span> <span class="engl">above</span> <span
                        class="engl">the</span> <span class="engl">child.</span> <span class="engl">A</span> <span
                        class="engl">spent</span> <span class="engl">arrow,</span>
                    <span class="engl">diving</span> <span class="engl">between</span> <span class="engl">the</span>
                    <span class="engl">logs,</span> <span class="engl">lodged</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">missionary's</span> <span class="engl">arm.</span> </p>
                <p class="english"> <span class="engl">There</span> <span class="engl">was</span> <span
                        class="engl">no</span> <span class="engl">stopping</span> <span class="engl">the</span> <span
                        class="engl">rush.</span> <span class="engl">The</span> <span class="engl">middle</span> <span
                        class="engl">distance</span> <span class="engl">was</span>
                    <span class="engl">cumbered</span> <span class="engl">with</span> <span class="engl">bodies,</span>
                    <span class="engl">but</span> <span class="engl">the</span>
                    <span class="engl">rest</span> <span class="engl">surged</span>
                    <span class="engl">on,</span> <span class="engl">breaking</span> <span class="engl">against</span>
                    <span class="engl">and</span> <span class="engl">over</span>
                    <span class="engl">the</span> <span class="engl">barricade</span> <span class="engl">like</span>
                    <span class="engl">an</span> <span class="engl">ocean</span>
                    <span class="engl">wave.</span> <span class="engl">Sturges</span> <span class="engl">Owen</span>
                    <span class="engl">fled</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">tent,</span>
                    <span class="engl">while</span> <span class="engl">the</span>
                    <span class="engl">men</span> <span class="engl">were</span>
                    <span class="engl">swept</span> <span class="engl">from</span>
                    <span class="engl">their</span> <span class="engl">feet,</span>
                    <span class="engl">buried</span> <span class="engl">beneath</span> <span class="engl">the</span>
                    <span class="engl">human</span> <span class="engl">tide.</span> <span class="engl">Hay</span> <span
                        class="engl">Stockard</span>
                    <span class="engl">alone</span> <span class="engl">regained</span> <span class="engl">the</span>
                    <span class="engl">surface,</span> <span class="engl">flinging</span> <span class="engl">the</span>
                    <span class="engl">tribesmen</span> <span class="engl">aside</span> <span class="engl">like</span>
                    <span class="engl">yelping</span> <span class="engl">curs.</span>
                    <span class="engl">He</span> <span class="engl">had</span>
                    <span class="engl">managed</span> <span class="engl">to</span>
                    <span class="engl">seize</span> <span class="engl">an</span>
                    <span class="engl">axe.</span> <span class="engl">A</span>
                    <span class="engl">dark</span> <span class="engl">hand</span>
                    <span class="engl">grasped</span> <span class="engl">the</span>
                    <span class="engl">child</span> <span class="engl">by</span>
                    <span class="engl">a</span> <span class="engl">naked</span>
                    <span class="engl">foot,</span> <span class="engl">and</span>
                    <span class="engl">drew</span> <span class="engl">it</span>
                    <span class="engl">from</span> <span class="engl">beneath</span> <span class="engl">its</span> <span
                        class="engl">mother.</span> <span class="engl">At</span> <span class="engl">arm's</span> <span
                        class="engl">length</span>
                    <span class="engl">its</span> <span class="engl">puny</span>
                    <span class="engl">body</span> <span class="engl">circled</span> <span class="engl">through</span>
                    <span class="engl">the</span> <span class="engl">air,</span>
                    <span class="engl">dashing</span> <span class="engl">to</span>
                    <span class="engl">death</span> <span class="engl">against</span> <span class="engl">the</span>
                    <span class="engl">logs.</span> <span class="engl">Stockard</span>
                    <span class="engl">clove</span> <span class="engl">the</span>
                    <span class="engl">man</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">chin</span>
                    <span class="engl">and</span> <span class="engl">fell</span>
                    <span class="engl">to</span> <span class="engl">clearing</span>
                    <span class="engl">space.</span> <span class="engl">The</span>
                    <span class="engl">ring</span> <span class="engl">of</span>
                    <span class="engl">savage</span> <span class="engl">faces</span> <span class="engl">closed</span>
                    <span class="engl">in,</span> <span class="engl">raining</span>
                    <span class="engl">upon</span> <span class="engl">him</span>
                    <span class="engl">spear-thrusts</span> <span class="engl">and</span> <span
                        class="engl">bone-barbed</span>
                    <span class="engl">arrows.</span> <span class="engl">The</span>
                    <span class="engl">sun</span> <span class="engl">shot</span>
                    <span class="engl">up,</span> <span class="engl">and</span>
                    <span class="engl">they</span> <span class="engl">swayed</span>
                    <span class="engl">back</span> <span class="engl">and</span>
                    <span class="engl">forth</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">crimson</span>
                    <span class="engl">shadows.</span> <span class="engl"></span>
                </p>
                <p class="english"> <span class="engl">Twice,</span> <span class="engl">with</span> <span
                        class="engl">his</span> <span class="engl">axe</span> <span class="engl">blocked</span> <span
                        class="engl">by</span> <span class="engl">too</span> <span class="engl">deep</span> <span
                        class="engl">a</span> <span class="engl">blow,</span> <span class="engl">they</span> <span
                        class="engl">rushed</span> <span class="engl">him;</span> <span class="engl">but</span> <span
                        class="engl">each</span> <span class="engl">time</span> <span class="engl">he</span> <span
                        class="engl">flung</span> <span class="engl">them</span> <span class="engl">clear.</span> <span
                        class="engl">They</span> <span class="engl">fell</span> <span class="engl">underfoot</span>
                    <span class="engl">and</span> <span class="engl">he</span>
                    <span class="engl">trampled</span> <span class="engl">dead</span> <span class="engl">and</span>
                    <span class="engl">dying,</span> <span class="engl">the</span> <span class="engl">way</span> <span
                        class="engl">slippery</span>
                    <span class="engl">with</span> <span class="engl">blood.</span>
                    <span class="engl"></span> </p>
                <p class="english"> <span class="engl">And</span> <span class="engl">still</span> <span
                        class="engl">the</span> <span class="engl">day</span> <span class="engl">brightened</span> <span
                        class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">robins</span>
                    <span class="engl">sang.</span> <span class="engl">Then</span>
                    <span class="engl">they</span> <span class="engl">drew</span>
                    <span class="engl">back</span> <span class="engl">from</span>
                    <span class="engl">him</span> <span class="engl">in</span>
                    <span class="engl">awe,</span> <span class="engl">and</span>
                    <span class="engl">he</span> <span class="engl">leaned</span>
                    <span class="engl">breathless</span> <span class="engl">upon</span> <span class="engl">his</span>
                    <span class="engl">axe.</span> </p>
                <p class="english"> <span class="engl">"Blood</span> <span class="engl">of</span> <span
                        class="engl">my</span> <span class="engl">soul!"</span> <span class="engl">cried</span> <span
                        class="engl">Baptiste</span>
                    <span class="engl">the</span> <span class="engl">Red.</span>
                    <span class="engl">"But</span> <span class="engl">thou</span>
                    <span class="engl">art</span> <span class="engl">a</span> <span class="engl">man.</span> <span
                        class="engl">Deny</span> <span class="engl">thy</span> <span class="engl">god,</span> <span
                        class="engl">and</span> <span class="engl">thou</span> <span class="engl">shalt</span> <span
                        class="engl">yet</span> <span class="engl">live."</span> </p>
                <p class="english"> <span class="engl">Stockard</span> <span class="engl">swore</span>
                    <span class="engl">his</span> <span class="engl">refusal,</span> <span class="engl">feebly</span>
                    <span class="engl">but</span> <span class="engl">with</span>
                    <span class="engl">grace.</span> </p>
                <p class="english"> <span class="engl">"Behold!</span> <span class="engl">A</span> <span
                        class="engl">woman!"</span>
                    <span class="engl">Sturges</span>
                    <span class="engl">Owen</span> <span class="engl">had</span>
                    <span class="engl">been</span> <span class="engl">brought</span> <span class="engl">before</span>
                    <span class="engl">the</span> <span class="engl">half-breed.</span> </p>
                <p class="english"> <span class="engl">Beyond</span> <span class="engl">a</span> <span
                        class="engl">scratch</span> <span class="engl">on</span> <span class="engl">the</span> <span
                        class="engl">arm,</span> <span class="engl">he</span>
                    <span class="engl">was</span> <span class="engl">uninjured,</span> <span class="engl">but</span>
                    <span class="engl">his</span> <span class="engl">eyes</span>
                    <span class="engl">roved</span> <span class="engl">about</span>
                    <span class="engl">him</span> <span class="engl">in</span>
                    <span class="engl">an</span> <span class="engl">ecstasy</span>
                    <span class="engl">of</span> <span class="engl">fear.</span>
                    <span class="engl">The</span> <span class="engl">heroic</span>
                    <span class="engl">figure</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">blasphemer,</span> <span
                        class="engl">bristling</span> <span class="engl">with</span>
                    <span class="engl">wounds</span> <span class="engl">and</span>
                    <span class="engl">arrows,</span> <span class="engl">leaning</span> <span
                        class="engl">defiantly</span>
                    <span class="engl">upon</span> <span class="engl">his</span>
                    <span class="engl">axe,</span> <span class="engl">indifferent,</span> <span
                        class="engl">indomitable,</span> <span class="engl">superb,</span> <span
                        class="engl">caught</span>
                    <span class="engl">his</span> <span class="engl">wavering</span> <span class="engl">vision.</span>
                    <span class="engl">And</span> <span class="engl">he</span>
                    <span class="engl">felt</span> <span class="engl">a</span>
                    <span class="engl">great</span> <span class="engl">envy</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">man</span> <span class="engl">who</span>
                    <span class="engl">could</span> <span class="engl">go</span>
                    <span class="engl">down</span> <span class="engl">serenely</span> <span class="engl">to</span> <span
                        class="engl">the</span> <span class="engl">dark</span> <span class="engl">gates</span> <span
                        class="engl">of</span> <span class="engl">death.</span> <span class="engl">Surely</span>
                    <span class="engl">Christ,</span> <span class="engl">and</span>
                    <span class="engl">not</span> <span class="engl">he,</span>
                    <span class="engl">Sturges</span> <span class="engl">Owen,</span> <span class="engl">had</span>
                    <span class="engl">been</span> <span class="engl">moulded</span>
                    <span class="engl">in</span> <span class="engl">such</span>
                    <span class="engl">manner.</span> <span class="engl"></span>
                </p>
                <p class="english"> <span class="engl">And</span> <span class="engl">why</span> <span
                        class="engl">not</span> <span class="engl">he?</span> <span class="engl">He</span> <span
                        class="engl">felt</span> <span class="engl">dimly</span> <span class="engl">the</span> <span
                        class="engl">curse</span> <span class="engl">of</span> <span class="engl">ancestry,</span>
                    <span class="engl">the</span> <span class="engl">feebleness</span> <span class="engl">of</span>
                    <span class="engl">spirit</span> <span class="engl">which</span> <span class="engl">had</span> <span
                        class="engl">come</span> <span class="engl">down</span> <span class="engl">to</span> <span
                        class="engl">him</span> <span class="engl">out</span> <span class="engl">of</span> <span
                        class="engl">the</span>
                    <span class="engl">past,</span> <span class="engl">and</span> <span class="engl">he</span> <span
                        class="engl">felt</span> <span class="engl">an</span> <span class="engl">anger</span> <span
                        class="engl">at</span> <span class="engl">the</span> <span class="engl">creative</span>
                    <span class="engl">force,</span> <span class="engl">symbolize</span> <span class="engl">it</span>
                    <span class="engl">as</span> <span class="engl">he</span> <span class="engl">would,</span> <span
                        class="engl">which</span>
                    <span class="engl">had</span> <span class="engl">formed</span>
                    <span class="engl">him,</span> <span class="engl">its</span>
                    <span class="engl">servant,</span> <span class="engl">so</span>
                    <span class="engl">weakly.</span> <span class="engl">For</span>
                    <span class="engl">even</span> <span class="engl">a</span>
                    <span class="engl">stronger</span> <span class="engl">man,</span> <span class="engl">this</span>
                    <span class="engl">anger</span> <span class="engl">and</span> <span class="engl">the</span> <span
                        class="engl">stress</span> <span class="engl">of</span> <span class="engl">circumstance</span>
                    <span class="engl">were</span> <span class="engl">sufficient</span> <span class="engl">to</span>
                    <span class="engl">breed</span> <span class="engl">apostasy,</span> <span class="engl">and</span>
                    <span class="engl">for</span> <span class="engl">Sturges</span>
                    <span class="engl">Owen</span> <span class="engl">it</span>
                    <span class="engl">was</span> <span class="engl">inevitable.</span> <span class="engl">In</span>
                    <span class="engl">the</span> <span class="engl">fear</span>
                    <span class="engl">of</span> <span class="engl">man's</span>
                    <span class="engl">anger</span> <span class="engl">he</span>
                    <span class="engl">would</span> <span class="engl">dare</span>
                    <span class="engl">the</span> <span class="engl">wrath</span>
                    <span class="engl">of</span> <span class="engl">God.</span>
                    <span class="engl">He</span> <span class="engl">had</span>
                    <span class="engl">been</span> <span class="engl">raised</span>
                    <span class="engl">up</span> <span class="engl">to</span> <span class="engl">serve</span> <span
                        class="engl">the</span> <span class="engl">Lord</span> <span class="engl">only</span> <span
                        class="engl">that</span> <span class="engl">he</span> <span class="engl">might</span> <span
                        class="engl">be</span> <span class="engl">cast</span> <span class="engl">down.</span> <span
                        class="engl">He</span> <span class="engl">had</span> <span class="engl">been</span> <span
                        class="engl">given</span> <span class="engl">faith</span> <span class="engl">without</span>
                    <span class="engl">the</span> <span class="engl">strength</span> <span class="engl">of</span> <span
                        class="engl">faith;</span> <span class="engl">he</span> <span class="engl">had</span> <span
                        class="engl">been</span> <span class="engl">given</span> <span class="engl">spirit</span>
                    <span class="engl">without</span> <span class="engl">the</span>
                    <span class="engl">power</span> <span class="engl">of</span>
                    <span class="engl">spirit.</span> <span class="engl">It</span>
                    <span class="engl">was</span> <span class="engl">unjust.</span>
                </p>
                <p class="english"> <span class="engl">"Where</span> <span class="engl">now</span> <span
                        class="engl">is</span> <span class="engl">thy</span> <span class="engl">god?"</span> <span
                        class="engl">the</span> <span class="engl">half-breed</span>
                    <span class="engl">demanded.</span> </p>
                <p class="english">
                    <span class="engl">"I</span> <span class="engl">do</span> <span class="engl">not</span> <span
                        class="engl">know."</span> <span class="engl">He</span> <span class="engl">stood</span> <span
                        class="engl">straight</span> <span class="engl">and</span>
                    <span class="engl">rigid,</span> <span class="engl">like</span>
                    <span class="engl">a</span> <span class="engl">child</span>
                    <span class="engl">repeating</span> <span class="engl">a</span>
                    <span class="engl">catechism.</span> </p>
                <p class="english">
                    <span class="engl">"Hast</span> <span class="engl">thou</span>
                    <span class="engl">then</span> <span class="engl">a</span>
                    <span class="engl">god</span> <span class="engl">at</span>
                    <span class="engl">all?"</span> </p>
                <p class="english"> <span class="engl">"I</span> <span class="engl">had."</span> </p>
                <p class="english"> <span class="engl">"And</span> <span class="engl">now?"</span> </p>
                <p class="english"> <span class="engl">"No."</span> </p>
                <p class="english"> <span class="engl">Hay</span> <span class="engl">Stockard</span>
                    <span class="engl">swept</span> <span class="engl">the</span>
                    <span class="engl">blood</span> <span class="engl">from</span>
                    <span class="engl">his</span> <span class="engl">eyes</span>
                    <span class="engl">and</span> <span class="engl">laughed.</span> <span class="engl">The</span>
                    <span class="engl">missionary</span> <span class="engl">looked</span> <span class="engl">at</span>
                    <span class="engl">him</span> <span class="engl">curiously,</span>
                    <span class="engl">as</span> <span class="engl">in</span> <span class="engl">a</span> <span
                        class="engl">dream.</span> <span class="engl">A</span> <span class="engl">feeling</span> <span
                        class="engl">of</span> <span class="engl">infinite</span> <span class="engl">distance</span>
                    <span class="engl">came</span>
                    <span class="engl">over</span> <span class="engl">him,</span>
                    <span class="engl">as</span> <span class="engl">though</span>
                    <span class="engl">of</span> <span class="engl">a</span> <span class="engl">great</span> <span
                        class="engl">remove.</span>
                    <span class="engl">In</span> <span class="engl">that</span>
                    <span class="engl">which</span> <span class="engl">had</span>
                    <span class="engl">transpired,</span> <span class="engl">and</span> <span class="engl">which</span>
                    <span class="engl">was</span> <span class="engl">to</span> <span class="engl">transpire,</span>
                    <span class="engl">he</span>
                    <span class="engl">had</span> <span class="engl">no</span>
                    <span class="engl">part.</span> <span class="engl">He</span>
                    <span class="engl">was</span> <span class="engl">a</span> <span class="engl">spectator</span><span class="engl">-</span>  <span class="engl">at</span>
                    <span class="engl">a</span>
                    <span class="engl">distance,</span> <span class="engl">yes,</span> <span class="engl">at</span>
                    <span class="engl">a</span> <span class="engl">distance.</span> <span class="engl">The</span> <span
                        class="engl">words</span> <span class="engl">of</span> <span class="engl">Baptiste</span> <span
                        class="engl">came</span> <span class="engl">to</span> <span class="engl">him</span> <span
                        class="engl">faintly:-</span>
                </p>
                <p class="english"> <span class="engl">"Very</span> <span class="engl">good.</span> <span
                        class="engl">See</span> <span class="engl">that</span> <span class="engl">this</span> <span
                        class="engl">man</span> <span class="engl">go</span> <span class="engl">free,</span> <span
                        class="engl">and</span> <span class="engl">that</span> <span class="engl">no</span> <span
                        class="engl">harm</span> <span class="engl">befall</span> <span class="engl">him.</span> <span
                        class="engl">Let</span> <span class="engl">him</span> <span class="engl">depart</span> <span
                        class="engl">in</span> <span class="engl">peace.</span> <span class="engl">Give</span> <span
                        class="engl">him</span> <span class="engl">a</span> <span class="engl">canoe</span> <span
                        class="engl">and</span> <span class="engl">food.</span> <span class="engl">Set</span> <span
                        class="engl">his</span> <span class="engl">face</span> <span class="engl">toward</span> <span
                        class="engl">the</span> <span class="engl">Russians,</span>
                    <span class="engl">that</span> <span class="engl">he</span>
                    <span class="engl">may</span> <span class="engl">tell</span>
                    <span class="engl">their</span> <span class="engl">priests</span> <span class="engl">of</span> <span
                        class="engl">Baptiste</span> <span class="engl">the</span>
                    <span class="engl">Red,</span> <span class="engl">in</span>
                    <span class="engl">whose</span> <span class="engl">country</span> <span class="engl">there</span>
                    <span class="engl">is</span> <span class="engl">no</span> <span class="engl">god."</span> </p>
                <p class="english"> <span class="engl">They</span> <span class="engl">led</span> <span
                        class="engl">him</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">edge</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">steep,</span> <span class="engl">where</span>
                    <span class="engl">they</span> <span class="engl">paused</span>
                    <span class="engl">to</span> <span class="engl">witness</span>
                    <span class="engl">the</span> <span class="engl">final</span>
                    <span class="engl">tragedy.</span> <span class="engl">The</span> <span
                        class="engl">half-breed</span>
                    <span class="engl">turned</span> <span class="engl">to</span>
                    <span class="engl">Hay</span> <span class="engl">Stockard.</span> </p>
                <p class="english"> <span class="engl">"There</span> <span class="engl">is</span> <span
                        class="engl">no</span> <span class="engl">god,"</span> <span class="engl">he</span> <span
                        class="engl">prompted.</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">man</span> <span
                        class="engl">laughed</span> <span class="engl">in</span> <span class="engl">reply.</span> <span
                        class="engl">One</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">young</span> <span class="engl">men</span> <span class="engl">poised</span> <span
                        class="engl">a</span> <span class="engl">war-spear</span> <span class="engl">for</span> <span
                        class="engl">the</span> <span class="engl">cast.</span> </p>
                <p class="english"> <span class="engl">"Hast</span> <span class="engl">thou</span> <span
                        class="engl">a</span> <span class="engl">god?"</span> </p>
                <p class="english"> <span class="engl">"Ay,</span> <span class="engl">the</span> <span
                        class="engl">God</span> <span class="engl">of</span> <span class="engl">my</span> <span
                        class="engl">fathers."</span> </p>
                <p class="english"> <span class="engl">He</span> <span class="engl">shifted</span> <span
                        class="engl">the</span> <span class="engl">axe</span> <span class="engl">for</span> <span
                        class="engl">a</span> <span class="engl">better</span> <span class="engl">grip.</span>
                    <span class="engl">Baptiste</span> <span class="engl">the</span> <span class="engl">Red</span> <span
                        class="engl">gave</span> <span class="engl">the</span> <span class="engl">sign,</span> <span
                        class="engl">and</span> <span class="engl">the</span> <span class="engl">spear</span> <span
                        class="engl">hurtled</span> <span class="engl">full</span>
                    <span class="engl">against</span> <span class="engl">his</span>
                    <span class="engl">breast.</span> <span class="engl">Sturges</span> <span class="engl">Owen</span>
                    <span class="engl">saw</span> <span class="engl">the</span>
                    <span class="engl">ivory</span> <span class="engl">head</span>
                    <span class="engl">stand</span> <span class="engl">out</span>
                    <span class="engl">beyond</span> <span class="engl">his</span>
                    <span class="engl">back,</span> <span class="engl">saw</span>
                    <span class="engl">the</span> <span class="engl">man</span>
                    <span class="engl">sway,</span> <span class="engl">laughing,</span> <span class="engl">and</span>
                    <span class="engl">snap</span> <span class="engl">the</span>
                    <span class="engl">shaft</span> <span class="engl">short</span>
                    <span class="engl">as</span> <span class="engl">he</span> <span class="engl">fell</span> <span
                        class="engl">upon</span> <span class="engl">it.</span> <span class="engl">Then</span> <span
                        class="engl">he</span> <span class="engl">went</span> <span class="engl">down</span> <span
                        class="engl">to</span> <span class="engl">the</span> <span class="engl">river,</span> <span
                        class="engl">that</span> <span class="engl">he</span> <span class="engl">might</span> <span
                        class="engl">carry</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">Russians</span> <span class="engl">the</span>
                    <span class="engl">message</span> <span class="engl">of</span>
                    <span class="engl">Baptiste</span> <span class="engl">the</span> <span class="engl">Red,</span>
                    <span class="engl">in</span> <span class="engl">whose</span> <span class="engl">country</span> <span
                        class="engl">there</span>
                    <span class="engl">was</span> <span class="engl">no</span>
                    <span class="engl">god.</span>







                    <p class="ukrainian"> <span class="ukr">Усе</span> <span class="ukr">навкруги</span> <span
                            class="ukr">вкривав</span>
                        <span class="ukr">густий</span> <span class="ukr">прадавній</span> <span class="ukr">ліс</span>
                        <span class="ukr">—</span> <span class="ukr">неосяжний</span> <span class="ukr">терен</span>
                        <span class="ukr">бучних</span> <span class="ukr">комедій</span> <span class="ukr">і</span>
                        <span class="ukr">німих</span> <span class="ukr">драм.</span> <span class="ukr">На</span> <span
                            class="ukr">таку</span> <span class="ukr">запеклу</span> <span class="ukr">боротьбу</span>
                        <span class="ukr">за</span> <span class="ukr">життя,</span>
                        <span class="ukr">що</span> <span class="ukr">точилася</span>
                        <span class="ukr">тут,</span> <span class="ukr">були</span>
                        <span class="ukr">здатні</span> <span class="ukr">тільки</span>
                        <span class="ukr">звір</span> <span class="ukr">та</span> <span class="ukr">дикун.</span> <span
                            class="ukr">Англійці</span>
                        <span class="ukr">та</span> <span class="ukr">росіяни</span>
                        <span class="ukr">ще</span> <span class="ukr">не</span> <span class="ukr">змагалися</span> <span
                            class="ukr">за</span> <span class="ukr">першенство</span> <span class="ukr">тут,</span>
                        <span class="ukr">у</span> <span class="ukr">самому</span>
                        <span class="ukr">серці</span> <span class="ukr">Країни</span>
                        <span class="ukr">на</span> <span class="ukr">Кінці</span>
                        <span class="ukr">Веселки,</span> <span class="ukr">і</span>
                        <span class="ukr">золото</span> <span class="ukr">янкі</span>
                        <span class="ukr">ще</span> <span class="ukr">не</span> <span class="ukr">скупило</span> <span
                            class="ukr">її</span>
                        <span class="ukr">величезних</span> <span class="ukr">просторів.</span> <span
                            class="ukr">Вовчі</span>
                        <span class="ukr">зграї</span> <span class="ukr">гонили</span>
                        <span class="ukr">за</span> <span class="ukr">оленячими</span>
                        <span class="ukr">табунами,</span> <span class="ukr">опадали</span> <span
                            class="ukr">послаблих</span>
                        <span class="ukr">і</span> <span class="ukr">старих</span>
                        <span class="ukr">самців</span> <span class="ukr">та</span>
                        <span class="ukr">тільних</span> <span class="ukr">самиць,</span> <span class="ukr">і</span>
                        <span class="ukr">нищили</span> <span class="ukr">їх</span> <span class="ukr">так</span> <span
                            class="ukr">само</span>
                        <span class="ukr">жорстоко,</span> <span class="ukr">як</span> <span class="ukr">то</span> <span
                            class="ukr">було</span> <span class="ukr">й</span> <span class="ukr">за</span> <span
                            class="ukr">давньої</span>
                        <span class="ukr">давнини.</span>
                        <span class="ukr">Розкидані</span> <span class="ukr">на</span>
                        <span class="ukr">великому</span> <span class="ukr">просторищі</span> <span
                            class="ukr">тубільні</span>
                        <span class="ukr">племена</span> <span class="ukr">ще</span>
                        <span class="ukr">почитували</span> <span class="ukr">своїх</span> <span
                            class="ukr">ватагів,</span>
                        <span class="ukr">вдавалися</span> <span class="ukr">до</span>
                        <span class="ukr">знахурів</span> <span class="ukr">та</span>
                        <span class="ukr">жерців,</span> <span class="ukr">вигонили</span> <span
                            class="ukr">нечисту</span>
                        <span class="ukr">силу,</span> <span class="ukr">палили</span>
                        <span class="ukr">відьом</span> <span class="ukr">та</span>
                        <span class="ukr">билися</span> <span class="ukr">з</span>
                        <span class="ukr">сусідами</span> <span class="ukr">і</span>
                        <span class="ukr">всмак</span> <span class="ukr">наїдалися</span> <span
                            class="ukr">людського</span>
                        <span class="ukr">м'яса.</span> <span class="ukr"></span> </p>
                    <p class="ukrainian"> <span class="ukr">Але</span> <span class="ukr">кам'яна</span> <span
                            class="ukr">доба</span> <span class="ukr">і</span> <span class="ukr">в</span> <span
                            class="ukr">цій</span> <span class="ukr">країні</span>
                        <span class="ukr">вже</span> <span class="ukr">доходила</span> <span class="ukr">свого</span>
                        <span class="ukr">кінця.</span> <span class="ukr">Бо</span> <span
                            class="ukr">недовіданими</span>
                        <span class="ukr">нетрями,</span> <span class="ukr">незнаними</span> <span
                            class="ukr">стежками</span>
                        <span class="ukr">стали</span> <span class="ukr">помалу</span>
                        <span class="ukr">проникати</span> <span class="ukr">до</span>
                        <span class="ukr">країни</span> <span class="ukr">тої</span>
                        <span class="ukr">вістуни</span> <span class="ukr">заліза</span> <span class="ukr">—</span>
                        <span class="ukr">діти</span> <span class="ukr">білявої,</span> <span
                            class="ukr">блакитноокої,</span> <span class="ukr">непосидючої</span> <span
                            class="ukr">та</span>
                        <span class="ukr">невгамовної</span> <span class="ukr">раси.</span> <span class="ukr">Хто</span>
                        <span class="ukr">випадком,</span> <span class="ukr">а</span> <span class="ukr">хто</span> <span
                            class="ukr">за</span>
                        <span class="ukr">певною</span> <span class="ukr">думкою,</span>
                        <span class="ukr">хто</span> <span class="ukr">поодинці,</span>
                        <span class="ukr">а</span> <span class="ukr">хто</span> <span class="ukr">по</span> <span
                            class="ukr">двое</span>
                        <span class="ukr">й</span> <span class="ukr">троє,</span> <span class="ukr">не</span> <span
                            class="ukr">знати</span>
                        <span class="ukr">звідки</span> <span class="ukr">й</span> <span class="ukr">як,</span> <span
                            class="ukr">добувалися</span>
                        <span class="ukr">вони</span> <span class="ukr">сюди,</span>
                        <span class="ukr">і</span> <span class="ukr">котрі</span> <span class="ukr">гинули</span> <span
                            class="ukr">в</span>
                        <span class="ukr">боротьбі</span> <span class="ukr">з</span> <span
                            class="ukr">тубільцями,</span> <span class="ukr">а</span> <span class="ukr">котрі,</span>
                        <span class="ukr">перемігши,</span>
                        <span class="ukr">ішли</span> <span class="ukr">далі,</span>
                        <span class="ukr">а</span> <span class="ukr">куди</span> <span class="ukr">—</span> <span
                            class="ukr">не</span>
                        <span class="ukr">знати.</span> <span class="ukr">На</span> <span class="ukr">них</span> <span
                            class="ukr">ватажки</span> <span class="ukr">висилали</span> <span
                            class="ukr">вояків,</span>
                        <span class="ukr">їх</span> <span class="ukr">проклинали</span>
                        <span class="ukr">знахурі</span> <span class="ukr">й</span>
                        <span class="ukr">жерці</span> <span class="ukr">—</span> <span class="ukr">та</span> <span
                            class="ukr">марно:</span> <span class="ukr">бо</span> <span class="ukr">ж</span> <span
                            class="ukr">камінь</span>
                        <span class="ukr">кришиться</span>
                        <span class="ukr">об</span> <span class="ukr">крицю.</span>
                        <span class="ukr">Як</span> <span class="ukr">вода</span> <span class="ukr">з</span> <span
                            class="ukr">великого</span> <span class="ukr">джерела,</span> <span class="ukr">вони</span>
                        <span class="ukr">перепадали</span> <span class="ukr">через</span>
                        <span class="ukr">темні</span> <span class="ukr">ліси</span>
                        <span class="ukr">й</span> <span class="ukr">гірські</span>
                        <span class="ukr">переходи,</span> <span class="ukr">відбували</span> <span
                            class="ukr">далеку</span>
                        <span class="ukr">путь</span> <span class="ukr">річками</span>
                        <span class="ukr">на</span> <span class="ukr">човнах</span>
                        <span class="ukr">з</span> <span class="ukr">кори</span> <span class="ukr">або</span> <span
                            class="ukr">мокасинами</span>
                        <span class="ukr">прокладали</span> <span class="ukr">дорогу</span> <span
                            class="ukr">санкам,</span>
                        <span class="ukr">ідучи</span> <span class="ukr">попереду</span> <span
                            class="ukr">запряжених</span>
                        <span class="ukr">собак.</span> <span class="ukr">Великого</span> <span class="ukr">й</span>
                        <span class="ukr">могутнього</span> <span class="ukr">народу</span>
                        <span class="ukr">була</span> <span class="ukr">та</span> <span class="ukr">парость.</span>
                        <span class="ukr">І</span> <span class="ukr">його</span> <span class="ukr">без</span> <span
                            class="ukr">ліку</span>
                        <span class="ukr">на</span> <span class="ukr">світі,</span> <span class="ukr">але</span> <span
                            class="ukr">про</span> <span class="ukr">це</span> <span class="ukr">тільки</span> <span
                            class="ukr">ще</span>
                        <span class="ukr">мали</span> <span class="ukr">довідатися</span>
                        <span class="ukr">в</span> <span class="ukr">шкури</span> <span class="ukr">позакутувані</span>
                        <span class="ukr">мешканці</span> <span class="ukr">Північної</span>
                        <span class="ukr">Країни.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">Багато</span> <span class="ukr">хто</span>
                        <span class="ukr">з</span> <span class="ukr">тих</span> <span class="ukr">неоспіваних</span>
                        <span class="ukr">прибульців</span> <span class="ukr">наклав</span>
                        <span class="ukr">тут</span> <span class="ukr">головою.</span>
                        <span class="ukr">Проте</span> <span class="ukr">вони</span>
                        <span class="ukr">дивилися</span> <span class="ukr">смерті</span> <span class="ukr">у</span>
                        <span class="ukr">вічі</span> <span class="ukr">при</span> <span class="ukr">холоднім</span>
                        <span class="ukr">полум'ї</span>
                        <span class="ukr">північного</span> <span class="ukr">сяйва</span> <span class="ukr">так</span>
                        <span class="ukr">само</span> <span class="ukr">твердо,</span> <span class="ukr">як</span> <span
                            class="ukr">і</span>
                        <span class="ukr">брати</span> <span class="ukr">їхні</span> <span class="ukr">десь</span> <span
                            class="ukr">на</span> <span class="ukr">розпечених</span> <span class="ukr">пісках</span>
                        <span class="ukr">пустельних</span> <span class="ukr">чи</span>
                        <span class="ukr">в</span> <span class="ukr">надиханих</span>
                        <span class="ukr">отруйними</span> <span class="ukr">випарами</span> <span
                            class="ukr">джунглях.</span>
                        <span class="ukr">І</span> <span class="ukr">так</span> <span class="ukr">вони</span> <span
                            class="ukr">гинутимуть</span>
                        <span class="ukr">далі,</span> <span class="ukr">аж</span>
                        <span class="ukr">поки</span> <span class="ukr">настане</span>
                        <span class="ukr">пора,</span> <span class="ukr">і</span> <span class="ukr">раса</span> <span
                            class="ukr">ця</span>
                        <span class="ukr">осягне</span> <span class="ukr">долю,</span> <span class="ukr">в</span> <span
                            class="ukr">книзі</span> <span class="ukr">життя</span> <span class="ukr">їй</span> <span
                            class="ukr">написану.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Була</span> <span class="ukr">десь</span> <span
                            class="ukr">година</span> <span class="ukr">дванадцята.</span>
                        <span class="ukr">Небо</span> <span class="ukr">вздовж</span>
                        <span class="ukr">північного</span> <span class="ukr">обрію</span> <span
                            class="ukr">рожевіло,</span>
                        <span class="ukr">пригасаючи</span> <span class="ukr">з</span>
                        <span class="ukr">західного</span> <span class="ukr">кінця</span> <span class="ukr">і</span>
                        <span class="ukr">займаючись</span> <span class="ukr">із</span> <span
                            class="ukr">східного:</span> <span class="ukr">то</span> <span class="ukr">невидиме</span>
                        <span class="ukr">сонце</span>
                        <span class="ukr">позначало</span> <span class="ukr">хід</span>
                        <span class="ukr">свій</span> <span class="ukr">за</span> <span class="ukr">обрієм.</span> <span
                            class="ukr">Присмерк</span>
                        <span class="ukr">так</span> <span class="ukr">швидко</span>
                        <span class="ukr">переходив</span> <span class="ukr">у</span>
                        <span class="ukr">світанок,</span> <span class="ukr">що</span>
                        <span class="ukr">ночі</span> <span class="ukr">не</span> <span class="ukr">було.</span> <span
                            class="ukr">Просто</span> <span class="ukr">день</span> <span class="ukr">вінчався</span>
                        <span class="ukr">з</span> <span class="ukr">днем,</span> <span class="ukr">тільки</span> <span
                            class="ukr">ледь</span> <span class="ukr">помітним</span> <span class="ukr">нригасом</span>
                        <span class="ukr">відзначаючи,</span> <span class="ukr">що</span> <span class="ukr">сонце</span>
                        <span class="ukr">скінчило</span> <span class="ukr">один</span> <span class="ukr">круг</span>
                        <span class="ukr">і</span> <span class="ukr">починає</span> <span class="ukr">інший.</span>
                        <span class="ukr">Сивка</span> <span class="ukr">несміливо</span> <span
                            class="ukr">заводила</span>
                        <span class="ukr">своєї</span> <span class="ukr">"на</span>
                        <span class="ukr">добраніч",</span> <span class="ukr">а</span>
                        <span class="ukr">вільшанка</span> <span class="ukr">на</span>
                        <span class="ukr">весь</span> <span class="ukr">голос</span>
                        <span class="ukr">вибивала</span> <span class="ukr">"добридень".</span> <span
                            class="ukr">З</span>
                        <span class="ukr">острова</span> <span class="ukr">посеред</span> <span
                            class="ukr">широкого</span>
                        <span class="ukr">Юкону</span> <span class="ukr">журно</span>
                        <span class="ukr">виливали</span> <span class="ukr">свою</span>
                        <span class="ukr">скаргу</span> <span class="ukr">дикі</span>
                        <span class="ukr">гуси,</span> <span class="ukr">а</span> <span class="ukr">з-за</span> <span
                            class="ukr">річки</span> <span class="ukr">їм</span> <span class="ukr">глузливо</span> <span
                            class="ukr">відповідала</span> <span class="ukr">гагара.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">На</span> <span class="ukr">березі,</span> <span
                            class="ukr">над</span> <span class="ukr">самою</span> <span class="ukr">водою,</span> <span
                            class="ukr">що</span> <span class="ukr">пливла,</span> <span class="ukr">спроквола</span>
                        <span class="ukr">нуртуючи,</span>
                        <span class="ukr">—</span> <span class="ukr">двома</span> <span class="ukr">чи</span> <span
                            class="ukr">трьома</span> <span class="ukr">рядами</span> <span class="ukr">стояли</span>
                        <span class="ukr">човни</span> <span class="ukr">з</span> <span class="ukr">березової</span>
                        <span class="ukr">кори.</span>
                        <span class="ukr">Списи</span> <span class="ukr">із</span>
                        <span class="ukr">слонової</span> <span class="ukr">кістки</span> <span
                            class="ukr">вістрями,</span>
                        <span class="ukr">стріли</span> <span class="ukr">з</span>
                        <span class="ukr">кістяними</span> <span class="ukr">зубцями,</span> <span
                            class="ukr">обмотані</span>
                        <span class="ukr">оленячими</span> <span class="ukr">ремінцями</span> <span
                            class="ukr">сагайдаки</span>
                        <span class="ukr">та</span> <span class="ukr">й</span> <span class="ukr">звичайні</span> <span
                            class="ukr">верші</span>
                        <span class="ukr">свідчили</span> <span class="ukr">про</span>
                        <span class="ukr">те,</span> <span class="ukr">що</span> <span class="ukr">лосось</span> <span
                            class="ukr">іде</span> <span class="ukr">вже</span> <span class="ukr">каламутною</span>
                        <span class="ukr">річкою</span> <span class="ukr">викидати</span> <span class="ukr">ікру.</span>
                        <span class="ukr">Далі</span> <span class="ukr">від</span>
                        <span class="ukr">берега</span> <span class="ukr">стояли</span>
                        <span class="ukr">розкидані</span> <span class="ukr">безладно</span> <span
                            class="ukr">шкуратяні</span>
                        <span class="ukr">намети,</span> <span class="ukr">жердини</span> <span
                            class="ukr">сушити</span>
                        <span class="ukr">рибу,</span> <span class="ukr">і</span> <span class="ukr">звідти</span> <span
                            class="ukr">долинали</span>
                        <span class="ukr">голоси</span> <span class="ukr">тубільних</span> <span
                            class="ukr">рибалок.</span>
                        <span class="ukr">Хлопці</span> <span class="ukr">борюкалися</span> <span
                            class="ukr">один</span>
                        <span class="ukr">з</span> <span class="ukr">одним</span> <span class="ukr">чи</span> <span
                            class="ukr">крутилися</span> <span class="ukr">коло</span> <span class="ukr">дівчат;</span>
                        <span class="ukr">старші</span> <span class="ukr">жінки</span> <span class="ukr">сиділи</span>
                        <span class="ukr">осторонь,</span>
                        <span class="ukr">бо</span> <span class="ukr">їхній</span>
                        <span class="ukr">час</span> <span class="ukr">народжувати</span> <span class="ukr">дітей</span>
                        <span class="ukr">уже</span> <span class="ukr">минув,</span>
                        <span class="ukr">вони</span> <span class="ukr">гомоніли</span>
                        <span class="ukr">про</span> <span class="ukr">щось</span>
                        <span class="ukr">проміж</span> <span class="ukr">собою</span>
                        <span class="ukr">і</span> <span class="ukr">сукали</span>
                        <span class="ukr">мотузки</span> <span class="ukr">з</span>
                        <span class="ukr">зеленого</span> <span class="ukr">пагоння</span> <span
                            class="ukr">витких</span>
                        <span class="ukr">рослин.</span> <span class="ukr">Біля</span>
                        <span class="ukr">них</span> <span class="ukr">вовтузилися</span> <span class="ukr">голі</span>
                        <span class="ukr">дітлахи,</span> <span class="ukr">бавилися</span> <span class="ukr">й</span>
                        <span class="ukr">качалися</span> <span class="ukr">по</span> <span class="ukr">землі</span>
                        <span class="ukr">разом</span> <span class="ukr">з</span> <span class="ukr">величезними</span>
                        <span class="ukr">вовчої</span> <span class="ukr">породи</span> <span class="ukr">псами.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Трохи</span> <span class="ukr">оподалік,</span>
                        <span class="ukr">зовсім</span> <span class="ukr">окремо,</span> <span
                            class="ukr">розташувався</span> <span class="ukr">ще</span>
                        <span class="ukr">один</span> <span class="ukr">табір,</span>
                        <span class="ukr">на</span> <span class="ukr">два</span> <span class="ukr">лиш</span> <span
                            class="ukr">намети.</span> <span class="ukr">Там</span> <span class="ukr">окошилися</span>
                        <span class="ukr">білолиці.</span> <span class="ukr">Вже</span> <span class="ukr">з</span> <span
                            class="ukr">самого</span> <span class="ukr">того,</span> <span class="ukr">де</span> <span
                            class="ukr">стояли</span> <span class="ukr">намети,</span>
                        <span class="ukr">можна</span> <span class="ukr">було</span>
                        <span class="ukr">здогадатися,</span> <span class="ukr">що</span> <span class="ukr">то</span>
                        <span class="ukr">білі</span> <span class="ukr">люди.</span> <span class="ukr">Якби</span> <span
                            class="ukr">малося</span> <span class="ukr">наступати,</span> <span class="ukr">їхній</span>
                        <span class="ukr">табір</span> <span class="ukr">на</span>
                        <span class="ukr">сто</span> <span class="ukr">ярдів</span>
                        <span class="ukr">далі</span> <span class="ukr">панував</span>
                        <span class="ukr">над</span> <span class="ukr">табором</span>
                        <span class="ukr">індіян,</span> <span class="ukr">на</span>
                        <span class="ukr">випадок</span> <span class="ukr">оборони</span> <span class="ukr">—</span>
                        <span class="ukr">він</span> <span class="ukr">стояв</span> <span class="ukr">на</span> <span
                            class="ukr">пагорбі,</span> <span class="ukr">не</span> <span class="ukr">зарослому</span>
                        <span class="ukr">кущами,</span> <span class="ukr">а</span> <span class="ukr">коли</span> <span
                            class="ukr">б</span>
                        <span class="ukr">довелося</span> <span class="ukr">відступати</span>
                        <span class="ukr">—</span> <span class="ukr">стрімким</span>
                        <span class="ukr">схилом</span> <span class="ukr">бігла</span>
                        <span class="ukr">стежка</span> <span class="ukr">просто</span>
                        <span class="ukr">до</span> <span class="ukr">човнів.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">З</span> <span class="ukr">одного</span> <span
                            class="ukr">намету</span> <span class="ukr">чути</span> <span class="ukr">було</span> <span
                            class="ukr">набридливий</span> <span class="ukr">плач</span>
                        <span class="ukr">хворої</span> <span class="ukr">дитини</span>
                        <span class="ukr">й</span> <span class="ukr">одноманітний</span> <span class="ukr">спів</span>
                        <span class="ukr">матері,</span> <span class="ukr">що</span>
                        <span class="ukr">колисала</span> <span class="ukr">її.</span>
                        <span class="ukr">Надворі</span> <span class="ukr">коло</span>
                        <span class="ukr">спопелілого</span> <span class="ukr">багаття</span> <span
                            class="ukr">розмовляло</span>
                        <span class="ukr">двоє</span> <span class="ukr">чоловіків:</span> <span class="ukr">білий</span>
                        <span class="ukr">і</span> <span class="ukr">метис.</span>
                        <span class="ukr">Аякже!</span> <span class="ukr">Я</span>
                        <span class="ukr">люблю</span> <span class="ukr">церкву,</span>
                        <span class="ukr">як</span> <span class="ukr">відданий</span>
                        <span class="ukr">син</span> <span class="ukr">її.</span> <span class="ukr">Bien[34].</span>
                        <span class="ukr">Так</span> <span class="ukr">люблю,</span> <span class="ukr">що</span> <span
                            class="ukr">вдень</span> <span class="ukr">тікаю</span> <span class="ukr">від</span> <span
                            class="ukr">неї,</span> <span class="ukr">а</span> <span class="ukr">вночі</span> <span
                            class="ukr">сню</span>
                        <span class="ukr">про</span> <span class="ukr">помсту.</span> <span class="ukr">Ось</span> <span
                            class="ukr">послухайте.</span> <span class="ukr">Голос</span>
                        <span class="ukr">метисів</span> <span class="ukr">аж</span>
                        <span class="ukr">захрип</span> <span class="ukr">із</span>
                        <span class="ukr">гніву.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Родом</span> <span class="ukr">я</span> <span
                            class="ukr">з</span>
                        <span class="ukr">Червоної</span> <span class="ukr">річки,</span>
                        <span class="ukr">і</span> <span class="ukr">батько</span>
                        <span class="ukr">мій</span> <span class="ukr">був</span> <span class="ukr">такий</span> <span
                            class="ukr">самий</span> <span class="ukr">білий,</span> <span class="ukr">як</span> <span
                            class="ukr">і</span>
                        <span class="ukr">ви.</span> <span class="ukr">Тільки</span> <span class="ukr">й</span> <span
                            class="ukr">різниці,</span> <span class="ukr">що</span> <span class="ukr">ви</span> <span
                            class="ukr">янкі,</span> <span class="ukr">а</span> <span class="ukr">він</span> <span
                            class="ukr">—</span>
                        <span class="ukr">англієць</span> <span class="ukr">і</span> <span class="ukr">син</span> <span
                            class="ukr">джентльмена.</span> <span class="ukr">Мати</span>
                        <span class="ukr">моя</span> <span class="ukr">була</span>
                        <span class="ukr">ватагова</span> <span class="ukr">дочка,</span> <span class="ukr">а</span>
                        <span class="ukr">з</span> <span class="ukr">мене</span> <span class="ukr">вийшов</span> <span
                            class="ukr">бравий</span> <span class="ukr">хлопець.</span> <span class="ukr">І</span> <span
                            class="ukr">треба</span> <span class="ukr">було</span> <span class="ukr">добре</span> <span
                            class="ukr">приглядатися,</span>
                        <span class="ukr">щоб</span> <span class="ukr">визначити,</span> <span class="ukr">яка</span>
                        <span class="ukr">кров</span> <span class="ukr">тече</span>
                        <span class="ukr">в</span> <span class="ukr">моїх</span> <span class="ukr">жилах,</span> <span
                            class="ukr">бо</span>
                        <span class="ukr">я</span> <span class="ukr">жив</span> <span class="ukr">з</span> <span
                            class="ukr">білими,</span>
                        <span class="ukr">мав</span> <span class="ukr">такий</span> <span class="ukr">самий</span> <span
                            class="ukr">вигляд,</span> <span class="ukr">як</span> <span class="ukr">і</span> <span
                            class="ukr">вони,</span>
                        <span class="ukr">і</span> <span class="ukr">в</span> <span class="ukr">грудях</span> <span
                            class="ukr">моїх</span>
                        <span class="ukr">билося</span> <span class="ukr">батькове</span> <span
                            class="ukr">серце.</span>
                        <span class="ukr">Сталося</span> <span class="ukr">так,</span>
                        <span class="ukr">що</span> <span class="ukr">одна</span> <span class="ukr">дівчина</span> <span
                            class="ukr">—</span> <span class="ukr">біла</span> <span class="ukr">—</span> <span
                            class="ukr">споглянула</span> <span class="ukr">на</span> <span class="ukr">мене</span>
                        <span class="ukr">прихильним</span>
                        <span class="ukr">оком.</span> <span class="ukr">Її</span>
                        <span class="ukr">батько,</span> <span class="ukr">родом</span>
                        <span class="ukr">француз,</span> <span class="ukr">мав</span>
                        <span class="ukr">багато</span> <span class="ukr">землі</span>
                        <span class="ukr">та</span> <span class="ukr">безліч</span>
                        <span class="ukr">коней</span> <span class="ukr">і</span> <span class="ukr">був</span> <span
                            class="ukr">великий</span> <span class="ukr">чоловік</span> <span class="ukr">серед</span>
                        <span class="ukr">свого</span> <span class="ukr">люду.</span> <span class="ukr">Він</span> <span
                            class="ukr">заявив,</span> <span class="ukr">що</span> <span class="ukr">дівчина</span>
                        <span class="ukr">сама</span> <span class="ukr">не</span> <span class="ukr">знає,</span> <span
                            class="ukr">чого</span>
                        <span class="ukr">хоче,</span> <span class="ukr">дуже</span> <span class="ukr">лаяв</span> <span
                            class="ukr">її</span> <span class="ukr">і</span> <span class="ukr">страшенно</span> <span
                            class="ukr">розлютився,</span> <span class="ukr">що</span>
                        <span class="ukr">вона</span> <span class="ukr">не</span> <span class="ukr">слухається.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Але</span> <span class="ukr">дівчина</span> <span
                            class="ukr">таки</span> <span class="ukr">знала,</span> <span class="ukr">чого</span> <span
                            class="ukr">хоче,</span> <span class="ukr">і</span> <span class="ukr">тому</span> <span
                            class="ukr">ми</span> <span class="ukr">з</span> <span class="ukr">нею</span> <span
                            class="ukr">незабаром</span> <span class="ukr">стали</span> <span class="ukr">перед</span>
                        <span class="ukr">пастора.</span> <span class="ukr">Та</span> <span class="ukr">батько</span>
                        <span class="ukr">нас</span> <span class="ukr">випередив</span> <span class="ukr">і</span> <span
                            class="ukr">чортзна-чого</span> <span class="ukr">наплів</span>
                        <span class="ukr">та</span> <span class="ukr">наобіцяв</span>
                        <span class="ukr">тому</span> <span class="ukr">пасторові.</span> <span class="ukr">Отже,</span>
                        <span class="ukr">той</span> <span class="ukr">затявся</span>
                        <span class="ukr">й</span> <span class="ukr">не</span> <span class="ukr">схотів</span> <span
                            class="ukr">звінчати</span>
                        <span class="ukr">нас,</span> <span class="ukr">дати</span>
                        <span class="ukr">нам</span> <span class="ukr">право</span>
                        <span class="ukr">вкупі</span> <span class="ukr">жити.</span>
                        <span class="ukr">І</span> <span class="ukr">все</span> <span class="ukr">церква:</span> <span
                            class="ukr">колись</span>
                        <span class="ukr">вона</span> <span class="ukr">не</span> <span class="ukr">схотіла</span> <span
                            class="ukr">поблагословити</span> <span class="ukr">мого</span>
                        <span class="ukr">народження,</span> <span class="ukr">а</span>
                        <span class="ukr">тепер</span> <span class="ukr">не</span>
                        <span class="ukr">дала</span> <span class="ukr">нам</span>
                        <span class="ukr">шлюбу</span> <span class="ukr">й</span> <span class="ukr">заплямила</span>
                        <span class="ukr">кров'ю</span>
                        <span class="ukr">людською</span> <span class="ukr">мої</span>
                        <span class="ukr">руки.</span> <span class="ukr">Bien!</span>
                        <span class="ukr">Тим-то</span> <span class="ukr">я</span>
                        <span class="ukr">так</span> <span class="ukr">люблю</span>
                        <span class="ukr">церкву.</span> <span class="ukr">Одне</span>
                        <span class="ukr">слово,</span> <span class="ukr">я</span>
                        <span class="ukr">ляснув</span> <span class="ukr">пастора</span> <span class="ukr">в</span>
                        <span class="ukr">ситу</span> <span class="ukr">бабську</span> <span class="ukr">пику,</span>
                        <span class="ukr">а</span> <span class="ukr">сам</span> <span class="ukr">з</span> <span
                            class="ukr">дівчиною</span>
                        <span class="ukr">бистрими</span>
                        <span class="ukr">кіньми</span> <span class="ukr">подався</span> <span class="ukr">до</span>
                        <span class="ukr">форту</span> <span class="ukr">П’єра,</span> <span class="ukr">де</span> <span
                            class="ukr">був</span> <span class="ukr">лагідний</span> <span class="ukr">і</span> <span
                            class="ukr">добрий</span> <span class="ukr">священик.</span>
                        <span class="ukr">Але</span> <span class="ukr">за</span> <span class="ukr">нами</span> <span
                            class="ukr">слідом</span> <span class="ukr">погнався</span> <span class="ukr">її</span>
                        <span class="ukr">батько,</span> <span class="ukr">брати</span> <span class="ukr">та</span>
                        <span class="ukr">вся</span> <span class="ukr">челядь.</span> <span class="ukr">Билися</span>
                        <span class="ukr">ми</span> <span class="ukr">на</span> <span class="ukr">скоку</span> <span
                            class="ukr">доти,</span> <span class="ukr">аж</span> <span class="ukr">доки</span> <span
                            class="ukr">я</span>
                        <span class="ukr">висадив</span> <span class="ukr">трьох</span> <span class="ukr">із</span>
                        <span class="ukr">сідла,</span> <span class="ukr">а</span> <span class="ukr">решта</span> <span
                            class="ukr">сховалася</span>
                        <span class="ukr">в</span> <span class="ukr">форті</span> <span class="ukr">П'єра.</span> <span
                            class="ukr">Тоді</span> <span class="ukr">дівчина</span> <span class="ukr">й</span> <span
                            class="ukr">я</span>
                        <span class="ukr">подалися</span> <span class="ukr">на</span> <span class="ukr">схід</span>
                        <span class="ukr">у</span> <span class="ukr">гори</span> <span class="ukr">та</span> <span
                            class="ukr">ліси</span>
                        <span class="ukr">і</span> <span class="ukr">жили</span> <span class="ukr">там</span> <span
                            class="ukr">укупі</span>
                        <span class="ukr">без</span> <span class="ukr">шлюбу.</span> <span class="ukr">І</span> <span
                            class="ukr">все</span>
                        <span class="ukr">це</span> <span class="ukr">наробила</span> <span class="ukr">добра</span>
                        <span class="ukr">церква,</span> <span class="ukr">що</span> <span class="ukr">я</span> <span
                            class="ukr">її</span>
                        <span class="ukr">люблю,</span> <span class="ukr">як</span> <span class="ukr">відданий</span>
                        <span class="ukr">син.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Одначе</span> <span class="ukr">жінки,</span> <span
                            class="ukr">знаєте,</span>
                        <span class="ukr">якісь</span> <span class="ukr">чудні,</span> <span class="ukr">і</span> <span
                            class="ukr">чоловікам</span> <span class="ukr">годі</span>
                        <span class="ukr">їх</span> <span class="ukr">збагнути.</span>
                        <span class="ukr">В</span> <span class="ukr">тій</span> <span class="ukr">сутичці</span> <span
                            class="ukr">я</span>
                        <span class="ukr">був</span> <span class="ukr">висадив</span> <span class="ukr">із</span> <span
                            class="ukr">сідла</span> <span class="ukr">і</span> <span class="ukr">її</span> <span
                            class="ukr">батька,</span>
                        <span class="ukr">а</span> <span class="ukr">ті,</span> <span class="ukr">що</span> <span
                            class="ukr">їхали</span>
                        <span class="ukr">ззаду,</span> <span class="ukr">зопалу</span> <span
                            class="ukr">промчали</span>
                        <span class="ukr">над</span> <span class="ukr">ним</span> <span class="ukr">потоптом.</span>
                        <span class="ukr">Ми</span> <span class="ukr">бачили,</span> <span class="ukr">як</span> <span
                            class="ukr">тратували</span> <span class="ukr">його</span>
                        <span class="ukr">тіло,</span> <span class="ukr">дівчина</span>
                        <span class="ukr">та</span> <span class="ukr">я.</span> <span class="ukr">Тільки</span> <span
                            class="ukr">що</span>
                        <span class="ukr">потім</span> <span class="ukr">я</span> <span class="ukr">забув</span> <span
                            class="ukr">про</span> <span class="ukr">це,</span> <span class="ukr">а</span> <span
                            class="ukr">вона</span>
                        <span class="ukr">не</span> <span class="ukr">забула.</span> <span class="ukr">В</span> <span
                            class="ukr">тиші</span> <span class="ukr">вечірній,</span>
                        <span class="ukr">коли</span> <span class="ukr">я</span> <span class="ukr">повертався</span>
                        <span class="ukr">з</span> <span class="ukr">полювання,</span> <span class="ukr">коли</span>
                        <span class="ukr">ми</span> <span class="ukr">лежали</span>
                        <span class="ukr">під</span> <span class="ukr">зоряним</span>
                        <span class="ukr">небом</span> <span class="ukr">і,</span>
                        <span class="ukr">здається,</span> <span class="ukr">ніщо</span> <span class="ukr">не</span>
                        <span class="ukr">могло</span> <span class="ukr">нас</span> <span class="ukr">роз'єднати,</span>
                        <span class="ukr">воно,</span>
                        <span class="ukr">оте</span> <span class="ukr">видовище,</span>
                        <span class="ukr">поставало</span> <span class="ukr">між</span>
                        <span class="ukr">нами.</span> <span class="ukr">Так</span>
                        <span class="ukr">було</span> <span class="ukr">завше.</span>
                        <span class="ukr">Вона</span> <span class="ukr">ніколи</span>
                        <span class="ukr">нічого</span> <span class="ukr">не</span>
                        <span class="ukr">казала,</span> <span class="ukr">але</span>
                        <span class="ukr">щось</span> <span class="ukr">таємне,</span>
                        <span class="ukr">невидиме</span> <span class="ukr">сиділо</span> <span class="ukr">біля</span>
                        <span class="ukr">нашого</span> <span class="ukr">багаття</span>
                        <span class="ukr">й</span> <span class="ukr">розділяло</span>
                        <span class="ukr">нас.</span> <span class="ukr">Вона</span>
                        <span class="ukr">намагалася</span> <span class="ukr">забути,</span> <span
                            class="ukr">але</span> <span class="ukr">від</span> <span class="ukr">того</span> <span
                            class="ukr">страшна</span> <span class="ukr">хвилина</span>
                        <span class="ukr">нагадувалася</span> <span class="ukr">їй</span> <span class="ukr">ще</span>
                        <span class="ukr">виразніше,</span> <span class="ukr">докладніше…</span> <span
                            class="ukr">Знати</span>
                        <span class="ukr">було</span> <span class="ukr">з</span> <span class="ukr">її</span> <span
                            class="ukr">очей,</span>
                        <span class="ukr">з</span> <span class="ukr">уривчастого</span> <span
                            class="ukr">зітхання,</span> <span class="ukr">що</span> <span class="ukr">вона</span> <span
                            class="ukr">тяжко</span> <span class="ukr">мучиться…</span> </p>
                    <p class="ukrainian"> <span class="ukr">Породила</span> <span class="ukr">вона</span> <span
                            class="ukr">мені</span>
                        <span class="ukr">дитину,</span> <span class="ukr">дівчинку,</span> <span class="ukr">і</span>
                        <span class="ukr">померла.</span> <span class="ukr">Шукаючи</span>
                        <span class="ukr">дитині</span> <span class="ukr">мамки,</span>
                        <span class="ukr">що</span> <span class="ukr">дала</span> <span class="ukr">б</span> <span
                            class="ukr">їй</span>
                        <span class="ukr">тепло</span> <span class="ukr">й</span> <span class="ukr">життя,</span> <span
                            class="ukr">подався</span>
                        <span class="ukr">я</span> <span class="ukr">до</span> <span class="ukr">племені</span> <span
                            class="ukr">своєї</span> <span class="ukr">матері.</span> <span class="ukr">Однак</span>
                        <span class="ukr">на</span> <span class="ukr">руках</span> <span class="ukr">моїх</span> <span
                            class="ukr">була</span>
                        <span class="ukr">кров</span> <span class="ukr">людська,</span> <span class="ukr">все</span>
                        <span class="ukr">з</span> <span class="ukr">ласки</span> <span class="ukr">тої</span> <span
                            class="ukr">церкви,</span> <span class="ukr">а</span> <span class="ukr">крові</span> <span
                            class="ukr">не</span>
                        <span class="ukr">змити.</span> <span class="ukr">Отже,</span> <span class="ukr">кінна</span>
                        <span class="ukr">поліція</span> <span class="ukr">Півночі</span> <span
                            class="ukr">прийшла</span>
                        <span class="ukr">по</span> <span class="ukr">мою</span> <span class="ukr">душу.</span> <span
                            class="ukr">Врятував</span>
                        <span class="ukr">мене</span> <span class="ukr">дядько,</span>
                        <span class="ukr">материн</span> <span class="ukr">брат,</span>
                        <span class="ukr">що</span> <span class="ukr">був</span> <span class="ukr">ватагом</span> <span
                            class="ukr">племені.</span>
                        <span class="ukr">Він</span> <span class="ukr">сховав</span>
                        <span class="ukr">мене,</span> <span class="ukr">потім</span>
                        <span class="ukr">дав</span> <span class="ukr">коней</span>
                        <span class="ukr">та</span> <span class="ukr">харчів.</span>
                        <span class="ukr">І</span> <span class="ukr">я</span> <span class="ukr">з</span> <span
                            class="ukr">дитиною</span>
                        <span class="ukr">подався</span> <span class="ukr">до</span> <span class="ukr">Гудзонової</span>
                        <span class="ukr">затоки,</span>
                        <span class="ukr">де</span> <span class="ukr">було</span> <span class="ukr">ще</span> <span
                            class="ukr">небагато</span> <span class="ukr">білих.</span> <span class="ukr">Вони</span>
                        <span class="ukr">не</span> <span class="ukr">дуже</span> <span
                            class="ukr">розпитувалися,</span> <span class="ukr">хто</span>
                        <span class="ukr">я</span> <span class="ukr">й</span> <span class="ukr">відки.</span> <span
                            class="ukr">Я</span>
                        <span class="ukr">найнявся</span> <span class="ukr">до</span> <span class="ukr">факторії,</span>
                        <span class="ukr">був</span> <span class="ukr">і</span> <span class="ukr">погоничем,</span>
                        <span class="ukr">і</span>
                        <span class="ukr">мисливцем…</span> <span class="ukr">Тим</span> <span class="ukr">часом</span>
                        <span class="ukr">дитина</span> <span class="ukr">моя</span> <span class="ukr">підросла</span>
                        <span class="ukr">й</span> <span class="ukr">розцвіла</span> <span class="ukr">на</span> <span
                            class="ukr">гарну</span> <span class="ukr">струнку</span> <span class="ukr">дівчину,</span>
                        <span class="ukr">аж</span> <span class="ukr">око</span> <span class="ukr">милувала.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Ви</span> <span class="ukr">знаєте,</span> <span
                            class="ukr">зима</span> <span class="ukr">довга,</span> <span class="ukr">нудна</span> <span
                            class="ukr">й</span> <span class="ukr">спокушає</span> <span class="ukr">на</span> <span
                            class="ukr">темні</span> <span class="ukr">думки</span> <span class="ukr">й</span> <span
                            class="ukr">недобрі</span> <span class="ukr">вчинки.</span>
                        <span class="ukr">Начальник</span> <span class="ukr">тої</span>
                        <span class="ukr">факторії</span> <span class="ukr">був</span>
                        <span class="ukr">лихий</span> <span class="ukr">та</span>
                        <span class="ukr">зухвалий.</span> <span class="ukr">Не</span>
                        <span class="ukr">мав</span> <span class="ukr">у</span> <span class="ukr">собі</span> <span
                            class="ukr">нічого,</span> <span class="ukr">чим</span> <span class="ukr">міг</span> <span
                            class="ukr">би</span>
                        <span class="ukr">привабити</span> <span class="ukr">жінку.</span> <span
                            class="ukr">Одначе</span> <span class="ukr">він</span> <span class="ukr">почав</span> <span
                            class="ukr">заглядатися</span> <span class="ukr">на</span>
                        <span class="ukr">мою</span> <span class="ukr">дочку,</span>
                        <span class="ukr">що</span> <span class="ukr">вже</span> <span class="ukr">на</span> <span
                            class="ukr">порі</span>
                        <span class="ukr">стала.</span> <span class="ukr">Мати</span> <span class="ukr">божа!</span>
                        <span class="ukr">Послав</span> <span class="ukr">він</span> <span class="ukr">мене</span> <span
                            class="ukr">з</span>
                        <span class="ukr">собаками</span> <span class="ukr">в</span> <span class="ukr">далеку</span>
                        <span class="ukr">дорогу,</span> <span class="ukr">щоб</span> <span class="ukr">легше</span>
                        <span class="ukr">було…</span> <span class="ukr">ви</span> <span class="ukr">розумієте.</span>
                        <span class="ukr">Не</span> <span class="ukr">мав</span> <span class="ukr">він</span> <span
                            class="ukr">серця,</span>
                        <span class="ukr">той</span> <span class="ukr">кат.</span> <span class="ukr">Дівчина</span>
                        <span class="ukr">моя</span> <span class="ukr">була</span> <span class="ukr">чиста,</span> <span
                            class="ukr">і</span>
                        <span class="ukr">душа</span> <span class="ukr">в</span> <span class="ukr">неї</span> <span
                            class="ukr">була</span>
                        <span class="ukr">непорочна,</span>
                        <span class="ukr">і</span> <span class="ukr">лагідна</span>
                        <span class="ukr">була…</span> <span class="ukr">І…</span>
                        <span class="ukr">ну,</span> <span class="ukr">й</span> <span class="ukr">померла</span> <span
                            class="ukr">вона…</span> </p>
                    <p class="ukrainian"> <span class="ukr">Стояв</span> <span class="ukr">лютий</span> <span
                            class="ukr">мороз</span> <span class="ukr">тої</span> <span class="ukr">ночі,</span> <span
                            class="ukr">як</span> <span class="ukr">я</span>
                        <span class="ukr">повернувся</span> <span class="ukr">додому.</span>
                        <span class="ukr">Довгі</span> <span class="ukr">місяці</span>
                        <span class="ukr">я</span> <span class="ukr">пробув</span>
                        <span class="ukr">у</span> <span class="ukr">дорозі,</span>
                        <span class="ukr">і</span> <span class="ukr">собаки</span>
                        <span class="ukr">мої</span> <span class="ukr">дуже</span>
                        <span class="ukr">підбилися.</span> <span class="ukr">Індіяни</span> <span class="ukr">й</span>
                        <span class="ukr">метиси,</span> <span class="ukr">слова</span> <span class="ukr">мені</span>
                        <span class="ukr">не</span> <span class="ukr">кажучи,</span> <span class="ukr">якось</span>
                        <span class="ukr">чудно</span> <span class="ukr">поглядали</span>
                        <span class="ukr">в</span> <span class="ukr">мій</span> <span class="ukr">бік,</span> <span
                            class="ukr">і</span>
                        <span class="ukr">мене</span> <span class="ukr">раптом,</span> <span class="ukr">не</span> <span
                            class="ukr">знати</span> <span class="ukr">чого,</span> <span class="ukr">опала</span> <span
                            class="ukr">гнітлива</span> <span class="ukr">тривога.</span>
                        <span class="ukr">Але</span> <span class="ukr">я</span> <span class="ukr">спершу</span> <span
                            class="ukr">нагодував</span>
                        <span class="ukr">собак</span> <span class="ukr">і</span> <span class="ukr">сам</span> <span
                            class="ukr">попоїв,</span> <span class="ukr">наче</span> <span class="ukr">перед</span>
                        <span class="ukr">важкою</span> <span class="ukr">роботою.</span>
                        <span class="ukr">І</span> <span class="ukr">аж</span> <span class="ukr">тоді</span> <span
                            class="ukr">озвався,</span> <span class="ukr">почав</span> <span
                            class="ukr">допитуватися,</span>
                        <span class="ukr">що</span> <span class="ukr">скоїлось,</span>
                        <span class="ukr">та</span> <span class="ukr">всі</span> <span class="ukr">враз</span> <span
                            class="ukr">кинулися</span> <span class="ukr">від</span> <span class="ukr">мене,</span>
                        <span class="ukr">жахаючись</span> <span class="ukr">мого</span>
                        <span class="ukr">гніву</span> <span class="ukr">й</span> <span class="ukr">того,</span> <span
                            class="ukr">що</span>
                        <span class="ukr">я</span> <span class="ukr">міг</span> <span class="ukr">учинити.</span> <span
                            class="ukr">Лише</span> <span class="ukr">помалу,</span> <span class="ukr">слово</span>
                        <span class="ukr">по</span> <span class="ukr">слову,</span> <span class="ukr">вони</span> <span
                            class="ukr">оповіли</span> <span class="ukr">мені</span> <span class="ukr">всю</span> <span
                            class="ukr">ту</span> <span class="ukr">страшну</span> <span class="ukr">історію</span>
                        <span class="ukr">і</span> <span class="ukr">дивувалися</span> <span class="ukr">на</span> <span
                            class="ukr">мій</span> <span class="ukr">незворушний</span>
                        <span class="ukr">спокій.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">Вислухавши</span> <span class="ukr">їх,</span> <span class="ukr">я</span>
                        <span class="ukr">пішов</span> <span class="ukr">до</span> <span class="ukr">будинку</span>
                        <span class="ukr">факторії.</span>
                        <span class="ukr">І</span> <span class="ukr">був</span> <span class="ukr">я</span> <span
                            class="ukr">тоді</span>
                        <span class="ukr">спокійніший,</span> <span class="ukr">ніж</span>
                        <span class="ukr">оце</span> <span class="ukr">тепер,</span>
                        <span class="ukr">вам</span> <span class="ukr">оповідаючи.</span> <span class="ukr">Він,</span>
                        <span class="ukr">мене</span> <span class="ukr">побачивши,</span> <span
                            class="ukr">злякався</span>
                        <span class="ukr">до</span> <span class="ukr">смерті,</span>
                        <span class="ukr">став</span> <span class="ukr">кликати</span>
                        <span class="ukr">метисів</span> <span class="ukr">на</span>
                        <span class="ukr">поміч,</span> <span class="ukr">але</span>
                        <span class="ukr">вони</span> <span class="ukr">його</span>
                        <span class="ukr">зреклися,</span> <span class="ukr">вважаючи,</span> <span
                            class="ukr">що</span> <span class="ukr">він</span> <span class="ukr">заслужив</span> <span
                            class="ukr">кару.</span> <span class="ukr">Тоді</span> <span class="ukr">він</span> <span
                            class="ukr">утік</span> <span class="ukr">до</span>
                        <span class="ukr">пастора.</span> <span class="ukr">Я</span> <span class="ukr">прийшов</span>
                        <span class="ukr">і</span> <span class="ukr">туди.</span> <span class="ukr">Пастор</span> <span
                            class="ukr">заступив</span>
                        <span class="ukr">мені</span> <span class="ukr">двері,</span>
                        <span class="ukr">розводячись</span> <span class="ukr">про</span> <span class="ukr">те,</span>
                        <span class="ukr">що</span> <span class="ukr">людина</span> <span class="ukr">в</span> <span
                            class="ukr">гніві,</span>
                        <span class="ukr">перш</span> <span class="ukr">ніж</span> <span class="ukr">крок</span> <span
                            class="ukr">ступити,</span> <span class="ukr">повинна</span> <span
                            class="ukr">згадати</span>
                        <span class="ukr">про</span> <span class="ukr">бога.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Я</span> <span class="ukr">сказав,</span> <span
                            class="ukr">що</span> <span class="ukr">батьківське</span> <span class="ukr">горе</span>
                        <span class="ukr">дає</span> <span class="ukr">мені</span>
                        <span class="ukr">право</span> <span class="ukr">зайти</span>
                        <span class="ukr">до</span> <span class="ukr">хати.</span>
                        <span class="ukr">Але</span> <span class="ukr">він</span> <span class="ukr">заявив,</span> <span
                            class="ukr">що</span> <span class="ukr">я</span> <span class="ukr">зайду</span> <span
                            class="ukr">туди</span>
                        <span class="ukr">тільки</span> <span class="ukr">через</span> <span class="ukr">його</span>
                        <span class="ukr">труп,</span> <span class="ukr">і</span> <span class="ukr">почав</span> <span
                            class="ukr">молитися</span>
                        <span class="ukr">за</span> <span class="ukr">мене.</span>
                        <span class="ukr">Бачите,</span> <span class="ukr">знову</span>
                        <span class="ukr">вона</span> <span class="ukr">стала</span>
                        <span class="ukr">мені</span> <span class="ukr">на</span> <span class="ukr">дорозі,</span> <span
                            class="ukr">та</span> <span class="ukr">церква.</span> <span class="ukr">Я</span> <span
                            class="ukr">переступив</span> <span class="ukr">через</span>
                        <span class="ukr">пасторів</span> <span class="ukr">труп,</span> <span class="ukr">а</span>
                        <span class="ukr">потім</span> <span class="ukr">вирядив</span> <span class="ukr">і</span> <span
                            class="ukr">начальника</span> <span class="ukr">факторії</span> <span
                            class="ukr">навздогін</span>
                        <span class="ukr">своїй</span> <span class="ukr">дочці,</span>
                        <span class="ukr">щоб</span> <span class="ukr">він</span> <span class="ukr">став</span> <span
                            class="ukr">перед</span> <span class="ukr">богом,</span> <span class="ukr">лихим</span>
                        <span class="ukr">богом</span> <span class="ukr">білих</span> <span class="ukr">людей…</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Знявся</span> <span class="ukr">страшний</span>
                        <span class="ukr">шарварок,</span> <span class="ukr">бо</span>
                        <span class="ukr">дали</span> <span class="ukr">знати</span>
                        <span class="ukr">поліції,</span> <span class="ukr">і</span>
                        <span class="ukr">мені</span> <span class="ukr">довелося</span>
                        <span class="ukr">знову</span> <span class="ukr">тікати.</span>
                        <span class="ukr">Я</span> <span class="ukr">подався</span>
                        <span class="ukr">в</span> <span class="ukr">бік</span> <span class="ukr">Великого</span> <span
                            class="ukr">Невільничого</span> <span class="ukr">озера</span>
                        <span class="ukr">і</span> <span class="ukr">долиною</span>
                        <span class="ukr">річки</span> <span class="ukr">Макензі</span>
                        <span class="ukr">добувся</span> <span class="ukr">до</span>
                        <span class="ukr">вічної</span> <span class="ukr">криги,</span>
                        <span class="ukr">перейшов</span> <span class="ukr">через</span> <span class="ukr">Білі</span>
                        <span class="ukr">скелі,</span> <span class="ukr">обігнув</span>
                        <span class="ukr">головне</span> <span class="ukr">Юконове</span> <span
                            class="ukr">коліно</span>
                        <span class="ukr">й</span> <span class="ukr">добрів</span>
                        <span class="ukr">аж</span> <span class="ukr">сюди.</span>
                        <span class="ukr">З</span> <span class="ukr">того</span> <span class="ukr">часу,</span> <span
                            class="ukr">опріч</span> <span class="ukr">вас,</span> <span class="ukr">не</span> <span
                            class="ukr">бачив</span> <span class="ukr">я</span> <span class="ukr">нікого</span> <span
                            class="ukr">з</span>
                        <span class="ukr">батькового</span> <span class="ukr">народу.</span>
                        <span class="ukr">Ви</span> <span class="ukr">перший</span>
                        <span class="ukr">і,</span> <span class="ukr">може,</span>
                        <span class="ukr">останній!</span> <span class="ukr">Ці</span>
                        <span class="ukr">люди</span> <span class="ukr">стали</span>
                        <span class="ukr">моїм</span> <span class="ukr">народом.</span>
                        <span class="ukr">Вони</span> <span class="ukr">прості</span>
                        <span class="ukr">й</span> <span class="ukr">нелукаві,</span>
                        <span class="ukr">і</span> <span class="ukr">я</span> <span class="ukr">здобув</span> <span
                            class="ukr">серед</span>
                        <span class="ukr">них</span> <span class="ukr">пошану.</span> <span class="ukr">Моя</span> <span
                            class="ukr">сила</span> <span class="ukr">тут</span> <span class="ukr">велика,</span> <span
                            class="ukr">і</span>
                        <span class="ukr">кожне</span> <span class="ukr">слово</span> <span class="ukr">моє</span> <span
                            class="ukr">їм</span> <span class="ukr">закон.</span> <span class="ukr">Тутешні</span> <span
                            class="ukr">жерці</span> <span class="ukr">слухаються</span> <span class="ukr">мене,</span>
                        <span class="ukr">а</span> <span class="ukr">то</span> <span class="ukr">б</span> <span
                            class="ukr">я</span> <span class="ukr">не</span> <span class="ukr">стерпів</span> <span
                            class="ukr">їх.</span> <span class="ukr">Отже,</span> <span class="ukr">коли</span> <span
                            class="ukr">я</span> <span class="ukr">щось</span>
                        <span class="ukr">кажу,</span> <span class="ukr">то</span> <span class="ukr">не</span> <span
                            class="ukr">тільки</span> <span class="ukr">від</span> <span class="ukr">самого</span> <span
                            class="ukr">себе,</span> <span class="ukr">а</span> <span class="ukr">від</span> <span
                            class="ukr">нас</span>
                        <span class="ukr">усіх.</span> <span class="ukr">Ми</span> <span class="ukr">хочемо,</span>
                        <span class="ukr">щоб</span> <span class="ukr">ви</span> <span class="ukr">пішли</span> <span
                            class="ukr">собі.</span>
                        <span class="ukr">Нам</span> <span class="ukr">вас</span> <span class="ukr">не</span> <span
                            class="ukr">треба.</span> <span class="ukr">Коли</span> <span class="ukr">ми</span> <span
                            class="ukr">дозволимо</span> <span class="ukr">сісти</span>
                        <span class="ukr">вам</span> <span class="ukr">при</span> <span class="ukr">нашому</span> <span
                            class="ukr">вогнищі,</span>
                        <span class="ukr">то</span> <span class="ukr">слідом</span>
                        <span class="ukr">за</span> <span class="ukr">вами</span> <span class="ukr">поприходять</span>
                        <span class="ukr">і</span> <span class="ukr">ваші</span> <span class="ukr">священики,</span>
                        <span class="ukr">і</span> <span class="ukr">ваша</span> <span class="ukr">церква,</span> <span
                            class="ukr">і</span>
                        <span class="ukr">ваші</span> <span class="ukr">боги.</span> <span class="ukr">Затямте</span>
                        <span class="ukr">собі:</span> <span class="ukr">кожного</span> <span class="ukr">білого,</span>
                        <span class="ukr">що</span> <span class="ukr">до</span> <span class="ukr">наших</span> <span
                            class="ukr">селищ</span> <span class="ukr">навернеться,</span> <span class="ukr">я</span>
                        <span class="ukr">присилую</span> <span class="ukr">зректися</span> <span
                            class="ukr">своєї</span>
                        <span class="ukr">віри.</span> <span class="ukr">Але</span>
                        <span class="ukr">ви</span> <span class="ukr">перший,</span>
                        <span class="ukr">і</span> <span class="ukr">я</span> <span class="ukr">дарую</span> <span
                            class="ukr">вам.</span>
                        <span class="ukr">Отже,</span> <span class="ukr">зважте</span> <span class="ukr">це</span> <span
                            class="ukr">і</span> <span class="ukr">йдіть</span> <span class="ukr">геть.</span> <span
                            class="ukr">І</span>
                        <span class="ukr">що</span> <span class="ukr">швидше</span> <span class="ukr">ви</span> <span
                            class="ukr">заберетеся</span> <span class="ukr">звідси,</span>
                        <span class="ukr">то</span> <span class="ukr">краще</span>
                        <span class="ukr">для</span> <span class="ukr">вас</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Я</span> <span
                            class="ukr">не</span> <span class="ukr">відповідаю</span> <span class="ukr">за</span> <span
                            class="ukr">своїх</span> <span class="ukr">братів,</span> <span class="ukr">—</span> <span
                            class="ukr">промовив</span> <span class="ukr">другий,</span> <span class="ukr">—</span>
                        <span class="ukr">задумливо</span> <span class="ukr">натоптуючи</span> <span
                            class="ukr">люльку.</span>
                        <span class="ukr">Гей</span> <span class="ukr">Стокард</span>
                        <span class="ukr">бував</span> <span class="ukr">іноді</span>
                        <span class="ukr">такий</span> <span class="ukr">самий</span>
                        <span class="ukr">розважний</span> <span class="ukr">у</span>
                        <span class="ukr">мові,</span> <span class="ukr">як</span>
                        <span class="ukr">і</span> <span class="ukr">гарячий</span>
                        <span class="ukr">у</span> <span class="ukr">вчинках.</span>
                        <span class="ukr">Однак</span> <span class="ukr">не</span>
                        <span class="ukr">завжди.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Я</span> <span class="ukr">добре</span> <span
                            class="ukr">знаю</span>
                        <span class="ukr">ваше</span> <span class="ukr">поріддя,</span> <span class="ukr">—</span> <span
                            class="ukr">відповів</span> <span class="ukr">перший.</span> <span class="ukr">—</span>
                        <span class="ukr">Вашого</span> <span class="ukr">братчика</span>
                        <span class="ukr">багато,</span> <span class="ukr">одні</span>
                        <span class="ukr">торують</span> <span class="ukr">дорогу</span> <span class="ukr">іншим.</span>
                        <span class="ukr">Згодом</span> <span class="ukr">вони</span> <span
                            class="ukr">поприходять</span> <span class="ukr">сюди</span>
                        <span class="ukr">й</span> <span class="ukr">посядуть</span>
                        <span class="ukr">усе</span> <span class="ukr">чисто.</span>
                        <span class="ukr">Але</span> <span class="ukr">за</span> <span class="ukr">мого</span> <span
                            class="ukr">життя</span> <span class="ukr">цьому</span> <span class="ukr">не</span> <span
                            class="ukr">бути,</span> <span class="ukr">Я</span> <span class="ukr">чув,</span> <span
                            class="ukr">що</span>
                        <span class="ukr">англійці</span> <span class="ukr">вже</span> <span
                            class="ukr">отаборилися</span> <span class="ukr">коло</span>
                        <span class="ukr">верхів'я</span> <span class="ukr">Великої</span> <span
                            class="ukr">річки,</span>
                        <span class="ukr">а</span> <span class="ukr">нижче,</span>
                        <span class="ukr">коло</span> <span class="ukr">її</span> <span class="ukr">гирла</span> <span
                            class="ukr">—</span>
                        <span class="ukr">росіяни.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Гей</span> <span class="ukr">Стокард</span> <span
                            class="ukr">вражено</span>
                        <span class="ukr">зиркнув</span>
                        <span class="ukr">на</span> <span class="ukr">метиса.</span>
                        <span class="ukr">Його</span> <span class="ukr">збентежила</span> <span class="ukr">така</span>
                        <span class="ukr">географічна</span> <span class="ukr">новина.</span> <span
                            class="ukr">На</span> <span class="ukr">посту</span> <span class="ukr">Гудзонової</span>
                        <span class="ukr">компанії</span> <span class="ukr">у</span>
                        <span class="ukr">Форті</span> <span class="ukr">Юконі</span>
                        <span class="ukr">інакше</span> <span class="ukr">уявляли</span> <span class="ukr">собі</span>
                        <span class="ukr">течію</span> <span class="ukr">Великої</span> <span class="ukr">річки,</span>
                        <span class="ukr">гадаючи,</span>
                        <span class="ukr">що</span> <span class="ukr">вона</span> <span class="ukr">вливається</span>
                        <span class="ukr">просто</span>
                        <span class="ukr">до</span> <span class="ukr">Льодовитого</span> <span
                            class="ukr">океану.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Значить,</span> <span
                            class="ukr">Юкон</span> <span class="ukr">упадає</span> <span class="ukr">в</span> <span
                            class="ukr">Берінгове</span> <span class="ukr">море?</span>
                        <span class="ukr">—</span> <span class="ukr">спитав</span>
                        <span class="ukr">він.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Не</span> <span
                            class="ukr">знаю,</span> <span class="ukr">але</span> <span class="ukr">там,</span> <span
                            class="ukr">на</span> <span class="ukr">пониззі</span> <span class="ukr">Юкону,</span>
                        <span class="ukr">—</span> <span class="ukr">росіяни.</span>
                        <span class="ukr">Проте</span> <span class="ukr">це</span>
                        <span class="ukr">до</span> <span class="ukr">справи</span>
                        <span class="ukr">не</span> <span class="ukr">стосується.</span> <span
                            class="ukr">Поїдьте</span>
                        <span class="ukr">самі</span> <span class="ukr">туди</span>
                        <span class="ukr">й</span> <span class="ukr">побачите.</span>
                        <span class="ukr">Або</span> <span class="ukr">вертайтеся</span> <span class="ukr">до</span>
                        <span class="ukr">своїх</span> <span class="ukr">білих.</span> <span class="ukr">А</span> <span
                            class="ukr">вгору</span> <span class="ukr">по</span> <span class="ukr">Коюкуку</span> <span
                            class="ukr">ви</span> <span class="ukr">не</span> <span class="ukr">попливете,</span> <span
                            class="ukr">поки</span>
                        <span class="ukr">жерці</span> <span class="ukr">та</span>
                        <span class="ukr">вояки</span> <span class="ukr">виконують</span> <span class="ukr">мою</span>
                        <span class="ukr">волю.</span> <span class="ukr">Так</span> <span class="ukr">наказую</span>
                        <span class="ukr">я,</span> <span class="ukr">Батіст</span> <span class="ukr">Рудий,</span>
                        <span class="ukr">а</span>
                        <span class="ukr">моє</span> <span class="ukr">слово</span> <span class="ukr">—</span> <span
                            class="ukr">закон,</span> <span class="ukr">бо</span> <span class="ukr">мені</span> <span
                            class="ukr">підлягає</span> <span class="ukr">цей</span> <span class="ukr">народ.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">А</span> <span
                            class="ukr">що,</span> <span class="ukr">як</span> <span class="ukr">я</span> <span
                            class="ukr">не</span> <span class="ukr">піду</span> <span class="ukr">ані</span> <span
                            class="ukr">до</span> <span class="ukr">росіян,</span> <span class="ukr">ані</span>
                        <span class="ukr">назад</span> <span class="ukr">до</span> <span class="ukr">англійців?</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Тоді</span> <span
                            class="ukr">хутко</span> <span class="ukr">подастеся</span>
                        <span class="ukr">до</span> <span class="ukr">свого</span>
                        <span class="ukr">бога,</span> <span class="ukr">до</span>
                        <span class="ukr">лихого</span> <span class="ukr">бога</span>
                        <span class="ukr">білих</span> <span class="ukr">людей!</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Над</span> <span class="ukr">північним</span> <span
                            class="ukr">обрієм</span>
                        <span class="ukr">раптом</span> <span class="ukr">визирнуло</span> <span
                            class="ukr">багряне</span>
                        <span class="ukr">сонце,</span> <span class="ukr">що</span>
                        <span class="ukr">наче</span> <span class="ukr">скапувало</span> <span
                            class="ukr">кров'ю.</span>
                        <span class="ukr">Батіст</span> <span class="ukr">Рудий</span>
                        <span class="ukr">підвівся,</span> <span class="ukr">кивнув</span> <span
                            class="ukr">головою</span>
                        <span class="ukr">й</span> <span class="ukr">пішов</span> <span class="ukr">до</span> <span
                            class="ukr">свого</span>
                        <span class="ukr">табору.</span> <span class="ukr">По</span> <span class="ukr">землі</span>
                        <span class="ukr">стелилися</span>
                        <span class="ukr">малинові</span> <span class="ukr">тіні,</span> <span class="ukr">десь</span>
                        <span class="ukr">виспівувала</span> <span class="ukr">вільшанка.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Гей</span> <span class="ukr">Стокард</span> <span
                            class="ukr">докурював</span>
                        <span class="ukr">люльку</span>
                        <span class="ukr">коло</span> <span class="ukr">багаття.</span>
                        <span class="ukr">В</span> <span class="ukr">димові</span>
                        <span class="ukr">й</span> <span class="ukr">жаринах</span>
                        <span class="ukr">ввижалося</span> <span class="ukr">йому</span> <span
                            class="ukr">незнане</span> <span class="ukr">верхів'я</span> <span
                            class="ukr">Коюкуку,</span>
                        <span class="ukr">цієї</span> <span class="ukr">чудної</span>
                        <span class="ukr">річки,</span> <span class="ukr">що</span>
                        <span class="ukr">неподалік</span> <span class="ukr">від</span>
                        <span class="ukr">табору</span> <span class="ukr">кінчала</span> <span class="ukr">свою</span>
                        <span class="ukr">арктичну</span> <span class="ukr">мандрівку</span>
                        <span class="ukr">і</span> <span class="ukr">вливалася</span>
                        <span class="ukr">до</span> <span class="ukr">каламутного</span> <span class="ukr">Юкону.</span>
                        <span class="ukr">Там</span> <span class="ukr">у</span> <span class="ukr">верхів'ї,</span> <span
                            class="ukr">коли</span>
                        <span class="ukr">йняти</span> <span class="ukr">віри</span>
                        <span class="ukr">передсмертним</span> <span class="ukr">словам</span> <span
                            class="ukr">матроса</span>
                        <span class="ukr">з</span> <span class="ukr">розбитого</span>
                        <span class="ukr">корабля,</span> <span class="ukr">що</span>
                        <span class="ukr">потім</span> <span class="ukr">витримав</span> <span
                            class="ukr">страшну</span>
                        <span class="ukr">мандрівку</span> <span class="ukr">суходолом,</span> <span
                            class="ukr">коли</span>
                        <span class="ukr">йняти</span> <span class="ukr">віри</span>
                        <span class="ukr">пляшці</span> <span class="ukr">з</span>
                        <span class="ukr">золотим</span> <span class="ukr">піском,</span> <span class="ukr">що</span>
                        <span class="ukr">була</span> <span class="ukr">схована</span> <span class="ukr">в</span> <span
                            class="ukr">його</span> <span class="ukr">торбі,</span> <span class="ukr">—</span> <span
                            class="ukr">там</span>
                        <span class="ukr">десь</span> <span class="ukr">у</span> <span class="ukr">верхів'ї,</span>
                        <span class="ukr">в</span> <span class="ukr">царстві</span> <span class="ukr">вічної</span>
                        <span class="ukr">криги,</span> <span class="ukr">містилася</span> <span
                            class="ukr">скарбниця</span>
                        <span class="ukr">Півночі.</span> <span class="ukr">І,</span>
                        <span class="ukr">наче</span> <span class="ukr">сторож</span>
                        <span class="ukr">на</span> <span class="ukr">воротях,</span>
                        <span class="ukr">Батіст</span> <span class="ukr">Рудий,</span>
                        <span class="ukr">цей</span> <span class="ukr">англійський</span> <span
                            class="ukr">покруч</span>
                        <span class="ukr">і</span> <span class="ukr">ренегат,</span>
                        <span class="ukr">має</span> <span class="ukr">заступити</span>
                        <span class="ukr">йому</span> <span class="ukr">дорогу?!</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ет,</span> <span
                            class="ukr">пусте!</span> <span class="ukr">—</span> <span class="ukr">Він</span> <span
                            class="ukr">розкидав</span> <span class="ukr">ногою</span>
                        <span class="ukr">жар,</span> <span class="ukr">підвівся</span>
                        <span class="ukr">на</span> <span class="ukr">весь</span> <span class="ukr">зріст,</span> <span
                            class="ukr">спроквола</span>
                        <span class="ukr">потягнувся</span> <span class="ukr">і</span>
                        <span class="ukr">безтурботно</span> <span class="ukr">глянув</span> <span class="ukr">на</span>
                        <span class="ukr">обрій,</span> <span class="ukr">охоплений</span>
                        <span class="ukr">загравою.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">Гей</span> <span class="ukr">Стокард</span>
                        <span class="ukr">добірно</span> <span class="ukr">вилаявся.</span> <span
                            class="ukr">Шорсткі</span>
                        <span class="ukr">односкладові</span> <span class="ukr">англійські</span> <span
                            class="ukr">слова</span>
                        <span class="ukr">пролунали</span> <span class="ukr">різко</span> <span class="ukr">й</span>
                        <span class="ukr">брутально.</span> <span class="ukr">Його</span>
                        <span class="ukr">дружина</span> <span class="ukr">підвела</span> <span
                            class="ukr">голову</span>
                        <span class="ukr">від</span> <span class="ukr">казанків</span>
                        <span class="ukr">та</span> <span class="ukr">сковорід</span>
                        <span class="ukr">і</span> <span class="ukr">собі</span> <span class="ukr">глянула</span> <span
                            class="ukr">понад</span> <span class="ukr">берег.</span> <span class="ukr">Вона</span> <span
                            class="ukr">була</span> <span class="ukr">індіянка</span> <span class="ukr">з</span> <span
                            class="ukr">Тесліну,</span> <span class="ukr">проте</span> <span class="ukr">вже</span>
                        <span class="ukr">добре</span> <span class="ukr">зналася</span> <span class="ukr">на</span>
                        <span class="ukr">всіх</span> <span class="ukr">відтінках</span> <span class="ukr">лайки</span>
                        <span class="ukr">свого</span> <span class="ukr">білого</span>
                        <span class="ukr">чоловіка.</span> <span class="ukr">З</span>
                        <span class="ukr">тону</span> <span class="ukr">його</span>
                        <span class="ukr">і</span> <span class="ukr">з</span> <span class="ukr">того,</span> <span
                            class="ukr">які</span>
                        <span class="ukr">вибирав</span> <span class="ukr">він</span> <span class="ukr">слова,</span>
                        <span class="ukr">вона</span> <span class="ukr">завжди</span> <span class="ukr">могла</span>
                        <span class="ukr">визначити,</span> <span class="ukr">чи</span> <span class="ukr">йдеться</span>
                        <span class="ukr">про</span> <span class="ukr">розмотаний</span> <span
                            class="ukr">ремінець</span>
                        <span class="ukr">на</span> <span class="ukr">лижві,</span>
                        <span class="ukr">чи</span> <span class="ukr">їм</span> <span class="ukr">загрожує</span> <span
                            class="ukr">смертельна</span>
                        <span class="ukr">небезпека.</span> <span class="ukr">Тепер</span> <span class="ukr">вона</span>
                        <span class="ukr">побачила,</span> <span class="ukr">що</span> <span class="ukr">сталося</span>
                        <span class="ukr">щось</span> <span class="ukr">варте</span> <span class="ukr">уваги.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Довгий</span> <span class="ukr">човен</span> <span
                            class="ukr">перетинав</span>
                        <span class="ukr">річку,</span> <span class="ukr">простуючи</span> <span class="ukr">до</span>
                        <span class="ukr">невеличкої</span> <span class="ukr">затоки</span>
                        <span class="ukr">біля</span> <span class="ukr">табору;</span>
                        <span class="ukr">на</span> <span class="ukr">веслах</span>
                        <span class="ukr">грало</span> <span class="ukr">проміння</span> <span
                            class="ukr">вечірнього</span>
                        <span class="ukr">сонця.</span> <span class="ukr">Гей</span>
                        <span class="ukr">Стокард</span> <span class="ukr">пильно</span> <span
                            class="ukr">придивлявся</span>
                        <span class="ukr">човнові.</span> <span class="ukr">Троє</span>
                        <span class="ukr">гребців</span> <span class="ukr">ритмічно</span> <span
                            class="ukr">піднімали</span>
                        <span class="ukr">й</span> <span class="ukr">опускали</span>
                        <span class="ukr">весла,</span> <span class="ukr">але</span>
                        <span class="ukr">Стокард</span> <span class="ukr">мав</span>
                        <span class="ukr">на</span> <span class="ukr">оці</span> <span class="ukr">тільки</span> <span
                            class="ukr">одного,</span>
                        <span class="ukr">з</span> <span class="ukr">червоною</span>
                        <span class="ukr">хусткою,</span> <span class="ukr">пов'язаною</span> <span
                            class="ukr">навколо</span>
                        <span class="ukr">голови.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Біле!</span> <span class="ukr">Агов,</span> <span
                            class="ukr">Біле!</span> <span class="ukr">—</span> <span class="ukr">гукнув</span> <span
                            class="ukr">Стокард.</span> </p>
                    <p class="ukrainian"> <span class="ukr">З</span> <span class="ukr">сусіднього</span> <span
                            class="ukr">намету,</span>
                        <span class="ukr">позіхаючи,</span>
                        <span class="ukr">потягаючись</span> <span class="ukr">і</span>
                        <span class="ukr">протираючи</span> <span class="ukr">заспані</span> <span
                            class="ukr">очі,</span> <span class="ukr">вийшов</span> <span class="ukr">незграбний</span>
                        <span class="ukr">велетень,</span> <span class="ukr">весь</span> <span class="ukr">ніби</span>
                        <span class="ukr">на</span> <span class="ukr">розхитаних</span> <span class="ukr">шрубах.</span>
                        <span class="ukr">Глянувши</span>
                        <span class="ukr">на</span> <span class="ukr">човна,</span>
                        <span class="ukr">він</span> <span class="ukr">миттю</span>
                        <span class="ukr">прийшов</span> <span class="ukr">до</span>
                        <span class="ukr">пам'яті.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">А</span> <span class="ukr">хай</span> <span
                            class="ukr">тобі</span>
                        <span class="ukr">грець!</span> <span class="ukr">Та</span> <span class="ukr">це</span> <span
                            class="ukr">ж</span>
                        <span class="ukr">той</span> <span class="ukr">проклятий</span> <span class="ukr">лоцман</span>
                        <span class="ukr">небесний!</span>
                        <span class="ukr">І</span> <span class="ukr">притарганила</span> <span class="ukr">ж</span>
                        <span class="ukr">його</span> <span class="ukr">лиха</span>
                        <span class="ukr">година!</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">Гей</span> <span class="ukr">Стокард</span>
                        <span class="ukr">скрушно</span> <span class="ukr">кивнув</span> <span
                            class="ukr">головою</span>
                        <span class="ukr">й</span> <span class="ukr">мимохіть</span>
                        <span class="ukr">потягся</span> <span class="ukr">до</span>
                        <span class="ukr">рушниці,</span> <span class="ukr">але</span>
                        <span class="ukr">стримався</span> <span class="ukr">і</span>
                        <span class="ukr">тільки</span> <span class="ukr">здвигнув</span> <span
                            class="ukr">плечима.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">А</span> <span
                            class="ukr">його</span> <span class="ukr">таки</span> <span class="ukr">слід</span> <span
                            class="ukr">підстрелити,</span> <span class="ukr">та</span>
                        <span class="ukr">й</span> <span class="ukr">буде</span> <span class="ukr">по</span> <span
                            class="ukr">всьому!</span> <span class="ukr">—</span> <span class="ukr">додав</span> <span
                            class="ukr">Біл.</span> <span class="ukr">—</span> <span class="ukr">Бо</span> <span
                            class="ukr">він</span>
                        <span class="ukr">може</span> <span class="ukr">накоїти</span> <span class="ukr">нам</span>
                        <span class="ukr">усякого</span> <span class="ukr">лиха.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Одначе</span> <span class="ukr">Гей</span> <span
                            class="ukr">Стокард</span>
                        <span class="ukr">відкинув</span>
                        <span class="ukr">такий</span> <span class="ukr">рішучий</span>
                        <span class="ukr">захід;</span> <span class="ukr">він</span>
                        <span class="ukr">одвернувся</span> <span class="ukr">і</span>
                        <span class="ukr">звелів</span> <span class="ukr">дружині</span> <span
                            class="ukr">братися</span>
                        <span class="ukr">знов</span> <span class="ukr">за</span> <span class="ukr">роботу,</span> <span
                            class="ukr">а</span> <span class="ukr">Біла</span> <span class="ukr">відіслав</span> <span
                            class="ukr">назад</span> <span class="ukr">до</span> <span class="ukr">намету.</span> <span
                            class="ukr">Човен</span> <span class="ukr">тим</span> <span class="ukr">часом</span> <span
                            class="ukr">пристав</span> <span class="ukr">до</span> <span class="ukr">берега.</span>
                        <span class="ukr">Поки</span> <span class="ukr">двоє</span> <span class="ukr">індіян</span>
                        <span class="ukr">припинали</span> <span class="ukr">його</span>
                        <span class="ukr">в</span> <span class="ukr">затоці,</span>
                        <span class="ukr">білий,</span> <span class="ukr">той</span>
                        <span class="ukr">самий,</span> <span class="ukr">що</span>
                        <span class="ukr">мав</span> <span class="ukr">на</span> <span class="ukr">голові</span> <span
                            class="ukr">такий</span> <span class="ukr">чудернацький</span> <span
                            class="ukr">убір,</span>
                        <span class="ukr">вийшов</span> <span class="ukr">на</span>
                        <span class="ukr">пісок.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Як</span> <span class="ukr">апостол</span> <span
                            class="ukr">Павло,</span>
                        <span class="ukr">кажу:</span> <span class="ukr">хай</span>
                        <span class="ukr">буде</span> <span class="ukr">мир</span>
                        <span class="ukr">вам</span> <span class="ukr">і</span> <span class="ukr">ласка</span> <span
                            class="ukr">божа!</span> </p>
                    <p class="ukrainian"> <span class="ukr">Його</span> <span class="ukr">зустрінуто</span> <span
                            class="ukr">понурою</span>
                        <span class="ukr">мовчанкою.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Вітаю</span> <span class="ukr">Гея</span> <span
                            class="ukr">Стокарда,</span> <span class="ukr">—</span> <span class="ukr">провадив</span>
                        <span class="ukr">він</span> <span class="ukr">далі,</span> <span class="ukr">—</span> <span
                            class="ukr">великого</span> <span class="ukr">блюзніра</span> <span class="ukr">й</span>
                        <span class="ukr">нечестивця.</span> <span class="ukr">Знаю,</span>
                        <span class="ukr">що</span> <span class="ukr">в</span> <span class="ukr">твоєму</span> <span
                            class="ukr">серці</span> <span class="ukr">панує</span> <span class="ukr">могутній</span>
                        <span class="ukr">бог</span> <span class="ukr">здобутку,</span>
                        <span class="ukr">а</span> <span class="ukr">в</span> <span class="ukr">голові</span> <span
                            class="ukr">—</span>
                        <span class="ukr">хитрощі</span> <span class="ukr">диявольські,</span> <span
                            class="ukr">що</span>
                        <span class="ukr">в</span> <span class="ukr">наметі</span>
                        <span class="ukr">твоєму</span> <span class="ukr">сидить</span>
                        <span class="ukr">полюбовниця,</span> <span class="ukr">і</span> <span class="ukr">живете</span>
                        <span class="ukr">ви</span> <span class="ukr">у</span> <span class="ukr">великих</span> <span
                            class="ukr">гріхах.</span>
                        <span class="ukr">Отже,</span> <span class="ukr">я,</span>
                        <span class="ukr">посланець</span> <span class="ukr">божий,</span> <span
                            class="ukr">Стерджес</span>
                        <span class="ukr">Овен,</span> <span class="ukr">наказую</span>
                        <span class="ukr">вам:</span> <span class="ukr">у</span> <span class="ukr">пустині</span> <span
                            class="ukr">цій</span> <span class="ukr">покайтеся</span> <span class="ukr">й</span> <span
                            class="ukr">зречіться</span> <span class="ukr">розпусти!</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Та</span> <span
                            class="ukr">киньте-бо</span> <span class="ukr">це</span> <span
                            class="ukr">святобожницьке</span>
                        <span class="ukr">голосіння!</span> <span class="ukr">—</span>
                        <span class="ukr">гукнув</span> <span class="ukr">роздратований</span> <span
                            class="ukr">Стокард.</span> <span class="ukr">—</span> <span class="ukr">Вам</span> <span
                            class="ukr">воно</span> <span class="ukr">ще</span>
                        <span class="ukr">знадобиться</span>
                        <span class="ukr">он</span> <span class="ukr">там,</span> <span class="ukr">у</span> <span
                            class="ukr">Батіста</span> <span class="ukr">Рудого,</span> <span class="ukr">ще</span>
                        <span class="ukr">й</span> <span class="ukr">не</span> <span class="ukr">стане.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Він</span> <span class="ukr">показав</span> <span
                            class="ukr">рукою</span> <span class="ukr">на</span> <span class="ukr">індіянський</span>
                        <span class="ukr">табір,</span>
                        <span class="ukr">звідки</span> <span class="ukr">метис</span>
                        <span class="ukr">пильно</span> <span class="ukr">приглядався,</span> <span
                            class="ukr">що</span>
                        <span class="ukr">воно</span> <span class="ukr">за</span> <span class="ukr">нові</span> <span
                            class="ukr">приблуди</span> <span class="ukr">з'явилися.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Стерджес</span> <span class="ukr">Овен,</span>
                        <span class="ukr">просвітитель</span> <span class="ukr">і</span> <span
                            class="ukr">господній</span> <span class="ukr">апостол</span> <span class="ukr">на</span>
                        <span class="ukr">землі,</span> <span class="ukr">спустився</span>
                        <span class="ukr">стрімким</span> <span class="ukr">берегом</span> <span class="ukr">і</span>
                        <span class="ukr">наказав</span> <span class="ukr">повиносити</span>
                        <span class="ukr">з</span> <span class="ukr">човна</span> <span class="ukr">всі</span> <span
                            class="ukr">його</span>
                        <span class="ukr">пакунки.</span> <span class="ukr">Стокард</span>
                        <span class="ukr">подався</span> <span class="ukr">за</span>
                        <span class="ukr">ним.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Стривайте!</span> <span
                            class="ukr">—</span> <span class="ukr">сказав</span> <span class="ukr">він</span> <span
                            class="ukr">і,</span> <span class="ukr">схопивши</span> <span class="ukr">його</span> <span
                            class="ukr">за</span> <span class="ukr">плече,</span> <span class="ukr">повернув</span>
                        <span class="ukr">до</span> <span class="ukr">себе.</span> <span class="ukr">—</span> <span
                            class="ukr">Ви</span> <span class="ukr">цінуєте</span>
                        <span class="ukr">своє</span> <span class="ukr">життя?</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Моє</span> <span
                            class="ukr">життя</span> <span class="ukr">в</span> <span class="ukr">руках</span> <span
                            class="ukr">господніх.</span> <span class="ukr">Я</span> <span class="ukr">лиш</span> <span
                            class="ukr">працюю</span> <span class="ukr">у</span>
                        <span class="ukr">його</span> <span class="ukr">виноградникові,</span> <span
                            class="ukr">—</span>
                        <span class="ukr">врочисто</span> <span class="ukr">відказав</span> <span
                            class="ukr">місіонер.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Та</span> <span
                            class="ukr">киньте-бо</span> <span class="ukr">свої</span> <span
                            class="ukr">теревенії</span>
                        <span class="ukr">Ви</span> <span class="ukr">що,</span> <span class="ukr">хочете</span> <span
                            class="ukr">стати</span> <span class="ukr">мучеником?</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Хай</span> <span
                            class="ukr">буде</span> <span class="ukr">воля</span> <span class="ukr">господня!</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Аякже,</span> <span
                            class="ukr">воля</span> <span class="ukr">господня</span> <span class="ukr">буде,</span>
                        <span class="ukr">коли</span> <span class="ukr">ви</span> <span class="ukr">так</span> <span
                            class="ukr">хочете.</span> <span class="ukr">Але</span>
                        <span class="ukr">я</span> <span class="ukr">вас</span> <span class="ukr">попереджаю,</span>
                        <span class="ukr">а</span> <span class="ukr">вже</span> <span class="ukr">самі</span> <span
                            class="ukr">дивіться,</span> <span class="ukr">слухатись</span>
                        <span class="ukr">чи</span> <span class="ukr">ні.</span> <span class="ukr">Якщо</span> <span
                            class="ukr">ви</span>
                        <span class="ukr">тут</span> <span class="ukr">залишитесь,</span>
                        <span class="ukr">то</span> <span class="ukr">вам</span> <span class="ukr">кінець.</span> <span
                            class="ukr">І</span>
                        <span class="ukr">не</span> <span class="ukr">тільки</span> <span class="ukr">вам,</span> <span
                            class="ukr">а</span>
                        <span class="ukr">й</span> <span class="ukr">нам</span> <span class="ukr">усім:</span> <span
                            class="ukr">Білові,</span> <span class="ukr">дружині</span> <span class="ukr">моїй…</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Вона</span> <span
                            class="ukr">дочка</span> <span class="ukr">дияволова</span> <span class="ukr">й</span> <span
                            class="ukr">не</span> <span class="ukr">зважає</span> <span class="ukr">на</span> <span
                            class="ukr">слово</span> <span class="ukr">боже.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">…і</span> <span
                            class="ukr">мені</span> <span class="ukr">теж.</span> <span class="ukr">Через</span> <span
                            class="ukr">вас</span> <span class="ukr">усім</span> <span class="ukr">нам</span> <span
                            class="ukr">загрожує</span> <span class="ukr">смертельна</span>
                        <span class="ukr">небезпека.</span> <span class="ukr">Останню</span> <span
                            class="ukr">зиму</span> <span class="ukr">я</span> <span class="ukr">пережив</span> <span
                            class="ukr">і</span> <span class="ukr">перемучився</span> <span class="ukr">з</span> <span
                            class="ukr">вами</span> <span class="ukr">разом</span> <span class="ukr">і</span> <span
                            class="ukr">знаю,</span> <span class="ukr">що</span>
                        <span class="ukr">ви</span> <span class="ukr">дуже</span> <span class="ukr">добра</span> <span
                            class="ukr">людина.</span> <span class="ukr">Але</span> <span class="ukr">розуму</span>
                        <span class="ukr">вам</span> <span class="ukr">бракує.</span> <span class="ukr">Звісно,</span>
                        <span class="ukr">це</span> <span class="ukr">поштивна</span> <span class="ukr">місія</span>
                        <span class="ukr">—</span> <span class="ukr">навертати</span>
                        <span class="ukr">поганців</span> <span class="ukr">на</span>
                        <span class="ukr">путь</span> <span class="ukr">спасенну,</span> <span class="ukr">але</span>
                        <span class="ukr">ж</span> <span class="ukr">треба</span> <span class="ukr">братися</span> <span
                            class="ukr">до</span>
                        <span class="ukr">неї</span> <span class="ukr">бодай</span> <span class="ukr">з</span> <span
                            class="ukr">якимось</span> <span class="ukr">глуздом.</span> <span class="ukr">Тут</span>
                        <span class="ukr">живе</span> <span class="ukr">Батіст</span> <span class="ukr">Рудий,</span>
                        <span class="ukr">не</span> <span class="ukr">індіянин,</span> <span class="ukr">а</span> <span
                            class="ukr">людина</span> <span class="ukr">нашої</span> <span class="ukr">крові,</span>
                        <span class="ukr">такий</span> <span class="ukr">упертий,</span> <span class="ukr">що</span>
                        <span class="ukr">й</span> <span class="ukr">мене</span> <span class="ukr">перевершив,</span>
                        <span class="ukr">і</span> <span class="ukr">такий</span> <span class="ukr">запеклий</span>
                        <span class="ukr">фанатик,</span> <span class="ukr">як</span>
                        <span class="ukr">ви.</span> <span class="ukr">Коли</span>
                        <span class="ukr">вас</span> <span class="ukr">двоє</span>
                        <span class="ukr">зійдеться,</span> <span class="ukr">чортзна-що</span> <span
                            class="ukr">може</span>
                        <span class="ukr">статися,</span> <span class="ukr">а</span>
                        <span class="ukr">я</span> <span class="ukr">вплутуватися</span> <span class="ukr">у</span>
                        <span class="ukr">ваші</span> <span class="ukr">справи</span>
                        <span class="ukr">не</span> <span class="ukr">хочу,</span>
                        <span class="ukr">розумієте,</span> <span class="ukr">не</span>
                        <span class="ukr">хочу!</span> <span class="ukr">Тож</span>
                        <span class="ukr">послухайте</span> <span class="ukr">моєї</span> <span
                            class="ukr">поради</span> <span class="ukr">й</span> <span class="ukr">не</span> <span
                            class="ukr">гаючись</span> <span class="ukr">забирайтеся</span>
                        <span class="ukr">геть</span> <span class="ukr">звідси.</span>
                        <span class="ukr">Пливіть</span> <span class="ukr">униз</span>
                        <span class="ukr">і</span> <span class="ukr">потрапите</span>
                        <span class="ukr">до</span> <span class="ukr">росіян.</span>
                        <span class="ukr">Там,</span> <span class="ukr">певне,</span>
                        <span class="ukr">є</span> <span class="ukr">православні</span>
                        <span class="ukr">священики;</span> <span class="ukr">вони</span> <span
                            class="ukr">покажуть</span> <span class="ukr">вам</span> <span class="ukr">безпечний</span>
                        <span class="ukr">шлях</span> <span class="ukr">до</span> <span class="ukr">Берінгового</span>
                        <span class="ukr">моря.</span>
                        <span class="ukr">Юкон,</span> <span class="ukr">між</span>
                        <span class="ukr">іншим,</span> <span class="ukr">вливається</span> <span
                            class="ukr">туди,</span>
                        <span class="ukr">а</span> <span class="ukr">звідти</span>
                        <span class="ukr">вже</span> <span class="ukr">не</span> <span class="ukr">важко</span> <span
                            class="ukr">дістатися</span>
                        <span class="ukr">до</span> <span class="ukr">цивілізованого</span> <span
                            class="ukr">світу.</span> <span class="ukr">Повірте</span>
                        <span class="ukr">моєму</span> <span class="ukr">слову</span>
                        <span class="ukr">й</span> <span class="ukr">забирайтеся</span>
                        <span class="ukr">звідси</span> <span class="ukr">якнайшвидше!</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Хто</span> <span class="ukr">має</span> <span
                            class="ukr">бога</span>
                        <span class="ukr">в</span> <span class="ukr">серці,</span> <span class="ukr">а</span> <span
                            class="ukr">святе</span>
                        <span class="ukr">євангеліє</span> <span class="ukr">в</span> <span class="ukr">руках,</span>
                        <span class="ukr">той</span> <span class="ukr">не</span> <span class="ukr">боїться</span> <span
                            class="ukr">ані</span>
                        <span class="ukr">підступів</span> <span class="ukr">людських,</span> <span
                            class="ukr">ані</span> <span class="ukr">хитрощів</span> <span
                            class="ukr">дияволових!</span> <span class="ukr">—</span> <span class="ukr">уперто</span>
                        <span class="ukr">проказав</span>
                        <span class="ukr">місіонер.</span> <span class="ukr">—</span>
                        <span class="ukr">Я</span> <span class="ukr">піду</span> <span class="ukr">до</span> <span
                            class="ukr">тієї</span>
                        <span class="ukr">страшної</span> <span class="ukr">людини</span>
                        <span class="ukr">і</span> <span class="ukr">позмагаюся</span>
                        <span class="ukr">з</span> <span class="ukr">нею.</span> <span class="ukr">Краще</span> <span
                            class="ukr">повернути</span>
                        <span class="ukr">в</span> <span class="ukr">лоно</span> <span class="ukr">церкви</span> <span
                            class="ukr">одну</span> <span class="ukr">заблукану</span> <span class="ukr">вівцю,</span>
                        <span class="ukr">аніж</span> <span class="ukr">навернути</span> <span class="ukr">тисячу</span>
                        <span class="ukr">поганців.</span> <span class="ukr">Дужий</span> <span class="ukr">у</span>
                        <span class="ukr">лихому</span> <span class="ukr">може</span> <span class="ukr">бути</span>
                        <span class="ukr">дужий</span> <span class="ukr">і</span> <span class="ukr">в</span> <span
                            class="ukr">доброму.</span>
                        <span class="ukr">Приклад</span>
                        <span class="ukr">тому</span> <span class="ukr">маємо</span>
                        <span class="ukr">в</span> <span class="ukr">тарсіянині</span>
                        <span class="ukr">Савлові,</span> <span class="ukr">що</span>
                        <span class="ukr">пішов</span> <span class="ukr">у</span> <span class="ukr">Дамаск,</span> <span
                            class="ukr">аби</span> <span class="ukr">християнських</span> <span
                            class="ukr">невільників</span> <span class="ukr">перегнати</span> <span
                            class="ukr">до</span> <span class="ukr">Єрусалиму.</span> <span class="ukr">І</span> <span
                            class="ukr">вчувся</span> <span class="ukr">йому</span> <span class="ukr">голос</span> <span
                            class="ukr">спасителів,</span>
                        <span class="ukr">кажучи:</span> <span class="ukr">"Савле,</span> <span
                            class="ukr">Савле,</span>
                        <span class="ukr">нащо</span> <span class="ukr">гониш</span>
                        <span class="ukr">мене?"</span> <span class="ukr">І</span>
                        <span class="ukr">з</span> <span class="ukr">того</span> <span class="ukr">часу</span> <span
                            class="ukr">привернувся</span>
                        <span class="ukr">Савл,</span> <span class="ukr">він</span>
                        <span class="ukr">же</span> <span class="ukr">й</span> <span class="ukr">Павло,</span> <span
                            class="ukr">до</span>
                        <span class="ukr">господа</span> <span class="ukr">Ісуса</span> <span class="ukr">Христа</span>
                        <span class="ukr">і</span> <span class="ukr">був</span> <span class="ukr">великий</span> <span
                            class="ukr">і</span>
                        <span class="ukr">горливий,</span> <span class="ukr">рятуючи</span> <span
                            class="ukr">душі</span> <span class="ukr">людські.</span> <span class="ukr">О</span> <span
                            class="ukr">святий</span> <span class="ukr">Павле,</span> <span class="ukr">так</span> <span
                            class="ukr">само,</span> <span class="ukr">як</span> <span class="ukr">і</span> <span
                            class="ukr">ти,</span> <span class="ukr">працюю</span>
                        <span class="ukr">я</span> <span class="ukr">в</span> <span class="ukr">саду</span> <span
                            class="ukr">Ісусовому.</span>
                        <span class="ukr">Люблю</span> <span class="ukr">його</span>
                        <span class="ukr">й</span> <span class="ukr">терплю</span>
                        <span class="ukr">напасть</span> <span class="ukr">і</span>
                        <span class="ukr">лихо,</span> <span class="ukr">глузування</span> <span class="ukr">й</span>
                        <span class="ukr">зневагу,</span> <span class="ukr">біль</span> <span class="ukr">і</span> <span
                            class="ukr">муку,</span> <span class="ukr">і</span> <span class="ukr">все</span> <span
                            class="ukr">його</span>
                        <span class="ukr">ласки</span> <span class="ukr">ради.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Принесіть-но</span>
                        <span class="ukr">казанок</span> <span class="ukr">на</span>
                        <span class="ukr">воду!</span> <span class="ukr">—</span> <span class="ukr">звернувся</span>
                        <span class="ukr">він</span> <span class="ukr">зразу</span> <span class="ukr">ж</span> <span
                            class="ukr">по</span>
                        <span class="ukr">тому</span> <span class="ukr">до</span> <span class="ukr">своїх</span> <span
                            class="ukr">гребців.</span> <span class="ukr">—</span> <span class="ukr">Та</span> <span
                            class="ukr">не</span>
                        <span class="ukr">забудьте</span> <span class="ukr">взяти</span>
                        <span class="ukr">оленину,</span> <span class="ukr">торбину</span> <span class="ukr">з</span>
                        <span class="ukr">чаєм</span> <span class="ukr">і</span> <span class="ukr">сковороду.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Коли</span> <span class="ukr">гребці,</span> <span
                            class="ukr">люди,</span>
                        <span class="ukr">що</span> <span class="ukr">їх</span> <span class="ukr">він</span> <span
                            class="ukr">же</span>
                        <span class="ukr">таки</span> <span class="ukr">привів</span> <span class="ukr">до</span> <span
                            class="ukr">христової</span> <span class="ukr">віри,</span>
                        <span class="ukr">вийшли</span> <span class="ukr">на</span>
                        <span class="ukr">берег,</span> <span class="ukr">усі</span>
                        <span class="ukr">троє,</span> <span class="ukr">хоч</span>
                        <span class="ukr">мали</span> <span class="ukr">повні</span>
                        <span class="ukr">руки</span> <span class="ukr">усякого</span>
                        <span class="ukr">табірного</span> <span class="ukr">начиння,</span> <span
                            class="ukr">повклякали</span>
                        <span class="ukr">й</span> <span class="ukr">подякували</span>
                        <span class="ukr">господові</span> <span class="ukr">за</span>
                        <span class="ukr">щасливу</span> <span class="ukr">дорогу.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Гей</span> <span class="ukr">Стокард</span> <span
                            class="ukr">поглядав</span>
                        <span class="ukr">на</span> <span class="ukr">всю</span> <span class="ukr">ту</span> <span
                            class="ukr">церемонію</span> <span class="ukr">насмішкувато,</span> <span
                            class="ukr">і</span>
                        <span class="ukr">непривітно:</span> <span class="ukr">така</span> <span
                            class="ukr">романтика</span>
                        <span class="ukr">й</span> <span class="ukr">пишнота</span>
                        <span class="ukr">анітрохи</span> <span class="ukr">не</span>
                        <span class="ukr">впливала</span> <span class="ukr">на</span>
                        <span class="ukr">його</span> <span class="ukr">душу,</span>
                        <span class="ukr">що</span> <span class="ukr">визнавала</span>
                        <span class="ukr">тільки</span> <span class="ukr">факти</span>
                        <span class="ukr">матеріальні.</span> <span class="ukr">Батіст</span> <span
                            class="ukr">Рудий</span> <span class="ukr">визирнув</span> <span class="ukr">із</span> <span
                            class="ukr">свого</span> <span class="ukr">намету.</span> <span class="ukr">Упізнавши</span>
                        <span class="ukr">знайомі</span>
                        <span class="ukr">пози,</span> <span class="ukr">він</span>
                        <span class="ukr">згадав</span> <span class="ukr">ту,</span>
                        <span class="ukr">що</span> <span class="ukr">ділила</span>
                        <span class="ukr">з</span> <span class="ukr">ним</span> <span class="ukr">ложе</span> <span
                            class="ukr">під</span>
                        <span class="ukr">зорями</span> <span class="ukr">в</span> <span class="ukr">горах</span> <span
                            class="ukr">і</span>
                        <span class="ukr">в</span> <span class="ukr">лісах,</span> <span class="ukr">згадав</span> <span
                            class="ukr">і</span> <span class="ukr">дочку,</span> <span class="ukr">десь</span> <span
                            class="ukr">коло</span>
                        <span class="ukr">холодної</span> <span class="ukr">Гудзонової</span> <span
                            class="ukr">затоки</span>
                        <span class="ukr">поховану.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Годі,</span> <span class="ukr">Батісте!</span>
                        <span class="ukr">Не</span> <span class="ukr">те</span> <span class="ukr">що</span> <span
                            class="ukr">говорити,</span>
                        <span class="ukr">а</span> <span class="ukr">й</span> <span class="ukr">думати</span> <span
                            class="ukr">про</span>
                        <span class="ukr">це</span> <span class="ukr">забудьте.</span> <span
                            class="ukr">Покладімо,</span> <span class="ukr">що</span> <span class="ukr">він</span> <span
                            class="ukr">ні</span> <span class="ukr">на</span> <span class="ukr">що</span> <span
                            class="ukr">не</span> <span class="ukr">здатен,</span> <span class="ukr">та</span>
                        <span class="ukr">й</span> <span class="ukr">просто-таки</span> <span class="ukr">дурень,</span>
                        <span class="ukr">а</span> <span class="ukr">проте</span> <span class="ukr">я</span> <span
                            class="ukr">його</span>
                        <span class="ukr">зректися</span> <span class="ukr">не</span> <span class="ukr">можу.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Гей</span> <span class="ukr">Стокард</span> <span
                            class="ukr">помовчав,</span>
                        <span class="ukr">добираючи</span>
                        <span class="ukr">слів,</span> <span class="ukr">аби</span>
                        <span class="ukr">краще</span> <span class="ukr">виявити</span>
                        <span class="ukr">своє</span> <span class="ukr">просте</span>
                        <span class="ukr">розуміння</span> <span class="ukr">людської</span> <span
                            class="ukr">етики.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Знаєте,</span> <span
                            class="ukr">Батісте,</span>
                        <span class="ukr">він</span> <span class="ukr">давно</span>
                        <span class="ukr">вже</span> <span class="ukr">мені</span>
                        <span class="ukr">в'ївся</span> <span class="ukr">в</span>
                        <span class="ukr">печінки.</span> <span class="ukr">Скільки</span> <span class="ukr">я</span>
                        <span class="ukr">клопоту</span> <span class="ukr">через</span> <span class="ukr">нього</span>
                        <span class="ukr">мав.</span> <span class="ukr">Але</span> <span class="ukr">знов</span> <span
                            class="ukr">же…</span>
                        <span class="ukr">Як</span> <span class="ukr">ви</span> <span class="ukr">цього</span> <span
                            class="ukr">не</span>
                        <span class="ukr">розумієте?</span> <span class="ukr">Я</span> <span class="ukr">з</span> <span
                            class="ukr">ним</span> <span class="ukr">одної</span> <span class="ukr">раси.</span> <span
                            class="ukr">Він</span> <span class="ukr">білий…</span> <span class="ukr">і…</span> <span
                            class="ukr">Та</span>
                        <span class="ukr">хоч</span> <span class="ukr">би</span> <span class="ukr">він</span> <span
                            class="ukr">і</span>
                        <span class="ukr">негром</span> <span class="ukr">був,</span> <span class="ukr">усе</span> <span
                            class="ukr">одно</span> <span class="ukr">я</span> <span class="ukr">не</span> <span
                            class="ukr">можу</span>
                        <span class="ukr">рятувати</span> <span class="ukr">свою</span> <span class="ukr">шкуру</span>
                        <span class="ukr">коштом</span> <span class="ukr">його</span> <span class="ukr">життя.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ну</span> <span
                            class="ukr">що</span> <span class="ukr">ж,</span> <span class="ukr">—</span> <span
                            class="ukr">відповів</span> <span class="ukr">Батіст</span>
                        <span class="ukr">Рудий.</span> <span class="ukr">—</span>
                        <span class="ukr">Я</span> <span class="ukr">зробив</span>
                        <span class="ukr">вам</span> <span class="ukr">велику</span>
                        <span class="ukr">ласку,</span> <span class="ukr">дав</span>
                        <span class="ukr">право</span> <span class="ukr">вибирати.</span> <span class="ukr">Тепер</span>
                        <span class="ukr">я</span> <span class="ukr">вже</span> <span class="ukr">прийду</span> <span
                            class="ukr">до</span>
                        <span class="ukr">вас</span> <span class="ukr">із</span> <span class="ukr">жерцями</span> <span
                            class="ukr">та</span> <span class="ukr">вояками.</span> <span class="ukr">Тоді</span> <span
                            class="ukr">ви</span> <span class="ukr">або</span> <span class="ukr">загинете,</span> <span
                            class="ukr">або</span> <span class="ukr">зречетеся</span> <span class="ukr">своєї</span>
                        <span class="ukr">віри.</span> <span class="ukr">А</span> <span class="ukr">залишите</span>
                        <span class="ukr">мені</span> <span class="ukr">свого</span> <span class="ukr">жерця</span>
                        <span class="ukr">—</span>
                        <span class="ukr">я</span> <span class="ukr">відпущу</span> <span class="ukr">вас</span> <span
                            class="ukr">із</span>
                        <span class="ukr">миром.</span> <span class="ukr">Коли</span> <span class="ukr">ж</span> <span
                            class="ukr">ні,</span> <span class="ukr">то</span> <span class="ukr">стежка</span> <span
                            class="ukr">ваша</span>
                        <span class="ukr">урветься</span> <span class="ukr">тут.</span> <span class="ukr">Мій</span>
                        <span class="ukr">народ</span> <span class="ukr">ненавидить</span> <span class="ukr">вас,</span>
                        <span class="ukr">навіть</span> <span class="ukr">діти.</span>
                        <span class="ukr">Он</span> <span class="ukr">дивіться,</span>
                        <span class="ukr">вони</span> <span class="ukr">вже</span>
                        <span class="ukr">посіли</span> <span class="ukr">ваші</span>
                        <span class="ukr">човни.</span> <span class="ukr">Він</span>
                        <span class="ukr">показав</span> <span class="ukr">на</span>
                        <span class="ukr">річку.</span> <span class="ukr">Голі</span>
                        <span class="ukr">індіянські</span> <span class="ukr">хлопчаки</span> <span
                            class="ukr">постягали</span>
                        <span class="ukr">човни</span> <span class="ukr">у</span> <span class="ukr">воду</span> <span
                            class="ukr">й</span>
                        <span class="ukr">погнали</span> <span class="ukr">їх</span> <span class="ukr">за</span> <span
                            class="ukr">течією.</span> <span class="ukr">Випливши</span> <span class="ukr">поза</span>
                        <span class="ukr">рушничний</span> <span class="ukr">постріл,</span>
                        <span class="ukr">вони</span> <span class="ukr">повлазили</span> <span class="ukr">до</span>
                        <span class="ukr">човнів</span> <span class="ukr">і</span> <span class="ukr">повеслували</span>
                        <span class="ukr">до</span>
                        <span class="ukr">берега.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Віддайте</span>
                        <span class="ukr">мені</span> <span class="ukr">жерця</span>
                        <span class="ukr">—</span> <span class="ukr">і</span> <span class="ukr">вам</span> <span
                            class="ukr">повернуться</span>
                        <span class="ukr">човни!</span> <span class="ukr">—</span>
                        <span class="ukr">мовив</span> <span class="ukr">Батіст</span>
                        <span class="ukr">Рудий.</span> <span class="ukr">—</span>
                        <span class="ukr">Подумайте</span> <span class="ukr">добре.</span> <span class="ukr">Я</span>
                        <span class="ukr">не</span> <span class="ukr">хочу,</span> <span class="ukr">щоб</span> <span
                            class="ukr">ви</span>
                        <span class="ukr">хапалися.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Гей</span> <span class="ukr">Стокард</span> <span
                            class="ukr">похитав</span>
                        <span class="ukr">головою.</span>
                        <span class="ukr">Він</span> <span class="ukr">глянув</span>
                        <span class="ukr">на</span> <span class="ukr">дружину-теслінку,</span> <span
                            class="ukr">що</span> <span class="ukr">тримала</span> <span class="ukr">його</span> <span
                            class="ukr">дитину</span> <span class="ukr">коло</span> <span class="ukr">грудей,</span>
                        <span class="ukr">і,</span> <span class="ukr">може</span> <span class="ukr">б,</span> <span
                            class="ukr">завагався,</span> <span class="ukr">якби</span> <span class="ukr">не</span>
                        <span class="ukr">стикнувся</span> <span class="ukr">поглядом</span>
                        <span class="ukr">з</span> <span class="ukr">людиною,</span>
                        <span class="ukr">що</span> <span class="ukr">стояла</span>
                        <span class="ukr">перед</span> <span class="ukr">ним.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Нема</span> <span
                            class="ukr">в</span> <span class="ukr">мені</span> <span class="ukr">страху!</span> <span
                            class="ukr">—</span> <span class="ukr">заявив</span> <span class="ukr">Стерджес</span> <span
                            class="ukr">Овен.</span>
                        <span class="ukr">—</span> <span class="ukr">Господь</span>
                        <span class="ukr">—</span> <span class="ukr">мій</span> <span class="ukr">заступник,</span>
                        <span class="ukr">і</span> <span class="ukr">я</span> <span class="ukr">хоч</span> <span
                            class="ukr">зараз</span>
                        <span class="ukr">ладен</span> <span class="ukr">іти</span> <span class="ukr">до</span> <span
                            class="ukr">табору</span> <span class="ukr">цього</span> <span
                            class="ukr">нечестивця.</span> <span class="ukr">Ніколи</span>
                        <span class="ukr">не</span> <span class="ukr">пізно.</span>
                        <span class="ukr">Молитва</span> <span class="ukr">ломить</span> <span
                            class="ukr">залізо.</span>
                        <span class="ukr">Навіть</span> <span class="ukr">в</span>
                        <span class="ukr">останню</span> <span class="ukr">хвилину</span> <span class="ukr">можна</span>
                        <span class="ukr">привернути</span> <span class="ukr">поганця</span>
                        <span class="ukr">до</span> <span class="ukr">путі</span> <span class="ukr">праведної.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ось</span> <span
                            class="ukr">нам</span> <span class="ukr">добра</span> <span class="ukr">нагода,</span> <span
                            class="ukr">—</span> <span class="ukr">хрипко</span> <span class="ukr">шепнув</span> <span
                            class="ukr">Біл</span> <span class="ukr">Стокардові.</span>
                        <span class="ukr">—</span> <span class="ukr">Зв'яжіть</span>
                        <span class="ukr">цього</span> <span class="ukr">рудого</span>
                        <span class="ukr">поганця</span> <span class="ukr">й</span>
                        <span class="ukr">нехай</span> <span class="ukr">буде</span>
                        <span class="ukr">в</span> <span class="ukr">нас</span> <span class="ukr">закладником.</span>
                        <span class="ukr">А</span>
                        <span class="ukr">як</span> <span class="ukr">нападуть</span>
                        <span class="ukr">червоношкірі</span> <span class="ukr">й</span> <span class="ukr">нам</span>
                        <span class="ukr">припече,</span> <span class="ukr">то</span> <span class="ukr">й</span> <span
                            class="ukr">порішити</span> <span class="ukr">його</span> <span class="ukr">можна.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ні!</span> <span
                            class="ukr">—</span> <span class="ukr">твердо</span> <span class="ukr">промовив</span>
                        <span class="ukr">Стокард.</span> <span class="ukr">—</span>
                        <span class="ukr">Я</span> <span class="ukr">обіцяв</span>
                        <span class="ukr">Батістові,</span> <span class="ukr">що</span>
                        <span class="ukr">його</span> <span class="ukr">не</span> <span class="ukr">зачеплять.</span>
                        <span class="ukr">Тут</span>
                        <span class="ukr">як</span> <span class="ukr">на</span> <span class="ukr">війні,</span> <span
                            class="ukr">Біле,</span> <span class="ukr">і</span> <span class="ukr">треба</span> <span
                            class="ukr">шанувати</span> <span class="ukr">звичаї</span>
                        <span class="ukr">війни.</span> <span class="ukr">Він</span>
                        <span class="ukr">поводився</span> <span class="ukr">дуже</span> <span class="ukr">чесно,</span>
                        <span class="ukr">навіть</span> <span class="ukr">нас</span> <span class="ukr">остерігав,</span>
                        <span class="ukr">і…</span> <span class="ukr">сто</span> <span class="ukr">чортів,</span> <span
                            class="ukr">не</span>
                        <span class="ukr">можу</span> <span class="ukr">ж</span> <span class="ukr">я</span> <span
                            class="ukr">зламати</span>
                        <span class="ukr">слова.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Він</span> <span
                            class="ukr">свого</span> <span class="ukr">слова</span> <span class="ukr">теж</span> <span
                            class="ukr">дотримає,</span> <span class="ukr">будь</span>
                        <span class="ukr">певен.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Авжеж.</span>
                        <span class="ukr">Та</span> <span class="ukr">не</span> <span class="ukr">можу</span> <span
                            class="ukr">я</span>
                        <span class="ukr">дозволити,</span> <span class="ukr">щоб</span>
                        <span class="ukr">якийсь</span> <span class="ukr">зайди-світ</span> <span
                            class="ukr">метис</span>
                        <span class="ukr">вийшов</span> <span class="ukr">чеснішим</span> <span class="ukr">за</span>
                        <span class="ukr">мене.</span> <span class="ukr">А</span> <span class="ukr">чому</span> <span
                            class="ukr">б</span>
                        <span class="ukr">не</span> <span class="ukr">пристати</span> <span class="ukr">на</span> <span
                            class="ukr">його</span> <span class="ukr">умову:</span> <span class="ukr">видати</span>
                        <span class="ukr">йому</span> <span class="ukr">місіонера,</span>
                        <span class="ukr">та</span> <span class="ukr">й</span> <span class="ukr">по</span> <span
                            class="ukr">всьому,</span>
                        <span class="ukr">га?</span> <span class="ukr">То</span> <span class="ukr">як,</span> <span
                            class="ukr">видати?</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ні-ні…</span> <span
                            class="ukr">—</span> <span class="ukr">вагаючись,</span> <span class="ukr">промовив</span>
                        <span class="ukr">Біл.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Що,</span> <span
                            class="ukr">і</span> <span class="ukr">кортить,</span> <span class="ukr">і</span> <span
                            class="ukr">болить?</span> </p>
                    <p class="ukrainian"> <span class="ukr">Біл</span> <span class="ukr">почервонів</span> <span
                            class="ukr">і</span> <span class="ukr">припинив</span> <span class="ukr">розмову.</span>
                        <span class="ukr">Батіст</span> <span class="ukr">Рудий</span>
                        <span class="ukr">терпляче</span> <span class="ukr">чекав</span> <span class="ukr">на</span>
                        <span class="ukr">останнє</span> <span class="ukr">слово.</span>
                        <span class="ukr">Стокард</span> <span class="ukr">підійшов</span> <span class="ukr">до</span>
                        <span class="ukr">нього:</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ось</span> <span
                            class="ukr">що,</span> <span class="ukr">Батісте.</span> <span class="ukr">Я</span> <span
                            class="ukr">прибув</span> <span class="ukr">до</span> <span class="ukr">вашого</span> <span
                            class="ukr">селища,</span> <span class="ukr">щоб</span> <span class="ukr">податися</span>
                        <span class="ukr">далі</span> <span class="ukr">до</span> <span class="ukr">верхів'я</span>
                        <span class="ukr">Коюкуку.</span> <span class="ukr">Я</span> <span class="ukr">нічого</span>
                        <span class="ukr">поганого</span>
                        <span class="ukr">не</span> <span class="ukr">зробив.</span>
                        <span class="ukr">Нікому</span> <span class="ukr">зла</span>
                        <span class="ukr">не</span> <span class="ukr">мислив.</span>
                        <span class="ukr">І</span> <span class="ukr">тепер</span> <span class="ukr">не</span> <span
                            class="ukr">мислю.</span> <span class="ukr">Та</span> <span class="ukr">раптом</span> <span
                            class="ukr">приходить</span> <span class="ukr">сюди</span>
                        <span class="ukr">цей</span> <span class="ukr">жрець,</span>
                        <span class="ukr">як</span> <span class="ukr">ви</span> <span class="ukr">його</span> <span
                            class="ukr">звете.</span> <span class="ukr">Не</span> <span class="ukr">я</span> <span
                            class="ukr">ж</span>
                        <span class="ukr">його</span> <span class="ukr">привів</span> <span class="ukr">сюди.</span>
                        <span class="ukr">Він</span> <span class="ukr">і</span> <span class="ukr">так</span> <span
                            class="ukr">прийшов</span>
                        <span class="ukr">би,</span> <span class="ukr">чи</span> <span class="ukr">був</span> <span
                            class="ukr">би</span>
                        <span class="ukr">я</span> <span class="ukr">тут,</span> <span class="ukr">чи</span> <span
                            class="ukr">ні.</span>
                        <span class="ukr">Та</span> <span class="ukr">коли</span> <span class="ukr">вже</span> <span
                            class="ukr">він</span>
                        <span class="ukr">прийшов,</span> <span class="ukr">я</span> <span class="ukr">повинен</span>
                        <span class="ukr">заступитися</span>
                        <span class="ukr">за</span> <span class="ukr">нього,</span>
                        <span class="ukr">адже</span> <span class="ukr">він</span>
                        <span class="ukr">з</span> <span class="ukr">мого</span> <span class="ukr">народу.</span> <span
                            class="ukr">І</span>
                        <span class="ukr">я</span> <span class="ukr">боронитиму</span> <span class="ukr">його.</span>
                        <span class="ukr">То</span> <span class="ukr">буде</span> <span class="ukr">не</span> <span
                            class="ukr">дитяча</span>
                        <span class="ukr">забава.</span>
                        <span class="ukr">Ваш</span> <span class="ukr">табір</span>
                        <span class="ukr">спорожніє</span> <span class="ukr">і</span>
                        <span class="ukr">змовкне,</span> <span class="ukr">людей</span> <span class="ukr">ваших</span>
                        <span class="ukr">порідшає,</span> <span class="ukr">немов</span>
                        <span class="ukr">після</span> <span class="ukr">голоду.</span>
                        <span class="ukr">Знаю,</span> <span class="ukr">ми</span>
                        <span class="ukr">загинемо,</span> <span class="ukr">але</span>
                        <span class="ukr">чимало</span> <span class="ukr">й</span>
                        <span class="ukr">ваших</span> <span class="ukr">вояків…</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Зате</span> <span
                            class="ukr">ті,</span> <span class="ukr">що</span> <span class="ukr">живі</span> <span
                            class="ukr">зостануться,</span> <span class="ukr">будуть</span>
                        <span class="ukr">мати</span> <span class="ukr">мир</span>
                        <span class="ukr">і</span> <span class="ukr">спокій,</span>
                        <span class="ukr">і</span> <span class="ukr">їм</span> <span class="ukr">не</span> <span
                            class="ukr">шарпатимуть</span>
                        <span class="ukr">вуха</span> <span class="ukr">чужі</span>
                        <span class="ukr">жерці</span> <span class="ukr">балачками</span> <span class="ukr">про</span>
                        <span class="ukr">чужих</span> <span class="ukr">богів.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Стокард</span> <span class="ukr">знизав</span> <span
                            class="ukr">плечима,</span>
                        <span class="ukr">і</span> <span class="ukr">вони</span> <span class="ukr">розійшлися.</span>
                        <span class="ukr">Метис</span>
                        <span class="ukr">подався</span> <span class="ukr">до</span>
                        <span class="ukr">свого</span> <span class="ukr">табору.</span>
                        <span class="ukr">Місіонер</span> <span class="ukr">покликав</span> <span
                            class="ukr">своїх</span>
                        <span class="ukr">людей,</span> <span class="ukr">і</span>
                        <span class="ukr">всі</span> <span class="ukr">троє</span>
                        <span class="ukr">почали</span> <span class="ukr">молитися.</span> <span
                            class="ukr">Стокард</span>
                        <span class="ukr">і</span> <span class="ukr">Біл</span> <span class="ukr">зрубали</span> <span
                            class="ukr">кілька</span>
                        <span class="ukr">ялин</span> <span class="ukr">і</span> <span class="ukr">поробили</span> <span
                            class="ukr">з</span> <span class="ukr">них</span> <span class="ukr">захист</span> <span
                            class="ukr">від</span>
                        <span class="ukr">нападу.</span> <span class="ukr">Дитина</span> <span
                            class="ukr">заснула,</span>
                        <span class="ukr">й</span> <span class="ukr">Стокардова</span>
                        <span class="ukr">дружина</span> <span class="ukr">поклала</span> <span class="ukr">її</span>
                        <span class="ukr">на</span> <span class="ukr">шкури,</span> <span class="ukr">а</span> <span
                            class="ukr">сама</span>
                        <span class="ukr">заходилася</span> <span class="ukr">помагати</span>
                        <span class="ukr">чоловікам.</span> <span class="ukr">Вони</span> <span
                            class="ukr">обгородили</span>
                        <span class="ukr">табір</span> <span class="ukr">на</span>
                        <span class="ukr">три</span> <span class="ukr">боки,</span>
                        <span class="ukr">а</span> <span class="ukr">стрімкий</span>
                        <span class="ukr">схил</span> <span class="ukr">до</span> <span class="ukr">річки</span> <span
                            class="ukr">сам</span> <span class="ukr">собою</span> <span class="ukr">захищав</span> <span
                            class="ukr">їх</span> <span class="ukr">із</span> <span class="ukr">затилля.</span> <span
                            class="ukr">Докінчивши</span>
                        <span class="ukr">робити</span> <span class="ukr">вал,</span>
                        <span class="ukr">Стокард</span> <span class="ukr">з</span>
                        <span class="ukr">Білом</span> <span class="ukr">вийшли</span>
                        <span class="ukr">з-за</span> <span class="ukr">нього</span>
                        <span class="ukr">й</span> <span class="ukr">узялися</span>
                        <span class="ukr">рубати</span> <span class="ukr">кущі,</span>
                        <span class="ukr">що</span> <span class="ukr">поодинці</span>
                        <span class="ukr">росли</span> <span class="ukr">на</span>
                        <span class="ukr">галявині.</span> <span class="ukr">А</span>
                        <span class="ukr">з</span> <span class="ukr">ворожого</span>
                        <span class="ukr">табору</span> <span class="ukr">вже</span>
                        <span class="ukr">чути</span> <span class="ukr">було</span>
                        <span class="ukr">гомін,</span> <span class="ukr">гуркіт</span>
                        <span class="ukr">барабанів</span> <span class="ukr">і</span>
                        <span class="ukr">голоси</span> <span class="ukr">жерців,</span> <span class="ukr">що</span>
                        <span class="ukr">закликали</span> <span class="ukr">вояків</span>
                        <span class="ukr">до</span> <span class="ukr">бою.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Найгірше</span> <span
                            class="ukr">те,</span> <span class="ukr">що</span> <span class="ukr">вони</span> <span
                            class="ukr">опадуть</span> <span class="ukr">нас</span> <span class="ukr">усім</span> <span
                            class="ukr">гамузом,</span> <span class="ukr">—</span> <span class="ukr">мовив</span> <span
                            class="ukr">Біл,</span> <span class="ukr">коли</span>
                        <span class="ukr">вони</span> <span class="ukr">з</span> <span class="ukr">сокирами</span> <span
                            class="ukr">на</span> <span class="ukr">плечах</span> <span class="ukr">поверталися</span>
                        <span class="ukr">до</span> <span class="ukr">наметів.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Та</span> <span
                            class="ukr">ще</span> <span class="ukr">як</span> <span class="ukr">дочекаються</span>
                        <span class="ukr">ночі,</span> <span class="ukr">коли</span>
                        <span class="ukr">нам</span> <span class="ukr">темно</span>
                        <span class="ukr">буде</span> <span class="ukr">стріляти.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">То</span> <span
                            class="ukr">давайте</span> <span class="ukr">ми</span> <span class="ukr">самі</span> <span
                            class="ukr">почнемо.</span> <span class="ukr">Біл</span> <span class="ukr">поклав</span>
                        <span class="ukr">сокиру,</span> <span class="ukr">взяв</span> <span class="ukr">рушницю</span>
                        <span class="ukr">і</span> <span class="ukr">зручно</span> <span class="ukr">вмостився</span>
                        <span class="ukr">за</span> <span class="ukr">валом.</span>
                        <span class="ukr">У</span> <span class="ukr">юрбі</span> <span class="ukr">індіян</span> <span
                            class="ukr">вирізнявся</span>
                        <span class="ukr">високий</span> <span class="ukr">чаклун,</span> <span class="ukr">і</span>
                        <span class="ukr">Біл</span> <span class="ukr">націлився</span> <span class="ukr">на</span>
                        <span class="ukr">нього.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Стріляти?</span> <span
                            class="ukr">—</span> <span class="ukr">спитався</span> <span class="ukr">він.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Гей</span> <span class="ukr">Стокард</span> <span
                            class="ukr">відчинив</span>
                        <span class="ukr">скриньку</span> <span class="ukr">з</span>
                        <span class="ukr">набоями,</span> <span class="ukr">відвів</span> <span
                            class="ukr">дружину</span>
                        <span class="ukr">в</span> <span class="ukr">захищений</span>
                        <span class="ukr">куток</span> <span class="ukr">ладувати</span> <span
                            class="ukr">рушниці,</span>
                        <span class="ukr">а</span> <span class="ukr">тоді</span> <span class="ukr">дав</span> <span
                            class="ukr">знак</span>
                        <span class="ukr">Білові.</span> <span class="ukr">Чаклун</span>
                        <span class="ukr">упав.</span> <span class="ukr">На</span>
                        <span class="ukr">мить</span> <span class="ukr">стало</span>
                        <span class="ukr">тихо,</span> <span class="ukr">потім</span>
                        <span class="ukr">розляглося</span> <span class="ukr">дике</span> <span class="ukr">виття</span>
                        <span class="ukr">й</span> <span class="ukr">полетіли</span> <span class="ukr">стріли,</span>
                        <span class="ukr">але</span> <span class="ukr">до</span> <span class="ukr">табору</span> <span
                            class="ukr">вони</span>
                        <span class="ukr">не</span> <span class="ukr">сягали.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Кортить</span> <span
                            class="ukr">мені</span> <span class="ukr">глянути</span> <span class="ukr">на</span> <span
                            class="ukr">того</span> <span class="ukr">халамидника,</span> <span class="ukr">—</span>
                        <span class="ukr">промовив</span> <span class="ukr">Біл,</span>
                        <span class="ukr">знову</span> <span class="ukr">ладуючи</span>
                        <span class="ukr">рушницю.</span> <span class="ukr">—</span>
                        <span class="ukr">От</span> <span class="ukr">присягаюся,</span> <span class="ukr">що</span>
                        <span class="ukr">влучив</span> <span class="ukr">йому</span>
                        <span class="ukr">просто</span> <span class="ukr">межи</span>
                        <span class="ukr">очі.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Марна</span> <span
                            class="ukr">праця,</span> <span class="ukr">—</span> <span class="ukr">сказав</span> <span
                            class="ukr">Стокард</span>
                        <span class="ukr">і</span> <span class="ukr">похмуро</span>
                        <span class="ukr">похитав</span> <span class="ukr">головою.</span> <span
                            class="ukr">Батістові,</span>
                        <span class="ukr">певно,</span> <span class="ukr">пощастило</span> <span
                            class="ukr">вгамувати</span>
                        <span class="ukr">найзаповзятіших</span> <span class="ukr">вояків.</span> <span
                            class="ukr">Бо</span> <span class="ukr">постріл</span> <span class="ukr">не</span> <span
                            class="ukr">зманив</span> <span class="ukr">індіян</span> <span class="ukr">до</span> <span
                            class="ukr">бою</span> <span class="ukr">завидна,</span> <span class="ukr">а</span> <span
                            class="ukr">навпаки:</span> <span class="ukr">вони</span> <span class="ukr">квапливо</span>
                        <span class="ukr">відійшли</span>
                        <span class="ukr">з</span> <span class="ukr">табору</span>
                        <span class="ukr">на</span> <span class="ukr">таку</span> <span class="ukr">відстань,</span>
                        <span class="ukr">щоб</span> <span class="ukr">не</span> <span class="ukr">досягав</span> <span
                            class="ukr">рушничний</span> <span class="ukr">вогонь.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Настрій</span>
                        <span class="ukr">Овенові</span> <span class="ukr">пересівся.</span> <span class="ukr">В</span>
                        <span class="ukr">запалі</span> <span class="ukr">прозелітства</span>
                        <span class="ukr">він</span> <span class="ukr">щойно</span>
                        <span class="ukr">готовий</span> <span class="ukr">був</span>
                        <span class="ukr">сам-один</span> <span class="ukr">рушити</span> <span class="ukr">до</span>
                        <span class="ukr">табору</span> <span class="ukr">того</span> <span
                            class="ukr">недовірка,</span> <span class="ukr">налагодившись</span> <span
                            class="ukr">або</span>
                        <span class="ukr">зробити</span> <span class="ukr">чудо</span>
                        <span class="ukr">з</span> <span class="ukr">ласки</span> <span class="ukr">божої,</span> <span
                            class="ukr">або</span> <span class="ukr">прийняти</span> <span class="ukr">вінець</span>
                        <span class="ukr">мученика,</span> <span class="ukr">та</span>
                        <span class="ukr">як</span> <span class="ukr">довелося</span>
                        <span class="ukr">чекати,</span> <span class="ukr">проповідницьке</span> <span
                            class="ukr">завзяття</span> <span class="ukr">потроху</span>
                        <span class="ukr">згасло</span> <span class="ukr">й</span>
                        <span class="ukr">прокинувся</span> <span class="ukr">природний</span> <span
                            class="ukr">інстинкт.</span>
                        <span class="ukr">Замість</span> <span class="ukr">надії</span>
                        <span class="ukr">на</span> <span class="ukr">вічне</span>
                        <span class="ukr">блаженство</span> <span class="ukr">настав</span> <span
                            class="ukr">фізичний</span>
                        <span class="ukr">страх,</span> <span class="ukr">а</span>
                        <span class="ukr">любов</span> <span class="ukr">до</span>
                        <span class="ukr">бога</span> <span class="ukr">поступилася</span> <span
                            class="ukr">перед</span>
                        <span class="ukr">любов'ю</span> <span class="ukr">до</span>
                        <span class="ukr">життя.</span> <span class="ukr">Не</span>
                        <span class="ukr">нове</span> <span class="ukr">то</span> <span class="ukr">було</span> <span
                            class="ukr">почуття.</span> <span class="ukr">Вже</span> <span class="ukr">й</span> <span
                            class="ukr">давніше</span> <span class="ukr">лучалося,</span>
                        <span class="ukr">що</span> <span class="ukr">раптом</span>
                        <span class="ukr">його</span> <span class="ukr">поймала</span>
                        <span class="ukr">слабкодухість.</span> <span class="ukr">Він</span> <span
                            class="ukr">намагався</span> <span class="ukr">опиратись</span> <span class="ukr">їй,</span>
                        <span class="ukr">та</span> <span class="ukr">дарма.</span> <span class="ukr">Йому</span> <span
                            class="ukr">згадалося,</span>
                        <span class="ukr">як</span> <span class="ukr">одного</span>
                        <span class="ukr">разу,</span> <span class="ukr">коли</span>
                        <span class="ukr">гребці,</span> <span class="ukr">мов</span>
                        <span class="ukr">навіжені,</span> <span class="ukr">налягали</span> <span class="ukr">на</span>
                        <span class="ukr">весла,</span> <span class="ukr">рятуючись</span>
                        <span class="ukr">від</span> <span class="ukr">крижаного</span>
                        <span class="ukr">навалу,</span> <span class="ukr">він</span>
                        <span class="ukr">у</span> <span class="ukr">найскрутнішу</span> <span
                            class="ukr">хвилину,</span> <span class="ukr">пойнятий</span>
                        <span class="ukr">жахом,</span> <span class="ukr">кинув</span>
                        <span class="ukr">весло</span> <span class="ukr">і</span> <span class="ukr">став</span> <span
                            class="ukr">благати</span> <span class="ukr">в</span> <span class="ukr">бога</span> <span
                            class="ukr">порятунку.</span> <span class="ukr"></span> </p>
                    <p class="ukrainian"> <span class="ukr">І</span> <span class="ukr">таке</span> <span
                            class="ukr">бувало</span> <span class="ukr">не</span> <span class="ukr">раз.</span> <span
                            class="ukr">Згадувати</span> <span class="ukr">ті</span> <span class="ukr">випадки</span>
                        <span class="ukr">йому</span> <span class="ukr">було</span> <span class="ukr">неприємно.</span>
                        <span class="ukr">Ставало</span> <span class="ukr">соромно,</span> <span class="ukr">що</span>
                        <span class="ukr">дух</span> <span class="ukr">у</span> <span class="ukr">нього</span> <span
                            class="ukr">такий</span>
                        <span class="ukr">немічний,</span> <span class="ukr">а</span> <span class="ukr">голос</span>
                        <span class="ukr">дужий.</span> <span class="ukr">Але</span> <span class="ukr">ж</span> <span
                            class="ukr">тіло</span>
                        <span class="ukr">його</span> <span class="ukr">прагнуло</span> <span class="ukr">життя,</span>
                        <span class="ukr">любило</span> <span class="ukr">життя.</span>
                        <span class="ukr">Він</span> <span class="ukr">не</span> <span class="ukr">міг</span> <span
                            class="ukr">позбутися</span> <span class="ukr">тієї</span> <span class="ukr">любові.</span>
                        <span class="ukr">Через</span> <span class="ukr">неї</span> <span class="ukr">його</span> <span
                            class="ukr">невідомі</span> <span class="ukr">предки</span> <span
                            class="ukr">продовжували</span>
                        <span class="ukr">рід</span> <span class="ukr">свій,</span>
                        <span class="ukr">і</span> <span class="ukr">через</span> <span class="ukr">неї</span> <span
                            class="ukr">йому</span>
                        <span class="ukr">призначено</span> <span class="ukr">теж</span>
                        <span class="ukr">продовжувати</span> <span class="ukr">той</span> <span class="ukr">рід.</span>
                        <span class="ukr">Його</span> <span class="ukr">відвага,</span> <span class="ukr">коли</span>
                        <span class="ukr">то</span> <span class="ukr">відвага,</span> <span class="ukr">була</span>
                        <span class="ukr">від</span> <span class="ukr">фанатизму,</span>
                        <span class="ukr">тимчасом</span> <span class="ukr">як</span>
                        <span class="ukr">мужність</span> <span class="ukr">Стокардова</span> <span
                            class="ukr">та</span> <span class="ukr">Білова</span> <span class="ukr">грунтувалася</span>
                        <span class="ukr">на</span> <span class="ukr">глибоко</span>
                        <span class="ukr">закорінених</span> <span class="ukr">ідеалах</span> <span class="ukr">у</span>
                        <span class="ukr">їхніх</span> <span class="ukr">душах.</span> <span class="ukr">У</span> <span
                            class="ukr">них</span>
                        <span class="ukr">теж</span> <span class="ukr">буяла</span> <span class="ukr">любов</span> <span
                            class="ukr">до</span> <span class="ukr">життя,</span> <span class="ukr">але</span> <span
                            class="ukr">ще</span>
                        <span class="ukr">дужчі</span> <span class="ukr">були</span> <span class="ukr">традиції</span>
                        <span class="ukr">раси.</span> <span class="ukr">Не</span> <span class="ukr">те</span> <span
                            class="ukr">щоб</span>
                        <span class="ukr">вони</span> <span class="ukr">не</span> <span class="ukr">боялися</span> <span
                            class="ukr">смерті,</span>
                        <span class="ukr">просто</span> <span class="ukr">їм</span>
                        <span class="ukr">вистачало</span> <span class="ukr">мужності</span> <span class="ukr">не</span>
                        <span class="ukr">купувати</span> <span class="ukr">життя</span>
                        <span class="ukr">ганебною</span> <span class="ukr">ціною.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Місіонер</span> <span class="ukr">підвівся,</span>
                        <span class="ukr">на</span> <span class="ukr">хвилю</span>
                        <span class="ukr">запалившись</span> <span class="ukr">самопожертвою.</span> <span
                            class="ukr">Він</span>
                        <span class="ukr">уже</span> <span class="ukr">до</span> <span class="ukr">половини</span> <span
                            class="ukr">переліз</span>
                        <span class="ukr">через</span> <span class="ukr">вал,</span>
                        <span class="ukr">лаштуючись</span> <span class="ukr">іти</span> <span class="ukr">до</span>
                        <span class="ukr">ворожого</span> <span class="ukr">табору,</span>
                        <span class="ukr">та</span> <span class="ukr">враз</span> <span class="ukr">опустився</span>
                        <span class="ukr">додолу</span>
                        <span class="ukr">тремтячою,</span> <span class="ukr">драглистою</span> <span
                            class="ukr">купою.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Воля</span> <span
                            class="ukr">божа!</span> <span class="ukr">Воля</span> <span class="ukr">божа!</span> <span
                            class="ukr">—</span> <span class="ukr">заскиглив</span> <span class="ukr">він.</span> <span
                            class="ukr">—</span> <span class="ukr">Хто</span> <span class="ukr">я,</span> <span
                            class="ukr">що</span> <span class="ukr">смію</span>
                        <span class="ukr">постати</span> <span class="ukr">проти</span> <span class="ukr">волі</span>
                        <span class="ukr">господа</span> <span class="ukr">бога</span> <span class="ukr">мого?</span>
                        <span class="ukr">Ще</span> <span class="ukr">до</span> <span class="ukr">створення</span> <span
                            class="ukr">світу</span>
                        <span class="ukr">все</span> <span class="ukr">було</span>
                        <span class="ukr">записане</span> <span class="ukr">в</span>
                        <span class="ukr">книгу</span> <span class="ukr">буття.</span>
                        <span class="ukr">То</span> <span class="ukr">чи</span> <span class="ukr">смію</span> <span
                            class="ukr">ж</span>
                        <span class="ukr">я,</span> <span class="ukr">мала</span> <span class="ukr">комашка,</span>
                        <span class="ukr">змінити</span>
                        <span class="ukr">хоч</span> <span class="ukr">єдине</span>
                        <span class="ukr">слово</span> <span class="ukr">чи</span>
                        <span class="ukr">титло</span> <span class="ukr">книги</span>
                        <span class="ukr">тієї?</span> <span class="ukr">Коли</span>
                        <span class="ukr">дух</span> <span class="ukr">мій</span> <span class="ukr">кволий,</span> <span
                            class="ukr">то</span> <span class="ukr">на</span> <span class="ukr">те</span> <span
                            class="ukr">воля</span>
                        <span class="ukr">божа.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Біл</span> <span class="ukr">нагнувся,</span> <span
                            class="ukr">підвів</span>
                        <span class="ukr">Овена</span> <span class="ukr">з</span> <span class="ukr">землі</span> <span
                            class="ukr">й</span>
                        <span class="ukr">мовчки</span> <span class="ukr">трусонув</span>
                        <span class="ukr">ним.</span> <span class="ukr">Тоді</span>
                        <span class="ukr">випустив</span> <span class="ukr">той</span>
                        <span class="ukr">лантух</span> <span class="ukr">розсіпаних</span> <span
                            class="ukr">нервів</span>
                        <span class="ukr">і</span> <span class="ukr">позирнув</span>
                        <span class="ukr">на</span> <span class="ukr">двох</span> <span class="ukr">навернених</span>
                        <span class="ukr">індіян.</span>
                        <span class="ukr">Ті,</span> <span class="ukr">одначе,</span>
                        <span class="ukr">не</span> <span class="ukr">виказували</span>
                        <span class="ukr">переляку;</span> <span class="ukr">вони</span> <span
                            class="ukr">бадьоро</span> <span class="ukr">й</span> <span class="ukr">жваво</span> <span
                            class="ukr">готувалися</span> <span class="ukr">до</span> <span class="ukr">оборони.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Стокард,</span> <span class="ukr">стиха</span>
                        <span class="ukr">про</span> <span class="ukr">щось</span>
                        <span class="ukr">поговоривши</span> <span class="ukr">із</span> <span class="ukr">своєю</span>
                        <span class="ukr">теслінкою,</span> <span class="ukr">глянув</span>
                        <span class="ukr">на</span> <span class="ukr">місіонера.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Тягни</span> <span
                            class="ukr">його</span> <span class="ukr">сюди!</span> <span class="ukr">—</span> <span
                            class="ukr">звелів</span> <span class="ukr">він</span>
                        <span class="ukr">Білові.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">А</span> <span
                            class="ukr">тепер,</span> <span class="ukr">—</span> <span class="ukr">сказав</span> <span
                            class="ukr">він,</span> <span class="ukr">коли</span>
                        <span class="ukr">Стерджес</span> <span class="ukr">Овен</span> <span class="ukr">став</span>
                        <span class="ukr">перед</span> <span class="ukr">ним,</span> <span class="ukr">—</span> <span
                            class="ukr">звінчайте</span> <span class="ukr">нас.</span> <span class="ukr">Тільки</span>
                        <span class="ukr">швидше!</span> <span class="ukr">Не</span> <span class="ukr">знати,</span>
                        <span class="ukr">чим</span> <span class="ukr">воно</span> <span class="ukr">все</span> <span
                            class="ukr">скінчиться,</span> <span class="ukr">—</span> <span class="ukr">ніби</span>
                        <span class="ukr">виправдуючись,</span>
                        <span class="ukr">мовив</span> <span class="ukr">він</span>
                        <span class="ukr">до</span> <span class="ukr">Біла.</span>
                        <span class="ukr">—</span> <span class="ukr">От</span> <span class="ukr">я</span> <span
                            class="ukr">й</span> <span class="ukr">надумав</span> <span class="ukr">упорядкувати</span>
                        <span class="ukr">свої</span>
                        <span class="ukr">справи.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">Індіянка</span> <span class="ukr">мовчки</span> <span
                            class="ukr">скорилася</span>
                        <span class="ukr">наказові</span> <span class="ukr">свого</span> <span class="ukr">білого</span>
                        <span class="ukr">пана.</span> <span class="ukr">Їй</span> <span class="ukr">було</span> <span
                            class="ukr">байдуже</span> <span class="ukr">до</span> <span class="ukr">тої</span> <span
                            class="ukr">церемонії:</span> <span class="ukr">вона</span>
                        <span class="ukr">й</span> <span class="ukr">так</span> <span class="ukr">вважала</span> <span
                            class="ukr">себе</span> <span class="ukr">за</span> <span class="ukr">Стокардову</span>
                        <span class="ukr">дружину</span> <span class="ukr">з</span> <span class="ukr">того</span> <span
                            class="ukr">дня,</span> <span class="ukr">як</span> <span class="ukr">перейшла</span> <span
                            class="ukr">до</span> <span class="ukr">нього</span> <span class="ukr">жити.</span> </p>
                    <p class="ukrainian"> <span class="ukr">За</span> <span class="ukr">свідків</span> <span
                            class="ukr">були</span> <span class="ukr">навернені</span>
                        <span class="ukr">індіяни.</span> <span class="ukr">Біл</span>
                        <span class="ukr">стояв</span> <span class="ukr">над</span>
                        <span class="ukr">місіонером,</span> <span class="ukr">кваплячи,</span> <span
                            class="ukr">коли</span>
                        <span class="ukr">той</span> <span class="ukr">затинався.</span> <span class="ukr">Гей</span>
                        <span class="ukr">підказував</span> <span class="ukr">дружині,</span> <span
                            class="ukr">що</span> <span class="ukr">їй</span> <span class="ukr">слід</span> <span
                            class="ukr">відповідати,</span> <span class="ukr">а</span>
                        <span class="ukr">за</span> <span class="ukr">браком</span>
                        <span class="ukr">персня,</span> <span class="ukr">обкрутив</span> <span class="ukr">її</span>
                        <span class="ukr">пальця</span> <span class="ukr">своїми:</span>
                        <span class="ukr">великим</span> <span class="ukr">і</span>
                        <span class="ukr">вказівним.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Поцілуйте</span>
                        <span class="ukr">наречену!</span> <span class="ukr">—</span>
                        <span class="ukr">гримнув</span> <span class="ukr">Біл.</span>
                        <span class="ukr">Стерджес</span> <span class="ukr">Овен</span>
                        <span class="ukr">був</span> <span class="ukr">такий</span>
                        <span class="ukr">пригноблений,</span> <span class="ukr">що</span> <span class="ukr">ні</span>
                        <span class="ukr">словом</span> <span class="ukr">не</span> <span class="ukr">перечив.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Тепер</span> <span
                            class="ukr">охрестіть</span> <span class="ukr">дитину!</span>
                        <span class="ukr">—</span> <span class="ukr">мовив</span> <span class="ukr">Гей</span> <span
                            class="ukr">Стокард.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Та</span> <span
                            class="ukr">щоб</span> <span class="ukr">було</span> <span class="ukr">все</span> <span
                            class="ukr">як</span> <span class="ukr">годиться!</span> <span class="ukr">—</span> <span
                            class="ukr">додав</span> <span class="ukr">Біл,</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Треба</span> <span
                            class="ukr">про</span> <span class="ukr">все</span> <span class="ukr">подумати</span> <span
                            class="ukr">перед</span>
                        <span class="ukr">новою</span> <span class="ukr">дорогою,</span> <span class="ukr">—</span>
                        <span class="ukr">сказав</span> <span class="ukr">батько,</span>
                        <span class="ukr">взявши</span> <span class="ukr">дитину</span>
                        <span class="ukr">з</span> <span class="ukr">рук</span> <span class="ukr">материних.</span>
                        <span class="ukr">—</span> <span class="ukr">Одного</span> <span class="ukr">разу,</span> <span
                            class="ukr">на</span>
                        <span class="ukr">Порогах,</span> <span class="ukr">мені</span> <span
                            class="ukr">довелося</span> <span class="ukr">скрутно</span> <span class="ukr">—</span>
                        <span class="ukr">я</span> <span class="ukr">все</span>
                        <span class="ukr">мав,</span> <span class="ukr">не</span> <span class="ukr">взяв</span> <span
                            class="ukr">тільки</span> <span class="ukr">солі.</span> <span class="ukr">Ніколи</span>
                        <span class="ukr">того</span> <span class="ukr">не</span> <span class="ukr">забуду.</span> <span
                            class="ukr">Може,</span> <span class="ukr">їй</span> <span class="ukr">з</span> <span
                            class="ukr">дитиною</span>
                        <span class="ukr">доведеться</span>
                        <span class="ukr">сьогодні</span> <span class="ukr">рушати</span> <span class="ukr">в</span>
                        <span class="ukr">далеку</span> <span class="ukr">мандрівку,</span>
                        <span class="ukr">то</span> <span class="ukr">краще</span>
                        <span class="ukr">бути</span> <span class="ukr">готовому.</span> <span class="ukr">Між</span>
                        <span class="ukr">нами,</span> <span class="ukr">Біле,</span> <span class="ukr">я</span> <span
                            class="ukr">не</span>
                        <span class="ukr">знаю,</span> <span class="ukr">чи</span> <span class="ukr">це</span> <span
                            class="ukr">має</span>
                        <span class="ukr">який</span> <span class="ukr">глузд,</span> <span class="ukr">але</span> <span
                            class="ukr">гірше</span> <span class="ukr">не</span> <span class="ukr">буде.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Кухлика</span> <span class="ukr">води</span> <span
                            class="ukr">вистачило</span>
                        <span class="ukr">охрестити</span> <span class="ukr">хлопчика.</span> <span
                            class="ukr">Тоді</span>
                        <span class="ukr">його</span> <span class="ukr">поклали</span>
                        <span class="ukr">в</span> <span class="ukr">захисток,</span>
                        <span class="ukr">запалили</span> <span class="ukr">вогнище</span> <span class="ukr">й</span>
                        <span class="ukr">зготували</span> <span class="ukr">вечерю.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">Сонце</span> <span class="ukr">стало</span> <span
                            class="ukr">навзаході,</span>
                        <span class="ukr">і</span> <span class="ukr">небо</span> <span class="ukr">ближче</span> <span
                            class="ukr">до</span>
                        <span class="ukr">півночі</span> <span class="ukr">зробилося</span>
                        <span class="ukr">густо-червоне.</span> <span class="ukr">Тіні</span> <span
                            class="ukr">стелилися</span>
                        <span class="ukr">дедалі</span> <span class="ukr">довші,</span>
                        <span class="ukr">світло</span> <span class="ukr">згасало,</span> <span class="ukr">в</span>
                        <span class="ukr">темних</span> <span class="ukr">лісових</span>
                        <span class="ukr">нетрях</span> <span class="ukr">життя</span>
                        <span class="ukr">поступово</span> <span class="ukr">завмирало.</span> <span
                            class="ukr">Навіть</span>
                        <span class="ukr">дике</span> <span class="ukr">птаство</span>
                        <span class="ukr">на</span> <span class="ukr">річці</span>
                        <span class="ukr">припинило</span> <span class="ukr">галасливу</span> <span
                            class="ukr">свою</span>
                        <span class="ukr">суперечку</span> <span class="ukr">й</span>
                        <span class="ukr">удало,</span> <span class="ukr">що</span>
                        <span class="ukr">йде</span> <span class="ukr">спати.</span>
                        <span class="ukr">Тільки</span> <span class="ukr">в</span>
                        <span class="ukr">індіянському</span> <span class="ukr">таборі</span> <span
                            class="ukr">був</span> <span class="ukr">рух</span> <span class="ukr">і</span> <span
                            class="ukr">гамір.</span> <span class="ukr">Дужче</span>
                        <span class="ukr">торохтіли</span> <span class="ukr">барабани,</span>
                        <span class="ukr">гучніше</span> <span class="ukr">лунали</span> <span
                            class="ukr">несамовиті</span>
                        <span class="ukr">індіянські</span> <span class="ukr">співи.</span> <span class="ukr">Але</span>
                        <span class="ukr">як</span> <span class="ukr">сховалося</span> <span class="ukr">сонце,</span>
                        <span class="ukr">то</span> <span class="ukr">й</span> <span class="ukr">вони</span> <span
                            class="ukr">змовкли.</span>
                        <span class="ukr">Всю</span> <span class="ukr">землю</span> <span class="ukr">залягла</span>
                        <span class="ukr">пітьма</span> <span class="ukr">й</span> <span class="ukr">глибока</span>
                        <span class="ukr">німота.</span>
                        <span class="ukr">Гей</span> <span class="ukr">Стокард</span>
                        <span class="ukr">став</span> <span class="ukr">навколішки</span> <span class="ukr">й</span>
                        <span class="ukr">виглянув</span> <span class="ukr">у</span> <span class="ukr">дірку</span>
                        <span class="ukr">між</span> <span class="ukr">колодами.</span> <span
                            class="ukr">Заплакала</span>
                        <span class="ukr">жалісно</span> <span class="ukr">дитина</span> <span class="ukr">й</span>
                        <span class="ukr">відвернула</span> <span class="ukr">його</span>
                        <span class="ukr">увагу.</span> <span class="ukr">Мати</span>
                        <span class="ukr">нахилилась</span> <span class="ukr">над</span> <span class="ukr">нею,</span>
                        <span class="ukr">але</span> <span class="ukr">вона</span> <span class="ukr">вже</span> <span
                            class="ukr">знову</span>
                        <span class="ukr">спала.</span> <span class="ukr">Запанувала</span>
                        <span class="ukr">безмежна</span> <span class="ukr">глупа</span> <span class="ukr">тиша.</span>
                        <span class="ukr">Зненацька</span> <span class="ukr">долинув</span>
                        <span class="ukr">голосний</span> <span class="ukr">крик</span>
                        <span class="ukr">вільшанки.</span> <span class="ukr">Коротка</span> <span
                            class="ukr">ніч</span> <span class="ukr">минала.</span> </p>
                    <p class="ukrainian"> <span class="ukr">На</span> <span class="ukr">галявині</span> <span
                            class="ukr">з'явилася</span>
                        <span class="ukr">ціла</span>
                        <span class="ukr">ватага</span> <span class="ukr">темних</span>
                        <span class="ukr">постатей.</span> <span class="ukr">Засвистіли</span> <span
                            class="ukr">стріли,</span>
                        <span class="ukr">заспівали</span> <span class="ukr">напнуті</span> <span
                            class="ukr">тятиви.</span>
                        <span class="ukr">Їм</span> <span class="ukr">у</span> <span class="ukr">відповідь</span> <span
                            class="ukr">озвалися</span>
                        <span class="ukr">рушниці.</span> <span class="ukr">Спис,</span> <span
                            class="ukr">кинутий</span> <span class="ukr">дужою</span> <span class="ukr">рукою,</span>
                        <span class="ukr">влучив</span> <span class="ukr">у</span> <span class="ukr">теслінку</span>
                        <span class="ukr">саме</span> <span class="ukr">тоді,</span> <span class="ukr">як</span> <span
                            class="ukr">вона</span> <span class="ukr">схилилася</span>
                        <span class="ukr">над</span> <span class="ukr">дитиною.</span>
                        <span class="ukr">Стріла,</span> <span class="ukr">що,</span>
                        <span class="ukr">пролетівши</span> <span class="ukr">між</span> <span
                            class="ukr">колодами,</span> <span class="ukr">втратила</span> <span
                            class="ukr">розгін,</span>
                        <span class="ukr">вп'ялася</span> <span class="ukr">місіонерові</span> <span
                            class="ukr">в</span> <span class="ukr">руку.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Навалу</span> <span class="ukr">несила</span> <span
                            class="ukr">було</span>
                        <span class="ukr">спинити.</span> <span class="ukr">Галявину</span> <span class="ukr">між</span>
                        <span class="ukr">таборами</span> <span class="ukr">геть</span> <span
                            class="ukr">устелило</span> <span class="ukr">трупом,</span>
                        <span class="ukr">але</span> <span class="ukr">індіяни</span>
                        <span class="ukr">котилися</span> <span class="ukr">вперед,</span> <span class="ukr">як</span>
                        <span class="ukr">хвиля</span> <span class="ukr">морська,</span>
                        <span class="ukr">що</span> <span class="ukr">розбивається</span> <span class="ukr">об</span>
                        <span class="ukr">вал</span> <span class="ukr">і</span> <span class="ukr">перекочується</span>
                        <span class="ukr">через</span>
                        <span class="ukr">нього,</span> <span class="ukr">Стерджес</span> <span class="ukr">Овен</span>
                        <span class="ukr">сховався</span> <span class="ukr">до</span> <span class="ukr">намету,</span>
                        <span class="ukr">а</span> <span class="ukr">інших</span> <span class="ukr">змела</span> <span
                            class="ukr">й</span>
                        <span class="ukr">поховала</span> <span class="ukr">під</span> <span class="ukr">собою</span>
                        <span class="ukr">ворожа</span> <span class="ukr">лавина.</span>
                        <span class="ukr">По</span> <span class="ukr">тому</span> <span class="ukr">лиш</span> <span
                            class="ukr">Гей</span>
                        <span class="ukr">Стокард</span> <span class="ukr">вибився</span>
                        <span class="ukr">на</span> <span class="ukr">поверхню,</span>
                        <span class="ukr">відкидаючи</span> <span class="ukr">від</span> <span class="ukr">себе</span>
                        <span class="ukr">індіян,</span> <span class="ukr">мов</span> <span class="ukr">писклявих</span>
                        <span class="ukr">цуценят.</span>
                        <span class="ukr">Темна</span> <span class="ukr">рука</span>
                        <span class="ukr">витягла</span> <span class="ukr">з-під</span>
                        <span class="ukr">матері</span> <span class="ukr">за</span>
                        <span class="ukr">ногу</span> <span class="ukr">хлопчика</span>
                        <span class="ukr">і</span> <span class="ukr">на</span> <span class="ukr">весь</span> <span
                            class="ukr">вимах</span>
                        <span class="ukr">ударила</span> <span class="ukr">ним</span> <span class="ukr">об</span> <span
                            class="ukr">колоду.</span> <span class="ukr">Стокард</span> <span class="ukr">розтяв</span>
                        <span class="ukr">індіянинові</span> <span class="ukr">голову</span> <span class="ukr">аж</span>
                        <span class="ukr">до</span> <span class="ukr">підборіддя,</span>
                        <span class="ukr">тоді</span> <span class="ukr">став</span>
                        <span class="ukr">розчищати</span> <span class="ukr">місце</span> <span
                            class="ukr">навкруг</span> <span class="ukr">себе.</span> <span class="ukr">Дедалі</span>
                        <span class="ukr">тісніше</span> <span class="ukr">збивалося</span>
                        <span class="ukr">коло</span> <span class="ukr">дикунське,</span> <span
                            class="ukr">засипаючи</span> <span class="ukr">його</span>
                        <span class="ukr">зубчатими</span> <span class="ukr">стрілами</span> <span class="ukr">й</span>
                        <span class="ukr">списами</span> <span class="ukr">з</span> <span class="ukr">кістяними</span>
                        <span class="ukr">вістрями.</span>
                        <span class="ukr">Зійшло</span> <span class="ukr">сонце,</span>
                        <span class="ukr">і</span> <span class="ukr">в</span> <span class="ukr">багряному</span> <span
                            class="ukr">промінні</span>
                        <span class="ukr">його</span> <span class="ukr">вороги</span>
                        <span class="ukr">то</span> <span class="ukr">наскакували,</span> <span class="ukr">то</span>
                        <span class="ukr">відступали.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">Вже</span> <span class="ukr">вдруге</span>
                        <span class="ukr">індіяни</span> <span class="ukr">накидалися</span> <span class="ukr">на</span>
                        <span class="ukr">Стокарда,</span> <span class="ukr">коли</span>
                        <span class="ukr">він</span> <span class="ukr">не</span> <span class="ukr">встигав</span> <span
                            class="ukr">учасно</span>
                        <span class="ukr">висмикнути</span> <span class="ukr">сокиру,</span> <span
                            class="ukr">але</span> <span class="ukr">він</span> <span class="ukr">відбивав</span> <span
                            class="ukr">напад.</span> <span class="ukr">Люди</span> <span class="ukr">валилися</span>
                        <span class="ukr">біля</span> <span class="ukr">нього,</span> <span class="ukr">він</span> <span
                            class="ukr">наступав</span> <span class="ukr">на</span> <span class="ukr">мертвих</span>
                        <span class="ukr">і</span> <span class="ukr">поранених,</span> <span class="ukr">земля</span>
                        <span class="ukr">була</span> <span class="ukr">мокра</span>
                        <span class="ukr">від</span> <span class="ukr">крові.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">А</span> <span class="ukr">сонце</span> <span
                            class="ukr">тим</span> <span class="ukr">часом</span> <span class="ukr">підбивалося</span>
                        <span class="ukr">вище,</span> <span class="ukr">і</span> <span class="ukr">голосніше</span>
                        <span class="ukr">співали</span>
                        <span class="ukr">вільшанки.</span> <span class="ukr">Врешті</span> <span
                            class="ukr">індіяни,</span>
                        <span class="ukr">вжахнувшись,</span> <span class="ukr">відступилися,</span> <span
                            class="ukr">а</span>
                        <span class="ukr">він,</span> <span class="ukr">насилу</span>
                        <span class="ukr">дихаючи,</span> <span class="ukr">сперся</span> <span class="ukr">на</span>
                        <span class="ukr">сокиру</span> <span class="ukr">відпочити.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Щоб</span> <span
                            class="ukr">мені</span> <span class="ukr">з</span> <span class="ukr">цього</span> <span
                            class="ukr">місця</span> <span class="ukr">не</span>
                        <span class="ukr">зійти,</span> <span class="ukr">ви</span> <span class="ukr">таки</span> <span
                            class="ukr">справжній</span>
                        <span class="ukr">чоловік!</span> <span class="ukr">—</span>
                        <span class="ukr">вигукнув</span> <span class="ukr">Батіст</span> <span
                            class="ukr">Рудий,</span> <span class="ukr">—</span> <span class="ukr">Зречіться</span>
                        <span class="ukr">своєї</span> <span class="ukr">віри</span> <span class="ukr">і</span> <span
                            class="ukr">будете</span> <span class="ukr">живі!</span> </p>
                    <p class="ukrainian"> <span class="ukr">Стокард</span> <span class="ukr">відмовився</span>
                        <span class="ukr">кволим</span> <span class="ukr">голосом,</span> <span class="ukr">але</span>
                        <span class="ukr">з</span> <span class="ukr">гідністю.</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Гляньте</span> <span
                            class="ukr">на</span> <span class="ukr">цю</span> <span class="ukr">бабу!</span> <span
                            class="ukr">—</span> <span class="ukr">сказав</span>
                        <span class="ukr">Батіст,</span> <span class="ukr">коли</span> <span class="ukr">до</span> <span
                            class="ukr">нього</span> <span class="ukr">привели</span> <span class="ukr">Стерджеса</span>
                        <span class="ukr">Овена.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">Місіонер</span> <span class="ukr">мав</span>
                        <span class="ukr">лише</span> <span class="ukr">подряпину</span> <span class="ukr">на</span>
                        <span class="ukr">руці,</span> <span class="ukr">але</span> <span class="ukr">невимовний</span>
                        <span class="ukr">переляк</span>
                        <span class="ukr">світився</span> <span class="ukr">йому</span>
                        <span class="ukr">в</span> <span class="ukr">очах.</span> <span class="ukr">Непевний</span>
                        <span class="ukr">його</span> <span class="ukr">погляд</span> <span class="ukr">застиг</span>
                        <span class="ukr">на</span> <span class="ukr">могутній</span> <span class="ukr">постаті</span>
                        <span class="ukr">богохульника</span> <span class="ukr">Стокарда,</span> <span
                            class="ukr">що</span> <span class="ukr">не</span> <span class="ukr">вважаючи</span> <span
                            class="ukr">на</span> <span class="ukr">рани,</span> <span class="ukr">зухвало</span> <span
                            class="ukr">стояв,</span>
                        <span class="ukr">спершись</span> <span class="ukr">на</span>
                        <span class="ukr">сокиру</span> <span class="ukr">—</span>
                        <span class="ukr">незворушний,</span> <span class="ukr">владний,</span> <span
                            class="ukr">недосяжний.</span> <span class="ukr">Стерджес</span> <span
                            class="ukr">Овен</span> <span class="ukr">відчув</span> <span class="ukr">велику</span>
                        <span class="ukr">заздрість</span> <span class="ukr">до</span> <span class="ukr">цього</span>
                        <span class="ukr">нечестивця,</span>
                        <span class="ukr">що</span> <span class="ukr">ставить</span>
                        <span class="ukr">смерті</span> <span class="ukr">ясне,</span>
                        <span class="ukr">сміливе</span> <span class="ukr">чоло.</span>
                        <span class="ukr">Коли</span> <span class="ukr">хто</span>
                        <span class="ukr">й</span> <span class="ukr">скидався</span>
                        <span class="ukr">на</span> <span class="ukr">Христа,</span>
                        <span class="ukr">то</span> <span class="ukr">не</span> <span class="ukr">він,</span> <span
                            class="ukr">Стерджес</span> <span class="ukr">Овен,</span> <span class="ukr">а</span> <span
                            class="ukr">той,</span> <span class="ukr">Гей</span> <span class="ukr">Стокард.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Чом</span> <span class="ukr">же</span> <span
                            class="ukr">не</span> <span class="ukr">він?</span> <span class="ukr">І</span> <span
                            class="ukr">знову</span> <span class="ukr">прокинувся</span> <span class="ukr">в</span>
                        <span class="ukr">ньому</span> <span class="ukr">прикрий</span> <span class="ukr">жаль</span>
                        <span class="ukr">на</span> <span class="ukr">своїх</span> <span class="ukr">предків,</span>
                        <span class="ukr">що</span> <span class="ukr">наділили</span>
                        <span class="ukr">його</span> <span class="ukr">таким</span>
                        <span class="ukr">кволим</span> <span class="ukr">духом.</span>
                        <span class="ukr">У</span> <span class="ukr">ньому</span> <span class="ukr">забуяв</span> <span
                            class="ukr">великий</span>
                        <span class="ukr">гнів</span> <span class="ukr">проти</span>
                        <span class="ukr">бога,</span> <span class="ukr">символу</span>
                        <span class="ukr">творчої</span> <span class="ukr">сили,</span>
                        <span class="ukr">що</span> <span class="ukr">сотворив</span>
                        <span class="ukr">його,</span> <span class="ukr">служника</span> <span class="ukr">свого,</span>
                        <span class="ukr">таким</span> <span class="ukr">плохим</span>
                        <span class="ukr">і</span> <span class="ukr">нікчемним.</span>
                        <span class="ukr">Навіть</span> <span class="ukr">дужча</span>
                        <span class="ukr">людина</span> <span class="ukr">в</span>
                        <span class="ukr">такій</span> <span class="ukr">пригоді</span>
                        <span class="ukr">могла</span> <span class="ukr">б</span> <span class="ukr">стати</span> <span
                            class="ukr">відступником,</span>
                        <span class="ukr">а</span> <span class="ukr">Стерджес</span>
                        <span class="ukr">Овен</span> <span class="ukr">і</span> <span class="ukr">поготів.</span> <span
                            class="ukr">Жахаючись</span>
                        <span class="ukr">кари</span> <span class="ukr">людської,</span> <span class="ukr">він</span>
                        <span class="ukr">знехтував</span> <span class="ukr">гнів</span>
                        <span class="ukr">божий.</span> <span class="ukr">Виходить,</span> <span class="ukr">він</span>
                        <span class="ukr">піднісся</span> <span class="ukr">так</span> <span class="ukr">високо</span>
                        <span class="ukr">в</span> <span class="ukr">служінні</span> <span class="ukr">богові</span>
                        <span class="ukr">лиш</span> <span class="ukr">на</span> <span class="ukr">те,</span> <span
                            class="ukr">щоб</span>
                        <span class="ukr">звисока</span> <span class="ukr">впасти</span>
                        <span class="ukr">додолу.</span> <span class="ukr">Віра</span>
                        <span class="ukr">його</span> <span class="ukr">була</span>
                        <span class="ukr">поверхова.</span> <span class="ukr">Йому</span> <span class="ukr">не</span>
                        <span class="ukr">дано</span> <span class="ukr">сили</span> <span class="ukr">духа</span> <span
                            class="ukr">обстоювати</span>
                        <span class="ukr">її,</span> <span class="ukr">і</span> <span class="ukr">це</span> <span
                            class="ukr">було</span>
                        <span class="ukr">несправедливо.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">Ну,</span> <span class="ukr">то</span> <span
                            class="ukr">де</span>
                        <span class="ukr">тепер</span> <span class="ukr">твій</span> <span class="ukr">бог?</span> <span
                            class="ukr">—</span> <span class="ukr">глузливо</span> <span class="ukr">спитався</span>
                        <span class="ukr">Батіст</span> <span class="ukr">Рудий.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Не</span> <span
                            class="ukr">знаю,</span> <span class="ukr">—</span> <span class="ukr">слухняно</span> <span
                            class="ukr">відповів</span> <span class="ukr">він,</span> <span class="ukr">як</span> <span
                            class="ukr">школяр</span> <span class="ukr">учителеві</span> <span class="ukr">закону</span>
                        <span class="ukr">божого.</span> </p>
                    <p class="ukrainian">
                        <span class="ukr">—</span> <span class="ukr">А</span> <span class="ukr">взагалі</span> <span
                            class="ukr">віриш</span> <span class="ukr">ти</span> <span class="ukr">в</span> <span
                            class="ukr">бога?</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Вірив…</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">А</span> <span
                            class="ukr">тепер?</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Тепер</span> <span
                            class="ukr">ні…</span> </p>
                    <p class="ukrainian"> <span class="ukr">Гей</span> <span class="ukr">Стокард</span> <span
                            class="ukr">обтер</span> <span class="ukr">з</span> <span class="ukr">лиця</span> <span
                            class="ukr">кров</span> <span class="ukr">і</span>
                        <span class="ukr">посміхнувся.</span> <span class="ukr">Стерджес</span> <span
                            class="ukr">Овен</span> <span class="ukr">здивовано</span> <span class="ukr">глянув</span>
                        <span class="ukr">на</span> <span class="ukr">нього,</span>
                        <span class="ukr">немов</span> <span class="ukr">крізь</span>
                        <span class="ukr">сон.</span> <span class="ukr">Між</span>
                        <span class="ukr">ними</span> <span class="ukr">вже</span>
                        <span class="ukr">пролягала</span> <span class="ukr">безмірно</span> <span
                            class="ukr">далека</span>
                        <span class="ukr">відстань,</span> <span class="ukr">наче</span> <span class="ukr">до</span>
                        <span class="ukr">того,</span> <span class="ukr">що</span> <span class="ukr">сталося</span>
                        <span class="ukr">й</span>
                        <span class="ukr">що</span> <span class="ukr">мало</span> <span class="ukr">статися,</span>
                        <span class="ukr">він</span> <span class="ukr">зовсім</span> <span class="ukr">не</span> <span
                            class="ukr">був</span>
                        <span class="ukr">причетний.</span>
                        <span class="ukr">Він</span> <span class="ukr">був</span> <span class="ukr">тільки</span> <span
                            class="ukr">глядачем,</span>
                        <span class="ukr">дивився</span> <span class="ukr">лиш</span>
                        <span class="ukr">збоку,</span> <span class="ukr">авжеж,</span>
                        <span class="ukr">віддалік.</span> <span class="ukr">Голос</span> <span
                            class="ukr">Батіста</span> <span class="ukr">Рудого</span> <span class="ukr">ледве</span>
                        <span class="ukr">долинав</span> <span class="ukr">до</span> <span class="ukr">нього.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Дуже</span> <span
                            class="ukr">добре.</span> <span class="ukr">Я</span> <span class="ukr">дарую</span> <span
                            class="ukr">цьому</span> <span class="ukr">чоловікові</span> <span class="ukr">волю,</span>
                        <span class="ukr">не</span> <span class="ukr">чиніть</span>
                        <span class="ukr">йому</span> <span class="ukr">ніякого</span>
                        <span class="ukr">лиха.</span> <span class="ukr">Нехай</span>
                        <span class="ukr">іде</span> <span class="ukr">з</span> <span class="ukr">миром.</span> <span
                            class="ukr">Дайте</span> <span class="ukr">йому</span> <span class="ukr">човна</span> <span
                            class="ukr">та</span> <span class="ukr">харчів</span> <span class="ukr">на</span> <span
                            class="ukr">дорогу</span> <span class="ukr">й</span> <span class="ukr">покажіть,</span>
                        <span class="ukr">куди</span> <span class="ukr">плисти</span> <span class="ukr">до</span> <span
                            class="ukr">росіян,</span> <span class="ukr">нехай</span> <span
                            class="ukr">оповістить</span>
                        <span class="ukr">їхнім</span> <span class="ukr">жерцям</span>
                        <span class="ukr">про</span> <span class="ukr">Батіста</span>
                        <span class="ukr">Рудого</span> <span class="ukr">і</span>
                        <span class="ukr">його</span> <span class="ukr">землю,</span>
                        <span class="ukr">де</span> <span class="ukr">не</span> <span class="ukr">визнають</span> <span
                            class="ukr">ніякого</span>
                        <span class="ukr">бога.</span> </p>
                    <p class="ukrainian"> <span class="ukr">Індіяни</span> <span class="ukr">підвели</span>
                        <span class="ukr">місіонера</span> <span class="ukr">до</span>
                        <span class="ukr">стрімкого</span> <span class="ukr">берега</span> <span class="ukr">й</span>
                        <span class="ukr">там</span> <span class="ukr">спинилися</span> <span
                            class="ukr">додивитись</span> <span class="ukr">трагедію</span>
                        <span class="ukr">до</span> <span class="ukr">кінця.</span>
                        <span class="ukr">Батіст</span> <span class="ukr">Рудий</span>
                        <span class="ukr">обернувся</span> <span class="ukr">до</span>
                        <span class="ukr">Гея</span> <span class="ukr">Стокарда:</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Правда,</span> <span
                            class="ukr">що</span> <span class="ukr">немає</span> <span class="ukr">бога?</span> </p>
                    <p class="ukrainian"> <span class="ukr">У</span> <span class="ukr">відповідь</span> <span
                            class="ukr">той</span> <span class="ukr">посміхнувся.</span> <span class="ukr">Один</span>
                        <span class="ukr">із</span> <span class="ukr">молодих</span>
                        <span class="ukr">індіян</span> <span class="ukr">наставив</span> <span
                            class="ukr">списа.</span>
                    </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ви</span> <span
                            class="ukr">віруєте</span> <span class="ukr">в</span> <span class="ukr">бога?</span> </p>
                    <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Так.</span> <span
                            class="ukr">У</span> <span class="ukr">бога</span> <span class="ukr">моїх</span> <span
                            class="ukr">батьків</span> <span class="ukr">вірую.</span> </p>
                    <p class="ukrainian"> <span class="ukr">І</span> <span class="ukr">він</span> <span
                            class="ukr">ще</span> <span class="ukr">дужче</span> <span class="ukr">стиснув</span> <span
                            class="ukr">сокиру.</span> <span class="ukr">Батіст</span>
                        <span class="ukr">Рудий</span> <span class="ukr">дав</span>
                        <span class="ukr">знак,</span> <span class="ukr">і</span> <span class="ukr">молодий</span> <span
                            class="ukr">індіянин</span>
                        <span class="ukr">пробив</span> <span class="ukr">списом</span>
                        <span class="ukr">Стокардові</span> <span class="ukr">груди.</span> <span
                            class="ukr">Стерджес</span>
                        <span class="ukr">побачив,</span> <span class="ukr">як</span>
                        <span class="ukr">кістяне</span> <span class="ukr">вістря</span> <span class="ukr">вийшло</span>
                        <span class="ukr">наскрізь;</span> <span class="ukr">побачив</span>
                        <span class="ukr">Стокарда,</span> <span class="ukr">що,</span>
                        <span class="ukr">як</span> <span class="ukr">і</span> <span class="ukr">перше,</span> <span
                            class="ukr">посміхаючись,</span> <span class="ukr">захитався</span> <span
                            class="ukr">й</span> <span class="ukr">помалу</span> <span class="ukr">повалився</span>
                        <span class="ukr">на</span> <span class="ukr">землю;</span>
                        <span class="ukr">почув,</span> <span class="ukr">як</span>
                        <span class="ukr">тріснув</span> <span class="ukr">зламаний</span> <span
                            class="ukr">держак</span>
                        <span class="ukr">описовий.</span> <span class="ukr">Тоді</span> <span class="ukr">він</span>
                        <span class="ukr">поплив</span> <span class="ukr">униз,</span> <span class="ukr">щоб</span>
                        <span class="ukr">оповісти</span> <span class="ukr">росіянам</span> <span class="ukr">про</span>
                        <span class="ukr">Батіста</span> <span class="ukr">Рудого</span>
                        <span class="ukr">і</span> <span class="ukr">про</span> <span class="ukr">землю</span> <span
                            class="ukr">його,</span> <span class="ukr">де</span> <span class="ukr">не</span> <span
                            class="ukr">визнають</span> <span class="ukr">ніякого</span>
                        <span class="ukr">бога.</span>

            </section>


        </main>
        <article>
            <p id="word"></p>
            <p id="transl"></p>
        </article>

       
        <article>

            <p id="pageNumber"></p>

        </article>
<script>
 
var user = "<?php echo ($user_check); ?>";
 </script>
         <script src="js/script.js"></script>
     
</body>

</html>
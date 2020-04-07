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
    <title>Bradbury The Sound of Thunder - книжка-білінгва: англійською з паралельним українським перекладом (читати онлайн)</title>
    <meta name="keywords" content="Bradbury The Sound of Thunder, книжка-білінгва, англійською, українською, з паралельним перекладом, читати онлайн, безкоштовно" />
    	  <meta name="description" content="Bradbury The Sound of Thunder, Бредбері І вдарив грім - книжка-білінгва: англійською з паралельним українським перекладом (читати онлайн)" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link
		href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Bad+Script|Caveat:700|EB+Garamond:500i|Gabriela|Kurale|Marck+Script|Neucha|Pattaya|Ruslan+Display&amp;subset=cyrillic"
		rel="stylesheet">
</head>

<body>

    <a id= "" href="index.html">
        <p id="logo"><i id="logo1" class="fas fa-language"></i></p></a>
        <p id="name"></p>

        <main id="container" tabindex="1">
            <div id="loader"></div>



            <section>

                <p class="english"><span class=”engl”>The</span> <span class="engl">sign</span> <span
                        class="engl">on</span>
                    <span class="engl">the</span> <span class="engl">wall</span> <span class="engl">seemed</span> <span
                        class="engl">to</span> <span class="engl">quaver</span> <span class="engl">under</span>
                    <span class="engl">a</span> <span class="engl">film</span>
                    <span class="engl">of</span> <span class="engl">sliding</span> <span class="engl">warm</span>
                    <span class="engl">water,</span> <span class="engl">Eckels</span> <span class="engl">felt</span>
                    <span class="engl">his</span> <span class="engl">eyelids</span> <span class="engl">blink</span>
                    <span class="engl">over</span> <span class="engl">his</span>
                    <span class="engl">stare,</span> <span class="engl">and</span> <span class="engl">the</span> <span
                        class="engl">sign</span> <span class="engl">burned</span>
                    <span class="engl">in</span> <span class="engl">this</span>
                    <span class="engl">momentary</span> <span class="engl">darkness:</span> </p>
                <p class="english"> <span class="engl">TIME</span> <span class="engl">SAFARI,</span>
                    <span class="engl">INC.</span> </p>
                <p class="english"> <span class="engl">SAFARIS</span> <span class="engl">TO</span>
                    <span class="engl">ANY</span> <span class="engl">YEAR</span>
                    <span class="engl">IN</span> <span class="engl">THE</span>
                    <span class="engl">PAST.</span> </p>
                <p class="english"> <span class="engl">YOU</span> <span class="engl">NAME</span> <span
                        class="engl">THE</span> <span class="engl">ANIMAL.</span>
                </p>
                <p class="english"> <span class="engl">WE</span> <span class="engl">TAKE</span> <span
                        class="engl">YOU</span> <span class="engl">THERE.</span> </p>
                <p class="english"> <span class="engl">YOU</span> <span class="engl">SHOOT</span> <span
                        class="engl">IT.</span> </p>
                <p class="english"> <span class="engl">A</span> <span class="engl">warm</span> <span
                        class="engl">phlegm</span> <span class="engl">gathered</span>
                    <span class="engl">in</span> <span class="engl">Eckels’</span> <span class="engl">throat;</span>
                    <span class="engl">he</span> <span class="engl">swallowed</span> <span class="engl">and</span>
                    <span class="engl">pushed</span> <span class="engl">it</span>
                    <span class="engl">down.</span> <span class="engl">The</span>
                    <span class="engl">muscles</span> <span class="engl">around</span> <span class="engl">his</span>
                    <span class="engl">mouth</span> <span class="engl">formed</span> <span class="engl">a</span> <span
                        class="engl">smile</span> <span class="engl">as</span> <span class="engl">he</span> <span
                        class="engl">put</span> <span class="engl">his</span> <span class="engl">hand</span> <span
                        class="engl">slowly</span> <span class="engl">out</span>
                    <span class="engl">upon</span> <span class="engl">the</span>
                    <span class="engl">air,</span> <span class="engl">and</span>
                    <span class="engl">in</span> <span class="engl">that</span>
                    <span class="engl">hand</span> <span class="engl">waved</span> <span class="engl">a</span> <span
                        class="engl">check</span> <span class="engl">for</span> <span class="engl">ten</span> <span
                        class="engl">thousand</span>
                    <span class="engl">dollars</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">man</span> <span class="engl">behind</span>
                    <span class="engl">the</span> <span class="engl">desk.</span>
                </p>
                <p class="english"> <span class="engl">“Does</span> <span class="engl">this</span> <span
                        class="engl">safari</span>
                    <span class="engl">guarantee</span> <span class="engl">I</span> <span class="engl">come</span> <span
                        class="engl">back</span> <span class="engl">alive?”</span>
                </p>
                <p class="english"> <span class="engl">“We</span> <span class="engl">guarantee</span> <span
                        class="engl">nothing,”</span> <span class="engl">said</span>
                    <span class="engl">the</span> <span class="engl">official,</span> <span class="engl">“except</span>
                    <span class="engl">the</span>
                    <span class="engl">dinosaurs.”</span> <span class="engl">He</span> <span class="engl">turned.</span>
                    <span class="engl">“This</span> <span class="engl">is</span>
                    <span class="engl">Mr.</span> <span class="engl">Travis,</span> <span class="engl">your</span>
                    <span class="engl">Safari</span> <span class="engl">Guide</span> <span class="engl">in</span> <span
                        class="engl">the</span> <span class="engl">Past.</span> <span class="engl">He’ll</span> <span
                        class="engl">tell</span>
                    <span class="engl">you</span> <span class="engl">what</span>
                    <span class="engl">and</span> <span class="engl">where</span>
                    <span class="engl">to</span> <span class="engl">shoot.</span>
                    <span class="engl">If</span> <span class="engl">he</span>
                    <span class="engl">says</span> <span class="engl">no</span>
                    <span class="engl">shooting,</span> <span class="engl">no</span> <span class="engl">shooting.</span>
                    <span class="engl">If</span> <span class="engl">you</span>
                    <span class="engl">disobey</span> <span class="engl">instructions,</span> <span
                        class="engl">there’s</span> <span class="engl">a</span> <span class="engl">stiff</span> <span
                        class="engl">penalty</span>
                    <span class="engl">of</span> <span class="engl">another</span> <span class="engl">ten</span>
                    <span class="engl">thousand</span> <span class="engl">dollars,</span> <span class="engl">plus</span>
                    <span class="engl">possible</span> <span class="engl">government</span> <span
                        class="engl">action,</span> <span class="engl">on</span>
                    <span class="engl">your</span> <span class="engl">return.”</span> </p>
                <p class="english"> <span class="engl">Eckels</span> <span class="engl">glanced</span>
                    <span class="engl">across</span> <span class="engl">the</span> <span class="engl">vast</span> <span
                        class="engl">office</span> <span class="engl">at</span> <span class="engl">a</span> <span
                        class="engl">mass</span> <span class="engl">and</span> <span class="engl">tangle,</span>
                    <span class="engl">a</span> <span class="engl">snaking</span>
                    <span class="engl">and</span> <span class="engl">humming</span> <span class="engl">of</span>
                    <span class="engl">wires</span> <span class="engl">and</span>
                    <span class="engl">steel</span> <span class="engl">boxes,</span> <span class="engl">at</span> <span
                        class="engl">an</span> <span class="engl">aurora</span> <span class="engl">that</span> <span
                        class="engl">flickered</span>
                    <span class="engl">now</span> <span class="engl">orange,</span> <span class="engl">now</span>
                    <span class="engl">silver,</span> <span class="engl">now</span> <span class="engl">blue.</span>
                    <span class="engl">There</span> <span class="engl">was</span> <span class="engl">a</span> <span
                        class="engl">sound</span> <span class="engl">like</span> <span class="engl">a</span> <span
                        class="engl">gigantic</span> <span class="engl">bonfire</span> <span class="engl">burning</span>
                    <span class="engl">all</span> <span class="engl">of</span>
                    <span class="engl">Time,</span> <span class="engl">all</span>
                    <span class="engl">the</span> <span class="engl">years</span>
                    <span class="engl">and</span> <span class="engl">all</span>
                    <span class="engl">the</span> <span class="engl">parchment</span> <span
                        class="engl">calendars,</span>
                    <span class="engl">all</span>
                    <span class="engl">the</span> <span class="engl">hours</span>
                    <span class="engl">piled</span> <span class="engl">high</span> <span class="engl">and</span> <span
                        class="engl">set</span> <span class="engl">aflame.</span>
                </p>
                <p class="english"> <span class="engl">A</span> <span class="engl">touch</span> <span
                        class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">hand</span> <span class="engl">and</span> <span
                        class="engl">this</span> <span class="engl">burning</span> <span class="engl">would,</span>
                    <span class="engl">on</span> <span class="engl">the</span>
                    <span class="engl">instant,</span> <span class="engl">beautifully</span> <span
                        class="engl">reverse</span> <span class="engl">itself.</span>
                    <span class="engl">Eckels</span> <span class="engl">remembered</span> <span class="engl">the</span>
                    <span class="engl">wording</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">advertisements</span> <span class="engl">to</span> <span class="engl">the</span>
                    <span class="engl">letter.</span> <span class="engl">Out</span>
                    <span class="engl">of</span> <span class="engl">chars</span>
                    <span class="engl">and</span> <span class="engl">ashes,</span> <span class="engl">out</span>
                    <span class="engl">of</span> <span class="engl">dust</span>
                    <span class="engl">and</span> <span class="engl">coals,</span> <span class="engl">like</span>
                    <span class="engl">golden</span> <span class="engl">salamanders,</span> <span
                        class="engl">the</span>
                    <span class="engl">old</span> <span class="engl">years,</span> <span class="engl">the</span>
                    <span class="engl">green</span> <span class="engl">years,</span> <span class="engl">might</span>
                    <span class="engl">leap;</span> <span class="engl">roses</span> <span class="engl">sweeten</span>
                    <span class="engl">the</span> <span class="engl">air,</span>
                    <span class="engl">white</span> <span class="engl">hair</span> <span class="engl">turn</span> <span
                        class="engl">Irish-black,</span> <span class="engl">wrinkles</span> <span
                        class="engl">vanish;</span> <span class="engl">all,</span>
                    <span class="engl">everything</span> <span class="engl">fly</span> <span class="engl">back</span>
                    <span class="engl">to</span> <span class="engl">seed,</span> <span class="engl">flee</span> <span
                        class="engl">death,</span>
                    <span class="engl">rush</span> <span class="engl">down</span>
                    <span class="engl">to</span> <span class="engl">their</span>
                    <span class="engl">beginnings,</span> <span class="engl">suns</span> <span class="engl">rise</span>
                    <span class="engl">in</span> <span class="engl">western</span>
                    <span class="engl">skies</span> <span class="engl">and</span>
                    <span class="engl">set</span> <span class="engl">in</span>
                    <span class="engl">glorious</span> <span class="engl">easts,</span> <span class="engl">moons</span>
                    <span class="engl">eat</span> <span class="engl">themselves</span> <span
                        class="engl">opposite</span>
                    <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">custom,</span> <span class="engl">all</span>
                    <span class="engl">and</span> <span class="engl">everything</span> <span class="engl">cupping</span>
                    <span class="engl">one</span>
                    <span class="engl">in</span> <span class="engl">another</span> <span class="engl">like</span>
                    <span class="engl">Chinese</span> <span class="engl">boxes,</span> <span class="engl">rabbits</span>
                    <span class="engl">in</span> <span class="engl">hats,</span>
                    <span class="engl">all</span> <span class="engl">and</span>
                    <span class="engl">everything</span> <span class="engl">returning</span> <span
                        class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">fresh</span>
                    <span class="engl">death,</span> <span class="engl">the</span> <span class="engl">seed</span> <span
                        class="engl">death,</span> <span class="engl">the</span>
                    <span class="engl">green</span> <span class="engl">death,</span> <span class="engl">to</span> <span
                        class="engl">the</span> <span class="engl">time</span> <span class="engl">before</span> <span
                        class="engl">the</span>
                    <span class="engl">beginning.</span> <span class="engl">A</span> <span class="engl">touch</span>
                    <span class="engl">of</span> <span class="engl">a</span> <span class="engl">hand</span> <span
                        class="engl">might</span>
                    <span class="engl">do</span> <span class="engl">it,</span>
                    <span class="engl">the</span> <span class="engl">merest</span> <span class="engl">touch</span>
                    <span class="engl">of</span> <span class="engl">a</span>
                    <span class="engl">hand.</span> </p>
                <p class="english"> <span class="engl">“Hell</span> <span class="engl">and</span> <span
                        class="engl">damn,”</span> <span class="engl">Eckels</span>
                    <span class="engl">breathed,</span> <span class="engl">the</span> <span class="engl">light</span>
                    <span class="engl">of</span> <span class="engl">the</span> <span class="engl">Machine</span> <span
                        class="engl">on</span>
                    <span class="engl">his</span> <span class="engl">thin</span>
                    <span class="engl">face.</span> <span class="engl">“A</span>
                    <span class="engl">real</span> <span class="engl">Time</span>
                    <span class="engl">Machine.”</span> <span class="engl">He</span> <span class="engl">shook</span>
                    <span class="engl">his</span> <span class="engl">head.</span> <span class="engl">“Makes</span> <span
                        class="engl">you</span>
                    <span class="engl">think.</span> <span class="engl">If</span>
                    <span class="engl">the</span> <span class="engl">election</span> <span class="engl">had</span>
                    <span class="engl">gone</span> <span class="engl">badly</span> <span class="engl">yesterday,</span>
                    <span class="engl">I</span>
                    <span class="engl">might</span> <span class="engl">be</span>
                    <span class="engl">here</span> <span class="engl">now</span>
                    <span class="engl">running</span> <span class="engl">away</span> <span class="engl">from</span>
                    <span class="engl">the</span> <span class="engl">results.</span>
                    <span class="engl">Thank</span> <span class="engl">God</span>
                    <span class="engl">Keith</span> <span class="engl">won.</span> <span class="engl">He’ll</span>
                    <span class="engl">make</span> <span class="engl">a</span>
                    <span class="engl">fine</span> <span class="engl">President</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">United</span> <span class="engl">States.”</span>
                </p>
                <p class="english"> <span class="engl">“Yes,”</span>
                    <span class="engl">said</span> <span class="engl">the</span>
                    <span class="engl">man</span> <span class="engl">behind</span> <span class="engl">the</span>
                    <span class="engl">desk.</span> <span class="engl">“Were</span> <span class="engl">lucky.</span>
                    <span class="engl">If</span> <span class="engl">Deutscher</span> <span class="engl">had</span>
                    <span class="engl">gotten</span> <span class="engl">in,</span> <span class="engl">we’d</span> <span
                        class="engl">have</span> <span class="engl">the</span> <span class="engl">worst</span> <span
                        class="engl">kind</span>
                    <span class="engl">of</span> <span class="engl">dictatorship.</span> <span
                        class="engl">There’s</span>
                    <span class="engl">an</span>
                    <span class="engl">anti-everything</span> <span class="engl">man</span> <span
                        class="engl">for</span>
                    <span class="engl">you,</span> <span class="engl">a</span> <span class="engl">militarist,</span>
                    <span class="engl">anti-Christ,</span> <span class="engl">anti-human,</span> <span
                        class="engl">anti-intellectual.</span> <span class="engl">People</span> <span
                        class="engl">called</span>
                    <span class="engl">us</span> <span class="engl">up,</span>
                    <span class="engl">you</span> <span class="engl">know,</span>
                    <span class="engl">joking</span> <span class="engl">but</span> <span class="engl">not</span> <span
                        class="engl">joking.</span> <span class="engl">Said</span>
                    <span class="engl">if</span> <span class="engl">Deutscher</span> <span class="engl">became</span>
                    <span class="engl">President</span> <span class="engl">they</span>
                    <span class="engl">wanted</span> <span class="engl">to</span>
                    <span class="engl">go</span> <span class="engl">live</span>
                    <span class="engl">in</span> <span class="engl">1492.</span>
                    <span class="engl">Of</span> <span class="engl">course</span>
                    <span class="engl">it’s</span> <span class="engl">not</span>
                    <span class="engl">our</span> <span class="engl">business</span> <span class="engl">to</span>
                    <span class="engl">conduct</span> <span class="engl">Escapes,</span> <span class="engl">but</span>
                    <span class="engl">to</span> <span class="engl">form</span>
                    <span class="engl">Safaris.</span> <span class="engl">Anyway,</span> <span
                        class="engl">Keith’s</span>
                    <span class="engl">President</span> <span class="engl">now.</span> <span class="engl">All</span>
                    <span class="engl">you</span> <span class="engl">got</span> <span class="engl">to</span> <span
                        class="engl">worry</span> <span class="engl">about</span> <span class="engl">is”</span> </p>
                <p class="english"> <span class="engl">“Shooting</span> <span class="engl">my</span> <span
                        class="engl">dinosaur,”</span>
                    <span class="engl">Eckels</span> <span class="engl">finished</span> <span class="engl">it</span>
                    <span class="engl">for</span> <span class="engl">him.</span>
                </p>
                <p class="english"> <span class="engl">“A</span> <span class="engl">Tyrannosaurus</span> <span
                        class="engl">Rex.</span> <span class="engl">The</span> <span class="engl">Thunder</span> <span
                        class="engl">Lizard,</span>
                    <span class="engl">the</span> <span class="engl">damnedest</span> <span class="engl">monster</span>
                    <span class="engl">in</span>
                    <span class="engl">history.</span> <span class="engl">Sign</span> <span class="engl">this</span>
                    <span class="engl">release.</span> <span class="engl">Anything</span> <span
                        class="engl">happens</span>
                    <span class="engl">to</span>
                    <span class="engl">you,</span> <span class="engl">we’re</span> <span class="engl">not</span> <span
                        class="engl">responsible.</span> <span class="engl">Those</span> <span
                        class="engl">dinosaurs</span>
                    <span class="engl">are</span> <span class="engl">hungry.”</span> </p>
                <p class="english"> <span class="engl">Eckels</span> <span class="engl">flushed</span>
                    <span class="engl">angrily.</span> <span class="engl">“Trying</span> <span class="engl">to</span>
                    <span class="engl">scare</span> <span class="engl">me!”</span> </p>
                <p class="english"> <span class="engl">“Frankly,</span> <span class="engl">yes.</span>
                    <span class="engl">We</span> <span class="engl">don’t</span>
                    <span class="engl">want</span> <span class="engl">anyone</span> <span class="engl">going</span>
                    <span class="engl">who’ll</span> <span class="engl">panic</span> <span class="engl">at</span> <span
                        class="engl">the</span> <span class="engl">first</span> <span class="engl">shot.</span> <span
                        class="engl">Six</span> <span class="engl">Safari</span> <span class="engl">leaders</span>
                    <span class="engl">were</span> <span class="engl">killed</span> <span class="engl">last</span>
                    <span class="engl">year,</span> <span class="engl">and</span>
                    <span class="engl">a</span> <span class="engl">dozen</span>
                    <span class="engl">hunters.</span> <span class="engl">We’re</span> <span class="engl">here</span>
                    <span class="engl">to</span> <span class="engl">give</span>
                    <span class="engl">you</span> <span class="engl">the</span>
                    <span class="engl">damnedest</span> <span class="engl">thrill</span> <span class="engl">a</span>
                    <span class="engl">real</span> <span class="engl">hunter</span>
                    <span class="engl">ever</span> <span class="engl">asked</span> <span class="engl">for.</span>
                    <span class="engl">Travelling</span> <span class="engl">you</span> <span class="engl">back</span>
                    <span class="engl">sixty</span> <span class="engl">million</span>
                    <span class="engl">years</span> <span class="engl">to</span>
                    <span class="engl">bag</span> <span class="engl">the</span>
                    <span class="engl">biggest</span> <span class="engl">damned</span> <span class="engl">game</span>
                    <span class="engl">in</span> <span class="engl">all</span>
                    <span class="engl">Time.</span> <span class="engl">Your</span> <span class="engl">personal</span>
                    <span class="engl">check’s</span> <span class="engl">still</span> <span class="engl">there.</span>
                    <span class="engl">Tear</span> <span class="engl">it</span>
                    <span class="engl">up.”</span> </p>
                <p class="english"> <span class="engl">Mr.</span> <span class="engl">Eckels</span>
                    <span class="engl">looked</span> <span class="engl">at</span>
                    <span class="engl">the</span> <span class="engl">check</span>
                    <span class="engl">for</span> <span class="engl">a</span>
                    <span class="engl">long</span> <span class="engl">time.</span> <span class="engl">His</span> <span
                        class="engl">fingers</span> <span class="engl">twitched.</span> </p>
                <p class="english"> <span class="engl">“Good</span> <span class="engl">luck,”</span>
                    <span class="engl">said</span> <span class="engl">the</span>
                    <span class="engl">man</span> <span class="engl">behind</span> <span class="engl">the</span>
                    <span class="engl">desk.</span> <span class="engl">“Mr.</span> <span class="engl">Travis,</span>
                    <span class="engl">he’s</span> <span class="engl">all</span>
                    <span class="engl">yours.”</span> </p>
                <p class="english">
                    <span class="engl">They</span> <span class="engl">moved</span> <span class="engl">silently</span>
                    <span class="engl">across</span> <span class="engl">the</span> <span class="engl">room,</span> <span
                        class="engl">taking</span> <span class="engl">their</span>
                    <span class="engl">guns</span> <span class="engl">with</span>
                    <span class="engl">them,</span> <span class="engl">toward</span> <span class="engl">the</span>
                    <span class="engl">Machine,</span> <span class="engl">toward</span> <span class="engl">the</span>
                    <span class="engl">silver</span> <span class="engl">metal</span> <span class="engl">and</span> <span
                        class="engl">the</span> <span class="engl">roaring</span>
                    <span class="engl">light.</span> </p>
                <p class="english">
                    <span class="engl">First</span> <span class="engl">a</span>
                    <span class="engl">day</span> <span class="engl">and</span>
                    <span class="engl">then</span> <span class="engl">a</span>
                    <span class="engl">night</span> <span class="engl">and</span>
                    <span class="engl">then</span> <span class="engl">a</span>
                    <span class="engl">day</span> <span class="engl">and</span>
                    <span class="engl">then</span> <span class="engl">a</span>
                    <span class="engl">night,</span> <span class="engl">then</span> <span class="engl">it</span> <span
                        class="engl">was</span> <span class="engl">day-night-day-night-day.</span> <span
                        class="engl">A</span> <span class="engl">week,</span> <span class="engl">a</span> <span
                        class="engl">month,</span> <span class="engl">a</span> <span class="engl">year,</span> <span
                        class="engl">a</span> <span class="engl">decade!</span> <span class="engl">A.D.</span> <span
                        class="engl">2055.</span>
                    <span class="engl">A.D.</span> <span class="engl">zoic).</span> <span class="engl">1999!</span>
                    <span class="engl">1957!</span> </p>
                <p class="english"> <span class="engl">Gone!</span> <span class="engl">The</span> <span
                        class="engl">Machine</span> <span class="engl">roared.</span>
                </p>
                <p class="english"> <span class="engl">They</span> <span class="engl">put</span> <span
                        class="engl">on</span> <span class="engl">their</span> <span class="engl">oxygen</span>
                    <span class="engl">helmets</span> <span class="engl">and</span> <span class="engl">tested</span>
                    <span class="engl">the</span> <span class="engl">intercoms.</span> </p>
                <p class="english"> <span class="engl">Eckels</span> <span class="engl">swayed</span>
                    <span class="engl">on</span> <span class="engl">the</span>
                    <span class="engl">padded</span> <span class="engl">seat,</span> <span class="engl">his</span> <span
                        class="engl">face</span> <span class="engl">pale,</span>
                    <span class="engl">his</span> <span class="engl">jaws</span>
                    <span class="engl">stiff.</span> <span class="engl">He</span>
                    <span class="engl">felt</span> <span class="engl">the</span>
                    <span class="engl">trembling</span> <span class="engl">in</span> <span class="engl">his</span> <span
                        class="engl">arms</span> <span class="engl">and</span> <span class="engl">he</span> <span
                        class="engl">looked</span> <span class="engl">down</span> <span class="engl">and</span> <span
                        class="engl">found</span> <span class="engl">his</span> <span class="engl">hands</span> <span
                        class="engl">tight</span>
                    <span class="engl">on</span> <span class="engl">the</span>
                    <span class="engl">new</span> <span class="engl">rifle.</span> <span class="engl">There</span>
                    <span class="engl">were</span> <span class="engl">four</span>
                    <span class="engl">other</span> <span class="engl">men</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">Machine.</span> <span class="engl">Travis,</span> <span class="engl">the</span>
                    <span class="engl">Safari</span> <span class="engl">Leader,</span> <span class="engl">his</span>
                    <span class="engl">assistant,</span> <span class="engl">Lesperance,</span> <span
                        class="engl">and</span>
                    <span class="engl">two</span> <span class="engl">other</span>
                    <span class="engl">hunters,</span> <span class="engl">Billings</span> <span class="engl">and</span>
                    <span class="engl">Kramer.</span> <span class="engl">They</span> <span class="engl">sat</span> <span
                        class="engl">looking</span> <span class="engl">at</span>
                    <span class="engl">each</span> <span class="engl">other,</span> <span class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">years</span>
                    <span class="engl">blazed</span> <span class="engl">around</span> <span class="engl">them.</span>
                </p>
                <p class="english"> <span class="engl">“Can</span> <span class="engl">these</span> <span
                        class="engl">guns</span>
                    <span class="engl">get</span> <span class="engl">a</span>
                    <span class="engl">dinosaur</span> <span class="engl">cold?”</span> <span class="engl">Eckels</span>
                    <span class="engl">felt</span> <span class="engl">his</span>
                    <span class="engl">mouth</span> <span class="engl">saying.</span> </p>
                <p class="english"> <span class="engl">“If</span> <span class="engl">you</span> <span
                        class="engl">hit</span> <span class="engl">them</span> <span class="engl">right,”</span> <span
                        class="engl">said</span>
                    <span class="engl">Travis</span> <span class="engl">on</span>
                    <span class="engl">the</span> <span class="engl">helmet</span> <span class="engl">radio.</span>
                    <span class="engl">“Some</span> <span class="engl">dinosaurs</span> <span class="engl">have</span>
                    <span class="engl">two</span> <span class="engl">brains,</span> <span class="engl">one</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">head,</span> <span class="engl">another</span> <span class="engl">far</span>
                    <span class="engl">down</span> <span class="engl">the</span>
                    <span class="engl">spinal</span> <span class="engl">column.</span> <span class="engl">We</span>
                    <span class="engl">stay</span> <span class="engl">away</span>
                    <span class="engl">from</span> <span class="engl">those.</span> <span class="engl">That’s</span>
                    <span class="engl">stretching</span> <span class="engl">luck.</span> <span class="engl">Put</span>
                    <span class="engl">your</span> <span class="engl">first</span>
                    <span class="engl">two</span> <span class="engl">shots</span>
                    <span class="engl">into</span> <span class="engl">the</span>
                    <span class="engl">eyes,</span> <span class="engl">if</span>
                    <span class="engl">you</span> <span class="engl">can,</span>
                    <span class="engl">blind</span> <span class="engl">them,</span> <span class="engl">and</span> <span
                        class="engl">go</span> <span class="engl">back</span> <span class="engl">into</span> <span
                        class="engl">the</span> <span class="engl">brain.”</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">Machine</span>
                    <span class="engl">howled.</span> <span class="engl">Time</span> <span class="engl">was</span> <span
                        class="engl">a</span> <span class="engl">film</span> <span class="engl">run</span> <span
                        class="engl">backward.</span>
                </p>
                <p class="english"> <span class="engl">Suns</span> <span class="engl">fled</span> <span
                        class="engl">and</span> <span class="engl">ten</span> <span class="engl">million</span>
                    <span class="engl">moons</span> <span class="engl">fled</span> <span class="engl">after</span>
                    <span class="engl">them.</span> <span class="engl">“Good</span> <span class="engl">God,”</span>
                    <span class="engl">said</span> <span class="engl">Eckels.</span> <span class="engl">“Every</span>
                    <span class="engl">hunter</span> <span class="engl">that</span> <span class="engl">ever</span> <span
                        class="engl">lived</span> <span class="engl">would</span>
                    <span class="engl">envy</span> <span class="engl">us</span>
                    <span class="engl">today.</span> <span class="engl">This</span> <span class="engl">makes</span>
                    <span class="engl">Africa</span> <span class="engl">seem</span> <span class="engl">like</span> <span
                        class="engl">Illinois.”</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">Machine</span>
                    <span class="engl">slowed;</span> <span class="engl">its</span> <span class="engl">scream</span>
                    <span class="engl">fell</span> <span class="engl">to</span>
                    <span class="engl">a</span> <span class="engl">murmur.</span>
                    <span class="engl">The</span> <span class="engl">Machine</span> <span class="engl">stopped.</span>
                </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">sun</span> <span
                        class="engl">stopped</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">sky.</span>
                </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">fog</span> <span
                        class="engl">that</span> <span class="engl">had</span> <span class="engl">enveloped</span>
                    <span class="engl">the</span> <span class="engl">Machine</span> <span class="engl">blew</span>
                    <span class="engl">away</span> <span class="engl">and</span>
                    <span class="engl">they</span> <span class="engl">were</span>
                    <span class="engl">in</span> <span class="engl">an</span>
                    <span class="engl">old</span> <span class="engl">time,</span>
                    <span class="engl">a</span> <span class="engl">very</span>
                    <span class="engl">old</span> <span class="engl">time</span>
                    <span class="engl">indeed,</span> <span class="engl">three</span> <span class="engl">hunters</span>
                    <span class="engl">and</span> <span class="engl">two</span>
                    <span class="engl">Safari</span> <span class="engl">Heads</span> <span class="engl">with</span>
                    <span class="engl">their</span> <span class="engl">blue</span> <span class="engl">metal</span>
                    <span class="engl">guns</span> <span class="engl">across</span> <span class="engl">their</span>
                    <span class="engl">knees.</span> </p>
                <p class="english">
                    <span class="engl">“Christ</span> <span class="engl">isn’t</span> <span class="engl">born</span>
                    <span class="engl">yet,”</span> <span class="engl">said</span> <span class="engl">Travis.</span>
                    <span class="engl">“Moses</span> <span class="engl">has</span> <span class="engl">not</span> <span
                        class="engl">gone</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">mountain</span>
                    <span class="engl">to</span> <span class="engl">talk</span>
                    <span class="engl">with</span> <span class="engl">God.</span>
                    <span class="engl">The</span> <span class="engl">Pyramids</span> <span class="engl">are</span>
                    <span class="engl">still</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">earth,</span> <span class="engl">waiting</span>
                    <span class="engl">to</span> <span class="engl">be</span>
                    <span class="engl">cut</span> <span class="engl">out</span>
                    <span class="engl">and</span> <span class="engl">put</span>
                    <span class="engl">up.</span> <span class="engl">Remember</span> <span class="engl">that,</span>
                    <span class="engl">Alexander,</span> <span class="engl">Caesar,</span> <span
                        class="engl">Napoleon,</span> <span class="engl">Hitler,</span> <span class="engl">none</span>
                    <span class="engl">of</span> <span class="engl">them</span>
                    <span class="engl">exists.”</span> </p>
                <p class="english">
                    <span class="engl">The</span> <span class="engl">men</span>
                    <span class="engl">nodded.</span> </p>
                <p class="english">
                    <span class="engl">“That”</span> <span class="engl">Mr.</span> <span class="engl">Travis</span>
                    <span class="engl">pointed”</span> <span class="engl">is</span> <span class="engl">the</span> <span
                        class="engl">jungle</span> <span class="engl">of</span> <span class="engl">sixty</span> <span
                        class="engl">million</span>
                    <span class="engl">two</span> <span class="engl">thousand</span> <span class="engl">and</span>
                    <span class="engl">fifty-five</span> <span class="engl">years</span> <span
                        class="engl">before</span>
                    <span class="engl">President</span> <span class="engl">Keith.”</span> </p>
                <p class="english"> <span class="engl">He</span> <span class="engl">indicated</span>
                    <span class="engl">a</span> <span class="engl">metal</span>
                    <span class="engl">path</span> <span class="engl">that</span>
                    <span class="engl">struck</span> <span class="engl">off</span> <span class="engl">into</span> <span
                        class="engl">green</span> <span class="engl">wilderness,</span> <span class="engl">over</span>
                    <span class="engl">steaming</span>
                    <span class="engl">swamp,</span> <span class="engl">among</span> <span class="engl">giant</span>
                    <span class="engl">ferns</span> <span class="engl">and</span>
                    <span class="engl">palms.</span> </p>
                <p class="english">
                    <span class="engl">“And</span> <span class="engl">that,”</span> <span class="engl">he</span> <span
                        class="engl">said,</span> <span class="engl">“is</span> <span class="engl">the</span> <span
                        class="engl">Path,</span> <span class="engl">laid</span> <span class="engl">by</span> <span
                        class="engl">Time</span> <span class="engl">Safari</span>
                    <span class="engl">for</span> <span class="engl">your</span>
                    <span class="engl">use.</span> <span class="engl">It</span>
                    <span class="engl">floats</span> <span class="engl">six</span> <span class="engl">inches</span>
                    <span class="engl">above</span> <span class="engl">the</span>
                    <span class="engl">earth.</span> <span class="engl">Doesn’t</span> <span class="engl">touch</span>
                    <span class="engl">so</span> <span class="engl">much</span>
                    <span class="engl">as</span> <span class="engl">one</span>
                    <span class="engl">grass</span> <span class="engl">blade,</span> <span class="engl">flower,</span>
                    <span class="engl">or</span> <span class="engl">tree.</span>
                    <span class="engl">It’s</span> <span class="engl">an</span>
                    <span class="engl">anti-gravity</span> <span class="engl">metal.</span> <span
                        class="engl">Its</span>
                    <span class="engl">purpose</span> <span class="engl">is</span> <span class="engl">to</span> <span
                        class="engl">keep</span> <span class="engl">you</span> <span class="engl">from</span> <span
                        class="engl">touching</span>
                    <span class="engl">this</span> <span class="engl">world</span> <span class="engl">of</span> <span
                        class="engl">the</span> <span class="engl">past</span> <span class="engl">in</span> <span
                        class="engl">any</span> <span class="engl">way.</span> <span class="engl">Stay</span> <span
                        class="engl">on</span> <span class="engl">the</span> <span class="engl">Path.</span> <span
                        class="engl">Don’t</span>
                    <span class="engl">go</span> <span class="engl">off</span>
                    <span class="engl">it.</span> <span class="engl">I</span>
                    <span class="engl">repeat.</span> <span class="engl">Don’t</span> <span class="engl">go</span> <span
                        class="engl">off.</span> <span class="engl">For</span> <span class="engl">any</span> <span
                        class="engl">reason!</span>
                    <span class="engl">If</span> <span class="engl">you</span>
                    <span class="engl">fall</span> <span class="engl">off,</span>
                    <span class="engl">there’s</span> <span class="engl">a</span>
                    <span class="engl">penalty.</span> <span class="engl">And</span> <span class="engl">don’t</span>
                    <span class="engl">shoot</span> <span class="engl">any</span> <span class="engl">animal</span> <span
                        class="engl">we</span> <span class="engl">don’t</span> <span class="engl">okay.”</span>
                </p>
                <p class="english"> <span class="engl">“Why?”</span>
                    <span class="engl">asked</span> <span class="engl">Eckels.</span> </p>
                <p class="english"> <span class="engl">They</span> <span class="engl">sat</span> <span
                        class="engl">in</span> <span class="engl">the</span> <span class="engl">ancient</span> <span
                        class="engl">wilderness.</span> <span class="engl">Far</span>
                    <span class="engl">birds’</span> <span class="engl">cries</span> <span class="engl">blew</span>
                    <span class="engl">on</span> <span class="engl">a</span>
                    <span class="engl">wind,</span> <span class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">smell</span>
                    <span class="engl">of</span> <span class="engl">tar</span>
                    <span class="engl">and</span> <span class="engl">an</span>
                    <span class="engl">old</span> <span class="engl">salt</span>
                    <span class="engl">sea,</span> <span class="engl">moist</span> <span class="engl">grasses,</span>
                    <span class="engl">and</span> <span class="engl">flowers</span> <span class="engl">the</span>
                    <span class="engl">colour</span> <span class="engl">of</span>
                    <span class="engl">blood.</span> </p>
                <p class="english">
                    <span class="engl">“We</span> <span class="engl">don’t</span>
                    <span class="engl">want</span> <span class="engl">to</span>
                    <span class="engl">change</span> <span class="engl">the</span> <span class="engl">Future.</span>
                    <span class="engl">We</span> <span class="engl">don’t</span>
                    <span class="engl">belong</span> <span class="engl">here</span> <span class="engl">in</span> <span
                        class="engl">the</span> <span class="engl">Past.</span> <span class="engl">The</span> <span
                        class="engl">government</span>
                    <span class="engl">doesn’t</span> <span class="engl">like</span> <span class="engl">us</span> <span
                        class="engl">here.</span> <span class="engl">We</span> <span class="engl">have</span> <span
                        class="engl">to</span> <span class="engl">pay</span> <span class="engl">big</span> <span
                        class="engl">graft</span> <span class="engl">to</span> <span class="engl">keep</span> <span
                        class="engl">our</span> <span class="engl">franchise.</span> <span class="engl">A</span>
                    <span class="engl">Time</span> <span class="engl">Machine</span> <span class="engl">is</span>
                    <span class="engl">damn</span> <span class="engl">finicky</span> <span class="engl">business.</span>
                    <span class="engl">Not</span>
                    <span class="engl">knowing</span> <span class="engl">it,</span> <span class="engl">we</span> <span
                        class="engl">might</span> <span class="engl">kill</span>
                    <span class="engl">an</span> <span class="engl">important</span> <span class="engl">animal,</span>
                    <span class="engl">a</span> <span class="engl">small</span> <span class="engl">bird,</span>
                    <span class="engl">a</span> <span class="engl">roach,</span>
                    <span class="engl">a</span> <span class="engl">flower</span>
                    <span class="engl">even,</span> <span class="engl">thus</span> <span class="engl">destroying</span>
                    <span class="engl">an</span> <span class="engl">important</span> <span class="engl">link</span>
                    <span class="engl">in</span> <span class="engl">a</span>
                    <span class="engl">growing</span> <span class="engl">species.”</span> </p>
                <p class="english"> <span class="engl">“That’s</span> <span class="engl">not</span>
                    <span class="engl">clear,”</span> <span class="engl">said</span> <span class="engl">Eckels.</span>
                </p>
                <p class="english"> <span class="engl">“All</span> <span class="engl">right,”</span> <span
                        class="engl">Travis</span>
                    <span class="engl">continued,</span> <span class="engl">“say</span> <span class="engl">we</span>
                    <span class="engl">accidentally</span> <span class="engl">kill</span> <span class="engl">one</span>
                    <span class="engl">mouse</span> <span class="engl">here.</span>
                    <span class="engl">That</span> <span class="engl">means</span> <span class="engl">all</span> <span
                        class="engl">the</span> <span class="engl">future</span>
                    <span class="engl">families</span> <span class="engl">of</span> <span class="engl">this</span> <span
                        class="engl">one</span> <span class="engl">particular</span>
                    <span class="engl">mouse</span> <span class="engl">are</span>
                    <span class="engl">destroyed,</span> <span class="engl">right?”</span> </p>
                <p class="english"> <span class="engl">“Right.”</span> </p>
                <p class="english"> <span class="engl">“And</span> <span class="engl">all</span> <span
                        class="engl">the</span> <span class="engl">families</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">families</span> <span class="engl">of</span> <span class="engl">that</span> <span
                        class="engl">one</span> <span class="engl">mouse!</span>
                    <span class="engl">With</span> <span class="engl">a</span>
                    <span class="engl">stamp</span> <span class="engl">of</span>
                    <span class="engl">your</span> <span class="engl">foot,</span> <span class="engl">you</span> <span
                        class="engl">annihilate</span> <span class="engl">first</span> <span class="engl">one,</span>
                    <span class="engl">then</span> <span class="engl">a</span>
                    <span class="engl">dozen,</span> <span class="engl">then</span> <span class="engl">a</span> <span
                        class="engl">thousand,</span> <span class="engl">a</span>
                    <span class="engl">million,</span> <span class="engl">a</span> <span class="engl">billion</span>
                    <span class="engl">possible</span> <span class="engl">mice”</span>
                </p>
                <p class="english"> <span class="engl">“So</span> <span class="engl">they’re</span> <span
                        class="engl">dead,”</span>
                    <span class="engl">said</span> <span class="engl">Eckels.</span> <span class="engl">“So</span>
                    <span class="engl">what?”</span> </p>
                <p class="english">
                    <span class="engl">“So</span> <span class="engl">what?”</span> <span class="engl">Travis</span>
                    <span class="engl">snorted</span> <span class="engl">quietly.</span> <span
                        class="engl">“Well,</span>
                    <span class="engl">what</span> <span class="engl">about</span> <span class="engl">the</span> <span
                        class="engl">foxes</span> <span class="engl">that’ll</span>
                    <span class="engl">need</span> <span class="engl">those</span> <span class="engl">mice</span>
                    <span class="engl">to</span> <span class="engl">survive?</span> <span class="engl">For</span>
                    <span class="engl">want</span> <span class="engl">of</span>
                    <span class="engl">ten</span> <span class="engl">mice,</span>
                    <span class="engl">a</span> <span class="engl">fox</span>
                    <span class="engl">dies.</span> <span class="engl">For</span>
                    <span class="engl">want</span> <span class="engl">of</span>
                    <span class="engl">ten</span> <span class="engl">foxes,</span> <span class="engl">a</span> <span
                        class="engl">lion</span> <span class="engl">starves.</span>
                    <span class="engl">For</span> <span class="engl">want</span>
                    <span class="engl">of</span> <span class="engl">a</span>
                    <span class="engl">lion,</span> <span class="engl">all</span>
                    <span class="engl">manner</span> <span class="engl">of</span>
                    <span class="engl">insects,</span> <span class="engl">vultures,</span> <span
                        class="engl">infinite</span> <span class="engl">billions</span> <span class="engl">of</span>
                    <span class="engl">life</span> <span class="engl">forms</span> <span class="engl">are</span> <span
                        class="engl">thrown</span> <span class="engl">into</span>
                    <span class="engl">chaos</span> <span class="engl">and</span>
                    <span class="engl">destruction.</span> </p>
                <p class="english"> <span class="engl">Eventually</span> <span class="engl">it</span> <span
                        class="engl">all</span> <span class="engl">boils</span> <span class="engl">down</span>
                    <span class="engl">to</span> <span class="engl">this:</span>
                    <span class="engl">fifty-nine</span> <span class="engl">million</span> <span
                        class="engl">years</span>
                    <span class="engl">later,</span> <span class="engl">a</span>
                    <span class="engl">cave</span> <span class="engl">man,</span>
                    <span class="engl">one</span> <span class="engl">of</span>
                    <span class="engl">a</span> <span class="engl">dozen</span>
                    <span class="engl">on</span> <span class="engl">the</span>
                    <span class="engl">entire</span> <span class="engl">world,</span> <span class="engl">goes</span>
                    <span class="engl">hunting</span> <span class="engl">wild</span> <span class="engl">boar</span>
                    <span class="engl">or</span> <span class="engl">saber-tooth</span>
                    <span class="engl">tiger</span> <span class="engl">for</span>
                    <span class="engl">food.</span> <span class="engl">But</span>
                    <span class="engl">you,</span> <span class="engl">friend,</span> <span class="engl">have</span>
                    <span class="engl">stepped</span> <span class="engl">on</span> <span class="engl">all</span> <span
                        class="engl">the</span> <span class="engl">tigers</span>
                    <span class="engl">in</span> <span class="engl">that</span>
                    <span class="engl">region.</span> <span class="engl">By</span> <span class="engl">stepping</span>
                    <span class="engl">on</span> <span class="engl">one</span>
                    <span class="engl">single</span> <span class="engl">mouse.</span> <span class="engl">So</span> <span
                        class="engl">the</span> <span class="engl">cave</span> <span class="engl">man</span> <span
                        class="engl">starves.</span>
                    <span class="engl">And</span> <span class="engl">the</span>
                    <span class="engl">cave</span> <span class="engl">man,</span>
                    <span class="engl">please</span> <span class="engl">note,</span> <span class="engl">is</span> <span
                        class="engl">not</span> <span class="engl">just</span> <span class="engl">any</span> <span
                        class="engl">expendable</span>
                    <span class="engl">man,</span> <span class="engl">no</span>
                    <span class="engl">I</span> <span class="engl">He</span>
                    <span class="engl">is</span> <span class="engl">an</span>
                    <span class="engl">entire</span> <span class="engl">future</span> <span class="engl">nation.</span>
                    <span class="engl">From</span> <span class="engl">his</span>
                    <span class="engl">loins</span> <span class="engl">would</span> <span class="engl">have</span>
                    <span class="engl">sprung</span> <span class="engl">ten</span> <span class="engl">sons.</span> <span
                        class="engl">From</span> <span class="engl">their</span>
                    <span class="engl">loins</span> <span class="engl">one</span>
                    <span class="engl">hundred</span> <span class="engl">sons,</span> <span class="engl">and</span>
                    <span class="engl">thus</span> <span class="engl">onward</span>
                    <span class="engl">to</span> <span class="engl">a</span>
                    <span class="engl">civilisation.</span> <span class="engl">Destroy</span> <span
                        class="engl">this</span>
                    <span class="engl">one</span> <span class="engl">man,</span>
                    <span class="engl">and</span> <span class="engl">you</span>
                    <span class="engl">destroy</span> <span class="engl">a</span>
                    <span class="engl">race,</span> <span class="engl">a</span>
                    <span class="engl">people,</span> <span class="engl">an</span> <span class="engl">entire</span>
                    <span class="engl">history</span> <span class="engl">of</span>
                    <span class="engl">life.</span> <span class="engl"></span>
                </p>
                <p class="english"> <span class="engl">It</span> <span class="engl">is</span> <span
                        class="engl">comparable</span>
                    <span class="engl">to</span> <span class="engl">slaying</span> <span class="engl">some</span>
                    <span class="engl">of</span> <span class="engl">Adam’s</span>
                    <span class="engl">grandchildren.</span> <span class="engl">The</span> <span
                        class="engl">stomp</span>
                    <span class="engl">of</span> <span class="engl">your</span> <span class="engl">foot,</span> <span
                        class="engl">on</span> <span class="engl">one</span> <span class="engl">mouse,</span>
                    <span class="engl">could</span> <span class="engl">start</span> <span class="engl">an</span> <span
                        class="engl">earthquake,</span> <span class="engl">the</span>
                    <span class="engl">effects</span> <span class="engl">of</span> <span class="engl">which</span> <span
                        class="engl">could</span> <span class="engl">shake</span>
                    <span class="engl">our</span> <span class="engl">earth</span>
                    <span class="engl">and</span> <span class="engl">destinies</span> <span class="engl">down</span>
                    <span class="engl">through</span> <span class="engl">Time,</span> <span class="engl">to</span> <span
                        class="engl">their</span> <span class="engl">very</span>
                    <span class="engl">foundations.</span> <span class="engl">With</span> <span class="engl">the</span>
                    <span class="engl">death</span> <span class="engl">of</span> <span class="engl">that</span> <span
                        class="engl">one</span> <span class="engl">cave</span> <span class="engl">man,</span> <span
                        class="engl">a</span> <span class="engl">billion</span> <span class="engl">others</span> <span
                        class="engl">yet</span>
                    <span class="engl">unborn</span> <span class="engl">are</span> <span class="engl">throttled</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">womb.</span> <span class="engl">Perhaps</span> <span class="engl">Rome</span>
                    <span class="engl">never</span> <span class="engl">rises</span> <span class="engl">on</span> <span
                        class="engl">its</span> <span class="engl">seven</span> <span class="engl">hills.</span> <span
                        class="engl">Perhaps</span>
                    <span class="engl">Europe</span> <span class="engl">is</span>
                    <span class="engl">forever</span> <span class="engl">a</span>
                    <span class="engl">dark</span> <span class="engl">forest,</span> <span class="engl">and</span>
                    <span class="engl">only</span> <span class="engl">Asia</span>
                    <span class="engl">waxes</span> <span class="engl">healthy</span> <span class="engl">and</span>
                    <span class="engl">teeming.</span> <span class="engl">Step</span> <span class="engl">on</span> <span
                        class="engl">a</span> <span class="engl">mouse</span> <span class="engl">and</span> <span
                        class="engl">you</span> <span class="engl">crush</span> <span class="engl">the</span> <span
                        class="engl">Pyramids.</span> <span class="engl">Step</span>
                    <span class="engl">on</span> <span class="engl">a</span>
                    <span class="engl">mouse</span> <span class="engl">and</span>
                    <span class="engl">you</span> <span class="engl">leave</span>
                    <span class="engl">your</span> <span class="engl">print,</span> <span class="engl">like</span>
                    <span class="engl">a</span> <span class="engl">Grand</span>
                    <span class="engl">Canyon,</span> <span class="engl">across</span> <span
                        class="engl">Eternity.</span>
                    <span class="engl">Queen</span>
                    <span class="engl">Elizabeth</span> <span class="engl">might</span> <span class="engl">never</span>
                    <span class="engl">be</span> <span class="engl">born,</span>
                    <span class="engl">Washington</span> <span class="engl">might</span> <span class="engl">not</span>
                    <span class="engl">cross</span> <span class="engl">the</span> <span class="engl">Delaware,</span>
                    <span class="engl">there</span>
                    <span class="engl">might</span> <span class="engl">never</span> <span class="engl">be</span> <span
                        class="engl">a</span> <span class="engl">United</span> <span class="engl">States</span> <span
                        class="engl">at</span> <span class="engl">all.</span> <span class="engl">So</span> <span
                        class="engl">be</span> <span class="engl">careful.</span>
                    <span class="engl">Stay</span> <span class="engl">on</span>
                    <span class="engl">the</span> <span class="engl">Path,</span>
                    <span class="engl">Never</span> <span class="engl">step</span> <span class="engl">off!”</span> </p>
                <p class="english"> <span class="engl">“I</span> <span class="engl">see,”</span> <span
                        class="engl">said</span>
                    <span class="engl">Eckels.</span> <span class="engl">“Then</span> <span class="engl">it</span> <span
                        class="engl">wouldn’t</span> <span class="engl">pay</span>
                    <span class="engl">for</span> <span class="engl">us</span>
                    <span class="engl">even</span> <span class="engl">to</span>
                    <span class="engl">touch</span> <span class="engl">the</span>
                    <span class="engl">grass?”</span> </p>
                <p class="english">
                    <span class="engl">“Correct.</span> <span class="engl">Crushing</span> <span
                        class="engl">certain</span>
                    <span class="engl">plants</span>
                    <span class="engl">could</span> <span class="engl">add</span>
                    <span class="engl">up</span> <span class="engl">infinitesimally.</span> <span class="engl">A</span>
                    <span class="engl">little</span> <span class="engl">error</span> <span class="engl">here</span>
                    <span class="engl">would</span> <span class="engl">multiply</span> <span class="engl">in</span>
                    <span class="engl">sixty</span> <span class="engl">million</span> <span class="engl">years,</span>
                    <span class="engl">all</span> <span class="engl">out</span>
                    <span class="engl">of</span> <span class="engl">proportion.</span> <span class="engl">Of</span>
                    <span class="engl">course</span> <span class="engl">maybe</span> <span class="engl">our</span> <span
                        class="engl">theory</span> <span class="engl">is</span> <span class="engl">wrong.</span> <span
                        class="engl">Maybe</span>
                    <span class="engl">Time</span> <span class="engl">can’t</span> <span class="engl">be</span> <span
                        class="engl">changed</span> <span class="engl">by</span>
                    <span class="engl">us.</span> <span class="engl">Or</span>
                    <span class="engl">maybe</span> <span class="engl">it</span>
                    <span class="engl">can</span> <span class="engl">be</span>
                    <span class="engl">changed</span> <span class="engl">only</span> <span class="engl">in</span> <span
                        class="engl">little</span> <span class="engl">subtle</span>
                    <span class="engl">ways.</span> <span class="engl">A</span>
                    <span class="engl">dead</span> <span class="engl">mouse</span> <span class="engl">here</span>
                    <span class="engl">makes</span> <span class="engl">an</span>
                    <span class="engl">insect</span> <span class="engl">imbalance</span> <span
                        class="engl">there,</span>
                    <span class="engl">a</span> <span class="engl">population</span> <span
                        class="engl">disproportion</span>
                    <span class="engl">later,</span> <span class="engl">a</span> <span class="engl">bad</span> <span
                        class="engl">harvest</span>
                    <span class="engl">further</span> <span class="engl">on,</span> <span class="engl">a</span> <span
                        class="engl">depression,</span> <span class="engl">mass</span> <span
                        class="engl">starvation,</span>
                    <span class="engl">and,</span> <span class="engl">finally,</span>
                    <span class="engl">a</span> <span class="engl">change</span>
                    <span class="engl">in</span> <span class="engl">social</span>
                    <span class="engl">temperament</span> <span class="engl">in</span> <span
                        class="engl">far-flung</span>
                    <span class="engl">countries.</span> <span class="engl">Something</span> <span
                        class="engl">much</span>
                    <span class="engl">more</span> <span class="engl">subtle,</span> <span class="engl">like</span>
                    <span class="engl">that.</span> <span class="engl">Perhaps</span> <span class="engl">only</span>
                    <span class="engl">a</span> <span class="engl">soft</span>
                    <span class="engl">breath,</span> <span class="engl">a</span>
                    <span class="engl">whisper,</span> <span class="engl">a</span> <span class="engl">hair,</span> <span
                        class="engl">pollen</span> <span class="engl">on</span> <span class="engl">the</span> <span
                        class="engl">air,</span> <span class="engl">such</span> <span class="engl">a</span> <span
                        class="engl">slight,</span> <span class="engl">slight</span>
                    <span class="engl">change</span> <span class="engl">that</span> <span class="engl">unless</span>
                    <span class="engl">you</span> <span class="engl">looked</span> <span class="engl">close</span>
                    <span class="engl">you</span> <span class="engl">wouldn’t</span> <span class="engl">see</span>
                    <span class="engl">it.</span> <span class="engl"></span> </p>
                <p class="english"> <span class="engl">Who</span> <span class="engl">knows?</span> <span
                        class="engl">Who</span>
                    <span class="engl">really</span> <span class="engl">can</span> <span class="engl">say</span> <span
                        class="engl">he</span> <span class="engl">knows?</span> <span class="engl">We</span> <span
                        class="engl">don’t</span> <span class="engl">know.</span> <span class="engl">We’re</span>
                    <span class="engl">guessing.</span> <span class="engl">But</span> <span class="engl">until</span>
                    <span class="engl">we</span> <span class="engl">do</span> <span class="engl">know</span> <span
                        class="engl">for</span> <span class="engl">certain</span> <span class="engl">whether</span>
                    <span class="engl">our</span> <span class="engl">messing</span> <span class="engl">around</span>
                    <span class="engl">in</span> <span class="engl">Time</span>
                    <span class="engl">can</span> <span class="engl">make</span>
                    <span class="engl">a</span> <span class="engl">big</span>
                    <span class="engl">roar</span> <span class="engl">or</span>
                    <span class="engl">a</span> <span class="engl">little</span>
                    <span class="engl">rustle</span> <span class="engl">in</span>
                    <span class="engl">history,</span> <span class="engl">we’re</span> <span class="engl">being</span>
                    <span class="engl">damned</span> <span class="engl">careful.</span> <span class="engl">This</span>
                    <span class="engl">Machine,</span> <span class="engl">this</span> <span class="engl">Path,</span>
                    <span class="engl">your</span> <span class="engl">clothing</span> <span class="engl">and</span>
                    <span class="engl">bodies,</span> <span class="engl">were</span> <span
                        class="engl">sterilised,</span>
                    <span class="engl">as</span>
                    <span class="engl">you</span> <span class="engl">know,</span>
                    <span class="engl">before</span> <span class="engl">the</span> <span class="engl">journey.</span>
                    <span class="engl">We</span> <span class="engl">wear</span>
                    <span class="engl">these</span> <span class="engl">oxygen</span> <span class="engl">helmets</span>
                    <span class="engl">so</span> <span class="engl">we</span>
                    <span class="engl">can’t</span> <span class="engl">introduce</span> <span class="engl">our</span>
                    <span class="engl">bacteria</span> <span class="engl">into</span> <span class="engl">an</span> <span
                        class="engl">ancient</span> <span class="engl">atmosphere.”</span> </p>
                <p class="english">
                    <span class="engl">“How</span> <span class="engl">do</span>
                    <span class="engl">we</span> <span class="engl">know</span>
                    <span class="engl">which</span> <span class="engl">animals</span> <span class="engl">to</span>
                    <span class="engl">shoot?”</span> </p>
                <p class="english">
                    <span class="engl">“They’re</span> <span class="engl">marked</span> <span class="engl">with</span>
                    <span class="engl">red</span> <span class="engl">paint,”</span> <span class="engl">said</span>
                    <span class="engl">Travis.</span> <span class="engl">“Today,</span> <span class="engl">before</span>
                    <span class="engl">our</span> <span class="engl">journey,</span> <span class="engl">we</span>
                    <span class="engl">sent</span> <span class="engl">Lesperance</span> <span class="engl">here</span>
                    <span class="engl">back</span> <span class="engl">with</span>
                    <span class="engl">the</span> <span class="engl">Machine.</span> <span class="engl">He</span>
                    <span class="engl">came</span> <span class="engl">to</span>
                    <span class="engl">this</span> <span class="engl">particular</span> <span class="engl">era</span>
                    <span class="engl">and</span> <span class="engl">followed</span> <span class="engl">certain</span>
                    <span class="engl">animals.”</span> </p>
                <p class="english"> <span class="engl">“Studying</span> <span class="engl">them?”</span> </p>
                <p class="english"> <span class="engl">“Right,”</span> <span class="engl">said</span>
                    <span class="engl">Lesperance.</span> <span class="engl">“I</span> <span class="engl">track</span>
                    <span class="engl">them</span> <span class="engl">through</span>
                    <span class="engl">their</span> <span class="engl">entire</span> <span
                        class="engl">existence,</span>
                    <span class="engl">noting</span> <span class="engl">which</span>
                    <span class="engl">of</span> <span class="engl">them</span>
                    <span class="engl">lives</span> <span class="engl">longest.</span> <span class="engl">Very</span>
                    <span class="engl">few.How</span> <span class="engl">many</span> <span class="engl">times</span>
                    <span class="engl">they</span> <span class="engl">mate.</span> <span class="engl">Not</span> <span
                        class="engl">often.</span> <span class="engl">Life’s</span>
                    <span class="engl">short.</span> <span class="engl">When</span> <span class="engl">I</span> <span
                        class="engl">find</span> <span class="engl">one</span> <span class="engl">that’s</span> <span
                        class="engl">going</span>
                    <span class="engl">to</span> <span class="engl">die</span>
                    <span class="engl">when</span> <span class="engl">a</span>
                    <span class="engl">tree</span> <span class="engl">falls</span> <span class="engl">on</span> <span
                        class="engl">him,</span> <span class="engl">or</span> <span class="engl">one</span> <span
                        class="engl">that</span> <span class="engl">drowns</span> <span class="engl">in</span> <span
                        class="engl">a</span> <span class="engl">tar</span> <span class="engl">pit,</span> <span
                        class="engl">I</span> <span class="engl">note</span> <span class="engl">the</span> <span
                        class="engl">exact</span> <span class="engl">hour,</span>
                    <span class="engl">minute,</span> <span class="engl">and</span> <span class="engl">second.</span>
                    <span class="engl">I</span> <span class="engl">shoot</span>
                    <span class="engl">a</span> <span class="engl">paint</span>
                    <span class="engl">bomb.</span> <span class="engl">It</span>
                    <span class="engl">leaves</span> <span class="engl">a</span>
                    <span class="engl">red</span> <span class="engl">patch</span>
                    <span class="engl">on</span> <span class="engl">his</span>
                    <span class="engl">hide.</span> <span class="engl">We</span>
                    <span class="engl">can’t</span> <span class="engl">miss</span> <span class="engl">it.</span> <span
                        class="engl">Then</span> <span class="engl">I</span> <span class="engl">correlate</span> <span
                        class="engl">our</span>
                    <span class="engl">arrival</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">Past</span> <span class="engl">so</span> <span class="engl">that</span> <span
                        class="engl">we</span> <span class="engl">meet</span> <span class="engl">the</span> <span
                        class="engl">Monster</span> <span class="engl">not</span>
                    <span class="engl">more</span> <span class="engl">than</span>
                    <span class="engl">two</span> <span class="engl">minutes</span> <span class="engl">before</span>
                    <span class="engl">he</span> <span class="engl">would</span>
                    <span class="engl">have</span> <span class="engl">died</span>
                    <span class="engl">anyway.</span> <span class="engl">This</span> <span class="engl">way,</span>
                    <span class="engl">we</span> <span class="engl">kill</span> <span class="engl">only</span> <span
                        class="engl">animals</span>
                    <span class="engl">with</span> <span class="engl">no</span>
                    <span class="engl">future,</span> <span class="engl">that</span> <span class="engl">are</span> <span
                        class="engl">never</span> <span class="engl">going</span>
                    <span class="engl">to</span> <span class="engl">mate</span>
                    <span class="engl">again.</span> <span class="engl">You</span> <span class="engl">see</span> <span
                        class="engl">how</span> <span class="engl">careful</span>
                    <span class="engl">we</span> <span class="engl">are?”</span>
                </p>
                <p class="english"> <span class="engl">“But</span> <span class="engl">if</span> <span
                        class="engl">you</span> <span class="engl">came</span> <span class="engl">back</span> <span
                        class="engl">this</span> <span class="engl">morning</span>
                    <span class="engl">in</span> <span class="engl">Time,”</span>
                    <span class="engl">said</span> <span class="engl">Eckels</span> <span class="engl">eagerly,</span>
                    <span class="engl">“you</span> <span class="engl">must’ve</span> <span class="engl">bumped</span>
                    <span class="engl">into</span> <span class="engl">us,</span>
                    <span class="engl">our</span> <span class="engl">Safari]</span> <span class="engl">How</span>
                    <span class="engl">did</span> <span class="engl">it</span>
                    <span class="engl">turn</span> <span class="engl">out?</span>
                    <span class="engl">Was</span> <span class="engl">it</span>
                    <span class="engl">successful?</span> <span class="engl">Did</span> <span class="engl">all</span>
                    <span class="engl">of</span> <span class="engl">us</span> <span class="engl">get</span> <span
                        class="engl">through-alive?”</span> </p>
                <p class="english">
                    <span class="engl">Travis</span> <span class="engl">and</span> <span class="engl">Lesperance</span>
                    <span class="engl">gave</span> <span class="engl">each</span>
                    <span class="engl">other</span> <span class="engl">a</span>
                    <span class="engl">look.</span> </p>
                <p class="english"> <span class="engl">“That’d</span> <span class="engl">be</span>
                    <span class="engl">a</span> <span class="engl">paradox,”</span> <span class="engl">said</span>
                    <span class="engl">the</span> <span class="engl">latter.</span> <span class="engl">“Time</span>
                    <span class="engl">doesn’t</span> <span class="engl">permit</span> <span class="engl">that</span>
                    <span class="engl">sort</span> <span class="engl">of</span>
                    <span class="engl">mess</span> <span class="engl">a</span>
                    <span class="engl">man</span> <span class="engl">meeting</span> <span class="engl">himself.</span>
                    <span class="engl">When</span>
                    <span class="engl">such</span> <span class="engl">occasions</span> <span
                        class="engl">threaten,</span>
                    <span class="engl">Time</span>
                    <span class="engl">steps</span> <span class="engl">aside.</span> <span class="engl">Like</span>
                    <span class="engl">an</span> <span class="engl">airplane</span> <span class="engl">hitting</span>
                    <span class="engl">an</span>
                    <span class="engl">air</span> <span class="engl">pocket.</span> <span class="engl">You</span>
                    <span class="engl">felt</span> <span class="engl">the</span>
                    <span class="engl">Machine</span> <span class="engl">jump</span> <span class="engl">just</span>
                    <span class="engl">before</span> <span class="engl">we</span> <span class="engl">stopped?</span>
                    <span class="engl">That</span>
                    <span class="engl">was</span> <span class="engl">us</span>
                    <span class="engl">passing</span> <span class="engl">ourselves</span> <span class="engl">on</span>
                    <span class="engl">the</span> <span class="engl">way</span>
                    <span class="engl">back</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">Future.</span> <span class="engl">We</span>
                    <span class="engl">saw</span> <span class="engl">nothing.</span> <span class="engl">There’s</span>
                    <span class="engl">no</span>
                    <span class="engl">way</span> <span class="engl">of</span>
                    <span class="engl">telling</span> <span class="engl">if</span> <span class="engl">this</span> <span
                        class="engl">expedition</span> <span class="engl">was</span>
                    <span class="engl">a</span> <span class="engl">success,</span> <span class="engl">if</span>
                    <span class="engl">we</span> <span class="engl">got</span>
                    <span class="engl">our</span> <span class="engl">monster,</span> <span class="engl">or</span>
                    <span class="engl">whether</span> <span class="engl">all</span> <span class="engl">of</span> <span
                        class="engl">us</span> <span class="engl">meaning</span>
                    <span class="engl">you,</span> <span class="engl">Mr.</span>
                    <span class="engl">Eckels,</span> <span class="engl">got</span> <span class="engl">out</span> <span
                        class="engl">alive.”</span> </p>
                <p class="english"> <span class="engl">Eckels</span> <span class="engl">smiled</span>
                    <span class="engl">palely.</span> </p>
                <p class="english">
                    <span class="engl">“Cut</span> <span class="engl">that,”</span> <span class="engl">said</span>
                    <span class="engl">Travis</span> <span class="engl">sharply.</span> <span
                        class="engl">“Everyone</span>
                    <span class="engl">on</span>
                    <span class="engl">his</span> <span class="engl">feet!”</span> </p>
                <p class="english"> <span class="engl">They</span> <span class="engl">were</span> <span
                        class="engl">ready</span> <span class="engl">to</span> <span class="engl">leave</span> <span
                        class="engl">the</span> <span class="engl">Machine.</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">jungle</span>
                    <span class="engl">was</span> <span class="engl">high</span>
                    <span class="engl">and</span> <span class="engl">the</span>
                    <span class="engl">jungle</span> <span class="engl">was</span> <span class="engl">broad</span> <span
                        class="engl">and</span> <span class="engl">the</span> <span class="engl">jungle</span> <span
                        class="engl">was</span>
                    <span class="engl">the</span> <span class="engl">entire</span> <span class="engl">world</span>
                    <span class="engl">forever</span> <span class="engl">and</span> <span class="engl">forever.</span>
                    <span class="engl">Sounds</span> <span class="engl">like</span> <span class="engl">music</span>
                    <span class="engl">and</span> <span class="engl">sounds</span> <span class="engl">like</span>
                    <span class="engl">flying</span> <span class="engl">tents</span> <span class="engl">filled</span>
                    <span class="engl">the</span> <span class="engl">sky,</span>
                    <span class="engl">and</span> <span class="engl">those</span>
                    <span class="engl">were</span> <span class="engl">pterodactyls</span> <span
                        class="engl">soaring</span>
                    <span class="engl">with</span>
                    <span class="engl">cavernous</span> <span class="engl">grey</span> <span class="engl">wings,</span>
                    <span class="engl">gigantic</span> <span class="engl">bats</span> <span class="engl">out</span>
                    <span class="engl">of</span> <span class="engl">a</span> <span class="engl">delirium</span> <span
                        class="engl">and</span>
                    <span class="engl">a</span> <span class="engl">night</span>
                    <span class="engl">fever.</span> <span class="engl">Eckels,</span> <span
                        class="engl">balanced</span>
                    <span class="engl">on</span>
                    <span class="engl">the</span> <span class="engl">narrow</span> <span class="engl">Path,</span>
                    <span class="engl">aimed</span> <span class="engl">his</span>
                    <span class="engl">rifle</span> <span class="engl">playfully.</span> </p>
                <p class="english"> <span class="engl">“Stop</span> <span class="engl">that!”</span>
                    <span class="engl">said</span> <span class="engl">Travis.</span> <span class="engl">“Don’t</span>
                    <span class="engl">even</span> <span class="engl">aim</span>
                    <span class="engl">for</span> <span class="engl">fun,</span>
                    <span class="engl">damn</span> <span class="engl">it!</span>
                    <span class="engl">If</span> <span class="engl">your</span>
                    <span class="engl">gun</span> <span class="engl">should</span> <span class="engl">go</span> <span
                        class="engl">off”</span> </p>
                <p class="english"> <span class="engl">Eckels</span> <span class="engl">flushed.</span>
                    <span class="engl">“Where’s</span> <span class="engl">our</span> <span
                        class="engl">Tyrannosaurus?”</span> </p>
                <p class="english">
                    <span class="engl">Lesperance</span> <span class="engl">checked</span> <span class="engl">his</span>
                    <span class="engl">wrist</span> <span class="engl">watch.</span> <span class="engl">“Up</span>
                    <span class="engl">ahead.</span> <span class="engl">Well</span> <span class="engl">bisect</span>
                    <span class="engl">his</span> <span class="engl">trail</span>
                    <span class="engl">in</span> <span class="engl">sixty</span>
                    <span class="engl">seconds.</span> <span class="engl">Look</span> <span class="engl">for</span>
                    <span class="engl">the</span> <span class="engl">red</span> <span class="engl">paint,</span> <span
                        class="engl">for</span>
                    <span class="engl">Christ’s</span> <span class="engl">sake.</span> <span class="engl">Don’t</span>
                    <span class="engl">shoot</span> <span class="engl">till</span> <span class="engl">we</span> <span
                        class="engl">give</span> <span class="engl">the</span> <span class="engl">word.</span> <span
                        class="engl">Stay</span>
                    <span class="engl">on</span> <span class="engl">the</span>
                    <span class="engl">Path.</span> <span class="engl">Stay</span> <span class="engl">on</span> <span
                        class="engl">the</span> <span class="engl">path</span> </p>
                <p class="english"> <span class="engl">They</span> <span class="engl">moved</span> <span
                        class="engl">forward</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">wind</span> <span class="engl">of</span>
                    <span class="engl">morning.</span> </p>
                <p class="english">
                    <span class="engl">“Strange,”</span> <span class="engl">murmured</span> <span
                        class="engl">Eckels.</span> <span class="engl">“Up</span>
                    <span class="engl">ahead,</span> <span class="engl">sixty</span> <span class="engl">million</span>
                    <span class="engl">years,</span> <span class="engl">Election</span> <span class="engl">Day</span>
                    <span class="engl">over.</span> <span class="engl">Keith</span> <span class="engl">made</span>
                    <span class="engl">President.</span> <span class="engl">Everyone</span> <span
                        class="engl">celebrating.</span> <span class="engl">And</span> <span class="engl">here</span>
                    <span class="engl">we</span> <span class="engl">are,</span> <span class="engl">a</span> <span
                        class="engl">million</span> <span class="engl">years</span> <span class="engl">lost,</span>
                    <span class="engl">and</span> <span class="engl">they</span>
                    <span class="engl">don’t</span> <span class="engl">exist.</span> <span class="engl">The</span>
                    <span class="engl">things</span> <span class="engl">we</span>
                    <span class="engl">worried</span> <span class="engl">about</span> <span class="engl">for</span>
                    <span class="engl">months,</span> <span class="engl">a</span> <span class="engl">life-time,</span>
                    <span class="engl">not</span>
                    <span class="engl">even</span> <span class="engl">born</span>
                    <span class="engl">or</span> <span class="engl">thought</span> <span class="engl">about</span>
                    <span class="engl">yet.”
                    </span> </p>
                <p class="english"> <span class="engl">“Safety</span> <span class="engl">catches</span>
                    <span class="engl">off,</span> <span class="engl">everyone!”</span> <span
                        class="engl">ordered</span>
                    <span class="engl">Travis.</span>
                    <span class="engl">“You,</span> <span class="engl">first</span> <span class="engl">shot,</span>
                    <span class="engl">Eckels.</span> <span class="engl">Second,</span> <span
                        class="engl">Billings.</span>
                    <span class="engl">Third,</span> <span class="engl">Kramer.”</span>
                </p>
                <p class="english"> <span class="engl">“I’ve</span> <span class="engl">hunted</span> <span
                        class="engl">tiger,</span>
                    <span class="engl">wild</span> <span class="engl">boar,</span> <span class="engl">buffalo,</span>
                    <span class="engl">elephant,</span> <span class="engl">but</span> <span class="engl">Jesus,</span>
                    <span class="engl">this</span> <span class="engl">is</span>
                    <span class="engl">it,”</span> <span class="engl">said</span>
                    <span class="engl">Eckels.</span> <span class="engl">“I’m</span> <span class="engl">shaking</span>
                    <span class="engl">like</span> <span class="engl">a</span>
                    <span class="engl">kid.”</span> </p>
                <p class="english"> <span class="engl">“Ah,”</span> <span class="engl">said</span>
                    <span class="engl">Travis.</span> </p>
                <p class="english">
                    <span class="engl">Everyone</span> <span class="engl">stopped.</span> </p>
                <p class="english"> <span class="engl">Travis</span> <span class="engl">raised</span>
                    <span class="engl">his</span> <span class="engl">hand.</span>
                    <span class="engl">“Ahead,”</span> <span class="engl">he</span> <span class="engl">whispered.</span>
                    <span class="engl">“In</span> <span class="engl">the</span>
                    <span class="engl">mist.</span> <span class="engl">There</span> <span class="engl">he</span> <span
                        class="engl">is.</span> <span class="engl">There’s</span>
                    <span class="engl">His</span> <span class="engl">Royal</span>
                    <span class="engl">Majesty</span> <span class="engl">now.”</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">jungle</span>
                    <span class="engl">was</span> <span class="engl">wide</span>
                    <span class="engl">and</span> <span class="engl">full</span>
                    <span class="engl">of</span> <span class="engl">twitterings,</span> <span
                        class="engl">rustlings,</span>
                    <span class="engl">murmurs,</span> <span class="engl">and</span>
                    <span class="engl">sighs.</span> </p>
                <p class="english">
                    <span class="engl">Suddenly</span> <span class="engl">it</span> <span class="engl">all</span> <span
                        class="engl">ceased,</span> <span class="engl">as</span>
                    <span class="engl">if</span> <span class="engl">someone</span> <span class="engl">had</span>
                    <span class="engl">shut</span> <span class="engl">a</span>
                    <span class="engl">door.</span> </p>
                <p class="english"> <span class="engl">Silence.</span> </p>
                <p class="english"> <span class="engl">A</span> <span class="engl">sound</span> <span
                        class="engl">of</span>
                    <span class="engl">thunder.</span>
                </p>
                <p class="english"> <span class="engl">Out</span> <span class="engl">of</span> <span
                        class="engl">the</span>
                    <span class="engl">mist,</span> <span class="engl">one</span> <span class="engl">hundred</span>
                    <span class="engl">yards</span>
                    <span class="engl">away,</span> <span class="engl">came</span> <span
                        class="engl">Tyrannosaurus</span>
                    <span class="engl">Rex.</span> </p>
                <p class="english"> <span class="engl">“Jesus</span> <span class="engl">God,”</span>
                    <span class="engl">whispered</span> <span class="engl">Eckels.</span> </p>
                <p class="english"> <span class="engl">“Shit”</span> </p>
                <p class="english"> <span class="engl">It</span> <span class="engl">came</span> <span
                        class="engl">on</span>
                    <span class="engl">great</span> <span class="engl">oiled,</span> <span
                        class="engl">resilient,</span>
                    <span class="engl">striding</span> <span class="engl">legs.</span>
                    <span class="engl">It</span> <span class="engl">lowered</span> <span class="engl">thirty</span>
                    <span class="engl">feet</span> <span class="engl">above</span> <span class="engl">half</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">trees,</span> <span class="engl">a</span>
                    <span class="engl">great</span> <span class="engl">evil</span> <span class="engl">god,</span> <span
                        class="engl">folding</span> <span class="engl">its</span>
                    <span class="engl">delicate</span> <span class="engl">watchmaker’s</span> <span
                        class="engl">claws</span> <span class="engl">close</span>
                    <span class="engl">to</span> <span class="engl">its</span>
                    <span class="engl">oily</span> <span class="engl">reptilian</span> <span class="engl">chest.</span>
                    <span class="engl">Each</span>
                    <span class="engl">lower</span> <span class="engl">leg</span>
                    <span class="engl">was</span> <span class="engl">a</span>
                    <span class="engl">piston,</span> <span class="engl">a</span>
                    <span class="engl">thousand</span> <span class="engl">pounds</span> <span class="engl">of</span>
                    <span class="engl">white</span> <span class="engl">bone,</span>
                    <span class="engl">sunk</span> <span class="engl">in</span>
                    <span class="engl">thick</span> <span class="engl">ropes</span> <span class="engl">of</span> <span
                        class="engl">muscle,</span> <span class="engl">sheathed</span> <span class="engl">over</span>
                    <span class="engl">in</span> <span class="engl">a</span>
                    <span class="engl">gleam</span> <span class="engl">of</span>
                    <span class="engl">pebbled</span> <span class="engl">skin</span> <span class="engl">like</span>
                    <span class="engl">the</span> <span class="engl">mail</span> <span class="engl">of</span> <span
                        class="engl">a</span> <span class="engl">terrible</span> <span class="engl">warrior,</span>
                    <span class="engl">Each</span>
                    <span class="engl">thigh</span> <span class="engl">was</span>
                    <span class="engl">a</span> <span class="engl">ton</span>
                    <span class="engl">of</span> <span class="engl">meat,</span>
                    <span class="engl">ivory,</span> <span class="engl">and</span> <span class="engl">steel</span> <span
                        class="engl">mesh.</span> </p>
                <p class="english"> <span class="engl">And</span> <span class="engl">from</span> <span
                        class="engl">the</span> <span class="engl">great</span> <span class="engl">breathing</span>
                    <span class="engl">cage</span>
                    <span class="engl">of</span> <span class="engl">the</span>
                    <span class="engl">upper</span> <span class="engl">body</span> <span class="engl">those</span>
                    <span class="engl">two</span> <span class="engl">delicate</span> <span class="engl">arms</span>
                    <span class="engl">dangled</span> <span class="engl">out</span> <span class="engl">front,</span>
                    <span class="engl">arms</span> <span class="engl">with</span>
                    <span class="engl">hands</span> <span class="engl">which</span> <span class="engl">might</span>
                    <span class="engl">pick</span> <span class="engl">up</span>
                    <span class="engl">and</span> <span class="engl">examine</span> <span class="engl">men</span>
                    <span class="engl">like</span> <span class="engl">toys,</span> <span class="engl">while</span>
                    <span class="engl">the</span> <span class="engl">snake</span>
                    <span class="engl">neck</span> <span class="engl">coiled.</span> <span class="engl">And</span>
                    <span class="engl">the</span> <span class="engl">head</span>
                    <span class="engl">itself,</span> <span class="engl">a</span>
                    <span class="engl">ton</span> <span class="engl">of</span>
                    <span class="engl">sculptured</span> <span class="engl">stone,</span> <span
                        class="engl">lifted</span>
                    <span class="engl">easily</span> <span class="engl">upon</span> <span class="engl">the</span> <span
                        class="engl">sky.</span> <span class="engl">Its</span> <span class="engl">mouth</span> <span
                        class="engl">gaped,</span>
                    <span class="engl">exposing</span> <span class="engl">a</span> <span class="engl">fence</span> <span
                        class="engl">of</span> <span class="engl">teeth</span> <span class="engl">like</span> <span
                        class="engl">daggers.</span>
                    <span class="engl">Its</span> <span class="engl">eyes</span>
                    <span class="engl">rolled,</span> <span class="engl">ostrich</span> <span class="engl">eggs,</span>
                    <span class="engl">empty</span> <span class="engl">of</span>
                    <span class="engl">all</span> <span class="engl">expression</span> <span class="engl">save</span>
                    <span class="engl">hunger.</span> <span class="engl">It</span> <span class="engl">closed</span>
                    <span class="engl">its</span> <span class="engl">mouth</span> <span class="engl">in</span> <span
                        class="engl">a</span> <span class="engl">death</span> <span class="engl">grin.</span>
                    <span class="engl">It</span> <span class="engl">ran,</span>
                    <span class="engl">its</span> <span class="engl">pelvic</span> <span class="engl">bones</span>
                    <span class="engl">crushing</span> <span class="engl">aside</span> <span class="engl">trees</span>
                    <span class="engl">and</span> <span class="engl">bushes,</span> <span class="engl">its</span>
                    <span class="engl">taloned</span> <span class="engl">feet</span> <span class="engl">clawing</span>
                    <span class="engl">damp</span> <span class="engl">earth,</span> <span class="engl">leaving</span>
                    <span class="engl">prints</span> <span class="engl">six</span> <span class="engl">inches</span>
                    <span class="engl">deep</span> <span class="engl">wherever</span> <span class="engl">it</span>
                    <span class="engl">settled</span> <span class="engl">its</span> <span class="engl">weight.</span>
                    <span class="engl">It</span> <span class="engl">ran</span>
                    <span class="engl">with</span> <span class="engl">a</span>
                    <span class="engl">gliding</span> <span class="engl">ballet</span> <span class="engl">step,</span>
                    <span class="engl">far</span> <span class="engl">too</span>
                    <span class="engl">poised</span> <span class="engl">and</span> <span class="engl">balanced</span>
                    <span class="engl">for</span> <span class="engl">its</span>
                    <span class="engl">ten</span> <span class="engl">tons.</span>
                    <span class="engl">It</span> <span class="engl">moved</span>
                    <span class="engl">into</span> <span class="engl">a</span>
                    <span class="engl">sunlit</span> <span class="engl">arena</span> <span class="engl">warily,</span>
                    <span class="engl">its</span> <span class="engl">beautiful</span> <span class="engl">reptile</span>
                    <span class="engl">hands</span>
                    <span class="engl">feeling</span> <span class="engl">the</span> <span class="engl">air.</span> </p>
                <p class="english"> <span class="engl">“My</span> <span class="engl">God!”</span> <span
                        class="engl">Eckels</span>
                    <span class="engl">twitched</span> <span class="engl">his</span> <span class="engl">mouth.</span>
                    <span class="engl">“It</span> <span class="engl">could</span>
                    <span class="engl">reach</span> <span class="engl">up</span>
                    <span class="engl">and</span> <span class="engl">grab</span>
                    <span class="engl">the</span> <span class="engl">moon.”</span> </p>
                <p class="english"> <span class="engl">“Shit”</span> <span class="engl">Travis</span>
                    <span class="engl">jerked</span> <span class="engl">angrily.</span> <span class="engl">“He</span>
                    <span class="engl">hasn’t</span> <span class="engl">seen</span> <span class="engl">us</span> <span
                        class="engl">yet.”</span> </p>
                <p class="english"> <span class="engl">“It</span> <span class="engl">can’t</span> <span
                        class="engl">be</span> <span class="engl">killed.”</span>
                    <span class="engl">Eckels</span> <span class="engl">pronounced</span> <span class="engl">this</span>
                    <span class="engl">verdict</span> <span class="engl">quietly,</span> <span class="engl">as</span>
                    <span class="engl">if</span> <span class="engl">there</span>
                    <span class="engl">could</span> <span class="engl">be</span>
                    <span class="engl">no</span> <span class="engl">argument.</span> <span class="engl">He</span>
                    <span class="engl">had</span> <span class="engl">weighed</span> <span class="engl">the</span>
                    <span class="engl">evidence</span> <span class="engl">and</span> <span class="engl">this</span>
                    <span class="engl">was</span> <span class="engl">his</span> <span class="engl">considered</span>
                    <span class="engl">opinion.</span> <span class="engl">The</span>
                    <span class="engl">rifle</span> <span class="engl">in</span>
                    <span class="engl">his</span> <span class="engl">hands</span>
                    <span class="engl">seemed</span> <span class="engl">a</span>
                    <span class="engl">cap</span> <span class="engl">gun.</span>
                    <span class="engl">“We</span> <span class="engl">were</span>
                    <span class="engl">fools</span> <span class="engl">to</span>
                    <span class="engl">come.</span> <span class="engl">This</span> <span class="engl">is</span> <span
                        class="engl">impossible.”</span> </p>
                <p class="english">
                    <span class="engl">“Shut</span> <span class="engl">up!”</span> <span class="engl">hissed</span>
                    <span class="engl">Travis.</span> </p>
                <p class="english">
                    <span class="engl">“Nightmare.”</span> </p>
                <p class="english"> <span class="engl">“Turn</span> <span class="engl">around,”</span> <span
                        class="engl">commanded</span> <span class="engl">Travis.</span> <span class="engl">“Walk</span>
                    <span class="engl">quietly</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">Machine.</span> <span class="engl">We’ll</span>
                    <span class="engl">remit</span> <span class="engl">one-half</span> <span class="engl">your</span>
                    <span class="engl">fee.”</span> </p>
                <p class="english"> <span class="engl">“I</span> <span class="engl">didn’t</span> <span
                        class="engl">realise</span> <span class="engl">it</span>
                    <span class="engl">would</span> <span class="engl">be</span>
                    <span class="engl">this</span> <span class="engl">big,”</span> <span class="engl">said</span>
                    <span class="engl">Eckels.</span> <span class="engl">“I</span> <span
                        class="engl">miscalculated,</span>
                    <span class="engl">that’s</span> <span class="engl">all.</span>
                    <span class="engl">And</span> <span class="engl">now</span>
                    <span class="engl">I</span> <span class="engl">want</span>
                    <span class="engl">out.”</span> </p>
                <p class="english"> <span class="engl">“It</span> <span class="engl">sees</span> <span
                        class="engl">us!”</span> </p>
                <p class="english"> <span class="engl">“There’s</span> <span class="engl">the</span>
                    <span class="engl">red</span> <span class="engl">paint</span>
                    <span class="engl">on</span> <span class="engl">its</span>
                    <span class="engl">chest!”</span> </p>
                <p class="english">
                    <span class="engl">The</span> <span class="engl">Thunder</span> <span class="engl">Lizard</span>
                    <span class="engl">raised</span> <span class="engl">itself.</span> <span class="engl">Its</span>
                    <span class="engl">armoured</span> <span class="engl">flesh</span> <span
                        class="engl">glittered</span>
                    <span class="engl">like</span> <span class="engl">a</span>
                    <span class="engl">thousand</span> <span class="engl">green</span> <span class="engl">coins.</span>
                    <span class="engl">The</span> <span class="engl">coins,</span> <span class="engl">crusted</span>
                    <span class="engl">with</span> <span class="engl">slime,</span> <span class="engl">steamed.</span>
                    <span class="engl">In</span> <span class="engl">the</span>
                    <span class="engl">slime,</span> <span class="engl">tiny</span> <span class="engl">insects</span>
                    <span class="engl">wriggled,</span> <span class="engl">so</span> <span class="engl">that</span>
                    <span class="engl">the</span> <span class="engl">entire</span>
                    <span class="engl">body</span> <span class="engl">seemed</span> <span class="engl">to</span> <span
                        class="engl">twitch</span> <span class="engl">and</span>
                    <span class="engl">undulate,</span> <span class="engl">even</span> <span class="engl">while</span>
                    <span class="engl">the</span> <span class="engl">monster</span> <span class="engl">itself</span>
                    <span class="engl">did</span> <span class="engl">not</span>
                    <span class="engl">move.</span> <span class="engl">It</span>
                    <span class="engl">exhaled.</span> <span class="engl">The</span> <span class="engl">stink</span>
                    <span class="engl">of</span> <span class="engl">raw</span> <span class="engl">flesh</span> <span
                        class="engl">blew</span>
                    <span class="engl">down</span> <span class="engl">the</span>
                    <span class="engl">wilderness.</span> </p>
                <p class="english">
                    <span class="engl">“Get</span> <span class="engl">me</span>
                    <span class="engl">out</span> <span class="engl">of</span>
                    <span class="engl">here,”</span> <span class="engl">said</span> <span class="engl">Eckels.</span>
                    <span class="engl">“It</span> <span class="engl">was</span>
                    <span class="engl">never</span> <span class="engl">like</span> <span class="engl">this</span> <span
                        class="engl">before,</span> <span class="engl">I</span> <span class="engl">was</span> <span
                        class="engl">always</span>
                    <span class="engl">sure</span> <span class="engl">I’d</span>
                    <span class="engl">come</span> <span class="engl">through</span> <span class="engl">alive,</span>
                    <span class="engl">I</span> <span class="engl">had</span>
                    <span class="engl">good</span> <span class="engl">guides,</span> <span class="engl">good</span>
                    <span class="engl">safaris,</span> <span class="engl">and</span> <span class="engl">safety.</span>
                    <span class="engl">This</span> <span class="engl">time,</span> <span class="engl">I</span> <span
                        class="engl">figured</span> <span class="engl">wrong.</span>
                    <span class="engl">I’ve</span> <span class="engl">met</span>
                    <span class="engl">my</span> <span class="engl">match</span>
                    <span class="engl">and</span> <span class="engl">admit</span>
                    <span class="engl">it.</span> <span class="engl">This</span>
                    <span class="engl">is</span> <span class="engl">too</span>
                    <span class="engl">much</span> <span class="engl">for</span>
                    <span class="engl">me</span> <span class="engl">to</span>
                    <span class="engl">get</span> <span class="engl">hold</span>
                    <span class="engl">of.”</span> </p>
                <p class="english"> <span class="engl">“Don’t</span> <span class="engl">run,”</span>
                    <span class="engl">said</span> <span class="engl">Lesperance.</span> <span class="engl">“Turn</span>
                    <span class="engl">around.</span>
                    <span class="engl">Hide</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">Machine.”</span> </p>
                <p class="english"> <span class="engl">“Yes.”</span> <span class="engl">Eckels</span>
                    <span class="engl">seemed</span> <span class="engl">to</span>
                    <span class="engl">be</span> <span class="engl">numb.</span>
                    <span class="engl">He</span> <span class="engl">looked</span>
                    <span class="engl">at</span> <span class="engl">his</span>
                    <span class="engl">feet</span> <span class="engl">as</span>
                    <span class="engl">if</span> <span class="engl">trying</span>
                    <span class="engl">to</span> <span class="engl">make</span>
                    <span class="engl">them</span> <span class="engl">move.</span> <span class="engl">He</span> <span
                        class="engl">gave</span> <span class="engl">a</span> <span class="engl">grunt</span> <span
                        class="engl">of</span> <span class="engl">helplessness.</span> </p>
                <p class="english">
                    <span class="engl">“Eckels”</span> </p>
                <p class="english">
                    <span class="engl">He</span> <span class="engl">took</span>
                    <span class="engl">a</span> <span class="engl">few</span>
                    <span class="engl">steps,</span> <span class="engl">blinking,</span> <span
                        class="engl">shuffling.</span> </p>
                <p class="english"> <span class="engl">“Not</span> <span class="engl">that</span> <span
                        class="engl">way!”</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">Monster,</span>
                    <span class="engl">at</span> <span class="engl">the</span>
                    <span class="engl">first</span> <span class="engl">motion,</span> <span class="engl">lunged</span>
                    <span class="engl">forward</span> <span class="engl">with</span> <span class="engl">a</span> <span
                        class="engl">terrible</span> <span class="engl">scream.</span> <span class="engl">It</span>
                    <span class="engl">covered</span> <span class="engl">one</span> <span class="engl">hundred</span>
                    <span class="engl">yards</span> <span class="engl">in</span>
                    <span class="engl">four</span> <span class="engl">seconds.</span> <span class="engl">The</span>
                    <span class="engl">rifles</span> <span class="engl">jerked</span> <span class="engl">up</span> <span
                        class="engl">and</span> <span class="engl">blazed</span>
                    <span class="engl">fire.</span> <span class="engl">A</span>
                    <span class="engl">windstorm</span> <span class="engl">from</span> <span class="engl">the</span>
                    <span class="engl">beast’s</span> <span class="engl">mouth</span>
                    <span class="engl">engulfed</span> <span class="engl">them</span> <span class="engl">in</span> <span
                        class="engl">the</span> <span class="engl">stench</span>
                    <span class="engl">of</span> <span class="engl">slime</span>
                    <span class="engl">and</span> <span class="engl">old</span>
                    <span class="engl">blood.</span> <span class="engl">The</span> <span class="engl">Monster</span>
                    <span class="engl">roared,</span> <span class="engl">teeth</span> <span
                        class="engl">glittering</span>
                    <span class="engl">with</span>
                    <span class="engl">sun.</span> </p>
                <p class="english"> <span class="engl">Eckels,</span> <span class="engl">not</span>
                    <span class="engl">looking</span> <span class="engl">back,</span> <span class="engl">walked</span>
                    <span class="engl">blindly</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">edge</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">Path,</span> <span class="engl">his</span> <span class="engl">gun</span> <span
                        class="engl">limp</span> <span class="engl">in</span> <span class="engl">his</span> <span
                        class="engl">arms,</span> <span class="engl">stepped</span> <span class="engl">off</span>
                    <span class="engl">the</span> <span class="engl">Path,</span>
                    <span class="engl">and</span> <span class="engl">walked,</span> <span class="engl">not</span>
                    <span class="engl">knowing</span> <span class="engl">it,</span> <span class="engl">in</span> <span
                        class="engl">the</span> <span class="engl">jungle.</span>
                    <span class="engl">His</span> <span class="engl">feet</span>
                    <span class="engl">sank</span> <span class="engl">into</span>
                    <span class="engl">green</span> <span class="engl">moss.</span> <span class="engl">His</span> <span
                        class="engl">legs</span> <span class="engl">moved</span>
                    <span class="engl">him,</span> <span class="engl">and</span>
                    <span class="engl">he</span> <span class="engl">felt</span>
                    <span class="engl">alone</span> <span class="engl">and</span>
                    <span class="engl">remote</span> <span class="engl">from</span> <span class="engl">the</span> <span
                        class="engl">events</span> <span class="engl">behind.</span>
                </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">rifles</span> <span
                        class="engl">cracked</span>
                    <span class="engl">again.</span> <span class="engl">Their</span> <span class="engl">sound</span>
                    <span class="engl">was</span> <span class="engl">lost</span>
                    <span class="engl">in</span> <span class="engl">shriek</span>
                    <span class="engl">and</span> <span class="engl">lizard</span> <span class="engl">thunder.</span>
                    <span class="engl">The</span> <span class="engl">great</span>
                    <span class="engl">lever</span> <span class="engl">of</span>
                    <span class="engl">the</span> <span class="engl">reptile’s</span> <span class="engl">tail</span>
                    <span class="engl">swung</span> <span class="engl">up,</span>
                    <span class="engl">lashed</span> <span class="engl">sideways.</span> <span class="engl">Trees</span>
                    <span class="engl">exploded</span> <span class="engl">in</span> <span class="engl">clouds</span>
                    <span class="engl">of</span> <span class="engl">leaf</span> <span class="engl">and</span> <span
                        class="engl">branch.</span>
                    <span class="engl">The</span> <span class="engl">Monster</span> <span class="engl">twitched</span>
                    <span class="engl">its</span>
                    <span class="engl">jeweller’s</span> <span class="engl">hands</span> <span class="engl">down</span>
                    <span class="engl">to</span> <span class="engl">fondle</span>
                    <span class="engl">at</span> <span class="engl">the</span>
                    <span class="engl">men,</span> <span class="engl">to</span>
                    <span class="engl">twist</span> <span class="engl">them</span> <span class="engl">in</span> <span
                        class="engl">half,</span> <span class="engl">to</span> <span class="engl">crush</span> <span
                        class="engl">them</span>
                    <span class="engl">like</span> <span class="engl">berries,</span> <span class="engl">to</span>
                    <span class="engl">cram</span> <span class="engl">them</span>
                    <span class="engl">into</span> <span class="engl">its</span>
                    <span class="engl">teeth</span> <span class="engl">and</span>
                    <span class="engl">its</span> <span class="engl">screaming</span> <span class="engl">throat.</span>
                    <span class="engl">Its</span>
                    <span class="engl">boulder-stone</span> <span class="engl">eyes</span> <span
                        class="engl">levelled</span>
                    <span class="engl">with</span> <span class="engl">the</span>
                    <span class="engl">men.</span> <span class="engl">They</span>
                    <span class="engl">saw</span> <span class="engl">themselves</span> <span
                        class="engl">mirrored.</span>
                    <span class="engl">They</span>
                    <span class="engl">fired</span> <span class="engl">at</span>
                    <span class="engl">the</span> <span class="engl">metallic</span> <span class="engl">eyelids</span>
                    <span class="engl">and</span>
                    <span class="engl">the</span> <span class="engl">blazing</span> <span class="engl">black</span>
                    <span class="engl">iris.</span> </p>
                <p class="english"> <span class="engl">Like</span> <span class="engl">a</span> <span
                        class="engl">stone</span> <span class="engl">idol,</span>
                    <span class="engl">like</span> <span class="engl">a</span>
                    <span class="engl">mountain</span> <span class="engl">avalanche,</span> <span
                        class="engl">Tyrannosaurs</span> <span class="engl">fell.</span> <span
                        class="engl">Thundering,</span> <span class="engl">it</span>
                    <span class="engl">clutched</span> <span class="engl">trees,</span> <span class="engl">pulled</span>
                    <span class="engl">them</span> <span class="engl">with</span>
                    <span class="engl">it.</span> <span class="engl">It</span>
                    <span class="engl">wrenched</span> <span class="engl">and</span> <span class="engl">tore</span>
                    <span class="engl">the</span> <span class="engl">metal</span> <span class="engl">Path,</span> <span
                        class="engl">The</span> <span class="engl">men</span> <span class="engl">flung</span> <span
                        class="engl">themselves</span> <span class="engl">back</span>
                    <span class="engl">and</span> <span class="engl">away.</span>
                    <span class="engl">The</span> <span class="engl">body</span>
                    <span class="engl">hit,</span> <span class="engl">ten</span>
                    <span class="engl">tons</span> <span class="engl">of</span>
                    <span class="engl">cold</span> <span class="engl">flesh</span> <span class="engl">and</span> <span
                        class="engl">stone.</span> <span class="engl">The</span>
                    <span class="engl">guns</span> <span class="engl">fired.</span> <span class="engl">The</span>
                    <span class="engl">Monster</span> <span class="engl">lashed</span> <span class="engl">its</span>
                    <span class="engl">armoured</span> <span class="engl">tail,</span> <span
                        class="engl">twitched</span>
                    <span class="engl">its</span> <span class="engl">snake</span>
                    <span class="engl">jaws,</span> <span class="engl">and</span>
                    <span class="engl">lay</span> <span class="engl">still.</span> <span class="engl">A</span> <span
                        class="engl">fount</span> <span class="engl">of</span> <span class="engl">blood</span> <span
                        class="engl">spurted</span>
                    <span class="engl">from</span> <span class="engl">its</span>
                    <span class="engl">throat.</span> <span class="engl">Somewhere</span> <span
                        class="engl">inside,</span>
                    <span class="engl">a</span> <span class="engl">sac</span> <span class="engl">of</span> <span
                        class="engl">fluids</span> <span class="engl">burst.</span>
                    <span class="engl">Sickening</span> <span class="engl">gushes</span> <span
                        class="engl">drenched</span>
                    <span class="engl">the</span> <span class="engl">hunters.</span> <span class="engl">They</span>
                    <span class="engl">stood,</span> <span class="engl">red</span> <span class="engl">and</span> <span
                        class="engl">glistening.</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">thunder</span>
                    <span class="engl">faded.</span> </p>
                <p class="english">
                    <span class="engl">The</span> <span class="engl">jungle</span> <span class="engl">was</span>
                    <span class="engl">silent.</span> <span class="engl">After</span> <span class="engl">the</span>
                    <span class="engl">avalanche,</span> <span class="engl">a</span>
                    <span class="engl">green</span> <span class="engl">peace.</span> <span class="engl">After</span>
                    <span class="engl">the</span> <span class="engl">nightmare,</span> <span
                        class="engl">morning.</span>
                </p>
                <p class="english"> <span class="engl">Billings</span> <span class="engl">and</span>
                    <span class="engl">Kramer</span> <span class="engl">sat</span> <span class="engl">on</span> <span
                        class="engl">the</span> <span class="engl">pathway</span>
                    <span class="engl">and</span> <span class="engl">threw</span>
                    <span class="engl">up.</span> <span class="engl">Travis</span> <span class="engl">and</span>
                    <span class="engl">Lesperance</span> <span class="engl">stood</span> <span class="engl">with</span>
                    <span class="engl">smoking</span> <span class="engl">rifles,</span> <span
                        class="engl">cursing</span>
                    <span class="engl">steadily.</span> </p>
                <p class="english">
                    <span class="engl">In</span> <span class="engl">the</span>
                    <span class="engl">Time</span> <span class="engl">Machine,</span> <span class="engl">on</span>
                    <span class="engl">his</span> <span class="engl">face,</span>
                    <span class="engl">Eckels</span> <span class="engl">lay</span> <span class="engl">shivering.</span>
                    <span class="engl">He</span> <span class="engl">had</span>
                    <span class="engl">found</span> <span class="engl">his</span>
                    <span class="engl">way</span> <span class="engl">back</span>
                    <span class="engl">to</span> <span class="engl">the</span>
                    <span class="engl">Path,</span> <span class="engl">climbed</span> <span class="engl">into</span>
                    <span class="engl">the</span> <span class="engl">Machine.</span> </p>
                <p class="english"> <span class="engl">Travis</span> <span class="engl">came</span>
                    <span class="engl">walking,</span> <span class="engl">glanced</span> <span class="engl">at</span>
                    <span class="engl">Eckels,</span> <span class="engl">took</span> <span class="engl">cotton</span>
                    <span class="engl">gauze</span> <span class="engl">from</span> <span class="engl">a</span> <span
                        class="engl">metal</span> <span class="engl">box,</span>
                    <span class="engl">and</span> <span class="engl">returned</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">others,</span> <span class="engl">who</span>
                    <span class="engl">were</span> <span class="engl">sitting</span> <span class="engl">on</span>
                    <span class="engl">the</span> <span class="engl">Path.</span>
                </p>
                <p class="english"> <span class="engl">“Clean</span>
                    <span class="engl">up.”</span> </p>
                <p class="english"> <span class="engl">They</span> <span class="engl">wiped</span>
                    <span class="engl">the</span> <span class="engl">blood</span>
                    <span class="engl">from</span> <span class="engl">their</span> <span class="engl">helmets.</span>
                    <span class="engl">They</span> <span class="engl">began</span> <span class="engl">to</span> <span
                        class="engl">curse</span> <span class="engl">too.</span>
                    <span class="engl">The</span> <span class="engl">Monster</span> <span class="engl">lay,</span>
                    <span class="engl">a</span> <span class="engl">hill</span>
                    <span class="engl">of</span> <span class="engl">solid</span>
                    <span class="engl">flesh.</span> <span class="engl">Within,</span> <span class="engl">you</span>
                    <span class="engl">could</span> <span class="engl">hear</span> <span class="engl">the</span> <span
                        class="engl">sighs</span> <span class="engl">and</span> <span class="engl">murmurs</span> <span
                        class="engl">as</span>
                    <span class="engl">the</span> <span class="engl">furthest</span> <span class="engl">chambers</span>
                    <span class="engl">of</span>
                    <span class="engl">it</span> <span class="engl">died,</span>
                    <span class="engl">the</span> <span class="engl">organs</span> <span
                        class="engl">malfunctioning,</span>
                    <span class="engl">liquids</span> <span class="engl">running</span>
                    <span class="engl">a</span> <span class="engl">final</span>
                    <span class="engl">instant</span> <span class="engl">from</span> <span class="engl">pocket</span>
                    <span class="engl">to</span> <span class="engl">sac</span>
                    <span class="engl">to</span> <span class="engl">spleen,</span> <span class="engl">everything</span>
                    <span class="engl">shutting</span> <span class="engl">off,</span>
                    <span class="engl">closing</span> <span class="engl">up</span> <span class="engl">forever.</span>
                    <span class="engl">It</span> <span class="engl">was</span>
                    <span class="engl">like</span> <span class="engl">standing</span> <span class="engl">by</span>
                    <span class="engl">a</span> <span class="engl">wrecked</span>
                    <span class="engl">locomotive</span> <span class="engl">or</span> <span class="engl">a</span> <span
                        class="engl">steam</span> <span class="engl">shovel</span>
                    <span class="engl">at</span> <span class="engl">quitting</span> <span class="engl">time,</span>
                    <span class="engl">all</span> <span class="engl">valves</span> <span class="engl">being</span>
                    <span class="engl">released</span> <span class="engl">or</span> <span class="engl">levered</span>
                    <span class="engl">tight.</span> <span class="engl">Bones</span> <span class="engl">cracked;</span>
                    <span class="engl">the</span> <span class="engl">tonnage</span> <span class="engl">of</span>
                    <span class="engl">its</span> <span class="engl">own</span>
                    <span class="engl">flesh,</span> <span class="engl">off</span> <span class="engl">balance,</span>
                    <span class="engl">dead</span> <span class="engl">weight,</span> <span class="engl">snapped</span>
                    <span class="engl">the</span> <span class="engl">delicate</span> <span class="engl">forearms,</span>
                    <span class="engl">caught</span> <span class="engl">underneath.</span> <span class="engl">The</span>
                    <span class="engl">meat</span> <span class="engl">settled,</span> <span
                        class="engl">quivering.</span>
                </p>
                <p class="english"> <span class="engl">Another</span> <span class="engl">cracking</span> <span
                        class="engl">sound.</span>
                    <span class="engl">Overhead,</span> <span class="engl">a</span> <span class="engl">gigantic</span>
                    <span class="engl">tree</span> <span class="engl">branch</span> <span class="engl">broke</span>
                    <span class="engl">from</span> <span class="engl">its</span>
                    <span class="engl">heavy</span> <span class="engl">mooring,</span> <span class="engl">fell.</span>
                    <span class="engl">It</span> <span class="engl">crashed</span> <span class="engl">upon</span>
                    <span class="engl">the</span> <span class="engl">dead</span>
                    <span class="engl">beast</span> <span class="engl">with</span> <span class="engl">finality.</span>
                </p>
                <p class="english"> <span class="engl">“There.”</span>
                    <span class="engl">Lesperance</span> <span class="engl">checked</span> <span class="engl">his</span>
                    <span class="engl">watch.</span> <span class="engl">“Right</span> <span class="engl">on</span> <span
                        class="engl">time.</span> <span class="engl">That’s</span>
                    <span class="engl">the</span> <span class="engl">giant</span>
                    <span class="engl">tree</span> <span class="engl">that</span>
                    <span class="engl">was</span> <span class="engl">scheduled</span> <span class="engl">to</span>
                    <span class="engl">fall</span> <span class="engl">and</span>
                    <span class="engl">kill</span> <span class="engl">this</span>
                    <span class="engl">animal</span> <span class="engl">originally.”</span> <span class="engl">He</span>
                    <span class="engl">glanced</span> <span class="engl">at</span> <span class="engl">the</span> <span
                        class="engl">two</span> <span class="engl">hunters.</span>
                    <span class="engl">“You</span> <span class="engl">want</span>
                    <span class="engl">the</span> <span class="engl">trophy</span> <span class="engl">picture?”</span>
                </p>
                <p class="english"> <span class="engl">“What?”</span> </p>
                <p class="english"> <span class="engl">“We</span> <span class="engl">can’t</span> <span
                        class="engl">take</span> <span class="engl">a</span> <span class="engl">trophy</span> <span
                        class="engl">back</span>
                    <span class="engl">to</span> <span class="engl">the</span>
                    <span class="engl">Future.</span> <span class="engl">The</span> <span class="engl">body</span> <span
                        class="engl">has</span> <span class="engl">to</span> <span class="engl">stay</span> <span
                        class="engl">right</span>
                    <span class="engl">here</span> <span class="engl">where</span> <span class="engl">it</span> <span
                        class="engl">would</span> <span class="engl">have</span>
                    <span class="engl">died</span> <span class="engl">originally,</span> <span class="engl">so</span>
                    <span class="engl">the</span> <span class="engl">insects,</span> <span class="engl">birds,</span>
                    <span class="engl">and</span> <span class="engl">bacteria</span> <span class="engl">can</span>
                    <span class="engl">get</span> <span class="engl">at</span>
                    <span class="engl">it,</span> <span class="engl">as</span>
                    <span class="engl">they</span> <span class="engl">were</span>
                    <span class="engl">intended</span> <span class="engl">to.</span> <span
                        class="engl">Everything</span>
                    <span class="engl">in</span> <span class="engl">balance.</span> <span class="engl">The</span>
                    <span class="engl">body</span> <span class="engl">stays.</span> <span class="engl">But</span>
                    <span class="engl">we</span> <span class="engl">can</span>
                    <span class="engl">take</span> <span class="engl">a</span>
                    <span class="engl">picture</span> <span class="engl">of</span> <span class="engl">you</span> <span
                        class="engl">standing</span> <span class="engl">near</span>
                    <span class="engl">it.”</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">two</span> <span
                        class="engl">men</span> <span class="engl">tried</span> <span class="engl">to</span> <span
                        class="engl">think,</span> <span class="engl">but</span> <span class="engl">gave</span> <span
                        class="engl">up,</span> <span class="engl">shaking</span>
                    <span class="engl">their</span> <span class="engl">heads.</span> </p>
                <p class="english"> <span class="engl">They</span> <span class="engl">let</span> <span
                        class="engl">themselves</span> <span class="engl">be</span>
                    <span class="engl">led</span> <span class="engl">along</span>
                    <span class="engl">the</span> <span class="engl">metal</span>
                    <span class="engl">Path.</span> <span class="engl">They</span> <span class="engl">sank</span> <span
                        class="engl">wearily</span> <span class="engl">into</span>
                    <span class="engl">the</span> <span class="engl">Machine</span> <span class="engl">cushions.</span>
                    <span class="engl">They</span>
                    <span class="engl">gazed</span> <span class="engl">back</span> <span class="engl">at</span> <span
                        class="engl">the</span> <span class="engl">ruined</span>
                    <span class="engl">Monster,</span> <span class="engl">the</span> <span
                        class="engl">stagnating</span>
                    <span class="engl">mound,</span> <span class="engl">where</span> <span class="engl">already</span>
                    <span class="engl">strange</span> <span class="engl">reptilian</span> <span
                        class="engl">birds</span>
                    <span class="engl">and</span> <span class="engl">golden</span> <span class="engl">insects</span>
                    <span class="engl">were</span> <span class="engl">busy</span>
                    <span class="engl">at</span> <span class="engl">the</span>
                    <span class="engl">steaming</span> <span class="engl">armour.</span> </p>
                <p class="english"> <span class="engl">A</span> <span class="engl">sound</span> <span
                        class="engl">on</span>
                    <span class="engl">the</span> <span class="engl">floor</span> <span class="engl">of</span> <span
                        class="engl">the</span> <span class="engl">Time</span> <span class="engl">Machine</span> <span
                        class="engl">stiffened</span> <span class="engl">them.</span>
                    <span class="engl">Eckels</span> <span class="engl">sat</span> <span class="engl">there,</span>
                    <span class="engl">shivering.</span> </p>
                <p class="english">
                    <span class="engl">“I’m</span> <span class="engl">sorry,”</span> <span class="engl">he</span>
                    <span class="engl">said</span> <span class="engl">at</span>
                    <span class="engl">last.</span> </p>
                <p class="english"> <span class="engl">“Get</span> <span class="engl">up!”</span> <span
                        class="engl">cried</span> <span class="engl">Travis.</span>
                </p>
                <p class="english"> <span class="engl">Eckels</span>
                    <span class="engl">got</span> <span class="engl">up.</span>
                </p>
                <p class="english"> <span class="engl">“Go</span> <span class="engl">out</span> <span
                        class="engl">on</span>
                    <span class="engl">that</span> <span class="engl">Path</span> <span class="engl">alone,”</span>
                    <span class="engl">said</span>
                    <span class="engl">Travis.</span> <span class="engl">He</span> <span class="engl">had</span> <span
                        class="engl">his</span> <span class="engl">rifle</span> <span class="engl">pointed.</span> <span
                        class="engl">“You’re</span> <span class="engl">not</span>
                    <span class="engl">coming</span> <span class="engl">back</span> <span class="engl">in</span> <span
                        class="engl">the</span> <span class="engl">Machine.</span>
                    <span class="engl">We’re</span> <span class="engl">leaving</span> <span class="engl">you</span>
                    <span class="engl">here!”</span> </p>
                <p class="english">
                    <span class="engl">Lesperance</span> <span class="engl">seized</span> <span
                        class="engl">Travis’</span>
                    <span class="engl">arm.</span> <span class="engl">“Wait”</span> </p>
                <p class="english"> <span class="engl">“Stay</span> <span class="engl">out</span> <span
                        class="engl">of</span> <span class="engl">this!”</span> <span class="engl">Travis</span> <span
                        class="engl">shook</span>
                    <span class="engl">his</span> <span class="engl">hand</span>
                    <span class="engl">away.</span> <span class="engl">“This</span> <span class="engl">son</span> <span
                        class="engl">of</span> <span class="engl">a</span> <span class="engl">bitch</span> <span
                        class="engl">nearly</span>
                    <span class="engl">killed</span> <span class="engl">us.</span> <span class="engl">But</span> <span
                        class="engl">it</span> <span class="engl">isn’t</span> <span class="engl">that</span> <span
                        class="engl">so</span> <span class="engl">much.</span> <span class="engl">Hell,</span>
                    <span class="engl">no.</span> <span class="engl">It’s</span>
                    <span class="engl">his</span> <span class="engl">shoes</span>
                    <span class="engl">Look</span> <span class="engl">at</span>
                    <span class="engl">them!</span> <span class="engl">He</span>
                    <span class="engl">ran</span> <span class="engl">off</span>
                    <span class="engl">the</span> <span class="engl">Path.</span>
                    <span class="engl">My</span> <span class="engl">God,</span>
                    <span class="engl">that</span> <span class="engl">ruins</span> <span class="engl">us</span> <span
                        class="engl">I</span> <span class="engl">Christ</span> <span class="engl">knows</span> <span
                        class="engl">how</span> <span class="engl">much</span> <span class="engl">we’ll</span>
                    <span class="engl">forfeit.</span> <span class="engl">Tens</span> <span class="engl">of</span> <span
                        class="engl">thousands</span> <span class="engl">of</span>
                    <span class="engl">dollars</span> <span class="engl">of</span> <span class="engl">insurance</span>
                    <span class="engl">We</span> <span class="engl">guarantee</span> <span class="engl">no</span>
                    <span class="engl">one</span> <span class="engl">leaves</span> <span class="engl">the</span>
                    <span class="engl">Path.</span> <span class="engl">He</span>
                    <span class="engl">left</span> <span class="engl">it.</span>
                    <span class="engl">Oh,</span> <span class="engl">the</span>
                    <span class="engl">damn</span> <span class="engl">fool!</span> <span class="engl">Ill</span> <span
                        class="engl">have</span> <span class="engl">to</span> <span class="engl">report</span> <span
                        class="engl">to</span> <span class="engl">the</span> <span class="engl">government.</span>
                    <span class="engl">They</span> <span class="engl">might</span> <span class="engl">revoke</span>
                    <span class="engl">our</span> <span class="engl">license</span> <span class="engl">to</span>
                    <span class="engl">travel.</span> <span class="engl">God</span> <span class="engl">knows</span>
                    <span class="engl">what</span> <span class="engl">he’s</span> <span class="engl">done</span> <span
                        class="engl">to</span> <span class="engl">Time,</span> <span class="engl">to</span> <span
                        class="engl">History!”</span> </p>
                <p class="english"> <span class="engl">“Take</span> <span class="engl">it</span> <span
                        class="engl">easy,</span> <span class="engl">all</span> <span class="engl">he</span> <span
                        class="engl">did</span> <span class="engl">was</span> <span class="engl">kick</span> <span
                        class="engl">up</span> <span class="engl">some</span> <span class="engl">dirt.”</span> </p>
                <p class="english"> <span class="engl">“How</span> <span class="engl">do</span> <span
                        class="engl">we</span>
                    <span class="engl">know?”</span> <span class="engl">cried</span> <span class="engl">Travis.</span>
                    <span class="engl">“We</span> <span class="engl">don’t</span>
                    <span class="engl">know</span> <span class="engl">anything!</span> <span class="engl">It’s</span>
                    <span class="engl">all</span> <span class="engl">a</span>
                    <span class="engl">damn</span> <span class="engl">mystery!</span> <span class="engl">Get</span>
                    <span class="engl">out</span> <span class="engl">there,</span> <span class="engl">Eckels!”</span>
                </p>
                <p class="english"> <span class="engl">Eckels</span>
                    <span class="engl">fumbled</span> <span class="engl">his</span> <span class="engl">shirt.</span>
                    <span class="engl">“Ill</span> <span class="engl">pay</span>
                    <span class="engl">anything.</span> <span class="engl">A</span> <span class="engl">hundred</span>
                    <span class="engl">thousand</span> <span class="engl">dollars!”</span> </p>
                <p class="english"> <span class="engl">Travis</span> <span class="engl">glared</span>
                    <span class="engl">at</span> <span class="engl">Eckels’</span> <span class="engl">chequebook</span>
                    <span class="engl">and</span>
                    <span class="engl">spat.</span> <span class="engl">“Go</span>
                    <span class="engl">out</span> <span class="engl">there.</span> <span class="engl">The</span>
                    <span class="engl">Monster’s</span> <span class="engl">next</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">Path.</span> <span class="engl">Stick</span> <span
                        class="engl">your</span>
                    <span class="engl">arms</span> <span class="engl">up</span>
                    <span class="engl">to</span> <span class="engl">your</span>
                    <span class="engl">elbows</span> <span class="engl">in</span>
                    <span class="engl">his</span> <span class="engl">mouth.</span> <span class="engl">Then</span>
                    <span class="engl">you</span> <span class="engl">can</span>
                    <span class="engl">come</span> <span class="engl">back</span>
                    <span class="engl">with</span> <span class="engl">us.”</span>
                </p>
                <p class="english"> <span class="engl">“That’s</span>
                    <span class="engl">unreasonable!”</span> </p>
                <p class="english"> <span class="engl">“The</span> <span class="engl">Monsters</span> <span
                        class="engl">dead,</span>
                    <span class="engl">you</span> <span class="engl">yellow</span> <span class="engl">bastard.</span>
                    <span class="engl">The</span> <span class="engl">bullets!</span> <span class="engl">The</span>
                    <span class="engl">bullets</span> <span class="engl">can’t</span> <span class="engl">be</span> <span
                        class="engl">left</span> <span class="engl">behind.</span>
                    <span class="engl">They</span> <span class="engl">don’t</span> <span class="engl">belong</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">Past;</span> <span class="engl">they</span> <span class="engl">might</span>
                    <span class="engl">change</span> <span class="engl">something.</span> <span
                        class="engl">Here’s</span>
                    <span class="engl">my</span> <span class="engl">knife.</span> <span class="engl">Dig</span>
                    <span class="engl">them</span> <span class="engl">out!”</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">jungle</span>
                    <span class="engl">was</span> <span class="engl">alive</span>
                    <span class="engl">again,</span> <span class="engl">full</span> <span class="engl">of</span> <span
                        class="engl">the</span> <span class="engl">old</span> <span class="engl">tremorings</span> <span
                        class="engl">and</span>
                    <span class="engl">bird</span> <span class="engl">cries.</span> <span class="engl">Eckels</span>
                    <span class="engl">turned</span> <span class="engl">slowly</span> <span class="engl">to</span> <span
                        class="engl">regard</span> <span class="engl">that</span>
                    <span class="engl">primeval</span> <span class="engl">garbage</span> <span class="engl">dump,</span>
                    <span class="engl">that</span> <span class="engl">hill</span>
                    <span class="engl">of</span> <span class="engl">nightmares</span> <span class="engl">and</span>
                    <span class="engl">terror.</span> <span class="engl">After</span> <span class="engl">a</span> <span
                        class="engl">long</span> <span class="engl">time,</span>
                    <span class="engl">like</span> <span class="engl">a</span>
                    <span class="engl">sleepwalker,</span> <span class="engl">he</span> <span
                        class="engl">shuffled</span>
                    <span class="engl">out</span> <span class="engl">along</span>
                    <span class="engl">the</span> <span class="engl">Path.</span>
                </p>
                <p class="english"> <span class="engl">He</span> <span class="engl">returned,</span> <span
                        class="engl">shuddering,</span> <span class="engl">five</span> <span class="engl">minutes</span>
                    <span class="engl">later,</span> <span class="engl">his</span> <span class="engl">arms</span> <span
                        class="engl">soaked</span> <span class="engl">and</span>
                    <span class="engl">red</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">elbows.</span> <span class="engl">He</span>
                    <span class="engl">held</span> <span class="engl">out</span>
                    <span class="engl">his</span> <span class="engl">hands.</span> <span class="engl">Each</span>
                    <span class="engl">held</span> <span class="engl">a</span>
                    <span class="engl">number</span> <span class="engl">of</span>
                    <span class="engl">steel</span> <span class="engl">bullets.</span> <span class="engl">Then</span>
                    <span class="engl">he</span> <span class="engl">fell.</span>
                    <span class="engl">He</span> <span class="engl">lay</span>
                    <span class="engl">where</span> <span class="engl">he</span>
                    <span class="engl">fell,</span> <span class="engl">not</span>
                    <span class="engl">moving.</span> </p>
                <p class="english">
                    <span class="engl">“You</span> <span class="engl">didn’t</span> <span class="engl">have</span>
                    <span class="engl">to</span> <span class="engl">make</span>
                    <span class="engl">him</span> <span class="engl">do</span>
                    <span class="engl">that,”</span> <span class="engl">said</span> <span
                        class="engl">Lesperance.</span>
                </p>
                <p class="english"> <span class="engl">“Didn’t</span> <span class="engl">I?</span>
                    <span class="engl">It’s</span> <span class="engl">too</span>
                    <span class="engl">early</span> <span class="engl">to</span>
                    <span class="engl">tell.”</span> <span class="engl">Travis</span> <span class="engl">nudged</span>
                    <span class="engl">the</span> <span class="engl">still</span>
                    <span class="engl">body.</span> <span class="engl">“He’ll</span> <span class="engl">live.</span>
                    <span class="engl">Next</span> <span class="engl">time</span>
                    <span class="engl">he</span> <span class="engl">won’t</span>
                    <span class="engl">go</span> <span class="engl">hunting</span> <span class="engl">game</span>
                    <span class="engl">like</span> <span class="engl">this.</span> <span class="engl">Okay.”</span>
                    <span class="engl">He</span> <span class="engl">jerked</span>
                    <span class="engl">his</span> <span class="engl">thumb</span>
                    <span class="engl">wearily</span> <span class="engl">at</span> <span class="engl">Lesperance.</span>
                    <span class="engl">“Switch</span> <span class="engl">on.</span> <span class="engl">Let’s</span>
                    <span class="engl">go</span> <span class="engl">home.”</span> </p>
                <p class="english"> <span class="engl">1492.</span> <span class="engl">1776.</span> <span
                        class="engl">1812.</span>
                </p>
                <p class="english"> <span class="engl">They</span> <span class="engl">cleaned</span> <span
                        class="engl">their</span>
                    <span class="engl">hands</span> <span class="engl">and</span>
                    <span class="engl">faces.</span> <span class="engl">They</span> <span class="engl">changed</span>
                    <span class="engl">their</span> <span class="engl">caking</span> <span class="engl">shirts</span>
                    <span class="engl">and</span> <span class="engl">pants.</span> <span class="engl">Eckels</span>
                    <span class="engl">was</span> <span class="engl">up</span>
                    <span class="engl">and</span> <span class="engl">around</span> <span class="engl">again,</span>
                    <span class="engl">not</span> <span class="engl">speaking.</span> <span class="engl">Travis</span>
                    <span class="engl">glared</span>
                    <span class="engl">at</span> <span class="engl">him</span>
                    <span class="engl">for</span> <span class="engl">a</span>
                    <span class="engl">full</span> <span class="engl">ten</span>
                    <span class="engl">minutes.</span> </p>
                <p class="english">
                    <span class="engl">“Don’t</span> <span class="engl">look</span> <span class="engl">at</span> <span
                        class="engl">me,”</span> <span class="engl">cried</span>
                    <span class="engl">Eckels.</span> <span class="engl">“I</span> <span class="engl">haven’t</span>
                    <span class="engl">done</span> <span class="engl">anything.”</span> </p>
                <p class="english"> <span class="engl">“Who</span> <span class="engl">can</span> <span
                        class="engl">tell?”</span> </p>
                <p class="english"> <span class="engl">“Just</span> <span class="engl">ran</span> <span
                        class="engl">off</span> <span class="engl">the</span> <span class="engl">Path,</span> <span
                        class="engl">that’s</span>
                    <span class="engl">all,</span> <span class="engl">a</span>
                    <span class="engl">little</span> <span class="engl">mud</span> <span class="engl">on</span> <span
                        class="engl">my</span> <span class="engl">shoes</span> <span class="engl">what</span> <span
                        class="engl">do</span> <span class="engl">you</span> <span class="engl">want</span> <span
                        class="engl">me</span> <span class="engl">to</span> <span class="engl">get</span> <span
                        class="engl">down</span> <span class="engl">and</span> <span class="engl">pray?”</span> </p>
                <p class="english"> <span class="engl">“We</span> <span class="engl">might</span> <span
                        class="engl">need</span>
                    <span class="engl">it.</span> <span class="engl">I’m</span>
                    <span class="engl">warning</span> <span class="engl">you,</span> <span class="engl">Eckels,</span>
                    <span class="engl">I</span> <span class="engl">might</span>
                    <span class="engl">kill</span> <span class="engl">you</span>
                    <span class="engl">yet.</span> <span class="engl">I’ve</span>
                    <span class="engl">got</span> <span class="engl">my</span>
                    <span class="engl">gun</span> <span class="engl">ready.”</span> </p>
                <p class="english"> <span class="engl">“I’m</span> <span class="engl">innocent.</span>
                    <span class="engl">I’ve</span> <span class="engl">done</span>
                    <span class="engl">nothing!”</span> </p>
                <p class="english">
                    <span class="engl">1999.</span> <span class="engl">2000.</span> <span class="engl">2055.</span>
                </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">Machine</span> <span
                        class="engl">stopped.</span> </p>
                <p class="english"> <span class="engl">“Get</span> <span class="engl">out,”</span>
                    <span class="engl">said</span> <span class="engl">Travis.</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">room</span> <span
                        class="engl">was</span> <span class="engl">there</span> <span class="engl">as</span> <span
                        class="engl">they</span> <span class="engl">had</span> <span class="engl">left</span> <span
                        class="engl">it.</span> <span class="engl">But</span> <span class="engl">not</span> <span
                        class="engl">the</span> <span class="engl">same</span> <span class="engl">as</span> <span
                        class="engl">they</span> <span class="engl">had</span> <span class="engl">left</span> <span
                        class="engl">it.</span> <span class="engl">The</span> <span class="engl">same</span> <span
                        class="engl">man</span> <span class="engl">sat</span> <span class="engl">behind</span> <span
                        class="engl">the</span>
                    <span class="engl">same</span> <span class="engl">desk.</span> <span class="engl">But</span> <span
                        class="engl">the</span> <span class="engl">same</span> <span class="engl">man</span> <span
                        class="engl">did</span> <span class="engl">not</span> <span class="engl">quite</span> <span
                        class="engl">sit</span> <span class="engl">behind</span>
                    <span class="engl">the</span> <span class="engl">same</span>
                    <span class="engl">desk.</span> </p>
                <p class="english"> <span class="engl">Travis</span> <span class="engl">looked</span>
                    <span class="engl">around</span> <span class="engl">swiftly.</span> <span
                        class="engl">“Everything</span> <span class="engl">okay</span> <span class="engl">here?”</span>
                    <span class="engl">he</span> <span class="engl">snapped.</span> </p>
                <p class="english"> <span class="engl">“Fine.</span> <span class="engl">Welcome</span>
                    <span class="engl">home!”</span> </p>
                <p class="english">
                    <span class="engl">Travis</span> <span class="engl">did</span> <span class="engl">not</span> <span
                        class="engl">relax.</span> <span class="engl">He</span> <span class="engl">seemed</span> <span
                        class="engl">to</span> <span class="engl">be</span> <span class="engl">looking</span>
                    <span class="engl">at</span> <span class="engl">the</span>
                    <span class="engl">very</span> <span class="engl">atoms</span> <span class="engl">of</span> <span
                        class="engl">the</span> <span class="engl">air</span> <span class="engl">itself,</span> <span
                        class="engl">at</span>
                    <span class="engl">the</span> <span class="engl">way</span>
                    <span class="engl">the</span> <span class="engl">sun</span>
                    <span class="engl">poured</span> <span class="engl">through</span> <span class="engl">the</span>
                    <span class="engl">one</span> <span class="engl">high</span>
                    <span class="engl">window.</span> </p>
                <p class="english">
                    <span class="engl">“Okay,</span> <span class="engl">Eckels,</span> <span class="engl">get</span>
                    <span class="engl">out.</span> <span class="engl">Don’t</span> <span class="engl">ever</span>
                    <span class="engl">come</span> <span class="engl">back.”</span> </p>
                <p class="english"> <span class="engl">Eckels</span> <span class="engl">could</span>
                    <span class="engl">not</span> <span class="engl">move.</span>
                </p>
                <p class="english"> <span class="engl">“You</span> <span class="engl">heard</span> <span
                        class="engl">me,”</span>
                    <span class="engl">said</span> <span class="engl">Travis.</span> <span class="engl">“What’re</span>
                    <span class="engl">you</span>
                    <span class="engl">staring</span> <span class="engl">at?”</span> </p>
                <p class="english"> <span class="engl">Eckels</span> <span class="engl">stood</span>
                    <span class="engl">smelling</span> <span class="engl">of</span> <span class="engl">the</span> <span
                        class="engl">air,</span> <span class="engl">and</span> <span class="engl">there</span> <span
                        class="engl">was</span> <span class="engl">a</span> <span class="engl">thing</span> <span
                        class="engl">to</span> <span class="engl">the</span> <span class="engl">air,</span> <span
                        class="engl">a</span> <span class="engl">chemical</span> <span class="engl">taint</span>
                    <span class="engl">so</span> <span class="engl">subtle,</span> <span class="engl">so</span>
                    <span class="engl">slight,</span> <span class="engl">that</span> <span class="engl">only</span>
                    <span class="engl">a</span> <span class="engl">faint</span> <span class="engl">cry</span> <span
                        class="engl">of</span> <span class="engl">his</span> <span class="engl">subliminal</span>
                    <span class="engl">senses</span> <span class="engl">warned</span> <span class="engl">him</span>
                    <span class="engl">it</span> <span class="engl">was</span>
                    <span class="engl">there.</span> <span class="engl">The</span> <span class="engl">colours,</span>
                    <span class="engl">white,</span> <span class="engl">grey,</span> <span class="engl">blue,</span>
                    <span class="engl">orange,</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">wall,</span> <span class="engl">in</span> <span class="engl">the</span> <span
                        class="engl">furniture,</span>
                    <span class="engl">in</span> <span class="engl">the</span>
                    <span class="engl">sky</span> <span class="engl">beyond</span> <span class="engl">the</span>
                    <span class="engl">window,</span> <span class="engl">were…</span> <span class="engl">were…</span>
                </p>
                <p class="english"> <span class="engl">And</span> <span class="engl">there</span> <span
                        class="engl">was</span> <span class="engl">a</span> <span class="engl">feel.</span> <span
                        class="engl">His</span> <span class="engl">flesh</span> <span class="engl">twitched.</span>
                    <span class="engl">His</span>
                    <span class="engl">hands</span> <span class="engl">twitched.</span> <span class="engl">He</span>
                    <span class="engl">stood</span> <span class="engl">drinking</span> <span class="engl">the</span>
                    <span class="engl">oddness</span> <span class="engl">with</span> <span class="engl">the</span> <span
                        class="engl">pores</span> <span class="engl">of</span> <span class="engl">his</span> <span
                        class="engl">body.</span> <span class="engl">Somewhere,</span> <span class="engl">someone</span>
                    <span class="engl">must</span>
                    <span class="engl">have</span> <span class="engl">been</span>
                    <span class="engl">screaming</span> <span class="engl">one</span> <span class="engl">of</span> <span
                        class="engl">those</span> <span class="engl">whistles</span>
                    <span class="engl">that</span> <span class="engl">only</span>
                    <span class="engl">a</span> <span class="engl">dog</span>
                    <span class="engl">can</span> <span class="engl">hear.</span>
                    <span class="engl">His</span> <span class="engl">body</span>
                    <span class="engl">screamed</span> <span class="engl">silence</span> <span class="engl">in</span>
                    <span class="engl">return.</span> <span class="engl">Beyond</span> <span class="engl">this</span>
                    <span class="engl">room,</span> <span class="engl">beyond</span> <span class="engl">this</span>
                    <span class="engl">wall,</span> <span class="engl">beyond</span> <span class="engl">this</span>
                    <span class="engl">man</span> <span class="engl">who</span>
                    <span class="engl">was</span> <span class="engl">not</span>
                    <span class="engl">quite</span> <span class="engl">the</span>
                    <span class="engl">same</span> <span class="engl">man</span>
                    <span class="engl">seated</span> <span class="engl">at</span>
                    <span class="engl">this</span> <span class="engl">desk</span>
                    <span class="engl">that</span> <span class="engl">was</span>
                    <span class="engl">not</span> <span class="engl">quite</span>
                    <span class="engl">the</span> <span class="engl">same</span>
                    <span class="engl">desk…</span> <span class="engl">lay</span>
                    <span class="engl">an</span> <span class="engl">entire</span>
                    <span class="engl">world</span> <span class="engl">of</span>
                    <span class="engl">streets</span> <span class="engl">and</span> <span class="engl">people.</span>
                    <span class="engl">What</span> <span class="engl">sort</span>
                    <span class="engl">of</span> <span class="engl">world</span>
                    <span class="engl">it</span> <span class="engl">was</span>
                    <span class="engl">now,</span> <span class="engl">there</span> <span class="engl">was</span> <span
                        class="engl">no</span> <span class="engl">telling.</span>
                    <span class="engl">He</span> <span class="engl">could</span>
                    <span class="engl">feel</span> <span class="engl">them</span>
                    <span class="engl">moving</span> <span class="engl">there,</span> <span class="engl">beyond</span>
                    <span class="engl">the</span> <span class="engl">walls,</span> <span class="engl">almost,</span>
                    <span class="engl">like</span> <span class="engl">so</span>
                    <span class="engl">many</span> <span class="engl">chess</span> <span class="engl">pieces</span>
                    <span class="engl">blown</span> <span class="engl">in</span>
                    <span class="engl">a</span> <span class="engl">dry</span>
                    <span class="engl">wind…</span> </p>
                <p class="english"> <span class="engl">But</span> <span class="engl">the</span> <span
                        class="engl">immediate</span> <span class="engl">thing</span>
                    <span class="engl">was</span> <span class="engl">the</span>
                    <span class="engl">sign</span> <span class="engl">painted</span> <span class="engl">on</span>
                    <span class="engl">the</span> <span class="engl">office</span> <span class="engl">wall,</span>
                    <span class="engl">the</span> <span class="engl">same</span>
                    <span class="engl">sign</span> <span class="engl">he</span>
                    <span class="engl">had</span> <span class="engl">read</span>
                    <span class="engl">earlier</span> <span class="engl">today</span> <span class="engl">on</span> <span
                        class="engl">first</span> <span class="engl">entering.</span>
                </p>
                <p class="english"> <span class="engl">Somehow,</span>
                    <span class="engl">the</span> <span class="engl">sign</span>
                    <span class="engl">had</span> <span class="engl">changed:</span> </p>
                <p class="english"> <span class="engl">TYME</span> <span class="engl">SEFARI</span>
                    <span class="engl">INC.</span> </p>
                <p class="english"> <span class="engl">SEFARIS</span> <span class="engl">TU</span>
                    <span class="engl">ANY</span> <span class="engl">YEEH</span>
                    <span class="engl">EN</span> <span class="engl">THE</span>
                    <span class="engl">PAST.</span> </p>
                <p class="english"> <span class="engl">YU</span> <span class="engl">NAIM</span> <span
                        class="engl">THE</span> <span class="engl">ANIMALL.</span>
                </p>
                <p class="english"> <span class="engl">WEE</span> <span class="engl">TAEK</span> <span
                        class="engl">YOU</span> <span class="engl">THAIR.</span> </p>
                <p class="english"> <span class="engl">YU</span> <span class="engl">SHOOT</span> <span
                        class="engl">ITT.</span> </p>
                <p class="english"> <span class="engl">Eckels</span> <span class="engl">felt</span>
                    <span class="engl">himself</span> <span class="engl">tall</span> <span class="engl">into</span>
                    <span class="engl">a</span> <span class="engl">chair.</span> <span class="engl">He</span> <span
                        class="engl">fumbled</span>
                    <span class="engl">crazily</span> <span class="engl">at</span> <span class="engl">the</span> <span
                        class="engl">thick</span> <span class="engl">slime</span>
                    <span class="engl">on</span> <span class="engl">his</span>
                    <span class="engl">boots.</span> <span class="engl">He</span>
                    <span class="engl">held</span> <span class="engl">up</span>
                    <span class="engl">a</span> <span class="engl">clod</span>
                    <span class="engl">of</span> <span class="engl">dirt,</span>
                    <span class="engl">trembling.</span> <span class="engl">“No,</span> <span class="engl">it</span>
                    <span class="engl">can’t</span> <span class="engl">be.</span> <span class="engl">Not</span> <span
                        class="engl">a</span> <span class="engl">little</span> <span class="engl">thing</span>
                    <span class="engl">like</span> <span class="engl">that.</span> <span class="engl">No!”</span> </p>
                <p class="english"> <span class="engl">Embedded</span> <span class="engl">in</span> <span
                        class="engl">the</span> <span class="engl">mud,</span> <span class="engl">glistening</span>
                    <span class="engl">green</span> <span class="engl">and</span>
                    <span class="engl">gold</span> <span class="engl">and</span>
                    <span class="engl">black,</span> <span class="engl">was</span> <span class="engl">a</span> <span
                        class="engl">butterfly,</span> <span class="engl">very</span>
                    <span class="engl">beautiful,</span> <span class="engl">and</span> <span class="engl">very</span>
                    <span class="engl">dead.</span> </p>
                <p class="english"> <span class="engl">“Not</span> <span class="engl">a</span> <span
                        class="engl">little</span> <span class="engl">thing</span>
                    <span class="engl">like</span> <span class="engl">that!</span> <span class="engl">Not</span> <span
                        class="engl">a</span> <span class="engl">butterfly!”</span>
                    <span class="engl">cried</span> <span class="engl">Eckels.</span> </p>
                <p class="english"> <span class="engl">It</span> <span class="engl">fell</span> <span
                        class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">floor,</span> <span class="engl">an</span> <span
                        class="engl">exquisite</span> <span class="engl">thing,</span> <span class="engl">a</span> <span
                        class="engl">small</span> <span class="engl">thing</span>
                    <span class="engl">that</span> <span class="engl">could</span> <span class="engl">upset</span>
                    <span class="engl">balances</span> <span class="engl">and</span> <span class="engl">knock</span>
                    <span class="engl">down</span> <span class="engl">a</span> <span class="engl">line</span> <span
                        class="engl">of</span> <span class="engl">small</span> <span class="engl">dominoes</span>
                    <span class="engl">and</span> <span class="engl">then</span>
                    <span class="engl">big</span> <span class="engl">dominoes</span> <span class="engl">and</span>
                    <span class="engl">then</span> <span class="engl">gigantic</span> <span
                        class="engl">dominoes,</span>
                    <span class="engl">all</span>
                    <span class="engl">down</span> <span class="engl">the</span>
                    <span class="engl">years</span> <span class="engl">across</span> <span class="engl">Time.</span>
                    <span class="engl">Eckels’</span> <span class="engl">mind</span> <span class="engl">whirled.</span>
                    <span class="engl">It</span> <span class="engl">couldn’t</span> <span class="engl">change</span>
                    <span class="engl">things.</span> <span class="engl">Killing</span> <span class="engl">one</span>
                    <span class="engl">butterfly</span> <span class="engl">couldn’t</span> <span class="engl">be</span>
                    <span class="engl">that</span> <span class="engl">important!</span> <span class="engl">Could</span>
                    <span class="engl">it?</span> </p>
                <p class="english"> <span class="engl">His</span> <span class="engl">face</span> <span
                        class="engl">was</span> <span class="engl">cold.</span> <span class="engl">His</span> <span
                        class="engl">mouth</span> <span class="engl">trembled,</span>
                    <span class="engl">asking:</span> <span class="engl">“Who</span> <span class="engl">won</span> <span
                        class="engl">the</span> <span class="engl">presidential</span> <span
                        class="engl">election</span>
                    <span class="engl">yesterday?”</span> </p>
                <p class="english"> <span class="engl">The</span> <span class="engl">man</span> <span
                        class="engl">behind</span> <span class="engl">the</span>
                    <span class="engl">desk</span> <span class="engl">laughed.</span> <span class="engl">“You</span>
                    <span class="engl">joking?</span> <span class="engl">You</span> <span class="engl">know</span> <span
                        class="engl">damn</span> <span class="engl">well.</span>
                    <span class="engl">Deutscher,</span> <span class="engl">of</span> <span class="engl">course!</span>
                    <span class="engl">Who</span> <span class="engl">else?</span>
                    <span class="engl">Not</span> <span class="engl">that</span>
                    <span class="engl">damn</span> <span class="engl">weakling</span> <span class="engl">Keith.</span>
                    <span class="engl">We</span> <span class="engl">got</span>
                    <span class="engl">an</span> <span class="engl">iron</span>
                    <span class="engl">man</span> <span class="engl">now,</span>
                    <span class="engl">a</span> <span class="engl">man</span>
                    <span class="engl">with</span> <span class="engl">guts,</span> <span class="engl">by</span> <span
                        class="engl">God!”</span> <span class="engl">The</span> <span class="engl">official</span> <span
                        class="engl">stopped.</span> <span class="engl">“What’s</span> <span class="engl">wrong?”</span>
                </p>
                <p class="english"> <span class="engl">Eckels</span>
                    <span class="engl">moaned.</span> <span class="engl">He</span> <span class="engl">dropped</span>
                    <span class="engl">to</span> <span class="engl">his</span>
                    <span class="engl">knees.</span> <span class="engl">He</span>
                    <span class="engl">scrabbled</span> <span class="engl">at</span> <span class="engl">the</span> <span
                        class="engl">golden</span> <span class="engl">butterfly</span> <span class="engl">with</span>
                    <span class="engl">shaking</span> <span class="engl">fingers.</span> <span
                        class="engl">“Can’t</span>
                    <span class="engl">we,”</span> <span class="engl">he</span>
                    <span class="engl">pleaded</span> <span class="engl">to</span> <span class="engl">the</span> <span
                        class="engl">world,</span> <span class="engl">to</span> <span class="engl">himself,</span> <span
                        class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">officials,</span> <span class="engl">to</span>
                    <span class="engl">the</span> <span class="engl">Machine,</span> <span class="engl">“can’t</span>
                    <span class="engl">we</span> <span class="engl">take</span>
                    <span class="engl">it</span> <span class="engl">back,</span>
                    <span class="engl">can’t</span> <span class="engl">we</span>
                    <span class="engl">make</span> <span class="engl">it</span>
                    <span class="engl">alive</span> <span class="engl">again?</span> <span class="engl">Can’t</span>
                    <span class="engl">we</span> <span class="engl">start</span>
                    <span class="engl">over?</span> <span class="engl">Can’t</span> <span class="engl">we”</span> </p>
                <p class="english"> <span class="engl">He</span> <span class="engl">did</span> <span
                        class="engl">not</span>
                    <span class="engl">move.</span> <span class="engl">Eyes</span>
                    <span class="engl">shut,</span> <span class="engl">he</span>
                    <span class="engl">waited,</span> <span class="engl">shivering.</span> <span class="engl">He</span>
                    <span class="engl">heard</span> <span class="engl">Travis</span> <span class="engl">breathe</span>
                    <span class="engl">loud</span> <span class="engl">in</span>
                    <span class="engl">the</span> <span class="engl">room;</span>
                    <span class="engl">he</span> <span class="engl">heard</span>
                    <span class="engl">Travis</span> <span class="engl">shift</span> <span class="engl">his</span> <span
                        class="engl">rifle,</span> <span class="engl">click</span>
                    <span class="engl">the</span> <span class="engl">safety</span> <span class="engl">catch,</span>
                    <span class="engl">and</span> <span class="engl">raise</span>
                    <span class="engl">the</span> <span class="engl">weapon.</span> </p>
                <p class="english"> <span class="engl">There</span> <span class="engl">was</span> <span
                        class="engl">a</span> <span class="engl">sound</span> <span class="engl">of</span> <span
                        class="engl">thunder.</span> </p>



                <p class="ukrainian"><span class="ukr">Вивіска</span> <span class="ukr">на</span> <span
                        class="ukr">стіні,</span> <span class="ukr">здавалося,</span> <span class="ukr">тремтіла</span>
                    <span class="ukr">ніби</span>
                    <span class="ukr">під</span> <span class="ukr">плівкою</span>
                    <span class="ukr">проточної</span> <span class="ukr">теплої</span> <span class="ukr">води.</span>
                    <span class="ukr">Екельс</span> <span class="ukr">кліпнув</span> <span class="ukr">очима,</span>
                    <span class="ukr">і</span> <span class="ukr">в</span> <span class="ukr">цій</span> <span
                        class="ukr">миттєвій</span>
                    <span class="ukr">темноті,</span> <span class="ukr">після</span> <span class="ukr">пильного</span>
                    <span class="ukr">погляду,</span> <span class="ukr">вивіска</span> <span class="ukr">неначе</span>
                    <span class="ukr">спалахнула:</span> </p>
                <p class="ukrainian"> <span class="ukr">ЗАО</span> <span class="ukr">"САФАРІ</span> <span
                        class="ukr">В</span> <span class="ukr">ЧАСІ".</span> </p>
                <p class="ukrainian"> <span class="ukr">САФАРІ</span> <span class="ukr">У</span> <span
                        class="ukr">БУДЬ-ЯКИЙ</span>
                    <span class="ukr">РІК</span>
                    <span class="ukr">В</span> <span class="ukr">МИНУЛОМУ.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">ВИ</span> <span class="ukr">НАЗИВАЄТЕ</span> <span
                        class="ukr">ТВАРИНУ.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">МИ</span> <span class="ukr">ДОПРАВЛЯЄМО</span>
                    <span class="ukr">ВАС</span> <span class="ukr">ТУДИ.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">ВИ</span> <span class="ukr">СТРІЛЯЄТЕ.</span> </p>
                <p class="ukrainian"> <span class="ukr">Тепле</span> <span class="ukr">мокротиння</span>
                    <span class="ukr">скупчилося</span> <span class="ukr">в</span> <span class="ukr">горлі</span> <span
                        class="ukr">Екельса,</span> <span class="ukr">він</span>
                    <span class="ukr">проковтнув</span> <span class="ukr">і</span> <span class="ukr">з</span> <span
                        class="ukr">зусиллям</span> <span class="ukr">проштовхнув</span> <span class="ukr">його</span>
                    <span class="ukr">донизу.</span> <span class="ukr">М'язи</span> <span class="ukr">навколо</span>
                    <span class="ukr">губ</span> <span class="ukr">розтяглися</span> <span class="ukr">в</span>
                    <span class="ukr">посмішку,</span> <span class="ukr">коли</span> <span class="ukr">він</span> <span
                        class="ukr">простягнув</span> <span class="ukr">руку</span>
                    <span class="ukr">з</span> <span class="ukr">чеком</span>
                    <span class="ukr">на</span> <span class="ukr">десять</span>
                    <span class="ukr">тисяч</span> <span class="ukr">доларів</span> <span class="ukr">і</span> <span
                        class="ukr">махнув</span> <span class="ukr">ним</span> <span class="ukr">перед</span> <span
                        class="ukr">чоловіком,</span>
                    <span class="ukr">який</span> <span class="ukr">сидів</span>
                    <span class="ukr">за</span> <span class="ukr">письмовим</span> <span class="ukr">столиком.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Чи</span> <span
                        class="ukr">ваше</span>
                    <span class="ukr">Сафарі</span> <span class="ukr">гарантує,</span> <span class="ukr">що</span>
                    <span class="ukr">я</span> <span class="ukr">повернуся</span>
                    <span class="ukr">живим?</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Ми</span> <span class="ukr">нічого</span> <span
                        class="ukr">не</span>
                    <span class="ukr">гарантуємо,</span> <span class="ukr">—</span>
                    <span class="ukr">відповів</span> <span class="ukr">представник,</span> <span class="ukr">—</span>
                    <span class="ukr">окрім</span> <span class="ukr">динозаврів.</span> <span class="ukr">Він</span>
                    <span class="ukr">обернувся.</span> <span class="ukr">—</span> <span class="ukr">Ось</span> <span
                        class="ukr">пан</span> <span class="ukr">Тревіс.</span> <span class="ukr">Ваш</span> <span
                        class="ukr">Провідник</span>
                    <span class="ukr">по</span> <span class="ukr">Сафарі</span>
                    <span class="ukr">в</span> <span class="ukr">Минулому.</span>
                    <span class="ukr">Він</span> <span class="ukr">розповість</span> <span class="ukr">у</span>
                    <span class="ukr">що</span> <span class="ukr">й</span> <span class="ukr">де</span> <span
                        class="ukr">стріляти.</span>
                    <span class="ukr">Якщо</span> <span class="ukr">він</span>
                    <span class="ukr">скаже</span> <span class="ukr">не</span>
                    <span class="ukr">стріляти,</span> <span class="ukr">значить</span> <span class="ukr">не</span>
                    <span class="ukr">стріляти.</span> <span class="ukr">Порушення</span> <span
                        class="ukr">правил</span>
                    <span class="ukr">тягне</span> <span class="ukr">за</span>
                    <span class="ukr">собою</span> <span class="ukr">суворе</span> <span class="ukr">покарання</span>
                    <span class="ukr">у</span> <span class="ukr">вигляді</span>
                    <span class="ukr">штрафу</span> <span class="ukr">на</span>
                    <span class="ukr">десять</span> <span class="ukr">тисяч</span> <span class="ukr">доларів,</span>
                    <span class="ukr">а</span> <span class="ukr">також</span>
                    <span class="ukr">можливий</span> <span class="ukr">позов</span> <span class="ukr">збоку</span>
                    <span class="ukr">Уряду</span> <span class="ukr">після</span> <span class="ukr">вашого</span> <span
                        class="ukr">повернення.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Екельс</span> <span class="ukr">кинув</span> <span class="ukr">погляд</span>
                    <span class="ukr">на</span> <span class="ukr">величезне</span> <span class="ukr">приміщення,</span>
                    <span class="ukr">на</span>
                    <span class="ukr">скупчення</span> <span class="ukr">і</span>
                    <span class="ukr">плутанину</span> <span class="ukr">дротів</span> <span class="ukr">та</span> <span
                        class="ukr">сталевих</span> <span class="ukr">корпусів,</span> <span class="ukr">на</span>
                    <span class="ukr">сяйво,</span> <span class="ukr">що</span>
                    <span class="ukr">мерехтіло</span> <span class="ukr">то</span> <span
                        class="ukr">помаранчевим,</span>
                    <span class="ukr">то</span> <span class="ukr">серебристим,</span> <span class="ukr">то</span>
                    <span class="ukr">блакитним.</span> <span class="ukr">Чутно</span> <span class="ukr">було</span>
                    <span class="ukr">звук</span> <span class="ukr">наче</span> <span class="ukr">від</span> <span
                        class="ukr">велетенського</span>
                    <span class="ukr">вогнища,</span> <span class="ukr">в</span>
                    <span class="ukr">якому</span> <span class="ukr">палав</span>
                    <span class="ukr">увесь</span> <span class="ukr">Час,</span>
                    <span class="ukr">всі</span> <span class="ukr">роки,</span>
                    <span class="ukr">пергаменти</span> <span class="ukr">з</span> <span
                        class="ukr">літочисленнями,</span>
                    <span class="ukr">години,</span> <span class="ukr">навалені</span> <span class="ukr">купою</span>
                    <span class="ukr">та</span> <span class="ukr">охоплені</span>
                    <span class="ukr">полум'ям.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Один</span> <span class="ukr">дотик</span>
                    <span class="ukr">руки,</span> <span class="ukr">і</span>
                    <span class="ukr">це</span> <span class="ukr">прекрасне</span> <span
                        class="ukr">палахкотіння,</span>
                    <span class="ukr">в</span>
                    <span class="ukr">одну</span> <span class="ukr">мить,</span>
                    <span class="ukr">розвернеться</span> <span class="ukr">в</span> <span class="ukr">зворотний</span>
                    <span class="ukr">бік.</span> <span class="ukr">Екельс</span> <span class="ukr">пригадав</span>
                    <span class="ukr">слова</span>
                    <span class="ukr">з</span> <span class="ukr">рекламної</span>
                    <span class="ukr">листівки:</span> <span class="ukr">"З</span> <span class="ukr">головешок</span>
                    <span class="ukr">та</span> <span class="ukr">попелу,</span>
                    <span class="ukr">з</span> <span class="ukr">пороху</span>
                    <span class="ukr">та</span> <span class="ukr">вугілля,</span>
                    <span class="ukr">ніби</span> <span class="ukr">золоті</span>
                    <span class="ukr">саламандри,</span> <span class="ukr">роки</span> <span class="ukr">минулі,</span>
                    <span class="ukr">роки</span> <span class="ukr">незрілі</span> <span class="ukr">вмить</span>
                    <span class="ukr">постануть;</span> <span class="ukr">троянд</span> <span
                        class="ukr">солодких</span>
                    <span class="ukr">духом</span> <span class="ukr">сповниться</span> <span class="ukr">повітря,</span>
                    <span class="ukr">сіде</span>
                    <span class="ukr">волосся</span> <span class="ukr">стане</span> <span
                        class="ukr">смолянисто-чорним,</span> <span class="ukr">зморшки</span> <span
                        class="ukr">згладяться;</span> <span class="ukr">усі</span>
                    <span class="ukr">і</span> <span class="ukr">все</span> <span class="ukr">майне</span> <span
                        class="ukr">назад,</span>
                    <span class="ukr">щоб</span> <span class="ukr">сіяти</span>
                    <span class="ukr">життя,</span> <span class="ukr">втекти</span> <span class="ukr">від</span> <span
                        class="ukr">смерті,</span> <span class="ukr">полинути</span>
                    <span class="ukr">до</span> <span class="ukr">самих</span>
                    <span class="ukr">витоків,</span> <span class="ukr">до</span>
                    <span class="ukr">сходу</span> <span class="ukr">сонця</span>
                    <span class="ukr">на</span> <span class="ukr">західному</span> <span class="ukr">небі</span>
                    <span class="ukr">—</span> <span class="ukr">і</span> <span class="ukr">заходу</span> <span
                        class="ukr">на</span>
                    <span class="ukr">сході</span> <span class="ukr">славному,</span>
                    <span class="ukr">Місяць</span> <span class="ukr">спадатиме</span> <span class="ukr">проти</span>
                    <span class="ukr">звичаю;</span> <span class="ukr">усі</span>
                    <span class="ukr">і</span> <span class="ukr">все</span> <span class="ukr">сховається</span> <span
                        class="ukr">одне</span>
                    <span class="ukr">в</span> <span class="ukr">одне</span>
                    <span class="ukr">як</span> <span class="ukr">у</span> <span class="ukr">Китайському</span> <span
                        class="ukr">пуделку,</span> <span class="ukr">—</span> <span class="ukr">у</span> <span
                        class="ukr">капелюхи</span> <span class="ukr">кролики;</span> <span class="ukr">усі</span>
                    <span class="ukr">і</span> <span class="ukr">все</span> <span class="ukr">поверне</span> <span
                        class="ukr">до</span>
                    <span class="ukr">смерті</span> <span class="ukr">молодої,</span>
                    <span class="ukr">смерті</span> <span class="ukr">роду,</span> <span class="ukr">смерті</span>
                    <span class="ukr">незрілої,</span> <span class="ukr">до</span> <span class="ukr">часу</span> <span
                        class="ukr">за</span> <span class="ukr">початком.</span>
                    <span class="ukr">Одним</span> <span class="ukr">лиш</span>
                    <span class="ukr">дотиком</span> <span class="ukr">руки,</span> <span class="ukr">найлегшим</span>
                    <span class="ukr">дотиком</span> <span class="ukr">руки."</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Дідько</span> <span
                        class="ukr">клятий,</span> <span class="ukr">—</span> <span class="ukr">прошепотів</span> <span
                        class="ukr">собі</span>
                    <span class="ukr">Екельс.</span> <span class="ukr">На</span>
                    <span class="ukr">його</span> <span class="ukr">обличчі</span> <span class="ukr">відбивалося</span>
                    <span class="ukr">світло</span> <span class="ukr">від</span> <span class="ukr">Машини.</span> <span
                        class="ukr">—</span> <span class="ukr">Це</span> <span class="ukr">ж</span> <span
                        class="ukr">справжня</span>
                    <span class="ukr">Машина</span>
                    <span class="ukr">Часу.</span> <span class="ukr">Він</span>
                    <span class="ukr">похитав</span> <span class="ukr">головою.</span> <span class="ukr">—</span> <span
                        class="ukr">Це</span> <span class="ukr">змушує</span> <span class="ukr">замислитися.</span>
                    <span class="ukr">Якби</span>
                    <span class="ukr">вчорашні</span> <span class="ukr">вибори</span> <span class="ukr">пішли</span>
                    <span class="ukr">не</span> <span class="ukr">так,</span>
                    <span class="ukr">то</span> <span class="ukr">я</span> <span class="ukr">б</span> <span
                        class="ukr">тут</span> <span class="ukr">зараз</span> <span class="ukr">тікав</span> <span
                        class="ukr">від</span> <span class="ukr">їхніх</span> <span class="ukr">результатів.</span>
                    <span class="ukr">Дякувати</span> <span class="ukr">Богу</span>
                    <span class="ukr">—</span> <span class="ukr">Кейт</span>
                    <span class="ukr">виграв.</span> <span class="ukr">З</span>
                    <span class="ukr">нього</span> <span class="ukr">вийде</span>
                    <span class="ukr">добрий</span> <span class="ukr">Президент</span> <span
                        class="ukr">Сполучених</span>
                    <span class="ukr">Штатів.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Так,</span> <span
                        class="ukr">—</span>
                    <span class="ukr">погодився</span> <span class="ukr">чоловік</span> <span class="ukr">за</span>
                    <span class="ukr">письмовим</span> <span class="ukr">столиком.</span> <span class="ukr">—</span>
                    <span class="ukr">Нам</span> <span class="ukr">пощастило.</span>
                    <span class="ukr">Якби</span> <span class="ukr">пройшов</span> <span class="ukr">Дойчер,</span>
                    <span class="ukr">то</span> <span class="ukr">ми</span> <span class="ukr">б</span> <span
                        class="ukr">мали</span>
                    <span class="ukr">найгіршу</span> <span class="ukr">з</span> <span class="ukr">диктатур.</span>
                    <span class="ukr">Завжди</span>
                    <span class="ukr">існує</span> <span class="ukr">хтось,</span> <span class="ukr">хто</span> <span
                        class="ukr">проти</span> <span class="ukr">всього</span>
                    <span class="ukr">—</span> <span class="ukr">войовничий</span> <span class="ukr">антихрист,</span>
                    <span class="ukr">анти-гуманний</span> <span class="ukr">та</span>
                    <span class="ukr">анти-інтелектуальний.</span> <span class="ukr">До</span> <span
                        class="ukr">нас</span>
                    <span class="ukr">дзвонили,</span> <span class="ukr">ну</span>
                    <span class="ukr">знаєте,</span> <span class="ukr">перепитувати</span> <span
                        class="ukr">жартома</span>
                    <span class="ukr">але</span> <span class="ukr">не</span> <span class="ukr">жартували.</span>
                    <span class="ukr">Питали</span> <span class="ukr">якщо</span>
                    <span class="ukr">Дойчер</span> <span class="ukr">стане</span> <span class="ukr">Президентом,</span>
                    <span class="ukr">то</span>
                    <span class="ukr">вони</span> <span class="ukr">б</span>
                    <span class="ukr">воліли</span> <span class="ukr">переміститися</span> <span class="ukr">жити</span>
                    <span class="ukr">у</span> <span class="ukr">1492.</span> <span class="ukr">Звісно,</span>
                    <span class="ukr">ми</span> <span class="ukr">не</span> <span class="ukr">займаємося</span> <span
                        class="ukr">такою</span>
                    <span class="ukr">справою</span> <span class="ukr">як</span>
                    <span class="ukr">супровід</span> <span class="ukr">Втікачістів.</span> <span
                        class="ukr">Наша</span>
                    <span class="ukr">справа</span> <span class="ukr">—</span>
                    <span class="ukr">Сафарі.</span> <span class="ukr">Хай</span>
                    <span class="ukr">там</span> <span class="ukr">як,</span>
                    <span class="ukr">а</span> <span class="ukr">Кейт</span>
                    <span class="ukr">тепер</span> <span class="ukr">Президент.</span> <span class="ukr">І</span>
                    <span class="ukr">наразі</span> <span class="ukr">всі</span>
                    <span class="ukr">ваші</span> <span class="ukr">клопоти</span> <span class="ukr">—</span> <span
                        class="ukr">це...</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Вполювати</span> <span
                        class="ukr">свого</span> <span class="ukr">динозавра,</span>
                    <span class="ukr">—</span> <span class="ukr">закінчив</span>
                    <span class="ukr">Екельс</span> <span class="ukr">замість</span> <span class="ukr">чоловіка.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Тиранозавр</span> <span
                        class="ukr">Рекс,</span>
                    <span class="ukr">Громоящір</span> <span class="ukr">—</span>
                    <span class="ukr">найбридкіше</span> <span class="ukr">створіння</span> <span class="ukr">в</span>
                    <span class="ukr">історії.</span> <span class="ukr">Підпишіть</span> <span class="ukr">ось</span>
                    <span class="ukr">цю</span> <span class="ukr">відмову.</span>
                    <span class="ukr">Коли</span> <span class="ukr">з</span>
                    <span class="ukr">вами</span> <span class="ukr">щось</span>
                    <span class="ukr">станеться,</span> <span class="ukr">ми</span> <span class="ukr">не</span> <span
                        class="ukr">нестимемо</span> <span class="ukr">за</span>
                    <span class="ukr">вас</span> <span class="ukr">відповідальності.</span> <span class="ukr">Ті</span>
                    <span class="ukr">динозаври</span>
                    <span class="ukr">—</span> <span class="ukr">голодні.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Екельс</span>
                    <span class="ukr">спалахнув.</span> <span class="ukr">—</span> <span class="ukr">Намагаєтеся</span>
                    <span class="ukr">мене</span> <span class="ukr">залякати!</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Щиро</span> <span
                        class="ukr">кажучи,</span> <span class="ukr">так.</span>
                    <span class="ukr">Ми</span> <span class="ukr">не</span> <span class="ukr">хочемо,</span> <span
                        class="ukr">аби</span> <span class="ukr">туди</span> <span class="ukr">потрапляли</span>
                    <span class="ukr">такі,</span> <span class="ukr">хто</span>
                    <span class="ukr">впадає</span> <span class="ukr">в</span>
                    <span class="ukr">паніку</span> <span class="ukr">з</span>
                    <span class="ukr">першим</span> <span class="ukr">же</span>
                    <span class="ukr">пострілом.</span> <span class="ukr">Минулого</span> <span class="ukr">року</span>
                    <span class="ukr">загинули</span> <span class="ukr">шестеро</span> <span
                        class="ukr">Провідників</span>
                    <span class="ukr">Сафарі</span> <span class="ukr">та</span> <span class="ukr">більше</span> <span
                        class="ukr">десятка</span>
                    <span class="ukr">мисливців.</span> <span class="ukr">Наша</span> <span class="ukr">робота</span>
                    <span class="ukr">полягає</span> <span class="ukr">в</span> <span class="ukr">забезпеченні</span>
                    <span class="ukr">якнайсильнішого</span> <span class="ukr">збудження,</span> <span
                        class="ukr">якого</span>
                    <span class="ukr">завжди</span> <span class="ukr">прагне</span> <span class="ukr">справжній</span>
                    <span class="ukr">мисливець.</span> <span class="ukr">Мандрівка</span> <span class="ukr">на</span>
                    <span class="ukr">шістдесят</span> <span class="ukr">мільйонів</span> <span class="ukr">років</span>
                    <span class="ukr">у</span> <span class="ukr">минуле,</span>
                    <span class="ukr">щоб</span> <span class="ukr">ви</span>
                    <span class="ukr">поклали</span> <span class="ukr">собі</span> <span class="ukr">до</span> <span
                        class="ukr">торбинки</span> <span class="ukr">таку</span>
                    <span class="ukr">чортячу</span> <span class="ukr">гру</span>
                    <span class="ukr">усіх</span> <span class="ukr">Часів.</span>
                    <span class="ukr">Ваш</span> <span class="ukr">чек</span>
                    <span class="ukr">досі</span> <span class="ukr">тут.</span>
                    <span class="ukr">Порвіть</span> <span class="ukr">його.</span> </p>
                <p class="ukrainian"> <span class="ukr">Пан</span> <span class="ukr">Екельс</span> <span
                        class="ukr">довгий</span> <span class="ukr">час</span> <span class="ukr">дивився</span> <span
                        class="ukr">на</span> <span class="ukr">чек.</span> <span class="ukr">Пальці</span> <span
                        class="ukr">тремтіли.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Хай</span> <span
                        class="ukr">щастить,</span> <span class="ukr">—</span> <span class="ukr">обізвався</span> <span
                        class="ukr">чоловік</span>
                    <span class="ukr">з-за</span> <span class="ukr">письмового</span> <span class="ukr">столику.</span>
                    <span class="ukr">—</span> <span class="ukr">Пане</span> <span class="ukr">Тревіс,</span>
                    <span class="ukr">він</span> <span class="ukr">весь</span>
                    <span class="ukr">ваш.</span> </p>
                <p class="ukrainian"> <span class="ukr">Взявши</span> <span class="ukr">зброю,</span>
                    <span class="ukr">вони</span> <span class="ukr">попрямували</span> <span class="ukr">через</span>
                    <span class="ukr">залу</span> <span class="ukr">до</span>
                    <span class="ukr">Машини,</span> <span class="ukr">до</span>
                    <span class="ukr">серебристого</span> <span class="ukr">металу</span> <span class="ukr">та</span>
                    <span class="ukr">ревучого</span> <span class="ukr">світла.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Спершу</span>
                    <span class="ukr">день,</span> <span class="ukr">потім</span>
                    <span class="ukr">ніч,</span> <span class="ukr">потім</span>
                    <span class="ukr">день,</span> <span class="ukr">потім</span>
                    <span class="ukr">ніч,</span> <span class="ukr">потім</span>
                    <span class="ukr">день-ніч-день-ніч-день.</span> <span class="ukr">Тиждень,</span> <span
                        class="ukr">місяць,</span>
                    <span class="ukr">рік,</span> <span class="ukr">десятиріччя.</span> <span class="ukr">Н.Е.</span>
                    <span class="ukr">2055.</span> <span class="ukr">Н.Е.</span>
                    <span class="ukr">2019.</span> <span class="ukr">1999!</span>
                    <span class="ukr">1957!</span> <span class="ukr"></span> </p>
                <p class="ukrainian"> <span class="ukr">Нічого!</span> <span class="ukr">Машина</span> <span
                        class="ukr">—</span> <span class="ukr">ревіла.</span> </p>
                <p class="ukrainian"> <span class="ukr">Люди</span> <span class="ukr">одягли</span> <span
                        class="ukr">кисневі</span>
                    <span class="ukr">шоломи</span>
                    <span class="ukr">і</span> <span class="ukr">перевірили</span> <span class="ukr">внутрішній</span>
                    <span class="ukr">зв'язок.</span> </p>
                <p class="ukrainian"> <span class="ukr">Екельса</span> <span class="ukr">похитувало</span> <span
                        class="ukr">в</span>
                    <span class="ukr">м'якому</span> <span class="ukr">сидінні,</span> <span class="ukr">обличчя</span>
                    <span class="ukr">його</span> <span class="ukr">зблідло,</span> <span class="ukr">щелепи</span>
                    <span class="ukr">звело.</span> <span class="ukr">Руки</span>
                    <span class="ukr">дрижали.</span> <span class="ukr">Він</span> <span class="ukr">подивився</span>
                    <span class="ukr">на</span> <span class="ukr">них</span>
                    <span class="ukr">—</span> <span class="ukr">вони</span>
                    <span class="ukr">міцно</span> <span class="ukr">стискали</span> <span class="ukr">його</span>
                    <span class="ukr">нову</span> <span class="ukr">гвинтівку.</span> <span class="ukr">В</span>
                    <span class="ukr">Машині</span> <span class="ukr">були</span>
                    <span class="ukr">ще</span> <span class="ukr">четверо</span>
                    <span class="ukr">чоловіків.</span> <span class="ukr">Провідник</span> <span
                        class="ukr">Сафарі</span>
                    <span class="ukr">Тревіс,</span> <span class="ukr">його</span> <span class="ukr">помічник</span>
                    <span class="ukr">Лесперанс,</span> <span class="ukr">і</span> <span class="ukr">ще</span> <span
                        class="ukr">двоє</span> <span class="ukr">мисливців</span>
                    <span class="ukr">Біллінгз</span> <span class="ukr">і</span>
                    <span class="ukr">Крамер.</span> <span class="ukr">Вони</span> <span class="ukr">сиділи,</span>
                    <span class="ukr">дивлячись</span> <span class="ukr">одне</span> <span class="ukr">на</span> <span
                        class="ukr">одного,</span> <span class="ukr">а</span> <span class="ukr">навколо</span> <span
                        class="ukr">них</span> <span class="ukr">палахкотіли</span> <span class="ukr">роки.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Хіба</span> <span
                        class="ukr">цією</span>
                    <span class="ukr">зброєю</span> <span class="ukr">можна</span>
                    <span class="ukr">звалити</span> <span class="ukr">динозавра?</span> <span class="ukr">—</span>
                    <span class="ukr">Почув</span> <span class="ukr">свої</span>
                    <span class="ukr">слова</span> <span class="ukr">Екельс.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Якщо</span> <span
                        class="ukr">правильно</span> <span class="ukr">вцілити,</span> <span class="ukr">—</span> <span
                        class="ukr">відповів</span> <span class="ukr">Тревіс</span>
                    <span class="ukr">через</span> <span class="ukr">шоломне</span> <span class="ukr">радіо.</span>
                    <span class="ukr">—</span> <span class="ukr">Деякі</span>
                    <span class="ukr">динозаври</span> <span class="ukr">мають</span> <span class="ukr">по</span> <span
                        class="ukr">два</span> <span class="ukr">мозки</span> <span class="ukr">—</span> <span
                        class="ukr">один</span>
                    <span class="ukr">в</span> <span class="ukr">голові,</span> <span class="ukr">а</span> <span
                        class="ukr">інший</span> <span class="ukr">далеко</span> <span class="ukr">внизу</span>
                    <span class="ukr">у</span> <span class="ukr">спинному</span>
                    <span class="ukr">стовбурі.</span> <span class="ukr">Від</span> <span class="ukr">таких</span> <span
                        class="ukr">ми</span> <span class="ukr">тримаємося</span>
                    <span class="ukr">подалі.</span> <span class="ukr">Вони</span> <span class="ukr">—</span> <span
                        class="ukr">занадто</span> <span class="ukr">непевна</span>
                    <span class="ukr">удача.</span> <span class="ukr">Першими</span> <span class="ukr">двома</span>
                    <span class="ukr">пострілами</span> <span class="ukr">бийте</span> <span class="ukr">в</span> <span
                        class="ukr">очі</span> <span class="ukr">якщо</span> <span class="ukr">зможете,</span> <span
                        class="ukr">засліпіть</span> <span class="ukr">їх,</span>
                    <span class="ukr">а</span> <span class="ukr">тоді</span>
                    <span class="ukr">вже</span> <span class="ukr">цільте</span>
                    <span class="ukr">в</span> <span class="ukr">мозок.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Машина</span>
                    <span class="ukr">вила.</span> <span class="ukr">Час</span>
                    <span class="ukr">біг</span> <span class="ukr">назад</span>
                    <span class="ukr">суцільною</span> <span class="ukr">плівкою.</span> <span class="ukr"></span> </p>
                <p class="ukrainian"> <span class="ukr">Сонця</span> <span class="ukr">втікали,</span> <span
                        class="ukr">слідом</span>
                    <span class="ukr">за</span> <span class="ukr">ними</span>
                    <span class="ukr">втікали</span> <span class="ukr">десять</span> <span class="ukr">мільйонів</span>
                    <span class="ukr">Місяців.</span> <span class="ukr">—</span>
                    <span class="ukr">Господи</span> <span class="ukr">багословенний,</span> <span class="ukr">—</span>
                    <span class="ukr">озвався</span> <span class="ukr">Екельс.</span> <span class="ukr">—</span> <span
                        class="ukr">Та</span> <span class="ukr">будь-який</span>
                    <span class="ukr">мисливець,</span> <span class="ukr">що</span> <span class="ukr">будь-коли</span>
                    <span class="ukr">жив,</span> <span class="ukr">нам</span>
                    <span class="ukr">би</span> <span class="ukr">сьогодні</span>
                    <span class="ukr">позаздрив.</span> <span class="ukr">У</span> <span class="ukr">порівнянні</span>
                    <span class="ukr">з</span> <span class="ukr">цим</span> <span class="ukr">—</span> <span
                        class="ukr">Африка</span>
                    <span class="ukr">здається</span> <span class="ukr">Ілінойсом.</span> </p>
                <p class="ukrainian"> <span class="ukr">Машина</span> <span class="ukr">уповільнювалася;</span> <span
                        class="ukr">вищання</span> <span class="ukr">перейшло</span>
                    <span class="ukr">в</span> <span class="ukr">муркотіння.</span> <span class="ukr">Зупинка.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Сонце</span> <span class="ukr">завмерло</span>
                    <span class="ukr">посеред</span> <span class="ukr">неба.</span> </p>
                <p class="ukrainian"> <span class="ukr">Туман,</span> <span class="ukr">що</span> <span
                        class="ukr">оповивав</span>
                    <span class="ukr">Машину</span>
                    <span class="ukr">розвіявся,</span> <span class="ukr">і</span> <span class="ukr">ось</span> <span
                        class="ukr">—</span> <span class="ukr">вони</span> <span class="ukr">в</span> <span
                        class="ukr">далекому</span>
                    <span class="ukr">минулому,</span> <span class="ukr">у</span> <span class="ukr">дійсно</span> <span
                        class="ukr">дуже</span> <span class="ukr">далекому;</span> <span class="ukr">троє</span>
                    <span class="ukr">мисливців</span> <span class="ukr">та</span> <span class="ukr">двоє</span> <span
                        class="ukr">Провідників</span> <span class="ukr">Сафарі,</span> <span class="ukr">а</span> <span
                        class="ukr">на</span> <span class="ukr">колінах</span> <span class="ukr">кожного</span> <span
                        class="ukr">—</span> <span class="ukr">гвинтівка</span> <span class="ukr">з</span> <span
                        class="ukr">блакитного</span> <span class="ukr">металу.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Христос</span> <span
                        class="ukr">ще</span> <span class="ukr">не</span> <span class="ukr">народився,</span> <span
                        class="ukr">—</span>
                    <span class="ukr">почав</span> <span class="ukr">Тревіс.</span> <span class="ukr">—</span> <span
                        class="ukr">Мойсей</span> <span class="ukr">ще</span> <span class="ukr">не</span> <span
                        class="ukr">сходив</span> <span class="ukr">на</span> <span class="ukr">Гору,</span> <span
                        class="ukr">щоб</span> <span class="ukr">говорити</span>
                    <span class="ukr">з</span> <span class="ukr">Богом.</span>
                    <span class="ukr">Піраміди</span> <span class="ukr">—</span>
                    <span class="ukr">в</span> <span class="ukr">землі,</span>
                    <span class="ukr">чекають</span> <span class="ukr">доки</span> <span class="ukr">їх</span> <span
                        class="ukr">вирубають</span> <span class="ukr">з</span> <span class="ukr">каменю</span> <span
                        class="ukr">та</span> <span class="ukr">зведуть.</span> <span class="ukr">Пам'ятайте</span>
                    <span class="ukr">про</span>
                    <span class="ukr">це.</span> <span class="ukr">Олександр,</span> <span class="ukr">Кесар,</span>
                    <span class="ukr">Наполеон,</span> <span class="ukr">Гітлер</span> <span class="ukr">—</span> <span
                        class="ukr">нікого</span> <span class="ukr">з</span> <span class="ukr">них</span> <span
                        class="ukr">не</span>
                    <span class="ukr">існує.</span> </p>
                <p class="ukrainian"> <span class="ukr">Чоловіки</span> <span class="ukr">кивнули</span>
                    <span class="ukr">головами.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Там,</span> <span class="ukr">—</span>
                    <span class="ukr">пан</span> <span class="ukr">Тревіс</span>
                    <span class="ukr">вказав</span> <span class="ukr">пальцем,</span> <span class="ukr">—</span> <span
                        class="ukr">джунглі</span> <span class="ukr">за</span> <span class="ukr">шістдесят</span> <span
                        class="ukr">мільйонів,</span> <span class="ukr">дві</span>
                    <span class="ukr">тисячі,</span> <span class="ukr">п'ятдесят</span> <span class="ukr">п'ять</span>
                    <span class="ukr">років</span> <span class="ukr">до</span>
                    <span class="ukr">Президента</span> <span class="ukr">Кейта.</span> </p>
                <p class="ukrainian"> <span class="ukr">Він</span> <span class="ukr">вказав</span> <span
                        class="ukr">на</span> <span class="ukr">металеву</span> <span class="ukr">стежку,</span> <span
                        class="ukr">що</span> <span class="ukr">різко</span> <span class="ukr">прокреслювала</span>
                    <span class="ukr">шлях</span> <span class="ukr">вглиб</span> <span class="ukr">зеленої</span> <span
                        class="ukr">дикої</span>
                    <span class="ukr">гущавини,</span> <span class="ukr">понад</span> <span class="ukr">болотними</span>
                    <span class="ukr">випарами,</span> <span class="ukr">поміж</span> <span
                        class="ukr">велетенських</span>
                    <span class="ukr">папоротей</span> <span class="ukr">та</span>
                    <span class="ukr">пальм</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">А</span> <span class="ukr">це,</span> <span
                        class="ukr">—</span> <span class="ukr">сказав</span> <span class="ukr">він,</span> <span
                        class="ukr">—</span> <span class="ukr">Стежка,</span> <span class="ukr">прокладена</span> <span
                        class="ukr">компанією</span> <span class="ukr">Сафарі</span>
                    <span class="ukr">в</span> <span class="ukr">Часі</span>
                    <span class="ukr">для</span> <span class="ukr">вашого</span>
                    <span class="ukr">користування.</span> <span class="ukr">Вона</span> <span class="ukr">плаває</span>
                    <span class="ukr">за</span> <span class="ukr">п'ятнадцять</span>
                    <span class="ukr">сантиметрів</span> <span class="ukr">від</span> <span class="ukr">землі.</span>
                    <span class="ukr">Навряд</span> <span class="ukr">чи</span> <span class="ukr">вона</span> <span
                        class="ukr">зачіпає</span>
                    <span class="ukr">більше</span> <span class="ukr">однієї</span> <span class="ukr">бадилинки,</span>
                    <span class="ukr">квітки</span> <span class="ukr">чи</span>
                    <span class="ukr">дерева.</span> <span class="ukr">Виготовлена</span> <span class="ukr">вона</span>
                    <span class="ukr">з</span> <span class="ukr">антигравітаційного</span> <span
                        class="ukr">металу.</span>
                    <span class="ukr">Її</span> <span class="ukr">завдання</span> <span class="ukr">—</span> <span
                        class="ukr">жодним</span> <span class="ukr">чином</span>
                    <span class="ukr">не</span> <span class="ukr">допустити,</span> <span class="ukr">аби</span>
                    <span class="ukr">ви</span> <span class="ukr">доторкнутился</span> <span class="ukr">до</span>
                    <span class="ukr">цього</span> <span class="ukr">Світу</span>
                    <span class="ukr">Минулого.</span> <span class="ukr">Залишайтеся</span> <span class="ukr">на</span>
                    <span class="ukr">Стежці.</span> <span class="ukr">Не</span>
                    <span class="ukr">сходьте</span> <span class="ukr">з</span>
                    <span class="ukr">неї.</span> <span class="ukr">Повторюю.</span> <span class="ukr">Не</span>
                    <span class="ukr">сходьте</span> <span class="ukr">з</span>
                    <span class="ukr">неї.</span> <span class="ukr">За</span>
                    <span class="ukr">будь-яких</span> <span class="ukr">обставин!</span> <span class="ukr">Якщо</span>
                    <span class="ukr">ви</span> <span class="ukr">впадете,</span>
                    <span class="ukr">вас</span> <span class="ukr">буде</span>
                    <span class="ukr">покарано.</span> <span class="ukr">І</span>
                    <span class="ukr">не</span> <span class="ukr">стріляйте</span> <span class="ukr">в</span> <span
                        class="ukr">тварин,</span> <span class="ukr">в</span> <span class="ukr">яких</span> <span
                        class="ukr">не</span>
                    <span class="ukr">стріляємо</span> <span class="ukr">ми,</span>
                    <span class="ukr">гаразд?</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Чому,</span>
                    <span class="ukr">—</span> <span class="ukr">запитав</span>
                    <span class="ukr">Екельс?</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Вони</span> <span class="ukr">сиділи</span>
                    <span class="ukr">посеред</span> <span class="ukr">первісної</span> <span class="ukr">дикої</span>
                    <span class="ukr">незайманости.</span> <span class="ukr">Звіддалік</span> <span class="ukr">з</span>
                    <span class="ukr">вітром</span> <span class="ukr">долунали</span>
                    <span class="ukr">пташині</span> <span class="ukr">крики,</span> <span class="ukr">чутно</span>
                    <span class="ukr">було</span> <span class="ukr">запах</span>
                    <span class="ukr">смоли,</span> <span class="ukr">стародавнього</span> <span
                        class="ukr">солоного</span>
                    <span class="ukr">моря,</span>
                    <span class="ukr">вологої</span> <span class="ukr">трави.</span> <span class="ukr">Пахли</span>
                    <span class="ukr">квіти</span> <span class="ukr">кольору</span> <span class="ukr">крови.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ми</span> <span class="ukr">не</span>
                    <span class="ukr">хочемо</span> <span class="ukr">змінювати</span>
                    <span class="ukr">майбутнє.</span> <span class="ukr">Ми</span> <span class="ukr">не</span> <span
                        class="ukr">належимо</span> <span class="ukr">до</span> <span class="ukr">цього</span> <span
                        class="ukr">Світу</span> <span class="ukr">Минулого.</span> <span class="ukr">Уряд</span>
                    <span class="ukr">не</span> <span class="ukr">схвалює</span>
                    <span class="ukr">нашого</span> <span class="ukr">перебування</span> <span class="ukr">тут,</span>
                    <span class="ukr">тому</span> <span class="ukr">ми</span>
                    <span class="ukr">даємо</span> <span class="ukr">чималі</span> <span class="ukr">хабарі,</span>
                    <span class="ukr">аби</span> <span class="ukr">зберегти</span> <span class="ukr">за</span> <span
                        class="ukr">собою</span> <span class="ukr">право</span> <span class="ukr">на</span> <span
                        class="ukr">надання</span> <span class="ukr">послуг.</span> <span class="ukr">Машина</span>
                    <span class="ukr">Часу</span> <span class="ukr">—</span>
                    <span class="ukr">це</span> <span class="ukr">з</span> <span class="ukr">біса</span> <span
                        class="ukr">тендітна</span>
                    <span class="ukr">справа.</span> <span class="ukr">Не</span>
                    <span class="ukr">відаючи,</span> <span class="ukr">ми</span>
                    <span class="ukr">могли</span> <span class="ukr">б</span>
                    <span class="ukr">знищити</span> <span class="ukr">якусь</span> <span class="ukr">важливу</span>
                    <span class="ukr">тварину,</span> <span class="ukr">невеличку</span> <span class="ukr">птаху,</span>
                    <span class="ukr">плотвинку,</span> <span class="ukr">навіть</span> <span class="ukr">якусь</span>
                    <span class="ukr">квітку</span> <span class="ukr">і</span>
                    <span class="ukr">таким</span> <span class="ukr">чином</span>
                    <span class="ukr">обірвати</span> <span class="ukr">важливий</span> <span class="ukr">зв'язок</span>
                    <span class="ukr">у</span> <span class="ukr">становленні</span> <span class="ukr">видів.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Не</span> <span
                        class="ukr">вельми</span>
                    <span class="ukr">зрозуміло,</span>
                    <span class="ukr">—</span> <span class="ukr">озвався</span>
                    <span class="ukr">Екельс.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Ну</span> <span class="ukr">гаразд,</span> <span
                        class="ukr">—</span>
                    <span class="ukr">продовжив</span> <span class="ukr">Тревіс,</span>
                    <span class="ukr">—</span> <span class="ukr">скажімо</span>
                    <span class="ukr">ми</span> <span class="ukr">випадково</span> <span class="ukr">придавили</span>
                    <span class="ukr">тут</span>
                    <span class="ukr">одну</span> <span class="ukr">мишу.</span>
                    <span class="ukr">Це</span> <span class="ukr">означає,</span>
                    <span class="ukr">що</span> <span class="ukr">разом</span>
                    <span class="ukr">з</span> <span class="ukr">нею</span> <span class="ukr">загинули</span> <span
                        class="ukr">всі</span>
                    <span class="ukr">її</span> <span class="ukr">майбутні</span>
                    <span class="ukr">родини,</span> <span class="ukr">правильно?</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Правильно.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">І</span> <span class="ukr">всі</span>
                    <span class="ukr">родини</span> <span class="ukr">родин</span>
                    <span class="ukr">тих</span> <span class="ukr">родин</span>
                    <span class="ukr">однієї</span> <span class="ukr">тієї</span>
                    <span class="ukr">миші!</span> <span class="ukr">Наступивши</span> <span class="ukr">раз,</span>
                    <span class="ukr">ви</span> <span class="ukr">стираєте</span>
                    <span class="ukr">першу,</span> <span class="ukr">потім</span> <span class="ukr">дестяток,</span>
                    <span class="ukr">потім</span> <span class="ukr">тисячу,</span> <span class="ukr">мільйон,</span>
                    <span class="ukr">мільярд</span> <span class="ukr">мишей,</span> <span class="ukr">які</span> <span
                        class="ukr">б,</span> <span class="ukr">можливо,</span> <span class="ukr">існували!</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ну,</span> <span
                        class="ukr">вони</span>
                    <span class="ukr">мертві,</span>
                    <span class="ukr">—</span> <span class="ukr">відповів</span>
                    <span class="ukr">Екельс.</span> <span class="ukr">—</span>
                    <span class="ukr">І</span> <span class="ukr">що</span> <span class="ukr">з</span> <span
                        class="ukr">того?</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Що</span> <span class="ukr">з</span>
                    <span class="ukr">того?</span> <span class="ukr">Тихо</span> <span class="ukr">пирхнув</span> <span
                        class="ukr">Тревіс?.</span>
                    <span class="ukr">—</span> <span class="ukr">Ну</span> <span class="ukr">а</span> <span
                        class="ukr">як</span> <span class="ukr">щодо</span> <span class="ukr">лисиць,</span>
                    <span class="ukr">яким</span> <span class="ukr">ті</span>
                    <span class="ukr">миші</span> <span class="ukr">необхідні</span> <span class="ukr">для</span>
                    <span class="ukr">виживання?</span> <span class="ukr">Через</span> <span class="ukr">нестачу</span>
                    <span class="ukr">десятка</span> <span class="ukr">мишей</span> <span class="ukr">помирає</span>
                    <span class="ukr">лициця.</span> <span class="ukr">Через</span> <span class="ukr">нестачу</span>
                    <span class="ukr">десятка</span> <span class="ukr">лисиць</span> <span class="ukr">—</span> <span
                        class="ukr">голодує</span> <span class="ukr">лев.</span>
                    <span class="ukr">Найрізноманітніші</span> <span class="ukr">комахи,</span> <span
                        class="ukr">стервятники,</span>
                    <span class="ukr">безкінечні</span> <span class="ukr">мільярди</span> <span
                        class="ukr">життєвих</span>
                    <span class="ukr">форм,</span> <span class="ukr">яким</span>
                    <span class="ukr">потрібен</span> <span class="ukr">лев,</span> <span class="ukr">кинуто</span>
                    <span class="ukr">у</span> <span class="ukr">хаос</span> <span class="ukr">та</span> <span
                        class="ukr">руїну.</span>
                    <span class="ukr"></span> </p>
                <p class="ukrainian"> <span class="ukr">Зрештою</span> <span class="ukr">все</span> <span
                        class="ukr">докипає</span>
                    <span class="ukr">ось</span> <span class="ukr">до</span> <span class="ukr">чого:</span> <span
                        class="ukr">п'ятдесятьма</span> <span class="ukr">дев'ятьма</span> <span
                        class="ukr">мільйнами</span> <span class="ukr">років</span>
                    <span class="ukr">по</span> <span class="ukr">тому,</span>
                    <span class="ukr">печерна</span> <span class="ukr">людина,</span> <span class="ukr">одна</span>
                    <span class="ukr">з</span> <span class="ukr">десятка</span>
                    <span class="ukr">на</span> <span class="ukr">всій</span>
                    <span class="ukr">планеті,</span> <span class="ukr">аби</span> <span
                        class="ukr">прогодуватися,</span>
                    <span class="ukr">виходить</span> <span class="ukr">на</span> <span class="ukr">полювання</span>
                    <span class="ukr">на</span>
                    <span class="ukr">вепра</span> <span class="ukr">або</span>
                    <span class="ukr">на</span> <span class="ukr">шаблезубого</span> <span class="ukr">тигра.</span>
                    <span class="ukr">Але</span> <span class="ukr">ви,</span> <span class="ukr">друже,</span> <span
                        class="ukr">розтоптали</span> <span class="ukr">усіх</span>
                    <span class="ukr">тигрів</span> <span class="ukr">у</span>
                    <span class="ukr">тій</span> <span class="ukr">місцевості.</span> <span class="ukr">Просто</span>
                    <span class="ukr">розчавивши</span>
                    <span class="ukr">одну</span> <span class="ukr">єдину</span>
                    <span class="ukr">мишку.</span> <span class="ukr">І</span>
                    <span class="ukr">печерна</span> <span class="ukr">людина</span> <span class="ukr">голодує.</span>
                    <span class="ukr">І</span> <span class="ukr">ця</span> <span class="ukr">печерна</span> <span
                        class="ukr">людина,</span>
                    <span class="ukr">будь</span> <span class="ukr">ласка</span>
                    <span class="ukr">зауважте,</span> <span class="ukr">не</span> <span class="ukr">просто</span> <span
                        class="ukr">якась</span> <span class="ukr">проста</span>
                    <span class="ukr">смертна</span> <span class="ukr">істота</span> <span class="ukr">—</span> <span
                        class="ukr">ні!</span> <span class="ukr">Вона</span> <span class="ukr">—</span> <span
                        class="ukr">цілий</span>
                    <span class="ukr">майбутній</span> <span class="ukr">народ.</span>
                    <span class="ukr">З</span> <span class="ukr">її</span> <span class="ukr">утроби</span> <span
                        class="ukr">вийшло</span>
                    <span class="ukr">б</span> <span class="ukr">десять</span>
                    <span class="ukr">синів.</span> <span class="ukr">А</span>
                    <span class="ukr">з</span> <span class="ukr">їхніх</span>
                    <span class="ukr">утроб</span> <span class="ukr">—</span>
                    <span class="ukr">ще</span> <span class="ukr">сто</span>
                    <span class="ukr">синів,</span> <span class="ukr">і</span>
                    <span class="ukr">так</span> <span class="ukr">далі</span>
                    <span class="ukr">й</span> <span class="ukr">далі</span>
                    <span class="ukr">до</span> <span class="ukr">цивілізації.</span> <span class="ukr">Знищить</span>
                    <span class="ukr">одну</span>
                    <span class="ukr">цю</span> <span class="ukr">людину</span>
                    <span class="ukr">і</span> <span class="ukr">ви</span> <span class="ukr">знищите</span> <span
                        class="ukr">цілу</span>
                    <span class="ukr">расу,</span> <span class="ukr">народ,</span> <span class="ukr">всю</span> <span
                        class="ukr">історію</span> <span class="ukr">життя.</span>
                    <span class="ukr"></span> </p>
                <p class="ukrainian"> <span class="ukr">Це</span> <span class="ukr">можна</span> <span
                        class="ukr">порівняти</span>
                    <span class="ukr">зі</span>
                    <span class="ukr">знищенням</span> <span class="ukr">кількох</span> <span
                        class="ukr">Адамових</span>
                    <span class="ukr">онуків.</span> <span class="ukr">Наступивши</span> <span class="ukr">одного</span>
                    <span class="ukr">разу</span> <span class="ukr">на</span>
                    <span class="ukr">мишу,</span> <span class="ukr">ви</span>
                    <span class="ukr">можете</span> <span class="ukr">спричинити</span> <span
                        class="ukr">землетрус,</span>
                    <span class="ukr">наслідки</span> <span class="ukr">якого,</span>
                    <span class="ukr">через</span> <span class="ukr">глиб</span>
                    <span class="ukr">Часу</span> <span class="ukr">до</span>
                    <span class="ukr">самих</span> <span class="ukr">підоснов,</span> <span class="ukr">похитнули</span>
                    <span class="ukr">б</span> <span class="ukr">Землю</span> <span class="ukr">та</span> <span
                        class="ukr">долі</span>
                    <span class="ukr">багатьох.</span>
                    <span class="ukr">Зі</span> <span class="ukr">смертю</span>
                    <span class="ukr">тієї</span> <span class="ukr">самої</span>
                    <span class="ukr">однієї</span> <span class="ukr">печерної</span> <span class="ukr">людини,</span>
                    <span class="ukr">мільярд</span> <span class="ukr">інших</span> <span class="ukr">досі</span> <span
                        class="ukr">ненароджених</span> <span class="ukr">буде</span>
                    <span class="ukr">задушено</span> <span class="ukr">прямо</span> <span class="ukr">в</span> <span
                        class="ukr">лоні.</span> <span class="ukr">Вірогідно</span>
                    <span class="ukr">Рим</span> <span class="ukr">ніколи</span>
                    <span class="ukr">не</span> <span class="ukr">постане</span>
                    <span class="ukr">на</span> <span class="ukr">Семи</span>
                    <span class="ukr">Пагорбах.</span> <span class="ukr">Вірогідно</span> <span
                        class="ukr">Європа</span>
                    <span class="ukr">—</span> <span class="ukr">назавжди</span>
                    <span class="ukr">темний</span> <span class="ukr">ліс.</span>
                    <span class="ukr">І</span> <span class="ukr">лише</span>
                    <span class="ukr">Азія</span> <span class="ukr">вилискує</span> <span class="ukr">здоров'ям</span>
                    <span class="ukr">та</span>
                    <span class="ukr">рясніє</span> <span class="ukr">людьми.</span> <span class="ukr">Наступіть</span>
                    <span class="ukr">на</span> <span class="ukr">мишу</span>
                    <span class="ukr">і</span> <span class="ukr">ви</span> <span class="ukr">розтрощите</span> <span
                        class="ukr">Піраміди.</span> <span class="ukr">Наступіть</span> <span class="ukr">на</span>
                    <span class="ukr">мишу</span> <span class="ukr">і</span>
                    <span class="ukr">ви</span> <span class="ukr">залишите</span>
                    <span class="ukr">слід</span> <span class="ukr">через</span>
                    <span class="ukr">усю</span> <span class="ukr">Вічність</span> <span class="ukr">подібний</span>
                    <span class="ukr">до</span> <span class="ukr">Великого</span>
                    <span class="ukr">Каньйону.</span> <span class="ukr">Королева</span> <span
                        class="ukr">Єлизавета,</span>
                    <span class="ukr">можливо,</span> <span class="ukr">ніколи</span>
                    <span class="ukr">не</span> <span class="ukr">народиться;</span> <span class="ukr">Вошингтон,</span>
                    <span class="ukr">можливо,</span> <span class="ukr">не</span> <span class="ukr">перетне</span> <span
                        class="ukr">Делавер,</span>
                    <span class="ukr">і</span> <span class="ukr">взагалі</span>
                    <span class="ukr">Сполучених</span> <span class="ukr">Штатів,</span> <span
                        class="ukr">можливо,</span>
                    <span class="ukr">й</span> <span class="ukr">зовсім</span>
                    <span class="ukr">не</span> <span class="ukr">буде.</span>
                    <span class="ukr">Отже</span> <span class="ukr">будьте</span>
                    <span class="ukr">обережними.</span> <span class="ukr">Залишайтеся</span> <span
                        class="ukr">на</span>
                    <span class="ukr">Стежці.</span> <span class="ukr">Ніколи</span> <span class="ukr">з</span> <span
                        class="ukr">неї</span> <span class="ukr">не</span> <span class="ukr">сходьте!</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Зрозуміло,</span>
                    <span class="ukr">—</span> <span class="ukr">відповів</span>
                    <span class="ukr">Екельс.</span> <span class="ukr">—</span>
                    <span class="ukr">То</span> <span class="ukr">нам</span>
                    <span class="ukr">навіть</span> <span class="ukr">дотик</span> <span class="ukr">до</span> <span
                        class="ukr">трави</span> <span class="ukr">не</span> <span class="ukr">зійде</span> <span
                        class="ukr">з</span>
                    <span class="ukr">рук?</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Правильно.</span>
                    <span class="ukr">Знищення</span> <span class="ukr">певних</span> <span class="ukr">рослин,</span>
                    <span class="ukr">може</span> <span class="ukr">обернутися</span> <span class="ukr">відлунням</span>
                    <span class="ukr">у</span> <span class="ukr">безкінечності.</span> <span class="ukr">Одна</span>
                    <span class="ukr">незначна</span>
                    <span class="ukr">помилка</span> <span class="ukr">тут</span>
                    <span class="ukr">відповідно</span> <span class="ukr">помножиться</span> <span class="ukr">на</span>
                    <span class="ukr">шістдесят</span> <span class="ukr">мільйонів</span> <span
                        class="ukr">років.</span>
                    <span class="ukr">Звісно,</span> <span class="ukr">ми</span>
                    <span class="ukr">припускаємо,</span> <span class="ukr">що</span> <span class="ukr">наша</span>
                    <span class="ukr">теорія</span> <span class="ukr">хибна.</span>
                    <span class="ukr">Можливо,</span> <span class="ukr">нам</span> <span class="ukr">не</span> <span
                        class="ukr">під</span> <span class="ukr">силу</span> <span class="ukr">змінювати</span> <span
                        class="ukr">Час.</span>
                    <span class="ukr">Або</span> <span class="ukr">зміни</span>
                    <span class="ukr">будуть</span> <span class="ukr">ледь</span>
                    <span class="ukr">вловимі.</span> <span class="ukr">Мертва</span> <span class="ukr">миша</span>
                    <span class="ukr">спричинить</span> <span class="ukr">комашине</span> <span
                        class="ukr">зміщення</span>
                    <span class="ukr">рівноваги</span> <span class="ukr">зараз,</span> <span class="ukr">а</span> <span
                        class="ukr">далі</span> <span class="ukr">—</span> <span class="ukr">це</span> <span
                        class="ukr">вже</span>
                    <span class="ukr">неспіврозмірність</span> <span class="ukr">популяції,</span> <span
                        class="ukr">ще</span>
                    <span class="ukr">далі</span> <span class="ukr">—</span>
                    <span class="ukr">бідний</span> <span class="ukr">врожай,</span> <span class="ukr">занепад,</span>
                    <span class="ukr">масовий</span> <span class="ukr">голод,</span> <span class="ukr">і</span> <span
                        class="ukr">зрештою</span> <span class="ukr">—</span> <span class="ukr">зміна</span> <span
                        class="ukr">суспільного</span>
                    <span class="ukr">характеру</span> <span class="ukr">на</span> <span class="ukr">широчезних</span>
                    <span class="ukr">просторах.</span> <span class="ukr">Або</span> <span class="ukr">щось</span> <span
                        class="ukr">іще</span> <span class="ukr">невловиміше,</span>
                    <span class="ukr">щось</span> <span class="ukr">подібне.</span> <span class="ukr">Можливо,</span>
                    <span class="ukr">ледь</span> <span class="ukr">чутний</span>
                    <span class="ukr">подих,</span> <span class="ukr">шепіт,</span> <span class="ukr">волосинка,</span>
                    <span class="ukr">пилок</span> <span class="ukr">в</span>
                    <span class="ukr">повітрі,</span> <span class="ukr">така</span> <span class="ukr">зовсім</span>
                    <span class="ukr">зовсім</span> <span class="ukr">незначна</span>
                    <span class="ukr">зміна,</span> <span class="ukr">—</span>
                    <span class="ukr">на</span> <span class="ukr">яку</span>
                    <span class="ukr">не</span> <span class="ukr">придивись</span> <span class="ukr">ви</span>
                    <span class="ukr">уважніше,</span> <span class="ukr">—</span>
                    <span class="ukr">то</span> <span class="ukr">й</span> <span class="ukr">не</span> <span
                        class="ukr">помітили</span>
                    <span class="ukr">б.</span> </p>
                <p class="ukrainian"> <span class="ukr">Хто</span> <span class="ukr">знає?</span> <span
                        class="ukr">Хто</span> <span class="ukr">напевно</span> <span class="ukr">може</span> <span
                        class="ukr">сказати,</span>
                    <span class="ukr">що</span> <span class="ukr">знає?</span>
                    <span class="ukr">Ми</span> <span class="ukr">не</span> <span class="ukr">знаємо.</span> <span
                        class="ukr">Ми</span>
                    <span class="ukr">гадаємо.</span> <span class="ukr">Але</span>
                    <span class="ukr">доки</span> <span class="ukr">не</span>
                    <span class="ukr">дізнаємося</span> <span class="ukr">напевно,</span> <span class="ukr">чи</span>
                    <span class="ukr">наша</span> <span class="ukr">вовтузня</span>
                    <span class="ukr">у</span> <span class="ukr">Часі</span>
                    <span class="ukr">може</span> <span class="ukr">спричинити</span> <span class="ukr">в</span>
                    <span class="ukr">Історії</span> <span class="ukr">гучний</span> <span class="ukr">рев</span> <span
                        class="ukr">чи</span> <span class="ukr">тихе</span> <span class="ukr">шелестіння,</span> <span
                        class="ukr">доти</span>
                    <span class="ukr">ми</span> <span class="ukr">поводимося</span> <span class="ukr">з</span>
                    <span class="ukr">біса</span> <span class="ukr">дуже</span>
                    <span class="ukr">обережно.</span> <span class="ukr">Цю</span> <span class="ukr">Машину,</span>
                    <span class="ukr">цю</span> <span class="ukr">Стежку,</span> <span class="ukr">ваш</span> <span
                        class="ukr">одяг</span> <span class="ukr">і</span> <span class="ukr">тіла</span> <span
                        class="ukr">було,</span>
                    <span class="ukr">як</span> <span class="ukr">вам</span> <span class="ukr">відомо,</span> <span
                        class="ukr">знезаражено</span> <span class="ukr">перед</span>
                    <span class="ukr">початком</span> <span class="ukr">подорожі.</span> <span class="ukr">Ми</span>
                    <span class="ukr">одягли</span> <span class="ukr">ці</span>
                    <span class="ukr">кисневі</span> <span class="ukr">шоломи,</span> <span class="ukr">щоб</span> <span
                        class="ukr">не</span> <span class="ukr">напустити</span>
                    <span class="ukr">наших</span> <span class="ukr">бактерій</span> <span class="ukr">в</span> <span
                        class="ukr">невідому</span> <span class="ukr">первісну</span>
                    <span class="ukr">атмосферу.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">А</span> <span class="ukr">як</span> <span
                        class="ukr">ви</span> <span class="ukr">знаєте</span> <span class="ukr">в</span> <span
                        class="ukr">яку</span> <span class="ukr">тварину</span> <span class="ukr">стріляти?</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ми</span> <span
                        class="ukr">позначаємо</span> <span class="ukr">їх</span>
                    <span class="ukr">червоною</span> <span class="ukr">фарбою,</span> <span class="ukr">—</span> <span
                        class="ukr">відповів</span> <span class="ukr">Тревіс.</span>
                    <span class="ukr">—</span> <span class="ukr">Сьогодні,</span>
                    <span class="ukr">перед</span> <span class="ukr">початком</span> <span class="ukr">нашої</span>
                    <span class="ukr">подорожі,</span> <span class="ukr">ми</span> <span class="ukr">відрядили</span>
                    <span class="ukr">сюди</span> <span class="ukr">Машиною</span> <span class="ukr">Лесперанса.</span>
                    <span class="ukr">Він</span>
                    <span class="ukr">прибув</span> <span class="ukr">до</span>
                    <span class="ukr">певної</span> <span class="ukr">історичної</span> <span class="ukr">доби</span>
                    <span class="ukr">і</span> <span class="ukr">прослідкував</span> <span class="ukr">за</span>
                    <span class="ukr">певними</span> <span class="ukr">тваринами.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Вивчаючи</span> <span
                        class="ukr">їх?</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Саме</span> <span
                        class="ukr">так,</span>
                    <span class="ukr">—</span> <span class="ukr">відповів</span> <span class="ukr">Лесперанс.</span>
                    <span class="ukr">—</span>
                    <span class="ukr">Я</span> <span class="ukr">прослідкував</span> <span class="ukr">все</span>
                    <span class="ukr">їхнє</span> <span class="ukr">існування,</span> <span
                        class="ukr">записуючи,</span>
                    <span class="ukr">хто</span>
                    <span class="ukr">з</span> <span class="ukr">них</span> <span class="ukr">прожив</span> <span
                        class="ukr">найдовше,</span>
                    <span class="ukr">а</span> <span class="ukr">хто</span> <span class="ukr">не</span> <span
                        class="ukr">довго.</span>
                    <span class="ukr">Які</span> <span class="ukr">з</span> <span class="ukr">них</span> <span
                        class="ukr">часто</span>
                    <span class="ukr">парувалися,</span> <span class="ukr">які</span>
                    <span class="ukr">не</span> <span class="ukr">часто.</span>
                    <span class="ukr">Життя</span> <span class="ukr">коротке.</span> <span class="ukr">Коли</span>
                    <span class="ukr">я</span> <span class="ukr">знаходжу</span>
                    <span class="ukr">тварину,</span> <span class="ukr">убиту</span> <span class="ukr">падінням</span>
                    <span class="ukr">дерева</span> <span class="ukr">або</span>
                    <span class="ukr">засмоктану</span> <span class="ukr">драговинням,</span> <span class="ukr">я</span>
                    <span class="ukr">точно</span> <span class="ukr">зазначаю</span> <span class="ukr">час,</span>
                    <span class="ukr">хвилину</span> <span class="ukr">й</span>
                    <span class="ukr">секунду.</span> <span class="ukr">Потім</span> <span class="ukr">стріляю</span>
                    <span class="ukr">кольоровим</span> <span class="ukr">зарядом,</span> <span class="ukr">який</span>
                    <span class="ukr">залишає</span> <span class="ukr">слід</span> <span class="ukr">на</span> <span
                        class="ukr">боці</span> <span class="ukr">тварини.</span>
                    <span class="ukr">Не</span> <span class="ukr">прогледимо.</span> <span class="ukr">Після</span>
                    <span class="ukr">того</span> <span class="ukr">я</span>
                    <span class="ukr">налаштовую</span> <span class="ukr">час</span> <span class="ukr">прибуття</span>
                    <span class="ukr">в</span> <span class="ukr">Минуле</span>
                    <span class="ukr">таким</span> <span class="ukr">чином,</span> <span class="ukr">щоб</span> <span
                        class="ukr">ми</span> <span class="ukr">зустрілися</span>
                    <span class="ukr">з</span> <span class="ukr">Потворою</span>
                    <span class="ukr">не</span> <span class="ukr">далі</span>
                    <span class="ukr">як</span> <span class="ukr">за</span> <span class="ukr">дві</span> <span
                        class="ukr">хвилини</span> <span class="ukr">до</span> <span class="ukr">її</span> <span
                        class="ukr">дійсної,</span> <span class="ukr">у</span> <span class="ukr">будь-якому</span> <span
                        class="ukr">разі,</span>
                    <span class="ukr">неминучої</span> <span class="ukr">загибелі.</span> <span class="ukr">Так</span>
                    <span class="ukr">ми</span> <span class="ukr">полюємо</span>
                    <span class="ukr">на</span> <span class="ukr">тварин</span>
                    <span class="ukr">без</span> <span class="ukr">майбутнього,</span> <span class="ukr">які</span>
                    <span class="ukr">вже</span> <span class="ukr">ніколи</span>
                    <span class="ukr">не</span> <span class="ukr">паруватимуться.</span> <span class="ukr">Бачите</span>
                    <span class="ukr">які</span> <span class="ukr">ми</span> <span class="ukr">обережні?</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Але</span> <span class="ukr">ж</span>
                    <span class="ukr">якщо</span> <span class="ukr">ви</span> <span class="ukr">вже</span> <span
                        class="ukr">відвідували</span>
                    <span class="ukr">цей</span> <span class="ukr">ранок</span>
                    <span class="ukr">у</span> <span class="ukr">Часі,</span>
                    <span class="ukr">—</span> <span class="ukr">сказав</span>
                    <span class="ukr">Екельс,</span> <span class="ukr">—</span>
                    <span class="ukr">ви</span> <span class="ukr">мали</span>
                    <span class="ukr">б</span> <span class="ukr">наткнутися</span> <span class="ukr">на</span>
                    <span class="ukr">нас,</span> <span class="ukr">на</span>
                    <span class="ukr">наше</span> <span class="ukr">Сафарі!</span> <span class="ukr">Як</span> <span
                        class="ukr">воно</span> <span class="ukr">пройшло?</span>
                    <span class="ukr">Успішно?</span> <span class="ukr">Чи</span>
                    <span class="ukr">всі</span> <span class="ukr">з</span> <span class="ukr">нас</span> <span
                        class="ukr">повернулися...</span> <span class="ukr">живими?</span> </p>
                <p class="ukrainian"> <span class="ukr">Тревіс</span> <span class="ukr">з</span> <span
                        class="ukr">Лесперансом</span>
                    <span class="ukr">перезирнулися.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Це</span> <span class="ukr">було</span> <span
                        class="ukr">б</span>
                    <span class="ukr">протиріччям,</span> <span class="ukr">—</span>
                    <span class="ukr">відповів</span> <span class="ukr">Лесперанс.</span> <span class="ukr">—</span>
                    <span class="ukr">Час</span> <span class="ukr">не</span>
                    <span class="ukr">допускає</span> <span class="ukr">таких</span> <span class="ukr">зворотів</span>
                    <span class="ukr">як</span> <span class="ukr">зустріч</span>
                    <span class="ukr">із</span> <span class="ukr">самим</span>
                    <span class="ukr">собою.</span> <span class="ukr">Коли</span>
                    <span class="ukr">виникають</span> <span class="ukr">такі</span> <span class="ukr">загрози,</span>
                    <span class="ukr">Час</span> <span class="ukr">відступає</span> <span class="ukr">на</span>
                    <span class="ukr">крок.</span> <span class="ukr">Ніби</span>
                    <span class="ukr">літак,</span> <span class="ukr">що</span>
                    <span class="ukr">потрапляє</span> <span class="ukr">до</span> <span class="ukr">повітряної</span>
                    <span class="ukr">ями.</span> <span class="ukr">Ви</span>
                    <span class="ukr">відчули</span> <span class="ukr">як</span>
                    <span class="ukr">Машина</span> <span class="ukr">стрибнула</span> <span class="ukr">перед</span>
                    <span class="ukr">нашою</span> <span class="ukr">зупинкою?</span> <span class="ukr">Це</span>
                    <span class="ukr">було</span> <span class="ukr">наше</span>
                    <span class="ukr">відбуття</span> <span class="ukr">назад</span> <span class="ukr">до</span> <span
                        class="ukr">Майбутнього.</span> <span class="ukr">Ми</span>
                    <span class="ukr">нічого</span> <span class="ukr">не</span>
                    <span class="ukr">бачили.</span> <span class="ukr">Не</span>
                    <span class="ukr">існує</span> <span class="ukr">способу</span> <span class="ukr">сказати</span>
                    <span class="ukr">чи</span> <span class="ukr">був</span>
                    <span class="ukr">наш</span> <span class="ukr">вихід</span>
                    <span class="ukr">успішним,</span> <span class="ukr">чи</span> <span class="ukr">ми</span> <span
                        class="ukr">зустріли</span> <span class="ukr">нашу</span>
                    <span class="ukr">Потвору,</span> <span class="ukr">або</span> <span class="ukr">чи</span> <span
                        class="ukr">всі</span> <span class="ukr">ми</span> <span class="ukr">—</span> <span
                        class="ukr">також</span>
                    <span class="ukr">і</span> <span class="ukr">ви,</span> <span class="ukr">пане</span> <span
                        class="ukr">Екельс</span> <span class="ukr">—</span> <span class="ukr">вибралися</span> <span
                        class="ukr">звідси</span> <span class="ukr">живими.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Екельс</span>
                    <span class="ukr">блідо</span> <span class="ukr">посміхнувся.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Годі</span>
                    <span class="ukr">балачок,</span> <span class="ukr">—</span>
                    <span class="ukr">скомандував</span> <span class="ukr">Тревіс.</span> <span class="ukr">—</span>
                    <span class="ukr">Всім</span> <span class="ukr">встати!</span> </p>
                <p class="ukrainian"> <span class="ukr">Всі</span> <span class="ukr">були</span> <span
                        class="ukr">готові</span> <span class="ukr">вийти</span> <span class="ukr">з</span> <span
                        class="ukr">Машини.</span> </p>
                <p class="ukrainian"> <span class="ukr">Джунглі</span> <span class="ukr">вгору,</span>
                    <span class="ukr">джунглі</span> <span class="ukr">вшир,</span> <span class="ukr">джунглі</span>
                    <span class="ukr">—</span> <span class="ukr">весь</span>
                    <span class="ukr">світ</span> <span class="ukr">навіки</span>
                    <span class="ukr">і</span> <span class="ukr">віки.</span>
                    <span class="ukr">Звуки</span> <span class="ukr">схожі</span>
                    <span class="ukr">на</span> <span class="ukr">музику,</span>
                    <span class="ukr">звуки,</span> <span class="ukr">що</span>
                    <span class="ukr">нагадували</span> <span class="ukr">літаючу</span> <span class="ukr">ташу</span>
                    <span class="ukr">наповнювали</span> <span class="ukr">небо.</span> <span class="ukr">То</span>
                    <span class="ukr">ширяли</span> <span class="ukr">птеродактилі</span> <span class="ukr">з</span>
                    <span class="ukr">порожнистими</span> <span class="ukr">сірими</span> <span
                        class="ukr">крильми;</span>
                    <span class="ukr">велетенські</span> <span class="ukr">кажани</span> <span class="ukr">з</span>
                    <span class="ukr">марення</span> <span class="ukr">або</span> <span class="ukr">нічної</span> <span
                        class="ukr">гарячки.</span>
                    <span class="ukr">Екельс,</span> <span class="ukr">утримуючи</span> <span
                        class="ukr">рівновагу</span>
                    <span class="ukr">на</span>
                    <span class="ukr">Стежці,</span> <span class="ukr">жартома</span> <span class="ukr">націлював</span>
                    <span class="ukr">на</span> <span class="ukr">них</span>
                    <span class="ukr">гвинтівку.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Ану</span> <span class="ukr">припиніть!</span> <span
                        class="ukr">Вигукнув</span> <span class="ukr">Тревіс.</span>
                    <span class="ukr">—</span> <span class="ukr">Трясця</span>
                    <span class="ukr">йому!</span> <span class="ukr">Навіть</span> <span class="ukr">заради</span>
                    <span class="ukr">розваги</span> <span class="ukr">не</span>
                    <span class="ukr">націлюйте</span> <span class="ukr">її!</span> <span class="ukr">Якщо</span> <span
                        class="ukr">трапиться,</span> <span class="ukr">що</span>
                    <span class="ukr">вона</span> <span class="ukr">вистрілить...</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Екельс</span> <span class="ukr">почервонів.</span> <span class="ukr">—</span>
                    <span class="ukr">Де</span> <span class="ukr">наш</span>
                    <span class="ukr">Тиранозавр?</span> </p>
                <p class="ukrainian"> <span class="ukr">Лесперанс</span> <span class="ukr">подивився</span> <span
                        class="ukr">на</span>
                    <span class="ukr">годинник.</span> <span class="ukr">—</span>
                    <span class="ukr">Прямо</span> <span class="ukr">попереду.</span> <span class="ukr">Ми</span>
                    <span class="ukr">перетнемо</span> <span class="ukr">його</span> <span class="ukr">слід</span> <span
                        class="ukr">за</span> <span class="ukr">шістдесят</span>
                    <span class="ukr">секунд.</span> <span class="ukr">Шукайте</span> <span class="ukr">червону</span>
                    <span class="ukr">пляму.</span> <span class="ukr">Заради</span> <span class="ukr">Бога,</span>
                    <span class="ukr">не</span> <span class="ukr">стріляйте</span> <span class="ukr">без</span>
                    <span class="ukr">команди.</span> <span class="ukr">Залишайтеся</span> <span class="ukr">на</span>
                    <span class="ukr">Стежці.</span> <span class="ukr">Залишайтеся</span> <span class="ukr">на</span>
                    <span class="ukr">Стежці!</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Під</span> <span class="ukr">вранішнім</span> <span class="ukr">вітерцем</span>
                    <span class="ukr">вони</span>
                    <span class="ukr">рушили</span> <span class="ukr">далі.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Дивно,</span> <span
                        class="ukr">—</span>
                    <span class="ukr">промимрив</span> <span class="ukr">Екельс.</span> <span class="ukr">—</span> <span
                        class="ukr">Перед</span> <span class="ukr">нами</span> <span class="ukr">шістдесят</span> <span
                        class="ukr">мільйонів</span> <span class="ukr">років,</span>
                    <span class="ukr">День</span> <span class="ukr">Виборів</span> <span class="ukr">закінчився.</span>
                    <span class="ukr">Кейт</span>
                    <span class="ukr">—</span> <span class="ukr">Президент.</span> <span class="ukr">Всі</span>
                    <span class="ukr">святкують.</span> <span class="ukr">Ми</span> <span class="ukr">тут</span> <span
                        class="ukr">—</span> <span class="ukr">блукаємо</span> <span class="ukr">посеред</span> <span
                        class="ukr">мільйонів</span>
                    <span class="ukr">років,</span> <span class="ukr">а</span>
                    <span class="ukr">їх</span> <span class="ukr">там</span>
                    <span class="ukr">навіть</span> <span class="ukr">не</span>
                    <span class="ukr">існує.</span> <span class="ukr">Все</span>
                    <span class="ukr">те,</span> <span class="ukr">що</span>
                    <span class="ukr">нас</span> <span class="ukr">непокоїло</span> <span class="ukr">місяцями,</span>
                    <span class="ukr">все</span>
                    <span class="ukr">наше</span> <span class="ukr">життя</span>
                    <span class="ukr">—</span> <span class="ukr">ще</span> <span class="ukr">навіть</span> <span
                        class="ukr">не</span>
                    <span class="ukr">народилося,</span> <span class="ukr">навіть</span> <span class="ukr">думати</span>
                    <span class="ukr">про</span> <span class="ukr">те</span>
                    <span class="ukr">нікому.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Всім</span>
                    <span class="ukr">зняти</span> <span class="ukr">запобіжники!</span> <span class="ukr">—</span>
                    <span class="ukr">наказав</span> <span class="ukr">Тревіс.</span> <span class="ukr">—</span> <span
                        class="ukr">Ви</span> <span class="ukr">стріляєте</span>
                    <span class="ukr">першим,</span> <span class="ukr">Екельсе.</span> <span class="ukr">Другим</span>
                    <span class="ukr">—</span> <span class="ukr">Біллінгз.</span>
                    <span class="ukr">Третім</span> <span class="ukr">—</span>
                    <span class="ukr">Крамер.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Я</span> <span class="ukr">полював</span> <span
                        class="ukr">на</span>
                    <span class="ukr">тигра,</span> <span class="ukr">вепра,</span>
                    <span class="ukr">зубра,</span> <span class="ukr">слона,</span> <span class="ukr">але</span> <span
                        class="ukr">ж,</span> <span class="ukr">Господи,</span> <span class="ukr">—</span> <span
                        class="ukr">отакої!</span> <span class="ukr">—</span> <span class="ukr">промовив</span> <span
                        class="ukr">Екельс.</span> <span class="ukr">—</span> <span class="ukr">Я</span> <span
                        class="ukr">тремчу</span>
                    <span class="ukr">як</span> <span class="ukr">мала</span> <span class="ukr">дитина.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ага,</span> <span
                        class="ukr">—</span>
                    <span class="ukr">видихнув</span> <span class="ukr">Тревіс.</span> </p>
                <p class="ukrainian"> <span class="ukr">Всі</span> <span class="ukr">зупинилися.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Тревіс</span>
                    <span class="ukr">підняв</span> <span class="ukr">руку.</span> <span class="ukr">—</span> <span
                        class="ukr">Перед</span> <span class="ukr">нами,</span> <span class="ukr">—</span> <span
                        class="ukr">прошепотів</span>
                    <span class="ukr">він.</span> <span class="ukr">—</span>
                    <span class="ukr">В</span> <span class="ukr">тумані.</span>
                    <span class="ukr">Ось</span> <span class="ukr">він.</span>
                    <span class="ukr">Ось</span> <span class="ukr">Його</span>
                    <span class="ukr">Королівська</span> <span class="ukr">Величність.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Гущавина</span> <span class="ukr">джунглів</span> <span class="ukr">була</span>
                    <span class="ukr">сповнена</span> <span class="ukr">щебетанням,</span> <span
                        class="ukr">шелестінням,</span> <span class="ukr">мурмотінням</span> <span class="ukr">та</span>
                    <span class="ukr">зітханнями.</span> </p>
                <p class="ukrainian"> <span class="ukr">Раптом</span> <span class="ukr">все</span> <span
                        class="ukr">стихло</span> <span class="ukr">ніби</span> <span class="ukr">зачинилися</span>
                    <span class="ukr">двері.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Тиша.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">І</span> <span class="ukr">вдарив</span>
                    <span class="ukr">грім.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">З</span> <span class="ukr">туману,</span>
                    <span class="ukr">за</span> <span class="ukr">сотню</span>
                    <span class="ukr">метрів</span> <span class="ukr">від</span>
                    <span class="ukr">них,</span> <span class="ukr">виступив</span> <span class="ukr">Тиранозавр</span>
                    <span class="ukr">Рекс.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Господи</span> <span
                        class="ukr">Ісусе,</span>
                    <span class="ukr">—</span> <span class="ukr">прошепотів</span> <span class="ukr">Екельс.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Тсс!</span> </p>
                <p class="ukrainian"> <span class="ukr">Тиранозавр</span> <span class="ukr">наближався,</span> <span
                        class="ukr">широко</span> <span class="ukr">ступаючи</span>
                    <span class="ukr">величезними,</span> <span class="ukr">пружними</span> <span
                        class="ukr">ногами.</span>
                    <span class="ukr">Він</span> <span class="ukr">здіймався</span> <span class="ukr">на</span>
                    <span class="ukr">десяток</span> <span class="ukr">метрів</span> <span class="ukr">над</span> <span
                        class="ukr">половиною</span> <span class="ukr">дерев,</span>
                    <span class="ukr">величний</span> <span class="ukr">лихий</span> <span class="ukr">бог,</span> <span
                        class="ukr">перебираючи</span> <span class="ukr">своїми</span> <span
                        class="ukr">тендітними,</span>
                    <span class="ukr">як</span>
                    <span class="ukr">руки</span> <span class="ukr">годинникаря,</span> <span class="ukr">лапками</span>
                    <span class="ukr">коло</span>
                    <span class="ukr">самої</span> <span class="ukr">своєї</span>
                    <span class="ukr">сальної</span> <span class="ukr">рептилієвої</span> <span
                        class="ukr">грудної</span>
                    <span class="ukr">клітини.</span>
                    <span class="ukr">Кожна</span> <span class="ukr">нога</span>
                    <span class="ukr">—</span> <span class="ukr">поршень:</span>
                    <span class="ukr">півтони</span> <span class="ukr">білої</span> <span class="ukr">кістки,</span>
                    <span class="ukr">густо</span> <span class="ukr">переплетеної</span> <span
                        class="ukr">товстими</span>
                    <span class="ukr">мотузками</span> <span class="ukr">м'язів,</span>
                    <span class="ukr">обтягнутих</span> <span class="ukr">лискучою</span> <span
                        class="ukr">рінякуватою</span> <span class="ukr">шкірою</span> <span class="ukr">схожою</span>
                    <span class="ukr">на</span> <span class="ukr">кольчугу</span>
                    <span class="ukr">страшного</span> <span class="ukr">воїна.</span> <span class="ukr">Кожна</span>
                    <span class="ukr">гомілка</span> <span class="ukr">—</span>
                    <span class="ukr">тонна</span> <span class="ukr">м'яса,</span> <span class="ukr">кістки</span>
                    <span class="ukr">та</span> <span class="ukr">сталевої</span>
                    <span class="ukr">сіті.</span> <span class="ukr"></span> </p>
                <p class="ukrainian"> <span class="ukr">З</span> <span class="ukr">величезної</span> <span
                        class="ukr">грудної</span>
                    <span class="ukr">клітини,</span>
                    <span class="ukr">що</span> <span class="ukr">рухалася</span>
                    <span class="ukr">від</span> <span class="ukr">дихання,</span> <span class="ukr">звисали</span>
                    <span class="ukr">тендітні</span> <span class="ukr">ручки</span> <span class="ukr">з</span> <span
                        class="ukr">пазурями,</span> <span class="ukr">якими</span>
                    <span class="ukr">він</span> <span class="ukr">міг</span>
                    <span class="ukr">би</span> <span class="ukr">підхопити</span> <span class="ukr">й</span> <span
                        class="ukr">обмацати</span> <span class="ukr">людей</span>
                    <span class="ukr">як</span> <span class="ukr">іграшки,</span>
                    <span class="ukr">його</span> <span class="ukr">зміїна</span>
                    <span class="ukr">шия</span> <span class="ukr">вигиналася.</span> <span class="ukr">А</span>
                    <span class="ukr">сама</span> <span class="ukr">голова,</span> <span class="ukr">тонна</span>
                    <span class="ukr">вирізьбленого</span> <span class="ukr">каменю,</span> <span
                        class="ukr">легко</span>
                    <span class="ukr">злітала</span> <span class="ukr">вгору</span> <span class="ukr">до</span> <span
                        class="ukr">самого</span> <span class="ukr">неба.</span>
                    <span class="ukr">Він</span> <span class="ukr">роззявив</span> <span class="ukr">пащу,</span>
                    <span class="ukr">виставивши</span> <span class="ukr">частокіл</span> <span
                        class="ukr">зубів,</span>
                    <span class="ukr">схожих</span> <span class="ukr">на</span>
                    <span class="ukr">кинджали.</span> <span class="ukr">Очі</span> <span class="ukr">вертілися</span>
                    <span class="ukr">—</span> <span class="ukr">струсеві</span>
                    <span class="ukr">яйця,</span> <span class="ukr">—</span>
                    <span class="ukr">позбавлені</span> <span class="ukr">будь-якого</span> <span
                        class="ukr">виразу</span>
                    <span class="ukr">окрім</span> <span class="ukr">голоду.</span> <span class="ukr">Паща</span>
                    <span class="ukr">стулилася</span> <span class="ukr">в</span>
                    <span class="ukr">смертельному</span> <span class="ukr">вишкірі.</span> <span class="ukr">Він</span>
                    <span class="ukr">побіг.</span> <span class="ukr">Його</span>
                    <span class="ukr">тазові</span> <span class="ukr">кістки</span> <span class="ukr">трощили</span>
                    <span class="ukr">обабіч</span> <span class="ukr">дерева</span> <span class="ukr">й</span> <span
                        class="ukr">кущі,</span> <span class="ukr">пазурясті</span>
                    <span class="ukr">лапи</span> <span class="ukr">виривали</span> <span class="ukr">сиру</span>
                    <span class="ukr">землю,</span> <span class="ukr">залишаючи</span> <span class="ukr">сліди</span>
                    <span class="ukr">півметрової</span> <span class="ukr">глибини</span> <span class="ukr">там,</span>
                    <span class="ukr">де</span> <span class="ukr">він</span>
                    <span class="ukr">ступав</span> <span class="ukr">всією</span> <span class="ukr">своєю</span> <span
                        class="ukr">вагою.</span> <span class="ukr">Він</span> <span class="ukr">біг</span> <span
                        class="ukr">ніби</span> <span class="ukr">ковзав</span> <span class="ukr">—</span> <span
                        class="ukr">легкими</span> <span class="ukr">балетними</span>
                    <span class="ukr">рухами,</span> <span class="ukr">навіть</span> <span class="ukr">занадто</span>
                    <span class="ukr">врівноваженими</span> <span class="ukr">та</span> <span
                        class="ukr">гармонійними</span>
                    <span class="ukr">для</span> <span class="ukr">своїх</span>
                    <span class="ukr">десяти</span> <span class="ukr">тонн.</span> <span class="ukr">Він</span> <span
                        class="ukr">легко</span> <span class="ukr">вибіг</span> <span class="ukr">на</span> <span
                        class="ukr">освітлену</span>
                    <span class="ukr">сонцем</span> <span class="ukr">місцину,</span> <span class="ukr">красиві</span>
                    <span class="ukr">рептилієві</span> <span class="ukr">руки</span> <span
                        class="ukr">перебирали</span>
                    <span class="ukr">пальцями</span> <span class="ukr">повітря.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Господи</span> <span
                        class="ukr">мій!</span> <span class="ukr">—</span> <span class="ukr">Губи</span> <span
                        class="ukr">Екельса</span>
                    <span class="ukr">затремтіли.</span> <span class="ukr">—</span> <span class="ukr">Та</span> <span
                        class="ukr">він</span> <span class="ukr">міг</span> <span class="ukr">би</span> <span
                        class="ukr">й</span> <span class="ukr">до</span> <span class="ukr">Місяця</span> <span
                        class="ukr">дістати!</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Тсс!</span> <span
                        class="ukr">—</span>
                    <span class="ukr">Сердито</span> <span class="ukr">шарпнувся</span> <span class="ukr">Тревіс.</span>
                    <span class="ukr">—</span> <span class="ukr">Він</span> <span class="ukr">нас</span> <span
                        class="ukr">іще</span>
                    <span class="ukr">не</span> <span class="ukr">побачив.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Та</span> <span
                        class="ukr">його</span>
                    <span class="ukr">неможливо</span> <span class="ukr">вбити,</span>
                    <span class="ukr">—</span> <span class="ukr">тихо</span>
                    <span class="ukr">промовив,</span> <span class="ukr">наче</span> <span class="ukr">виніс</span>
                    <span class="ukr">вирок</span> <span class="ukr">Екельс.</span>
                    <span class="ukr">Ніби</span> <span class="ukr">заперечень</span> <span class="ukr">не</span>
                    <span class="ukr">могло</span> <span class="ukr">й</span>
                    <span class="ukr">бути.</span> <span class="ukr">Він</span>
                    <span class="ukr">розглянув</span> <span class="ukr">свідчення,</span> <span class="ukr">і</span>
                    <span class="ukr">тепер</span> <span class="ukr">це</span>
                    <span class="ukr">було</span> <span class="ukr">його</span>
                    <span class="ukr">добре</span> <span class="ukr">виваженим</span> <span
                        class="ukr">судженням.</span>
                    <span class="ukr">Гвинтівка</span> <span class="ukr">в</span> <span class="ukr">його</span> <span
                        class="ukr">руках</span> <span class="ukr">здалася</span> <span class="ukr">йому</span>
                    <span class="ukr">пістолетиком</span> <span class="ukr">для</span> <span
                        class="ukr">пістонів.</span>
                    <span class="ukr">—</span> <span class="ukr">Ми</span> <span class="ukr">були</span> <span
                        class="ukr">дурнями,</span>
                    <span class="ukr">що</span> <span class="ukr">прилетіли</span> <span class="ukr">сюди.</span>
                    <span class="ukr">Це</span> <span class="ukr">неможливо.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Замовкніть,</span>
                    <span class="ukr">—</span> <span class="ukr">засичав</span>
                    <span class="ukr">Тревіс.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Жахіття.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Повертайте</span> <span
                        class="ukr">назад,</span>
                    <span class="ukr">—</span> <span class="ukr">скомандував</span> <span class="ukr">Тревіс.</span>
                    <span class="ukr">—</span> <span class="ukr">Ідіть</span> <span class="ukr">тихо</span> <span
                        class="ukr">до</span>
                    <span class="ukr">Машини.</span> <span class="ukr">Ми</span> <span class="ukr">повернемо</span>
                    <span class="ukr">вам</span> <span class="ukr">половину</span> <span class="ukr">вашої</span>
                    <span class="ukr">оплати.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Я</span> <span class="ukr">гадки</span> <span
                        class="ukr">не</span>
                    <span class="ukr">мав,</span> <span class="ukr">що</span> <span class="ukr">воно</span> <span
                        class="ukr">таке</span> <span class="ukr">здорове,</span> <span class="ukr">—</span> <span
                        class="ukr">відповів</span> <span class="ukr">Екельс.</span>
                    <span class="ukr">—</span> <span class="ukr">Я</span> <span class="ukr">не</span> <span
                        class="ukr">розрахував,</span>
                    <span class="ukr">і</span> <span class="ukr">все.</span>
                    <span class="ukr">А</span> <span class="ukr">зараз</span>
                    <span class="ukr">я</span> <span class="ukr">хочу</span>
                    <span class="ukr">геть</span> <span class="ukr">звідси.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Він</span> <span
                        class="ukr">нас</span>
                    <span class="ukr">бачить.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">У</span> <span
                        class="ukr">нього</span>
                    <span class="ukr">на</span> <span class="ukr">грудині</span> <span class="ukr">червона</span> <span
                        class="ukr">пляма!</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Громоящір</span>
                    <span class="ukr">випростався.</span> <span class="ukr">Його</span> <span
                        class="ukr">броньоване</span>
                    <span class="ukr">тіло</span> <span class="ukr">вилискувало</span> <span class="ukr">тисячею</span>
                    <span class="ukr">зелених</span>
                    <span class="ukr">бляшок.</span> <span class="ukr">З</span>
                    <span class="ukr">бляшок,</span> <span class="ukr">вкритих</span> <span class="ukr">кіркою</span>
                    <span class="ukr">слизу,</span> <span class="ukr">ішла</span>
                    <span class="ukr">пара.</span> <span class="ukr">В</span>
                    <span class="ukr">слизові</span> <span class="ukr">вошкалася</span> <span class="ukr">дрібна</span>
                    <span class="ukr">комашня,</span> <span class="ukr">від</span> <span class="ukr">чого</span> <span
                        class="ukr">все</span> <span class="ukr">його</span> <span class="ukr">тіло</span> <span
                        class="ukr">ніби</span>
                    <span class="ukr">тремтіло</span> <span class="ukr">та</span> <span class="ukr">ходило</span> <span
                        class="ukr">хвилями,</span>
                    <span class="ukr">навіть</span> <span class="ukr">коли</span>
                    <span class="ukr">Потвора</span> <span class="ukr">не</span>
                    <span class="ukr">рухалася.</span> <span class="ukr">Звір</span> <span class="ukr">видихнув.</span>
                    <span class="ukr">Сморід</span> <span class="ukr">сирої</span> <span class="ukr">плоті</span> <span
                        class="ukr">полетів</span> <span class="ukr">на</span> <span class="ukr">незайманий</span> <span
                        class="ukr">ліс.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Заберіть</span> <span
                        class="ukr">мене</span>
                    <span class="ukr">звідси,</span> <span class="ukr">—</span>
                    <span class="ukr">обізвався</span> <span class="ukr">Екельс.</span> <span class="ukr">—</span> <span
                        class="ukr">Такого</span> <span class="ukr">ще</span> <span class="ukr">ніколи</span> <span
                        class="ukr">не</span> <span class="ukr">було.</span> <span class="ukr">Я</span> <span
                        class="ukr">завжди</span>
                    <span class="ukr">був</span> <span class="ukr">певен,</span> <span class="ukr">що</span> <span
                        class="ukr">залишуся</span> <span class="ukr">живим.</span>
                    <span class="ukr">Я</span> <span class="ukr">мав</span> <span class="ukr">добрих</span> <span
                        class="ukr">провідників,</span> <span class="ukr">добрі</span> <span class="ukr">сафарі</span>
                    <span class="ukr">та</span> <span class="ukr">гарантовану</span> <span class="ukr">безпеку.</span>
                    <span class="ukr">Цього</span>
                    <span class="ukr">разу</span> <span class="ukr">я</span>
                    <span class="ukr">не</span> <span class="ukr">розрахував.</span> <span class="ukr">Я</span>
                    <span class="ukr">зустрівся</span> <span class="ukr">з</span>
                    <span class="ukr">рівнею</span> <span class="ukr">собі,</span> <span class="ukr">і</span> <span
                        class="ukr">я</span>
                    <span class="ukr">це</span> <span class="ukr">визнаю.</span> <span class="ukr">Для</span> <span
                        class="ukr">мене</span> <span class="ukr">це</span> <span class="ukr">занадто,</span> <span
                        class="ukr">щоб</span>
                    <span class="ukr">на</span> <span class="ukr">таке</span>
                    <span class="ukr">приставати.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Не</span> <span
                        class="ukr">біжіть,</span> <span class="ukr">—</span> <span class="ukr">скомандував</span>
                    <span class="ukr">Лесперанс.</span> <span class="ukr">Спокійно</span> <span
                        class="ukr">повертайтеся.</span> <span class="ukr">Заховайтеся</span> <span class="ukr">в</span>
                    <span class="ukr">Машині.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Так.</span>
                    <span class="ukr">—</span> <span class="ukr">Екельс,</span>
                    <span class="ukr">здавалося,</span> <span class="ukr">занімів.</span> <span class="ukr">Він</span>
                    <span class="ukr">поглянув</span> <span class="ukr">собі</span> <span class="ukr">на</span> <span
                        class="ukr">ноги,</span> <span class="ukr">ніби</span> <span class="ukr">наказуючи</span> <span
                        class="ukr">їм</span>
                    <span class="ukr">рухатися</span> <span class="ukr">і</span>
                    <span class="ukr">прохрипів</span> <span class="ukr">щось</span> <span
                        class="ukr">безпорадне.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Екельсе!</span> </p>
                <p class="ukrainian"> <span class="ukr">Кліпаючи</span> <span class="ukr">очима,</span>
                    <span class="ukr">він</span> <span class="ukr">прочовгав</span> <span class="ukr">кілька</span>
                    <span class="ukr">незграбних</span> <span class="ukr">кроків.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Не</span> <span
                        class="ukr">туди!</span>
                </p>
                <p class="ukrainian"> <span class="ukr">З</span> <span class="ukr">першим</span> <span
                        class="ukr">же</span>
                    <span class="ukr">рухом</span> <span class="ukr">Екельса,</span> <span class="ukr">Потвора</span>
                    <span class="ukr">з</span> <span class="ukr">жахливим</span>
                    <span class="ukr">виском</span> <span class="ukr">кинулася</span> <span class="ukr">вперед.</span>
                    <span class="ukr">За</span> <span class="ukr">чотири</span>
                    <span class="ukr">секунди</span> <span class="ukr">вона</span> <span class="ukr">подолала</span>
                    <span class="ukr">сотню</span> <span class="ukr">метрів.</span> <span class="ukr">Мисливці</span>
                    <span class="ukr">рвучко</span> <span class="ukr">скинули</span> <span class="ukr">вгору</span>
                    <span class="ukr">зброю</span> <span class="ukr">й</span>
                    <span class="ukr">відкрили</span> <span class="ukr">вогонь.</span> <span class="ukr">Їх</span> <span
                        class="ukr">накрило</span> <span class="ukr">цілою</span>
                    <span class="ukr">хуртовиною</span> <span class="ukr">смороду,</span> <span class="ukr">слизу</span>
                    <span class="ukr">та</span> <span class="ukr">древньої</span>
                    <span class="ukr">крові,</span> <span class="ukr">що</span>
                    <span class="ukr">вилетіла</span> <span class="ukr">з</span>
                    <span class="ukr">пащі</span> <span class="ukr">тварини.</span> <span class="ukr">Потвора</span>
                    <span class="ukr">заревіла,</span> <span class="ukr">зуби</span> <span class="ukr">зблиснули</span>
                    <span class="ukr">на</span> <span class="ukr">сонці.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Не</span> <span class="ukr">озираючись,</span> <span
                        class="ukr">Екельс</span>
                    <span class="ukr">сліпо</span>
                    <span class="ukr">дійшов</span> <span class="ukr">до</span>
                    <span class="ukr">краю</span> <span class="ukr">Стежки,</span> <span class="ukr">гвинтівка</span>
                    <span class="ukr">гойдалася</span> <span class="ukr">на</span> <span class="ukr">передпліччі.</span>
                    <span class="ukr">Він</span> <span class="ukr">зійшов</span>
                    <span class="ukr">зі</span> <span class="ukr">Стежки</span>
                    <span class="ukr">і</span> <span class="ukr">пішов</span>
                    <span class="ukr">далі,</span> <span class="ukr">навіть</span> <span class="ukr">не</span> <span
                        class="ukr">помітивши</span> <span class="ukr">цього,</span>
                    <span class="ukr">в</span> <span class="ukr">глиб</span>
                    <span class="ukr">джунглів.</span> <span class="ukr">Вгрузаючи</span> <span class="ukr">в</span>
                    <span class="ukr">зелений</span> <span class="ukr">мох,</span>
                    <span class="ukr">ноги</span> <span class="ukr">самі</span>
                    <span class="ukr">кудись</span> <span class="ukr">його</span>
                    <span class="ukr">несли,</span> <span class="ukr">а</span>
                    <span class="ukr">сам</span> <span class="ukr">він</span>
                    <span class="ukr">почувався</span> <span class="ukr">самотнім</span> <span class="ukr">і</span>
                    <span class="ukr">геть</span> <span class="ukr">відірваним</span>
                    <span class="ukr">від</span> <span class="ukr">подій,</span>
                    <span class="ukr">що</span> <span class="ukr">розгорталися</span> <span class="ukr">позаду.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Знову</span> <span class="ukr">гримнули</span>
                    <span class="ukr">гвинтівки.</span> <span class="ukr">Їхній</span> <span class="ukr">звук</span>
                    <span class="ukr">загубився</span> <span class="ukr">у</span> <span class="ukr">вереску</span> <span
                        class="ukr">та</span> <span class="ukr">громоподібному</span> <span class="ukr">гарчанні</span>
                    <span class="ukr">ящіра.</span>
                    <span class="ukr">Величезний</span> <span class="ukr">хвіст</span> <span class="ukr">рептилії</span>
                    <span class="ukr">як</span> <span class="ukr">важіль</span>
                    <span class="ukr">злітав</span> <span class="ukr">то</span>
                    <span class="ukr">вгору,</span> <span class="ukr">то</span>
                    <span class="ukr">метляв</span> <span class="ukr">в</span>
                    <span class="ukr">усі</span> <span class="ukr">боки.</span>
                    <span class="ukr">Дерева</span> <span class="ukr">вибухали</span> <span class="ukr">хмарами</span>
                    <span class="ukr">листя</span> <span class="ukr">та</span>
                    <span class="ukr">друзок</span> <span class="ukr">від</span>
                    <span class="ukr">стовбурів.</span> <span class="ukr">Потвора</span> <span
                        class="ukr">шарпала</span>
                    <span class="ukr">своїми</span> <span class="ukr">тендітними</span> <span
                        class="ukr">ручками,</span>
                    <span class="ukr">намагаючись</span> <span class="ukr">дістати</span> <span class="ukr">ними</span>
                    <span class="ukr">до</span> <span class="ukr">людей,</span>
                    <span class="ukr">щоб</span> <span class="ukr">розірвати</span> <span class="ukr">їх</span>
                    <span class="ukr">на</span> <span class="ukr">шматки,</span>
                    <span class="ukr">почавити</span> <span class="ukr">їх</span>
                    <span class="ukr">як</span> <span class="ukr">ягоди,</span>
                    <span class="ukr">запхати</span> <span class="ukr">їх</span>
                    <span class="ukr">собі</span> <span class="ukr">в</span>
                    <span class="ukr">зуби</span> <span class="ukr">і</span>
                    <span class="ukr">далі</span> <span class="ukr">в</span>
                    <span class="ukr">горлянку,</span> <span class="ukr">що</span> <span class="ukr">досі</span> <span
                        class="ukr">верещала.</span> <span class="ukr">Її</span>
                    <span class="ukr">очі</span> <span class="ukr">розміром</span> <span class="ukr">з</span> <span
                        class="ukr">брилу</span> <span class="ukr">були</span> <span class="ukr">на</span> <span
                        class="ukr">одному</span> <span class="ukr">рівні</span> <span class="ukr">з</span> <span
                        class="ukr">мисливцями</span> <span class="ukr">і</span>
                    <span class="ukr">вони</span> <span class="ukr">бачили</span>
                    <span class="ukr">в</span> <span class="ukr">тих</span> <span class="ukr">очах</span> <span
                        class="ukr">власне</span> <span class="ukr">відображення.</span> <span class="ukr">Вони</span>
                    <span class="ukr">вистрілили</span>
                    <span class="ukr">в</span> <span class="ukr">ті</span> <span class="ukr">металеві</span> <span
                        class="ukr">повіки</span>
                    <span class="ukr">і</span> <span class="ukr">в</span> <span class="ukr">блискучо-чорну</span> <span
                        class="ukr">райдужну</span> <span class="ukr">оболонку.</span> </p>
                <p class="ukrainian"> <span class="ukr">Неначе</span> <span class="ukr">кам'яний</span>
                    <span class="ukr">ідол,</span> <span class="ukr">неначе</span> <span class="ukr">гірська</span>
                    <span class="ukr">лавина</span> <span class="ukr">Тиранозавр</span> <span class="ukr">упав.</span>
                    <span class="ukr">Ревучи,</span> <span class="ukr">він</span>
                    <span class="ukr">хапався</span> <span class="ukr">за</span>
                    <span class="ukr">дерева,</span> <span class="ukr">тягнув</span> <span class="ukr">їх</span> <span
                        class="ukr">за</span> <span class="ukr">собою.</span> <span class="ukr">Він</span> <span
                        class="ukr">понівечив</span>
                    <span class="ukr">та</span> <span class="ukr">розірвав</span>
                    <span class="ukr">металеву</span> <span class="ukr">Стежку.</span> <span class="ukr">Люди</span>
                    <span class="ukr">кинулися</span> <span class="ukr">від</span> <span class="ukr">нього</span> <span
                        class="ukr">назад.</span> <span class="ukr">Тіло</span> <span class="ukr">вдарилося</span> <span
                        class="ukr">об</span>
                    <span class="ukr">землю,</span> <span class="ukr">десять</span> <span class="ukr">тонн</span> <span
                        class="ukr">холодної</span> <span class="ukr">кам'яної</span>
                    <span class="ukr">плоті.</span> <span class="ukr">Гвинтівки</span> <span
                        class="ukr">вистрілили.</span>
                    <span class="ukr">Потвора</span> <span class="ukr">шмагнула</span>
                    <span class="ukr">своїм</span> <span class="ukr">броньованим</span> <span
                        class="ukr">хвостом,</span>
                    <span class="ukr">клацнула</span>
                    <span class="ukr">зміїними</span> <span class="ukr">щелепами</span> <span class="ukr">і</span> <span
                        class="ukr">завмерла.</span> <span class="ukr">Фонтан</span>
                    <span class="ukr">крові</span> <span class="ukr">пирснув</span> <span class="ukr">з</span> <span
                        class="ukr">її</span> <span class="ukr">горла.</span> <span class="ukr">Десь</span> <span
                        class="ukr">усередині</span>
                    <span class="ukr">лопнув</span> <span class="ukr">міхур</span> <span class="ukr">з</span> <span
                        class="ukr">рідиною.</span> <span class="ukr">Мисливців</span> <span class="ukr">облило</span>
                    <span class="ukr">бридким</span> <span class="ukr">струменем.</span> <span class="ukr">Вони</span>
                    <span class="ukr">стояли,</span> <span class="ukr">вилискуючи</span> <span class="ukr">від</span>
                    <span class="ukr">червоної</span> <span class="ukr">крові.</span> </p>
                <p class="ukrainian"> <span class="ukr">Грім</span> <span class="ukr">вщух.</span> </p>
                <p class="ukrainian"> <span class="ukr">В</span> <span class="ukr">джунглях</span> <span
                        class="ukr">запала</span>
                    <span class="ukr">тиша.</span> <span class="ukr">Зелена</span> <span class="ukr">тиша</span> <span
                        class="ukr">після</span> <span class="ukr">лавини.</span>
                    <span class="ukr">Після</span> <span class="ukr">нічного</span> <span class="ukr">жаху</span>
                    <span class="ukr">—</span> <span class="ukr">світанок.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Біллінгз</span>
                    <span class="ukr">з</span> <span class="ukr">Крамером</span>
                    <span class="ukr">сиділи</span> <span class="ukr">посеред</span> <span class="ukr">Стежки</span>
                    <span class="ukr">й</span> <span class="ukr">блювали.</span>
                    <span class="ukr">Тревіс</span> <span class="ukr">з</span>
                    <span class="ukr">Лесперансем</span> <span class="ukr">стояли</span> <span class="ukr">з</span>
                    <span class="ukr">гвинтівками,</span> <span class="ukr">з</span>
                    <span class="ukr">яких</span> <span class="ukr">ішов</span>
                    <span class="ukr">дим,</span> <span class="ukr">і</span>
                    <span class="ukr">безупину</span> <span class="ukr">лаялися.</span> </p>
                <p class="ukrainian"> <span class="ukr">Екельс</span> <span class="ukr">тим</span> <span
                        class="ukr">часом</span> <span class="ukr">вже</span> <span class="ukr">відшукав</span> <span
                        class="ukr">дорогу</span>
                    <span class="ukr">назад</span> <span class="ukr">до</span>
                    <span class="ukr">Стежки</span> <span class="ukr">і</span>
                    <span class="ukr">заліз</span> <span class="ukr">до</span>
                    <span class="ukr">Машини</span> <span class="ukr">Часу,</span> <span class="ukr">і</span> <span
                        class="ukr">тепер</span> <span class="ukr">лежав</span> <span class="ukr">у</span> <span
                        class="ukr">ній</span>
                    <span class="ukr">долілиць</span> <span class="ukr">і</span> <span class="ukr">тремтів.</span> </p>
                <p class="ukrainian"> <span class="ukr">Зайшов</span> <span class="ukr">Тревіс,</span>
                    <span class="ukr">кинув</span> <span class="ukr">поглядом</span> <span class="ukr">на</span> <span
                        class="ukr">Екельса,</span> <span class="ukr">дістав</span>
                    <span class="ukr">шмат</span> <span class="ukr">бавовняної</span> <span class="ukr">марлі</span>
                    <span class="ukr">з</span> <span class="ukr">металевої</span>
                    <span class="ukr">скриньки</span> <span class="ukr">і</span>
                    <span class="ukr">повернувся</span> <span class="ukr">до</span> <span class="ukr">інших,</span>
                    <span class="ukr">які</span> <span class="ukr">досі</span> <span class="ukr">сиділи</span> <span
                        class="ukr">на</span>
                    <span class="ukr">Стежці.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Повитирайтеся.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Вони</span> <span class="ukr">повитирали</span> <span
                        class="ukr">кров</span>
                    <span class="ukr">зі</span> <span class="ukr">своїх</span>
                    <span class="ukr">шоломів.</span> <span class="ukr">Тепер</span> <span class="ukr">і</span> <span
                        class="ukr">вони</span> <span class="ukr">почали</span> <span class="ukr">лаятися.</span> <span
                        class="ukr">Потвора</span>
                    <span class="ukr">лежала</span> <span class="ukr">пагорбом</span> <span class="ukr">суцільної</span>
                    <span class="ukr">плоті.</span>
                    <span class="ukr">В</span> <span class="ukr">ній</span> <span class="ukr">ще</span> <span
                        class="ukr">чулися</span>
                    <span class="ukr">зітхання</span> <span class="ukr">та</span> <span class="ukr">мимрення,</span>
                    <span class="ukr">неначе</span>
                    <span class="ukr">помирали</span> <span class="ukr">найвіддаленіші</span> <span
                        class="ukr">її</span>
                    <span class="ukr">куточки.</span> <span class="ukr">Органи</span> <span
                        class="ukr">відмовляли.</span>
                    <span class="ukr">Востаннє</span> <span class="ukr">текли</span>
                    <span class="ukr">життєві</span> <span class="ukr">соки.</span> <span class="ukr">Від</span> <span
                        class="ukr">порожнини</span> <span class="ukr">до</span>
                    <span class="ukr">міхура,</span> <span class="ukr">далі</span> <span class="ukr">до</span> <span
                        class="ukr">селезінки</span> <span class="ukr">—</span> <span class="ukr">все</span> <span
                        class="ukr">відключалося</span>
                    <span class="ukr">і</span> <span class="ukr">навіки</span>
                    <span class="ukr">завмирало.</span> <span class="ukr">Здавалося,</span> <span
                        class="ukr">ніби</span>
                    <span class="ukr">стоїш</span> <span class="ukr">коло</span>
                    <span class="ukr">розбитого</span> <span class="ukr">паровоза,</span> <span class="ukr">або</span>
                    <span class="ukr">парової</span> <span class="ukr">машини</span> <span class="ukr">під</span> <span
                        class="ukr">час</span> <span class="ukr">її</span> <span class="ukr">вихолодження,</span> <span
                        class="ukr">коли</span> <span class="ukr">всі</span> <span class="ukr">її</span> <span
                        class="ukr">клапани</span> <span class="ukr">відкрито,</span> <span class="ukr">засувки</span>
                    <span class="ukr">повністю</span> <span class="ukr">піднято.</span> <span class="ukr">Кістки</span>
                    <span class="ukr">тріщали:</span> <span class="ukr">багатотонна</span> <span class="ukr">вага</span>
                    <span class="ukr">її</span> <span class="ukr">власної</span>
                    <span class="ukr">плоті,</span> <span class="ukr">втративши</span> <span
                        class="ukr">рівновагу</span>
                    <span class="ukr">і</span> <span class="ukr">ставши</span> <span class="ukr">вагою</span>
                    <span class="ukr">мертвою,</span> <span class="ukr">зламала</span> <span
                        class="ukr">затиснуті</span>
                    <span class="ukr">під</span> <span class="ukr">нею</span>
                    <span class="ukr">тендітні</span> <span class="ukr">передні</span> <span class="ukr">лапки.</span>
                    <span class="ukr">М'ясо</span> <span class="ukr">дрижало</span> <span class="ukr">й</span> <span
                        class="ukr">осідало.</span> </p>
                <p class="ukrainian"> <span class="ukr">Ще</span> <span class="ukr">один</span> <span
                        class="ukr">хрускіт.</span> <span class="ukr">Велетенська</span> <span
                        class="ukr">гілляка</span>
                    <span class="ukr">над</span> <span class="ukr">ними,</span> <span class="ukr">не</span> <span
                        class="ukr">витримавши</span> <span class="ukr">болотних</span> <span
                        class="ukr">наростів,</span>
                    <span class="ukr">тріснула</span> <span class="ukr">і</span> <span class="ukr">впала</span> <span
                        class="ukr">на</span> <span class="ukr">мертву</span>
                    <span class="ukr">тварину</span>
                    <span class="ukr">і</span> <span class="ukr">розтрощилася,</span> <span class="ukr">остаточно</span>
                    <span class="ukr">завершивши</span> <span class="ukr">справу.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ось,</span> <span
                        class="ukr">—</span>
                    <span class="ukr">Лесперанс,</span>
                    <span class="ukr">звірився</span> <span class="ukr">з</span>
                    <span class="ukr">годинником.</span> <span class="ukr">—</span> <span class="ukr">Саме</span> <span
                        class="ukr">вчасно.</span> <span class="ukr">Це</span> <span class="ukr">величезне</span> <span
                        class="ukr">дерево</span>
                    <span class="ukr">за</span> <span class="ukr">розкладом</span> <span class="ukr">і</span> <span
                        class="ukr">мало</span> <span class="ukr">впасти</span> <span class="ukr">й</span> <span
                        class="ukr">убити</span> <span class="ukr">тварину.</span> <span class="ukr">—</span> <span
                        class="ukr">Він</span> <span class="ukr">поглянув</span>
                    <span class="ukr">на</span> <span class="ukr">мисливців.</span> <span class="ukr">—</span>
                    <span class="ukr">Ви</span> <span class="ukr">хочете</span>
                    <span class="ukr">зробити</span> <span class="ukr">трофейні</span> <span
                        class="ukr">світлини?</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Що?</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Не</span> <span
                        class="ukr">можна</span>
                    <span class="ukr">брати</span> <span class="ukr">трофей</span>
                    <span class="ukr">з</span> <span class="ukr">собою</span>
                    <span class="ukr">назад</span> <span class="ukr">до</span>
                    <span class="ukr">Майбутнього.</span> <span class="ukr">Туша</span> <span class="ukr">має</span>
                    <span class="ukr">залишатися</span> <span class="ukr">тут,</span>
                    <span class="ukr">де</span> <span class="ukr">вона</span>
                    <span class="ukr">і</span> <span class="ukr">мала</span>
                    <span class="ukr">бути</span> <span class="ukr">після</span>
                    <span class="ukr">загибелі,</span> <span class="ukr">щоб</span> <span class="ukr">комахи,</span>
                    <span class="ukr">птахи</span> <span class="ukr">та</span> <span class="ukr">бактерії</span> <span
                        class="ukr">могли</span>
                    <span class="ukr">мати</span> <span class="ukr">з</span>
                    <span class="ukr">неї</span> <span class="ukr">поживу,</span>
                    <span class="ukr">як</span> <span class="ukr">їм</span> <span class="ukr">і</span> <span
                        class="ukr">належить.</span> <span class="ukr">Рівновага</span> <span class="ukr">всюди.</span>
                    <span class="ukr">Туша</span> <span class="ukr">залишається.</span> <span class="ukr">Але</span>
                    <span class="ukr">ми</span> <span class="ukr">можемо</span>
                    <span class="ukr">зробити</span> <span class="ukr">знімок,</span> <span class="ukr">на</span> <span
                        class="ukr">якому</span> <span class="ukr">ви</span> <span class="ukr">поряд</span> <span
                        class="ukr">зі</span>
                    <span class="ukr">здобиччю.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Двоє</span> <span
                        class="ukr">мисливців</span> <span class="ukr">спробували</span> <span
                        class="ukr">зібратися</span>
                    <span class="ukr">з</span> <span class="ukr">думками,</span> <span class="ukr">але</span>
                    <span class="ukr">здалися</span> <span class="ukr">і</span>
                    <span class="ukr">захитали</span> <span class="ukr">головами.</span> </p>
                <p class="ukrainian"> <span class="ukr">Вони</span> <span class="ukr">дали</span> <span
                        class="ukr">себе</span> <span class="ukr">довести</span>
                    <span class="ukr">металевою</span> <span class="ukr">Стежкою</span> <span class="ukr">до</span>
                    <span class="ukr">Машини,</span> <span class="ukr">втомлено</span>
                    <span class="ukr">всілися</span> <span class="ukr">у</span>
                    <span class="ukr">м'які</span> <span class="ukr">крісла</span> <span class="ukr">і</span> <span
                        class="ukr">вже</span> <span class="ukr">звідти</span> <span class="ukr">уважно</span> <span
                        class="ukr">розглядали</span>
                    <span class="ukr">убиту</span> <span class="ukr">Потвору.</span> <span class="ukr">Неживий</span>
                    <span class="ukr">пагорб,</span> <span class="ukr">на</span>
                    <span class="ukr">якому</span> <span class="ukr">вже</span>
                    <span class="ukr">знайшли</span> <span class="ukr">собі</span> <span class="ukr">роботу</span> <span
                        class="ukr">дивні</span> <span class="ukr">рептилієподібні</span> <span
                        class="ukr">птахи,</span>
                    <span class="ukr">золотисті</span>
                    <span class="ukr">комахи,</span> <span class="ukr">що</span>
                    <span class="ukr">роїлися</span> <span class="ukr">на</span>
                    <span class="ukr">латах,</span> <span class="ukr">з</span>
                    <span class="ukr">яких</span> <span class="ukr">ішов</span>
                    <span class="ukr">пар.</span> </p>
                <p class="ukrainian"> <span class="ukr">З</span> <span class="ukr">підлоги</span> <span
                        class="ukr">Машини</span> <span class="ukr">Часу</span> <span class="ukr">почулося</span> <span
                        class="ukr">якесь</span>
                    <span class="ukr">шарудіння,</span> <span class="ukr">від</span> <span class="ukr">якого</span>
                    <span class="ukr">вони</span> <span class="ukr">заціпеніли.</span>
                    <span class="ukr">Там</span> <span class="ukr">сидів</span>
                    <span class="ukr">Екельс</span> <span class="ukr">і</span>
                    <span class="ukr">дрижав.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Вибачте,</span>
                    <span class="ukr">—</span> <span class="ukr">нарешті</span>
                    <span class="ukr">спромігся</span> <span class="ukr">він.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Піднімайтеся,</span>
                    <span class="ukr">—</span> <span class="ukr">вигукнув</span>
                    <span class="ukr">Тревіс.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Екельс</span> <span class="ukr">піднявся.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Виходьте</span> <span
                        class="ukr">на</span> <span class="ukr">Стежку.</span> <span class="ukr">Ви,</span> <span
                        class="ukr">один,</span> <span class="ukr">—</span> <span class="ukr">сказав</span> <span
                        class="ukr">Тревіс.</span> <span class="ukr">Він</span> <span class="ukr">націлив</span> <span
                        class="ukr">на</span> <span class="ukr">Екельса</span> <span class="ukr">гвинтівку.</span> <span
                        class="ukr">—</span>
                    <span class="ukr">Ви</span> <span class="ukr">не</span> <span class="ukr">повертаєтеся</span> <span
                        class="ukr">назад</span> <span class="ukr">Машиною</span>
                    <span class="ukr">Часу.</span> <span class="ukr">Ми</span>
                    <span class="ukr">залишаємо</span> <span class="ukr">вас</span> <span class="ukr">тут!</span> </p>
                <p class="ukrainian"> <span class="ukr">Лесперанс</span> <span class="ukr">схопив</span> <span
                        class="ukr">Тревіса</span>
                    <span class="ukr">за</span> <span class="ukr">руку,</span>
                    <span class="ukr">—</span> <span class="ukr">Зачекай...</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Не</span> <span
                        class="ukr">втручайся!</span> <span class="ukr">—</span>
                    <span class="ukr">Тревіс</span> <span class="ukr">скинув</span> <span class="ukr">його</span> <span
                        class="ukr">руку</span> <span class="ukr">зі</span> <span class="ukr">своєї.</span> <span
                        class="ukr">—</span>
                    <span class="ukr">Цей</span> <span class="ukr">курвин</span> <span class="ukr">син</span> <span
                        class="ukr">нас</span> <span class="ukr">замалим</span> <span class="ukr">не</span> <span
                        class="ukr">повбивав.</span> <span class="ukr">Але</span>
                    <span class="ukr">це</span> <span class="ukr">ще</span> <span class="ukr">не</span> <span
                        class="ukr">все.</span>
                    <span class="ukr">Дідько,</span> <span class="ukr">ні!</span> <span class="ukr">Його</span> <span
                        class="ukr">черевики!</span>
                    <span class="ukr">Поглянь</span> <span class="ukr">на</span>
                    <span class="ukr">них!</span> <span class="ukr">Він</span>
                    <span class="ukr">втік</span> <span class="ukr">зі</span>
                    <span class="ukr">стежки.</span> <span class="ukr">Господи</span> <span class="ukr">мій,</span>
                    <span class="ukr">нам</span> <span class="ukr">кінець!</span>
                    <span class="ukr">Бог</span> <span class="ukr">його</span>
                    <span class="ukr">зна</span> <span class="ukr">який</span>
                    <span class="ukr">штраф</span> <span class="ukr">доведеться</span> <span
                        class="ukr">сплатити!</span>
                    <span class="ukr">Десятки</span>
                    <span class="ukr">тисяч</span> <span class="ukr">доларів</span> <span class="ukr">страховки!</span>
                    <span class="ukr">Ми</span>
                    <span class="ukr">гарантували,</span> <span class="ukr">що</span> <span class="ukr">ніхто</span>
                    <span class="ukr">не</span> <span class="ukr">зійде</span> <span class="ukr">зі</span> <span
                        class="ukr">Стежки,</span> <span class="ukr">а</span> <span class="ukr">він</span> <span
                        class="ukr">зійшов.</span> <span class="ukr">От</span> <span class="ukr">же</span> <span
                        class="ukr">ж</span>
                    <span class="ukr">клятий</span> <span class="ukr">дурень!</span>
                    <span class="ukr">Я</span> <span class="ukr">маю</span> <span class="ukr">звітувати</span> <span
                        class="ukr">Урядові.</span> <span class="ukr">А</span> <span class="ukr">вони</span> <span
                        class="ukr">можуть</span> <span class="ukr">відкликати</span> <span class="ukr">дозвіл</span>
                    <span class="ukr">на</span> <span class="ukr">подорожі.</span> <span class="ukr">Одному</span>
                    <span class="ukr">Богу</span> <span class="ukr">відомо,</span> <span class="ukr">що</span> <span
                        class="ukr">він</span> <span class="ukr">зробив</span> <span class="ukr">з</span> <span
                        class="ukr">Часом</span>
                    <span class="ukr">та</span> <span class="ukr">Історією!</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Заспокойся.</span> <span
                        class="ukr">Ну</span>
                    <span class="ukr">вступив</span> <span class="ukr">він</span>
                    <span class="ukr">у</span> <span class="ukr">багнюку</span>
                    <span class="ukr">і</span> <span class="ukr">все.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Звідки</span> <span
                        class="ukr">нам</span> <span class="ukr">знати?</span> <span class="ukr">—</span> <span
                        class="ukr">Вигукнув</span> <span class="ukr">Тревіс.</span>
                    <span class="ukr">—</span> <span class="ukr">Ми</span> <span class="ukr">нічого</span> <span
                        class="ukr">не</span>
                    <span class="ukr">знаємо.</span> <span class="ukr">Все</span> <span class="ukr">це</span> <span
                        class="ukr">клята</span> <span class="ukr">таємниця</span> <span class="ukr">для</span>
                    <span class="ukr">нас!</span> <span class="ukr">Геть</span>
                    <span class="ukr">звідси,</span> <span class="ukr">Екельсе!</span> </p>
                <p class="ukrainian"> <span class="ukr">Екельс</span> <span class="ukr">незграбно</span>
                    <span class="ukr">перебирав</span> <span class="ukr">сорочку.</span> <span class="ukr">—</span>
                    <span class="ukr">Я</span> <span class="ukr">заплачу</span> <span class="ukr">скільки</span> <span
                        class="ukr">завгодно.</span>
                    <span class="ukr">Сто</span> <span class="ukr">тисяч</span>
                    <span class="ukr">доларів!</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Тревіс</span> <span class="ukr">уважно</span> <span class="ukr">подивився</span>
                    <span class="ukr">на</span> <span class="ukr">чекову</span>
                    <span class="ukr">книжку</span> <span class="ukr">Екельса</span> <span class="ukr">і</span> <span
                        class="ukr">сплюнув.</span> <span class="ukr">Геть</span>
                    <span class="ukr">звідси.</span> <span class="ukr">Потвора</span> <span class="ukr">лежить</span>
                    <span class="ukr">коло</span> <span class="ukr">Стежки.</span> <span class="ukr">Встромите</span>
                    <span class="ukr">руки</span> <span class="ukr">по</span>
                    <span class="ukr">лікті</span> <span class="ukr">їй</span>
                    <span class="ukr">до</span> <span class="ukr">пащі,</span>
                    <span class="ukr">тоді</span> <span class="ukr">зможете</span> <span class="ukr">повернутися</span>
                    <span class="ukr">з</span>
                    <span class="ukr">нами.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Це</span> <span class="ukr">не</span> <span
                        class="ukr">має</span>
                    <span class="ukr">сенсу!</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Потвора</span> <span
                        class="ukr">—</span>
                    <span class="ukr">мертва,</span> <span class="ukr">ти</span> <span class="ukr">боягузливий</span>
                    <span class="ukr">виродку.</span> <span class="ukr">Кулі!</span> <span class="ukr">Кулі</span> <span
                        class="ukr">не</span> <span class="ukr">можна</span> <span class="ukr">залишати</span> <span
                        class="ukr">тут.</span>
                    <span class="ukr">Вони</span> <span class="ukr">не</span>
                    <span class="ukr">належать</span> <span class="ukr">до</span>
                    <span class="ukr">Минулого;</span> <span class="ukr">вони</span> <span class="ukr">можуть</span>
                    <span class="ukr">на</span> <span class="ukr">щось</span> <span class="ukr">вплинути.</span> <span
                        class="ukr">Ось</span>
                    <span class="ukr">вам</span> <span class="ukr">мій</span>
                    <span class="ukr">ніж.</span> <span class="ukr">Виколупуйте!</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Джунглі</span> <span class="ukr">знову</span> <span class="ukr">жили,</span> <span
                        class="ukr">заповнені</span> <span class="ukr">тим</span>
                    <span class="ukr">самим</span> <span class="ukr">тремтінням</span> <span class="ukr">та</span>
                    <span class="ukr">перегуком</span> <span class="ukr">птахів.</span> <span class="ukr">Екельс</span>
                    <span class="ukr">повільно</span> <span class="ukr">обернувся,</span> <span class="ukr">щоб</span>
                    <span class="ukr">роздивитися</span> <span class="ukr">ту</span> <span class="ukr">первинну</span>
                    <span class="ukr">купу</span> <span class="ukr">тліну,</span> <span class="ukr">той</span> <span
                        class="ukr">пагорб</span> <span class="ukr">страху</span> <span class="ukr">й</span> <span
                        class="ukr">нічної</span> <span class="ukr">мари.</span>
                    <span class="ukr">Постоявши</span> <span class="ukr">деякий</span> <span class="ukr">час</span>
                    <span class="ukr">він,</span> <span class="ukr">ніби</span> <span class="ukr">сновида,</span> <span
                        class="ukr">почовгав</span>
                    <span class="ukr">Стежкою</span> <span class="ukr">геть.</span> </p>
                <p class="ukrainian"> <span class="ukr">За</span> <span class="ukr">п'ять</span> <span
                        class="ukr">хвилин</span> <span class="ukr">він,</span> <span class="ukr">хитаючись,</span>
                    <span class="ukr">повернувся.</span> <span class="ukr">Руки</span>
                    <span class="ukr">по</span> <span class="ukr">лікті</span>
                    <span class="ukr">просякнуті</span> <span class="ukr">червоним.</span> <span class="ukr">Він</span>
                    <span class="ukr">простягнув</span> <span class="ukr">їх</span> <span class="ukr">перед</span> <span
                        class="ukr">собою.</span> <span class="ukr">В</span> <span class="ukr">кожній</span> <span
                        class="ukr">було</span> <span class="ukr">по</span> <span class="ukr">кілька</span> <span
                        class="ukr">сталевих</span> <span class="ukr">куль.</span>
                    <span class="ukr">Потім</span> <span class="ukr">Екельс</span> <span class="ukr">упав</span> <span
                        class="ukr">і</span> <span class="ukr">непорушно</span> <span class="ukr">лежав</span> <span
                        class="ukr">де</span> <span class="ukr">впав.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Не</span> <span
                        class="ukr">треба</span>
                    <span class="ukr">було</span> <span class="ukr">його</span> <span class="ukr">до</span> <span
                        class="ukr">цього</span>
                    <span class="ukr">примушувати,</span> <span class="ukr">—</span>
                    <span class="ukr">зазначив</span> <span class="ukr">Лесперанс.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Невже?</span> <span
                        class="ukr">Зарано</span> <span class="ukr">ще</span> <span class="ukr">казати.</span> <span
                        class="ukr">—</span> <span class="ukr">Тревіс</span> <span class="ukr">поштурхав</span>
                    <span class="ukr">непорушне</span> <span class="ukr">тіло.</span> <span class="ukr">—</span> <span
                        class="ukr">Житиме.</span> <span class="ukr">Наступного</span> <span class="ukr">разу</span>
                    <span class="ukr">вже</span> <span class="ukr">не</span>
                    <span class="ukr">приставатиме</span> <span class="ukr">на</span> <span class="ukr">такі</span>
                    <span class="ukr">мисливські</span> <span class="ukr">ігри.</span>
                    <span class="ukr">Гаразд.</span> <span class="ukr">—</span>
                    <span class="ukr">Втомленим</span> <span class="ukr">порухом</span> <span
                        class="ukr">великого</span>
                    <span class="ukr">пальця</span> <span class="ukr">він</span>
                    <span class="ukr">вказав</span> <span class="ukr">Лесперансу</span> <span
                        class="ukr">вирушати.</span>
                    <span class="ukr">—</span> <span class="ukr">Натискай.</span> <span class="ukr">Повертаймося</span>
                    <span class="ukr">додому.</span> </p>
                <p class="ukrainian"> <span class="ukr">1492.</span> <span class="ukr">1776.</span> <span
                        class="ukr">1812.</span> </p>
                <p class="ukrainian"> <span class="ukr">Мандрівники</span> <span class="ukr">повитирали</span> <span
                        class="ukr">руки</span>
                    <span class="ukr">та</span> <span class="ukr">обличчя,</span>
                    <span class="ukr">перевдягли</span> <span class="ukr">сорочки</span> <span class="ukr">й</span>
                    <span class="ukr">штани,</span> <span class="ukr">що</span> <span class="ukr">взялися</span> <span
                        class="ukr">коржем</span>
                    <span class="ukr">від</span> <span class="ukr">бруду.</span>
                    <span class="ukr">Екельс</span> <span class="ukr">нарешті</span> <span class="ukr">опритомнів</span>
                    <span class="ukr">і</span>
                    <span class="ukr">сидів</span> <span class="ukr">мовчки.</span> <span class="ukr">Тревіс</span>
                    <span class="ukr">прискіпливо</span> <span class="ukr">дивився</span> <span class="ukr">на</span>
                    <span class="ukr">нього,</span> <span class="ukr">не</span> <span class="ukr">відриваючись,</span>
                    <span class="ukr">цілих</span> <span class="ukr">десять</span>
                    <span class="ukr">хвилин.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Не</span> <span class="ukr">дивіться</span> <span
                        class="ukr">на</span>
                    <span class="ukr">мене</span> <span class="ukr">так,</span> <span class="ukr">—</span> <span
                        class="ukr">не</span>
                    <span class="ukr">витримав</span> <span class="ukr">Екельс.</span>
                    <span class="ukr">—</span> <span class="ukr">Я</span> <span class="ukr">нічого</span> <span
                        class="ukr">не</span>
                    <span class="ukr">зробив!</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Та</span> <span
                        class="ukr">хто</span>
                    <span class="ukr">зна?</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Я</span> <span
                        class="ukr">просто</span>
                    <span class="ukr">зійшов</span> <span class="ukr">зі</span> <span class="ukr">Стежки</span> <span
                        class="ukr">і</span>
                    <span class="ukr">все.</span> <span class="ukr">Невеличка</span>
                    <span class="ukr">грудка</span> <span class="ukr">багна</span> <span class="ukr">на</span> <span
                        class="ukr">черевиках.</span> <span class="ukr">Чого</span>
                    <span class="ukr">ви</span> <span class="ukr">від</span>
                    <span class="ukr">мене</span> <span class="ukr">хочете?</span> <span class="ukr">Щоб</span> <span
                        class="ukr">я</span> <span class="ukr">впав</span> <span class="ukr">на</span> <span
                        class="ukr">коліна</span>
                    <span class="ukr">й</span> <span class="ukr">молився?</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Молитва,</span> <span
                        class="ukr">можливо,</span>
                    <span class="ukr">вам</span> <span class="ukr">знадобиться.</span> <span
                        class="ukr">Попереджаю</span>
                    <span class="ukr">вас,</span>
                    <span class="ukr">Екельсе,</span> <span class="ukr">я</span>
                    <span class="ukr">ще</span> <span class="ukr">можу</span>
                    <span class="ukr">вас</span> <span class="ukr">убити.</span>
                    <span class="ukr">Моя</span> <span class="ukr">гвинтівка</span> <span class="ukr">напоготові.</span>
                </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Я</span> <span class="ukr">не</span> <span
                        class="ukr">винен.</span>
                    <span class="ukr">Я</span> <span class="ukr">нічого</span> <span class="ukr">не</span> <span
                        class="ukr">зробив!</span> </p>
                <p class="ukrainian"> <span class="ukr">1999.</span> <span class="ukr">2000.</span> <span
                        class="ukr">2055.</span> </p>
                <p class="ukrainian"> <span class="ukr">Машина</span> <span class="ukr">зупинилася.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">—</span> <span class="ukr">Виходьте,</span>
                    <span class="ukr">—</span> <span class="ukr">наказав</span>
                    <span class="ukr">Тревіс.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Кімната</span> <span class="ukr">була</span> <span class="ukr">там</span> <span
                        class="ukr">же,</span> <span class="ukr">де</span> <span class="ukr">вони</span> <span
                        class="ukr">її</span>
                    <span class="ukr">залишили,</span> <span class="ukr">але</span>
                    <span class="ukr">не</span> <span class="ukr">саме</span>
                    <span class="ukr">така,</span> <span class="ukr">якою</span>
                    <span class="ukr">вони</span> <span class="ukr">її</span>
                    <span class="ukr">залишили.</span> <span class="ukr">Той</span> <span class="ukr">же</span> <span
                        class="ukr">чоловік</span> <span class="ukr">сидів</span>
                    <span class="ukr">за</span> <span class="ukr">письмовим</span> <span class="ukr">столиком,</span>
                    <span class="ukr">але</span>
                    <span class="ukr">не</span> <span class="ukr">саме</span>
                    <span class="ukr">той</span> <span class="ukr">чоловік</span>
                    <span class="ukr">сидів</span> <span class="ukr">за</span>
                    <span class="ukr">письмовим</span> <span class="ukr">столиком.</span> </p>
                <p class="ukrainian"> <span class="ukr">Тревіс</span> <span class="ukr">озирнувся</span>
                    <span class="ukr">навкруги.</span> <span class="ukr">—</span>
                    <span class="ukr">Все</span> <span class="ukr">гаразд?</span>
                    <span class="ukr">—</span> <span class="ukr">Різко</span>
                    <span class="ukr">запитав</span> <span class="ukr">він.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Чудово!</span> <span
                        class="ukr">З</span>
                    <span class="ukr">поверненням!</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Однак</span>
                    <span class="ukr">Тревіс</span> <span class="ukr">був</span>
                    <span class="ukr">напружений.</span> <span class="ukr">Здавалося,</span> <span
                        class="ukr">він</span>
                    <span class="ukr">вдивляється</span> <span class="ukr">в</span> <span class="ukr">самі</span> <span
                        class="ukr">атоми</span> <span class="ukr">повітря</span>
                    <span class="ukr">навколо,</span> <span class="ukr">на</span>
                    <span class="ukr">те,</span> <span class="ukr">як</span>
                    <span class="ukr">проникає</span> <span class="ukr">сонце</span> <span class="ukr">через</span>
                    <span class="ukr">єдине</span> <span class="ukr">вікно</span> <span class="ukr">під</span> <span
                        class="ukr">стелею.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Гаразд,</span> <span
                        class="ukr">Екельсе,</span>
                    <span class="ukr">виходьте.</span> <span class="ukr">І</span>
                    <span class="ukr">більше</span> <span class="ukr">ніколи</span> <span class="ukr">сюди</span> <span
                        class="ukr">не</span> <span class="ukr">приходьте.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Екельс</span>
                    <span class="ukr">не</span> <span class="ukr">рухався.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Ви</span> <span
                        class="ukr">чули</span>
                    <span class="ukr">мене,</span> <span class="ukr">—</span> <span class="ukr">повторив</span> <span
                        class="ukr">Тревіс.</span>
                    <span class="ukr">—</span> <span class="ukr">Чого</span>
                    <span class="ukr">витріщилися?</span> </p>
                <p class="ukrainian"> <span class="ukr">Екельс</span> <span class="ukr">стояв,</span> <span
                        class="ukr">нюхаючи</span>
                    <span class="ukr">повітря.</span> <span class="ukr">У</span>
                    <span class="ukr">повітрі</span> <span class="ukr">було</span> <span class="ukr">щось</span> <span
                        class="ukr">таке,</span> <span class="ukr">якийсь</span>
                    <span class="ukr">хемічний</span> <span class="ukr">наліт,</span> <span
                        class="ukr">невловимий,</span>
                    <span class="ukr">настільки</span> <span class="ukr">незначний,</span> <span class="ukr">що</span>
                    <span class="ukr">лише</span> <span class="ukr">ледь-ледь</span> <span class="ukr">помітний</span>
                    <span class="ukr">підсвідомий</span> <span class="ukr">крик</span>
                    <span class="ukr">почуттів</span> <span class="ukr">попереджав</span> <span class="ukr">про</span>
                    <span class="ukr">його</span> <span class="ukr">наявність.</span> <span class="ukr">Кольори:</span>
                    <span class="ukr">білий,</span>
                    <span class="ukr">сірий,</span> <span class="ukr">блакитний,</span> <span
                        class="ukr">помаранчевий</span> <span class="ukr">—</span>
                    <span class="ukr">на</span> <span class="ukr">стіні,</span>
                    <span class="ukr">на</span> <span class="ukr">меблях,</span>
                    <span class="ukr">в</span> <span class="ukr">небі</span>
                    <span class="ukr">за</span> <span class="ukr">вікном</span>
                    <span class="ukr">були...</span> <span class="ukr">були...</span> <span class="ukr"></span> </p>
                <p class="ukrainian"> <span class="ukr">А</span> <span class="ukr">ще</span> <span
                        class="ukr">було</span>
                    <span class="ukr">якесь</span> <span class="ukr">відчуття.</span>
                    <span class="ukr">Тілом</span> <span class="ukr">пробігла</span> <span class="ukr">судома.</span>
                    <span class="ukr">Затремтіли</span> <span class="ukr">руки.</span> <span class="ukr">Він</span>
                    <span class="ukr">стояв</span> <span class="ukr">і</span> <span class="ukr">всіма</span> <span
                        class="ukr">порами</span>
                    <span class="ukr">тіла</span> <span class="ukr">всотував</span> <span class="ukr">цю</span> <span
                        class="ukr">дивну</span> <span class="ukr">відмінність.</span> <span class="ukr">Ніби</span>
                    <span class="ukr">десь</span> <span class="ukr">хтось</span>
                    <span class="ukr">видавав</span> <span class="ukr">той</span>
                    <span class="ukr">тонкий</span> <span class="ukr">свист,</span> <span class="ukr">чутний</span>
                    <span class="ukr">лише</span> <span class="ukr">собаці.</span> <span class="ukr">Його</span>
                    <span class="ukr">ж</span> <span class="ukr">тіло</span>
                    <span class="ukr">відповідало</span> <span class="ukr">тишею.</span> <span class="ukr">Поза</span>
                    <span class="ukr">цією</span> <span class="ukr">кімнатою,</span>
                    <span class="ukr">поза</span> <span class="ukr">цими</span>
                    <span class="ukr">стінами,</span> <span class="ukr">поза</span> <span class="ukr">цим</span> <span
                        class="ukr">чоловіком,</span> <span class="ukr">котрий</span>
                    <span class="ukr">був</span> <span class="ukr">не</span>
                    <span class="ukr">зовсім</span> <span class="ukr">тим</span>
                    <span class="ukr">самим</span> <span class="ukr">чоловіком,</span> <span class="ukr">що</span>
                    <span class="ukr">сидів</span> <span class="ukr">за</span>
                    <span class="ukr">письмовим</span> <span class="ukr">столиком,</span> <span class="ukr">і</span>
                    <span class="ukr">письмовий</span> <span class="ukr">столик</span>
                    <span class="ukr">був</span> <span class="ukr">не</span>
                    <span class="ukr">зовсім</span> <span class="ukr">тим</span>
                    <span class="ukr">самим...</span> <span class="ukr">—</span>
                    <span class="ukr">лежав</span> <span class="ukr">цілий</span>
                    <span class="ukr">світ</span> <span class="ukr">вулиць</span>
                    <span class="ukr">і</span> <span class="ukr">людей.</span>
                    <span class="ukr">Яким</span> <span class="ukr">зараз</span>
                    <span class="ukr">був</span> <span class="ukr">цей</span>
                    <span class="ukr">світ,</span> <span class="ukr">ніхто</span>
                    <span class="ukr">не</span> <span class="ukr">міг</span>
                    <span class="ukr">сказати.</span> <span class="ukr">Екельс</span> <span class="ukr">міг</span> <span
                        class="ukr">відчувати</span> <span class="ukr">їхні</span>
                    <span class="ukr">рухи,</span> <span class="ukr">десь</span>
                    <span class="ukr">там</span> <span class="ukr">за</span>
                    <span class="ukr">стіною,</span> <span class="ukr">майже</span> <span class="ukr">як</span> <span
                        class="ukr">безліч</span> <span class="ukr">шахових</span>
                    <span class="ukr">фігурок,</span> <span class="ukr">розвіяних</span> <span
                        class="ukr">суховієм...</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Але</span> <span class="ukr">найперше,</span> <span class="ukr">що</span>
                    <span class="ukr">відразу</span> <span class="ukr">впадало</span> <span class="ukr">в</span> <span
                        class="ukr">очі</span> <span class="ukr">була</span> <span class="ukr">та</span> <span
                        class="ukr">сама</span>
                    <span class="ukr">вивіска</span> <span class="ukr">на</span> <span class="ukr">стіні</span> <span
                        class="ukr">контори,</span>
                    <span class="ukr">та</span> <span class="ukr">сама</span>
                    <span class="ukr">вивіска,</span> <span class="ukr">яку</span> <span class="ukr">він</span> <span
                        class="ukr">сьогодні</span> <span class="ukr">вже</span>
                    <span class="ukr">було</span> <span class="ukr">читав,</span>
                    <span class="ukr">коли</span> <span class="ukr">вперше</span>
                    <span class="ukr">сюди</span> <span class="ukr">зайшов.</span> </p>
                <p class="ukrainian"> <span class="ukr">Якимось</span> <span class="ukr">чином</span>
                    <span class="ukr">вивіска</span> <span class="ukr">змінилася:</span> </p>
                <p class="ukrainian"> <span class="ukr">ЗАО</span> <span class="ukr">"СЕФАРІ</span> <span
                        class="ukr">В</span> <span class="ukr">ЧАСЄ".</span> </p>
                <p class="ukrainian"> <span class="ukr">СЕФАРІ</span> <span class="ukr">У</span> <span
                        class="ukr">БУДЬ-ЙАКИЙ</span>
                    <span class="ukr">РІКЬ</span> <span class="ukr">В</span>
                    <span class="ukr">МИНУЛОМУ.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">ВИ</span> <span class="ukr">НАЗИВАЙЕТЕ</span> <span class="ukr">ТВАРИННУ.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">МИ</span> <span class="ukr">ДОПРАВЛЯЙЕМО</span>
                    <span class="ukr">ВАС</span> <span class="ukr">ТУДА.</span>
                </p>
                <p class="ukrainian"> <span class="ukr">ВИ</span> <span class="ukr">СТРІЛЯЙЕТЕ.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Екельс</span> <span class="ukr">відчув,</span> <span class="ukr">що</span> <span
                        class="ukr">падає</span> <span class="ukr">в</span> <span class="ukr">крісло.</span> <span
                        class="ukr">Незграбними</span> <span class="ukr">пальцями</span> <span class="ukr">він</span>
                    <span class="ukr">почав</span> <span class="ukr">відшкрібати</span> <span class="ukr">багнюку</span>
                    <span class="ukr">від</span> <span class="ukr">черевиків.</span> <span class="ukr">Тремтячими</span>
                    <span class="ukr">руками</span>
                    <span class="ukr">він</span> <span class="ukr">підняв</span>
                    <span class="ukr">грудку.</span> <span class="ukr">—</span>
                    <span class="ukr">Ні,</span> <span class="ukr">не</span>
                    <span class="ukr">може</span> <span class="ukr">бути.</span>
                    <span class="ukr">Тільки</span> <span class="ukr">не</span>
                    <span class="ukr">така</span> <span class="ukr">маленька</span> <span class="ukr">річ.</span>
                    <span class="ukr">Ні!</span> </p>
                <p class="ukrainian"> <span class="ukr">У</span> <span class="ukr">грудці</span> <span
                        class="ukr">багнюки,</span> <span class="ukr">виблискуючи</span> <span
                        class="ukr">зеленим,</span>
                    <span class="ukr">золотавим</span> <span class="ukr">та</span>
                    <span class="ukr">чорним,</span> <span class="ukr">закарбувався</span> <span
                        class="ukr">метелик.</span>
                    <span class="ukr">Дуже</span>
                    <span class="ukr">красивий,</span> <span class="ukr">і...</span> <span class="ukr">дуже</span> <span
                        class="ukr">мертвий.</span> </p>
                <p class="ukrainian"> <span class="ukr">—</span> <span class="ukr">Лише</span> <span
                        class="ukr">не</span>
                    <span class="ukr">така</span> <span class="ukr">дрібниця!</span> <span class="ukr">Лише</span>
                    <span class="ukr">не</span> <span class="ukr">метелик!</span>
                    <span class="ukr">—</span> <span class="ukr">волав</span>
                    <span class="ukr">Екельс.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Метелик</span> <span class="ukr">упав</span> <span class="ukr">на</span> <span
                        class="ukr">підлогу;</span> <span class="ukr">вишукана</span>
                    <span class="ukr">істота,</span> <span class="ukr">маленька</span> <span class="ukr">істота,</span>
                    <span class="ukr">що</span> <span class="ukr">змогла</span>
                    <span class="ukr">зрушити</span> <span class="ukr">терези</span> <span class="ukr">і</span> <span
                        class="ukr">збити</span> <span class="ukr">лінію</span> <span class="ukr">малих</span> <span
                        class="ukr">доміно,</span>
                    <span class="ukr">потім</span> <span class="ukr">великих</span> <span class="ukr">доміно,</span>
                    <span class="ukr">а</span> <span class="ukr">за</span> <span class="ukr">ними</span> <span
                        class="ukr">—</span>
                    <span class="ukr">велетенських</span> <span class="ukr">доміно</span> <span class="ukr">—</span>
                    <span class="ukr">і</span> <span class="ukr">так</span> <span class="ukr">далі</span> <span
                        class="ukr">крізь</span>
                    <span class="ukr">роки</span> <span class="ukr">й</span> <span class="ukr">крізь</span> <span
                        class="ukr">Час.</span> <span class="ukr">Екельсові</span> <span class="ukr">думки</span>
                    <span class="ukr">кружляли</span> <span class="ukr">вихором.</span> <span class="ukr">Метелик</span>
                    <span class="ukr">не</span> <span class="ukr">міг</span>
                    <span class="ukr">настільки</span> <span class="ukr">змінити</span> <span class="ukr">стан</span>
                    <span class="ukr">речей.</span> <span class="ukr">Убивство</span> <span class="ukr">одного</span>
                    <span class="ukr">метелика</span> <span class="ukr">не</span>
                    <span class="ukr">могло</span> <span class="ukr">бути</span>
                    <span class="ukr">таким</span> <span class="ukr">важливим!</span> <span class="ukr">Хіба</span>
                    <span class="ukr">ні?</span> </p>
                <p class="ukrainian"> <span class="ukr">Лице</span> <span class="ukr">його</span> <span
                        class="ukr">було</span> <span class="ukr">холодним.</span>
                    <span class="ukr">Губи</span> <span class="ukr">тремтіли,</span> <span class="ukr">питаючи:</span>
                    <span class="ukr">"Хто...</span>
                    <span class="ukr">хто</span> <span class="ukr">переміг</span>
                    <span class="ukr">вчора</span> <span class="ukr">на</span>
                    <span class="ukr">Президентських</span> <span class="ukr">виборах?"</span> </p>
                <p class="ukrainian"> <span class="ukr">Чоловік</span> <span class="ukr">за</span> <span
                        class="ukr">столиком</span>
                    <span class="ukr">засміявся.</span> <span class="ukr">—</span>
                    <span class="ukr">Жартуєте?</span> <span class="ukr">Вам</span> <span class="ukr">і</span> <span
                        class="ukr">самому</span> <span class="ukr">це</span> <span class="ukr">до</span> <span
                        class="ukr">біса</span>
                    <span class="ukr">добре</span> <span class="ukr">відомо.</span>
                    <span class="ukr">Звісно</span> <span class="ukr">ж</span>
                    <span class="ukr">Дойчер!</span> <span class="ukr">Хто</span>
                    <span class="ukr">ж</span> <span class="ukr">іще?</span>
                    <span class="ukr">Не</span> <span class="ukr">той</span>
                    <span class="ukr">же</span> <span class="ukr">недолугий</span> <span class="ukr">квач</span>
                    <span class="ukr">Кейт.</span> <span class="ukr">Зараз</span>
                    <span class="ukr">ми</span> <span class="ukr">маємо</span>
                    <span class="ukr">залізну</span> <span class="ukr">людину,</span> <span class="ukr">вольову</span>
                    <span class="ukr">людину,</span> <span class="ukr">заради</span> <span class="ukr">Бога!</span>
                    <span class="ukr">—</span> <span class="ukr">Представник</span> <span class="ukr">змовк.</span>
                    <span class="ukr">—</span> <span class="ukr">Що</span> <span class="ukr">трапилось?</span>
                </p>
                <p class="ukrainian"> <span class="ukr">Екельс</span>
                    <span class="ukr">застогнав.</span> <span class="ukr">Він</span> <span class="ukr">упав</span> <span
                        class="ukr">на</span> <span class="ukr">коліна.</span> <span class="ukr">Тремтячими</span> <span
                        class="ukr">пальцями</span> <span class="ukr">він</span>
                    <span class="ukr">відшкрібав</span> <span class="ukr">золотого</span> <span
                        class="ukr">метелика.</span>
                    <span class="ukr">—</span> <span class="ukr">Хіба</span> <span class="ukr">не</span> <span
                        class="ukr">можна,</span>
                    <span class="ukr">—</span> <span class="ukr">благав</span> <span class="ukr">він</span> <span
                        class="ukr">до</span>
                    <span class="ukr">всього</span> <span class="ukr">світу,</span> <span class="ukr">до</span> <span
                        class="ukr">себе,</span> <span class="ukr">до</span> <span class="ukr">представника,</span>
                    <span class="ukr">до</span>
                    <span class="ukr">Машини,</span> <span class="ukr">—</span>
                    <span class="ukr">хіба</span> <span class="ukr">не</span>
                    <span class="ukr">можна</span> <span class="ukr">відвезти</span> <span class="ukr">його</span>
                    <span class="ukr">назад,</span> <span class="ukr">хіба</span>
                    <span class="ukr">не</span> <span class="ukr">можна</span>
                    <span class="ukr">його</span> <span class="ukr">якось</span>
                    <span class="ukr">повернути</span> <span class="ukr">до</span> <span class="ukr">життя.</span> <span
                        class="ukr">Хіба</span> <span class="ukr">не</span> <span class="ukr">можна</span> <span
                        class="ukr">почати</span>
                    <span class="ukr">все</span> <span class="ukr">спочатку?</span> <span class="ukr">Хіба</span>
                    <span class="ukr">не...</span> </p>
                <p class="ukrainian">
                    <span class="ukr">Він</span> <span class="ukr">не</span>
                    <span class="ukr">рухався.</span> <span class="ukr">Заплющивши</span> <span class="ukr">очі,</span>
                    <span class="ukr">він</span> <span class="ukr">чекав</span>
                    <span class="ukr">і</span> <span class="ukr">тремтів.</span>
                    <span class="ukr">Він</span> <span class="ukr">чув,</span>
                    <span class="ukr">як</span> <span class="ukr">гучно</span>
                    <span class="ukr">на</span> <span class="ukr">всю</span>
                    <span class="ukr">кімнату</span> <span class="ukr">дихає</span> <span class="ukr">Тревіс,</span>
                    <span class="ukr">чув,</span> <span class="ukr">як</span>
                    <span class="ukr">Тревіс</span> <span class="ukr">скидає</span> <span class="ukr">гвинтівку,</span>
                    <span class="ukr">знімає</span> <span class="ukr">її</span>
                    <span class="ukr">з</span> <span class="ukr">запобіжника</span> <span class="ukr">й</span>
                    <span class="ukr">націлює</span> <span class="ukr">на</span>
                    <span class="ukr">нього.</span> </p>
                <p class="ukrainian">
                    <span class="ukr">І</span> <span class="ukr">вдарив</span>
                    <span class="ukr">грім.</span> </p>






            </section>


        </main>
        <article>
            <p id="word"></p>
            <p id="transl"></p>
        </article>

        <article>
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
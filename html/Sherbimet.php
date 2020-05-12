<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Sherbimet</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link rel="stylesheet" href="../css/body.css" type="text/css">
  <link rel="stylesheet" href="../css/footeri.css" type="text/css">
  <link rel="stylesheet" href="../css/dropdown.css" type="text/css">
  <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>
  <script src="../js/jquery.min.js"></script>


  <style>
    .row {
      margin-left: 15px;
    }

    .kontaineri {
      padding-right: 15px;
      padding-left: 15px;
      display: inline;

    }

    .text-center {
      text-align: center;
      word-wrap: break-word;
    }

    .service-box {
      background: #fff;
      border: 1px solid gray;
      padding: 20px;

    }

    .service-icon {
      margin-bottom: 100px;
    }

    .service-box {
      margin-bottom: 150px;
      height: 500px;
    }

    .col-md-3 {

      position: relative;
      min-height: 1px;
      padding-right: 35px;
      padding-left: 15px;

    }

    .col-md-3 {
      float: left;
    }

    .col-md-3 {
      width: 28%;
    }

    h2.h-bold,
    h5.h-bold {
      font-weight: 600;
      font-size: 20px;

    }

    h5 {
      color: red;
      padding-bottom: 20px;
    }

    h2 {
      color: red;
      padding: 10px 0;

    }

    p {
      color: black;
      font-size: 14px;
      margin: 0 auto;

    }

    .column {
      float: left;
      width: 31%;
      margin-bottom: 16px;
      padding: 0 9px;
    }

    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .bashkimi {
      padding: 0 16px;
    }

    .bashkimi::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
      margin: 10px 0;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: rgb(67, 180, 67);
      text-align: center;
      cursor: pointer;
      width: 100%;
      margin: 10px 0;
    }

    .button:hover {
      background-color: rgba(67, 180, 67, 0.7);
    }
  </style>
  <!--JQuery qe mundeson hide and show, JQuery effects-->
  <script>
    jQuery(document).ready(function () {
      jQuery(".btn1").click(function () {
        jQuery(".service-box").hide();//Callback JQuery efekt qe mundeson qe efekti i pare te kompletohet pastaj te thirret efekti i dyte
        alert("Lista e sherbimeve do fshihet");
      }
      );
      jQuery(".btn2").click(function () {
        jQuery(".service-box").show();
        alert("Lista e sherbimeve  do shfaqet");
      }
      );
    });
  </script>

  <!--JQuery effect per animacion-->
  <script>
    $(document).ready(function () {
      $("#14").hover(
        function () {
          $("#14").filter(':not(:animated)').animate({
            width: "90%"
          }, 'slow');
          // Animacioni per Hover efekte do te pres derisa te perfundoje animacioni paraprak
        },
        function () {
          $("#14").animate({
            width: "100%"
          }, 'slow');
        });
    });
  </script>

  <script>
    $(document).ready(function () {
      $("#16").hover(
        function () {
          $("#16").filter(':not(:animated)').animate({
            width: "90%"
          }, 'slow');
          // Animacioni per Hover efekte do te pres derisa te perfundoje animacioni paraprak
        },
        function () {
          $("#16").animate({
            width: "100%"
          }, 'slow');
        });
    });
  </script>

  <script>
    $(document).ready(function () {
      $("#15").hover(
        function () {
          $("#15").filter(':not(:animated)').animate({
            width: "90%"
          }, 'slow');
          // Animacioni per Hover efekte do te pres derisa te perfundoje animacioni paraprak
        },
        function () {
          $("#15").animate({
            width: "100%"
          }, 'slow');
        });
    });
  </script>

</head>

<body>
  <div class="wrapper">
    <button id="back-to-top-btn"><i class="fa fa-chevron-circle-up"></i></button>
    <div class="wrapper row1">
      <header id="header" class="clear">
        <div id="hgroup">
          <h1><a href="../index.html">AUTONOMOUS</a></h1>
        </div>
        <nav>
          <ul>
            <li><a href="../index.html">HOME</a></li>
            <li><a href="sherbimet.html" class="active">SHERBIMET</a></li>
            <li><a href="#kontakti">KONTAKTONI</a></li>
            <li><a href="Kontakti.html">REZERVO</a></li>
            <li><a href="#">FUN</a>
              <ul>
                <li><a href="Chooselanguage.html">LANGUAGE</a></li>
                <li><a href="game.html">GAME</a></li>
              </ul>
            </li>
            <li><a href="portfolio.html">OFERTA</a></li>
            <li><a href="gallery.html">GALLERY</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </header>
    </div>

    <div class="wrapper col3">
      <br><button style="float:left; margin-right: 20px; margin-left: 20px;" class="btn1">Fsheh Sherbimet</button>
      <button style="float:left" class="btn2">Shfaq Sherbimet</button></br>
      <div id="container" class="clear">
        <!-- main content -->
        <div id="homepage">
          <!-- services area -->
          <section id="service" style="display: inline">
            <div class="text-center">
              <h2 class="h-bold">Sherbimet</h2>
              <p>Me poshte jane disa nga sherbimet te cilat mundesohen nga kompania jone!</p>
            </div>

            <div class="text-center">
              <div class="kontaineri">

                <div class="row">
                  <div class="col-md-3" >
                    <div>
                      <div class="service-box" >
                        <div class="service-icon">
                          <span><img id="14" style="width: 100%;" src="../images/Akomodim.jpg"
                              alt="Imazhi nuk eshte ende ne dispozicion!" /></span>
                        </div>
                        <div>
                          <h5>Akomodim</h5>
                          <p>

                            Jolilu Travel krenohet duke u dhënë klientëve një zgjedhje të
                            nevojave specifike të akomodimit, pa marrë parasysh se ku - në aspektin rajonal,
                            kombëtar dhe ndërkombëtar.Duke ju ofruar akomodim sa me te mire dhe te rahatshem per
                            familjen dhe miqte tuaj,
                            ne ju sjellim ofertat tona me te mira dhe me te sigurta!

                          </p>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div>
                      <div class="service-box">
                        <div class="service-icon">
                          <span><img id="15" style="width: 100%;" src="../images/Travelinsurance.jpg"
                              alt="Imazhi nuk eshte ende ne dispozicion!" /></span>
                        </div>
                        <div>
                          <h5 style="margin-top: -15px;">Siguri Udhetimi</h5>
                          <p>
                            Jolilu Travel siguron ligjet e sigurimit të udhëtimit të mbikqyrura nga AIG, Hollard dhe
                            TIC.
                            Me një policë të shëndetit në udhëtim, Scardian, jua kompenson shpenzimet që mund të
                            rezultojnë për shërim apo hospitalizim emergjent gjatë qëndrimit tuaj në ndonjë shtet të
                            huaj.
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div>
                      <div class="service-box">
                        <div class="service-icon">
                          <span><img id="16" style="width: 100%;" src="../images/Linja.jpg"
                              alt="Imazhi nuk eshte ende ne dispozicion!" /></span>
                        </div>
                        <div>
                          <h5>Linja Ajrore dhe rezervimet </h5>
                          <p>
                            JOLILU Travel ofron rezervime me kosto efektive të fluturimit për të gjitha destinacionet.
                            Preferenca për çdo linjë të veçantë ajrore sigurisht që merret në konsideratë sa herë që
                            bëhen rezervime.
                            Bashkpunimi e Jolilu Travel me Aria Travel i jep Julilu Travel një përfaqësim me të fortë në
                            arenën ndërkombëtare.
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h1 style="text-align: center; font-size: 28px; margin-bottom: 30px;">Ekipa e jon&euml;</h1>
              <div class="row">
                <div class="column">
                  <div class="card">
                    <img
                      src="https://scontent.fprn3-1.fna.fbcdn.net/v/t1.0-9/70349862_2877915908904493_2950854458923286528_n.jpg?_nc_cat=105&_nc_ohc=IJW5Iu_eyp8AQn9dEJ6KPhbaAElZ2qlIY_mtHQMQmp_JQbuQJ89O7dXgg&_nc_ht=scontent.fprn3-1.fna&oh=9337ee3b5c94989eb4ce3fe6b8fca910&oe=5EA59BB0"
                      alt="Jane" style="width:100%">
                    <div class="bashkimi">
                      <h2>Lum Pireva</h2>
                      <p class="title">Student and part time Web Developer</p>
                      <p>Lenda Interneti</p>
                      <a href="https://www.facebook.com/lumprv" target="_blank" style="margin-top:25px"
                        class="fab fa-facebook-f"></a>
                      <p><a href="mailto:pireva.lum@hotmail.com"><button class="button">Contact</button></a></p>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img
                      src="https://scontent.fprn3-1.fna.fbcdn.net/v/t1.0-9/44336071_2389549424405498_7189547813510840320_n.jpg?_nc_cat=106&_nc_ohc=BGMjpETRNnkAQkM0deiye6vRlps6nwSnSF2UyEJms6k_k0XzZRn_FzcTA&_nc_ht=scontent.fprn3-1.fna&oh=ff2542c8c5355f6a54bfdcf8259e6370&oe=5EA051D9"
                      alt="Mike" style="width:100%">
                    <div class="bashkimi">
                      <h2>Jon Hajdini</h2>
                      <p class="title">Student and part time Web Developer</p>
                      <p>Lenda Interneti </p>
                      <a href="https://www.facebook.com/jonhajdini" target="_blank" style="margin-top:25px;"
                        class="fab fa-facebook-f"></a>
                      <p><a href="mailto:jonhajdini99@gmail.com"><button class="button">Contact</button></a></p>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card">
                    <img
                      src="https://scontent.fprn3-1.fna.fbcdn.net/v/t1.0-1/p960x960/46489541_497845484061394_3819596995669000192_o.jpg?_nc_cat=106&_nc_ohc=G-rDkrTB9u4AQkAgbeOpl3L_UuD_ddw9GWHlbhpsrdtUtXMcIPta_QdEw&_nc_ht=scontent.fprn3-1.fna&oh=72066ec1e0887df6ebc650a18bf83bd0&oe=5E9ABCF7"
                      alt="John" style="width:100%">
                    <div class="bashkimi">
                      <h2>Lirim Beka</h2>
                      <p class="title">Student and part time Web Developer</p>
                      <p>Lenda Interneti </p>
                      <a href="https://www.facebook.com/lirim.beka.4000" target="_blank" style="margin-top:25px"
                        class="fab fa-facebook-f"></a>
                      <p><a href="mailto:beka.lirim@gmail.com"><button class="button">Contact</button></a></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section>


        </div>
        <div class="icons">
          <a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
          <a href="https://www.pinterest.com/" target="_blank" class="fab fa-pinterest"></a>
          <a href="https://www.linkedin.com/" target="_blank" class="fab fa-linkedin"></a>
          <a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a>
          <a href="https://plus.google.com/discover" target="_blank" class="fab fa-google"></a>
        </div>

      </div>
    </div>



    <footer>
      <div class="footer-main">
        <div class="footer-inner">
          <div class="footer-left">
            <div class="footer-box">

              <h6>ABOUT US</h6>
              <img src="../images/372.jpg" width="215px" height="90px" />


              <p> JOLILU travel është një udhëzues gjithëpërfshirës për destinacionet
                më të mira të udhëtimit në botë.Ne ofrojmë përmbajtje të detajuar
                dhe të saktë të udhëtimit, të dizajnuara për të frymëzuar udhëtarët globalë.</p>
              <a style="float: left" href="Sherbimet.html">Read more &raquo</a>
            </div>
          </div>
          <div class="footer-left">
            <div class="footer-box">
              <h6>LINK BLOCK</h6>
              <ul>
                <li style="border-bottom: 1px solid #919090"><a href="https://aria-travel.com/" target="_blank">&raquo
                    AriaTravelAlbania</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://travel.com/" target="_blank">&raquo
                    Travel</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://www.flyfrontier.com/"
                    target="_blank">&raquo
                    FlyFrontier</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://www.skyscanner.co.in/airlines-all.html"
                    target="_blank">&raquo AirlineInformation</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://www.expedia.com/Flights"
                    target="_blank">&raquo
                    CheapFlights</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://www.flyksa.com/Fr/" target="_blank">&raquo
                    KosovaAirline</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="https://wizzair.com/en-gb" target="_blank">&raquo
                    Wizzair</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a
                    href="https://www.booking.com/index.en.html?aid=1725925;label=en-hc-s4glC*wNOeGEZ7B_fjY56gS336411372683:pl:ta:p1:p2:ac:ap1t1:neg:fi:tikwd-29738972:lp9070165:li:dec:dm;ws=&gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyLVGbHhMLxOMak9qpd0ujKJ9cfnMF8B3yjazKJZ-lNSBOCK3-zLs8gaAuC-EALw_wcB"
                    target="_blank">&raquo
                    Hotels and More</a>
                </li>
                <li style="border-bottom: 1px solid #919090"><a href="../README.md" target="_blank">&raquo Readme</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-left">
            <div class="footer-box">
              <h6>ME TE REJAT</h6>

              <h4>Dubai - 6 ditë - €629</h4>

              <p>Dita e Parë: Nisja me Autobus nga Prishtina në Aeroportin e Dubait.It was popularised in the 1960s with
                the release of </p>
              <a style="float: left" href="lavdatat.html">Read more &raquo</a>
              <br>


              <div class="latestb">
                <h4>Barcelona - 6 ditë - €829</h4>

                <p>Dita e Parë: Nisja me Autobus nga Prishtina në Aeroportin e Shkupit . It was popularised in the 1960s
                  with the release otaining</p>
                <a style="float: left" href="lavdata3.html">Read more &raquo</a>
                <br>
                <br>

              </div>
            </div>
          </div>
        </div>
        <div class="footer-left">
          <div class="footer-box">
            <h6 id="kontakti">CONTACT US</h6>
            <form id="contact-form" method="post" action="" autocomplete="on">
              <input type="text" id="name" name="name" placeholder="Name" class="required">
              <input type="text" id="email" name="email" placeholder="Email" class="required">
              <textarea name="message" placeholder="Message" rows="6" class="required"></textarea><br>
              <input type="submit" name="SUBMIT" value="SUBMIT">
            </form>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </footer>
  </div>
  <script src="../js/backtotop.js"></script>
  <script src="../js/rregullat.js"></script>


</body>

</html>
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Footeri</title>
    <meta charset="UTF-8">
</head>  

<body>
    <footer>
            <div class="footer-main">
                <div class="footer-inner">
                    <div class="footer-left">
                        <div class="footer-box">

                            <h6>ABOUT US</h6>
                            <img src="../images/blonde.jpg" width="215px" height="90px" />


                            <p> JOLILU travel është një udhëzues gjithëpërfshirës për destinacionet
                                më të mira të udhëtimit në botë.Ne ofrojmë përmbajtje të detajuar
                                dhe të saktë të udhëtimit, të dizajnuara për të frymëzuar udhëtarët globalë.</p>
                            <a style="float: left" href="Sherbimet.php">Read more &raquo</a>
                        </div>
                    </div>
                    <div class="footer-left">
                        <div class="footer-box">
                            <h6>LINK BLOCK</h6>
                            <ul>
                                <li style="border-bottom: 1px solid #919090"><a href="https://aria-travel.com/"
                                        target="_blank">&raquo
                                        AriaTravelAlbania</a>
                                </li>
                                <li style="border-bottom: 1px solid #919090"><a href="https://travel.com/"
                                        target="_blank">&raquo
                                        Travel</a>
                                </li>
                                <li style="border-bottom: 1px solid #919090"><a href="https://www.flyfrontier.com/"
                                        target="_blank">&raquo
                                        FlyFrontier</a>
                                </li>
                                <li style="border-bottom: 1px solid #919090"><a
                                        href="https://www.skyscanner.co.in/airlines-all.php" target="_blank">&raquo
                                        AirlineInformation</a>
                                </li>
                                <li style="border-bottom: 1px solid #919090"><a href="https://www.expedia.com/Flights"
                                        target="_blank">&raquo
                                        CheapFlights</a>
                                </li>
                                <li style="border-bottom: 1px solid #919090"><a href="https://www.flyksa.com/Fr/"
                                        target="_blank">&raquo
                                        KosovaAirline</a>
                                </li>
                                <li style="border-bottom: 1px solid #919090"><a href="https://wizzair.com/en-gb"
                                        target="_blank">&raquo
                                        Wizzair</a>
                                </li>
                                <li style="border-bottom: 1px solid #919090"><a
                                        href="https://www.booking.com/index.en.php?aid=1725925;label=en-hc-s4glC*wNOeGEZ7B_fjY56gS336411372683:pl:ta:p1:p2:ac:ap1t1:neg:fi:tikwd-29738972:lp9070165:li:dec:dm;ws=&gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyLVGbHhMLxOMak9qpd0ujKJ9cfnMF8B3yjazKJZ-lNSBOCK3-zLs8gaAuC-EALw_wcB"
                                        target="_blank">&raquo
                                        Hotels and More</a>
                                </li>
                                <li style="border-bottom: 1px solid #919090"><a href="../README.md"
                                        target="_blank">&raquo Readme</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-left">
                        <div class="footer-box">
                            <h6>FROM THE BLOG</h6>
                            <h4>7 Vendet më të vizituara këtë vit..</h4>

                            <p>Spanja ka qenë gjithmonë destinacion i preferuar për shumëkënd,
                                dhe ende mbetet një nga vendet..
                                <a style="float: left" href="lavdatat.php">Read more &raquo</a>
                                <br>
                                <br>

                                <div class="latestb">
                                    <h4>Vizitë në Britani</h4>
                                    <p>Asnjë listë destinacionesh pushimi nuk do ishte e plotë pa përfshirë
                                        aty Britaninë e Madhe: jo vetëm Anglinë, por edhe Skocinë...</p>
                                    <a style="float: left" href="lavdata2.php">Read more &raquo</a>
                                </div>
                        </div>
                    </div>
                </div>
        <?php
        if(isset($_POST['email'])) {
            $email_to = "jon_hajdini@hotmail.com";
            $email_subject = "Summarized propose of the email";
//Errors to show if there is a problem in form fields.
            function died($error) {

                echo "Na vjen keq që ne s'mund të ndjekim kërkesën tuaj për shkak të gabimit,ose mos permbushjes te keresave
                te te dhenave tuaja.<br /><br />";
                echo "Below is the error(s) list <br /><br />";
                echo $error."<br /><br />";
                echo "Ju lutem shtypni butonin Back per t'i rishkruar te dhenat  e juaja: <br><br/>>";
                die();
            }
// validation expected data exists
            if(!isset($_POST['first_name']) ||
                !isset($_POST['last_name']) ||
                !isset($_POST['email']) ||
                !isset($_POST['telephone']) ||
                !isset($_POST['comments'])) {
                died('We are sorry to proceed your request due to error within form entries');
            }
            $first_name = $_POST['first_name']; // required
            $last_name = $_POST['last_name']; // required
            $email_from = $_POST['email']; // required
            $telephone = $_POST['telephone']; // not required
            $comments = $_POST['comments']; // required
            $error_message = "";
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

            //--------------------------------preg_match function----------------------------------------------------------------
            if(!preg_match($email_exp,$email_from)) {

                $error_message .= 'Ju keni shenuar email jo-valide!<br />';
            }
            $string_exp = "/^[A-Za-z .'-]+$/";
            if(!preg_match($string_exp,$first_name)) {
                $error_message .= 'Emri juaj eshte jo-valid<br />';
            }
            if(!preg_match($string_exp,$last_name)) {

                $error_message .= 'Mbiemri juaj eshte jo-valid<br />';
            }


            //-------------------------------- strlen function -----------------------------------------------------------------

            if(strlen($comments) < 2) {

                $error_message .= 'Komenti juaj eshte jo-valid<br />';
            }
            if(strlen($error_message) > 0) {
                died($error_message);
            }
            $email_message = "Form details below.\n\n";
            function clean_string($string) {
                $bad = array("content-type","bcc:","to:","cc:","href");
                return str_replace($bad,"",$string);
            }
            $email_message .= "First Name: ".clean_string($first_name)."\n";
            $email_message .= "Last Name: ".clean_string($last_name)."\n";
            $email_message .= "Email: ".clean_string($email_from)."\n";
            $email_message .= "Telephone: ".clean_string($telephone)."\n";
            $email_message .= "Comments: ".clean_string($comments)."\n";
// create email headers
            $headers = 'From: '.$email_from."\r\n".
                'Reply-To: '.$email_from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers);

            ?>
            <!-- include your own success html here -->


            <?php
            echo '<script type="text/javascript">';
            echo ' alert("Ju faleminderit qe kontaktuat me Ne")';  //not showing an alert box.
            echo '</script>';
        }
        ?>
        <br>
        <h6 id="kontakti">CONTACT US</h6>
        <form name="contactform" method="post" action="footer.php">
            <table width="450px">
                <tr>
                    <td valign="top">
                        <label for="first_name">Emri</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="first_name" maxlength="50" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top"">
                    <label for="last_name">Mbiemri</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="last_name" maxlength="50" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="email">Email Addressa</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="email" maxlength="80" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="telephone">Numri i Telefonit</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="telephone" maxlength="30" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="comments">Komenti juaj</label>
                    </td>
                    <td valign="top">
                        <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" value="Submit">  </a>
                    </td>
                </tr>
            </table>

    </footer>





</body>
</html>
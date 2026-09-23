<?php
header('Content_Type: text/html; chartset=UTF-8');
$show_form_class = true;

if (isset($_POST['submit'])){  // wird nur ausgeführt wenn formular abgeschickt
    $mail_headers   = array();
    $mail_headers[] = "MIME-Version: 1.0";
    $mail_headers[] = "Content-type: text/plain; charset=utf-8";
    $mail_headers[] = "From: Kavita <kontakt@as-kavita.online>";

    $mail_empfaenger = "kontakt@as-kavita.online";
    $mail_betreff = "Kontaktformular von Kavita";
    
    $mail_text = $_POST["agency"]."\n";
    $mail_text .= $_POST["fullname"]."\n";
    $mail_text .= $_POST["email"]."\n";
    $mail_text .= $_POST["phone"]."\n\n";
    $mail_text .= $_POST["reference"]."\n\n";
    $mail_text .= $_POST["textarea"];


    // echo $_POST["agency"];
    // echo $_POST["fullname"];
    // echo $_POST["email"];
    // echo $_POST["phone"];
    // echo $_POST["reference"];
    // echo $_POST["textarea"];


    // $mailtext = $_POST["agency"] 
    // .$_POST["fullname"] 
    // .$_POST["email"]
    // .$_POST["phone"]
    // .$_POST["reference"]
    // .$_POST["textarea"];

    // echo $mailtext;


    mail(
        $mail_empfaenger,
        $mail_betreff,
        $mail_text,                                  
        implode("\r\n",$mail_headers)
    );

    $show_form_class = false;
}
?>






<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8" />
        <title>Kavita</title>
         <link rel="stylesheet" href="/css/reset.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/tablet.css">
         <link rel="stylesheet" href="/css/laptop.css" />
        <link rel="stylesheet" href="/css/desktop.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0," />
    </head>
    <body>
        <header>
            <div class="main_wrapper">
                <div class="header_content">
                    <a href="index.html">
                        <img
                            class="logo_head"
                            src="Logo/Logo_90_90.png"
                            alt="Logo"
                        />
                    </a>
                    <nav class="menu_header">
                        <label for="burger_toggle">
                            <img
                                class="burger_icon"
                                src="images/burger-menu-svgrepo-com.svg"
                                alt="menu_icon"
                            />
                        </label>
                        <input type="checkbox" id="burger_toggle" />
                        <ul class="mainnav">
                            <li class="mainnav__item">
                                <a class="mainnav__link" href="index.html"
                                    >Startseite</a
                                >
                            </li>
                            <li class="mainnav__item">
                                <a class="mainnav__link" href="uebermich.html"
                                    >Über mich</a
                                >
                            </li>
                            <li class="mainnav__item ">
                                <a class="mainnav__link" href="portfolio.html">Portfolio</a>
                            </li>
                            <li class="mainnav__item mainnav__item--current">
                                <a class="mainnav__link" href="kontakt.php"
                                    >Kontakt</a
                                >
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main>
            <section>
                <h1 class="page_titel">Kontakt</h1>
                <div class="contact_wrapper">
                    <div class="contact__image">
                        <a href="index.html">
                            <img
                                class="form__image"
                                src="Logo/logo_webfrei.png"
                                alt="logo"
                            />
                        </a>
                    </div>
                    <form accept-chartset="utf-8" action="" method="POST" class="<?php echo $show_form_class ? 'visible' : 'hidden'; ?> ">
                        <div class="form_wrapper ">
                            <label for="agency">Agentur/ Firma:</label>
                            <input
                                type="text"
                                id="agency"
                                value=""
                                name="agency"
                                required
                                placeholder="WAK Full Service Agentur GmbH"
                            />

                            <label for="fullname">Dein Name:</label>
                            <input
                                type="text"
                                id="fullname"
                                value=""
                                name="fullname"
                                required
                                placeholder="Alexander Schurr"
                            />

                            <label for="email">E-Mail:</label>
                            <input
                                type="text"
                                id="email"
                                value=""
                                name="email"
                                required
                                placeholder="schurr@wak-online.de"
                            />

                            <label for="phone">Telefon: (optional)</label>
                            <input
                                type="text"
                                id="phone"
                                value=""
                                name="phone"
                                placeholder="0123/ 4567890 "
                            />

                            <label for="reference">Betreff:</label>
                            <input
                                type="text"
                                id="reference"
                                value=""
                                name="reference"
                                
                            />
                            <label for="textarea">Deine Nachricht</label>
                            <textarea
                                name="textarea"
                                id="textarea"
                                cols="50"
                                rows="10"
                            ></textarea>
                        </div>
                        <!-- <button class="formbutton" type="submit">Senden</button> -->
                        <button name="submit" type="submit" class="formbutton">Absenden</button>
                    </form>

                    <div class="text__sent <?php echo $show_form_class ? 'hidden' : 'visible'; ?>">
                        <p>Vielen Dank, deine Nachricht wurde erfolgreich versendet.</p>
                    </div>
                </div>

        
            </section>
        </main>
        <footer>
            <div class="footer__wrapper">
                <div class="footer__wrapperinner">
                    <div>
                    <ul class="footer__legal">
                        <li class="footer__legaltext"><a class="legaltext__link" href="#">Impressum</a></li>
                        <li class="footer__legaltext"><a class="legaltext__link" href="#">Datenschutz</a></li>
                    </ul>
                    </div>
                    <div>
                    <ul class="socialmedia">
                        <li class="socialmedia__item">
                            <a
                                href="https://www.instagram.com/aleckz_kavita_payne/" class="socialmedia__link"
                            >
                                <img
                                    src="social-media/Instagram_Glyph_White.png"
                                    alt=""
                                    class="socialmedia__icon"
                                />
                                Instagram
                            </a>
                        </li>
                        <li class="socialmedia__item">
                            <a href="https://www.facebook.com/?locale=de_DE" class="socialmedia__link">
                                <img
                                    src="social-media/Facebook_Logo_Secondary.png"
                                    alt=""
                                    class="socialmedia__icon"
                                />
                                Facebook
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>              
                <p class="footer__copyright">Copyright © 2025 | Kavita</p>
            </div>
        </footer>

        

        <!-- <script>
    function formularAbsenden() {
      // Beispiel: Validierung
    let agency = document.getElementById("agency").value;
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let reference = document.getElementById("reference").value;
    let textarea = document.getElementById("textarea").value;
    
    console.log('Die Agency ist', agency)
    console.log('Der Fullname ist:', fullname)
    console.log('Die Email ist:', email)
    console.log('Das Phone ist:', phone)
    console.log('Die Reference ist:', reference)
    console.log('Die Textarea ist:', textarea)


    // Formular programmatisch absenden
    // document.getElementById("meinFormular").submit();
    }
    </script> -->
    </body>
</html>

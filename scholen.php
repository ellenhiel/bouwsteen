<?php

    if(!empty($_POST)){            
        $email = strtolower($_POST['email']);
        $firstname = strtolower($_POST['firstname']);
        $lastname = strtolower($_POST['lastname']);
        $phone = $_POST['phone'];
        $extra = $_POST['extra'];
        $checkbox1 = $_POST['checkbox1'];
        $checkbox2 = $_POST['checkbox2'];
        if($checkbox1 === "on") {
            $nieuwsbrief = "ja";
        } else {
            $nieuwsbrief = "nee";
        }
        if($checkbox2 === "on") {
            $testpersoon = "ja";
        } else {
            $testpersoon = "nee";
        }
        $name = "Dag " . $_POST['firstname'] . " " . $_POST['lastname'] . "\n\n" . 
                "Bedankt voor je deelname als testpersoon aan ons project. We contacteren je zodra ons project klaar is om te testen." . "\n\n" . "\n\n" .
                "Met vriendelijke groeten," . "\n\n" .
                "Ellen Hiel, Stijn Bouckaert en Deborah Baeten";
        $subject = "Proefversie Bouwsteen";

        $info = "Email: " . $email . "\n\n" .
                    "Voornaam: " . $firstname . "\n\n" .
                    "Naam: " . $lastname . "\n\n" .
                    "Nummer: " . $phone . "\n\n" .
                    "Opmerking: " . $extra . "\n\n" .
                    "Nieuwsbrief: " . $nieuwsbrief . "\n\n" .
                    "Testpersoon: " . $testpersoon;

        if ($_POST['email'] == "" || $_POST['firstname'] == "" || $_POST['lastname'] == "") {
            $error = "Vul alle vereiste vakken in.";
        } else {
            mail("info@bouwsteen.site", $subject, $info);
            mail($email, $subject, $name);
            $done = "Bedankt voor je inzending.";
        }
    }
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="index.css">
    <title>Bouwsteen</title>
    <link rel="icon" type="image/x-icon" href="/images/Final-logo_Bouwsteen.png">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MQB3878');</script>
<!-- End Google Tag Manager -->
<!-- Hotjar Tracking Code for https://bouwsteen.site/ -->
    <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2763871,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQB3878"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <nav>
        <div class="small">
        <a href="/">
            <!--<img src="/images/Final-logo_Bouwsteen.png" alt="logo Bouwsteen">-->
            <img src="images/default-image.jpg" alt="logo Bouwsteen">
        </a>
        <div class="fullnav">
            <a href="/">home</a>
            <a href="scholen">scholen</a>
        </div>
        <div class="mobilenav closed">
            <div class="div1"></div>
            <div class="div2"></div>
            <div class="div3"></div>
        </div>
        <div class="mobilenav opened">
            <a href="/#hoewerkthet">Hoe werkt het?</a>
            <a href="/#wiezijnwij">Wie zijn wij?</a>
            <a href="scholen">scholen</a>
        </div>
        </div>
    </nav>

    <div class="small">
    <div class="gebruik">
        <h2>Het gebruik van Bouwsteen.</h2>
        <div>
            <p>Elke school krijgt een maand gratis proefperiode waarna ze beslissen of ze verdergaan. Hierna betalen ze
                per leerling en leerkracht die ze toevoegen een vaste prijs per gebruiker per maand.
                <br><br>De leerkrachten voegen een opdracht toe per klas waarbij ze de leerlingen aanvinken die deze
                volbracht hebben. Hierna krijgen de leerlingen hun punten toegestuurd waarmee ze hun avatars kunnen
                personaliseren. </p>
        </div>
    </div>

    <img class="firstimg" src="images/foto3.jpg" alt="gemotiveerde kinderen op school">
    <img class="secondimg" src="images/foto4.jpg" alt="gemotiveerde kinderen">

    <div class="waarom">
        <h2>Waarom Bouwsteen?</h2>
        <p>Deze app motiveert de leerlingen op een manier waarbij we de leerkrachten niet te veel belasten. De opmaak en
            werking van de app zorgt ervoor dat het makkelijk en vlot in gebruik is.
            <br><br>Nog niet helemaal overtuigd? Probeer dan gratis één maand op proef.</p>
    </div>

    <div class="proefversie" id="start">
        <h2>Proefversie aanvragen</h2>
        <p id="proefversie">Aangezien dit een schoolproject is, zullen we het platform niet up-to-date kunnen houden.
            <br><br>Daarom kunnen we geen proefversie aanbieden maar als je geïnteresseerd bent, laat gerust je gegevens
            hieronder achter.
            <br><br>We zijn nog op zoek naar testgebruikers en alle feedback is welkom.</p>
            
        <form action="/scholen#proefversie" method="POST" enctype="multipart/form-data" name="EmailForm">
            <?php if(isset($error)): ?>
                <br>
                <p style="color:red;font-weight:bold;"><?php echo $error; ?></p>
            <?php endif; ?>

            <?php if(isset($done)): ?>
                <br>
                <p style="color:green;font-weight:bold;"><?php echo $done; ?></p>
            <?php endif; ?>
            
            <div class="firstname">
                <label for="firstname">Voornaam*</label>
                <input type="text" name="firstname">
            </div>

            <div class="lastname">
                <label for="lastname">Naam*</label>
                <input type="text" name="lastname">
            </div>

            <div class="phone">
                <label for="phone">Telefoonnummer</label>
                <input type="tel" name="phone">
            </div>

            <div class="email">
                <label for="email">Emailadres*</label>
                <input type="email" name="email">
            </div>

            <br>

            <div class="checkbox">
                <input type="checkbox" name="checkbox1" class="checkbox">
                <label for="checkbox">schrijf mij in voor de nieuwsbrief</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" name="checkbox2" class="checkbox">
                <label for="checkbox">ik wil graag testpersoon zijn</label>
                <p>We zullen je enkele keren contacteren dit schooljaar om online een test te doen waarin je vragen krijgt
                    om in de app te navigeren. Op die manier weten we wat we moeten aanpassen om het gebruiksvriendelijker
                    te maken.</p>
            </div>
            
            <div class="extra">
                <label for="extra">Eventuele opmerking of mededeling</label>
                <textarea name="extra" id="extra" cols="30" rows="5"></textarea>
            </div>

            <br>
            
            <button type="submit">vraag proefversie aan</button>

        </form>
    </div>
    </div>

    <footer>
        <div>
            <h3>Contact</h3>
            <p><a href="mailto:someone@example.com">info@bouwsteen.site</a></p>

            <h3>Hoe werkt het?</h3>
            <h3>Wie zijn wij?</h3>
            <h3>Scholen</h3>
            <p>© Bouwsteen 2021</p>
        </div>
    </footer>

    <script src="js/nav.js"></script>
</body>

</html>
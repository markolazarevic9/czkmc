<?php

$msg = '';
$msgClass = '';

if(filter_has_var(INPUT_POST, 'submit')) {
    
   $userName = $_POST['nameF'];
   $userLastName = $_POST['nameL'];
   $userEmail = $_POST['email'];
   $message = $_POST['message'];
   $messageSubject = "Poruka sa sajta";

   if(!empty($userEmail) && !empty($userName) && !empty($message)) {
    //passed
    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL) === false) {
        //failed
        $msg = 'molimo vas koristite ispravan mejl  ';
        $msgClass = 'alert';
    } else {
        //passed
       
        $to = "mare99lazarevic@gmail.com";
        $subject = 'Poruka od: '.$userName. ' ' .$userLastName ;

        $body = '<h2>Kontakt forma </h2>
        <h4>Ime i prezime </h4><p>'.$userName. ' ' .$userLastName.'</p>
        <h4>Email adresa</h4><p>'.$userEmail.'</p>
       
        <h4>Poruka</h4><p>'.$message.'</p>
    ';
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: " .$userName. ' ' .$userLastName. "<".$userEmail.">". "\r\n";

        if(mail($to,$subject,$body,$headers)) {
            $msg = 'Vaša poruka je uspešno poslata';
            $msgClass = 'success';

        } else {
            $msg = 'Vaša poruka nije poslata';
            $msgClass = 'alert';
        }

    }
   } else {
    //failed
    $msg = 'Molimo vas da popunite sva polja';
    $msgClass = 'alert';
   }
    
}
?>




<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Centar za kulturu">
    <title>Kontakt | Centar za kulturu opštine Malo Crniće</title>

    <script src="https://kit.fontawesome.com/486587c22a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link id="faviconId" rel="icon" type="image/png"  href="../img/favicon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/kontakt.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;900&display=swap" rel="stylesheet">
</head>
<body id="body">
    <header>
        <div class="banner">
            <div class="overlay">
                
            <div id="social-links">
                    <a data-toggle="tooltip" title="Facebook profil" href="https://www.facebook.com/czk.mcrnice" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a data-toggle="tooltip" title="YouTube kanal" href="https://www.youtube.com/channel/UCzQZG1SYE4J9oVOnQPk-Eog" target="_blank"><i class="fab fa-youtube-square"></i></a>
                    <a data-toggle="tooltip" title="Email" href="mailto:czk@gmail.com" target="_blank"><i class="fas fa-envelope-square"></i></a>
                </div>
               
                <div class="nav-menu">
                    <div class="menu-toggle" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                  <h1 id="h1-1">CZK</h1>
                    <h1 id="h1-2"> opštine Malo Crniće</h1> 
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" data-nav-section="pocetna" aria-current="page" href="../index.html">Početna</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="vesti.html">Vesti</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-nav-section="pocetna" aria-current="page" href="dokumenta.html">Dokumenta</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="pozoriste.html">Pozorište</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="casopisstig.html">Časopis Stig</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="faomc.html">Folklorni ansambl</a>
                        </li>
                    </li>
                    
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Manifestacije</a>
                          <ul class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="fedras.html">Fedras</a></li>
                            <li><a class="dropdown-item" href="stigfest.html">Stig fest</a></li>
                            <li><a class="dropdown-item" href="krenikolo.html">Kreni kolo</a></li>
                            
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="galerija.html">Galerija</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="kontakt.php">Kontakt</a>
                          </li>
                        
                      </ul>  
                      
                </div>
               
              <section id="p1" >
                    <h2>Kontakt <br>strana</h2> <br>
              </section>
             </div>
             
        </div>

     
    </header>

<!-- MAIN -->
    <div class="row">
        <h1 id="naslov">Kontakt</h1> 
    </div>
 
    <div class="row">
        <div class="col-6 contact">
           <section id="info">
                <h4><strong>Centar za kulturu Malo Crnice </strong></h4> <hr>
                <h5><i class="fas fa-phone-square-alt"></i> Telefon: <br> <br> <strong>012-254-345</strong></h5> <br>
                <h5><i class="fas fa-map-marked-alt"></i> Adresa: <br> <br> <strong>Bajlonijeva 119 Malo Crniće, 12311, Srbija </strong></h5> <br>
                <h5><i class="fas fa-envelope-square"></i> E-mail: <br> <br> <strong> czk@gmail.com</strong></h5> <br>
                <h5><i class="fas fa-briefcase"></i> Radno vreme: <br> <br> <strong> Ponedeljak - Petak <br> 08:00 - 15:00 </strong></h5> <br>
                
           </section>
        </div>

        <div class="col-6 contact">
            <form method="POST" action="kontakt.php" autocomplete="off">
                      <h4><strong>Kontaktirajte nas</strong></h4> <hr>
                    <?php if($msg != ''): ?>
                     <div class=" <?php echo $msgClass; ?>"> <?php echo $msg ?>  </div>
                     <?php endif; ?>
                <label for="nameF">Ime</label>  
                <input placeholder="Unesite vaše ime" type="text" id="nameF" name="nameF"> 
                <label for="nameL">Prezime</label> 
                <input placeholder="Unesite vaše prezime" type="text" id="nameL" name="nameL"> 
                <label  for="email">Email</label> 
                <input name="email" placeholder="Unesite vašu email adresu" id="email" type="email"> 
                <label for="message">Poruka</label> 
                <textarea placeholder="Unesite vašu poruku" name="message" id="message" cols="60" rows="10"></textarea>   
                <button name="submit" id='submit'>Pošalji</button>
            </form>
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-12">
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d355.3589516462206!2d21.28786872219953!3d44.55873202833025!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf46c0dd4fae94e98!2z0J7Qv9GI0YLQuNC90LAg0JzQsNC70L4g0KbRgNC90LjRm9C1!5e0!3m2!1ssr!2srs!4v1609521854426!5m2!1ssr!2srs" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
<hr>        
    </div>
    
    
  
    
     <div class="gototop">
		<a id="goTop" href="#"><i class="fas fa-arrow-up fa-2x"></i></a>
    </div>

    <div id="footer">
        <div class="row">
            <div class="col-4">
                <h2>Mapa sajta</h2> <hr>
                <ul class="flex-column" style="text-align: center;">
                    <li class="nav-item">
                        <a class="nav-link" data-nav-section="pocetna" aria-current="page" href="../index.html">Početna</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="vesti.html">Vesti</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="dokumenta.html">Dokumenta</a>
                     </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pozoriste.html">Pozorište</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="casopisstig.html">Časopis Stig</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="faomc.html">Folklorni ansambl</a>
                    </li>
                </li>
                    <li class="nav-item">Manifestacije
                        <ul class="manLinks">
                            <li><a class="nav-link" href="fedras.html">Fedras</a></li>
                            <li><a class="nav-link" href="stigfest.html">Stig fest</a></li>
                            <li><a class="nav-link" href="krenikolo.html">Kreni kolo</a></li> 
                        </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="galerija.html">Galerija</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kontakt.php">Kontakt</a>
                      </li>         
                  </ul>         
            </div>
            <div class="col-4">
                <h2>Kontakt</h2> <hr>
                
                <h5><i class="fas fa-phone-square-alt"></i> Telefon:  <br> <strong>012-254-345</strong></h5> <br>
                <h5><i class="fas fa-map-marked-alt"></i> Adresa:  <br> <strong>Bajlonijeva 119 Malo Crniće, <br> 12311, Srbija </strong></h5> <br>
                <h5><i class="fas fa-envelope-square"></i> E-mail:  <br> <strong> czkomc@yahoo.com</strong></h5> <br>
                <h5><i class="fas fa-briefcase"></i> Radno vreme:  <br> <strong> Ponedeljak - Petak <br> 08:00 - 15:00 </strong></h5> <br>
            </div>
            <div class="col-4">
                <h2>Linkovi</h2> <hr>
                <div id="f">
                    <a data-trigger="hover" data-toggle="tooltip" title="Facebook stranica" target="_blank" href="https://www.facebook.com/czk.mcrnice"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a  data-toggle="tooltip" title="YouTube kanal" target="_blank" href="https://www.youtube.com/channel/UCzQZG1SYE4J9oVOnQPk-Eog"><i class="fab fa-youtube-square fa-2x"></i></a>
                    <a  data-toggle="tooltip" title="Pošaljite nam email" target="_blank" href="mailto:czkomc@yahoo.com"><i class="fas fa-envelope-square fa-2x"></i></a> <br> <br> <br>

                    <a  data-toggle="tooltip" title="Opština Malo Crniće" target="_blank" href="https://opstinamalocrnice.rs/"> <img src="../img/opstinamc.png" alt="Grb opstine Malo Crnice" style="max-width: 150px; max-height: 150px;"></a> <br> <br><br><br>
                    <a  data-toggle="tooltip" title="Ministarstvo kulture" target="_blank" href="https://www.kultura.gov.rs/"> <img src="../img/min.png" alt="Logo ministartsva kulture" style="max-width: 250px; max-height: 250px;"></a>
                </div>
            </div>    
        </div>
       
        <div class="row">
            <div class="col-12">
                <br> <br>
                <span> <i class="far fa-copyright"></i> <em>Copyright 2021 Centar za kulturu Malo Crniće </em></span> <br> 
                <span> Design by <a id="me" href="https://www.linkedin.com/in/marko-lazarevic-dev/">Marko</a></span>
            </div>
        </div>
    </div>
    

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        

        <script src="../js/validation.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="../js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
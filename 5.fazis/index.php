<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8" /> <!-- Ékezetes magyar karakterek miatt. Á, -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Valaha Tanya 	| Fő oldal.</title>
    <link rel="stylesheet" href="style.css" /> <!-- CSS fájl beágyazása Á, -->
  </head>


  <body>

    <?php  // Menüpontok tömbben eltárolása Á, 
        $menuItems = array(
            "fooldal" => "Főoldal",
            "rolunk" => "Rólunk",
            "termekeink" => "Termékeink",
            "szolgaltatasok" => "Szolgáltatások",
            "galeria" => "Galéria",
            "kapcsolat" => "Kapcsolat",
            "bejelentkezes" => "Bejelentkezés"
             );
        // Aktív menüpont ellenőrzése Á, 
        $currentMenu = isset($_GET['menu']) ? $_GET['menu'] : 'fooldal';
    ?>

    <nav> <!-- A <nav> elem egy szemantikus HTML elem, ami azt jelzi a böngészőnek és a keresőmotoroknak, hogy a benne lévő tartalom valamilyen navigációs elem Á, -->
        <ul>
           <?php
            // Menüpontok létrehozása a tömb alapján Á, 
            foreach ($menuItems as $key => $value) {
                // Aktív menüpont ellenőrzése és a megfelelő class hozzáadása Á, 
                $activeClass = ($currentMenu === $key) ? 'class="active"' : '';
                echo "<li><a href=\"index.php?menu={$key}\" {$activeClass}>{$value}</a></li>";
              }
            ?>
        </ul>
    </nav>

    <?php
        // A menüpontot ellenőrizzük a GET paraméter alapján Á, 
        $menu = isset($_GET['menu']) ? $_GET['menu'] : 'fooldal';

        // Az adott menüpontnak megfelelő tartalom kiválasztása Á, 
        switch ($menu) {
            case 'fooldal':
                include 'index.html'; // Például 'fooldal.html' tartalmát jelenítjük meg Á,
                break;
            case 'rolunk':
                include 'rolunk.html'; // Például 'rolunk.html' tartalmát jelenítjük meg Á,
                break;
            case 'termekeink':
                include 'termekeink.html'; // Például 'termekeink.html' tartalmát jelenítjük meg Á,
                break;
            case 'szolgaltatasok':
                include 'szolgaltatasok.html'; // Például 'szolgaltatasok.html' tartalmát jelenítjük meg Á,
                break;
            case 'galeria':
                include 'galeria.html'; // Például 'galeria.html' tartalmát jelenítjük meg Á,
                break;
            case 'kapcsolat':
                include 'kapcsolat.html'; // Például 'kapcsolat.html' tartalmát jelenítjük meg Á,
                break;
            case 'bejelentkezes':
                include 'bejelentkezes.html'; // Például 'bejelentkezes.html' tartalmát jelenítjük meg Á,
                break;
            // Egyéb menüpontok kezelése ... Á,
            default:
                include 'index.php'; // Alapértelmezett esetben a főoldal tartalmát jelenítjük meg Á,
                break;
        }
    ?>

    <section> <!-- hattervideo --> 
      <div class="indexvideo">
      <!-- Ha a háttér video túl nagy:
       <img src="stock_fotok/wheat-2391348_1920.jpg" alt="Szép kép a búzáról." style="width: 100%;"> Á, -->
       <video class="bg-video" muted autoplay loop playsinline>
        <source src="videok/dronfelvetel-1.mp4" type="video/mp4">
        A böngésződ nem támogatja a videót.
        </video>
        <script>
        document.querySelector('video').playbackRate = 0.9; // A lejátszási sebesség beállítása 0.9-re Á,
        </script>
      </div>
    </section>
    
    <section> <!-- Eredeti honlap.-->
      <div class="eredeti-honlap">
          <p> Eredeti oldal: <a href="https://www.valahatanya.hu">valahatanya.hu</a></p>
      </div>
    </section>

    <section><!-- Üres emelet.-->
      <div class="ures-emelet">
      </div>
    </section>
    
    <section><!-- Bemutatkozas-->
      <div class="bemutatkozas hatterkep">
              <h2>
                  Valaha Tanya.
              </h2>
          <div class="bemutatkozasszovege hatterkep">
                  <p> Egy pénzügyessé átképezett élelmiszer mérnök és egy gépészmérnök találkozásából kisülhet valami jó?
                      Bízunk benne!

                      Hosszú évek multi környezete után úgy döntöttünk, hogy nekünk valami más kell. Valami zöld, sok
                      állat, sok növény és biztonság (erkölcsi, anyagi, és fizikai). Egyelőre nem tudjuk, hogy ebből mennyit
                      tudunk megvalósítani, sajnos sok minden a külső körülményektől függ.
                      A kezdő lépéseket már megtettük. A farm épül, a sok növény és állat is reális. De rengeteg munka van
                      még előttünk, hogy a világunk olyan legyen, mint álmainkban.
                      Ha szeretnéd látni, hogy az álomból hogyan lesz valóság egy szántóföldből élhető bírtok, látogass meg
                      minket, vagy gyere el önkéntesnek! Szívesen látunk bárkit, aki már ezt csinálja egy kis
                      tapasztalatcserére, vagy aki most szeretne belevágni, hogy elkerülje a mi hibáinkat. Vagy csak
                      kíváncsi vagy, hogy milyen a vidéki élet?
                      (2010 tavasz)
                  </p>
          </div>
      </div>
    </section>

    <section><!-- Videok-->
      <div class="video-youtube"><!-- youtube video linkje Á, -->
             <iframe width="560" height="360" src="https://www.youtube.com/embed/XdNRYlm9NBo?si=GnPpiE7BW0BoZHiO&amp;start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro explicabo magnam obcaecati possimus harum voluptate deserunt 
                repellat id nesciunt dolorem. Odio, quod! Reprehenderit eligendi quo, deserunt dicta soluta tempora nesciunt?Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Iste doloremque sapiente 
              </p>
      </div>
    </section>

    <section><!-- Üres emelet2. 100px-->
      <div class="ures-emelet2">
      </div>
    </section>

    <section>
      <div class="video-sajatforras"> <!-- video sajat forrasbol Á, -->
            <video width="560" height="360" controls poster>
            <source src="videok/rovid-video.mp4" type="video/mp4">
            A böngésződ nem támogatja a videót.
            </video> 
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro explicabo magnam obcaecati possimus harum voluptate deserunt 
                repellat id nesciunt dolorem. Odio, quod! Reprehenderit eligendi quo, deserunt dicta soluta tempora nesciunt?Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Iste doloremque sapiente reiciendis a suscipit esse laboriosam modi autem similique eius, 
                atque odit eligendi aperiam enim nemo officia omnis facere? Neque. 
              </p>
      </div>
    </section>

    <section><!-- Üres emelet2.  100px.-->
      <div class="ures-emelet2">
      </div>
    </section>

    <section class="googleterkep">
      <div class="googlemaps ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86415.56773683122!2d18.54319362280797!3d47.40245130624054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476a10273b4ff0b9%3A0x639723bd3a3f570b!2sValaha%20Tanya!5e0!3m2!1shu!2shu!4v1712665850045!5m2!1shu!2shu"
          width="1400" height="400"  style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
   
    <section><!-- Üres emelet2. 100px-->
      <div class="ures-emelet2">
      </div>
    </section>

  </body>
</html>

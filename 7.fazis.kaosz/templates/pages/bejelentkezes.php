<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8" /> <!-- Ékezetes magyar karakterek miatt. Á, -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Valaha Tanya 	| Bejelentkezés.</title>
    <link rel="stylesheet" href="style.css" /> <!-- CSS fájl beágyazása Á, -->
  </head>


  <body> 

    <div class="indexkep">
      <!-- <img src="stock_fotok/farming-8210675.jpg" alt="Tanya madár távlatból."> Á, -->
    </div>    
      
      <nav> <!-- A <nav> elem egy szemantikus HTML elem, ami azt jelzi a böngészőnek és a keresőmotoroknak, hogy a benne lévő tartalom valamilyen navigációs elem Á, -->
        <ul>
          <li><a href="index.html">Főoldal</a></li>  <!-- a hivatkozásokat még be kell illeszteni ha elkészültek a '#' helyére. Á,-->
          <li><a href="rolunk.html">Rólunk</a></li>
          <li><a href="termekeink.html">Termékeink</a></li>
          <li><a href="szolgaltatasok.html">Szolgáltatások</a></li>
          <li><a href="galeria.html">Galéria</a></li>
          <li><a href="kapcsolat.html">Kapcsolat</a></li>
          <li><a class="active" href="bejelentkezes.html">Bejelentkezés</a></li>
        </ul>
      </nav>
      
       <section> <!-- hattervideo -->
      <div class="indexvideo">
      <!--    <img src="stock_fotok/wheat-2391348_1920.jpg" alt="Szép kép a búzáról." style="width: 100%;"> -->
       <video class="bg-video" muted autoplay loop playsinline>
        <source src="videok/dronfelvetel-1.mp4" type="video/mp4">
        A böngésződ nem támogatja a videót.
        </video>
        <script>
        document.querySelector('video').playbackRate = 0.9; // A lejátszási sebesség beállítása 0.9-re
        </script>
      </div>
    </section>
    
    <section> <!-- Eredeti honlap.-->
      <div class="eredeti-honlap">
          <p> Eredeti oldal: <a href="https://www.valahatanya.hu">valahatanya.hu</a></p>
      </div>
    </section>

    <section><!-- Üres emelet.-->
      <div class="ures-emelet3">
      </div>
    </section>

    <div class="loginmessage">
      <h3>Lépjen be, vagy regisztráljon!</h3>
    </div>

    <section>
      <div class="bejelentkezes">
        <img src="kepek/VTlogo.JPG" alt="Valaha Tanya tábla.">
        <form action = "belepes.php" method = "post">
          <fieldset style="width: 50px;">
            <legend>Bejlentkezés</legend>
            <br>
            <input type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
            <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
            <input type="submit" name="belepes" value="Belépés">
            <br>&nbsp;
          </fieldset>
        </form>

        <form action = "regisztracio.php" method = "post">
          <fieldset style="width: 50px;">
            <legend>Regisztráció</legend>
            <br>
            <input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
            <input type="text" name="utonev" placeholder="utónév" required><br><br>
            <input type="text" name="felhasznalo" placeholder="felhasználói név" required><br><br>
            <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
            <input type="submit" name="regisztracio" value="Regisztráció">
            <br>&nbsp;
          </fieldset>
        </form>
      </div>
    </section>

  </body>
</html>
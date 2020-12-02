<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Welcome</title>
</head>
<body class="back-app">

  <div class="background">
  <?php

    include("user_header.php");

  ?>

  <div class="title-content">

    <h1>DOBRO DOŠLI U 99FIT APLIKACIJU</h1>

    <p>Ova aplikacija je tu da vam pomogne prilikom kreiranja sopstvenog plana treninga, kao i prilikom kreiranja sopstvenog plana ishrane.
    Sigurni smo da ćete uz pomoć ove aplikacije moći da ostvarite vrlo dobre rezultate. Aplikacija je tu da vam olakša vežbanje i pruži vam sve na jednom mestu.</p>
  
  </div>

  <div class="container main-content">
    <div class="row">
      <div class="col">
        <img src="../images/VideoCamera.svg" alt="">
        <p>Aplikacija sadrži kompletan video materijal za trening u teretani i za trening kod kuće. Svaka vežba je snimljena tako da se vidi svaki bitan segment potreban za pravilno izvođenje same vežbe. Pored videa, u opisu se nalazi detaljno objašnjena tehnika izvođenja vežbe, a naveden je i glavni/sporedni mišić koji se aktivira prilikom izvođenja te vežbe.</p>
      </div>
      <div class="col">
        <img src="" alt="">
        <p>U opciji "trening" možete beležiti vaše treninge. Trening možete kreirati pre početka treninga ili možete na samom treningu zapisivati koje vežbe izvodite. Jako je dobra stvar što možete beležiti sa kojim ste težinama, odnosno opterećenjem radili na treningu. Unesete ime vežbe, broj serija , broj ponavljanja i opterećenje. Ovo će vam biti podsetnik i tako možete pratiti šta ste uradili na prošlom treningu i sa kojim opterećenjem. </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <img src="" alt="">
       <p class="p">Aplikacija poseduje i bazu fit recepta. Kada želite da probate neku novu poslasticu, a da se ona sastoji iz kvakitnih namirnica, dovoljno je da odaberete neki od recepta i pratite postupak izrade. Takođe, tu se nalaze i recepti za slane obroke. Svaki recept ima objašnjen postupak izrade i precizno određenu kalorijsku/nutritivnu vrednost.</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <img src="../images/Calculator.svg" alt="">
        <p>Kada je u pitanju ishrana, gotovo da sve imate na tacni. Aplikacija poseduje kalorijski/nutritivni kalkulator koji je tu da vam odredi kalorijsku i nutritivnu vrednost svake namirnice na osnovu unete gramaže te namirnice. Dakle, unesete ime namirnice, gramažu i kalkulator će automatski izbaciti broj kalorija i broj svih nutrijenta (proteina, hidrata, masti).</p>
      </div>
      <div class="col">
        <img src="../images/Apple.svg" alt="">
        <p>Postoji i opcija kreiranja sopstvenog plana ishrane.
          Sami sebi kreirate obrok u toku dana odabirom jedne ili više namirnica, a kalkulator će vam izračunati nutritivnu i kalorijsku vrednost tog obroka.
          Možete dodavati koliko god hoćete obroka u toku dana i imati ukupan zbir svih kalorija i nutrijenta koje ste uneli.</p>
      </div>
    </div>
  </div>



  <?php include('footer.php');  ?>
  </div>

</body>
</html>
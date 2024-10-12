<?php
require_once 'assets/components/header.php';
require_once 'assets/components/navbar.php';
?>
<style>
  nav{
    backdrop-filter: blur(1.5px);
    position: fixed;
  }
  nav :is(span, i){color: #fff;}
  nav:after{border-bottom: 1.75px solid rgba(255, 255, 255, .75);}

  /* hero section */
  .hero :is(span, hr){max-width: 992px;}

  /* clients section */
  .clients-home{padding: 1.25em;}
  .logo-wrapper{
    justify-content: space-around;
    flex-wrap: wrap;
    display: flex;
    width: 100%;
    gap: .75em;
  }
  .logo-wrapper img{
    filter: saturate(.5) contrast(1) grayscale(1);
    transition: all .15s;
    object-fit: contain;
    height: 5.5vh;
    flex: 1;
  }
  .logo-wrapper img:hover{filter: none;}

  /* services section */
  .services-home .wrapper > span{
    text-align: center;
    background: cyan;
  }
  .services-home .wrapper > .judul{font-weight: 600;}
  .services-home .wrapper > .caption{
    font-size: 2em;
    font-weight: 700;
  }

  @media(max-width: 768px) {
    .services-home .wrapper > span{text-align: left;}

  }

</style>

<main>
  <section class="hero" style="background: linear-gradient(180deg, rgba(1, 1, 3, .25), rgba(1, 1, 3, .5)), url('assets/img/hero_banner.png') center center / cover;">
    <div class="wrapper">
      <span class="headline">Hard Chrome Platting, Hydraulics, Pneumatics, Roll, Rekondisi Valve, Manufacturing dan Engineering Service</span>
      <hr>
      <span class="caption">Kawasan Kavling DPR Blok A No. 153 Kenanga, Cipondoh Kota Tangerang, Banten - Indonesia 151446</span>
      <a href="#" class="cta"><span>Hubungi Kami <i class="fa-solid fa-arrow-right"></i></span></a>

    </div>

  </section>

  <section class="clients-home">
    <div class="logo-wrapper">
      <img src="assets/img/samudra.png" alt="PT. Tangguh Samudra Jaya">
      <img src="assets/img/lontar_papyrus.png" alt="PT. Lontar Papyrus Oult & Paper Industry">
      <img src="assets/img/nestle.png" alt="PT. Nestlé Indonesia">
      <img src="assets/img/tanto.png" alt="PT. Tanto Intim Line">
      <img src="assets/img/pelindo.png" alt="PT. Pelabuhan Indonesia">

    </div>

  </section>

  <section class="services-home">
    <div class="wrapper">
      <span class="judul">Our Services</span>
      <span class="caption">Solusi tepat untuk mesin industri anda.</span>

    </div>

  </section>

</main>

<?php
require_once 'assets/components/footer.php';

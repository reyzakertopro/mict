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
  .hero .wrapper{min-height: 100vh;}
  .hero :is(span, hr){max-width: 992px;}

  /* clients section */
  .clients-home{padding: 1.25em;}
  .logo-wrapper{
    justify-content: space-around;
    flex-wrap: wrap-reverse;
    display: flex;
    width: 100%;
    gap: 1.75em;
  }
  .logo-wrapper img{
    filter: saturate(.5) contrast(1) grayscale(1);
    transition: all .15s;
    object-fit: contain;
    max-height: 2.25em;
    height: 5.5vh;
    width: calc(100%/3);
    flex: 1;
  }
  .logo-wrapper img:hover{filter: none;}

  /* services section */
  .services-home .wrapper{align-items: center;}
  .services-home .wrapper > span{text-align: center;}
  .services-home .wrapper > .caption{
    font-size: 2em;
    font-weight: 700;
  }
  .services-home .wrapper > span:nth-child(3){max-width: 768px;}

  /* insight section */

  @media(max-width: 768px) {
    .services-home .wrapper > span:nth-child(3){line-height: 1.5em;}

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
      <img src="assets/img/pelindo.png" alt="PT. Pelabuhan Indonesia">
      <img src="assets/img/lontar_papyrus.png" alt="PT. Lontar Papyrus Oult & Paper Industry">
      <img src="assets/img/nestle.png" alt="PT. Nestlé Indonesia">
      <img src="assets/img/tanto.png" alt="PT. Tanto Intim Line">

    </div>

  </section>

  <section class="services-home">
    <div class="wrapper">
      <span class="judul">Our Services</span>
      <span class="caption">Solusi tepat untuk mesin industri anda.</span>
      <span>seluruh pekerjaan kami dilakukan oleh ahli di bidangnya didukung dengan bengkel terbaik dan dilengkapi dengan peralatan yang lengkap dan memadai.</span>
      <div class="card-wrapper">
        <div class="card">
          <span><i class="fa-solid fa-compass-drafting"></i></span>
          <span class="judul">Engineering Design & Development</span>
          <span class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="card">
          <span><i class="fa-solid fa-industry"></i></span>
          <span class="judul">Manufacture</span>
          <span class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="card">
          <span><i class="fa-solid fa-layer-group"></i></span>
          <span class="judul">Hard Chrome Platting</span>
          <span class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="card">
          <span><i class="fa-solid fa-shield-halved"></i></span>
          <span class="judul">Ceramic Coating</span>
          <span class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>

      </div>

    </div>

  </section>

  <section class="insight-home">
    <div class="wrapper">
      <span class="judul">Projects & Updates</span>
      <div class="blog-wrapper">
        <div class="blog">
          <span class="date">date-month-year hour:minute</span>
          <span class="judul">Project 1</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <span class="date">date-month-year hour:minute</span>
          <span class="judul">Project 2</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <span class="date">date-month-year hour:minute</span>
          <span class="judul">Project 3</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <span class="date">date-month-year hour:minute</span>
          <span class="judul">Update 1</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <span class="date">date-month-year hour:minute</span>
          <span class="judul">Update 2</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <span class="date">date-month-year hour:minute</span>
          <span class="judul">Update 3</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <span class="date">date-month-year hour:minute</span>
          <span class="judul">Project 4</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>

      </div>

    </div>

  </section>

</main>

<?php
require_once 'assets/components/footer.php';

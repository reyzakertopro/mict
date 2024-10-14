<?php
require_once 'assets/components/header.php';
require_once 'assets/components/navbar.php';
?>
<style>
  nav{
    backdrop-filter: blur(2.25px);
    position: fixed;
  }
  nav :is(span, i){color: #fff;}
  nav:after{border-bottom: 1.75px solid rgba(255, 255, 255, .75);}
  nav.scrolled{box-shadow: 0 0 4px rgba(1, 1, 3, .25);}

  section:not(.hero) .wrapper span{line-height: 1.5em;}

  .thumbnail{padding: .15em;}

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
  .services-home .wrapper{
    align-items: center;
    gap: .75em;
  }
  .services-home .wrapper > span{text-align: center;}
  .services-home .wrapper > .caption{
    font-size: 2em;
    font-weight: 700;
  }
  .services-home .wrapper > span:nth-child(3){max-width: 768px;}

  /* insight section */
  .insight-home .wrapper{gap: .75em;}
  .insight-home .wrapper > span{text-align: center;}
  .blog-wrapper{
    justify-content: space-between;
    flex-wrap: wrap;
    padding: .5em 0;
    row-gap: 1.25em;
    display: flex;
  }
  .blog{
    max-width: calc(100% / 4 - 1.25em);
    flex-direction: column;
    padding: .5em 0;
    display: flex;
    width: 100%;
    gap: .5em;
  }
  .blog > .date{
    font-family: 'Sen', sans-serif;
    font-size: .85em;
  }
  .blog > .judul{
    font-size: 1.175em;
    font-weight: 600;
  }
  .blog > .description{font-size: .95em;}

  /* why choose us section */
  .choose-us{
    background: linear-gradient(180deg, rgba(1, 1, 3, .25), rgba(1, 1, 3, .5)), url('assets/img/james-sullivan-ESZRBtkQ_f8-unsplash.jpg') center center / cover;
    box-shadow: 0 0 4px rgba(1, 1, 3, .5);
  }
  .choose-us :is(span, li, i){color: #fff;}
  .choose-us .wrapper{align-items: center;}
  .segment-wrapper{
    justify-content: center;
    padding: .75em 0;
    flex-wrap: wrap;
    display: flex;
    row-gap: .75em;
  }
  .segment{
    width: calc(100% / 4);
    border-radius: 2.5px;
    transition: all .15s;
    min-width: 240px;
    padding: 1.5em;
  }
  .segment:hover{background: rgba(1, 1, 3, .15);}
  .segment:not(:nth-last-child(1)){
    border-right: 1px solid rgba(255, 255, 255, .5);
  }
  .segment .judul{
    text-shadow: 2.5px 2.5px 2.5px rgba(1, 1, 3, .25);
    font-size: 1.175em;
    font-weight: 600;
  }
  .segment ul{
    flex-direction: column;
    display: flex;
    gap: .25em;
  }

  @media(max-width: 768px) {
    /* services section */
    .services-home .wrapper > span:nth-child(3){line-height: 1.5em;}

    /* insight section */
    .blog{max-width: none;}

    /* why choose us section */
    .segment{width: 80%;}
    .segment:not(:nth-last-child(1)){
      border-bottom: 1px solid rgba(255, 255, 255, .5);
      border-right: none;
    }

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
      <span class="judul">Insight</span>
      <div class="blog-wrapper">
        <div class="blog">
          <div class="img-wrapper">
            <div class="thumbnail" style="width: 100%;">
              <img src="assets/img/update_placeholder.jpg" alt="update1">

            </div>

          </div>
          <span class="judul">Project</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <div class="img-wrapper">
            <div class="thumbnail" style="width: 100%;">
              <img src="assets/img/update_placeholder.jpg" alt="update1">

            </div>

          </div>
          <span class="judul">Project</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <div class="img-wrapper">
            <div class="thumbnail" style="width: 100%;">
              <img src="assets/img/update_placeholder.jpg" alt="update1">

            </div>

          </div>
          <span class="judul">Project</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <div class="img-wrapper">
            <div class="thumbnail" style="width: 100%;">
              <img src="assets/img/update_placeholder.jpg" alt="update1">

            </div>

          </div>
          <span class="judul">Project</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <div class="img-wrapper">
            <div class="thumbnail" style="width: 100%;">
              <img src="assets/img/update_placeholder.jpg" alt="update1">

            </div>

          </div>
          <span class="judul">Project</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <div class="img-wrapper">
            <div class="thumbnail" style="width: 100%;">
              <img src="assets/img/update_placeholder.jpg" alt="update1">

            </div>

          </div>
          <span class="judul">Project</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <div class="img-wrapper">
            <div class="thumbnail" style="width: 100%;">
              <img src="assets/img/update_placeholder.jpg" alt="update1">

            </div>

          </div>
          <span class="judul">Project</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>
        <div class="blog">
          <div class="img-wrapper">
            <div class="thumbnail" style="width: 100%;">
              <img src="assets/img/update_placeholder.jpg" alt="update1">

            </div>

          </div>
          <span class="judul">Project</span>
          <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

        </div>

      </div>

    </div>

  </section>

  <section class="choose-us">
    <div class="wrapper">
      <span class="judul">Why Choose Us</span>
      <div class="segment-wrapper">
        <div class="segment">
          <span class="judul">Spesialis Hidraulik</span>
          <ul>
            <li>Tim ahli berpengalaman bertahun-tahun dalam industri hidraulik.</li>
            <li>Memahami secara mendalam berbagai jenis sistem dan komponen hidraulik</li>
            <li>Solusi yang tepat sasaran untuk setiap permasalahan hidraulik anda.</li>
          </ul>

        </div>
        <div class="segment">
          <span class="judul">Jasa Lengkap</span>
          <ul>
            <li>Perbaikan semua jenis komponen hidraulik, dari yang terkecil hingga yang terbesar.</li>
            <li>Penyadiaan sparepart berkualitas.</li>
            <li>Menufaktur komponen baru atau unit baru sesuai kebutuhan spesifik anda.</li>
          </ul>

        </div>
        <div class="segment">
          <span class="judul">Solusi Komprehensif</span>
          <ul>
            <li>Analisis kerusakan yang akurat dan menyeluruh.</li>
            <li>Perencanaan perbaikan yang terstruktur.</li>
            <li>Pelaksanaan perbaikan yang terintegrasi.</li>
          </ul>

        </div>
        <div class="segment">
          <span class="judul">Kualitas Terjamin</span>
          <ul>
            <li>Penggunaan komponen berkualitas tinggi.</li>
            <li>Proses produksi yang terstandarisasi.</li>
            <li>Pengujian menyeluruh terhadap seluruh lini produksi.</li>
          </ul>

        </div>

      </div>
      <span>untuk mendapatkan penawaran terbaik.</span>
      <a href="#" class="cta"><span>Hubungi kami sekarang <i class="fa-solid fa-arrow-right"></i></span></a>

    </div>

  </section>

</main>

<?php
require_once 'assets/components/footer.php';

<?php
require_once 'assets/components/header.php';
require_once 'assets/components/navbar.php';
?>

<style>
  /* Hero section */
  .hero{min-height: 110vh;}
  .hero span{text-align: center;}

  /* About us section */
  .about-us p{font-size: 1.05em;}
  .about-us img{
    width: 100%;
    max-width: 678px;
  }

  /* capabilities section */
  .skill{background: rgba(1, 1, 3, .075);}
  .skill .wrapper .skill-layout{
    display: flex;
    width: 100%;
    gap: .25em;
    justify-content: center;
  }
  .skill-layout > *{
    display: flex;
    justify-content: center;
    padding: .75em;
  }
  .desc-wrapper > div{
    flex-direction: column;
    display: flex;
    gap: .75em;
  }
  .desc-wrapper div div > span{font-size: 1.075em;}
  .skill-layout ul{padding-top: .25em;}
  .skill-layout li{
    padding-left: .75em;
    list-style-position: inside;
  }
  .skill-layout img{
    max-height: 480px;
    border-radius: 3.5px;
  }

  /* Why choose us section */
  .reasons .wrapper{
    display: flex;
    flex-direction: column;
    gap: 1.25em;
  }
  .reasons ul{
    padding-left: 1.25em;
    display: flex;
    flex-direction: column;
    gap: .25em;
  }
  .reasons-wrapper{
    display: flex;
    gap: .75em;
  }

  /* Address section */
  .address{background: rgba(1, 1, 3, .075);}
  .address .wrapper{gap: 1.25em;}
  .address-wrapper{
    display: flex;
    gap: .75em;
  }
  .address-wrapper .img-gallery{max-width: 768px;}

  @media(max-width: 992px) {
    /* Capabilities section */
    .skill .wrapper .skill-layout{flex-direction: column;}
    .desc-wrapper > div{
      flex-direction: row;
    }

    /* Why Choose Us section */
    .reasons-wrapper{flex-direction: column;}

    /* Address Section */
    .address-wrapper{flex-direction: column;}

  }

</style>

<main>
  <button class="whatsapp" type="button"><i class="fa-brands fa-whatsapp"></i></button>

  <div class="hero" style="background: linear-gradient(180deg, rgba(1, 1, 3, .35) 55%, rgba(1, 1, 3, .05)), url('assets/img/banner_about.jpg') center center / cover;">
    <span class="headline">"Kami hadir atas dasar pengembangan teknologi bagi kemajuan bangsa, dengan meningkatkan kemampuan anak bangsa menjadi tenaga-tenaga yang professional dalam menciptakan produk unggulan, menjadi manusia yang bernilai bagi bangsa dan kehidupan yang baik."</span>
    <span class="subjudul">-CEO MICT</span>

  </div>

  <section class="about-us">
    <div class="wrapper">
      <span class="judul">About us</span>
      <p><b>PT. Mitra Industrial Chrome Teknologi ( MICT )</b> adalah perusahaan swasta yang bergerak dibidang  Hard Chrome Platting, Hydraulics, Pneumatics, Roll, Rekondisi Valve, Manufacturing dan  Engineering Service.</p>
      <p><b>Kami</b> mengawali kiprah kami dengan nama PT. Mitra Abadi Chrome pada tahun 2004. Seiring dengan berkembangnya waktu dan tuntutan terhadap kemajuan teknologi  yang semakin pesat serta kebutuhan pelayanan terhadap customer, kami  berkomitmen untuk berubah. Perubahan diawali dengan perubahan nama menjadi  PT.  Mitra Industrial Chrome Teknologi.</p>
      <img src="assets/img/timeline.png" alt="timeline">

    </div>

  </section>

  <section class="skill">
    <div class="wrapper">
      <span class="judul">Our capabilities</span>
      <div class="skill-layout">
        <div class="desc-wrapper">
          <div>
            <div class="industry-classification">
              <span>Industry Classification</span>
              <ul>
                <li>Port/Harbor industry</li>
                <li>Cement industry</li>
                <li>Chemical insdustry</li>
                <li>Equipment industry</li>
                <li>Quarry industry</li>
                <li>Agriculture industry</li>
                <li>Telco industry</li>
                <li>Oil & Gas industry</li>
                <li>Civil construction eqipment</li>
                <li>Steel, plastic, food industry</li>
                <li>Etc.</li>

              </ul>

            </div>
            <div class="costumer-type">
              <span>Costumer type</span>
              <ul>
                <li>Goverment</li>
                <li>Own state company</li>
                <li>Private company</li>

              </ul>

            </div>

          </div>

        </div>
        <img src="assets/img/hero_banner.png" alt="skill_engineer">

      </div>

    </div>

  </section>

  <section class="reasons">
    <div class="wrapper">
      <span class="judul">Why Choose Us</span>
      <div class="reasons-wrapper">
        <ul>
          <li>Sejak berdiri, kami telah menorehkan sejumlah prestasi dalam penyelesaian proyek. Komitmen kami terhadap kualitas dan kecepatan pengiriman telah menjadikan kami kompetitif di pasar.</li>
          <li>Semua pekerjaan dilakukan oleh para ahli yang berpengalaman di bidang masing-masing, didukung oleh fasilitas workshop yang memadai, serta dilengkapi dengan peralatan yang lengkap dan berkualitas.</li>

        </ul>
        <div class="img-gallery">
          <img src="assets/img/chooseus1.png" alt="chooseus1">
          <img src="assets/img/chooseus2.png" alt="chooseus2">
          <img src="assets/img/chooseus3.png" alt="chooseus3">
          <img src="assets/img/chooseus4.png" alt="chooseus4">

        </div>

      </div>

    </div>

  </section>

  <section class="address">
    <div class="wrapper">
      <span class="judul">Our office & Workshop</span>
      <div class="address-wrapper">
        <ul style="padding-left: 1.25em;">
          <li>Kawasan Kavling DPR Blok A No. 153 Kenanga, Cipondoh Kota Tangerang, Banten Indonesia 15146</li>
          <li>Telepon : (021) 22263653 | info : office@ptmict.id</li>

        </ul>
        <div class="img-gallery">
          <img src="assets/img/workshop.png" alt="workshop" style="width: 100%;">
          <img src="assets/img/workshop1.png" alt="workshop1" style="width: 100%;">
          <img src="assets/img/office1.png" alt="office1" style="width: 100%;">
          <img src="assets/img/office2.png" alt="office2" style="width: 100%;">

        </div>

      </div>

    </div>

  </section>

  <section id="contact-us" class="contact-us">
    <div class="wrapper">
      <span class="judul">Ada yang perlu disampaikan pada kami?</span>
      <form action="" method="post">
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="email" placeholder="Email" type="email">
        <textarea name="pesan" placeholder="Pesan"></textarea>
        <button type="button" name="button">Kirim</button>

      </form>

    </div>

  </section>

</main>

<?php require_once 'assets/components/footer.php'; ?>

<?php
require_once 'assets/components/header.php';
require_once 'assets/components/navbar.php';
?>

<style>
  .hero{min-height: 50vh;}
  section:not(.hero, .nav):nth-child(odd){background: rgba(1, 1, 3, .115);}
  .wrapper > div div .judul{
    font-family: 'Outfit', sans-serif;
    font-size: 1.15em;
    color:  #010101;
  }

  .content{
    justify-content: center;
    column-gap: .75em;
    row-gap: 1.25em;
    flex-wrap: wrap;
    display: flex;
    width: 100%;
  }
  .content > div{
    flex-direction: column;
    text-align: center;
    max-width: 560px;
    display: flex;
    width: 100%;
    gap: .25em;
  }

  .img-wrapper{
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    display: flex;
    width: 100%;
  }
  .img-wrapper .thumbnail{
    height: fit-content;
    position: relative;
    max-width: 280px;
    display: flex;
    width: 100%;
  }
  .thumbnail figcaption{
    position: absolute;
    bottom: .75em;
    color: #fff;
    left: .75em;
    mix-blend-mode: difference;
  }
  .thumbnail img{
    width: 100%;
    object-fit: contain;
    border-radius: 3.5px;
  }

  @media(max-width: 992px) {
    .content > div{max-width: none;}

  }

</style>

<main>
  <section class="hero" style="background: linear-gradient(180deg, rgba(1, 1, 3, .35) 55%, rgba(1, 1, 3, .05)), url('assets/img/banner_services.jpg') center center / cover;">
    <span class="headline">Rekayasa dan Manufaktur</span>

  </section>

  <section class="layanan">
    <div class="wrapper">
      <span class="judul">Our services</span>
      <div class="content">
        <div class="engineering">
          <span class="judul">-Engineering Design & Development-</span>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
          <div class="img-wrapper">
            <div class="thumbnail">
              <img src="assets/img/chooseus3.png" alt="engineering design & consultation">
              <figcaption>Test</figcaption>

            </div>
            <div class="thumbnail">
              <img src="assets/img/hydraulics_design.png" alt="hydraulics design">
              <figcaption>Test</figcaption>

            </div>

          </div>

        </div>

        <div class="ceramic">
          <span class="judul">-Ceramic coating-</span>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
          <div class="thumbnail">
            <img src="assets/img/ceramic.jpg" alt="ceramic coating">

          </div>

        </div>

        <div class="manufacture">
          <span class="judul">-Manufacture-</span>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
          <div class="img-wrapper">
            <div class="thumbnail">
              <img src="assets/img/mesin_bubut.png" alt="mesin bubut">
              <figcaption>mesin bubut</figcaption>

            </div>
            <div class="thumbnail">
              <img src="assets/img/mesin_gerinda_silinder.png" alt="mesin gerinda silinder">
              <figcaption>mesin gerinda silinder</figcaption>

            </div>
            <div class="thumbnail">
              <img src="assets/img/mesin_honning.png" alt="mesin honning">
              <figcaption>mesin honning</figcaption>

            </div>
            <div class="thumbnail">
              <img src="assets/img/mesin_nc_milling.png" alt="mesin nc milling">
              <figcaption>mesin nc milling</figcaption>

            </div>


          </div>

        </div>

        <div class="hard-chrome">
          <span class="judul">-Hard chrome platting-</span>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
          <div class="img-wrapper">
            <div class="thumbnail">
              <img src="assets/img/chrome.jpg" alt="proses hard chrome platting">
              <figcaption>Proses hard chrome platting</figcaption>

            </div>
            <div class="thumbnail">
              <img src="assets/img/chrome1.jpg" alt="after hard chrome">
              <figcaption>Setelah hard chrome platting</figcaption>

            </div>
            <div class="thumbnail">
              <img src="assets/img/chrome2.jpg" alt="polishing hard chrome platting">
              <figcaption>Polishing</figcaption>

            </div>
            <div class="thumbnail">
              <img src="assets/img/chrome3.jpg" alt="thickness check hard chrome platting">
              <figcaption>Thickness check</figcaption>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section id="projects-case" class="projects-case">
    <div class="wrapper">
      <span class="judul">Projects</span>
      <div class="content">
        <div class="engineering">
          <span class="judul">-Cylinder unit repair-</span>
          <div class="img-wrapper">
            <div class="thumbnail">
              <img src="assets/img/indah kiat pulp & paper perawang before.png" alt="pt. indah kiat pulp & paper perawang before">
              <figcaption>Before</figcaption>

            </div>
            <div class="thumbnail">
              <img src="assets/img/indah kiat pulp & paper perawang after.png" alt="pt. indah kiat pulp & paper perawang after">
              <figcaption>After</figcaption>

            </div>

          </div>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>

        </div>

      </div>

    </div>

  </section>

</main>


<?php
require_once 'assets/components/footer.php';

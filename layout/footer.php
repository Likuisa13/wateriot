<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>WaterioT</h3>
            <p>
              <?= $profil['alamat'] ?><br>
              <?= $profil['kabupaten'] ?><br>
              <?= $profil['provinsi'] ?><br><br>
              <strong>Phone:</strong> <?= $profil['phone_number'] ?><br>
              <strong>Email:</strong> <?= $profil['email'] ?><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index#portfolio">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index#contact">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
            <?php
              $result = $dao->selectAll('services');
              foreach ($result as $value) {
                ?>
                <li><i class="bx bx-chevron-right"></i> <a href="#"><?= $value['nama'] ?></a></li>
                <?php
              }
              ?>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Product Selling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Consultant Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rental Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Training Services</a></li> -->
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; Copyright <strong><span>WaterioT</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer>
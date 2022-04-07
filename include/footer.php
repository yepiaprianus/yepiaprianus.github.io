 <!-- ======= Footer ======= -->
 <footer id="footer">
 <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
              <img src="assets/img/image_Logo.svg" alt="" class="img-fluid" style="width: 100px;">
            <!-- <h4>Join Our Newsletter</h4> -->
            <!-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
            <!-- <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
          </div>
        </div>
      </div>
    </div>

     <div class="footer-top" style="background: #DFDFDF;">         
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 col-md-6 footer-links">
                     <p class="content_about">
                         <span class="header_about"><b>Message</b></span>
                     </p>
                     <ul>
                         <li>
                             <i>
                                 <img src="assets/img/icon_map.svg" class="img-fluid" style="width: 80%">
                             </i>
                             <a href="https://www.google.com/maps/place/Jl.+Kapling+Tugu,+Krajan+Dua,+Bener,+Kec.+Tengaran,+Semarang,+Jawa+Tengah+50775/@-7.3706483,110.5157723,16.5z/data=!4m13!1m7!3m6!1s0x2e7a79fce67dde1f:0x158c3c4593ea30c1!2sJl.+Kapling+Tugu,+Krajan+Dua,+Bener,+Kec.+Tengaran,+Semarang,+Jawa+Tengah+50775!3b1!8m2!3d-7.3697495!4d110.5178848!3m4!1s0x2e7a79fce67dde1f:0x158c3c4593ea30c1!8m2!3d-7.3697495!4d110.5178848" target="_blank">Jl. Kliping Tugu, Krajan Dua, Bener,
                              <br> Kec. Tengaran, Kabupaten Semarang<br> Jawa Tengah 50775, Indonesia</a>
                         </li>
                         <li>
                             <i>
                                 <img src="assets/img/icon_phone.svg" class="img-fluid" style="width: 80%">
                             </i>
                             <a href="https://wa.me/6281212927606" target="_blank">081212927606</a>
                         </li>
                     </ul>
                 </div>

                 <div class="col-lg-4 col-md-6 footer-links">
                     <p class="content_about">
                         <span class="header_about"><b>Our Services</b></span>
                     </p>
                     <ul>
                         <li>
                             <i>
                                 <img src="assets/img/icon_mail.svg" class="img-fluid" style="width: 80%">
                             </i>
                             <a href="javasript:void(0);">violaconsultant17@gmail.com</a>
                         </li>
                         <li>
                             <i>
                                 <img src="assets/img/icon_web.svg" class="img-fluid" style="width: 80%">
                             </i>
                             <a href="https://viollastatistika.com" target="_blank">https://viollastatistika.com</a>
                         </li>
                     </ul>
                 </div>

                 <div class="col-lg-4 col-md-6 footer-links">
                     <p class="content_about">
                         <span class="header_about"><b>Our Social Network</b></span>
                     <p>Follow sosial media kami <br>untuk melihat update dari kami</p>
                     </p>
                     <div class="social-links mt-3">
                         <!-- <a href="#">
                             <i>
                                 <img src="assets/img/icon_twitter.svg" class="img-fluid" style="width: 80%;">
                             </i>
                         </a> -->
                         <a href="https://www.instagram.com/noviolla.mua" style="margin-left: 20px;" target="_blank">
                             <i>
                                 <img src="assets/img/icon_instagram.svg" class="img-fluid" style="width: 80%;">
                             </i>
                         </a>
                         <a href=" https://www.linkedin.com/in/christina-noviolla-9b64941b6" style="margin-left: 20px;" target="_blank">
                             <i>
                                 <img src="assets/img/icon_linkedin.svg" class="img-fluid" style="width: 80%;">
                             </i>
                         </a>
                         <a href="https://www.facebook.com/jasaspssmurah" target="_blank" style="margin-left: 20px;">
                             <i>
                                 <img src="assets/img/icon_facebook.svg" class="img-fluid" style="width: 80%;">
                             </i>
                         </a>
                     </div>
                 </div>

             </div>
         </div>
     </div>

     <div class="container footer-bottom clearfix">
         <center>
             <p>
                 Copyright &copy;2021 Violla Consultant. All Right Reserved
             </p>
         </center>
     </div>
 </footer>
 <!-- End Footer -->

 <div id="preloader"></div>
 <a href="https://wa.me/6281212927606" class="back-to-top d-flex align-items-center justify-content-center" target="_blank">
     <img src="assets/img/whatsapp.svg" class="animated" alt="" style="width: 75px">
 </a>
 <!-- Vendor JS Files -->
 <script src="assets/vendor/aos/aos.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>
 <script>
     /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
     function myFunction() {
         document.getElementById("myDropdown").classList.toggle("show");
     }

     function filterFunction() {
         var input, filter, ul, li, a, i;
         input = document.getElementById("myInput");
         filter = input.value.toUpperCase();
         div = document.getElementById("myDropdown");
         a = div.getElementsByTagName("a");
         for (i = 0; i < a.length; i++) {
             txtValue = a[i].textContent || a[i].innerText;
             if (txtValue.toUpperCase().indexOf(filter) > -1) {
                 a[i].style.display = "";
             } else {
                 a[i].style.display = "none";
             }
         }
     }
 </script>
 </body>
 </html>
 <!-- Footer Start -->
 <div
     class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn"
     data-wow-delay="0.1s">
     <div class="container py-5">
         <div class="row g-5">
             <div class="col-lg-3 col-md-6">
                 <h3 class="text-light mb-4">Address</h3>
                 <p class="mb-2">
                     <i class="fa fa-map-marker-alt text-primary me-3"></i>223/10, Periyakadu, Alampalayam PO, Pallipalayam,
                     Namakkal, Tamil Nadu, 638008
                 </p>
                 <p class="mb-2">
                     <i class="fa fa-phone-alt text-primary me-3"></i>+91 95006 76711
                 </p>
                 <p class="mb-2">
                     <i class="fa fa-envelope text-primary me-3"></i>info@audigeotech.com
                 </p>
                 <!-- <div class="d-flex pt-2">
                     <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-youtube"></i></a>
                     <a class="btn btn-square btn-outline-body me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                 </div> -->
             </div>
             <div class="col-lg-3 col-md-6">
                 <h3 class="text-light mb-4">Services</h3>
                 <?php
                    $products = new WP_Query([
                        'post_type' => 'projects',
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                    ]);
                    while ($products->have_posts()) {
                        $products->the_post(); ?>
                     <a class="btn btn-link" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                 <?php } ?>
             </div>
             <div class="col-lg-3 col-md-6">
                 <h3 class="text-light mb-4">Products</h3>
                 <?php
                    $products = new WP_Query([
                        'post_type' => 'product',
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                    ]);
                    while ($products->have_posts()) {
                        $products->the_post(); ?>
                     <a class="btn btn-link" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                 <?php } ?>
             </div>
             <div class="col-lg-3 col-md-6">
                 <h3 class="text-light mb-4">Quick Links</h3>
                 <a class="btn btn-link" href="<?php echo site_url('about'); ?>">About Us</a>
                 <a class="btn btn-link" href="<?php echo site_url('contact'); ?>">Contact Us</a>
                 <a class="btn btn-link" href="<?php echo site_url('sources'); ?>">Sources</a>
                 <!-- <a class="btn btn-link" href="">Terms & Condition</a>
                 <a class="btn btn-link" href="">Support</a> -->
             </div>
         </div>
     </div>
     <div class="container-fluid copyright">
         <div class="container">
             <div class="row">
                 <div class="text-center text-md-start mb-3 mb-md-0">
                     &copy; <a href="#">Audi GeoTech</a>, All Right Reserved.
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Footer End -->

 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 </body>

 </html>
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         const modalEl = document.getElementById("pdfModal");

         // Show modal and set hidden PDF link
         document.querySelectorAll(".download-trigger").forEach(function(trigger) {
             trigger.addEventListener("click", function(e) {
                 e.preventDefault();

                 const pdfUrl = this.getAttribute("data-pdf");
                 const hiddenField = document.querySelector("#pdf-link");
                 if (hiddenField) hiddenField.value = pdfUrl;

                 const modal = new bootstrap.Modal(modalEl);
                 modal.show();
             });
         });

         // Function to clean up modal mess
         function cleanModal() {
             document.body.classList.remove('modal-open');
             document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
             document.body.style.overflow = '';
             document.body.style.paddingRight = '';
         }

         // Auto-close and cleanup on successful form submit
         document.addEventListener('wpcf7mailsent', function() {
             const modalInstance = bootstrap.Modal.getInstance(modalEl);
             if (modalInstance) modalInstance.hide();

             setTimeout(() => {
                 cleanModal();
             }, 500);
         });

         // Cleanup after manual close as well
         modalEl.addEventListener('hidden.bs.modal', function() {
             cleanModal();
         });
     });
 </script>


 <?php wp_footer();

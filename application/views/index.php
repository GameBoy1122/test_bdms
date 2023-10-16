 <!-- Start Banner 
    ============================================= -->
 <div class="banner-area shape center-item text-color">
     <div class="item">
         <div class="container">
             <div class="row align-center">

                 <div class="col-lg-6">
                     <div class="content">
                         <h2 class="wow fadeInDown">KITTI BOONTRA <strong>Frontend Developer</strong></h2>
                         <p class="wow fadeInLeft">
                             I am a driven Information Science student with an unwavering commitment to expanding my horizons through hands-on experiences. In my view, true knowledge transcends the boundaries of the classroom and thrives in the realm of practical work alongside seasoned professionals.
                         </p>
                         <div class="bottom">
                             <div class="call-us wow fadeInLeft">
                                 <div class="icon">
                                     <i class="fas fa-phone"></i>
                                 </div>
                                 <div class="info">
                                     <h5>(+66)93 338 5382</h5>
                                     <span>Call for any question</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 thumb">
                     <img class="wow fadeInUp" src="<?php echo base_url('assets/img/illustration/2.png') ?>" alt="Thumb">
                 </div>

             </div>
         </div>
     </div>
 </div>
 <!-- End Banner -->

 <!-- Start My skill Area
    ============================================= -->
 <div id="services" class="featured-services-area text-center default-padding-top bottom-less">
     <!-- Fixed Shape  -->
     <div class="fixed-shape-left-top">
         <img src="<?php echo base_url('assets/img/shape/7.png') ?>" alt="Shape">
     </div>
     <!-- End Fixed Shape  -->
     <div class="container">
         <div class="row">
             <div class="col-lg-8 offset-lg-2">
                 <div class="site-heading text-center">
                     <h4>My skills</h4>
                     <h2>Frontend Developer</h2>
                 </div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="row">
             <!-- Single Item -->
             <div class="single-item col-lg-3 col-md-6">
                 <div class="item">
                     <i class="flaticon-cogwheel"></i>
                     <h5>Front-end Coding</h5>
                     <p>
                         My forte lies in crafting user-centric frontend experiences, utilizing technologies like React.js, Bootstrap, and Node.js to bring ideas to life.
                     </p>
                 </div>
             </div>
             <!-- End Single Item -->
             <!-- Single Item -->
             <div class="single-item col-lg-3 col-md-6">
                 <div class="item">
                     <i class="flaticon-cloud-storage"></i>
                     <h5>Cloud Computing</h5>
                     <p>
                         Cloud Computing enables internet-based access to computing resources. Azure, by Microsoft, offers a range of cloud services for data storage and application hosting.
                     </p>
                 </div>
             </div>
             <!-- End Single Item -->
             <!-- Single Item -->
             <div class="col-lg-3 col-md-6 single-item">
                 <div class="item">
                     <i class="flaticon-globe-grid"></i>
                     <h5>Database Management</h5>
                     <p>
                         My skills extend to Azure SQL and MySQL, ensuring robust and efficient data handling.
                     </p>
                 </div>
             </div>
             <!-- End Single Item -->
             <!-- Single Item -->
             <div class="col-lg-3 col-md-6 single-item">
                 <div class="item">
                     <i class="flaticon-backup"></i>
                     <h5>Backup Recovery</h5>
                     <p>
                         Astonished set expression solicitude way admiration
                     </p>
                 </div>
             </div>
             <!-- End Single Item -->
         </div>
     </div>
 </div>
 <!-- End Feature Services Area -->

 <!-- Start Blog 
    ============================================= -->
 <div id="blog" class="blog-area content-less default-padding bottom-less">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 offset-lg-2">
                 <div class="site-heading text-center">
                     <h4>Popular News</h4>
                     <h2>Latest From our blog</h2>
                 </div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="blog-items">
             <div class="row">
                 <!-- Single Item -->
                 <?php foreach (array_slice($blog, 4, 3) as $blog_list) {  ?>
                     <div class="col-lg-4 col-md-6 single-item">
                         <div class="item wow fadeInUp text-left" data-wow-delay="500ms">
                             <div class="thumb">
                                 <img class="blog-single-image" src="<?php echo $blog_list->imagePath; ?>" alt="Thumb">
                             </div>
                             <div class="info mt-3">
                                 <h4>
                                     <?php echo $blog_list->title; ?>
                                 </h4>
                                 <p class="line-clamp-blog-short-description">
                                     <?php echo $blog_list->title; ?>
                                 </p>
                             </div>
                         </div>
                     </div>
                 <?php } ?>
                 <!-- End Single Item -->
             </div>
         </div>
     </div>
 </div>
 <!-- End Blog Area -->

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
                 <?php foreach ($blog as $blog_list) {  ?>
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
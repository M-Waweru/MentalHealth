<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog</title>
    <meta name="<?php echo base_url();?>description" content="">
    <meta name="<?php echo base_url();?>viewport" content="width=device-width, initial-scale=1">
    <meta name="<?php echo base_url();?>robots" content="all,follow">
    
    <link rel="stylesheet" href="<?php  echo base_url();?>blog/vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php  echo base_url(); ?>blog/vendor/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php  echo base_url();?>blog/css/fontastic.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700 ">
    
    <link rel="stylesheet" href="<?php  echo base_url();?>blog/vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    
    <link rel="stylesheet" href="<?php  echo base_url('blog/css/style.default.css') ?>" id="<?php echo base_url();?>theme-stylesheet">
    
    <link rel="stylesheet" href="<?php  echo base_url('blog/css/custom.css') ?>">
    
  <body <?php echo base_url();?>>
    <header class="<?php echo base_url();?>header">
      
      <nav class="<?php echo base_url();?>navbar navbar-expand-lg">
        <div class="<?php echo base_url();?>search-area">
          <div class="<?php echo base_url();?>search-area-inner d-flex align-items-center justify-content-center">
            <div class="<?php echo base_url();?>close-btn"><i class="<?php echo base_url();?>icon-close"></i></div>
            <div class="<?php echo base_url();?>row d-flex justify-content-center">
              <div class="<?php echo base_url();?>col-md-8">
              </div>
            </div>
          </div>
        </div>
        <div class="<?php echo base_url();?> container">
          
          <div class=" <?php echo base_url();?> navbar-header d-flex align-items-center justify-content-between">
            <a href="dash1.html" class=" <?php echo base_url();?> navbar-brand">Mental awareness</a>
           
            <button type="button" data-toggle="<?php echo base_url();?>collapse" data-target="<?php echo base_url();?>#navbarcollapse" aria-controls="<?php echo base_url();?>navbarcollapse" aria-expanded="<?php echo base_url();?>false" aria-label="<?php echo base_url();?>Toggle navigation" class=" <?php echo base_url();?>navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          
          <div id="<?php echo base_url();?>navbarcollapse" class="<?php echo base_url();?>collapse navbar-collapse">
            <ul class="<?php echo base_url();?>navbar-nav ml-auto">
              <li class="<?php echo base_url();?>nav-item"><a href="dash1.html" class="<?php echo base_url();?>nav-link ">Home</a>
              </li>
              
              
            </ul>
           
            
          </div>
        </div>
      </nav>
    </header>
    <div class="<?php echo base_url();?>container">
      <div class="<?php echo base_url();?>row">
        
        <main class="<?php echo base_url();?>posts-listing col-lg-8"> 
          <div class="<?php echo base_url();?>container">
            <div class="<?php echo base_url();?>row">
              
              <div class="<?php echo base_url();?>post col-xl-6">
                <div class="<?php echo base_url();?>post-thumbnail"><a href="<?php echo base_url();?>post.html"><img src="<?php  echo base_url('blog/img/blog-post-1.jpeg') ?>" alt="..." class="<?php echo base_url();?>img-fluid"></a></div>
                <div class="<?php echo base_url();?>post-details">
                  <div class="<?php echo base_url();?>post-meta d-flex justify-content-between">
                    
                  </div><a href="post.html">
                    <h3 class="<?php echo base_url();?>h4">Depression?</h3></a>
                  <p class="<?php echo base_url();?>text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <footer class="<?php echo base_url();?>post-footer d-flex align-items-center"><a href="#" class="<?php echo base_url();?>author d-flex align-items-center flex-wrap">
                      
                      <div class="<?php echo base_url();?>title"><span> by Esther </span></div></a>
                    
                    <div class="<?php echo base_url();?>comments meta-last"><i class="<?php echo base_url();?>icon-comment"></i>12</div>
                  </footer>
                </div>
              </div>
             
              <div class="<?php echo base_url();?>ost col-xl-6">
                <div class="<?php echo base_url();?>post-thumbnail"><a href="post.html"><img src="<?php  echo base_url('blog/img/blog-post-2.jpg') ?>" alt="..." class="<?php echo base_url();?>img-fluid"></a></div>
                <div class="<?php echo base_url();?>post-details">
                  <div class="<?php echo base_url();?>post-meta d-flex justify-content-between">
                    
                    
                  </div><a href="post.html">
                    <h3 class="<?php echo base_url();?>h4">Anxiety?</h3></a>
                  <p class="<?php echo base_url();?>text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="<?php echo base_url();?>post-footer d-flex align-items-center"><a href="#" class="<?php echo base_url();?>author d-flex align-items-center flex-wrap">
                      <div class="<?php echo base_url();?>avatar"><img src="<?php echo base_url();?>blog/img/blog-post-1/image.jpg "alt="..." class="<?php echo base_url();?>img-fluid"></div>
                      <div class="<?php echo base_url();?>title"><span> by John </span></div></a>
                    
                    <div class="<?php echo base_url();?>comments meta-last"><i class="<?php echo base_url();?>icon-comment"></i>12</div>
                  </div>
                </div>
              </div>
             
              <div class="<?php echo base_url();?>post col-xl-6">
                <div class="<?php echo base_url();?>post-thumbnail"><a href="post.html"><img src="<?php  echo base_url('blog/img/blog-post-3.jpeg') ?>" alt="..." class="<?php echo base_url();?>img-fluid"></a></div>
                <div class="<?php echo base_url();?>post-details">
                  <div class="<?php echo base_url();?>post-meta d-flex justify-content-between">
                    <div class="<?php echo base_url();?>date meta-last">10 sept | 2018</div>
                    
                  </div><a href="<?php echo base_url();?>post.html">
                    <h3 class="<?php echo base_url();?>h4">Personality Disorder?</h3></a>
                  <p class="<?php echo base_url();?>text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="<?php echo base_url();?>post-footer d-flex align-items-center"><a href="#" class="<?php echo base_url();?>author d-flex align-items-center flex-wrap">
                      <div class="<?php echo base_url();?>avatar"><img src="<?php echo base_url();?>blog/img/blog-post-1/image.jpg" alt="..." class="<?php echo base_url();?>img-fluid"></div>
                      <div class="<?php echo base_url();?>title"><span> by Maureen</span></div></a>
                    
                    <div class="<?php echo base_url();?>comments meta-last"><i class="<?php echo base_url();?>icon-comment"></i>12</div>
                  </div>
                </div>
              </div>
              
              <div class="<?php echo base_url();?>post col-xl-6">
                <div class="<?php echo base_url();?>post-thumbnail"><a href="<?php echo base_url();?>post.html"><img src="<?php  echo base_url('blog/img/blog-post-4.jpeg') ?>" alt="..." class="<?php echo base_url();?>img-fluid"></a></div>
                <div class="<?php echo base_url();?>post-details">
                  <div class="<?php echo base_url();?>post-meta d-flex justify-content-between">
                    <div class="<?php echo base_url();?>date meta-last">20 oct | 2018</div>
                  
                  </div><a href="<?php echo base_url();?>post.html">
                    <h3 class="<?php echo base_url();?>h4">Feeling lonely?</h3></a>
                  <p class="<?php echo base_url();?>text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="<?php echo base_url();?>post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="<?php echo base_url();?>avatar"><img src="<?php echo base_url();?>blog/img/blog-post-1/image.jpg" alt="..." class="<?php echo base_url();?>img-fluid"></div>
                      <div class="<?php echo base_url();?>title"><span>by Mathenge</span></div></a>
                   
                    <div class="<?php echo base_url();?>comments meta-last"><i class="<?php echo base_url();?>icon-comment"></i>12</div>
                  </div>
                </div>
              </div>
            </div>
            
            <nav aria-label="<?php echo base_url();?>Page navigation example">
              <ul class="<?php echo base_url();?>pagination pagination-template d-flex justify-content-center">
                <li class="<?php echo base_url();?>page-item"><a href="#" class="<?php echo base_url();?>page-link"> <i class="<?php echo base_url();?>fa fa-angle-left"></i></a></li>
                <li class="<?php echo base_url();?>page-item"><a href="<?php echo base_url();?>#" class="<?php echo base_url();?>page-link active">1</a></li>
                <li class="<?php echo base_url();?>page-item"><a href="#" class="<?php echo base_url();?>page-link">2</a></li>
                <li class="<?php echo base_url();?>page-item"><a href="#" class="<?php echo base_url();?>page-link">3</a></li>
                <li class="<?php echo base_url();?>page-item"><a href="#" class="<?php echo base_url();?>page-link"> <i class="<?php echo base_url();?>fa fa-angle-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </main>
        <aside class="<?php echo base_url();?>col-lg-4">
          
          <div class="<?php echo base_url();?>widget search">
            <header>
              <h3 class="<?php echo base_url();?>h6">Search the blog</h3>
            </header>
            <form action="<?php echo base_url();?>#" class="<?php echo base_url();?>search-form">
              <div class="<?php echo base_url();?>form-group">
                <input type="search" placeholder="What are you looking for?">
                <button type="submit" class="<?php echo base_url();?>
submit"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>
         
          <div class="<?php echo base_url();?>widget latest-posts">
            <header>
              <h3 class="<?php echo base_url();?>h6">Latest Posts</h3>
            </header>
            <div class="<?php echo base_url();?>blog-posts"><a href="#">
                <div class="<?php echo base_url();?>item d-flex align-items-center">
                  <div class="<?php echo base_url();?>image"><img src="<?php  echo base_url('blog/img/small-thumbnail-1.jpg') ?>" alt="..." class="<?php echo base_url();?>img-fluid"></div>
                  <div class="<?php echo base_url();?>title"><strong>Struggling with friendships?</strong>
                    <div class="<?php echo base_url();?>d-flex align-items-center">
                      <div class="<?php echo base_url();?>"><i class="<?php echo base_url();?>blog/icon-eye"></i> 500</div>
                      <div class="<?php echo base_url();?>"><i class="<?php echo base_url();?>blog/icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a><a href="<?php echo base_url();?>#">
                <div class="<?php echo base_url();?>item d-flex align-items-center">
                  <div class="<?php echo base_url();?>image"><img src="<?php  echo base_url('blog/img/small-thumbnail-2.jpg') ?>" alt="..." class="<?php echo base_url();?>$this->load->helper('url');
img-fluid"></div>
                  <div class="<?php echo base_url();?>title"><strong>How I overcame</strong>
                    <div class="<?php echo base_url();?>d-flex align-items-center">
                      <div class="<?php echo base_url();?>views"><i class="<?php echo base_url();?>icon-eye"></i> 500</div>
                      <div class="<?php echo base_url();?>comments"><i class="<?php echo base_url();?>icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a><a href="<?php echo base_url();?>#">
                <div class="<?php echo base_url();?>item d-flex align-items-center">
                  <div class="<?php echo base_url();?>image"><img src="<?php  echo base_url('blog/img/small-thumbnail-3.jpg') ?>" alt="..." class="<?php echo base_url();?>img-fluid"></div>
                  <div class="<?php echo base_url();?>title"><strong>You are not alone</strong>
                    <div class="<?php echo base_url();?>d-flex align-items-center">
                      <div class="<?php echo base_url();?>views"><i class="<?php echo base_url();?>icon-eye"></i> 500</div>
                      <div class="<?php echo base_url();?>comments"><i class="<?php echo base_url();?>icon-comment"></i>12</div>
                    </div>
                  </div>
                </div></a></div>
          </div>
        
          <div class="<?php echo base_url();?>widget categories">
            <header>
      
            
              <h3 class="<?php echo base_url();?>h6">Tags</h3>
            </header>
            <ul class="<?php echo base_url();?>list-inline">
              <li class="<?php echo base_url();?>list-inline-item"><a href="#" class="<?php echo base_url();?>tag">#All in one </a></li>
              <li class="<?php echo base_url();?>list-inline-item"><a href="#" class="<?php echo base_url();?>tag">#MentalAwereness</a></li>
              
            </ul>
          </div>
        </aside>
      </div>
    </div>
   
    <footer class="<?php echo base_url();?>main-footer">
      <div class="<?php echo base_url();?>container">
        <div class="<?php echo base_url();?>row">
          <div class="<?php echo base_url();?>col-md-4">
            <div class="<?php echo base_url();?>logo">
              <h6 class="<?php echo base_url();?>text-white"> Blog</h6>
            </div>
            <div class="<?php echo base_url();?>contact-details">
              <p>Nairobi, Kenya</p>
              <p>Phone: 0712345678</p>
              <p>Email: mentalawereness.com</a></p>
              <ul class="<?php echo base_url();?>social-menu">
                <li class="<?php echo base_url();?>list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="<?php echo base_url();?>list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="<?php echo base_url();?>list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                
              </ul>
            </div>
          </div>
          
          <div class="<?php echo base_url();?>col-md-4">
            <div class="<?php echo base_url();?>latest-posts"><a href="#">
                
          </div>
        </div>
      </div>
      <div class="<?php echo base_url();?>copyrights">
        <div class="<?php echo base_url();?>container">
          <div class="<?php echo base_url();?>row">
            <div class="<?php echo base_url();?>col-md-6">
              <p>&copy; 2018. All rights reserved.</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="<?php  echo base_url('blog/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php  echo base_url('blog/vendor/jquery.cookie/jquery.cookie.js') ?>"> </script>
    <script src="<?php  echo base_url('blog/vendor/@fancyapps/fancybox/jquery.fancybox.min.js') ?>"></script>
    <script src="<?php  echo base_url('blog/js/front.js') ?>"></script>
  </body>
</html>
<?php

echo 'Hello! ' . $data['name'] . ' is ' . $data['age'] . ' years old';

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Theme color -->
   <meta name="theme-color" content="#ffffff">

   <title>Probe</title>

   <!-- App icons -->
   <link rel="shortcut icon" href="../lib/favicons/favicon.png" type="image/png">
   <link rel="icon" href="../lib/favicons/favicon.png" type="image/png">

   <!-- Main styles -->
   <link rel="stylesheet" href="../lib/css/styles.css">

   <!-- Fontawesome -->
   <script src="https://kit.fontawesome.com/885fbd8d84.js"></script>

</head>

<body>

   <!-- Document loaders -->
   <!-- <div id="loader" class="holder">
      <div class="loader">
         <img src="../lib/favicons/primary-logo.png" alt="Probe">
      </div>
   </div> -->

   <div id="loaderMini" class="loader-mini"></div>

   <!-- Back to top button -->
   <button id="back" class="btn back btn-secondary"><i class="fas fa-angle-up"></i></button>

   <!-- The main container -->
   <div id="mainContainer" class="container">
      <!-- Desktop header -->
      <header id="desktopHeader" class="header">
         <nav id="desktopNav" class="header_nav">
            <div class="header_logo">
               <a href="/"><img src="../lib/favicons/logo.png" alt="Probe logo"></a>
            </div>
            <ul class="menu">
               <li><a class="active" href="/">Home</a></li>
               <li class="drop-down"><span class="drop-down-link">Categories</span>
                  <menu id="tags" class="drop-down-menu">
                     <ul>
                        <li><a href="#"><i class="far fa-newspaper"></i> News</a></li>
                        <li><a href="#"><i class="far fa-futbol"></i> Sports</a></li>
                        <li><a href="#"><i class="fas fa-music"></i> Music</a></li>
                     </ul>
                     <ul>
                        <li><a href="#"><i class="fas fa-robot"></i> Tech</a></li>
                        <li><a href="#"><i class="fas fa-film"></i> Movies</a></li>
                        <li><a href="#"><i class="fas fa-glass-cheers"></i> Life & style</a></li>
                     </ul>
                  </menu>
               </li>
               <li><a href="./pages/about.html">About</a></li>
               <li><a href="#">Contact</a></li>
            </ul>
            <ul class="controlls">
               <li>
                  <div id="headerSearchForm" class="header_search-form">
                     <form action="" method="" autocomplete="off">
                        <input type="search" name="q" id="h-search-f" class="input input--fill input--rounded" placeholder="Search probe" autofocus>
                     </form>
                  </div>
               </li>
               <li><button id="headerSearchFormToggle" class="btn btn-icon--circle"><i class="fas fa-search"></i></button>
               </li>
               <li><a href="https://facebook.com/emmanuel.karanja.14" target="_blank" class="btn btn-icon--circle"><i class="fab fa-facebook"></i></a></li>
               <li><a href="https://twitter.com/karanja_14" target="_blank" class="btn btn-icon--circle"><i class="fab fa-twitter"></i></a></li>
               <li><a href="https://instagram.com/kek.a_jr/" target="_blank" class="btn btn-icon--circle"><i class="fab fa-instagram"></i></a></li>
               <li><button id="headerModalFormToggle" class="btn btn-primary--outline btn--rounded">Subscribe</button>
               </li>
            </ul>
         </nav>
         <div id="modalShade" class="modal-shade">
            <div id="headerModalForm" class="modal header_modal-form">
               <div class="modal-header">
                  <h1 align="center">Subscribe</h1>
                  <button id="modalFormClose" class="modal-close"><i class="fa fa-times"></i></button>
               </div>
               <div class="modal-content">
                  <p align="center">Don't miss latest and trending posts.</p>
                  <form id="subsForm" class="form header_sub-form" action="" method="" autocomplete="off">
                     <div class="input-wrapper--inner">
                        <input type="email" class="input input--fill" id="email" name="email" placeholder="Email" required>
                     </div>
                     <p class="msg msg-foo msg-foo--center">Your email will not be used for any other purposes.</p>
                     <br>
                     <button type="submit" class="btn btn-primary btn--half-fit">Subscribe</button>
                  </form>
               </div>
            </div>
         </div>
      </header>

      <!-- Mobile header. Brkpoint: 770px -->
      <header id="mobileHeader" class="header-mobile">
         <nav id="mobileNav" class="header_nav">
            <div class="header_main">
               <div class="header_logo">
                  <a href="/"><img src="../lib/favicons/logo.png" alt="Probe logo"></a>
               </div>
               <div class="header_nav-controlls">
                  <button id="headerSearchFormToggle" class="btn btn-icon--circle search-toggle-btn"><i class="fas fa-search"></i></button>
                  <button id="mobileMenuToggle" class="btn btn-icon--circle menu-toggle-btn">
                     <div class="bar1"></div>
                     <div class="bar2"></div>
                     <div class="bar3"></div>
                  </button>
               </div>
            </div>
            <div id="headerSearchForm" class="header_search-form">
               <form action="" method="" autocomplete="off" class="form">
                  <div class="input-wrapper input-wrapper--inner">
                     <input type="search" name="q" class="input input--edgy" id="headerSearchFormInput" placeholder="Search your posts" autofocus>
                     <i class="fas fa-search"></i>
                  </div>
               </form>
            </div>
         </nav>
         <menu id="mobileMenu" class="menu">
            <div id="mobileMenuItems" class="menu_nav">
               <div class="menu_header">
                  <div class="menu_logo">
                     <img src="../lib/favicons/primary-logo.png" alt="Probe">
                  </div>
                  <button id="mobileMenuClose" class="btn btn-icon--circle"><i class="fas fa-times"></i></button>
               </div>
               <ul class="menu-items">
                  <li><a class="active" href="/"><i class="fas fa-home"></i> Home</a></li>
                  <li class="drop-down"><span class="drop-down-link"><i class="fas fa-sitemap"></i> Categories</span>
                     <menu id="tags" class="drop-down-menu">
                        <ul>
                           <li><a href="#"><i class="far fa-newspaper"></i> News</a></li>
                           <li><a href="#"><i class="far fa-futbol"></i> Sports</a></li>
                           <li><a href="#"><i class="fas fa-music"></i> Music</a></li>
                           <li><a href="#"><i class="fas fa-robot"></i> Tech</a></li>
                           <li><a href="#"><i class="fas fa-film"></i> Movies</a></li>
                           <li><a href="#"><i class="fas fa-glass-cheers"></i> Life & Style</a></li>
                        </ul>
                     </menu>
                  </li>
                  <li><a href="./pages/about.html"><i class="fas fa-book-open"></i> About</a></li>
                  <li><a href="#"><i class="fas fa-id-badge"></i> Contact</a></li>
               </ul>
               <br><br>
               <ul class="controlls">
                  <li><a href="https://facebook.com/emmanuel.karanja.14" target="_blank"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/karanja_14" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://instagram.com/kek.a_jr/" target="_blank"><i class="fab fa-instagram"></i></a>
                  </li>
               </ul>
               <br>
               <button id="headerModalFormToggle" class="btn btn-primary btn--edgy btn--lg btn--fit btn-subscribe">Subscribe</button>
            </div>
         </menu>
         <div id="modalShade" class="modal-shade">
            <div id="headerModalForm" class="modal header_modal-form">
               <div class="modal-header">
                  <h1 align="center">Subscribe</h1>
                  <button id="modalFormClose" class="modal-close"><i class="fa fa-times"></i></button>
               </div>
               <div class="modal-content">
                  <p align="center">Don't miss latest and trending posts.</p>
                  <form id="subsForm" class="form header_sub-form" action="" method="" autocomplete="off">
                     <div class="input-wrapper--inner">
                        <input type="email" class="input input--fill" id="email" name="email" placeholder="Email" required>
                     </div>
                     <p class="msg msg-foo msg-foo--center">Your email will not be used for any other purposes.</p>
                     <br>
                     <button type="submit" class="btn btn-primary btn--half-fit">Subscribe</button>
                  </form>
               </div>
            </div>
         </div>
      </header>

      <!-- The content section -->
      <div id="content" class="content">
         <div class="cols-flex">
            <div class="col-7">
               <div class="card card--overlay card--overlay-theme curved">
                  <div class="card_head card_head-mini">
                     <a href="#"><img src="../lib/media/images/burner.jpg" alt="Slide1"></a>
                  </div>
                  <div class="card_body">
                     <div class="card_tags">
                        <a href="#">tag</a><a href="#">news</a>
                     </div>
                     <div class="card_title">
                        <h1><a href="./blog.html">Amazing article from me to you</a></h1>
                     </div>
                     <div class="card_author">
                        <div class="card_author_image">
                           <a href="./blog.html"><img src="../lib/media/images/author.jpg" alt="author"></a>
                        </div>
                        <div class="card_author_name">
                           <a href="#"><strong>Emmanuel Karanja</strong></a>
                        </div>
                        <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                     </div>
                     <div class="card_text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa at quo, laborum amet nulla
                           omnis aut vel assumenda sapiente ducimus voluptatem delectus eum eaque, expedita adipisci
                           hic
                           ullam quibusdam ad?</p>
                     </div>
                     <div class="card_details">
                        <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                        <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                        <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                     </div>
                  </div>
               </div>
               <div class="flex-box mg-b-3">
                  <div class="flex-item card card-mini bg-white border curved mg-r-2">
                     <div class="card_head card_head-mini">
                        <a href="#"><img src="../lib/media/images/slide1.jpg" alt="Slide1"></a>
                     </div>
                     <div class="card_body">
                        <div class="card_tags">
                           <a href="#">tag</a><a href="#">news</a>
                        </div>
                        <div class="card_title">
                           <h3><a href="#">Amazing article from me to you</a></h3>
                        </div>
                        <div class="card_author">
                           <div class="card_author_image">
                              <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                           </div>
                           <div class="card_author_name">
                              <a href="#"><strong>Emmanuel Karanja</strong></a>
                           </div>
                           <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                        </div>
                        <div class="card_details">
                           <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                           <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                           <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="flex-item card card-mini bg-white border curved mg-r-2">
                     <div class="card_head card_head-mini">
                        <a href="#"><img src="../lib/media/images/slide2.jpg" alt="Slide1"></a>
                     </div>
                     <div class="card_body">
                        <div class="card_tags">
                           <a href="#">tag</a><a href="#">news</a>
                        </div>
                        <div class="card_title">
                           <h3><a href="#">Amazing article from me to you</a></h3>
                        </div>
                        <div class="card_author">
                           <div class="card_author_image">
                              <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                           </div>
                           <div class="card_author_name">
                              <a href="#"><strong>Emmanuel Karanja</strong></a>
                           </div>
                           <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                        </div>
                        <div class="card_details">
                           <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                           <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                           <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="flex-item card card-mini bg-white border curved mg-r-2">
                     <div class="card_head card_head-mini">
                        <a href="#"><img src="../lib/media/images/slide3.jpg" alt="Slide1"></a>
                     </div>
                     <div class="card_body">
                        <div class="card_tags">
                           <a href="#">tag</a><a href="#">news</a>
                        </div>
                        <div class="card_title">
                           <h3><a href="#">Amazing article from me to you</a></h3>
                        </div>
                        <div class="card_author">
                           <div class="card_author_image">
                              <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                           </div>
                           <div class="card_author_name">
                              <a href="#"><strong>Emmanuel Karanja</strong></a>
                           </div>
                           <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                        </div>
                        <div class="card_details">
                           <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                           <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                           <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-wrapper bg-white mg-b-3">
                  <div class="tab">
                     <button class="tablinks btn btn--edgy btn--lg" onclick="openTab(event, 'trending')" id="defaultOpen"><i class="fas fa-chart-line mg-r-1"></i>Trending</button>
                     <button class="tablinks btn btn--edgy btn--lg" onclick="openTab(event, 'popular')"><i class="fas fa-star mg-r-1"></i>Popular</button>
                     <button class="tablinks btn btn--edgy btn--lg" onclick="openTab(event, 'featured')"><i class="fas fa-certificate mg-r-1"></i>Featured</button>
                  </div>

                  <div id="trending" class="tabcontent pd-2">
                     <div class="card card--overlay-dark curved">
                        <div class="card_head card_head-mini">
                           <a href="#"><img src="../lib/media/images/trending.png" alt="Slide1"></a>
                        </div>
                        <div class="card_body">
                           <div class="card_tags">
                              <a href="#">tag</a><a href="#">news</a>
                           </div>
                           <div class="card_title">
                              <h1><a href="#">Amazing article from me to you</a></h1>
                           </div>
                           <div class="card_author">
                              <div class="card_author_image">
                                 <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                              </div>
                              <div class="card_author_name">
                                 <a href="#"><strong>Emmanuel Karanja</strong></a>
                              </div>
                              <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                           </div>
                           <div class="card_text">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa at quo, laborum amet
                                 nulla
                                 omnis aut vel assumenda sapiente ducimus voluptatem delectus eum eaque, expedita
                                 adipisci
                                 hic
                                 ullam quibusdam ad?</p>
                           </div>
                           <div class="card_details">
                              <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                              <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                              <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="flex-box">
                        <div class="card card-mini bg-white border curved mg-r-2 flex-item">
                           <div class="card_head card_head-mini">
                              <a href="#"><img src="../lib/media/images/trending.png" alt="Slide1"></a>
                           </div>
                           <div class="card_body">
                              <div class="card_tags">
                                 <a href="#">tag</a><a href="#">news</a>
                              </div>
                              <div class="card_title">
                                 <h3><a href="#">Amazing article from me to you</a></h3>
                              </div>
                              <div class="card_author">
                                 <div class="card_author_image">
                                    <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                                 </div>
                                 <div class="card_author_name">
                                    <a href="#"><strong>Emmanuel Karanja</strong></a>
                                 </div>
                                 <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                              </div>
                              <div class="card_details">
                                 <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                                 <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                                 <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="card card-mini bg-white border curved mg-r-2 flex-item">
                           <div class="card_head card_head-mini">
                              <a href="#"><img src="../lib/media/images/trending.png" alt="Slide1"></a>
                           </div>
                           <div class="card_body">
                              <div class="card_tags">
                                 <a href="#">tag</a><a href="#">news</a>
                              </div>
                              <div class="card_title">
                                 <h3><a href="#">Amazing article from me to you</a></h3>
                              </div>
                              <div class="card_author">
                                 <div class="card_author_image">
                                    <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                                 </div>
                                 <div class="card_author_name">
                                    <a href="#"><strong>Emmanuel Karanja</strong></a>
                                 </div>
                                 <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                              </div>
                              <div class="card_details">
                                 <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                                 <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                                 <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="card card-mini bg-white border curved mg-r-2 flex-item">
                           <div class="card_head card_head-mini">
                              <a href="#"><img src="../lib/media/images/trending.png" alt="Slide1"></a>
                           </div>
                           <div class="card_body">
                              <div class="card_tags">
                                 <a href="#">tag</a><a href="#">news</a>
                              </div>
                              <div class="card_title">
                                 <h3><a href="#">Amazing article from me to you</a></h3>
                              </div>
                              <div class="card_author">
                                 <div class="card_author_image">
                                    <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                                 </div>
                                 <div class="card_author_name">
                                    <a href="#"><strong>Emmanuel Karanja</strong></a>
                                 </div>
                                 <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                              </div>
                              <div class="card_details">
                                 <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                                 <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                                 <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div id="popular" class="tabcontent pd-2">
                     <div class="card card--overlay-dark bg-white curved">
                        <div class="card_head card_head-mini">
                           <a href="#"><img src="../lib/media/images/popular.jpg" alt="Slide1"></a>
                        </div>
                        <div class="card_body">
                           <div class="card_tags">
                              <a href="#">tag</a><a href="#">news</a>
                           </div>
                           <div class="card_title">
                              <h1><a href="#">Amazing article from me to you</a></h1>
                           </div>
                           <div class="card_author">
                              <div class="card_author_image">
                                 <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                              </div>
                              <div class="card_author_name">
                                 <a href="#"><strong>Emmanuel Karanja</strong></a>
                              </div>
                              <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                           </div>
                           <div class="card_text">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa at quo, laborum amet
                                 nulla
                                 omnis aut vel assumenda sapiente ducimus voluptatem delectus eum eaque, expedita
                                 adipisci
                                 hic
                                 ullam quibusdam ad?</p>
                           </div>
                           <div class="card_details">
                              <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                              <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                              <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="flex-box">
                        <div class="card card-mini bg-white border curved mg-r-2 flex-item">
                           <div class="card_head card_head-mini">
                              <a href="#"><img src="../lib/media/images/popular.jpg" alt="Slide1"></a>
                           </div>
                           <div class="card_body">
                              <div class="card_tags">
                                 <a href="#">tag</a><a href="#">news</a>
                              </div>
                              <div class="card_title">
                                 <h3><a href="#">Amazing article from me to you</a></h3>
                              </div>
                              <div class="card_author">
                                 <div class="card_author_image">
                                    <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                                 </div>
                                 <div class="card_author_name">
                                    <a href="#"><strong>Emmanuel Karanja</strong></a>
                                 </div>
                                 <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                              </div>
                              <div class="card_details">
                                 <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                                 <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                                 <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="card card-mini bg-white border curved mg-r-2 flex-item">
                           <div class="card_head card_head-mini">
                              <a href="#"><img src="../lib/media/images/popular.jpg" alt="Slide1"></a>
                           </div>
                           <div class="card_body">
                              <div class="card_tags">
                                 <a href="#">tag</a><a href="#">news</a>
                              </div>
                              <div class="card_title">
                                 <h3><a href="#">Amazing article from me to you</a></h3>
                              </div>
                              <div class="card_author">
                                 <div class="card_author_image">
                                    <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                                 </div>
                                 <div class="card_author_name">
                                    <a href="#"><strong>Emmanuel Karanja</strong></a>
                                 </div>
                                 <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                              </div>
                              <div class="card_details">
                                 <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                                 <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                                 <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="card card-mini bg-white border curved mg-r-2 flex-item">
                           <div class="card_head card_head-mini">
                              <a href="#"><img src="../lib/media/images/popular.jpg" alt="Slide1"></a>
                           </div>
                           <div class="card_body">
                              <div class="card_tags">
                                 <a href="#">tag</a><a href="#">news</a>
                              </div>
                              <div class="card_title">
                                 <h3><a href="#">Amazing article from me to you</a></h3>
                              </div>
                              <div class="card_author">
                                 <div class="card_author_image">
                                    <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                                 </div>
                                 <div class="card_author_name">
                                    <a href="#"><strong>Emmanuel Karanja</strong></a>
                                 </div>
                                 <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                              </div>
                              <div class="card_details">
                                 <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                                 <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                                 <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div id="featured" class="tabcontent pd-2">
                     <div class="card card--overlay-dark bg-white curved">
                        <div class="card_head card_head-mini">
                           <a href="#"><img src="../lib/media/images/featured.jpg" alt="Slide1"></a>
                        </div>
                        <div class="card_body">
                           <div class="card_tags">
                              <a href="#">tag</a><a href="#">news</a>
                           </div>
                           <div class="card_title">
                              <h1><a href="#">Amazing article from me to you</a></h1>
                           </div>
                           <div class="card_author">
                              <div class="card_author_image">
                                 <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                              </div>
                              <div class="card_author_name">
                                 <a href="#"><strong>Emmanuel Karanja</strong></a>
                              </div>
                              <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                           </div>
                           <div class="card_text">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa at quo, laborum amet
                                 nulla
                                 omnis aut vel assumenda sapiente ducimus voluptatem delectus eum eaque, expedita
                                 adipisci
                                 hic
                                 ullam quibusdam ad?</p>
                           </div>
                           <div class="card_details">
                              <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                              <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                              <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="flex-box">
                        <div class="card card-mini bg-white border curved mg-r-2 flex-item">
                           <div class="card_head card_head-mini">
                              <a href="#"><img src="../lib/media/images/featured.jpg" alt="Slide1"></a>
                           </div>
                           <div class="card_body">
                              <div class="card_tags">
                                 <a href="#">tag</a><a href="#">news</a>
                              </div>
                              <div class="card_title">
                                 <h3><a href="#">Amazing article from me to you</a></h3>
                              </div>
                              <div class="card_author">
                                 <div class="card_author_image">
                                    <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                                 </div>
                                 <div class="card_author_name">
                                    <a href="#"><strong>Emmanuel Karanja</strong></a>
                                 </div>
                                 <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                              </div>
                              <div class="card_details">
                                 <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                                 <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                                 <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="card card-mini bg-white border curved mg-r-2 flex-item">
                           <div class="card_head card_head-mini">
                              <a href="#"><img src="../lib/media/images/featured.jpg" alt="Slide1"></a>
                           </div>
                           <div class="card_body">
                              <div class="card_tags">
                                 <a href="#">tag</a><a href="#">news</a>
                              </div>
                              <div class="card_title">
                                 <h3><a href="#">Amazing article from me to you</a></h3>
                              </div>
                              <div class="card_author">
                                 <div class="card_author_image">
                                    <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                                 </div>
                                 <div class="card_author_name">
                                    <a href="#"><strong>Emmanuel Karanja</strong></a>
                                 </div>
                                 <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                              </div>
                              <div class="card_details">
                                 <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                                 <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                                 <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="card card-mini bg-white border curved mg-r-2 flex-item">
                           <div class="card_head card_head-mini">
                              <a href="#"><img src="../lib/media/images/featured.jpg" alt="Slide1"></a>
                           </div>
                           <div class="card_body">
                              <div class="card_tags">
                                 <a href="#">tag</a><a href="#">news</a>
                              </div>
                              <div class="card_title">
                                 <h3><a href="#">Amazing article from me to you</a></h3>
                              </div>
                              <div class="card_author">
                                 <div class="card_author_image">
                                    <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                                 </div>
                                 <div class="card_author_name">
                                    <a href="#"><strong>Emmanuel Karanja</strong></a>
                                 </div>
                                 <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                              </div>
                              <div class="card_details">
                                 <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                                 <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                                 <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card card--flex-mini bg-white border curved">
                  <div class="card_head card_head-mini">
                     <a href="#"><img src="../lib/media/images/recent1.jpg" alt="Slide1"></a>
                  </div>
                  <div class="card_body">
                     <div class="card_tags">
                        <a href="#">tag</a><a href="#">news</a>
                     </div>
                     <div class="card_title">
                        <h3><a href="#">Amazing article from me to you</a></h3>
                     </div>
                     <div class="card_author">
                        <div class="card_author_image">
                           <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                        </div>
                        <div class="card_author_name">
                           <a href="#"><strong>Emmanuel Karanja</strong></a>
                        </div>
                        <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                     </div>
                     <div class="card_details">
                        <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                        <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                        <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                     </div>
                  </div>
               </div>
               <div class="card card--flex-mini bg-white border curved">
                  <div class="card_head card_head-mini">
                     <a href="#"><img src="../lib/media/images/recent2.jpg" alt="Slide1"></a>
                  </div>
                  <div class="card_body">
                     <div class="card_tags">
                        <a href="#">tag</a><a href="#">news</a>
                     </div>
                     <div class="card_title">
                        <h3><a href="#">Amazing article from me to you</a></h3>
                     </div>
                     <div class="card_author">
                        <div class="card_author_image">
                           <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                        </div>
                        <div class="card_author_name">
                           <a href="#"><strong>Emmanuel Karanja</strong></a>
                        </div>
                        <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                     </div>
                     <div class="card_details">
                        <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                        <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                        <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                     </div>
                  </div>
               </div>
               <div class="card card--flex-mini bg-white border curved">
                  <div class="card_head card_head-mini">
                     <a href="#"><img src="../lib/media/images/recent3.jpg" alt="Slide1"></a>
                  </div>
                  <div class="card_body">
                     <div class="card_tags">
                        <a href="#">tag</a><a href="#">news</a>
                     </div>
                     <div class="card_title">
                        <h3><a href="#">Amazing article from me to you</a></h3>
                     </div>
                     <div class="card_author">
                        <div class="card_author_image">
                           <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                        </div>
                        <div class="card_author_name">
                           <a href="#"><strong>Emmanuel Karanja</strong></a>
                        </div>
                        <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                     </div>
                     <div class="card_details">
                        <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                        <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                        <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                     </div>
                  </div>
               </div>
               <div class="cols-flex">
                  <div class="col-12">
                     <button href="#" class="btn btn-secondary btn--half-fit mg-b-3">Load more <i class="fas fa-redo-alt mg-l-1"></i></button>
                  </div>
               </div>
            </div>
            <div class="col-5">
               <section class="mg-b-3">
                  <div class="tag tag--news">
                     <h1>News</h1>
                  </div>
                  <div class="card card--flex-mini bg-white border curved">
                     <div class="card_head card_head-mini">
                        <a href="#"><img src="../lib/media/images/news.gif" alt="Slide1"></a>
                     </div>
                     <div class="card_body">
                        <div class="card_tags">
                           <a href="#">tag</a><a href="#">news</a>
                        </div>
                        <div class="card_title">
                           <h3><a href="#">Amazing article from me to you</a></h3>
                        </div>
                        <div class="card_author">
                           <div class="card_author_image">
                              <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                           </div>
                           <div class="card_author_name">
                              <a href="#"><strong>Emmanuel Karanja</strong></a>
                           </div>
                           <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                        </div>
                        <div class="card_details">
                           <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                           <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                           <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="cols-flex">
                     <div class="col-12">
                        <a href="#" class="btn btn-secondary--neutral btn--edgy">View more <i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </section>
               <section class="mg-b-3">
                  <div class="tag tag--sports">
                     <h1>Sports</h1>
                  </div>
                  <div class="card card--flex-mini bg-white border curved">
                     <div class="card_head card_head-mini">
                        <a href="#"><img src="../lib/media/images/sports.jpg" alt="Slide1"></a>
                     </div>
                     <div class="card_body">
                        <div class="card_tags">
                           <a href="#">tag</a><a href="#">news</a>
                        </div>
                        <div class="card_title">
                           <h3><a href="#">Amazing article from me to you</a></h3>
                        </div>
                        <div class="card_author">
                           <div class="card_author_image">
                              <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                           </div>
                           <div class="card_author_name">
                              <a href="#"><strong>Emmanuel Karanja</strong></a>
                           </div>
                           <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                        </div>
                        <div class="card_details">
                           <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                           <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                           <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="cols-flex">
                     <div class="col-12">
                        <a href="#" class="btn btn-secondary--neutral btn--edgy">View more <i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </section>
               <section class="mg-b-3">
                  <div class="tag tag--movies">
                     <h1>Movies</h1>
                  </div>
                  <div class="card card--flex-mini bg-white border curved">
                     <div class="card_head card_head-mini">
                        <a href="#"><img src="../lib/media/images/movie.jpg" alt="Slide1"></a>
                     </div>
                     <div class="card_body">
                        <div class="card_tags">
                           <a href="#">tag</a><a href="#">news</a>
                        </div>
                        <div class="card_title">
                           <h3><a href="#">Amazing article from me to you</a></h3>
                        </div>
                        <div class="card_author">
                           <div class="card_author_image">
                              <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                           </div>
                           <div class="card_author_name">
                              <a href="#"><strong>Emmanuel Karanja</strong></a>
                           </div>
                           <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                        </div>
                        <div class="card_details">
                           <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                           <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                           <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="cols-flex">
                     <div class="col-12">
                        <a href="#" class="btn btn-secondary--neutral btn--edgy">View more <i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </section>
               <section class="mg-b-3">
                  <div class="tag tag--music">
                     <h1>Music</h1>
                  </div>
                  <div class="card card--flex-mini bg-white border curved">
                     <div class="card_head card_head-mini">
                        <a href="#"><img src="../lib/media/images/music.jpg" alt="Slide1"></a>
                     </div>
                     <div class="card_body">
                        <div class="card_tags">
                           <a href="#">tag</a><a href="#">news</a>
                        </div>
                        <div class="card_title">
                           <h3><a href="#">Amazing article from me to you</a></h3>
                        </div>
                        <div class="card_author">
                           <div class="card_author_image">
                              <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                           </div>
                           <div class="card_author_name">
                              <a href="#"><strong>Emmanuel Karanja</strong></a>
                           </div>
                           <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                        </div>
                        <div class="card_details">
                           <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                           <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                           <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="cols-flex">
                     <div class="col-12">
                        <a href="#" class="btn btn-secondary--neutral btn--edgy">View more <i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </section>
               <section class="mg-b-3">
                  <div class="tag tag--tech">
                     <h1>Tech</h1>
                  </div>
                  <div class="card card--flex-mini bg-white border curved">
                     <div class="card_head card_head-mini">
                        <a href="#"><img src="../lib/media/images/tech.jpg" alt="Slide1"></a>
                     </div>
                     <div class="card_body">
                        <div class="card_tags">
                           <a href="#">tag</a><a href="#">news</a>
                        </div>
                        <div class="card_title">
                           <h3><a href="#">Amazing article from me to you</a></h3>
                        </div>
                        <div class="card_author">
                           <div class="card_author_image">
                              <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                           </div>
                           <div class="card_author_name">
                              <a href="#"><strong>Emmanuel Karanja</strong></a>
                           </div>
                           <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                        </div>
                        <div class="card_details">
                           <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                           <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                           <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="cols-flex">
                     <div class="col-12">
                        <a href="#" class="btn btn-secondary--neutral btn--edgy">View more <i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </section>
               <section class="mg-b-3">
                  <div class="tag tag--web-dev">
                     <h1>Web Dev</h1>
                  </div>
                  <div class="card card--flex-mini bg-white border curved">
                     <div class="card_head card_head-mini">
                        <a href="#"><img src="../lib/media/images/webdev.jpg" alt="Slide1"></a>
                     </div>
                     <div class="card_body">
                        <div class="card_tags">
                           <a href="#">tag</a><a href="#">news</a>
                        </div>
                        <div class="card_title">
                           <h3><a href="#">Amazing article from me to you</a></h3>
                        </div>
                        <div class="card_author">
                           <div class="card_author_image">
                              <a href="#"><img src="../lib/media/images/author.jpg" alt="author"></a>
                           </div>
                           <div class="card_author_name">
                              <a href="#"><strong>Emmanuel Karanja</strong></a>
                           </div>
                           <div class="card_publish_date">7<sup>th</sup> September 2019</div>
                        </div>
                        <div class="card_details">
                           <div class="card_views"><a href="#"><i class="far fa-eye"></i> 100</a></div>
                           <div class="card_likes"><a href="#"><i class="far fa-thumbs-up"></i> 50</a></div>
                           <div class="card_comments"><a href="#"><i class="far fa-comment"></i> 20</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="cols-flex">
                     <div class="col-12">
                        <a href="#" class="btn btn-secondary--neutral btn--edgy">View more <i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>

      <!-- Footer section -->
      <footer id="footer" class="footer">
         <div class="foo foo_contact">
            <div class="foo_logo">
               <a href="/"><img src="../lib/favicons/dark-logo.png" alt="Probe"></a>
            </div>
            <div class="foo_handles">
               <p><i class="fas fa-map-marker-alt"></i> Kenya, Nairobi</p>
               <p><i class="fas fa-phone"></i> +254713472151</p>
               <p><i class="fas fa-envelope"></i> rojaz813@gmail.com</p><br>
               <a href="https://www.facebook.com/emmanuel.karanja.14" class="btn btn-icon--circle"><i class="fab fa-facebook"></i></a>
               <a href="https://twitter.com/karanja_14" class="btn btn-icon--circle"><i class="fab fa-twitter"></i></a>
               <a href="https://instagram.com/kek.a_jr/" class="btn btn-icon--circle"><i class="fab fa-instagram"></i></a>
            </div>
         </div>
         <div class="foo foo_links">
            <h4>Quick links</h4>
            <nav class="foo_links-bar">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Trending</a></li>
               </ul>
            </nav>
         </div>
         <div class="foo foo_info">
            <h4>Information</h4>
            <nav class="foo_info-bar">
               <ul>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Contact</a></li>
               </ul>
            </nav>
         </div>
         <div class="foo foo_form">
            <h4>Subscribe</h4>
            <form action="" method="" id="subsForm" class="form" autocomplete="off">
               <div class="input-wrapper--inner mg-t-2">
                  <input type="email" id="email" class="input input--fill" placeholder="Email" required>
               </div>
               <p class="msg msg-foo msg-foo--center mg-t-2">Your email will not be used for any other purposes.</p>
               <button type="submit" class="btn btn-secondary mg-t-2">Subscribe</button>
            </form>
         </div>
         <div class="foo foo_copy">
            <p>Probe | &copy; 2019</p>
         </div>
      </footer>
   </div>

   <!-- Scripts -->
   <script type="text/javascript" src="../lib/js/main.js"></script>
   <script src="../lib/js/tabs.js"></script>


</body>

</html>
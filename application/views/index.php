<!DOCTYPE html> 
<html lang="zxx" dir="ltr">
   <head>
      <!-- Standard Meta --> 
      <meta charset="utf-8">
      <meta name="description" content="Premium HTML Template by Indonez">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="theme-color" content="#4184dd">
      <!-- Site Properties --> 
      <title>Demo</title>
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
      <!-- CSS --> 
      <link rel="stylesheet" href="assets/css/uikit.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/custom.css">
   </head>
   <body>
      <header data-uk-sticky="top: 400; cls-active: in-sticky">
         <!-- header content begin --> 
         <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container">
               <div class="uk-grid">
                  <div class="uk-width-1-2@m uk-width-1-2@s in-header-subnav">
                     <ul class="uk-subnav uk-subnav-divider uk-flex uk-flex-center uk-flex-left@m uk-flex-left@s">
                        <li><a href="#">Personal</a></li>
                        <li><a href="#">Group</a></li>
                     </ul>
                  </div>
                  <div class="uk-width-1-2@m uk-width-1-2@s in-header-button uk-visible@s">
                     <div class="uk-flex uk-flex-right"> <a href="signin.html" class="uk-button uk-button-default uk-button-small uk-border-rounded uk-margin-small-right">Login <i class="fas fa-sign-in-alt"></i></a> <a href="#" class="uk-button uk-button-primary uk-button-small uk-border-rounded">Create Account</a> </div>
                  </div>
                  <div class="uk-width-1-1">
                     <hr class="uk-margin-remove-top">
                  </div>
               </div>
               <div class="uk-grid uk-margin-remove-top">
                  <div class="uk-width-1-2 uk-width-expand@m">
                     <!-- header logo begin --> 
                     <div class="in-header-logo uk-flex uk-flex-middle"> <a class="uk-logo" href="index.html"><img src="assets/img/logo.png" data-src="assets/img/logo.png" width="80" height="54" alt="logo" data-uk-img></a> </div>
                     <!-- header logo end --> 
                  </div>
                  <div class="in-navbar-wrapper uk-width-1-2 uk-width-auto@m">
                     <!-- main navigation begin --> 
                     <nav class="uk-navbar-container uk-visible@m" data-uk-navbar>
                        <ul class="uk-navbar-nav">
                           <li>
                              <a href="<?=base_url();?>">Home</i></a> 
                              <!-- <a href="index.html">Home<i class="fas fa-chevron-down"></i></a>  -->
                              <!-- <div class="uk-navbar-dropdown">
                                 <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="homepage2.html">Homepage 2</a></li>
                                    <li><a href="homepage3.html">Homepage 3</a></li>
                                    <li><a href="homepage4.html">Homepage 4</a></li>
                                 </ul>
                              </div> -->
                           </li>
                           <!-- <li> <a href="markets.html">Markets</a> </li>
                           <li>
                              <a href="#">Company<i class="fas fa-chevron-down"></i></a> 
                              <div class="uk-navbar-dropdown">
                                 <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="careers.html">Careers</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                 </ul>
                              </div>
                           </li>
                           <li> <a href="education.html">Education</a> </li>
                           <li>
                              <a href="#">Resources<i class="fas fa-chevron-down"></i></a> 
                              <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                 <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                    <div>
                                       <ul class="uk-nav uk-navbar-dropdown-nav">
                                          <li><a href="https://getuikit.com/docs/">Documentation<i class="fas fa-external-link-square-alt fa-sm"></i></a></li>
                                          <li><a href="help-center.html">Help Center</a></li>
                                          <li><a href="customers.html">Customers</a></li>
                                          <li><a href="roadmap.html">Roadmap</a></li>
                                          <li><a href="legal-docs.html">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                                       </ul>
                                    </div>
                                    <div>
                                       <ul class="uk-nav uk-navbar-dropdown-nav">
                                          <li>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod incididunt ut labore dolore magna aliqua quaer volupta</p>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li> -->
                        </ul>
                     </nav>
                     <!-- main navigation end --> <!-- mobile navigation begin --> 
                     <!-- <div class="in-mobile-nav uk-height-1-1 uk-flex uk-flex-right uk-flex-middle uk-hidden@m"> <a class="uk-button" href="#mobile-nav-modal" data-uk-toggle><i class="fas fa-bars"></i></a> </div>
                     <div id="mobile-nav-modal" class="uk-modal-full" data-uk-modal>
                        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport>
                           <button class="uk-modal-close-full uk-close-large fas fa-times" type="button"></button> 
                           <div class="uk-width-large uk-padding-large">
                              <ul class="uk-nav-primary uk-nav-parent-icon in-margin-negative-top@s" data-uk-nav>
                                 <li class="uk-parent">
                                    <a href="index.html">Home</a> 
                                    <ul class="uk-nav-sub">
                                       <li><a href="homepage2.html">Homepage 2</a></li>
                                       <li><a href="homepage3.html">Homepage 3</a></li>
                                       <li><a href="homepage4.html">Homepage 4</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="markets.html">Markets</a> </li>
                                 <li class="uk-parent">
                                    <a href="#">Company</a> 
                                    <ul class="uk-nav-sub">
                                       <li><a href="about.html">About</a></li>
                                       <li><a href="blog.html">Blog</a></li>
                                       <li><a href="careers.html">Careers</a></li>
                                       <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="education.html">Education</a> </li>
                                 <li class="uk-parent">
                                    <a href="#">Resources</a> 
                                    <ul class="uk-nav-sub">
                                       <li><a href="https://getuikit.com/docs/">Documentation<i class="fas fa-external-link-square-alt fa-sm"></i></a></li>
                                       <li><a href="help-center.html">Help Center</a></li>
                                       <li><a href="customers.html">Customers</a></li>
                                       <li><a href="roadmap.html">Roadmap</a></li>
                                       <li><a href="legal-docs.html">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                                    </ul>
                                 </li>
                              </ul>
                              <a href="signin.html" class="uk-button uk-button-primary uk-border-rounded uk-align-center">Login <i class="fas fa-sign-in-alt uk-margin-small-left"></i></a> 
                           </div>
                        </div>
                     </div> -->
                     <!-- mobile navigation end --> 
                  </div>
               </div>
            </div>
         </div>
         <!-- header content end --> 
      </header>
      <main>
         <!-- slideshow content begin --> 
         <div class="uk-section uk-padding-remove-vertical uk-margin-bottom" data-uk-scrollspy="cls:uk-animation-fade; delay: 200">
            <div class="uk-container">
               <div class="in-slideshow uk-position-relative uk-visible-toggle">
                  <ul class="uk-slideshow-items">
                     <!-- <li>
                        <div class="uk-height-1-1 uk-light monee-custom-slideshow" data-uk-grid>
                           <div class="uk-position-center-left uk-width-1-2@m uk-height-1-1 uk-overlay uk-background-primary">
                              <img class="uk-position-left in-img-stretch uk-animation-slide-bottom-small" src="assets/img/in-lazy.gif" data-src="assets/img/banner1.jpg" alt="slideshow-image" data-width data-height data-uk-img> 
                              <div class="uk-position-center-left uk-padding uk-text-center uk-text-left@m monee-slide1-text">
                                 <div class="uk-animation-slide-top-small">
                                    <h3 class="uk-margin-remove-bottom">Setting strong</h3>
                                    <h1 class="uk-margin-remove-top">foundations</h1>
                                    <a href="#" class="uk-button uk-button-primary uk-button-large uk-border-rounded">Open an Account</a> 
                                 </div>
                              </div>
                           </div>
                           <div class="uk-position-center-right uk-width-1-2@m uk-height-1-1 uk-visible@m"> <img class="uk-position-right in-img-stretch uk-animation-slide-bottom-small" src="assets/img/in-lazy.gif" data-src="assets/img/banner2.jpg" alt="slideshow-image" data-width data-height data-uk-img> </div>
                        </div>
                     </li> -->
                     <li>
                        <div class="uk-height-1-1 uk-light monee-custom-slideshow" data-uk-grid>
                           <img class="in-img-stretch" src="assets/img/in-lazy.gif" data-src="assets/img/banner1.jpg" alt="slideshow-background" width="1100" height="438" data-uk-img> 
                           <!-- <div class="uk-position-center uk-width-1-1@m uk-overlay monee-slide2-text">
                              <div class="uk-text-center uk-animation-slide-top-small">
                                 <h1 class="uk-margin-remove-bottom">Award-winning FX broker</h1>
                                 <p class="uk-text-lead uk-margin-remove-top uk-visible@m">Lightning-fast execution. Exceptional client service.</p>
                                 <div class="uk-flex uk-flex-center uk-visible@m">
                                    <div class="uk-width-2-3@m" data-uk-grid>
                                       <div class="uk-child-width-1-3@m" data-uk-grid>
                                          <div> <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award1.png" data-src="assets/img/monee-content-award1.png" alt="monee-award1" width="148" height="90" data-uk-img> </div>
                                          <div> <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award2.png" data-src="assets/img/monee-content-award2.png" alt="monee-award2" width="148" height="90" data-uk-img> </div>
                                          <div> <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award3.png" data-src="assets/img/monee-content-award3.png" alt="monee-award3" width="148" height="90" data-uk-img> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </li>
                     <li>
                        <div class="uk-height-1-1 uk-light monee-custom-slideshow" data-uk-grid>
                           <img class="in-img-stretch" src="assets/img/in-lazy.gif" data-src="assets/img/banner2.jpg" alt="slideshow-background" width="1100" height="438" data-uk-img> 
                           <!-- <div class="uk-position-center uk-width-1-1@m uk-overlay monee-slide2-text">
                              <div class="uk-text-center uk-animation-slide-top-small">
                                 <h1 class="uk-margin-remove-bottom">Award-winning FX broker</h1>
                                 <p class="uk-text-lead uk-margin-remove-top uk-visible@m">Lightning-fast execution. Exceptional client service.</p>
                                 <div class="uk-flex uk-flex-center uk-visible@m">
                                    <div class="uk-width-2-3@m" data-uk-grid>
                                       <div class="uk-child-width-1-3@m" data-uk-grid>
                                          <div> <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award1.png" data-src="assets/img/monee-content-award1.png" alt="monee-award1" width="148" height="90" data-uk-img> </div>
                                          <div> <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award2.png" data-src="assets/img/monee-content-award2.png" alt="monee-award2" width="148" height="90" data-uk-img> </div>
                                          <div> <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award3.png" data-src="assets/img/monee-content-award3.png" alt="monee-award3" width="148" height="90" data-uk-img> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </li>
                     <li>
                        <div class="uk-height-1-1 uk-light monee-custom-slideshow" data-uk-grid>
                           <img class="in-img-stretch" src="assets/img/in-lazy.gif" data-src="assets/img/banner3.jpg" alt="slideshow-background" width="1100" height="438" data-uk-img> 
                           <!-- <div class="uk-position-center uk-width-1-1@m uk-overlay monee-slide2-text">
                              <div class="uk-text-center uk-animation-slide-top-small">
                                 <h1 class="uk-margin-remove-bottom">Award-winning FX broker</h1>
                                 <p class="uk-text-lead uk-margin-remove-top uk-visible@m">Lightning-fast execution. Exceptional client service.</p>
                                 <div class="uk-flex uk-flex-center uk-visible@m">
                                    <div class="uk-width-2-3@m" data-uk-grid>
                                       <div class="uk-child-width-1-3@m" data-uk-grid>
                                          <div> <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award1.png" data-src="assets/img/monee-content-award1.png" alt="monee-award1" width="148" height="90" data-uk-img> </div>
                                          <div> <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award2.png" data-src="assets/img/monee-content-award2.png" alt="monee-award2" width="148" height="90" data-uk-img> </div>
                                          <div> <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award3.png" data-src="assets/img/monee-content-award3.png" alt="monee-award3" width="148" height="90" data-uk-img> </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </li>
                  </ul>
                  <div class="uk-position-bottom-right uk-position-medium">
                     <ul class="uk-dotnav">
                        <li data-uk-slideshow-item="0"><a href="#">slideshow 1</a></li>
                        <li data-uk-slideshow-item="1"><a href="#">slideshow 2</a></li>
                        <li data-uk-slideshow-item="2"><a href="#">slideshow 3</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- slideshow content end --> <!-- section content begin --> 
         <!-- <div class="uk-section uk-section-small">
            <div class="uk-container">
               <div class="uk-grid uk-flex uk-flex-center uk-margin-small-top">
                  <div class="uk-width-1-1 uk-width-3-4@m">
                     <div class="uk-grid uk-grid-small uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center" data-uk-grid>
                        <div>
                           <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award1.png" data-src="assets/img/monee-content-award1.png" alt="monee-award1" width="148" height="90" data-uk-img> 
                           <h5 class="uk-margin-small-top">Global Forex Award 2019</h5>
                        </div>
                        <div class="uk-visible@s">
                           <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award2.png" data-src="assets/img/monee-content-award2.png" alt="monee-award2" width="148" height="90" data-uk-img> 
                           <h5 class="uk-margin-small-top">9th Saudi Money Expo</h5>
                        </div>
                        <div class="uk-visible@m">
                           <img class="uk-border-rounded uk-margin-remove-bottom" src="assets/img/monee-content-award3.png" data-src="assets/img/monee-content-award3.png" alt="monee-award3" width="148" height="90" data-uk-img> 
                           <h5 class="uk-margin-small-top">World Finance Magazine</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-3-4@m uk-margin-medium-bottom">
                           <h3 style="text-align:center">Limited Time Offers</h3>
                        </div>
                    </div>
                    <div class="uk-width-1-1 in-roadmap">
                        <hr>
                        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@m">
                            <div>
                                <div class="in-roadmap-branch">
                                    <div class="uk-flex">
                                        <div class="in-icon-wrapper"> <i class="fas fa-clipboard-check fa-lg"></i>
                                        </div>
                                        <div class="in-roadmap-title uk-flex uk-flex-middle">
                                            <h4 class="uk-margin-remove-bottom">Bonus</h4> <span
                                                class="uk-label uk-label-success">+ Instant Cash</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-box-shadow-bottom uk-width-expand">
                                    <div class="uk-card uk-card-default uk-card-small">
                                        <div class="uk-card-body">
                                            <ul class="uk-list uk-list-bullet">
                                                <li>₹ 10,000 <small>Bonus</small> </li>
                                                <li>+ ₹ 500 <small>Instant Cash</small></li>
                                            </ul>
                                            <h3>On Your First Deposit</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="in-roadmap-branch">
                                    <div class="uk-flex">
                                        <div class="in-icon-wrapper"> <i class="fas fa-cog fa-lg"></i> </div>
                                        <div class="in-roadmap-title uk-flex uk-flex-middle">
                                            <h4 class="uk-margin-remove-bottom">Refer and</h4> <span class="uk-label"> Earn</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-box-shadow-bottom uk-width-expand">
                                    <div class="uk-card uk-card-default uk-card-small">
                                        <div class="uk-card-body">
                                            <ul class="uk-list uk-list-bullet">
                                                <li>₹ 60,000</li>
                                            </ul>
                                            <h3>Bonus</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="in-roadmap-branch">
                                    <div class="uk-flex">
                                        <div class="in-icon-wrapper"> <i class="fas fa-flask fa-lg"></i> </div>
                                        <div class="in-roadmap-title uk-flex uk-flex-middle">
                                            <h4 class="uk-margin-remove-bottom">Lifetime</h4> <span
                                                class="uk-label uk-label-warning">Bonus</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-box-shadow-bottom uk-width-expand">
                                    <div class="uk-card uk-card-default uk-card-small">
                                        <div class="uk-card-body">
                                            <ul class="uk-list uk-list-bullet">
                                                <li><h3>25% Extra Bonus</h3></li>
                                                <li><h3>"All Your Life"</h3></li>
                                                <li><h3>Use Code <span style="color:red">LIFE</span></h3></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- section content end --> <!-- section content begin --> 
         <div class="uk-section">
            <div class="uk-container">
               <div class="uk-grid">
                  <div class="uk-width-1-1">
                     <div class="uk-card uk-card-secondary uk-background-center-right uk-background-contain uk-background-image@m" style="background-image: url(assets/img/bg.jpg);">
                        <div class="uk-card-body">
                           <div class="uk-grid">
                              <div class="uk-width-1-1 uk-width-1-2@m uk-margin-small-left">
                                 <div class="uk-flex uk-flex-left uk-margin-bottom"> 
                                     <!-- <span class="uk-margin-medium-right">
                                         <img src="assets/img/monee-content-os1.svg" data-src="assets/img/monee-content-os1.svg" alt="monee-windows" width="33" height="38" data-uk-img>
                                     </span> -->
                                     <span class="uk-margin-medium-right">
                                         <img src="assets/img/monee-content-os2.svg" data-src="assets/img/monee-content-os2.svg" alt="monee-apple" width="33" height="38" data-uk-img>
                                     </span> 
                                     <span>
                                         <img src="assets/img/monee-content-os3.svg" data-src="assets/img/monee-content-os3.svg" alt="monee-android" width="33" height="38" data-uk-img>
                                     </span> 
                                 </div>
                                 <h2 class="uk-margin-small-top uk-margin-remove-bottom">Available on Cross Platform</h2>
                                 <p class="uk-margin-small-top">Facilis este expedita distinctio libero tempore soluta nobis eligendi cumque nihil impedit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- section content end --> <!-- section content begin --> 
         <div class="uk-section">
            <div class="uk-container">
               <div class="uk-grid" data-uk-grid>
                  <div class="uk-width-1-3@m uk-margin-top">
                     <h2>Our Features</h2>
                     <p>Are you a huge fan of Rummy and want to earn money online by playing the game? If that is the case, then we have some great news for you! We offer a wide range of cash rummy games that you can play anytime, anywhere.</p>
                     <a class="uk-button uk-button-primary uk-button-large uk-border-rounded" href="#">Open an Account</a> 
                     <p class="uk-text-small">Not ready? <a href="#">Sign up for a demo account.</a></p>
                  </div>
                  <div class="uk-width-expand@m">
                     <div class="uk-grid uk-grid-collapse uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center monee-custom-tile">
                        <div class="uk-tile uk-tile-default">
                           <img class="uk-margin-remove-bottom" src="assets/img/monee-content-feature1.svg" data-src="assets/img/monee-content-feature1.svg" alt="monee-feauture" width="50" height="48" data-uk-img> 
                           <h5 class="uk-margin-small-top">100% legal</h5>
                        </div>
                        <div class="uk-tile uk-tile-default">
                           <img class="uk-margin-remove-bottom" src="assets/img/monee-content-feature2.svg" data-src="assets/img/monee-content-feature2.svg" alt="monee-feauture" width="50" height="48" data-uk-img> 
                           <h5 class="uk-margin-small-top">18+ Play Responsibly</h5>
                        </div>
                        <div class="uk-tile uk-tile-default">
                           <img class="uk-margin-remove-bottom" src="assets/img/monee-content-feature3.svg" data-src="assets/img/monee-content-feature3.svg" alt="monee-feauture" width="50" height="48" data-uk-img> 
                           <h5 class="uk-margin-small-top">Voice Chat</h5>
                        </div>
                        <div class="uk-tile uk-tile-default">
                           <img class="uk-margin-remove-bottom" src="assets/img/monee-content-feature4.svg" data-src="assets/img/monee-content-feature4.svg" alt="monee-feauture" width="50" height="48" data-uk-img> 
                           <h5 class="uk-margin-small-top">Point, Deal & Pool Variants</h5>
                        </div>
                        <div class="uk-tile uk-tile-default uk-visible@m">
                           <img class="uk-margin-remove-bottom" src="assets/img/monee-content-feature5.svg" data-src="assets/img/monee-content-feature5.svg" alt="monee-feauture" width="50" height="48" data-uk-img> 
                           <h5 class="uk-margin-small-top">Private Table Option</h5>
                        </div>
                        <div class="uk-tile uk-tile-default uk-visible@m">
                           <img class="uk-margin-remove-bottom" src="assets/img/monee-content-feature6.svg" data-src="assets/img/monee-content-feature6.svg" alt="monee-feauture" width="50" height="48" data-uk-img> 
                           <h5 class="uk-margin-small-top">All Major Payment Options</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- section content end --> <!-- section content begin --> 
         <div class="uk-section">
            <div class="uk-container">
               <div class="uk-grid">
                  <div class="uk-width-1-1 monee-custom-card">
                     <div class="uk-card">
                        <div class="uk-card-body">
                           <div class="uk-grid uk-grid-collapse uk-child-width-1-5@m uk-child-width-1-2@s uk-text-center" data-uk-grid>
                              <div>
                                 <h1 class="uk-margin-remove-bottom">#1</h1>
                                 <p class="uk-margin-remove-top uk-text-small">emerging online game</p>
                              </div>
                              <div>
                                 <h1 class="uk-margin-remove-bottom">1B</h1>
                                 <p class="uk-margin-remove-top uk-text-small">player online</p>
                              </div>
                              <div>
                                 <h1 class="uk-margin-remove-bottom">24/5</h1>
                                 <p class="uk-margin-remove-top uk-text-small">support</p>
                              </div>
                              <div>
                                 <h1 class="uk-margin-remove-bottom">Top</h1>
                                 <p class="uk-margin-remove-top uk-text-small">security level</p>
                              </div>
                              <div class="uk-visible@m">
                                 <h1 class="uk-margin-remove-bottom">1L+</h1>
                                 <p class="uk-margin-remove-top uk-text-small">transactions daily</p>
                              </div>
                              <!-- <div class="uk-width-1-1@m">
                                 <div class="monee-price-ticker uk-position-bottom">
                                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" data-uk-slider="autoplay: true" data-autoplay-interval="3000">
                                       <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-2@s">
                                          <li> XAUUSD <span class="uk-label uk-label-success"><i class="fas fa-caret-up"></i> 1478.81 &nbsp;(+0.28%)</span> </li>
                                          <li> GBPUSD <span class="uk-label uk-label-danger"><i class="fas fa-caret-down"></i> 1.3191 &nbsp;(-1.07%)</span> </li>
                                          <li> EURUSD <span class="uk-label uk-label-danger"><i class="fas fa-caret-down"></i> 1.1159 &nbsp;(-0.11%)</span> </li>
                                          <li> USDJPY <span class="uk-label uk-label-success"><i class="fas fa-caret-up"></i> 109.59 &nbsp;(+0.05%)</span> </li>
                                          <li> USDCAD <span class="uk-label uk-label-success"><i class="fas fa-caret-up"></i> 1.3172 &nbsp;(+0.18%)</span> </li>
                                          <li> USDCHF <span class="uk-label uk-label-success"><i class="fas fa-caret-up"></i> 0.9776 &nbsp;(+0.06%)</span> </li>
                                          <li> AUDUSD <span class="uk-label uk-label-danger"><i class="fas fa-caret-down"></i> 0.67064 &nbsp;(-0.08%)</span> </li>
                                          <li> GBPJPY <span class="uk-label uk-label-success"><i class="fas fa-caret-up"></i> 141.91 &nbsp;(+0.12%)</span> </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- section content end --> <!-- section content begin --> 
        <div class="uk-width-1-1" style="text-align:center;">
            <h2>Question You Might Have</h2>
        </div>
         <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-3-5@m">
                            <div class="uk-grid-small uk-child-width-1-1@m uk-child-width-1-2@s" data-uk-grid>
                                <div> <a class="in-help-center" href="#">
                                        <div class="uk-card uk-card-small uk-card-default">
                                            <div class="uk-card-body">
                                                <div class="uk-grid uk-grid-small">
                                                    <div class="uk-width-auto@m uk-flex uk-flex-middle">
                                                        <div
                                                            class="in-icon-wrapper in-margin-remove-left@s uk-margin-left uk-margin-right">
                                                            <i class="fas fa-book fa-lg"></i> </div>
                                                    </div>
                                                    <div class="uk-width-expand@m">
                                                        <h4 class="uk-margin-small-bottom">Is Online Rummy Legal In India? 
                                                        </h4> 
                                                        <!-- <img
                                                            class="uk-float-left uk-margin-remove-adjacent uk-border-circle uk-margin-small-right"
                                                            src="img/in-img-team2.jpg" data-src="img/in-img-team2.jpg"
                                                            width="36" height="36" alt="" data-uk-img> -->
                                                        <p class="uk-text-small uk-margin-remove-bottom"><span style="color:green">Yes</span>, it is absolutely legal to play rummy in India as declared by the Hon'ble Supreme Court of India. In 1996,
                                                             a three-judge bench of the Supreme Court affirmed its 1967 judgment and ruled that games involving substantial and preponderant
                                                             degree of skill fall within the definition of games of mere skill and added that betting on rummy is a game of skill and is outside the ambit of gambling. 
                                                        <!-- <p
                                                            class="uk-text-small uk-margin-remove-top uk-margin-small-bottom">
                                                            <span class="uk-text-muted">Written by</span> Mark Harris
                                                        </p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </div>
                                <div> <a class="in-help-center" href="#">
                                        <div class="uk-card uk-card-small uk-card-default">
                                            <div class="uk-card-body">
                                                <div class="uk-grid uk-grid-small">
                                                    <div class="uk-width-auto@m uk-flex uk-flex-middle">
                                                        <div
                                                            class="in-icon-wrapper in-margin-remove-left@s uk-margin-left uk-margin-right">
                                                            <i class="fas fa-pen-nib fa-lg"></i> </div>
                                                    </div>
                                                    <div class="uk-width-expand@m">
                                                        <h4 class="uk-margin-small-bottom">Is Rummy Considered As Gambling?
                                                        </h4> 
                                                        <!-- <img
                                                            class="uk-float-left uk-margin-remove-adjacent uk-border-circle uk-margin-small-right"
                                                            src="img/in-img-team3.jpg" data-src="img/in-img-team3.jpg"
                                                            width="36" height="36" alt="" data-uk-img> -->
                                                        <p class="uk-text-small uk-margin-remove-bottom"><span style="color:red;">NO,</span> Rummy is undoubtedly a game of skill and not driven by luck or chance. Gambling or gaming refers to betting and wagering
                                                             on games of chance. Playing games of skill for cash does not constitute gambling . </p>
                                                        <p
                                                            class="uk-text-small uk-margin-remove-top uk-margin-small-bottom">
                                                            <span class="uk-text-muted">The Supreme Court verdict is the conclusive proof of rummy being a game of skill. The apex court recognised that rummy requires certain intellectual expertise, experience and mental skills to master the game. It is not 
                                                                entirely dependent on chance or luck. Hence, playing online rummy in India is exempt from the penal provisions of most gambling acts. </span>                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- section content end --> 
      </main>
      <footer>
         <!-- footer content begin --> 
         <div class="uk-section uk-padding-remove-vertical uk-margin-medium-top">
            <div class="uk-container">
               <div class="uk-grid">
                  <div class="uk-width-1-1">
                     <hr>
                     <div class="uk-child-width-1-1 uk-child-width-1-2@m" data-uk-grid>
                        <div class="in-footer-info uk-flex uk-flex-center uk-flex-left@m">
                           <ul class="uk-subnav">
                              <li class="uk-visible@m"><span>need help?</span></li>
                              <li><i class="uk-margin-small-left fas fa-phone fa-7x"></i> 1-800-XXX-XXXX</li>
                              <li><a href="#"><i class="uk-margin-small-left fas fa-comments"></i> Live Chat</a></li>
                              <li class="uk-visible@m"><a href="mailto:"><i class="uk-margin-small-left fas fa-envelope-open-text"></i> Email</a></li>
                           </ul>
                        </div>
                        <div>
                           <div class="uk-flex uk-flex-center uk-flex-right@m in-footer-socials"> <span class="uk-visible@m">connect</span> <a href="#" class="uk-icon-button fab fa-facebook-f brand-facebook"></a> <a href="#" class="uk-icon-button fab fa-twitter brand-twitter uk-margin-small-left"></a> <a href="#" class="uk-icon-button fab fa-youtube brand-youtube uk-margin-small-left"></a> </div>
                        </div>
                     </div>
                     <hr>
                  </div>
               </div>
               <div class="uk-child-width-1-1 uk-child-width-1-4@m uk-child-width-1-2@s" data-uk-grid>
                  <div>
                     <h4>Links</h4>
                     <ul class="uk-list uk-link-text">
                        <li><a href="#">Share CFDs</a></li>
                        <li><a href="#">efreral</a></li>
                        <li><a href="#">Indices</a></li>
                        <li><a href="#">Commodities</a></li>
                     </ul>
                  </div>
                  <div>
                     <h4>Trading platforms</h4>
                     <ul class="uk-list uk-link-text">
                        <li><a href="#">Android platforms</a></li>
                        <li><a href="#">Apple apps</a></li>
                     </ul>
                  </div>
                  <div>
                     <h4>Learn to earn</h4>
                     <ul class="uk-list uk-link-text">
                        <li><a href="#">News and ideas</a></li>
                        <li><a href="#">Tricks and strategy</a></li>
                     </ul>
                  </div>
                  <div class="in-footer-address">
                     <h4>Contact us</h4>
                     <p>Bangalore<br> Koramangla<br> 560001<br> India</p>
                  </div>
               </div>
               <div class="uk-grid">
                  <div class="uk-width-1-1 uk-text-small">
                     <div class="uk-card uk-card-small uk-card-secondary uk-margin-bottom">
                        <div class="uk-card-body">
                           <div class="in-footer-copyright" data-uk-grid>
                              <div class="uk-width-1-2@m uk-text-center uk-text-left@m">
                                 <p>Copyright ©2020 For Demo RummyDen. All Rights Reserved.</p>
                              </div>
                              <div class="uk-width-1-2@m">
                                 <div class="uk-flex uk-flex-center uk-flex-right@m"> <span><img src="assets/img/monee-footer-mastercard.svg" data-src="assets/img/monee-footer-mastercard.svg" alt="monee-mastercard" width="42" height="22" data-uk-img></span> <span><img src="assets/img/monee-footer-visa.svg" data-src="assets/img/monee-footer-visa.svg" alt="monee-visa" width="42" height="21" data-uk-img></span> </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="uk-width-1-1 in-footer-disclaimer">
                     <p>Demo Rummy Den Capital Advisors Corporation is an investment advisor registered with the Securities and Exchange Commission ("SEC"). Any reference to the advisory services refers to Demo Rummy Den Capital Advisors Corporation. Registration does not imply a certain level of skill or training nor does it imply endorsement by the SEC.​ Past performance is not a guarantee of future return, nor is it necessarily indicative of future performance. Keep in mind investing involves risk.</p>
                  </div>
               </div>
            </div>
            <div class="uk-visible@m"> <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a> </div>
         </div>
         <!-- footer content end --> 
         <div style="display: flex;justify-content: center;margin:auto;height:80px;" class="in-sticky hidden">
                  <img src="assets/img/logo.png" alt="" style="height:50px;margin:10px 25px;">
                  <a href="#" class="uk-button uk-button-primary uk-button-large uk-border-rounded" style="margin:auto">Download Now</a> 
         </div>
      </footer>
      <!-- Javascript --> 
       <script src="assets/js/vendor/uikit.min.js"></script>
       <script src="assets/js/vendor/jquery.min.js"></script> 
       <script src="assets/js/vendor/in-core.js"></script> 
       <script src="assets/js/config.js"></script> 
   </body>
</html>

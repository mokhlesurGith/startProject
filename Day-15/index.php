<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/main-logo.png" type="image/x-icon">
    <title>Bangledesh</title>
    
    <?php wp_head()?>
</head>
<body>
    <!-- top bar section part start -->
    <header class="cont">
        <div class="row top_bar">
            <div class="col-lg-6 tap_left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 tap_right text-end">
                <p class="">১৯ কার্তিক, ১৪২৯</p>
                <a href="#">English</a>
            </div>
        </div>
    </header>
    <!-- top bar section part End -->
    <!-- logo part start -->
    <section class="cont logo">
        <div class="row d-flex">
            <div class="col-lg-5 logo_left">
              <?php the_custom_logo();?>
                <!-- <img src="<?= get_template_directory_uri()?>/images/header/logo_bn.png" alt=""> -->
            </div>
            <div class="col-lg-5 logo_search">
                <input type="text" placeholder="খুঁজুন ">
                <button>অনুসন্ধান </button>
            </div>
            <div class="col-lg-2 logo_right d-flex justify-content-end">
                <div class="logo1">
                    <a href="#"><img src="<?= get_template_directory_uri()?>/images/header/a2i-logo-footer.png" alt=""></a>
                </div>
                <div class="logo2">
                    <p>সাথে থাকুন:</p>
                    <a href="#"><img src="<?= get_template_directory_uri()?>/images/header/facebook-icon.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>/images/header/twitter-blue-icon.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>/images/header/youtube-icon.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>/images/header/gplus-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- logo part end -->

    <!-- manu section start -->
    <section class="cont">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">হোম</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সেবাখাত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> বৈদেশিক বিনিয়োগ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">আইন-বিধি</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">তথ্য বাতায়ন</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সেবাকুঞ্জ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ফরমস</a>
                      </li>

                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </section>
    <!-- manu section End -->

    <!-- Hero part start -->
    <section class="cont">
        <div class="row hero">
            <div class="col-lg-8 hero_main">
                <div class="bannar">
                    <!-- bannar start -->
                        <img src="<?= get_template_directory_uri()?>/images/slider/pm_shekh_h.jpg" class="d-block w-100" alt="">
                    <!-- bannar End -->
                </div>
                <div class="slider mt-3">
                    <!-- slider start -->
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="<?= get_template_directory_uri()?>/images/slider/6.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="<?= get_template_directory_uri()?>/images/slider/banner-renew-your-passport.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="<?= get_template_directory_uri()?>/images/slider/pmobanner.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="<?= get_template_directory_uri()?>/images/slider/myGov Static2(1) (1).jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      <!-- slider End -->
                </div>
                <div class="teb">
                  <!-- nevbar start -->
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">দপ্তর ভিত্তিক সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">সকল ই-সেবা</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <div class="row tab_class">
                        <div class="col-lg-2">
                          <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-1.png" alt=""><br>কৃষি</a>
                        </div>
                        <div class="col-lg-2">
                          <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-2.png" alt=""><br>কল সেন্টার</a>
                        </div>
                        <div class="col-lg-2">
                          <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-1.png" alt=""><br>মৎস্য ও প্রাণী</a>
                        </div>
                        <div class="col-lg-2">
                          <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-3.png" alt=""><br>মোবাইল সেবা</a>
                        </div>
                        <div class="col-lg-2">
                          <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-4.png" alt=""><br>হেল্পডেস্ক</a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> <div class="row tab_class">
                      <div class="col-lg-2">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-1.png" alt=""><br>কৃষি</a>
                      </div>
                      <div class="col-lg-2">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-2.png" alt=""><br>কল সেন্টার</a>
                      </div>
                      <div class="col-lg-2">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-1.png" alt=""><br>মৎস্য ও প্রাণী</a>
                      </div>
                      <div class="col-lg-2">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-3.png" alt=""><br>মোবাইল সেবা</a>
                      </div>
                      <div class="col-lg-2">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-4.png" alt=""><br>হেল্পডেস্ক</a>
                      </div>
                    </div></div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"> <div class="row tab_class">
                      <div class="col-lg-2">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-1.png" alt=""><br>কৃষি</a>
                      </div>
                      <div class="col-lg-2">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-2.png" alt=""><br>কল সেন্টার</a>
                      </div>
                      <div class="col-lg-2">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-1.png" alt=""><br>মৎস্য ও প্রাণী</a>
                      </div>
                      <div class="col-lg-2">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-3.png" alt=""><br>মোবাইল সেবা</a>
                      </div>
                      <div class="col-lg-2">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/images/tab/tm-4.png" alt=""><br>হেল্পডেস্ক</a>
                      </div>
                    </div></div>
                  </div>
                  <!-- nevbar end -->
                </div>
                <!-- list section -->
                <div class="cont list">
                  <h5 class="h6">উদ্যোগ</h5>
                  <ul>
                      <li><a href="#"> বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a></li>
                      <li><a href="#">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a></li>
                      <li><a href="#">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা। </a></li>
                      <li><a href="#">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০১০-২০২১)।</a></li>
                      <li><a href="#">দূর্যোগ ব্যবস্থাপনা জন্য জাতীয় পরিকল্পনা ২০১০-২০১৫।</a></li>
                  </ul>
              </div>
                <div class="notice">
                  
                </div>
                <div class="others"></div>
            </div>
            <div class="col-lg-4 hero_side">
              <div class="side_bar_img">
                <a href="#"><img class="w-100 pb-2" src="<?= get_template_directory_uri()?>/images/slide-bar/Bangladesh-Directory.jpg" alt=""></a>
                <a href="#"><img class="w-100 pb-2" src="<?= get_template_directory_uri()?>/images/slide-bar/Bangladesh-Directory.jpg" alt=""></a>
                <a href="#"><img class="w-100 pb-2" src="<?= get_template_directory_uri()?>/images/slide-bar/Bangladesh-Directory.jpg" alt=""></a>
                <a href="#"><img class="w-100 pb-2" src="<?= get_template_directory_uri()?>/images/slide-bar/Bangladesh-Directory.jpg" alt=""></a>
                <a href="#"><img class="w-100 pb-2" src="<?= get_template_directory_uri()?>/images/slide-bar/Bangladesh-Directory.jpg" alt=""></a>
                <a href="#"><img class="w-100 pb-2" src="<?= get_template_directory_uri()?>/images/slide-bar/Bangladesh-Directory.jpg" alt=""></a>
                <a href="#"><img class="w-100 pb-2" src="<?= get_template_directory_uri()?>/images/slide-bar/Bangladesh-Directory.jpg" alt=""></a>
                <a href="#"><img class="w-100 pb-2" src="<?= get_template_directory_uri()?>/images/slide-bar/Bangladesh-Directory.jpg" alt=""></a>
                <a href="#"><img class="w-100 pb-2" src="<?= get_template_directory_uri()?>/images/slide-bar/Bangladesh-Directory.jpg" alt=""></a>
                <a href="#"><img class="w-100 pb-2" src="<?= get_template_directory_uri()?>/images/slide-bar/Bangladesh-Directory.jpg" alt=""></a>
              </div>
              
              <h4 class="h6 pt-3">সকল বাতায়ন</h4>
              <div class="side_bar_select mb-2 d-flex">
                <form action="#">
                  <select class="selection" name="" id="">
                    <option value="">ওয়েবসাইট বাছাই করুন</option>
                    <option value="">মন্ত্রণালয়</option>
                    <option value="">অধিদপ্তর </option>
                    <option value="">ঢাকা বিভাগ</option>
                    <option value="">চট্টগ্রাম বিভাগ</option>
                    <option value="">রাজশাহী বিভাগ</option>
                    <option value="">খুলনা বিভাগ</option>
                    <option value="">বরিশাল বিভাগ</option>
                    <option value="">রংপুর বিভাগ</option>
                    <option value="">সিলেট বিভাগ</option>
                  </select>
                </form>
                <button class="">চলুন</button>
                
              </div>
              <div class="side_video">
                <h6>মুজিব১০০ আ্যাপ</h6>
                <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h6>মাস্ক পরুন সেবা নিন</h6>
                <img src="<?= get_template_directory_uri()?>/images/slide-bar/side_bar_big.jpg" alt="">

                <h5 class="mt-2">ডেঙ্গু প্রতিরোধে করণীয়</h5>
                <a href="#"><img src="<?= get_template_directory_uri()?>/images/slide-bar/big_2.jpg" alt=""></a>

                <!-- <p>ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর</p>
                <iframe width="315" height="220" src="https://www.youtube.com/embed/QNUSIOMb6vI" title="Beautiful Bangladesh - Land Of Stories" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>রূপময় বাংলাদেশ</p>
                <iframe width="315" height="220" src="https://www.youtube.com/embed/QNUSIOMb6vI" title="Beautiful Bangladesh - Land Of Stories" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->


              </div>
            </div>
        </div>
    </section>
    <!-- Hero part End -->

    <!-- footer part start -->
    <footer class="cont">
      <div class="row footer_top mt-5">
        <img src="<?= get_template_directory_uri()?>/images/footer/footer_top_bg.png" alt="">
      </div>
      <div class="row footer_bottom py-3 bg-light">
        <div class="col-lg-7 fb_left">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">হোম</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">গোপনীয়তার নীতিমালা</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সার্বিক সহযোগিতায়</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সাইট ম্যাপ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
        </div>
        <div class="col-lg-5 fb_right">
          <p>পরিকল্পনা ও বাস্তবায়নে: <a href="#">এটুআই,</a> <a href="#">মন্ত্রিপরিষদ বিভাগ,</a> <a href="#">বিসিসি,</a> <a href="#"> বেসিস,</a> <a href="#">ডিওআইসিটি</a></p>
          <div class="fb_right_2 d-flex">
            <p>কারিগরি সহায়তায়:</p>
            <img src="<?= get_template_directory_uri()?>/images/footer/np-logo-set.png" alt="">
          </div>
        </div>
      </div>
    </footer>
    <!-- footer part End -->

    <?php wp_footer()?>
    <!-- javascript part start -->
    <!-- <script src="<?= get_template_directory_uri()?>/js/bootstrap.bundle.min.js"></script> -->
    <!-- javascript part End -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="././assets/images/main-logo.png" type="image/x-icon">
    <title>Bangledesh</title>
    <?php wp_head();?>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
   <div class="cont">
    <div class="row px-3 header_top">
      <div class="col-lg-6">
        <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
      </div>
      <div class="col-lg-6 text-end">
        <p>২৮ কার্তিক, ১৪২৯ <a href="#">English</a></p>
      </div>
    </div>
   </div>

   <section class="cont">
    <div class="row search">
      <div class="col-lg-5 img">
        <img src="<?= get_template_directory_uri()?>/assets/images/header/logo_bn.png" alt="">
      </div>
      <div class="col-lg-5 search_bar">
        <input class="w-75 form-control d-inline-block" type="text" placeholder="খুঁজুন ">
        <button class="btn btn-light d-inline-block">অনুসন্ধান </button>
      </div>
      <div class="col-lg-2 social">
        <div class="img_1">
          <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/header/a2i-logo-footer.png" alt=""></a>
        </div>
        <div class="img_2">
          <p>সাথে থাকুন :</p>
          <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/header/facebook-icon.png" alt=""></a>
          <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/header/twitter-blue-icon.png" alt=""></a>
          <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/header/youtube-icon.png" alt=""></a>
          <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/header/gplus-icon.png" alt=""></a>
          
        </div>
      </div>
    </div>
   </section>

   <section class="cont">
    <div class="row main_manu">
      <div class="col-lg-12">
        <!-- nav var start -->
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 bg-light">
                <li class="nav-item">
                  <a class="nav-link" href="#">হোম</a>
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
            </div>
          </div>
        </nav>
      </div>
    </div>
   </section>

   <section class="cont">
    <div class="row">

      <div class="col-lg-8">
        <div class="slider">
          <a href="#"><img class="d-inline-block w-100 p-3 border border-danger" src="<?= get_template_directory_uri()?>/./assets/images/slider/pm_shekh_h.jpg" alt=""></a>
        </div>
        <div class="bannar mt-3 mb-2">
          <a href="#">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= get_template_directory_uri()?>/./assets/images/slider/6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= get_template_directory_uri()?>/./assets/images/slider/banner-renew-your-passport.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= get_template_directory_uri()?>/./assets/images/slider/myGov Static2(1) (1).jpg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="sub_manu">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
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
              <div class="row">
                <div class="col-lg-2">
                  <a class="text-center text-decoration-none text-success" href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/sub_manu/1.png" alt=""><br><p>কৃষি</p></a>
                </div>
                <div class="col-lg-2">
                  <a class="text-center text-decoration-none text-success" href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/sub_manu/2.png" alt=""><br><p>কল সেন্টার</p></a>
                </div>
                <div class="col-lg-2">
                  <a class="text-center text-decoration-none text-success" href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/sub_manu/1.png" alt=""><br><p>মৎস্য ও প্রাণী</p></a>
                </div>
                <div class="col-lg-2">
                  <a class="text-center text-decoration-none text-success" href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/sub_manu/3.png" alt=""><br><p>মোবাইল সেবা</p></a>
                </div>
                <div class="col-lg-2">
                  <a class="text-center text-decoration-none text-success" href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/sub_manu/4.png" alt=""><br><p>হেল্পডেস্ক</p></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
          </div>
        </div>
        <div class="about">
          <h5>উদ্যোগ</h5>
          <a href="#" class="text-decoration-none border-bottom border-success">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) (১৩-০৬-২০১৬)</a>
          <a href="#" class="text-decoration-none border-bottom border-success">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) (১৩-০৬-২০১৬)</a>
          <a href="#" class="text-decoration-none border-bottom border-success">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) (১৩-০৬-২০১৬)</a>
          <a href="#" class="text-decoration-none border-bottom border-success">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) (১৩-০৬-২০১৬)</a>
        </div>
        <div class="tab">
          <div class="row">
            <div class="col-lg-4">
              <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/tab/forms_portal_logo (1).png" alt=""></a>
            </div>
            <div class="col-lg-4">
              <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/tab/Konnect Logo.png" alt=""></a>
            </div>
            <div class="col-lg-4">
              <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/tab/MP logo.png" alt=""></a>
            </div>
            <div class="col-lg-4">
              <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/tab/TP main-logo.png" alt=""></a>
            </div>
            <div class="col-lg-4">
              <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/tab/vision_2021_bn.png" alt=""></a>
            </div>
            <div class="col-lg-4">
              <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/tab/visit-bangladesh-logo (1).png" alt=""></a>
            </div>
            <div class="col-lg-4">
              <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/tab/forms_portal_logo (1).png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="gift_part">
          <h6 class="bg-success p-3 mt-2 text-white">আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</h6>

          <div class="row">
            <div class="col-lg-4">
              <iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
            <div class="col-lg-4">
              <iframe width="217" height="150" src="https://www.youtube.com/embed/z6llDxY5JFs" title="আশ্রয়ণের  অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
            <div class="col-lg-4">
              <iframe width="217" height="150" src="https://www.youtube.com/embed/MvTLqrU9ZbQ" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
            <div class="col-lg-12">
              <h6 class="bg-success p-3 mt-2 text-white">অন্যান্য ভিডিও</h6>
            </div>
            <div class="col-lg-4">
              <iframe width="237" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg" title="How to Identify and Scout for Fall Armyworm in Bangla (accent from Bangladesh)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
            <div class="col-lg-4">
              <iframe width="193" height="200" src="https://www.youtube.com/embed/GT9ShGE_qjg" title="বন্যার সময় কি করণীয়...?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
            <div class="col-lg-4">
              <iframe width="220" height="200" src="https://www.youtube.com/embed/aI97ajpyq00" title="How to Registration on Surokkha Web (www.surokkha.gov.bd)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
          </div>
        </div>
      </div>

      <!-- side bar -->
      <div class="col-lg-4">
        <div class="side_bar_img">
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/Bangladesh-Directory.jpg" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/bangladesh-portal--batton-bangla.png" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/Jonotar-Sorkar-banner-Bangl (1).jpg" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/mygov_bn.jpg" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/prottyon.jpg" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/Tamplate_govtjob_bn.png" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/Tamplate_guard_bn.png" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/Tamplate_policy_bn.png" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/bangladesh-portal--batton-bangla.png" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/Jonotar-Sorkar-banner-Bangl (1).jpg" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/mygov_bn.jpg" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/prottyon.jpg" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/Tamplate_govtjob_bn.png" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/Tamplate_guard_bn.png" alt="">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/Tamplate_policy_bn.png" alt="">
          </a>
        </div>
        <div class="side_dropdown mt-4">
          <h6>সকল বাতায়ন</h6>
          <div class="form-group">
            <select class="form-control bg-light" name="" id="">
              <option>ওয়েবসাইট বাছাই করুন</option>
              <option>ঢাকা বিভাগ</option>
              <option>চট্টগ্রাম বিভাগ</option>
              <option>রাজশাহী বিভাগ</option>
              <option>খুলনা বিভাগ</option>
              <option>বরিশাল বিভাগ</option>
              <option>রংপুর বিভাগ</option>
              <option>সিলেট বিভাগ</option>
            </select>
          </div>
        </div>
        <div class="side_vide">
          <h6 class="bg-success p-3 mt-2 text-white">মুজিব১০০ আ্যাপ</h6>
          <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <h6 class="bg-success p-3 mt-2 text-white">মুজিব১০০ আ্যাপ</h6>
          <img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/big_1.jpg" alt="">
          <h5 class="text-success py-2">ডেঙ্গু প্রতিরোধে করণীয়</h5>
          <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/big_2.jpg" alt=""></a>
          <p class="text-success py-2 m-0">ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর</p>
          <iframe width="315" height="220" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="মাননীয় প্রধানমন্ত্রী জননেত্রী শেখ হাসিনার নেতৃত্বে ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর।" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p class="text-success py-2 m-0">রূপময় বাংলাদেশ</p>
          <iframe width="315" height="220" src="https://www.youtube.com/embed/QNUSIOMb6vI" title="Beautiful Bangladesh - Land Of Stories" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="side_bar_img">
          <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/second_1.png" alt=""></a>
          <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/second_2.png" alt=""></a>
          <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/second_3.png" alt=""></a>
          <a href="#"><img src="<?= get_template_directory_uri()?>/./assets/images/slide-bar/second_4.png" alt=""></a>
        </div>
      </div>
    </div>
   </section>



   <footer class="cont">
    <div class="footer_top row"></div>
    
    </div>
    <div class="footer_bottom bg-light py-4 row">
      <div class="col-lg-8">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 bg-light">
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
            </div>
        </nav>
        <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
      </div>

      <div class="col-lg-4">
        <a href="#">বিসিসি,</a> <a href="#">বেসিস,</a> <a href="#">ডিওআইসিটি</a></p>
        <div class="row">
          <div class="col-lg-4 p-0">
            <p class="p-0 mt-4">কারিগরি সহায়তায়:</p>
          </div>
          <div class="col-lg-8 p-0">
            <img src="<?= get_template_directory_uri()?>/./assets/images/footer/np-logo-set.png" alt="">
          </div>
        </div>
      </div>

    </div>
   </footer>
   <?php wp_footer();?>



    <!-- javascript part start -->
    <script src="<?= get_template_directory_uri()?>/assets/js/bootstrap.bundle.min.js"></script>
    <!-- javascript part End -->
</body>
</html>
<?php // BEGIN PHP
$websitekey=basename(dirname(__FILE__)); if (empty($websitepagefile)) $websitepagefile=__FILE__;
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) { require_once './master.inc.php'; } // Not already loaded
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
// END PHP ?>
<html lang="en">
<head>
<title>Partners</title>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="partners" />
<meta name="title" content="Partners" />
<meta name="description" content="Partners" />
<meta name="generator" content="Dolibarr 9.0.0-alpha (https://www.dolibarr.org)" />
<!-- Include link to CSS file -->
<link rel="stylesheet" href="styles.css.php?website=<?php echo $websitekey; ?>" type="text/css" />
<!-- Include HTML header from common file -->
<?php print preg_replace('/<\/?html>/ims', '', file_get_contents(DOL_DATA_ROOT."/website/".$websitekey."/htmlheader.html")); ?>
<!-- Include HTML header from page header block -->

</head>
<!-- File generated by Dolibarr website module editor -->
<body id="bodywebsite" class="bodywebsite">
<div class="page">

    <?php includeContainer('header'); ?>

      <section id="sectionimage" contenteditable="true">
        <div class="">
          <div class="swiper-wrapper text-center" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-active" style="height: 200px; background-image: url('medias/image/template/background_sunset.jpg'); background-size: cover;">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-11 col-lg-10">
                      <div class="text-white text-uppercase jumbotron-custom border-modern fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="0s">Partners</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>


        <section id="sectionfooterdolibarr" contenteditable="true" class="footerdolibarr">
            <div style="margin: 50px"><div class="text-align: center">
<br><h2>Our partners...</h2>
<br>
<br>
<br>
<div class="row justify-content-sm-center row-40">
    <div class="col-sm-8 col-md-2 col-lg-2">
        <div>
            <img src="/viewimage.php?modulepart=medias&file=image/template/dolibarr_256x256.png" height="64px"><br>
            <div class="floatatbottom"><a href="https://www.dolibarr.org" target="_new">Dolibarr ERP CRM</a></div>
        </div>
    </div>
    <div class="col-sm-4 col-md-2 col-lg-2">
         <div>
        <img src="/viewimage.php?modulepart=medias&file=image/template/php.png" height="64px"><br>
        <div class="floatatbottom"><a href="http://www.php.net" target="_new">PHP</a></div>
        </div>
    </div>
    <div class="col-sm-4 col-md-2 col-lg-2">
         <div>
        <img src="/viewimage.php?modulepart=medias&file=image/template/apache.png" height="64px"><br>
        <div class="floatatbottom"><a href="https://www.apache.org" target="_new">Apache</a></div>
        </div>
    </div>
    <div class="col-sm-4 col-md-2 col-lg-2">
         <div>
        <img src="/viewimage.php?modulepart=medias&file=image/template/mariadb.png" height="64px"><br>
        <div class="floatatbottom"><a href="https://www.mariadb.org" target="_new">MariaDB</a></div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
            </div></div>
        </section>


    <br><br>

    <?php includeContainer('footer'); ?>

</div>
    

<a href="#" id="ui-to-top" class="ui-to-top"><span class="fa fa-angle-up" style="color: #fff; font-size: 1.9em;"></span></a>

<script src="/document.php?modulepart=medias&file=js/template/script.js"></script>


</body>
</html>
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp);
// END PHP ?>

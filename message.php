<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="visual_styles/animations/jquery-3.7.1.min.js"></script>
    <title>Envog | Müraciətiniz qəbul olundu!</title>
    <meta property="og:title" content="Envog | Müraciətiniz qəbul olundu!" />
    <meta property="og:image" content="corporate-logo.svg" />
    <meta name="twitter:title" content="Envog | Müraciətiniz qəbul olundu!" />
    <meta name="twitter:description" content="Envog | Müraciətiniz qəbul olundu!" />
    <meta name="twitter:image:src" content="corporate-logo.svg" />
    
    <meta property="og:description" content="Envog | Müraciətiniz qəbul olundu!" />
    <meta name="description" content="Envog | Müraciətiniz qəbul olundu!" />
    <link rel="stylesheet" href="visual_styles/screen/bootstrap.min.css" />
    <link rel="stylesheet" href="visual_styles/screen/icons.css" />
    <link rel="stylesheet" href="visual_styles/screen/buttons.css" />

    <script src="visual_styles/animations/bootstrap.bundle.min.js"></script>

    

    <link rel="shortcut icon" href="corporate-logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="app.css" />

    <style>

      
    </style>
    
  </head>

  <body>
    <script>
      $(document).ready(function () {
        if ($('.art-wr').css('flex-direction') == 'row') {
          $('.art-box').css({ height: '600px' });
        }
        if ($('.art-wr').css('flex-direction') == 'row-reverse') {
          $('.art-box').css({ height: '600px' });
        }
        if ($('.art-wr').css('flex-direction') == 'column') {
          $('.art-box').css({ height: '400px' });
        }
        if ($('.art-wr').css('flex-direction') == 'column-reverse') {
          $('.art-box').css({ height: '400px' });
        }
        if ($('.art-row-second').css('flex-direction') == 'column') {
          $('.art-row-second>.col-lg-6').css({ width: '100%' });
        }
        if ($('.art-row-second').css('flex-direction') == 'column-reverse') {
          $('.art-row-second>.col-lg-6').css({ width: '100%' });
        }
        if ($('.art-row-second').css('flex-direction') == 'row') {
          $('.art-row-second>.col-lg-6').css({ width: '50%' });
        }
        if ($('.art-row-second').css('flex-direction') == 'row-reverse') {
          $('.art-row-second>.col-lg-6').css({ width: '50%' });
        }
        if ($('.au-row').css('flex-direction') == 'column') {
          $('.au-row>.col-lg-6').css({ width: '100%' });
        }
        if ($('.au-row').css('flex-direction') == 'column-reverse') {
          $('.au-row>.col-lg-6').css({ width: '100%' });
        }
      });

      window.addEventListener('resize', function () {
        if ($('.art-wr').css('flex-direction') == 'row') {
          $('.art-box').css({ height: '600px' });
        }
        if ($('.art-wr').css('flex-direction') == 'row-reverse') {
          $('.art-box').css({ height: '600px' });
        }
        if ($('.art-wr').css('flex-direction') == 'column') {
          $('.art-box').css({ height: '400px' });
        }
        if ($('.art-wr').css('flex-direction') == 'column-reverse') {
          $('.art-box').css({ height: '400px' });
        }
        if ($('.art-row-second').css('flex-direction') == 'column') {
          $('.art-row-second>.col-lg-6').css({ width: '100%' });
        }
        if ($('.art-row-second').css('flex-direction') == 'column-reverse') {
          $('.art-row-second>.col-lg-6').css({ width: '100%' });
        }
        if ($('.art-row-second').css('flex-direction') == 'row') {
          $('.art-row-second>.col-lg-6').css({ width: '50%' });
        }
        if ($('.art-row-second').css('flex-direction') == 'row-reverse') {
          $('.art-row-second>.col-lg-6').css({ width: '50%' });
        }
        if ($('.au-row').css('flex-direction') == 'column') {
          $('.au-row>.col-lg-6').css({ width: '100%' });
        }
        if ($('.au-row').css('flex-direction') == 'column-reverse') {
          $('.au-row>.col-lg-6').css({ width: '100%' });
        }
      });
    </script>

    <script>
      $(document).ready(function () {
        if ($('body').css('direction') == 'ltr') {
          $('.dropdown-menu').css({
            right: 0,
            left: 'auto',
            'text-align': 'end',
          });
        }
        if ($('body').css('direction') == 'rtl') {
          $('.dropdown-menu').css({
            left: 0,
            right: 'auto',
            'text-align': 'end',
          });
        }
      });
    </script>

    <script>
      $(document).ready(function () {
        if ($('.benefit-section').css('display') == 'block') {
          $('.au-section').css({ display: 'none' });
        }
        if ($('.benefit-section').css('display') == 'none') {
          $('.au-section').css({ display: 'block' });
        }
        if ($('.art-block').css('display') == 'none') {
          $('.art-block-second').css({ display: 'block' });
        }
        if ($('.art-block').css('display') == 'block') {
          $('.art-block-second').css({ display: 'none' });
        }
      });
    </script>

    <script>
      $(document).ready(function () {
        if ($('.section').hasClass('form-section')) {
          $('.partners').css({ display: 'block' });
          $('.qa').css({ display: 'none' });
          $('.comments').css({ display: 'none' });
        } else {
          $('.partners').css({ display: 'none' });
          $('.qa').css({ display: 'block' });
          $('.comments').css({ display: 'block' });
        }
      });
    </script>

    <div class="hero-bg">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid container">
          <a href="./" class="header-logo">
            <div class="header-logo-img">
              <img src="corporate-logo.svg" alt="logo" />
            </div>
            <h2 class="logo-text m-0">Envog</h2>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-three-dots"
              viewBox="0 0 16 16"
            >
              <path
                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"
              />
            </svg>
          </button>
          <div
            class="offcanvas offcanvas-start"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <div class="offcanvas-header">
              <button type="button" class="of-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-x-lg"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"
                  />
                </svg>
              </button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item" id="nav-item">
                  <a class="nav-link" href="./">Ana səhifə</a>
                </li>
                <li class="nav-item dropdown" id="nav-item">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Xidmətlər
                  </a>
                  <ul class="dropdown-menu">
                    
                    <li class="dropdown-item">
                      <a class="drop-link" href="spa-services.html">Spa Xidmətləri</a>
                    </li>
                     
                    <li class="dropdown-item">
                      <a class="drop-link" href="bridal-salon.html">Bridal Salon</a>
                    </li>
                     
                    <li class="dropdown-item">
                      <a class="drop-link" href="wedding-hairstyles.html">Toy Saç düzümləri</a>
                    </li>
                     
                    <li class="dropdown-item">
                      <a class="drop-link" href="beauty-salon.html">Gözəllik Salonu</a>
                    </li>
                    
                  </ul>
                </li>
                <li class="nav-item" id="nav-item">
                  <a class="nav-link" href="about-us.html">Biz kimik</a>
                </li>
                <li class="nav-item" id="nav-item">
                  <a class="nav-link" href="speak-to-us.html">Bizimlə əlaqə saxlayın</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-img__tmXKM__class{
		margin: 0px;
		padding: 0px;
		font-family: 'Khand', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 259px 0px;
	}
	.bodyClass1-img__tmXKM__class{
		background: #f5f4f4;
		color: #000000;
	}
	.bodyClass2-img__tmXKM__class{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-img__tmXKM__class{
		background: #fff;
		color: #111;
	}
	.wrapage-block-img__tmXKM__class{
		background-size: 100%;
		width: 100%;
	}
	.box_main-img__tmXKM__class{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-img__tmXKM__class h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-img__tmXKM__class p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-img__tmXKM__class{
		text-align: start;
	}
	.mainBlock-img__tmXKM__class ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-img__tmXKM__class ul>li span{
		font-weight: bold;
	}
	.mainBlock-img__tmXKM__class{
		max-width: 810px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 20px;
	}
	.mainBlock-img__tmXKM__class .cBlock-img__tmXKM__class{
		text-align: start;
	}

	.bodyClass3-img__tmXKM__class .mainBlock-img__tmXKM__class{
		background: none;
		border-top: 2px dashed #f8efd4;
		border-bottom: 2px dashed #f8efd4;
	}
	.bodyClass2-img__tmXKM__class .mainBlock-img__tmXKM__class{
		background: #03051E;
		color: #fff !important;
		box-shadow: 0px 0px 20px #03051E;
	}
	.bodyClass2-img__tmXKM__class .mainBlock-img__tmXKM__class p{
		color: #fff !important;
	}
	.bodyClass1-img__tmXKM__class .mainBlock-img__tmXKM__class{
		background: #F8A29A;
		color: #000000;
		border-left: 3px solid #5F85DB;
	}
	.bodyClass1-img__tmXKM__class .mainBlock-img__tmXKM__class p{
		color: #000000 !important;
	}
	.order-img__tmXKM__class{
		font-size: 18px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-img__tmXKM__class p{
			padding: 0px 15px;
		  }
		  .box_main-img__tmXKM__class h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-img__tmXKM__class{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-img__tmXKM__class{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-img__tmXKM__class" id="mainWrapp-img__tmXKM__class">


	<div class="wrapage-block-img__tmXKM__class">
		<div class="box_main-img__tmXKM__class">
			<div class="mainBlock-img__tmXKM__class">
				<p>Hörmətli Dəyərli Klient,</p>
<p>Xidmətlərimizə olan inamınız dərin qiymətləndirilir. Biz sizin sorğu-sualınızı uğurla almışıq və hazırda ən böyük qayğı ilə müraciət edirik.</p>
<p>Əmin olun ki, hazırda bizim mütəxəssis heyəti sizin xahişinizi yerinə yetirmək üçün səylə çalışır. Sizin ehtiyaclarınıza xidmət etməkdə mükəmməlliyə can ataraq, bizim əsas məqsədimiz görkəmli keyfiyyəti çatdırmaq və sizin tam məmnuniyyətinizə nail olmaqdır.</p>
<p>Əgər sizin daha bir sualınız varsa və ya əlavə dəstəyə ehtiyacınız varsa, zəhmət olmasa, istədiyiniz ünsiyyət üsulu ilə müraciət etməyə çəkinməyin. Biz hər bir müştərini əziz tuturuq və həmişə yardım göstərmək üçün buradayıq.</p>
<p class="cBlock-img__tmXKM__class">Ən səmimi münasibət, The Team!</p>
			</div>
		</div>
	</div>


</div>



    <section class="footer">
      <div class="container">
        <div class="row row-box-lg">
          <div class="col-12 col-lg-4 pt-2 pb-2">
            <div class="footer-logo-wr">
              <a href="./" class="footer-logo">
                <div class="footer-logo-img">
                  <img src="corporate-logo.svg" alt="logo" />
                </div>
                <h2 class="footer-logo-text m-0">Envog</h2>
              </a>
              
              <div class="footer-contact">
                <a class="footer-contact-item" href="mailto:indo@site.com">indo@site.com</a>
                <a class="footer-contact-item" href="tel:+994559119113" >+994559119113</a>
                <a class="footer-contact-item" href="https://wa.me/+994559119113">whatsapp</a>
              </div>
              
            </div>
          </div>

          <hr class="footer-delimeter" />

          <div class="col-12 col-lg-4 pt-2 pb-2">
            <div class="footer-link-wr">
              <div class="footer-link-list">
                
                <div class="footer-link-item">
                  <a class="footer-link" href="spa-services.html">Spa Xidmətləri</a>
                </div>
                 
                <div class="footer-link-item">
                  <a class="footer-link" href="bridal-salon.html">Bridal Salon</a>
                </div>
                 
                <div class="footer-link-item">
                  <a class="footer-link" href="wedding-hairstyles.html">Toy Saç düzümləri</a>
                </div>
                 
                <div class="footer-link-item">
                  <a class="footer-link" href="beauty-salon.html">Gözəllik Salonu</a>
                </div>
                
              </div>
            </div>
          </div>

          <hr class="footer-delimeter" />

          <div class="col-12 col-lg-4 pt-2 pb-2">
            <div class="shh">
              <div class="footer-privacy-wr">
                <div class="footer-privacy">
                  <a class="" href="userPrivacy.html">Gizlilik siyasəti</a>
                </div>
                <div class="footer-privacy">
                  <a class="" href="service-terms.html">Termin və şərtlər</a>
                </div>
                <div class="footer-privacy">
                  <a class="" href="general-disclaimer.html">Disclaimerlər</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr class="delimeter" />

        <div class="copyright">
          <div>Copyright</div>
          <div>&#169;</div>
          <div class="current-year"></div>
          <div>Envog</div>
        </div>
      </div>
    </section>

    <script>
      function updateBlock() {
        const yearCopyElement = document.querySelector(".current-year");
        const currentYear = getCurrentYear();
        yearCopyElement.innerText = currentYear;
      }
      function getCurrentYear() {
        return new Date().getFullYear();
      }
      updateBlock();
    </script>
     

</body>
</html>

<!DOCTYPE html>

<html lang="zxx">

<!-- Begin Head -->


<head>
    <title>Eco-Plast</title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-family  -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet">
    <!-- custom css link -->
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>

<body>
    <!------------- Header Section start ----------->
    <div class="er_demo_wrapper">
        <div class="er_banner_section">
            <div class="er_breadcrumb_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="er_bread_content">
                                <h2>Blog Single</h2>
                                <div class="er_bread_list">
                                    <span>
                                        <a href="index.html">Accueil</a>
                                    </span>
                                    <span>
                                        <a href="blog.html">Produit</a>
                                    </span>
                                    <span class="er_active_page">product</span>
                                </div>
                                <div class="er_bread_shape">
                                    <img src="assets/images/banner-shape/btm-leaf.png" alt="shape">
                                    <img src="assets/images/banner-shape/top-leaf.png" alt="shape">
                                    <img src="assets/images/banner-shape/btm-shape.png" alt="shape">
                                    <img src="assets/images/banner-shape/dot1.png" alt="shape">
                                    <img src="assets/images/banner-shape/dot2.png" alt="shape">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="er_menu_wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-4 col-sm-7 col-10">
                        <div class="er_menu_logo">
                           <a href="/"><img
                                    src="https://res.cloudinary.com/dx8hb4haj/image/upload/v1735134461/305634378_943428003244956_6083361726050805554_n-removebg-preview_spvusi.png"
                                    width="100px" height="70px"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-5 col-2">
                        <div class="er_navmenu_wrapper">
                            <div class="er_nav_menu">
                                <ul>
                                    <li><a href="/">Acceuil</a></li>
                                    <li><a href="/about-us">About</a></li>

                                    <li class="active"><a href="/products">Produits</a></li>
                                    <li><a href="/contact-us">Contact</a></li>
                                </ul>
                            </div>
                            <div class="er_toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------- Header Section end ----------->
         <!-- blog single page -->
    <div class="er_blog_single_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="er_blogsingle_page">
                        <div class="er_post_img">
                            <img src="assets/images/blog_single.png" alt="" class="img-responsive">
                        </div>
                        <div class="er_post_detail">
                            <div class="er_post_data">
                                <span class="post_like"><a href="javascript:;"><i class="fa fa-user" aria-hidden="true"></i>Post By - John </a></span>
                                <span class="post_like"><a href="javascript:;"><i class="fa fa-calendar" aria-hidden="true"></i>24 March 2024</a></span>
                            </div>
                            <h5 class="post_title"><a href="javascript:;"> Air Purifying Plants</a></h5>
                            <p>Sed orci dolor, pulvinar nec luctus a, malesuada ac nisl. Aliquam eleifend et dui et
                                suscipit. Nam semper accumsan ante, ac dapibus urna dapibus et. Aenean lobortis viverra
                                nibh in porttitor. Aenean vel eros posuere, laoreet ligula et, lobortis tellus. Morbi
                                quis nunc in risus ornare egestas et ac libero. Donec egestas nunc massa, ac euismod
                                odio posuere sit amet.</p>

                            <p>Ut interdum nisi lectus, eget aliquet quam sagittis et. Nam volutpat convallis sem vel
                                lobortis. Nullam consectetur dolor urna, eget ultricies enim eleifend sit amet. Sed orci
                                dolor, pulvinar nec luctus a, malesuada ac nisl. Aliquam eleifend et dui et suscipit.
                                Nam semper accumsan ante, ac dapibus urna dapibus et. </p>
                            <p>Aenean lobortis viverra nibh in porttitor. Aenean vel eros posuere, laoreet ligula et,
                                lobortis tellus. Morbi quis nunc in risus ornare egestas et ac libero. Donec egestas
                                nunc massa, ac euismod odio posuere sit amet. Ut interdum nisi lectus, eget aliquet quam
                                sagittis et. Nam volutpat convallis sem vel lobortis. Nullam consectetur dolor urna,
                                eget ultricies enim eleifend sit amet.</p>
                            <div class="er_blockquote">
                                <blockquote class="blockquote">
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. </p>
                                </blockquote>
                            </div>
                            <div class="er_blog_data">
                                <div class="er_blog_para">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit</p>
                                    <p>randomised words which don't look even slightly believable. If you are going to
                                        use a passage of Lorem Ipsum. Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur aut odit</p>
                                </div>
                            </div>
                            <div class="er_blog_post">
                                <h3 class="post_heading">Posted by Admin</h3>
                                <div class="er_post_div">
                                    <div class="review_author">
                                        <img src="assets/images/admin.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="er_blog_post_para">
                                        <h3>Marion Alvarado</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>
                                </div>
                            </div>
                            <h3 class="post_heading">comments</h3>
                            <div class="comment">
                                <div class="comment-author">
                                    <img src="assets/images/comment-author-1.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="comment-text">
                                    <div><span class="comment-author-name">Jhini Snow</span><span
                                            class="comment-date">15.04.2023</span></div>
                                    <p>Happiness is the universal feeling we all aspire to experience more of, yet, we
                                        can be an angry, moody, depressed bunch, can’t we, Many desktop publishing packages and web page.</p>
                                    <a href="javascriptvoid:;" class="comment-reply">Reply</a>
                                </div>
                            </div>
                            <div class="comment comment--replied">
                                <div class="comment-author">
                                    <img src="assets/images/comment-author-2.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="comment-text">
                                    <div><span class="comment-author-name">steffi Smith</span><span class="comment-date">23.05.2023</span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur passage of Lorem Ipsum vel
                                        quam sit amet luctus. Aliquam semper interdum eros.</p>
                                    <a href="javascriptvoid:;" class="comment-reply">Reply</a>
                                </div>
                            </div>
                            <div class="comment ">
                                <div class="comment-author">
                                    <img src="assets/images/comment-author-1.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="comment-text">
                                    <div><span class="comment-author-name">Jhini Snow</span><span
                                            class="comment-date">25.07.2023</span></div>
                                    <p>Curabitur venenatis et ante id consequat. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Suspendisse non blandit dolor.</p>
                                    <a href="javascriptvoid:;" class="comment-reply">Reply</a>
                                </div>
                            </div>

                            <div class="er_comments">
                                <div class="comments-form">
                                    <h3>Leave A Comments</h3>
                                    <div class="wed_contact_bg">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="er-inputField">
                                                        <input type="text" class="form-control require"
                                                            placeholder="Enter Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="er-inputField">
                                                        <input type="text" class="form-control require" name="email"
                                                            placeholder="Enter Your Email" data-valid="email"
                                                            data-error="Email should be valid.">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="er-inputField">
                                                        <textarea name="your-message" cols="3" rows="8"
                                                            class="form-control require"
                                                            placeholder="Enter Your Message..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <button type="button"
                                                        class="er_btn er_con_btn submitForm">Submit</button>
                                                    <div class="response"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="er_search_wrapper">
                        <div class="er_blogsing_box">
                            <div class="er_search_box">
                                <input type="search" placeholder="search..." class="form-control">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="er_blogsing_box">
                            <h4>Recent Post</h4>
                            <div class="er_footer_news er_blsing_post">
                                <div class="er_ftnews_img">
                                    <img src="assets/images/news-1.png" alt="news">
                                </div>
                                <div class="er_ftnews_text">
                                    <h4>There Are Many Variations Passages</h4>
                                    <span>
                                        <img src="assets/images/date-icon.png" alt="news">
                                        <p>Jan 06, 2024</p>
                                    </span>
                                </div>
                            </div>
                            <div class="er_footer_news er_blsing_post">
                                <div class="er_ftnews_img">
                                    <img src="assets/images/news-2.png" alt="news">
                                </div>
                                <div class="er_ftnews_text">
                                    <h4>The point of using Lorem Ipsum</h4>
                                    <span>
                                        <img src="assets/images/date-icon.png" alt="news">
                                        <p>Jan 06, 2024</p>
                                    </span>
                                </div>
                            </div>
                            <div class="er_footer_news er_blsing_post">
                                <div class="er_ftnews_img">
                                    <img src="assets/images/news-3.png" alt="news">
                                </div>
                                <div class="er_ftnews_text">
                                    <h4>The leap into electronic typesetting</h4>
                                    <span>
                                        <img src="assets/images/date-icon.png" alt="news">
                                        <p>Jan 06, 2024</p>
                                    </span>
                                </div>
                            </div>
                            <div class="er_footer_news er_blsing_post">
                                <div class="er_ftnews_img">
                                    <img src="assets/images/news-4.png" alt="news">
                                </div>
                                <div class="er_ftnews_text">
                                    <h4>It has survived not only five centuries</h4>
                                    <span>
                                        <img src="assets/images/date-icon.png" alt="news">
                                        <p>Jan 06, 2024</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------- blog-single Section End ----------->
 <!------------- footer Section start ----------->
    <div class="er_sec er_footer_section">
        <div class="container">
            <div class="er_signup_wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="er_signup_sec">
                            <h4>Voulez vos demandez de devis</h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form method="">
                            <div class="er_form_wrapper">

                                <div class="er_btn er-form-btn">
                                    <a href="javascript:;">Demande devis</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="er_signup_img">
                    <img src="assets/images/footer-plant.png" alt="plant-img">
                </div>
            </div>
            <div class="er_footer_box">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="er_footer_logo">
                            <a href="/">
                                <img src="https://res.cloudinary.com/dx8hb4haj/image/upload/v1735134461/305634378_943428003244956_6083361726050805554_n-removebg-preview_spvusi.png"
                                    width="100px" height="70px">
                            </a>
                            <p>There are many variations of passages of Lorem
                                Ipsum available, but as a the majority have suffered
                                alteration in some form, by injected humour, or ratt
                                randomised words which don't look.</p>
                            <div class="er_social_icon">
                                <ul>
                                    <li><a href="javascript:;">
                                            <span>
                                                <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.73033 17V9.24607H8.33196L8.72228 6.22333H5.73033V4.29375C5.73033 3.41887 5.97228 2.82265 7.22828 2.82265L8.82759 2.82199V0.118345C8.55101 0.0824035 7.60161 0 6.49662 0C4.18921 0 2.60952 1.40842 2.60952 3.99438V6.22333H0V9.24607H2.60952V17H5.73033Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">
                                            <span>
                                                <svg width="17" height="17" viewBox="0 0 17 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.89976 7.19834L16.0923 0H14.6249L9.24789 6.25022L4.9533 0H0L6.49426 9.45144L0 17H1.46752L7.14576 10.3996L11.6812 17H16.6345L9.8994 7.19834H9.89976ZM7.88979 9.53471L7.23179 8.59356L1.99629 1.10472H4.25031L8.47542 7.14845L9.13343 8.0896L14.6256 15.9455H12.3715L7.88979 9.53507V9.53471Z"
                                                        fill="#111111" />
                                                </svg>
                                            </span>
                                        </a></li>
                                    <li><a href="javascript:;">
                                            <span>
                                                <svg width="14" height="17" viewBox="0 0 14 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.13727 0C2.47708 0.000708343 0 2.98638 0 6.24192C0 7.7514 0.843637 9.63489 2.19445 10.232C2.57979 10.4056 2.52879 10.1938 2.86029 8.92583C2.87555 8.87462 2.8769 8.82026 2.8642 8.76835C2.8515 8.71644 2.82522 8.66885 2.78804 8.63046C0.857095 6.39705 2.4112 1.80557 6.86172 1.80557C13.3027 1.80557 12.0992 10.7179 7.98232 10.7179C6.92122 10.7179 6.13071 9.88493 6.38076 8.85429C6.68393 7.62673 7.27752 6.30709 7.27752 5.42237C7.27752 3.1925 3.95539 3.5233 3.95539 6.4778C3.95539 7.39085 4.27839 8.00711 4.27839 8.00711C4.27839 8.00711 3.2095 12.3252 3.01117 13.132C2.67541 14.4977 3.0565 16.7084 3.08979 16.8989C3.11034 17.0038 3.22792 17.0371 3.2938 16.9507C3.39934 16.8125 4.69136 14.9694 5.05332 13.637C5.18507 13.1518 5.72554 11.1826 5.72554 11.1826C6.08184 11.8258 7.10893 12.3641 8.20332 12.3641C11.4589 12.3641 13.812 9.50243 13.812 5.9515C13.8007 2.5472 10.8872 0 7.13727 0Z"
                                                        fill="#F73A3A" />
                                                </svg>
                                            </span>
                                        </a></li>
                                    <li><a href="javascript:;">
                                            <span>
                                                <svg width="17" height="17" viewBox="0 0 17 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.7497 0H4.2499C1.91266 0 0 1.91266 0 4.2499V12.7501C0 15.0867 1.91266 17 4.2499 17H12.7497C15.0869 17 16.9996 15.0867 16.9996 12.7501V4.2499C16.9996 1.91266 15.0869 0 12.7497 0ZM15.5829 12.7501C15.5829 14.3119 14.3124 15.5833 12.7497 15.5833H4.2499C2.68785 15.5833 1.4167 14.3119 1.4167 12.7501V4.2499C1.4167 2.68764 2.68785 1.4167 4.2499 1.4167H12.7497C14.3124 1.4167 15.5829 2.68764 15.5829 4.2499V12.7501Z"
                                                        fill="#DF2E98" />
                                                    <path
                                                        d="M13.1046 4.95796C13.6913 4.95796 14.167 4.48227 14.167 3.89548C14.167 3.30869 13.6913 2.83301 13.1046 2.83301C12.5178 2.83301 12.0421 3.30869 12.0421 3.89548C12.0421 4.48227 12.5178 4.95796 13.1046 4.95796Z"
                                                        fill="#DF2E98" />
                                                    <path
                                                        d="M8.49996 4.25C6.1523 4.25 4.25006 6.15245 4.25006 8.4999C4.25006 10.8465 6.1523 12.7502 8.49996 12.7502C10.8469 12.7502 12.7499 10.8465 12.7499 8.4999C12.7499 6.15245 10.8469 4.25 8.49996 4.25ZM8.49996 11.3335C6.93534 11.3335 5.66676 10.0649 5.66676 8.4999C5.66676 6.93486 6.93534 5.6667 8.49996 5.6667C10.0646 5.6667 11.3332 6.93486 11.3332 8.4999C11.3332 10.0649 10.0646 11.3335 8.49996 11.3335Z"
                                                        fill="#DF2E98" />
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="er_footer_heading">
                            <h5>Notre Produits</h5>
                            <div class="er_footer_news_box">
                                <div class="er_footer_news">
                                    <div class="er_ftnews_img">
                                        <img src="assets/images/news-1.png" alt="news">
                                    </div>
                                    <div class="er_ftnews_text">
                                        <h4>There Are Many Variations Passages</h4>
                                        <span>
                                            <img src="assets/images/date-icon.png" alt="news">
                                            <p>Jan 06, 2024</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="er_footer_news">
                                    <div class="er_ftnews_img">
                                        <img src="assets/images/news-1.png" alt="news">
                                    </div>
                                    <div class="er_ftnews_text">
                                        <h4>There Are Many Variations Passages</h4>
                                        <span>
                                            <img src="assets/images/date-icon.png" alt="news">
                                            <p>Jan 06, 2024</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="er_footer_heading er_foot_contact">
                            <h5>Contact Info</h5>
                            <ul>
                                <li>
                                    <img src="assets/images/location.png" alt="icons">
                                    <p><a href="javascript:;">2972 Westheimer Rd. Santa Ana, Illinois 85486</a></p>
                                </li>
                                <li>
                                    <img src="assets/images/phone.png" alt="icons">
                                    <p><a href="javascript:;">(406) 555-0120</a></p>
                                </li>
                                <li>
                                    <img src="assets/images/mail.png" alt="icons">
                                    <p><a href="javascript:;"><span class="__cf_email__"
                                                data-cfemail="ecoplast.tunisie@gmail.com">ecoplast.tunisie@gmail.com</span></a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------- footer Section end ----------->
    <!------------- Copyright Section start ----------->
    <div class="er_copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="er_copy_text">
                        <p>Eco Plast © 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- custom link  -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.js"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/SmoothScroll.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        AOS.init();
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8f56aec4ac540dbf',t:'MTczNDc3MTYzNi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/787bc399e22f/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>


</html>

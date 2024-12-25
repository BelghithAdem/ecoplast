{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eco plast</title>
    <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4b5563;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .theme-toggle:hover {
            background-color: #374151;
        }
    </style>
    <script>
        const updateTheme = () => {
            const html = document.querySelector('html');
            const currentTheme = localStorage.getItem('hs_theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            if (newTheme === 'dark') {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }

            localStorage.setItem('hs_theme', newTheme);
        };

        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('hs_theme') || 'light';
            const html = document.querySelector('html');

            if (savedTheme === 'dark') {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }
        });
    </script>
</head>

<body class="dark:bg-neutral-900">
    @include('partials.navbar')

    <main id="content">
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- breadcumb -->
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-white"
                        href="/">
                        <svg class="shrink-0 me-3 size-4 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        Acceuil
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-white"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>

                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-white"
                    aria-current="page">
                    A propos
                </li>
            </ol>
            <!-- End Breadcumb -->
        </div>
        <section class="py-24 relative mt-4">
            <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
                <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                    <div
                        class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                        <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                            <img class=" rounded-xl object-cover" src="https://pagedone.io/asset/uploads/1717741205.png"
                                alt="about Us image" />
                        </div>
                        <img class="sm:ml-0 ml-auto rounded-xl object-cover"
                            src="https://pagedone.io/asset/uploads/1717741215.png" alt="about Us image" />
                    </div>
                    <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                        <div class="w-full flex-col justify-center items-start gap-8 flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                <h2
                                    class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center dark:text-white">
                                    lorem impdnks</h2>
                                <p
                                    class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center dark:text-white">
                                    dslmdjkjflmdskkjfdjjdsomdjsfpodmsdponsdosdnids.</p>
                            </div>
                            <div
                                class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex dark:text-white">
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h3 class="text-gray-900 text-4xl font-bold font-manrope leading-normal dark:text-white">33+</h3>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed dark:text-white">dskdmskds
                                    </h6>
                                </div>
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h4 class="text-gray-900 text-4xl font-bold font-manrope leading-normal dark:text-white">125+</h4>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed dark:text-white">odskffdkfdomd
                                    </h6>
                                </div>
                                <div class="flex-col justify-start items-start inline-flex">
                                    <h4 class="text-gray-900 text-4xl font-bold font-manrope leading-normal dark:text-white">52+</h4>
                                    <h6 class="text-gray-500 text-base font-normal leading-relaxed dark:text-white">lmfmdkfd,df</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('partials.footer')

    <!-- Dark Mode Toggle -->
    <button class="theme-toggle" onclick="updateTheme()">
        <span id="theme-icon">🌙</span>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>
</body>

</html> --}}


<!DOCTYPE html>

<html lang="zxx">



<head>
    <title>Eco-Recycling Template</title>
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
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
                                <h2>About Us</h2>
                                <div class="er_bread_list">
                                    <span>
                                        <a href="index.html">Home</a>
                                    </span>
                                    <span class="er_active_page">About Us</span>
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
                                    <li><a href="/">Home</a></li>
                                    <li class="active"><a href="/about-us">About</a></li>

                                    <li><a href="/products">Produits</a></li>
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
        <!------------- About Section start ----------->
        <div class="er_sec er_about_section">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="er_sec_heading er_about_head">
                            <h5>About Us</h5>
                            <h4>We Have Experts Who Help You With Your Gardening</h4>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                                duis enim velit mollit. Exercitation veniam consequat nostrud amet. If you are even
                                going to use a passage of Lorem Ipsum, you need to be sure.</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but as a the
                                majority have suffered alteration in some form, by injected humour, or deratt
                                randomised words which don't look even slightly believable. If you are even
                                going to use a passage of Lorem Ipsum, you need to be sure. Amet minim mollit non
                                deserunt ullamco est sit aliqua dolor do amet sint.
                                duis enim velit mollit. Exercitation veniam consequat nostrud amet. If you are even
                                going to use a passage of Lorem Ipsum, you need to be sure.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="er_about_img">
                            <img src="assets/images/about-right.png" alt="about-img" srcset="">
                            <div class="er_about_leaf">
                                <img src="assets/images/about-leaf.png" alt="about-img" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------- About Section end ----------->
        <!------------- Our mission Section start ----------->
        <div class="er_sec er_about_section er_sec_bg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="er_about_img er_mis_img">
                            <img src="assets/images/mission-left.png" alt="about-img" srcset="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="er_sec_heading er_about_head er_mission_head">
                            <h5>Our Mission</h5>
                            <h4>We are Committed to Stop Global Warming</h4>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                                duis enim velit mollit. Exercitation veniam consequat nostrud amet.</p>
                            <ul>
                                <li>
                                    <img src="assets/images/right-icon.png" alt="">
                                    <p> Consectetur adipiscing elit eiusmod tempor incididunt Ut </p>
                                </li>
                                <li>
                                    <img src="assets/images/right-icon.png" alt="">
                                    <p>labore et dolore magna aliquaipsum suspendisse </p>
                                </li>
                                <li>
                                    <img src="assets/images/right-icon.png" alt="">
                                    <p>Trices gravida. Risus commodo.</p>
                                </li>
                                <li>
                                    <img src="assets/images/right-icon.png" alt="">
                                    <p>Sed do eiusmod tempor incididunt </p>
                                </li>
                                <li>
                                    <img src="assets/images/right-icon.png" alt="">
                                    <p>Jesceore et dolore magna aliquaipsum suspendisse</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------- Our mission Section end ----------->
        <!------------- Our vision Section start ----------->
        <div class="er_sec er_about_section">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="er_sec_heading er_about_head er_vision_head">
                            <h5>Our Vision</h5>
                            <h4>Empowering communities, preserving nature, and creating a sustainable tomorrow</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. </p>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                                aliquam quaerat voluptatem. </p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="er_about_img er_mis_img">
                            <img src="assets/images/vision-left.png" alt="about-img" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------- Our mission Section end ----------->
        <!------------- Our-Partner Section start ----------->
        <div class="er_sec er_choose_section er_partner_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="er_sec_heading er_partner_head">
                            <h5>Our Partners</h5>
                            <h4>Get to know Our Partners</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="er_partner_box">
                            <div class="swiper-container er_partner_slider">
                                <!-- Slider Slides -->
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="javascript:;">
                                            <span>
                                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 106 53" width="106" height="53">
                                                    <path id="Logo 01" class="s0"
                                                        d="m43.7 17.9c-1.1 0.1-2-0.3-2.6-1.5c-0.7-1.3-0.1-0.7-1.2-1.8q-0.3-0.3-0.4-0.7c0-0.3 0.1-0.6 0.3-0.7c1.2-0.5 2.3-1.2 3.4-1.8c1.5-0.9 0.4-1.9 1.2-2.6q0.4-0.4 0.9-0.9c1.6-1.8 2.7-2.6 5.1-3.4c1.5-0.5 3.2-0.7 4.7-0.6c0.3-0.8 0.8-1.4 1.3-1.6c0.8-0.5 1.8-0.3 2.4 0.2c1.1 1 1.4 2.8-0.5 3.6c6.4 4.5 8.3 11.4 7.9 18.8q0 0.1-0.1 0.1q0 0.1-0.1 0c-6.2-3.6-14.9-2.7-20.3 0.8q-0.1 0.1-0.2 0q-0.1 0-0.1-0.1c-0.4-3.4 3.9-5.9 1-7.5c-1.4-0.7-1.5-0.4-2.7-0.3zm3.3-7.8q-0.1 0-0.1 0.1q0 0.1 0 0.2c0.4 1.1 1.5 0.7 2.1-0.1q0-0.1 0-0.2q-0.1-0.1-0.2-0.1c-0.6-0.1-1.2-0.1-1.8 0.1zm-40.7 30.8h-4.3v-9.7h3.8q1 0 1.7 0.2q0.8 0.3 1.1 0.7q0.7 0.7 0.7 1.7q0 1.1-0.8 1.6q-0.2 0.2-0.3 0.3q-0.1 0-0.4 0.1q0.9 0.2 1.5 0.9q0.5 0.6 0.5 1.5q0 1-0.7 1.8q-0.8 0.9-2.8 0.9zm-2.1-5.8h1q0.9 0 1.4-0.2q0.4-0.2 0.4-0.8q0-0.7-0.4-0.9q-0.4-0.2-1.4-0.2h-1zm0 4h1.5q0.9 0 1.4-0.3q0.5-0.2 0.5-0.9q0-0.6-0.5-0.9q-0.5-0.2-1.6-0.2h-1.3zm16.1-7.8v1.9h-4.8v2h4.3v1.8h-4.3v2h5v1.9h-7.2v-9.6zm10.7 9.6l-0.9-2h-4.2l-0.9 2h-2.3l4.2-9.6h2.2l4.2 9.6zm-3-6.7l-1.2 2.8h2.5zm15.9 0.3q0 2.3-1.8 3l2.5 3.5h-2.7l-2.2-3.1h-1.5v3.1h-2.2v-9.7h3.7q2.3 0 3.3 0.8q0.9 0.7 0.9 2.4zm-2.6 1.1q0.4-0.3 0.4-1.1q0-0.8-0.4-1.1q-0.4-0.3-1.5-0.3h-1.6v2.9h1.6q1.1 0 1.5-0.4zm10.8 5.4h-4.3v-9.7h3.8q1 0 1.7 0.2q0.7 0.3 1.1 0.7q0.7 0.7 0.7 1.6q0 1.2-0.8 1.7q-0.2 0.2-0.3 0.3q-0.1 0-0.4 0.1q0.9 0.2 1.5 0.8q0.5 0.7 0.5 1.6q0 1-0.7 1.8q-0.8 0.9-2.8 0.9zm-2.1-5.8h1q0.9 0 1.4-0.2q0.4-0.2 0.4-0.8q0-0.7-0.4-0.9q-0.4-0.2-1.4-0.2h-1zm0 3.9h1.5q0.9 0 1.4-0.2q0.5-0.2 0.5-0.9q0-0.7-0.5-0.9q-0.5-0.2-1.6-0.2h-1.3zm17-4.6q0 2.3-1.9 3l2.5 3.4h-2.7l-2.1-3h-1.6v3h-2.1v-9.6h3.7q2.3 0 3.2 0.7q1 0.8 1 2.5zm-2.6 1.1q0.4-0.3 0.4-1.1q0-0.8-0.4-1.1q-0.5-0.3-1.5-0.3h-1.7v2.9h1.6q1.2 0 1.6-0.4zm13.4 5.3l-0.9-2h-4.1l-0.9 2h-2.3l4.2-9.6h2.1l4.3 9.6zm-3-6.8l-1.2 2.9h2.4zm14.9-2.9h2.2v9.6h-2.2l-4.7-6v6h-2.1v-9.6h2l4.8 6.2zm13.7 1.3q1.4 1.2 1.4 3.5q0 2.2-1.3 3.6q-1.4 1.3-4.2 1.3h-3.4v-9.7h3.5q2.6 0 4 1.3zm-1.6 5.7q0.8-0.7 0.8-2.2q0-1.4-0.8-2.1q-0.8-0.8-2.5-0.8h-1.2v5.9h1.4q1.5 0 2.3-0.8zm-81.5 10.8q0 0 0 0h-1.2v0.9h0.9q0.1 0 0.1 0.1v0.4q0 0.1-0.1 0.1h-0.9v0.9h1.2q0 0 0 0.1v0.4q0 0.1 0 0.1h-1.7q-0.1 0-0.1-0.1v-3.4q0-0.1 0.1-0.1h1.7q0 0 0 0.1zm4.2-0.5q0.6 0 0.6 0.6v0.5q0 0.1 0 0.1h-0.5q-0.1 0-0.1-0.1v-0.3q0-0.2-0.2-0.2h-0.2q-0.1 0-0.2 0.2v0.6l1.1 0.3q0.1 0.1 0.1 0.2v1q0 0.6-0.6 0.7h-0.5q-0.7-0.1-0.7-0.7v-0.5q0 0 0.1 0h0.5q0 0 0 0v0.4q0.1 0.2 0.2 0.2h0.2q0.2 0 0.2-0.2v-0.6l-1-0.3q-0.2-0.1-0.2-0.2v-1.1q0-0.6 0.7-0.6zm5.3 0q0.1 0 0.1 0.1v0.4q0 0.1-0.1 0.1h-0.5v2.9q0 0.1-0.1 0.1h-0.5q0 0 0-0.1v-2.9h-0.5q-0.1 0-0.1-0.1v-0.4q0-0.1 0.1-0.1zm4.4 3.6q-0.1 0-0.1-0.1l-0.1-0.7h-0.8l-0.2 0.7q0 0.1 0 0.1h-0.5q-0.1-0.1-0.1-0.1l0.8-3.4q0-0.1 0.1-0.1h0.6q0 0 0.1 0.1l0.7 3.4q0 0-0.1 0.1zm-0.6-2.8l-0.3 1.5h0.6zm6.1 0.7c0 0.2-0.2 0.3-0.3 0.3c0.1 0.1 0.3 0.2 0.3 0.3v0.9q-0.1 0.6-0.7 0.6h-1.1q0 0-0.1-0.1v-3.4q0.1-0.1 0.1-0.1h1.1q0.6 0.1 0.7 0.7zm-0.6-0.7q0-0.2-0.2-0.2h-0.4v0.9h0.4q0.2 0 0.2-0.2zm0 1.5q0-0.2-0.2-0.2h-0.4v0.9h0.4q0.2 0 0.2-0.1zm4.3 0.7h1.1q0 0 0 0.1v0.4q0 0.1 0 0.1h-1.6q-0.1 0-0.1-0.1v-3.4q0-0.1 0.1-0.1h0.4q0.1 0 0.1 0.1zm4.7-3q0.1 0 0.1 0.1v3.4q0 0.1-0.1 0.1h-0.4q-0.1 0-0.1-0.1v-3.4q0-0.1 0.1-0.1zm4.3 0q0.6 0 0.7 0.7v0.4q0 0.1-0.1 0.1h-0.5q-0.1 0-0.1-0.1v-0.3q0-0.2-0.1-0.2h-0.3q-0.1 0-0.1 0.2v0.6l1 0.4q0.2 0 0.2 0.1v1q-0.1 0.7-0.7 0.7h-0.5q-0.6 0-0.6-0.7v-0.4q0-0.1 0-0.1h0.5q0.1 0 0.1 0.1v0.3q0 0.2 0.1 0.2h0.3q0.1 0 0.1-0.2v-0.6l-1-0.3q-0.1-0.1-0.1-0.2v-1q0-0.7 0.6-0.7zm5 0.1q0-0.1 0-0.1h0.5q0.1 0 0.1 0.1v3.4q0 0.1-0.1 0.1h-0.5q0 0 0-0.1v-1.4h-0.6v1.4q0 0.1-0.1 0.1h-0.4q-0.1 0-0.1-0.1v-3.4q0-0.1 0.1-0.1h0.4q0.1 0 0.1 0.1v1.4h0.6zm5.5 0.5q0 0-0.1 0h-1.1v0.9h0.9q0 0 0 0.1v0.4q0 0.1 0 0.1h-0.9v0.9h1.1q0.1 0 0.1 0.1v0.4q0 0.1-0.1 0.1h-1.6q-0.1 0-0.1-0.1v-3.4q0-0.1 0.1-0.1h1.6q0.1 0 0.1 0.1zm3.1-0.4q0-0.1 0.1-0.1h1q0.7 0 0.7 0.6v2.3q0 0.6-0.7 0.6h-1q-0.1 0-0.1 0zm1 2.9q0.2 0 0.2-0.2v-2q0-0.2-0.2-0.2h-0.4v2.4zm5.9-3q0.1 0 0.1 0.1v3.4q0 0-0.1 0.1h-0.4q-0.1-0.1-0.1-0.1v-2.8h-0.3q-0.1 0-0.1-0.1v-0.4q0-0.1 0.1-0.1zm3.9 2.2q-0.6 0-0.6-0.6v-1q0-0.6 0.6-0.6h0.5q0.7 0 0.7 0.6v1.2q0 0.1-0.1 0.2l-0.6 1.5q0 0.1-0.1 0.1h-0.5q-0.1 0-0.1-0.1l0.6-1.3zm0.1-1.6q-0.1 0-0.1 0.2v0.6q0 0.2 0.1 0.2h0.3q0.2 0 0.2-0.2v-0.6q0-0.2-0.2-0.2zm4.8 1.6q-0.7 0-0.7-0.6v-1q0-0.6 0.7-0.6h0.5q0.6 0 0.6 0.6v1.2q0 0.1 0 0.2l-0.6 1.5q-0.1 0.1-0.1 0.1h-0.5q-0.1 0-0.1-0.1l0.6-1.3zm0.1-1.6q-0.2 0-0.2 0.2v0.6q0 0.2 0.2 0.2h0.3q0.1 0 0.1-0.2v-0.6q0-0.2-0.1-0.2zm5-0.6q0.1 0 0.1 0.1v3.4q0 0.1-0.1 0.1h-0.4q-0.1 0-0.1-0.1v-2.8h-0.3q-0.1 0-0.1-0.1v-0.4q0-0.1 0.1-0.1z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:;">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="109" height="50"
                                                    viewBox="0 0 109 50">
                                                    <path id="Logo_02" data-name="Logo 02" class="cls-1"
                                                        d="M666.687,6481.73a0.4,0.4,0,0,0,.006.57,0.389,0.389,0,0,0,.562.01A0.406,0.406,0,0,0,666.687,6481.73Zm43.619,0.57a0.39,0.39,0,1,0-.563.01A0.39,0.39,0,0,0,710.306,6482.3Zm-21.807,2.21a24.409,24.409,0,0,0,9.373-5.66,10.714,10.714,0,0,0,3.452-7.39v-13.34H675.675v13.34a10.709,10.709,0,0,0,3.452,7.39A24.413,24.413,0,0,0,688.5,6484.51Zm-12.2-25.76H700.7v12.71c0,6-7.109,10.69-12.2,12.39-5.085-1.7-12.2-6.39-12.2-12.39v-12.71Zm12.134,26.19,0.062,0.01,0.063-.01a24.87,24.87,0,0,0,9.608-5.8,11.082,11.082,0,0,0,3.572-7.68v-13.77H675.257v13.77a11.082,11.082,0,0,0,3.572,7.68A24.87,24.87,0,0,0,688.437,6484.94Zm-12.762-26.82h25.649v13.34a10.714,10.714,0,0,1-3.452,7.39,24.409,24.409,0,0,1-9.373,5.66,24.413,24.413,0,0,1-9.372-5.66,10.709,10.709,0,0,1-3.452-7.39v-13.34Zm12.824,25.73c5.088-1.7,12.2-6.39,12.2-12.39v-12.71H676.3v12.71C676.3,6477.46,683.414,6482.15,688.5,6483.85Zm-7.013-16.99c1.336-1.67,3.48-.9,4.6.61a8.339,8.339,0,0,1,1.48,3.7h0.519a0.208,0.208,0,0,1,0-.05,8.8,8.8,0,0,0-1.415-3.72,3.055,3.055,0,0,1,.237-3.47c0.115-.16.244-0.32,0.375-0.48a3.727,3.727,0,0,0,.721-1.2,0.512,0.512,0,0,1,1,0,3.675,3.675,0,0,0,.721,1.2c0.131,0.16.26,0.32,0.374,0.48a3.053,3.053,0,0,1,.238,3.47,8.828,8.828,0,0,0-1.415,3.72,0.208,0.208,0,0,1,0,.05h0.519a8.3,8.3,0,0,1,1.48-3.7c1.122-1.51,3.266-2.28,4.6-.61a2.58,2.58,0,0,1-1.526,4.23,0.253,0.253,0,0,1-.268-0.11,0.267,0.267,0,0,1,.009-0.3,1.751,1.751,0,0,0,.314-0.81c0.2-1.63-1.552-1.53-2.453-.8a3.131,3.131,0,0,0-1.087,2.1h0.44a0.654,0.654,0,0,1,.642.65,0.647,0.647,0,0,1-.642.65h-0.183a1.894,1.894,0,0,0,.644.67,1.362,1.362,0,0,0,1.732-.15,0.23,0.23,0,0,1,.237-0.05,0.24,0.24,0,0,1,.178.17,1.8,1.8,0,0,1-2.758,2.01,3.316,3.316,0,0,1-1.382-2.65H688.9a4.291,4.291,0,0,0,.967,2.54c0.967,1.09-.169,1.84-1.133,2.32a0.476,0.476,0,0,1-.23.06,0.484,0.484,0,0,1-.229-0.06c-0.964-.48-2.1-1.23-1.131-2.32a4.294,4.294,0,0,0,.964-2.54H687.59a3.324,3.324,0,0,1-1.379,2.65,1.8,1.8,0,0,1-2.761-2.01,0.24,0.24,0,0,1,.177-0.17,0.231,0.231,0,0,1,.238.05,1.364,1.364,0,0,0,1.734.15,1.914,1.914,0,0,0,.642-0.67h-0.183a0.647,0.647,0,0,1-.642-0.65,0.654,0.654,0,0,1,.642-0.65h0.44a3.143,3.143,0,0,0-1.087-2.1c-0.9-.73-2.652-0.83-2.453.8a1.751,1.751,0,0,0,.314.81,0.261,0.261,0,0,1,.009.3,0.254,0.254,0,0,1-.268.11A2.58,2.58,0,0,1,681.486,6466.86Zm30.885-8.96a1.076,1.076,0,0,0-1.06.93c-0.568,3.98-4.637,8.13-8.483,9.55v2.7h19.188a3.53,3.53,0,0,0,3.509-3.54H712.974a1.1,1.1,0,0,1,1.073-1.28h16.7a3.533,3.533,0,0,0,3.51-3.54H716.3a1.1,1.1,0,0,1,1.07-1.28h22.115a3.531,3.531,0,0,0,3.51-3.54H712.371Zm-38.2,13.18v-2.7c-3.845-1.42-7.914-5.57-8.482-9.55a1.076,1.076,0,0,0-1.06-.93H634a3.533,3.533,0,0,0,3.509,3.54h22.115a1.1,1.1,0,0,1,1.071,1.28H642.737a3.533,3.533,0,0,0,3.509,3.54h16.708a1.1,1.1,0,0,1,1.071,1.28H651.474a3.53,3.53,0,0,0,3.509,3.54H674.17Zm8.8-16.13a0.57,0.57,0,0,0,0,1.14h11.065a0.57,0.57,0,0,0,0-1.14H682.967Zm0.314-.8h10.437a0.52,0.52,0,0,0,.467-0.22l2.3-6.19a0.121,0.121,0,0,0-.033-0.17,0.305,0.305,0,0,0-.234-0.07,1.944,1.944,0,0,0-1.909,1.45,1.058,1.058,0,0,0-1.658.29,0.093,0.093,0,0,0,.12.11,0.757,0.757,0,0,1,.825.26,1.059,1.059,0,0,1,.191,1.15c-0.458,1.15-1.991,1.24-3.02,1.02a1.614,1.614,0,0,1-1.453-1.44,1.561,1.561,0,0,1,.808-1.39,1.137,1.137,0,0,1,1.043.03,0.094,0.094,0,0,0,.088.01,0.119,0.119,0,0,0,.049-0.08c0.038-.65-0.562-1.28-1.8-0.88a2.335,2.335,0,0,0-.967-3.02,0.116,0.116,0,0,0-.082,0,2.335,2.335,0,0,0-.966,3.02c-1.232-.4-1.835.23-1.8,0.88a0.119,0.119,0,0,0,.049.08,0.091,0.091,0,0,0,.087-0.01,1.14,1.14,0,0,1,1.044-.03,1.561,1.561,0,0,1,.808,1.39,1.614,1.614,0,0,1-1.453,1.44c-1.03.22-2.562,0.13-3.02-1.02a1.052,1.052,0,0,1,.191-1.15,0.753,0.753,0,0,1,.822-0.26,0.089,0.089,0,0,0,.1-0.02,0.085,0.085,0,0,0,.025-0.09,1.058,1.058,0,0,0-1.658-.29,1.944,1.944,0,0,0-1.909-1.45,0.309,0.309,0,0,0-.235.07,0.126,0.126,0,0,0-.033.17l2.3,6.19A0.517,0.517,0,0,0,683.281,6454.15Zm1.63,35.22a0.473,0.473,0,0,0-.538.53l-0.208,1.7a0.474,0.474,0,0,0,.394.64,0.5,0.5,0,0,0,.546-0.52l0.21-1.71A0.5,0.5,0,0,0,684.911,6489.37Zm-4.023-.77-0.308-.09-0.374,1.4,0.3,0.08a0.414,0.414,0,0,0,.571-0.36l0.117-.43A0.414,0.414,0,0,0,680.888,6488.6Zm18.789-4.02a26.328,26.328,0,0,1-22.353,0,26.551,26.551,0,0,1-9.083-7.03l-6.03,5.11a34.488,34.488,0,0,0,11.779,9.11,34.154,34.154,0,0,0,40.794-9.11l-6.026-5.11A26.572,26.572,0,0,1,699.677,6484.58Zm-32.422-2.27a0.389,0.389,0,0,1-.562-0.01,0.39,0.39,0,1,1,.552-0.55A0.4,0.4,0,0,1,667.255,6482.31Zm3.685,1.98-0.276.35a0.648,0.648,0,0,1-.88.22,0.545,0.545,0,0,1,.006.43l-0.213.64a0.331,0.331,0,0,0,.049.41l-0.117.15a0.837,0.837,0,0,1-.32-0.18c-0.24-.19-0.126-0.38-0.044-0.65l0.2-.64a0.408,0.408,0,0,0-.163-0.56c-0.192.24-.5,0.64-0.7,0.89l0.079,0.25-0.09.11c-0.221-.18-0.5-0.41-0.729-0.58l0.09-.12,0.26,0.02c0.59-.75,1.2-1.51,1.786-2.26l-0.066-.22,0.09-.11,0.779,0.62A0.81,0.81,0,0,1,670.94,6484.29Zm3.329,2.12-0.213-.13,0.125-.48-0.571-.35c-0.218.37-.436,0.75-0.658,1.12l0.4,0.24,0.248-.17,0.126,0.08-0.421.72-0.128-.08,0.024-.29-0.407-.24c-0.183.31-.366,0.62-0.551,0.94a0.137,0.137,0,0,1-.164.08l-0.011.02c0.238,0.14.475,0.28,0.716,0.43l0.382-.33,0.186,0.11-0.394.67c-0.524-.31-1.054-0.63-1.584-0.94l0.071-.13,0.268-.01c0.491-.84.983-1.67,1.472-2.51l-0.1-.21,0.066-.11c0.513,0.31.986,0.59,1.5,0.9Zm3.624,1.82-0.216-.09,0.065-.59-0.327-.14c-0.366.87-.73,1.74-1.093,2.6l0.137,0.23-0.066.15-0.868-.37,0.065-.15,0.257-.06c0.366-.87.732-1.73,1.1-2.6l-0.336-.14-0.366.46-0.215-.1,0.357-.8,1.833,0.79Zm3.793,1.1-0.118.44a0.67,0.67,0,0,1-.723.55,0.506,0.506,0,0,1,.172.38l0.057,0.68a0.333,0.333,0,0,0,.208.36l-0.05.18a0.894,0.894,0,0,1-.363-0.03c-0.3-.08-0.267-0.3-0.3-0.58l-0.068-.68a0.4,0.4,0,0,0-.371-0.44c-0.08.3-.211,0.78-0.293,1.09l0.17,0.2-0.036.13c-0.276-.07-0.625-0.17-0.9-0.24l0.035-.14,0.246-.08c0.251-.93.5-1.87,0.754-2.8l-0.142-.17,0.038-.14,0.959,0.26A0.808,0.808,0,0,1,681.686,6489.33Zm3.921,2.45a0.983,0.983,0,0,1-1.947-.24l0.208-1.71a0.983,0.983,0,0,1,1.947.25Zm3.463,0.99-1.057.01,0-.14,0.213-.15-0.05-2.88-0.188-.14,0-.15,1.027-.01a0.83,0.83,0,0,1,1,.87l0.028,1.66A0.88,0.88,0,0,1,689.07,6492.77Zm3.5-.25-0.022-.14,0.194-.18c-0.148-.96-0.3-1.92-0.446-2.87l-0.2-.1-0.019-.12c0.589-.1,1.13-0.18,1.72-0.28l0.117,0.77-0.24.04-0.21-.46-0.656.1c0.066,0.43.132,0.86,0.2,1.28l0.464-.07,0.082-.29,0.144-.02c0.039,0.24.093,0.58,0.129,0.82l-0.145.03-0.166-.24-0.465.07c0.058,0.36.112,0.72,0.17,1.08a0.141,0.141,0,0,1-.08.17l0.006,0.02c0.276-.04.546-0.09,0.822-0.13l0.09-.5,0.213-.03,0.118,0.77C693.781,6492.33,693.178,6492.43,692.569,6492.52Zm5.019-1.01a0.758,0.758,0,0,1-1.054-.48l-0.077-.26,0.53-.16,0.079,0.27a0.336,0.336,0,0,0,.451.3,0.36,0.36,0,0,0,.238-0.51l-0.118-.4c-0.18-.62-1.294-0.02-1.537-0.84l-0.118-.4a0.7,0.7,0,0,1,.541-0.91,0.712,0.712,0,0,1,.6.06l0.019-.01-0.016-.19,0.319-.09c0.088,0.29.175,0.59,0.262,0.88l-0.486.15-0.068-.24a0.332,0.332,0,0,0-.456-0.26,0.325,0.325,0,0,0-.224.46l0.115,0.4c0.169,0.58,1.291-.04,1.548.84l0.118,0.4A0.792,0.792,0,0,1,697.588,6491.51Zm3.146-1.17-0.057-.13,0.144-.22c-0.377-.89-0.754-1.77-1.133-2.66l-0.221-.04-0.055-.14,0.795-.34,0.055,0.13-0.121.19c0.38,0.89.757,1.77,1.134,2.66l0.256,0.05,0.058,0.13C701.332,6490.08,700.993,6490.23,700.734,6490.34Zm4.5-2.3-0.171-.19a0.7,0.7,0,0,1-.361.55,0.875,0.875,0,0,1-1.314-.29c-0.281-.49-0.565-0.98-0.843-1.46a0.9,0.9,0,0,1,.365-1.28,0.823,0.823,0,0,1,.609-0.12h0.014l-0.06-.18,0.292-.17,0.481,0.83-0.44.25-0.131-.22a0.4,0.4,0,0,0-.6-0.11,0.482,0.482,0,0,0-.087.74c0.281,0.48.565,0.97,0.847,1.46a0.47,0.47,0,0,0,.7.27,0.445,0.445,0,0,0,.126-0.69l-0.189-.32h-0.333l-0.071-.13,0.691-.4c0.251,0.43.5,0.86,0.754,1.3Zm4.52-6.29a0.39,0.39,0,1,1,.552.55,0.39,0.39,0,0,1-.563.01A0.4,0.4,0,0,1,709.754,6481.75Zm-0.977,3.76a0.213,0.213,0,0,1-.271,0l-2.329-1.67-0.008.01,0.352,0.35,1.324,1.69,0.241-.03,0.1,0.12c-0.191.15-.412,0.33-0.6,0.48l-0.093-.12,0.082-.23c-0.6-.76-1.2-1.52-1.792-2.28l-0.224.02-0.09-.12c0.186-.15.273-0.21,0.453-0.36,0.17-.13.213-0.14,0.369-0.03l1.327,0.91,0.768,0.62,0.008-.01c-0.156-.19-0.375-0.44-0.53-0.64l-0.983-1.25-0.227.01-0.1-.12c0.191-.15.376-0.3,0.565-0.45l0.1,0.12-0.068.22c0.656,0.83,1.306,1.66,1.958,2.49Zm-19.761,4.1h-0.328l0.046,2.67a0.126,0.126,0,0,1-.1.15l0.006,0.03,0.429-.01a0.487,0.487,0,0,0,.467-0.6l-0.03-1.66A0.484,0.484,0,0,0,689.016,6489.61Zm-18.767-6.51c-0.334.42-.563,0.71-0.893,1.13l0.245,0.2a0.413,0.413,0,0,0,.664-0.11l0.276-.35a0.412,0.412,0,0,0-.047-0.67Zm-3.256-5.17,1.429-1.16a22.711,22.711,0,0,0,3.028,1.4,0.1,0.1,0,0,0,.1-0.03,0.09,0.09,0,0,0,0-.11,24.386,24.386,0,0,1-3.793-4.76,0.079,0.079,0,0,0-.068-0.03,0.1,0.1,0,0,0-.074.04,35.4,35.4,0,0,0-2.294,3.48,41.266,41.266,0,0,1-4.208.54,0.075,0.075,0,0,0-.069.05,0.089,0.089,0,0,0,.009.09,32.584,32.584,0,0,0,2.389,3.39Zm44.684-1.17a35.4,35.4,0,0,0-2.294-3.48,0.1,0.1,0,0,0-.074-0.04,0.081,0.081,0,0,0-.068.03,24.839,24.839,0,0,1-3.785,4.76,0.069,0.069,0,0,0,0,.1,0.1,0.1,0,0,0,.1.04,23.881,23.881,0,0,0,3.02-1.4l1.432,1.17,3.55,2.89a32.584,32.584,0,0,0,2.389-3.39,0.089,0.089,0,0,0,.008-0.09,0.074,0.074,0,0,0-.068-0.05A41.266,41.266,0,0,1,711.677,6476.76Z"
                                                        transform="translate(-634 -6445)" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:;">
                                            <span>
                                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 70 53" width="70" height="53">
                                                    <path id="Logo 03" class="s0"
                                                        d="m45.1 20.6c0.4 0 0.7 0.3 0.7 0.6v0.7c0 0.3-0.3 0.6-0.7 0.6q0 0.2-0.1 0.3c-0.2 2.2-0.4 5-3.4 5c-2.9 0-3.9-0.1-5.5-3q-0.1-0.1-0.3-0.2q-0.1-0.1-0.3-0.1q-0.2 0-0.3 0.1q-0.2 0.1-0.3 0.2c-1.6 2.9-2.6 3-5.5 3c-3 0-3.2-2.8-3.5-5q0-0.1 0-0.3c-0.4 0-0.7-0.3-0.7-0.6v-0.7c0-0.3 0.3-0.6 0.7-0.6h9.6h9.6zm-1.4 2.6c-0.1 1.5-0.4 3.2-2.1 3.2c-0.9 0-2 0.2-2.8-0.3c-1.1-0.7-1.6-1.7-1.9-2.8q0-0.3 0.1-0.5q0.2-0.3 0.6-0.3h5.5q0.3 0 0.5 0.2q0.1 0.3 0.1 0.5zm-16.4 0q-0.1-0.2 0.1-0.5q0.2-0.2 0.5-0.2h5.5q0.3 0 0.5 0.3q0.2 0.2 0.2 0.5c-0.3 1.1-0.9 2.1-1.9 2.8c-0.8 0.5-1.9 0.3-2.8 0.3c-1.7 0-2-1.7-2.1-3.2zm-0.3 7q0.2-0.1 0.4 0c0.8 0.5 1.7 0.4 2.4 0.1c1.3-0.6 1.9-1.4 3.6-1.3c0.8 0.1 1.5 0.4 2.1 1.1c0.6-0.7 1.3-1 2-1.1c1.8-0.1 2.4 0.7 3.7 1.3c0.7 0.3 1.6 0.4 2.4-0.1q0.2-0.1 0.4 0q0.2 0.1 0.1 0.4c-0.5 2.9-4.2 3.7-6.9 3.2c-0.7-0.1-1.3-0.3-1.7-0.7c-0.4 0.4-1 0.6-1.7 0.7c-2.8 0.5-6.4-0.3-7-3.2q0-0.3 0.2-0.4zm12.6-28.1q0.2-0.1 0.3-0.1c6.3 2.2 9.1 11.9 4.9 16.4q-0.1 0.2-0.3 0.1q-0.2-0.1-0.1-0.3c0.1-2.2-0.3-3.8-1.3-5c-2.2 4.6-11 6-14.4 3.2q-0.1-0.2-0.1-0.3q0.1-0.2 0.2-0.2c1.7-0.4 3.2-2 3.1-3.5c-3.3 0.7-5.2 2.2-5.5 6q-0.1 0.2-0.2 0.3q-0.2 0-0.3-0.1c-2.5-2.4-2.2-6.7 0.1-9.3c3.3-3.8 8.2-1.4 12-3.7c1.2-0.6 1.8-1.7 1.6-3.3q-0.1-0.1 0-0.2zm-35.9 44.4c0 0.4-0.4 0.8-0.9 0.8c-0.4 0-0.8-0.4-0.8-0.8c0-0.5 0.4-0.9 0.8-0.9c0.5 0 0.9 0.4 0.9 0.9zm65.3 0c0 0.4-0.4 0.8-0.9 0.8c-0.4 0-0.8-0.4-0.8-0.8c0-0.5 0.4-0.9 0.8-0.9c0.5 0 0.9 0.4 0.9 0.9zm-57.8-5q0.1-0.2 0.3-0.2h1.3q0.2 0 0.2 0.2v10.3q0 0.2-0.2 0.2h-1.3q-0.2 0-0.3-0.2v-4.3h-1.6v4.3q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2v-10.3q0-0.2 0.2-0.2h1.4q0.2 0 0.2 0.2v4.3h1.6zm6.1-0.2q0.2 0 0.2 0.2v10.2q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2v-10.2q0-0.2 0.2-0.2zm2.9 0.2q0-0.2 0.2-0.2h3.1c1.3 0 1.9 0.6 1.9 1.9v3.2c0 1.3-0.6 2-1.9 2h-1.6v3.3q0.1 0.2-0.2 0.2h-1.3q-0.2 0-0.2-0.2zm2.9 5.1c0.4 0 0.5-0.2 0.5-0.5v-2.5q0-0.5-0.5-0.5h-1.2v3.5zm8.2-5.3c1.3 0 1.9 0.7 1.9 1.9v1.4q0 0.2-0.2 0.3h-1.3q-0.2-0.1-0.3-0.3v-1q0.1-0.5-0.5-0.5h-0.6c-0.3 0-0.5 0.2-0.5 0.5v1.8l3.1 1.1q0.3 0.1 0.3 0.5v3.1c0 1.2-0.6 1.9-1.9 1.9h-1.4c-1.2 0-1.9-0.7-1.9-1.9v-1.4q0-0.3 0.2-0.3h1.4q0.2 0 0.2 0.3v1c0 0.3 0.2 0.5 0.5 0.5h0.6q0.5 0 0.5-0.5v-1.8l-3.1-1q-0.3-0.1-0.3-0.5v-3.2c0-1.2 0.7-1.9 1.9-1.9zm9 0q0.2 0 0.2 0.2v1.4q0 0.2-0.2 0.2h-1.5v8.7q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2v-8.7h-1.5q-0.2 0-0.2-0.2v-1.4q0-0.2 0.2-0.2zm7.7 1.6c0 0.1 0 0.2-0.2 0.2h-3.3v2.6h2.5q0.2 0.1 0.2 0.3v1.3q0 0.2-0.2 0.2h-2.5v2.7h3.3q0.2 0 0.2 0.2v1.4q0 0.2-0.2 0.2h-4.8q-0.2 0-0.2-0.2v-10.3q0-0.2 0.2-0.2h4.8q0.2 0 0.2 0.2zm7.9 3.6q0 1.4-0.9 1.8l0.9 3.5q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.1l-0.9-3.4h-0.9v3.3q0 0.2-0.2 0.2h-1.3q-0.2 0-0.3-0.2v-10.2q0.1-0.2 0.3-0.2h3.2c1.3 0 1.9 0.6 1.9 1.9zm-2.3 0.2q0.5-0.1 0.6-0.6v-2.5q-0.1-0.5-0.6-0.5h-1.3v3.6zm8.4-5.4c1.2 0 1.8 0.7 1.8 1.9v1.5q0.1 0.2-0.2 0.2h-1.3q-0.2 0-0.2-0.2v-1.1q0-0.5-0.6-0.5h-0.6c-0.3 0-0.5 0.2-0.5 0.5v1.9l3.1 1q0.3 0.1 0.3 0.5v3.1c0 1.2-0.6 1.9-1.8 1.9h-1.5c-1.2 0-1.9-0.7-1.9-1.9v-1.4q0-0.2 0.2-0.2h1.4q0.2 0 0.2 0.2v1c0 0.4 0.2 0.5 0.5 0.5h0.6q0.6 0 0.6-0.5v-1.8l-3.1-1q-0.4-0.1-0.4-0.5v-3.2c0-1.2 0.7-1.9 1.9-1.9z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:;">
                                            <span>
                                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 107 54" width="107" height="54">
                                                    <path id="Logo 05" class="s0"
                                                        d="m64 18.3h26v0.5h-26v-0.5zm0-2.1h15.8v0.6h-15.8zm-22.7 2v0.6h-26v-0.6h26zm0-2h-15.8v0.5h15.8zm11.4-1.3h6.7c0.1 0 0.3 0.1 0.3 0.3c0 0.1-0.2 0.2-0.3 0.2h-6.7h-6.8c-0.1 0-0.3-0.1-0.3-0.2c0-0.2 0.2-0.3 0.3-0.3h6.8zm8.9 2.2v1.2c0 0.3-0.2 0.5-0.5 0.5h-16.9c-0.3 0-0.5-0.2-0.5-0.5v-1.2h17.9zm-15.7-11.2h-1.7c-0.3 0-0.5 0.2-0.5 0.5c0 0.3 0.2 0.6 0.5 0.6h1.2v0.6h1.1v-1.2c0-0.3-0.3-0.5-0.6-0.5zm13.5 0h1.7c0.3 0 0.5 0.2 0.5 0.5c0 0.3-0.2 0.6-0.5 0.6h-1.2v0.6h-1.1v-1.2c0-0.3 0.3-0.5 0.6-0.5zm-11.8-4h10.1c0.3 0 0.6 0.3 0.6 0.6v5.5c-0.5 0.6-1.4 1-2 1.2c-1.2 0.4-2.5 0.5-3.6 0.5c-1.2 0-2.5-0.1-3.7-0.5c-0.6-0.2-1.5-0.6-2-1.2v-5.5c0-0.3 0.3-0.6 0.6-0.6zm-2.2 9.6h14.5v-3.4h-1.1c-1.6 2.9-10.7 2.9-12.3 0h-1.1v3.4zm7.3 1.7h-6.2c-0.2 0-0.3 0.1-0.3 0.3c0 0.1 0.1 0.3 0.3 0.3h6.2h6.1c0.2 0 0.3-0.2 0.3-0.3c0-0.2-0.1-0.3-0.3-0.3h-6.1zm0 3.4h-9l1.7-4.5h7.3h7.2l1.7 4.5zm-26.3 31.9v0.6q0 1-1 1h-0.3v1.6h-0.6v-4.2h0.9q1 0 1 1zm-1.3-0.4v1.4h0.3c0.2 0 0.4-0.1 0.4-0.4v-0.6c0-0.3-0.2-0.4-0.4-0.4zm4.9 3.6c-0.1-0.1-0.1-0.2-0.1-0.5v-0.7c0-0.4-0.1-0.5-0.4-0.5h-0.2v1.7h-0.7v-4.2h1c0.7 0 1 0.3 1 1v0.3q0 0.6-0.5 0.9c0.4 0.1 0.5 0.4 0.5 0.9v0.6c0 0.2 0 0.4 0.1 0.5zm-0.8-3.6v1.3h0.3c0.2 0 0.4-0.1 0.4-0.4v-0.5q0-0.4-0.3-0.4zm4.2 1.2h0.9v0.6h-0.9v1.2h1.2v0.6h-1.8v-4.2h1.8v0.6h-1.2zm4.9 1.2l0.4-3h0.9v4.2h-0.6v-3l-0.5 3h-0.6l-0.5-2.9v2.9h-0.6v-4.2h1zm3.7-3h0.6v4.2h-0.6zm3.6 0v3.3c0 0.3 0.2 0.4 0.4 0.4c0.2 0 0.3-0.1 0.3-0.4v-3.3h0.6v3.3c0 0.6-0.3 1-0.9 1c-0.7 0-1-0.4-1-1v-3.3zm5 3l0.4-3h1v4.3h-0.7v-3.1l-0.4 3.1h-0.6l-0.5-3v3h-0.6v-4.3h0.9zm4.6-1.9c0-0.7 0.4-1.1 1-1.1c0.7 0 1 0.4 1 1.1v2.2q0 0.3-0.1 0.5c0 0.1 0.1 0.1 0.2 0.1v0.6h-0.1q-0.4 0-0.5-0.3q-0.2 0.1-0.5 0.1c-0.6 0-1-0.4-1-1zm0.7 2.2c0 0.3 0.1 0.4 0.3 0.4c0.2 0 0.3-0.1 0.3-0.4v-2.3c0-0.3-0.1-0.4-0.3-0.4c-0.2 0-0.3 0.1-0.3 0.4zm4.2-3.2v3.2c0 0.3 0.2 0.4 0.4 0.4c0.2 0 0.3-0.1 0.3-0.4v-3.2h0.6v3.2c0 0.7-0.3 1-0.9 1c-0.7 0-1-0.3-1-1v-3.2zm5.7 4.2h-0.6l-0.1-0.8h-0.9l-0.1 0.8h-0.6l0.7-4.2h1zm-1.5-1.4h0.6l-0.3-2.1zm3.7-2.9h0.6v3.6h1.1v0.6h-1.7zm3.9 0h0.6v4.3h-0.6zm2.8 0h2v0.6h-0.7v3.6h-0.6v-3.6h-0.7zm4.8 2.8l-0.8-2.8h0.7l0.5 1.9l0.5-1.9h0.6l-0.8 2.8v1.4h-0.7zm-69.3-24.9h3v13.6h-3v-5.3h-5.4v5.3h-3v-13.6h3v5.7h5.4zm18.5 11.7q-2 2-5 2q-3 0-5.1-2q-2-2-2-5q0-3 2-5q2.1-2 5.1-2q3 0 5 2q2.1 2 2.1 5q0 3-2.1 5zm-1-5q0-1.8-1.2-3.1q-1.1-1.3-2.8-1.3q-1.7 0-2.9 1.3q-1.1 1.3-1.1 3.1q0 1.8 1.1 3.1q1.2 1.3 2.9 1.3q1.7 0 2.8-1.3q1.2-1.3 1.2-3.1zm9.5-4q-0.4 0.4-0.4 1q0 0.6 0.5 0.9q0.5 0.4 2.5 0.8q1.9 0.5 2.9 1.5q1.1 0.9 1.1 2.7q0 1.9-1.4 3q-1.3 1.1-3.5 1.1q-3.3 0-5.8-2.3l1.8-2.3q2.2 2 4 2q0.8 0 1.3-0.4q0.5-0.4 0.5-1q0-0.6-0.5-0.9q-0.5-0.4-2-0.8q-2.4-0.5-3.5-1.4q-1-0.9-1-2.9q0-1.9 1.3-2.9q1.4-1.1 3.5-1.1q1.3 0 2.7 0.5q1.4 0.4 2.4 1.3l-1.6 2.2q-1.7-1.3-3.6-1.3q-0.8 0-1.2 0.3zm21.4 9q-2.1 2-5.1 2q-3 0-5-2q-2.1-2-2.1-5q0-3 2.1-5q2-2 5-2q3 0 5.1 2q2 2 2 5q0 3-2 5zm-1-5q0-1.8-1.2-3.1q-1.2-1.3-2.9-1.3q-1.7 0-2.8 1.3q-1.2 1.3-1.2 3.1q0 1.8 1.2 3.1q1.1 1.3 2.8 1.3q1.7 0 2.9-1.3q1.2-1.3 1.2-3.1zm17.4-2.2q0 3.3-2.6 4.2l3.4 4.9h-3.7l-3-4.3h-2.1v4.3h-3v-13.6h5.1q3.2 0 4.5 1.1q1.4 1.1 1.4 3.4zm-3.7 1.6q0.6-0.5 0.6-1.6q0-1.1-0.6-1.5q-0.6-0.4-2-0.4h-2.3v4h2.2q1.6 0 2.1-0.5zm17.3-6.1v2.7h-6.7v2.8h6.1v2.6h-6.1v2.8h7v2.7h-10v-13.6zm13.2 0h3v13.6h-3l-6.5-8.5v8.5h-3v-13.6h2.8l6.7 8.8zm-71.7-14.3h0.6v3.4h-0.6zm5.7 0l-0.6 1.7l0.6 1.8h-0.5l-0.5-1.4l-0.4 1.4h-0.5l0.6-1.8l-0.6-1.7h0.6l0.4 1.3l0.4-1.3zm5.1 0l-0.6 1.7l0.6 1.8h-0.6l-0.4-1.4l-0.5 1.4h-0.5l0.6-1.8l-0.5-1.7h0.5l0.4 1.3l0.5-1.3zm25.2 0l-0.6 1.7l0.6 1.8h-0.5l-0.5-1.4l-0.4 1.4h-0.5l0.6-1.8l-0.6-1.7h0.6l0.4 1.3l0.4-1.3zm5 0l-0.5 1.7l0.6 1.8h-0.6l-0.4-1.4l-0.5 1.4h-0.5l0.6-1.8l-0.5-1.7h0.5l0.4 1.3l0.4-1.3zm3.3 0h0.5v3.5h-0.5z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:;">
                                            <span>
                                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 79 52" width="79" height="52">
                                                    <path id="Logo 06" class="s0"
                                                        d="m39.6 4.3c3.7 0 6.6 2.9 6.6 6.5c0 3.5-2.9 6.4-6.6 6.4c-3.6 0-6.5-2.9-6.5-6.4c0-3.6 2.9-6.5 6.5-6.5zm0 1.2c3 0 5.4 2.4 5.4 5.3c0 2.9-2.4 5.2-5.4 5.2c-2.9 0-5.3-2.3-5.3-5.2c0-2.9 2.4-5.3 5.3-5.3zm0 1.1c2.4 0 4.3 1.8 4.3 4.2c0 2.3-1.9 4.2-4.3 4.2c-2.3 0-4.2-1.9-4.2-4.2c0-2.4 1.9-4.2 4.2-4.2zm0 0.8c1.2 0 2.2 0.7 2.2 1.5c0 0.9-1 1.6-2.2 1.6c-1.1 0-2.1-0.7-2.1-1.6c0-0.8 1-1.5 2.1-1.5zm7.2-3.1h3.6c1 0 1.8 0.8 1.8 1.7v1.4h-2.2c-1 0-1.8 0.8-1.8 1.8v4.9c0 1 0.8 1.8 1.8 1.8h2.2v1.3c0 1-0.8 1.8-1.8 1.8h-10.8h-10.7c-1 0-1.8-0.8-1.8-1.8v-1.3h2.2c1 0 1.8-0.8 1.8-1.8v-4.9c0-1-0.8-1.8-1.8-1.8h-2.2v-1.4c0-0.9 0.8-1.7 1.8-1.7h3.6l2.5-2.7q0.5-0.6 1.4-0.6h3.2h3.3q0.9 0 1.4 0.6l2.5 2.7zm-19.7 4.3v6.1h2.2c0.3 0 0.6-0.3 0.6-0.6v-4.9c0-0.3-0.3-0.6-0.6-0.6h-2.2zm25.1 0h-2.2c-0.3 0-0.6 0.3-0.6 0.6v4.9c0 0.3 0.3 0.6 0.6 0.6h2.2zm-12.6 31.8c4.3 0 20 0 23.4 0.1c6.1 0 7.5 0.1 7.5 0.2c0 0.1-1.4 0.2-7.5 0.3c-3.4 0-19.1 0-23.4 0c-4.2 0-19.9 0-23.3 0c-6.1-0.1-7.5-0.2-7.5-0.3c0-0.1 1.4-0.2 7.5-0.2c3.4-0.1 19.1-0.1 23.3-0.1zm0-17.6c4.3 0 20 0.1 23.4 0.1c6.1 0 7.5 0.1 7.5 0.3c0 0.1-1.4 0.2-7.5 0.2c-3.4 0.1-19.1 0.1-23.4 0.1c-4.2 0-19.9 0-23.3-0.1c-6.1 0-7.5-0.1-7.5-0.2c0-0.2 1.4-0.3 7.5-0.3c3.4 0 19.1-0.1 23.3-0.1zm21.6 24.8h3.1v0.2h-3.1v-0.2zm-46.2 0h3.1v0.2h-3.1zm-13-20.4q0-0.2 0.2-0.3h3.1c1.3 0 1.9 0.7 1.9 1.9v3.2c0 1.2-0.6 1.9-1.9 1.9h-1.5v3.2q0 0.2-0.3 0.2h-1.3q-0.2 0-0.2-0.2zm2.9 5c0.4 0 0.5-0.2 0.5-0.5v-2.4q0-0.5-0.5-0.6h-1.1v3.5zm8.3-5q0.1-0.2 0.3-0.2h1.3q0.2 0 0.2 0.2v10q0 0.2-0.2 0.2h-1.3q-0.2 0-0.3-0.2v-4.1h-1.6v4.1q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2v-10q0-0.2 0.2-0.2h1.4q0.2 0 0.2 0.2v4.2h1.6zm4.4 1.6c0-1.2 0.7-1.8 1.9-1.8h1.5c1.2 0 1.9 0.6 1.9 1.8v6.7c0 1.2-0.7 1.9-1.9 1.9h-1.5c-1.2 0-1.9-0.7-1.9-1.9zm3.1 6.8q0.5 0 0.5-0.5v-6q0-0.5-0.5-0.5h-0.8q-0.5 0-0.5 0.5v6q0 0.5 0.5 0.5zm9.2-8.7q0.3 0 0.3 0.2v1.3q0 0.2-0.3 0.2h-1.5v8.5q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2v-8.5h-1.5q-0.2 0-0.2-0.2v-1.3q0-0.2 0.2-0.2zm2.3 1.9c0-1.2 0.7-1.9 1.9-1.9h1.5c1.2 0 1.9 0.7 1.9 1.9v6.6c0 1.3-0.7 1.9-1.9 1.9h-1.5c-1.2 0-1.9-0.6-1.9-1.9zm3 6.9q0.6 0 0.6-0.5v-6q0-0.5-0.6-0.6h-0.7q-0.5 0.1-0.5 0.6v6q0 0.5 0.5 0.5zm4.8-6.9c0-1.2 0.7-1.8 1.9-1.8h1.7c1.3 0 1.9 0.6 1.9 1.8v1.4q0 0.2-0.2 0.2h-1.3q-0.2 0-0.2-0.2v-1q0-0.5-0.5-0.5h-1q-0.5 0-0.5 0.5v5.9q0 0.6 0.5 0.6h1q0.5 0 0.5-0.6v-1.7h-0.7q-0.2 0-0.2-0.2v-1.3q0-0.2 0.2-0.2h2.2q0.2 0 0.2 0.2v3.6c0 1.2-0.6 1.9-1.9 1.9h-1.7c-1.2 0-1.9-0.7-1.9-1.9zm13.5 3.2q0 1.3-0.9 1.7l0.9 3.4q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2l-0.9-3.3h-0.9v3.3q0 0.2-0.2 0.2h-1.3q-0.3 0-0.3-0.2v-10q0-0.2 0.3-0.2h3.2c1.3 0 1.9 0.7 1.9 1.9zm-2.3 0.2q0.5-0.1 0.6-0.6v-2.4q-0.1-0.5-0.6-0.5h-1.3v3.5zm9.5 5.2q-0.2-0.1-0.2-0.2l-0.4-1.9h-2.3l-0.4 1.9q0 0.1-0.2 0.2h-1.4q-0.2-0.1-0.2-0.3l2.2-10q0.1-0.2 0.2-0.1h1.9q0.1-0.1 0.2 0.1l2.2 10q0 0.2-0.2 0.3zm-1.8-8.2l-0.8 4.6h1.7zm5.8-2.1q0-0.2 0.2-0.2h3.1c1.3 0 1.9 0.6 1.9 1.9v3.1c0 1.2-0.6 1.9-1.9 1.9h-1.5v3.3q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2zm2.9 5c0.4 0 0.6-0.2 0.6-0.5v-2.5q0-0.5-0.6-0.5h-1.1v3.5zm8.4-5q0-0.2 0.2-0.2h1.3q0.3 0 0.3 0.2v10q0 0.2-0.3 0.2h-1.3q-0.2 0-0.2-0.2v-4.2h-1.7v4.2q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2v-10q0-0.2 0.2-0.2h1.4q0.2 0 0.2 0.2v4.1h1.7zm-53.2 19.4q-0.2 0-0.3-0.1c0.2-0.1 0.3-0.3 0.3-0.5c0-0.2-0.1-0.4-0.4-0.4c-0.4 0-0.6 0.2-0.6 0.6c0 0.8 1.3 0.9 1.3 2.1c0 1-0.8 1.5-1.6 1.5c-0.6 0-1.2-0.3-1.2-1c0-0.6 0.4-1 0.8-1c0.2 0 0.5 0.1 0.5 0.4c-0.3 0-0.6 0.2-0.6 0.6c0 0.2 0.2 0.5 0.5 0.5c0.4 0 0.7-0.3 0.7-0.7c0-1-1.2-1.4-1.2-2.2c0-0.6 0.6-1 1.3-1c0.3 0 1 0 1 0.6c0 0.4-0.2 0.6-0.5 0.6zm2.9 1.1q0 0 0 0c0.3 0 0.7-0.2 0.9-0.4l0.1 0.2c-0.3 0.2-0.6 0.4-1.1 0.5c-0.1 1-0.6 1.7-1.3 1.7c-0.6 0-1-0.3-1-0.9c0-0.7 0.4-2.1 1.6-2.1q0.8 0 0.8 1zm-0.5 0.3c-0.2-0.1-0.2-0.2-0.2-0.3q0-0.2 0.2-0.3c0-0.2-0.1-0.3-0.2-0.3c-0.4 0-0.8 1-0.8 1.6c0 0.4 0.1 0.5 0.3 0.5c0.3 0 0.6-0.6 0.7-1.2zm0.2 3.1l1-4.5h0.8l-0.1 0.4c0.2-0.1 0.4-0.2 0.7-0.2c0.4 0 0.7 0.2 0.7 0.9c0 0.7-0.3 2-1.4 2c-0.3 0-0.4-0.1-0.5-0.2l-0.3 1.4m0.6-1.7c-0.1 0-0.2-0.1-0.2-0.1l0.3-1.6c0.1-0.2 0.3-0.3 0.4-0.3c0.1 0 0.3 0 0.3 0.4c0 0.6-0.2 1.6-0.8 1.6zm3.2-1.9c-0.2 0-0.4 0.3-0.4 0.5l-0.4 1.8h-0.9l0.9-3.8l0.8-0.1l-0.3 1.4c0.3-0.3 0.5-0.3 0.7-0.3c0.4 0 0.6 0.2 0.6 0.6c0 0.5-0.3 1.2-0.3 1.5c0 0.1 0.1 0.2 0.3 0.2c0.2 0 0.3-0.2 0.5-0.5h0.2c-0.3 1-0.8 1.1-1.1 1.1c-0.5 0-0.6-0.3-0.6-0.7c0-0.4 0.2-1.1 0.2-1.4q0-0.3-0.2-0.3zm2.7-0.5l-0.4 1.9q-0.1 0.1-0.1 0.2q0 0.2 0.3 0.2c0.2 0 0.4-0.2 0.5-0.5h0.2c-0.3 1-0.9 1.1-1.2 1.1c-0.3 0-0.6-0.2-0.6-0.7q0-0.2 0.1-0.4l0.4-1.8zm-0.3-1.2c0.2 0 0.5 0.2 0.5 0.4c0 0.3-0.3 0.5-0.5 0.5c-0.3 0-0.5-0.2-0.5-0.5c0-0.2 0.2-0.4 0.5-0.4zm3.3 1.2l-0.4 1.9q0 0.1 0 0.2q0 0.2 0.2 0.2q0.1 0 0.2 0c-0.2 0.4-0.3 0.6-0.6 0.6c-0.3 0-0.5-0.2-0.6-0.5c-0.1 0.2-0.4 0.5-0.8 0.5c-0.4 0-0.8-0.3-0.8-0.9c0-0.8 0.5-2 1.5-2c0.3 0 0.4 0.1 0.4 0.3l0.1-0.3zm-2 1.9c0 0.4 0.2 0.4 0.3 0.4c0.2 0 0.4-0.1 0.5-0.5l0.3-1.3c0 0-0.1-0.2-0.3-0.2c-0.5 0-0.8 1-0.8 1.6zm7.1-1.4c0 0.3-0.4 0.7-0.9 0.8c-0.4 1.5-1.2 1.6-1.8 1.6c-0.8 0-1.2-0.6-1.2-1.2c0-0.5 0.4-1.1 1.1-1.2c-0.4-0.2-0.6-0.6-0.6-0.9c0-0.5 0.5-1 1.3-1c0.5 0 1.1 0.2 1.1 0.7c0 0.3-0.1 0.6-0.4 0.6c-0.1 0-0.3-0.1-0.4-0.2c0.2 0 0.3-0.3 0.3-0.5c0-0.1 0-0.4-0.4-0.4c-0.4 0-0.7 0.3-0.7 0.7c0 0.3 0.2 0.7 0.8 1c-0.8 0.3-1 0.7-1 1.1c0 0.4 0.3 0.8 0.6 0.8c0.4 0 0.9-0.3 1.1-1.1q-0.2 0-0.4 0q-0.4 0-0.6 0.2c0.1-0.5 0.5-0.8 1.1-0.8c0.2 0 0.3 0 0.4 0c0.2 0 0.5 0 0.6-0.2zm3.6-0.2h0.9l0.4-1.7h0.8l-0.9 4.2h-0.9l0.5-2.1h-0.8l-0.5 2.1h-0.8l0.8-3.8c-0.5 0.2-0.8 0.6-0.8 1.2c0 0.3 0.1 0.4 0.1 0.4c-0.4 0-0.6-0.1-0.6-0.6c0-0.7 1-1.4 2-1.4q0.1 0 0.2 0zm4.1 0.6q0.1 0 0.1 0c0.3 0 0.6-0.2 0.9-0.4v0.2c-0.2 0.2-0.6 0.4-1 0.5c-0.1 1-0.6 1.7-1.4 1.7c-0.5 0-0.9-0.3-0.9-0.9c0-0.7 0.4-2.1 1.6-2.1q0.7 0 0.7 1zm-0.5 0.3c-0.1-0.1-0.1-0.2-0.1-0.3q0-0.2 0.2-0.3c0-0.2-0.1-0.3-0.3-0.3c-0.4 0-0.7 1-0.7 1.6c0 0.4 0.1 0.5 0.3 0.5c0.3 0 0.5-0.6 0.6-1.2zm2.3-2.4l-0.7 3.1q0 0.1 0 0.2q0 0.2 0.3 0.2c0.2 0 0.4-0.2 0.5-0.5h0.2c-0.3 1-0.9 1.1-1.2 1.1c-0.3 0-0.6-0.2-0.6-0.7q0-0.2 0-0.4l0.6-2.8zm3.1 0l-0.6 3q-0.1 0.2-0.1 0.2q0 0.3 0.3 0.2c0.2 0 0.4-0.2 0.4-0.5h0.3c-0.3 1-0.9 1.1-1.2 1.1c-0.3 0-0.5-0.2-0.5-0.5c-0.2 0.2-0.5 0.5-0.9 0.5c-0.4 0-0.8-0.2-0.8-0.9c0-0.8 0.5-2 1.5-2c0.4 0 0.5 0.1 0.5 0.3l0.3-1.3zm-1.5 3l0.3-1.4c0 0-0.1-0.2-0.3-0.2c-0.4 0-0.8 1.1-0.8 1.6c0 0.4 0.2 0.5 0.3 0.5c0.2 0 0.4-0.2 0.5-0.5zm2.7 0.6c0.4 0 0.7-0.3 1-0.6h0.2c-0.3 0.5-0.8 1-1.6 1c-0.5 0-0.9-0.2-0.9-0.9c0-0.6 0.4-2 1.6-2c0.5 0 0.6 0.3 0.6 0.5c0 0.7-0.6 1.2-1.3 1.3q0 0.1 0 0.2c0 0.4 0.1 0.5 0.4 0.5zm0.3-2.2c-0.3 0-0.6 0.6-0.7 1.2c0.5-0.1 0.9-0.5 0.9-1q0-0.2-0.2-0.2zm2.2 0.2c-0.2 0-0.4 0.3-0.5 0.6l-0.4 1.8h-0.8l0.6-2.9h0.8v0.3c0.2-0.2 0.5-0.3 0.6-0.3c0.4 0 0.7 0.2 0.7 0.7c0 0.4-0.3 1.1-0.3 1.4c0 0.2 0.1 0.3 0.2 0.3q0.2 0 0.2 0c0 0.4-0.3 0.5-0.6 0.5c-0.5 0-0.6-0.3-0.6-0.6c0-0.4 0.3-1.1 0.3-1.5q0-0.2-0.2-0.3z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:;">
                                            <span>
                                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 70 53" width="70" height="53">
                                                    <path id="Logo 03" class="s0"
                                                        d="m45.1 20.6c0.4 0 0.7 0.3 0.7 0.6v0.7c0 0.3-0.3 0.6-0.7 0.6q0 0.2-0.1 0.3c-0.2 2.2-0.4 5-3.4 5c-2.9 0-3.9-0.1-5.5-3q-0.1-0.1-0.3-0.2q-0.1-0.1-0.3-0.1q-0.2 0-0.3 0.1q-0.2 0.1-0.3 0.2c-1.6 2.9-2.6 3-5.5 3c-3 0-3.2-2.8-3.5-5q0-0.1 0-0.3c-0.4 0-0.7-0.3-0.7-0.6v-0.7c0-0.3 0.3-0.6 0.7-0.6h9.6h9.6zm-1.4 2.6c-0.1 1.5-0.4 3.2-2.1 3.2c-0.9 0-2 0.2-2.8-0.3c-1.1-0.7-1.6-1.7-1.9-2.8q0-0.3 0.1-0.5q0.2-0.3 0.6-0.3h5.5q0.3 0 0.5 0.2q0.1 0.3 0.1 0.5zm-16.4 0q-0.1-0.2 0.1-0.5q0.2-0.2 0.5-0.2h5.5q0.3 0 0.5 0.3q0.2 0.2 0.2 0.5c-0.3 1.1-0.9 2.1-1.9 2.8c-0.8 0.5-1.9 0.3-2.8 0.3c-1.7 0-2-1.7-2.1-3.2zm-0.3 7q0.2-0.1 0.4 0c0.8 0.5 1.7 0.4 2.4 0.1c1.3-0.6 1.9-1.4 3.6-1.3c0.8 0.1 1.5 0.4 2.1 1.1c0.6-0.7 1.3-1 2-1.1c1.8-0.1 2.4 0.7 3.7 1.3c0.7 0.3 1.6 0.4 2.4-0.1q0.2-0.1 0.4 0q0.2 0.1 0.1 0.4c-0.5 2.9-4.2 3.7-6.9 3.2c-0.7-0.1-1.3-0.3-1.7-0.7c-0.4 0.4-1 0.6-1.7 0.7c-2.8 0.5-6.4-0.3-7-3.2q0-0.3 0.2-0.4zm12.6-28.1q0.2-0.1 0.3-0.1c6.3 2.2 9.1 11.9 4.9 16.4q-0.1 0.2-0.3 0.1q-0.2-0.1-0.1-0.3c0.1-2.2-0.3-3.8-1.3-5c-2.2 4.6-11 6-14.4 3.2q-0.1-0.2-0.1-0.3q0.1-0.2 0.2-0.2c1.7-0.4 3.2-2 3.1-3.5c-3.3 0.7-5.2 2.2-5.5 6q-0.1 0.2-0.2 0.3q-0.2 0-0.3-0.1c-2.5-2.4-2.2-6.7 0.1-9.3c3.3-3.8 8.2-1.4 12-3.7c1.2-0.6 1.8-1.7 1.6-3.3q-0.1-0.1 0-0.2zm-35.9 44.4c0 0.4-0.4 0.8-0.9 0.8c-0.4 0-0.8-0.4-0.8-0.8c0-0.5 0.4-0.9 0.8-0.9c0.5 0 0.9 0.4 0.9 0.9zm65.3 0c0 0.4-0.4 0.8-0.9 0.8c-0.4 0-0.8-0.4-0.8-0.8c0-0.5 0.4-0.9 0.8-0.9c0.5 0 0.9 0.4 0.9 0.9zm-57.8-5q0.1-0.2 0.3-0.2h1.3q0.2 0 0.2 0.2v10.3q0 0.2-0.2 0.2h-1.3q-0.2 0-0.3-0.2v-4.3h-1.6v4.3q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2v-10.3q0-0.2 0.2-0.2h1.4q0.2 0 0.2 0.2v4.3h1.6zm6.1-0.2q0.2 0 0.2 0.2v10.2q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2v-10.2q0-0.2 0.2-0.2zm2.9 0.2q0-0.2 0.2-0.2h3.1c1.3 0 1.9 0.6 1.9 1.9v3.2c0 1.3-0.6 2-1.9 2h-1.6v3.3q0.1 0.2-0.2 0.2h-1.3q-0.2 0-0.2-0.2zm2.9 5.1c0.4 0 0.5-0.2 0.5-0.5v-2.5q0-0.5-0.5-0.5h-1.2v3.5zm8.2-5.3c1.3 0 1.9 0.7 1.9 1.9v1.4q0 0.2-0.2 0.3h-1.3q-0.2-0.1-0.3-0.3v-1q0.1-0.5-0.5-0.5h-0.6c-0.3 0-0.5 0.2-0.5 0.5v1.8l3.1 1.1q0.3 0.1 0.3 0.5v3.1c0 1.2-0.6 1.9-1.9 1.9h-1.4c-1.2 0-1.9-0.7-1.9-1.9v-1.4q0-0.3 0.2-0.3h1.4q0.2 0 0.2 0.3v1c0 0.3 0.2 0.5 0.5 0.5h0.6q0.5 0 0.5-0.5v-1.8l-3.1-1q-0.3-0.1-0.3-0.5v-3.2c0-1.2 0.7-1.9 1.9-1.9zm9 0q0.2 0 0.2 0.2v1.4q0 0.2-0.2 0.2h-1.5v8.7q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.2v-8.7h-1.5q-0.2 0-0.2-0.2v-1.4q0-0.2 0.2-0.2zm7.7 1.6c0 0.1 0 0.2-0.2 0.2h-3.3v2.6h2.5q0.2 0.1 0.2 0.3v1.3q0 0.2-0.2 0.2h-2.5v2.7h3.3q0.2 0 0.2 0.2v1.4q0 0.2-0.2 0.2h-4.8q-0.2 0-0.2-0.2v-10.3q0-0.2 0.2-0.2h4.8q0.2 0 0.2 0.2zm7.9 3.6q0 1.4-0.9 1.8l0.9 3.5q0 0.2-0.2 0.2h-1.4q-0.2 0-0.2-0.1l-0.9-3.4h-0.9v3.3q0 0.2-0.2 0.2h-1.3q-0.2 0-0.3-0.2v-10.2q0.1-0.2 0.3-0.2h3.2c1.3 0 1.9 0.6 1.9 1.9zm-2.3 0.2q0.5-0.1 0.6-0.6v-2.5q-0.1-0.5-0.6-0.5h-1.3v3.6zm8.4-5.4c1.2 0 1.8 0.7 1.8 1.9v1.5q0.1 0.2-0.2 0.2h-1.3q-0.2 0-0.2-0.2v-1.1q0-0.5-0.6-0.5h-0.6c-0.3 0-0.5 0.2-0.5 0.5v1.9l3.1 1q0.3 0.1 0.3 0.5v3.1c0 1.2-0.6 1.9-1.8 1.9h-1.5c-1.2 0-1.9-0.7-1.9-1.9v-1.4q0-0.2 0.2-0.2h1.4q0.2 0 0.2 0.2v1c0 0.4 0.2 0.5 0.5 0.5h0.6q0.6 0 0.6-0.5v-1.8l-3.1-1q-0.4-0.1-0.4-0.5v-3.2c0-1.2 0.7-1.9 1.9-1.9z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------- Our-Partner Section start ----------->
        <!------------- Who-we Section start ----------->
        <div class="er_sec er_choose_section er_sec_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="er_sec_heading er_ser_head">
                            <h5>Who We Are</h5>
                            <h4>Why Choose Our Eco Recycling Services</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="er_choose_img">
                            <img src="assets/images/who-left.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="er_choose_wrapper">
                            <div class="er_choose_box">
                                <div class="er_choose_icon">
                                    <svg width="28" height="33" viewBox="0 0 28 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.91134 26.8226H22.681V32.0632H5.91134V26.8226ZM21.1088 25.7745H22.681V19.9471C22.1723 19.7632 21.6451 19.6349 21.1088 19.5645V25.7745ZM5.91134 25.7745H7.4835V19.5645C6.94717 19.6349 6.42004 19.7632 5.91134 19.9471V25.7745ZM23.7291 20.3978V32.0632H27.3974C27.5364 32.0632 27.6697 32.0079 27.768 31.9097C27.8663 31.8114 27.9215 31.6781 27.9215 31.5391V27.3467C27.9209 25.9166 27.5301 24.5138 26.7914 23.2894C26.0526 22.0649 24.9939 21.0652 23.7291 20.3978ZM8.5316 25.7745H20.0607V19.4859H17.9645V20.01C17.9721 20.0656 17.9721 20.122 17.9645 20.1777C17.9383 20.2563 17.2885 22.1062 14.2962 22.1062C11.3038 22.1062 10.6802 20.2563 10.654 20.1777C10.6377 20.1232 10.6289 20.0668 10.6278 20.01V19.4859H8.5316V25.7745ZM0.670837 27.3467V31.5391C0.670837 31.6781 0.72605 31.8114 0.824328 31.9097C0.922607 32.0079 1.0559 32.0632 1.19489 32.0632H4.86324V20.3978C3.59845 21.0652 2.53967 22.0649 1.80092 23.2894C1.06218 24.5138 0.671457 25.9166 0.670837 27.3467ZM24.7772 9.47133V9.00493C24.7772 8.86594 24.722 8.73265 24.6237 8.63437C24.5254 8.53609 24.3921 8.48088 24.2531 8.48088H4.33919C4.20021 8.48088 4.06691 8.53609 3.96863 8.63437C3.87035 8.73265 3.81514 8.86594 3.81514 9.00493V9.47133C3.81652 9.90316 3.98868 10.3169 4.29402 10.6222C4.59937 10.9276 5.01311 11.0997 5.44494 11.1011H23.1474C23.5792 11.0997 23.9929 10.9276 24.2983 10.6222C24.6036 10.3169 24.7758 9.90316 24.7772 9.47133ZM15.3443 0.620117H13.2481C11.9007 0.619708 10.5958 1.09126 9.55995 1.95286C8.52411 2.81447 7.8228 4.01169 7.57783 5.33657H21.0145C20.7695 4.01169 20.0682 2.81447 19.0324 1.95286C17.9965 1.09126 16.6916 0.619708 15.3443 0.620117ZM21.1088 6.38468H7.4835V7.43278H21.1088V6.38468ZM6.95944 12.1492C6.78044 12.1504 6.60277 12.1184 6.43539 12.0549V12.1492C6.43539 12.5662 6.60103 12.9661 6.89587 13.2609C7.1907 13.5557 7.59059 13.7214 8.00755 13.7214H8.5578C8.5578 13.5484 8.5316 13.3755 8.5316 13.1973V12.1492H6.95944ZM22.1569 12.1492V12.0549C21.9895 12.1184 21.8119 12.1504 21.6329 12.1492H20.0607V13.7214H20.5848C21.0017 13.7214 21.4016 13.5557 21.6964 13.2609C21.9913 12.9661 22.1569 12.5662 22.1569 12.1492ZM19.0126 13.1973V12.1492H9.5797V13.1973C9.5797 14.4482 10.0766 15.6479 10.9611 16.5324C11.8456 17.4169 13.0453 17.9138 14.2962 17.9138C15.547 17.9138 16.7467 17.4169 17.6312 16.5324C18.5157 15.6479 19.0126 14.4482 19.0126 13.1973ZM11.6759 18.333V19.9052C11.8017 20.1515 12.3834 21.0581 14.2962 21.0581C16.2089 21.0581 16.7854 20.1567 16.9164 19.8999V18.3278C16.105 18.7418 15.2071 18.9577 14.2962 18.9577C13.3852 18.9577 12.4873 18.7418 11.6759 18.3278V18.333Z"
                                            fill="#69AF07" />
                                    </svg>
                                </div>
                                <div class="er_choose_text">
                                    <h4>Experience Skills</h4>
                                    <p>Amet minim mollit deserunt aliqua dolor do amet sint duis.</p>
                                </div>
                            </div>
                            <div class="er_choose_box">
                                <div class="er_choose_icon">
                                    <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M31.0304 27.1502H31.0193C30.0085 27.1502 29.5523 27.3783 28.9748 27.6671C28.3079 28.0005 27.552 28.3784 26.1063 28.3784C24.657 28.3784 23.8998 28.0003 23.2317 27.6667C22.6539 27.3781 22.1975 27.1502 21.1872 27.1502C20.1759 27.1502 19.7199 27.3784 19.1427 27.6674C18.4771 28.0007 17.7224 28.3784 16.2804 28.3784C14.8383 28.3784 14.0837 28.0007 13.4181 27.6674C12.8408 27.3784 12.3848 27.1502 11.3735 27.1502C10.3632 27.1502 9.90681 27.3781 9.32898 27.6667C8.66094 28.0003 7.90373 28.3784 6.4544 28.3784C5.0087 28.3784 4.25283 28.0005 3.58596 27.6671C3.00838 27.3783 2.55221 27.1502 1.54142 27.1502H1.53031C1.02636 27.151 0.620239 27.5643 0.620239 28.0683V31.142C0.620239 31.6507 1.03268 32.0632 1.54142 32.0632H31.0193C31.528 32.0632 31.9405 31.6507 31.9405 31.142V28.0683C31.9405 27.5643 31.5344 27.151 31.0304 27.1502ZM7.37558 22.8362V26.4527C7.81898 26.361 8.13814 26.2021 8.50582 26.0185C8.72622 25.9084 8.95652 25.7936 9.21795 25.689V22.8362C10.1274 22.7801 11.8017 22.5134 12.9513 21.3637C14.2355 20.0795 14.4171 18.1282 14.4355 17.3489C14.4383 17.2242 14.4158 17.1003 14.3695 16.9845C14.3231 16.8688 14.2539 16.7635 14.1659 16.6752C14.0776 16.5872 13.9723 16.518 13.8566 16.4716C13.7408 16.4253 13.6168 16.4028 13.4922 16.4056C12.7128 16.424 10.7615 16.6056 9.47729 17.8898C9.38634 17.9811 9.29978 18.0767 9.21789 18.1763V15.8952C9.82501 15.1906 10.7532 13.8566 10.7532 12.2866C10.7532 10.4706 9.5018 8.96239 8.96377 8.3982C8.87754 8.30812 8.77401 8.23637 8.65939 8.18727C8.54476 8.13817 8.4214 8.11272 8.29671 8.11245C8.17199 8.11271 8.04862 8.13817 7.93398 8.18728C7.81934 8.23639 7.71581 8.30815 7.62959 8.39826C7.09168 8.96239 5.84028 10.4706 5.84028 12.2866C5.84028 13.8566 6.76846 15.1906 7.37558 15.8952V18.1763C7.2937 18.0767 7.20713 17.9811 7.11618 17.8898C5.83199 16.6056 3.88068 16.424 3.10129 16.4056C2.85036 16.3997 2.60484 16.4979 2.42754 16.6752C2.25024 16.8524 2.15204 17.098 2.15794 17.3489C2.17636 18.1283 2.35796 20.0795 3.64215 21.3637C4.79179 22.5134 6.46613 22.7801 7.37558 22.8362ZM18.3179 26.02C18.985 25.686 19.7406 25.3078 21.1872 25.3078C22.632 25.3078 23.388 25.6853 24.0549 26.0184C24.2959 26.1387 24.5162 26.2482 24.7639 26.3354C25.5766 25.5184 26.2026 24.5349 26.6038 23.4326L27.7347 20.3254C27.9087 19.8473 27.6622 19.3188 27.1842 19.1447L24.0102 17.9895L22.855 21.1635C22.681 21.6416 22.1523 21.8881 21.6743 21.714C21.1962 21.54 20.9497 21.0114 21.1237 20.5333L22.2789 17.3593L24.0102 17.9894L27.7384 7.74618L30.2361 6.98879C30.373 6.94729 30.4983 6.8745 30.6021 6.77617C30.7059 6.67785 30.7855 6.5567 30.8344 6.42232L31.8846 3.53687C32.0586 3.05877 31.8121 2.5302 31.334 2.35615L26.7174 0.675915C26.2393 0.501935 25.7108 0.748382 25.5367 1.22648L24.4865 4.11193C24.4376 4.24631 24.4206 4.39023 24.437 4.5323C24.4534 4.67437 24.5026 4.81068 24.5807 4.93043L26.0072 7.11616L22.279 17.3594L19.105 16.2042C18.6269 16.0302 18.0983 16.2767 17.9243 16.7547L16.7934 19.8619C15.9975 22.0485 16.1904 24.4289 17.2848 26.4326C17.6791 26.339 17.9778 26.1903 18.3179 26.02ZM26.9529 2.72223L29.8384 3.77244L29.2608 5.35946L27.4242 5.91641L26.3754 4.30925L26.9529 2.72223Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="er_choose_text">
                                    <h4>Guarantee Services</h4>
                                    <p>Amet minim mollit deserunt aliqua dolor do amet sint duis.</p>
                                </div>
                            </div>
                            <div class="er_choose_box">
                                <div class="er_choose_icon">
                                    <svg width="35" height="33" viewBox="0 0 35 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.4146 14.7157C20.6622 14.7449 21.1453 14.734 21.3994 14.735L21.3952 19.1597C21.7957 19.2683 22.1495 19.5053 22.4022 19.8345C22.6549 20.1636 22.7925 20.5666 22.794 20.9816V21.1049H19.0199V20.9816C19.0213 20.5666 19.159 20.1636 19.4117 19.8344C19.6644 19.5053 20.0182 19.2682 20.4187 19.1596L20.4146 14.716V14.7157ZM3.39315 1.86543C3.84642 1.86543 4.28951 1.99984 4.66639 2.25166C5.04327 2.50348 5.33701 2.86141 5.51047 3.28017C5.68392 3.69894 5.72931 4.15974 5.64088 4.60429C5.55245 5.04885 5.33418 5.45721 5.01367 5.77771C4.69317 6.09822 4.28481 6.31649 3.84026 6.40492C3.3957 6.49335 2.9349 6.44796 2.51613 6.27451C2.09737 6.10105 1.73944 5.80731 1.48762 5.43043C1.2358 5.05355 1.10139 4.61046 1.10139 4.15719C1.10139 3.54938 1.34284 2.96646 1.77263 2.53667C2.20242 2.10688 2.78534 1.86543 3.39315 1.86543ZM29.6292 8.57745L25.4263 11.0395L20.7185 11.0216C20.5388 11.017 20.36 11.048 20.1924 11.1127C20.0247 11.1775 19.8715 11.2748 19.7416 11.399C19.6117 11.5232 19.5077 11.6719 19.4354 11.8365C19.3632 12.001 19.3242 12.1783 19.3207 12.358C19.3173 12.5377 19.3493 12.7163 19.4152 12.8835C19.481 13.0508 19.5792 13.2033 19.7042 13.3325C19.8292 13.4616 19.9785 13.5648 20.1435 13.636C20.3086 13.7072 20.486 13.7451 20.6658 13.7474L26.1605 13.7711L27.48 13.021V17.9235L22.9612 23.151C22.8772 23.2459 22.8216 23.3626 22.8009 23.4877L21.5909 30.2894C21.5581 30.4873 21.5647 30.6899 21.6103 30.8853C21.6559 31.0807 21.7397 31.2652 21.8568 31.4282C21.9739 31.5912 22.122 31.7295 22.2926 31.8351C22.4633 31.9407 22.6531 32.0115 22.8512 32.0436C23.0493 32.0756 23.2518 32.0683 23.4471 32.0219C23.6423 31.9755 23.8265 31.891 23.989 31.7733C24.1515 31.6556 24.2892 31.5069 24.3941 31.3358C24.4991 31.1648 24.5692 30.9747 24.6005 30.7764L25.6581 24.8486C25.6796 24.7192 25.7382 24.5989 25.827 24.5023L29.662 20.2299H30.1989C32.6794 20.2299 34.0187 19.3176 34.0187 16.6964V11.9423C34.0187 9.90858 33.2108 8.24479 31.1772 8.24479C30.627 8.24479 30.0772 8.3145 29.6288 8.57717L29.6292 8.57745ZM4.64346 8.57745L8.84628 11.0395L13.554 11.0216C13.7337 11.017 13.9125 11.048 14.0802 11.1127C14.2478 11.1775 14.401 11.2748 14.5309 11.399C14.6608 11.5232 14.7649 11.6719 14.8371 11.8365C14.9094 12.001 14.9483 12.1783 14.9518 12.358C14.9553 12.5377 14.9232 12.7163 14.8574 12.8835C14.7916 13.0508 14.6933 13.2033 14.5683 13.3325C14.4433 13.4616 14.294 13.5648 14.129 13.636C13.964 13.7072 13.7865 13.7451 13.6068 13.7474L8.11202 13.7711L6.79214 13.0206V17.9232L11.3106 23.151C11.3947 23.2459 11.4503 23.3626 11.471 23.4877L12.6809 30.2894C12.7138 30.4873 12.7072 30.6899 12.6616 30.8853C12.6159 31.0807 12.5322 31.2652 12.4151 31.4282C12.298 31.5912 12.1499 31.7295 11.9792 31.8351C11.8086 31.9407 11.6187 32.0115 11.4206 32.0436C11.2225 32.0756 11.02 32.0683 10.8248 32.0219C10.6295 31.9755 10.4454 31.891 10.2828 31.7733C10.1203 31.6556 9.98263 31.5069 9.8777 31.3358C9.77276 31.1648 9.70264 30.9747 9.67136 30.7764L8.61372 24.8486C8.59229 24.7192 8.53362 24.5989 8.44489 24.5023L4.6097 20.2299H4.0729C1.59233 20.2299 0.253174 19.3176 0.253174 16.6964V11.9423C0.253174 9.90858 1.06108 8.24479 3.09468 8.24479C3.64485 8.24479 4.19466 8.3145 4.64311 8.57717L4.64346 8.57745ZM30.8787 1.86543C30.4254 1.86543 29.9823 1.99984 29.6055 2.25166C29.2286 2.50348 28.9348 2.86141 28.7614 3.28017C28.5879 3.69894 28.5425 4.15974 28.631 4.60429C28.7194 5.04885 28.9377 5.45721 29.2582 5.77771C29.5787 6.09822 29.987 6.31649 30.4316 6.40492C30.8761 6.49335 31.3369 6.44796 31.7557 6.27451C32.1745 6.10105 32.5324 5.80731 32.7842 5.43043C33.036 5.05355 33.1705 4.61046 33.1705 4.15719C33.1705 3.54938 32.929 2.96646 32.4992 2.53667C32.0694 2.10688 31.4865 1.86543 30.8787 1.86543ZM13.8573 14.7157C13.6096 14.7449 13.1266 14.734 12.8725 14.735L12.8767 19.1597C12.4762 19.2683 12.1224 19.5053 11.8697 19.8345C11.617 20.1636 11.4794 20.5666 11.478 20.9816V21.1049H15.2519V20.9816C15.2505 20.5666 15.1129 20.1636 14.8602 19.8344C14.6075 19.5053 14.2537 19.2682 13.8531 19.1596L13.8573 14.716V14.7157ZM21.8656 23.1622H19.3716C19.2784 23.1621 19.189 23.1249 19.1231 23.059C19.0572 22.9931 19.0201 22.9037 19.0199 22.8105V22.0899H22.5767C22.279 22.4346 21.9892 22.7072 21.8656 23.1623V23.1622ZM32.4605 32.0224C32.0581 32.0574 31.6581 31.9317 31.348 31.6728C31.0379 31.4138 30.8429 31.0427 30.8056 30.6404L29.9715 21.3597L30.1015 21.2147C31.2453 21.2147 32.1739 21.0653 32.9704 20.6631L33.8427 30.3674C33.8777 30.7699 33.752 31.1698 33.493 31.4799C33.2341 31.79 32.8629 31.9851 32.4607 32.0224H32.4605ZM1.81131 32.0224C2.21378 32.0574 2.61375 31.9317 2.92384 31.6728C3.23393 31.4138 3.42893 31.0427 3.46624 30.6404L4.30039 21.3597L4.17032 21.2147C3.02659 21.2147 2.0979 21.0653 1.30145 20.6631L0.429036 30.3674C0.394022 30.7699 0.519755 31.1699 0.778761 31.48C1.03777 31.7901 1.40899 31.9851 1.81131 32.0224ZM12.4063 23.1622H14.9002C14.9935 23.1621 15.0828 23.1249 15.1487 23.059C15.2146 22.9931 15.2518 22.9037 15.2519 22.8105V22.0899H11.6952C11.9929 22.4346 12.2826 22.7072 12.4063 23.1623V23.1622ZM12.8725 8.05014V10.0389L13.5433 10.0364C13.6482 10.0347 13.7531 10.0401 13.8573 10.0524V8.05021H14.5899C15.2143 8.05021 15.7237 7.52031 15.7237 6.87067V5.01561C15.7237 3.21591 14.9358 1.71081 13.6204 1.19779C13.4564 1.13103 13.2729 1.13103 13.109 1.19779C11.7939 1.71081 11.0057 3.21591 11.0057 5.01561V6.87039C11.0057 7.52003 11.515 8.04993 12.1395 8.04993L12.8725 8.05014ZM20.4146 10.0524V7.44891H19.9212C19.4268 7.44779 18.9529 7.2509 18.6033 6.90131C18.2538 6.55172 18.0569 6.0779 18.0557 5.5835V1.11253C18.0557 0.981934 18.1076 0.856687 18.2 0.764342C18.2923 0.671996 18.4176 0.620117 18.5482 0.620117C18.6788 0.620117 18.804 0.671996 18.8964 0.764342C18.9887 0.856687 19.0406 0.981934 19.0406 1.11253V5.58358C19.0416 5.8168 19.1347 6.04019 19.2996 6.20511C19.4645 6.37003 19.6879 6.46313 19.9212 6.46415H20.4146V1.11253C20.4146 0.981934 20.4664 0.856687 20.5588 0.764342C20.6511 0.671996 20.7764 0.620117 20.907 0.620117C21.0376 0.620117 21.1628 0.671996 21.2552 0.764342C21.3475 0.856687 21.3994 0.981934 21.3994 1.11253V6.46415C21.8421 6.46415 22.1965 6.52296 22.5143 6.20514C22.5963 6.12369 22.6613 6.02686 22.7058 5.92019C22.7503 5.81353 22.7732 5.69913 22.7734 5.58358V1.11253C22.7734 0.981934 22.8252 0.856687 22.9176 0.764342C23.0099 0.671996 23.1352 0.620117 23.2658 0.620117C23.3964 0.620117 23.5216 0.671996 23.614 0.764342C23.7063 0.856687 23.7582 0.981934 23.7582 1.11253V5.58358C23.7571 6.07797 23.5602 6.55179 23.2106 6.90138C22.861 7.25097 22.3872 7.44786 21.8928 7.44898H21.3994V10.039L20.7286 10.0365C20.6237 10.0348 20.5188 10.0401 20.4146 10.0524Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="er_choose_text">
                                    <h4>Quality Work</h4>
                                    <p>Amet minim mollit deserunt aliqua dolor do amet sint duis.</p>
                                </div>
                            </div>
                            <div class="er_choose_box">
                                <div class="er_choose_icon">
                                    <svg width="30" height="33" viewBox="0 0 30 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.0367 3.38796C10.0367 4.91651 8.79739 6.1558 7.26884 6.1558C5.74029 6.1558 4.501 4.91651 4.501 3.38796C4.501 1.85941 5.74029 0.620117 7.26884 0.620117C8.79739 0.620117 10.0367 1.85941 10.0367 3.38796ZM18.6306 21.6031L23.7362 21.4017L24.6 23.0374C24.7389 23.3009 25.127 23.2647 25.2151 22.9799L26.1266 20.0287C26.2145 19.7442 25.9143 19.4954 25.6512 19.6343L24.2723 20.3624L20.6691 19.5645L20.9901 19.2438C21.2072 19.0264 21.2072 18.6743 20.9901 18.4572L17.8423 15.3093C17.7379 15.2051 17.5965 15.1465 17.449 15.1465C17.3015 15.1465 17.16 15.2051 17.0557 15.3093L16.9436 15.4217C16.8448 15.215 16.7125 15.026 16.5521 14.8624C16.5464 14.8564 16.5407 14.8502 16.5346 14.8442C16.1237 14.4333 15.5827 14.2306 15.043 14.2354C14.9839 14.1871 14.9205 14.1445 14.8535 14.108L10.4435 11.7208L7.65125 8.39519L10.3606 10.4177V8.96135C10.3606 7.92865 9.52334 7.09166 8.49057 7.09166H5.15645C4.12368 7.09166 3.2867 7.92865 3.2867 8.96135V18.5546H3.29487C3.28842 18.6374 3.30733 18.2389 3.0857 23.5177L1.05658 30.0686C0.805221 30.8805 1.25936 31.7423 2.07111 31.9938C2.8882 32.2466 3.74631 31.7858 3.99625 30.9791L6.08426 24.2369C6.12361 24.1101 6.14636 23.9787 6.15194 23.8461C6.37167 18.492 6.37622 18.7372 6.36185 18.5543H7.07502L9.00134 23.4829L9.98823 30.7314C10.1022 31.5699 10.8744 32.1636 11.7203 32.0485C12.5623 31.9338 13.1519 31.1585 13.0375 30.3165L12.0259 22.886C12.0094 22.7653 11.9788 22.6469 11.9345 22.5334L10.3605 18.5069V15.7002L8.55297 14.7216C8.37137 14.6027 8.0629 14.5316 7.88394 14.1761L5.76572 9.97827L8.70889 13.4836C8.80849 13.6021 8.92952 13.7008 9.06564 13.7745L13.0188 15.9144C12.8849 16.5976 13.0996 17.3009 13.5888 17.7901C13.7567 17.9583 13.9524 18.0963 14.1671 18.1981L13.2719 19.0934C13.2202 19.145 13.1792 19.2063 13.1513 19.2738C13.1233 19.3412 13.1089 19.4136 13.1089 19.4866C13.1089 19.5596 13.1233 19.6319 13.1513 19.6994C13.1792 19.7668 13.2202 19.8281 13.2719 19.8797L16.4197 23.0276C16.4713 23.0793 16.5326 23.1203 16.6001 23.1482C16.6676 23.1762 16.7399 23.1906 16.8129 23.1906C16.886 23.1906 16.9583 23.1762 17.0257 23.1482C17.0932 23.1203 17.1545 23.0793 17.2061 23.0276L18.6306 21.6031ZM14.893 17.4828C14.7259 17.4185 14.4879 17.3846 14.241 17.1378C14.0336 16.9302 13.9158 16.6578 13.9035 16.3665C14.4582 16.5388 15.0674 16.2984 15.3501 15.7764C15.4391 15.6114 15.4892 15.4283 15.4964 15.241C15.641 15.2991 15.7723 15.3861 15.8824 15.4965C16.0676 15.6814 16.1755 15.9144 16.2093 16.1557L14.893 17.4828ZM29.1543 31.4072C29.1332 31.0803 28.847 30.8332 28.5196 30.8332C28.2085 30.8332 27.9102 30.7096 27.6903 30.4897L25.537 28.3364C25.5039 28.3032 25.4646 28.2769 25.4214 28.259C25.3781 28.2411 25.3317 28.2318 25.2849 28.2318C25.2381 28.2318 25.1917 28.2411 25.1484 28.259C25.1052 28.2769 25.0659 28.3032 25.0328 28.3364L22.8795 30.4897C22.6595 30.7096 22.3613 30.8332 22.0502 30.8333H17.4918C17.1644 30.8333 16.8784 31.0803 16.857 31.4073C16.834 31.7654 17.1176 32.0632 17.4709 32.0632H28.5407C28.8938 32.0632 29.1776 31.7654 29.1543 31.4073V31.4072Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="er_choose_text">
                                    <h4>Expert Gardener</h4>
                                    <p>Amet minim mollit deserunt aliqua dolor do amet sint duis.</p>
                                </div>
                            </div>
                            <div class="er_choose_box">
                                <div class="er_choose_icon">
                                    <svg width="25" height="33" viewBox="0 0 25 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24.1498 26.327C23.4462 24.2329 20.6418 22.9221 18.6424 22.0434C17.8591 21.7004 15.6906 21.1183 15.4299 20.1321C15.3367 19.7767 15.3492 19.4417 15.4257 19.1206C15.3041 19.1445 15.1804 19.1568 15.0565 19.1573H13.7537C13.2538 19.1568 12.7746 18.9579 12.4211 18.6044C12.0677 18.2509 11.869 17.7717 11.8685 17.2718C11.8685 16.2331 12.714 15.3887 13.7537 15.3887H15.0565C15.4869 15.3887 15.8949 15.5344 16.224 15.7943C16.6923 15.7326 17.1546 15.6314 17.6058 15.4918C18.1756 14.298 18.62 12.8705 18.7196 11.6417C19.1448 6.38446 15.9218 3.30863 11.3008 3.84037C7.94091 4.22712 5.93379 6.73243 5.71683 9.95779C5.49743 13.2453 6.71637 15.6734 8.01113 17.4545C8.57815 18.2332 9.17382 18.7339 9.08229 19.6723C8.97608 20.7819 7.78963 21.0911 6.94102 21.4321C5.93554 21.8359 4.8525 22.4487 4.34103 22.732C2.57917 23.705 0.645421 24.8768 0.210808 26.4797C-0.751698 30.0321 2.49881 31.1081 5.1823 31.6049C7.48533 32.0298 10.0822 32.0633 12.2182 32.0633C16.0819 32.0633 23.0294 31.9085 24.1498 29.0042C24.4684 28.1801 24.3318 26.8668 24.1498 26.327Z"
                                            fill="white" />
                                        <path
                                            d="M15.881 16.741C15.7918 16.6036 15.6697 16.4907 15.5259 16.4124C15.382 16.3342 15.2209 16.293 15.0572 16.2927H13.7544C13.6233 16.2892 13.4928 16.312 13.3707 16.3598C13.2486 16.4075 13.1373 16.4792 13.0433 16.5707C12.9494 16.6622 12.8747 16.7716 12.8237 16.8924C12.7727 17.0132 12.7465 17.143 12.7465 17.2741C12.7465 17.4052 12.7727 17.535 12.8237 17.6558C12.8747 17.7766 12.9494 17.886 13.0433 17.9775C13.1373 18.069 13.2486 18.1407 13.3707 18.1884C13.4928 18.2362 13.6233 18.259 13.7544 18.2555H15.0572C15.2364 18.2553 15.4121 18.2057 15.5649 18.1121C15.7177 18.0184 15.8417 17.8844 15.9232 17.7248C17.7396 17.5819 19.3194 17.0271 20.4283 16.2078C20.683 16.372 20.9842 16.4681 21.3091 16.4681H21.3908C21.6061 16.4682 21.8192 16.4258 22.0181 16.3434C22.2169 16.261 22.3976 16.1402 22.5497 15.9879C22.7018 15.8356 22.8224 15.6548 22.9046 15.4559C22.9868 15.257 23.0289 15.0438 23.0287 14.8285V11.5557C23.0287 11.2465 22.9411 10.9437 22.7758 10.6825C22.6105 10.4213 22.3745 10.2123 22.0952 10.0799C21.8548 4.8244 17.5041 0.620117 12.1896 0.620117C6.87499 0.620117 2.52362 4.8244 2.28431 10.0799C2.00475 10.2121 1.76851 10.421 1.60311 10.6823C1.43771 10.9435 1.34996 11.2464 1.3501 11.5557V14.8285C1.34982 15.0437 1.39194 15.2567 1.47404 15.4556C1.55614 15.6544 1.67662 15.8351 1.82859 15.9874C1.98056 16.1397 2.16105 16.2605 2.35973 16.343C2.55842 16.4254 2.77141 16.468 2.98653 16.4681H3.06933C3.28454 16.4681 3.49762 16.4256 3.6964 16.3432C3.89519 16.2607 4.07578 16.1399 4.22785 15.9877C4.37992 15.8354 4.5005 15.6546 4.58268 15.4558C4.66486 15.2569 4.70705 15.0437 4.70682 14.8285V11.5557C4.70666 11.2509 4.62124 10.9522 4.46023 10.6934C4.29922 10.4346 4.06903 10.2259 3.79567 10.0911C4.02939 5.66288 7.70404 2.13323 12.1896 2.13323C16.6733 2.13323 20.3497 5.66288 20.5824 10.0911C20.3093 10.2262 20.0794 10.4349 19.9186 10.6937C19.7578 10.9524 19.6725 11.251 19.6723 11.5557V14.8285C19.6723 15.0458 19.7146 15.2481 19.789 15.4371C18.8345 16.1201 17.4451 16.6068 15.881 16.741Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="er_choose_text">
                                    <h4>Customer Support</h4>
                                    <p>Amet minim mollit deserunt aliqua dolor do amet sint duis.</p>
                                </div>
                            </div>
                            <div class="er_choose_box">
                                <div class="er_choose_icon">
                                    <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.4686 7.38286V2.82218C18.4686 1.61103 17.4776 0.620117 16.2665 0.620117H14.3416L12.938 3.05119H6.15081L4.7472 0.620117H2.8223C1.61122 0.620117 0.620239 1.61103 0.620239 2.82218V29.8611C0.620239 31.0722 1.61115 32.0632 2.8223 32.0632H16.2664C17.4776 32.0632 18.4685 31.0722 18.4685 29.8611V25.3005C13.5207 25.3005 9.50971 21.2895 9.50971 16.3416C9.50971 11.3938 13.5207 7.38286 18.4685 7.38286H18.4686ZM10.1954 28.3161C10.6476 28.3161 11.0142 28.6826 11.0142 29.1349C11.0142 29.5871 10.6476 29.9537 10.1954 29.9537H8.89343C8.44117 29.9537 8.0746 29.5871 8.0746 29.1349C8.0746 28.6826 8.44117 28.3161 8.89343 28.3161H10.1954ZM27.6164 11.702C27.1648 11.702 26.7985 11.3351 26.7985 10.8831C26.7985 9.30508 25.5132 8.02102 23.9343 8.02102C23.4827 8.02102 23.1165 7.65432 23.1165 7.20219C23.1165 6.75007 23.4828 6.38336 23.9343 6.38336C26.4164 6.38336 28.4343 8.40168 28.4343 10.8831C28.4343 11.3351 28.068 11.702 27.6164 11.702ZM30.9353 11.702C31.3869 11.702 31.7532 11.3351 31.7532 10.8831C31.7532 6.5715 28.2448 3.06429 23.9343 3.06429C23.4827 3.06429 23.1164 3.43034 23.1164 3.88312C23.1164 4.3359 23.4827 4.70195 23.9343 4.70195C27.3448 4.70195 30.1174 7.47483 30.1174 10.8831C30.1174 11.3351 30.4837 11.702 30.9353 11.702ZM18.4686 9.02045C14.4362 9.02045 11.1474 12.3093 11.1474 16.3416C11.1474 20.374 14.4362 23.6628 18.4686 23.6628C22.5009 23.6628 25.7897 20.374 25.7897 16.3416C25.7897 12.3093 22.5009 9.02045 18.4686 9.02045ZM21.7644 18.9084C21.4625 19.9324 20.4031 20.4767 19.2886 20.6311V21.5556C19.2886 22.0082 18.9223 22.3744 18.4676 22.3744C18.016 22.3744 17.6497 22.0082 17.6497 21.5556V20.5872C16.3168 20.3305 15.3484 19.5473 15.0949 18.4663C14.9907 18.0261 15.2623 17.5851 15.7012 17.4816C15.8059 17.4569 15.9145 17.4531 16.0207 17.4703C16.1269 17.4875 16.2286 17.5255 16.3201 17.5821C16.4116 17.6387 16.4911 17.7128 16.554 17.8001C16.6168 17.8874 16.6619 17.9862 16.6865 18.0909C16.8318 18.7113 17.7381 19.0172 18.5181 19.0388C19.4086 19.0631 20.1033 18.7519 20.1949 18.4447C20.2581 18.2285 20.2202 18.1171 20.1791 18.0444C20.1096 17.9199 19.8475 17.6009 18.897 17.333C18.7107 17.2806 18.5023 17.2321 18.2844 17.181C17.5676 17.0127 16.7529 16.8213 16.1465 16.3576C15.5749 15.9193 15.2371 15.3233 15.1897 14.6792C15.1423 14.0504 15.376 13.4373 15.8465 12.9531C16.3057 12.4792 16.9584 12.2003 17.6497 12.0799V11.1275C17.6497 10.6755 18.016 10.3086 18.4676 10.3086C18.9223 10.3086 19.2886 10.6755 19.2886 11.1275V12.074C19.448 12.1002 19.6025 12.134 19.7497 12.175C20.8644 12.4861 21.6223 13.185 21.8307 14.0931C21.9318 14.5339 21.6571 14.9734 21.215 15.0743C20.776 15.1758 20.3371 14.9006 20.236 14.4598C20.135 14.0268 19.5539 13.8211 19.3108 13.7524C18.4739 13.5198 17.4255 13.6758 17.0213 14.0931C16.8824 14.2371 16.8129 14.4028 16.8224 14.5601C16.8382 14.7801 17.0055 14.9524 17.1445 15.0585C17.4697 15.3074 18.1013 15.4555 18.6602 15.5865C18.8845 15.6395 19.1181 15.6946 19.3392 15.7562C20.476 16.0765 21.2403 16.5796 21.6129 17.2524C21.8844 17.7463 21.9381 18.3187 21.7644 18.9082L21.7644 18.9084ZM12.4506 0.620117L11.7987 1.74925H7.29016L6.63824 0.620117H12.4506Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="er_choose_text">
                                    <h4>Online Pay</h4>
                                    <p>Amet minim mollit deserunt aliqua dolor do amet sint duis.</p>
                                </div>
                            </div>
                            <div class="er_choose_box">
                                <div class="er_choose_icon">
                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.06245 25.3628C7.87006 25.1667 7.76229 24.9029 7.76229 24.6281C7.76229 24.3534 7.87006 24.0896 8.06245 23.8935L9.94926 22.0101C10.0451 21.9132 10.1593 21.8365 10.2852 21.7844C10.4111 21.7323 10.5461 21.7059 10.6824 21.7067C10.888 21.7061 11.0892 21.7666 11.2604 21.8806C11.4316 21.9945 11.5651 22.1567 11.644 22.3466C11.7228 22.5365 11.7435 22.7456 11.7034 22.9473C11.6633 23.149 11.5642 23.3342 11.4186 23.4795L9.53212 25.3628C9.33696 25.5571 9.07279 25.6662 8.79741 25.6662C8.52203 25.6662 8.25786 25.5571 8.0627 25.3628H8.06245ZM10.2904 27.5906C10.4856 27.7849 10.7497 27.894 11.0251 27.894C11.3005 27.894 11.5647 27.7849 11.7598 27.5906L13.6432 25.7041C13.74 25.6083 13.8168 25.4941 13.8689 25.3682C13.921 25.2423 13.9474 25.1072 13.9465 24.971C13.9471 24.7654 13.8866 24.5642 13.7727 24.393C13.6588 24.2217 13.4966 24.0882 13.3066 24.0094C13.1167 23.9305 12.9077 23.9098 12.706 23.9499C12.5043 23.99 12.319 24.0891 12.1737 24.2347L10.2904 26.1212C10.0961 26.3164 9.98702 26.5805 9.98702 26.8559C9.98702 27.1313 10.0961 27.3955 10.2904 27.5906ZM12.5182 29.8153C12.3239 29.6201 12.2149 29.3559 12.2149 29.0805C12.2149 28.8052 12.3239 28.541 12.5182 28.3458L14.4016 26.4625C14.5968 26.2697 14.8605 26.162 15.1349 26.1629C15.4093 26.1638 15.6722 26.2732 15.8662 26.4672C16.0602 26.6613 16.1696 26.9242 16.1705 27.1986C16.1714 27.473 16.0637 27.7366 15.8709 27.9319C15.852 27.9508 15.8362 27.9698 15.8204 27.9887C15.7666 28.033 15.7129 28.0804 15.6591 28.131L14.1866 29.6067C14.1359 29.6575 14.0884 29.7113 14.0444 29.768C14.0233 29.7811 14.0041 29.797 13.9875 29.8154C13.7923 30.0097 13.5281 30.1187 13.2528 30.1187C12.9774 30.1187 12.7132 30.0097 12.5181 29.8154L12.5182 29.8153ZM14.9451 31.3478C15.0758 31.4774 15.2524 31.5501 15.4365 31.5501C15.6205 31.5501 15.7971 31.4774 15.9278 31.3478L17.4036 29.8753C17.5343 29.7445 17.6078 29.5671 17.6078 29.3822C17.6078 29.1972 17.5343 29.0199 17.4036 28.8891C17.2728 28.7583 17.0954 28.6848 16.9104 28.6848C16.7255 28.6848 16.5481 28.7583 16.4173 28.8891L14.9448 30.3648C14.8802 30.4293 14.8289 30.5059 14.7939 30.5902C14.759 30.6745 14.741 30.7649 14.741 30.8562C14.741 30.9475 14.759 31.0378 14.7939 31.1221C14.8289 31.2065 14.8802 31.283 14.9448 31.3475L14.9451 31.3478ZM17.906 31.8598C17.7761 31.989 17.6006 32.062 17.4175 32.0631C17.2343 32.0643 17.0579 31.9935 16.9264 31.866L17.9091 30.8798C18.0371 31.0109 18.1084 31.187 18.1078 31.3702C18.1072 31.5535 18.0347 31.7291 17.906 31.8594V31.8598ZM20.3326 30.3272C20.1375 30.5215 19.8733 30.6305 19.5979 30.6305C19.3226 30.6305 19.0584 30.5215 18.8632 30.3272C18.8447 30.3087 18.8246 30.2917 18.8032 30.2766C18.759 30.2229 18.7147 30.1692 18.6641 30.1186L18.5599 30.0143C18.6814 29.6953 18.7085 29.348 18.6379 29.0141C18.5673 28.6801 18.402 28.3735 18.1617 28.131C17.9006 27.869 17.5632 27.6964 17.1979 27.638C17.2579 27.3625 17.2611 27.0775 17.2074 26.8007C17.4048 26.6917 17.6323 26.6497 17.8557 26.681C18.0791 26.7123 18.2862 26.8152 18.4461 26.9744L20.3326 28.8577C20.5269 29.0529 20.636 29.3171 20.636 29.5925C20.636 29.8678 20.5269 30.132 20.3326 30.3272ZM22.5573 28.0993C22.6541 28.0031 22.731 27.8886 22.7834 27.7625C22.8359 27.6364 22.8629 27.5012 22.8629 27.3647C22.8629 27.2281 22.8359 27.0929 22.7834 26.9668C22.731 26.8407 22.6541 26.7262 22.5573 26.63L20.6738 24.7466C20.4785 24.5539 20.2149 24.4462 19.9405 24.447C19.6661 24.4479 19.4031 24.5573 19.2091 24.7514C19.0151 24.9454 18.9057 25.2083 18.9048 25.4827C18.9039 25.7571 19.0116 26.0207 19.2044 26.216L21.0877 28.0993C21.1843 28.196 21.2991 28.2726 21.4255 28.3247C21.5519 28.3768 21.6873 28.4033 21.824 28.4027C21.9602 28.4036 22.0953 28.3772 22.2212 28.3251C22.3471 28.273 22.4613 28.1962 22.5572 28.0993H22.5573ZM24.785 25.8747C24.5899 26.069 24.3257 26.1781 24.0503 26.1781C23.775 26.1781 23.5108 26.069 23.3156 25.8747L21.4323 23.9882C21.3358 23.8918 21.2593 23.7773 21.2071 23.6513C21.1549 23.5252 21.128 23.3901 21.1281 23.2537C21.1281 23.1173 21.1551 22.9822 21.2073 22.8562C21.2596 22.7302 21.3363 22.6158 21.4328 22.5194C21.5294 22.4231 21.644 22.3467 21.7701 22.2947C21.8962 22.2426 22.0314 22.216 22.1678 22.2162C22.3042 22.2164 22.4392 22.2436 22.5652 22.296C22.6911 22.3485 22.8054 22.4253 22.9017 22.522L24.7852 24.4052C24.9795 24.6003 25.0886 24.8645 25.0886 25.1399C25.0886 25.4152 24.9795 25.6794 24.7852 25.8745L24.785 25.8747ZM28.2768 12.7165L32.6946 20.3668L29.8476 22.0132L25.4298 14.363L28.2769 12.7167L28.2768 12.7165ZM18.0259 15.1149L14.3035 16.9509C14.2006 16.9978 14.1096 17.0673 14.0374 17.1544C13.9651 17.2414 13.9135 17.3436 13.8864 17.4534L13.2227 19.8042C13.2169 19.8225 13.2153 19.8419 13.218 19.861C13.2207 19.88 13.2275 19.8982 13.2381 19.9142C13.2487 19.9303 13.2628 19.9438 13.2792 19.9537C13.2957 19.9636 13.3141 19.9698 13.3333 19.9717L14.6004 20.1329C14.6259 20.137 14.652 20.1332 14.6752 20.1219C14.6984 20.1106 14.7175 20.0924 14.73 20.0698L15.5643 18.7015C15.7419 18.3965 16.0034 18.1488 16.3177 17.9881C16.6319 17.8273 16.9857 17.7602 17.337 17.7946L17.9658 17.8483C18.3043 17.8728 18.6288 17.9933 18.9012 18.1956L23.1704 21.3999C23.3507 21.4962 23.5158 21.6187 23.6604 21.7633L25.0157 23.1224L28.1946 21.2959L25.2148 16.1325L24.4247 16.4327C23.9072 16.6341 23.335 16.6452 22.81 16.4643L18.6355 15.0739C18.5367 15.0374 18.4313 15.0221 18.3262 15.0292C18.2211 15.0363 18.1187 15.0655 18.0256 15.1149H18.0259ZM12.338 15.8512L8.5524 15.8955L5.11734 21.8489L7.31037 23.1319L9.19054 21.2517C9.38593 21.0553 9.6184 20.8997 9.87445 20.7939C10.1305 20.6881 10.405 20.6343 10.682 20.6355C10.9694 20.635 11.2538 20.6934 11.5177 20.807C11.7816 20.9206 12.0195 21.087 12.2166 21.296C12.4138 21.505 12.5661 21.7521 12.6641 22.0222C12.7621 22.2923 12.8038 22.5796 12.7866 22.8664C13.0734 22.8492 13.3607 22.8909 13.6308 22.9889C13.9009 23.087 14.1481 23.2393 14.3571 23.4364C14.5661 23.6336 14.7325 23.8715 14.8461 24.1354C14.9597 24.3993 15.018 24.6837 15.0176 24.971C15.0176 25.0121 15.0176 25.05 15.0144 25.0911C15.3116 25.0736 15.6091 25.1192 15.8874 25.2249C16.1656 25.3305 16.4184 25.4938 16.6292 25.7041C16.6703 25.7452 16.7082 25.7894 16.7461 25.8337C17.0824 25.6609 17.4588 25.5812 17.8363 25.603C17.8331 25.5619 17.8301 25.524 17.8301 25.4829C17.8292 25.1953 17.8872 24.9106 18.0006 24.6463C18.114 24.382 18.2804 24.1438 18.4895 23.9463C18.6985 23.7488 18.9458 23.5962 19.2161 23.498C19.4864 23.3997 19.774 23.358 20.0611 23.3752C20.0579 23.3373 20.0579 23.2962 20.0579 23.2551C20.057 22.8495 20.1735 22.4523 20.3933 22.1114C20.6131 21.7705 20.9268 21.5005 21.2966 21.3339L18.2567 19.0555C18.1444 18.9726 18.0105 18.9243 17.8712 18.9164L17.2455 18.8627C17.0934 18.8467 16.9399 18.8757 16.804 18.9458C16.6682 19.016 16.5558 19.1245 16.4808 19.2577L15.6465 20.626C15.5272 20.8256 15.3519 20.9859 15.1425 21.087C14.933 21.1881 14.6985 21.2255 14.468 21.1948L13.2007 21.0371C13.0284 21.0151 12.863 20.9562 12.7156 20.8643C12.5682 20.7725 12.4424 20.65 12.3467 20.5051C12.251 20.3602 12.1877 20.1964 12.1611 20.0248C12.1345 19.8532 12.1452 19.6779 12.1926 19.5108L12.8531 17.163C12.9218 16.9084 13.0446 16.6716 13.2131 16.4687C13.3816 16.2659 13.5918 16.1017 13.8295 15.9874L15.5359 15.1469L15.2071 14.9763C15.0934 14.9123 14.9654 14.8782 14.835 14.8772C14.7046 14.8761 14.5761 14.908 14.4614 14.97L13.1405 15.6461C12.8936 15.7789 12.6181 15.8494 12.3378 15.8515L12.338 15.8512ZM5.35434 12.7165L0.936707 20.3668L3.78375 22.0132L8.20152 14.363L5.35447 12.7167L5.35434 12.7165ZM16.8157 13.1779C18.0575 13.1779 19.2715 12.8096 20.304 12.1197C21.3366 11.4298 22.1414 10.4492 22.6166 9.30183C23.0918 8.15452 23.2162 6.89204 22.9739 5.67406C22.7316 4.45607 22.1336 3.33728 21.2555 2.45916C20.3774 1.58105 19.2586 0.983039 18.0406 0.740767C16.8226 0.498495 15.5602 0.622838 14.4128 1.09807C13.2655 1.57331 12.2849 2.37809 11.595 3.41065C10.905 4.4432 10.5368 5.65716 10.5368 6.89901C10.5383 8.56381 11.2003 10.16 12.3775 11.3372C13.5547 12.5144 15.1509 13.1764 16.8157 13.1779ZM14.433 6.92425C14.3917 6.8674 14.362 6.80297 14.3456 6.73465C14.3293 6.66632 14.3265 6.59544 14.3375 6.52604C14.3485 6.45665 14.3731 6.3901 14.4098 6.33019C14.4465 6.27029 14.4947 6.21821 14.5515 6.17692C14.6084 6.13563 14.6728 6.10594 14.7411 6.08955C14.8094 6.07316 14.8803 6.07039 14.9497 6.08139C15.0191 6.0924 15.0857 6.11696 15.1456 6.15368C15.2055 6.19041 15.2576 6.23857 15.2989 6.29542L16.1176 7.42357L18.851 5.18625C18.9611 5.09946 19.1009 5.05933 19.2403 5.07447C19.3797 5.08961 19.5076 5.15881 19.5965 5.26722C19.6854 5.37562 19.7283 5.51458 19.7159 5.65424C19.7034 5.79389 19.6367 5.92311 19.5301 6.01413L16.3605 8.61164C16.2639 8.68957 16.1435 8.73196 16.0194 8.73173C15.9349 8.73358 15.8512 8.71467 15.7757 8.67666C15.7002 8.63865 15.6352 8.58269 15.5864 8.5137L14.433 6.92425Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="er_choose_text">
                                    <h4>Trusted Work</h4>
                                    <p>Amet minim mollit deserunt aliqua dolor do amet sint duis.</p>
                                </div>
                            </div>
                            <div class="er_choose_box">
                                <div class="er_choose_icon">
                                    <svg width="40" height="33" viewBox="0 0 40 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M36.1246 22.0012C36.0434 22.0012 35.9629 21.9852 35.8879 21.9541C35.8129 21.9231 35.7447 21.8775 35.6873 21.8201C35.6298 21.7626 35.5843 21.6945 35.5532 21.6194C35.5221 21.5444 35.5061 21.4639 35.5061 21.3827V0.988171C35.5061 0.820467 35.3638 0.679688 35.1961 0.679688H27.9309C27.7609 0.679688 27.6232 0.818159 27.6232 0.988171V21.3827C27.6232 21.7243 27.3463 22.0012 27.0047 22.0012H23.2229L31.5643 31.6788L35.94 26.5993L39.9064 22.0012H36.1246Z"
                                            fill="white" />
                                        <path
                                            d="M22.8869 20.7639H26.3871V8.87078C24.0146 5.67209 20.2451 3.76733 16.261 3.76733C9.31818 3.76733 3.66931 9.40851 3.66931 16.3421C3.66931 23.2757 9.31741 28.9168 16.261 28.9168C19.4228 28.9168 22.4084 27.7591 24.7316 25.6451L22.066 22.5525C21.7845 22.2279 21.7214 21.7825 21.9037 21.3917C22.0814 21.0063 22.4584 20.7639 22.8869 20.7639ZM20.9675 19.4562C20.8929 20.5255 20.3705 21.5078 19.5682 22.2117C18.8919 22.8079 18.0734 23.1641 17.2057 23.3157V24.8065C17.2057 25.312 16.7926 25.722 16.2895 25.722H16.0864C15.5802 25.722 15.1701 25.312 15.1701 24.8065V23.2926C14.0785 23.0549 13.1061 22.4448 12.4207 21.5686C12.2415 21.3401 12.183 21.0678 12.253 20.7863C12.323 20.5047 12.4999 20.2901 12.7661 20.1716L12.9577 20.0854C13.3423 19.9108 13.7831 20.0154 14.0493 20.3462C14.3069 20.6655 14.6326 20.923 15.0027 21.0999C15.3727 21.2768 15.7777 21.3686 16.1879 21.3686C16.9203 21.3686 17.6642 21.1778 18.2242 20.6862C18.6227 20.3347 18.9004 19.8477 18.9381 19.3123C19.045 17.8353 17.4503 17.3722 16.2518 17.3606C14.9647 17.3468 13.6377 17.0206 12.6792 16.1144C11.8791 15.362 11.4783 14.3212 11.5553 13.2288C11.6322 12.1618 12.1545 11.1794 12.9546 10.4732C13.6331 9.87931 14.4516 9.52313 15.3194 9.37158V7.8784C15.3194 7.37529 15.7302 6.96295 16.2356 6.96295H16.4387C16.9426 6.96295 17.3549 7.37529 17.3549 7.8784V9.39236C18.4442 9.62923 19.4161 10.24 20.102 11.1186C20.2813 11.3471 20.3397 11.6194 20.2697 11.901C20.202 12.1826 20.0228 12.3972 19.7589 12.5157L19.5674 12.6018C19.1804 12.7764 18.7396 12.6718 18.4758 12.341C18.2179 12.0216 17.8918 11.7639 17.5213 11.587C17.1508 11.4101 16.7454 11.3184 16.3348 11.3186C15.6025 11.3186 14.8586 11.5094 14.2985 12.001C13.9024 12.3503 13.6246 12.8395 13.5846 13.3726C13.48 14.852 15.0724 15.3128 16.271 15.3266C17.558 15.3405 18.8881 15.6667 19.8466 16.5706C20.6436 17.3252 21.0467 18.3661 20.9675 19.4562Z"
                                            fill="white" />
                                        <path
                                            d="M16.2609 30.153C8.63655 30.153 2.43303 23.9572 2.43303 16.342C2.43303 8.72686 8.63655 2.53102 16.2609 2.53102C20.1151 2.53102 23.7869 4.15422 26.3871 6.94134V4.30577C23.55 1.92481 19.9647 0.619828 16.2609 0.620117C7.58109 0.620887 0.519043 7.67293 0.519043 16.342C0.519043 25.0111 7.58109 32.0632 16.2609 32.0632C20.1774 32.0632 23.8915 30.6346 26.7871 28.0298L25.5393 26.582C22.9914 28.8898 19.722 30.153 16.2609 30.153Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="er_choose_text">
                                    <h4>Low Cost</h4>
                                    <p>Amet minim mollit deserunt aliqua dolor do amet sint duis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------- Who-we Section end ----------->

        <!------------- Team Section start ----------->
        <div class="er_sec er_team_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="er_sec_heading er_ser_head">
                            <h5>Our Team</h5>
                            <h4>Meet Our Experts</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="er_team_box">
                            <div class="er_team_img">
                                <img src="assets/images/team-1.png" alt="team">
                            </div>
                            <div class="er_team_text">
                                <h5>Cameron Williamson</h5>
                                <p>Garden Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="er_team_box">
                            <div class="er_team_img">
                                <img src="assets/images/team-2.png" alt="team">
                            </div>
                            <div class="er_team_text">
                                <h5>Cameron Williamson</h5>
                                <p>Garden Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="er_team_box">
                            <div class="er_team_img">
                                <img src="assets/images/team-3.png" alt="team">
                            </div>
                            <div class="er_team_text">
                                <h5>Cameron Williamson</h5>
                                <p>Garden Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="er_team_box">
                            <div class="er_team_img">
                                <img src="assets/images/team-4.png" alt="team">
                            </div>
                            <div class="er_team_text">
                                <h5>Cameron Williamson</h5>
                                <p>Garden Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------- Team Section end ----------->
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
    <!------------- Copyright Section end ----------->


    <!-- custom link  -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/SmoothScroll.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'8f56ae98dd4e0dbf',t:'MTczNDc3MTYyOS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/787bc399e22f/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>


</html>

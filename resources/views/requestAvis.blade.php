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

    <main id="content ">
        <!-- breadcumb -->
        <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 lg:py-4 mx-auto">

            <ol class="flex items-center whitespace-nowrap sm:px-6 lg:px-8 px-4 ">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-white"
                        href="/">
                        <svg class="shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        Acceuil
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>

                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-white"
                    aria-current="page">
                    Demande de vis
                </li>
            </ol>
        </div>
        <!-- End Breadcumb -->
        <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 lg:py-4 mx-auto">

            @if (isset($success))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4"
                    role="alert">
                    <strong>Success!</strong> {{ $success }}
                </div>
            @endif
            <form action="/add-request" method="POST">
                @csrf
                @if (isset($request))
                    @method('PUT')
                @endif
                <div class="grid md:grid-cols-3 gap-4 sm:grid-cols-1">
                    <!-- nom-->
                    <div class="mb-4">

                        <label for="input-label-with-helper-text"
                            class="block text-sm font-medium mb-2 dark:text-white">Nom</label>

                        <input type="text" name="nom" id="nom"
                            value="{{ old('nom', $request->nom ?? '') }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Nom">

                        @error('nom')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>



                    <!-- nom-->
                    <div class="mb-4">
                        <label for="prenom"
                            class="mb-2 block text-sm font-medium text-gray-700 dark:text-white">Prenom
                        </label>

                        <input type="text" name="prenom" id="prenom"
                            value="{{ old('prenom', $request->prenom ?? '') }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Prenom">

                        @error('prenom')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- num_tel-->
                    <div class="mb-4">
                        <label for="num_tel"
                            class=" mb-2 block text-sm font-medium text-gray-700 dark:text-white">Numero
                            telephone
                        </label>

                        <input type="tel" name="num_tel" id="num_tel"
                            value="{{ old('num_tel', $request->num_tel ?? '') }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Numero telephone">

                        @error('num_tel')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- email-->
                    <div class="mb-4">
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-700 dark:text-white">
                            Email
                        </label>

                        <input type="email" name="email" id="email"
                            value="{{ old('email', $request->email ?? '') }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Email">

                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- estimation_temps-->
                    <div class="mb-4">
                        <label for="estimation_temps"
                            class="mb-2 block text-sm font-medium text-gray-700 dark:text-white">
                            Estimation temps
                        </label>

                        <input type="text" name="estimation_temps" id="estimation_temps"
                            value="{{ old('estimation_temps', $request->estimation_temps ?? '') }}"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Estimation temps">

                        @error('estimation_temps')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- methode_livraison-->
                    <div class="mb-4">
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-700 dark:text-white">
                            Methode livraison
                        </label>
                        <select name="methode_livraison" id="methode_livraison"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option value="1" {{ old('methode_livraison') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ old('methode_livraison') == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ old('methode_livraison') == '3' ? 'selected' : '' }}>3</option>
                        </select>

                        @error('methode_livraison')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>




                    <!-- product-->
                    <div class="mb-4">
                        <label for="produit_id" class="mb-2 block text-sm font-medium text-gray-700 dark:text-white">
                            Produit
                        </label>
                        <select name="produit_id" id="produit_id"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">

                            @foreach ($products as $product)
                                <!-- Assuming $products is passed to the view -->
                                <option value="{{ $product->id }}"
                                    {{ old('produit_id') == $product->id ? 'selected' : '' }}>
                                    {{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('produit_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>



                </div>





                <!-- Submit Button -->
                <div class="mt-6 flex justify-end mb-4">
                    <button type="submit"
                        class=" py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>

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

<!-- Begin Head -->



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
                                <h2>Contact Us</h2>
                                <div class="er_bread_list">
                                    <span>
                                        <a href="index.html">Home</a>
                                    </span>
                                    <span class="er_active_page">contact</span>
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
                                    <li><a href="/about-us">About</a></li>

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
        <!------------- Contact Section start ----------->
        <div class="er_contact_info">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="er_contact_box">
                            <div class="er_contact_icon">
                                <img src="assets/images/con-map.png" alt="icon">
                            </div>
                            <div class="er_contact_text">
                                <h4>Contact Us</h4>
                                <p>+1-202-555-0101</p>
                                <p>+1-202-555-0101</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="er_contact_box">
                            <div class="er_contact_icon">
                                <img src="assets/images/con-email.png" alt="icon">
                            </div>
                            <div class="er_contact_text">
                                <h4>Email Us</h4>
                                <p><a href="https://kamleshyadav.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="32574a535f425e5772555f535b5e1c515d5f">[email&#160;protected]</a>
                                </p>
                                <p><a href="https://kamleshyadav.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="d1b8bfb7be91b6bcb0b8bdffb2bebc">[email&#160;protected]</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="er_contact_box">
                            <div class="er_contact_icon">
                                <img src="assets/images/con-call.png" alt="icon">
                            </div>
                            <div class="er_contact_text">
                                <h4>Address</h4>
                                <p>2972 Westheimer Rd. Santa Ana, <br> Illinois 85486</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="er-contact_from">
                            <h4 class="er-title">Get In touch</h4>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="er-inputField">
                                            <input type="text" class="form-control require"
                                                placeholder="Enter Your Name" name="full_name" id="full_name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="er-inputField">
                                            <input type="text" class="form-control require"
                                                placeholder="Enter Your Email" name="email" id="email"
                                                data-valid="email" data-error="Email should be valid." />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="er-inputField">
                                            <input type="text" class="form-control require"
                                                placeholder="Enter Your Subject" name="subject" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="er-inputField">
                                            <input type="text" placeholder="Enter Your Number"
                                                class="form-control" id=""number>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="er-inputField">
                                            <textarea placeholder="Enter Your Message..." class="form-control form-textarea require" name="message"
                                                id="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="button" class="er_btn er_con_btn submitForm">Submit</button>
                                        <div class="response"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------- Contact Section end ----------->
        <!------------- Map Section end ----------->
        <div class="responsive-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889"
                allowfullscreen></iframe>
        </div>
        <!------------- Map Section end ----------->
        <!------------- footer Section start ----------->
        <div class="er_sec er_footer_section">
            <div class="container">
                <div class="er_signup_wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="er_signup_sec">
                                <h4>Sign Up To Get Updates & News About Us..</h4>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form method="">
                                <div class="er_form_wrapper">
                                    <input type="text" class="form-control" placeholder="Enter Your Email">
                                    <div class="er_btn er-form-btn">
                                        <a href="javascript:;">Subscribe</a>
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
                                                    <svg width="9" height="17" viewBox="0 0 9 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                <h5>Latest News</h5>
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
                                                    data-cfemail="d3b6abb2bea3bfb693b4beb2babffdb0bcbe">[email&#160;protected]</span></a>
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
                        "window.__CF$cv$params={r:'8f56aea5e85a70f6',t:'MTczNDc3MTYzMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/787bc399e22f/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
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

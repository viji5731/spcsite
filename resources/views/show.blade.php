 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    @include('partials.initial-loader-styles')
    <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="Senthil Plastic Containers">
    <meta name="keywords" content="Senthil Plastic Containers, SPC Virudhunagar, plastic containers manufacturer, plastic packaging containers, plastic storage containers, industrial plastic containers, plastic products Tamil Nadu, plastic containers Virudhunagar, plastic container supplier India">
    <meta name="language" content="English">
    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Virudhunagar, Tamil Nadu">
    <meta name="geo.position" content="9.5851;77.9570">
    <meta name="ICBM" content="9.5851, 77.9570">

    @php
        $metaTitle = \Illuminate\Support\Str::title(str_replace(['-', '_'], ' ', $product->slug));
        $metaDescription = $product->description
            ? \Illuminate\Support\Str::limit(strip_tags($product->description), 300, '')
            : '';
    @endphp

    <title>{{ $metaTitle }} | Senthil Plastic Containers Private Limited</title>
    <meta name="description" content="{{ $metaDescription ?: 'Senthil Plastic Containers (SPC) is a leading manufacturer of high-quality plastic containers.' }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="product">
    <meta property="og:title" content="{{ $metaTitle }} | Senthil Plastic Containers">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:image" content="{{ $product->image ? asset('storage/' . $product->image) : asset('assets/img/item2.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metaTitle }} | Senthil Plastic Containers">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $product->image ? asset('storage/' . $product->image) : asset('assets/img/item2.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-HJ..." crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-HJ..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    @include('partials.site-fonts')
</head>

<body>
    @include('partials.initial-loader-markup')
    <!-- Header -->
     <header id="header">
         <div class="container nav-container">
             <div style="display:flex;align-items:center;gap:8px;">
                 <img src="{{ asset('assets/img/item2.png') }}" style="width:40px;height:40px;display:block;"
                     alt="Logo" class="logo-image">
                 <a href="#" class="logo" style="margin:0;">Senthil Plastic Containers<span>&nbsp;Private
                         Limited</span></a>
             </div>
             <div class="hamburger" id="hamburger">
                 <i class="fas fa-bars"></i>
             </div>
             <ul class="nav-menu" id="nav-menu">
                 <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                 <li class="nav-item"><a href="{{ url('/') }}#about" class="nav-link">About</a></li>
                 <li class="nav-item">
                     <a href="{{ route('products.index') }}" class="nav-link">Products</a>
                 </li>
                 <li class="nav-item">

                     <a href="{{ url('/') }}#why-us" class="nav-link">Why choose us</a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('blogs.list') }}" class="nav-link">Blog</a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                 </li>
             </ul>
         </div>
     </header>


     <section class="breadcrumb-section py-3" style="margin-top:70px;background:#f8fafc;">
         <div class="container">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb mb-0">
                     <li class="breadcrumb-item"><a href="{{ route('products.index') }}"><i class="fas fa-box"></i>
                             Products</a></li>
                    

                     @if (optional($product->category)->name || !empty($product->category_name))
                         <li class="breadcrumb-item">
                             @if (optional($product->category)->slug || optional($product->category)->id)
                                 <a
                                     href="{{ route('products.index', ['category' => optional($product->category)->slug ?? optional($product->category)->id]) }}">
                                     {{ optional($product->category)->name ?? $product->category_name }}
                                 </a>
                             @else
                                 {{ optional($product->category)->name ?? $product->category_name }}
                             @endif
                         </li>
                     @endif

                     @if (optional($product->subcategory)->name || !empty($product->subcategory_name))
                         <li class="breadcrumb-item">
                             @if (optional($product->subcategory)->slug || optional($product->subcategory)->id)
                                 <a
                                     href="{{ route('products.index', ['category' => optional($product->category)->slug ?? optional($product->category)->id, 'subcategory' => optional($product->subcategory)->slug ?? optional($product->subcategory)->id]) }}">
                                     {{ optional($product->subcategory)->name ?? $product->subcategory_name }}
                                 </a>

                              @else
                                  {{ optional($product->subcategory)->name ?? $product->subcategory_name }}
                              @endif
                          </li>
                      @endif

                      <li class="breadcrumb-item active" aria-current="page">{{ \Illuminate\Support\Str::title(str_replace('-', ' ', $product->slug)) }}</li>
                  </ol>
              </nav>
          </div>
      </section>

    <!-- ================= PRODUCT VIEW ================= -->
<section class="spc-product-view">

    <div class="spc-product-container">

        <!-- LEFT : PRODUCT IMAGE -->
        <div class="spc-product-image-area">

            <div class="spc-image-card">
                 <div class="spc-quality-badge">
        <i class="fas fa-shield-alt"></i>
        Premium Quality
    </div>

                @if ($product->image)
                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->title }}"
                        class="spc-product-image">
                @else
                    <img
                        src="{{ asset('assets/img/no-image.png') }}"
                        alt="No image"
                        class="spc-product-image">
                @endif

            </div>

        </div>


        <!-- RIGHT : PRODUCT INFORMATION -->
        <div class="spc-product-content">

            <span class="spc-product-label">
                INDUSTRIAL GRADE CONTAINER
            </span>

            <h1 class="spc-product-title">
                {{ $product->title }}
            </h1>

            @if ($product->subtitle)
                <p class="spc-product-subtitle">
                    {{ $product->subtitle }}
                </p>
            @endif


            <!-- BENEFIT BADGES -->
            <div class="spc-badges">

                <div class="spc-badge">
                    <i class="fas fa-shield-alt"></i>
                    <span>Heavy Duty</span>
                </div>

                <div class="spc-badge">
                    <i class="fas fa-flask"></i>
                    <span>Chemical Resistant</span>
                </div>

                <div class="spc-badge">
                    <i class="fas fa-tint"></i>
                    <span>Leak Proof</span>
                </div>

            </div>


            <!-- SPECIFICATIONS -->
            <div class="spc-spec-grid">

                @if ($product->product_weight)
                    <div class="spc-spec-card">

                        <div class="spc-spec-icon">
                            <i class="fas fa-weight-hanging"></i>
                        </div>

                        <div>
                            <span>Weight</span>
                            <strong>{{ $product->product_weight }}</strong>
                        </div>

                    </div>
                @endif


                @if ($product->brimful_volume)
                    <div class="spc-spec-card">

                        <div class="spc-spec-icon">
                            <i class="fas fa-tint"></i>
                        </div>

                        <div>
                            <span>Volume</span>
                            <strong>{{ $product->brimful_volume }}</strong>
                        </div>

                    </div>
                @endif

            </div>


            <!-- DESCRIPTION -->
            @if ($product->description)

                <div class="spc-short-description">

                    <p>
                        {{ $product->description }}
                    </p>

                </div>

            @endif

        </div>

    </div>

</section>

<!-- ================= KEY FEATURES ================= -->

@php

    $features = [];

    if (!empty($product->features)) {

        $features = preg_split(
            '/(?<=\.)\s+/',
            trim($product->features)
        );

        $features = array_filter(
            array_map('trim', $features)
        );

        // Maximum 6 features only
        $features = array_slice($features, 0, 6);
    }

@endphp


@if (!empty($features))



@endif



     {{-- <section class="related-products py-5">
         <div class="container">
             <h2 class="section-title">Our Best Sellers</h2>
             <div class="product-grid">

                 <div class="product-card">
                     <span class="badge-label">Sale</span>
                     <button class="fav-btn"><i class="fa-regular fa-heart"></i></button>
                     <img src="{{ asset('assets/img/bucketk5.png') }}" alt="10 Litre Plastic  P10">
                     <h3>P10 Plastic </h3>
                     <div class="stars">
                     </div>
                 </div>

                 <div class="product-card">
                     <span class="badge-label">New</span>
                     <button class="fav-btn"><i class="fa-regular fa-heart"></i></button>
                     <img src="{{ asset('assets/img/bucketk5.png') }}" alt="10 Litre K10 Plastic Container">
                     <h3>K10 Plastic Container</h3>
                     <div class="stars">
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                     </div>
                 </div>

                 <div class="product-card">
                     <span class="badge-label">Hot</span>
                     <button class="fav-btn"><i class="fa-regular fa-heart"></i></button>
                     <img src="{{ asset('assets/img/bucketk5.png') }}" alt="5 Litre Plastic Bucket K5">
                     <h3>K5 Plastic Bucket</h3>
                     <div class="stars">
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                     </div>
                 </div>

                 <div class="product-card">
                     <span class="badge-label">Hot</span>
                     <button class="fav-btn"><i class="fa-regular fa-heart"></i></button>
                     <img src="{{ asset('assets/img/bucketk5.png') }}" alt="20 Litre Industrial  P20">
                     <h3>P20 Industrial </h3>
                     <div class="stars">
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                     </div>
                 </div>

             </div>
         </div>
     </section> --}}
     <!-- Font Awesome -->
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

     <!-- Footer -->
 
    <!-- Footer -->
    @include('layouts.footer')
     <style>
         :root {
             --primary-color: #45aae3;
             --secondary-color: #6c757d;
             --bg-light: #f8fafc;
             --text-dark: #1e1e1e;
         }

         .product-details {
             padding: 60px 0;

             background: var(--bg-light);
         }

         .container {
             /* width: 90%; */
             max-width: 1200px;
             /* padding: 40px; */
             margin: auto;
         }

         .product-wrapper {
             display: flex;
             flex-wrap: wrap;
             gap: 40px;
             align-items: flex-start;
         }

         .product-gallery {
             flex: 1 1 45%;
             width: 100%;
             max-width: 600px;
             height: auto;
         }

         .main-image {
             width: 100%;
             height: 500px;
             border-radius: 10px;
             overflow: hidden;
             /* box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1); */
         }

         /* Related Products Section */
         .related-products {
             background: #fff;
             padding: 60px 0;
         }

         .section-title {
             font-family: 'Poppins', sans-serif;
             font-weight: 700;
             font-size: 2rem;
             text-align: center;
             margin-bottom: 40px;
             color: #1e1e1e;
         }

        /* Product Grid - 3 Top + 2 Bottom Center */
.product-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 25px;
    max-width: 900px;
    margin: 0 auto;
    justify-items: center;
}

.product-card {
    width: 260px;
    grid-column: span 2;
}

/* Bottom 2 cards centered */
.product-card:nth-child(4) {
    grid-column: 2 / span 2;
}

.product-card:nth-child(5) {
    grid-column: 4 / span 2;
}
         .product-card:hover {

             transform: translateY(-6px);
             box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
         }

         /* Badge Label */
         .badge-label {
             position: absolute;
             top: 15px;
             left: 15px;
             background: #45aae3;
             color: #fff;
             font-size: 0.8rem;
             font-weight: 600;
             padding: 5px 10px;
             border-radius: 8px;
             box-shadow: 0 2px 5px rgba(13, 110, 253, 0.2);
         }

         /* Favorite Button */
         .fav-btn {
             position: absolute;
             top: 15px;
             right: 15px;
             background: #fff;
             border: none;
             border-radius: 50%;
             width: 32px;
             height: 32px;
             display: flex;
             align-items: center;
             justify-content: center;
             box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
             cursor: pointer;
             transition: all 0.3s ease;
         }

         .fav-btn:hover {
             background: #f1f5ff;
             color: #0d6efd;
         }

         .fav-btn i {
             font-size: 1rem;
             color: #6c757d;
         }

         /* Product Image */
         .product-card img {
             max-width: 100%;

             background-color: #f8f9fa;
             border-radius: 20px;
             object-fit: contain;
             transition: transform 0.4s ease;
         }

         .product-card:hover img {
             transform: scale(1.05);
         }

         /* Product Title */
         .product-card h3 {
             font-family: 'Poppins', sans-serif;
             font-size: 1.1rem;
             font-weight: 600;
             margin-top: 15px;
             color: #212529;
         }

         /* Stars */
         .stars {
             margin-top: 10px;
         }

         .stars i {
             color: #ffc107;
             margin: 0 2px;
         }

         /* Responsive */
         @media (max-width: 576px) {
             .product-card {
                 width: 90%;
             }
         }

         .main-image img {
             width: 100%;
             height: 90%;
             object-fit: cover;
             transition: transform 0.4s ease;
         }

         .main-image img:hover {
             transform: scale(1.05);
         }

         .thumbnail-row {
             display: flex;
             justify-content: flex-start;
             gap: 10px;
             margin-top: 15px;
         }

         .thumbnail-row img {
             width: 80px;
             height: 80px;
             object-fit: cover;
             border-radius: 6px;
             cursor: pointer;
             border: 2px solid transparent;
             transition: all 0.3s ease;
         }

         .thumbnail-row img:hover,
         .thumbnail-row img.active {
             border-color: var(--primary-color);
         }

         .product-info {
             flex: 1 1 50%;
         }

         .product-title {
             font-size: 2rem;
             font-weight: 600;
             color: var(--text-dark);
             margin-bottom: 10px;
         }

         .product-subtitle {
             font-size: 1.1rem;
             color: var(--secondary-color);
             margin-bottom: 20px;
         }

         .product-desc {
             font-size: 1rem;
             color: #444;
             text-align: justify;
             line-height: 1.7;
             margin-bottom: 20px;
         }

         .product-features {
             list-style: none;
             padding: 0;
             margin-bottom: 25px;
         }

         .product-features li {
             margin-bottom: 8px;
             color: #333;
             font-weight: 500;
         }

         .product-buttons {
             display: flex;
             gap: 15px;
         }

         .btn {
             padding: 12px 24px;
             border-radius: 6px;
             text-decoration: none;
             font-weight: 500;
             transition: 0.3s ease;
         }

         .primary-btn {
             background: var(--primary-color);
             color: #fff;
         }

         .primary-btn:hover {
             background: #45aae3;
         }

         .outline-btn {
             border: 2px solid var(--primary-color);
             color: var(--primary-color);
             background: transparent;
         }

         .outline-btn:hover {
             background: var(--primary-color);
             color: #fff;
         }

         /* Header & Navigation */
         header {
             position: fixed;
             top: 0;
             left: 0;
             width: 100%;
             z-index: 1000;
             padding: 10px 0;
             background: #fff;
             /* black with 60% opacity */
             backdrop-filter: blur(2px);
             /* optional: adds a glassy blur effect */
             z-index: 1000;
             transition: var(--transition);
         }

         header.scrolled {
             background-color: white;
             box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
             padding: px 0;
         }

         .nav-container {
             display: flex;
             justify-content: space-between;
             align-items: center;
         }

         .logo {
             font-family: "Poppins", sans-serif;
           
             font-weight: 900;
             color: rgb(19, 16, 16);
             text-decoration: none;
             display: flex;
             align-items: center;
         }

         .logo span {
             color: var(--accent);
         }

         .nav-menu {
             display: flex;
             margin-top: 0.5rem;
             list-style: none;
         }

         .nav-item {
             margin-left: 30px;
         }

         .nav-link {
             text-decoration: none;
             color: rgb(21, 18, 18);
             font-weight: 600;
    text-transform: uppercase;
             font-size: 18px;
             position: relative;
             padding: 5px 0;
             transition: var(--transition);
         }

         .nav-link:after {
             content: "";
             position: absolute;
             bottom: 0;
             left: 0;
             width: 0;
             height: 2px;
             color: white;
             background-color: var(--accent);
             transition: var(--transition);
         }

         .nav-link:hover {
             color: var(--accent);
         }

         .nav-link:hover:after {
             width: 100%;
         }

         .hamburger {
             display: none;
             cursor: pointer;
             font-size: 20px;
             color: #0f0707;
         }

         @media (max-width: 480px) {
             .nav-link {
                 text-decoration: none;
                 color: rgb(241, 239, 239);
                 font-weight: 600;
    text-transform: uppercase;
                 position: relative;
                 font-size: 18px;
                 padding: 5px 0;
                 transition: var(--transition);
             }

             .product-buttons {
                 display: contents;
                 gap: 15px;
             }

             .product-info {
                 flex: 1 1 50%;
                 text-align: center;
             }

             .logo {
                 font-size: 12px;
             }

             .hamburger {
                 display: block;
             }

             .logo {
                 font-size: 20px;
             }

             .nav-menu {
                 position: fixed;
                 top: 80px;
                 right: -100%;
                 flex-direction: column;
                 background-color: rgb(11, 7, 7);
                 width: 80%;
                 height: calc(100vh - 80px);
                 box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
                 transition: var(--transition);
                 padding: 40px 0;
             }

             .nav-menu.active {
                 right: 0;
             }

             .nav-item {
                 margin: 0;
                 text-align: center;
                 padding: 15px 0;
             }
         }

         /* Footer */
         footer {
             background-color: #0d1f22;
             color: white;
             padding: 30px 20px 20px 30px;
         }

         .footer-content {
             display: grid;
             grid-template-columns: repeat(4, 1fr);
             gap: 30px;
             margin-bottom: 40px;
         }

         .footer-col h4 {
             font-size: 1.2rem;
             margin-bottom: 20px;
             position: relative;
             padding-bottom: 10px;
         }

         .footer-col h4:after {
             content: "";
             position: absolute;
             bottom: 0;
             left: 0;
             width: 40px;
             height: 2px;
             background-color: var(--accent);
         }

         .footer-links {
             list-style: none;
         }

         .footer-links li {
             margin-bottom: 10px;
         }

         .footer-links a {
             color: #bbb;
             text-decoration: none;
             transition: var(--transition);
         }

         .footer-links a:hover {
             color: var(--accent);
             padding-left: 5px;
         }

         .social-links {
             display: flex;
             margin-top: 20px;
         }

         .social-links a {
             display: flex;
             align-items: center;
             justify-content: center;
             width: 36px;
             height: 36px;
             background-color: rgba(255, 255, 255, 0.1);
             border-radius: 50%;
             margin-right: 10px;
             color: white;
             text-decoration: none;
             transition: var(--transition);
         }

         .social-links a:hover {
             background-color: var(--accent);
             transform: translateY(-3px);
         }

         .copyright {
             text-align: center;
             padding-top: 10px;
             border-top: 1px solid rgba(255, 255, 255, 0.1);
             color: #bbb;
             font-size: 0.9rem;
         }

         /* Animations */
         @keyframes fadeInUp {
             to {
                 opacity: 1;
                 transform: translateY(0);
             }
         }

         @keyframes fadeIn {
             to {
                 opacity: 1;
             }
         }

         @keyframes float {

             0%,
             100% {
                 transform: rotate(45deg) translateY(0);
             }

             50% {
                 transform: rotate(45deg) translateY(-20px);
             }
         }

         @media (max-width: 576px) {
             .products-grid {
                 grid-template-columns: 1fr;
             }

             .footer-content {
                 grid-template-columns: 1fr;
             }

             .hero h1 {
                 font-size: 2rem;
             }
         }

         .hamburger {
             display: none;
             cursor: pointer;
             font-size: 24px;
             color: #000000;
         }

         @media (max-width: 768px) {
             .hamburger {
                 display: block;
             }

             .logo {
                 font-size: 12px;
             }

             .nav-menu {
                 position: fixed;
                 top: 80px;
                 right: -100%;
                 flex-direction: column;
                 background-color: rgb(11, 7, 7);
                 width: 80%;
                 height: calc(100vh - 80px);
                 box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
                 transition: var(--transition);
                 padding: 40px 0;
             }

             .nav-menu.active {
                 right: 0;
             }

             .nav-item {
                 margin: 0;
                 text-align: center;
                 padding: 15px 0;
             }

             .hero {
                 flex-direction: column;
                 height: 40vh;
                 /* height: auto; */
                 /* padding: 150px 0 80px; */
             }

             .hero .container {
                 height: 40%;
             }

             header {
                 position: fixed;
                 top: 0;
                 left: 0;
                 width: 100%;
                 z-index: 1000;
                 padding: 15px 0;
                 background: white;
                 /* black with 60% opacity */
                 backdrop-filter: blur(5px);
                 /* optional: adds a glassy blur effect */
                 z-index: 1000;
                 transition: var(--transition);
             }

             .hero-content {
                 width: 100%;
                 padding-right: 0;
                 text-align: center;
                 /* margin-bottom: 50px; */
             }

             .hero h1 {
                 font-size: 2.5rem;
             }




             .about-content,
             .contact-content {
                 grid-template-columns: 1fr;
             }

             .about-text,
             .about-image,
             .contact-info,
             .contact-form {
                 transform: none;
             }
         }

         :root {
             /* Brand Colors */
             --primary: #45aae3;
             /* Bright Brand Blue */
             --primary-dark: #45aae3;
             /* Deeper Blue for hover states */
             --secondary: #6610F2;
             /* Violet Accent */
             --accent: #45aae3;
             /* Light Blue highlight tone */

             /* Backgrounds */
             --light: #F8FAFC;
             /* Soft white background */
             --dark: #495057;
             /* Deep navy background */
             --card-bg: #1A2A6C;
             /* Slightly lighter navy for cards */

             /* Text Colors */
             --text-primary: #FFFFFF;
             /* White text for dark backgrounds */
             --text-secondary: #C9D4F3;
             /* Muted light text */
             --text-dark: #1E1E1E;
             /* For use on light backgrounds */

             /* Status Colors */
             /* --success: #00C897; */
             /* Green accent tone */
             --warning: #FFC107;
             /* Yellow accent */
             --error: #DC3545;
             /* Red accent */

             /* Borders and Shadows */
             --border-color: rgba(255, 255, 255, 0.2);
             --shadow-color: rgba(0, 0, 0, 0.15);

             /* Transition */
             --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
         }


         * {
             margin: 0;
             padding: 0;
             box-sizing: border-box;
         }

         body {
             font-family: "Poppins", sans-serif;
             line-height: 1.6;
             color: var(--dark);
             background-color: var(--light);
             overflow-x: hidden;
         }

         h1,
         h2,
         h3,
         h4,
         h5 {
             font-family: "Poppins", sans-serif;
             font-weight: 700;
             line-height: 1.2;
         }

         .qrcode {
             width: 150px;
             height: 150px;
         }

         /* Hero Section */
         /* Responsive */
         @media (max-width: 768px) {
             .product-wrapper {
                 flex-direction: column;
             }

             .main-image {
                 height: 300px;
             }

             .product-title {
                 font-size: 1.6rem;
             }
         }

         /* ========================
   BREADCRUMB SECTION
======================== */
         .breadcrumb-section {
             background: white;
             border-bottom: 1px solid #e5e5e5;
         }

         .breadcrumb {
             background: none;
             font-size: 0.95rem;
             padding: 10px 0;
             margin-bottom: 0;
         }

         .breadcrumb-item+.breadcrumb-item::before {
             color: var(--primary-color);
             content: "›";
         }

         .breadcrumb-item a {
             text-decoration: none;
             color: var(--primary-color);
             font-weight: 500;
         }

         .breadcrumb-item.active {
             color: #6c757d;
             font-weight: 600;
         }
         /* =========================================================
   SPC PRODUCT VIEW - NEW UI
========================================================= */

.spc-product-view {
    background: #f7fbff;
    padding: 70px 20px;
}

.spc-product-container {
    max-width: 1200px;
    margin: auto;

    display: grid;
    grid-template-columns: 48% 52%;
    align-items: center;

    gap: 50px;
}


/* ================= PRODUCT IMAGE ================= */

.spc-product-image-area {
    display: flex;
    justify-content: center;
}
.spc-image-card::before {
    content: "";

    position: absolute;

    width: 400px;
    height: 400px;

    border-radius: 50%;

    background: rgba(70, 170, 230, 0.06);

    top: 50%;
    left: 50%;

    transform: translate(-50%, -50%);

    pointer-events: none;
}

.spc-image-card {
    width: 100%;
    max-width: 520px;

    min-height: 520px;

    background: linear-gradient(
        145deg,
        #ffffff,
        #eef7ff
    );

    border-radius: 28px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 35px;

    box-shadow:
        0 20px 50px rgba(13, 110, 253, 0.10);

    border: 1px solid #e5f1fb;
    position: relative;
}
.spc-quality-badge {
    position: absolute;

    top: 35px;
    left: 18px;

    z-index: 10;

    display: inline-flex;
    align-items: center;
    gap: 7px;

    padding: 9px 15px;

    background: #168de2;
    color: #ffffff;

    border-radius: 30px;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 0.3px;

    box-shadow: 0 7px 18px rgba(22, 141, 226, 0.25);
}

.spc-quality-badge i {
    font-size: 11px;
}
.spc-product-image {
    width: 100%;
    max-width: 430px;
    max-height: 450px;

    object-fit: contain;

    transition: transform .5s ease;
}

.spc-image-card:hover .spc-product-image {
    transform: scale(1.04);
}


/* ================= PRODUCT CONTENT ================= */

.spc-product-content {
    padding: 10px 10px 10px 20px;
}

.spc-product-label {
    display: inline-block;

    font-size: 12px;
    font-weight: 700;

    letter-spacing: 1.5px;

    color: #168de2;

    margin-bottom: 12px;
}

.spc-product-title {
    font-size: 42px;

    line-height: 1.15;

    font-weight: 800;

    color: #122c52;

    margin: 0 0 8px;
}

.spc-product-subtitle {
    font-size: 17px;

    color: #71839a;

    margin-bottom: 24px;
}


/* ================= BADGES ================= */

.spc-badges {
    display: flex;
    flex-wrap: wrap;

    gap: 10px;

    margin-bottom: 25px;
}

.spc-badge {
    display: flex;
    align-items: center;

    gap: 8px;

    background: #eaf6ff;

    color: #14548b;

    padding: 9px 15px;

    border-radius: 30px;

    font-size: 13px;

    font-weight: 600;
}

.spc-badge i {
    color: #168de2;
}


/* ================= SPECIFICATIONS ================= */

.spc-spec-grid {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 16px;

    margin-bottom: 25px;

    max-width: 650px;
}

.spc-spec-card {
    background: #ffffff;

    border-radius: 14px;

    padding: 18px;

    display: flex;
    align-items: center;

    gap: 14px;

    border: 1px solid #e7f0f8;

    box-shadow:
        0 8px 25px rgba(26, 90, 140, 0.06);
}

.spc-spec-icon {
    width: 44px;
    height: 44px;

    flex-shrink: 0;

    border-radius: 50%;

    background: #e5f3ff;

    display: flex;

    align-items: center;
    justify-content: center;

    color: #168de2;

    font-size: 18px;
}

.spc-spec-card span {
    display: block;

    font-size: 12px;

    color: #7b8da3;

    margin-bottom: 2px;
}

.spc-spec-card strong {
    display: block;

    font-size: 18px;

    color: #17477b;
}


/* ================= DESCRIPTION ================= */

.spc-short-description {
    max-width: 650px;
}

.spc-short-description p {
    font-size: 15px;

    line-height: 1.8;

    color: #66788d;

    margin: 0;
}


/* =========================================================
   KEY FEATURES
========================================================= */

.spc-key-features {
    background: linear-gradient(
        135deg,
        #eef8ff,
        #f8fcff
    );

    padding: 75px 20px;
}

.spc-features-container {
    max-width: 1200px;

    margin: auto;

    display: grid;

    grid-template-columns: 28% 72%;

    gap: 45px;

    align-items: center;
}


/* LEFT */

.spc-feature-intro {
    padding-right: 15px;
}

.spc-small-title {
    font-size: 12px;

    font-weight: 800;

    letter-spacing: 1.5px;

    color: #168de2;
}

.spc-feature-intro h2 {
    font-size: 31px;

    line-height: 1.25;

    color: #12345b;

    margin: 15px 0;
}

.spc-feature-intro p {
    color: #70839a;

    line-height: 1.7;

    font-size: 14px;
}


/* FEATURE GRID */

.spc-feature-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 14px;
}

.spc-feature-card {
    background: #ffffff;

    border-radius: 14px;

    padding: 20px;

    min-height: 145px;

    display: flex;

    gap: 14px;

    box-shadow:
        0 8px 25px rgba(33, 91, 140, 0.06);

    border: 1px solid #edf4fa;

    transition: all .3s ease;
}

.spc-feature-card:hover {
    transform: translateY(-5px);

    box-shadow:
        0 15px 35px rgba(33, 91, 140, 0.12);
}

.spc-feature-icon {
    width: 44px;
    height: 44px;

    min-width: 44px;

    border-radius: 50%;

    background: #dcefff;

    color: #168de2;

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 18px;
}

.spc-feature-card h3 {
    font-size: 13px;

    color: #163e6a;

    margin: 2px 0 7px;

    line-height: 1.4;
}

.spc-feature-card p {
    font-size: 11px;

    color: #788da3;

    line-height: 1.5;

    margin: 0;
}


/* =========================================================
   BOTTOM INFORMATION
========================================================= */

.spc-bottom-info {
    background: #ffffff;

    padding: 65px 20px;
}

.spc-bottom-container {
    max-width: 1200px;

    margin: auto;

    display: grid;

    grid-template-columns: 1.25fr 1fr .7fr;

    gap: 25px;

    align-items: stretch;
}

.spc-description-box,
.spc-specification-box,
.spc-bottom-image {
    background: #ffffff;

    border: 1px solid #e9f0f6;

    border-radius: 18px;

    box-shadow:
        0 8px 25px rgba(0, 0, 0, .05);
}


/* DESCRIPTION */

.spc-description-box {
    padding: 28px;
}

.spc-description-box h2,
.spc-specification-box h2 {
    font-size: 18px;

    color: #173d67;

    margin-bottom: 16px;
}

.spc-description-box p {
    font-size: 13px;

    line-height: 1.8;

    color: #718398;

    margin: 0;
}


/* SPECIFICATION */

.spc-specification-box {
    padding: 28px;
}

.spc-specification-box h2 i {
    color: #168de2;

    margin-right: 7px;
}

.spc-table {
    width: 100%;
}

.spc-table-row {
    display: flex;

    justify-content: space-between;

    gap: 15px;

    padding: 10px 0;

    border-bottom: 1px solid #edf2f6;

    font-size: 12px;
}

.spc-table-row span {
    color: #788da3;
}

.spc-table-row strong {
    color: #365b7d;

    text-align: right;
}


/* IMAGE */

.spc-bottom-image {
    position: relative;

    overflow: hidden;

    min-height: 260px;
}

.spc-bottom-image img {
    width: 100%;
    height: 100%;

    min-height: 260px;

    object-fit: cover;

    display: block;
}

.spc-trusted {
    position: absolute;

    right: 15px;
    bottom: 15px;

    background: #168de2;

    color: #ffffff;

    padding: 9px 14px;

    border-radius: 10px;

    font-size: 11px;

    font-weight: 600;

    box-shadow: 0 5px 15px rgba(0,0,0,.15);
}

.spc-trusted i {
    margin-right: 5px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 992px) {

    .spc-product-container {
        grid-template-columns: 1fr;
    }

    .spc-product-content {
        padding: 0;
    }

    .spc-image-card {
        max-width: 650px;
        margin: auto;
    }

    .spc-features-container {
        grid-template-columns: 1fr;
    }

    .spc-feature-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .spc-bottom-container {
        grid-template-columns: 1fr 1fr;
    }

    .spc-bottom-image {
        grid-column: 1 / -1;
        min-height: 300px;
    }
     .spc-quality-badge {
        top: 10px;
        left: 15px;
    }

}


@media (max-width: 768px) {

    .spc-product-view {
        padding: 45px 15px;
    }

    .spc-product-title {
        font-size: 32px;
    }

    .spc-spec-grid {
        grid-template-columns: 1fr;
    }

    .spc-feature-grid {
        grid-template-columns: 1fr;
    }

    .spc-bottom-container {
        grid-template-columns: 1fr;
    }

    .spc-bottom-image {
        grid-column: auto;
    }
}


@media (max-width: 480px) {

    .spc-product-title {
        font-size: 27px;
    }

    .spc-image-card {
        min-height: 330px;

        padding: 20px;
    }

    .spc-product-image {
        max-height: 300px;
    }

    .spc-feature-intro h2 {
        font-size: 25px;
    }
        .spc-image-card::before {
        width: 280px;
        height: 280px;
    }
}
/* =========================================================
   PRODUCT SPECIFICATION + HIGHLIGHTS
========================================================= */

.spc-bottom-info {
    width: 100%;
    padding: 70px 20px 90px;
    background: #f7fbff;
}

.spc-bottom-container {
    max-width: 1200px;
    margin: 0 auto;

    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;

    align-items: stretch;
}


/* =========================================================
   SPECIFICATION CARD
========================================================= */

.spc-specification-box {
    background: #ffffff;
    border: 1px solid #e3edf6;
    border-radius: 22px;
    padding: 32px;

    box-shadow: 0 12px 35px rgba(20, 70, 120, 0.08);

    transition: all 0.3s ease;
}

.spc-specification-box:hover {
    transform: translateY(-4px);
    box-shadow: 0 18px 40px rgba(20, 70, 120, 0.12);
}


.spc-specification-box h2 {
    margin: 0 0 25px;

    display: flex;
    align-items: center;

    gap: 10px;

    color: #102a43;
    font-size: 24px;
    font-weight: 700;
}

.spc-specification-box h2 i {
    color: #1688df;
    font-size: 22px;
}


/* =========================================================
   SPECIFICATION TABLE
========================================================= */

.spc-table {
    display: flex;
    flex-direction: column;
}


.spc-table-row {
    min-height: 58px;

    padding: 14px 0;

    display: flex;
    align-items: center;
    justify-content: space-between;

    border-bottom: 1px solid #e8eef4;

    gap: 20px;

    transition: all 0.25s ease;
}


.spc-table-row:last-child {
    border-bottom: none;
}


.spc-table-row:hover {
    padding-left: 8px;
    padding-right: 8px;
    background: #f7fbff;
    border-radius: 8px;
}


.spc-table-row span {
    color: #6b8299;

    font-size: 14px;
    font-weight: 500;
}


.spc-table-row strong {
    color: #183b5d;

    font-size: 14px;
    font-weight: 700;

    text-align: right;
}


/* =========================================================
   PRODUCT HIGHLIGHTS CARD
========================================================= */

.spc-highlights-box {
    background: #ffffff;

    border: 1px solid #e3edf6;
    border-radius: 22px;

    padding: 32px;

    box-shadow: 0 12px 35px rgba(20, 70, 120, 0.08);

    transition: all 0.3s ease;
}


.spc-highlights-box:hover {
    transform: translateY(-4px);

    box-shadow: 0 18px 40px rgba(20, 70, 120, 0.12);
}


/* =========================================================
   SMALL LABEL
========================================================= */

.spc-bottom-label {
    display: inline-block;

    margin-bottom: 8px;

    color: #1688df;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 1.5px;
    text-transform: uppercase;
}


/* =========================================================
   HIGHLIGHTS HEADING
========================================================= */

.spc-highlights-box h2 {
    margin: 0 0 22px;

    color: #102a43;

    font-size: 24px;
    font-weight: 700;

    line-height: 1.3;
}


/* =========================================================
   HIGHLIGHT GRID
========================================================= */

.spc-highlight-grid {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 14px;
}


/* =========================================================
   HIGHLIGHT CARD
========================================================= */

.spc-highlight-card {
    min-height: 105px;

    display: flex;
    align-items: flex-start;

    gap: 14px;

    padding: 17px;

    background: #f6faff;

    border: 1px solid #e8f0f7;

    border-radius: 15px;

    transition: all 0.3s ease;
}


.spc-highlight-card:hover {
    transform: translateY(-4px);

    background: #ffffff;

    border-color: #cfe7fa;

    box-shadow: 0 10px 25px rgba(20, 70, 120, 0.10);
}


/* =========================================================
   ICON
========================================================= */

.spc-highlight-icon {
    flex-shrink: 0;

    width: 43px;
    height: 43px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;

    background: #e5f3ff;

    color: #1688df;

    font-size: 17px;

    transition: all 0.3s ease;
}


.spc-highlight-card:hover .spc-highlight-icon {
    background: #1688df;
    color: #ffffff;
}


/* =========================================================
   HIGHLIGHT TEXT
========================================================= */

.spc-highlight-card h4 {
    margin: 2px 0 6px;

    color: #183b5d;

    font-size: 14px;
    font-weight: 700;

    line-height: 1.3;
}


.spc-highlight-card p {
    margin: 0;

    color: #72879a;

    font-size: 11.5px;

    line-height: 1.55;
}


/* =========================================================
   RESPONSIVE - TABLET
========================================================= */

@media (max-width: 900px) {

    .spc-bottom-container {
        grid-template-columns: 1fr;
    }

}


/* =========================================================
   RESPONSIVE - MOBILE
========================================================= */

@media (max-width: 600px) {

    .spc-bottom-info {
        padding: 50px 15px 60px;
    }


    .spc-specification-box,
    .spc-highlights-box {
        padding: 24px 18px;
        border-radius: 18px;
    }


    .spc-specification-box h2,
    .spc-highlights-box h2 {
        font-size: 20px;
    }


    .spc-highlight-grid {
        grid-template-columns: 1fr;
    }


    .spc-table-row {
        min-height: 52px;
    }


    .spc-table-row span,
    .spc-table-row strong {
        font-size: 13px;
    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 400px) {

    .spc-highlight-card {
        padding: 14px;
    }

    .spc-highlight-icon {
        width: 38px;
        height: 38px;
        font-size: 15px;
    }

    .spc-highlight-card h4 {
        font-size: 13px;
    }

    .spc-highlight-card p {
        font-size: 11px;
    }

}
     
</style>
     <script>
         function changeImage(element) {
             const mainImage = document.getElementById("mainImage");
             const thumbnails = document.querySelectorAll(".thumb");

             // Set new main image
             mainImage.src = element.src;

             // Remove active state from all
             thumbnails.forEach(img => img.classList.remove("active"));

             // Add active to clicked one
             element.classList.add("active");
         }

         // Mobile Menu Toggle
         const hamburger = document.getElementById("hamburger");
         const navMenu = document.getElementById("nav-menu");

         hamburger.addEventListener("click", function() {
             navMenu.classList.toggle("active");
             hamburger.innerHTML = navMenu.classList.contains("active") ?
                 '<i class="fas fa-times"></i>' :
                 '<i class="fas fa-bars"></i>';
         });

         // Close mobile menu when clicking on a link
         document.querySelectorAll(".nav-link").forEach((link) => {
             link.addEventListener("click", () => {
                 navMenu.classList.remove("active");
                 hamburger.innerHTML = '<i class="fas fa-bars"></i>';
             });
         });
     </script>
     
    @include('partials.initial-loader-script')
</body>

 </html>

<?php get_header(); ?>
<main class="main">

    <!-- Hero Section -->
    <section class="hero-section py-14 relative block bg-[#1B1B1B]">
        <div class="hero wrapper relative px-10 lg:px-12 ">
            <div class="access-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/media/images/access-logo.png" alt="">
            </div>
            <div class="hero-content relative justify-between m-0 p-0">
                <div class="card-2 text-center flex flex-col w-1/2">
                    <h1 class="text-5xl hero-title text-white ">The website BUILDER real estate agents have
                        been WAITING
                        for.</h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/images/banner.png">
                    <div class="  text-center justify-center flex">
                        <p class="text-white hero-texts">
                            <button class="text-[#0D99FF] font-bold hover:underline">
                                TRY ACCESS FOR FREE
                            </button>
                            7-day free trial. No credit card required.
                        </p>
                    </div>
                </div>
                <div class="card shrink-0 relative rounded-lg drop-shadow-xl bg-[#FFFFFF]">
                    <div class="statement">
                        <p>Get In Touch With Us For A</p>
                        <h1>Free Consultation</h1>
                    </div>
                    <form class="card-body">
                        <div class="grid-cols-2 grid gap-4">
                            <div class="form-control border-gray-300 border-b">
                                <input type="text "
                                    class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                                    name="first-name" placeholder="First Name" id="">
                            </div>
                            <div class="form-control border-gray-300 border-b">
                                <input type=" text"
                                    class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                                    name="last-name" placeholder="Last Name" id="">
                            </div>
                        </div>
                        <div class="form-control border-gray-300 border-b pt-3">
                            <input type="email" placeholder="Email Address"
                                class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                                required />
                        </div>
                        <div class="form-control border-gray-300 border-b pt-3">
                            <input type="password" placeholder="Contact Number"
                                class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                                required />
                        </div>
                        <div class="form-control border-gray-300 border-b pt-3">
                            <input type="password" placeholder="Message"
                                class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                                required />
                        </div>
                        <div class="form-control mt-6 pt-3">
                            <button
                                class="btn schedule bg-[#1771DC] text-white border-none rounded-md font-bold">INQUIRE
                                NOW</button>
                        </div>
                    </form>

                </div>
            </div>
    </section>

    <!-- Demo Section -->
    <section class="demo-section py-20 relative block">
        <div class="wrapper relative block">
            <div class="demo-title text-center mx-auto max-w-[1024px]">
                <h1 class="text-black">Easy. Fast. Beautiful.</h1>
                <p class="text-[#7B7B7B] mt-5">ACCESS condenses our 20+ years of design
                    expertise into
                    user-friendly platform — all to help agents like you elevate your online presence.</p>
            </div>
            <div class="demo demo-web relative flex justify-between items-start mt-10 ">
                <div class="demo-left grid grid-cols-1 max-w-[285px] grow-0 text-black gap-5">
                    <div class="bg-[white] rounded-lg border-1 p-7 min-h-[172px] text-lg">
                        <p class="mb-2 font-bold">Professionally designed themes</p>
                        <span class="text-[#8d8d8d]">Made by award-winning creatives</span>
                    </div>
                    <div class="bg-[white] rounded-lg border-1 p-7 min-h-[172px] text-lg">
                        <p class="mb-2 font-bold">Dozens of customization options</p>
                        <span class="text-[#8d8d8d]">Make your website truly your own</span>
                    </div>
                    <div class="bg-[white] rounded-lg border-1 p-7 min-h-[172px] text-lg">
                        <p class="mb-2 font-bold">Real-Time Edits</p>
                        <span class="text-[#8d8d8d]">See your changes applied on the fly</span>
                    </div>
                </div>
                <div class="demo-mid block shrink-0 w-[58%]">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/images/demo_mid_1.png" alt=""
                        class="block h-[auto] w-full">
                </div>
                <div class="demo-right grid grid-cols-1 max-w-[285px] grow-0 text-black gap-5">
                    <div class="bg-[white] rounded-lg border-1 p-7 min-h-[172px] text-lg">
                        <p class="mb-2 font-bold">Lead-Gen Oriented Design</p>
                        <span class="text-[#8d8d8d]">Turn visitors into customers</span>
                    </div>
                    <div class="bg-[white] rounded-lg border-1 p-7 min-h-[172px] text-lg">
                        <p class="mb-2 font-bold">IDX Compatible</p>
                        <span class="text-[#8d8d8d]">Pull the latest listings from the MLS</span>
                    </div>
                    <div class="bg-[white] rounded-lg border-1 p-7 min-h-[172px] text-lg">
                        <p class="mb-2 font-bold">CRM Integration</p>
                        <span class="text-[#8d8d8d]">Works seamlessly with top CRM suites</span>
                    </div>
                </div>
            </div>
            <div class="demo-mobile justify-center gap-8 mt-10">
                <div class="demo-img block">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/images/demo_mid_1.png"
                        class="demo_mid_img w-full h-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/images/demo_mid_mobile.png"
                        class="demo_mid_mobile w-full h-auto">
                </div>
                <div class="demo-left-right flex flex-row gap-3">
                    <div class="demo-left grid grid-cols-1 max-w-[344px] mx-0 text-black gap-3">
                        <div class="bg-[white] rounded-lg border-1 p-7  text-lg">
                            <p class="mb-2 font-bold">Professionally designed themes</p>
                            <span class="text-[#8d8d8d]">Made by award-winning creatives</span>
                        </div>
                        <div class="bg-[white] rounded-lg border-1 p-7  text-lg">
                            <p class="mb-2 font-bold">Dozens of customization options</p>
                            <span class="text-[#8d8d8d]">Make your website truly your own</span>
                        </div>
                        <div class="bg-[white] rounded-lg border-1 p-7  text-lg">
                            <p class="mb-2 font-bold">Real-Time Edits</p>
                            <span class="text-[#8d8d8d]">See your changes applied on the fly</span>
                        </div>
                    </div>

                    <div class="demo-right grid grid-cols-1 max-w-[344px] mx-0 text-black gap-3 ">
                        <div class="bg-[white] rounded-lg border-1 p-7 min-h-[143px] text-lg">
                            <p class="mb-2 font-bold">Lead-Gen Oriented Design</p>
                            <span class="text-[#8d8d8d]">Turn visitors into customers</span>
                        </div>
                        <div class="bg-[white] rounded-lg border-1 p-7 min-h-[143px] text-lg">
                            <p class="mb-2 font-bold">IDX Compatible</p>
                            <span class="text-[#8d8d8d]">Pull the latest listings from the MLS</span>
                        </div>
                        <div class="bg-[white] rounded-lg border-1 p-7 min-h-[143px] text-lg">
                            <p class="mb-2 font-bold">CRM Integration</p>
                            <span class="text-[#8d8d8d]">Works seamlessly with top CRM suites</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="schedule-btn mt-10 w-full flex items-center justify-center">
                <button class="btn schedule border-none bg-[#1771DC] rounded-md font-bold mt-14">
                    SCHEDULE A DEMO
                </button>
            </div>

        </div>
    </section>

    <!-- Slider Section -->
    <section class="slider-section overflow-hidden relative py-20 block bg-[#1B1B1B]">
        <div class="slider-wrapper">
            <div class="slider-title relative block text-center">
                <h1 class="text-white">Look What ACCESS Can Do</h1>
                <p class="text-[#B3B3B3] mt-5">Create theme-based websites that look bespoke.</p>
            </div>
            <div class="awards absolute block pt-12 pr-12 top-0 left-0 right-0 mx-auto text-right max-w-[1440px]">
                <img src="<?php echo get_template_directory_uri(); ?>/media/images/awards.png"
                    class="block h-auto max-w-full ml-auto">
            </div>
            <div class="slider-contents relative mt-16 ">
                <div class="slider relative block w-full">
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-1.jpg"
                            class="">
                    </div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-2.jpg">

                    </div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-3.jpg">

                    </div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-4.jpg">

                    </div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-5.jpg">

                    </div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-6.jpg">

                    </div>
                </div>
                <div class="ipad absolute">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/images/ipad.png" width="736"
                        height="520" class="block w-full h-auto">
                </div>
                <div class="buttons z-1 absolute flex items-center justify-between m-auto">
                    <button class="btn rounded-full prev-arrow w-12 h-12 border-none p-1 bg-[#676767]"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.9168 6.24462C10.2788 6.58529 10.296 7.15487 9.95536 7.51683L6.58296 11.1H19.5C19.997 11.1 20.4 11.5029 20.4 12C20.4 12.4971 19.997 12.9 19.5 12.9H6.58296L9.95536 16.4832C10.296 16.8451 10.2788 17.4147 9.9168 17.7554C9.55485 18.096 8.98526 18.0788 8.6446 17.7168L3.8446 12.6168C3.51844 12.2703 3.51844 11.7297 3.8446 11.3832L8.6446 6.28317C8.98526 5.92122 9.55485 5.90396 9.9168 6.24462Z"
                                fill="white"></path>
                        </svg></button>
                    <button class="btn  rounded-full next-arrow w-12 h-12 border-none p-1 bg-[#676767]"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.0832 6.24462C14.4451 5.90396 15.0147 5.92122 15.3554 6.28317L20.1554 11.3832C20.4815 11.7297 20.4815 12.2703 20.1554 12.6168L15.3554 17.7168C15.0147 18.0788 14.4451 18.096 14.0832 17.7554C13.7212 17.4147 13.704 16.8451 14.0446 16.4832L17.417 12.9H4.50001C4.00295 12.9 3.60001 12.4971 3.60001 12C3.60001 11.5029 4.00295 11.1 4.50001 11.1H17.417L14.0446 7.51683C13.704 7.15487 13.7212 6.58529 14.0832 6.24462Z"
                                fill="white"></path>
                        </svg></button>
                </div>
            </div>
        </div>
        <div class="slider-button-sched relative z-50 w-full  mt-36 flex items-center justify-center">
            <button class="btn schedule border-none bg-[#1771DC] rounded-md font-bold">
                SIGN UP FOR ACCESS NOW
            </button>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section relative block py-20 bg-[#E8E8E8] overflow-hidden">
        <div class="bg absolute top-0 left-0 bottom-0 right-0"></div>
        <div class="wrapper relative block px-20">
            <div class="pricing-title text-center mx-auto max-w-[1024px]">
                <span>ACCESS WEBSITE BUILDER</span>
                <h1 class="text-white mt-4">Beautiful. Affordable. Quick to Build.</h1>
                <p class="text-white mt-4">Free for 7 days.</p>
            </div>
            <div class="pricing-list grid grid-cols-3 gap-9 relative mt-14">
                <!-- free -->
                <div
                    class="pricing-1 z-1 overflow-hidden relative max-w-sm lg:max-w-none mx-auto px-6 py-8 mt-12 bg-gray-100 rounded-2xl">
                    <div class="pricing-accent pa-web z-2 absolute top-0 left-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/media/images/left.svg"
                            class="rounded-tr-2xl rounded-tl-2xl">
                    </div>
                    <div class="pricing-accent pa-center-1 z-2 absolute top-0 left-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="406" height="335" viewBox="0 0 406 444"
                            fill="none" preserveAspectRatio="none"
                            class="accent-desktop rounded-tl-2xl rounded-tr-2xl ">
                            <path
                                d="M-517 -414H923V341C923 341 582.5 443.5 203 443.5C-176.5 443.5 -517 341 -517 341V-414Z"
                                fill="#2F2F2F"></path>
                            <path
                                d="M-517 -414H923V341C923 341 582.5 443.5 203 443.5C-176.5 443.5 -517 341 -517 341V-414Z"
                                fill="url(#paint0_linear_3138_2733)"></path>
                            <defs>
                                <linearGradient id="paint0_linear_3138_2733" x1="100" y1="-345.715" x2="-38.8886"
                                    y2="524.771" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1B1B1B"></stop>
                                    <stop offset="1" stop-color="#373737"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="text-center flex relative z-3 flex-col items-center justify-center">
                        <div
                            class="pricing-type flex items-center justify-center rounded-md w-[122px] h-[32px] bg-[#dfdfdf]">
                            <p class="font-semibold text-black">FREE</p>
                        </div>
                        <div class="pricing-title flex items-center justify-center mt-5 text-center">
                            <h1 class="block text-5xl font-bold text-white mb-6">$0</h1>
                        </div>
                        <div class="pricing-image relative block mx-[-24px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/media/images/pricing-1.png"
                                class="block w-full h-auto">
                        </div>

                        <!-- <span class="block text-gray-600 font-medium mb-6">per user, per month</span> -->
                    </div>
                    <div class="price-inclusions relative z-3 px-9">
                        <ul>
                            <li class="flex mb-4  items-center">
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>

                                <span class="ml-2 text-gray-800 font-bold">Create unlimited websites</span>
                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>

                                <span class="ml-2 text-gray-800 font-bold">7 day uptime for websites</span>

                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.5 11.9999L1 23L12 14.5L23 23L14.5 11.9999L22.9998 1L12 9.5L1.00029 1L9.5 11.9999Z"
                                        fill="#8D8D8D" />
                                </svg>

                                <span class=" ml-2 text-[#8D8D8D]">Custom domain name</span>
                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.5 11.9999L1 23L12 14.5L23 23L14.5 11.9999L22.9998 1L12 9.5L1.00029 1L9.5 11.9999Z"
                                        fill="#8D8D8D" />
                                </svg>

                                <span class=" ml-2 text-[#8D8D8D]">2 months free subscription</span>
                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="27" height="27" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.5 11.9999L1 23L12 14.5L23 23L14.5 11.9999L22.9998 1L12 9.5L1.00029 1L9.5 11.9999Z"
                                        fill="#8D8D8D" />
                                </svg>
                                <span class=" ml-2 text-[#8D8D8D]">Single IDX feed per published
                                    website</span>
                            </li>


                        </ul>
                    </div>
                    <div class="mt-6">
                        <a href="#"
                            class="relative group inline-block w-full py-4 px-6 text-center text-white hover:text-gray-50 bg-[#1771DC] font-semibold rounded-md overflow-hidden transition duration-200">
                            <div
                                class="absolute top-0 right-full w-full h-full bg-gray-900 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                            </div>
                            <span class="relative font-bold">INQUIRE NOW</span>
                        </a>
                    </div>

                </div>
                <!-- silver -->
                <div
                    class="pricing-1 popular overflow-hidden z-1 relative max-w-sm lg:max-w-none mx-auto px-6 py-8 bg-gray-100 rounded-2xl ">
                    <div class="pricing-accent z-2 absolute pa-web top-0 left-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="406" height="444" viewBox="0 0 406 444"
                            fill="none" preserveAspectRatio="none" class="accent-desktop">
                            <path
                                d="M-517 -414H923V341C923 341 582.5 443.5 203 443.5C-176.5 443.5 -517 341 -517 341V-414Z"
                                fill="#2F2F2F"></path>
                            <path
                                d="M-517 -414H923V341C923 341 582.5 443.5 203 443.5C-176.5 443.5 -517 341 -517 341V-414Z"
                                fill="url(#paint0_linear_3138_2733)"></path>
                            <defs>
                                <linearGradient id="paint0_linear_3138_2733" x1="100" y1="-345.715" x2="-38.8886"
                                    y2="524.771" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1B1B1B"></stop>
                                    <stop offset="1" stop-color="#373737"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>

                    <div class="pricing-accent z-2 pa-center-1 absolute top-0 left-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="406" height="335" viewBox="0 0 406 444"
                            fill="none" preserveAspectRatio="none" class="accent-desktop">
                            <path
                                d="M-517 -414H923V341C923 341 582.5 443.5 203 443.5C-176.5 443.5 -517 341 -517 341V-414Z"
                                fill="#2F2F2F"></path>
                            <path
                                d="M-517 -414H923V341C923 341 582.5 443.5 203 443.5C-176.5 443.5 -517 341 -517 341V-414Z"
                                fill="url(#paint0_linear_3138_2733)"></path>
                            <defs>
                                <linearGradient id="paint0_linear_3138_2733" x1="100" y1="-345.715" x2="-38.8886"
                                    y2="524.771" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1B1B1B"></stop>
                                    <stop offset="1" stop-color="#373737"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>


                    <div class="relative z-3 popular-price flex items-center justify-center bg-[#1771DC]">
                        MOST POPULAR
                    </div>
                    <div class="text-center relative z-3 flex flex-col items-center justify-center">

                        <div
                            class="pricing-type silver relative flex items-center justify-center rounded-md w-[122px] h-[32px]">
                            <p class="font-semibold text-black">SILVER</p>
                        </div>
                        <div class="pricing-title flex items-center justify-center mt-5 text-center">
                            <h1 class="price-silver block text-5xl font-bold text-white">$79.99</h1>
                        </div>
                        <p class="text-[#8D8D8D]">$1,099.89 / year</p>
                        <div class="pricing-image relative block mx-[-24px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/media/images/pricing-2.png"
                                class="block w-full h-auto">
                        </div>

                        <!-- <span class="block text-gray-600 font-medium mb-6">per user, per month</span> -->
                    </div>
                    <div class="price-inclusions px-10">
                        <ul>
                            <li class="flex mb-4  items-center">
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>

                                <span class="ml-2 text-gray-800 font-bold">Create unlimited websites</span>
                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>

                                <span class="ml-2 text-gray-800 font-bold">7 day uptime for websites</span>

                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>

                                <span class="ml-2 text-gray-800 font-bold">Custom domain name</span>
                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>
                                <span class="ml-2 text-gray-800 font-bold">2 months free subscription</span>
                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.5 11.9999L1 23L12 14.5L23 23L14.5 11.9999L22.9998 1L12 9.5L1.00029 1L9.5 11.9999Z"
                                        fill="#8D8D8D" />
                                </svg>

                                <span class="ml-2 text-[#8D8D8D]">Single IDX feed per published website</span>
                            </li>

                        </ul>
                    </div>

                    <div class="mt-6">
                        <a href="#"
                            class="relative group inline-block w-full py-4 px-6 text-center text-white hover:text-gray-50 bg-[#1771DC] font-semibold rounded-md overflow-hidden transition duration-200">
                            <div
                                class="absolute top-0 right-full w-full h-full bg-gray-900 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                            </div>
                            <span class="relative font-bold">INQUIRE NOW</span>
                        </a>
                    </div>
                </div>
                <!-- platinum -->
                <div
                    class="pricing-1 z-1 relative overflow-hidden max-w-sm lg:max-w-none mx-auto px-6 py-8 mt-12 bg-gray-100 rounded-2xl">
                    <div class="pricing-accent pa-web z-2 absolute top-0 left-0 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="403" height="403" viewBox="0 0 406 403"
                            fill="none" preserveAspectRatio="none" class="accent-desktop rounded-tr-2xl rounded-tl-2xl">
                            <path
                                d="M-1034 -455H406V300C406 300 65.5 402.5 -314 402.5C-693.5 402.5 -1034 300 -1034 300V-455Z"
                                fill="#2F2F2F"></path>
                        </svg>
                    </div>
                    <div class="pricing-accent pa-center-1 z-2 absolute top-0 left-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="406" height="335" viewBox="0 0 406 444"
                            fill="none" preserveAspectRatio="none" class="accent-desktop rounded-tl-2xl rounded-tr-2xl">
                            <path
                                d="M-517 -414H923V341C923 341 582.5 443.5 203 443.5C-176.5 443.5 -517 341 -517 341V-414Z"
                                fill="#2F2F2F"></path>
                            <path
                                d="M-517 -414H923V341C923 341 582.5 443.5 203 443.5C-176.5 443.5 -517 341 -517 341V-414Z"
                                fill="url(#paint0_linear_3138_2733)"></path>
                            <defs>
                                <linearGradient id="paint0_linear_3138_2733" x1="100" y1="-345.715" x2="-38.8886"
                                    y2="524.771" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1B1B1B"></stop>
                                    <stop offset="1" stop-color="#373737"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="text-center relative z-3 flex flex-col items-center justify-center">
                        <div
                            class="pricing-type flex items-center justify-center rounded-md w-[122px] h-[32px] platinum">
                            <p class="font-semibold text-black">PLATINUM</p>
                        </div>
                        <div class="pricing-title flex items-center justify-center mt-5 text-center">
                            <h1 class="block price-platinum text-5xl font-bold text-white ">$129.99</h1>
                        </div>
                        <p class="text-[#8D8D8D]">$1,649.89 / year</p>
                        <div class="pricing-image relative block mx-[-24px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/media/images/pricing-3.png"
                                class="block w-full h-auto">
                        </div>

                        <!-- <span class="block text-gray-600 font-medium mb-6">per user, per month</span> -->
                    </div>
                    <div class="price-inclusions relative z-3 px-10">
                        <ul>
                            <li class="flex mb-4  items-center">
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>

                                <span class="ml-2 text-gray-800 font-bold">Create unlimited websites</span>
                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>

                                <span class="ml-2 text-gray-800 font-bold">7 day uptime for websites</span>

                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>

                                <span class="ml-2 text-gray-800 font-bold">Custom domain name</span>
                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>

                                <span class="ml-2 text-gray-800 font-bold">2 months free subscription</span>
                            </li>
                            <li class="flex mb-4 items-center">
                                <svg width="30" height="28" viewBox="0 0 26 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon">
                                        <path id="Vector 5"
                                            d="M8.28986 18.6667L0 15.5556L8.28986 24L26 0L8.28986 18.6667Z"
                                            fill="#1B1B1B" />
                                    </g>
                                </svg>
                                <span class="ml-2 text-gray-800 font-bold">Single IDX feed per published website</span>
                            </li>

                        </ul>
                    </div>

                    <div class="mt-6">
                        <a href="#"
                            class="relative group inline-block w-full py-4 px-6 text-center text-white hover:text-gray-50 bg-[#1771DC] font-semibold rounded-md overflow-hidden transition duration-200">
                            <div
                                class="absolute top-0 right-full w-full h-full bg-gray-900 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                            </div>
                            <span class="relative font-bold">INQUIRE NOW</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta relative block bg-[#1B1B1B] ">
        <div class="cta-wrapper relative flex justify-start mx-auto max-w-[1440px]">
            <div class="cta-title absolute z-1 top-24 left-20 w-80">
                Reinvent the way you sell real estate today!
            </div>
            <div class="cta-img mt-[-54px]">
                <img src="<?php echo get_template_directory_uri(); ?>/media/images/cta.png" class="ml-40">
            </div>
            <div class="">
                <div class="w-[400px] consultation-form rounded-lg mt-24 mr-20 bg-[#FFFFFF]">
                    <div class="statement">
                        <h1>Free Consultation</h1>
                    </div>
                    <form class="card-body">
                        <div class="grid-cols-2 grid gap-4">
                            <div class="form-control border-gray-300 border-b">
                                <input type="text "
                                    class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                                    name="first-name" placeholder="First Name" id="">
                            </div>
                            <div class="form-control border-gray-300 border-b">
                                <input type=" text"
                                    class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                                    name="last-name" placeholder="Last Name" id="">
                            </div>
                        </div>
                        <div class="form-control border-gray-300 border-b pt-3">
                            <input type="email" placeholder="Email Address"
                                class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                                required />
                        </div>
                        <div class="form-control border-gray-300 border-b pt-3">
                            <input type="password" placeholder="Contact Number"
                                class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                                required />
                        </div>
                        <div class="form-control border-gray-300 border-b pt-3">
                            <input type="password" placeholder="Message"
                                class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                                required />
                        </div>
                        <div class="form-control mt-6 pt-3">
                            <button class="btn schedule bg-[#1771DC] text-white border-none rounded-md">SCHEDULE A
                                DEMO</button>
                        </div>
                    </form>

                </div>
            </div>





        </div>

    </section>

</main>


<?php get_footer(); ?>
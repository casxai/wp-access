<?php get_header(); ?>
<main class="main">

    <!-- Hero Section -->
    <section class="hero-section py-14 relative block bg-[#1B1B1B]">
        <div class="hero wrapper px-12 relative">
            <div class="access-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/media/images/access-logo.png" alt="">
            </div>

            <div class="hero-content flex flex-col justify-between m-0 p-0 lg:flex-row-reverse">
                <div class="card shrink-0 rounded-lg drop-shadow-xl bg-[#FFFFFF]">
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
                            <button class="btn bg-[#1771DC] text-white border-none rounded-md">INQUIRE NOW</button>
                        </div>
                    </form>

                </div>

                <div class="card-2 text-center lg:text-left flex flex-col w-1/2">
                    <h1 class="text-5xl hero-title text-white ">The website BUILDER real estate agents have
                        been WAITING
                        for.</h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/images/banner.png" class="banner"
                        alt="">
                    <div class="text-center justify-center flex flex-row">
                        <p class="text-white">
                            <button class="text-[#0D99FF]  font-bold hover:underline">
                                TRY ACCESS FOR FREE
                            </button>
                            7-day free trial. No credit card required.
                        </p>
                    </div>
                </div>
            </div>


    </section>

    <!-- Demo Section -->
    <section class="demo-section py-20 relative block">
        <div class="wrapper relative block px-20">
            <div class="demo-title text-center mx-auto max-w-[1024px]">
                <h1 class="text-black">Easy. Fast. Beautiful.</h1>
                <p class="text-[#7B7B7B] mt-5">ACCESS condenses our 20+ years of design
                    expertise into
                    user-friendly platform — all to help agents like you elevate your online presence.</p>
            </div>
            <div class="demo relative flex justify-between items-start mt-10">
                <div class="demo-left grid grid-cols-1 max-w-[285px] grow-1 text-black gap-5">
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
                <div class="demo-mid w-[54%] block shrink-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/images/demo_mid_1.png" alt=""
                        class="block h-[auto] w-full">
                </div>
                <div class="demo-right grid grid-cols-1 max-w-[285px] grow-1 text-black gap-5">
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
            <div class="w-full flex items-center justify-center">
                <button class="btn schedule border-none bg-[#1771DC] hover:bg-[#0F4B93] rounded-md font-bold mt-14">
                    SCHEDULE A DEMO
                </button>
            </div>

        </div>
    </section>

    <!-- Slider Section -->
    <section class="slider-section relative py-20 block bg-[#1B1B1B]">
        <div class="slider-wrapper">
            <div class="slider-title text-center  mx-auto max-w-[1024px]">
                <h1 class="text-white">Look What ACCESS Can Do</h1>
                <p class="text-[#B3B3B3] mt-5">Create theme-based websites that look bespoke.</p>
            </div>
            <div class="awards absolute block top-14 right-[12%]">
                <img src="<?php echo get_template_directory_uri(); ?>/media/images/awards.png" alt="">
            </div>
            <div class="slider-contents relative flex mt-16 gap-4 justify-center align-middle">
                <div class="slider relative z-2 block w-full">
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-1.jpg"
                            class="" width="600" height="451" alt=""></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-2.jpg"
                            class="" width="600" height="451" alt=""></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-3.jpg"
                            class="" width="600" height="451" alt=""></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-4.jpg"
                            class="" width="600" height="451" alt=""></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-5.jpg"
                            class="" width="600" height="451" alt=""></div>
                    <div class=""><img src="<?php echo get_template_directory_uri(); ?>/media/images/slide-6.jpg"
                            class="item" width="600" height="451" alt=""></div>
                </div>
                <div class="laptop absolute"><img
                        src="<?php echo get_template_directory_uri(); ?>/media/images/awards.png" alt=""></div>
                <div class="buttons absolute">
                    <button class="btn"></button>
                    <button class="btn"></button>
                </div>
            </div>


        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing">

    </section>

    <!-- CTA Section -->
    <section class="cta">

    </section>

</main>


<?php get_footer(); ?>
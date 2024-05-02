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
    <section class="slider-section overflow-hidden relative py-20 block bg-[#1B1B1B]">
        <div class="slider-wrapper block">
            <div class="slider-title text-center mx-auto max-w-[1024px]">
                <h1 class="text-white">Look What ACCESS Can Do</h1>
                <p class="text-[#B3B3B3] mt-5">Create theme-based websites that look bespoke.</p>
            </div>
            <div class="awards absolute block top-14 right-64">
                <img src="<?php echo get_template_directory_uri(); ?>/media/images/awards.png" alt="">
            </div>
            <div class="slider-contents relative mt-16">
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
                <div class="ipad absolute"><img src="<?php echo get_template_directory_uri(); ?>/media/images/ipad.png"
                        width="736" height="520" class="">
                </div>
                <div class="buttons z-1 absolute flex items-center justify-between m-auto">
                    <button class="btn rounded-full prev-arrow w-12 h-12 border-none p-1 bg-[#676767]"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.9168 6.24462C10.2788 6.58529 10.296 7.15487 9.95536 7.51683L6.58296 11.1H19.5C19.997 11.1 20.4 11.5029 20.4 12C20.4 12.4971 19.997 12.9 19.5 12.9H6.58296L9.95536 16.4832C10.296 16.8451 10.2788 17.4147 9.9168 17.7554C9.55485 18.096 8.98526 18.0788 8.6446 17.7168L3.8446 12.6168C3.51844 12.2703 3.51844 11.7297 3.8446 11.3832L8.6446 6.28317C8.98526 5.92122 9.55485 5.90396 9.9168 6.24462Z"
                                fill="white"></path>
                        </svg></button>
                    <button class="btn rounded-full next-arrow w-12 h-12 border-none p-1 bg-[#676767]"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.0832 6.24462C14.4451 5.90396 15.0147 5.92122 15.3554 6.28317L20.1554 11.3832C20.4815 11.7297 20.4815 12.2703 20.1554 12.6168L15.3554 17.7168C15.0147 18.0788 14.4451 18.096 14.0832 17.7554C13.7212 17.4147 13.704 16.8451 14.0446 16.4832L17.417 12.9H4.50001C4.00295 12.9 3.60001 12.4971 3.60001 12C3.60001 11.5029 4.00295 11.1 4.50001 11.1H17.417L14.0446 7.51683C13.704 7.15487 13.7212 6.58529 14.0832 6.24462Z"
                                fill="white"></path>
                        </svg></button>
                </div>


            </div>
            <div class="w-full flex items-center justify-center">
                <button class="btn schedule border-none bg-[#1771DC] hover:bg-[#0F4B93] rounded-md font-bold mt-14">
                    SIGN UP FOR ACCESS NOW
                </button>
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
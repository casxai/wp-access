<?php get_header(); ?>

<section class="hero-section relative block bg-[#1B1B1B]">


    <div class="hero py-12  max-w-[1440px] justify-center align-middle mx-auto ">
        <div class="hero-content flex flex-col justify-between m-0 p-0 lg:flex-row-reverse">
            <div class="access-bg absolute z-[-1]"><img
                    src="<?php echo get_template_directory_uri(); ?>/media/images/access-logo.png" alt="">
            </div>

            <div class="card shrink-0 rounded-lg bg-[#FFFFFF]">
                <div class="statement">
                    <p>Get In Touch With Us For A</p>
                    <h1>Free Consultation</h1>
                </div>

                <form class="card-body rounded-lg">
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
                    <div class="form-control border-gray-300 border-b">
                        <input type="email" placeholder="Email Address"
                            class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                            required />
                    </div>
                    <div class="form-control border-gray-300 border-b">
                        <input type="password" placeholder="Contact Number"
                            class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                            required />
                    </div>
                    <div class="form-control border-gray-300 border-b">
                        <input type="password" placeholder="Message"
                            class="appearance-none bg-transparent border-none w-full text-gray-800 mr-3 py-3 px-2 leading-tight focus:outline-none"
                            required />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">INQUIRE NOW</button>
                    </div>
                </form>
            </div>

            <div class="text-center lg:text-left flex flex-col w-1/2">
                <h1 class="text-5xl title text-white">The website BUILDER real estate agents have
                    been WAITING
                    for.</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/media/images/banner.png" class="banner" alt="">
                <div class="text-center justify-center flex flex-row">
                    <p class="text-white">
                        <button class="text-[#0D99FF] font-bold hover:underline">
                            TRY ACCESS FOR FREE
                        </button>
                        7-day free trial. No credit card required.
                    </p>
                </div>
            </div>
        </div>


</section>

<?php get_footer(); ?>
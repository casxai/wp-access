<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="src/output.css" rel="stylesheet"> -->
    <title>Access</title>
    <?php wp_head(); ?>
</head>
<!--  -->
<header class="bg-[#1B1B1B]">
    <div class="header-wrapper max-w-[1440px] h-[110px] py-2.5 px-12 flex align-middle justify-center mx-auto my-0">
        <div class="navbar m-0 p-0 ">
            <div class="navbar-start">
                <div class="logo relative block shrink-0 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/images/header-logo.png"
                        class="inline-block align-middle h-auto max-w-full" alt="logo" width="227" height="33">
                    <span class="block text-xs font-semibold text-white mt-1">REAL ESTATE WEBSITE PLATFORM</span>
                </div>
            </div>

            <div class=" navbar-end gap-3 text-center">
                <a class="contact btn bg-transparent hover:bg-[#0F4B93] rounded-md border-none text-base font-medium ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M20.8472 14.8557L16.4306 12.8766L16.4184 12.871C16.1892 12.7729 15.939 12.7336 15.6907 12.7565C15.4424 12.7794 15.2037 12.8639 14.9963 13.0022C14.9718 13.0184 14.9484 13.0359 14.9259 13.0547L12.6441 15.0001C11.1984 14.2979 9.70595 12.8166 9.00376 11.3897L10.9519 9.07318C10.9706 9.04974 10.9884 9.0263 11.0053 9.00099C11.1407 8.79409 11.2229 8.55692 11.2445 8.31059C11.2661 8.06426 11.2264 7.81642 11.1291 7.58912V7.57787L9.14438 3.1538C9.0157 2.85686 8.79444 2.60951 8.51362 2.44865C8.2328 2.2878 7.9075 2.22208 7.58626 2.2613C6.31592 2.42847 5.14986 3.05234 4.30588 4.01639C3.4619 4.98045 2.99771 6.21876 3.00001 7.50005C3.00001 14.9438 9.05626 21.0001 16.5 21.0001C17.7813 21.0023 19.0196 20.5382 19.9837 19.6942C20.9477 18.8502 21.5716 17.6841 21.7388 16.4138C21.7781 16.0927 21.7125 15.7674 21.5518 15.4866C21.3911 15.2058 21.144 14.9845 20.8472 14.8557ZM16.5 19.5001C13.3185 19.4966 10.2682 18.2312 8.01856 15.9815C5.76888 13.7318 4.50348 10.6816 4.50001 7.50005C4.49648 6.58458 4.82631 5.69911 5.42789 5.00903C6.02947 4.31895 6.86167 3.87143 7.76907 3.75005C7.7687 3.7538 7.7687 3.75756 7.76907 3.7613L9.73782 8.16755L7.80001 10.4869C7.78034 10.5096 7.76247 10.5337 7.74657 10.5591C7.60549 10.7756 7.52273 11.0249 7.5063 11.2827C7.48988 11.5406 7.54035 11.7984 7.65282 12.031C8.5022 13.7682 10.2525 15.5054 12.0084 16.3538C12.2428 16.4652 12.502 16.5139 12.7608 16.4952C13.0196 16.4765 13.2692 16.3909 13.485 16.2469C13.5091 16.2307 13.5322 16.2132 13.5544 16.1944L15.8334 14.2501L20.2397 16.2235C20.2397 16.2235 20.2472 16.2235 20.25 16.2235C20.1301 17.1322 19.6833 17.9661 18.9931 18.5691C18.3028 19.1722 17.4166 19.5031 16.5 19.5001Z"
                            fill="white"></path>
                    </svg>
                    <span class="m-0 p-0">800.977.9497</span></a>
                <button class="btn schedule border-none bg-[#1771DC] hover:bg-[#0F4B93] rounded-md font-bold">SCHEDULE
                    A
                    DEMO</button>
            </div>
        </div>
    </div>
</header>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss"></style>
    <script>
        tailwind.config = {
            theme: {
                extend: {

                }
            }
        }
    </script>
    <title>Agency</title>
</head>
<body class="font-sans">
    <div class="px-4 py-3 bg-[#2F6B4F] h-[80vh] md:h-[140vh] md:px-28 md:py-11">
    <img class="absolute -mt-3 -ml-10 md:-mt-11 md:-ml-28" src="assets/asset1.svg" alt="">
    <section class="navbar text-white">
        <nav class="flex justify-between items-center text-xl">
            <div class="Logo flex items-center">
                <img src="assets/logo.svg" alt="" width="49px">
                <h5 class="font-semibold ml-2 hidden md:block">Bubble Bash</h5>
            </div>
            <img src="assets/side-bar.svg" alt="" class="md:hidden">
            <ul class="md:flex md:justify-between hidden md:block md:font-light">
                <li>Home</li>
                <li class="ml-4"><a href="">Our Services</a></li>
                <li class="ml-4"><a href="">Portofolio</a></li>
                <li class="ml-4"><a href="">Testimonial</a></li>
                <li class="ml-4"><a href="">Contact Us</a></li>
            </ul>
        </nav>
    </section>
    <section class="Hero text-center mt-12">
        <h2 class="text-white font-bold text-3xl md:text-6xl md:w-3/4 mx-auto md:mt-24">Create Amazing Digital Product For Your Business</h2>
        <p class="text-gray-200 mt-4 text-sm md:w-1/2 mx-auto md:mt-8">We are a professional digital agency that has been established since 2016, we present a variety of digital services that can help you solve problems in your business</p>
        <div class="bg-white flex justify-center items-center pl-2 pr-1 py-2 w-48 mx-auto mt-6 md:mt-12 md:py-4">
            <a href="" class="font-bold text-lg">Get Started</a>
            <img class="ml-2" src="assets/arrowRight.svg" alt="">
        </div>
        <img class="hero-picture mt-16 mx-auto" src="assets/picture1.svg" alt="">
    </section>
    <section class="Count-page">
        <div class="grid grid-cols-2 mt-6 gap-3 md:block md:flex md:px-20 md:my-12 md:justify-between">
            <div class="text-center">
                <h5 class="font-semibold text-xl md:text-3xl">1.2K+</h5>
                <p class="text-gray-700 md:text-lg">Happy Clients</p>
            </div>
            <div class="text-center">
                <h5 class="font-semibold text-xl md:text-3xl">1.1K+</h5>
                <p class="text-gray-700 text md:text-lg">WorldWide Clients</p>
            </div>
            <div class="text-center">
                <h5 class="font-semibold text-xl md:text-3xl">6+</h5>
                <p class="text-gray-700 text md:text-lg">Years of Experience</p>
            </div>
            <div class="text-center">
                <h5 class="font-semibold text-xl md:text-3xl">12+</h5>
                <p class="text-gray-700 text md:text-lg">Award Winners</p>
            </div>
        </div>
    </section>
    <section class="services">
        <div>
            <p>Our Services</p>
            <h3>We Provide What You Need</h3>
            <div>

            </div>
        </div>
    </section>
    </div>
</body>
</html>
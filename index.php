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
    <div class="px-4 py-3 bg-[#2F6B4F] h-[80vh]">
    <img class="absolute -mt-3 -ml-10" src="assets/asset1.svg" alt="">
    <section class="navbar text-white">
        <nav class="flex justify-between items-center text-xl">
            <div class="Logo flex items-center">
                <img src="assets/logo.svg" alt="" width="49px">
                <h5 class="font-semibold ml-2 hidden">Bubble Bash</h5>
            </div>
            <img src="assets/side-bar.svg" alt="">
            <ul class="flex justify-between hidden">
                <li>Home</li>
                <li class="ml-2"><a href="">Our Services</a></li>
                <li class="ml-2"><a href="">Portofolio</a></li>
                <li class="ml-2"><a href="">Testimonial</a></li>
                <li class="ml-2"><a href="">Contact Us</a></li>
            </ul>
        </nav>
    </section>
    <section class="Hero text-center mt-12">
        <h2 class="text-white font-bold text-3xl">Create Amazing Digital Product For Your Business</h2>
        <p class="text-gray-200 mt-4 text-sm">We are a professional digital agency that has been established since 2016, we present a variety of digital services that can help you solve problems in your business</p>
        <div class="bg-white flex justify-center items-center pl-2 pr-1 py-2 w-48 mx-auto mt-6">
            <a href="" class="font-bold text-lg">Get Started</a>
            <img class="ml-2" src="assets/arrowRight.svg" alt="">
        </div>
        <img class="mt-16" src="assets/picture1.svg" alt="">
    </section>
    </div>
</body>
</html>
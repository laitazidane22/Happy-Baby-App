<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Layanan</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-white fixed w-full z-20 top-0 left-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center">
                <img src="img/logo happy baby.png" class="h-12 mr-3" alt="Logo Happy Baby">
            </a>
            <div class="flex flex-wrap md:order-2">
                <!-- <a href="#" class="block px-10 py-2 pl-3 pr-4 text-black rounded hover:bg-pink-600 md:hover:bg-transparent md:hover:text-pink-600 md:p-0 md:dark:hover:text-pink-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">masuk</a> -->
                <button type="button"
                    class="text-white bg-pink-600 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-pink-600 dark:hover:bg-pink-800 dark:focus:ring-pink-800">
                    <a href="{{ route('login') }}">Login
                    </a></button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 pl-3 pr-4 text-black rounded hover:bg-pink-600 md:hover:bg-transparent md:hover:text-pink-600 md:p-0 md:dark:hover:text-pink-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href=""
                            class="block py-2 pl-3 pr-4 text-white bg-pink-600 rounded md:bg-transparent md:text-pink-600 md:p-0 md:dark:text-pink-600">Layanan</a>
                    </li>
                    <li>
                        <a href="{{ route('artikel') }}"
                            class="block py-2 pl-3 pr-4 text-black rounded hover:bg-pink-600 md:hover:bg-transparent md:hover:text-pink-600 md:p-0 md:dark:hover:text-pink-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Artikel</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-black rounded hover:bg-pink-600 md:hover:bg-transparent md:hover:text-pink-600 md:p-0 md:dark:hover:text-pink-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->

    <section class="w-full bg-center py-36 bg-no-repeat"
        style="background-image: url('img/babyjbtn.jpg'); height: 80vh;">
        <div class="px-4 mx-auto max-w-screen-xl py-24 lg:py-56">
            <h1 class="mb-4 text-3xl font-bold tracking-tight leading-none text-pink-600 md:text-5xl lg:text-6xl">
                Yayasan Happy Baby</h1>
            <p class="mb-8 text-lg font-normal text-white lg:text-xl">lembaga sosial yang bergerak di bidang penyedia
                jasa layanan pramusiwi...</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                <a href="#"
                    class="inline-flex py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-pink-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    selengkapnya
                </a>
            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section id="" class="w-full pt-36 flex items-center justify-center">
        <div class="flex flex-wrap justify-between ">
            <div class="w-full px-4">
                <div class="max-w-screen-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Layanan</h4>
                    <h2 class="font-bold text-pink-600 text-4xl mb-4">Layanan Yayasan Happy Baby
                    </h2>
                </div>
            </div>

            <div class="container items-center justify-center space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="#" class="flex items-center justify-center px-4 h-24 bg-pink-300 rounded-lg shadow  dark:hover:bg-pink-200">
                    <svg class="ml-5 w-16 h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" id="chatbot">
                        <path fill="none" stroke="#DB2777" stroke-miterlimit="10" stroke-width="50" d="m577.27 804.78-41.85.78-166.87 110.62c-.57.41-1.36 0-1.36-.7V804.34h-81.51c-59 0-106.81-47.82-106.81-106.81V394.45c0-58.99 47.81-106.81 106.81-106.81H738.33c58.99 0 106.81 47.82 106.81 106.81v303.08c0 58.99-47.82 106.81-106.81 106.81l-43.64.44H577.27z">
                            </path><circle cx="389.34" cy="448.2" r="61.34" fill="none" stroke="#DB2777" stroke-miterlimit="10" stroke-width="50"></circle><circle cx="635.34" cy="448.2" r="61.34" fill="none" stroke="#DB2777" stroke-miterlimit="10" stroke-width="50"></circle>
                            <path fill="none" stroke="#DB2777" stroke-miterlimit="10" stroke-width="50" d="M847.21 634.45V463.13h46.48c19.39 0 35.11 15.72 35.11 35.11v101.11c0 19.39-15.72 35.11-35.11 35.11h-46.48zM95.2 599.35V498.24c0-19.39 15.72-35.11 35.11-35.11h46.48v171.33h-46.48c-19.39-.01-35.11-15.73-35.11-35.11zm546.66 6.99c-8.57 61.51-64.53 109-132.32 109-67.77 0-123.75-47.49-132.32-109h264.64z"></path><circle cx="509.54" cy="149.59" r="41.94" fill="none" stroke="#DB2777" stroke-miterlimit="10" stroke-width="20"></circle>
                            <path fill="none" stroke="#DB2777" stroke-miterlimit="10" stroke-width="50" d="M509.54 244.21v-52.68">
                        </path>
                    </svg>
                    <h5 class=" text-left text-3xl font-bold tracking-tight text-pink-600 ml-3 mr-10">Chat Bot</h5>
                </a>
                <a href="#" class="flex items-center justify-center px-4 h-24 bg-purple-300 rounded-lg shadow  dark:hover:bg-purple-200" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" id="feedback"><g fill-rule="evenodd" transform="translate(0 -1004.362)"><circle cx="24" cy="1028.362" r="24" fill="#A855F7"></circle><path fill="#0b5ecd" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M21.475 47.861a24 24 0 0 0 .129.02A24 24 0 0 0 24 48a24 24 0 0 0 1.697-.06 24 24 0 0 0 2.383-.29 24 24 0 0 0 2.34-.525 24 24 0 0 0 2.277-.756 24 24 0 0 0 2.19-.98 24 24 0 0 0 2.08-1.194 24 24 0 0 0 1.951-1.394 24 24 0 0 0 1.803-1.584 24 24 0 0 0 1.634-1.756 24 24 0 0 0 1.454-1.91 24 24 0 0 0 1.254-2.045 24 24 0 0 0 1.042-2.16 24 24 0 0 0 .823-2.254 24 24 0 0 0 .593-2.324 24 24 0 0 0 .36-2.372 24 24 0 0 0 .017-.343L35.71 13.865c-.016-.016-.035-.029-.05-.045-.161-.158-.33-.309-.503-.457-.068-.058-.131-.119-.2-.175a9.8 9.8 0 0 0-2.104-1.307 9.774 9.774 0 0 0-5.207-.814 9.771 9.771 0 0 0-8.5 8.068c-.165-.03-.329-.061-.495-.08a8.313 8.313 0 0 0-8.709 5.205 8.317 8.317 0 0 0 .08 6.306l-1.011 4.83a.5.5 0 0 0 .592.592l11.873 11.873z" color="#000" font-family="sans-serif" font-weight="400" transform="translate(0 1004.362)"></path><path fill="#fff" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M20.486 3.006a9.771 9.771 0 0 0-9.342 8.13c-.164-.029-.328-.06-.494-.08a8.306 8.306 0 0 0-5.576 1.333 8.323 8.323 0 0 0-3.053 10.18l-1.011 4.83a.5.5 0 0 0 .629.583l4.29-1.238A8.328 8.328 0 0 0 16.274 24.4a8.281 8.281 0 0 0 1.276-2.392 9.763 9.763 0 0 0 7.678-.508l5.134 1.48a.5.5 0 0 0 .63-.582l-1.212-5.76a9.788 9.788 0 0 0-3.576-12.003 9.763 9.763 0 0 0-5.717-1.63Zm.032.994a8.768 8.768 0 0 1 5.132 1.467 8.782 8.782 0 0 1 3.155 10.922.5.5 0 0 0-.03.326.5.5 0 0 0 .004.023l1.06 5.053-4.448-1.285a.5.5 0 0 0-.059-.014.5.5 0 0 0-.166-.023v.002a.5.5 0 0 0-.225.06 8.765 8.765 0 0 1-7.12.514A8.334 8.334 0 0 0 16.784 15h9.707a.5.5 0 1 0 0-1H16.068c-.098-.119-.194-.24-.3-.354a8.298 8.298 0 0 0-3.649-2.277A8.778 8.778 0 0 1 20.517 4Zm-5.061 4a.5.5 0 0 0 .05 1h10.981a.5.5 0 1 0 0-1h-10.98a.5.5 0 0 0-.051 0zm0 3a.5.5 0 0 0 .05 1h10.981a.5.5 0 1 0 0-1h-10.98a.5.5 0 0 0-.051 0zm-5.553 1a7.313 7.313 0 0 1 5.131 2.328 7.316 7.316 0 0 1 .445 9.461 7.32 7.32 0 0 1-9.263 1.982.5.5 60.003 0 0-.397-.035.5.5 0 0 0-.04.01l-3.62 1.045.863-4.127a.5.5 0 0 0 0-.006A.5.5 60.003 0 0 3 22.32a7.315 7.315 0 0 1 2.627-9.1A7.306 7.306 0 0 1 9.904 12Zm-4.447 4a.5.5 0 0 0 .05 1h8.985a.5.5 0 1 0 0-1H5.508a.5.5 0 0 0-.051 0zm13.783 1a.5.5 0 0 0 .051 1h2.404a.5.5 0 1 0 0-1h-2.404a.5.5 0 0 0-.05 0zM5.457 19a.5.5 0 0 0 .05 1h8.985a.5.5 0 1 0 0-1H5.508a.5.5 0 0 0-.051 0zm-.008 3a.5.5 0 0 0 .051 1h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 0-.05 0z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" transform="translate(8 1012.361)"></path></g></svg>
                    <h5 class=" text-left text-3xl font-bold tracking-tight text-purple-500 ml-3 mr-10">Komplain</h5>
                </a>
                
            </div>

        </div>
    </section>



    <!-- Card -->
    <section id="blog" class="w-full flex items-center justify-center pt-36 pb-16 bg-white">

        <div class="container flex flex-wrap justify-between">

            <div class="w-full px-4">
                <div class="max-w-screen-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Artikel</h4>
                    <h2 class="font-bold text-pink-600 text-4xl mb-4">Kategori Artikel Penting Mengenai Anak - Anak
                    </h2>
                    <p class="font-medium text-m text-secondary py-4">
                        temukan artikel terpercaya dan akurat tentang kesehatan anak dari Dokter Spesialis Anak terbaik
                        di seluruh Indonesia. Selain itu temukan juga artikel seputar tips dan trik dalam masa tumbuh
                        kembang anak-anak anda.
                    </p>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-8 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="img/pola asuh anak.jpg" class=" w-full rounded-t-xl h-72">
                    </a>
                    <div class="py-8 px-6">
                        <div class="block text-gray-900 px-6 mb-5">
                            <a href="" class="mb-3 font-bold text-2xl">Pola Asuh Anak</a>
                            <div class="mt-3 mb-4">
                                <a href="" class="text-sm">Pola asuh anak adalah suatu proses yang bertujuan
                                    meningkatkan serta mendukung perkembangan fisik, emosional, sosial, finansial, dan
                                    intelektual seorang anak sejak bayi hingga dewasa. Hal ini menjadi tanggung jawab
                                    orang tua,
                                    sebab orang tua merupakan guru pertama untuk anak dalam mempelajari banyak hal. </a>
                            </div>
                            <div class="">
                                <a href="#"
                                    class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-8 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="img/pola asuh anak.jpg" class=" w-full rounded-t-xl h-72">
                    </a>
                    <div class="py-8 px-6">
                        <div class="block text-gray-900 px-6 mb-5">
                            <a href="" class="mb-3 font-bold text-2xl">Tumbuh Kembang Anak</a>
                            <div class="mt-3 mb-4">
                                <a href="" class="text-sm">Pola asuh anak adalah suatu proses yang bertujuan
                                    meningkatkan serta mendukung perkembangan fisik, emosional, sosial, finansial, dan
                                    intelektual seorang anak sejak bayi hingga dewasa. Hal ini menjadi tanggung jawab
                                    orang tua,
                                    sebab orang tua merupakan guru pertama untuk anak dalam mempelajari banyak hal. </a>
                            </div>
                            <div class="">
                                <a href="#"
                                    class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 p-8 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="img/pola asuh anak.jpg" class=" w-full rounded-t-xl h-72">
                    </a>
                    <div class="py-8 px-6">
                        <div class="block text-gray-900 px-6 mb-5">
                            <a href="" class="mb-3 font-bold text-2xl">Pola Asuh Anak</a>
                            <div class="mt-3 mb-4">
                                <a href="" class="text-sm">Pola asuh anak adalah suatu proses yang bertujuan
                                    meningkatkan serta mendukung perkembangan fisik, emosional, sosial, finansial, dan
                                    intelektual seorang anak sejak bayi hingga dewasa. Hal ini menjadi tanggung jawab
                                    orang tua,
                                    sebab orang tua merupakan guru pertama untuk anak dalam mempelajari banyak hal. </a>
                            </div>
                            <div class="">
                                <a href="#"
                                    class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Tentang Kami
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Artikel
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Layanan
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Kontak
                    </a>
                </div>

            </nav>
            <div class="flex justify-center mt-8 md:space-x-8">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                        </path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Dribbble</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-base leading-6 text-center text-gray-400">
                © 2023 Yayasan Happy Baby. All rights reserved.
            </p>
        </div>
    </section>
</body>

</html>

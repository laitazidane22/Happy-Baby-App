<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
    <link rel="icon" href="../src/img/logo happy baby.png">

</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">

    <!--Header-->
    <div class="w-full m-0 p-0 bg-cover bg-center"
        style="background-image:url('img/babyjbtn.jpg'); height: 60vh; max-height:460px;">
        <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
            <!--Title-->
            <p class="text-pink-600 font-extrabold text-3xl md:text-5xl">
                Yayasan Baby Happy
            </p>
            <p class="text-xl md:text-2xl text-white">Selamat Datang di Portal Artikel</p>
        </div>
    </div>

    <!--Container-->
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

        <div class="mx-0 sm:mx-6">

            <!--Nav-->
            <nav class="mt-0 w-full">
                <div class="container mx-auto flex items-center">

                    <div class="flex w-1/2 pl-4 text-sm">
                        <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                            <li class="mr-2">
                                <a class="inline-block py-2 px-2 text-white no-underline hover:underline"
                                    href="post.html">POST</a>
                            </li>
                            <li class="mr-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2"
                                    href="#">LINK</a>
                            </li>
                            <li class="mr-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2"
                                    href="#">LINK</a>
                            </li>
                            <li class="mr-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2"
                                    href="{{ route('home') }}">Beranda</a>
                            </li>
                        </ul>
                    </div>


                    <div class="flex w-1/2 justify-end content-center">
                        <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar"
                            data-tippy-content="@twitter_handle" href="https://twitter.com/intent/tweet?url=#">
                            <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z">
                                </path>
                            </svg>
                        </a>
                        <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar"
                            data-tippy-content="#facebook_id" href="https://www.facebook.com/sharer/sharer.php?u=#">
                            <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z">
                                </path>
                            </svg>
                        </a>
                    </div>

                </div>
            </nav>

            <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">

                <!--Lead Card-->
                <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
                    <a href="post.html" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full md:w-2/3 rounded-t">
                            <img src="https://source.unsplash.com/collection/494263/800x600"
                                class="h-full w-full shadow">
                        </div>

                        <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">

                                <div class="w-full font-bold text-xl text-gray-900 px-6 mt-6">Jenis Pola Asuh Anak dan
                                    Efeknya</div>
                                <p class="text-gray-800 font-serif text-base px-6 mt-3">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum quas libero
                                    cupiditate? Reiciendis, accusamus.
                                </p>
                                <!-- <a href="#" class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">Selanjutnya</a> -->

                            </div>
                            <div
                                class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <p
                                        class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">
                                        Selengkapnya</p>
                                </div>
                            </div>
                        </div>

                    </a>
                </div>
                <!--/Lead Card-->


                <!--Posts Container-->
                <div class="flex flex-wrap justify-between pt-12 -mx-6">

                    <!--1/3 col -->
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/225/800x600"
                                    class="h-64 w-full rounded-t pb-6">
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Pola Asuh yang Tepat untuk Anak
                                    Usia 5-10 Tahun
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc
                                    commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <p
                                    class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">
                                    Selengkapnya</p>
                            </div>
                        </div>
                    </div>


                    <!--1/3 col -->
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/3106804/800x600"
                                    class="h-64 w-full rounded-t pb-6">
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Pentingnya Pola Asuh Anak dan
                                    Remaja di Era Digital yang Tepat</div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet,
                                    consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo posuere
                                    et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <p
                                    class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">
                                    Selengkapnya</p>
                            </div>
                        </div>
                    </div>

                    <!--1/3 col -->
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/539527/800x600"
                                    class="h-64 w-full rounded-t pb-6">
                                <div class="w-full  font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <p
                                    class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">
                                    Selengkapnya</p>
                            </div>
                        </div>
                    </div>


                    <!--1/2 col -->
                    <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/3657445/800x600"
                                    class="h-full w-full rounded-t pb-6">
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <p
                                    class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">
                                    Selengkapnya</p>
                            </div>
                        </div>
                    </div>

                    <!--1/2 col -->
                    <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/764827/800x600"
                                    class="h-full w-full rounded-t pb-6">
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <p
                                    class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">
                                    Selengkapnya</p>
                            </div>
                        </div>
                    </div>



                    <!--2/3 col -->
                    <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/325867/800x600"
                                    class="h-full w-full rounded-t pb-6">
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <p
                                    class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">
                                    Selengkapnya</p>
                            </div>
                        </div>
                    </div>

                    <!--1/3 col -->
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/1118905/800x600"
                                    class="h-full w-full rounded-t pb-6">
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.
                                </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <p
                                    class="bg-pink-600 font-medium text-center text-sm  text-white py-2 px-4 rounded-lg hover:opacity-80">
                                    Selengkapnya</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/ Post Content-->

            </div>


            <!--Subscribe-->
            <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center mb-16">
                <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe Baby Happy Artikel</h2>
                <h3 class="font-bold break-normal text-gray-600 text-base md:text-xl">Dapatkan postingan terbar kami
                    dikirim langsung ke kotak masuk Anda</h3>
                <div class="w-full text-center pt-4">
                    <form action="#">
                        <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                            <input type="email" placeholder="emailanda@example.com"
                                class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                            <button type="submit"
                                class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Subscribe-->

        </div>


    </div>

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

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8 flex flex-col lg:flex-row lg:space-x-4">
        <!-- Gambar Utama dengan overlay teks dan tombol READ -->
        <section class="relative lg:w-[650px] flex-shrink-0 mx-auto">
            <img src="https://i.pinimg.com/564x/5e/9b/f9/5e9bf9ae17715063cafb9d070a45aea2.jpg" alt="Gambar Utama"
                class="w-full h-[350px] shadow-md object-cover transition-transform duration-500 ease-in-out hover:scale-105">

            <div class="absolute inset-0 flex flex-col justify-center items-center text-white p-4 bg-black bg-opacity-50">
                <p class="text-xl font-bold text-center">Gempa Meghatrus akan melanda seluruh Indonesia</p>
                <p class="text-sm mt-2">Tanggal: 16 Agustus 2024, Waktu: 12:00 WIB</p>
            </div>

            <div class="absolute bottom-4 right-4">
                <a href="{{ url('/detail-news') }}"
                    class="bg-transparent text-white border border-white py-2 px-4 hover:bg-white hover:text-black transition duration-300">
                    READ
                </a>
            </div>
        </section>

        <!-- Judul dan berita yang sedang terjadi di sebelah kanan gambar -->
        <section class="flex flex-col lg:w-[400px] space-y-4 lg:ml-8 lg:mr-8">
            <div class="bg-white shadow-md">
                <div class="p-4 border-b">
                    <p class="text-lg font-bold">WHAT IS GOING ON</p>
                </div>
                <!-- Hapus loop berita jika tidak diperlukan -->
            </div>

            <!-- Iklan di bawah bagian WHAT IS GOING ON -->
            <div class="bg-gray-100 p-4 shadow-md">
                <div class="text-center">
                    <p class="text-lg font-bold">IKLAN</p>
                    <p class="text-sm text-gray-600">Tempatkan iklan Anda di sini</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Berita dan Iklan di sebelah kanan -->
    <div class="container mx-auto mt-10 flex flex-col lg:flex-row lg:space-x-4">
        <!-- Berita utama -->
        <main class="lg:w-[650px] mx-auto">
            <section class="border-b-2 border-black">
                <div class="p-2 border border-black inline-block bg-black text-white">
                    <h2 class="text-lg font-bold">NEWS</h2>
                </div>
            </section>

            <!-- News Berita -->
            <div class="bg-white shadow-md p-4 mt-4">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <!-- Gambar Kiri -->
                    <section class="relative w-full lg:w-1/2 p-2">
                        <a href="{{ url('/news-detail-4') }}">
                            <img src="https://i.pinimg.com/564x/9f/7d/04/9f7d0476ae078fe3a5a88809156ca725.jpg"
                                alt="Gambar 1"
                                class="w-full h-[200px] object-cover shadow-md rounded-lg transition-transform duration-500 ease-in-out hover:scale-105">
                            <div class="mt-2">
                                <p class="text-lg font-semibold">Bapak Tukang Kayu</p>
                                <p class="text-sm text-gray-600">Category: News</p>
                                <p class="text-xs text-gray-500">Posted on: August 16, 2024</p>
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum
                                    nulla at eros lacinia.</p>
                            </div>
                        </a>
                    </section>

                    <!-- Gambar Kanan -->
                    <section class="relative w-full lg:w-1/2 p-2">
                        <a href="{{ url('/news-detail-5') }}">
                            <img src="https://i.pinimg.com/564x/0c/bd/9a/0cbd9a5e908d86e643b5c2599f082141.jpg"
                                alt="Gambar 2"
                                class="w-full h-[200px] object-cover shadow-md rounded-lg transition-transform duration-500 ease-in-out hover:scale-105">
                            <div class="mt-2">
                                <p class="text-lg font-semibold">Ibu kota baru di Kalimantan</p>
                                <p class="text-sm text-gray-600">Category: Weather</p>
                                <p class="text-xs text-gray-500">Posted on: August 16, 2024</p>
                                <p class="mt-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium.</p>
                            </div>
                        </a>
                    </section>
                </div>

                <hr class="border-t-2 border-gray-300 my-4">

                <!-- 4 Berita kecil dengan judul dan kategori -->
                <section class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <article class="flex items-center p-2">
                        <a href="{{ url('/news-detail-6') }}" class="flex items-start">
                            <img src="https://i.pinimg.com/236x/06/2b/8d/062b8d2cb765f34f622367d30f29d241.jpg"
                                alt="Gambar 3"
                                class="w-[120px] h-[90px] object-cover shadow-md rounded-lg transition-transform duration-500 ease-in-out hover:scale-105 mr-4">
                            <div>
                                <p class="text-md font-semibold">Kebakaran Di Pemukiman Warga</p>
                                <div class="flex items-center space-x-2 mt-1">
                                    <p class="text-sm text-gray-600">News</p>
                                    <p class="text-xs text-gray-500">August 16, 2024</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <!-- Ulangi untuk berita lainnya -->
                </section>

                <div class="flex justify-center mt-10">
                    <button
                        class="flex items-center justify-center w-10 h-10 bg-gray-300 hover:bg-gray-400 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Rekomendasi untuk Anda -->
            <section class="mt-10 lg:w-[650px] mx-auto">
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <h2 class="text-2xl font-bold mb-6">Rekomendasi untuk Anda</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Berita 1 -->
                        <article class="rounded-sm overflow-hidden">
                            <a href="{{ url('/news-detail-10') }}">
                                <img src="https://i.pinimg.com/236x/06/2b/8d/062b8d2cb765f34f622367d30f29d241.jpg"
                                    alt="Berita 1" class="w-full h-[150px] object-cover">
                                <div class="p-4">
                                    <p class="text-lg font-semibold">Judul Berita 1</p>
                                    <p class="text-sm text-gray-500">August 16, 2024</p>
                                </div>
                            </a>
                        </article>

                        <!-- Berita 2 -->
                        <article class="rounded-sm overflow-hidden">
                            <a href="{{ url('/news-detail-11') }}">
                                <img src="https://i.pinimg.com/236x/26/45/af/2645af338af0c65771109431473ea23b.jpg"
                                    alt="Berita 2" class="w-full h-[150px] object-cover">
                                <div class="p-4">
                                    <p class="text-lg font-semibold">Judul Berita 2</p>
                                    <p class="text-sm text-gray-500">August 16, 2024</p>
                                </div>
                            </a>
                        </article>

                        <!-- Berita 3 -->
                        <article class="rounded-sm overflow-hidden">
                            <a href="{{ url('/news-detail-12') }}">
                                <img src="https://i.pinimg.com/236x/f8/f7/26/f8f726d5698d53516daf074e15b1650c.jpg"
                                    alt="Berita 3" class="w-full h-[150px] object-cover">
                                <div class="p-4">
                                    <p class="text-lg font-semibold">Judul Berita 3</p>
                                    <p class="text-sm text-gray-500">August 16, 2024</p>
                                </div>
                            </a>
                        </article>

                        <!-- Berita 4 -->
                        <article class="rounded-sm overflow-hidden">
                            <a href="{{ url('/news-detail-13') }}">
                                <img src="https://i.pinimg.com/236x/1d/0f/48/1d0f481bd5a876f1e963cc59536e39bc.jpg"
                                    alt="Berita 4" class="w-full h-[150px] object-cover">
                                <div class="p-4">
                                    <p class="text-lg font-semibold">Judul Berita 4</p>
                                    <p class="text-sm text-gray-500">August 16, 2024</p>
                                </div>
                            </a>
                        </article>

                        <!-- Berita 5 -->
                        <article class="rounded-sm overflow-hidden">
                            <a href="{{ url('/news-detail-14') }}">
                                <img src="https://i.pinimg.com/236x/1d/0f/48/1d0f481bd5a876f1e963cc59536e39bc.jpg"
                                    alt="Berita 5" class="w-full h-[150px] object-cover">
                                <div class="p-4">
                                    <p class="text-lg font-semibold">Judul Berita 5</p>
                                    <p class="text-sm text-gray-500">August 16, 2024</p>
                                </div>
                            </a>
                        </article>

                        <!-- Berita 6 -->
                        <article class="rounded-sm overflow-hidden">
                            <a href="{{ url('/news-detail-15') }}">
                                <img src="https://i.pinimg.com/236x/06/2b/8d/062b8d2cb765f34f622367d30f29d241.jpg"
                                    alt="Berita 6" class="w-full h-[150px] object-cover">
                                <div class="p-4">
                                    <p class="text-lg font-semibold">Judul Berita 6</p>
                                    <p class="text-sm text-gray-500">August 16, 2024</p>
                                </div>
                            </a>
                        </article>
                    </div>
                </div>
            </section>
        </main>

        <!-- Iklan di sebelah kanan -->
        <aside class="lg:w-[400px] bg-gray-100 p-4 shadow-md lg:ml-8">
            <div class="text-center">
                <p class="text-lg font-bold">IKLAN</p>
                <p class="text-sm text-gray-600">Tempatkan iklan Anda di sini</p>
            </div>
        </aside>
    </div>
@endsection

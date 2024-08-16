@extends('layouts.main_public')
@section('content')

<!-- Start Hero Section -->
<section id="home" class="pt-36 dark:bg-dark">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-base font-bold text-primary md:text-xl">Alooo 👋, saya <span class="block text-4xl font-bold text-dark dark:text-white lg:text-5xl">Thomas Setiawan</span></h1>
                <h2 class="mb-4 text-lg font-medium text-secondary dark:text-white lg:text-2xl">Normal <span class="text-dark dark:text-slate-500">Student</span></h2>
                <p class="mb-9 font-medium leading-relaxed text-secondary">Hal yang paling mudah untuk dilakukan adalah?<span class="font-bold text-dark dark:text-white"> Tidur!</span></p>

                <a href="www.linkedin.com/in/thomas-setiawan" class="rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition-all duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Hubungi Saya</a>
            </div>

            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10 lg:right-0 lg:mt-0 xl:pl-12">
                    <img src="dist/img/thomas_penege.png" alt="Thomas" class="relative z-10 mx-auto max-w-full" />
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-125">
                        <svg height="400" width="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill="#10b981"
                                d="M67.6,-23.9C74.7,0,58.7,29.4,35.7,45.1C12.8,60.9,-17.2,62.9,-38.6,48.5C-60,34,-72.8,3.1,-64.9,-21.8C-57,-46.6,-28.5,-65.5,0.9,-65.7C30.2,-66,60.5,-47.7,67.6,-23.9Z"
                                transform="translate(100 100)"
                            />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- Start About Section -->
<section id="about" class="pt-36 pb-32 dark:bg-dark">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="mb-10 w-full px-4 lg:w-1/2">
                <h4 class="mb-3 text-lg font-bold uppercase text-primary lg:text-2xl">tentang saya</h4>
                <h2 class="mb-2 max-w-md text-3xl font-bold text-dark dark:text-white lg:text-4xl">Keahlian</h2>
                <p class="max-w-xl text-base font-medium text-secondary lg:text-lg">
                    Seorang murid SMKN 2 Karanganyar di jurusan RPL (Rekayasa Perangkat Lunak). Saya mendalami ilmu coding dan lumayan ahli di dalam bidang backend dengan menggunakan framework Laravel.
                </p>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <h3 class="mb-4 text-2xl font-semibold text-dark dark:text-white lg:pt-10 lg:text-3xl">Berteman?</h3>
                <p class="mb-6 text-base font-medium text-secondary lg:text-lg">Jika ingin mengubungi saya bisa saja lewat sosial media berikut</p>
                <div class="flex items-center">
                    <!-- Facebook -->
                    <a
                        href="https://web.facebook.com/thomas.setiawan.5895/"
                        target="_blank"
                        class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 fill-current text-white hover:scale-110 hover:border-primary hover:text-white"
                    >
                        <img src="dist/img/facebook.svg" class="fill-current" width="20" alt="" />
                    </a>
                    <!-- Instagram -->
                    <a
                        href="https://www.instagram.com/hoamppppp/"
                        target="_blank"
                        class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 fill-current text-white hover:scale-110 hover:border-primary hover:text-white"
                    >
                        <img src="dist/img/instagram.svg" class="fill-current" width="20" alt="" />
                    </a>
                    <!-- Github -->
                    <a
                        href="https://github.com/Hoamp"
                        target="_blank"
                        class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 fill-current text-white hover:scale-110 hover:border-primary hover:text-white"
                    >
                        <img src="dist/img/github.svg" class="fill-current" width="20" alt="" />
                    </a>
                    <!-- Linkedid -->
                    <a
                        href="https://www.linkedin.com/in/thomas-setiawan/"
                        target="_blank"
                        class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 fill-current text-white hover:scale-110 hover:border-primary hover:text-white"
                    >
                        <img src="dist/img/linkedin.svg" class="fill-current" width="20" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Start Portofolio Section -->
<section id="portofolio" class="bg-slate-100 pt-36 pb-16 dark:bg-slate-800">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-xl text-center">
                <h4 class="mb-2 text-lg font-semibold text-primary">Portofolio</h4>
                <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Project Terbaru</h2>
                <p class="text-md font-medium text-secondary md:text-lg">Beberapa project jadi yang saya lakukan dari awal sampai terbaru</p>
            </div>
        </div>

        <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-full">
            @forelse ($project as $p)
            <div class="mb-12 p-4 md:w-1/3">
                <div class="overflow-hidden rounded-md shadow-md">
                    <img src="/storage/project/{{ $p->gambar }}" width="100%" alt="project" />
                </div>
                <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">{{ $p->judul }}</h3>
                <p class="text-base font-medium text-secondary">{{ $p->deskripsi }}</p>
            </div>
                
            @empty
            <div class="w-full px-4 ">
                <div class="bg-red-400 flex flex-wrap justify-center ">
                    <h3>
                        project belum diinputkan
                    </h3>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>
<!-- End Portofolio section -->

<!-- Start Client Section -->
<section class="bg-slate-600 pt-36 pb-32 dark:bg-slate-400" id="clients">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 text-center">
                <h4 class="mb-2 text-lg font-semibold text-primary">clients</h4>
                <h2 class="mb-4 text-3xl font-bold text-white dark:text-dark sm:text-4xl lg:text-5xl">Pernah Bekerja Dengan</h2>
                <p class="text-md font-medium text-secondary md:text-lg">Belum, tapi semoga tercapai</p>
            </div>
        </div>

        <div class="w-full px-4">
            <div class="flex flex-wrap items-center justify-center">
                <a href="google.com" target="_blank">
                    <img src="dist/img/clients/Google__G__Logo.svg.png" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale duration-300 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8" alt="" />
                </a>
                <a href="https://gojek.com" target="_blank">
                    <img src="dist/img/clients/Gojek_logo_2019.svg.png" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale duration-300 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8" alt="" />
                </a>
                <a href="https://shopee.co.id/" target="_blank">
                    <img src="dist/img/clients/721px-Shopee_logo.svg.png" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale duration-300 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8" alt="" />
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Client Section -->

<!-- Start Blog Section -->
<section id="blog" class="bg-slate-100 pt-36 pb-32 dark:bg-dark">
    <div class="containerr">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-xl text-center">
                <h4 class="mb-2 text-lg font-semibold text-primary">Sertifikasi</h4>
                <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Sertifikasi Saya</h2>
                <p class="text-md font-medium text-secondary md:text-lg">Beberapa Sertifikasi Yang Pernah Saya Kumpulkan</p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center">

            @forelse ($sertifikasi as $s)
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3  ">
                <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                    <img src="/storage/sertifikasi/{{ $s->gambar }}" alt="programming" class="w-full" />
                    <div class="py-8 px-6">
                        <h3 class=""><a href="" class="mb-3 block truncate text-xl font-semibold text-dark hover:text-primary dark:text-white">{{ $s->judul }}</a></h3>
                        <p class="font-md mb-6 text-base text-secondary">{{ $s->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="w-full px-4 ">
                <div class="bg-red-400 flex flex-wrap justify-center ">
                    <h3>
                        sertifikasi belum diinputkan
                    </h3>
                </div>
            </div>
            @endforelse

        </div>
        <div class="w-full px-4  flex justify-center">
            {{ $sertifikasi->links() }}

        </div>
    </div>
</section>
<!-- End Blog Section -->

<!-- Start Contact Section -->
<section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-xl text-center">
                <h4 class="mb-2 text-lg font-semibold text-primary">Contact</h4>
                <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Hubungi Saya</h2>
                <p class="text-md font-medium text-secondary md:text-lg">Hubungi saya jika anda memiliki pertanyaan atau hal hal lain</p>
            </div>
        </div>

        <form action="" method="">
            <div class="w-full lg:mx-auto lg:w-2/3">
                <div class="mb-8 w-full px-4">
                    <label for="nama" class="text-base font-bold uppercase text-primary">Nama</label>
                    <input type="text" name="nama" id="nama" class="w-full rounded-lg bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                </div>
                <div class="mb-8 w-full px-4">
                    <label for="email" class="text-base font-bold uppercase text-primary">Email</label>
                    <input type="email" name="email" id="email" class="w-full rounded-lg bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                </div>
                <div class="mb-8 w-full px-4">
                    <label for="pesan" class="text-base font-bold uppercase text-primary">Pesan</label>
                    <textarea name="pesan" id="pesan" class="h-32 w-full rounded-lg bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"></textarea>
                </div>
                <div class="w-full px-4">
                    <button class="w-full rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition-all duration-500 hover:opacity-80 hover:shadow-lg">Kirim</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Contact Section -->

    
@endsection
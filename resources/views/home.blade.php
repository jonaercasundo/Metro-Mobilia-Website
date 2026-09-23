<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Metro Mobilia Corporation
    </title>

    <meta
        name="description"
        content="Metro Mobilia Corporation - Quality Supply. Trusted Nationwide."
    >
    {{-- Favicon / Browser Tab Logo --}}
    <link
        rel="icon"
        type="image/png"
        href="{{ asset('images/logo_icon.png') }}"
    >
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Outfit:wght@300;400;500;600&display=swap"
        rel="stylesheet"
    >

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>


<body class="overflow-x-hidden bg-[#f5f3ee] text-[#0d0d0d]">

    {{-- =========================================================
        NAVIGATION
    ========================================================== --}}
    <x-public.navbar />


    {{-- =========================================================
        MAIN CONTENT
    ========================================================== --}}
    <main>

        {{-- =====================================================
            HERO
        ====================================================== --}}
        <x-public.hero />


        {{-- =====================================================
            CTA
        ====================================================== --}}
        <section
            class="relative overflow-hidden bg-[#1a1a1a]
                   px-6 py-28 text-center"
        >

            {{-- Background MMC --}}
            <div
                class="pointer-events-none absolute left-1/2 top-1/2
                       -translate-x-1/2 -translate-y-1/2
                       select-none font-serif text-[180px]
                       font-light text-white/[0.02]
                       md:text-[280px]"
            >
                MMC
            </div>


            {{-- CTA Content --}}
            <div class="relative z-10">

                <h2
                    class="font-serif text-4xl font-light
                           text-white md:text-5xl"
                >
                    Ready to Supply
                    <br>

                    <em class="text-[#c8b89a]">
                        Your Agency?
                    </em>
                </h2>


                <p
                    class="mx-auto mt-4 max-w-xl
                           text-sm font-light leading-[1.9]
                           text-white/45"
                >
                    Whether you're a government agency, school system,
                    or private institution — Metro Mobilia is ready to
                    deliver quality products on time, every time.
                </p>


                {{-- Buttons --}}
                <div
                    class="mt-10 flex flex-wrap
                           justify-center gap-4"
                >

                    {{-- Contact --}}
                    <a
                        href="{{ route('import') }}#contact"
                        class="bg-[#f5f3ee]
                               px-8 py-3.5
                               text-[11px] font-medium
                               uppercase tracking-[0.14em]
                               text-[#0d0d0d]
                               transition
                               hover:bg-white"
                    >
                        Contact Us Today
                    </a>

                    {{-- Company Profile --}}
                    <a
                    
                        href="{{ asset('documents/Company_Profile_Updated_0542026_compressed.pdf') }}"
                        download
                        class="border border-white/25
                               px-8 py-3.5
                               text-[11px] uppercase
                               tracking-[0.14em]
                               text-white/80
                               transition
                               hover:border-white/60
                               hover:text-white"
                    >
                        Download Company Profile
                    </a>

                </div>

            </div>

        </section>

    </main>


    {{-- =========================================================
        FOOTER
    ========================================================== --}}
    <x-public.footer />

</body>

</html>
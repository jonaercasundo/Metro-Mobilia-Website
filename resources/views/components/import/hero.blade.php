@php
    $navContext = request()->routeIs('export') ? 'export' : (request()->routeIs('import') ? 'import' : null);
@endphp

<section
    id="home"
    class="relative flex min-h-screen items-center justify-center overflow-hidden bg-[#0d0d0d] text-center"
>
    {{-- Video --}}
    <video
        id="hero-video"
        autoplay
        muted
        loop
        playsinline
        poster="{{ asset('images/hero-poster.jpg') }}"
        class="absolute inset-0 z-0 h-full w-full object-cover opacity-[0.38]"
    >
        <source
            src="{{ asset('videos/import.mp4') }}"
            type="video/mp4"
            
        >
    </video>

    {{-- Grid fallback --}}
    <div
        id="hero-grid"
        class="absolute inset-0 z-0 opacity-100"
        style="
            background-image:
                linear-gradient(rgba(200,184,154,0.06) 1px, transparent 1px),
                linear-gradient(90deg, rgba(200,184,154,0.06) 1px, transparent 1px);
            background-size: 60px 60px;
        "
    ></div>

    {{-- Overlay --}}
    <div
        class="absolute inset-0 z-10 bg-gradient-to-b from-[#0d0d0d]/55 via-[#0d0d0d]/45 to-[#0d0d0d]/90"
    ></div>

    {{-- Content --}}
    <div class="relative z-20 mx-auto max-w-4xl px-6 py-32">

        <div
            class="mb-8 inline-flex items-center gap-2.5 border border-[#c8b89a]/25 bg-[#c8b89a]/10 px-4 py-2 text-[10px] uppercase tracking-[0.22em] text-[#c8b89a]"
        >
            <span class="h-1.5 w-1.5 rounded-full bg-[#c8b89a]"></span>
            Metro Mobilia Corporation
        </div>

        <h1 class="font-serif text-5xl font-light leading-[1.05] tracking-wide text-white sm:text-6xl md:text-7xl lg:text-[90px]">
            Quality Supply.
            <br>
            <em class="text-[#c8b89a]">Trusted</em>
            Nationwide.
        </h1>


    </div>

</section>
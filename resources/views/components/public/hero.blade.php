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
            src="{{ asset('videos/homepage.mp4') }}"
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

    {{-- Eyebrow / Mark --}}
    <div class="flex flex-col items-center gap-4">


        <h1
            class="font-serif text-4xl font-light text-white lg:text-8xl"
        >
            Two Sides of Excellence.
            <br>
            <em class="text-[#c8b89a]">One Commitment to Quality.</em>
        </h1>
    </div>

    <div class="mt-10 flex flex-wrap justify-center gap-4">

        <a
            href="{{ route('import') }}"
            aria-current="{{ $navContext === 'import' ? 'page' : 'false' }}"
            class="border px-8 py-3.5 text-[11px] uppercase tracking-[0.14em] transition
                {{ $navContext === 'import'
                    ? 'border-[#c8b89a] bg-[#c8b89a]/10 text-[#c8b89a]'
                    : 'border-white/25 text-white/80 hover:border-white/60 hover:text-white' }}"
        >
            Import
        </a>

        <a
            href="{{ route('export') }}"
            aria-current="{{ $navContext === 'export' ? 'page' : 'false' }}"
            class="border px-8 py-3.5 text-[11px] uppercase tracking-[0.14em] transition
                {{ $navContext === 'import'
                    ? 'border-[#c8b89a] bg-[#c8b89a]/10 text-[#c8b89a]'
                    : 'border-white/25 text-white/80 hover:border-white/60 hover:text-white' }}"
        >
            Export
        </a>

    </div>
</div>

</section>
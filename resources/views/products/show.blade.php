<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product['name'] }} — Metro Mobilia Corporation</title>
    <meta name="description" content="{{ $product['description'] }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="flex min-h-screen flex-col overflow-x-hidden bg-[#f5f3ee] text-[#0d0d0d]">

    {{-- Navigation --}}
    <x-public.navbar />

    {{-- Main Content --}}
    <main class="relative flex-grow overflow-hidden bg-[#1a1a1a] px-6 py-12 text-white sm:py-16 md:py-20 lg:px-12 lg:py-24">

        {{-- Ambient accent glow --}}
        <div class="pointer-events-none absolute -left-32 -top-32 h-96 w-96 rounded-full bg-[#c8b89a]/[0.06] blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 -right-32 h-96 w-96 rounded-full bg-[#c8b89a]/[0.04] blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl">

            {{-- Breadcrumb --}}
            <nav aria-label="Breadcrumb" class="mb-8 flex items-center gap-2.5 text-[10px] uppercase tracking-[0.2em] text-white/40 md:mb-12">
                <a
                    href="{{ route('products.catalog', ['type' => $catalogType]) }}"
                    class="transition-colors hover:text-[#c8b89a] focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-[#c8b89a]"
                >
                    {{ ucfirst($catalogType) }} Catalog
                </a>
                <span class="text-white/20">/</span>
                <span class="truncate text-[#c8b89a]" aria-current="page">{{ $product['name'] }}</span>
            </nav>

            {{-- Build the image gallery: product overview image + one entry per brand with a photo --}}
            @php
                $galleryImages = collect();

                if (!empty($product['image'])) {
                    $galleryImages->push([
                        'label' => 'Overview',
                        'src'   => asset('images/' . $product['image']),
                    ]);
                }

                if (!empty($product['brands'])) {
                    foreach ($product['brands'] as $brand) {
                        $brandImage = $brand['image'] ?? null;
                        if ($brandImage) {
                            $galleryImages->push([
                                'label' => $brand['name'],
                                'src'   => asset('images/' . $brandImage),
                            ]);
                        }
                    }
                }

                $galleryImages = $galleryImages->values();
            @endphp

            {{-- Main Grid --}}
            <div class="grid gap-12 lg:grid-cols-12 lg:gap-16 xl:gap-20">

                {{-- Product Media Column --}}
                <div class="lg:col-span-6 xl:col-span-5">
                    <div class="sticky top-28 space-y-4">
                        <div
                            id="product-gallery-{{ $product['code'] }}"
                            class="group relative h-[420px] w-full overflow-hidden rounded-sm border border-white/10 bg-[#222] shadow-2xl transition-all duration-500 hover:border-[#c8b89a]/30 sm:h-[480px] lg:h-[560px] xl:h-[620px]"
                        >

                            @if($galleryImages->isNotEmpty())

                                <img
                                    id="product-main-image-{{ $product['code'] }}"
                                    src="{{ $galleryImages->first()['src'] }}"
                                    alt="{{ $product['name'] }}"
                                    class="h-full w-full object-contain object-center opacity-100 transition-opacity duration-200 ease-out"
                                    loading="eager"
                                    onerror="
                                        this.style.display='none';
                                        var f = document.getElementById('fallback-{{ $product['code'] }}');
                                        f.classList.remove('hidden');
                                        f.classList.add('flex');
                                    "
                                >

                                {{-- Faint gradient for depth, purely decorative --}}
                                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-transparent"></div>

                                {{-- Fallback: only ever shown if the current image fails to load --}}
                                <div
                                    id="fallback-{{ $product['code'] }}"
                                    class="hidden h-full w-full items-center justify-center bg-[#222] text-7xl text-[#c8b89a]/30"
                                >
                                    {{ $product['icon'] ?? '📦' }}
                                </div>

                                @if($galleryImages->count() > 1)

                                    {{-- Prev / next arrows --}}
                                    <button
                                        type="button"
                                        class="js-gallery-prev absolute left-3 top-1/2 flex h-9 w-9 -translate-y-1/2 items-center justify-center rounded-full border border-white/15 bg-[#1a1a1a]/70 text-white opacity-0 backdrop-blur-sm transition duration-300 hover:border-[#c8b89a]/50 hover:text-[#c8b89a] group-hover:opacity-100 focus-visible:opacity-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#c8b89a]"
                                        data-gallery-code="{{ $product['code'] }}"
                                        aria-label="Previous image"
                                    >
                                        ←
                                    </button>

                                    <button
                                        type="button"
                                        class="js-gallery-next absolute right-3 top-1/2 flex h-9 w-9 -translate-y-1/2 items-center justify-center rounded-full border border-white/15 bg-[#1a1a1a]/70 text-white opacity-0 backdrop-blur-sm transition duration-300 hover:border-[#c8b89a]/50 hover:text-[#c8b89a] group-hover:opacity-100 focus-visible:opacity-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#c8b89a]"
                                        data-gallery-code="{{ $product['code'] }}"
                                        aria-label="Next image"
                                    >
                                        →
                                    </button>

                                    {{-- Dot indicators --}}
                                    <div class="absolute bottom-4 left-1/2 flex -translate-x-1/2 items-center gap-2">
                                        @foreach($galleryImages as $index => $image)
                                            <button
                                                type="button"
                                                class="gallery-dot h-1.5 rounded-full transition-all duration-300 {{ $index === 0 ? 'w-6 bg-[#c8b89a]' : 'w-1.5 bg-white/30 hover:bg-white/50' }}"
                                                data-gallery-code="{{ $product['code'] }}"
                                                data-gallery-index="{{ $index }}"
                                                aria-label="Show {{ $image['label'] }} image"
                                            ></button>
                                        @endforeach
                                    </div>

                                @endif

                            @else

                                {{-- No photo available at all: icon placeholder + corner badge --}}
                                <div class="flex h-full w-full items-center justify-center text-7xl text-[#c8b89a]/30">
                                    {{ $product['icon'] ?? '📦' }}
                                </div>

                                <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center border-b border-r border-white/10 bg-[#1a1a1a]/80 text-base text-[#c8b89a] backdrop-blur-md">
                                    {{ $product['icon'] ?? '✦' }}
                                </div>

                            @endif

                        </div>
                    </div>
                </div>

                {{-- Product Information Column --}}
                <div class="flex flex-col justify-between lg:col-span-6 xl:col-span-7">

                    <div>
                        {{-- Meta Tags --}}
                        <div class="mb-4 flex flex-wrap items-center gap-3 text-[10px] font-medium uppercase tracking-[0.2em]">

                            {{-- Import / export --}}
                            <span class="rounded-full border border-[#c8b89a]/30 bg-[#c8b89a]/10 px-3 py-1 text-[#c8b89a]">
                                {{ strtoupper($catalogType) }}
                            </span>

                            {{-- Category --}}
                            <span class="rounded-full bg-white/5 px-3 py-1 text-white/50">
                                {{ $product['category'] }}
                            </span>

                        </div>

                        {{-- Header --}}
                        <h1 class="font-serif text-3xl font-light leading-tight text-white sm:text-4xl md:text-5xl lg:leading-[1.15]">
                            {{ $product['name'] }}
                        </h1>

                        <span class="mt-5 block h-px w-14 bg-gradient-to-r from-[#c8b89a] to-transparent"></span>

                        {{-- Description --}}
                        <div class="mt-6 max-w-none">
                            <p class="text-sm font-light leading-relaxed text-white/60 sm:text-base">
                                {{ $product['long_description'] ?? $product['description'] }}
                            </p>
                        </div>

                        {{-- Available Brands --}}
                        @if(!empty($product['brands']))
                            <div class="mt-10 border-t border-white/10 pt-8">
                                <div class="mb-4 flex items-center gap-3 text-[10px] uppercase tracking-[0.2em] text-white/40">
                                    <span class="h-px w-5 bg-[#c8b89a]"></span>
                                    <span>Products</span>
                                </div>

                                <div class="flex flex-wrap gap-3">
                                    @foreach($product['brands'] as $brand)
                                        @php
                                            $galleryIndex = $galleryImages->search(fn($img) => $img['label'] === $brand['name']);
                                        @endphp
                                        <button
                                            type="button"
                                            @if($galleryIndex !== false)
                                                data-gallery-code="{{ $product['code'] }}"
                                                data-gallery-index="{{ $galleryIndex }}"
                                            @endif
                                                class="brand-chip flex items-center gap-3 rounded-sm border border-white/10 bg-[#222]/60 px-4 py-2.5 backdrop-blur-sm transition duration-300 hover:-translate-y-0.5 hover:border-[#c8b89a]/40 hover:bg-[#262626]/70"
                                            >
                                            @if(!empty($brand['logo']))
                                                <img
                                                    src="{{ asset('images/' . $brand['logo']) }}"
                                                    alt="{{ $brand['name'] }}"
                                                    class="h-4 w-auto object-contain opacity-80 grayscale transition duration-300 hover:opacity-100 hover:grayscale-0"
                                                >
                                            @endif
                                            <span class="text-[11px] font-medium uppercase tracking-wider text-white/70">
                                                {{ $brand['name'] }}
                                            </span>
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Action Buttons --}}
                        <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:flex-wrap sm:items-center">
                            <a
                                href="{{ route('contact') }}"
                                class="group inline-flex items-center justify-center gap-3 whitespace-nowrap rounded-sm border border-[#c8b89a] bg-[#c8b89a] px-8 py-4 text-[11px] font-semibold uppercase leading-none tracking-[0.2em] text-[#0d0d0d] transition-all duration-300 hover:bg-transparent hover:text-[#c8b89a] hover:shadow-[0_10px_30px_-10px_rgba(200,184,154,0.5)] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#c8b89a]"
                            >
                                <span>Request a Quote</span>
                                <span class="text-base transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">→</span>
                            </a>

                            <a
                                href="{{ route('products.catalog', ['type' => $catalogType]) }}"
                                class="inline-flex items-center justify-center gap-3 whitespace-nowrap rounded-sm border border-white/15 px-8 py-4 text-[11px] font-semibold uppercase leading-none tracking-[0.2em] text-white/60 transition duration-300 hover:border-white/40 hover:bg-white/[0.03] hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white"
                            >
                                <span class="text-base" aria-hidden="true">←</span>

                                <span>
                                    Back to {{ ucfirst($catalogType) }} Catalog
                                </span>
                            </a>
                        </div>
                    </div>

                    {{-- Sourcing Banner --}}
                    <div class="mt-12 rounded-sm border border-white/10 bg-gradient-to-br from-[#222] to-[#1c1c1c] p-6 shadow-inner transition-colors duration-300 hover:border-white/15 md:p-8">
                        <div class="mb-3 flex items-center gap-3 text-[10px] font-medium uppercase tracking-[0.2em] text-[#c8b89a]">
                            <span class="h-px w-4 bg-[#c8b89a]"></span>
                            <span>Sourcing & Procurement</span>
                        </div>

                        <p class="text-xs font-light leading-relaxed text-white/50 sm:text-sm">
                            Specifications, quantities, and availability for this item can be customized to your project's precise scope. Our procurement team coordinates directly with primary suppliers and global partners for institutional and government fulfillment.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </main>

    {{-- Footer --}}
    <x-public.footer />

    {{-- Product image gallery / carousel --}}
    <script>
        window.__productGalleries = window.__productGalleries || {};

        window.__productGalleries['{{ $product['code'] }}'] = {
            images: @json($galleryImages),
            index: 0,
        };

        // Helpful console note if the carousel has nothing to cycle through.
        // If you see this, add an `image` key to each brand in $product['brands'].
        if (window.__productGalleries['{{ $product['code'] }}'].images.length <= 1) {
            console.warn(
                '[product gallery] Only ' +
                window.__productGalleries['{{ $product['code'] }}'].images.length +
                ' image(s) found for product {{ $product['code'] }}. ' +
                'Arrows/dots stay hidden and brand chips will not switch images ' +
                'until each brand in $product["brands"] has its own "image" key.'
            );
        }

        function setProductGalleryIndex(code, index) {
            const gallery = window.__productGalleries[code];
            if (!gallery || !gallery.images.length) return;

            const total = gallery.images.length;
            gallery.index = ((index % total) + total) % total;

            const image = gallery.images[gallery.index];
            const imgEl = document.getElementById('product-main-image-' + code);
            const fallbackEl = document.getElementById('fallback-' + code);

            if (imgEl && image) {
                imgEl.style.opacity = '0';
                window.setTimeout(function () {
                    imgEl.src = image.src;
                    imgEl.alt = image.label;
                    imgEl.style.display = '';
                    if (fallbackEl) {
                        fallbackEl.classList.add('hidden');
                        fallbackEl.classList.remove('flex');
                    }
                    imgEl.style.opacity = '1';
                }, 150);
            }

            // Sync dot indicators
            document.querySelectorAll('.gallery-dot[data-gallery-code="' + code + '"]').forEach(function (dot) {
                const dotIndex = parseInt(dot.getAttribute('data-gallery-index'), 10);
                if (dotIndex === gallery.index) {
                    dot.classList.add('w-6', 'bg-[#c8b89a]');
                    dot.classList.remove('w-1.5', 'bg-white/30');
                } else {
                    dot.classList.remove('w-6', 'bg-[#c8b89a]');
                    dot.classList.add('w-1.5', 'bg-white/30');
                }
            });

            // Sync active state on brand chips
            document.querySelectorAll('.brand-chip[data-gallery-code="' + code + '"]').forEach(function (chip) {
                const chipIndex = parseInt(chip.getAttribute('data-gallery-index'), 10);
                if (chipIndex === gallery.index) {
                    chip.classList.add('border-[#c8b89a]/50', 'bg-[#262626]/70');
                } else {
                    chip.classList.remove('border-[#c8b89a]/50', 'bg-[#262626]/70');
                }
            });
        }

        function productGalleryPrev(code) {
            const gallery = window.__productGalleries[code];
            if (!gallery) return;
            setProductGalleryIndex(code, gallery.index - 1);
        }

        function productGalleryNext(code) {
            const gallery = window.__productGalleries[code];
            if (!gallery) return;
            setProductGalleryIndex(code, gallery.index + 1);
        }

        // Single delegated click listener — avoids inline onclick attributes
        // (which can break on special characters in product codes, and are
        // blocked outright by stricter Content-Security-Policy setups).
        document.addEventListener('click', function (event) {
            const dot = event.target.closest('.gallery-dot[data-gallery-code]');
            if (dot) {
                setProductGalleryIndex(dot.getAttribute('data-gallery-code'), parseInt(dot.getAttribute('data-gallery-index'), 10));
                return;
            }

            const chip = event.target.closest('.brand-chip[data-gallery-code]');
            if (chip) {
                setProductGalleryIndex(chip.getAttribute('data-gallery-code'), parseInt(chip.getAttribute('data-gallery-index'), 10));
                return;
            }

            const prevBtn = event.target.closest('.js-gallery-prev[data-gallery-code]');
            if (prevBtn) {
                productGalleryPrev(prevBtn.getAttribute('data-gallery-code'));
                return;
            }

            const nextBtn = event.target.closest('.js-gallery-next[data-gallery-code]');
            if (nextBtn) {
                productGalleryNext(nextBtn.getAttribute('data-gallery-code'));
            }
        });
    </script>

</body>

</html>
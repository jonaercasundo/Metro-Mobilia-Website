<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ ucfirst($catalogType) }} Product Catalog — Metro Mobilia Corporation
    </title>

    <meta
        name="description"
        content="{{ ucfirst($catalogType) }} product catalog of Metro Mobilia Corporation."
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

    {{-- Navigation --}}
    <x-public.navbar />

    {{-- Main Content --}}
    <main>

        <section class="bg-[#1a1a1a] px-6 py-20 text-white lg:px-12 lg:py-28">

            <div class="mx-auto max-w-7xl">

                {{-- HEADER --}}
                <div class="max-w-3xl">

                    <div class="mb-5 flex items-center gap-3 text-[10px] uppercase tracking-[0.22em] text-white/35">

                        <span class="h-px w-8 bg-[#c8b89a]/60"></span>

                        {{ ucfirst($catalogType) }} Catalog

                    </div>

                    <div class="flex flex-wrap items-end gap-4">

                        <h1 class="font-serif text-4xl font-light leading-[1.1] md:text-5xl lg:text-6xl">

                            {{ ucfirst($catalogType) }}

                            <br>

                            <em class="text-[#c8b89a]">Products.</em>

                        </h1>

                        {{-- Catalog Type Badge --}}
                        <span class="mb-1 inline-flex border border-[#c8b89a]/30 px-3 py-1.5 text-[9px] uppercase tracking-[0.2em] text-[#c8b89a]">
                            {{ ucfirst($catalogType) }}
                        </span>

                    </div>

                    <p class="mt-7 max-w-2xl text-sm font-light leading-[1.9] text-white/40">

                        @if($catalogType === 'export')

                            Browse our export product range for schools,
                            government programs, and institutional procurement.

                        @else

                            Browse our import product range, including
                            furniture, storage, decorative accessories, and other
                            factory-direct products.

                        @endif

                    </p>

                </div>


                {{-- CATEGORY FILTER --}}
                <div class="mt-10 flex flex-wrap gap-3">

                    {{-- ALL PRODUCTS --}}
                    <a
                        href="{{ route('products.catalog', ['type' => $catalogType]) }}"
                        class="border px-4 py-2 text-[9px] uppercase tracking-[0.18em] transition
                            {{ !$activeCategory
                                ? 'border-[#c8b89a] bg-[#c8b89a] text-[#0d0d0d]'
                                : 'border-white/15 text-white/40 hover:border-[#c8b89a]/50 hover:text-[#c8b89a]'
                            }}"
                    >
                        All {{ ucfirst($catalogType) }} Products
                    </a>


                    {{-- CATEGORIES --}}
                    @foreach($categories as $category)

                        <a
                            href="{{ route('products.catalog', [
                                'type' => $catalogType,
                                'category' => $category
                            ]) }}"
                            class="border px-4 py-2 text-[9px] uppercase tracking-[0.18em] transition
                                {{ $activeCategory === $category
                                    ? 'border-[#c8b89a] bg-[#c8b89a] text-[#0d0d0d]'
                                    : 'border-white/15 text-white/40 hover:border-[#c8b89a]/50 hover:text-[#c8b89a]'
                                }}"
                        >
                            {{ $category }}
                        </a>

                    @endforeach

                </div>


                {{-- PRODUCT GRID --}}
                <div class="mt-12 grid gap-px overflow-hidden border border-white/10 bg-white/10 sm:grid-cols-2 lg:grid-cols-3">

                    @forelse($products as $product)

                        <div class="group relative flex flex-col bg-[#1a1a1a] transition duration-300 hover:bg-[#222]">

                            {{-- IMAGE --}}
                            <div class="relative aspect-[4/3] w-full overflow-hidden bg-[#222]">

                                @if(!empty($product['image']))

                                    <img
                                        src="{{ asset('images/' . $product['image']) }}"
                                        alt="{{ $product['name'] }}"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                        loading="lazy"
                                        onerror="this.remove(); document.getElementById('fallback-{{ $product['code'] }}').classList.remove('hidden');"
                                    >

                                    <div
                                        id="fallback-{{ $product['code'] }}"
                                        class="hidden h-full w-full items-center justify-center text-5xl text-[#c8b89a]/30"
                                    >
                                        {{ $product['icon'] }}
                                    </div>

                                @else

                                    <div class="flex h-full w-full items-center justify-center text-5xl text-[#c8b89a]/30">
                                        {{ $product['icon'] }}
                                    </div>

                                @endif


                                {{-- Icon badge --}}
                                <div class="absolute left-3 top-3 flex h-9 w-9 items-center justify-center border border-[#c8b89a]/25 bg-[#1a1a1a]/90 text-sm font-light text-[#c8b89a] backdrop-blur-sm transition duration-300 group-hover:border-[#c8b89a]/60">
                                    {{ $product['icon'] }}
                                </div>


                                {{-- Product number --}}
                                <span class="absolute bottom-2 right-3 font-serif text-4xl font-light leading-none text-white/20">
                                    {{ $product['number'] }}
                                </span>

                            </div>


                            {{-- DETAILS --}}
                            <div class="flex flex-1 flex-col p-8">

                                <div class="mb-3 flex items-center justify-between text-[9px] uppercase tracking-[0.18em] text-[#c8b89a]/60">

                                    <span>
                                        {{ $product['category'] }}
                                    </span>

                                    <span class="text-white/25">
                                        {{ $product['code'] }}
                                    </span>

                                </div>


                                <h2 class="font-serif text-2xl font-light text-white transition duration-300 group-hover:text-[#c8b89a]">

                                    {{ $product['name'] }}

                                </h2>


                                <p class="mt-4 max-w-sm text-xs font-light leading-[1.85] text-white/35">

                                    {{ $product['description'] }}

                                </p>


                                <div class="mt-auto flex items-center justify-between pt-8">

                                    <span class="text-[9px] uppercase tracking-[0.18em] text-white/20">

                                        {{ strtoupper($catalogType) }}

                                    </span>


                                    <a
                                        href="{{ route('products.show', $product['code']) }}"
                                        class="text-[9px] uppercase tracking-[0.18em] text-[#c8b89a]/70 transition hover:text-[#c8b89a]"
                                    >

                                        View Details →

                                    </a>

                                </div>

                            </div>


                            {{-- Hover line --}}
                            <div class="absolute bottom-0 left-0 h-[3px] w-full origin-left scale-x-0 bg-[#c8b89a] transition duration-500 group-hover:scale-x-100"></div>

                        </div>

                    @empty

                        <div class="col-span-full p-16 text-center text-sm font-light text-white/30">

                            No {{ $catalogType }} products found
                            @if($activeCategory)
                                in this category.
                            @else
                                .
                            @endif

                        </div>

                    @endforelse

                </div>


                {{-- BACK LINK --}}
                <div class="mt-12">

                    <a
                        href="{{ route('contact') }}"
                        class="group inline-flex items-center gap-4 border border-[#c8b89a]/30 px-5 py-3 text-[10px] uppercase tracking-[0.18em] text-[#c8b89a] transition duration-300 hover:border-[#c8b89a] hover:bg-[#c8b89a] hover:text-[#0d0d0d]"
                    >

                        <span>
                            Request Full {{ ucfirst($catalogType) }} Product List
                        </span>

                        <span class="transition-transform duration-300 group-hover:translate-x-1">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </section>

    </main>


    {{-- Footer --}}
    <x-public.footer />

</body>

</html>
@php
    /*
    |--------------------------------------------------------------------------
    | Current Division
    |--------------------------------------------------------------------------
    */

    $currentType = strtolower(
        $catalogType
        ?? request()->query('type')
        ?? (request()->routeIs('import') ? 'import' : 'export')
    );

    if (! in_array($currentType, ['import', 'export'], true)) {
        $currentType = 'export';
    }
@endphp

<section id="products" class="bg-[#1a1a1a] px-6 py-20 text-white lg:px-12 lg:py-28">

    <div class="mx-auto max-w-7xl">

        {{-- HEADER --}}
        <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">

            <div class="max-w-3xl">

                <div class="mb-5 flex items-center gap-3 text-[10px] uppercase tracking-[0.22em] text-white/35">
                    <span class="h-px w-8 bg-[#c8b89a]/60"></span>
                    What We Supply
                </div>

                <h1 class="font-serif text-4xl font-light leading-[1.1] md:text-5xl lg:text-6xl">
                    Furniture &
                    <br>
                    <em class="text-[#c8b89a]">Collections.</em>
                </h1>

                <p class="mt-7 max-w-2xl text-sm font-light leading-[1.9] text-white/40">
                    We design and manufacture a full range of home furniture —
                    from living and dining to bedroom and outdoor — supplied
                    factory-direct from our showrooms in Shenzhen and Ho Chi Minh City.
                </p>

            </div>

           {{-- FULL CATALOG CTA --}}
            <div class="shrink-0">
                <a
                    href="{{ route('products.catalog', ['type' => $currentType]) }}"
                    class="group inline-flex items-center gap-4 border border-[#c8b89a]/30 px-5 py-3 text-[10px] uppercase tracking-[0.18em] text-[#c8b89a] transition duration-300 hover:border-[#c8b89a] hover:bg-[#c8b89a] hover:text-[#0d0d0d]"
                >
                    <span>View Full {{ ucfirst($currentType) }} Catalog</span>

                    <span class="transition-transform duration-300 group-hover:translate-x-1">
                        →
                    </span>
                </a>
            </div>

        </div>


        {{-- ============================================================
            PRODUCT GRID
        ============================================================= --}}

        <div class="mt-14 grid gap-px overflow-hidden border border-white/10 bg-white/10 sm:grid-cols-2 lg:grid-cols-3">

            @forelse($products as $index => $product)

                <a
                    href="{{ route('products.show', $product['code']) }}"
                    class="group relative block min-h-[300px] bg-[#1a1a1a] p-8 transition duration-300 hover:bg-[#222]"
                >

                    {{-- Top row --}}
                    <div class="flex items-start justify-between">

                        <div
                            class="flex h-12 w-12 items-center justify-center border border-[#c8b89a]/25 text-xl font-light text-[#c8b89a] transition duration-300 group-hover:border-[#c8b89a]/60"
                        >
                            {{ $product['icon'] ?? '◇' }}
                        </div>

                        <span
                            class="font-serif text-5xl font-light leading-none text-white/[0.04] transition duration-300 group-hover:text-white/[0.08]"
                        >
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                    </div>


                    {{-- Product information --}}
                    <div class="mt-12">

                        <div
                            class="mb-3 flex items-center justify-between text-[9px] uppercase tracking-[0.18em] text-[#c8b89a]/60"
                        >

                            <span>
                                {{ ucfirst($currentType) }} Product
                            </span>

                            <span class="text-white/25">
                                {{ $product['code'] }}
                            </span>

                        </div>

                        <h2
                            class="font-serif text-2xl font-light text-white transition duration-300 group-hover:text-[#c8b89a]"
                        >
                            {{ $product['name'] }}
                        </h2>

                        <p class="mt-4 max-w-sm text-xs font-light leading-[1.85] text-white/35">
                            {{ $product['description'] }}
                        </p>

                    </div>


                    {{-- Bottom --}}
                    <div class="absolute bottom-7 left-8 right-8 flex items-center justify-between">

                        <span class="text-[9px] uppercase tracking-[0.18em] text-white/20">
                            Metro Mobilia
                        </span>

                        <span
                            class="text-[9px] uppercase tracking-[0.18em] text-[#c8b89a]/70 transition duration-300 group-hover:text-[#c8b89a]"
                        >
                            View Details →
                        </span>

                    </div>


                    {{-- Hover accent --}}
                    <div
                        class="absolute bottom-0 left-0 h-[3px] w-full origin-left scale-x-0 bg-[#c8b89a] transition duration-500 group-hover:scale-x-100"
                    ></div>

                </a>

            @empty

                <div class="col-span-full bg-[#1a1a1a] px-8 py-16 text-center">

                    <p class="text-xs uppercase tracking-[0.18em] text-white/30">
                        No {{ $currentType }} products available.
                    </p>

                </div>

            @endforelse

        </div>


        {{-- FOOTNOTE --}}
        <div class="mt-6 flex flex-col gap-2 text-[9px] uppercase tracking-[0.16em] text-white/20 sm:flex-row sm:items-center sm:justify-between">

            <span>
                Metro Mobilia Corporation
            </span>

            <span>
                Furniture · Sourcing · Home & Living
            </span>

        </div>

    </div>

</section>
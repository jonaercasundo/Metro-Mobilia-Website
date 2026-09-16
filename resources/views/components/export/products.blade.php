
        @php
            $products = [
                [
                    'number' => '01',
                    'name' => 'School Furniture',
                    'description' => 'Durable classroom furniture designed for schools, government programs, and educational institutions.',
                    'icon' => '▣',
                ],
                [
                    'number' => '02',
                    'name' => 'IT Equipment',
                    'description' => 'Laptops, tablets, computers, and technology equipment for education and government requirements.',
                    'icon' => '⌘',
                ],
                [
                    'number' => '03',
                    'name' => 'Math & Science Kits',
                    'description' => 'Educational laboratory equipment, science kits, and learning materials for modern classrooms.',
                    'icon' => '◇',
                ],
                [
                    'number' => '04',
                    'name' => 'Textbooks',
                    'description' => 'Educational books and learning resources supporting curriculum and institutional requirements.',
                    'icon' => '▤',
                ],
                [
                    'number' => '05',
                    'name' => 'Manipulative Toys',
                    'description' => 'Hands-on educational materials designed to support early learning and classroom development.',
                    'icon' => '○',
                ],
                [
                    'number' => '06',
                    'name' => 'Other Supplies',
                    'description' => 'Additional procurement categories sourced according to agency specifications and project requirements.',
                    'icon' => '+',
                ],
            ];
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
                            Products &
                            <br>
                            <em class="text-[#c8b89a]">Solutions.</em>
                        </h1>

                        <p class="mt-7 max-w-2xl text-sm font-light leading-[1.9] text-white/40">
                            We source and supply a range of educational, technology,
                            furniture, and institutional products to support government
                            programs, schools, and organizations nationwide.
                        </p>

                    </div>


                    {{-- PRODUCT LIST CTA --}}
                    <div class="shrink-0">

                        <a
                            href="{{ route('contact') }}"
                            class="group inline-flex items-center gap-4 border border-[#c8b89a]/30 px-5 py-3 text-[10px] uppercase tracking-[0.18em] text-[#c8b89a] transition duration-300 hover:border-[#c8b89a] hover:bg-[#c8b89a] hover:text-[#0d0d0d]"
                        >
                            <span>
                                Request Product List
                            </span>

                            <span class="transition-transform duration-300 group-hover:translate-x-1">
                                →
                            </span>
                        </a>

                    </div>

                </div>


                {{-- PRODUCT GRID --}}
                <div class="mt-14 grid gap-px overflow-hidden border border-white/10 bg-white/10 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach($products as $product)

                        <div class="group relative min-h-[300px] bg-[#1a1a1a] p-8 transition duration-300 hover:bg-[#222]">

                            {{-- Top row --}}
                            <div class="flex items-start justify-between">

                                <div class="flex h-12 w-12 items-center justify-center border border-[#c8b89a]/25 text-xl font-light text-[#c8b89a] transition duration-300 group-hover:border-[#c8b89a]/60">
                                    {{ $product['icon'] }}
                                </div>

                                <span class="font-serif text-5xl font-light leading-none text-white/[0.04] transition duration-300 group-hover:text-white/[0.08]">
                                    {{ $product['number'] }}
                                </span>

                            </div>


                            {{-- Product information --}}
                            <div class="mt-12">

                                <div class="mb-3 text-[9px] uppercase tracking-[0.18em] text-[#c8b89a]/60">
                                    Product Category
                                </div>

                                <h2 class="font-serif text-2xl font-light text-white transition duration-300 group-hover:text-[#c8b89a]">
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

                                <a
                                    href="{{ route('contact') }}"
                                    class="text-[9px] uppercase tracking-[0.18em] text-[#c8b89a]/70 transition hover:text-[#c8b89a]"
                                >
                                    Inquire →
                                </a>

                            </div>


                            {{-- Hover accent --}}
                            <div class="absolute bottom-0 left-0 h-[3px] w-full origin-left scale-x-0 bg-[#c8b89a] transition duration-500 group-hover:scale-x-100"></div>

                        </div>

                    @endforeach

                </div>


                {{-- SOURCING STATEMENT --}}
                <div class="mt-12 grid gap-px border border-white/10 bg-white/10 md:grid-cols-[1fr_auto]">

                    <div class="bg-[#222] p-7 md:p-8">

                        <div class="mb-4 flex items-center gap-3 text-[9px] uppercase tracking-[0.2em] text-white/30">
                            <span class="h-px w-6 bg-[#c8b89a]/60"></span>
                            Sourcing & Procurement
                        </div>

                        <p class="max-w-3xl text-sm font-light leading-[1.8] text-white/45">
                            Product availability and specifications may vary depending
                            on project requirements. Our team works with manufacturers,
                            suppliers, and sourcing partners to identify products that
                            meet the required specifications.
                        </p>

                    </div>


                    <div class="flex items-center bg-[#222] p-7 md:p-8">

                        <a
                            href="{{ route('contact') }}"
                            class="group inline-flex items-center gap-4 border border-[#c8b89a]/30 px-5 py-3 text-[10px] uppercase tracking-[0.18em] text-[#c8b89a] transition duration-300 hover:border-[#c8b89a] hover:bg-[#c8b89a] hover:text-[#0d0d0d]"
                        >
                            <span>
                                Discuss Your Requirements
                            </span>

                            <span class="transition-transform duration-300 group-hover:translate-x-1">
                                →
                            </span>
                        </a>

                    </div>

                </div>


                {{-- FOOTNOTE --}}
                <div class="mt-6 flex flex-col gap-2 text-[9px] uppercase tracking-[0.16em] text-white/20 sm:flex-row sm:items-center sm:justify-between">

                    <span>
                        Metro Mobilia Corporation
                    </span>

                    <span>
                        Education · Technology · Procurement
                    </span>

                </div>

            </div>

        </section>


        <section id="about" class="bg-[#f5f3ee] px-6 py-20 lg:px-12 lg:py-28">

            <div class="mx-auto grid max-w-7xl items-start gap-14 lg:grid-cols-2 lg:gap-20">

                {{-- =====================================================
                    CONTENT
                ====================================================== --}}
                <div>

                    {{-- Section Label --}}
                    <div
                        class="mb-5 flex items-center gap-3
                            text-[10px] uppercase
                            tracking-[0.22em] text-black/45"
                    >
                        <span class="h-px w-8 bg-[#c8b89a]"></span>

                        Who We Are
                    </div>


                    {{-- Heading --}}
                    <h1
                        class="font-serif text-4xl font-light
                            leading-[1.1] text-[#0d0d0d]
                            md:text-5xl lg:text-6xl"
                    >
                        Built on Compliance.
                        <br>

                        <em class="text-[#a08060]">
                            Driven by Quality.
                        </em>
                    </h1>


                    {{-- Introduction --}}
                    <p
                        class="mt-7 max-w-2xl
                            text-sm font-light
                            leading-[1.9] text-[#555]"
                    >
                        Metro Mobilia Corporation is a SEC, BIR, and PhilGEPS
                        Platinum-registered trading company specializing in
                        government procurement. We partner directly with
                        international manufacturers and factories to guarantee
                        quality at the source — backed by rigorous third-party
                        testing before every delivery.
                    </p>


                    {{-- Headquarters --}}
                    <p
                        class="mt-5 max-w-2xl
                            text-sm font-light
                            leading-[1.9] text-[#555]"
                    >
                        Our headquarters is located at the 15th Floor, Asian Star
                        Building, Filinvest City, Alabang — where our team manages
                        procurement, quality assurance, and client coordination
                        for projects nationwide.
                    </p>


                    {{-- =================================================
                        CREDENTIALS
                    ================================================== --}}
                    <div class="mt-10">

                        <div
                            class="mb-4 text-[10px] uppercase
                                tracking-[0.2em] text-black/40"
                        >
                            Our Credentials
                        </div>


                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                            @foreach([
                                ['PhilGEPS Platinum', 'Registered Member'],
                                ['FDA-LTO', 'Medical & Cosmetics'],
                                ['NTC GEC License', 'Laptops & Tablets'],
                                ['Bureau of Customs', 'Import Authority'],
                                ["Dealer's Permit", 'Licensed Dealer'],
                                ['Trademark Registered', 'IP Protected Brand'],
                            ] as [$name, $detail])

                                <div
                                    class="relative overflow-hidden
                                        border border-black/10
                                        bg-white px-5 py-4
                                        transition
                                        hover:border-[#c8b89a]"
                                >

                                    {{-- Accent Line --}}
                                    <div
                                        class="absolute bottom-0 left-0 top-0
                                            w-[3px] bg-[#c8b89a]"
                                    ></div>


                                    {{-- Credential Name --}}
                                    <div
                                        class="text-xs font-medium
                                            tracking-wide text-[#0d0d0d]"
                                    >
                                        {{ $name }}
                                    </div>


                                    {{-- Credential Detail --}}
                                    <div
                                        class="mt-1 text-[11px]
                                            text-black/45"
                                    >
                                        {{ $detail }}
                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>


                {{-- =====================================================
                    OFFICE IMAGES
                ====================================================== --}}
                <div>

                    {{-- Main Image --}}
                    <div
                        class="group relative h-80
                            overflow-hidden bg-[#222]
                            lg:h-[420px]"
                    >

                        <img
                            src="{{ asset('images/import1.jpg') }}"
                            alt="Metro Mobilia Corporation office reception"
                            class="h-full w-full object-cover
                                opacity-85 transition duration-700
                                group-hover:scale-105"
                        >

                        {{-- Image Overlay --}}
                        <div
                            class="pointer-events-none absolute inset-0
                                bg-gradient-to-t
                                from-black/30 via-transparent to-transparent"
                        ></div>

                    </div>


                    {{-- Secondary Images --}}
                    <div class="mt-2 grid grid-cols-2 gap-2">

                        <div
                            class="group relative h-40
                                overflow-hidden bg-[#2e2e2e]"
                        >

                            <img
                                src="{{ asset('images/import2.jpg') }}"
                                alt="Metro Mobilia Corporation office"
                                class="h-full w-full object-cover
                                    opacity-80 transition duration-700
                                    group-hover:scale-105"
                            >

                        </div>


                        <div
                            class="group relative h-40
                                overflow-hidden bg-[#2e2e2e]"
                        >

                            <img
                                src="{{ asset('images/import3.jpg') }}"
                                alt="Metro Mobilia Corporation operations"
                                class="h-full w-full object-cover
                                    opacity-80 transition duration-700
                                    group-hover:scale-105"
                            >

                        </div>

                    </div>


                    {{-- Image Caption --}}
                    <div
                        class="mt-4 flex items-center justify-between
                            border-t border-black/10 pt-4"
                    >

                        <span
                            class="text-[9px] uppercase
                                tracking-[0.18em] text-black/40"
                        >
                            Metro Mobilia Corporation
                        </span>

                        <span
                            class="text-[9px] uppercase
                                tracking-[0.18em] text-black/30"
                        >
                            Alabang, Philippines
                        </span>

                    </div>

                </div>

            </div>

        </section>

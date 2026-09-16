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
                        Trusted Makers.
                        <br>

                        <em class="text-[#a08060]">
                            Global Reach.
                        </em>
                    </h1>


                    {{-- Introduction --}}
                    <p
                        class="mt-7 max-w-2xl
                            text-sm font-light
                            leading-[1.9] text-[#555]"
                    >
                        Metro Mobilia Export is a home furniture manufacturer with showrooms in China and Vietnam. We design and produce living, dining, and bedroom furniture — built with lasting materials and finished to satisfy the most discerning buyers worldwide.
                    </p>


                    {{-- Headquarters --}}
                    <p
                        class="mt-5 max-w-2xl
                            text-sm font-light
                            leading-[1.9] text-[#555]"
                    >
                        Our showrooms in Shenzhen and Ho Chi Minh City let buyers experience our collections in person — touching the materials, reviewing the finishes, and specifying every detail before a single piece enters production.
                    </p>


                    {{-- =================================================
                        CREDENTIALS
                    ================================================== --}}


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
                            src="{{ asset('images/MI_1.jpg') }}"
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
                                src="{{ asset('images/MI_2.jpg') }}"
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
                                src="{{ asset('images/MI_3.jpg') }}"
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
                            Ho chi min Vietnam
                        </span>

                        <span
                            class="text-[9px] uppercase
                                tracking-[0.18em] text-black/30"
                        >
                            Shenzhen China
                        </span>

                    </div>

                </div>

            </div>

        </section>

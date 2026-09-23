
        <section id="warehouse" class="bg-[#ede9e1] px-6 py-20 lg:px-12 lg:py-28">

            <div class="mx-auto max-w-7xl">

                {{-- HEADER --}}
                <div class="max-w-3xl">

                    <div class="mb-5 flex items-center gap-3 text-[10px] uppercase tracking-[0.22em] text-black/45">
                        <span class="h-px w-8 bg-[#c8b89a]"></span>
                        Our Operations
                    </div>

                    <h1 class="font-serif text-4xl font-light leading-[1.1] text-[#0d0d0d] md:text-5xl lg:text-6xl">
                        Built for
                        <br>
                        <em class="text-[#a08060]">Nationwide</em> Delivery.
                    </h1>

                    <p class="mt-7 max-w-2xl text-sm font-light leading-[1.9] text-[#555]">
                        Our procurement, warehouse, and logistics operations are structured
                        to support large-scale government and institutional requirements,
                        from sourcing and quality assurance through final delivery.
                    </p>

                </div>


                {{-- MAIN CONTENT --}}
                <div class="mt-14 grid items-stretch gap-3 lg:grid-cols-[1.15fr_0.85fr]">

                    {{-- IMAGE CAROUSEL --}}
                    <div
                        x-data="{
                            active: 0,
                            images: [
                                {
                                    src: '{{ asset('images/warehouse_01.jpg') }}',
                                    alt: 'Metro Mobilia warehouse operations',
                                    label: 'Operations',
                                    caption: 'Reliable logistics, organized inventory, and coordinated delivery supporting projects across the Philippines.'
                                },
                                {
                                    src: '{{ asset('images/warehouse_02.jpg') }}',
                                    alt: 'Metro Mobilia Quality Assurance',
                                    label: 'Quality Assurance',
                                    caption: 'Organized inventory  management ensuring products are prepared and available for every project.'
                                },
                                {
                                    src: '{{ asset('images/warehouse_03.jpg') }}',
                                    alt: 'Metro Mobilia Inventory Coordination',
                                    label: 'Inventory Coordination',
                                    caption: 'Organized inventory management ensuring products are prepared and available for every project.'
                                },
                            ],
                            autoplay: null,

                            startAutoplay() {
                                this.autoplay = setInterval(() => {
                                    this.next()
                                }, 5000)
                            },

                            stopAutoplay() {
                                clearInterval(this.autoplay)
                            },

                            next() {
                                this.active = (this.active + 1) % this.images.length
                            },

                            previous() {
                                this.active =
                                    (this.active - 1 + this.images.length) % this.images.length
                            }
                        }"
                        x-init="startAutoplay()"
                        @mouseenter="stopAutoplay()"
                        @mouseleave="startAutoplay()"
                        class="group relative min-h-[460px] overflow-hidden bg-[#222]"
                     >
                        {{-- Images --}}
                        <template x-for="(image, index) in images" :key="index">

                            <div
                                x-show="active === index"
                                x-transition:enter="transition-opacity duration-700"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition-opacity duration-700"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                class="absolute inset-0"
                            >

                                <img
                                    :src="image.src"
                                    :alt="image.alt"
                                    class="h-full w-full object-cover opacity-80 transition duration-700 group-hover:scale-105"
                                >

                                {{-- Overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/10 to-transparent"></div>

                                {{-- Image Label --}}
                                <div class="absolute left-7 top-7 border border-white/20 bg-black/20 px-3 py-2 backdrop-blur-sm">
                                    <span
                                        x-text="image.label"
                                        class="text-[9px] uppercase tracking-[0.18em] text-white/60"
                                    ></span>
                                </div>

                                {{-- Image Caption --}}
                                <div class="absolute bottom-0 left-0 right-0 p-7 lg:p-9">

                                    <div class="mb-3 flex items-center gap-3">
                                        <span class="h-px w-7 bg-[#c8b89a]"></span>

                                        <span class="text-[9px] uppercase tracking-[0.18em] text-white/50">
                                            Metro Mobilia Corporation
                                        </span>
                                    </div>

                                    <p
                                        x-text="image.caption"
                                        class="max-w-lg font-serif text-lg font-light italic leading-[1.6] text-white/75"
                                    ></p>

                                </div>

                            </div>

                        </template>


                        {{-- Previous Button --}}
                        <button
                            type="button"
                            @click="previous()"
                            aria-label="Previous image"
                            class="absolute left-5 top-1/2 z-20 -translate-y-1/2
                                border border-white/20 bg-black/20 p-3
                                text-white/70 backdrop-blur-sm
                                transition hover:border-white/40 hover:bg-black/40 hover:text-white"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 19l-7-7 7-7"
                                />
                            </svg>
                        </button>


                        {{-- Next Button --}}
                        <button
                            type="button"
                            @click="next()"
                            aria-label="Next image"
                            class="absolute right-5 top-1/2 z-20 -translate-y-1/2
                                border border-white/20 bg-black/20 p-3
                                text-white/70 backdrop-blur-sm
                                transition hover:border-white/40 hover:bg-black/40 hover:text-white"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 5l7 7-7 7"
                                />
                            </svg>
                        </button>


                        {{-- Carousel Indicators --}}
                        <div class="absolute bottom-7 right-7 z-20 flex items-center gap-2">

                            <template x-for="(image, index) in images" :key="index">

                                <button
                                    type="button"
                                    @click="active = index"
                                    :aria-label="'Go to image ' + (index + 1)"
                                    :class="active === index
                                        ? 'w-8 bg-[#c8b89a]'
                                        : 'w-2 bg-white/40 hover:bg-white/70'"
                                    class="h-1.5 rounded-full transition-all duration-500"
                                ></button>

                            </template>

                        </div>

                    </div>


                    {{-- OPERATIONS CONTENT --}}
                    <div class="flex flex-col border border-black/10 bg-white">

                        <div class="p-7 sm:p-9">

                            <div class="text-[9px] uppercase tracking-[0.2em] text-black/35">
                                Operational Capability
                            </div>

                            <h2 class="mt-3 font-serif text-2xl font-light text-[#0d0d0d]">
                                From sourcing to delivery.
                            </h2>

                            <p class="mt-5 text-sm font-light leading-[1.85] text-[#555]">
                                We coordinate directly with manufacturers, logistics
                                partners, testing laboratories, and client agencies to
                                help ensure that every project moves according to
                                specification and schedule.
                            </p>

                        </div>


                        {{-- CAPABILITIES --}}
                        <div class="border-t border-black/10">

                            <div class="group border-b border-black/10 p-6 transition hover:bg-[#f5f3ee]">

                                <div class="flex gap-4">

                                    <span class="font-serif text-xl font-light text-[#c8b89a]">
                                        01
                                    </span>

                                    <div>
                                        <h3 class="text-sm font-medium text-[#0d0d0d]">
                                            Procurement & Sourcing
                                        </h3>

                                        <p class="mt-1 text-[11px] leading-[1.7] text-black/40">
                                            Coordinated sourcing through manufacturers and
                                            supply partners according to project requirements.
                                        </p>
                                    </div>

                                </div>

                            </div>


                            <div class="group border-b border-black/10 p-6 transition hover:bg-[#f5f3ee]">

                                <div class="flex gap-4">

                                    <span class="font-serif text-xl font-light text-[#c8b89a]">
                                        02
                                    </span>

                                    <div>
                                        <h3 class="text-sm font-medium text-[#0d0d0d]">
                                            Quality Assurance
                                        </h3>

                                        <p class="mt-1 text-[11px] leading-[1.7] text-black/40">
                                            Quality-control processes supporting product
                                            specifications and project requirements.
                                        </p>
                                    </div>

                                </div>

                            </div>


                            <div class="group border-b border-black/10 p-6 transition hover:bg-[#f5f3ee]">

                                <div class="flex gap-4">

                                    <span class="font-serif text-xl font-light text-[#c8b89a]">
                                        03
                                    </span>

                                    <div>
                                        <h3 class="text-sm font-medium text-[#0d0d0d]">
                                            Inventory Coordination
                                        </h3>

                                        <p class="mt-1 text-[11px] leading-[1.7] text-black/40">
                                            Organized handling and coordination of products
                                            before project deployment and delivery.
                                        </p>
                                    </div>

                                </div>

                            </div>


                            <div class="group p-6 transition hover:bg-[#f5f3ee]">

                                <div class="flex gap-4">

                                    <span class="font-serif text-xl font-light text-[#c8b89a]">
                                        04
                                    </span>

                                    <div>
                                        <h3 class="text-sm font-medium text-[#0d0d0d]">
                                            Nationwide Delivery
                                        </h3>

                                        <p class="mt-1 text-[11px] leading-[1.7] text-black/40">
                                            Coordinated logistics supporting deliveries for
                                            government and institutional projects nationwide.
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- CTA --}}
                <div class="mt-12 flex flex-col gap-6 border-t border-black/10 pt-8 sm:flex-row sm:items-center sm:justify-between">

                    <div>

                        <div class="text-[9px] uppercase tracking-[0.2em] text-black/30">
                            Have a project requirement?
                        </div>

                        <div class="mt-2 text-sm font-light text-[#555]">
                            Talk to our procurement team about your delivery requirements.
                        </div>

                    </div>

                    <a
                        href="{{ route('contact') }}"
                        class="group inline-flex items-center justify-center gap-4 border border-black/15 px-6 py-3 text-[10px] uppercase tracking-[0.18em] text-[#0d0d0d] transition duration-300 hover:border-[#0d0d0d] hover:bg-[#0d0d0d] hover:text-white"
                    >
                        <span>
                            Contact Us
                        </span>

                        <span class="transition-transform duration-300 group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                </div>

            </div>

        </section>

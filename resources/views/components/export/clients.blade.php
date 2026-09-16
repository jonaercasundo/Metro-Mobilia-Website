
        @php
            $clients = [
                [
                    'type' => 'Government',
                    'name' => 'Government Agencies',
                    'description' => 'Supporting national and local government procurement requirements through reliable sourcing, documentation, and coordinated delivery.',
                ],
                [
                    'type' => 'Education',
                    'name' => 'Public Schools',
                    'description' => 'Furniture, IT equipment, and educational materials supporting schools and large-scale government education programs nationwide.',
                ],
                [
                    'type' => 'Institution',
                    'name' => 'Private Institutions',
                    'description' => 'Procurement and sourcing solutions for private organizations, educational institutions, and operational requirements.',
                ],
                [
                    'type' => 'Education',
                    'name' => 'School Systems',
                    'description' => 'Large-scale educational supply programs covering classroom furniture, equipment, technology, and related requirements.',
                ],
                [
                    'type' => 'Government',
                    'name' => 'LGUs',
                    'description' => 'Procurement support for local government units, community programs, and public-sector requirements.',
                ],
                [
                    'type' => 'Corporate',
                    'name' => 'Corporate Clients',
                    'description' => 'Specialized sourcing, supply, and fulfillment solutions tailored to corporate procurement requirements.',
                ],
            ];
        @endphp

        <section id="clients" class="bg-[#0d0d0d] px-6 py-20 text-white lg:px-12 lg:py-28">

            <div class="mx-auto max-w-7xl">

                {{-- HEADER --}}
                <div class="max-w-3xl">

                    <div class="mb-5 flex items-center gap-3 text-[10px] uppercase tracking-[0.22em] text-white/35">
                        <span class="h-px w-8 bg-[#c8b89a]/60"></span>
                        Who We Serve
                    </div>

                    <h1 class="font-serif text-4xl font-light leading-[1.1] md:text-5xl lg:text-6xl">
                        Trusted by
                        <br>
                        <em class="text-[#c8b89a]">Institutions.</em>
                    </h1>

                    <p class="mt-7 max-w-2xl text-sm font-light leading-[1.9] text-white/45">
                        Metro Mobilia Corporation works with government agencies, schools,
                        institutions, local government units, and corporate organizations
                        across the Philippines — providing dependable procurement,
                        sourcing, and delivery solutions.
                    </p>

                </div>


                {{-- CLIENT GRID --}}
                <div class="mt-14 grid gap-px overflow-hidden border border-white/10 bg-white/10 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach($clients as $client)

                        <div class="group relative min-h-[230px] bg-[#0d0d0d] p-7 transition duration-300 hover:bg-[#141414]">

                            {{-- Accent line --}}
                            <div class="absolute left-0 top-0 h-px w-0 bg-[#c8b89a] transition-all duration-500 group-hover:w-full"></div>

                            {{-- Number --}}
                            <div class="mb-8 flex items-center justify-between">

                                <span class="text-[10px] font-medium tracking-[0.2em] text-white/20">
                                    {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                <span class="border border-[#c8b89a]/20 bg-[#c8b89a]/5 px-2.5 py-1 text-[9px] uppercase tracking-[0.18em] text-[#c8b89a]">
                                    {{ $client['type'] }}
                                </span>

                            </div>

                            <h2 class="font-serif text-2xl font-light text-white transition duration-300 group-hover:text-[#c8b89a]">
                                {{ $client['name'] }}
                            </h2>

                            <p class="mt-3 max-w-sm text-xs font-light leading-[1.8] text-white/35">
                                {{ $client['description'] }}
                            </p>

                            {{-- Bottom indicator --}}
                            <div class="absolute bottom-7 left-7 flex items-center gap-2 text-[8px] uppercase tracking-[0.18em] text-white/20 transition group-hover:text-white/40">
                                <span class="h-px w-5 bg-[#c8b89a]/40"></span>
                                Metro Mobilia
                            </div>

                        </div>

                    @endforeach

                </div>


                {{-- SERVICE PROMISE --}}
                <div class="mt-16 border-t border-white/10 pt-10">

                    <div class="mb-8 max-w-2xl">

                        <div class="text-[10px] uppercase tracking-[0.2em] text-white/30">
                            Our Service Commitment
                        </div>

                        <p class="mt-3 text-sm font-light leading-[1.8] text-white/45">
                            From sourcing and compliance to quality assurance and nationwide
                            delivery, our procurement process is structured to support the
                            requirements of every client we serve.
                        </p>

                    </div>


                    {{-- SERVICE CARDS --}}
                    <div class="grid gap-3 md:grid-cols-3">

                        <div class="group border border-white/10 bg-white/[0.02] p-7 transition duration-300 hover:border-[#c8b89a]/40 hover:bg-white/[0.04]">

                            <div class="mb-6 flex items-center justify-between">
                                <span class="text-[9px] uppercase tracking-[0.18em] text-white/30">
                                    01
                                </span>

                                <span class="h-px w-8 bg-[#c8b89a]/40"></span>
                            </div>

                            <div class="text-[9px] uppercase tracking-[0.18em] text-[#c8b89a]/70">
                                Quality
                            </div>

                            <h3 class="mt-2 text-base font-medium text-white/80">
                                Third-Party Testing
                            </h3>

                            <p class="mt-2 text-[11px] leading-[1.7] text-white/30">
                                Products are supported by verification and quality-control
                                processes before delivery.
                            </p>

                        </div>


                        <div class="group border border-white/10 bg-white/[0.02] p-7 transition duration-300 hover:border-[#c8b89a]/40 hover:bg-white/[0.04]">

                            <div class="mb-6 flex items-center justify-between">
                                <span class="text-[9px] uppercase tracking-[0.18em] text-white/30">
                                    02
                                </span>

                                <span class="h-px w-8 bg-[#c8b89a]/40"></span>
                            </div>

                            <div class="text-[9px] uppercase tracking-[0.18em] text-[#c8b89a]/70">
                                Logistics
                            </div>

                            <h3 class="mt-2 text-base font-medium text-white/80">
                                Nationwide Delivery
                            </h3>

                            <p class="mt-2 text-[11px] leading-[1.7] text-white/30">
                                Coordinated logistics and fulfillment supporting projects
                                across the Philippines.
                            </p>

                        </div>


                        <div class="group border border-white/10 bg-white/[0.02] p-7 transition duration-300 hover:border-[#c8b89a]/40 hover:bg-white/[0.04]">

                            <div class="mb-6 flex items-center justify-between">
                                <span class="text-[9px] uppercase tracking-[0.18em] text-white/30">
                                    03
                                </span>

                                <span class="h-px w-8 bg-[#c8b89a]/40"></span>
                            </div>

                            <div class="text-[9px] uppercase tracking-[0.18em] text-[#c8b89a]/70">
                                Procurement
                            </div>

                            <h3 class="mt-2 text-base font-medium text-white/80">
                                Government Ready
                            </h3>

                            <p class="mt-2 text-[11px] leading-[1.7] text-white/30">
                                Structured to support government procurement requirements
                                and PhilGEPS-related transactions.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- CTA --}}
                <div class="mt-16 flex flex-col justify-between gap-6 border-t border-white/10 pt-8 sm:flex-row sm:items-center">

                    <div>
                        <div class="text-[9px] uppercase tracking-[0.2em] text-white/25">
                            Looking for a procurement partner?
                        </div>

                        <div class="mt-2 text-sm font-light text-white/60">
                            Let's discuss your requirements.
                        </div>
                    </div>

                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center border border-[#c8b89a]/40 px-6 py-3 text-[10px] uppercase tracking-[0.18em] text-[#c8b89a] transition hover:bg-[#c8b89a] hover:text-[#0d0d0d]"
                    >
                        Contact Us
                    </a>

                </div>

            </div>

        </section>

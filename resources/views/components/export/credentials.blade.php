
        @php
            $credentials = [
                [
                    'abbr' => 'SEC',
                    'full' => 'Securities & Exchange Commission',
                    'type' => 'Registered Corporation',
                ],
                [
                    'abbr' => 'BIR',
                    'full' => 'Bureau of Internal Revenue',
                    'type' => 'Tax Compliant · Tax Clearance Certified',
                ],
                [
                    'abbr' => 'FDA',
                    'full' => 'Food & Drug Administration',
                    'type' => 'LTO – Medical Devices & Cosmetics',
                ],
                [
                    'abbr' => 'NTC',
                    'full' => 'National Telecommunications Commission',
                    'type' => 'GEC License – Laptops & Tablets',
                ],
                [
                    'abbr' => 'PhilGEPS',
                    'full' => "Philippine Gov't Electronic Procurement",
                    'type' => 'Platinum Member',
                ],
                [
                    'abbr' => 'BOC',
                    'full' => 'Bureau of Customs',
                    'type' => 'Authority to Import',
                ],
                [
                    'abbr' => 'IPO',
                    'full' => 'Intellectual Property Office',
                    'type' => 'Trademark Registered',
                ],
                [
                    'abbr' => 'Mayor',
                    'full' => 'City of Muntinlupa',
                    'type' => "Business Permit & Mayor's Permit 2026",
                ],
            ];
        @endphp

        <section id="credentials" class="bg-[#f5f3ee] px-6 py-20 lg:px-12 lg:py-28">

            <div class="mx-auto max-w-7xl">

                {{-- HEADER --}}
                <div class="max-w-3xl">

                    <div class="mb-5 flex items-center gap-3 text-[10px] uppercase tracking-[0.22em] text-black/45">
                        <span class="h-px w-8 bg-[#c8b89a]"></span>
                        Compliance & Credentials
                    </div>

                    <h1 class="font-serif text-4xl font-light leading-[1.1] text-[#0d0d0d] md:text-5xl lg:text-6xl">
                        Fully Licensed.
                        <br>
                        <em class="text-[#a08060]">Fully Compliant.</em>
                    </h1>

                    <p class="mt-7 max-w-2xl text-sm font-light leading-[1.9] text-[#555]">
                        Metro Mobilia Corporation maintains the registrations, licenses,
                        permits, and certifications required to support its procurement,
                        sourcing, importation, and supply activities.
                    </p>

                </div>


                {{-- CREDENTIAL GRID --}}
                <div class="mt-14 grid gap-px overflow-hidden border border-black/10 bg-black/10 sm:grid-cols-2 lg:grid-cols-4">

                    @foreach($credentials as $credential)

                        <div class="group relative min-h-[225px] bg-white p-7 transition duration-300 hover:bg-[#0d0d0d]">

                            {{-- Number --}}
                            <div class="mb-10 flex items-center justify-between">

                                <span class="text-[9px] uppercase tracking-[0.2em] text-black/25 transition group-hover:text-white/25">
                                    {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                <span class="h-px w-7 bg-[#c8b89a]/50"></span>

                            </div>


                            {{-- Abbreviation --}}
                            <div class="font-serif text-3xl font-light tracking-tight text-[#0d0d0d] transition group-hover:text-[#c8b89a]">
                                {{ $credential['abbr'] }}
                            </div>


                            {{-- Organization --}}
                            <div class="mt-4 text-xs font-medium leading-[1.5] text-[#0d0d0d] transition group-hover:text-white/85">
                                {{ $credential['full'] }}
                            </div>


                            {{-- Credential Type --}}
                            <div class="mt-2 text-[10px] leading-[1.6] text-black/40 transition group-hover:text-white/40">
                                {{ $credential['type'] }}
                            </div>


                            {{-- Bottom Accent --}}
                            <div class="absolute bottom-0 left-0 h-[3px] w-full origin-left scale-x-0 bg-[#c8b89a] transition duration-500 group-hover:scale-x-100"></div>

                        </div>

                    @endforeach

                </div>


                {{-- COMPLIANCE STATEMENT --}}
                <div class="mt-12 grid gap-px border border-black/10 bg-black/10 md:grid-cols-[1fr_auto]">

                    <div class="bg-[#1a1a1a] p-7 md:p-8">

                        <div class="mb-4 flex items-center gap-3 text-[9px] uppercase tracking-[0.2em] text-white/30">
                            <span class="h-px w-6 bg-[#c8b89a]/60"></span>
                            Compliance Commitment
                        </div>

                        <p class="max-w-3xl text-sm font-light leading-[1.8] text-white/55">
                            Permits, licenses, and certificates form an important part of
                            our procurement readiness. Documentation may be provided upon
                            request for qualified procurement, accreditation, and evaluation
                            requirements.
                        </p>

                    </div>


                    {{-- DOCUMENT CTA --}}
                    <div class="flex items-center bg-[#1a1a1a] p-7 md:p-8">

                        <a
                            href="{{ route('contact') }}"
                            class="group inline-flex items-center gap-4 border border-[#c8b89a]/30 px-5 py-3 text-[10px] uppercase tracking-[0.18em] text-[#c8b89a] transition duration-300 hover:border-[#c8b89a] hover:bg-[#c8b89a] hover:text-[#0d0d0d]"
                        >
                            <span>
                                Request Documents
                            </span>

                            <span class="transition-transform duration-300 group-hover:translate-x-1">
                                →
                            </span>
                        </a>

                    </div>

                </div>


                {{-- FOOTNOTE --}}
                <div class="mt-6 flex flex-col gap-2 text-[9px] uppercase tracking-[0.16em] text-black/30 sm:flex-row sm:items-center sm:justify-between">

                    <span>
                        Metro Mobilia Corporation
                    </span>

                    <span>
                        Procurement · Compliance · Quality
                    </span>

                </div>

            </div>

        </section>

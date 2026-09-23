@props(['catalogType' => null])

@php
    /*
    |--------------------------------------------------------------------------
    | Determine Current Division
    |--------------------------------------------------------------------------
    */

    $isImportPage = request()->routeIs('import');
    $isExportPage = request()->routeIs('export');

    $isProductCatalog = request()->routeIs('products.catalog');
    $isProductShow = request()->routeIs('products.show');

    if ($isProductCatalog) {
        $divisionRoute = strtolower(request()->get('type', 'export'));
    } elseif ($isProductShow && isset($catalogType)) {
        $divisionRoute = strtolower($catalogType);
    } elseif ($isExportPage) {
        $divisionRoute = 'export';
    } elseif ($isImportPage) {
        $divisionRoute = 'import';
    } else {
        $divisionRoute = 'export';
    }

    // Safety: only allow these two contexts
    if (! in_array($divisionRoute, ['export', 'import'], true)) {
        $divisionRoute = 'export';
    }

    $onDivisionPage =
        $isImportPage ||
        $isExportPage ||
        $isProductCatalog ||
        $isProductShow;
@endphp

<nav
    id="navbar"
    x-data="{ open: false }"
    class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-[#0d0d0d]/95 backdrop-blur-xl"
>
    <div
        class="mx-auto flex h-[68px] max-w-[1400px] items-center justify-between px-6 lg:px-12"
    >

        {{-- ============================================================
            Logo + Context
        ============================================================= --}}

        <div class="flex items-center gap-4">

            <a
                href="{{ route('home') }}"
                class="flex items-center gap-3 no-underline"
            >
                {{-- Logo --}}
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Metro Mobilia Corporation"
                    class="h-[230px] w-auto max-w-none object-contain"
                >
            </a>

            {{-- Import / Export Badge --}}
            @if ($onDivisionPage)
                <div
                    class="hidden items-center gap-1.5 rounded-full
                           border border-[#c8b89a]/30
                           bg-[#c8b89a]/10 px-3 py-1 sm:flex"
                >
                    <span
                        class="h-1.5 w-1.5 rounded-full bg-[#c8b89a]"
                    ></span>

                    <span
                        class="text-[9px] font-medium uppercase
                               tracking-[0.2em] text-[#c8b89a]"
                    >
                        {{ ucfirst($divisionRoute) }}
                    </span>
                </div>
            @endif

        </div>


        {{-- ============================================================
            Desktop Navigation
        ============================================================= --}}

        <div class="hidden items-center gap-8 lg:flex">

            {{-- Home --}}
            <a
                href="{{ route('home') }}"
                class="text-[10px] uppercase tracking-[0.15em]
                       text-white/60 transition hover:text-white"
            >
                Home
            </a>

            {{-- Only show section navigation on Import/Export pages --}}
            @if ($onDivisionPage)

                {{-- About --}}
                <a
                    href="{{ route($divisionRoute) }}#about"
                    class="text-[10px] uppercase tracking-[0.15em]
                           text-white/60 transition hover:text-white"
                >
                    About
                </a>

                {{-- Products --}}
                <a
                    href="{{ route($divisionRoute) }}#products"
                    class="text-[10px] uppercase tracking-[0.15em]
                           text-white/60 transition hover:text-white"
                >
                    Products
                </a>

                {{-- Credentials
                     IMPORT ONLY --}}
                @if ($divisionRoute === 'import')
                    <a
                        href="{{ route($divisionRoute) }}#credentials"
                        class="text-[10px] uppercase tracking-[0.15em]
                               text-white/60 transition hover:text-white"
                    >
                        Credentials
                    </a>
                @endif

                {{-- Clients
                     IMPORT ONLY --}}
                @if ($divisionRoute === 'import')
                    <a
                        href="{{ route($divisionRoute) }}#clients"
                        class="text-[10px] uppercase tracking-[0.15em]
                               text-white/60 transition hover:text-white"
                    >
                        Clients
                    </a>
                @endif

                {{-- Contact --}}
                <a
                    href="{{ route($divisionRoute) }}#contact"
                    class="text-[10px] uppercase tracking-[0.15em]
                           text-white/60 transition hover:text-white"
                >
                    Contact
                </a>

            @endif

        </div>


        {{-- ============================================================
            Desktop CTA + Division Switch
        ============================================================= --}}

        <div class="hidden items-center gap-4 lg:flex">

            @if ($divisionRoute === 'import')

                <a
                    href="{{ route('export') }}"
                    class="border border-white/30 px-5 py-2.5
                           text-[11px] uppercase tracking-[0.14em]
                           text-white transition
                           hover:bg-white hover:text-[#0d0d0d]"
                >
                    Export
                </a>

            @else

                <a
                    href="{{ route('import') }}"
                    class="border border-white/30 px-5 py-2.5
                           text-[11px] uppercase tracking-[0.14em]
                           text-white transition
                           hover:bg-white hover:text-[#0d0d0d]"
                >
                    Import
                </a>

            @endif

            <a
                href="{{ route($divisionRoute) }}#contact"
                class="border border-white/30 px-5 py-2.5
                       text-[11px] uppercase tracking-[0.14em]
                       text-white transition
                       hover:bg-white hover:text-[#0d0d0d]"
            >
                Get a Quote
            </a>

        </div>


        {{-- ============================================================
            Mobile Button
        ============================================================= --}}

        <button
            type="button"
            @click="open = !open"
            class="text-white lg:hidden"
            aria-label="Toggle navigation"
        >

            {{-- Menu Icon --}}
            <svg
                x-show="!open"
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>

            {{-- Close Icon --}}
            <svg
                x-show="open"
                x-cloak
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>

        </button>

    </div>


    {{-- ================================================================
        Mobile Navigation
    ================================================================= --}}

    <div
        x-show="open"
        x-cloak
        x-transition
        @click.outside="open = false"
        class="border-t border-white/10 bg-[#0d0d0d] lg:hidden"
    >

        <div class="space-y-1 px-6 py-5">

            {{-- Home --}}
            <a
                href="{{ route('home') }}"
                @click="open = false"
                class="block py-3 text-xs uppercase
                       tracking-[0.15em] text-white/60
                       transition hover:text-white"
            >
                Home
            </a>


            {{-- Only show section navigation on division pages --}}
            @if ($onDivisionPage)

                {{-- About --}}
                <a
                    href="{{ route($divisionRoute) }}#about"
                    @click="open = false"
                    class="block py-3 text-xs uppercase
                           tracking-[0.15em] text-white/60
                           transition hover:text-white"
                >
                    About
                </a>


                {{-- Products --}}
                <a
                    href="{{ route($divisionRoute) }}#products"
                    @click="open = false"
                    class="block py-3 text-xs uppercase
                           tracking-[0.15em] text-white/60
                           transition hover:text-white"
                >
                    Products
                </a>


                {{-- Credentials
                     IMPORT ONLY --}}
                @if ($divisionRoute === 'import')
                    <a
                        href="{{ route($divisionRoute) }}#credentials"
                        @click="open = false"
                        class="block py-3 text-xs uppercase
                               tracking-[0.15em] text-white/60
                               transition hover:text-white"
                    >
                        Credentials
                    </a>
                @endif


                {{-- Clients
                     IMPORT ONLY --}}
                @if ($divisionRoute === 'import')
                    <a
                        href="{{ route($divisionRoute) }}#clients"
                        @click="open = false"
                        class="block py-3 text-xs uppercase
                               tracking-[0.15em] text-white/60
                               transition hover:text-white"
                    >
                        Clients
                    </a>
                @endif


                {{-- Contact --}}
                <a
                    href="{{ route($divisionRoute) }}#contact"
                    @click="open = false"
                    class="block py-3 text-xs uppercase
                           tracking-[0.15em] text-white/60
                           transition hover:text-white"
                >
                    Contact
                </a>

            @endif


            {{-- ========================================================
                Division Switch
            ========================================================= --}}

            @if ($divisionRoute === 'import')

                <a
                    href="{{ route('export') }}"
                    @click="open = false"
                    class="mt-3 block border border-white/20
                           px-5 py-3 text-center text-xs uppercase
                           tracking-[0.15em] text-white transition
                           hover:bg-white hover:text-[#0d0d0d]"
                >
                    Export
                </a>

            @else

                <a
                    href="{{ route('import') }}"
                    @click="open = false"
                    class="mt-3 block border border-white/20
                           px-5 py-3 text-center text-xs uppercase
                           tracking-[0.15em] text-white transition
                           hover:bg-white hover:text-[#0d0d0d]"
                >
                    Import
                </a>

            @endif


            {{-- ========================================================
                CTA
            ========================================================= --}}

            <a
                href="{{ route($divisionRoute) }}#contact"
                @click="open = false"
                class="mt-3 block border border-white/20
                       px-5 py-3 text-center text-xs uppercase
                       tracking-[0.15em] text-white transition
                       hover:bg-white hover:text-[#0d0d0d]"
            >
                Get a Quote
            </a>

        </div>

    </div>

</nav>

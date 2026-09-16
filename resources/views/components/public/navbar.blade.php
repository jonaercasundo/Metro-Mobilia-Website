@php
    /*
    |--------------------------------------------------------------------------
    | Determine Current Division
    |--------------------------------------------------------------------------
    */

    $isImportPage = request()->routeIs('import');
    $isExportPage = request()->routeIs('Export');

    if ($isExportPage) {
        $navContext = 'Export';
    } else {
        $navContext = 'import';
    }

    $onDivisionPage = $isImportPage || $isExportPage;
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
                {{ ucfirst($navContext) }}
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

            {{-- About --}}
            <a
                href="{{ route($navContext) }}#about"
                class="text-[10px] uppercase tracking-[0.15em]
                       text-white/60 transition hover:text-white"
            >
                About
            </a>

            {{-- Products --}}
            <a
                href="{{ route($navContext) }}#products"
                class="text-[10px] uppercase tracking-[0.15em]
                       text-white/60 transition hover:text-white"
            >
                Products
            </a>

            {{-- Credentials --}}
            <a
                href="{{ route($navContext) }}#credentials"
                class="text-[10px] uppercase tracking-[0.15em]
                       text-white/60 transition hover:text-white"
            >
                Credentials
            </a>

            {{-- Clients --}}
            <a
                href="{{ route($navContext) }}#clients"
                class="text-[10px] uppercase tracking-[0.15em]
                       text-white/60 transition hover:text-white"
            >
                Clients
            </a>

            {{-- Contact --}}
            <a
                href="{{ route($navContext) }}#contact"
                class="text-[10px] uppercase tracking-[0.15em]
                       text-white/60 transition hover:text-white"
            >
                Contact
            </a>

        </div>


        {{-- ============================================================
            Desktop CTA
        ============================================================= --}}

        <a
            href="{{ route($navContext) }}#contact"
            class="hidden border border-white/30 px-5 py-2.5
                   text-[11px] uppercase tracking-[0.14em]
                   text-white transition
                   hover:bg-white hover:text-[#0d0d0d]
                   lg:block"
        >
            Get a Quote
        </a>


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

            {{-- Import / Export Badge --}}
            @if ($onDivisionPage)
                <div
                    class="mb-2 flex w-fit items-center gap-1.5
                           rounded-full border border-[#c8b89a]/30
                           bg-[#c8b89a]/10 px-3 py-1"
                >
                    <span
                        class="h-1.5 w-1.5 rounded-full bg-[#c8b89a]"
                    ></span>

                    <span
                        class="text-[9px] font-medium uppercase
                               tracking-[0.2em] text-[#c8b89a]"
                    >
                        {{ ucfirst($navContext) }}
                    </span>
                </div>
            @endif


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


            {{-- About --}}
            <a
                href="{{ route($navContext) }}#about"
                @click="open = false"
                class="block py-3 text-xs uppercase
                       tracking-[0.15em] text-white/60
                       transition hover:text-white"
            >
                About
            </a>


            {{-- Products --}}
            <a
                href="{{ route($navContext) }}#products"
                @click="open = false"
                class="block py-3 text-xs uppercase
                       tracking-[0.15em] text-white/60
                       transition hover:text-white"
            >
                Products
            </a>


            {{-- Credentials --}}
            <a
                href="{{ route($navContext) }}#credentials"
                @click="open = false"
                class="block py-3 text-xs uppercase
                       tracking-[0.15em] text-white/60
                       transition hover:text-white"
            >
                Credentials
            </a>


            {{-- Clients --}}
            <a
                href="{{ route($navContext) }}#clients"
                @click="open = false"
                class="block py-3 text-xs uppercase
                       tracking-[0.15em] text-white/60
                       transition hover:text-white"
            >
                Clients
            </a>


            {{-- Contact --}}
            <a
                href="{{ route($navContext) }}#contact"
                @click="open = false"
                class="block py-3 text-xs uppercase
                       tracking-[0.15em] text-white/60
                       transition hover:text-white"
            >
                Contact
            </a>


            {{-- CTA --}}
            <a
                href="{{ route($navContext) }}#contact"
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

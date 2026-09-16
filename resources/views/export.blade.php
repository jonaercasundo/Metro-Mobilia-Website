<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Export Division — Metro Mobilia Corporation
    </title>

    <meta
        name="description"
        content="Metro Mobilia Corporation - Quality Supply. Trusted Nationwide."
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

    {{-- =========================================================
        NAVIGATION
    ========================================================== --}}
    <x-public.navbar />


    {{-- =========================================================
        HERO
    ========================================================== --}}
    <x-export.hero />


    {{-- =========================================================
        MAIN CONTENT
    ========================================================== --}}
    <main>

        {{-- About --}}
        <x-export.about />

        {{-- Products --}}
        <x-export.products />

        {{-- Warehouse --}}
        <x-export.warehouse />

        {{-- Credentials --}}
        <x-export.credentials />

        {{-- Clients --}}
        <x-export.clients />

        {{-- Contact --}}
        <x-export.contact />

    </main>


    {{-- =========================================================
        FOOTER
    ========================================================== --}}
    <x-public.footer />

</body>

</html>

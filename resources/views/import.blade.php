<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Import Division — Metro Mobilia Corporation
    </title>

    <meta
        name="description"
        content="Metro Mobilia Corporation - Quality Supply. Trusted Nationwide."
    >
    {{-- Favicon / Browser Tab Logo --}}
    <link
        rel="icon"
        type="image/png"
        href="{{ asset('images/logo_icon.png') }}"
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

    {{-- Navigation --}}
    <x-public.navbar />

    {{-- Hero --}}
    <x-import.hero />

    {{-- Main Content --}}
    <main>

        <x-import.about />

        <x-import.products
            :products="$products"
            catalog-type="import"
        />

        <x-import.warehouse />

        <x-import.credentials />

        <x-import.clients />

        <x-import.contact />

    </main>

    {{-- Footer --}}
    <x-public.footer />

</body>

</html>

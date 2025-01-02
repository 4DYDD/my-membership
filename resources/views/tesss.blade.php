<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HALAMAN UTAMA</title>
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>

    <main class="mx-auto my-24 p-3 flex flex-col justify-center items-center w-[350px] rounded overflow-hidden shadow">
        <h1 class="font-bold">Selamat Datang di Aula tesss</h1>
        <p class="">awekroawer</p>
    </main>

    {{-- TABLE GUWEH --}}

    @livewire('TesAh')

    {{-- TABLE GUWEH --}}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>

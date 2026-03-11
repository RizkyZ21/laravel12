<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

</head>

<body>

@include('navbar')

<div class="container-about">

<main class="card">
    <div class="header">
        <div class="avatar">RZ</div>
        <div>
            <h1>Halaman About</h1>
            <div class="meta">Muhammad Rizky Zuhriansyah • 3124521033</div>
        </div>
    </div>

    <section style="margin-top:18px">
        <p>
            Saya adalah mahasiswa Teknik Informatika di Politeknik Elektronika Negeri Surabaya (PENS).
            Saat ini saya sedang mempelajari pengembangan web menggunakan Laravel, PHP, dan Bootstrap.
            Website ini dibuat sebagai bagian dari pembelajaran saya dalam membuat aplikasi web menggunakan framework Laravel.
        </p>
    </section>

</main>

</div>

</body>
</html>

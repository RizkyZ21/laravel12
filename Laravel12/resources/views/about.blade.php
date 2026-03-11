<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About</title>

<style>
:root{
    --bg: linear-gradient(135deg,#f5f7fa 0%,#c3cfe2 100%);
    --card-bg:#ffffff;
    --muted:#6b7280;
    --accent:#2563eb;
    --radius:12px;
    --max-width:820px;
    --container-pad:28px;
    --shadow:0 6px 24px rgba(16,24,40,0.08);
}

body{
    margin:0;
    font-family:Inter, system-ui, Arial;
    background:var(--bg);
}

.container-about{
    min-height:90vh;
    display:flex;
    align-items:center;
    justify-content:center;
}

.card{
    width:100%;
    max-width:var(--max-width);
    background:var(--card-bg);
    border-radius:var(--radius);
    padding:var(--container-pad);
    box-shadow:var(--shadow);
}

.header{
    display:flex;
    gap:18px;
    align-items:center;
}

.avatar{
    width:86px;
    height:86px;
    border-radius:9999px;
    background:linear-gradient(135deg,var(--accent),#7c3aed);
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-weight:700;
    font-size:22px;
}

.meta{
    color:var(--muted);
    font-size:14px;
}

p{
    color:var(--muted);
}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

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

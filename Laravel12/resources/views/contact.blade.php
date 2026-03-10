<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
:root{
    --bg: linear-gradient(135deg,#f5f7fa 0%,#c3cfe2 100%);
    --card-bg:#ffffff;
    --muted:#6b7280;
    --accent:#2563eb;
    --radius:12px;
    --max-width:820px;
    --shadow:0 6px 24px rgba(16,24,40,0.08);
}

body{
    margin:0;
    font-family:Inter, system-ui, Arial;
    background:var(--bg);
}

.container-contact{
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
    padding:30px;
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
    background:linear-gradient(135deg,#2563eb,#7c3aed);
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

</head>
<body>

@include('navbar')

<div class="container-contact">

<main class="card">

    <div class="header">
        <div class="avatar">RZ</div>
        <div>
            <h1>Contact Me</h1>
            <div class="meta">Muhammad Rizky Zuhriansyah</div>
        </div>
    </div>

    <section class="mt-4">

        <p>Silakan hubungi saya melalui form berikut.</p>

        <form>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="Masukkan nama">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Masukkan email">
            </div>

            <div class="mb-3">
                <label class="form-label">Pesan</label>
                <textarea class="form-control" rows="4" placeholder="Tulis pesan"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim Pesan</button>

        </form>

    </section>

</main>

</div>

</body>
</html>

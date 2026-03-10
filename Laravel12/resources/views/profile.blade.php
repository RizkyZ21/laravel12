<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg,#f5f7fa 0%,#c3cfe2 100%);
}

/* wrapper supaya card ke tengah */
.profile-wrapper{
    min-height:85vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.profile-card{
    width:100%;
    max-width:800px;
    background:#fff;
    border-radius:12px;
    padding:30px;
    box-shadow:0 6px 24px rgba(16,24,40,0.08);
}

.profile-header{
    display:flex;
    align-items:center;
    gap:18px;
}

.avatar{
    width:90px;
    height:90px;
    border-radius:50%;
    background:linear-gradient(135deg,#2563eb,#7c3aed);
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-weight:bold;
    font-size:24px;
}

.meta{
    color:#6b7280;
    font-size:14px;
}
</style>

</head>

<body>

@include('navbar')

<div class="profile-wrapper">

    <div class="profile-card">

        <div class="profile-header">
            <div class="avatar">RZ</div>

            <div>
                <h2>Profile Zuhri</h2>
                <div class="meta">Muhammad Rizky Zuhriansyah • 3124521033</div>
            </div>
        </div>

        <hr>

        <p>
            Ini adalah halaman profile dari aplikasi Laravel.
        </p>

        <p>
            Saya sedang belajar membuat aplikasi web menggunakan Laravel dan Bootstrap.
        </p>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

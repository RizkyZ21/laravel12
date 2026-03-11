<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Detail</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg,#f5f7fa 0%,#c3cfe2 100%);
}

/* container utama */
.main-wrapper{
    min-height:100vh;
    padding-top:60px;
}

/* layout card */
.main-container{
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:30px;
}

/* card style */
.card-custom{
    width:100%;
    max-width:500px;
    background:#fff;
    border-radius:12px;
    padding:30px;
    box-shadow:0 6px 24px rgba(16,24,40,0.08);
}

/* profile */
.profile-header{
    display:flex;
    align-items:center;
    gap:18px;
}

.avatar{
    width:80px;
    height:80px;
    border-radius:50%;
    background:linear-gradient(135deg,#2563eb,#7c3aed);
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-weight:bold;
    font-size:22px;
}

.meta{
    color:#6b7280;
    font-size:14px;
}
</style>

</head>

<body>

@include('navbar')

<div class="main-wrapper">

<div class="container main-container">

    <!-- PROFILE -->
<div class="card-custom">

    <div class="text-center mb-4">
        <div class="avatar mx-auto">RZ</div>
        <h4 class="mt-3 mb-1">Muhammad Rizky Zuhriansyah</h4>
        <div class="meta">NIM: 3124521033</div>
        <div class="meta">Teknik Informatika • PENS</div>
    </div>

    <hr>

    <h6 class="fw-bold">Skills</h6>

    <div class="mb-2">
        <small>HTML</small>
        <div class="progress">
            <div class="progress-bar bg-primary" style="width:90%"></div>
        </div>
    </div>

    <div class="mb-2">
        <small>CSS</small>
        <div class="progress">
            <div class="progress-bar bg-info" style="width:80%"></div>
        </div>
    </div>

    <div class="mb-2">
        <small>Laravel</small>
        <div class="progress">
            <div class="progress-bar bg-success" style="width:70%"></div>
        </div>
    </div>

    <div class="mb-2">
        <small>MySQL</small>
        <div class="progress">
            <div class="progress-bar bg-warning" style="width:65%"></div>
        </div>
    </div>

</div>

    <!-- CONTACT -->
    <div class="card-custom">

        <h4>Contact Me</h4>
        <p class="meta">Kirim pesan kepada saya</p>

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
                <textarea class="form-control" rows="3" placeholder="Tulis pesan"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>

        </form>

    </div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About</title>
    <style>
        :root{
            --bg: linear-gradient(135deg,#f5f7fa 0%,#c3cfe2 100%);
            --card-bg: #ffffff;
            --muted:#6b7280;
            --accent:#2563eb;
            --radius:12px;
            --max-width:820px;
            --container-pad:28px;
            --shadow: 0 6px 24px rgba(16,24,40,0.08);
        }

        html,body{
            height:100%;
            margin:0;
        }

        body{
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background:var(--bg);
            -webkit-font-smoothing:antialiased;
            -moz-osx-font-smoothing:grayscale;
            color:#0f172a;

            min-height:100vh;
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
            box-sizing:border-box;
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
            flex-shrink:0;
        }

        h1{
            margin:0;
            font-size:22px;
            letter-spacing:-0.2px
        }

        p{
            margin:10px 0;
            color:var(--muted);
            line-height:1.6
        }

        .meta{
            color:var(--muted);
            font-size:14px
        }

        @media (max-width:520px){
            .header{gap:12px}
            .avatar{width:64px;height:64px;font-size:18px}
        }
    </style>
</head>
<body>

<main class="card">
    <div class="header">
        <div class="avatar">RZ</div>
        <div>
            <h1>Halaman About</h1>
            <div class="meta">Muhammad Rizky Zuhriansyah • 3124521033</div>
        </div>
    </div>

    <section style="margin-top:18px">
        <p>Belajar membuat halaman about di Laravel.</p>
    </section>
</main>

</body>
</html>

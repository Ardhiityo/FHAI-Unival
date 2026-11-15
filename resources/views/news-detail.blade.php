<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f7f7fb">
    <meta name="description" content="{{ Str::limit(strip_tags($newsSection->description), 160) }}">
    <title>{{ $newsSection->title }} — FHAI Universitas Al-Khairiyah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/logo/unival.webp') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>

<body>
    <header class="site-header" id="home">
        <nav class="island" aria-label="Navigasi utama">
            <a class="brand" href="/" aria-label="FHAI, ke beranda">
                <span class="brand-mark">
                    <img src="{{ asset('assets/logo/unival.webp') }}" height="40" width="40" alt="unival">
                </span>
                <span class="brand-name">Fakultas Hukum Agama Islam<small>UNIVERSITAS AL-KHAIRIYAH</small></span>
            </a>
            <div class="nav-links" id="nav-links">
                <a href="/#home">Home</a>
                <a href="/#tentang">Tentang</a>
                <a href="/#visi">Visi &amp; Misi</a>
                <a href="/#program">Program Studi</a>
                <a href="/#layanan">Layanan</a>
                <a href="/#berita">Berita</a>
                <a href="/#kontak">Contact</a>
            </div>
            <div class="nav-actions">
                <button class="theme-toggle" id="theme-toggle" type="button" aria-label="Aktifkan mode gelap"
                    title="Ubah tema"><span class="theme-icon">☾</span></button>
                <a class="button button-small nav-apply" href="https://unival.siakadcloud.com/spmbfront/jalur-seleksi"
                    target="_blank" rel="noreferrer">
                    Daftar Sekarang <span>↗</span>
                </a>
                <button class="menu-toggle" id="menu-toggle" type="button" aria-label="Buka menu" aria-expanded="false"
                    aria-controls="nav-links"><span></span><span></span></button>
            </div>
        </nav>
    </header>

    <main>
        <section class="news-detail-main section-wrap">
            <a class="news-detail-back" href="/#berita"><span aria-hidden="true">←</span> Kembali ke berita</a>
            <header class="news-detail-header">
                <p class="news-detail-kicker">FAKULTAS HUKUM &amp; AGAMA ISLAM · CERITA KAMPUS</p>
                <h1 class="news-detail-title">{{ $newsSection->title }}</h1>
                <div class="news-detail-meta">
                    <time datetime="{{ $newsSection->date }}">
                        {{ Carbon\Carbon::parse($newsSection->date)->translatedFormat('d F Y') }}
                    </time>
                    <span>Universitas Al-Khairiyah · Cilegon</span>
                </div>
            </header>

            @if ($newsSection->image_url)
                <figure class="news-detail-cover">
                    <img src="{{ Storage::disk('public')->url($newsSection->image_url) }}"
                        alt="Foto berita: {{ $newsSection->title }}">
                </figure>
            @else
                <div class="news-detail-cover" aria-hidden="true"></div>
            @endif

            <div class="news-detail-layout">
                <aside class="news-detail-aside">
                    <span>BERITA FHAI</span>
                    <a href="/#berita">Kabar &amp; inspirasi <span aria-hidden="true">↗</span></a>
                </aside>
                <article class="news-detail-body">
                    {!! str($newsSection->description)->sanitizeHtml() !!}
                </article>
            </div>

            <div class="news-detail-footer">
                <a class="news-detail-back" href="/#berita"><span aria-hidden="true">←</span> Lihat berita lainnya</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="section-wrap">
            <div class="footer-main">
                <div class="footer-brand">
                    <a class="brand brand-footer" href="/">
                        <span class="brand-mark">
                            <img src="{{ asset('assets/logo/unival.webp') }}" width="40" height="40" alt="unival">
                        </span>
                        <span class="brand-name">Fakultas Hukum Agama Islam<small>UNIVERSITAS
                                AL-KHAIRIYAH</small></span>
                    </a>
                    <p class="footer-motto">Berilmu, berintegritas, membawa maslahat.</p>
                </div>
                <div class="footer-column">
                    <h4>JELAJAHI</h4>
                    <a href="/#tentang">Tentang kami</a>
                    <a href="/#program">Program Studi</a>
                    <a href="/#berita">Berita</a>
                </div>
                <div class="footer-column">
                    <h4>HUBUNGI KAMI</h4>
                    <a href="mailto:fhai@unival-cilegon.ac.id">Email ↗</a>
                    <a href="/#kontak">Informasi pendaftaran</a>
                </div>
            </div>
            <div class="footer-bottom">
                <span>© 2025 FHAI Universitas Al-Khairiyah. Hak cipta dilindungi.</span>
                <a href="/">Kembali ke beranda</a>
                <span class="footer-credit">ILMU · INTEGRITAS · KEMANUSIAAN</span>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f7f7fb">
    <meta name="description"
        content="Fakultas Hukum dan Agama Islam Universitas Al-Khairiyah — membentuk insan akademis, berintegritas, dan berkeadilan.">
    <title>FHAI — Universitas Al-Khairiyah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!--SEO-->
    <meta property="og:type" content="website">
    <meta property="og:title" content="FHAI | Universitas Al-Khairiyah">
    <meta property="og:description" content="Fakultas Hukum Agama Islam Universitas Al-Khairiyah.">
    <meta property="og:url" content="https://remafik.unival-cilegon.ac.id/">
    <meta property="og:site_name" content="Rema FIK">
    <meta property="og:image" content="{{ asset('assets/logo/unival.webp') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rema FIK | Universitas Al-Khairiyah">
    <meta name="twitter:description" content="Fakultas Hukum Agama Islam Universitas Al-Khairiyah.">
    <!--SEO-->

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
            <div class="nav-links" id="nav-links"><a href="#home">Home</a><a href="#tentang">Tentang</a><a
                    href="#visi">Visi &amp; Misi</a><a href="#program">Program Studi</a><a href="#layanan">Layanan</a><a
                    href="#berita">Berita</a><a href="#kontak">Contact</a></div>
            <div class="nav-actions"><button class="theme-toggle" id="theme-toggle" type="button"
                    aria-label="Aktifkan mode gelap" title="Ubah tema"><span class="theme-icon">☾</span></button><a
                    class="button button-small nav-apply" href="https://unival.siakadcloud.com/spmbfront/jalur-seleksi"
                    target="_blank">Daftar Sekarang
                    <span>↗</span></a><button class="menu-toggle" id="menu-toggle" type="button" aria-label="Buka menu"
                    aria-expanded="false" aria-controls="nav-links"><span></span><span></span></button></div>
        </nav>
    </header>
    <main>
        <section class="hero section-wrap">
            <div class="hero-copy">
                <p class="eyebrow">
                    <span class="eyebrow-line"></span>
                    UNIVERSITAS AL-KHAIRIYAH · CILEGON
                </p>
                <h1>Menguatkan ilmu.<br><em>Menegakkan keadilan.</em></h1>
                <p class="hero-description">Tempat bertemunya nilai hukum, keislaman, dan kemanusiaan. Bersama kami,
                    tumbuh menjadi pemimpin yang berilmu dan berintegritas.</p>
                <div class="hero-actions">
                    <a class="button" href="https://unival.siakadcloud.com/spmbfront/jalur-seleksi" target="_blank">
                        Daftar Sekarang
                        <span>↗</span>
                    </a>
                    <a class="text-link" href="#tentang">Jelajahi fakultas <span>↗</span></a>
                </div>
                <div class="hero-note">
                    @forelse ($hero_sections as $hero_section)
                        <p>
                            <strong>{{ $hero_section->accreditation }}</strong>
                            <br>
                            Akreditasi
                        </p>
                        <p>
                            <strong>{{ $hero_section->total_industry_partner }}+</strong>
                            <br>
                            Mitra Industri
                        </p>
                        <p>
                            <strong>{{ $hero_section->total_number_of_graduate }}+</strong>
                            <br>
                            Alumni
                        </p>
                    @empty
                        <p>
                            <strong>A</strong>
                            <br>
                            Akreditasi
                        </p>
                        <p>
                            <strong>12+</strong>
                            <br>
                            Mitra Industri
                        </p>
                        <p>
                            <strong>721+</strong>
                            <br>
                            Alumni
                        </p>
                    @endforelse
                </div>
            </div>
            <div class="hero-visual">
                <div class="visual-glow"></div>
                <div class="image-frame"><img src="./assets/campus-hero.png"
                        alt="Suasana akademik dengan buku hukum dan ornamen islami">
                    <div class="image-shade"></div>
                    <div class="image-caption"><span class="caption-kicker">RUANG TUMBUH</span><strong>Ilmu
                            untuk<br>kemaslahatan.</strong></div>
                </div>
                <div class="floating-seal"><span class="seal-star">✳</span><span>ILMU · ADAB · AMANAH</span></div>
                <div class="floating-stat"><span class="stat-icon">✦</span>
                    <div><strong>Berdaya saing</strong><small>Berlandaskan nilai Islami</small></div>
                </div>
                <div class="hero-orbit orbit-one"></div>
                <div class="hero-orbit orbit-two"></div>
            </div>
            <div class="hero-bottom">
                <span class="hero-bottom-line"></span>
                <span>ILMU · INTEGRITAS · KEMANUSIAAN</span>
            </div>
        </section>
        <section class="stats section-wrap" aria-label="Statistik fakultas">
            @forelse ($statistic_sections as $statistic_section)
                <div class="stat-item">
                    <strong>{{ number_format($statistic_section->total, 0, '.') }}</strong>
                    <span>Program Studi</span>
                </div>
            @empty
                <div class="stat-item"><strong>02</strong><span>Program Studi</span></div>
                <div class="stat-item"><strong>1.2<span>k</span></strong><span>Mahasiswa aktif</span></div>
                <div class="stat-item"><strong>38</strong><span>Dosen &amp; akademisi</span></div>
            @endforelse
            <div class="stat-item stat-quote"><span class="quote-mark">“</span>
                <p>Pendidikan yang baik melahirkan keberanian untuk berbuat benar.</p>
            </div>
        </section>
        <section class="about section-wrap section-space" id="tentang">
            <div class="about-visual">
                <div class="about-photo"><img src="./assets/campus-hero.png"
                        alt="Detail ruang belajar FHAI dengan buku dan simbol keadilan"></div>
                <div class="about-badge"><span>جامعة</span><strong>AL-KHAIRIYAH</strong><small>EST. 1925</small></div>
                <span class="about-vertical">FAKULTAS HUKUM &amp; AGAMA ISLAM</span>
            </div>
            <div class="about-copy">
                <p class="eyebrow"><span class="eyebrow-line"></span TENTANG KAMI</p>
                <h2>Akademik yang berakar,<br><em>relevan untuk zaman.</em></h2>
                <p>Fakultas Hukum dan Agama Islam Universitas Al-Khairiyah hadir untuk mencetak generasi yang memahami
                    hukum, menghidupi nilai keislaman, dan peka terhadap kebutuhan masyarakat.</p>
                <p>Melalui pembelajaran yang kritis dan lingkungan yang inklusif, kami mempersiapkan lulusan untuk
                    berkontribusi di ruang publik, lembaga hukum, dan komunitas.</p>
                <div class="about-points">
                    <span>
                        <b>01</b> Pembelajaran kontekstual
                    </span>
                    <span>
                        <b>02</b> Dosen berpengalaman
                    </span>
                    <span>
                        <b>03</b> Nilai integritas
                    </span>
                    <span>
                        <b>04</b> Nilai Spiritual
                    </span>
                </div><a class="text-link" href="#visi">Selengkapnya tentang FHAI <span>↗</span></a>
            </div>
        </section>
        <section class="vision section-space" id="visi">
            <div class="section-wrap vision-grid">
                <div>
                    <p class="eyebrow"><span class="eyebrow-line"></span> ARAH &amp; TUJUAN</p>
                    <h2>Masa depan yang<br><em>kami perjuangkan.</em></h2>
                    <div class="vision-symbol">۞</div>
                </div>
                <div class="vision-content">
                    @forelse ($visions as $vision)
                        <div class="vision-card"><span class="card-index">01 / VISI</span>
                            <p>{{ $vision->vision }}</p>
                        </div>
                    @empty
                        <div class="vision-card"><span class="card-index">01 / VISI</span>
                            <p>Menjadi fakultas yang unggul dalam pengembangan ilmu hukum dan keislaman, berlandaskan nilai
                                kemanusiaan, keadilan, dan kearifan lokal.</p>
                        </div>
                    @endforelse
                    @forelse ($missions as $index => $mission)
                            <div class="mission-list">
                                <span class="card-index">02 / MISI</span>
                                <div class="mission-item"><b>{{ number_format($index + 1, 2) }}</b>
                                    <p>{{ $mission->mission }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    <div class="mission-list">
                        <span class="card-index">02 / MISI</span>
                        <div class="mission-item"><b>01</b>
                            <p>Menyelenggarakan pendidikan hukum dan keislaman yang bermutu serta relevan dengan
                                perkembangan zaman.</p>
                        </div>
                        <div class="mission-item"><b>02</b>
                            <p>Mengembangkan penelitian yang berkontribusi bagi ilmu pengetahuan dan kemaslahatan
                                masyarakat.</p>
                        </div>
                        <div class="mission-item"><b>03</b>
                            <p>Menguatkan pengabdian kepada masyarakat dengan semangat keadilan dan nilai-nilai Islami.
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>
            </div>
        </section>
        <section class="program section-wrap section-space" id="program">
            <div class="section-heading">
                <div>
                    <p class="eyebrow"><span class="eyebrow-line"></span> PILIH JALANMU</p>
                    <h2>Program studi<br><em>untuk berdampak.</em></h2>
                </div>
                <p>Bidang ilmu yang saling melengkapi, membuka ruang kontribusi luas bagi masyarakat dan bangsa.</p>
            </div>
            <div class="program-grid">
                <article class="program-card law-card">
                    <div class="program-top"><span class="program-number">01</span><span class="program-symbol">⚖</span>
                    </div>
                    <div class="program-art law-art"><span>LEX</span>
                        <div class="art-ring"></div>
                    </div>
                    <div class="program-info"><span class="program-label">SARJANA · S.H.</span>
                        <h3>Ilmu Hukum</h3>
                        <p>Mendalami sistem hukum, keadilan, dan praktik hukum untuk menjadi profesional yang
                            berintegritas.</p><a href="#kontak" class="card-link">Lihat selengkapnya <span>↗</span></a>
                    </div>
                </article>
                <article class="program-card islam-card">
                    <div class="program-top"><span class="program-number">02</span><span class="program-symbol">۞</span>
                    </div>
                    <div class="program-art islam-art"><span>عِلْم</span>
                        <div class="art-ring"></div>
                    </div>
                    <div class="program-info"><span class="program-label">SARJANA · S.Pd.</span>
                        <h3>Pendidikan Agama Islam</h3>
                        <p>Mengembangkan pendidik dan cendekiawan yang inspiratif, moderat, dan berwawasan keislaman.
                        </p><a href="#kontak" class="card-link">Lihat selengkapnya <span>↗</span></a>
                    </div>
                </article>
            </div>
        </section>
        <section class="services section-space" id="layanan">
            <div class="section-wrap">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow"><span class="eyebrow-line"></span> KAMPUS DALAM GENGGAMAN</p>
                        <h2>Layanan untuk<br><em>perjalanan akademikmu.</em></h2>
                    </div>
                    <p>Akses berbagai fasilitas digital kampus dengan mudah untuk mendukung pengalaman belajar yang
                        lebih baik.</p>
                </div>
                <div class="service-grid">
                    @forelse ($services as $service)
                        <a class="service-card" href="{{ $service->url }}" target="_blank" rel="noreferrer">
                            <span class="service-icon">▦</span><span class="service-arrow">↗</span>
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                            <span class="service-link">
                                Buka layanan
                                <span>↗</span>
                            </span>
                        </a>
                    @empty
                        <a class="service-card" href="https://example.com/siakad" target="_blank" rel="noreferrer">
                            <span class="service-icon">▦</span><span class="service-arrow">↗</span>
                            <h3>SIAKAD</h3>
                            <p>Kelola KRS, nilai, jadwal kuliah, dan informasi akademik dalam satu platform.</p><span
                                class="service-link">Buka layanan <span>↗</span></span>
                        </a>
                        <a class="service-card" href="https://example.com/perpustakaan" target="_blank"
                            rel="noreferrer"><span class="service-icon">▤</span><span class="service-arrow">↗</span>
                            <h3>Perpustakaan</h3>
                            <p>Jelajahi koleksi literatur hukum, keislaman, dan sumber akademik digital.</p><span
                                class="service-link">Jelajahi koleksi <span>↗</span>
                            </span>
                        </a>
                        <a class="service-card" href="https://example.com/e-learning" target="_blank" rel="noreferrer">
                            <span class="service-icon">◫</span><span class="service-arrow">↗</span>
                            <h3>E-Learning</h3>
                            <p>Ruang belajar daring untuk materi, diskusi, dan aktivitas perkuliahan.</p><span
                                class="service-link">Masuk kelas <span>↗</span>
                            </span>
                        </a>
                    @endforelse
                </div>
            </div>
        </section>
        <section class="news section-wrap section-space" id="berita">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">
                        <span class="eyebrow-line"></span> CERITA KAMPUS
                    </p>
                    <h2>Kabar &amp; <em>inspirasi.</em></h2>
                </div>
                <a href="#berita" class="text-link desktop-link">Semua berita <span>↗</span></a>
            </div>
            <div class="news-grid">
                @forelse ($news as $item)
                    <article class="news-card">
                        <a href="{{ route('news.show', $item->slug) }}" class="news-image news-image-three"
                            aria-label="Baca berita: {{ $item->title }}">
                            @if ($item->image_url)
                                <img src="{{ Storage::disk('public')->url($item->image_url) }}" alt="" loading="lazy">
                            @endif
                        </a>
                        <div class="news-content">
                            <time datetime="{{ $item->date }}">
                                {{ Carbon\Carbon::parse($item->date)->translatedFormat('d F Y') }}
                            </time>
                            <h3><a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a></h3>
                            <p>{{ Str::limit(strip_tags($item->description), 100, '...') }}</p>
                            <a href="{{ route('news.show', $item->slug) }}" class="card-link">Baca selengkapnya
                                <span>↗</span></a>
                        </div>
                    </article>
                @empty
                    <div class="news-empty">
                        <span class="news-empty-icon" aria-hidden="true">۞</span>
                        <p>Belum ada berita terbaru.
                            <small>Informasi kegiatan FHAI akan hadir di sini.</small>
                        </p>
                    </div>
                @endforelse
            </div>
            @if ($news->hasPages())
                <div class="news-pagination">
                    <p class="news-pagination-summary">
                        Menampilkan <strong>{{ $news->firstItem() }}–{{ $news->lastItem() }}</strong>
                        dari <strong>{{ $news->total() }}</strong> berita
                    </p>
                    <nav class="news-pagination-links" aria-label="Navigasi halaman berita">
                        @if ($news->onFirstPage())
                            <span class="news-page-link is-disabled" aria-disabled="true">← Sebelumnya</span>
                        @else
                            <a class="news-page-link" href="{{ $news->previousPageUrl() }}#berita" rel="prev">
                                ← Sebelumnya
                            </a>
                        @endif

                        <span class="news-page-indicator" aria-current="page">
                            Halaman {{ $news->currentPage() }} dari {{ $news->lastPage() }}
                        </span>

                        @if ($news->hasMorePages())
                            <a class="news-page-link" href="{{ $news->nextPageUrl() }}#berita" rel="next">
                                Selanjutnya →
                            </a>
                        @else
                            <span class="news-page-link is-disabled" aria-disabled="true">Selanjutnya →</span>
                        @endif
                    </nav>
                </div>
            @endif
            <a href="#berita" class="text-link mobile-link">Semua berita <span>↗</span></a>
        </section>
        <section class="cta-section">
            <div class="section-wrap cta-inner">
                <div>
                    <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span> LANGKAH PERTAMAMU</p>
                    <h2>Siap menjadi bagian<br>dari <em>perjalanan kami?</em></h2>
                </div>
                <div class="cta-actions">
                    <a class="button button-light" href="https://unival.siakadcloud.com/spmbfront/jalur-seleksi"
                        target="_blank">
                        Daftar Sekarang
                        <span>↗</span>
                    </a>
                    <a class="cta-secondary" href="#program">Jelajahi Fakultas <span>↗</span></a>
                </div><span class="cta-decoration">۞</span>
            </div>
        </section>
        <section class="contact section-wrap section-space" id="kontak">
            <div class="contact-heading">
                <p class="eyebrow"><span class="eyebrow-line"></span> KAMI SIAP MENYAPA</p>
                <h2>Mari terhubung<br><em>dengan kami.</em></h2>
                <p>Punya pertanyaan tentang program atau pendaftaran? Tim kami siap membantu.</p>
            </div>
            <div class="contact-details">
                @forelse ($contacts as $contact)
                    <a href="tel:" '{{ $contact->phone }}'>
                        <span class="contact-icon">↗</span>
                        <small>TELEPON</small>
                        <strong>{{ $contact->phone }}</strong>
                    </a>
                    <a href="mailto:" '{{ $contact->email }}'>
                        <span class="contact-icon">↗</span>
                        <small>EMAIL</small>
                        <strong>{{ $contact->email }}</strong>
                    </a>
                @empty
                    <a href="tel:+62254601234">
                        <span class="contact-icon">↗</span>
                        <small>TELEPON</small>
                        <strong>+62 254 601 234</strong>
                    </a>
                    <a href="mailto:fhai@unival-cilegon.ac.id">
                        <span class="contact-icon">↗</span>
                        <small>EMAIL</small><strong>fhai@unival-cilegon.ac.id</strong>
                    </a>
                @endforelse
                <div>
                    <span class="contact-icon">⌖</span><small>ALAMAT</small>
                    <strong>
                        Jl. Kh.Enggus Arja No.1, Kec. Citangkil, Kota Cilegon
                    </strong>
                </div>
            </div>
            <div class="map-card">
                <iframe class="map-embed" title="Peta lokasi Universitas Al-Khairiyah" loading="lazy"
                    referrerPolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.8390762881586!2d106.03968747476215!3d-6.016819993968526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418e153492ffff%3A0xaabad81c1107ac4a!2sUNIVERSITAS%20AL-KHAIRIYAH!5e0!3m2!1sid!2sid!4v1787132893189!5m2!1sid!2sid">
                </iframe>
                <div class="map-label">
                    <span class="map-label-icon" aria-hidden="true">⌖</span>
                    <span class="map-label-copy">
                        <strong>Universitas Al-Khairiyah</strong>
                        <small>Jl. Kh.Enggus Arja No.1, Kec. Citangkil, Kota Cilegon</small>
                    </span>
                    <a class="map-directions"
                        href="https://www.google.com/maps/search/?api=1&amp;query=Universitas+Al-Khairiyah+Cilegon"
                        target="_blank" rel="noreferrer">Petunjuk arah ↗</a>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="section-wrap">
            <div class="footer-main">
                <div class="footer-brand">
                    <a class="brand brand-footer" href="#home">
                        <span class="brand-mark">
                            <img src="{{ asset('assets/logo/unival.webp') }}" width="40" height="40" alt="unival">
                        </span>
                        <span class="brand-name">
                            Fakultas Hukum Agama Islam
                            <small>UNIVERSITAS AL-KHAIRIYAH</small>
                        </span>
                    </a>
                    <p class="footer-motto">Berilmu, berintegritas, membawa maslahat.</p>
                </div>
                <div class="footer-column">
                    <h4>JELAJAHI</h4>
                    <a href="#tentang">Tentang kami</a>
                    <a href="#visi">Visi &amp; Misi</a>
                    <a href="#program">Program Studi</a><a href="#berita">Berita</a>
                </div>
                <div class="footer-column">
                    <h4>AKSES CEPAT</h4>
                    @forelse ($contacts as $contact)
                        <a href="tel:" '{{ $contact->phone }}'>
                            Email
                        </a>
                        <a href="mailto:" '{{ $contact->email }}'>
                            Phone
                        </a>
                    @empty
                        <a href="mailto:alkhairiyah.university@gmail.com">
                            Email
                        </a>
                        <a href="tel:+02547877057">
                            Phone
                        </a>
                    @endforelse
                    <a href="https://maps.app.goo.gl/aaANvAizKfh4mW5V6" target="_blank">Alamat</a>
                    <a href="https://unival.siakadcloud.com/spmbfront/jalur-seleksi" target="_blank">Pendaftaran</a>
                </div>
                <div class="footer-column footer-social">
                    <h4>IKUTI KAMI</h4>
                    <a href="https://www.instagram.com/fhai.unival" target="_blank" rel="noreferrer">
                        Instagram ↗
                    </a>
                    <a href="https://www.facebook.com/share/1HguKtbAgh/" target="_blank" rel="noreferrer">
                        Facebook ↗
                    </a>
                    <a href="https://www.youtube.com/@MajelisIlmuAl-Khairiyah20" target="_blank" rel="noreferrer">
                        YouTube ↗
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <span>
                    © {{ now()->year }} Fakultas Hukum Agama Islam Universitas Al-Khairiyah.
                    Hak cipta
                    dilindungi.
                </span>
                <span class="footer-credit">
                    Developed By
                    <a href="https://linkedin.com/in/ardhiityo" target="_blank">
                        <span style="color: white;">Arya Adhi Prasetyo</span>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
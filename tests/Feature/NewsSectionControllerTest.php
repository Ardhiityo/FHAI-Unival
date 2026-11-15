<?php

use App\Models\NewsSection;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('news cards link to their detail page', function () {
    $newsSection = NewsSection::create([
        'title' => 'Diskusi Hukum Kampus',
        'slug' => 'diskusi-hukum-kampus',
        'description' => '<p>Berita kampus terbaru.</p>',
        'date' => '2026-11-15',
    ]);

    $response = $this->get('/');

    $response->assertOk()
        ->assertSee(route('news.show', $newsSection->slug));
});

test('it shows an empty state instead of dead news links', function () {
    $response = $this->get('/');

    $response->assertOk()
        ->assertSee('Belum ada berita terbaru.')
        ->assertDontSee('Baca berita seminar hukum');
});

test('news pagination displays one article per page and navigates to the next page', function () {
    $latestNews = NewsSection::create([
        'title' => 'Berita terbaru',
        'slug' => 'berita-terbaru',
        'description' => '<p>Berita yang lebih baru.</p>',
        'date' => '2026-11-15',
    ]);

    $olderNews = NewsSection::create([
        'title' => 'Berita sebelumnya',
        'slug' => 'berita-sebelumnya',
        'description' => '<p>Berita yang lebih lama.</p>',
        'date' => '2026-11-14',
    ]);

    $firstPage = $this->get('/');

    $firstPage->assertOk()
        ->assertSee($latestNews->title)
        ->assertDontSee($olderNews->title)
        ->assertSee('Halaman 1 dari 2')
        ->assertSee('page=2#berita');

    $secondPage = $this->get('/?page=2');

    $secondPage->assertOk()
        ->assertSee($olderNews->title)
        ->assertDontSee($latestNews->title)
        ->assertSee('Halaman 2 dari 2')
        ->assertSee('page=1#berita');
});

test('it renders the matching news article and sanitizes rich content', function () {
    $newsSection = NewsSection::create([
        'title' => 'Diskusi Hukum Kampus',
        'slug' => 'diskusi-hukum-kampus',
        'description' => '<p>Berita <strong>penting</strong> untuk mahasiswa.</p><script>alert("xss")</script>',
        'date' => '2026-11-15',
    ]);

    $response = $this->get(route('news.show', $newsSection->slug));

    $response->assertOk()
        ->assertViewIs('news-detail')
        ->assertViewHas('newsSection', fn (NewsSection $article): bool => $article->is($newsSection))
        ->assertSee($newsSection->title)
        ->assertSee('Berita penting untuk mahasiswa.');

    expect($response->getContent())->toContain('<strong>penting</strong>');
    expect($response->getContent())->not->toContain('<script>');
    expect($response->getContent())->not->toContain('alert("xss")');
});

test('it returns not found for an unknown news slug', function () {
    $this->get(route('news.show', 'artikel-tidak-ada'))
        ->assertNotFound();
});

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Alat elektronik', 'deskripsi' => 'Perangkat berbasis listrik untuk operasional umum.'],
            ['nama' => 'Alat praktikum/teknis', 'deskripsi' => 'Peralatan untuk kegiatan praktik dan kebutuhan teknis.'],
            ['nama' => 'Alat olahraga', 'deskripsi' => 'Peralatan untuk aktivitas olahraga dan kebugaran.'],
            ['nama' => 'Alat kebersihan', 'deskripsi' => 'Peralatan untuk pemeliharaan kebersihan lingkungan.'],
            ['nama' => 'Alat acara', 'deskripsi' => 'Perlengkapan penunjang kegiatan dan penyelenggaraan acara.'],
            ['nama' => 'Alat seni dan dokumentasi', 'deskripsi' => 'Peralatan untuk kegiatan seni, visual, dan dokumentasi.'],
            ['nama' => 'Alat laboratorium dasar', 'deskripsi' => 'Perlengkapan eksperimen dasar di laboratorium.'],
            ['nama' => 'Alat keamanan', 'deskripsi' => 'Peralatan untuk kebutuhan pengamanan lingkungan dan kegiatan.'],
            ['nama' => 'Alat transportasi internal', 'deskripsi' => 'Peralatan mobilitas dalam area internal.'],
            ['nama' => 'Alat perbengkelan', 'deskripsi' => 'Peralatan kerja untuk perbaikan dan perbengkelan.'],
            ['nama' => 'Alat pertukangan ringan', 'deskripsi' => 'Peralatan tukang untuk pekerjaan ringan.'],
            ['nama' => 'Alat pengukuran', 'deskripsi' => 'Peralatan untuk pengukuran teknis dan operasional.'],
            ['nama' => 'Alat jaringan dan IT', 'deskripsi' => 'Peralatan infrastruktur teknologi dan jaringan.'],
            ['nama' => 'Alat dapur operasional', 'deskripsi' => 'Peralatan dapur untuk kebutuhan operasional.'],
            ['nama' => 'Alat perawatan taman', 'deskripsi' => 'Perlengkapan pemeliharaan taman dan area hijau.'],
            ['nama' => 'Alat penyimpanan dan logistik', 'deskripsi' => 'Peralatan penyimpanan dan pendukung logistik.'],
            ['nama' => 'Alat kesehatan non-medis berat (tandu, kotak P3K dasar)', 'deskripsi' => 'Peralatan bantuan kesehatan non-medis.'],
            ['nama' => 'Alat konstruksi ringan', 'deskripsi' => 'Peralatan untuk pekerjaan konstruksi skala kecil.'],
            ['nama' => 'Alat pencahayaan portabel', 'deskripsi' => 'Peralatan pencahayaan yang mudah dipindahkan.'],
            ['nama' => 'Alat panggung dan audio dasar', 'deskripsi' => 'Perlengkapan dasar panggung dan audio.'],
        ];

        DB::table('kategori')->insert($data);
    }
}

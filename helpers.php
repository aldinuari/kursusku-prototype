<?php

/**
 * Mengubah angka menjadi format rupiah untuk ditampilkan.
 */
function rupiah(int $amount): string
{
    return 'Rp ' . number_format($amount, 0, ',', '.');
}

/**
 * Menentukan status kursus berdasarkan quota dan jumlah pendaftar.
 */
function statusKursus(int $quota, int $registered): string
{
    return $registered >= $quota ? 'Penuh' : 'Tersedia';
}

/**
 * Menghitung sisa kursi yang tersedia. Tidak pernah menghasilkan angka negatif.
 */
function sisaKursi(int $quota, int $registered): int
{
    return max(0, $quota - $registered);
}

/**
 * Mengubah format tanggal sumber (Y-m-d) menjadi format tampil (d-m-Y).
 */
function formatTanggal(string $date): string
{
    $value = new DateTimeImmutable($date);
    return $value->format('d-m-Y');
}

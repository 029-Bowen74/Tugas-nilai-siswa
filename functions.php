<?php
// function untuk menghitung rata-rata
function hitungRataRata($nilai)
{
    $total = 0;
    foreach ($nilai as $n) {
        $total = $total + $n;
    }

    // count() untuk menghitung jumlah nilai
    $jumlah = count($nilai);
    $rata = $total / $jumlah;

    return $rata;
}

// function untuk cek status kelulusan
function cekKelulusan($rata)
{
    if ($rata >= 80) {
        return "Lulus Sangat Baik";
    } elseif ($rata >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}
?>

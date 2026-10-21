<?php
// file yang harus ada
require_once "data.php";
require_once "functions.php";

// memanggil tampilan
include "header.php";
include "navbar.php";
?>

<h3>Daftar Nilai Siswa</h3>
<p>Jumlah siswa: <?php echo count($siswa); ?></p>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nilai</th>
        <th>Rata-rata</th>
        <th>Status</th>
    </tr>

    <?php
    $no = 1;
    foreach ($siswa as $s) {
        $rata = hitungRataRata($s["nilai"]);
        $status = cekKelulusan($rata);
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $s["nama"]; ?></td>
        <td><?php echo implode(", ", $s["nilai"]); ?></td>
        <td><?php echo round($rata, 2); ?></td>
        <td><?php echo $status; ?></td>
    </tr>
    <?php
        $no++;
    }
    ?>
</table>

<?php include "footer.php"; ?>

<?php
session_start();
if (!isset($_SESSION['Pendataan Balita'])) {
    header("Location: ../login.php");
    exit();
}

if (isset($_POST['kembali']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $stmt = $conn->prepare("SELECT umur bayi, tinggi badan bayi, berat badan bayi FROM keterangan kesehatan WHERE id = ?");
    $stmt->execute([$id]);
    $pendataan = $stmt->fetch();

    if ($keterangan_kesehatan) {
        $tinggi_badan_bayi = $keterangan_kesehatan['tinggi badan bayi'];
        $berat_badan_bayi = $keterangan_kesehatan['berat badan bayi'];
        $umur_bayi = $keterangan_kesehatan['umur bayi'];
        $keterangan_kesehatan= [
            '0' => 46-53,2-4,
            '1' => 51-58,3-6,
        ];
        $tinggi_badan_bayi[$berat_badan_bayi] += $umur_bayi;

        $stmt = $conn->prepare("DELETE FROM pendataan WHERE id = ?");
        $stmt->execute([$id]);
        echo "<div class='success-message'>berhasil di data</div>";
    }
}

$stmt = $conn->query("SELECT * FROM pendataan");
$pendataan = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pendataan - Posyandu Serumpun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="manage-container">
        <h2>Kelola Pendataan</h2>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Bayi</th>
                        <th>jenis kelamin</th>
                        <th>Umur Bayi</th>
                        <th>Tinggi Badan Bayi</th>
                        <th>Berat Badan Bayi</th>
                        <th>keterangan kesehatan</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['nama_bayi']; ?></td>
                            <td><?php echo $item['umur_bayi']; ?></td>
                            <td><?php echo $item['tinggi_badan_bayi']; ?></td>
                            <td><?php echo $item['berat_badan_bayi']; ?></td>
                            <td><?php echo $item['keterangan_kesehatan']; ?></td>
                            <td>
                                <from action="manage.php" method="POST" style="display: inline;">
                                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                <button type="submit" name="kembali" class="btn-return">selesai</button>  
                                </from>
                            </td>
                        </tr>
                </tbody>
            </table>

        </div>
                        <div class="manage-actions">
            <a href="dashboard.php" class="btn-back">Kembali</a>
            <a href="../logout.php" class="btn-logout">Logout</a>
        </div>
    </div>
</body>
</html>
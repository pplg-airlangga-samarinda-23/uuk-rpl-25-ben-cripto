REATE DATABASE IF NOT EXISTS Pendataan_Balita;
USE Pendataan_Balita;

CREATE TABLE IF NOT EXISTS pendataan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_bayi text NOT NULL,
    umur_bayi int(11),
    tinggi_badan int(11),
    berat_badan int(11),
    keterangan_kesehatan text NOT NULL,
);
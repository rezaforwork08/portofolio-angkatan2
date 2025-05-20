<?php
// tas

// $nama = array();
// $nama = [];

// array index (data nya bisa lebih dari 1)
$nama = array('Reza', 'Ibrahim', 'Rudi', 'Wawan');
// 0        1        2      3
// $nama = "reza, rudi, bambang";

print_r($nama);
echo "<br>";
echo "<br>";

echo $nama[0];
echo "<br>";
echo $nama[1];
echo "<br>";
echo $nama[2];
echo "<br>";
echo $nama[3];
echo "<br>";

$buah = ["Nanas", "Semangka", "Pepaya", "Pir"];
print_r($buah);
echo "<br>";
foreach ($buah as $b) {
    echo "Nama-nama buah " . $b . "<br>";
}

// array asosiatif : key nya menggunakan string
$kelas_web = [
    "nama" => "Budi",
    "umur" => 25,
    "jurusan" => "Junior Web Prog"
];

echo "Nama siswa " . $kelas_web["nama"] . " Umur " . $kelas_web['umur'] . " Jurusan " . $kelas_web['jurusan'];
echo "<br>";
echo "<br>";

$siswa = [
    [
        "nama" => "Reza",
        "umur" => 30,
        "jurusan" => "Junior Web Prog",
    ],
    [
        "nama" => "Bambang",
        "umur" => 28,
        "jurusan" => "Junior Web Prog",
    ],
];
print_r($siswa);
echo "<br>";
// echo $siswa[1]['nama']; //Bambang
foreach ($siswa as $key => $sw) {
    echo "Key:" . $key . "<br>";
    echo "Nama : " . $sw['nama'] . "<br>";
    echo "Umur : " . $sw['umur'] . "<br>";
    echo "Jurusan : " . $sw['jurusan'] . "<br>";
    echo "<br>";
}
// [0 => "nama", 1 => "nama"]

// $siswa = array(
//     array(),
//     array()
// );

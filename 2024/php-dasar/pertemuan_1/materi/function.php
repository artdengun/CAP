<?php 
function nama_fungsi($parameter1, $parameter2, $paramater3){
    $hasil = $parameter1+$paramater3+$parameter2;
    return $hasil; // opsional
}

function sapa($nama) {
    return "Halo, $nama!";
}
function hitungLuasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}
echo nama_fungsi(5, 2, 10);
echo hitungLuasPersegiPanjang(5, 3);
echo sapa("Budi"); // Output: Halo, Budi!

?>

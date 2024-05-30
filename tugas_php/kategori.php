<?php
$nama = "Asep Bensin";
$tinggi = 1.70;
$berat = 60;
$BMI = $berat / ($tinggi**2);
if ($BMI < 18.5) {
    echo "hallo, $nama, Nilai BMI anda adalah $BMI, anda termasuk kurus";
}elseif ($BMI >= 18.5 && $BMI <= 24.9) {
    echo "hallo, $nama, Nilai BMI anda adalah $BMI, anda termasuk sedang";
} else {
    echo "hallo, $nama, Nilai BMI anda adalah $BMI, anda termasuk gemuk";
}

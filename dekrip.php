<?php
function DBString($params = '') {
    // Decode base64 dan urldecode terlebih dahulu
    $str = base64_decode(urldecode($params));
    $return = '';
    $secret = "VNhfjei3_jGhhka298!!oi(isa39JD(32jfj9fnuerwn%fdji*ns!d2Plfm12219";

    // Loop untuk melakukan dekripsi karakter per karakter
    for ($i = 0; $i < strlen($str); $i++) {
        $character = substr($str, $i, 1);
        $secretCharacter = substr($secret, ($i % strlen($secret)) - 1, 1);
        $character = chr(ord($character) - ord($secretCharacter));
        $return .= $character;
    }
    return $return;
}

// String yang akan didekripsi
$encoded_string = "OysydgqKl1"; // Ganti dengan string yang ingin Anda pecahkan
echo DBString($encoded_string);
?>
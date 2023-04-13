<?php
    $plaintext = "Helloindians";
    $key = "5";
    function ccEncrypt($plaintext, $key) {
    $plaintext = strtoupper($plaintext);
    $ciphertext = "";
    $slength = strlen($plaintext);
    for ($i=0; $i<$slength; $i++) {
        if (ctype_alpha($plaintext[$i])) {
            $asciivalue = ord($plaintext[$i]);
            $asciivalue = (($asciivalue + $key) % 26) + 65;
            $ciphertext .= chr($asciivalue);
        } else {
            $ciphertext .= $plaintext[$i];
        }
    }
    return $ciphertext;
}
$ciphertext = ccEncrypt($plaintext, $key);
echo "Cipher text: " . $ciphertext;
$plaintext = readline("Enter plain text: ");
$key = (int) readline("Enter key: ");
$ciphertext = ccEncrypt($plaintext, $key);
echo "Cipher text of the given plain text: " . $ciphertext;
?>

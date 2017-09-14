<?php
// Define a 32-byte (64 character) hexadecimal encryption key
// Note: The same encryption key used to encrypt the data must be used to decrypt the data
define('ENCRYPTION_KEY', 'd0a7e7997b6d5fcd55f4b5c32611b87cd923e88837b63bf2941ef819dc8ca282');
// Encrypt Function
function mc_encrypt($encrypt, $key){
    $encrypt = serialize($encrypt);
    $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
    $key = pack('H*', $key);
    $mac = hash_hmac('sha256', $encrypt, substr(bin2hex($key), -32));
    $passcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $encrypt.$mac, MCRYPT_MODE_CBC, $iv);
    $encoded = base64_encode($passcrypt).'|'.base64_encode($iv);
    return $encoded;
}
// Decrypt Function
function mc_decrypt($decrypt, $key){
    $decrypt = explode('|', $decrypt.'|');
    $decoded = base64_decode($decrypt[0]);
    $iv = base64_decode($decrypt[1]);
    if(strlen($iv)!==mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC)){ return false; }
    $key = pack('H*', $key);
    $decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $decoded, MCRYPT_MODE_CBC, $iv));
    $mac = substr($decrypted, -64);
    $decrypted = substr($decrypted, 0, -64);
    $calcmac = hash_hmac('sha256', $decrypted, substr(bin2hex($key), -32));
    if($calcmac!==$mac){ return false; }
    $decrypted = unserialize($decrypted);
    return $decrypted;
}
/*
echo '<h1>Rijndael 256-bit CBC Encryption Function</h1>';
$data = 'Super secret confidential string data.';
$encrypted_data = mc_encrypt($data, ENCRYPTION_KEY);
echo '<h2>Example #1: String Data</h2>';
echo 'Data to be Encrypted: ' . $data . '<br/>';
echo 'Encrypted Data: ' . $encrypted_data . '<br/>';
echo 'Decrypted Data: ' . mc_decrypt($encrypted_data, ENCRYPTION_KEY) . '</br>';
$data = array(1, 5, 8, 9, 22, 10, 61);
$encrypted_data = mc_encrypt($data, ENCRYPTION_KEY);
echo '<h2>Example #2: Non-String Data</h2>';
echo 'Data to be Encrypted: <pre>';
print_r($data);
echo '</pre><br/>';
echo 'Encrypted Data: ' . $encrypted_data . '<br/>';
echo 'Decrypted Data: <pre>';
print_r(mc_decrypt($encrypted_data, ENCRYPTION_KEY));
echo '</pre>';*/
?>
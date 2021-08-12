<?php
require_once "config_key.php";
class Secrypt {
    private static $key = ENCRYPT_KEY;
    private static $method = "AES-256-CBC";
    // validatin the input
    public static function validation($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        return $data;
    }
    // encrypt the string using the key
    public static function encrypt($data) {
        $data = self::validation($data);
        $key_iv = md5(self::$key);
        $iv = substr(self::$key, 0, 16);
        $encrypted_text = base64_encode(openssl_encrypt($data, self::$method, self::$key, 0, $iv));
        return $encrypted_text;
    }
    // decrypt data
    public static function decrypt($data) {
        $data = self::validation($data);
        $key_iv = md5(self::$key);
        $iv = substr(self::$key, 0, 16);
        $decrypted_data = openssl_decrypt(base64_decode($data), self::$method, self::$key, 0, $iv);
        return $decrypted_data;
    }
}
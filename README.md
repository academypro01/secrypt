# Secrypt

Secure data encryption using openssl.

## Installation

first of all add `Secrypt.php` to your script.

```php
include_once "dist/Secrypt.php";
```
then add your `Secret key` in `config_key.php`
```php
$your_key = [your secret key should be here];
```

## Usage
Encrypt data:
```php
Secrypt::encrypt("your text");
```
it will encrypt the text and returned it.

Decrypt data:
```php
Secrypt::decrypt("Encrypted text");
```
it will decrypt and return plaintext.
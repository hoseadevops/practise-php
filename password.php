<?php
/**
 * 密码加密 http://php.net/manual/zh/function.password-hash.php
 * @param $password
 * @param int $cost
 * @return bool|string
 */
function encryptionPassword($password, $cost = 10){
    return password_hash($password, PASSWORD_BCRYPT, ['cost' => $cost]);
}


/**
 * 验证密码 http://php.net/manual/zh/function.password-verify.php
 * @param $password
 * @param $hash
 * @return bool
 */
function validatePassword($password, $hash){
    return password_verify($password, $hash);
}

$password = 'admin123';

$hash = encryptionPassword($password);
echo $hash . "\n";

$valid = validatePassword($password,$hash);
echo print_r($valid, true);

echo "\n";

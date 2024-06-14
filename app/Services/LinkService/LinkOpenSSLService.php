<?php

declare(strict_types=1);

namespace App\Services\LinkService;

class LinkOpenSSLService implements LinkServiceInterface
{
    protected string $ciphering = 'AES-128-CTR';

    protected int $options = 0;
    protected string $encryptionIv = '1234567891011121';
    protected string $encryptionKey = 'EncryptionKey';

    public function encodeString(string $email = null): string
    {
        return $this->validateEmail($email)
            ? openssl_encrypt($email, $this->ciphering, $this->encryptionKey, $this->options, $this->encryptionIv)
            : '';
    }

    public function decodeString(string $encodedEmail = null): string
    {
        if ($encodedEmail === null || $encodedEmail === '') {
            return '';
        }

        $email = openssl_decrypt(
            $encodedEmail,
            $this->ciphering,
            $this->encryptionKey,
            $this->options,
            $this->encryptionIv
        );

        return $this->validateEmail($email) ? $email : '';
    }

    public function validateEmail(string $email = null): bool
    {
        return (bool)filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}

<?php

declare(strict_types=1);

namespace App\Services\LinkService;

class LinkBase64Service implements LinkServiceInterface
{
    public function encodeString(string $email = null): string
    {
        return $this->validateEmail($email) ? base64_encode($email) : '';
    }

    public function decodeString(string $encodedEmail = null): string
    {
        if ($encodedEmail === null || $encodedEmail === '') {
            return '';
        }

        $email = base64_decode($encodedEmail);

        return $this->validateEmail($email) ? $email : '';
    }

    public function validateEmail(string $email = null): bool
    {
        return (bool)filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}

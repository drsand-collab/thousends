<?php

declare(strict_types=1);

namespace App\Services\LinkService;

interface LinkServiceInterface
{
    public function encodeString(string $email): string;

    public function decodeString(string $encodedEmail): string;

    public function validateEmail(string $email): bool;
}

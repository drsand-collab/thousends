<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SimpleOperation
{
    use HasFactory;

    protected int $limitData;
    protected int $chunk = 1000;

    public function __construct(protected SimpleDataFactory $simpleData)
    {
        $this->limitData = $simpleData->getLimit();
    }

    public function getListData($start): array
    {
        if ($start < 0 || $start > $this->limitData) {
            return [];
        }

        $offset = ($start + $this->getChunk()) > $this->limitData
            ? $this->limitData - $start
            : $this->getChunk();

        $generator = $this->generateData($offset);

        return collect($generator)->map(function ($item) {
            return $item;
        })
            ->toArray();
    }

    public function generateData(int $chunk = 0): \Generator
    {
        $chunk = $chunk === 0 ? $this->getChunk() : $chunk;

        for ($i = 0; $i < $chunk; $i++) {
            yield $this->simpleData->getData();
        }
    }

    public function getLimitData(): int
    {
        return $this->limitData;
    }

    public function getChunk(): int
    {
        return $this->chunk;
    }

}

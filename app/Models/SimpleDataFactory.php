<?php

namespace App\Models;

use Faker\Factory as Faker;

class SimpleDataFactory
{
    private \Faker\Generator $faker;

    protected int $limit = 10000;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getData(): array
    {
        return [
            'title' => $this->faker->name(),
            'company' => $this->faker->company(),
        ];
    }
}

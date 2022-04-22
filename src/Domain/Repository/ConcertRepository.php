<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Model\Concert;

interface ConcertRepository
{
    public function create(Concert $concert): void;
    public function read(int $id): Concert;
    public function update(Concert $concert): void;
    public function delete(int $id): void;
}
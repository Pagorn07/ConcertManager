<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Model\Promoter;

interface PromoterRepository
{
    public function create(Promoter $promoter): void;
    public function read(int $id): Promoter;
    public function update(Promoter $promoter): void;
    public function delete(int $id): void;
}

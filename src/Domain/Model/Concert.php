<?php

declare(strict_types=1);

namespace App\Domain\Model;

use DateTime;

class Concert
{
    private int $id;
    private int $idPromoter;
    private int $idEnclosure;
    private string $name;
    private int $numberOfSpectators;
    private DateTime $date;
    private int $profitableness;
}

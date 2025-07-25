<?php

declare(strict_types=1);

namespace App\Repository;

use PDO;

/**
 * @template T
 */
abstract readonly class Repository
{
    protected PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

}

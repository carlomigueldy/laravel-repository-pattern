<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface
{
    /**
     * @param int $modelId
     * @return null|Model
     */
    public function findById(int $modelId): ?Model;

    public function get(): Collection;

    public function create(): Collection;

    public function update();
}

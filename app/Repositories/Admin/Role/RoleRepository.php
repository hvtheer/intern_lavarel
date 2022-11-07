<?php

namespace App\Repositories\Admin\Role;

use App\Repositories\BaseRepository;
use App\Models\Role;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    public function __construct(Role $model)
    {
        $this->model = $model;
    }
}

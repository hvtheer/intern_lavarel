<?php

namespace App\Repositories\Admin\Permission;

use App\Repositories\BaseRepository;
use App\Models\Permission;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    public function __construct(Permission $model)
    {
        $this->model = $model;
    }
}

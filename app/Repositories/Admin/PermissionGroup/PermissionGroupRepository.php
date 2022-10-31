<?php
namespace App\Repositories\Admin\PermissionGroup;

use App\Repositories\BaseRepository;
use App\Models\PermissionGroup;

class PermissionGroupRepository extends BaseRepository implements PermissionGroupRepositoryInterface
{
    public function __construct(PermissionGroup $model)
    {
        $this->model = $model;
    }
}

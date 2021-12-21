<?php

namespace App\Services;

use App\Base\Service\BaseService;
use App\Models\IssueModel;

class IssueService extends BaseService
{
    public $model;

    public function __construct()
    {
        $this->model = new IssueModel();
    }

}

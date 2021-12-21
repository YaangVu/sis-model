<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Base\Controller\BaseController;
use App\Services\IssueService;
use App\Models\IssueModel;

class IssueController extends BaseController
{
    public $service;

    public function __construct()
    {
        $this->service = new IssueService();
    }
}
?>
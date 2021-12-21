<?php
namespace App\Base\Controller;

use App\Http\Controllers\Controller;
use App\Models\IssueModel;
use App\Services\IssueService;
use App\Base\Service\BaseService;
use App\Base\Model\BaseModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


abstract class BaseController extends Controller
{
    public $service;

    abstract public function __construct();

    public function index()
    {
        return response()->json($this->service->getAll());
    }

    public function create()
    {
//        return response()->json($this->service->create());
    }


    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'summary'   => 'bail|required|min:5|max:100',
            ],
            [
                'summary.min'        => 'Bạn nhập tên quá ngắn',
                'summary.max'        => 'Bạn nhập tên quá dài',
            ]
        );
        return response()->json($this->service->create($request));
    }


    public function show($id)
    {
        return response()->json($this->service->show($id));

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request,$id)
    {
        return response()->json($this->service->update($id, $request));
    }


    public function destroy($id)
    {
        return response()->json($this->service->delete($id));

    }


}

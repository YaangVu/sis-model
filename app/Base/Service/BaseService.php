<?php

namespace App\Base\Service;

use Exception;
use Illuminate\Http\Request;

abstract class BaseService
{
    public $model;

    abstract public function __construct();

    public function getAll()
    {
        try {
            return $this->model->all();
        } 
        catch (Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
    }

    public function show($id)
    {
        try {
            return $this->model->findorFail($id);
        } 
        catch (Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
    }

    public function create($request)
    {
        $this->model->create($request->all());
        return $this->model->all();
    }

    public function update($id, $request)
    {
        $this->model->find($id)->update($request->all());
        return $this->model->find($id);
    }

    public function delete($id)
    {
        $data = $this->model->find($id);
        $data->delete();
    }
}

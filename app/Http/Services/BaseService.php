<?php


namespace App\Http\Services;


abstract class BaseService
{
    public function __construct()
    {
        $this->model = app($this->model());
    }

    /**
     * Returning all response from a model.
     * @return mixed
     */
    public function all() {
        return $this->model->all();
    }
    /**
     * @param $insertData
     * Create a Model
     * @return mixed
     */
    public function create($insertData) {
        return $this->model->create($insertData);
    }

    abstract public function model();
}

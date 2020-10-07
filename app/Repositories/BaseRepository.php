<?php


namespace App\Repositories;


class BaseRepository
{
    protected $model;

    public function search($where = null, $whereDate = null, $orderBy = null, $limit = null, $select = null){
        $model = $this->model;
        if (!empty($where)) {
            $model = $this->model->where($where);
        }
        if (!empty($whereDate)){
            $model = $model->whereDate($whereDate);
        }
        if (!empty($orderBy)) {
            foreach ($orderBy as $item){
                if (count($item) == 2){
                    $model = $model->orderBy($item[0],$item[1]);
                }
                if (count($item) == 1){
                    $model = $model->orderBy($item[0]);
                }
            }
        }
        if (!empty($limit)) {
            $model = $model->limit($limit);
        }
        if (!empty($select)){
            $model = $model->select($select);
        }
        return $model->get();
    }

    public function store($input){
        // fill 方法会将传参的键值数组填充到模型的属性中
        // 类似于：$modelObject->column = value;
        $this->model->fill($input);
        $this->model->save();
        return $this->model;
    }

    public function update($id, $input){
        $this->model = $this->getById($id);
        $this->model->fill($input);
        $this->model->save();
        return $this->model;
    }

    public function batchUpdate($where,$input){
        return $this->model->where($where)->update($input);
    }

    public function updateOrCreate($where,$input){
        return $this->model->updateOrCreate(
            [$where],
            [$input]
        );
    }

    public function getSingleRecord($where, $isFail = true)
    {
        $model = $this->model->where($where);
        if ($isFail) {
            return $model->firstOrFail();
        } else {
            return $model->first();
        }
    }

    public function getCount($where){
        return $this->model->where($where)->count();
    }

    public function getById($id, $isFail = true)
    {
        if ($isFail) {
            return $this->model->findOrFail($id);
        } else {
            return $this->model->find($id);
        }
    }

    public function checkExist($where = null){
        return $this->model->where($where)->exists();
    }

    public function delete($id)
    {
        $this->model = $this->getById($id);
        $this->model->is_exist = 0;
        $this->model->save();
        return $this->model;
    }
}

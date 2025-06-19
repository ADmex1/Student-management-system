<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

trait HasFile{
    public function upload_file(Request $request, string $column, string $folder): ?string
    {
        return $request->hasfile($column) ? $request($column)->store($folder): null;
    }
    public function update_file(Request $request, Model $model, string $column, string $folder): ?string
    {
        if($request->hasfile($column)){
            $thumbnail-> $request-> file($column)->store($folder);
        }else{
            $thumbnail = $model->column();
        }
    }
    public function delete_file(Model $model, string $column):void
    {
        if($model->$column){
            Storage::delete($model->column);
        }
    }
}
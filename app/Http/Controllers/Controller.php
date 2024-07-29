<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function imageDelete($oldImage)
    {
        if (file_exists($oldImage)) {
            $remove = unlink($oldImage);
        } else {
            $remove = false;
        }
        return $remove;
    }

    protected function image_upload($file, $folder)
    {
        $product_file = $file;
        $file_extention = $product_file->getClientOriginalExtension();
        $product_image_name = time() . rand() . '.' . $file_extention;
        $product_file->move($folder, $product_image_name);
        return $product_image_name;
    }
   


    protected function image_updated($file, $folder, $old_file)
    {
        if ($old_file != null && is_string($old_file) && file_exists($folder . $old_file)) {
            unlink($folder . $old_file);
        }

        $product_file = $file;
        $file_extension = $product_file->getClientOriginalExtension();
        $product_image_name = time() . rand() . '.' . $file_extension;
        $product_file->move($folder, $product_image_name);
        return $product_image_name;
    }
    protected function statusUpdate($model, $id)
    {
        $get_model = 'App\Models\\' . $model;
        $data = $get_model::find($id);
        if (!$data) {
            return back()->with(['error','Data not found']);
        }
        $data->status = !$data->status;
        $success = $data->save();
        if ($success) {
            return back()->with(['success',' updated successfully']);
        } else {
            return back()->with(['warning','Something went wrong']);
        }
    }
}
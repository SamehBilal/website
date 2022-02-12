<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne(User::class  , "id" , "by_id");
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            //'name'             => "required|min:3|max:60|unique:invoice_layouts,name,$id",
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //'name'             => "required|min:3|max:60|unique:invoice_layouts",
        ]);
    }
}

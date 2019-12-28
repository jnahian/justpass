<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Password extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public static function encrypt_password($password)
    {
        return encrypt($password);
    }

    public static function decrypt_password($password)
    {
        return decrypt($password);
    }

    public function newQuery($excludeDeleted = true)
    {
        $user_id = Auth::user()->id;
        return parent::newQuery($excludeDeleted)
            ->where('user_id', $user_id);
    }

    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword != '') {
            $query->where(function ($query) use ($keyword) {
                $query->where("site_name", "LIKE", "%$keyword%")
                    ->orWhere("account_name", "LIKE", "%$keyword%")
                    ->orWhere("username", "LIKE", "%$keyword%")
                    ->orWhere("email", "LIKE", "%$keyword%")
                    ->orWhere("category", "LIKE", "%$keyword%")
                    ->orWhere("phone", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id',
        'business_name',
        'city',
        'address',
        'proof',
        'is_Verified'

    ];

    public static function catsearch($request){
        if ($request['category'] ?? false) {
            Business::whereHas('categories', function($q) use ($request){
                $q->where('categories_id', '=', $request['category']);
            })->where('city','=',$request->city)->get();

        }
        else{
            Business::where('city','=',$request->city)->get();
        }
    }

    public function scopeFilter($query, array $filter)
    {

        if ($filter['category'] ?? false) {
            $query->with('categories')->get();

        }

//        if ($filter['search'] ?? false) {
//            $query->where('title', 'like', '%' . request('search') . '%')
//                ->orWhere('description', 'like', '%' . request('search') . '%')
//                ->orWhere('tags', 'like', '%' . request('search') . '%');
//        }
    }


    public function user(){
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function categories(){
        return $this->belongsToMany(Categories::class);
    }

    protected $table = 'business';
}

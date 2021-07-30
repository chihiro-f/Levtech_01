<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Post extends Model{
    
    use SoftDeletes;
    //SQLがUPDATE文になり、deleted_atに実行日時が設定される
    
    protected $fillable = [

        'title',
        'body',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10){
        // updated_atで降順に並べたあと、limitで件数制限をかける
        // return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();  //getByLimit()の場合
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}

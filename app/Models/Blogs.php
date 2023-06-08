<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'category',
        'tags',
        'user_id',
        'author_name',
        'img'
    ];

    //    Search blog scope//
    public function scopeFilter($query, array $filters){
        //search on index
        if($filters['search'] ?? false){
            $query->where(
                'title',
                'LIKE',
                '%'.request('search').'%'
            )->orWhere(
                'content',
                'LIKE',
                '%'.request('search').'%'
            )->orWhere(
                'category',
                'LIKE',
                '%'.request('search').'%'
            )->orWhere(
                'tags',
                'LIKE',
                '%'.request('search').'%'
            )->orWhere(
                'author_name',
                'LIKE',
                '%'.request('search').'%'
            );
        }
        if($filters['tag'] ?? false){
            $query->Where(
                'tags',
                'LIKE',
                '%'.request('tag').'%'
            );
        }

        if($filters['category'] ?? false){
            $query->Where(
                'category',
                'LIKE',
                '%'.request('category').'%'
            );
        }
    }

    //relationship between blogs and user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

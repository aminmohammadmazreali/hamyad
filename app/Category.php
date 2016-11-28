<?php

namespace App;
use Backpack\CRUD\CrudTrait;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use CrudTrait;
    protected $table='categorys';

    protected $fillable = ['name', 'description','icon'];

    /**
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        Tag::observe(new \App\Observers\UserActionsObserver);

    }


    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'category_tag')
            ->withTimestamps();
    }

    public function courses()
    {
        return $this->hasMany('App\Course');
    }
    
}

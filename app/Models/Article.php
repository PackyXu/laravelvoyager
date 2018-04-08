<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title','content','intro','published_at'];
    protected $table = 'articles';
    protected $dates = ['published_at'];


    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }

    public function user()
    {
        return $this->belongsTo('App\User');//$articles->user
    }
}

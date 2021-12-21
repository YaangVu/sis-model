<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    public function comments(){
        return $this->belongsTo('App\Models\IssueModel','issue_id','id');
    }

    public function users(){
        return $this->belongsTo('App\Models\User','user_uuid','id');
    }
}

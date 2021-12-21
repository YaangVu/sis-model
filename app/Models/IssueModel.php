<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Base\Model\BaseModel;

class IssueModel extends BaseModel
{
    use HasFactory;
    protected $fillable = ['user_uuid','summary','tag','description','due_date'];
    protected $table = 'issues';
    public $timestamps = false;
}
?>

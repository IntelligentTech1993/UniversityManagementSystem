<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceStatus extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'title', 'display_class', 'status'];

}

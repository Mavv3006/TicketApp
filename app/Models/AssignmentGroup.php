<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssignmentGroup extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'created_by_user_id',
        'managed_by_user_id',
    ];

    public function managedBy():BelongsTo
    {
        return $this->belongsTo(User::class, 'managed_by_user_id');
    }

    public function createdBy():BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }
}

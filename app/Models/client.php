<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class client extends Model
{

    use HasFactory;

    public function units ():HasMany
    {
        return $this->hasMany(unit::class);
    }

    public function transactions ():HasMany
    {
        return $this->hasMany(transaction::class);
    }

    public function users (): BelongsTo
    {
        return $this->belongsTo(user::class);
    }



}

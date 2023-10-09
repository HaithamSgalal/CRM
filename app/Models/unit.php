<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class unit extends Model
{

    use HasFactory;

    public function transactions(): HasMany
    {
        return $this->hasMany(transaction::class);
    }


    public function clients(): BelongsTo
    {
        return $this->belongsto(client::class);
    }

}

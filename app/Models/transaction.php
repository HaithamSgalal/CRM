<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class transaction extends Model
{
    use HasFactory;

    public function clients () : BelongsTo
    {
        return $this->belongsTo(client::class);
    }

    public function users () : BelongsTo
    {
        return $this->belongsTo(user::class);
    }

    public function units () : BelongsTo
    {
        return $this->belongsTo(unit::class);
    }


}

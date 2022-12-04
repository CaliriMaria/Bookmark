<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bookmarker extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'url',
      'description',
      'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id'
        );
    }

    public function tags(): BelongsToMany{
        return $this->belongsToMany(
            related: Tag::class,table: 'bookmark_tag'
        );
    }
}

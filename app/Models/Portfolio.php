<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;

    protected $fillable = ['thumbnail', 'title', 'category', 'content', 'status', 'publish_at'];

    protected function casts(): array
    {
        return ['publish_at' => 'datetime'];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')->whereNotNull('publish_at')->where('publish_at', '<=', now());
    }
}

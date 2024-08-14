<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = [
        'title',
        'summary',
        'content',
        'creator_id',
        'slug'
    ];
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }

            // Buat slug dari judul
            $model->slug = Str::slug($model->title, '-');
        });

        static::updating(function ($model) {
            // Update slug jika judul berubah
            if ($model->isDirty('title')) {
                $model->slug = Str::slug($model->title, '-');
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }
}

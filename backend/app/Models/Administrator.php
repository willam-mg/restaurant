<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Administrator extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre_completo',
        'src_foto',
        'user_id'
    ];

    protected $appends = [
        'foto',
        'foto_thumbnail',
        'foto_thumbnail_sm',
    ];

    public function user(): BelongsTo {
        return $this->BelongsTo(User::class, 'user_id');
    }

    public function getFotoAttribute() {
        return $this->src_foto ? url('/') . '/storage/uploads/' . $this->src_foto : null;
    }

    public function getFotoThumbnailAttribute() {
        return $this->src_foto ? url('/') . '/storage/uploads/thumbnail/' . $this->src_foto : null;
    }

    public function getFotoThumbnailSmAttribute() {
        return $this->src_foto ? url('/') . '/storage/uploads/thumbnail-small/' . $this->src_foto : null;
    }
}

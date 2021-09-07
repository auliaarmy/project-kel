<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}

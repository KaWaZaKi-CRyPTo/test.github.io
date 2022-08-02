<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bus extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Auditable;

    public $table = 'buses';

    public static $search = [
        'bus_number',
    ];

    public $orderable = [
        'id',
        'bus_number',
        'counetr',
        'mark',
        'park.name',
    ];

    public $filterable = [
        'id',
        'bus_number',
        'counetr',
        'mark',
        'park.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'bus_number',
        'counetr',
        'mark',
        'park_id',
    ];

    public function park()
    {
        return $this->belongsTo(BusPark::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VidangeControle extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Auditable;

    public $table = 'vidange_controles';

    public $orderable = [
        'id',
        'bus.bus_number',
        'oil.mark_oil',
        'anicien_number',
        'new_number',
        'last_date',
        'date',
        'oil_qtt',
    ];

    public $filterable = [
        'id',
        'bus.bus_number',
        'oil.mark_oil',
        'anicien_number',
        'new_number',
        'last_date',
        'date',
        'oil_qtt',
    ];

    protected $dates = [
        'last_date',
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'bus_id',
        'oil_id',
        'anicien_number',
        'new_number',
        'last_date',
        'date',
        'oil_qtt',
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function oil()
    {
        return $this->belongsTo(Oil::class);
    }

    public function getLastDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setLastDateAttribute($value)
    {
        $this->attributes['last_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

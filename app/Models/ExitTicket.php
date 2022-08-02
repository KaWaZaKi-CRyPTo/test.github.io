<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExitTicket extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'exit_tickets';

    public $orderable = [
        'id',
        'product.name',
        'date',
        'qtt',
        'bus_number.bus_number',
        'number_exit_ticker',
    ];

    public $filterable = [
        'id',
        'product.name',
        'date',
        'qtt',
        'bus_number.bus_number',
        'number_exit_ticker',
    ];

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'product_id',
        'date',
        'qtt',
        'bus_number_id',
        'number_exit_ticker',
    ];

    public function product()
    {
        return $this->belongsTo(Prodouit::class);
    }

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function busNumber()
    {
        return $this->belongsTo(Bus::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

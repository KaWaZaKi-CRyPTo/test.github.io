<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EntryTicket extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Auditable;

    public $table = 'entry_tickets';

    public $orderable = [
        'id',
        'date',
        'product.name',
        'qtt',
        'price',
        'suplier.name',
        'n_bon_com',
        'n_rec_fac_bl',
    ];

    public $filterable = [
        'id',
        'date',
        'product.name',
        'qtt',
        'price',
        'suplier.name',
        'n_bon_com',
        'n_rec_fac_bl',
    ];

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'date',
        'product_id',
        'qtt',
        'price',
        'suplier_id',
        'n_bon_com',
        'n_rec_fac_bl',
    ];

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function product()
    {
        return $this->belongsTo(Prodouit::class);
    }

    public function suplier()
    {
        return $this->belongsTo(Fourniseur::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

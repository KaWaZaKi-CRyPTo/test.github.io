<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provenance extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Auditable;

    public $table = 'provenances';

    public $orderable = [
        'id',
        'name',
        'distance',
        'country.name',
        'country.slug',
    ];

    public $filterable = [
        'id',
        'name',
        'distance',
        'country.name',
        'country.slug',
    ];

    protected $fillable = [
        'name',
        'distance',
        'country_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

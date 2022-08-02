<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Route extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Auditable;

    public $table = 'routes';

    public $orderable = [
        'id',
        'name',
        'start_provenance.name',
        'end_provenance.name',
        'distance',
    ];

    public $filterable = [
        'id',
        'name',
        'start_provenance.name',
        'end_provenance.name',
        'distance',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'start_provenance_id',
        'end_provenance_id',
        'distance',
    ];

    public function startProvenance()
    {
        return $this->belongsTo(Provenance::class);
    }

    public function endProvenance()
    {
        return $this->belongsTo(Provenance::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

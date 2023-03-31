<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\Activitylog\Models\Activity as SpatieActivity;

class Activity extends SpatieActivity {
    protected $fillable=['id','log_name','description','subject_type','event','subject_id','causer_type','causer_id','properties','batch_uuid','created_at','updated_at'];

    /**
     * @var string
     */
    protected $connection = 'mysql';
}

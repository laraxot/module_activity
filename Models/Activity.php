<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\Activitylog\Models\Activity as SpatieActivity;

class Activity extends SpatieActivity {
    /**
     * @var string
     */
    protected $connection = 'mysql';
}

<?php
namespace Modules\Activity\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Activity\Models\Panels\Policies\ActivityPanelPolicy as Post; 

use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

class ActivityPanelPolicy extends XotBasePanelPolicy {
}

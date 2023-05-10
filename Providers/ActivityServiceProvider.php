<?php

declare(strict_types=1);

namespace Modules\Activity\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

// use Modules\Xot\Services\BladeService;

/**
 * Undocumented class.
 */
class ActivityServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'activity';

    public function bootCallback(): void
    {
        // ...
    }

    public function registerCallback(): void
    {
        // ...
    }
}

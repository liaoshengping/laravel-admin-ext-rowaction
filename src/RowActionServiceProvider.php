<?php

namespace Liaosp\RowAction;

use Illuminate\Support\ServiceProvider;

class RowActionServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(RowAction $extension)
    {
        if (! RowAction::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laraveAdminRowAction');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/liaosp/laraveAdminRowAction')],
                'laraveAdminRowAction'
            );
        }

        $this->app->booted(function () {
            RowAction::routes(__DIR__.'/../routes/web.php');
        });
    }
}

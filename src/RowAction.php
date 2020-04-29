<?php

namespace Liaosp\RowAction;

use Encore\Admin\Extension;

class RowAction extends Extension
{
    public $name = 'laraveAdminRowAction';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Rowaction',
        'path'  => 'laraveAdminRowAction',
        'icon'  => 'fa-gears',
    ];
}

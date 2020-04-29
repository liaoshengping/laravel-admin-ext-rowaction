<?php

namespace Liaosp\RowAction\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class RowActionController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('laraveAdminRowAction::index'));
    }
}

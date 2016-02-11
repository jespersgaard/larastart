<?php

namespace App\Widgets;

use Illuminate\Support\Facades\DB;
use Arrilot\Widgets\AbstractWidget;

class Navigation extends AbstractWidget
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view("widgets.navigation");
    }
}
<?php

namespace SportApp\ModelAdmins;

use SilverStripe\Admin\ModelAdmin;
use SportApp\DataObjects\Sportman;
use SportApp\DataObjects\Team;

class SportmenAdmin extends ModelAdmin
{

    private static $url_segment = 'sportmen-admin';

    private static $menu_title = 'Sportmen Admin';

    private static $menu_icon_class = 'font-icon-flow-tree';

    private static $managed_models = [
        Sportman::class,
        Team::class,
    ];
}

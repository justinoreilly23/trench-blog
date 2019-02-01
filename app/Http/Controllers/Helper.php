<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Helper extends Controller {

    public static function getTitle()
    {
        $activeTab = "$_SERVER[REQUEST_URI]";
        if (preg_match("#/([^/]+)#", $activeTab, $needle))
        {
            $title = $needle[1];
        }
        else
        {
            $title = "Home";
        }

        return $title;
    }
}

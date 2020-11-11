<?php


namespace App\Helpers;


class PathLoader
{
    public static function getJsPathway()
    {
        $pathway = '/js/pages';
        $clearUri = strtok($_SERVER['REQUEST_URI'], '?');
        if($clearUri == '/') {
            $pathway .= '/dashboard';
        } else {
            $pathway .= $clearUri;
        }

        $pathway .= '.js';

        return $pathway;
    }
}

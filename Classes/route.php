<?php
class Route
{
    //Oldallista
    public static $routes = array();

    //Oldalfunkciók kezelése
    public static function set($route, $function)
    {
        self::$routes[] = $route;

        if($_GET['url'] == $route)
        {
            $function->__invoke();
        }
    }
}
?>
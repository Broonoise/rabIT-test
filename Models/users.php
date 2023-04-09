<?php

class Users extends Controller
{
    //Felhasználók kilistázása
    public static function getUserNames()
    {
        $list = "<div class = 'main'>";
        foreach(self::query("SELECT user_name as name FROM users") as $row)
        {
            $list .= "<div class = 'users'>".$row['name']."</div>";
        }
        $list .= "</div>";
        echo $list;
    }
}

?>
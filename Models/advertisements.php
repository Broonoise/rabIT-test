<?php

class Advertisements extends Controller
{
    //Hírdetéslista és hírdetésekhez rendelt felhasználók
    public static function getAdvertisements()
    {
        $list = "<div class = 'main'>";

        //Hírdetéslista
        foreach(self::query("SELECT DISTINCT(title) as ad FROM advertisements") as $titles)
        {
           $list .= "<div class = 'ads'>
                        <div class = 'title'>" . $titles['ad'] . "</div>
                        <div class = 'divider'></div>";
            
           //Hozzárendelt felhasználók
           foreach(self::query("SELECT u.user_name as name FROM users u INNER JOIN advertisements a ON u.id = a.user_id WHERE a.title = '".$titles['ad']."'") as $users)
            {
               $list .= "<div class = 'user'>" . $users['name'] . "</div>";
            }
            
            $list .= "</div>";
        }
        $list .= "</div>";

        echo $list;
    }
}

?>
<?php
    //Index oldal funkciók
    Route::set('index', function() 
    {
        //View létrehozása
        Index::CreateView("index");
    });

    //Users oldal funkciók
    Route::set('users', function() 
    {
        //View létrehozása
        Users::CreateView("users");
        //Felhasználók kilistázása
        Users::getUserNames();
    });
  
    Route::set('advertisements', function() 
    {
        //View létrehozása
        Advertisements::CreateView("advertisements");
        //Hírdetéslista és hírdetésekhez rendelt felhasználók
        Advertisements::getAdvertisements();
    });
?>
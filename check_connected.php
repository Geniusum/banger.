<?php

function IsConnected(){
    if (!empty($_SESSION) || isset($_SESSION["connected"]) || $_SESSION["connected"] == true){
        return true;
    }
    return false;
}
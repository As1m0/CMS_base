<?php

abstract class Model
{
    public static function GetPageData(string $page) : array
    {
        //return ["page" => $page, "template" => "main.html", "fullTemplate" => false, "Class" => "IndexPage"];
        global $cfg;
        $pagesJson = json_decode(file_get_contents($cfg["contentFolder"]."/pages.json"), true);
        if($pagesJson !== null)
        {
            $pageData = null;
            foreach ($pagesJson as $p)
            {
                if($p["page"] == $page)
                {
                    $pageData = $p;
                    break;
                }
            }
            if($pageData !== null)
            {
                return $pageData;
            }
            else
            {
                throw new NotFoundException("A megadott oldal nem található!");
            }
        }
        else
        {
            throw new Exception("Az oldalak feldolgozása hibára futott!");
        }
    }
    
    public static function LoadText(string $page, string $flag) : array
    {
        //return ["flag" => $flag, "text" => "ASD"];
        global $cfg;
        $contentJson = json_decode(file_get_contents($cfg["contentFolder"]."/content.json"), true);
        if($contentJson !== null)
        {
            if(isset($contentJson[$page]) && isset($contentJson[$page][$flag]))
            {
                return ["flag" => $flag, "text" => $contentJson[$page][$flag]];
            }
            else
            {
                throw new NotFoundException("A megadott oldal ($page) és a megadott flag ($flag) nem található a tartlmak között!");
            }
        }
        else
        {
            throw new Exception("A tartalmakat tároló JSON feldolgozása meghiúsult!");
        }
    }
    
    public static function GetModules() : array
    {
        global $cfg;
        $moduleJson = json_decode(file_get_contents($cfg["contentFolder"]."/modules.json"), true);
        if($moduleJson !== null)
        {
            return $moduleJson;
        }
        else
        {
            throw new Exception("A modulokat tartalmazó JSON feldolgozása meghiúsult!");
        }
    }
}
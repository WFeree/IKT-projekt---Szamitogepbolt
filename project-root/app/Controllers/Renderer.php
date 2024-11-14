<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;

class Renderer extends BaseController
{
    public static function show($page = "home", $extra_data = [])
    {
        if(!is_file(APPPATH . "Views/" . $page . ".php")){
            throw new PageNotfoundException($page);
        }

        $meta = [
            "title" => $extra_data["title"] ?? "PC Part Picker",
            "cssfiles" => $extra_data["cssfiles"] ?? [],
        ];
        $context = $extra_data;
        return view("templates/head", $meta)
        . view($page, $context)
        . view("templates/footer", $meta);
    }
}

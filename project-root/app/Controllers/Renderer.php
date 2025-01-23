<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\ComponentModel;

class Renderer extends BaseController
{
    public static function show($page = "home", $extra_data = [])
    {
        if(!is_file(APPPATH . "Views/" . $page . ".php")){
            throw new PageNotfoundException($page);
        }

        $meta = [
            "title" => $extra_data["title"] ?? "PC Part Picker",
            "cssfiles" => $extra_data["cssfiles"] ?? [strtolower($page)],
        ];
        $context = $extra_data;
        return view("templates/head", $meta)
        . view($page, $context)
        . view("templates/footer", $meta);
    }
    
    public function selector(){
        $CompModel = new ComponentModel();
        $extra = [
            "cssfiles" => ["partPicker"],
        ];
        return $this->show("partPicker", $extra);
    }
    
    public function create_GET(){
        $ComponentM = new ComponentModel();
        $options = $ComponentM->getCategories();

        return $this->show("create", [
            "title" => "Register a PC Part",
            "options" => $options,
            "cssfiles" => ["create"],
        ]);
    }
}

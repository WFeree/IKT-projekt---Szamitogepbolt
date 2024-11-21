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
            "cssfiles" => $extra_data["cssfiles"] ?? [],
        ];
        $context = $extra_data;
        return view("templates/head", $meta)
        . view($page, $context)
        . view("templates/footer", $meta);
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
    public function create_POST(){
        $data = $this->request->getPost(["name", "details", "price", "rating", "category"]);
        $CompModel = new ComponentModel();
        $catlist = "";
        foreach($CompModel->getCategories() as $cat){
            $catlist .= $cat . ", ";
        }
        if(!$this->validate([
            "name" => "required|is_unique[components.name]|alpha_numeric_punct",
            "details" => "required|alpha_numeric_punct",
            "price" => "required|decimal|greater_than[0]",
            "rating" => "required|decimal|greater_than[0]",
            "category" => "required|in_list[{$catlist}]"
        ], $data)){
            $this->session->setFlashdata("ferror", "Form error");
            return redirect()->back();
        }
        $safedata = $this->validator->getValidated();

        $CompModel->save([
            'name' => $safedata["name"],
            'details' => $safedata["details"],
            'price' => $safedata["price"],
            'rating' => $safedata["rating"],
            'category' => $safedata["category"],
        ]);

        return redirect()->to("/");
    }
}

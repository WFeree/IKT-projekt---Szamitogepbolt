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
    
    public function selector(){
        $CompModel = new ComponentModel();
        $extra = [
            "cssfiles" => ["arukereso"],
            "components" => $CompModel->getAll()
        ];
        foreach($extra["components"] as &$c){
            $c["file"] = $c["id"] . "/" . $c["file_upload"];
        }
        return $this->show("arukereso", $extra);
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
        $data = $this->request->getPost(["name", "details", "price", "rating", "category", "picture", "brand"]);
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
            "category" => "required|in_list[{$catlist}]",
            "brand" => "required",
            'picture' => [
                'label' => 'picture',
                'rules' => [
                    'uploaded[picture]',
                    'is_image[picture]',
                    'mime_in[picture,image/jpg,image/jpeg,image/png]',
                    'max_dims[picture,512,512]',
                ],
            ],
        ], $data)){
            $this->session->setFlashdata("ferror", $this->validator->getErrors());
            return redirect()->back();
        }
        $safedata = $this->validator->getValidated();
        $img = $this->request->getFile('picture');
        $CompModel->save([
            'name' => $safedata["name"],
            'details' => $safedata["details"],
            'price' => $safedata["price"],
            'rating' => $safedata["rating"],
            'category' => $safedata["category"],
            'file_upload' => $img->getName(),
            'brand' => $safedata["brand"]
        ]);
        $filepath = ROOTPATH . '/public/uploads/' . $CompModel->getInsertID() . '/';
        $img->move($filepath);

        return redirect()->to("/");
    }
}

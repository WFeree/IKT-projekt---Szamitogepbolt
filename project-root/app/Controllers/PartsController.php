<?php

namespace App\Controllers;
use App\Models\ComponentModel;
use App\Controllers\Renderer;
use CodeIgniter\Controller;
use stdClass;

class PartsController extends BaseController
{
    public function create_POST(){
        $data = $this->request->getPost(["name", "details", "price", "rating", "category", "picture", "brand", "dvalues"]);
        $CompModel = new ComponentModel();
        $catlist = "";
        foreach($CompModel->getCategories() as $cat){
            $catlist .= $cat . ", ";
        }

       

        if(!$this->validate([
            "name" => "required|is_unique[components.name]|alpha_numeric_punct",
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

        $details = new stdClass();
        $details->array = [];
        foreach(array_keys($data["dvalues"]) as $key){
            $details->array[$key] = $data["dvalues"][$key];
        }
        $jsonDetails = json_encode($details->array);

        $img = $this->request->getFile('picture');
        $CompModel->save([
            'name' => $safedata["name"],
            'details' => $jsonDetails,
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

    public function chooser($category){
        $ComponentModel = new ComponentModel();
        $results = $ComponentModel->where("category", $category)->findAll();

        $components = [];
        foreach($results as &$r){
            $r["file"] = $r["id"] . "/" . $r["file_upload"];
        }

        return Renderer::show("arukereso", ["cssfiles" => ["arukereso"], "components" => $results]);
    }
}
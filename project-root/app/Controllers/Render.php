<?php

namespace App\Controllers;

class Render extends BaseController
{
    public function home($page = 'home', $extra_data = [])
    {
        $meta = [
            "title" => "PC Parts Picker",
            "cssfiles" => $extra_data["cssfiles"] ?? []
        ];
        $context = $extra_data;

        return view('templates/head', $meta)
            . view($page, $context)
            . view('templates/footer', $meta);
    }
}

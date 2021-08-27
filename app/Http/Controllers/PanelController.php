<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{

    public function adminview()
    {
        $data = [

            'title'=>'Admin Dashboard'
        ];
        return view('admin.backend.index');
    }
}

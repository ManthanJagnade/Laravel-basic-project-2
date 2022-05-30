<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $form=new Form();
        $form->email=$request->email;
        $form->number=$request->number;
        $form->save();
    }
}

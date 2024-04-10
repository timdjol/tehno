<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\RedirectResponse;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::paginate(10);
        return view('auth.forms.index', compact('forms'));
    }

    public function destroy(Form $form)
    {
        $form->delete();
        session()->flash('success', 'Заявка ' . $form->name . ' удалена');
        return redirect()->route('forms.index');
    }

}


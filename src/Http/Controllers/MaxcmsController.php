<?php

namespace ducsatthu\maxcms\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class MaxcmsController extends Controller
{


    public function action(){
        return view("maxcms::admin");
    }
}

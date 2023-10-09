<?php

namespace packages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomeController extends Controller
{
    public function hey(){
        echo 'its from controller';
    }
}

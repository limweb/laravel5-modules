<?php

namespace Modules\Backend\Controllers;

use App\Components\Controller;

class SiteController extends Controller {
    
    public function actionIndex(){
       return view('Backend::index');
    }
    
}
<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        //////////////hàm viết những cái chung cho tất cả các trang ///////
        $domain ='/images/img/demo/';

        $this-> domain = $domain;
    }
}

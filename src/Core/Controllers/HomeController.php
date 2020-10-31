<?php
namespace AkshayJumbade\Config\Core\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class ConfigController extends BaseController {
    function index() {
        return view('conf::index');
    }
}

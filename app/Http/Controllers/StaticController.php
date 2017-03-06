<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;
class StaticController extends Controller
{
    /**
     * page d'accueil
     */
    public function index()
    {
        $local = basename($_SERVER['PHP_SELF']);

        return view('static.index', compact('local'));
    }

    /**
     * page de contact
     */
    public function contact()
    {
        $local = basename($_SERVER['PHP_SELF']);

        return view('static.contact', compact('local'));
    }

    /**
     * page de contact
     */
    public function galerie($type)
    {
        $local = basename($_SERVER['PHP_SELF']);
        Log::info('test const: '.(\Config::get('constants.couture') == $type));
        if($type == \Config::get('constants.couture')) {
            $dh  = opendir(\Config::get('constants.DOSSIER_COUTURE_MINI'));
        } else if($type == \Config::get('constants.tapisserie')) {
            $dh  = opendir(\Config::get('constants.DOSSIER_TAPISSERIE_MINI'));
        } else {
            Log::error('pas rentré');
        }

        $pics = Array();

        while (false !== ($filename = readdir($dh))) {
            $ext = substr($filename, strrpos($filename, '.') + 1);
            if(in_array($ext, array("jpg","jpeg","png","gif","JPG", "JPEG","PNG", "GIF")))
                array_push($pics, $filename);
        }

        return view('static.galerie', compact('local', 'pics'));
    }
}

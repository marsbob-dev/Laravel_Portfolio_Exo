<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Hero;
use App\Models\InfoNav;
use App\Models\LinkNav;
use App\Models\SocialNav;
use Illuminate\Http\Request;

class WelcomeBoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $linkNav=LinkNav::all();
            $socialNav=SocialNav::all();
            $infoNav=InfoNav::all();
            $footer=Footer::all();
            $footerCopyright=explode('/', $footer[0]->copyright);
            $footerDesign=explode('/', $footer[0]->design);
            $hero=Hero::all();
            return view('welcomeBo', compact('linkNav', 'socialNav', 'infoNav', 'footer', 'hero'));
        }
    }
}

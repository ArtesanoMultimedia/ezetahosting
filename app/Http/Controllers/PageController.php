<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    public function show($slug,Request $request)
    {
        $page = Page::where([
            ['slug', '=', $slug],
            ['status', '=', 'ACTIVE']
        ])->firstOrFail();
        return view('page',$page);
    }

}

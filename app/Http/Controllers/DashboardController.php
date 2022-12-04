<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        return view('dashboard',[
           'bookmarks'=> Bookmark::query()->where('user_id', auth()->id())->get()
        ]);
    }
}

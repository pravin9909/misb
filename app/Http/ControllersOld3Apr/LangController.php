<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App;
use Illuminate\Support\Facades\Session;
class LangController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    // public function index(): View
    // {
    //    /// dd("mughis");
    //     return view('front.index');
    // }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    // public function change(Request $request): RedirectResponse
    // {
    //     App::setLocale($request->lang);
    //     session()->put('locale', $request->lang);
  
    //     return redirect()->back();
    // }
    public function setLocale($locale)
    {
        // Check if the locale is supported
        if (in_array($locale, ['en', 'fr','spanish','chinese'])) {
            Session::put('locale', $locale); // Store the selected locale in the session
        }

        return redirect()->back(); // Redirect back to the previous page
    }
}

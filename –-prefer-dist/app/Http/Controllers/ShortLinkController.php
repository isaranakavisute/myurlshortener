<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
//use App\ShortLink;
use App\Models\ShortLink;
//use App\Http\Controllers\ShortLinkController;
use Illuminate\Support\Str;
  
class ShortLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortLinks = ShortLink::latest()->get();
   
        return view('shortenLink', compact('shortLinks'));
    }
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'link' => 'required|url'
        ]);
   
        $input['link'] = $request->link;
        $input['code'] = Str::random(6); //str_random(6);
   
        ShortLink::create($input);
  
        return redirect('isara-generate-shorten-link')
             ->with('success', 'Shorten Link Generated Successfully!');
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shortenLink($code)
    {
        $find = ShortLink::where('code', $code)->first();
   
        return redirect($find->link);
    }
}
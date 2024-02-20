<?php

namespace App\Http\Controllers;
use App\Models\Minilink;
use Str;
use Illuminate\Http\Request;

class Minimizator extends Controller
{

    public function minipage_view(){

                return view('minipage');
    }

    public function miniurlcreator(Request $request) {

        $url=$request->input('url');
        $urlmin = str_shuffle(Str::random(2) . Str::lower(Str::random(2)). mt_rand(10,99));

        $newlink=Minilink::create([
            'urls' => $url,
             'url_min' => $urlmin
        ]);

        if ($newlink){
           return back()->with('success',route('new.url',['short'=>$urlmin]));
        }

    }

    public function away(string $urlmin)
    {
        $newlink = Minilink::where(['url_min'=>$urlmin ])->firstOrFail();
            if ($newlink){
                return redirect($newlink->urls);
            }
    }
}

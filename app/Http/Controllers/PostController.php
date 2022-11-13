<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Models\Posty;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posty = Posty::all();
        return view('posty.index', compact('posty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('posty.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     *
     * param  \Illuminate\Http\Request  $request
     * return \Illuminate\Http\Response
     */
    /* public function store(Request $request)
    {
        //dd($request);
        // dump($request);
        // $request->dump();
        // echo $request->tytul;
        // sleep(2);
        $request->validate([
            'tytul' => 'required',
            'autor' => 'required',
            'email' => 'required|email:rfc,dns|min:3',
            'tresc' => 'required|min:3|max:150'
        ]);

        return redirect()->route('posty.index')->with('message', 'Post został dodany');
    } */

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\PostStoreRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostStoreRequest $request)
    {
        $posty = new Posty();
        $posty->tytul = request('tytul');
        $posty->autor = request('autor');
        $posty->email = request('email');
        $posty->tresc = request('tresc');
        $posty->save();
        return redirect()->route('posty.index')->with('message', 'Post został dodany');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posty::findOrFail($id);
        return view('posty.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posty::findOrFail($id);
        return view('posty.zmien', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostStoreRequest $request, $id)
    {
        $post = Posty::findOrFail($id);
        $post->tytul = request('tytul');
        $post->autor = request('autor');
        $post->email = request('email');
        $post->tresc = request('tresc');
        $post->save();
        return redirect()->route('posty.index')->with('message', 'Post został uaktualniony');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

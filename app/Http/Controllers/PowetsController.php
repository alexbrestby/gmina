<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Powet;
use App\Models\Gmina;
use DB;

class PowetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $powets =  Powet::all();
        // $powets = Powet::where('p_name', 'Брестский повет')->get();
        // $powets = Powet::orderBy('p_name', 'asc')->get();
        // $powets = DB::select('SELECT * FROM powet');
        // $powets = Powet::all()->take(1);
        // $powets = Powet::orderBy('p_name', 'desc')->paginate(1);
        return view('powets.index')->with('powets', $powets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $powet = Powet::find($id);
        //return $powet;
        if ((!$powet) || ($powet->visible == 0)) {
            abort(404);
        }
        $gmina = Gmina::where('powet_id', $id)->get();
        $data = [
            'powet' => $powet,
            'gmina' => $gmina
        ];

        return view('powets.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

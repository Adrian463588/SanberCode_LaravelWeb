<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function utama(){
        return view('welcome');
    }
    public function create(){
        return view('game.tambah');
    }
    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'gameplay'=> 'required',
            'developer'=> 'required',
            'year'=> 'required'
        ]);
        DB::table('game')->insert([
            'name' => $request['name'],
            'gameplay' => $request['gameplay'],
            'developer' => $request['developer'],
            'year' => $request['year']
        ]);

        return redirect('/game');
    }
    public function index(){
        $game = DB::table('game')->get();
       // dd($game);
        return view('game.index', ['game' => $game]);
    }
    public function show($id){
        $game = DB::table('game')->where('id', $id)->first();
        $platform = DB::table('platform')->where('game_id' , $id)->get();
        return view('game.detail',['game' => $game,'platform' => $platform ]);

    }
    public function edit($id){
        $game = DB::table('game')->where('id', $id)->first();
        return view('game.edit',['game' => $game ]);
    }
    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required',
            'gameplay'=> 'required',
            'developer'=> 'required',
            'year'=> 'required'
        ]);
        $affected = DB::table('game')
              ->where('id', $id)
              ->update(
                ['name' => $request->name,
                'gameplay' => $request->gameplay,
                'developer' => $request->developer,
                'year' => $request->year]
            );
       return redirect('/game');
    }
    public function destroy($id){
        DB::table('game')->where('id', $id)->delete();
        return redirect('/game');
    }
   
}

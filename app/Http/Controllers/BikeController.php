<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bike;
use Auth;

class BikeController extends Controller
{
    public function index() {
        $bikes = Bike::where('user_id', Auth::user()->id)->get();

        return view('pages.bikes.index', compact('bikes'));
    }

    public function create(){
        return view('pages.bikes.create');
    }

    public function store(Request $request){
        $rules = [
            'bike_name' => 'required',
            'bike_color' => 'required',
            'bike_type' => 'required',
        ];

        $messages = [
            'required' => 'Form ini tidak boleh kosong!'
        ];

        $this->validate($request, $rules, $messages);

        Bike::create([
            'user_id' => Auth::user()->id,
            'bike_name' => $request->bike_name,
            'bike_color' => $request->bike_color,
            'bike_type' => $request->bike_type,
        ]);

        return redirect()->route('garage.index');
    }

    public function edit($id){
        $bike = Bike::findOrFail($id);

        return view('pages.bikes.edit', compact('bike'));
    }

    public function update(Request $request, $id){
        $rules = [
            'bike_name' => 'required',
            'bike_color' => 'required',
            'bike_type' => 'required',
        ];

        $messages = [
            'required' => 'Form ini tidak boleh kosong!'
        ];

        $this->validate($request, $rules, $messages);

        $bike = Bike::findOrFail($id);

        $bike->update([
            'bike_name' => $request->bike_name,
            'bike_color' => $request->bike_color,
            'bike_type' => $request->bike_type,
        ]);

        return redirect()->route('garage.index');
    }

    public function destroy($id){
        $bike = Bike::findOrFail($id);

        $bike->delete();

        return redirect()->route('garage.index');
    }
}

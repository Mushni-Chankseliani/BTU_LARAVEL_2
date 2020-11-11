<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Cars;

class CarsController extends Controller
{
    public function createCars(Request $request) {
        Cars::insert([
            'name' => $request->name,
            'make' => $request->make,
            'model' => $request->model,
            'lincense_number' => $request->lincense_number,
            'weight' => $request->weight,
            'year' => $request->year,
        ]);

        return redirect()->back();
    }

    public function editCars($id) {
        $car = Cars::where('id', $id)->firstOrFail();
        return view('edit_cars')->with('car', $car);
    }

    public function updateCars(Request $request) {
        Cars::where('id', $request->id)->update([
            'name' => $request->name,
            'make' => $request->make,
            'model' => $request->model,
            'lincense_number' => $request->lincense_number,
            'weight' => $request->weight,
            'year' => $request->year,
        ]);

        return redirect()->back();
    }

    public function deleteCars(Request $request) {
        Cars::where('id', $request->id)->delete();

        return redirect()->back();
    }

    public function getCars() {
        $data = Cars::orderBy('id', 'DESC')->get();

        return view('cars_page')->with('cars', $data);
    }
}

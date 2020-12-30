<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;

class DataController extends Controller
{
    public function index() {
        $data = Data::all();
        return view('dashboard', compact('data'));
    }

    public function show(Data $data) {
        return $data;
    }

    public function store(Request $request) {
        $data = Data::create($request->all());

        return response()->json($data, 201);
    }

    public function update(Request $request, Data $data) {
        $data->update($request->all());

        return response()->json($data, 200);
    }

    public function delete(Data $data) {
        $data->delete();

        return response()->json(null, 204);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new DataExport, 'data.xlsx');
    }
}

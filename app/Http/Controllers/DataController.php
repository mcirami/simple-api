<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;

class DataController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function show(Request $request) {
        $date = \Carbon\Carbon::today()->subDays(7);

        if($request->ajax()) {
            //$data = Data::latest()->get();
            $data = Data::where('created_at', '>=', $date)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                /*->addColumn('action', function($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])*/
                ->make(true);
        }

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
     * @param Request $request
     * @return \Illuminate\Support\Collection
     */
    public function export(Request $request)
    {
        $query = Data::query()->whereBetween('time_stamp', [ $request->input('start-date'), $request->input('end-date')]);
        $data = $query->get();
        return Excel::download(new DataExport($data), 'data.xlsx');
    }

    public function filter(Request $request)
    {
        $query = Data::query();

        // Add the where clause if there's start_date & end_date passed in
        if(request('start_date') && request('end_date')){
            $query->whereBetween('time_stamp', [request('start_date'), request('end_date')]);
        }

        return DataTables::of($query)->make(true);
    }
}

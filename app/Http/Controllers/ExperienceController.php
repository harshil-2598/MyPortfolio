<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Experience::with(['user'])->groupBy('user_id')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function($row){
                    return $row->user->name;
                })
                ->addColumn('action', function($row){

                    $btn = '<a href="' . route('Experience.edit', $row->user->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';;

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.experienceList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(1);
        return view('admin.experienceCreate', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $start_date = $request->start_date;
        $end_date =$request->end_date;


        // Check if empty dates are resulting in null

        $uniqid = Str::random(6);
        $dataSet = Experience::create([
            'uniqid' => $uniqid,
            'user_id' => $request->user_id,
            'job_title' => $request->job_title,
            'employer' => $request->employer,
            'city' => $request->city,
            'country' => $request->country,
            'start_date' => (isset($start_date)) ? $start_date : null,
            'end_date' => (isset($end_date)) ? $end_date : null,
            'current_work' => ($request->current_work == "on") ? 'Yes' : 'No',
            'description' => strip_tags($request->description),
        ]);

        if($dataSet){
            return back()->with('success','Experience Added');
        }
    }

    public function displayExperience()
    {
        $data = Experience::where('user_id',1)->get();

        return view('admin.displayExperience', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(isset($id)){
            $data = Experience::where('id',$id)->first();

            return view('admin.experienceEdit', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $start_date = $request->start_date;
        $end_date =$request->end_date;
        $dataSet = Experience::where(['id'=>$request->id])->update([
            'job_title' => $request->job_title,
            'employer' => $request->employer,
            'city' => $request->city,
            'country' => $request->country,
            'start_date' => (isset($start_date)) ? $start_date : null,
            'end_date' => (isset($end_date)) ? $end_date : null,
            'current_work' => ($request->current_work == "on") ? 'Yes' : 'No',
            'description' => strip_tags($request->description),
        ]);

        if($dataSet){
            return back()->with('success','Experience Update successfully');
        }else{
            return back()->with('fails','Experience not updated, somthing wronge');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($id){
            $data = Experience::find($id);
            if($data){
                $data->delete();
                return back()->with('success','Experience deleted successfully');
            }else{
                return back()->with('fails','Experience not deleted, something wrong');
            }
        }else{
            return back()->with('fails','Experience not deleted, something wrong');
        }
    }
}

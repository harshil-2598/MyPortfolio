<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Eduction;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class EductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = Eduction::with(['user'])->groupBy('user_id')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function($row){
                    return $row->user->name;
                })
                ->addColumn('action', function($row){

                    $btn = '<a href="' . route('Eduction.edit', $row->user->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';;

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.eductionList');


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(1);
        return view('admin.eduction', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'user_id' => 'required|integer', // Example rules
            'course.*' => 'required|string',
            'school.*' => 'required|string',
            'grade.*' => 'required|string',
            'passing_year.*' => 'required|integer|min:1900|max:'.date('Y'),
        ]);
        $courses = $request->course;
        $schools = $request->school;
        $grades = $request->grade;
        $passing_years = $request->passing_year;
        foreach ($courses as $key => $course) {
            Eduction::create([
                'user_id' => $request->user_id,
                'course' => $course,
                'school' => $schools[$key],
                'grade' => $grades[$key],
                'passing_year' => $passing_years[$key],
            ]);
        }

        return back()->with('success','Your eductional data added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(isset($id)){

            $user = User::find($id);
            $data = Eduction::select('eductions.*', 'users.name', 'users.id as user_id')
                    ->join('users', 'users.id', '=', 'eductions.user_id')
                    ->where('eductions.user_id', $id)
                    ->get();
            return view('admin.edit_eduction', compact(['data','user']));
        }
    }

    public function remove(Request $request)
    {
        $id = $request->id;

        if($id){
            $data = Eduction::find($id);
            if(isset($id)){
                $data->delete();
                return response()->json(['success'=>true,'msg'=>'Row Deleted']);
            }else{
                return response()->json(['success'=>false,'msg'=>'Row Not deleted']);
            }
        }else{
            return response()->json(['success'=>false,'msg'=>'Id does not found']);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{

            $courses = $request->course;
            $schools = $request->school;
            $grades = $request->grade;
            $eduction_id = $request->eduction_id;
            $passing_years = $request->passing_year;

            foreach($courses as $key => $course )
            {
                $row = (array_key_exists($key,$eduction_id)) ? $eduction_id[$key]:0;
                
                $dataUpdate = Eduction::where('id',$row)->first();
                // dd($dataUpdate->id);

                if(isset($dataUpdate->id)){
                    $dataUpdate->update([
                        'course'=> $course,
                        'passing_year'=>$passing_years[$key],
                        'school'=>$request->school,
                        'school' => $schools[$key],
                        'grade'=>$grades[$key],
                    ]);
                }else{
                    Eduction::create([
                        'user_id' => $request->user_id,
                        'course' => $course,
                        'school' => $schools[$key],
                        'grade' => $grades[$key],
                        'passing_year' => $passing_years[$key],
                    ]);
                }
                
            }
            return back();
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

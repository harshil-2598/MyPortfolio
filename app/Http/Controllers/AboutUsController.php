<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'about_us' => 'required',
        ],[
            'about_us.required' => "Enter Aboout Us",
        ]);

        $data = AboutUs::updateOrCreate(
            ['id'=>$request->id],
            [
            'About'=> strip_tags($request->about_us)
        ]);
        $messege =[];
        if(isset($data))
        {
            $messege = [
                'message'=>'Data Enter Successfully',
                'alert-type' => 'success'
            ];
        }else{
            $messege = [
                'message'=>'Something Wrong',
                'alert-type' => 'danger'
            ];
        }
        return redirect()->back()->with($messege);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

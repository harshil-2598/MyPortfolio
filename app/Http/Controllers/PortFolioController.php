<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PortFolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::find(1);
        return view('admin.personal_info', compact('data'));
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
            'name' => 'required',
            'email' => 'required',
            'address1' => 'required',
        ],[
            'name.required' => 'Enter your name',
            'email.required' => 'Enter your email',
            'address1.required' => 'Enter your home address',
        ]);

        try {
            $data = User::updateOrCreate(
                ['id'=>$request->id],
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'city' => $request->city,
                    'state' => $request->state,
                    'country' => $request->country,
                    'address1' => $request->address1,
                    'address2' => $request->address2,
                    'mobile_number' => $request->mobile_number,
                    'objective' => $request->objective,
                ]
            );
            if($data){
                return back()->with('success','Data Stored');
            }
        }catch (\Exception $e){
            dd($e->getMessage());
        }
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

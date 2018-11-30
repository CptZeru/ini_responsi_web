<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\a13373_model_Alugoro;

class a13373_Alugoro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		 $items = a13373_model_Alugoro::all();
        return view('employee.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'name'=>'required',
			'username'=>'required',
			'password'=>'required',
			'companyEmail'=>'required'
		]);
		$item = new a13373_model_Alugoro([
			'name'=>$request->get('name'),
			'username'=>$request->get('item_price'),
			'password'=>$request->get('password'),
			'companyEmail'=>$request->get('companyEmail')
		]);
		$item->save();
		return redirect('/employee.index')->with('success','Data has been Added');
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

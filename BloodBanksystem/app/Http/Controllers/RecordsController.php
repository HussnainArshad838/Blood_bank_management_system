<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Inventory;
class RecordsController extends Controller
{
    public function index()
    {
        return view('bloodbank.index');
    }

    public function create()
    {
        return view('bloodbank.create');
    }

    public function createinventory()
    {
        return view('bloodbank.newinventory');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Bank::create($input);
        return redirect('bloodbank')->with('success','Item created successfully!');
    }

    public function storeinventory(Request $request)
    {
        $input = $request->all();
        Inventory::create($input);
        return redirect('inventory')->with('success','Item created successfully!');
    }

    public function show()
    {
        $data = Bank::all();
        return view('bloodbank.view', compact('data'));
    }

    public function inventory(){
        $data = Inventory::all();
        return view('bloodbank.inventory',compact('data'));
    }

    public function about(){
        return view('bloodbank.about');
    }
    
    public function contact(){
        return view('bloodbank.contact');
    }

    public function edit(string $id)
    {
        $data = Bank::find($id);
        return view('bloodbank.edit', compact('data'));
    }
    public function update(Request $request, string $id)
    {
        $data = Bank::find($id);
        $input = $request->all();
        $data->update($input);

        // $data1 = Inventory::find($id);
        // $input1 = $request->all();
        // $data1->update($input1);
        return redirect('/bloodbank');
    }

    public function destroy(string $id)
    {
        $data = Bank::destroy($id);
        $data1 = Inventory::destroy($id);
        return redirect('/bloodbank');
    }
}

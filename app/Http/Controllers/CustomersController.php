<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan index
        $customers = \App\Models\Customers::all();
        return view('customers/index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //memasukkan data form ke database
        // $customers = new Customers;
        // $customers->nama = $request->nama;
        // $customers->alamat = $request->alamat;
        // $customers->telp = $request->telp;
        // $customers->email = $request->email;

        // $customers->save;

        //Memasukkan data ke database menggunakan array
        // Customers::create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'telp' => $request->telp,
        //     'email' => $request->email
        // ]);

        // Form validasi
        $request->validate([
            'nama' => 'required',
            'telp' => 'size:12'
        ]);

        //memasukkan data sesuai fillable di model
        Customers::create($request->all());

        return redirect('/customers')->with('status', 'Data telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(customers $customers)
    {
        //
        return view('customers/details', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(customers $customers)
    {
        //
    }
}

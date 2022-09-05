<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class ClientController extends Controller
{
    public function create()
    {
        return view('client.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $client_info_store = Client::insertGetId([
            'client_name'=>$request->client_name,
            'client_email'=>$request->client_email,
            'gender'=>$request->gender,
            'mobile_no'=>$request->mobile_no,
            'company_name'=>$request->company_name,
            'company_address'=>$request->company_address,
            'shipping_address'=>$request->shipping_address,
            'website'=>$request->website,
            'country'=>$request->country,
            'created_at'=>Carbon::now(),
        ]);

        $new_client_image = $request->photo;
        $extension =  $new_client_image->getClientOriginalExtension();
        $new_client_name = $client_info_store.'.'.$extension;

        Image::make($new_client_image)->save(base_path('public/uploads/clients/'.$new_client_name));
        Client::find($client_info_store)->update([
            'photo'=>$new_client_name,
        ]);
        // notify()->success('Category Added success');
        return back();
    }

    public function index()
    {
        $client_info = Client::all();
        return view('client.show',compact('client_info'));
    }

    public function show($id)
    {
        $client_single_view = Client::findorFail($id);
        return view('client.view', compact('client_single_view'));
    }

    public function edit($id)
    {
        $client_edit = Client::find($id);
        return view('client.edit', compact('client_edit'));
    }
}

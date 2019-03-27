<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request){
        $request->session()->put('user_id',3);

       return view('/clients');
    }
    public function authenticate(Request $request){

        $client = Client::findOrFail($request->email);
        $client = $client->count();
        if ($client != 0) {
            if ($client->password == $request->password) {
                $request->session()->put('user_id',$client->id);
                return view('/articles');
            }else {
                return view('/clients');
            }
        }         
           else {
               return 'wrong pass man !';
            
            }
    }
    public function disconnect(){
         session()->forget('user_id'); 
return view('/clients.auth');
    }
    public function index()
    {
        return view('/clients.auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
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
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|unique:clients,email',
            'password' => 'required|min:9|max:45'
            ]);
        $client = new Client;
        $client->first_name = $request->input('first_name');
        $client->last_name = $request->input('last_name');
        $client->email = $request->input('email');
        $client->password = $request->input('password');
        $client->save();
        $type_picture='clients';
        $picture= \App\Picture::store($request, $client->id, $type_picture);
        $request->session()->put(['user_id' => $client->id]);
        return redirect('/'.$client->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show',[
            'client'=>$client
                ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}

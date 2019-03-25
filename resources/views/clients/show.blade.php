@extends('layouts.master')
@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Client ID : {{ $client->id }}
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    First name :
                </div>
                <div class="col-md-8">
                    {{ $client->first_name }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Last name :
                </div>
                <div class="col-md-8">
                    {{ $client->last_name }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                        Created at :
                </div>
                <div class="col-md-8">
                    {{ $client->created_at }}
                </div>
            </div>
            <div class="row">  
              <img src="{{ Storage::url($client->picture->path) }}" class="img-fluid" alt="erreur" >
            </div>
           
        </div>
    </div>
</div>
@endSection
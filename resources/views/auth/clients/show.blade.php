@extends('layouts.app')
@section('content')
<!--{{ auth()->guard('client')->user() }}-->
<div class="container">
    <h3 style="text-align: center;">Your Profile</h3> 
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <h4>  First name :</h4>
                </div>
                <div class="col-md-8">
                    {{$client[0]['first_name']}}
                </div>
                <br><br><br>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4>Last name :</h4>
                </div>
                <div class="col-md-8">
                    {{$client[0]['last_name']}}
                </div>
                <br><br><br>
            </div>
            <div class="row">
                <div class="col-md-4">
                        <h4>Email :</h4>
                </div>
                <div class="col-md-8">
                    {{$client[0]['email']}}
                </div>
                <br><br><br>
            </div>
            <a  href='{{ url('stafclientf/logout') }}'> Log out </a>
        </div>
    </div>
</div>
@endSection

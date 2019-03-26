@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top:20%; box-shadow: gray 4px ;">
                <div class="card"  class="shadow p-3  mb-5 bg-black rounded">
                    <form action="clients/">
                        <h2 style="text-align:center;">Sign in</h2>
                    <div class="col-md-12">
                        <label for="email">Email :</label>
                        <input type="text" class="form-controller  rounded  mb-3 bg-black" style="width:100%;margin-left:auto;margin-right:auto;" name="email">
                        <label for="password">Password :</label>
                        <input type="password" class="form-controller  rounded  mb-3 bg-black" style="width:100%;margin-left:auto;margin-right:auto;" name="password">
                        <button type="submit" class="btn btn-success" style="display:block;margin-right:auto;margin-left:auto;width:70%;">Sign in</button><br>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

@endSection
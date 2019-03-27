@extends('layouts.master')
@section('content')
<br>
<div class="container">
        <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Create new employee 
                    </div>
                </div>
                <div class="card-body">
                    <form action="/clients" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name">First name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Ex: Jhon" value="{{  old('first_name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="last_name">Last name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Ex: Wick" value="{{ old('last_name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <label for="email">Email</label> 
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email@example.com" required value="{{ old('email') }}"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="password">Password</label> 
                                            <input type="password" name="password" id="password" class="form-control" placeholder="password" required value=""></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                                <label for="password">Repeat password</label> 
                                                <input type="password" name="password2" id="password2" class="form-control" placeholder="password" required></label>
                                        </div>
                                    </div>
                                </div>
            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Upload your image</label>
                                        <input type="file" name="img" id="img" required value="{{ old('img') }}">
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button data-toggle="modal" class="btn btn-outline-primary" type="submit">
                                    Save
                                </button>
                                <a class="btn btn-danger">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endSection
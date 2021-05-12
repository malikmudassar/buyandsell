@extends('layouts.app')
@section('mytitle', $title)
@section('content')

<div class="row">
    <div class="col-md-12">
        <nav class="container navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('accessories')}}">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('laptops')}}">Laptops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('screens')}}">Screens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('mobiles')}}">Mobiles</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3" >
            <h5 style="padding-top:10px; margin-top:20px;"> My Profile</h5>
            <hr>
            <div style="border-right:1px solid #ccc; padding-right:10px">
                <table class="table table-hover ">
                    <tr>
                        <td><a href="">My Ads</a></td>
                    </tr>
                    <tr>
                        <td><a href="">My Sales</a></td>
                    </tr>
                    <tr>
                        <td><a href="">My Purchases</a></td>
                    </tr>
                    <tr>
                        <td><a href="">My Settings</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-sm-9">
            <h5 style="padding-top:10px; margin-top:20px;"> Add New Product</h5>
            <hr>
            <div class="form-group">
                <label>Type</label>
                <select name="type" class="form-control" required>
                    <option value="Sell">Sell</option>
                    <option value="Buy">Buy</option>
                </select>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Price</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{route('profile')}}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.backend.app')
@section('content')
      <!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">
            <div class="col-4">
             <div class="form-group">
                <label for="">Client Name</label>
                <input type="text" value="" name="client_name" class="form-control">
             </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                   <label for="">Client Email</label>
                   <input type="text" value="" name="client_email" class="form-control">
                </div>
               </div>
            <div class="col-4">
             <div class="form-group">
                <label for="">Client Picture</label>
                <input type="file" value="" name="photo" class="form-control">
             </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-4">
                <div class="form-group">
                  <label for="">Gender</label>
                  <select class="form-control" name="gender">
                      <option value="">--Select One---</option>
                      <option value="men">Men</option>
                      <option value="women">Women</option>
                 </select>
               </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Client Mobile No</label>
                    <input type="number" value="" name="mobile_no" class="form-control">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                   <label for="">Company Name</label>
                   <input type="text" value="" name="company_name" class="form-control">
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-12">
                <div class="form-group">
                  <label for="">Company Address</label>
                  <textarea id="" cols="30" rows="5" class="form-control" name="company_address"></textarea>
               </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-12">
                <div class="form-group">
                  <label for="">Shipping Address</label>
                  <textarea id="" cols="30" rows="5" class="form-control" name="shipping_address"></textarea>
               </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-5">
                <div class="form-group">
                  <label for="">Company Website</label>
                  <input type="text" class="form-control" name="website">
               </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                  <label for="">Country</label>
                  <input type="text" class="form-control" name="country">
               </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<!-- Sale & Revenue End -->
@endsection
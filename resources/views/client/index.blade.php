@extends('layouts.backend.app')
@section('content')
      <!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <form action="">
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
                   <input type="text" value="" name="client_name" class="form-control">
                </div>
               </div>
            <div class="col-4">
             <div class="form-group">
                <label for="">Client Picture</label>
                <input type="file" value="" name="client_name" class="form-control">
             </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-4">
                <div class="form-group">
                  <label for="">Gender</label>
                  <select class="form-control">
                      <option value="">--Select One---</option>
                      <option value="men">Men</option>
                      <option value="women">Women</option>
                 </select>
               </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Client Mobile No</label>
                    <input type="number" value="" name="client_name" class="form-control">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                   <label for="">Company Name</label>
                   <input type="text" value="" name="client_name" class="form-control">
                </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-12">
                <div class="form-group">
                  <label for="">Company Address</label>
                  <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
               </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-12">
                <div class="form-group">
                  <label for="">Shipping Address</label>
                  <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
               </div>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-5">
                <div class="form-group">
                  <label for="">Company Website</label>
                  <input type="text" class="form-control">
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
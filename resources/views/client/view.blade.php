@extends('layouts.backend.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Client Profile</h4>
                </div>
                <div class="card-body">
                    <img style="width: 50%" src="{{ asset('uploads/clients') }}/{{ $client_single_view->photo }}" alt="client_picture">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <td>Company Name:</td>
                            <td>{{ $client_single_view->company_name }}</td>
                        </tr>
                        <tr>
                            <td>Company Website:</td>
                            <td>{{ $client_single_view->website }}</td>
                        </tr>
                        <tr>
                            <td>Company Address:</td>
                            <td>{{ $client_single_view->company_address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
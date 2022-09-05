@extends('layouts.backend.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class=" rounded h-100 p-4">
            <h6 class="mb-4">Client Info</h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sl No</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Client Email</th>
                            <th scope="col">Country</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Mobile NO</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($client_info as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->client_name }}</td>
                            <td>{{ $item->client_email }}</td>
                            <td>{{ $item->country }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->mobile_no }}</td>
                            <td>
                                @if($item->status == 1)
                                        <a href="{{ url('/client/status') }}/{{ $item->id }}"><span class="badge bg-success">Active</span></a>
                                @else
                                        <a href="{{ url('/client/status') }}/{{ $item->id }}"><span class="badge bg-danger">Deactive</span></a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('/client/show') }}/{{ $item->id }}"><i class="far fa-eye"></i></a>
                                <a href="{{ url('/client/edit') }}/{{ $item->id }}"><i class="far fa-edit"></i></a>
                                <a href="{{ url('/client/delete') }}/{{ $item->id }} }}"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td><span>No Data Show</span></td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
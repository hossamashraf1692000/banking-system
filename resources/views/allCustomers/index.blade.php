@extends('layout')

@section('title')
    Clients Page
@endsection
@section('main')
    <section class="header d-flex justify-content-center align-items-center flex-column">
        <h1 class="pt-4">View all Clients Data</h1>

        <h5 class="py-4 mb-2">Pay online and receive money without relying on your bank.</h5>
    </section>

    <section class="viewCst">
        <div class="container">
            <div class="show d-flex justify-content-end mb-2">
                <a href="{{url('/transfers')}}" class="btn btn-dark fw-bold ">Clients Transfers <i class="fa-solid fa-address-card"></i></a>
            </div>
            <table class="table  table-striped table-hover">
                <thead class="">
                    <tr>
                        <th scope="col">Index</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>

                        <td><a href="{{ url("viewCst/$item->id") }}" class="btn btn-outline-primary fw-bold">View Details <i class="fa-solid fa-eye"></i></a></td>
                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </section>
@endsection

@extends('layout')

@section('title')
    Transfers Page
@endsection
@section('main')
    <section class="header d-flex justify-content-center align-items-center flex-column">
        <h1 class="pt-4">View all Clients Transaction</h1>

        <h5 class="py-5 mb-3">Pay online and receive money without relying on your bank</h5>
    </section>

    <section class="viewCst">
        <div class="container">

            <table class="table  table-striped table-hover">
                <thead class="">
                    <tr>
                        <th scope="col">Index</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Receiver</th>
                        <th scope="col">Money Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transfersData as $item)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        
                        <td>{{$item->sender}}</td>
                        <td>{{$item->receiver}}</td>
                        <td>${{$item->amount}}</td>

                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </section>
@endsection

@extends('layout')

@section('title')
    Client Page
@endsection
@section('main')

    @if ($errors->any())
        <div class="alert alert-danger ">
                @foreach ($errors->all() as $error)
                    <p class="text-center">{{ $error }}</p>
                @endforeach
        </div>
    @endif

    @if (Session::has('msg'))
            <p class="alert alert-primary text-center">{{ Session::get('msg') }}</p>
    @endif

    <section class="header d-flex justify-content-center align-items-center flex-column">
        <h1 class="pt-4 font-weight-bolder ">Hello, {{ $clickedUser->name }}</h1>
        <div class="d-flex mb-5 pt-3">
            <h4 class="text-bold">Your Balance is :${{ $clickedUser->current_balance }}</h4>
        </div>
    </section>




    <section class="viewCst">
        <div class="container">

            <h2 class="text-center py-3 text-dark">Your Transfers <i class="fa-solid fa-money-check-dollar"></i></h2>

            <div class="show d-flex justify-content-end mb-2">
                <button class="btn btn-primary  fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Transfer
                    Now!</button>
            </div>
            @if ($allTransfers->count() == 0)
                <div class="alert alert-info text-center">
                    <p class="alert alert-info">You Have No Transfers Yet..</p>
                </div>
            @else
                <table class="table  table-striped table-hover">
                    <thead class="">
                        <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Sender-Receiver</th>
                            <th scope="col">Amout</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allTransfers as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $user->sender }}</td>
                                @if ($user->sender == $clickedUser->email)
                                    <td>-${{ $user->amount }}</td>
                                @else
                                    <td>+${{ $user->amount }}</td>
                                @endif

                                <td>{{ $user->updated_at }}</td>

                            </tr>
                        @endforeach



                    </tbody>
                </table>
            @endif

        </div>
    </section>


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog text-dark">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transfer Money</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    <form action="{{ url("/submit/$clickedUser->id") }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">From : {{ $clickedUser->email }}</label>
                            <p></p>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">To :</label>
                            <select name="receiver" class="form-select">
                                <option disabled selected>Select who will send to</option>
                                @foreach ($allUserEmails as $user)
                                    <option value="{{ $user->id }}">{{ $user->email }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Money Amount :</label>
                            <input type="number" class="form-control" id="amount" name="amount" min="10" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send Now</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

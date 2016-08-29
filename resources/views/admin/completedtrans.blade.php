@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-3">
            @include('includes.administrator')
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" id="table_id">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Item Name</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Payment Type</th>
                            <th>Merchant id</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $transaction)
                            <tr class="gradeA">
                                <td>{{$transaction->id}}</td>
                                <td>{{$transaction->item}}</td>
                                <td>{{$transaction->amount}}</td>
                                <td>{{$transaction->date}}</td>
                                <td>{{$transaction->payment_type}}</td>
                                <td>{{$transaction->merchantID}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
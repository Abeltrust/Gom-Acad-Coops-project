@extends('layouts.app')

@section('content')

<div class="container mt-4">
        <div class="text-center">
            <img src="avatar-6.jpg" class="rounded-circle mb-3" style="width: 150px; height: 150px;" alt="User Image">
            <h3>{{Auth::user()-> name}}</h3>
            <!-- <div class="mt-2">
                <span class="badge bg-success py-2">Verified</span>
                <span class="badge bg-warning py-2 text-dark">Pending</span>
            </div> -->
           
        </div>
        
        <div class="mt-4">
           <div class="d-flex justify-content-between">
             <h4>Requisition Information</h4>  
             <div class="mt-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                   Apply for Loan
                </button>
             </div>
           </div>
            <table class="table nowrap">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Item </th>
                        <th>Qnty</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rice</td>
                        <td>2 bags</td>
                        <td>&#8358;20,000</td>
                        <td>&#8358;40,000</td>
                        <td><span class="bg-success text-light p-1 rounded"> Approved </span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @include('pages.users.modal')
    @endsection
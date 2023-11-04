@extends('layouts.app')

@section('content')

<div class="container mt-4">
        <div class="text-center">
            <img src="avatar-6.jpg" class="rounded-circle" style="width: 150px; height: 150px;" alt="User Image">
            <h3>User's Name</h3>
            <div class="mt-2">
                <span class="badge bg-success py-2">Verified</span>
                <span class="badge bg-warning py-2 text-dark">Pending</span>
            </div>
            <div class="mt-2">
               <span class="badge text-dark">your profile is 50% complete</span>
               <a class="btn btn-primary py-1" href="{{route('membership')}}">Complete Profile</a>
            </div>
        </div>
        
        <div class="mt-4">
            <h4>User Information</h4>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>User's Name</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>user@example.com</td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td>City, Country</td>
                    </tr>
                    <!-- Add more rows for additional information -->
                </tbody>
            </table>
        </div>
    </div>
    @endsection
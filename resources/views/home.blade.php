@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class=" row justify-content-center d-flex">
                       <div class="col-md-3">
                         <div class="card  bg-default">
                            <div class="card-header bg-primary text-light text-center"><h5>Total Users</h5></div>
                                <div class="card-body">
                                    <div>
                                        <h5>
                                            344433
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                         <div class="card  bg-default">
                            <div class="card-header bg-success text-light text-center"><h5>Verified Users</h5></div>
                                <div class="card-body">
                                    <div>
                                        <h5>
                                            2233
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                         <div class="card  bg-default">
                            <div class="card-header bg-warning ext-center" ><h5> Pending Application</h5></div>
                                <div class="card-body">
                                    <div>
                                        <h5>
                                            23333
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <div class="col-md-3 mb-4">
                         <div class="card  bg-default">
                            <div class="card-header bg-default hearder-rounded "><h5>Revenue Genarated</h5></div>
                                <div class="card-body">
                                    <div class="text-lg">
                                       <h5>
                                          12.00
                                       </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                    <div class="row text-center">
                       <h5>Members</h5>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection

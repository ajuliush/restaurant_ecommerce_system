@extends('admin/adminlayout')

@section('container')
    <a href="/user-add" type="button" class="btn btn-success" style="width:170px;height:35px;padding-top:9px;">+ Add Customer</a>
    <br>
    <br>
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Customer Details</h4>
                    @if (Session::has('wrong'))
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Opps !</strong> {{ Session::get('wrong') }}
                        </div>
                        <br>
                    @endif
                    @if (Session::has('success'))
                        <div class="success">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Congrats !</strong> {{ Session::get('success') }}
                        </div>
                        <br>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>


                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Phone</th>



                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>

                                        <td>
                                            <span>{{ $user->id }}</span>
                                        </td>
                                        <td> {{ $user->name }} </td>







                                        <td> {{ $user->email }}</td>


                                        <td> {{ $user->phone }} </td>




                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection()

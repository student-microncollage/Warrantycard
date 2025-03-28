@extends('backendlayouts.main')

@section('content')

<div class="container">
    <div class="row mx-4">
        <h1 class="text-dark text-center mt-4 ">User Inquiry Details</h1>
        <div class="justify-content-center">
            <a href="{{route('userregister.add')}}" class="btn btn-success btn-md mx-4 mb-4 ">add inquiry </a>
            <table class="table table-bordred table-hover table-striped border-4 mx-4 shadow">
                <thead class="table-info">
                    <tr>
                        <th>Sn.no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Address</th>
                        <th>Dealer & Distributor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>vishal</td>
                        <td>vishal764@gmail.com</td>
                        <td>7876543290</td>
                        <td>Gorakhpur</td>
                        <td>uttar pradesh</td>
                        <td>Baxipur Gorakhpur uttar Pradesh</td>
                        <td>Abhisek singh</td>
                        <td>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>vishal</td>
                        <td>vishal764@gmail.com</td>
                        <td>7876543290</td>
                        <td>Gorakhpur</td>
                        <td>uttar pradesh</td>
                        <td>Baxipur Gorakhpur uttar Pradesh</td>
                        <td>Abhisek singh</td>
                        <td>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>vishal</td>
                        <td>vishal764@gmail.com</td>
                        <td>7876543290</td>
                        <td>Gorakhpur</td>
                        <td>uttar pradesh</td>
                        <td>Baxipur Gorakhpur uttar Pradesh</td>
                        <td>Abhisek singh</td>
                        <td>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
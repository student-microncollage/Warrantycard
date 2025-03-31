@extends('backendlayouts.main')

@section('content')

<div class="container">
    <div class="row mx-4">
        <div class="justify-content-center mt-4">
                <h1 class="text-dark text-center">Warenty Card Details</h1>
            <table class="table table-bordered table-striped table-hover mt-4 mx-4  shadow">         
                <thead class="table-info">
                    <tr>
                        <th>SR.no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Product.sl number</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($warentycard as $warentycards )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$warentycards->name}}</td>
                        <td>{{$warentycards->email}}</td>
                        <td>{{$warentycards->phone}}</td>
                        <td>{{$warentycards->city}}</td>
                        <td>{{$warentycards->state}}</td>
                        <td>{{$warentycards->product_sl_no}}</td>
                        {{-- <td>{{$warentycards->purchase_form}}</td> --}}
                        {{-- <td>{{$warentycards->status}}</td>
                        <td>{{$warentycards->warenty_card_no}}</td>
                        <td>{{$warentycards->purchase_date}}</td>
                        <td>{{$warentycards->expaire_date}}</td> --}}
                        <td>
                            <a href="{{route('warentycard.delete',['id'=>$warentycards->id])}}" onclick="return confirm('Are you sure delete this item....!')" class="btn btn-danger btn-md py-2 m-1 mx-2">delete</a>
                            <a href="{{route('warentycard.show',['id'=>$warentycards->id])}}" class="btn btn-info btn-md py-2 mx-2">show</a>
                        </td>
                    </tr>
                    @empty
                    Record Not Found....!
                    @endforelse

                </tbody>

            </table>
            <div class="mx-4 mb-4">
                {{$warentycard->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
</div>

@endsection



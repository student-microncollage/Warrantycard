@extends('backendlayouts.main')

@section('content')

<div class="container">
    <div class="row mx-4">
        <h1 class="text-dark text-center mt-4 ">User Feedback Details</h1>
        <div class="justify-content-center">
            <table class="table table-bordred table-hover table-striped border-4 mx-4 shadow">
                <thead class="table-info">
                    <tr>
                        <th>Sn.no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Rating</th>
                        <th>Comments</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($feedback !== null)
                        @foreach ($feedback as $feedbacks )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$feedbacks->name}}</td>
                            <td>{{$feedbacks->email}}</td>
                            <td>{{$feedbacks->rating}}</td>
                            <td>{{$feedbacks->comments}}</td>
                            <td>
                                <a href="{{route('feedback.delete',['id'=>$feedbacks->id])}}" onclick="return confirm('Are you sure deleted this item...!')" class="btn btn-danger btn-sm">Delete</a>   
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr><th class="text-danger text-center" colspan="6">Record Not found...!</th></tr>
                    @endif
                </tbody>
            </table>
            {{-- <div class="mx-4 mt-3">
                {{$userregister->links('pagination::bootstrap-5')}}
            </div> --}}
        </div>
    </div>
</div>
@endsection
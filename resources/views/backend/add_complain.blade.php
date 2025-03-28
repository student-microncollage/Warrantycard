@extends('backendlayouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="justify-content-center mt-4">
                <h1 class="text-dark text-center"> Add Complain Card</h1>
                <form action="{{route('complain.store')}}"  method="post" enctype="multipart/form-data" class="mx-4">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="name...." autofocus>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email...." autofocus>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">mobile</label>
                        <input type="number" name="mobile" class="form-control" placeholder="Phone...." autofocus>
                        @error('mobile')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Complain-Message</label>
                        <input type="text" name="complain_m" class="form-control" placeholder="Purscase-form...." autofocus>
                        @error('complain_m')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   
                    <div class="form-group mb-4">
                        <label for="">Warrenty Card Number</label>
                        <input type="text" name="warentycard_n" class="form-control" placeholder="Product.Sl Number...." autofocus>
                        @error('warentycard_n')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    
                    <span class="form-group mb-4 bg-primary mx-2 text-light">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </span>
                  
                    <div class="form-group mb-4 mt-4">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <button class="btn btn-warning btn-sm"><a href="{{route('complain.index')}}">back</a></button>
                    </div>
                </form>


        </div>
    </div>
</div>

@endsection



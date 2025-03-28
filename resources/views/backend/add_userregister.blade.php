@extends('backendlayouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="justify-content-center mt-4">
                <h1 class="text-dark text-center"> Add User Inquiry</h1>
                <form action="{{route('userregister.store')}}"  method="post" enctype="multipart/form-data" class="mx-4">
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
                        <label for="">City</label>
                        <input type="text" name="city" class="form-control" placeholder="city...." autofocus>
                        @error('city')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   
                    <div class="form-group mb-4">
                        <label for="">State</label>
                        <input type="text" name="state" class="form-control" placeholder="state...." autofocus>
                        @error('state')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="state...." autofocus>
                        @error('address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="dealer-distributor">Dealer or Distributor</label>
                        {{-- <input type="text" name="dealer" id="dealer-distributor" class="form-control" placeholder="Enter dealer or distributor name..." autofocus> --}}
                        <select name="dealer_&_distributor" class="form-control">
                            <option value="">Select Dealer or Distributor</option>
                            <option value="Dealer">Dealer</option>
                            <option value="Distributor">Distributor</option>
                        </select>
                        @error('dealer_&_distributor')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                  
                    <div class="form-group mb-4 mt-4">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <button class="btn btn-warning btn-sm"><a href="{{route('userregister.index')}}">back</a></button>
                    </div>
                </form>


        </div>
    </div>
</div>

@endsection



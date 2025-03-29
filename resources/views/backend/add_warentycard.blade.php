@extends('backendlayouts.main')

@section('content')

<div class="container bg-light">
    <div class="row">
        <div class="justify-content-center mt-4">
                <h1 class="text-dark text-center"> Add Warenty Card</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                <form action="{{route('warentycard.store')}}"  method="post" enctype="multipart/form-data" class="mx-4">
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
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone...." autofocus>
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">City</label>
                        <input type="text" name="city" class="form-control" placeholder="City...." autofocus>
                        @error('city')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">State</label>
                        <input type="text" name="state" class="form-control" placeholder="State...." autofocus>
                        @error('state')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Product.Sl Number</label>
                        <input type="text" name="productsln" class="form-control" placeholder="Product.Sl Number...." autofocus>
                        @error('productsln')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Purscase-form</label>
                        <input type="text" name="purchaseform" class="form-control" placeholder="Purscase-form...." autofocus>
                        @error('purchaseform')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Purchase Date</label>
                        <input type="date" name="purchase_date"  autofocus>
                        @error('purchase_date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <div class="form-group mb-2">
                        <label for="">Expaire Date</label>
                        <input type="date" name="expaired"  autofocus>
                        @error('expaired')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}
                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <button class="btn btn-warning btn-sm"><a href="{{route('warentycard.index')}}">back</a></button>
                    </div>
                </form>


        </div>
    </div>
</div>

@endsection




@if (session('succes'))
    <div id="success-message">
        <div class="alert alert-success bg-success mx-4 col-sm-4 ">
            {{session('succes')}}
        </div> 
    </div>
@endif 
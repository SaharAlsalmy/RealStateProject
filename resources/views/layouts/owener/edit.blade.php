@extends('layouts.temp.parents')

@section('page-pig-titel','RealEstate App')
@section('page-main-titel','My sites')

@section('style')

@endsection

@section('content')

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edite Oweners</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

    @if ($errors->any())
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>

        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>

        @endforeach
      </div>
    @endif

    @if (session()->has('message'))
    <div class="alert {{ session('alert-type') }} alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-ban"></i> Alert!</h5>
      {{ session('message')}}

    </div>
    @endif


      <form action="{{ route('oweners.update',$oweners->id) }} " method="post" style="">
        @csrf
        @method('PUT')
        <div class="card-body">

            <div class="form-group">
                <label for="name">User name</label>
                <input type="text" name="username" value="{{$oweners->username}}" class="form-control" id="name" placeholder="Enter user name">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Mail Id </label>
                  <input type="email" name="mail_id" value="{{$oweners->mail_id}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>

              <div class="form-group">
                  <label for="mobile_number">mobile_number</label>
                  <input type="tel" name="mobile_number" value="{{$oweners->mobile_number}}" class="form-control" id="mobile_number" placeholder="Password">
              </div>


              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" value="{{$oweners->password}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Photo</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" name="photo" value="{{$oweners->photo}}" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>

        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

</div>







@endsection

@section('scripts')

@endsection

  {{-- @if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-ban"></i> Alert!</h5>

      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>

      @endforeach
    </div>
  @endif

  @if (session()->has('message'))
  <div class="alert {{ session('alert-type') }} alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
    {{ session('message')}}

  </div>
  @endif --}}

@extends('layouts.temp.parents')

@section('page-pig-titel','RealEstate App')
@section('page-main-titel','My sites')

@section('style')

@endsection

@section('content')


<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Email </th>
                <th>Mobile Number</th>
                <th>password</th>
                <th> Photo</th>
                <th>created_at</th>
                <th>Settings</th>

              </tr>
            </thead>
            <tbody>

                @foreach ($oweners as $owener)
                <tr>
                    <td>{{ $owener->id }}</td>
                    <td>{{ $owener->username }}</td>
                    <td>{{ $owener->mail_id }}</td>
                    <td>{{ $owener->mobile_number }}</td>
                    <td>{{ $owener->password }}</td>
                    <td>{{ $owener->photo }}</td>
                    <td>{{ $owener->created_at }}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info">
                                <a href="{{route('owners.edit',$owener->id)}}">
                                    <i class="fas fa-edit" style="color: white"></i>
                                </a>
                            </button>

                            <button type="button" class="btn btn-danger">
                                <a href="#" onclick="confirmDelete('{{ $owener->id  }}',this)"> <!--  this return to a link -->
                                    <i class="fas fa-trash" style="color: white"></i>
                                </a>

                            </button>

                          </div>
                    </td>



                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection

@section('scripts')

<script>
     function confirmDelete(id ,referens){
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            destroy(id, referens);

        }
        })
    }

    function destroy(id, referens){
        // Make a request for a user with a given ID
        axios.delete('/oweners/'+id)
        .then(function (response) {
            // handle success
            console.log(response);
            referens.closest('tr').remove();
            showMessage(response.data);
        })
        .catch(function (error) {
            // handle error
            console.log(error);
            showMessage(error.response.data);
        })

    }

    function showMessage(){
        Swal.fire({
        icon: data.icon,
        title: data.title,
        showConfirmButton: false,
        timer: 1500
})
    }
</script>

@endsection

@extends('backend.app')

@section('breadcrumb')
<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
</ol>
@endsection
@section('content')

<div class="col-md-12">
    <div class="card text-left col-md-12">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h2>All users </h2>
                {{-- @can('customer create') --}}

                {{-- <div class="ml-auto">
                    <a href="{{route('user.create')}}" class="btn btn-outline-primary btn-sm"><i
                    class="fas fa-plus mr-1"></i>Add user</a>

            </div> --}}
            {{-- @endcan --}}
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive ">
            <table class="table table-bordered  table-striped" id="users">
                <thead>
                    <tr>
                        <th class="m-1 b-1" width="3%">No</th>
                        <th class="m-1 b-1">Full Name</th>
                        <th class="m-1 b-1">Email Address</th>
                        <th class="m-1 b-1" width="3%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td class='p-1'>{{$loop->index+1}}</td>
                        <td class='p-1'>{{$user->name}}</td>
                        <td class='p-1'>{{$user->email}}</td>

                        </td>

                        <td class='m-1 p-1'>
                            <form action="{{route('user.destroy',$user->id)}}" id="detach-form-{{$user->id}}"
                                method="POST" style="display: none">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure to Delete this?')){
                                event.preventDefault();
                                document.getElementById('detach-form-{{$user->id}}').submit();
                            }else{
                                event.preventDefault();
                            }"> <i class="fa fa-trash"> </i>
                            </button>
                        </td>

                    </tr>

                    @empty
                    <tr>
                        <td class='m-1 p-1 text-center' colspan="2">No Data Avilable</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">

    </div>
</div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready( function () {

        $('#users').DataTable();

        $('#delete_meue').click(function (e) {

e.preventDefault();
var deleted_id = $(this).closest("tr").find('.deleted_value_id').val();
console.log('deleted_id')

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this record!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            var data = {
                "_token": "{{ csrf_token() }}",
                "id": deleted_id
            }
            var urlPath = '/hrm/department/'+ deleted_id;
            // alert(urlPath);

            $.ajax({
                type: "DELETE",
                url:  urlPath,
                data: data,
                dataType: "JSON",
                success: function (response) {
                    // swal("Your imaginary file is safe!");
                    console.log(response.success);
                    swal(response.success, {
                    icon: 'success',
                    }).then((result)=>{
                        location.reload();
                    });
                },
                error:function(){
                    swal("Your imaginary file is safe!");
                }
            });

        }
        });

        });

                } );
</script>

@endsection

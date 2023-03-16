@extends('layouts.admin.app')

@section('content')
<div class="container rounded bg-black mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                     <div class="col-md-6"><label class="labels">Name</label><br><label class="labels"><b>{{ $user->name }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Email</label><br><label class="labels"><b>{{ $user->email }}</b></label></div>
                </div>
             </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table  class="table table-bordered table-hover dataTable dtr-inline tableUsers" aria-describedby="example2_info">
               <thead>
                  <tr>
                  <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                     id
                  </th>

                  <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                      Name
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                     Type
                  </th>

                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                     Logo
                  </th>
                  <!-- <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                     User Role
                  </th> -->
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                     Action
                  </th>
                  </tr>
               </thead>
               <tbody>
               </tbody>
               <!-- <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1">id</th>
                     <th rowspan="1" colspan="1"> First Name</th>
                     <th rowspan="1" colspan="1">Last Name</th>
                     <th rowspan="1" colspan="1">Phone</th>
                     <th rowspan="1" colspan="1">Email</th>
                     <th rowspan="1" colspan="1">User Role</th>
                     <th rowspan="1" colspan="1">Action</th>
                  </tr>
               </tfoot> -->
            </table>
         </div>
    </div>
</div>
</div>
</div>
@endsection

@push('styles')

   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
   <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

   <script type="text/javascript">
      $(document).ready(function() {
         $('.tableUsers').DataTable({
            "order": [[ 0, "desc" ]],
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.users.orgList',$user->id) }}",
            columns: [
               {data: 'id', name: 'id'},
               {data: 'name', name: 'name'},
               {data: 'type', name: 'type'},
               {data: 'logo', name: 'logo'},
               {
                  data: 'action',
                  name: 'action',
                  orderable: true,
                  searchable: true
               },
            ]
         });
      });
      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
         }
      });

    function deleteData(e){

        var table = $('.tableUsers').DataTable();
        var id = e.getAttribute('data-id');
        var url = e.getAttribute('data-url');

        swal({
        title: 'Are you sure?',
        text: "It will permanently deleted !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        })
        .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url : url,
                type : "POST",
                data : {'_method' : 'DELETE'},
                success: function(){
                    swal({
                        title: "Success!",
                        text : "Post has been deleted",
                        icon : "success",
                    }).then(function(){
                        $(e).closest("tr").remove();
                    });
                },
                error : function(){
                    swal({
                        title: 'Opps...',
                        text : "Something Wrong",
                        type : 'error',
                        timer : '1500'
                    })
                }
            })
        } else {
            swal("Your Record is safe!");
        }
        });
    }

   </script>

@endpush

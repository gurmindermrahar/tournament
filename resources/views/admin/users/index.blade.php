@extends('layouts.admin.app')

@section('content')
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
         <h1>Users List</h1>
         </div>
         <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
         </ol>
         </div>
      </div>
   </div>
</section>

<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Users List</h3>
                  <a style="float:right;" class="btn btn-info" href="{{route('admin.users.create')}}">Add</a>
               </div>
               <div class="card-body">
                  <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                     <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
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
                                    User Role
                                 </th>

                                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                    Email
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
         </div>
      </div>
   </div>
</section>
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
            ajax: "{{ route('admin.users.index') }}",
            columns: [
               {data: 'id', name: 'id'},
               {data: 'name', name: 'name'},
               {data: 'user_role', name: 'user_role'},
               {data: 'email', name: 'email'},
               // {data: 'user_role', name: 'user_role'},
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

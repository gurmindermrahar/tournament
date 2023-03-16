@extends('layouts.admin.app')

@section('content')        
        <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <!-- <li class="breadcrumb-item"><a href="#">Forms</a></li> -->
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Gear form </h4>
                    <p class="card-description"> Gear form </p>
                    @if(isset($user))
                    {{ Form::model($user, ['route' => ['users.store', $user->id], 'method' => 'patch','files'=> true,'class'=>'','id'=>'AdminUser']) }}
                    @else
                        {{ Form::open(['route' => 'users.store','files'=> true,'class'=>'','id'=>'categoryform']) }}
                    @endif
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Description</label>
                        <!-- <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email"> -->
                        <textarea name="description" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="file" name="image" class="form-control file-upload-info"  placeholder="Upload Image">
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Price</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Price" name="price">
                      </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Link</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Link" name="link">
                            
                        </div>
                      
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <!-- <button class="btn btn-dark">Cancel</button> -->
                    </form>
                  </div>
                </div>
              </div>
              
          <!-- content-wrapper ends -->

          @endsection
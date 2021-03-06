<!-- admin/add_employee.blade.php -->

@extends('admin.layout')
 
@section('content')

			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <form action="{{route('insertProject')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            @csrf 

                                <div class="card-body">
                                    <h4 class="card-title">Add new project</h4>

                                    <div class="form-group row">
                                        <label for="headline" class="col-sm-3 text-right control-label col-form-label">Main Headline</label>
                                        <div class="col-sm-9">
                                            <input name="headline" type="text" class="form-control" id="headline" placeholder="Main Headline Here" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
                                        <div class="col-sm-9">
                                            <input name="title" type="text" class="form-control" id="title" placeholder="Title" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input name="description" type="text" class="form-control" id="description" placeholder="Description" required>
                                        </div>
                                    </div>
                                    
									<div class="form-group row">
                                        <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input name="image" type="file" class="form-control" id="file"  />
										    </div>
                                    </div>
                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    

@endsection
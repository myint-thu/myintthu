@extends('backendtemplate')
@section('content')
		<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category Create Form</h1>
            </div>
         </div>
         <div class="row">
         	<div class="col-md-6">
         		<div class="col-md-12">
        {{-- start bootstrap  --}}
         			<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
         				@csrf
         				
         				<div class="form-group row">
         					<label for="inputName" class="col-sm-2 col-form-label">Name</label>
         					<div class="col-sm-10">
         						<input type="text" class="form-control" id="inputName" name="name">
         					</div>
         				</div>
         				<div class="form-group row">
         					<label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
         					<div class="col-sm-10">
         						<input type="file" class="form-control" id="inputPhoto" name="photo">
         					</div>
         				</div>
         				
         				<div class="form-group row">
         					<div class="col-sm-10">
         						<button type="submit" class="btn btn-primary" name="save" value="Create">Create</button>
         					</div>
         				</div>
</form>
        {{-- end bootstrap --}}
         		</div>
         	</div>
         </div>
@endsection
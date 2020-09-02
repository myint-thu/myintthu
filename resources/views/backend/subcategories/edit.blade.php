@extends('backendtemplate')
@section('content')
		<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Subcategory Edit Form</h1>
            </div>
         </div>
         <div class="row">
         	<div class="col-md-6">
         		<div class="col-md-12">
        {{-- start bootstrap  --}}
         			<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
         				@csrf
         				@method('PUT')
         				{{-- <div class="form-group row">
         					<label for="inputCodeno" class="col-sm-2 col-form-label">CodeNo</label>
         					<div class="col-sm-10">
         						<input type="text" class="form-control" id="inputEmail3" name="codeno" value="{{$item->codeno}}" readonly="readonly">
         					</div>
         				</div> --}}
         				<div class="form-group row">
         					<label for="inputName" class="col-sm-2 col-form-label">Name</label>
         					<div class="col-sm-10">
         						<input type="text" class="form-control" id="inputPassword3" name="name" value="{{$subcategory->name}}">
         					</div>
         				</div>
         				{{-- <div class="form-group row">
         					<label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
         					<div class="col-sm-10">
         						<input type="hidden" class="form-control" id="inputEmail3" name="photo" >
         						<img src="{{asset($item->photo)}}" width="120" height="100">
         						<input type="hidden" name="oldphoto" value="{{$item->photo}}">
         					</div>
         				</div> --}}
         				{{-- <div class="form-group row">
         					<label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
         					<div class="col-sm-10">
         						<input type="number" class="form-control" id="inputEmail3" name="price" value="{{$item->price}}">
         					</div>
         				</div> --}}
         				{{-- <div class="form-group row">
         					<label for="inputDiscount" class="col-sm-2 col-form-label">Discount</label>
         					<div class="col-sm-10">
         						<input type="number" class="form-control" id="inputEmail3" name="discount"  value="{{$item->discount}}">
         					</div>
         				</div> --}}
         				{{-- <div class="form-group row">
         					<label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
         					<div class="col-sm-10">
         						<textarea cols="40" rows="5" name="description">
         							{{$item->description}}
         						</textarea>
         					</div>
         				</div> --}}
         				{{-- <div class="form-group row">
         					<select class="form-control form-control-md" id="inputBrand" 			name="brand">
         						<optgroup label="Choose Brand">
         							@foreach($brands as $brand)
         							<option value="{{$brand->id}}">{{$brand->name}}</option>
         							@endforeach
         						</optgroup>
         						
         					</select>

         					
         				</div> --}}
         				<div class="form-group row">
         					<select class="form-control form-control-md" id="inputCategory" name="categories">
         						<optgroup label="Choose Category">
         							@foreach($categories as $category)
         							<option value="{{$category->id}}">{{$category->name}}</option>
         							@endforeach
         						</optgroup>
         						
         					</select>
         				</div>

         				
         				<div class="form-group row">
         					<div class="col-sm-10">
         						<button type="submit" class="btn btn-primary" name="save" value="Create">Update</button>
         					</div>
         				</div>
</form>
        {{-- end bootstrap --}}
         		</div>
         	</div>
         </div>
@endsection
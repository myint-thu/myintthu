@extends('backendtemplate')
@section('content')
		<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
            </div>
         </div>
         <div class="row">
         	<div class="col-md-6">
         		<div class="col-md-12">
        {{-- start bootstrap  --}}
         			<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
         				@csrf
         				@method('PUT')
         				<div class="form-group row">
         					<label for="inputCodeno" class="col-sm-2 col-form-label">CodeNo</label>
         					<div class="col-sm-10">
         						<input type="text" class="form-control" id="inputEmail3" name="codeno" value="{{$item->codeno}}" readonly="readonly">
         					</div>
         				</div>
         				<div class="form-group row">
         					<label for="inputName" class="col-sm-2 col-form-label">Name</label>
         					<div class="col-sm-10">
         						<input type="text" class="form-control" id="inputPassword3" name="name" value="{{$item->name}}">
         					</div>
         				</div>
         				<div class="form-group row">
         					<label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
         					<div class="col-sm-10">
         						<input type="hidden" class="form-control" id="inputEmail3" name="photo" >
         						<img src="{{asset($item->photo)}}" width="120" height="100">
         						<input type="hidden" name="oldphoto" value="{{$item->photo}}">
         					</div>
         				</div>
         				<div class="form-group row">
         					<label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
         					<div class="col-sm-10">
         						<input type="number" class="form-control" id="inputEmail3" name="price" value="{{$item->price}}">
         					</div>
         				</div>
         				<div class="form-group row">
         					<label for="inputDiscount" class="col-sm-2 col-form-label">Discount</label>
         					<div class="col-sm-10">
         						<input type="number" class="form-control" id="inputEmail3" name="discount"  value="{{$item->discount}}">
         					</div>
         				</div>
         				<div class="form-group row">
         					<label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
         					<div class="col-sm-10">
         						<textarea cols="40" rows="5" name="description">
         							{{$item->description}}
         						</textarea>
         					</div>
         				</div>
         				<div class="form-group row">
         					<select class="form-control form-control-md" id="inputBrand" 			name="brand">
         						<optgroup label="Choose Brand">
         							@foreach($brands as $brand)
         							<option value="{{$brand->id}}">{{$brand->name}}</option>
         							@endforeach
         						</optgroup>
         						
         					</select>

         					
         				</div>
         				<div class="form-group row">
         					<select class="form-control form-control-md" id="inputSubcategory" name="subcategories">
         						<optgroup label="Choose Subcategory">
         							@foreach($subcategories as $subcategory)
         							<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
         							@endforeach
         						</optgroup>
         						
         					</select>
         				</div>

         				{{-- <fieldset class="form-group">
         					<div class="row">
         						<legend class="col-form-label col-sm-2 pt-0">Radios</legend>
         						<div class="col-sm-10">
         							<div class="form-check">
         								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
         								<label class="form-check-label" for="gridRadios1">
         									First radio
         								</label>
         							</div>
         							<div class="form-check">
         								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
         								<label class="form-check-label" for="gridRadios2">
         									Second radio
         								</label>
         							</div>
         							<div class="form-check disabled">
         								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
         								<label class="form-check-label" for="gridRadios3">
         									Third disabled radio
         								</label>
         							</div>
         						</div>
         					</div>
         				</fieldset> --}}
         				{{-- <div class="form-group row">
         					<div class="col-sm-2">Checkbox</div>
         					<div class="col-sm-10">
         						<div class="form-check">
         							<input class="form-check-input" type="checkbox" id="gridCheck1">
         							<label class="form-check-label" for="gridCheck1">
         								Example checkbox
         							</label>
         						</div>
         					</div>
         				</div> --}}
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
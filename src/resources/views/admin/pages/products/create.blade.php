@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
       <div class="card">
          <div class="card-body">
             <form method="POST" class="p-auto" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-4">
                    <label for="name">Name</label>
                   <input type="text" name="name" id="name" class="form-control" placeholder="Product Name"/>
                </div>
                <div class="form-outline mb-4">
                    <label for="category">Category</label>
                     <select name="category_id" id="category" class="form-control">
                         <option value="">Select Category</option>
                         @foreach($categories as $category)
                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                         @endforeach
                    </select>
                </div>
                <div class="form-outline mb-4">
                    <label for="price">Price</label>
                     <input type="text" oninput="this.value = this.value.replace(/[^0-9\.]|(\.(?=.*\.))/g, '');" name="price" id="price" class="form-control" placeholder="Product Price"/>
                </div>
                <div class="form-outline mb-4">
                    <label for="stock">Stock</label>
                    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="stock" id="stock" class="form-control" placeholder="Product Stock"/>
                </div>
                <div class="form-outline mb-4">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Product Description"></textarea>
                </div>
                <div class="form-outline mb-4">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Product Image"/>
                </div>
                <div class="form-outline mb-4">
                    <label for="status">Status</label>
                    <select name="active" id="status" class="form-control">
                        <option value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                   </select>
                </div>
                <div class="form-outline mb-4">
                    <label for="featured">Featured</label>
                    <select name="featured" id="featured" class="form-control">
                        <option value="">Select Featured</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                   </select>
                </div>
                <button type="submit" class="btn btn-primary  mb-4 text-center">Create</button>
             </form>
          </div>
       </div>
    </div>
</div>
@endsection
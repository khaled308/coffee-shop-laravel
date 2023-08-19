@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
       <div class="card">
          <div class="card-body">
             <form method="POST" class="p-auto" action="{{route('admin.products.update', $product->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-outline mb-4">
                    <label for="name">Name</label>
                   <input type="text" name="name" id="name" class="form-control" placeholder="Product Name" value="{{old('name', $product->name)}}"/>
                </div>
                <div class="form-outline mb-4">
                    <label for="category">Category</label>
                     <select name="category_id" id="category" class="form-control">
                         <option value="">Select Category</option>
                         @foreach($categories as $category)
                         <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                         @endforeach
                    </select>
                </div>
                <div class="form-outline mb-4">
                    <label for="price">Price</label>
                     <input type="text" oninput="this.value = this.value.replace(/[^0-9\.]|(\.(?=.*\.))/g, '');" name="price" id="price" class="form-control" placeholder="Product Price" value="{{old('price', $product->price)}}"/>
                </div>
                <div class="form-outline mb-4">
                    <label for="stock">Stock</label>
                    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="stock" id="stock" class="form-control" placeholder="Product Stock" value="{{old('stock', $product->stock)}}"/>
                </div>
                <div class="form-outline mb-4">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Product Description">{{old('description', $product->description)}}</textarea>
                </div>
                <div class="row">
                    <div class="col">
                        @php
                            $image = $product->image;
                            if (!file_exists($image)) {
                                $image = 'storage/' . $image;
                            }
                        @endphp
                        <img src="{{asset( $image )}}" alt="product-image" style="width: 100px; height: 100px;">
                    </div>
                    <div class="col">
                        <div class="form-outline mb-4">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control" placeholder="Product Image"/>
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <label for="status">Status</label>
                    <select name="active" id="status" class="form-control">
                        <option value="">Select Status</option>
                        <option value="1"  {{ $product->active ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ !$product->active ? 'selected' : '' }}>Inactive</option>
                   </select>
                </div>
                <div class="form-outline mb-4">
                    <label for="featured">Featured</label>
                    <select name="featured" id="featured" class="form-control">
                        <option value="">Select Featured</option>
                        <option value="1" {{ $product->featured ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ !$product->featured ? 'selected' : '' }} >No</option>
                   </select>
                </div>
                <button type="submit" class="btn btn-primary  mb-4 text-center">Update</button>
             </form>
          </div>
       </div>
    </div>
</div>
@endsection
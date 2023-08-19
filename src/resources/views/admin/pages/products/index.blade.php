@extends('admin.layouts.main')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1>Products</h1>
        <a href="{{route('admin.products.create')}}" class="btn btn-primary btn-sm">Create Product</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    @php
                        $image = $product->image;
                        if (!file_exists($image)) {
                            $image = 'storage/' . $image;
                        }
                    @endphp
                    <img src="{{asset( $image )}}" alt="product-image" style="width: 100px; height: 100px;">
                </td>
                <td>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <x-pagination :data="$products" />
@endsection
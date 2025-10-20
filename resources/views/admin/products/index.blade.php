@foreach ($products as $product)
    <div class="product-item">
        <h3>{{ $product->name }}</h3>
        <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Xóa</button>
        </form>
    </div>
@endforeach

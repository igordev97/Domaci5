
@extends("layout")

@section("page-content")
    <div class="row">
        <div class="col-8 mx-auto">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Delete product</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($allProducts as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->amount}}</td>
                            <td>


                                    <a href="/admin/delete-product/{{$product->id}}"class="btn btn-danger">Delete</a>
                                <a href="/admin/edit-product/{{$product->id}}"></a>

                            </td>
                        </tr>


                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

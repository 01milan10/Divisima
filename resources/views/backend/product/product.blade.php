@extends('backend.layout.app')
@section('title','Add Product')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    <strong>Add</strong> Product</div>
                <div class="card-body" style="text-align: center;">
                    <form id="category_form" class="form" action="{{route('add.products')}}" method="post">
                        {{csrf_field()}}
                        <div id="form_body" class="form-group" >
                            <div>
                                <table class="table" style="border-spacing: 0px">
                                    <tbody>
                                    <tr>
                                        <td style="text-align: right">
                                            <label>Product Name:</label>
                                        </td>
                                        <td style="text-align: left">
                                            <input type="text" name="product_name" placeholder="Add Product Name" style="border-radius:.20rem"><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right">
                                            <label>Seller Name:</label>
                                        </td>
                                        <td style="text-align: left">
                                            <input type="text" name="seller_name" placeholder="Product Seller Name" style="border-radius:.20rem"><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right">
                                            <label>Category:</label>
                                        </td>
                                        <td style="text-align: left">
                                            <select name="category_id" style="border-radius:.20rem">
                                                <option>No Parent</option>
                                                @foreach($category_names as $category_name)
                                                    <option value="{{$category_name->category_id}}">{{$category_name->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer" style="text-align: center">
                    <button class="btn btn-sm btn-outline-primary" type="submit" form="category_form">
                        <i class="fa fa-check-circle"></i> Save</button>
                    <button class="btn btn-sm btn-outline-danger" type="reset" form="category_form">
                        <i class="fa fa-ban"></i> Reset</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('backend.layout.app')
@section('title','Add Category')

@section('content')
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function (e) {--}}
{{--            var content ='<p/><div><label class="">Category Name:</label> <input class=""type="text" name="category_name[]" placeholder="Add Category Name"><i class="fa fa-times-circle ml-3" id="remove"></i></div>'--}}

{{--            var max = 1;--}}

{{--            $("#add").click(function (e){--}}
{{--                if(max<5){--}}
{{--                    $("#form_body").append(content);--}}
{{--                }--}}
{{--                max++;--}}
{{--            });--}}

{{--            $("#form_body").on('click','#remove',function (e) {--}}
{{--                if(max<=5){--}}
{{--                    $(this).parent('div').remove();--}}
{{--                }--}}
{{--                max--;--}}
{{--            })--}}
{{--        });--}}
{{--    </script>--}}

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    <strong>Add</strong> Category</div>
                <div class="card-body" style="text-align: center;">
                    <form id="category_form" class="form" action="{{route('add.categories')}}" method="post">
                        {{csrf_field()}}
                        <div id="form_body" class="form-group" >
                            <div>
                                <table class="table" style="border-spacing: 0px">
                                    <tbody>
                                        <tr>
                                            <td style="text-align: right">
                                            <label>Category Name:</label>
                                        </td>
                                            <td style="text-align: left">
                                            <input type="text" name="category_name" placeholder="Add Category Name" style="border-radius:.20rem"><br>
                                        </td>
                                    </tr>
                                        <tr>
                                            <td style="text-align: right">
                                            <label>Parent:</label>
                                        </td>
                                            <td style="text-align: left">
                                            <select name="parent_id" style="border-radius:.20rem">
                                                <option>No Parent</option>
                                            @foreach($parents as $parent)
                                                    <option value="{{$parent->category_id}}">{{$parent->category_name}}</option>
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

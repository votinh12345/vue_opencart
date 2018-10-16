@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hover Data Table</h3>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></th>
                            <th>Images</th>
                            <th>Category Name</th>
                            <th>Sort Order</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listCategory as $category)
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                @if($category->image)
                                <img src="{{asset('image/'.$category->image)}}" alt="{{ $category->name }}" width="50px" height="50px">
                                @else
                                <img src="{{asset('image/no_image.jpg')}}" alt="No images" width="50px" height="50px">
                                @endif
                                
                            </td>
                            <td>{{ $category->name }}</td>
                            <td> {{ $category->sort_order }}</td>
                            <td>&nbsp;</td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{!! $listCategory->links() !!}
@endsection

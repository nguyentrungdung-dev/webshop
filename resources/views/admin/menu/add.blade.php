@extends('admin.main')



@section('content')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Name category</label>
                <input type="text" name="name" class="form-control"  placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="parent_id">
                    <option value="0"> Parent Directory </option>
                    @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Description </label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>


            <div class="form-group">
                <label>Active</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                    <label for="no_active" class="custom-control-label">No</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create Category</button>
        </div>
        @csrf
    </form>
@endsection



@extends("layouts.app")


@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store') }}"  method="post" enctype="multipart/form-data">
                        @csrf

                        <label for="uploadFile">Upload file</label>
                        <input type="file" name="avatar" id="uploadFile" accept="image/png, image/jpeg">
                    
                    
                    
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
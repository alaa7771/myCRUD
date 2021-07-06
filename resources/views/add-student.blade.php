@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{route('save.std')}}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">
                    <div>
                        <h1>Add New Student</h1>
                    </div>


                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label ">name</label>
                        <input id="caption"
                               type="text" class="form-control"
                               name="name"
                               required  >
                    </div>


                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label ">description</label>
                        <input id="caption"
                               type="text" class="form-control"
                               name="description"
                        >
                    </div>


                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label ">email</label>
                        <input id="caption"
                               type="text" class="form-control"
                               name="email"
                        >
                    </div>







                    <div class="row pt-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>

                </div>

            </div>
        </form>


    </div>
@endsection

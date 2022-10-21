@extends('layouts.app')

@section('content')
<main role="main" class="container">

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Users </h2>
                    </div>

                    <table class="table table-bordered table-striped " id="table_id">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        @foreach ($datas as $data)
                        
                            <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>

                            </tr>
                        @endforeach

                    </table>
                
                </div>
            </div>
        </div>
    </div> 
</main>
@endsection
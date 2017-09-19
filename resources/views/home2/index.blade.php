@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Blog</div>

               

            </div> 
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('home2.create') }}">Create New Blog</a>
            </div>
        </div>
        <div class="col-md-12">
                 <table class="table">
                                    <thead>
                                          <tr>
                                            <th>id</th>
                                            <th>Titre Blog</th>
                                            <th>Image</th>
                                            <th>Date Publication</th>
                                            <th>Categorie</th>
                                            <th>Text Blog</th>
                                            
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($blogs as $blog)
                                          <tr>
                                            <td>{{$blog->id}}</td>
                                            <td>{{$blog->titre}}</td>
                                            <td><img src="images/blogs/{{$blog->imageb}}" width="50px"></td>
                                            <td>{{$blog->datep}}</td>
                                            <td>{{$blog->categorie}}</td>
                                            <td >{!! $blog->bodyb !!}</td>

                                           
                                         <td>
                                                
                                            <a href="{{ route('home2.edit',$blog->id) }}" class="btn btn-success">Editer</a>
                                                
                                         
                                               <a href="{{ route('home2.show',$blog->id) }}" class="btn btn-info">Afficher tous</a>
                                          {!! Form::open(['method' => 'DELETE','route' => ['home2.destroy', $blog->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Supprimer',['class'=>'btn btn-danger']) !!}
                                          {!!  Form::close() !!}
                                              
                                            </td>
                                          </tr>
                                    @endforeach    
                                    </tbody>
                            </table>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Blog</div>

               

            </div> 



     <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Blog => {{ $blogs->titre }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home2.index') }}"> Retour</a>
            </div>
        </div>
    </div>

   

    {!! Form::open(array('route' => ['home2.show',$blogs->id],'method'=>'get')) !!}
   
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Titre:</strong>=>
          {{$blogs->titre}}
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <img src="../images/blogs/{{$blogs->imageb}}">
           
           
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
           
                <strong>Date Publication:</strong>=>
                {!! $blogs->datep !!}
           
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie:</strong>
                {{ $blogs->categorie }}
            </div>
        </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie:</strong>
                {!! $blogs->bodyb !!}
            </div>
        </div>

      
    </div>
    {!! Form::close() !!}
  
                         
        </div>
    </div>
</div>
@endsection
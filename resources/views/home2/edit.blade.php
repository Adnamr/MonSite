@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Blog</div>

               

            </div> 

            <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Blog</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home2.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Il ya des problem dans l'input <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($blogs, ['method' => 'PATCH','files' => true,'route' => ['home2.update', $blogs->id]]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {!! Form::text('titre', null, array('placeholder' => 'Title','class' => 'form-control')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Publication:</strong>
                {!! Form::date('datep', null, array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="cursor: pointer;">
                <strong>Categorie:</strong>
               


                 {!! Form::select('categorie', ['web' => 'web','Descktop' => 'Descktop','Mobile' => 'Mobile','NonClasse'=>'NonClasse'], null, array('class' => 'form-control')) !!}
                
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="cursor: pointer;">
                <strong>Body Blog:</strong>
                {!! Form::textarea('bodyb', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
             
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="cursor: pointer;">
               <strong>image:</strong>
                {!! Form::file('imageb', null, array('class' => 'form-control','style'=>'height:100px')) !!}
                <img src="../../images/{{ $blogs->imageb }}" class="img-responsive imgfile" > 
            </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="button" class="test">Submit</button>
        </div> -->

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}
    <script type="text/javascript">
      
        $(".fileclick").click(function(){
    $(".imgfile").hide();
});

    </script>







            </div>
    </div>
</div>
@endsection
@section('script')

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endscrip
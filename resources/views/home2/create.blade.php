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
                <h2>Cree Un Nouveau Blog</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home2.index') }}"> Retour</a>
            </div>
        </div>
    </div>

   

    {!! Form::open(array('route' => 'home2.store','method'=>'POST','files' => true)) !!}
   
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {!! Form::text('titre', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>image:</strong>
                {!! Form::file('imageb', null, array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Publication:</strong>
                {!! Form::date('datep', null, array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categorie:</strong>
               
               
                {!! Form::select('categorie', ['web' => 'web','Descktop' => 'Descktop','Mobile' => 'Mobile','NonClasse'=>'NonClasse'], null, array('class' => 'form-control')) !!}
            </div>
        </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Text Blog :</strong>
                <textarea class="ckeditor editor" name="bodyb"></textarea>
                
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Cree</button>
        </div>

    </div>
    {!! Form::close() !!}
    </tbody>
                            </table>
                             @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ils y a des problems.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        </div>
    </div>
</div>
@endsection
@section('script')

 <script>
          CKEDITOR.replace( '.ckeditor', {
              filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
              filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
          });
 </script>

<script type="text/javascript" src="{{ url('ckeditor/ckeditor.js') }}"></script>



@endsection
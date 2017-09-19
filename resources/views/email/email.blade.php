@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Email</div>

               

            </div>
            <div class="pull-right">
            	<a href="{{ url('/home') }}" class="btn btn-info btn-md">Retour</a>
            </div>
            
        </div>
        <div class="col-md-12">
       <h4><strong> Id Email</strong></h4> => {{$contacts->id}} <br>
       

        <h4><strong> Nom Complete </strong></h4>=>
        {{$contacts->nomcomplete}}<br>

        <h4><strong> Email </strong></h4>=>
        {{$contacts->email}}<br>


         <h4><strong> Site Web </strong></h4>=>
        {{$contacts->siteweb}}<br>

        <h4><strong> Message </strong></h4>=>
        {{$contacts->message}}<br>
        </div>
    </div>
</div>
@endsection

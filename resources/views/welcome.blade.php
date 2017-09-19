@extends('layouts.app')

@section('stylesheet')
<style type="text/css">
    tr:visited{
        background: green;
        cursor: pointer;
    }
</style>
@endsection

@section('script')



@endsection 

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Email</div>

               

            </div>
        </div>
        <div class="col-md-12">
              <table class="table">
                                    <thead>
                                          <tr>
                                            <th>id</th>
                                            <th>Nom Complete</th>
                                            <th>Email</th>
                                            <th>Site web</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($contactforms as $contact) 

                                      
                                           <tr style="background: #ffb3b3;">

                                            <td>{{$contact->id}}</td>
                                            <td>{{$contact->nomcomplete}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td><a href="{{$contact->siteweb}}">{{$contact->siteweb}}</a> </td>
                                            <td>{{ substr($contact->message,0,100) }}</td>
                                            <td>
                                                
                                           
                                                {!! Form::open(array('url'=>['destroy',$contact->id],'method'=>'DELETE')) !!}
                                                <input type="submit" value="Supprimer" class="btn btn-danger">
                                                {!! Form::close() !!}
                                                <!-- <a href="" class="btn btn-info">Afficher</a> -->
                                                 <a href="{{ url('email/show',$contact->id) }}" class="btn btn-info">Afficher</a> 
                                            </td>
                                          </tr> 
                                      
                                    @endforeach    
                                    </tbody>
                            </table>
                
        </div>
    </div>
</div>

@endsection


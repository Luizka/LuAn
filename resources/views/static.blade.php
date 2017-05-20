@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{$text->name}}</h4></div>

                <div class="panel-body">
				 
				{!!$text->body!!}
<hr class="hrooter" />
<div align="center">
<p>
<h6>					Отель-гостиница LuAn, 4 звезды © 2017
<br>Минск, ул.Ленина, д. 16,</br> тел. +375 44 7955237, +375 33 3470704
</h6>
</p>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

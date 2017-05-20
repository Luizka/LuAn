@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$text->name}}</div>

                <div class="panel-body">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	<li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/img2/1.jpg" >
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="/img2/2.jpg" >
      <div class="carousel-caption">
        
      </div>
    </div>
	<div class="item">
      <img src="/img2/3.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
	<div class="item">
      <img src="/img2/4.jpg" >
      <div class="carousel-caption">
        
      </div>
    </div>
	<div class="item">
      <img src="/img2/5.jpg" >
      <div class="carousel-caption">
        
      </div>
    </div>
	<div class="item">
      <img src="/img2/6.jpg" >
      <div class="carousel-caption">
        
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

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

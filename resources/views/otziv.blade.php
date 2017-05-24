@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Отзывы</div>

                <div class="panel-body">
                   <form action="otzivy" method="post">
				   {!!csrf_field()!!}
  <div class="form-group">
    <label for="name">Имя</label>
    <input name="name" type="text" class="form-control" id="name" required placeholder="Имя">
  </div>
   <div class="form-group">
    <label for="comment">Отзыв</label>
 <textarea name="comment" class="form-control" id="comment" required rows="3"></textarea>
 </div>
  <button type="submit" class="btn btn-default">Отправить</button>
</form>
<hr/>
@foreach($all as $one)
<div>
<b>{{$one->name}}</b>
<br/>
{{$one->comment}}
</div>
@endforeach
<p align="center">
{!!$all->links()!!}
</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

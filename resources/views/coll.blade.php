@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Заказать обратный звонок</h4></div>

                <div class="panel-body">
                    <form action="coll" method="post">
					{!!csrf_field()!!}
  <div class="form-group">
    <label for="name">Имя</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Имя">
  </div>
  <div class="form-group">
    <label for="phone">Телефон</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Телефон">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="comment">Коментарий</label>
    <input type="text" class="form-control" id="comment" name="comment" placeholder="Коментарий">
  </div>
  <button type="submit" class="btn btn-default">Заказать обратный звонок</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

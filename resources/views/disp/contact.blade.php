@extends('layouts.data')
@section('content')
<form class="form-horizontal">
  <fieldset>
    <legend>Fill your Data</legend>
    <div class="well bs-component">
          <form class="form-horizontal">
              <div class="form-group is-empty">
                <label for="inputEmail" class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                  <input class="form-control" id="inputEmail" placeholder="Email" type="email">
                </div>
              </div>
              <div class="form-group is-empty">
                <label for="textArea" class="col-md-2 control-label">Message</label>
                <div class="col-md-10">
                  <textarea class="form-control" rows="3" id="textArea"></textarea>
                  <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                </div>
              </div>
          </div>
              </fieldset>
</form>
<a href="contact" class="btn btn-raised btn-success">Submit</a>
@stop

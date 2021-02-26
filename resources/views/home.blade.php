@extends('layouts.app')

@section('content')
<div class="container">
@include('includes.flash')

    <div class="row justify-content-center">
    <legend>Dispute Inquire Form</legend>


    <form class="form-horizontal" role="form" method="POST" action="{{ route('dispute.store') }}"  enctype="multipart/form-data" >
    {!! csrf_field() !!}

    <fieldset>
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
         <input type="text"  class="form-control" id="name" name="name" placeholder="Your Full Name">
        @if ($errors->has('name'))
             <span class="help-block">
                   <strong><span class="error">Name Field Can Not Be Empty</span></strong>
              </span>
        @endif
      </div>
    </div>
   
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email Address</label>
      <div class="col-sm-10">
        <input type="email"  class="form-control" id="email" name="email"  placeholder="email@example.com">
        @if ($errors->has('email'))
             <span class="help-block">
                   <strong><span class="error">Email Field Can Not Be Empty</span></strong>
              </span>
        @endif
      </div>
    </div>
   
    <div class="form-group row">
      <label for="phone" class="col-sm-2 col-form-label">Contact</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control" id="phone" name="phone" placeholder="xxxx-xxx-xxx">
        @if ($errors->has('phone'))
                     <span class="help-block">
                          <strong><span class="error">Phone Field Can Not Be Empty</span></strong>
                     </span>
        @endif
      </div>
    </div>
   
     
    <div class="form-group row">
      <label for="date" class="col-sm-2 col-form-label">Dispute Date</label>
      <div class="col-sm-10">
        <input type="date"  class="form-control" id="date" name="date" placeholder="DD/MM/YYYY">
        @if ($errors->has('date'))
                     <span class="help-block">
                          <strong><span class="error">Date Field Can Not Be Empty</span></strong>
                     </span>
              @endif
      </div>
    </div>
   
    <div class="form-group row">
      <label for="company" class="col-sm-2 col-form-label">Company Name</label>
         <div class="col-sm-10">
            <select id="company" type="company" class="form-control" name="company">
                <option value="">--- Select Company ---</option>
                @foreach ($companies as $company)
                <option value="{{ $company->name }}">{{ $company->name }}</option>
                   @endforeach
             </select>
              @if ($errors->has('company'))
                     <span class="help-block">
                          <strong><span class="error">Company Field Can Not Be Empty</span></strong>
                     </span>
              @endif
         </div>
    </div>
      
    <div class="form-group row">
      <label for="type" class="col-sm-2 col-form-label">Dispute Type</label>
         <div class="col-sm-10">
            <select id="type" type="type" class="form-control" name="type">
              <option value="">--- Select Dispute Type ---</option>
                @foreach ($types as $type)
                <option value="{{ $type->name }}">{{ $type->name }}</option>
                   @endforeach
                   
             </select>
              @if ($errors->has('type'))
                     <span class="help-block">
                          <strong><span class="error">Dispute Type Field Can Not Be Empty</span></strong>
                     </span>
              @endif
         </div>
    </div>

    <div class="form-group row">
      <label for="summary" class="col-sm-2 col-form-label">Summary / Message</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="summary" name="summary" placeholder="Explain in Brief"> </textarea>
        @if ($errors->has('summary'))
             <span class="help-block">
                   <strong><span class="error">Summary / Message Field Can Not Be Empty</span></strong>
              </span>
        @endif

      </div>
    </div>
   
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
    </div>
</div>
@endsection
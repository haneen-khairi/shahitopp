@extends('layouts.default')
@section('content')

<section class="sec-success">
<div class="success">
    <div class="container">
        <div class="row">
            <div class="success-card text-center">
<img src="{{asset('img/success/success.png')}}" width="200" alt="">
<br>
<br>

<h1>{{lang::get('main.thanks')}}  </h1>
<br>
<br>
<p>{{lang::get('main.success')}} </p>
<br>
<br>
<button type="submit" class="btn-done"> {{lang::get('main.done')}}  </button>
<br>
<br>
<button type="submit" class="btn-home"> {{lang::get('main.backhome')}} </button>
<br>
<br>
            </div>
        </div>
    </div>
</div>
</section>




@stop
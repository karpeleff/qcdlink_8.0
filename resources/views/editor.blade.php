@extends('layouts.app')

@section('content')

    <h2 class=" text-center  ">Редактор страниц</h2>

    <!-- если успех -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif
<div  class="align-middle" >


    <form method="post" action="{{route('pages')}}" >
        @csrf

        <button  class="   btn  btn-outline-dark" type="submit" >сохранить</button>

    </form>

    <form method="post" action="{{route('products')}}" >
        @csrf

        <button  class="   btn  btn-outline-dark" type="submit" >создать товар</button>

    </form>


</div>
@endsection

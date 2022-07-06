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
        <button
            type="button"
            class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline"
        >
            Success
        </button>
    </form>

    <button
        type="button"
        class="border border-yellow-500 bg-yellow-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-yellow-600 focus:outline-none focus:shadow-outline"
    >
        Warning
    </button>
</div>



@endsection

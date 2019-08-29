@extends('layout')

@section('content')

    <h1>Email Address Directory</h1>

    <section class="form">
    
    <h1>Email Address Directory</h1>

        <p>Fields marker with an * are required.</p>

        <form id="email-capture-form" method="POST" action="/">

            <!--POST TOKEN-->
            {{ csrf_field() }}

            <div class="form_left_column">
                <label for="name">Name*</label>
                <input type="text" name="name">
            </div>
            <div class="form_right_column">
                <label for="surname">Surname</label>
                <input type="text" name="surname">
            </div>
            <div class="form_single_column">
                <label for="email">Email*</label>
                <input type="text" name="email">
            </div>

            <button type="submit">Submit</button>

        </form>

    </section>

    <section class="data_list">

        <ul>
            @foreach($directory as $entry)

                <li>{{ $entry->name }}</li>

            @endforeach
        </ul>

    </section>

@endsection
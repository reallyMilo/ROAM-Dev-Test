@extends('layout')

@section('content')

    <section class="form">

        <h1>Email Address Directory</h1>
    
        

        <form id="email-capture-form" method="POST" action="/">

            <p>Fields marker with an * are required.</p>

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

            @foreach($directory as $entry)

                <div class="email_entry">
                    <div class="entry_content">
                        <span class="name">{{ $entry->name }}</span><span class="surname">{{ $entry->surname }}</span><span class="email">{{ $entry->email }}</span>
                    </div>
                    <form method="POST" action="/">
                        <!--POST TOKEN-->
                        {{ csrf_field() }}
                        <button type="submit" class="delete_entry">Delete</button>
                    </form>
                    <div class="clear"></div>
                </div>

            @endforeach

    </section>

@endsection
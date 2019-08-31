@extends('layout')

@section('content')

    <section class="form">

        <h1>Email Address Directory</h1>
    
        

        <form id="email-capture-form" method="POST" action="/">

            <p>Fields marked with an * are required.</p>

            <!--POST TOKEN-->
            {{ csrf_field() }}

            <div class="form_left_column">
                <label for="name">Name*</label>
                <input type="text" name="name" class="{{ $errors->has('name') ? 'field_error' : '' }}" value="{{ old('name') }}" required>
            </div>
            <div class="form_right_column">
                <label for="surname">Surname</label>
                <input type="text" name="surname" value="{{ old('surname') }}">
            </div>
            <div class="form_single_column">
                <label for="email">Email*</label>
                <input type="text" name="email" class="{{ $errors->has('email') ? 'field_error' : '' }}" value="{{ old('email') }}" required>
            </div>

            @if($errors->any())
                <div class="errors_container">
                    @foreach($errors->all() as $error)

                        <p class="error_message">{{ $error }}</p>

                    @endforeach
                </div>
            @endif

            <button type="submit">Submit</button>

        </form>

    </section>

        @if(!$directory->isEmpty())
        <section class="data_list">
                @foreach($directory as $entry)

                    <div class="email_entry">
                        <div class="entry_content">
                            <span class="name">{{ $entry->name }}</span><span class="surname">{{ $entry->surname }}</span><span class="email">{{ $entry->email }}</span>
                        </div>
                        <form method="POST" action="/">
                            <!--POST TOKEN-->
                            {{ csrf_field() }}
                            <!-- SET METHOD -->
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="entry_id" value="{{ $entry->id }}">
                            <button type="submit" class="delete_entry"></button>
                        </form>
                        <div class="clear"></div>
                    </div>

                @endforeach
        </section>
        @endif

@endsection
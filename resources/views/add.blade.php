@extends('layouts.home.apphome')



@section('content')
    <div>
        <div class="login_wrapper">
            <div class="animate form">
                <section class="login_content">
                    {{ Form::open(['route' => 'register']) }}
                        
                        <div>
                            <input type="text" name="name" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_0') }}"
                                   value="{{ old('name') }}" required autofocus/>
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_1') }}"
                                   required/>
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_2') }}"
                                   required=""/>
                        </div>
                        <div>
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="{{ __('views.auth.register.input_3') }}"
                                   required/>
                        </div>

                        
                        <div>
                            <button type="submit"
                                    class="btn btn-default submit"></button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">
                                <a href="{{ route('login') }}" class="to_register"> </a>
                            </p>

                            <div class="clearfix"></div>
                            <br/>

                           
                    {{ Form::close() }}
                </section>
            </div>
        </div>
    </div>
@endsection
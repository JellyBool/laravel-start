{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                       
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">欢迎注册</h3>
                    </div>
                    <div class="panel-body">
                    {{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
                     
                     

                        <fieldset>
                            <div class="form-group">
                                {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'用户名')) }}
                            </div>
                            <div class="form-group">
                            {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'邮箱')) }}

                           </div>
                            <div class="form-group">
                            {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'密码')) }} 
                            </div>                       
                            <div class="form-group">
                            {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'确认密码')) }}

                           </div>
                            {{ Form::submit('马上注册',array('class'=>'btn btn-large btn-success btn-block')) }}


                        </fieldset>
                    {{ Form::close() }}
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
 



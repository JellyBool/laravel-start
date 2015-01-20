<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">欢迎登录</h3>
			 	</div>
			  	<div class="panel-body">
			    	{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
                    <fieldset>
			    	  	<div class="form-group">
			    	  	 {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'邮箱')) }}

			    		</div>
			    		<div class="form-group">
			    		 {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'密码')) }} 

			    		</div>
			    		 {{ Form::submit('马上登录',array('class'=>'btn btn-large btn-success btn-block')) }}

			    		
			    	</fieldset>
			      	{{ Form::close() }}
                      <hr/>

			    </div>
			</div>
		</div>
	</div>
</div>
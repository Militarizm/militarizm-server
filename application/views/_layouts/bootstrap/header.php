<div class="site_header"><div class="">
	<div class="auth">
		<?if(!Auth::instance()->logged_in()){?>
			<a class="btn btn-mini" data-toggle="modal" href="#register">Регистрация</a> или <a class="btn btn-mini" data-toggle="modal" href="#login">Вход</a>

		<div class="modal hide fade" id="register">
		    <div class="modal-header">
		        <a class="close" data-dismiss="modal">×</a>
		        <h3>Регистрация</h3>
		    </div>
		    <div class="modal-body">
			    <?=Form::open("/auth/registration", array("class"=>"form-horizontal", "id"=>"form-registration"))?>
			        <fieldset>
			            <div class="control-group">
				            <label class="control-label" for="username">Username</label>
				            <div class="controls">
					            <?=Form::input("username",$post["username"],array("class"=>"input-xlarge", "id"=>"username"))?>
				            </div>
			            </div>
				        <div class="control-group">
				            <label class="control-label" for="password">Пароль</label>
				            <div class="controls">
					            <?=Form::input("password",$post["password"],array("class"=>"input-xlarge", "id"=>"password", "type"=>"password"))?>
				            </div>
			            </div>
				        <div class="control-group">
				            <label class="control-label" for="email">E-mail</label>
				            <div class="controls">
					            <?=Form::input("email",$post["email"],array("class"=>"input-xlarge", "id"=>"email"))?>
					            <p class="help-block">Игра подразумевает большой email-трафик, рабочий мейл не подойдет.</p>
				            </div>
			            </div>
			        </fieldset>
			    <?=Form::close()?>
		    </div>
		    <div class="modal-footer">
		        <a href="#" class="btn btn-primary" onclick="$('#form-registration').submit()">Зарегистрироваться</a>
		    </div>
		</div>


		<div class="modal hide fade" id="login">
		    <div class="modal-header">
		        <a class="close" data-dismiss="modal">×</a>
		        <h3>Вход</h3>
		    </div>
		    <div class="modal-body">
			    <?=Form::open("/auth/login", array("class"=>"form-horizontal", "id"=>"form-login"))?>
			        <fieldset>
			            <div class="control-group">
				            <label class="control-label" for="username">Username</label>
				            <div class="controls">
					            <?=Form::input("username",$post["username"],array("class"=>"input-xlarge", "id"=>"username"))?>
				            </div>
			            </div>
				        <div class="control-group">
				            <label class="control-label" for="password">Пароль</label>
				            <div class="controls">
					            <?=Form::input("password",$post["password"],array("class"=>"input-xlarge", "id"=>"password", "type"=>"password"))?>
				            </div>
			            </div>
				        <div class="control-group">
				            <label class="control-label" for="none"></label>
				            <div class="controls">
					            <a href="<?=URL::base()?>auth/registration">Регистрация</a><br>
					            <a href="<?=URL::base()?>auth/lostpassword">Забыли пароль ?</a>
				            </div>
			            </div>
			        </fieldset>
			    <?=Form::close()?>
		    </div>
		    <div class="modal-footer">
		        <a href="#" class="btn btn-primary" onclick="$('#form-login').submit()">Login</a>
		    </div>
		</div>
		<?}else{?>
		Привет, <?=Auth::instance()->get_user()->username?>&nbsp;<a class="btn btn-mini" href="<?=URL::base()?>auth/logout">Выход</a>
		<?}?>
	</div>
	<div class="logo">
		Militarizm
	</div>

</div></div>



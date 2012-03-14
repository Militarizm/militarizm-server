<?=Form::open("/auth/registration", array("class"=>"form-horizontal", "id"=>"form-registration"))?>
	<legend>Регистрация</legend>
<?=View::factory('errors')->set("errors",$errors);?>
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
	    <div class="form-actions">
			<button type="submit" class="btn btn-primary">Регистрация</button>
		</div>
    </fieldset>
<?=Form::close()?>
<?=Form::open("/auth/login", array("class"=>"form-horizontal", "id"=>"form-login"))?>
	<legend>Вход</legend>
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
	    <div class="form-actions">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
    </fieldset>
<?=Form::close()?>
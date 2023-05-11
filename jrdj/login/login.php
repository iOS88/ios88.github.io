<form id="LoginForm" class="common" action="doAction.php?act=login" method="post">
		<p id="p">如果您没有注册，请注册后登陆。管理员请走专用通道。</p>
        <br />
        <div>
                <label id="login_username">登录名称：</label>
                <input id="login_username" name="username" type="text"/>
                <p id="info_login_username"></p>
        </div>
        <div>
                <label id="login_password">登陆密码：</label>
                <input id="login_password" name="password" type="password"/>
                <p id="info_login_password"></p>
        </div>
        
        <div id="login_button">
            <input type="submit" id="login_login" value="登  陆"/>
            <input type="button" id="login_reg" value="注  册" onClick="location.href='register.php'"/>
 
        </div>
	</form>
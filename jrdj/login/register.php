<form id="RegisterForm" class="common" action="doAction.php?act=reg" method="post" οnsubmit="checkall()">
        <div>
                <label id="label_username">姓 名 <span>*</span></label>
                <input id="username" name="username" type="text" οnkeyup="checkname()"/>
                <p id="info_reg_name">请输入姓名</p>
        </div>
        <div>
                <label id="label_reg_password">密 码 <span>*</span></label>
                <input id="reg_password" name="password" type="password" οnkeyup="checkpassword()"/>
                <p id="info_reg_password">请输入密码</p>
        </div>
         <div>
                <label id="label_repassword">重复密码 <span>*</span></label>
                <input id="repassword" name="repassword" type="password" οnkeyup="checkrepassword()"/>
                <p id="info_reg_repassword">请输入密码</p>
        </div>
        <div>
                <label id="label_gender">性 别 <span>*</span></label>
                <div id="checkgender">
                    <input type="radio" name="gender" value='男' class="gender" checked />男
                    <input type="radio" name="gender" value='女' class="gender" />女
                    <p id="info_reg_gender">请选择性别</p>
                </div>
 
        </div>
        <div>
                <label id="label_reg_major">专 业 <span>*</span></label>
                <input id="reg_major" name="major" type="text" οnkeyup="checkmajor()"/>
                <p id="info_reg_major">请输入专业</p>
        </div>
        <div>
                <label id="label_birthday">出生日期 <span>*</span></label>
                <input id="reg_birthday" name="birthday" type="text" οnkeyup="checkbirthday()"/>
                <p id="info_reg_birthday">格式如：19931208</p>
        </div>
        <div>
                <label id="label_email">email <span>*</span></label>
                <input id="email" name="email" type="text" οnkeyup="checkemail()"/>
                <p id="info_reg_email">请输入邮件地址</p>
        </div>
        <div>
                <label id="label_phone">手机号码 <span>*</span></label>
                <input id="phone" name="phone" type="text" οnkeyup="checkphone()" />
                <p id="info_reg_phone">请输入11位手机号码</p>
        </div>
        <div>
                <label id="label_qq">qq号码 <span>*</span></label>
                <input id="qq" name="qq" type="text" οnkeyup="checkqq()"/>
                <p id="info_reg_qq">请输入qq号码</p>
        </div>
        <div>
                <label id="label_collage">我来自：<span>*</span></label>
                <select name="collage">
                <option value="人文学院">人文学院</option>
                <option value="软件学院">软件学院</option>
                <option value="信息学院">信息学院</option>
                </select>
        </div>
        <div id="hobbybox">
                <label id="hobby">你的爱好 <span>*</span></label>
                <div id="checkhobby">
                    <input name="hobby[]" type="checkbox" class="hobby" value="足球" checked/>足球
                    <input name="hobby[]" type="checkbox" class="hobby" value="篮球"/>篮球
                    <input name="hobby[]" type="checkbox" class="hobby" value="乒乓球" checked/>乒乓球
                    <input name="hobby[]" type="checkbox" class="hobby" value="网球"/>网球
                    <input name="hobby[]" type="checkbox" class="hobby" value="排球"/>排球
                    <input name="hobby[]" type="checkbox" class="hobby" value="看电影"/>看电影
                    <input name="hobby[]" type="checkbox" class="hobby" value="唱歌"/>唱歌
                    <input name="hobby[]" type="checkbox" class="hobby" value="睡觉"/>睡觉
                    <input name="hobby[]" type="checkbox" class="hobby" value="打游戏"/>打游戏
                    <input name="hobby[]" type="checkbox" class="hobby" value="旅游"/>旅游
                    <input name="hobby[]" type="checkbox" class="hobby" value="购物"/>购物
                    <input name="hobby[]" type="checkbox" class="hobby" value="打麻将"/>打麻将
                    <input name="hobby[]" type="checkbox" class="hobby" value="跑步"/>跑步
                    <input name="hobby[]" type="checkbox" class="hobby" value="吃货"/>吃货
                    <input name="hobby[]" type="checkbox" class="hobby" value="打扑克"/>打扑克
                </div>
        </div>
        <br />
        <div id="button">
            <input type="reset" id="reg_reset" value="重置"/>
            <input type="submit" id="reg_submit" value="提交"/>
        </div>
	</form>


function yhdl_check(dlform)
{
    if (dlform.username.value == "")
	{
		alert("用户名不能为空！");
		dlform.username.focus();
		return (false);
	}
	if (dlform.password.value == "")
	{
		alert("密码不能为空！");
		dlform.password.focus();
		return (false);
	}
}


function is_null(object_name,tishi,word,kongge)  // object_name 为对象名称，tishi=1 为是否显示对话框,word 为提示语句,kongge=1 为去除空格,
{
	var string;
	string=new String(object_name);
	if (kongge==1)
	{string=javaTrim(string);} //删除空格的字符 
	//alert("返回的字符集="+string+"长度为="+string.length)
	if (string.length==0)
	{
		if (tishi==1)
		{
		alert(word);
		}
		return false;
	}
}
   
//删除字符开头和结尾的空格
function javaTrim(str){
	var i=0;
	var j;
	var len=str.length;

	trimstr="";
	if(j<0) return trimstr;
	flagbegin= true;
	flagend= true;
		
	while (flagbegin== true){
		if (str.charAt(i)==" "){
			i++;
			flagbegin=true;
		}
		else
		{
			
			flagbegin=false;
		}
	} 
	//前面有i个空格
	j=len-1;
	var k=0;
	while (flagend==true)
	{
		if (str.charAt(j)==" ")
		{
			j--;
			flagend=true;
			k++;
		}
		else{
			flagend=false;
		}
	}
        
	//后面有k个空格
	//alert('前面有'+i+'个空格！');
	//alert('后面有'+k+'个空格！');
	if (str.length==i)
	{
	 //alert("你的输入全为空格！")
	 trimstr="";
	 return trimstr;
	}
	trimstr=str.substring(i,j+1);
	//alert("bf"+trimstr+"fb");
	return trimstr;
}

// 判断电子邮件是否格式正确
function is_email(object_name)
{
	var string;
	string=new String(object_name);
	var len=string.length;
	if (string.indexOf("@",1)==-1||string.indexOf(".",1)==-1||string.length<7)
		{
		alert("电子邮箱的格式不对，请重新填写！");
		return false;
		}
	if (string.charAt(len-1)=="."||string.charAt(len-1)=="@")
		{
		alert("电子邮箱的格式不对，请重新填写！");
		return false;
		}
}
   

//判断输入栏的最小和最大长度是否越界
function over_length(object_name,max,min,max_word,min_word,kongge) //kongge=1 为处理掉字符串中的空格
{
	var string;
	string=new String(object_name);
	if (kongge==1)
		{
		 string=javaTrim(string);
		}
	if (string.length>max)
		{
		 alert(max_word);
		 return false;
		}
	if (string.length<min)
		{
		 alert(min_word);
		 return false;
		}
	}
   function isWhitespace (s) //是否包涵空格
    {  
  		var whitespace = " \t\n\r";
 	    var i;
  		for (i = 0; i < s.length; i++)
  		 {   
            var c = s.charAt(i);
   		    if (whitespace.indexOf(c) >= 0) 
			   {
			  return true;
	 			 }
  			}

     return false;
    }
function IsPassword(strPassword)
{
	if(strPassword=="") return false;
	var lngLength = strPassword.length;
	var strCharSet="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"
	for(i=0; i<lngLength; i++)
	{
		if (strCharSet.search(strPassword.substr(i,1))<0) return false;
	}
	return true;
}

//商城会员注册校验
function checkit(){

//用户名   
	if (myform.zc_username.value == "" ){
		alert("用户名不能为空！");
		myform.zc_username.focus();
		return (false);	 
	}
//密码
         if (myform.zc_password.value == "" || myform.zc_password.value.length<6){		  		
		alert("密码不能少于6位！");
		myform.zc_password.focus();
		return (false);	 
         }
         for (i=1;i<myform.zc_password.value.length;i++){
		ct=myform.zc_password.value.charAt(i);
		if (!((ct>='0'&&ct<='9')||(ct>='a'&&ct<='z')||(ct>='A'&&ct<='Z')||ct=='_')){
			alert("密码只允许使用英文字符和数字以及字符\'_\'");
			myform.zc_password.focus();
			return(false);
		}
         }
//确认密码

         if (myform.mmqr.value == "" || myform.mmqr.value.length<6){
		alert("请输入确认密码");
		myform.remima.focus();
		return (false);	 
         }
         if (myform.zc_password.value !=myform.mmqr.value){
		alert("确认密码和密码不符,请重新输入");
		myform.mmqr.focus();
		return (false);	 
         }

//真实姓名
        if (myform.zsxm.value == "")
        {
		alert("请填写有效的真实姓名！");
	        myform.zsxm.focus();
		return (false);
        }

//联系地址
        if (myform.lxdz.value == "")
        {
		alert("请填写有效的联系地址！");
	        myform.lxdz.focus();
		return (false);
        }
//联系电话
       if (myform.lxdh.value.length<7 || isNumberString(myform.lxdh.value,"1234567890")!=1)
       {
	     	alert("请输入联系电话(区号和分机号用减号隔开，并确保电话号码为数字！");
  	        myform.lxdh.focus();
  	        return (false);
      }
//电子邮件		
        if (myform.email.value=="")
        {
          alert ("请输入电子邮件!");
          myform.email.focus();
          return false;
        }
        if (myform.email.value.indexOf('@',0)==-1 || myform.email.value == "" || myform.email.value.indexOf('.',0)==-1) 
        {
           alert("请重新输入正确的电子邮件地址!");
           myform.email.focus();
           return false;
        }
        Str = myform.email.value
        thePos = Str.indexOf('@',0) + 1
        if (Str.indexOf('@', thePos) != -1 || Str.indexOf(';', thePos) != -1 || Str.indexOf(',', thePos) != -1 || Str.indexOf(' ', thePos) != -1 || Str.indexOf('。', thePos) != -1 || Str.indexOf('，', thePos) != -1) 
        {
          alert("请重新输入正确的电子邮件地址!");
          myform.email.focus();
          return false;
        }
}

function user_check(form){
	if (myform.zc_username.value!="" && myform.zc_username.value.length>=6){
		 form.action="";
		 form.submit();
	 }else{
		  alert("用户名不能为空且不能于少6个字符");
		}
}


//���ⷢ��
function fbzt_check(){
		 if (myform.user.value.length=="" && myform.pass.value.length==""){
				alert("ע��֮��ſ��Է�������!:)");
				myform.zhuti.focus();
				return false;
		}
		 if (myform.zq.value==""){
				alert("��ѡ����Ҫ����������ר��!!");
				myform.zq.focus();
				return false;
		}
	        if (myform.zhuti.value==""){
				alert("��������Ҫ����������!!");
				myform.zhuti.focus();
				return false;
		}
		  
	        if (myform.neirong.value==""){
				alert("�����������������������!!");
				myform.neirong.focus();
				return false;
		}
		if (myform.neirong.value.length<=10 || form1.neirong.value.length>=1500){
				alert(" �������ݼȲ�������10����Ҳ���ܶ���1500����!!");
				myform.neirong.focus();
				return false;
		}
}
//��������
function hftj_check(){
		 if (myform.user.value.length=="" && myform.pass.value.length==""){
				alert("��û�лظ������Ȩ�ޣ�����ע��!!:)");
				myform.hfzt.focus();
				return false;
		}
	        if (myform.hfzt.value==""){
				alert("��������Ҫ��������!!");
				myform.hfzt.focus();
				return false;
		}
	        if (myform.hfnr.value==""){
				alert("�������������۵�����!!");
				myform.hfnr.focus();
				return false;
		}
		if (myform.hfnr.value.length<=10 || form1.hfnr.value.length>=1500){
				alert(" �������ݼȲ�������10����Ҳ���ܶ���200����!!");
				myform.hfnr.focus();
				return false;
		}
}

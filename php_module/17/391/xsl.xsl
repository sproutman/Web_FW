<?xml version="1.0" encoding="gb2312"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/TR/WD-xsl">
<xsl:template match="/">
	<html>
	<body>
	<center>
	<table width="450" bgcolor="#C8FFFF" height="30" border="10" cellspacing="1" cellpadding="0">
	 <tr><td colspan="3" align="center" height="35">��ҵ�û�����</td></tr>
	  <tr align="center">
		<td><b>�û���</b></td>
		<td><b>����</b></td>
		<td><b>��ַ</b></td>
	  </tr>
<xsl:for-each select="����ϵͳ/����Ա">
	  <tr align="center" height="22">
		<td><xsl:value-of select="�û���"/></td>
		<td><xsl:value-of select="����"/></td>
		<td><xsl:value-of select="��ַ"/></td>
	  </tr>
</xsl:for-each>		
	</table>
	</center>
	</body>
	</html>
</xsl:template>
</xsl:stylesheet>

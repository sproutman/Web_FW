<?xml version="1.0" encoding="gb2312"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/TR/WD-xsl">
<xsl:template match="/">
	<html>
	<body>
	<center>
	<table width="450" bgcolor="#C8FFFF" height="30" border="10" cellspacing="1" cellpadding="0">
	 <tr><td colspan="3" align="center" height="35">企业用户管理</td></tr>
	  <tr align="center">
		<td><b>用户名</b></td>
		<td><b>密码</b></td>
		<td><b>地址</b></td>
	  </tr>
<xsl:for-each select="管理系统/管理员">
	  <tr align="center" height="22">
		<td><xsl:value-of select="用户名"/></td>
		<td><xsl:value-of select="密码"/></td>
		<td><xsl:value-of select="地址"/></td>
	  </tr>
</xsl:for-each>		
	</table>
	</center>
	</body>
	</html>
</xsl:template>
</xsl:stylesheet>

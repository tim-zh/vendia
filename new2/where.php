<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<title>�����������1</title>
	<meta name="description" content="������������� ������������� � �. ������. �������� ����� ��� ������������� �������������" />
	<script src="scripts.js" type="text/javascript"></script>
	<script>
		s=new Array();
		function showSite(name,adr,s,full,foto)
		{
			document.getElementById('siteName').innerHTML=name;
			document.getElementById('siteImg').src='images/'+adr+'.jpg';
			for(i=1;i<=8;++i)
			{
				if(s[i]==1)
					document.getElementById('siteS'+i).innerHTML='';
				if(s[i]==2)
					document.getElementById('siteS'+i).innerHTML='�����������';
				if(s[i]==3)
					document.getElementById('siteS'+i).innerHTML='���������';
			}
			//document.getElementById('siteFull').innerHTML=full;
			document.getElementById('siteFoto').src='images/'+foto+'.jpg';
			moveText(2);
		}
	</script>
	<link href="iestyles.css" rel="stylesheet" type="text/css">
	<!--[if IE]><![if !IE]><![endif]-->
	<link href="styles.css" rel="stylesheet" type="text/css">
	<!--[if IE]><![endif]><![endif]-->
</head>
<body onLoad="load();">
<div id="back">
<div id="header">
	<img src="images/logo0.jpg" id="logo" />
	<div id="name">�����������1</div>
	<div id="miniContacts">
		���. 2-111-007<br />
		velcom 314-72-23<br />
		��� 708-64-92<br />
	</div>
	<div id="menu">
		<div class="transBack"></div><div class="miBg" id="mi0"></div><div class="miBg" id="mi2"></div><div class="miBg" id="mi3"></div><div class="miBg" id="mi4"></div>
		<div>
		<a href="index.html"><div class="menuI" onMouseOver="isOver[0]=true;" onMouseOut="isOver[0]=false;">�������</div></a>
		<div class="menuI" id="curMI">
			��� ��������� ��������
		</div>
		<a href="how.html"><div class="menuI" onMouseOver="isOver[2]=true;" onMouseOut="isOver[2]=false;">��� �������� �����������</div></a>
		<a href="about.html"><div class="menuI" onMouseOver="isOver[3]=true;" onMouseOut="isOver[3]=false;">� ���������</div></a>
		<a href="company.html"><div class="menuI" onMouseOver="isOver[4]=true;" onMouseOut="isOver[4]=false;">� ��������</div></a>
		</div>
		<div class="upLeftSh"></div><div class="upSh"></div><div class="upRightSh"></div><div class="rightSh"></div><div class="downRightSh"></div><div class="downSh"></div><div class="downLeftSh"></div><div class="leftSh"></div>
	</div>
	<div class="upLeftSh"></div><div class="upSh"></div><div class="upRightSh"></div><div class="rightSh"></div><div class="downRightSh"></div><div class="downSh"></div><div class="downLeftSh"></div><div class="leftSh"></div>
</div>
<div id="content">
	<div class="textBox" id="textBox0">
		<p>
			������������ �����
			<ul>
				<li onClick='s[1]=3;s[2]=3;s[3]=3;s[4]=2;s[5]=1;s[6]=1;s[7]=1;s[8]=1;showSite("������������, 50�","adrKal50",s,0,"fotoKal50");'><a>������������, 50�</a><br />(��. �. "������")</li>
			</ul>
			����������� �����
			<ul>
				<li onClick='s[1]=3;s[2]=3;s[3]=3;s[4]=3;s[5]=2;s[6]=1;s[7]=1;s[8]=1;showSite("�����������, 55","adrSuh55",s,0,"fotoSuh55");'><a>�����������, 55</a><br />(�����������, ��������, �. ��������)</li>
				<li onClick='s[1]=3;s[2]=3;s[3]=3;s[4]=3;s[5]=2;s[6]=1;s[7]=1;s[8]=1;showSite("�����������, 34","adrSha34",s,0,"fotoSha34");'><a>�����������, 34</a><br />(�����������, ���������, �����������, ����������)</li>
			</ul>
		</p>
	</div>
	<div class="textBox" id="textBox1">
		<?php
		if($_POST['phone']&&preg_match("/^[\d+-\s]{7,}$/",$_POST['phone'])&&$_POST['reqtext'])
		{
			$dbe=mysql_connect("localhost","autoparking1","Eeyees1a");
			mysql_select_db("autoparking1",$dbe);
			$phone=mysql_real_escape_string($_POST['phone']);
			$mail=mysql_real_escape_string($_POST['mail']);
			$text=$_POST['reqtext'];
			$text=str_replace("<","&lt;",$text);
			$text=str_replace(">","&gt;",$text);
			$text=wordwrap($text,45,'<br />',true);
			$text=nl2br($text);
			$text=mysql_real_escape_string($text);
			if(mysql_query("INSERT INTO `requests` (`id`,`phone`,`mail`,`text`,`date`) VALUES (NULL,'".$phone."','".$mail."','".$text."',NOW())",$dbe))
				echo '����������� ����������<br /><br />';
		}
		?>
		<form action="where.php" method="post">
			<table>
				<tr>
					<td align="right">������� <span style="color:#f00; font-size:11px; vertical-align:super;">*</span></td>
					<td><input type="text" name="phone"></input></td>
				</tr>
				<tr>
					<td align="right">e-mail</td>
					<td><input type="text" name="mail"></input></td>
				</tr>
				<tr>
					<td align="right" style="vertical-align:top;">�����<span style="color:#f00; font-size:11px; vertical-align:super;">*</span></td>
					<td><textarea name="reqtext" style="width:300px; height:200px;"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="���������"></input></td>
				</tr>
			</table>
			<font style="color:#f00; font-size:11px;">* - ����, ������������ ��� ����������</font>
		</form>
	</div>
	<div class="textBox" id="textBox2">
		<a href="javascript:moveText(0); void(0);" style="float:left;">�����</a>
		<strong id="siteName"></strong><br /><br />
		<img src='' id="siteImg" /><br /><br />
		<table class='table'>
			<hr />
			<tr><td><b>����</b></td><td><b>������</b></td></tr>
			<tr><td>����� ��������</td><td id="siteS1"></td></tr>
			<tr><td>������������ ����������</td><td id="siteS2"></td></tr>
			<tr><td>��������� ���� ������ �����</td><td id="siteS3"></td></tr>
			<tr><td>��������������</td><td id="siteS4"></td></tr>
			<tr><td>������������ �������</td><td id="siteS5"></td></tr>
			<tr><td>��������� ���������� �� �������������</td><td id="siteS6"></td></tr>
			<tr><td>�������������</td><td id="siteS7"></td></tr>
			<tr><td>����� �������</td><td id="siteS8"></td></tr>
		</table><br />
		<!--���������� ������� ���� <span id="siteFull"></span>-->
		<img src='' id="siteFoto" /><br /><br />
		<a href="javascript:moveText(0); void(0);" style="float:left;">�����</a>
	</div>
	<div id="text"></div>
	<div class="upLeftSh"></div><div class="upSh"></div><div class="upRightSh"></div><div class="rightSh"></div>
	<div class="downRightSh"></div><div class="downSh"></div><div class="downLeftSh"></div><div class="leftSh"></div>
	<div id="subMenu">
		<div id="curSMI">
			<div class="upLeftSh"></div><div class="upSh"></div><div class="upRightSh"></div><div class="rightSh"></div><div class="leftSh"></div>
		</div>
		<div class="subMenuI" id="smi0" onClick="moveText(0);">���������� �������������</div>
		<div class="subMenuI" id="smi1" onClick="moveText(1);">�������� �����������</div>
	</div>
</div>
</div>
</body>
</html>
<?php 
	include_once 'html/config.php';
	include_once 'html/header.php';
	include_once 'html/footer.php';
?>
<img src="img/05.jpg" style="height: 920; width:1890; opacity: 0.5;"> -->
<div class="centralizado" style="background-color:gray;">
	<form>
		<table width=225 cellpadding=4 height="123">
			<tr>
				<td colspan=2 height="13">
					<p>
						<div style="text-align:center;"><b>Faça seu login</b></div>
					</p>
				</td>
			</tr>
			<tr>
				<td height="22">
					<p class="text-right">
						<div face="Verdana" style="font-size: 10pt; font-weight:700">
							<div face="Verdana" style="font-size: 10pt; font-weight:700"><br>
								Usuário:
							</div>
						</div>
					</p>
				</td>
				<td height="22" class="text-center">
					<input type=text name=username size="20">
				</td>
			</tr>
			<tr>
				<td height="22">
					<p class="text-right">
						<div style="font-size: 10pt" face="Verdana"><br>
							<b>Senha</b>:
						</div>
					</p>
				</td>
				<td height="22">
				<input type=password size="20"></td>
			</tr>
			<tr>
				<td colspan=2 style="text-align:center;" height="26"><a href="../Projeto_II"><input type=button value="Entrar" onClick="Login()"></a></td>
			</tr>
		</table>
	</form>
</div>

<!DOCTYPE html>
<html>
<head>
<title>Pizza rendelés</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<h3>Ciao Pizza</h3>
	<h4>Online rendelés</h4>
		<table align="center" cellpadding="5">
			<tr>
				<td>
					<p>
						<label>*Teljes név: </label>
						<input type="text" name="name" id="name">
					</p>
					<p>
						<label>*Email cím: </label>
						<input type="email" name="email" id="email">
					</p>
					<p>
						<label>*Lakcím: </label>
						<input type="text" name="address" id="address">
					</p>	
				</td>
				<td colspan="2">
					<p>
						<label>*Telefonszám: </label>
						<input type="text" name="tel" id="tel">
					</p>
					<p>
						<label>*Város: </label>
						<input type="text" name="city" id="city">
					</p>
					<p>
						<label>*Utca: </label>
						<input type="text" name="dis" id="dis">
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<label>Megjegyzés a rendeléshez: </label>
				</td>
				<td colspan="2">
					<textarea rows="5" cols="30" name="instuctions" id="instuctions"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<button type="submit" name="submit" id="submit">Rendelés megerősítése</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
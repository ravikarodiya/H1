<?php
require __DIR__ . '/vendor/autoload.php';
 /* $result = dns_get_record("php.net"); */
	print_r(dns_get_record("php.net", DNS_A + DNS_AAAA));
?>
<h2>Check Domain Availability</h2>
<form action="" method=post>
	<table>
	<tr>
		<td>Enter Domain Name:</td>
		<td> : <input type="text" name="domain_name"></td>
		<td>
			<select name="suffix">
				<option value=".com">.com</option>
				<option value=".in">.in</option>
				<option value=".co.in">.co.in</option>
				<option value=".net">.net</option>
				<option value=".org">.org</option>
				<option value=".biz">.biz</option>
				<option value=".info">.info</option>
				<option value=".mobi">.mobi</option>
				<option value=".ws">.ws</option>
				<option value=".co.id">.co.id</option>
				<option value=".or.id">.or.id</option>
				<option value=".go.id">.go.id</option>
				<option value=".sch.id">.sch.id</option>
				<option value=".ac.id">.ac.id</option>
				<option value=".mil.id">.mil.id</option>
				<option value=".web.id">.web.id</option>
				<option value=".tv">.tv</option>
				<option value=".cn">.cn</option>
				<option value=".cc">.cc</option>
			</select>
		</td>
		<tr>
			<td align="right" colspan="3"><input type="submit" name="check" value="Check"></td>
		</tr>
	</tr>
	</table>
</form>

<!DOCTYPE html>
<meta charset="UTF-8">
<title>Fajr arena</title>

<?php if (isset($_SERVER['BADCOOKIE'])) { ?>

<h1>Fajr arena - pristupova brana</h1>
<form action="#" onsubmit="document.cookie='fajrarenaheslo='+H.value; location.reload(); return false;">
Ak chces vstupit, povedz pristupovy kod: <input type="password" id="heslo"> <input type="submit" value="OK">
</form>
<script>(H=document.getElementById('heslo')).focus();</script>

<?php } else { ?>

<h1>Fajr arena</h1>
<ul>
<?php
$d = scandir('.');
foreach ($d as $f) if (is_dir($f) && $f[0] != '.') {
  $o = posix_getpwuid(fileowner($f))['name'];
  if (preg_match('/^\w+$/', $f.$o)) print "<li><a href='$f'>$f</a> ($o)";
}
?>
</ul>

<?php } ?>

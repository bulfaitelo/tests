<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>Untitled 2</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> <!-- muito inportante -->
</head>

<body>
<select name="chars" multiple="multiple" size="7" > 

<option style="color: blue;"><strong>azul</strong></option>
<option style="color: green;"><strong>verde</strong></option>
<option style="color: blue;"><strong>azul</strong></option>
<option style="color: green;"><strong>verde</strong></option>
<option style="color: blue;"><strong>azul</strong></option>
<option style="color: green;"><strong>verde</strong></option>
</select>

<select multiple="multiple" size='20'>
            <option>eu </option>
            <option>lalalalalalallala </option>
           <option>hohohohohoohoh</option> 
           <option>eu </option>
            <option>lalalalalalallala </option>
           <option>hohohohohoohoh</option> 
           <option>eu </option>
            <option>lalalalalalallala </option>
           <option>hohohohohoohoh</option> 
           <option>eu </option>
            <option>lalalalalalallala </option>
           <option>hohohohohoohoh</option> 
            </select>

<script>
$("select[multiple] option").mousedown(function()
{
   var $self = $(this);
   
   if ($self.attr("selected"))
       $self.attr("selected", "");
   else
       $self.attr("selected", "selected");
   return false;
});
</script>
</body>
</html>
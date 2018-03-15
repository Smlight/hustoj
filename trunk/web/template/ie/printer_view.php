<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo htmlentities(str_replace("\n\r","\n",$view_user),ENT_QUOTES,"utf-8")?></title>  
</head>
<body>
<link href='highlight/styles/shCore.css' rel='stylesheet' type='text/css'/>
<link href='highlight/styles/shThemeDefault.css' rel='stylesheet' type='text/css'/>
<script src='highlight/scripts/shCore.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushCpp.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushCss.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushJava.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushDelphi.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushRuby.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushBash.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushPython.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushPhp.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushPerl.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushCSharp.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushVb.js' type='text/javascript'></script>
<script language='javascript'>
SyntaxHighlighter.config.bloggerMode = true;
SyntaxHighlighter.config.clipboardSwf = 'highlight/scripts/clipboard.swf';
//SyntaxHighlighter.all();
</script>

<?php
echo "<h1>".htmlentities(str_replace("\n\r","\n",$view_user),ENT_QUOTES,"utf-8")."\n"."</h1>";
echo "<pre class='brush:c'>".htmlentities(str_replace("\n\r","\n",$view_content),ENT_QUOTES,"utf-8")."\n"."</pre>";
?>
<input onclick="window.print();" type="button" value="<?php echo $MSG_PRINTER?>">
<input onclick="location.href='printer.php?id=<?php echo $id?>';" type="button" value="<?php echo $MSG_PRINT_DONE?>">
</script>
</body>

<?php
if(isset($_GET['style']))
    $style = $_GET['style'];
else
    $style = "atelier-health-light";
?>
<head>
<meta charset="utf-8">
<style>body{background:#C7EDCC;font-family: "Consolas"}</style>
<script src="plugin/highlight.pack.js"></script>
<link id="curStyle" rel="stylesheet" href="plugin/styles/<?php echo $style;?>.css">
<script>hljs.initHighlightingOnLoad();</script>
</head>


<body>
<?php
if(isset($_GET['path'])){
    //解决windows默认编码gbk无法打开中文名文件
    $filename=iconv('utf-8','gb2312',$_GET['path']); 
	$content = file_get_contents("./".$filename);
	$content = htmlspecialchars($content,ENT_QUOTES,"UTF-8");
    $content = "<pre><code>" . $content . "</code></pre>";
    echo $content;
}
?>
</body>

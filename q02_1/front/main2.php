<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="front/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="front/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">健康新知</li>
    <li class="TabbedPanelsTab" tabindex="0">菸害防治</li>
    <li class="TabbedPanelsTab" tabindex="0">癌症防治</li>
    <li class="TabbedPanelsTab" tabindex="0">慢性病防治</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent"><h3>健康新知</h3><pre><?php include "./text/health.php" ?></pre></div>
    <div class="TabbedPanelsContent"><h3>菸害防治</h3><pre><?php include "./text/smoke.php" ?></pre></div>
    <div class="TabbedPanelsContent"><h3>癌症防治</h3><pre><?php include "./text/cancer.php" ?></pre></div>
    <div class="TabbedPanelsContent"><h3>慢性病防治</h3><pre><?php include "./text/sick.php" ?></pre></div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>

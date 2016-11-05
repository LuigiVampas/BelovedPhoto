<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BelovedPhotos | {$page_title}</title>
    {foreach $stylesheets as %stylesheet}
    <link href="Styles/{%stylesheet}.css" rel="stylesheet">
    {/foreach}    
    {foreach $scripts as %script}
    <script src="Scripts/{%script}.js"></script>
    {/foreach}
</head>
<body>
    {$content}
</body>
</html>
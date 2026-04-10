<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @switch($role)
    @case("admin")
    <p>kamu seorang admin.<p>
    @break
    
    @case("penulis")
    <p>kamu seorang penulis.</p>

    @break
    @default
    <p>kamu seorang pengguna.</p>

    @endswitch
</body>
</html>
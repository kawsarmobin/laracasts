<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>Project</h1>

        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach

    </body>
</html>

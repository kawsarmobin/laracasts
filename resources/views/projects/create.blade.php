<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>Create a new project</h1>

        <form class="" action="/projects" method="post">
            @csrf

            <div class="">
                <input type="text" name="title" placeholder="title" value="">
            </div>
            <div class="">
                <textarea name="description" placeholder="project description" rows="8" cols="80"></textarea>
            </div>
            <div class="">
                <button type="submit" name="button">Submit</button>
            </div>
        </form>

    </body>
</html>

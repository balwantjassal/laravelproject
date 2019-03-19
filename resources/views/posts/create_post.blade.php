<html>
    <head>
        <title>Project Form</title>
    </head>
    <body>
        <h1>Create a Post</h1>
        <fieldset>
            <legend>Post Details</legend>
            <form method="post" action="/posts">
                 {{ csrf_field() }}
                Subject:<br/>
                <input type="text" name="subject" placeholder="Title of the project"/>
                <br/>
                Message:<br/>
                <textarea name="message" rows="10" cols="60" placeholder="Project Description write here"></textarea></textarea>
                <br/>
                <button name="btn1">Create Post</button>


            </form>
        </fieldset>
    </body>
</html>

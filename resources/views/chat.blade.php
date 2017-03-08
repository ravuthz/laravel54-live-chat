<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chat Room</title>
        <link rel="stylesheet" href="css/app.css" type="text/css" />
    </head>
    <body>
        <div id="app">
            <h1>Chat Room</h1>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messagesent="createMessage"></chat-composer>
        </div>
        <script type="text/javascript">
            window.csrfToken = "{{ csrf_token() }}";
            window.Laravel = {};
            window.Laravel.csrfToken = "{{ csrf_token() }}";
        </script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
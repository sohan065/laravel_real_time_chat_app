<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']);
</head>


<body>
    <div class="app">
        <header>
            <h1>Lets Talk</h1>
            <input type="text" id="username" placeholder="enter your name">
        </header>
    </div>
    <div id="message">

    </div>

    <form id="message_form">
        <input type="text" id="message_input" placeholder="type here">
        <button type="submit" id="message_send">Send Message</button>
    </form>

</body>

</html>

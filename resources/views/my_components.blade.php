<!DOCTYPE html>
<html>
<head>
    <title>How to create reusable blade components in Laravel 9 - NiceSnippets.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <h3>How to create reusable blade components in Laravel 9 - NiceSnippets.com</h3>
       
        <!-- For Primary -->
        @component('components.card')    

            @slot('class')
                bg-primary
            @endslot

            @slot('title')
                This is from NiceSnippets.com(Primary)
            @endslot

            My components with primary
        @endcomponent
        <br/>

        <!-- For Danger -->
        @component('components.card')    

            @slot('class')
                bg-danger
            @endslot

            @slot('title')
                This is from NiceSnippets.com(Danger)
            @endslot

            My components with primary
        @endcomponent
        <br/>

        <!-- For Success -->
        @component('components.card')    

            @slot('class')
                bg-success
            @endslot

            @slot('title')
                This is from NiceSnippets.com(Success)
            @endslot

            My components with primary
        @endcomponent
    </div>
</body>
</html>
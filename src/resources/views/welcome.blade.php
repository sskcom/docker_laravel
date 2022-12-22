<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
        
        @vite('resources/css/app.css')
        
        
       
    </head>
    <body Fclass="antialiased">
    

   
    @vite('resources/js/app.js')
    
    <hello-component></hello-component>

    
    <div id="app"></div>

    {{-- <ul>
        @foreach($inquiries as $inquiry)


        <div class="article-info">
            <h1>
                {{$inquiry->name}}
            </h1>

            <p>

                {{$inquiry->description}}
            </p>
        
            <span class="article-category">
                {{$inquiry->status_id}}
            </span>
        
            <time class="article-date">
                {{$inquiry->created_at}}
            </time>
        </div>
        @endforeach
    </ul>

    
        {{$inquiries->links()}} --}}
    
       
    </body>
</html>

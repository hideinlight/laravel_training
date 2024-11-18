
<!DOCTYPE html>
<html>
    <head>
        <title>Extra page {{$pageNumber}}</title>
    </head>
    <body>
 
        @if ($pageNumber < 5)
                        <h{{$pageNumber}}> Welcome to page {{$pageNumber}} </h{{$pageNumber}}>
            <a href="/ExtraPage{{$pageNumber + 1}}View"><button> Next PageB</button> </a>
        @else 
                    <h{{$pageNumber}}> Welcome to page {{$pageNumber}} </h{{$pageNumber}}>
            <a href="/ExtraPage1View"><button> First Page</button> </a>
        @endif

        

 
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Extra page {{$pageNumber}}</title>
    </head>
    <body>
        <?php if ($pageNumber <= 5) {
        ?>
            <h{{$pageNumber}}> Welcome to page {{$pageNumber}} </p>
            <a href="/ExtraPage{{$pageNumber + 1}}View"><button> Next Page</button> </a>

        <?php
        } else {
        ?>
            <h{{$pageNumber}}> Welcome to page {{$pageNumber}} </p>
            <a href="/ExtraPage1View"><button id="Button1" class="Button1"> First Page</button> </a>

        <?php    
        }
        
        ?> 
 
    </body>
</html>
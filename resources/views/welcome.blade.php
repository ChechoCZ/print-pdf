@extends('layout.master')

@section('content')

    <div align="center" class="container"> 

        <hr>

        <div align="center" class="parrafo">
            
            <h4>Hello! Welcome to this example of how to print a PDF usign barryvdh/laravel-dompdf in a <strong>Laravel</strong> Project</h4>                           

        </div>             

        <div align="center" class="columna">

            <h1 id="try-it-out">Try it out!</h1>            

            <form method="POST" action="print">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" name="title" rows="3"/>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" rows="3" placeholder="Write something you want to print!"></textarea>
                </div>
                                          
                <br>

                <button class="btn btn-primary">Print PDF</button>

            </form>
        
        </div> 
                
        <hr>

@endsection        
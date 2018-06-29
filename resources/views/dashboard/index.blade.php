@extends('dashboard.layout')
@section('content')
    <h1>Hey this your Dashboard</h1>
    You have been brew {{ $amount_brewed }} times since you joined 
    <h1>Ready to Brew?</h1>
    <a class="next-person" href="#">Whos going to be next</a>
@stop

@section('scripts')
    <script>

        $(document).ready(function(){
            $('.next-person').on('click', function(){ get_next_person() } );
    
            function get_next_person() {
                $.ajax({
                    url: "/brewtime",
                    type: 'GET',
                    success: function(data){
                        console.log(data);
                    }
                });
            }
        });
        
    </script>
@stop

@extends('layouts.app')

@section('content')

<h1>Ready to Brew?</h1>
<a class="next-person" href="#">Whos going to be next</a>
@stop

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){
        $('.next-person').on('click', function(){ get_next_person() } );

        function get_next_person() {
            $.ajax({
                url: "/whosnext",
                type: 'GET',
                success: function(data){
                    console.log(data);
                }
            });
        }
    });
    
</script>
@stop
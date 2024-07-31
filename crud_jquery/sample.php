<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function() {
                $("#load-hero").on('click', function() {
                        $.ajax({
                                url: "https://jsonplaceholder.typicode.com/users/2",
                                method: "GET",
                                success: function(data) {
                                    console.log(data);
                                    $("#hero-info").append(`<p> ${data.id} </p>
                                    <p> ${data.name} </p>
                                    <p> ${data.username} </p>
                                    <p> ${data.email} </p>
                                    `);
                                    },
                                        error: function(error) {
                                            $('#hero-info').html('<p>Failed</p>');
                                        }
                                });
                        });
                });
</script>

<div class="container">

    <h1>Superhero Info</h1>
    <div id="hero-info"></div>
    <button id="load-hero">Load Superhero</button>
</div>
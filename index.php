<!DOCTYPE html>
<html>
<head>
    <title>Ajax</title>


    <style type="text/css">

        #container {

            background:  green;
            color: white;

        }

        .title {

            height: 200px;
        }


    </style>

</head>

<body>

<h2 id="container" class="">Understanding Ajax</h2>


<button id="btnClick">Click Me</button>

<div id="countryList">



</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<script type="text/javascript">


    $(document).ready(function () {


        $('#btnClick').bind('click', function () {

            $('#container').css({

                'background' : 'red'
            });

            //$('h2').addClass('title');


            $.ajax({
                //url: "http://country.io/capital.json",
                url: "countries.php",
                dataType : "JSON"
            }).done(function(response) {


                $('#countryList').html(response);

                var html = '<table><tr><th>Country</th><th>Capital</th></tr>'

                //console.log(response);

                $.each(response, function (index, value) {

                    html = html+'<tr><td>'+value.name+'</td><td>'+value.city+'</td></tr>';

                    //console.log(name, city);

                });

                html = html+'</table>';

                $('#countryList').html(html);

            });


        })



    })





    console.log($);



</script>







</body>

</html>
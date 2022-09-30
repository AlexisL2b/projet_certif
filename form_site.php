<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulaire gestion site géographique</h1>
<form action="javascript:ajout();">
    <input type="text" name="" id="name" placeholder="Nom">
    <input type="submit" value="Ajouter">
</form>


</body>
</html>
<script>


    function ajout()
    {


        let site= $('#name').val();

        $.ajax({


            url: 'ajout.php',
            dataType: 'json',
            type: 'POST',
            data:
                {
                    name:site,
                    request:'ajout',
                },

            success: function(response)
            {
                alert("ok");
            }
            ,
            error: function(){
                alert("pb avezc php");

            }



        })
    }
</script>
<html>
<head>
	<title>KM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            include 'v_bootstrapPC.php';
        ?>
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript">
            $(
                    function()
                    {
                        $('#btnValider').click
                    (
                        function()
                        {  
                                
                            InsererInstructeur();
                            
                        }
                    );         
                  
                }
                
               );
        </script>
</head>
<body style="background-color:#F5F5F5; margin-left: 10px; margin-bottom: 10px" >
            
    <div style="border-color: black; height:auto; overflow:auto">
        <h1 style="font-family: Impact; color: red;" align="center"><br>KM</br></h1>
        <h2 style="font-family: Impact; " align="center"><u>COACHING</u></h2>
    </div>
    <div id="dOK"></div>
    <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/affichageDesInstructeurs"> Retour  </a></button>
    <h2>Insertion d'un instructueur</h2>
        <div class="form-inline"><label>Nom: </label><input class="form-control" id="txtNom" type="text"></div><br>
        <div class="form-inline"><label>Prenom: </label><input class="form-control" id="txtPrenom" type="text"></div><br>
        <div class="form-inline"><label>Téléphone: </label><input class="form-control" id="txtTel" type="number"></div><br>
        <div class="form-inline"><label>Addresse: </label><input class="form-control" id="txtAdresse" type="text"></div><br>
        <div class="form-inline"><label>Mail: </label><input class="form-control" id="txtMail" type="email"></div><br>

        <button type="button" id="btnValider" class="btn btn-danger">Valider</button></br></br>
    <div align="left">
        
    </div>
    <div align="left">
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/index"> Menu </a></button></br></br>
    </div>

</body>
</html>

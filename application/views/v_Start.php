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
                            alert($('#txtLogin').val());
                            alert($('#txtMdp').val());
                            Authentification();
    
                          
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
    
    <div style="border-color: black; height:auto; overflow:auto">
        <h2 style="font-family: Impact;" align="left"><br>Authentification</br></h2>
        
        <p style="font-family: Impact;" align="left"><u><i>Veuillez saisir votre Login</i></u></p>
        <div class="form-inline"> <input class="form-control" id="txtLogin" type="text"></div><br>
        
        <p style="font-family: Impact;" align="left"><u><i>Veuillez saisir votre Mot de Passe</i></u></p>
        <div class="form-inline"> <input class="form-control" id="txtMdp" type="text"></div><br>
        
        <input id="btnValider" type="button" class="btn btn-success" value="Valider">
        
    </div>
    <a href="<?php echo base_url(); ?>index.php/Ctrl_KM/leMenu">Page suivante</a>
    
    
    <div id="d1" ></div>
</body>
</html>


        <!--<h1 style="font-family: Impact;" align="center"><u><i><a href="<?php echo base_url(); ?>index.php/Ctrl_Start/index">MEDICATOR<img src = "<?php echo base_url();?>Image/medicament.png" style="width: 50px; height: 50px;"></a></i></u></h1>
        <p>
            <h2 class="text-center">Bienvenue, sur l'application MEDICATOR</h2>
            <h4 class="text-center" ><i> Sélectionnez la fonctionnalité souhaité</i></h4></br>
        </p>
        </div>
  
    <div align="center">
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> Gestion des medicaments </a></button></br></br>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_MedicatorG/index"> Gestion des visiteurs </a></button>
    -->
    
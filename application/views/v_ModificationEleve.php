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
                        
                        $('#btnModifier').click
                    (
                        function()
                        {  
                           
                            ModifierEleve();
                            
                        }
                    );
                     $('tr').click
                        (
                                function()
                        {

                            $('#txtId').val($(this).children(0).eq(0).text());
                            $('#txtNom').val($(this).children(0).eq(1).text());
                            $('#txtPrenom').val($(this).children(0).eq(2).text());
                            $('#txtTel').val($(this).children(0).eq(3).text());
                            $('#txtAdresse').val($(this).children(0).eq(4).text());
                            $('#txtMail').val($(this).children(0).eq(5).text());
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
    <div align="left">
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/affichageDesEleves"> Retour  </a></button>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/index"> Menu </a></button></br>
    </div>
        <h2>Modification d'un eleve</h2>
        <div class="form-inline"><label>Id: </label><input class="form-control" id="txtId" type="text"disabled></div><br>
        <div class="form-inline"><label>Nom: </label><input class="form-control" id="txtNom" type="text"></div><br>
        <div class="form-inline"><label>Prenom: </label><input class="form-control" id="txtPrenom" type="text"></div><br>
        <div class="form-inline"><label>Téléphone: </label><input class="form-control" id="txtTel" type="number"></div><br>
        <div class="form-inline"><label>Addresse: </label><input class="form-control" id="txtAdresse" type="text"></div><br>
        <div class="form-inline"><label>Mail: </label><input class="form-control" id="txtMail" type="email"></div><br>
        

        <button type="button" id="btnModifier" class="btn btn-danger">Modifier</button></br></br>
<div style="border-color: black; height:auto; overflow:auto">
    <table border="1.5" class="table" >
            <thead>
                <tr> <th>Id</th><th>Nom</th><th>Prenom</th><th>Telephone</th><th>Adresse</th><th>Mail</th><th>Ceinture</th></tr>
            </thead>
            <tbody>               
                    <?php 
           
               
                    foreach($lesEleves as $eleve)
                        {
                            
                    ?>
            
                <tr>
                    <td><?php echo $eleve->idEleve; ?></td>
                    <td><?php echo $eleve->nomEleve;?></td>
                    <td><?php echo $eleve->prenomEleve;?></td>
                    <td><?php echo $eleve->telephone;?></td>
                    <td><?php echo $eleve->adresse;?></td>
                    <td><?php echo $eleve->mail;?></td>
                    <td><?php echo $eleve->ceinture;?></td>
                </tr>
                    <?php 
                     
                        } 
                    ?>
            </tbody>
        
        </table>  
    </div>
    

</body>
</html>

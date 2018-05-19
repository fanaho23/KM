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
          
        </script>
</head>
<body style="background-color:#F5F5F5; margin-left: 10px; margin-bottom: 10px" >
    <div style="border-color: black; height:auto; overflow:auto">
        <h1 style="font-family: Impact; color: red;" align="center"><br>KM</br></h1>
        <h2 style="font-family: Impact; " align="center"><u>COACHING</u></h2>
    </div>

    <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/pageInsertionInstructeur"> Inserer un instructeur  </a></button>
    <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/modificationInstructeur"> Modification des instructeurs  </a></button>
    <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/attributionCours"> Attribution des cours  </a></button>
    <div style="border-color: black; height:auto; overflow:auto">
    <table border="1.5" class="table" >
            <thead>
                <tr> <th>Id</th><th>Nom</th><th>Prenom</th><th>Telephone</th><th>Adresse</th><th>Mail</th></tr>
            </thead>
            <tbody>               
                    <?php 
           
               
                    foreach($lesInstructeurs as $instructeur)
                        {
                            
                    ?>
            
                <tr>
                    <td><?php echo $instructeur->idInstructeur; ?></td>
                    <td><?php echo $instructeur->nomInstructeur;?></td>
                    <td><?php echo $instructeur->prenomInstructeur;?></td>
                    <td><?php echo $instructeur->telephone;?></td>
                    <td><?php echo $instructeur->addresse;?></td>
                    <td><?php echo $instructeur->mail;?></td>
                </tr>
                    <?php 
                     
                        } 
                    ?>
            </tbody>
        
        </table>  
    </div>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/index"> Menu </a></button></br></br>

</body>
</html>

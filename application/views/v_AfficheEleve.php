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
    <button type="button" class="btn btn-danger"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/pageInsertionEleve"> Inserer un eleve </a></button>
    <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/modificationEleve"> Modification des eleves  </a></button>
    <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/attributionCeinture"> Attribution ceinture </a></button>

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
    <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/index"> Menu </a></button></br>
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
    
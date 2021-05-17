<?php $this->titre = "Mes Books"; ?>

<div>
<table class="afi">
        <th> Name </th>
        <th> Auteur </th>
        <th> Annee </th>

        <?php foreach ($books as $book): ?>
        <tr>  
            <td><?php echo $book->getName(); ?> </td> 
            <td> <?php echo $book->getAuteur(); ?> </td>
            <td> <?php echo $book->getAnnee() ; ?> </td>
            <td> <a href="index.php?action=editbook&id=<?php echo $book->getId() ?>"><button class="btn btn-success" type="submit">Modifier</button></a> </td>
            <td><a href="index.php?action=delbook&id=<?php echo $book->getId() ?>"><button class="btn btn-danger" type="submit">Supprimer</button></a> </td>
            <?php endforeach; ?>
        </tr>
        
    </table>
</div>
        


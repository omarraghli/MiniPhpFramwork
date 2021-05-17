<?php $this->titre = "Bookstor"; ?>

<div>
<table class="afi">
        <th> Name </th>
        <th> Adresse </th>
        <th> Email </th>
        <th> Telephone </th>
        
        <?php foreach ($books as $books): ?>
        <tr>  
            <td><?php echo $books->getName(); ?> </td> 
            <td> <?php echo $books->getAdresse(); ?> </td>
            <td> <?php echo $books->getEmail() ; ?> </td>
            <td><?php echo $books->getTelephone() ; ?></td>
            <td> <a href="index.php?action=editbookstore&id=<?php echo $books->getId() ?>"><button class="btn btn-success" type="submit">Modifier</button></a> </td>
            <td><a href="index.php?action=delbookstore&id=<?php echo $books->getId() ?>"><button class="btn btn-danger" type="submit">Supprimer</button></a> </td>
            <?php endforeach; ?>
        </tr>
        
    </table>
</div>
<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Auteur</th>
                    <th>Date de publication</th>
                    <th>Date de creation / modification</th>
                    <th>Titre</th>
                    <th>Image Url</th>
                    <th>Description</th>
                    <th>Status</th>                    
                </tr>
            </thead>
            <tbody>

                <?php
             //   $date = date('yy-m-d h:i:s');
            // echo $date;
              /*  if($result->num_rows>0)
                { */
                    foreach ($liste as $pr)
                    {  ?>
                        <tr>
                        <td><?php echo $pr['IdArticle']; ?></td>
                <td><?php echo $pr['AuteurArticle']; ?></td>
                <td><?php echo $pr['DateArticle']; ?></td>
                <td><?php echo $pr['DateCreation']; ?></td>
                <td><?php echo $pr['TitreArticle']; ?></td>
                <td style="white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 100px;"><img style="width: 200%;" src="<?php echo $pr['ImageUrl']; ?>"></td>
                <td style="display: block;
  width: 100px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;"><?php echo $pr['DescriptionArticle']; ?></td>
                <td><?php echo $pr['Status']; ?></td>
                <td><a class="btn btn-success" href="ModifierArtic.php?IdArticle=<?php echo $pr['IdArticle']; ?>">Update</a></td>
                <td><a class="btn btn-danger"href="../../../Controller/SupprimerArtic.php?IdArticle=<?php echo $pr['IdArticle']; ?>">Delete</a></td>
            </tr>

<?php
                    }
               // }

                ?>
                


            </tbody>




        </table>
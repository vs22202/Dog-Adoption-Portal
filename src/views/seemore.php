
<div class="container2 margin-inline-auto font-family-quint">
    <img class="image_seemore" src="/public/user_image_storage/<?php echo $dog['imageFolderPath']?>0P.jpeg" alt="Dog pfp">  
    <p><b>Name:</b> <?php echo $dog['name']?></p>
    <p class="description"><b>Description:</b> <?php echo $dog['description']?></p>
    <p><b>Age:</b> <?php echo $dog['age']?></p>
    <p><b>Breed:</b> <?php echo $dog['breed']?></p>
    <p><b>Shelter</b>: <?php echo $uploadedByAdmin['shelter_name']?></p>
    <p><b>Address:</b> <?php echo $uploadedByAdmin['shelter_address']?></p>    
    <p><b>Contact:</b> <?php echo $uploadedByAdmin['shelter_contact_no']?> </p>   
</div>
<?php


?>
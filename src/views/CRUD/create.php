<h3 class='text-align-center font-size-lg'>Upload Dog Details</h3>
<a href="/bulkupload" class='btn primary-900 width-15p margin-inline-auto margin-bottom-1 margin-top-1'>For Bulk Upload </a>
<form action='/create' class='flex flex-direction-column align-items-center gap1' enctype="multipart/form-data" method="POST">
    <h4 class='font-size-md'>Individual Details Upload</h4>
    <input type='text' placeholder="name.." name='dog_name' id ='dog_name' class='input' required>
    <input type='text' placeholder="breed.." name='dog_breed' id ='dog_breed' class='input' required>
    <input type='number' name='dog_age' id='dog_age' placeholder="age.." class='input' required>
    <textarea placeholder="description.." name='dog_description' id ='dog_description' class='input'></textarea> 
    <div class='dog_images_holder'>
        <label for="dog_images" class='font-size-sm font-family-quint'>Upload dog pics..</label>
        <input type="file" name="dog_images[]" id="dog_images" multiple class='input'>
    </div>
    <input type="submit" value='Upload' class='btn primary-900'>
</form>
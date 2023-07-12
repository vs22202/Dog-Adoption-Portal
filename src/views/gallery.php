<script>
  console.log('hello');
  fetch("/getalldogdetails").then(response => response.json())
    .then(data => data.forEach((record) => {
      console.log(record);
      let check=0;
      <?php if (isset($get['search'])) : ?>
        fetch(`/getlocation?location=<?php echo $get['location'] ?>&admin_id=${record['uploadedBy']}`).then(response => response.json())
          .then(data => {
            if (!record['breed'].toUpperCase().includes('<?php echo $get['search'] ?>'.toUpperCase()) || !data) {
              console.log(check)
              check = -1;
            }
          });
      <?php endif ?>
      setTimeout(() => {
        console.log(check);
        if (check != -1) {
          console.log('here');
          cardHolder = document.querySelector("[data-cardHolder]");
          card = document.createElement('a');
          card.setAttribute('href', `/seemore?name=${record['name']}`)
          card.classList.add("card");
          card.innerHTML = `<img class="dex" src="/public/user_image_storage/${record['imageFolderPath']}0P.jpeg" alt="Dog pfp"><div class="container"><h4> ${record['name']}</h4><p class="description">${record['description']}</p><div class="seemore"><p>See more about ${record['name']}</p></div></div>`;
          cardHolder.appendChild(card);
        }
        if(document.querySelector('[data-cardHolder]').childNodes.length==0 && !document.querySelector('[data-search]') ){
          newNode=document.createElement('div');
          newNode.setAttribute('data-search','true');
          newNode.innerHTML=`<div class='flex flex-direction-column justify-content-center align-items-center gap1'><p class='margin-top-1 font-family-quint' >Could not find matches .Please try a different search </p><h3 class='font-size-md'>Search to find your new friend</h3>
        <form class='form gap1' action='/gallery'> 
            <input type='search' placeholder="i am looking for a.." name='search' class='input text-align-center font-size-sm'>
            <div class='inline input tertiary'>
            <i class="fa-solid fa-location-dot"></i>
            <select class='select' name='location'>
                <option>Near</option>
                <option value='chennai'>Chennai</option>
                <option value='vellore'>Vellore</option>
            </select>
            </div>
            <button type="submit" class='btn tertiary'><i class="fa fa-search"></i></button>
        </form></div>`;
        document.querySelector('[data-cardHolder]').insertAdjacentElement('beforeBegin',newNode);
    }else if(document.querySelector('[data-search]')){
      document.querySelector('[data-search]').remove();
    }
      }, 500);
    }));
</script>
<h3 class='text-align-center'>Gallery</h3>
<div class="card-holder grid grid-template-columns align-items-center justify-content-space-evenly  margin-top-1 row-gap-1 margin-inline-auto width-75p gap1" data-cardHolder></div>
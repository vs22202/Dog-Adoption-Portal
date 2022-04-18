<script>
    console.log('hello');   
    fetch("/getalldogdetails") .then(response => response.json())
  .then(data => data.forEach((record)=>{
      console.log(record);
      cardHolder = document.querySelector("[data-cardHolder]");
      card = document.createElement('div');
      card.classList.add("card");
    card.innerHTML=`<img class="dex" src="/public/user_image_storage/${record['imageFolderPath']}0P.jpeg" alt="Dog pfp"><div class="container"><h4> ${record['name']}</h4><p class="description">${record['description']}</p><div class="seemore"><p>See more about ${record['name']}</p></div></div>`;    
    cardHolder.appendChild(card);
  }));
</script>
<h3 class='text-align-center'>Gallery</h3>    
<div class="card-holder grid grid-template-columns align-items-center justify-content-space-evenly  margin-top-1 row-gap-1 margin-inline-auto width-75p gap1" data-cardHolder>
</div>
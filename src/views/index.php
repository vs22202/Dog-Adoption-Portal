<?php
?>
<div class='flex align-items-center justify-content-space-between'>
    <div class='landing flex flex-direction-column justify-content-center align-items-center gap1'>
        <h2 class='font-size-xxlg decor-h3 margin-bottom-1'>
            #Adopt Pure Love
        </h2>
        <h3 class='font-size-md'>Search to find your new friend</h3>
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
        </form>
        <div class='flex align-items-center justify-content-space-evenely gap1'>
            <hr class='decor-hr'>
            <p class='font-size-sm'>or</p>
            <hr class='decor-hr'>
        </div>
        <a href='/quiz' class='btn primary-900'>Take our picker quiz</a>
    </div>
    <img src='../images/landing-img.png'>
</div>
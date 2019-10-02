<?php

include "header.php"

?>
<div class="container-fluid d-none" id="expand-gallery">
        <div id="image-container"></div>
    </div>
<div class="container">
    <h1 class="mb-4">Gallery of Work</h1>
    <div class="text-center my-2">
        <form name="gallery-filter" id="gallery-filter">
            <button class="btn gallery-btn">All</button>
            <button class="btn gallery-btn">Interior</button>
            <button class="btn gallery-btn">Exterior</button>
            <button class="btn gallery-btn">Kitchen</button>
            <button class="btn gallery-btn">Bath</button>
            <button class="btn gallery-btn">Living Space</button>
            <button class="btn gallery-btn">Rendering</button>
        </form>
    </div>
    <div id="gallery">
        <div class="gallery-col">
            <img src="images/gallery/basement-finish.jpg" class="interior living-space" alt="Finished Basement">
            <img src="images/gallery/bathroom-render.jpg" class="render bath interior" alt="Bathroom Rendering">
            <img src="images/gallery/bit-shower-after.jpg" class="bath interior" alt="Shower Remodel">
            <img src="images/gallery/bit-shower-floor.jpg" class="bath interior flooring" alt="Shower Floor Tiling">
            <img src="images/gallery/fireplace.jpg" class="interior living-space" alt="Fireplace Reconstruction">
            <img src="images/gallery/home-bathroom3.jpg" class="interior bath" alt="Bathroom Remodel">
            <img src="images/gallery/home-laundry.jpg" class="interior living-space" alt="Laundry Room Remodel">
            <img src="images/gallery/lloyd-insipred.-3.jpg" class="exterior rendering" alt="Modern Home Rendering">
        </div>
        <div class="gallery-col">
            <img src="images/gallery/blue-home-rendering.jpg" class="rendering exterior" alt="Model Home">
            <img src="images/gallery/boat-house-condos.jpg" class="rendering exterior" alt="Boat Condo Rendering">
            <img src="images/gallery/church-bathroom-after.jpg" class="bath interior" alt="Full Bathroom Remodel">
            <img src="images/gallery/church-flooring.jpg" class="interior flooring" alt="New Flooring Installation">
            <img src="images/gallery/gallery.0 (2).jpg" class="interior bath rendering" alt="Pre-work Bathroom Rendering">
            <img src="images/gallery/home-bathroom4.jpg" class="interior bath" alt="Bathroom Remodel">
            <img src="images/gallery/home-shower.jpg" class="interior bath" alt="Shower/Tub Installation & Tiling">
            <img src="images/gallery/lloyd-insipred.jpg" class="exterior rendering" alt="Modern Home Rendering">
        </div>
        <div class="gallery-col">
            <img src="images/gallery/church-kitchen.jpg" class="interior kitchen" alt="Complete Kitchen Remodel">
            <img src="images/gallery/church-paint.jpg" class="exterior paint" alt="New Exterior Painting">
            <img src="images/gallery/church-render.jpg" class="rendering exterior" alt="Pre-work Rendering">
            <img src="images/gallery/condo-common-area.jpg" class="rendering" alt="Condo Common Area Rendering">
            <img src="images/gallery/home-bathroom1.jpg" class="interior bath" alt="Bathroom Remodel">
            <img src="images/gallery/home-entertainment.jpg" class="interior living-space" alt="Home Entertainment Center Custom Build">
            <img src="images/gallery/kitchen-rendering.jpg" class="interior kitchen renderiing" alt="Kitchen Concept Rendering">
            <img src="images/gallery/lloyd-render.jpg" class="exterior rendering" alt="Modern Home Rendering">
        </div>
        <div class="gallery-col">
            <img src="images/gallery/condo-interior.jpg" class="interior rendering" alt="Condo Livingspace Rendering">
            <img src="images/gallery/condo-stairs.jpg" class="interor rendering" alt="Condo Livingspace & Stairway">
            <img src="images/gallery/condo-weight-room.jpg" class="interior rendering" alt="Condo Weight Room Rendering">
            <img src="images/gallery/condo.jpg" class="exterior rendering" alt="Condo Exterior Rendering">
            <img src="images/gallery/home-bathroom2.jpg" class="interior bath" alt="Bathroom Remodel">
            <img src="images/gallery/home-foyer.jpg" class="interior living-space flooring" alt="Mud Room/Laudnry Room Remodel">
            <img src="images/gallery/lloyd-insipred.-2.jpg" class="exterior rendering" alt="Modern Home Rendering">
            <img src="images/gallery/standing-shower.jpg" class="interior bath" alt="Standing Shower Reconstruction">
        </div>
    </div>
</div>


    <?php

include "footer.php"

?>
/*///////////////////////////////////////////////////////////
EXPANDS THE SELECTED IMAGE
/*/////////////////////////////////////////////////////////

function expandTarget(image) {
    console.log(image.target);
    console.log("whatever");
    $("#image-container").html(image.target);
    console.log($("#expand-gallery"));
    $("#expand-gallery").removeClass("d-none");
    $("#expand-gallery").click( function(e) {
        console.log(e.target.attributes.id);
        if(e.target.attributes.id != jQuery("#image-container")) {
            $("#expand-gallery").addClass("d-none");
        }
    });
}



/*///////////////////////////////////////////////////////////////
FILTERS THROUGH GALLERY TO PRESENT ONLY THE VALID IMAGES 
*//////////////////////////////////////////////////////////////


function filterGallery(filter) {

    //if the button name is "living area" text must be changed to match class name
    filter === "living space" ? filter = "living-space" : filter = filter;


    //get all 4 children (columns) of the gallery
    var galleryCol = gallery.children;

    //will every image in the orginal gallery
    var galleryImages = [];

    //adds each image from all 4 columns into galleryImages array
    for (i = 0; i < galleryCol.length; i++) {
        var divColumn = galleryCol[i];
        divColumn = Array.from(divColumn.children);
        for (colRow = 0; colRow < divColumn.length; colRow++) {
            galleryImages.push(divColumn[colRow]);
        }
    }

    //Creates an array to save all images to filter in
    filteredImages = [];

    //Gets only the images with the specified class name, derived from the button pushed



    galleryImages.forEach(image => {
        if (filter === "all") {
            image.classList.remove("d-none");
        } else {

            //if the class list does not contain the filter
            if (!(image.classList.value.indexOf(filter) === -1))
                filteredImages.push(image);
                if (!(image.classList.value.indexOf("d-none") === -1)) {
                    image.classList.toggle("d-none");
                } else { }
            if (image.classList.value.indexOf(filter) === -1) {
                //if the image does not contain d-none
                if (image.classList.value.indexOf("d-none") === -1) {
                    image.classList.toggle("d-none");
                }
                //if the classList does contain d-none
                else { }

            }

        }

    });

    counter = 0;

    for (counter = 1; counter < filteredImages.length; counter++) {
        r = counter % 4;
        console.log("executing loop");

        //shorthand if statement question ? if true : if false  
        r === 0 ? r = 4 : r = r
        console.log(galleryCol[r - 1]);
    }

}
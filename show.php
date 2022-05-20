<?php require 'pass_var.php';
$page_title = 'Shows';
includeWithVariables('head.php', array('title' => $page_title));
?>
<div id='all-background-content' class="cover-blur" onclick="closeFocus()">
<!-- include banner  -->
<?php 
include 'banner.php';


// include events page -->
include 'events_cards.php'; 
?>
</div>


<div id='focus-card' class="d-block">

<div class="container-fluid position-fixed">
    <div class="row d-flex-justify-content-center mt-4">
        <div class="col-9 mx-auto focus-card m-4 container">
            <div class="focused-thumbnail bg-light">
            </div>
            <!-- title -->
            <div class="row mt-3">
                <div class="col-12">
                    <h2 class='display-6'>The Book of Mormon</h2>
                </div>
                <div class="col-12">
                    <p class='fs-5 text' style='height: fit-content' >2022 Season</p>
                </div>
                <div class="col-12 mt-3">
                    <p class='fs-6 text' ><em>This is the description. It could be long, or it could be short. This is the description. It could be long, or it could be short. This is the description. It could be long, or it could be short.</em></p>
                </div>

                

            </div>

            <div id="event-select-section" class="d-flex justify-content-end flex-row mt-3">
                <div>
                    <!-- a checkbox to hide sold out events -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hide-sold-out-events">
                        <label class="custom-control-label" for="hide-sold-out-events">Hide Sold Out Events</label>
                    </div>
                </div>
                <!-- <div> -->
                    <!-- dropdown to change order of events -->
                    <!-- TODO: fix this -->
                    <!-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Order By
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="#" class="dropdown-item">Chronological</a>
                            <a href="#" class="dropdown-item">Reverse Chronological</a>
                            <a href="#" class="dropdown-item">Price Low to High</a>
                            <a href="#" class="dropdown-item">Price High to Low</a>
                            <a href="#" class="dropdown-item">Available Seats High to Low</a>
                            <div class="dropdown-divider"></div>

                        </div>
                    </div>
                     -->


                     <!-- an html dropdown for order options -->
                     <select class="ms-3" id="order-by-dropdown">
                        <option value="chronological">Chronological</option>
                        <option value="reverse-chronological">Reverse Chronological</option>
                        <option value="price-low-to-high">Price Low to High</option>
                        <option value="price-high-to-low">Price High to Low</option>
                        <option value="available-seats-high-to-low">Available Seats High to Low</option>
                    </select>
            </div>
            <div class="row gap-lg-3 gap-sm-1 gap-2 m-2 d-flex justify-content-center mt-4">
                    <div class='col-lg-3 col-md-5 d-flex flex-row bg-light show-select-time-btn'>
                        <b class='fs-6 text'>Tuesday, May 1, 2022</b>
                        <span class='fs-6 text ms-2'>9:00 PM</span>
                    </div>
                    <div class='col-lg-3 col-md-5 d-flex flex-row bg-light show-select-time-btn sold-out'>
                        <b class='fs-6 text'>Wednesday, May 2, 2022</b>
                        <span class='fs-6 text ms-2'>9:00 PM</span>
                    </div>
                    <div class='col-lg-3 col-md-5 d-flex flex-row bg-light show-select-time-btn'>
                        <b class='fs-6 text'>Thursday, May 3, 2022</b>
                        <span class='fs-6 text ms-2'>9:00 PM</span>
                    </div>
                    <div class='col-lg-3 col-md-5 d-flex flex-row bg-light show-select-time-btn'>
                        <b class='fs-6 text'>Friday, May 4, 2022</b>
                        <span class='fs-6 text ms-2'>9:00 PM</span>
                    </div>
                    <div class='col-lg-3 col-md-5 d-flex flex-row bg-light show-select-time-btn'>
                        <b class='fs-6 text'>Saturday, May 5, 2022</b>
                        <span class='fs-6 text ms-2'>9:00 PM</span>
                    </div>
                    <div class='col-lg-3 col-md-5 d-flex flex-row bg-light show-select-time-btn'>
                        <b class='fs-6 text'>Monday, May 6, 2022</b>
                        <span class='fs-6 text ms-2'>9:00 PM</span>
                    </div>
                    <div class='col-lg-3 col-md-5 d-flex flex-row bg-light show-select-time-btn'>
                        <b class='fs-6 text'>Tuesday, May 7, 2022</b>
                        <span class='fs-6 text ms-2'>9:00 PM</span>
                    </div>
                    <!-- three extra items to make things centered, but justified left -->
                    <div class='col-lg-3 col-md-5 d-flex flex-row bg-light show-select-time-btn nopacity pe-none' ></div>
                    <div class='col-lg-3 col-md-5 d-flex flex-row bg-light show-select-time-btn nopacity pe-none' ></div>
                    <div class='col-lg-3 col-md-5 d-flex flex-row bg-light show-select-time-btn nopacity pe-none' ></div>
                    


                
                
            </div>
            <div class="row">
                <div class="col-10"></div>
                <div class="col-2">
                    <button id='cont-btn-1' class="btn cont-btn-disabled">Continue</button>
                </div>
            </div>
            

            
        </div>
    </div>
</div>
</div>



<script>
// for all elements with show-select-time-btn class, add onclick event to add class 'selected-event-time'
$('.show-select-time-btn').click(function(){
    // check first if element has class 'sold-out'
    if($(this).hasClass('sold-out')){
        // if it does, do nothing
        return;
    }
    // if the element has the class 'selected-event-time', remove it
    if($(this).hasClass('selected-event-time')){
        $(this).removeClass('selected-event-time');
        // check if there are more than one selected event time
        if($('.selected-event-time').length == 0){
            // if there is no selected events, disable the continue button
            // replace cont-btn-enabled with cont-btn-disabled
            $('#cont-btn-1').removeClass('cont-btn-enabled');
            $('#cont-btn-1').addClass('cont-btn-disabled');
        }
        
    }
    // if the element does not have the class 'selected-event-time', add it
    else{
        $(this).addClass('selected-event-time');
        // if id element 'cont-btn-1' has class 'cont-btn-disabled', replace it with 'cont-btn-enabled'
        if($('#cont-btn-1').hasClass('cont-btn-disabled')){
            $('#cont-btn-1').removeClass('cont-btn-disabled');
            $('#cont-btn-1').addClass('cont-btn-enabled');
        }
    }

});



// if id 'hide-sold-out-events' is checked, hide all elements with class 'sold-out'
$('#hide-sold-out-events').click(function(){
    if($(this).is(':checked')){
        // add class d-none to all elements with class 'sold-out'
        $('.sold-out').addClass('d-none');
    }
    else{
        // remove class d-none from all elements with class 'sold-out'
        $('.sold-out').removeClass('d-none');
    }
});






</script>




<style>

.cont-btn-disabled {
    border: 1px solid #ababab;
    padding-left: 1.5em;
    padding-right: 1.5em;
    background-color: #ECECEC;
    cursor: not-allowed !important;
    opacity: .9;
    color: grey;
}

.cont-btn-disabled:hover {
    background-color: #ECECEC;
    color: grey;
}

.cont-btn-enabled {
    border: 1px solid #ababab;
    padding-left: 1.5em;
    padding-right: 1.5em;
    background-color: var(--primary-color);
    cursor: pointer;
    opacity: .9;
    color: white;
}

.cont-btn-enabled:hover {
    color: white;
    background-color: var(--slightly-darker-color);
    /* add extra border */

}
#event-select-section {
    padding: 10px;
    
}


.sold-out {
    color: grey;
    opacity: .8;
    cursor: not-allowed !important;
}

.sold-out:hover {
    box-shadow: none !important;
}

    .selected-event-time {
        border: 2px solid var(--primary-color) !important;
    }



    .nopacity {
        opacity: 0;
    }
    :root {
        --cover-img: url('https://d4ov6iqsvotvt.cloudfront.net/uploads/article/image/622/large_morm.png');
    }

    .front {
        z-index: 5999 !important;
    }



    #fill-edges-of-banner {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 300px;
        background-color: var(--primary-color);
    }
.blur-all {
        filter: blur(0px);
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .cover-blur {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        height: 100vh;
        filter: blur(20px);
    }


    .focus-card {
        background-color: white;
        padding: 20px;
        border-radius: .25em;
        box-shadow: 0px 0px 200px rgba(0, 0, 0, 0.2);
        max-width: 900px !important;
    }

    .focused-thumbnail {
        position: relative;
        height: 25vw;
        max-height: 300px;
        overflow: hidden;
        border-radius: .25em;

        /* fit image */
        background-image: var(--cover-img);
        background-position: center;
        background-size: cover;
    }

    .focused-thumbnail img {
        position: absolute;
        top: 0;
        left: 0;
        max-width: 100%;
        max-height: 100%;
        height: auto;
        width: auto;
    }

    .buy-tickets-btn {
        cursor: pointer;
        background-color: var(--primary-color);
        color: white;
        width: 100%;
        padding: .5em;
        border-radius: .25em;
    }

    .show-select-time-btn {
        padding: .5em;
        border-radius: .25em;
        border: 1px solid lightgrey;
        cursor: pointer;
        transition: all .1s ease-in-out;
        /* set no box-shadow */
        box-shadow: 0 0 0 0 rgba(0,0,0,0.2);
    }

    .show-select-time-btn:hover {
        box-shadow: 0px 0px 15px #0000001a ;


    }


</style>




<!-- having trouble with bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




    /// some script

// jquery ready start
$(document).ready(function() {
    // jQuery code

    $("[data-trigger]").on("click", function(e) {
        e.preventDefault();
        e.stopPropagation();
        var offcanvas_id = $(this).attr('data-trigger');
        $(offcanvas_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
        $(".screen-overlay").toggleClass("show");

    });


    // Close menu when pressing ESC
    $(document).on('keydown', function(event) {
        if (event.keyCode === 27) {
            $(".offcanvas").removeClass("show");
            $("body").removeClass("overlay-active");
        }
    });

    $(".btn-close, .screen-overlay").click(function(e) {
        $(".screen-overlay").removeClass("show");
        $(".offcanvas").removeClass("show");
        $("body").removeClass("offcanvas-active");
    });

}); // jquery end



document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){

    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;

        if(nextEl) {
            e.preventDefault();
            let mycollapse = new bootstrap.Collapse(nextEl);

            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
});
// DOMContentLoaded  end





    $(document).ready(function() {
        $('.menu-tab').click(function() {
            $('.menu-hide').toggleClass('show');
            $('.menu-tab').toggleClass('active');
        });
        $('a').click(function() {
            $('.menu-hide').removeClass('show');
            $('.menu-tab').removeClass('active');
        });
    });






$(document).ready(function() {
    
  var counter = 0;
  $("#addcity").click(function () {
   
    counter = counter+1
    $("#extracity").append(
      `<div class="search-body"><h6>To <span class="removethis">
      <i class="fa fa-times close" data-dismiss="alert"></i>Remove</span></h6>
      <input type="text" class="form-control open-select" name="round[]" id="rr${counter}" placeholder="City">
      </div>`
    );
    initialize();
  });
/*google map code*/
function initialize() {
    console.log('function initi');

    var acInputs = document.getElementsByClassName("open-select");
    for (var i = 0; i < acInputs.length; i++) {
        var autocomplete;
        autocomplete = new google.maps.places.Autocomplete((acInputs[i]), {
            types: ['geocode'],
            componentRestrictions: {
                country: "IN"
            }
        });
        autocomplete.inputId = acInputs[i].id;
    }
    
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var near_place = autocomplete.getPlace();
    });
}
initialize();
});
/*google map*/





/*google map code*
function initialize() {

    var acInputs = document.getElementsByClassName("open-select");

    for (var i = 0; i < acInputs.length; i++) {

        var autocomplete = new google.maps.places.Autocomplete(acInputs[i]);
        autocomplete.inputId = acInputs[i].id;

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            this.inputId;
        });
    }
}

initialize();
/*google map*/



    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('#datepicker3').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('#pickup').datetimepicker({
        uiLibrary: 'bootstrap4',
        modal: true,
        footer: true
    });
    $('#dropoff').datetimepicker({
        uiLibrary: 'bootstrap4',
        modal: true,
        footer: true
    });
    $('.mydate').datetimepicker({
        uiLibrary: 'bootstrap4',
        modal: true,
        footer: true
    });
    $('.datetimepicker').datepicker(
        {
        uiLibrary: 'bootstrap4',
        modal: true,
        footer: true
    }
        );
        
        
    $('#departure').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#return').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#during').datepicker({
        uiLibrary: 'bootstrap4'
    });





    $(document).ready(function() {
        $.fancyMessenger({
            onSend: function(obj) {
                // Send your message here.
                console.log($(obj).find("textarea").val());
                return true;
            },
            available: {
                fromHour: 8,
                untilHour: 16
            }
        });
    });


    //vechicle filter script

        let filters = document.querySelectorAll(".carType_filter-ul li");
        let carTypes = document.querySelectorAll(".carType");

        // console.log(carType)

        for (var link of filters) {

            link.addEventListener("click", filterProjects);
        }

        function filterProjects(e) {
            e.preventDefault();

            for (let eachFilter of filters) {
                eachFilter.classList.remove('active');
            }

            let filter = this.dataset.filter;
            console.log(filter)

            for (var carType of carTypes) {
                if (filter == "all") {
                    carType.style.display = "initial";
                    this.classList.add("active");
                } else if (carType.classList.contains(filter)) {
                    carType.style.display = "initial";
                    this.classList.add("active");
                } else {
                    carType.style.display = "none";
                }
            }

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }




        //paymentselect
        $(document).ready(function() {
            $('.table input:radio').on('change', function() {
                alert($('input[name=paytype]:checked', '#myForm').val());

                if($(this).is(':checked')) {
                    $(this).closest('tr').addClass('active');
                } else {
                    $(this).closet('tr').removeClass('active');
                }
                
            });
        });

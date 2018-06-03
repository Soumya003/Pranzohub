
function selectFunction() {

	var vegselect = document.getElementById("veg-select");
    var veg = document.getElementById("veg");

    var nonvegselect = document.getElementById("nonveg-select");
    var nonveg = document.getElementById("nonveg");

    if (vegselect.checked == true){
        veg.classList.remove("hidden");
    } else {
       	veg.classList.add("hidden");
    }

    if (nonvegselect.checked == true){
        nonveg.classList.remove("hidden");
    } else {
       	nonveg.classList.add("hidden");
    }

    var message = document.getElementById("warning");
    var smoothieselect = document.getElementById("smoothie-select");
    var smoothie = document.getElementById("smoothie");

    if (smoothieselect.checked == true){
        smoothie.classList.remove("hidden");
    } else {
       smoothie.classList.add("hidden");
    }

    if (smoothieselect.checked == true){
    	if((vegselect.checked == true) || (nonvegselect.checked == true)){
    		warning.classList.add("hidden");
    	} else {
       		warning.classList.remove("hidden");
    	}
    } else {
    	warning.classList.add("hidden");
    }

}


$(document).ready(function(){

var quantitiy=0;
   $('.veg-quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var vegquantity = parseInt($('#veg-quantity').val());
        
        // If is not undefined
            if(vegquantity<9){
            $('#veg-quantity').val(vegquantity + 1);
        	}
          
            // Increment
        
    });

     $('.veg-quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var vegquantity = parseInt($('#veg-quantity').val());
        
        // If is not undefined
      
            // Increment
            if(vegquantity>0){
            $('#veg-quantity').val(vegquantity - 1);
            }
    });
    
});

$(document).ready(function(){

var quantitiy=0;
   $('.nonveg-quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var nonvegquantity = parseInt($('#nonveg-quantity').val());
        
        // If is not undefined
            if(nonvegquantity<9){
            $('#nonveg-quantity').val(nonvegquantity + 1);
        	}
          
            // Increment
        
    });

     $('.nonveg-quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var nonvegquantity = parseInt($('#nonveg-quantity').val());
        
        // If is not undefined
      
            // Increment
            if(nonvegquantity>0){
            $('#nonveg-quantity').val(nonvegquantity - 1);
            }
    });
    
});

$(document).ready(function(){

var quantitiy=0;
   $('.smoothie-quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var smoothiequantity = parseInt($('#smoothie-quantity').val());
        
        // If is not undefined
            if(smoothiequantity<9){
            $('#smoothie-quantity').val(smoothiequantity + 1);
        	}
          
            // Increment
        
    });

     $('.smoothie-quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var smoothiequantity = parseInt($('#smoothie-quantity').val());
        
        // If is not undefined
      
            // Increment
            if(smoothiequantity>0){
            $('#smoothie-quantity').val(smoothiequantity - 1);
            }
    });
    
});
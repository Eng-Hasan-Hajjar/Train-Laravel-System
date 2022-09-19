$(function(){


	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 300,
        labels: {
            next: "Continue",
            previous: "Back",
            finish: 'Proceed to checkout'

        },
        onStepChanging: function (event, currentIndex, newIndex) {
            if ( newIndex >= 1 ) {
                $('.steps ul li:first-child a img').attr('src','images/step-1.png');
            } else {
                $('.steps ul li:first-child a img').attr('src','images/step-1-active.png');
            }

            if ( newIndex === 1 ) {
                $('.steps ul li:nth-child(2) a img').attr('src','images/step-2-active.png');

            } else {
                $('.steps ul li:nth-child(2) a img').attr('src','images/step-2.png');
            }

            if ( newIndex === 2 ) {
                $('.steps ul li:nth-child(3) a img').attr('src','images/step-3-active.png');
                var data=$("#wizard").serialize();
                $.ajax({
                   data:data,
                    url:"search",
                    type:"get",
                    success:function (data) {
                       console.log(data);
                       //$("#search").html(data);
                       $.each(data,function (i,value) {
                           var tr=$("<tr/>");
                           tr.append($("<td/>",{html:'<input type="radio" name="selected" class="travel-selected" value="'+value.train_id+'">'}))
                               .append($("<td/>",{text:value.leave_time}))
                               .append($("<td/>",{class:'product-quantity',html:'<div class="quantity" style="display: inline-block;width: 105px;height: 36px; background: #f2f2f2;display: flex; align-items: center;justify-content: center;"><span class="plus" style="color: #92c752;font-weight: 700; ">+</span><input style="border: none;padding: 0;width: 17px;font-size: 15px; color: #666;background: none;text-align: center;" type="number" id="quantity_5b4f198d958e1" class="input-text qty text" step="1" min="0" max="" name="cart[5934c1ec0cd31e12bd9084d106bc2e32][qty]" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" ><span style="color: #92c752;font-weight: 700; ">-</span></div>'}))
                               .append($("<td/>",{text:value.price}))
                           $("#table_details").append(tr);
                       })

                    }

                })
            } else {
                $('.steps ul li:nth-child(3) a img').attr('src','images/step-3.png');
            }

            if ( newIndex === 3 ) {
                $('.steps ul li:nth-child(4) a img').attr('src','images/step-4-active.png');
                $('.actions ul').addClass('step-4');
            } else {
                $('.steps ul li:nth-child(4) a img').attr('src','images/step-4.png');
                $('.actions ul').removeClass('step-4');
            }
            return true; 
        }
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Click to see password 
    $('.password i').click(function(){
        if ( $('.password input').attr('type') === 'password' ) {
            $(this).next().attr('type', 'text');
        } else {
            $('.password input').attr('type', 'password');
        }
    }) 
    // Create Steps Image
    $('.steps ul li:first-child').append('<img src="images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="images/step-1-active.png" alt="" style="width: 70px;height: 70px"> ').append('<span class="step-order">Step 01</span>');
    $('.steps ul li:nth-child(2)').append('<img src="images/step-arrow.png" alt="" class="step-arrow" >').find('a').append('<img id="step2" src="images/step-2.png" alt="" style="width: 70px;height: 70px">').append('<span class="step-order">Step 02</span>');
    $('.steps ul li:nth-child(3)').append('<img src="images/step-arrow.png" alt="" class="step-arrow" >').find('a').append('<img src="images/step-3.png" alt="" style="width: 70px;height: 70px">').append('<span class="step-order">Step 03</span>');
    $('.steps ul li:last-child a').append('<img src="images/step-4.png" alt="" style="width: 70px;height: 70px">').append('<span class="step-order">Step 04</span>');

})

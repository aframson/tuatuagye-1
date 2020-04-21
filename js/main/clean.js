 $(function () {
            

           
                console.log(     $('.single-hero-items').width())   ;
               console.log(     $('.single-hero-items').height())   ;
               console.log(     $('div.product-large.set-bg').height())   ;

                 $(".card-product-grid").hover(function(){
                        var el = $(this);
                      el.addClass('.addborder');
                      console.log('yes i hovered');
                      $('a.buy_now').show();
                      console.log(el);

                    });

         /************************************************/
                                //#buy product or  quick view 
                /************************************************/
         
                        console.log('attempting to buy product....!')
                        var page = $(this).attr("id");

                       
                                   var page = "ready";
                                   
                      $.ajax({
                         url: "./Source/resources/config/route.php?func=begin",
                         method: "POST",
                         data: { page: page, requesting: "true" },

                success: function (data, textStatus, jqXHR) {
                             console.log('success');
                               //    $('div.container div.row').after(data);

                                 //  window.location.href = "product.html"
                                    
                                                      
                            },

                     error: function (jqXHR, textStatus, errorThrown) {
                                    console.log(errorThrown);

                                }
                            })
                               
                        
                            console.log("did it work?")

      $(document).on('click', '.pi-pic ul li a #buy', function () {

                 var $parent = $(this).parents('.product-item');
                var productName = $parent.find('product-price').text();
                var productImage = $parent.find('img').attr('src');
                //var page = $(this).attr("src");
                // var price =   $(this).data("product-price");
                 console.log("getting image src");
                 console.log(productImage);
                 console.log("product price");
                 console.log(productName);
                    alert("syntax of vanilla js is weird");
         


            });
           function addToCart(){
                    alert("syntax of vanilla js is weird");

            }
          var addToCartButtons = $('li2 a#buy');
               for (var i = 0; i < addToCartButtons.length; i++) {
                 var button = addToCartButtons[i]
                  $(buttpn).click(function (e) { 
                     e.preventDefault();
                     addToCartClicked();
                 });
                }

                addToCartClicked(){
                    alert("syntax of vanilla js is weird");
                }
                    
            
                
});
               function hi(){
                    $(this).css("background-color", "pink");
                    };
                   var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src  

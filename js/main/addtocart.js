                   // alert("syntax of vanilla js is weird");
 
                  
                console.log(     $('.single-hero-items').width())   ;
               console.log(     $('.single-hero-items').height())   ;
               console.log(     $('div.product-large.set-bg').height())   ;



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
                                    

                                 $('.section-heading').append(data);
                                                      
                            },

                     error: function (jqXHR, textStatus, errorThrown) {
                                    console.log(errorThrown);

                                }
                            })
                               
                        
                            console.log("did it work?")
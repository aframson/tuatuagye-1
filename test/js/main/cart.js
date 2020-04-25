     
     
     
     
                            var id = 1;
     
     $.ajax({ 
                         url: "Source/resources/products/readone.php?id=1",
                         method: "GET",
                         data: { id: id, requesting: "true" },

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
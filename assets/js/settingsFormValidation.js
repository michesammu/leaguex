/*----------------------------
	Site Options
------------------------------ */
function siteOptions() {

    if($('#siteOptions').length && $.fn.formValidation) {

        $('#siteOptions').formValidation({            
            framework: 'bootstrap4',
            live: 'submitted',
            excluded: ':disabled',
            fields: {
                sitename: { 
                    validators: {                        
                        notEmpty: {}                      
                    }
                },
                sitetitle: { 
                    validators: {                        
                        notEmpty: {}                      
                    }
                }
            }
        })
        .on('success.form.fv', function(e) {

            e.preventDefault();

            var $form = $(e.target),
            fv = $form.data('formValidation');

            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                success: function(response) {

                    if(response.error){
                        $.notify({message: response.message});
                    } else {
                        $.notify({
                            message: response.message,
                        },{
                            type: 'custom',
                            template: '<div data-notify="container" class="col-xl-4 col-lg-4 col-md-6 alert alert-{0}" role="alert">' +
                            '<span data-notify="message">{2}</span>' +   
                            '</div>'
                        }); 
                    }       
                }
            });

        })
    
    }                    

}

/* Init functions */
$(document).ready(function () { 

    siteOptions();
    
});
/* ------------------------------------------------------------------------------
*
*  # CKEditor editor
*
*  Specific JS code additions for editor_ckeditor.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {

    // ------------------------------------------------------------------------------------------



    // Basic setup
    // ------------------------------

    // Basic select
    $('.bootstrap-select').selectpicker();


	// --------------------------------------------------------------------



    // File input
    $(".file-styled").uniform({
        fileButtonHtml: '<i class="icon-googleplus5"></i>',
        wrapperClass: 'bg-primary'
    });

    
	
    $(".styled, .multiselect-container input").uniform({
        radioClass: 'choice'
    });





	// --------------------------------------------------------------------
	

    // Init with empty values
    $(".touchspin-empty").TouchSpin();


	// --------------------------------------------------------------------
	
	
	



});

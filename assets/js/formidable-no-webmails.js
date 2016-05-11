/**
 * Returns errors if the submitted email is from
 * a free webmail service.
 *
 * Based on this code:
 * https://formidablepro.com/help-desk/custom-javascript-validation/
 */
(function( $ ) {

	'use strict';

	/**
	 * Returns errors if a submitted email address includes a webmail domain.
	 *
	 * @param 		{[type]} 		action 			[description]
	 * @param 		obj 			object 			[description]
	 *
	 * @return 		null | array 					An array of error messages, or nothing
	 */
	function frmThemeOverride_jsErrors( action, object ) {

		var errors = [];
		var services = [ 'gmail.com', 'yahoo.com', 'hotmail.com', 'earthlink.com', 'live.com', 'icloud.com', 'me.com', 'mac.com', 'juno.com', 'aol.com', 'hushmail.com', 'outlook.com', 'protonmail.com', 'zoho.com', 'yandex.com', 'gmx.net', 'gmx.com' ];

		// Make sure required email field is filled in
		var emailFields = jQuery(object).find('input[type=email]');

		if ( emailFields.length ) {

			for ( var e = 0, el = emailFields.length; e < el; e++ ) {

				var emailAddress = emailFields[e].value;
				var fieldID = frmGetFieldId( emailFields[e].name );

				for ( var f = 0, fl = services.length; f < fl; f++ ) {

					if ( 0 < emailAddress.indexOf( services[f] ) ) {

						errors[ fieldID ] = 'Please enter a business email address.';

					}

				}

			} // for

		} // if

		return errors;

	} // frmThemeOverride_jsErrors

	/**
	 * Returns the ID attribute of the field
	 *
	 * @param 		string 		inputName 		The name of the input
	 * @return 		string 						The ID of the input
	 */
	function frmGetFieldId( inputName ) {

		var ids = inputName.match(/\[(.+)\]/);
		var id = ids[1];

		if ( id.indexOf('][') !== -1 ) {

			var parts = id.split('][');
			id = parts[2] +'-'+ parts[0] + '-' + parts[1];

		}

		return id;

	} // frmGetFieldId

})( jQuery );
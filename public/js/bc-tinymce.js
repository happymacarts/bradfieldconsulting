tinymce.init({
	selector:'textarea.tinymce',
	plugins:'link code image imagetools textcolor hr lists colorpicker textpattern table preview',	
	
	toolbar1: 'formatselect styleselect fontselect | bold italic forecolor backcolor colorpicker textpattern| link image table hr | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat code preview',

	
	toolbar_items_size: 'small',  
	menubar:false,
	textcolor_map: [
	    "000000", "Black",
	    "993300", "Burnt orange",
	    "333300", "Dark olive",
	    "003300", "Dark green",
	    "003366", "Dark azure",
	    "000080", "Navy Blue",
	    "333399", "Indigo",
	    "333333", "Very dark gray",
	    "800000", "Maroon",
	    "FF6600", "Orange",
	    "808000", "Olive",
	    "008000", "Green",
	    "008080", "Teal",
	    "0000FF", "Blue",
	    "666699", "Grayish blue",
	    "808080", "Gray",
	    "FF0000", "Red",
	    "FF9900", "Amber",
	    "99CC00", "Yellow green",
	    "339966", "Sea green",
	    "33CCCC", "Turquoise",
	    "3366FF", "Royal blue",
	    "800080", "Purple",
	    "999999", "Medium gray",
	    "FF00FF", "Magenta",
	    "FFCC00", "Gold",
	    "FFFF00", "Yellow",
	    "00FF00", "Lime",
	    "00FFFF", "Aqua",
	    "00CCFF", "Sky blue",
	    "993366", "Red violet",
	    "FFFFFF", "White",
	    "FF99CC", "Pink",
	    "FFCC99", "Peach",
	    "FFFF99", "Light yellow",
	    "CCFFCC", "Pale green",
	    "CCFFFF", "Pale cyan",
	    "99CCFF", "Light sky blue",
	    "CC99FF", "Plum"
	  ],
	  style_formats: [{
		    title: 'Bold text',
		    inline: 'b'
		  }, {
		    title: 'Red text',
		    inline: 'span',
		    styles: {
		      color: '#ff0000'
		    }
		  }, {
		    title: 'Red header',
		    block: 'h1',
		    styles: {
		      color: '#ff0000'
		    }
		  }, {
		    title: 'Example 1',
		    inline: 'span',
		    classes: 'example1'
		  }, {
		    title: 'Example 2',
		    inline: 'span',
		    classes: 'example2'
		  }, {
		    title: 'Table styles'
		  }, {
		    title: 'Table row 1',
		    selector: 'tr',
		    classes: 'tablerow1'
		  }],

	// enable title field in the Image dialog
	  image_title: true, 
	  // enable automatic uploads of images represented by blob or data URIs
	  automatic_uploads: true,
	  // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
	  // images_upload_url: 'postAcceptor.php',
	  // here we add custom filepicker only to Image dialog
	  file_picker_types: 'image', 
	  // and here's our custom image picker
	  file_picker_callback: function(cb, value, meta) {
	    var input = document.createElement('input');
	    input.setAttribute('type', 'file');
	    input.setAttribute('accept', 'image/*');
	    
	    // Note: In modern browsers input[type="file"] is functional without 
	    // even adding it to the DOM, but that might not be the case in some older
	    // or quirky browsers like IE, so you might want to add it to the DOM
	    // just in case, and visually hide it. And do not forget do remove it
	    // once you do not need it anymore.

	    input.onchange = function() {
	      var file = this.files[0];
	      
	      var reader = new FileReader();
	      reader.onload = function () {
	        // Note: Now we need to register the blob in TinyMCEs image blob
	        // registry. In the next release this part hopefully won't be
	        // necessary, as we are looking to handle it internally.
	        var id = 'blobid' + (new Date()).getTime();
	        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
	        var base64 = reader.result.split(',')[1];
	        var blobInfo = blobCache.create(id, file, base64);
	        blobCache.add(blobInfo);

	        // call the callback and populate the Title field with the file name
	        cb(blobInfo.blobUri(), { title: file.name });
	      };
	      reader.readAsDataURL(file);
	    };
	    
	    input.click();
	  }
	
	
})
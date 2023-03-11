function handleFileSelectMulti(evt) {
    let files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (let i = 0, f; f = files[i]; i++) {
        // Only process image files.
        if (!f.type.match('image.*')) {
            alert("Image only please....");
        }
        let reader = new FileReader();
        // Closure to capture the file information.
        reader.onload = (function (theFile) {
            return function (e) {
                // Render thumbnail.
                let span = document.createElement('span');
                span.innerHTML = ['<img class="thumb" title="', escape(theFile.name), '" src="', e.target.result, '" />'].join('');
                document.getElementById('outputMulti').insertBefore(span, null);
            };
        })(f);

        // Read in the image file as a data URL.
        reader.readAsDataURL(f);
    }
}

document.getElementById('fileMulti').addEventListener('change', handleFileSelectMulti, false);

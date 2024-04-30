



var overlay = document.getElementById('overlay');
    
var editedImage = document.getElementById('editedImage');

var editImageModal = document.getElementById('editImageModal');

var link=document.getElementById('edit_image');

var fileinput=document.getElementById('image_upload')

// Function to initialize modal with selected image
var showEditImageModal = function() {
    
  editImageModal.classList.add('show');
  editImageModal.style.display = 'block';
  overlay.style.display= 'block';

};


// Add click event listener to the edit image link
link.addEventListener('click', function(event) {
    // Prevent the default behavior of the link
    event.preventDefault();
    
    // Simulate a click on the file input field
    fileinput.click();
});

// Add change event listener to the file input field
fileinput.addEventListener('change', function() {
  var file = event.target.files[0];

  if (file) {
    editedImage.src=URL.createObjectURL(file);

    showEditImageModal();
      
      
  }
});




 

 


  function saveImage(){
    document.getElementById('uploadForm').submit();
    }

  function closemodal() {
        
    fileinput.value='';
    editImageModal.style.display = 'none';
    editImageModal.classList.remove('show');
    overlay.style.display = 'none';
}
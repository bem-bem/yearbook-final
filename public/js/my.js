// img preveiw
function showPreview(event){
  if(event.target.files.length > 0){
      let src = URL.createObjectURL(event.target.files[0]);
      let preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
      }
  }

  //select all checkbox to delete
document.getElementById('select-all').onclick = function() {
  let checkboxes = document.querySelectorAll('input[type="checkbox"]');
  for (let checkbox of checkboxes) {
      checkbox.checked = this.checked;
  }
}
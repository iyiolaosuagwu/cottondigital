function singleproject(id) {
  const newPet = petsData.find(pet => pet.id == id);
  if (newPet) {
    document.getElementById(
      'my-mode'
    ).innerHTML = `  <div id="open-modalTwo" class="modal-windowTwo">
        <div style="overflow: scroll">
          <a href="#" title="Close" class="modal-close">Close</a>
          <div class="text-center mt-5">
              <h5 class="white-black project-name">${newPet.name}</h5>
              <h2 class="white-black project-title">${newPet.subName}</h2>
          </div>
          <div class="col-11 mx-auto">
            <div class="summary text-center">
              <h3 class="summary-text">Summary</h3>
              <p class="">
                ${newPet.summaryText}
              </p>
              <h2 class="web-link">https://udemy.com</h2>
            </div>
          </div>
          <img class="delano" src='${newPet.photo}' />
        </div>
    `;
  }
  return; //console.log(newPet);
}

// check for available modal
var modal_id = localStorage.getItem('modalID');
if (modal_id == undefined || modal_id == '' || modal_id == null) {
  // ...
} else {
  // init modal by id
  singleproject(modal_id);

  // reset id
  localStorage.setItem('modalID', '');
}

let petsData = [
  {
    id: 1,
    name: '77 Infrastructrure Partnes',
    subName: 'Branding',
    favFoods: ['wet food', 'dry food', '<strong>any</strong> food'],
    summaryText:
      '77 infra is a group of companies active in the real estate and energy sectors. <br>  77 Infrastructure Partners is an Infrastructure development firm focused on delivering world-class infrastructure at affordable prices.They wanted logos that would make a strong impact with bold colors and that the services they rendered would be instantly recognizable. Aware of our love of good design, they choose us as their partner to create a brand identity that would set them apart from other businesses in the same industry. We held meetings to talk through their vision, align on strategy and came up with logos that they were happy with.',
    birthYear: 2017,
    photo: 'https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg'
  },
  {
    id: 2,
    name: 'Helios Investment Partners',
    subName: 'IT support',
    summaryText:
      'Helios investment partners is a leading Africa focused private equity company. Helios remains African market leaders, constructing a concentrated portfolio of high-potential businesses of scale, with a focus on portfolio operations as a driver of value They had consistent IT issues in their Lagos office with internet connectivity being erratic and their software licensing not working. This was a major pain in the neck as there was a lot of employee downtime affecting productivity. They came directly to us to get their office IT working as they needed 99.9% uptime. We came in and optimized their network including working with multiple ISPs and deploying access points covering the whole premises to resolve the connectivity issues.',
    birthYear: 2008,
    photo: 'https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg'
  },
  {
    id: 3,
    name: 'Babajide Koku & Co',
    subName: 'Branding and website',
    favFoods: ['tuna', 'catnip', 'celery'],
    summaryText:
      ' Babajide Koku and Co is a leading law firm in Nigeria. This was their first website and they wanted to stay true to their ideas and that of law in general. To tell their story, we created a logo and a website that evokes professionalism, integrity and a strong reflection of their brand’s identity. We also made use of background pictures on the website to help set the mood when on the site.',
    birthYear: 2012,
    photo: 'https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg'
  },
  {
    id: 4,
    name: 'Delano Archirects',
    subName: 'Website',
    favFoods: ['tuna', 'catnip', 'celery'],
    summaryText:
      'Delano Architects (DA) is a multi-disciplinary practice that has expertise in architectural design, interior planning, planning and urban design. DA strives to create architectural excellence while working carefully to achieve the client’s goals and needs. When they came to us, they had an existing website that did not meet their needs. After conversations, we understood that they needed a better website that would translate their values as a firm as one of the leading architectural firms in Nigeria. We decided to with a modern minimalist design in line with the firm’s design ethos. We also did a photoshoot for staff portraits and pictures to be used across the site. ',
    birthYear: 2012,
    photo: 'https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg'
  }
];

document.getElementById('app').innerHTML = `
  ${petsData
    .map(pet => {
      return `
       <div class='col-lg-3 col__pad pet____cards' onClick="allCall('${pet.id}')" data-id="${pet.id}">
        <a class='' href='#open-modalTwo'>
          <div class='card card__height view overlay'>
            <div class='card__text--div'>
              <div class='mask rgba-blue-strong card__text'>
                <div class='content-rel'>
                  <h5 class='white-text card__text--one'>${pet.name}</h5>
                  <h2 class='white-text card__text--two'>${pet.subName}</h2>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    `;
    })
    .join('')}
`;

let mode = document.getElementById('my-mode');

const allCall = id => {
  // singleproject(id);
  // so instead we save the id into the localStorage
  var modal_id = localStorage.getItem('modalID');
  if (modal_id == undefined || modal_id == '' || modal_id == null) {
    localStorage.setItem('modalID', id);
    window.location = '/works.php';
  }
};

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
  return;
}

setTimeout(() => {
  // check for available modal
  var modal_id = localStorage.getItem('modalID');
  if (modal_id == undefined || modal_id == '' || modal_id == null) {
    // ...
  } else {
    // init modal by id
    singleproject(modal_id);

    // trigger click
    document.querySelector('.pet____cards').click();

    // reset id
    localStorage.setItem('modalID', '');
    console.log('modal to be listed was ' + modal_id);
  }
}, 2000);

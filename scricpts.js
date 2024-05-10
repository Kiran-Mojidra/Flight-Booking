  // JavaScript

  //------------------------ for------------------------------------------//
  document.addEventListener('DOMContentLoaded', function() {
    const selectBoxes = document.querySelectorAll('.select-box');

    selectBoxes.forEach(function(box) {
        const textBox = box.querySelector('.from-select');
        const searchContent = box.querySelector('.search-content');

        textBox.addEventListener('click', function() {
            searchContent.classList.toggle('active');
        });

        const options = searchContent.querySelectorAll('.option li');

        options.forEach(function(option) {
            option.addEventListener('click', function() {
                const text = option.querySelector('p').textContent; // Accessing the text content of the first <p> tag
                textBox.value = text;
                searchContent.classList.remove('active');
            });
        });
    });

    const selectOption = document.querySelector(".select-option");
    const soValue = document.querySelector("#soValue");
    const optionSearch = document.querySelector("#optionSearch");
    const optionLi = document.querySelectorAll(".option li");

    selectOption.addEventListener('click', function () {
        selectBoxes.forEach(function(selectBox) {
            selectBox.classList.toggle('active');
        });
    });

    optionLi.forEach(function (optionLiSingle) {
        optionLiSingle.addEventListener('click', function () {
            const text = this.querySelector('p').textContent; // Accessing the text content of the first <p> tag
            soValue.value = text;
            selectBoxes.forEach(function(selectBox) {
                selectBox.classList.remove('active');
            });
        });
    });

    optionSearch.addEventListener('keyup', function () {
        var filter, li, i, textvalue;
        filter = optionSearch.value.toUpperCase();
        li = document.querySelectorAll('.option li');
        for (i = 0; i < li.length; i++) {
            textvalue = li[i].querySelector('p').textContent; // Accessing the text content of the first <p> tag
            if (textvalue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = '';
            } else {
                li[i].style.display = 'none';
            }
        }
    });
});



//------------------------------------------------------ hotel booking -------------------------------------------------------------------------//


const hotelSelectBox = document.querySelector('.hotel-select-box');
const hotelSelectOption = document.querySelector('.hotel-select-option');
const hotelSelect = document.querySelector('#hotelSelect');
const hotelOptionSearch = document.querySelector('#hotelOptionSearch');
const hotelOptions = document.querySelector('.hotel-options');
const hotelList = document.querySelectorAll('.hotel-options li');

hotelSelectOption.addEventListener('click', function() {
    hotelSelectBox.classList.toggle('active');
});

hotelList.forEach(function(hotelListSingle) {
    hotelListSingle.addEventListener('click', function() {
        const hotelText = this.querySelector('.font14').textContent; // Accessing the text content of the first <p> tag
        hotelSelect.value = hotelText;
        hotelSelectBox.classList.remove('active');
    });
});

hotelOptionSearch.addEventListener('keyup', function() {
    var hoFilter, hoLi, hi, textValueHo;
    hoFilter = hotelOptionSearch.value.toUpperCase();
    hoLi = hotelOptions.getElementsByTagName('li');
    for (hi = 0; hi < hoLi.length; hi++) {
        var hoLiCount = hoLi[hi]; // Add var or let to declare hoLiCount
        textValueHo = hoLiCount.querySelector('.font14').textContent; // Accessing the text content of the first <p> tag
        if (textValueHo.toUpperCase().indexOf(hoFilter) > -1) {
            hoLi[hi].style.display = '';
        } else {
            hoLi[hi].style.display = 'none';
        }
    }
});



  /*------------------------------select pasenger for one way----------------------------------------- */

  document.addEventListener('DOMContentLoaded', function() {
    const passengerContent = document.getElementById('passenger-content2');
    const overlay = document.getElementById('overlay');

    passengerContent.addEventListener('click', function() {
        overlay.classList.toggle('show');
    });

    const confirmButton = document.querySelector('.paxconfirm');
    const adultSelect = document.getElementById('adult');
    const childSelect = document.getElementById('child');
    const infantSelect = document.getElementById('infant');
    const cabinClassEconomy = document.getElementById('E');
    const cabinClassPremium = document.getElementById('B');

    confirmButton.addEventListener('click', function() {
        const adultCount = parseInt(adultSelect.value);
        const childCount = parseInt(childSelect.value);
        const infantCount = parseInt(infantSelect.value);
        const totalPassengers = adultCount + childCount + infantCount;

        let classDetails;
        if (cabinClassEconomy.checked) {
            classDetails = 'Economy';
        } else if (cabinClassPremium.checked) {
            classDetails = 'Premium (Business/First)';
        } else {
            classDetails = 'No class selected';
        }

        const passengersDetails = `Passengers: ${totalPassengers}, Class: ${classDetails}`;
        passengerContent.value = passengersDetails;

        // Close passenger drop-down
        overlay.classList.remove('show');
    });
});

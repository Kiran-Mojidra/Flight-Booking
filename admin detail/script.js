const navbarToggle = document.querySelector("#navbar-toggle");
const navbarMenu = document.querySelector("#navbar-menu");
const navbarLinksContainer = navbarMenu.querySelector(".navbar-links");
let isNavbarExpanded = navbarToggle.getAttribute("aria-expanded") === "true";

const toggleNavbarVisibility = () => {
  isNavbarExpanded = !isNavbarExpanded;
  navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
};

navbarToggle.addEventListener("click", toggleNavbarVisibility);

navbarLinksContainer.addEventListener("click", (e) => e.stopPropagation());
navbarMenu.addEventListener("click", toggleNavbarVisibility);
















    // JavaScript
    document.addEventListener('DOMContentLoaded', function() {
      const selectBox = document.querySelectorAll('.select-box');
  
      selectBox.forEach(function(box) {
          const textBox = box.querySelector('.from-select');
          const searchContent = box.querySelector('.search-content');
  
          textBox.addEventListener('click', function() {
              searchContent.classList.toggle('active');
          });
  
          const options = searchContent.querySelectorAll('.option li');
  
          options.forEach(function(option) {
              option.addEventListener('click', function() {
                  textBox.value = option.querySelector('.font14').innerText;
                  searchContent.classList.remove('active');
              });
          });
      });
  });
  
  
  
  const selectBox = document.querySelector(".select-box");
  const selectOption = document.querySelector(".select-option");
  const soValue = document.querySelector("#soValue");
  const optionSearch = document.querySelector("#optionSearch");
  const option = document.querySelector(".option");
  const optionLi = document.querySelectorAll(".option li");
  
  selectOption.addEventListener('click', function () {
      selectBox.classList.toggle('active');
  });
  
  optionLi.forEach(function (optionLiSingle) {
      optionLiSingle.addEventListener('click', function () {
          const text = this.textContent;
          soValue.value = text; // Assign the value to the 'value' property
          selectBox.classList.remove('active');
      });
  });
  
  optionSearch.addEventListener('keyup', function () {
      var filter, li, i, textvalue;
      filter = optionSearch.value.toUpperCase();
      li = document.querySelectorAll('.option li'); // Use document.querySelectorAll() to select all <li> elements
      for (i = 0; i < li.length; i++) {
          textvalue = li[i].textContent || li[i].innerText; // Access textContent/innerText of each li
          if (textvalue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = '';
          } else {
              li[i].style.display = 'none';
          }
      }
  });
  
  
  
  
  /*------------------------------to-------------------------------------------- */
  document.addEventListener('DOMContentLoaded', function() {
      const selectBoxes = document.querySelectorAll('.select-box2');
  
      selectBoxes.forEach(function(box) {
          const textBox = box.querySelector('.to-select');
          const searchContent = box.querySelector('.search-content2');
  
          textBox.addEventListener('click', function() {
              searchContent.classList.toggle('active');
          });
  
          const options = searchContent.querySelectorAll('.option2 li');
  
          options.forEach(function(option) {
              option.addEventListener('click', function() {
                  textBox.value = option.querySelector('.font14').innerText;
                  searchContent.classList.remove('active');
              });
          });
      });
  });
  
  
  const selectBox2 = document.querySelector(".select-box2");
  const selectOption2 = document.querySelector(".select-option2");
  const soValue2 = document.querySelector("#toValue");
  const optionSearch2 = document.querySelector("#toOptionSearch");
  const option2 = document.querySelector(".option2");
  const optionLi2 = document.querySelectorAll(".option2 li");
  
  selectOption2.addEventListener('click', function () {
      selectBox2.classList.toggle('active');
  });
  
  optionLi2.forEach(function (option2LiSingle) {
      option2LiSingle.addEventListener('click', function () {
          const text2 = this.textContent;
          soValue2.value = text2; // Assign the value to the 'value' property
          selectBox2.classList.remove('active');
      });
  });
  
  optionSearch2.addEventListener('keyup', function () {
      var filter2, li2, i2, textvalue2;
      filter2 = optionSearch2.value.toUpperCase();
      li2 = document.querySelectorAll('.option2 li'); // Use document.querySelectorAll() to select all <li> elements
      for (i2 = 0; i2 < li2.length; i2++) {
          textvalue2 = li2[i2].textContent || li2[i2].innerText; // Access textContent/innerText of each li
          if (textvalue2.toUpperCase().indexOf(filter2) > -1) {
              li2[i2].style.display = '';
          } else {
              li2[i2].style.display = 'none';
          }
      }
  });



  
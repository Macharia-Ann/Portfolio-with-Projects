  let words = document.querySelectorAll(".word");

  // Add span around each letter of each word
  words.forEach(word => {
    let letters = word.textContent.split("");
    word.textContent = ""; // Clear the text content of the word
    letters.forEach(letter => {
      let span = document.createElement("span");
      span.textContent = letter;
      span.className = "letter";
      word.append(span);
    });
  });

  let currentWordIndex = 0;
  let maxWordIndex = words.length -1;
   // Set the first word visible
   words[currentWordIndex].style.opacity = "1";

 let changeText= () =>{
       let currentWord = words[currentWordIndex];
     let nextWordIndex = currentWordIndex === words.length - 1 ? 0 : currentWordIndex + 1;
    let nextWord = words[nextWordIndex];

     // Animate letters of the current word to 'out' class
    Array.from(currentWord.children).forEach((letter, i) => {
      setTimeout(() => {
       letter.className="letter out";
      }, i * 80);
     });

         // Set the next word to visible
     nextWord.style.opacity = "1";

   // Animate letters of the next word to 'behind' and then 'in' class
    Array.from(nextWord.children).forEach((letter, i) => {
      letter.className="letter behind";
      setTimeout(() => {
        letter.className= "letter in";
      }, 340 + i * 80);
    });
  // Update current word index
    currentWordIndex= currentWordIndex === maxWordIndex ? 0 : currentWordIndex + 1;

    
 };
 changeText();
 setInterval(changeText,3000);


//  circle skills part
 const circles= document.querySelectorAll('.circle');
 circles.forEach(elem =>{
  var dots = elem.getAttribute("data-dots");
  var marked = elem.getAttribute("data-percent");
  var percent = Math.floor(dots * marked/100);
  var points = "";
  var rotate = 360 / dots;

  for(let i = 0; i < dots; i++){
    
    points += `<div class="points" style="--i:${i}; --rot:${rotate}deg"></div>`;

  }
  elem.innerHTML = points;

  const pointsMarked= elem.querySelectorAll('.points');
  for(let i = 0; i<percent; i++){
    pointsMarked[i].classList.add('marked');
  }
 })

 const menuOpenButton= document.querySelector('.menu-open-button');
 const menuCloseButton= document.querySelector('.menu-close-button');
menuOpenButton.addEventListener('click', () =>{
body.document.classList.toogle('show-mobile-menu');
})
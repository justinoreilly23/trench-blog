let i     = 0;
let speed = Math.floor(Math.random() * 80) + 50;

function typeWriter(text)
{
  if (i < text.length) {
    document.getElementById("typewriter").innerHTML += text.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
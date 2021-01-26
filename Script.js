const date = new Date();

const renderCalendar = () => {

  date.setDate(1);

  const monthDays = document.querySelector(".days");

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDate();

  const prevLastDay = new Date(
    date.getFullYear(),
    date.getMonth(),
    0
  ).getDate();

  const firstDayIndex = date.getDay();

  const lastDayIndex = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDay();

  const nextDays = 7 - lastDayIndex - 1;

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  document.querySelector(".date h1").innerHTML = months[date.getMonth()] + " " + date.getFullYear();

  const currentDate = new Date().toDateString();
  document.querySelector(".date p").innerHTML = "Today is: " + currentDate;

  let days = "";

  for (let x = firstDayIndex; x > 0; x--) {
    let idDate = new Date(
      date.getFullYear(), 
      date.getMonth() - 1, 
      prevLastDay - x + 1
    );

    let stringDate = idDate.toISOString().slice(0, 10);
    idDate = idDate.toDateString().replace(/\s/g, '_');

    days += `<div class="prev-date" id=${idDate} title=${stringDate} onClick="editDate(this.id, this.title)">${prevLastDay - x + 1}</div>`;
  }

  for (let i = 1; i <= lastDay; i++) {
    let idDate = new Date(
      date.getFullYear(), 
      date.getMonth(), 
      i
    );

    let stringDate = idDate.toISOString().slice(0, 10);
    idDate = idDate.toDateString().replace(/\s/g, '_');

    if (
      i === new Date().getDate() &&
      date.getMonth() === new Date().getMonth() &&
      date.getFullYear() === new Date().getFullYear()
    ) {
      days += `<div class="today" id=${idDate} title="${stringDate}" onClick="editDate(this.id, this.title)">${i}</div>`;
    } else {
      days += `<div id=${idDate} title="${stringDate}" onClick="editDate(this.id, this.title)">${i}</div>`;
    }
  }

  for (let j = 1; j <= nextDays; j++) {
    let idDate = new Date(
      date.getFullYear(), 
      date.getMonth() +1, 
      j
    );

    let stringDate = idDate.toISOString().slice(0, 10);
    idDate = idDate.toDateString().replace(/\s/g, '_');

    days += `<div class="next-date" id=${idDate} title="${stringDate}" onClick="editDate(this.id, this.title)">${j}</div>`;
    monthDays.innerHTML = days;
  }
};


var editedDate = "";
var databaseDate = "";
function editDate(clickedDate, formattedDate){
  editedDate = clickedDate.replaceAll("_", " ");
  databaseDate = formattedDate;
}

document.querySelector(".prev").addEventListener("click", () => {
  date.setMonth(date.getMonth() - 1);
  renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date.setMonth(date.getMonth() + 1);
  renderCalendar();
});

renderCalendar();

const openModalButtons = document.querySelectorAll(".days")
const closeModalButtons = document.querySelectorAll(".close-button")
const overlay = document.getElementById('overlay')
let modalBody = ['']

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector("#modal")
    openModal(modal)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  document.querySelector(".title").innerHTML = editedDate;
  document.getElementById("hiddenTitle").innerHTML = databaseDate;
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}


let el = document.createElement("p")
let el.classList.add('clock')
document.querySelector('.kart-phone>a').insertAdjacentElement('afterend',el)
let id = setInterval(()=>{
    let clock = document.querySelector('.clock')
    let dateTime = new Date();
    let minutes = dateTime.getMinutes()
    let hours = dateTime.getHours()
    let seconds = dateTime.getSeconds()
    hours = hours>10?hours:'0'+hours
    minutes = minutes>10?minutes:'0'+minutes
    seconds = seconds>10?seconds:'0'+seconds
    clock.textContent = hours + ':' + minutes + ':' + seconds
}, 1000)
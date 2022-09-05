AOS.init({
    duration: 1200,
})


const courses = document.querySelectorAll('.course');

courses.forEach(course => {
    course.addEventListener('click', (e) => {
        const courseName = e.currentTarget.previousElementSibling.textContent;
        localStorage.setItem('card-title', courseName);
    })
})
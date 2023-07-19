const navLinks = document.querySelectorAll('.nav-link')
const sections = document.querySelectorAll('section')

function activeLinks() {
    let sectionLength = sections.length;
    let activeSectionIndex = -1; // Initialize with an invalid index

    // Find the current visible section
    while (sectionLength--) {
        if (window.scrollY + 97 >= sections[sectionLength].offsetTop) {
            activeSectionIndex = sectionLength;
            break;
        }
    }

    // Remove active class from all nav links
    navLinks.forEach(li => li.classList.remove('active'));

    // Add active class to the nav link corresponding to the current section
    if (activeSectionIndex !== -1) {
        navLinks[activeSectionIndex].classList.add('active');
    }
    while (--sectionLength && window.scrollY + 97 < sections[sectionLength].offsetTop) { }
    navLinks.forEach(li => li.classList.remove('active'))
    navLinks[sectionLength + 1].classList.add('active')
}
window.addEventListener('scroll', activeLinks)
const navbarNav = document.querySelector('nav')
window.addEventListener('scroll', function () {
    if (scrollY > 611) {
        navbarNav.classList.add("bg-light", 'shadow')
    } else {
        navbarNav.classList.remove('bg-light', 'shadow')
    }
})
// const navLinks = document.querySelectorAll('.nav-link')
// navLinks.forEach(navLink => {
//     navLink.addEventListener('click', () => {
//         document.querySelector('.active').classList.remove('active')
//         navLink.classList.add('active')
//     })
// })
console.log()
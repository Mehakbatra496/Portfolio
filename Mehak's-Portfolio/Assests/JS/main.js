// Menu show Y hidden


const navMenu= document.getElementById('nav-menu'),
navToggle= document.getElementById('nav-toggle'),
navClose=document.getElementById('nav-close');


if(navToggle)
{
    navToggle.addEventListener('click', ()=>{
        navMenu.classList.add('show-menu')
    })
}

if(navClose)
{
    navClose.addEventListener('click', ()=>{
        navMenu.classList.remove('show-menu')
    })
}


const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))



const skillsContent=document.getElementsByClassName('skills_content'),
 skillsHeader= document.querySelectorAll('.skills_header')

function toggleSkills()
{
    let itemClass= this.parentnode.getElementsByClassName

    for(i=0; i<skillsContent.length;i++)
    {
        skillsContent[i].className= 'skills_content skills_close'


        if(itemClass==='skills_content skills_close')
        this.parentnode.className='skills_content skills_open'
    }



}



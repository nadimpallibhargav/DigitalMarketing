let navbar = document.querySelector('.navbar');

document.addEventListener('scroll',()=>{
    if(window.scrollY >= 500){
        navbar.classList.add('banner_main_grad');
        // console.log('test');
    }else{
        // navbar.style.backgroundColor = 'transparent';
        // console.log('color changed to transparent');
        navbar.classList.remove('banner_main_grad');
    }
});
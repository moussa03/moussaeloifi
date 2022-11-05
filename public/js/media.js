
// var elem=document.getElementById('#error_name');
var element=document.getElementById('submit');
element.addEventListener('click', (event) => {
    
        if (window.matchMedia('(max-width: 768px)').matches)
        {
            $('.overlay_contact').css({'height':'754px'});

        }
        if (window.matchMedia('(min-width: 768px) and (max-width :1024px)').matches)
        {
            $('.overlay_contact').css({'height':'557px'});

        }
        if (window.matchMedia('(min-width: 1024px)').matches)
        {
            $('.overlay_contact').css({'height':'440px'});

        }
    
    else {
        console.log('not good');
    }
});


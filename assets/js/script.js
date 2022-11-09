// Ticker
        const welcomeArr = ["Junior Web Developer", "Welcome to my portfolio"];
        var x = document.getElementById('title');
        let text = '';
        let loopNum = 0;
        let index = 1;
        let isDeleting = false;
        let delta = (300 - Math.random() * 30);
        
        function tick() { 
        
        let i = loopNum % welcomeArr.length;
        let fullText = welcomeArr[i];
        let updatedText = isDeleting ? fullText.substring(0, text.length - 1) : fullText.substring(0, text.length + 1)
        text = updatedText;

        if(isDeleting){
            delta = delta / 2;
            check = true;
        }
        if(!isDeleting && updatedText === fullText){
            isDeleting = true;
            index = index - 1; 
        }
        else if(isDeleting && updatedText === ''){
            isDeleting = false;
            loopNum += 1;
            index = 1;
            delta = 500;
            
        }else{
            index += 1;
        }
        return x.innerHTML = text;
      }

     
        let ticker = setInterval(()=>{
        tick() 
        },delta)

        window.addEventListener('scroll', function() {
            if(this.scrollY > 100){
            let header = this.document.getElementById('header')
            let scroll = scrollY
            header.classList.add('onscroll')
            }else{
                header.classList.remove('onscroll')
            }
          });


        
        // Personal Profile Photo slider
        var i = 0;
        
        function ndrroImg() {
            var photo = document.getElementsByClassName('slider')

           
            if (i < photo.length - 1) {
                photo[i].style.display = 'block'
                photo[i+1].style.display = 'none'
                i++;
            } else {
                photo[i].style.display = 'block'
                photo[i-1].style.display = 'none'
                i = 0;
            }
            setTimeout('ndrroImg()', 4000);
        
        }
        document.body.addEventListener('load', ndrroImg());

        // Changing projects

        function changeTab(param){
            let project = document.getElementsByClassName('projects')
            let array = param.split("-")

            if(array[1] == '0'){
                project[1].classList.add('d-none');
                project[2].classList.add('d-none');
                project[3].classList.add('d-none');
                project[0].classList.remove('d-none');
            }
            if(array[1] == '1'){
                project[0].classList.add('d-none');
                project[2].classList.add('d-none');
                project[3].classList.add('d-none');
                project[1].classList.remove('d-none');
            }
            if(array[1] == '2'){
                project[0].classList.add('d-none');
                project[1].classList.add('d-none');
                project[3].classList.add('d-none');
                project[2].classList.remove('d-none');
            }
            if(array[1] == '3'){
                project[0].classList.add('d-none');
                project[1].classList.add('d-none');
                project[2].classList.add('d-none');
                project[3].classList.remove('d-none');
            }
            
        }

// menu buttons scrolling on specific sections
        let scrollToAbout = document.querySelector('#aboutme-div')
        let scrollToSkills = document.querySelector('#skillsdiv')
        let scrollToContact = document.querySelector('#contact-div')
        let scrollToProjects = document.querySelector('#projects-div')
        let scrollToHome = document.querySelector('#banner')

        function scrollIn(param){
            if(param == 'aboutme'){
            scrollToAbout.scrollIntoView({behavior:'smooth', block: "end"})
            }
            if(param == 'skills'){
                scrollToSkills.scrollIntoView({behavior:'smooth', block: "end"})
            }
            if(param == 'projects'){
                scrollToProjects.scrollIntoView({behavior:'smooth', block: "start"})
            }
            if(param == 'connectbutton'){
                scrollToContact.scrollIntoView({behavior:'smooth', block: "end"})
           }
           if(param == 'home'){
            scrollToHome.scrollIntoView({behavior:'smooth', block: "end"})
       }
            
        }

        //Random body background

        var backgroundArray = [
            './assets/img/background.jpg',
            './assets/img/background1.jpg',
            './assets/img/background2.jpg'
        ]
        var randomPhoto = backgroundArray[Math.floor(Math.random() * backgroundArray.length)]
        
        document.body.style.backgroundImage = 'url('+randomPhoto+')';


        //redirect to login
        function loginRedirect(){
            window.location.href = 'dashboard.php'
        }

